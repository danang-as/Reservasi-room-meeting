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
    @vite('resources/css/app.css')

</head>
<body>
<div class="w-[430px] h-[932px] relative bg-blue-950">
    <img class="w-[50px] h-[47.06px] left-[20px] top-[30px] absolute" src="./img/logo_pos.png" />
    <!-- Dropdown button -->
    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="w-[60px] h-[47px] left-[340px] top-[30px] inline-flex items-center px-5 p-2 text-sm font-medium text-center text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600 rounded-bl-[20px] absolute" type="button">
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
    <div class="left-[17px] top-[112px] absolute text-white text-[40px] font-normal font-['Inter']">History</div>
    <div class="w-[379px] h-[690px] left-[20px] top-[180px] absolute bg-zinc-300"></div>
    
    
    <div class="w-[30px] h-[30px] left-[30px] top-[190px] text-white text-center rounded-bl-[15px] absolute bg-orange-700">1</div>
    <div class="relative overflow-x-auto shadow-md   w-[360px] h-[560px] left-[30px] top-[231px] absolute bg-zinc-300">
                    <table
                      class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                          <th>No</th>
                          <th>Kode Booking</th>
                          <th>Nama</th>
                          <th>Ruang</th>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = $reservasi->firstItem() ?>
                      @foreach($reservasi as $row)
                          <tr>
                              <td>{{$i}}</td>
                              <td>{{$row->kode_booking}}</td>
                              <td>{{$row->nama_penanggung_jawab}}</td>
                              <td>{{$row->nama_ruangan}}</td>
                              <td>{{$row->tanggal}}</td>
                              <td>{{$row->waktu_mulai}}-  {{$row->waktu_selesai}}</td>
                              <td>{{$row->status}}</td>
                 
                          </tr>
                          <?php $i++ ?>
                      @endforeach
                       
                    </tbody>
                    </table>
</div>
        <button type="submit" onclick="window.location='{{ url('home') }}'" class="w-20 h-10 left-[32px] top-[805px] text-white absolute rounded-bl-[15px] bg-blue-950">Back</button>
</div>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>