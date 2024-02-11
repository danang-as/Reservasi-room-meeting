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
              <a href="{{url('reservasi')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reservasi</a>
            </li>
            <li>
              <a href="{{url('reschedule')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reschedule</a>
             </li>
            <li>
              <a href="{{url('login_user')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                       </li>
          </ul>
      </div>

      <div class="w-[378px] h-[760px] left-[18px] top-[140px] rounded-bl-[20px] absolute bg-zinc-300"></div>

      <div class="left-[17px] top-[80px] absolute text-white text-[40px] font-normal font-['Inter']">Reschedule</div>

      <div class="w-[30px] h-[30px] left-[30px] top-[150px] text-white text-center absolute rounded-bl-[20px] absolute bg-orange-700">1</div>

      <!-- Kode Booking -->
      <div class="left-[30px] top-[185px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Kode booking :</div>
      <select class="w-[350px] h-[30px] left-[30px] top-[205px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="kode_booking" id="kode_booking">
        <option hidden>>>kode_booking<<</option>
        @foreach ($reservasi as $item)
        <option value="{{ $item->kode_booking }}">{{ $item->kode_booking }}</option>
        @endforeach
      </select>
      

      <!-- Pilih ruangan -->
      <div class="left-[30px] top-[240px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Pilih ruangan :</div>
      <select class="w-[350px] h-[30px] left-[30px] top-[260px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="nama_ruangan" id="nama_ruangan">
        <option hidden>>>Pilih Ruangan<<</option>
        @foreach ($data_ruangan as $item)
        <option value="{{ $item->nama_ruangan }}">{{ $item->nama_ruangan }}</option>
        @endforeach
      </select>

      <!-- Tanggal -->
      <div class="left-[30px] top-[295px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Tanggal :</div>
      <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
          </svg>
        </div>
        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-[135px] h-[30px] left-[30px] top-[315px] rounded-bl-[15px] absolute" name="tanggal" id="tanggal" placeholder="Select date">
      </div>
      </div>

    <!-- waktu mulai -->
    <div class="left-[188px] top-[295px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Waktu Mulai :</div>
    <select class="w-[85px] h-[30px] left-[188px] top-[315px] text-gray-100 px-2 p-1  rounded-bl-[15px] absolute bg-stone-500" name="waktu_mulai" id="waktu_mulai">
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
    <div class="left-[293px] top-[295px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Waktu Selesai :</div>
    <select class="w-[85px] h-[30px] left-[293px] top-[315px] text-gray-100 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500" name="waktu_selesai" id="waktu_selesai">
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

    <!-- kegiatan -->
    <div class="left-[30px] top-[350px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Kegiatan :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[370px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="kegiatan" id="kegiatan" required>

    <!-- Jumlah peserta -->
    <div class="left-[30px] top-[405px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Jumlah peserta :</div>
    <input class="w-40 h-[30px] left-[30px] top-[425px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="jumlah_peserta" id="jumlah_peserta" type="number" required>

    <!-- Jumlah panitia -->
    <div class="left-[218px] top-[405px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Jumlah panitia :</div>
    <input class="w-40 h-[30px] left-[218px] top-[425px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="jumlah_panitia" id="jumlah_panitia" type="number" required>

    <div class="w-[30px] h-[30px] left-[30px] top-[470px] text-white text-center absolute rounded-bl-[20px] absolute bg-orange-700">2</div>
    
    <!-- Nama penanggung jawab -->
    <div class="left-[30px] top-[505px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Nama penanggung jawab :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[525px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="nama_penanggung_jawab" id="nama_penanggung_jawab" required>

    <!-- Direktorat -->
    <div class="left-[30px] top-[560px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Direktorat :</div>
    <select class="w-[350px] h-[30px] left-[30px] top-[580px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="direktorat" id="direktorat">
      <option hidden>>>Pilih Direktorat<<</option>
        @foreach ($data_direktorat as $item)
      <option value="{{ $item->nama_direktorat }}">{{ $item->nama_direktorat }}</option>
        @endforeach
    </select>

    <!-- Divisi -->
    <div class="left-[30px] top-[615px] absolute text-black text-[10px] text-black text-sm font-normal font-['Inter']">Divisi :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[635px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="divisi" id="divisi">

    <!-- Bagian -->
    <div class="left-[30px] top-[670px] absolute text-black text-[10px] text-black text-sm font-normal font-['Inter']">Bagian :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[690px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="bagian" id="bagian">

    <!-- Kebutuhan/pendukung --> 
    <div class="left-[30px] top-[725px] absolute text-black text-sm text-[10px] font-normal font-['Inter']">Kebutuhan :</div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Videotron" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[30px] top-[745px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[745px] absolute text-black text-sm font-normal font-['Inter']">Videotron</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Sound system" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[30px] top-[775px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[775px] absolute text-black text-sm font-normal font-['Inter']">Sound system</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Online Meeting" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[30px] top-[805px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[805px] absolute text-black text-sm font-normal font-['Inter']">Online Meeting</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Photography" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[745px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[745px] absolute text-black text-sm font-normal font-['Inter']">Photography</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Videography" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[775px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[775px] absolute text-black text-sm font-normal font-['Inter']">Videography</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Snack" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[805px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[805px] absolute text-black text-sm font-normal font-['Inter']">Snack</label>
    </div>

    <!-- Status --> 
    <div id="status" name="status" value="tidak tersedia"></div>

    <!-- Button -->
    <button type="submit" onclick="window.location='{{ url('home') }}'" class="w-20 h-10 left-[30px] top-[840px] text-white absolute rounded-bl-[30px] bg-blue-950">Back</button>
    <button type="submit" name="submit" class="w-20 h-10 left-[298px] top-[840px] text-white absolute rounded-br-[30px] bg-blue-950">Kirim</button>
</div>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
</body>
</html>