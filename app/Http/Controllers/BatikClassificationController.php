<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BatikClassificationController extends Controller
{
    private $flaskApiUrl;

    public function __construct()
    {
        $this->flaskApiUrl = env('FLASK_API_URL', 'http://localhost:5000');
    }

    public function index()
    {
        return view('batik-classification');
    }

    public function classify(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
            ]);

            $response = Http::timeout(30)->attach(
                'image',
                file_get_contents($request->file('image')->getRealPath()),
                $request->file('image')->getClientOriginalName()
            )->post($this->flaskApiUrl . '/api/upload');

            return $this->handleApiResponse($response);

        } catch (\Exception $e) {
            Log::error('Classification error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'An error occurred during classification',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    public function scan(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|string', // base64 encoded image
            ]);

            $response = Http::timeout(30)->post($this->flaskApiUrl . '/api/scan', [
                'image' => $request->image,
            ]);

            return $this->handleApiResponse($response);

        } catch (\Exception $e) {
            Log::error('Scan error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'An error occurred during scanning',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

    private function handleApiResponse($response)
    {
        try {
            if ($response->successful()) {
                $data = $response->json();

                // Format confidence percentages consistently
                if (isset($data['predictions'])) {
                    foreach ($data['predictions'] as &$prediction) {
                        if (isset($prediction['confidence'])) {
                            // Handle both float and string cases
                            $confidence = $prediction['confidence'];
                            if (is_numeric($confidence)) {
                                $prediction['confidence'] = number_format((float)$confidence, 2) . '%';
                            }
                        }
                    }
                }

                return response()->json([
                    'success' => true,
                    'data' => $data,
                ]);
            }

            $errorDetails = $response->json() ?? $response->body();

            return response()->json([
                'success' => false,
                'error' => 'API request failed',
                'details' => $errorDetails,
            ], $response->status());

        } catch (\Exception $e) {
            Log::error('Response handling error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Error processing API response',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
