@extends('layouts.app')

@section('title')
    <title>Pokemart - Pokemon</title>
@endsection

@section('content')
    <!DOCTYPE html>
    <html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>



    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="{{URL::TO('/logo/1.jpg')}}" alt="House" width ="400" height="250">
                        <div class="w3-display-bottomleft w3-container w3-text-black">

                        </div>
                    </div>
                    <div class="w3-container">
                        <p></p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Jl.Dewantara 2 No.43 Tanjung Duren Jakarta Barat</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0812487542</p>
                        <hr>



                        <p>Kebersihan</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                <div class="w3-center w3-text-white">80%</div>
                            </div>
                        </div>
                        <p>Keamanan</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                        </div>
                        <p>Kenyamanan</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
                        </div>
                        <br>


                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-home fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Kosan Sasuke</h2>

                    <div class="w3-container">

                        <p>Kosan nyaman dan siap huni, fasilitas lengkap. Tersedia Ac, Internet, Listrik(token), Free Laundry. Kamar Mandi dalam water heater</p><br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">

                    <div class="w3-container">


                    </div>
                    <div class="w3-container">
                        <h1>Rp 1.500.000/Bulan</h1>
                        <h6>Kamar Mandi Dalam</h6>
                        <p></p>
                        <h1>Rp 1.200.000/Bulan</h1>
                        <h6>Kamar Mandi Luar</h6>

                        <img src="{{URL::TO('/logo/maps.jpg')}}" alt="House" width ="780" height="400">

                        <p></p><br>
                    </div>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
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