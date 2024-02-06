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
    <img class="w-[50px] h-[47.06px] left-[16px] top-[29px] absolute" src="../img/logo_pos.png" />

    <!-- dropdownButton -->
    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="w-[60px] h-[47px] left-[324px] top-[29px] inline-flex items-center px-5 p-2 text-sm font-medium text-center text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600 rounded-bl-[15px] absolute" type="button">
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

    <div class="w-[378px] h-[720px] left-[18px] top-[180px] rounded-bl-[20px] absolute bg-zinc-300"></div>

    <div class="left-[17px] top-[101px] absolute text-white text-[40px] font-normal font-['Inter']">Reschedule</div>
    
    <!-- Tanggal -->
    <div class="relative max-w-sm">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
    </div>
      <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-[135px] h-[30px] left-[32px] top-[376px] rounded-bl-[15px] absolute " placeholder="Select date">
    </div>
  </div>

    <!-- waktu mulai -->
    <select class="w-[85px] h-[30px] left-[188px] top-[376px] text-gray-100 px-2 p-1  rounded-bl-[15px] absolute bg-stone-500">
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
    </select>

    <!-- waktu selesai -->
    <select class="w-[85px] h-[30px] left-[293px] top-[376px] text-gray-100 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500">
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
    </select>

    <input class="w-[350px] h-[30px] left-[28px] top-[438px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" required>

    <!-- Jumlah peserta dan Panitia -->
    <input class="w-40 h-[30px] left-[28px] top-[500px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" required>
    <input class="w-40 h-[30px] left-[218px] top-[500px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" required>

    <input class="w-[350px] h-[30px] left-[28px] top-[252px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30">
    </input>
    
    <select class="w-[350px] h-[30px] left-[28px] top-[314px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30">
        <option>Ruang Akselerasi</option>
        <option>Ruang Kolaborasi</option>
        <option>Ruang Harmoni</option>
        <option>Ruang Lestari</option>
        <option>Ruang Aspirasi</option>
        <option>Ruang Kreatifitas</option>
        <option>Online Meeting</option>
    </select>
    <input class="w-[350px] h-[30px] left-[28px] top-[602px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" required>
    <select class="w-[350px] h-[30px] left-[28px] top-[664px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30">
        <option>Dir. Bis. Jasa Keuangan</option>
        <option>Dir. Bis. Jasa Kurir & Logistik</option>
        <option>Dir. Operasi & Digital Service</option>
        <option>Dir. Bis Development & Porfolio Management</option>
        <option>Dir. Keuangan & Manajemen Risiko</option>
        <option>Dir. Human Capital Management</option>
        <option>Anak Perusahaan dan Afiliasi</option>
        <option>Non Direktorat</option>
        <option>Regional 1</option>
        <option>Regional 2</option>
        <option>Regional 3</option>
        <option>Regional 4</option>
        <option>Regional 5</option>
        <option>Regional 6</option>
        <option>SPP</option>
    </select>

    <input class="w-[350px] h-[30px] left-[28px] top-[726px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30">
    </input>

    <input class="w-[350px] h-[30px] left-[28px] top-[788px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30">
    </input>
    
    <div class="left-[28px] top-[230px] absolute text-black text-[10px] font-normal font-['Inter']">Kode booking :</div>
    <div class="left-[28px] top-[292px] absolute text-black text-[10px] font-normal font-['Inter']">Pilih ruangan :</div>
    <div class="left-[28px] top-[416px] absolute text-black text-[10px] font-normal font-['Inter']">Kegiatan :</div>
    <div class="left-[28px] top-[478px] absolute text-black text-[10px] font-normal font-['Inter']">Jumlah peserta :</div>
    <div class="left-[28px] top-[580px] absolute text-black text-[10px] font-normal font-['Inter']">Nama penanggung jawab :</div>
    <div class="left-[28px] top-[642px] absolute text-black text-[10px] font-normal font-['Inter']">Direktorat :</div>
    <div class="left-[28px] top-[704px] absolute text-black text-[10px] font-normal font-['Inter']">Divisi :</div>
    <div class="left-[28px] top-[766px] absolute text-black text-[10px] font-normal font-['Inter']">Bagian :</div>
    <div class="left-[218px] top-[478px] absolute text-black text-[10px] font-normal font-['Inter']">Jumlah panitia :</div>
    <div class="left-[28px] top-[354px] absolute text-black text-[10px] font-normal font-['Inter']">Tanggal :</div>
    <div class="left-[188px] top-[354px] absolute text-black text-[10px] font-normal font-['Inter']">Mulai :</div>
    <div class="left-[293px] top-[354px] absolute text-black text-[10px] font-normal font-['Inter']">Selesai :</div>

    <div class="w-[30px] h-[30px] left-[28px] top-[192px] text-white text-center absolute rounded-bl-[20px] absolute bg-orange-700">1</div>
    <div class="w-[30px] h-[30px] left-[28px] top-[540px] text-white text-center absolute rounded-bl-[20px] absolute bg-orange-700">2</div>
    
    <!-- Button -->
    <button type="submit" onclick="window.location='{{ url('home') }}'" class="w-20 h-10 left-[28px] top-[840px] text-white absolute rounded-bl-[30px] bg-blue-950">Back</button>
    <button type="submit" onclick="window.location='{{ url('pendukung_reschedule') }}'" class="w-20 h-10 left-[298px] top-[840px] text-white absolute rounded-br-[30px] bg-blue-950">Next</button>
</div>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
</body>
</html>