@extends('layouts.app')

@section('title', 'Home - Portofolio Ganendra')

@section('content')
    {{-- Wrapper Utama --}}
    <div class="container mx-auto max-w-6xl p-4 sm:p-8">

        <header class="text-center min-h-[60vh] flex flex-col items-center justify-center gradient-bg rounded-xl shadow-2xl shadow-blue-200 p-8 text-white">
            <h1 class="text-4xl sm:text-6xl font-extrabold">
                Ganendra
            </h1>
            <p class="mt-4 text-xl sm:text-2xl font-medium text-indigo-200">
                Blockchain Developer & Web3 Enthusiast
            </p>
            <p class="mt-6 max-w-2xl text-lg text-gray-200">
                Saya merancang dan membangun aplikasi terdesentralisasi untuk masa depan digital yang lebih transparan, aman, dan efisien.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="/project" class="inline-block bg-white/90 hover:bg-white text-blue-700 font-bold py-3 px-8 rounded-lg transition-all text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                    Lihat Portofolio Proyek
                </a>
                <a href="/about" class="inline-block bg-transparent hover:bg-white/20 text-white font-bold py-3 px-8 rounded-lg transition-colors border-2 border-white text-lg">
                    Tentang Saya
                </a>
            </div>
        </header>

        <main>
            <section class="py-16 sm:py-24">
                <h2 class="text-3xl sm:text-4xl font-bold text-center gradient-text">Proyek Unggulan</h2>
                <p class="mt-2 text-center text-gray-500 text-lg">Beberapa karya pilihan yang saya banggakan.</p>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200/50">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-600">SpeedrunETH: Simple NFT</h3>
                            <p class="mt-2 text-gray-600">Membangun smart contract ERC-721 dari dasar, mencakup minting, metadata, dan transfer.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Solidity</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">ERC-721</span>
                            </div>
                            <a href="/project" class="mt-6 inline-block text-blue-600 font-semibold hover:underline">Lihat Detail →</a>
                        </div>
                    </div>

                    <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200/50">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-green-600">Decentralized Staking</h3>
                            <p class="mt-2 text-gray-600">Aplikasi DeFi di mana pengguna bisa mengunci token ERC-20 untuk mendapatkan imbalan.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Solidity</span>
                                <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">DeFi</span>
                            </div>
                            <a href="/project" class="mt-6 inline-block text-green-600 font-semibold hover:underline">Lihat Detail →</a>
                        </div>
                    </div>

                    <div class="card-hover bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200/50">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800">Konsep Rupiah Digital</h3>
                            <p class="mt-2 text-gray-600">Eksplorasi blockchain privat untuk menciptakan sistem keuangan yang transparan dan akuntabel.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Hyperledger Besu</span>
                                <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">QBFT</span>
                            </div>
                            <a href="/project" class="mt-6 inline-block text-gray-700 font-semibold hover:underline">Lihat Detail →</a>
                        </div>
                    </div>

                </div>
            </section>

            <section class="text-center bg-gray-800 text-white rounded-xl shadow-lg p-8 sm:p-12">
                <h2 class="text-3xl sm:text-4xl font-bold">Tertarik untuk Berkolaborasi?</h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-300">
                    Saya selalu antusias untuk mendiskusikan ide-ide baru, proyek yang menantang, atau peluang untuk membangun masa depan Web3 bersama.
                </p>
                <div class="mt-8">
                    <a href="/about" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-all shadow-lg hover:shadow-xl transform hover:scale-105">
                        Mari Terhubung
                    </a>
                </div>
            </section>
        </main>

    </div>
@endsection
