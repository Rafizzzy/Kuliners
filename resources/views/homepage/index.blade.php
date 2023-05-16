@extends('layouts.template')
@section('konten')

<style>
    .slideUp {
        animation-name: slideUp;
        animation-name: slideUp;
        animation-duration: 1s;
        animation-duration: 1s;
        visibility: visible;
    }

    @keyframes slideUp {
        0% {
            opacity: 0;
            transform: translateY(70%);
        }

        100% {
            opacity: 1;
            transform: translateY(0%);
        }
    }

    .hidden {
        visibility: hidden;
    }

    .t-mid {
        color: white;
        font-weight: 600;
        text-decoration: underline #FF99C8;
        text-underline-position: under;
    }

    .t-online {
        color: #FF99C8;
    }

    .d-mid {
        color: white;
        font-weight: 400;
    }

    .t-fitur {
        font-weight: 600;
    }

    .j-fitur {
        font-weight: 700;
        font-size: 32px;
    }

    .card-fitur {
        border: #adadad 0.1 solid;
        border-radius: 20px;
        box-shadow: 0px 0px 4px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        width: 100%;
        margin: auto;
    }

    .card-fitur:hover {
        box-shadow: 0px 0px 4px 6px rgb(255, 153, 200, 0.5);
    }

    .isi-fitur {
        font-weight: 700;
    }

</style>

<script>
    window.onscroll = function () {
        frekomended()
        flainnya()
    };

    function frekomended() {
        if (document.documentElement.scrollTop > 350) {
            document.getElementById("rekomended").className = "slideUp";
        }
    }

    function flainnya() {
        if (document.documentElement.scrollTop > 350) {
            document.getElementById("lainnya").className = "slideUp";
        }
    }

    function rekomen() {
        location.href = "#rekomended";
    }

</script>

<!-- Jumbotron -->
<div class="bg-hero" style="background: url('https://images5.alphacoders.com/346/346109.jpg') no-repeat center;     
        background-size: cover;
        height: 450px;
        width: 100%;
        ">


    <div class="p-4 p-md-5 mb-4">
        <div class="col-md-6 px-0" style="margin-top:125px;">
            <h1 class="display-4 fst-italic">Temukan Makanan <br> Favoritmu</h1>
            <h4 class="my-3">Selamat datang! <strong>{{ Auth::user()->name }}</strong>
            </h4>
        </div>
    </div>


    <div class="container p-5">
        <div class="container text-center animasi mb-4" id="fitur" data-aos="fade-up" data-aos-duration="3000">
            <h5 class="t-fitur">What Do We Have ?</h5>
            <h2 class="j-fitur">- Feature -</h2>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card-fitur p-4 bg-light">
                        <img style="width: 100px; margin: auto;" src="" alt="">
                        <h5 class="mt-3 isi-fitur">Locate</h5>
                        <p>Fitur ini memungkinkan untuk mencari makanan tanpa ribet</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card-fitur p-4 bg-light">
                        <img class="" style="width: 125px; margin: auto;" src="" alt="">
                        <h5 class="mt-3 isi-fitur">Found a New Friend</h5>
                        <p>Fitur ini memungkinkan pengguna untuk curhat secara real time</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card-fitur p-4 bg-light">
                        <img style="width: 100px; margin: auto;" src="" alt="">
                        <h5 class="mt-3 isi-fitur">Find Happiness</h5>
                        <p>Fitur ini memungkinkan pengguna untuk curhat secara real time</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top:px;">
            <h3 class="display-6" data-aos="fade-up" data-aos-duration="1000">Rekomended</h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12 mt-5">
                <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block text-primary">Malang</strong>
                        <h3 class="mb-0">Bakso</h3>
                        <p class="card-text mb-auto">Bakso ini terbuat dari daging sapi yang dicincang halus, tepung
                            tapioka, bawang putih, dan bumbu-bumbu lainnya. Biasanya, bakso Malang disajikan dengan mie,
                            bihun, tahu, jamur, dan kuah kaldu yang gurih. lorem</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">Surabaya</strong>
                        <h3 class="mb-0">Tahu Tek</h3>
                        <p class="card-text mb-auto">Hidangan ini terdiri dari tahu goreng yang disajikan dengan
                            lontong, tauge, telur rebus, dan irisan mentimun. Tahu Tek biasanya disajikan dengan bumbu
                            kacang yang gurih dan pedas serta bawang goreng yang renyah.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-0" data-aos="fade-up" data-aos-duration="1000">
            <h4 class="ms-5 mb-2" style="margin-top:30px;">
                <i class="">Lainnya</i>
            </h4>
            <div class="row">
                <div class="col-3 mt-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="" alt="">
                        </div>
                        <h3 class="card-title text-center">
                            Weci Godok
                        </h3>
                        <div class="d-flex justify-content-center mt-2">
                            <hr class="w-50">
                            <strong class="d-inline-block mb-2 text-success">Surabaya</strong>
                            <hr class="w-50">
                        </div>
                        <div class="card-subtitle p-4 text-center">
                            Weci dengan campuran micin serta saran dari ibu besar , ibu kuat , dan kuat , ayo anak
                            anakku ,
                            jangan males
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
