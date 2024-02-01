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
    <main>
        <section id="main" class="border-b-2">
            <h2 class="text-center text-2xl mt-8">Registrasi Akun SNPMB</h2>
            <div class="flex w-2/3 mx-auto justify-between p-8 px-10 pb-36 gap-10">
                <div class="text-center " style="width: 500px">
                    <img src="{{ asset('img/students.png') }} " class="mx-auto" alt="" srcset="" style="width: 290px">
                    <p class="text-2xl font-medium ">Siswa</p>
                    <p class="mt-3 font-light">Saya adalah siswa yang memiliki NISN</p>
                    <a href="{{ route('siswa') }}"><button class=" mt-4 w-20 h-9 rounded-md border border-2 text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white">Daftar</button></a>
                </div>
                <div class="text-center " style="width: 500px">
                    <img src="{{ asset('img/school.png') }}" class="mx-auto"  alt="" srcset="" style="width: 290px">
                    <p class="text-2xl font-medium ">Sekolah</p>
                    <p class="mt-3 font-light">Saya adalah wakil sekolah yang memiliki NPSN dan kode registrasi Dapodik</p>
                    <a href="#"><button class=" mt-4 w-20 h-9 rounded-md border border-2 text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white">Daftar</button></a>
                </div>
            </div>
        </section>
    </main>
    <footer class="px-64 bg-slate-50 py-3">
        <p>&copy; Sukimumuu, 2024 Januari</p>
    </footer>
</body>
</html>