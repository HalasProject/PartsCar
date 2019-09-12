@extends('layouts.template')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>contact</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">contact</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Google Maps
============================================= -->
<section class="google-maps pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="googleMap" style="width:100%;height:447px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.1652691707995!2d-0.6507112848940865!3d35.68734433724429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e8904d6bd6ad1%3A0x343ae862d3df53cc!2sRue+Gouraa+Saada%2C+Oran!5e1!3m2!1sfr!2sdz!4v1558325438865!5m2!1sfr!2sdz" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .google-maps end -->

<!-- Contact #1
============================================= -->
<section class="contact">
    <div class="container">
        <div class="row">
           
            <!-- .col-md-8 end -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="contct-widget-content">
                    <p class="mb-0">Lorem ipsum dolor sit amet, adipiscing condimentum tristique vel, eleifend sed
                        turpis. Amet, consectetur adipising elit Integer.</p>
                    <div class="widget-contact-info mt-md">
                        <div class="col-xs-12 col-sm-12 col-md-6 pl-0 mb-30-xs mb-30-sm">
                            <h6>Phone :</h6>
                            <p><i class="fa fa-phone"></i>+213 553 65 46 52</p>
                            <p class="mb-0"><i class="fa fa-fax"></i>+213 552 65 47 52</p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <h6>Email :</h6>
                            <p class="mb-0"><i class="fa fa-envelope"></i>contact@luxarycar.com</p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12 pl-0 mt-30 mb-30-xs mb-30-sm">
                            <h6>Address :</h6>
                            <p class="mb-0"><i class="fa fa-map-marker"></i>12 Rue Dar el hayat , Oran , Algéria</p>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>



@endsection