{{--
    resources/views/components/custom-header.blade.php
--}}
<header class="bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex justify-between items-center">
        <!-- Bagian Kiri: Judul Sistem dan Lokasi -->
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Food Inflation Early Warning System</h1>
            <p class="text-sm text-gray-600 mt-1">
                <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                West Sumatra Province
            </p>
        </div>

        <!-- Bagian Kanan: Dropdown, Update Time, Notifikasi, User -->
        <div class="flex items-center space-x-4">
            <!-- Dropdown untuk District -->
            <div>
                <label for="district-select" class="sr-only">Select District</label>
                <select id="district-select" class="fi-ta-input block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option>All Districts</option>
                    <option>District A</option>
                    <option>District B</option>
                    <!-- Tambahkan opsi lainnya -->
                </select>
            </div>

            <!-- Waktu Update Terakhir -->
            <div class="text-sm text-gray-500">
                <span class="font-medium">Last updated:</span> {{ now()->format('F d, Y h:i A') }}
            </div>

            <!-- Ikon Notifikasi dan User Profile akan ditambahkan oleh Filament secara otomatis di sebelah kanan -->
        </div>
    </div>
</header>
