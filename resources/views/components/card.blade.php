@props([
    'title',
    'description',
    'image',
    'position',
    'name',
    'source' => null,  // Menambahkan nilai default null
])

<div class="flex-1 px-3">
    <div class="p-10 rounded border-solid border-gray-200 mb-8 " style="box-shadow: 0 10px 28px rgba(0,0,0,.08)">
        <p class="text-xl font-semibold">
            {{ $title }}
        </p>
        <p>
            {{ $description }}
        </p>
        <div class="flex items-center mt-8">
            <img src="{{ $image }}" class="w-12 h-12 rounded-full" alt="{{ $name }}">
            <div>
                <p>{{ $name }}</p>
                <p class="text-sm text-gray-600">{{ $position }}</p>
                <!-- Menambahkan link sumber hanya jika ada -->
                @if($source)
                    <p class="text-sm text-blue-600">
                        <a href="{{ $source }}" target="_blank" rel="noopener noreferrer">Sumber</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>
