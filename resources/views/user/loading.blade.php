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
<div class="w-[412px] h-[915px] bg-blue-950 flex-col justify-center items-center gap-[135px] inline-flex">
    <img class="w-[412px] h-[260px]" src="../img/background.png" />
    <img class="w-[140px] h-[122px]" src="../img/logo_pos.png" />
    <img class="w-[412px] h-[260px]" src="../img/background1.png" />
</div>
    <!-- <div class="w-[412px] h-[915px] pt-[344px] bg-blue-950 flex-col justify-end items-center gap-[197px] inline-flex">
        <img class="w-[140px] h-[122px]" src="../img/logo_pos.png" />
        <img class="w-[430px] h-[269px]" src="../img/background.png" />
    </div> -->
    <!-- <div class="min-h-screen" style="background-image: linear-gradient(115deg, #1c2d5a, #1c2d5a)">
    <div class="flex flex-col items-center justify-content-center">
        <img class="w-15 h-15 mb-2 rounded-lg shadow-lg mt-80" src="../img/Logo_Pos.png"/>
    </div>
    </div> -->
</body>

<script>
    setTimeout(function() {
        window.location.href = '{{ url('login_user') }}';
    }, 2000); // 3000 milliseconds = 3 seconds
</script>
</html>