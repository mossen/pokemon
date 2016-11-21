@extends('layouts.master')
@section('classes', 'home')
@section('title', 'Home')
@section('main')

    <h2 class="intro-text text-center">Pokemons</h2>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12" id="pokemon-panel">
                    <div class="row">
                        <p>Can you catch them all?</p>
                        @include('home.partials.panel')

                    </div>
                    <hr>
                    @include('home.partials.pokemons')
                </div>
            </div>
        </div>
    </div>

@stop
