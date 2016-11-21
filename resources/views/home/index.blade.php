@extends('layouts.master')
@section('classes', 'home')
@section('title', 'Home')
@section('main')

    <h2 class="intro-text text-center">Pokemons</h2>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <p>Can you catch them all?</p>

                    @include('partials.errors')
                    @include('partials.flash-message')
                    <hr>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                    @include('home.partials.pokemons')
                </div>
            </div>
        </div>
    </div>

@stop
