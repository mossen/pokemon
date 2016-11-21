@extends('layouts.master')
@section('classes', 'home')
@section('title', 'Home')
@section('main')

    <h2 class="intro-text text-center">Assessment Form</h2>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <p>Please insert your URL and submit the form to see the products' list.</p>

                    @include('partials.errors')
                    @include('partials.flash-message')

                    <form name="urlForm" ng-submit="sendForm($event)" role="form" method="POST" action="{{action('ProductController@handel')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="form-group col-lg-12">

                                <div class="alert alert-danger" ng-cloak="(urlForm.url.$error.required && urlForm.url.$touched) || error" ng-show="(urlForm.url.$error.required && urlForm.url.$touched) || error">
                                    <ul>
                                        <li ng-show="(urlForm.url.$error.required && urlForm.url.$touched)">The url field is required.</li>
                                        <li ng-show="error">Either the URL or XML file is corrupted.</li>
                                    </ul>
                                </div>

                                <input ng-model="url" id="url" type="text" name="url" class="form-control" value="{{old('url')}}" required>

                            </div>

                            <div class="form-group col-lg-12">
                                <button ng-disabled="urlForm.$invalid" type="submit" class="btn btn-default border">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>

                @include('home.partials.products')

            </div>
        </div>

    </div>


@stop
