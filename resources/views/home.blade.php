@extends('layouts.navbar')
@section('barra_navegacion')
<br>
<br>
<br>
 <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img type="image/jpg" src="https://pbs.twimg.com/profile_images/1171201523705110539/q85a1XXX_400x400.jpg" class="d-block w-100" alt="Como empecé"
                            width="800px" height="350px">
                            <!--https://pbs.twimg.com/profile_images/1171201523705110539/q85a1XXX_400x400.jpg -->
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrqytySnAj1ONaJNVlzrg50uipUhuSr-s0Kg&usqp=CAU" class="d-block w-100" alt="como voy"
                            width="800px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.pinimg.com/originals/69/d7/45/69d745f469c030dadd0293bd48d36a21.jpg" class="d-block w-100" alt="Como voy a terminar"
                            width="800px" height="350px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden" >Next</span>
                    </button>
                    </div>   
                </div>
            </div>   
        </div>
@endsection