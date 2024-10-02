@extends('layouts.home')

@section('container')
    <div class="bg-white rounded-lg shadow-lg p-10 w-full max-w-4xl">
        <div class="grid grid-cols-2 gap-6">
            <a href="#" class="block p-6 bg-teal-500 rounded-lg hover:bg-gray-700 transition">
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M3 6h18M3 14h18M3 18h18"></path>
                    </svg>
                    <span class="text-xl font-bold text-white">Menu Rekomendasi</span>
                </div>
            </a>
            <a href="#" class="block p-6 bg-teal-500 rounded-lg hover:bg-gray-700 transition">
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2zM10 15c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zM14 9c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM14 15c0 1.104.896 2 2 2s2-.896 2-2-.896-2-2-2-2 .896-2 2zM18 11c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2z">
                        </path>
                    </svg>
                    <span class="text-xl font-bold text-white">Data Saya</span>
                </div>
            </a>
        </div>
    </div>
    <footer class="text-center text-white mt-8">2024, Universitas Alma Ata</footer>
@endsection
