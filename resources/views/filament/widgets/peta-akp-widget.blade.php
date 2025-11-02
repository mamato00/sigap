<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Peta Persebaran Data Pada Aspek Ketersediaan Pangan
        </x-slot>

        <x-slot name="description">
            Berikut adalah persebaran data pada aspek ketersediaan pangan
        </x-slot>

        {{-- Kontainer Gambar --}}
        <div class="relative w-full mb-4" style="padding-bottom: 75%;">
            <div
                class="absolute inset-0 rounded-lg bg-gray-200"
                style="background-image: url('{{ $this->getCurrentImage() }}'); background-size: cover; background-position: center;"
            ></div>
        </div>

        {{-- Area Navigasi dan Deskripsi --}}
        <div class="flex justify-between items-center">
            {{-- Tombol Sebelumnya --}}
            <x-filament::button
                wire:click="previousImage"
                color="gray"
                icon="heroicon-m-arrow-left"
            >
                Sebelumnya
            </x-filament::button>

            {{-- Deskripsi Gambar --}}
            <span class="text-sm text-gray-600 dark:text-gray-400 font-medium">
                {{ $this->getCurrentImageDescription() }}
            </span>

            {{-- Tombol Selanjutnya --}}
            <x-filament::button
                wire:click="nextImage"
                icon="heroicon-m-arrow-right"
                icon-position="after"
            >
                Selanjutnya
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
