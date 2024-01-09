<div class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-4/6 border-gray-400">
    <div>
        <div class="p-5 text-white text-center text-3xl bg-gray-900">
            Livewire <span class="text-green-500">Calcu</span>lator
        </div>
        <div class="pt-16 p-5 pb-0 text-white text-right text-3xl bg-gray-800">
            {{ $calculation }}
        </div>
        <div class="p-5 text-white text-right text-3xl bg-gray-800">
            = <span class="text-green-500">{{ $result }}</span>
        </div>

        <div class="py-5 px-2">
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator-button wire:click="addOperator('%')">%</x-calculator-button>{{-- erro --}}
                <x-calculator-button wire:click="addOperator('(')">(</x-calculator-button>
                <x-calculator-button wire:click="addOperator(')')">)</x-calculator-button>
                <x-calculator-button wire:click="addOperator('/')">÷</x-calculator-button>
            </div>
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator-button wire:click="addNumber(7)">7</x-calculator-button>
                <x-calculator-button wire:click="addNumber(8)">8</x-calculator-button>
                <x-calculator-button wire:click="addNumber(9)">9</x-calculator-button>
                <x-calculator-button wire:click="addOperator('*')">*</x-calculator-button>
            </div>
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator-button wire:click="addNumber(4)">4</x-calculator-button>
                <x-calculator-button wire:click="addNumber(5)">5</x-calculator-button>
                <x-calculator-button wire:click="addNumber(6)">6</x-calculator-button>
                <x-calculator-button wire:click="addOperator('-')">-</x-calculator-button>
            </div>
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator-button wire:click="addNumber(1)">1</x-calculator-button>
                <x-calculator-button wire:click="addNumber(2)">2</x-calculator-button>
                <x-calculator-button wire:click="addNumber(3)">3</x-calculator-button>
                <x-calculator-button wire:click="addOperator('+')">+</x-calculator-button>
            </div>
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator-button wire:click="addNumber(0)">0</x-calculator-button>
                <x-calculator-button wire:click="addDecimalPoint">.</x-calculator-button>
                <x-calculator-button wire:click="clear" bgColor="bg-yellow-600" hoverColor="hover:bg-yellow-500">C</x-calculator-button>
                <x-calculator-button wire:click="calculate" bgColor="bg-green-600" hoverColor="hover:bg-green-500">=</x-calculator-button>
            </div>
        </div>
    </div>
</div>