@extends('layouts.template')


@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>shop cart</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Administration</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop Cart
============================================= -->
<div id="app">

    <section id="shopcart" class="shop shop-cart">
        <div class="container">
            <div class="row">


                <div class="col-xs-12  col-sm-12  col-md-12 " style="margin-top: 15px;">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">

                            <thead>
                                <tr class="cart-product">
                                    <th class="cart-product-item">Marque & Modele</th>
                                    <th class="cart-product-price">Anneé</th>
                                    <th class="cart-product-quantity">Region</th>
                                    <th class="cart-product-total">Pieces</th>
                                    <th class="cart-product-total">Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($commands as $command)
                                <tr class="cart-product">
                                    <td class="cart-product-item">
                                        
                                        <div class="cart-product-name">
                                            <h6 style="cursor:pointer;color:#d22e2e" v-on:click="infome({{$command}})" class="text-center">
                                                {{$command->marque}} | {{$command->modele}}</h6>
                                        </div>
                                    </td>
                                    <td class="cart-product-price">
                                        <h6> {{$command->year}} </h6>
                                    </td>
                                    <td class="cart-product-total">
                                        <h6> {{$command->pays}} / {{$command->ville}}</h6>

                                    </td>
                                    <td class="cart-product-total">
                                        <h6>{{$command->message}}</h6>
                                    </td>
                                    <td class="cart-product-total">
                                        <h6>{{$command->created_at}}</h6>
                                    </td>
                                </tr>
                                @endforeach

                               

                            </tbody>
                        </table>
                        <div class="text-center">
                                {{ $commands->links() }}
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </section>

</div>


@endsection