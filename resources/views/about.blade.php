@extends('layouts.app')

@section('title', 'Tentang Saya - Portofolio')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto max-w-4xl px-4 sm:px-8 text-center">
            <div class="w-32 h-32 bg-white/20 rounded-full mx-auto mb-6 flex items-center justify-center">
                <span class="text-4xl font-bold text-white">[I]</span>
            </div>
            <h1 class="text-4xl sm:text-6xl font-extrabold mb-4">Tentang Saya</h1>
            <p class="text-xl sm:text-2xl font-light opacity-90 max-w-2xl mx-auto">
                Membangun masa depan dengan teknologi blockchain dan Web3
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto max-w-5xl px-4 sm:px-8 -mt-16 relative z-10">

        <!-- Introduction Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-12 mb-8 card-hover">
            <div class="flex items-start space-x-4">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Halo, saya Ganendra.</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Saya adalah seorang pengembang teknologi dengan ketertarikan mendalam pada ekosistem web terdesentralisasi (Web3). Saya bersemangat dalam merancang dan membangun aplikasi di atas teknologi blockchain yang tidak hanya fungsional, tetapi juga membawa nilai transparansi, keamanan, dan efisiensi. Bagi saya, setiap baris kode adalah kesempatan untuk berkontribusi pada masa depan internet yang lebih terbuka.
                    </p>
                </div>
            </div>
        </div>

        <!-- Philosophy Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-12 mb-8 card-hover">
            <div class="flex items-start space-x-4">
                <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Filosofi Saya: Membangun Kepercayaan Melalui Teknologi</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Saya percaya bahwa masalah terbesar di banyak sistem konvensional adalah kurangnya transparansi dan kepercayaan. Teknologi blockchain, dengan sifatnya yang <em>immutable</em> dan terdistribusi, menawarkan solusi fundamental untuk masalah ini. Misi saya adalah menggunakan keahlian saya untuk mengembangkan aplikasi—baik di sektor keuangan (DeFi), aset digital (NFT), maupun sistem privat—yang dapat diaudit, adil, dan dapat diandalkan oleh semua pihak yang terlibat.
                    </p>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-12 mb-8 card-hover">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Keahlian Inti</h2>
                <p class="text-gray-600">Teknologi dan tools yang saya gunakan untuk membangun solusi Web3</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg mb-3">Smart Contract & Blockchain</h3>
                    <div class="text-sm text-gray-600 space-y-2">
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Solidity</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">ERC-20, ERC-721</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Hyperledger Besu</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Konsensus QBFT</div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg mb-3">Tools & Platform</h3>
                    <div class="text-sm text-gray-600 space-y-2">
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Hardhat</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">OpenZeppelin</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Ethers.js</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Git & GitHub</div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 text-center card-hover">
                    <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg mb-3">Konsep Kunci</h3>
                    <div class="text-sm text-gray-600 space-y-2">
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">DeFi (Staking, ICO)</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Non-Fungible Tokens (NFT)</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Arsitektur Desentralisasi</div>
                        <div class="bg-white rounded-md px-3 py-1 inline-block m-1">Blockchain Privat & Publik</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Journey Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-12 mb-8 card-hover">
            <div class="flex items-start space-x-4">
                <div class="w-16 h-16 bg-indigo-100 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Perjalanan Saya di Dunia Web3</h2>

                    <div class="space-y-4">
                        <p class="text-gray-600 leading-relaxed text-lg">
                            Perjalanan saya dimulai dari rasa penasaran terhadap bagaimana Bitcoin dan Ethereum bekerja. Rasa penasaran itu dengan cepat berkembang menjadi hasrat untuk membangun. Saya mendedikasikan waktu untuk belajar secara mandiri melalui berbagai sumber, salah satunya adalah dengan menyelesaikan tantangan dari <strong class="text-blue-600">SpeedrunETH</strong>.
                        </p>

                        <p class="text-gray-600 leading-relaxed text-lg">
                            Melalui platform tersebut, saya mempraktikkan konsep fundamental seperti membuat NFT, merancang mekanisme staking DeFi, hingga membangun sistem token vendor. Saat ini, fokus saya adalah mendalami aplikasi blockchain dalam skala yang lebih besar, termasuk eksplorasi konsep seperti <strong class="text-purple-600">"Rupiah Digital"</strong> pada jaringan privat untuk memecahkan masalah di dunia nyata.
                        </p>
                    </div>

                    <!-- Achievement Highlights -->
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <h4 class="font-semibold text-gray-800">Proyek Terkini</h4>
                            <p class="text-sm text-gray-600 mt-1">Eksplorasi Rupiah Digital pada blockchain privat</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-green-500">
                            <h4 class="font-semibold text-gray-800">Platform Belajar</h4>
                            <p class="text-sm text-gray-600 mt-1">Menyelesaikan tantangan SpeedrunETH</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl shadow-xl p-8 sm:p-12 text-center text-white card-hover">
            <h2 class="text-3xl font-bold mb-4">Mari Terhubung!</h2>
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                Saya selalu terbuka untuk diskusi, kolaborasi, atau sekadar berbagi ide. Mari berkarya bersama membangun masa depan teknologi.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="[Link ke LinkedIn Anda]" target="_blank"
                    class="inline-flex items-center justify-center bg-white text-blue-600 font-bold py-3 px-8 rounded-xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                    </svg>
                    LinkedIn
                </a>
                <a href="[Link ke GitHub Anda]" target="_blank"
                    class="inline-flex items-center justify-center bg-gray-800 text-white font-bold py-3 px-8 rounded-xl hover:bg-gray-900 transition-all transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                    </svg>
                    GitHub
                </a>
                <a href="mailto:[email@anda.com]"
                    class="inline-flex items-center justify-center bg-white/20 text-white font-bold py-3 px-8 rounded-xl hover:bg-white/30 transition-all transform hover:scale-105 border border-white/30">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Email
                </a>
            </div>
        </div>

    </main>
@endsection
