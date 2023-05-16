<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
        @vite(['resources/sass/welcome.scss'])

</head>

<!-- <body>
    <style>
        body {
            width: 100%;
            height: 100vh;
            /* background: linear-gradient(to right,
                    pink 0%,
                    pink 50%,
                    paleturquoise 50%,
                    paleturquoise 100%); */
        }

        img {
            margin-top: 75px;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <img src="johnny_automatic_plate_of_food.svg" alt="" class="w-25">
                </div>
                <div class="text-center mt-3 p-3">
                    <strong>
                        <h2>Kuliners</h2>
                    </strong>
                    <h6>Cari kulinermu puaskan perutmu</h6>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="/login" class="btn btn-outline-dark rounded rounded-4 border border-2 border-dark w-50"><strong>Cari Kuliner !</strong></a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body> -->

<body style="background-color: rgb(255, 170, 0);">

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-center">
                KULINERS
            </h1>
            <p class="text-center">
                Eating , Makan , and Dhahar
            </p>
            <a href="/login"><button class="btn btn-warning w-100 mt-3"><i><strong>GET STARTED</strong></i></button></a>
        </div>
        <div class="col-6">
            <img src="{{ asset('images/welcome.svg') }}" style=""/>
        </div>
    </div>
</div>
<!-- <img src="{{ asset('images/welcome.svg') }}" style=""/>

        <div class="container">
            <h1>
                KULINERS
            </h1>
            <p>
                Eating , Makan , and Dhahar
            </p>
        </div> -->
</body>

</html>
