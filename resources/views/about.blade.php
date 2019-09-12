@extends('layouts.template')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>A PROPOS</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">A PROPOS</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Featured #1
============================================= -->
<section id="featured1" class="featured featured-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading">
                    <p class="subheading">L'HISTOIRE</p>
                    <h2>L'ENTREPRISE</h2>
                </div>
                <!-- .heading end -->
                <div class="about-accordion">
                    <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

                        <!-- Panel 01 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" role="button" data-toggle="collapse"
                                        data-parent="#accordion02" href="#collapse02-1" aria-expanded="true"
                                        aria-controls="collapse02-1">À PROPOS DE LA SOCIÉTÉ </a>
                                    <span class="icon"></span>
                                </h4>
                            </div>
                            <div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne" aria-expanded="false">
                                <div class="panel-body">
                                    <div class="pull-left pr-30">
                                        <img src="assets/images/shortcode/2.jpg" alt="about">
                                    </div>
                                    <div> Duis dapibus aliquam mi, Curabitur vitae velit in neque dictum blansadit. Duis
                                        dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod
                                        scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque
                                        dictum blandit. Duis dapibus aliqiuam mi, egeet euismod sceler ut. </div>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 02 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion02" href="#collapse02-2" aria-expanded="false"
                                        aria-controls="collapse02-2"> Notre Mission </a>
                                </h4>
                            </div>
                            <div id="collapse02-2" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo" aria-expanded="false">
                                <div class="panel-body"> Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus
                                    at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis
                                    dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod
                                    scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque dictum
                                    blandit. Duis dapibus aliqiuam mi, egeet euismod sceler ut.
                                    Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna
                                    adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis dapibus aliquam
                                    mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod scelseerisque at
                                    elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. egeet
                                    euismod sceler ut. </div>
                            </div>
                        </div>

                        <!-- Panel 03 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion02" href="#collapse02-3" aria-expanded="false"
                                        aria-controls="collapse02-3">Notre Vision</a>
                                </h4>
                            </div>
                            <div id="collapse02-3" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree" aria-expanded="true">
                                <div class="panel-body"> Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus
                                    at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis
                                    dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod
                                    scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque dictum
                                    blandit. Duis dapibus aliqiuam mi, egeet euismod sceler ut.
                                    Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna
                                    adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis dapibus aliquam
                                    mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod scelseerisque at
                                    elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. egeet
                                    euismod sceler ut. </div>
                            </div>
                        </div>

                        <!-- Panel 04 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion02" href="#collapse02-4" aria-expanded="false"
                                        aria-controls="collapse02-4"> Nos Buts </a>
                                </h4>
                            </div>
                            <div id="collapse02-4" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree" aria-expanded="true">
                                <div class="panel-body"> Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus
                                    at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis
                                    dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod
                                    scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque dictum
                                    blandit. Duis dapibus aliqiuam mi, egeet euismod sceler ut.
                                    Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna
                                    adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis dapibus aliquam
                                    mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod scelseerisque at
                                    elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. egeet
                                    euismod sceler ut. </div>
                            </div>
                        </div>
                    </div>
                    <!-- .accordion end -->
                </div>
                <!-- .about-accordion end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading">
                    <p class="subheading">We Are Good</p>
                    <h2>NOS CARACTÉRISTIQUES</h2>
                </div>
                <!-- .heading end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature-icon">
                                <i class="icon icon-Time"></i>
                            </div>
                            <h4 class="text-uppercase">Toujours Disponible</h4>
                            <p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...
                            </p>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature-icon">
                                <i class="icon icon-Shield"></i>
                            </div>
                            <h4 class="text-uppercase">Agents Qualifiés</h4>
                            <p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...
                            </p>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel mb-0">
                            <div class="feature-icon">
                                <i class="icon icon-Wallet"></i>
                            </div>
                            <h4 class="text-uppercase">Prix ​​Équitables</h4>
                            <p>you can be 100% sure that it will be delivered right on time, within the set budget
                                limits</p>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel mb-0">
                            <div class="feature-icon">
                                <i class="icon icon-Star"></i>
                            </div>
                            <h4 class="text-uppercase">Meilleures Offres</h4>
                            <p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #featured1 end -->

<!--  Testimonials
============================================= -->
<section id="testimonials" class="testimonial  bg-gray">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="subheading">LES GENS DISENT</p>
                <h2>TÉMOIGNAGES</h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash,
                    Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="#">Check All talks</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-oc" class="testimonial-carousel">

                    <!-- testimonial item #1 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/1.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Begha</h6>
                                <p>UI Designer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #2 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/2.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Omar Elnagar</h6>
                                <p>Civil Engineer , 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #3 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/3.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Ahmed Abd Alhaleem</h6>
                                <p>Graphic Designer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #4 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/2.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>ayman fikry</h6>
                                <p>web developer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #5 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/3.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>mohamed fikry</h6>
                                <p>web developer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #6 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/2.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Begha</h6>
                                <p>UI Designer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #7 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/2.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Omar Elnagar</h6>
                                <p>Civil Engineer , 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #8 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/3.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>Ahmed Abd Alhaleem</h6>
                                <p>Graphic Designer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <!-- testimonial item #9 -->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum
                                tristique vel, eleifend sed turpis.</p>
                        </div>
                        <div class="testimonial-meta">
                            <img src="assets/images/testimonials/2.jpg" alt="author">
                            <div class="testimonial-bio">
                                <h6>ayman fikry</h6>
                                <p>web developer, 7oroof Agency</p>
                            </div>
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #testimonials end -->

<!-- Clients
============================================= -->
<section id="clients" class="clients">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="subheading">Ils nous font confiance</p>
                <h2>Nos Clients</h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash,
                    Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="#">Vérifier tous les clients</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
    <div class="container">
        <div class="clients-bg">
            <div class="row">
                <!-- Client #1 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/1.png" alt="client">
                </div>
                <!-- .col-md-2 end -->

                <!-- Client #2 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/2.png" alt="client">
                </div>
                <!-- .col-md-2 end -->

                <!-- Client #3 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/3.png" alt="client">
                </div>
                <!-- .col-md-2 end -->

                <!-- Client #4 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/4.png" alt="client">
                </div>
                <!-- .col-md-2 end -->

                <!-- Client #5 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/5.png" alt="client">
                </div>
                <!-- .col-md-2 end -->

                <!-- Client #6 -->
                <div class="col-xs-12 col-sm-6 col-md-2 client">
                    <img src="assets/images/clients/6.png" alt="client">
                </div>
                <!-- .col-md-2 end -->
            </div>
            <!-- .row end -->
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #clients end -->


@endsection