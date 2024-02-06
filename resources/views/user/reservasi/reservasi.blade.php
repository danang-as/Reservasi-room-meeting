<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <form action="{{url('reservasi')}}" method="post">
        @csrf
        
      <div class="w-[412px] h-[915px] relative bg-blue-950">
      <div class="w-[378px] h-[750px] left-[21px] top-[150px] rounded-bl-[30px] absolute bg-zinc-300"></div>
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

      <img class="w-[49px] h-11 left-[21px] top-[30px] absolute" src="../img/logo_pos.png" />

      <div class="left-[21px] top-[90px] absolute text-white text-[40px] font-normal font-['Inter']">Reservasi</div>

      <div class="w-[30px] h-[30px] left-[30px] top-[190px] text-white text-center absolute rounded-bl-[20px] bg-orange-700">1</div>

      <!-- Pilih Ruangan -->
      <div class="left-[30px] top-[230px] absolute text-black text-[10px] font-normal font-['Inter']">Pilih ruangan :</div>
      <select class="w-[350px] h-[30px] left-[30px] top-[250px] absolute bg-stone-500 text-gray-800 px-2 p-1 rounded-bl-[15px] bg-opacity-30" name="nama_ruangan" id="nama_ruangan" >
        <option hidden>>>Pilih Ruangan<<</option>
        @foreach ($data_ruangan as $item)
        <option value="{{ $item->nama_ruangan }}">{{ $item->nama_ruangan }}</option>
        @endforeach
      </select>

      <div class="left-[30px] top-[288px] absolute text-black text-[10px] font-normal font-['Inter']">Tanggal mulai</div>
      <!-- Tanggal -->
      <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
          </svg>
        </div>
        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 w-[138px] h-[30px] left-[32px] top-[310px] rounded-bl-[15px] absolute " name="tanggal" id="tanggal" placeholder="Select date" required>
     </div>

     <!-- waktu mulai -->
     <div class="left-[196px] top-[288px] absolute text-black text-[10px] font-normal font-['Inter']">Mulai</div>
     <select class="w-[85px] h-[30px] left-[195px] top-[311px] text-gray-100 px-2 p-1  rounded-bl-[15px] absolute bg-stone-500" name="waktu_mulai" id="waktu_mulai" required>
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
    <div class="left-[295px] top-[288px] absolute text-black text-[10px] font-normal font-['Inter']">Selesai</div>
    <select class="w-[85px] h-[30px] left-[295px] top-[310px] text-gray-100 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500" name="waktu_selesai" id="waktu_selesai" required>
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

    <!-- Kegiatan -->
    <div class="left-[32px] top-[350px] absolute text-black text-[10px] font-normal font-['Inter']">Kegiatan :</div>
    <input class="w-[350px] h-[30px] left-[32px] top-[372px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" value="" name="kegiatan" id="kegiatan" required>

    <!-- Jumlah peserta -->
    <div class="left-[30px] top-[410px] absolute text-black text-[10px] font-normal font-['Inter']">Jumlah peserta :</div>
    <input class="w-40 h-[30px] left-[32px] top-[432px] text-gray-800 px-2 p-1  rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" value="" name="jumlah_peserta" id="jumlah_peserta" type="number" required>

    <!-- Jumlah peserta -->
    <div class="left-[220px] top-[410px] absolute text-black text-[10px] font-normal font-['Inter']">Jumlah panitia :</div>
    <input class="w-40 h-[30px] left-[222px] top-[432px] text-gray-800 px-2 p-1  rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="jumlah_panitia" id="jumlah_panitia" type="number" required>

    <div class="w-[30px] h-[30px] left-[30px] top-[472px] text-white text-center absolute rounded-bl-[20px] bg-orange-700">2</div>

    <!-- Nama penanggung jawab -->
    <div class="left-[32px] top-[512px] absolute text-black text-[10px] font-normal font-['Inter']">Nama penanggung jawab :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[532px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" value="" name="nama_penanggung_jawab" id="nama_penanggung_jawab" required>
      
    <!-- Direktorat -->
    <div class="left-[32px] top-[568px] absolute text-black text-[10px] font-normal font-['Inter']">Direktorat :</div>
    <select class="w-[350px] h-[30px] left-[30px] top-[590px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" name="direktorat" id="direktorat" >
      <option hidden>>>Pilih Direktorat<<</option>
        @foreach ($data_direktorat as $item)
        <option value="{{ $item->nama_direktorat }}">{{ $item->nama_direktorat }}</option>
        @endforeach
    </select>

    <!-- Divisi -->
    <div class="left-[32px] top-[630px] absolute text-black text-[10px] font-normal font-['Inter']">Divisi :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[648px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" value="" name="divisi" id="divisi" required>

    <!-- Bagian -->
    <div class="left-[30px] top-[686px] absolute text-black text-[10px] font-normal font-['Inter']">Bagian :</div>
    <input class="w-[350px] h-[30px] left-[30px] top-[706px] text-gray-800 px-2 p-1 rounded-bl-[15px] absolute bg-stone-500 bg-opacity-30" value="" name="bagian" id="bagian" required>
      
    <!-- Kebutuhan/pendukung --> 
    <div class="left-[30px] top-[745px] absolute text-black text-[10px] font-normal font-['Inter']">Kebutuhan :</div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Videotron" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[35px] top-[765px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[765px] absolute text-black text-sm font-normal font-['Inter']">Videotron</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Sound system" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[35px] top-[790px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[790px] absolute text-black text-sm font-normal font-['Inter']">Sound system</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Online Meeting" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[35px] top-[815px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[60px] top-[815px] absolute text-black text-sm font-normal font-['Inter']">Online Meeting</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Photography" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[765px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[765px] absolute text-black text-sm font-normal font-['Inter']">Photography</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Videography" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[790px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[790px] absolute text-black text-sm font-normal font-['Inter']">Videography</label>
    </div>
    <div class="flex items-center">
      <input id="pendukung" type="checkbox" name="pendukung" value="Snack" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-bl-[10px] focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-100 dark:border-gray-800 left-[195px] top-[815px] absolute text-black text-sm font-normal font-['Inter']">
      <label for="pendukung" class=" left-[225px] top-[815px] absolute text-black text-sm font-normal font-['Inter']">Snack</label>
    </div>

    <!-- Status --> 
    <div id="status" name="status" value="tidak tersedia"></div>
    
      <button type="submit" onclick="window.location='{{ url('home') }}'" class="w-20 h-10 left-[32px] top-[850px] text-white absolute rounded-bl-[30px] bg-blue-950">Back</button>
      <button type="submit" name="submit" class="w-20 h-10 left-[300px] top-[850px] text-white absolute rounded-br-[30px] bg-blue-950">Kirim</button>
    </div>
      <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
      {{-- <script>
        $(document).ready(function() {
            $('#tanggal').change(function() {
                var tanggal = $(this).val();
                var waktu_mulai = $('#waktu_mulai').val();
                var waktu_selesai = $('#waktu_selesai').val();
        
                $.ajax({
                    url: "{{ route('reservasi.getAvailableTime') }}",
                    method: 'POST',
                    data: {
                        tanggal: tanggal,
                        waktu_mulai: waktu_mulai,
                        waktu_selesai: waktu_selesai,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var reservasi = response.reservasi;
                        var pendukung = response.pendukung;
        
                        if (reservasi.length > 0) {
                            // Tampilkan pesan ketersediaan waktu
                            alert('Waktu ini sudah terpakai: ' + reservasi[0].waktu_mulai + ' - ' + reservasi[0].waktu_selesai);
                        }
        
                        // Atur checkbox pendukung berdasarkan data yang diterima
                        $.each(pendukung, function(index, value) {
                            $('#pendukung_' + index).prop('checked', true);
                        });
                    }
                });
            });
        
            // Atur event onChange untuk checkbox pendukung
            $('input[name^="pendukung"]').change(function() {
                var pendukung = [];
        
                $('input[name^="pendukung"]:checked').each(function() {
                    pendukung.push($(this).val());
                });
        
                $('#pendukung').val(pendukung.join(','));
            });
        });
        </script> --}}
  </form>
      
      <!-- <div class="relative" id="timepicker-inline-12" data-te-input-wrapper-init>
          <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary w-[85px] h-[30px] left-[195px] top-[311px] rounded-bl-[15px] absolute bg-stone-500 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="form2" />
          <label for="form2" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" >Select a time</label>
      </div> -->
      <!-- <div class="w-[85px] h-[30px] left-[195px] top-[311px] rounded-bl-[15px] absolute bg-stone-500"></div>
      <div class="w-[85px] h-[30px] left-[295px] top-[310px] rounded-bl-[15px] absolute bg-stone-500"></div> -->
      
      <!-- <div class="relative" id="timepicker-inline-12" data-te-input-wrapper-init>
          <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary w-[85px] h-[30px] left-[295px] top-[310px] rounded-bl-[15px] absolute bg-stone-500 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="form2" />
          <label for="form2" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" >Select a time</label>
      </div> -->

        

      <!-- Button -->
      

  {{-- <div class="content w-[412px] absolute top-0 left-0 bg-blue-950">
    <img class="w-[49px] h-11 left-[21px] top-[30px] absolute" src="../img/logo_pos.png" />
    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="w-[60px] h-[47px] left-[324px] top-[29px] inline-flex items-center px-5 p-2 text-sm font-medium text-center text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600 rounded-bl-[15px] absolute" type="button">
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
      </svg>
    </button>
     <!-- Dropdown menu -->
    <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 relative r-[60px] dark:bg-gray-700 dark:divide-gray-600">
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
    <div class="header relative left-[21px]  top-[90px]  text-black text-[40px] font-normal font-['Inter']"> Reservasi</div>
    <div class="content w-[378px] relative left-[21px] top-[150px] bg-zinc-300">
      <div class="form-group ">
        <div class="sticky top-0 w-[30px] h-[30px] text-white text-center rounded-bl-[45%] bg-orange-700">1</div>
        <div >
          <div>
            <strong>Andrew Alfred</strong>
          </div>
        <div>
          <strong></strong>
        </div>
        <!-- ... -->
      </div>
    </div>
      <div>
        <div class="sticky top-0 w-[30px] h-[30px]  text-white text-center rounded-bl-[45%] bg-orange-700">2</div>
          <div>
            <div>
            <strong>Bob Alfred</strong>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div> --}}
  </body>
  
    
</html>
