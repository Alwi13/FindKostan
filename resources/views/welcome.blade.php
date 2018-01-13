@extends('layouts.app')

@section('title')
    <title>Pokemart</title>
@endsection

@section('content')
    <!DOCTYPE html>
    <html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>



    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img src="{{URL::TO('/logo/home.jpg')}}" width="1500" height="800   " class="d-inline-block align-top" alt="">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Finder</b></span> <span class="w3-hide-small w3-text-light-grey">Kosan</span></h1>
        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Available Kosan</h3>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Sasuke</div>
                    <img src="{{URL::TO('/logo/1.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Dewantara 2 No.43 Tanjung Duren Jakarta Barat</h5>
                    <h6>Rp 1.550.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Pelangi Residence</div>
                    <img src="{{URL::TO('/logo/2.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Kyai Haji Salam No.32 Palmerah Jakarta Barat</h5>
                    <h6>Rp 1.300.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Fresh</div>
                    <img src="{{URL::TO('/logo/3.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Komarudin Rarara  No.72 Blok M Jakarta Pusat</h5>
                    <h6>Rp 1.800.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Mentari</div>
                    <img src="{{URL::TO('/logo/4.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Cecep Kumaha Blok 2 No.163 Jakarta Selatan</h5>
                    <h6>Rp 1.600.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>





        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Sasuke</div>
                    <img src="{{URL::TO('/logo/1.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Dewantara 2 No.43 Tanjung Duren Jakarta Barat</h5>
                    <h6>Rp 1.550.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Pelangi Residence</div>
                    <img src="{{URL::TO('/logo/2.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Kyai Haji Salam No.32 Palmerah Jakarta Barat</h5>
                    <h6>Rp 1.300.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7><li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Fresh</div>
                    <img src="{{URL::TO('/logo/3.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Komarudin Rarara  No.72 Blok M Jakarta Pusat</h5>
                    <h6>Rp 1.800.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7><li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Kosan Mentari</div>
                    <img src="{{URL::TO('/logo/4.jpg')}}" alt="House" width ="350" height="200">
                    <h5>Jl.Cecep Kumaha Blok 2 No.163 Jakarta Selatan</h5>
                    <h6>Rp 1.600.000/Bulan</h6>
                    <h7>Ac, Laundry, Listrik & Internet</h7><li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.pokemon')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true">Details</i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>





        <!-- End page content -->
    </div>

    <!-- Google Map -->
    <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>Finder Kosan</p>
    </footer>


    </body>
    </html>

@endsection