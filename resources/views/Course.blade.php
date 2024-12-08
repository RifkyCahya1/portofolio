@extends('main')

@section('content')

<div class="bg-[#FF8000] w-full">
    <!-- #1 -->
    <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-between">
        <article class="text-white text-pretty leading-loose mb-3 md:w-1/2">
            <h3 class="font-black text-4xl text-balance">Course</h3>
            <p class="font-medium text-xl text-balance">Lisensi dan Sertifikasi</p>
        </article>
        <img class="w-[300px] md:w-[500px] box-border rounded object-cover shadow-lg transform transition-transform duration-300 hover:scale-105" src="./img/Course.png" alt="Course">
    </div>

    <!-- #2 -->
    <div class="bg-white w-full rounded-t-[75px]">
        <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center justify-around gap-8">

            <div class="card bg-white w-full sm:w-[300px] md:w-[350px] h-auto hover:shadow-lg rounded-xl flex flex-col items-center">
                <img src="./img/Dicoding.jpg" class="w-auto h-[200px]" alt="Web Development" />
                <div class="card-body flex flex-col items-center mt-4 p-4">
                    <h2 class="text-pretty text-center text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Belajar Dasar Pemrograman Web</h2>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">Diterbitkan Okt 2024 | Berakhir Okt 2027</p>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">ID Kredensial MRZMYEKD3ZYQ</p>
                    <a href="https://www.dicoding.com/certificates/MRZMYEKD3ZYQ" class="text-[#EEEEEE] mt-3 bg-[#CB0001] rounded-full font-bold text-base px-8 py-1 hover:bg-[#EEEEEE] hover:text-[#CB0001]">See Certificate</a>
                </div>
            </div>

            <div class="card bg-white w-full sm:w-[300px] md:w-[350px] h-auto hover:shadow-lg rounded-xl flex flex-col items-center">
                <img src="./img/Dicoding.jpg" class="w-auto h-[200px]" alt="Web Development" />
                <div class="card-body flex flex-col items-center mt-4 p-4">
                    <h2 class="text-pretty text-center text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Belajar Membuat Front-End Web Untuk Pemula</h2>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">Diterbitkan Nov 2024 | Berakhir Nov 2027</p>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">ID Kredensial 53XEQ399VXRN</p>
                    <a href="https://www.dicoding.com/certificates/53XEQ399VXRN" class="text-[#EEEEEE] mt-3 bg-[#CB0001] rounded-full font-bold text-base px-8 py-1 hover:bg-[#EEEEEE] hover:text-[#CB0001]">See Certificate</a>
                </div>
            </div>

            <div class="card bg-white w-full sm:w-[300px] md:w-[350px] h-auto hover:shadow-lg rounded-xl flex flex-col items-center">
                <img src="./img/Dicoding.jpg" class="w-auto h-[200px]" alt="Web Development" />
                <div class="card-body flex flex-col items-center mt-4 p-4">
                    <h2 class="text-pretty text-center text-lg font-bold text-gray-800 sm:text-xl md:text-2xl">Belajar Dasar Pemrograman Javascript</h2>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">Diterbitkan Nov 2024 | Berakhir Nov 2027</p>
                    <p class="text-gray-500 text-sm sm:text-base mt-2">ID Kredensial 2VX34LKN4ZYQ</p>
                    <a href="https://www.dicoding.com/certificates/2VX34LKN4ZYQ" class="text-[#EEEEEE] mt-3 bg-[#CB0001] rounded-full font-bold text-base px-8 py-1 hover:bg-[#EEEEEE] hover:text-[#CB0001]">See Certificate</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection