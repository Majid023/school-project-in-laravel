@extends('layouts.app')

@section('content')

<!-- img header section -->
<div id="mycarousel-slider" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel-slider" data-slide-to="1"></li>
            <li data-target="#mycarousel-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo"/assets/img/3.jpg";?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo"/assets/img/2.jpg";?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo"/assets/img/3.jpg";?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#mycarousel-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <hr />
    
    <!-- about school -->
    
    <div class="img-fluid justify-content-center p-1" id="hpsad">
        <div class="p-4 col-lg-4 col-md-6 col-sm-12 col-12 offset-lg-4 offset-md-3 bg-white">
            <br>
            <h3>Welcome To abc, school</h3>
            <p> St. abc' School was established in 1864. 
                        It was inaugurated by the then Most Revd. George Edward Cotton- the Bishop of Calcutta on 25th July
                        1864.
                        Almost from its inception, reports show that these were years of stress and struggle.
                        In the first twenty years of its existence the school faced intensive financial difficulties and had
                        to be closed in December 1904.
                        According to reports, there was an upsurge of sentiment on the part of parents, well wishers and old
                        boys at the closure of the school.
                        In 1907, with financial assistance from the Church Education League, the school was reopened.
                        However, again it ran into difficulties and closed in 1918
                        Almost from its inception, reports show that these were years of stress and struggle.
                        In the first twenty years of its existence the school faced intensive financial difficulties and had
                        to be closed in December 1904..
                    </p>
            <a href="/About-Us">Read More <i class='fa fa-arrow-right' aria-hidden="true"></i></a>
            <br>
        </div>
    </div>
    
    <br />
    
    <div class="container-fluid m-auto">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Gallery</h2>
            </div>
            <hr />
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
    
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <a href="/Campus-Pics" class="dbtn btn--style--1">Load more</a>
            </div>
        </div>
    </div>
    
    <br />
    
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <h2 id="sd--heading"> School other Details</h2>
            </div>
            <hr />
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                        <div class="card-body">
                            <h3 class="card-title">abc</h3>
                            <p class="card-text"> .....<a href="">READ MORE <i class="fa fa-arrow-right"
                                        aria-hidden="true"></i>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto ">
                    <div class="card mt-2 shadow--box--1">
                        <img src="<?php echo"/assets/img/1.jpg";?>" alt="" class="img--size--1">
                        <div class="card-body">
                            <h3 class="card-title">abc</h3>
                            <p class="card-text"> .....<a href="">READ MORE <i class="fa fa-arrow-right"
                                        aria-hidden="true"></i>
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-block m-auto text-center">
                    <div class="card mt-2 shadow--box--1">
                        <h3> Latest <span class="event--color"> News </span> </h3>
                        <p>Life in abc' School Commemorative Festschrift <br>
                            -------------- <br>
    
                        </p>
                        <a href="">READ MORE <i class='fa fa-arrow-right' aria-hidden="true"></i></a>
    
                        <hr />
                        <h3>upcoming <span class="event--color"> events </span></h3>
                        <div id="event--board" class="img--size--1">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection