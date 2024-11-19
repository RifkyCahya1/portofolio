@extends('main')

@section('content')

<div class="bg-[#FF8000] w-full">
    <!-- #1 -->
    <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-between">
        <article class="text-white text-pretty leading-loose mb-3 md:w-1/2">
            <h3 class="font-black text-4xl text-balance">About Me</h3>
            <p class="font-medium text-xl text-balance">Sedikit cerita tentang siapa saya dan apa yang saya lakukan saat ini.</p>
        </article>
        <img class="w-[300px] md:w-[500px] box-border rounded object-cover shadow-lg transform transition-transform duration-300 hover:scale-105" src="./img/DSC_9382.JPG" alt="Foto Rifky Cahya Putra">
    </div>

    <!-- #2 -->
    <div class="bg-white w-full rounded-t-[75px]">
        <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-around gap-8">
            <div class="max-w-md mx-auto mt-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./img/Dicoding.jpeg" alt="Gambar Card" class="w-full h-48 sm:h-64 md:h-72 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Judul Card</h2>
                        <p class="text-gray-500 text-sm sm:text-base mt-2">Tanggal: 19 November 2024</p>
                    </div>
                </div>
            </div>

            <div class="max-w-md mx-auto mt-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./img/Dicoding.jpeg" alt="Gambar Card" class="w-full h-48 sm:h-64 md:h-72 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Judul Card</h2>
                        <p class="text-gray-500 text-sm sm:text-base mt-2">Tanggal: 19 November 2024</p>
                    </div>
                </div>
            </div>

            <div class="max-w-md mx-auto mt-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./img/Dicoding.jpeg" alt="Gambar Card" class="w-full h-48 sm:h-64 md:h-72 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Judul Card</h2>
                        <p class="text-gray-500 text-sm sm:text-base mt-2">Tanggal: 19 November 2024</p>
                    </div>
                </div>
            </div>

            <div class="max-w-md mx-auto mt-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="./img/Dicoding.jpeg" alt="Gambar Card" class="w-full h-48 sm:h-64 md:h-72 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Judul Card</h2>
                        <p class="text-gray-500 text-sm sm:text-base mt-2">Tanggal: 19 November 2024</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection