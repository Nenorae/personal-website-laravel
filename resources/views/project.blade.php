@extends('layouts.app')

@section('title', 'Projek Saya - Portofolio')

@section('content')
    {{-- Kontainer Utama --}}
    <div class="container mx-auto max-w-7xl p-4 sm:p-8">

        <header class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-800">Portofolio Projek</h1>
            <p class="mt-2 text-lg text-gray-500">Berikut adalah beberapa karya yang pernah saya kerjakan.</p>
        </header>

        {{-- Grid untuk Kartu Projek - Profesional & Responsif --}}
        {{-- Default 1 kolom, 2 kolom di layar medium, 3 kolom di layar besar --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- --- KARTU PROJEK 1: SPEEDRUNETH NFT --- --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300 flex flex-col">
                {{-- Konten Utama Kartu (dibuat bisa tumbuh) --}}
                <div class="p-6 sm:p-8 flex-grow">
                    <h2 class="text-2xl font-bold text-blue-600">SpeedrunETH: Simple NFT Example</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Projek ini adalah <em>challenge</em> fundamental dari SpeedrunETH untuk membangun dan berinteraksi dengan <em>smart contract</em> Non-Fungible Token (NFT) dari dasar. Fokus utamanya adalah memahami standardisasi <strong>ERC-721</strong>, yaitu standar token yang memastikan setiap aset digital bersifat unik dan tidak dapat dipertukarkan. Dalam <em>challenge</em> ini, saya mempelajari seluruh siklus hidup NFT, mulai dari proses pembuatan (<em>minting</em>), pengelolaan metadata, hingga mekanisme kepemilikan dan transfer antar alamat di jaringan Ethereum.
                    </p>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Pembelajaran & Implementasi Utama:</h3>
                        <ul class="mt-2 list-disc list-inside text-gray-600 space-y-1">
                            <li>Memanfaatkan kontrak <strong>ERC721</strong> dari <em>library</em> OpenZeppelin.</li>
                            <li>Mengimplementasikan fungsi <code>mintItem()</code> untuk membuat token baru.</li>
                            <li>Mengelola <strong>metadata</strong> NFT melalui <code>tokenURI</code>.</li>
                            <li>Memahami mekanisme kepemilikan dan transfer token.</li>
                            <li>Melakukan <em>deployment</em> dan verifikasi ke testnet menggunakan Hardhat.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Teknologi:</h3>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">Solidity</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Hardhat</span>
                            <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">OpenZeppelin</span>
                            <span class="bg-gray-200 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">Ethers.js</span>
                            <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">ERC-721</span>
                        </div>
                    </div>
                </div>
                {{-- Footer Kartu (Tombol) --}}
                <div class="p-6 border-t bg-gray-50">
                    <div class="flex flex-wrap gap-4">
                        <a href="https://sepolia.etherscan.io/address/0xCe45c8EA4fe8049Aa16d458f3C3A9bE1D4d6f4FB#code" target="_blank" class="w-full text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Lihat Transaksi di Testnet
                        </a>
                        <a href="https://nenoblockchain-l5kk43bmd-nenoraes-project.vercel.app/" target="_blank" class="w-full text-center bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Demo APP
                        </a>
                    </div>
                </div>
            </div>
            {{-- --- AKHIR DARI KARTU PROJEK 1 --- --}}

            {{-- --- KARTU PROJEK 2: DECENTRALIZED STAKING --- --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300 flex flex-col">
                {{-- Konten Utama Kartu --}}
                <div class="p-6 sm:p-8 flex-grow">
                    <h2 class="text-2xl font-bold text-green-600">SpeedrunETH: Decentralized Staking</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Projek ini adalah tantangan yang lebih mendalam, berfokus pada konsep inti Keuangan Terdesentralisasi (DeFi), yaitu <strong>staking</strong>. Tujuannya adalah membangun sebuah aplikasi <em>staking</em> terdesentralisasi di mana pengguna dapat mengunci (<em>stake</em>) token ERC-20 mereka ke dalam sebuah <em>smart contract</em> untuk mendapatkan imbalan (<em>rewards</em>) seiring berjalannya waktu. Projek ini mensimulasikan mekanisme <em>yield farming</em> sederhana dan fundamental dalam ekosistem DeFi.
                    </p>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Pembelajaran & Implementasi Utama:</h3>
                        <ul class="mt-2 list-disc list-inside text-gray-600 space-y-1">
                            <li>Membangun dua <em>smart contract</em> yang saling berinteraksi: token <strong>ERC-20</strong> & <strong>Staker</strong>.</li>
                            <li>Mengimplementasikan fungsi <code>stake()</code> dan mencatat saldo serta waktu deposit.</li>
                            <li>Merancang logika untuk menghitung imbalan (<em>rewards</em>) secara dinamis.</li>
                            <li>Membuat fungsi <code>withdraw()</code> untuk menarik kembali token dan imbalan.</li>
                            <li>Memastikan kontrak dapat mengelola saldo token secara internal.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Teknologi:</h3>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">Solidity</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Hardhat</span>
                            <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">OpenZeppelin</span>
                            <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">DeFi</span>
                            <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">ERC-20</span>
                        </div>
                    </div>
                </div>
                {{-- Footer Kartu --}}
                <div class="p-6 border-t bg-gray-50">
                    <div class="flex flex-wrap gap-4">
                        <a href="#" target="_blank" class="w-full text-center bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Lihat Kontrak di Testnet
                        </a>
                        <a href="#" target="_blank" class="w-full text-center bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Source Code (GitHub)
                        </a>
                    </div>
                </div>
            </div>
            {{-- --- AKHIR DARI KARTU PROJEK 2 --- --}}

            {{-- --- KARTU PROJEK 3: TOKEN VENDOR --- --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-transform duration-300 flex flex-col">
                {{-- Konten Utama Kartu --}}
                <div class="p-6 sm:p-8 flex-grow">
                    <h2 class="text-2xl font-bold text-purple-600">SpeedrunETH: Token Vendor</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Projek ini mensimulasikan mekanisme penjualan token otomatis, mirip dengan *Initial Coin Offering* (ICO) sederhana. Tujuannya adalah membangun sepasang <em>smart contract</em>: satu sebagai token <strong>ERC-20</strong> kustom, dan satu lagi sebagai "Mesin Penjual" atau <strong>Vendor</strong>. Pengguna dapat mengirim Ether (ETH) ke kontrak Vendor dan secara otomatis akan menerima token ERC-20 sebagai imbalannya.
                    </p>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Pembelajaran & Implementasi Utama:</h3>
                        <ul class="mt-2 list-disc list-inside text-gray-600 space-y-1">
                            <li>Membuat dan mendeploy kontrak token <strong>ERC-20</strong> sendiri.</li>
                            <li>Mengimplementasikan logika pada kontrak <strong>Vendor</strong> untuk menerima ETH (`payable`).</li>
                            <li>Merancang fungsi `buyTokens()` dan `sellTokens()`.</li>
                            <li>Mengelola kepemilikan dan suplai token untuk dijual.</li>
                            <li>Mengimplementasikan fungsi `withdraw()` yang hanya bisa dipanggil oleh pemilik.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Teknologi:</h3>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">Solidity</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Hardhat</span>
                            <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">OpenZeppelin</span>
                            <span class="bg-pink-100 text-pink-800 text-sm font-medium px-3 py-1 rounded-full">ICO</span>
                            <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">ERC-20</span>
                        </div>
                    </div>
                </div>
                {{-- Footer Kartu --}}
                <div class="p-6 border-t bg-gray-50">
                    <div class="flex flex-wrap gap-4">
                        <a href="#" target="_blank" class="w-full text-center bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Lihat Kontrak di Testnet
                        </a>
                        <a href="#" target="_blank" class="w-full text-center bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                            Source Code (GitHub)
                        </a>
                    </div>
                </div>
            </div>
            {{-- --- AKHIR DARI KARTU PROJEK 3 --- --}}

            {{-- --- KARTU PROJEK 4: RUPIAH DIGITAL (ON-PROGRESS) - Ditempatkan di baris baru jika perlu --}}
            {{-- `lg:col-span-2` bisa digunakan jika ingin kartu ini lebih lebar di layar besar --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border-2 border-dashed border-yellow-400 flex flex-col md:col-span-2 lg:col-span-3">
                {{-- Konten Utama Kartu --}}
                <div class="p-6 sm:p-8 flex-grow">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <h2 class="text-2xl font-bold text-gray-800">Proyek Rupiah Digital (Konseptual)</h2>
                        <span class="bg-yellow-200 text-yellow-800 text-sm font-semibold px-3 py-1 rounded-full">On-Progress</span>
                    </div>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Terinspirasi dari inisiatif Proyek Garuda oleh Bank Indonesia dan didorong oleh keprihatinan terhadap isu transparansi keuangan, proyek ini adalah sebuah <strong>eksplorasi konsep Rupiah Digital</strong>. Tujuannya adalah merancang ekosistem *blockchain* privat yang dapat mencatat setiap transaksi secara transparan dan tidak dapat diubah (<em>immutable</em>), sebagai studi kasus untuk mengurangi potensi korupsi.
                    </p>
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Arsitektur Sistem:</h3>
                            <p class="text-sm text-gray-500 mb-2">Diagram alur kerja konseptual dari ekosistem.</p>
                            <ul class="mt-2 list-disc list-inside text-gray-600 space-y-1">
                                <li><strong>Blockchain Privat:</strong> Hyperledger Besu (QBFT).</li>
                                <li><strong>Qrypta Wallet:</strong> Aplikasi *mobile* sebagai antarmuka pengguna.</li>
                                <li><strong>Qrypscan Explorer:</strong> *Block explorer* kustom untuk transparansi.</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Status & Roadmap:</h3>
                            <ul class="mt-2 text-gray-600 space-y-1">
                                <li><span class="text-green-500">✅</span> Desain Arsitektur & Proof of Concept</li>
                                <li><span class="text-green-500">✅</span> Penulisan Smart Contract Awal (Draft)</li>
                                <li><span class="text-yellow-500">⏳</span> Pengembangan Qrypta Wallet & Integrasi</li>
                                <li><span class="text-yellow-500">⏳</span> Pengembangan Qrypscan Block Explorer</li>
                                <li><span class="text-gray-400">⚪️</span> Uji Coba Jaringan & Simulasi Transaksi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700">Teknologi:</h3>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Hyperledger Besu</span>
                            <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">QBFT</span>
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">Solidity</span>
                            <span class="bg-gray-200 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">Mobile Wallet (Konsep)</span>
                            <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">Block Explorer (Konsep)</span>
                        </div>
                    </div>
                </div>
                {{-- Footer Kartu --}}
                <div class="p-6 border-t bg-gray-50">
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="w-full text-center bg-gray-400 text-white font-bold py-2 px-4 rounded-lg cursor-not-allowed" aria-disabled="true" onclick="event.preventDefault(); alert('Proyek ini masih dalam tahap pengembangan dan belum tersedia untuk publik.');">
                            Live Demo (Coming Soon)
                        </a>
                        <a href="#" class="w-full text-center bg-gray-400 text-white font-bold py-2 px-4 rounded-lg cursor-not-allowed" aria-disabled="true" onclick="event.preventDefault();">
                            Private Repository
                        </a>
                    </div>
                </div>
            </div>
            {{-- --- AKHIR DARI KARTU PROJEK 4 --- --}}

        </div>

    </div>
@endsection