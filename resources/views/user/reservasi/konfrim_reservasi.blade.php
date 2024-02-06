<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi POSiND</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../img/logo_pos.png"
    />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script> 
    @vite('resources/css/app.css')
</head>
<body>

<div class="w-[412px] h-[915px] relative bg-blue-950">
    <img class="w-[50px] h-[47.06px] left-[20px] top-[30px] absolute" src="../img/logo_pos.png" />

    <!-- Dropdown button -->
    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="w-[60px] h-[47px] left-[340px] top-[30px] inline-flex items-center px-5 p-2 text-sm font-medium text-center text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600 rounded-bl-[15px] absolute" type="button">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
          <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
            <li>
              <a href="{{url('reservasi/create')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reservasi</a>
            </li>
            <li>
              <a href="{{url('reschedule')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reschedule</a>
             </li>
            <li>
              <a href="{{url('login_user')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                       </li>
          </ul>
      </div>

    <div class="left-[17px] top-[112px] absolute text-white text-[40px] font-normal font-['Inter']">Reservasi</div>
    <div class="w-[379px] h-[690px] left-[20px] top-[180px] rounded-bl-[30px] absolute bg-zinc-300"></div>

    <div class="w-[30px] h-[30px] left-[30px] top-[190px] text-white text-center absolute rounded-bl-[20px] absolute bg-orange-700">4</div>
    
    <div class="left-[30px] top-[240px] absolute text-black text-sm font-normal font-['Inter']">Komfirmasi Reservasi</div>
    <div class="left-[30px] top-[277px] absolute text-black text-sm font-normal font-['Inter']">Kode booking :</div>
    <div class="left-[30px] top-[314px] absolute text-black text-sm font-normal font-['Inter']">Ruangan   :</div>
    <div class="left-[30px] top-[336px] absolute text-black text-sm font-normal font-['Inter']">Tanggal    :</div>
    <div class="left-[30px] top-[358px] absolute text-black text-sm font-normal font-['Inter']">Kegiatan   :</div>
    <div class="left-[30px] top-[380px] absolute text-black text-sm font-normal font-['Inter']">Pic             :</div>
    <div class="left-[30px] top-[402px] absolute text-black text-sm font-normal font-['Inter']">Dukungan :</div>
    
    <div class="left-[45px] top-[455px] absolute"><span style="text-black text-xs font-normal font-['Inter']">1. Pastikan terlebih dahulu semua data yang <br/></span><span style="text-black text-xs font-normal font-['Inter']">dibutuhkan sudah terisi dengan benar.<br/></span><span style="text-black text-xs font-normal font-['Inter']">2. Apabila mau mengganti jadwal atau<br/></span><span style="text-black text-xs font-normal font-['Inter']">menambah bahan dukungan bisa dilakukan di reschedule.<br/></span><span style="text-black text-xs font-normal font-['Inter']">3. Pemberitahuan apabila sudah diapprove oleh <br/></span><span style="text-black text-xs font-normal font-['Inter']">admin akan dikirim melalui email.</span></div>

    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[30px] top-[650px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[55px] top-[648px] absolute text-black text-sm font-normal font-['Inter']">Telah membaca dan mengerti.</label>
    </div>

    <button type="submit" class="w-20 h-10 left-[300px] top-[790px] text-white absolute rounded-br-[30px]  absolute bg-blue-950">Kirim</button>
    <button type="submit" onclick="window.location='{{ url('pendukung_reservasi') }}'" class="w-20 h-10 left-[32px] top-[790px] text-white absolute rounded-bl-[30px]  absolute bg-blue-950">Back</button>
</div>

<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>