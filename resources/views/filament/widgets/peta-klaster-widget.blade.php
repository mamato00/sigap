<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            Peta Klaster Ketahanan Pangan di Sumatera Barat
        </x-slot>

        <x-slot name="description">
            Berikut adalah peta klaster ketahanan pangan di Sumatera Barat
        </x-slot>

        {{-- Kontainer Gambar --}}
        <div class="relative w-full mb-4" style="padding-bottom: 50%;">
            <div
                class="absolute inset-0 rounded-lg bg-gray-200"
                style="background-image: url('{{ $this->getCurrentImage() }}'); background-size: cover; background-position: center;"
            ></div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
