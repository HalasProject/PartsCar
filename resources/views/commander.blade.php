@extends('layouts.template')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>COMMANDER</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Commander</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->


<!-- Contact #1
============================================= -->
<section id="app" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 widget-contact pl-0 pr-0 p-none-xs p-none-sm">
                    <div class="col-md-12">
                            <p style="margin-left: 15px;">Veuillez bien saisir des information valide afin que nous puission trouver les bonne pièces, et vous contactez le plus vite possible !</p>
                        </div>
                <form v-on:submit.prevent="send()" id="contact-form" action="#" method="post">
                    <div class="col-md-6">
                        <input v-model="nom" type="text" class="form-control mb-30" name="nom" id="name" placeholder="Name :"
                            required />
                    </div>
                    <div class="col-md-6">
                        <input v-model="email" type="email" class="form-control mb-30" name="email" id="email"
                            placeholder="Email :" required />
                    </div>

                    <div class="col-md-4">
                        <input v-model="numero" type="text" class="form-control mb-30" name="numero" id="phone" placeholder="Telephone :"
                            required />
                    </div>
                    <div class="col-md-4">
                        <input v-model="pays" type="text" class="form-control mb-30" name="pays" id="pays" placeholder="Pays :"
                            required />
                    </div>
                    <div class="col-md-4">
                        <input v-model="ville" type="text" class="form-control mb-30" name="ville" id="ville" placeholder="Ville :"
                            required />
                    </div>

                    <div class="col-md-4">
                        <input v-model="marque" type="text" class="form-control mb-30" name="marque" id="marque" placeholder="Marque:"
                            required />
                    </div>
                    <div class="col-md-4">
                        <input v-model="modele" type="text" class="form-control mb-30" name="modele" id="modele" placeholder="Modele:"
                            required />
                    </div>
                    <div class="col-md-4">
                        <input v-model="year" type="number" class="form-control mb-30" name="year" id="year" placeholder="Anneé:"
                            required />
                    </div>
                    <div class="col-md-12">
                        <input v-model="vif" type="text" class="form-control mb-30" name="vif" id="vif" placeholder="Numéro VIF :"
                            required />
                    </div>

                    <div class="col-md-12">
                        <textarea v-model="message" class="form-control mb-30" name="message" id="message" rows="4"
                            placeholder="Citez la pieces rechercher" required></textarea>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" id="submit-message" class="btn btn-primary btn-block">Commander</button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-xs">
                        <!--Alert Message-->
                        <div id="contact-result">
                        
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>



@endsection