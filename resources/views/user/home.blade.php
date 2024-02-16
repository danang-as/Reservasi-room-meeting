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
    @vite('resources/css/app.css')
</head>
<body>
  
<div class="w-[412px] h-[915px] relative bg-white">
    <div class="w-[412px] h-[263px] left-0 top-0 absolute bg-blue-950 rounded-bl-[70px]"></div>
    <img class="w-[37px] h-9 left-[359px] top-[24px] absolute" src="../img/logo_pos.png" />

    <div class="w-[40px] h-[40px] left-[325px] top-[245px] rounded-bl-[20px] absolute bg-orange-600"></div>

    
    <button type="submit" onclick="window.location='{{ url('reservasi') }}'" class="w-[220px] h-[60px] left-[105px] top-[444px] text-white absolute rounded-bl-[30px] rounded-tr-[30px] bg-blue-950">Reservasi</button>
    @foreach($reservasi as $row)
    <a href="{{ url('reservasi/'.$row->id.'/edit')}}" class="w-[220px] h-[60px] left-[105px] top-[590px] text-white rounded-bl-[30px] flex items-center justify-center text-center rounded-tr-[30px] absolute bg-orange-600">Reschedule</a>
    @endforeach
    <button type="submit"  onclick="window.location='{{ url('history') }}'" class="w-[220px] h-[60px] left-[105px] top-[517px] absolute rounded-bl-[30px] text-white rounded-tr-[30px] bg-red-600">History</button>
    
    <div class="left-[19px] top-[309px] absolute text-black text-xl font-normal font-['Vast Shadow']">Hi, Syatiri</div>
    <div class="left-[19px] top-[348px] absolute text-black text-xl font-normal font-['Vast Shadow']">Apa yang anda butuhkan?</div>
    <div class="left-[10px] top-[727px] absolute text-black text-[15px] font-bold font-['Inter']">Catatan :</div>
    <div class="left-[10px] top-[759px] absolute"><span style="text-black text-[15px] font-bold font-['Inter']">1. Reschedule hanya dapat dilakukan maksimal 3 hari <br/></span><span style="text-black text-[15px] font-bold font-['Inter']"> sebelum kegitan.<br/></span><span style="text-black text-[15px] font-bold font-['Inter']">2. Untuk kondisi tertentu harap berkoordinasi langsung<br/></span><span style="text-black text-[15px] font-bold font-['Inter']"> dengan Div. Kesekretariatan.</span></div>
    <img class="w-[139px] h-[156px] left-[60px] top-[60px] absolute" src="../img/user.png" />
    <div class="left-[215px] top-[148px] absolute text-white text-xl font-bold font-['Inter']">Syatiri</div>
    <div class="left-[215px] top-[172px] absolute text-white text-sm font-medium font-['Inter']">Div. Learning Center</div>
    
</div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if($messages = Session::get('success'))
<script>
    Swal.fire({
    icon: "success",
    title: "Mantap",
    text: "Login berhasil bro :v"
    });
</script>
@endif --}}

</body>
</html>