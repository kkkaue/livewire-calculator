@props(['bgColor' => 'bg-gray-900', 'hoverColor' => 'hover:bg-gray-800'])

<button class="flex-1 h-20 w-20 px-2 py-2 mx-1 text-white text-3xl focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-75 {{ $bgColor }} {{ $hoverColor }}" {{ $attributes }}>
  {{ $slot }}
</button>