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
    <nav class="w-full my-3 h-16 shadow-md">
        <ul class="flex w-4/5 mx-auto justify-between">
            <li><img src="{{ asset('img/logo-snpmb.png') }}" alt="" srcset="" class="w-48"></li>
            <li><a href="#"><button class=" mt-2 w-20 h-9 rounded-md border text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white">Masuk</button></a></li>
        </ul>
    </nav>
    <main>
        <section id="main">
            <div class="flex w-full px-40 pb-9 pt-3 justify-between border-b-2">
                <div class="mt-20">
                    <h3 class="font-bold text-5xl">Raih masa depanmu di</h3>
                    <h3 class="font-bold text-5xl mt-4">Portal SNPMB</h3>
                    <p class="mt-4 font-light text-xl">Belum memiliki akun SNPMB? Daftar segera di sini.</p>
                    <a href="{{ route('registration') }}"><button class="w-24 h-9 bg-blue-600 rounded-md mt-3 text-white hover:bg-blue-700">Daftar</button></a>
                </div>
                <img src="{{ asset('img/illustration-landing.png') }}" class="mr-28" alt="" style=" width: 355px">
            </div>
            <div class="flex w-full px-40 pt-12 pb-24 border-b-2">
                <div class="w-4/5">
                    <p class="text-3xl font-semibold">Pengumuman</p>
                    <p class="text-xl font-medium mt-5">Tidak ada pengumuman.</p>
                </div>
                <div class="w-1/5 flex justify-end gap-1">
                    <div class="w-6 h-8 rounded-md border align-middle flex items-stretch border-black hover:bg-black hover:text-white cursor-pointer">
                        <a href="" class="self-center mx-auto"><x-fas-chevron-left class="w-2" /></a>
                    </div>
                    <div class="w-6 h-8 rounded-md border align-middle flex items-stretch border-black hover:bg-black hover:text-white cursor-pointer">
                        <a href="" class="self-center mx-auto"><x-fas-chevron-right class="w-2" /></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="px-40 bg-slate-50 py-3">
        <p>&copy; Sukimumuu, 2024 Januari</p>
    </footer>
</body>
</html>