<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal SNPMB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="w-full py-2 h-14 shadow-md">
        <ul class="flex w-2/3 mx-auto justify-between">
            <li><img src="{{ asset('img/logo-snpmb.png') }}" alt="" srcset="" class="w-40"></li>
            <li><a href="#"><button class="w-20 h-9 rounded-md border border-2 text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white">Masuk</button></a></li>
        </ul>
    </nav>
    <main class="flex-auto">
        <section id="main">
           <div class="flex w-2/3 mx-auto pt-12">
                <div class="w-2/4">
                    <p class="font-semibold text-2xl">Registrasi Akun Siswa</p>
                    <p class="font-light mt-2">Untuk mendapatkan akun siswa di SNPMB, masukkan kombinasi <span class="font-semibold">NISN</span>, <span class="font-semibold">NPSN</span>, dan <span class="font-semibold">tanggal lahir</span>.</p>
                    <p class="font-light mt-3">Untuk siswa <span class="font-semibold">Luar Negeri </span>yang berasal <span class="font-semibold">dari sekolah non SRI (Sekolah Rakyat Indonesia)</span> dapat menggunakan NPSN 69999999</span>.</p>
                
                </div>
                 <div class="w-2/4">
                    <form action="" method="post">
                        <div class="flex flex-col">
                            <label for="">NISN <span class="text-red-600">*</span></label>
                            <input class="h-8 mt-2 border border-gray-300 rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col mt-3">
                            <label for="">NPSN <span class="text-red-600">*</span></label>
                            <input class="h-8 mt-2 border border-gray-300 rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col mt-3">
                            <label for="">Tanggal lahir <span class="text-red-600">*</span></label>
                            <input class="h-8 mt-2 border border-gray-300 rounded-lg" type="text" name="" id="" placeholder="yyyy-mm-dd">
                        </div>
                        <div class="mt-8 flex justify-between">
                            <button class="bg-red-600 rounded-sm text-white text-sm py-1 px-12">< Kembali </button>
                            <button class="bg-blue-600 rounded-sm text-white text-sm py-1 px-12">Selanjutnya ></button>
                        </div>
                    </form>
                </div>
           </div>
        </section>
    </main>
    <footer class="px-64 bg-slate-50 py-3 bottom-0 fixed border-t-2 w-full">
        <p>&copy; Sukimumuu, 2024 Januari</p>
    </footer>
</body>
</html>