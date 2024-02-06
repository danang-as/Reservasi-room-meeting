<!doctype html>
<html lang="en">

<head>
    <title>The Providers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<style>
    

#display_sofa{

position: absolute;
top: 40%;
width: 50%;
}


.display_sofa{
animation-name: ani_display_sofa;
animation-duration: 500ms;
}
@keyframes ani_display_sofa{
from{transform: scale(0.7);}
to{transform: scale(1);}
}
#line{
height: 4px;
width: 300px;
background-color: #513037;
margin-left: 0px;
}
#box{
height: 50px;
width: 150px;
background-color: #513037;
padding-top: 6px;
padding-left: 9px;
cursor: pointer;
}
.description_text{
font-size: 20px;
}

</style>

<body>



    <nav class="navbar navbar-expand-md bg-info">
        <a class="navbar-brand text-white font-weight-bolder ml-5" href="#">
            <h2>Sofa</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse1">&#x2630;</button>
        <div class="collapse navbar-collapse justify-content-around" id="collapse1">
            <span></span>
            <ul class="navbar-nav">
                <li class="nav-item active mx-5">
                    <a class="nav-link text-white " href="#"> <h5>Home</h5></a>
                </li>
                <li class="nav-item active mx-5 ">
                    <a class="nav-link text-white " href="#"><h5>Product</h5></a>
                </li>
                <li class="nav-item active mx-5 ">
                    <a class="nav-link text-white " href="#"><h5>Contact</h5></a>
                </li>
                <li class="nav-item active mx-5">
                    <a class="nav-link text-white" href="#"><h5>About</h5></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="d-md-flex justify-content-center " style="height: 600px;">

        <div class="col-md-6 col-sm-12 col-xs-12 p-0 bg- d-flex justify-content-center flex-wrap align-content-around">
            <div class="mb-5">

                <img class="w-[140px] h-[122px]" src="../img/logo_pos.png" />
                <div class="border border-info p-3 w-100 ">
                    <h1 class="dispaly-3 ml-3">Designs of Future</h1>
                </div>
            </div>


        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 p-0 d-flex ">
            <div class="col-10  p-0  d-flex justify-content-around">
                <img src="https://interwood.pk/media/catalog/49d0b66e32578235461ce6eaf0ea6538/s/o/sofa_kessel_single_seater_in_grey_colour.jpg?auto=webp&format=pjpg&width=840&height=375&fit=cover" class="display_sofa" id="display_sofa">
            </div>
            <div class="col-2 bg-white flex-wrap d-flex align-content-center ">
                <img src="https://images.dfs.co.uk/i/dfs/chico_1a_plaza_graphite_view1?$dfs_v2_pdp_m$&fmt=auto" class="w-75" alt="">
                <img src="https://images.dfs.co.uk/i/dfs/aurora_1a_plaza_graphite_view1?$dfs_v2_pdp_m$&fmt=auto" class="w-75 my-5" alt="">
                <img src="https://images.dfs.co.uk/i/dfs/aurora_1a_condor_stone_view1?$dfs_v2_pdp_m$&fmt=auto" class="w-75" alt="">

            </div>
        </div>
    </div>

    <div class="container bg- p-5  " >

        <div class="row border p-md-5 py-sm-5 my-sm-5  ">
            <div class="col-md-5 col-sm-12 p-5 ">
                <img src="https://interwood.pk/media/catalog/49d0b66e32578235461ce6eaf0ea6538/s/o/sofa_kessel_single_seater_in_grey_colour.jpg?auto=webp&format=pjpg&width=840&height=375&fit=cover" class="w-100" alt="">
            </div>
            <div class="col-md-7 col-sm-12 mb-sm-3 mb-xs-3 pt-sm-1 ">
                <h1 class="display-3 mt-md-5 mt-sm-1 ">SOFA #01</h1>
                <div id="line">

                </div>
                <h2 class="">MODEL : 202009F</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, suscipit?
                    elit. Pariatur, suscipit?</p>

                <div id="box" class="my-3">
                    <h4 class="text-white ">oreder now</h4>
                </div>
            </div>
        </div>


        <div class="row border p-md-5 py-sm-5 my-5 ">
            <div class="col-md-7 col-sm-12 mb-sm-3 mb-xs-3 pt-sm-1 ">
                <h1 class="display-3 mt-md-5 mt-sm-1 ">SOFA #02</h1>
                <div id="line" class="bg-secondary">
                </div>
                <h2 class="">MODEL : 202009F</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, suscipit?
                    elit. Pariatur, suscipit?</p>
                <div id="box" class="bg-secondary border my-3">
                    <h4 class="text-white">oreder now</h4>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 p-5 ">
                <img src="https://images.dfs.co.uk/i/dfs/chico_1a_plaza_graphite_view1?$dfs_v2_pdp_m$&fmt=auto" class="w-100" alt="">
            </div>
        </div>


        <div class="row border p-md-5 py-sm-5 my-sm-5  ">
            <div class="col-md-5 col-sm-12 p-5 ">
                <img src="https://images.dfs.co.uk/i/dfs/aurora_1a_plaza_graphite_view1?$dfs_v2_pdp_m$&fmt=auto" class="w-100" alt="">
            </div>
            <div class="col-md-7 col-sm-12 mb-sm-3 mb-xs-3 pt-sm-1 ">
                <h1 class="display-3 mt-md-5 mt-sm-1 ">SOFA #03</h1>
                <div id="line" style="background-color: #1e3622;">

                </div>
                <h2 class="">MODEL : 202009F</h2>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, suscipit?
                    elit. Pariatur, suscipit?</p>

                <div id="box" class="my-3" style="background-color: #1e3622;">
                    <h4 class="text-white ">oreder now</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-info p-5 ">
        <div class="row d-flex justify-content-center text-white">

            <div class="col-md-3 text-left">
                <h2>Sofa</h2><hr class="bg-white">
                <p>Home</p>
                <p>Product</p>
                <p>About Us</p>
                <p>Contact Us</p>
            </div>
            <div class="col-md-3 ">
                <h2>Services</h2><hr class="bg-white">
                <p>Career</p>
                <p>Affilated program</p>
                <p>Services</p>
                <p>Register</p>
            </div>
            <div class="col-md-3 ">
                <h2>Social Media</h2><hr class="bg-white">
                <p><i class="fas fa-globe mr-2"></i>www.theproviders.com</p>
                <p><i class="fab fa-facebook-square mr-2 "></i>facebook/theproviders</p>
                <p><i class="fab fa-linkedin mr-2"></i>linkedIn/theproviders</p>
                <p><i class="fab fa-youtube mr-2"></i>linkedIn/theproviders</p>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".w-75").click(function () {
                nick1(this);
            })
            $(".w-75").mouseenter(function () {
                nick2();
            })

            function nick1(a) {
                $("#display_sofa").attr("src", $(a).attr("src"));
                $("#display_sofa").addClass("display_sofa");
            }
            function nick2() {
                $("#display_sofa").removeClass("display_sofa");
            }

        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>