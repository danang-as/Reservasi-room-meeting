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

    <div class="left-[20px] top-[112px] absolute text-white text-[40px] font-normal font-['Inter']">Reschedule</div>

    <div class="w-[379px] h-[690px] left-[20px] top-[180px] rounded-bl-[30px] absolute bg-zinc-300"></div>

    <div class="w-[30px] h-[30px] left-[30px] text-white text-center absolute rounded-bl-[20px] top-[190px] absolute bg-orange-700">3</div>

    <div class="left-[30px] top-[240px] absolute text-black text-sm font-normal font-['Inter']">Dukungan yang dibutuhkan :</div>
    
    <!-- Checkbox -->
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[276px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[276px] absolute text-black text-sm font-normal font-['Inter']">Videotron</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[300px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[300px] absolute text-black text-sm font-normal font-['Inter']">Sound system</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[324px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[324px] absolute text-black text-sm font-normal font-['Inter']">Online Meeting</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[348px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[348px] absolute text-black text-sm font-normal font-['Inter']">Photography</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[372px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[372px] absolute text-black text-sm font-normal font-['Inter']">Videography</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[396px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[396px] absolute text-black text-sm font-normal font-['Inter']">Snack</label>
    </div>
    <div class="flex items-center">
      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-900 left-[45px] top-[420px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="default-checkbox" class=" left-[70px] top-[420px] absolute text-black text-sm font-normal font-['Inter']">Lunch box</label>
    </div>

    <div class="left-[30px] top-[467px] absolute text-black text-xs font-normal font-['Inter']">* Pilih sesuai kebutuhan kegitan<br/>* Videotron hanya tersedia diruang ecophila<br/>* Online meeting harap kordinasi dengan div.kesekretariatan</div>
    
    <!-- Tombol next kembali -->
    <button type="submit" onclick="window.location='{{ url('konfrim_reschedule') }}'" class="w-20 h-10 left-[300px] top-[790px] text-white absolute rounded-br-[30px] absolute bg-blue-950">Next</button>
    <button type="submit" onclick="window.location='{{ url('reschedule') }}'" class="w-20 h-10 left-[32px] top-[790px] text-white absolute rounded-bl-[30px] absolute bg-blue-950">Back</button>
</div>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>