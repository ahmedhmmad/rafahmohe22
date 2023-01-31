@extends('layouts.app')
@section('content')
    <div class="container-fluid h-100 text-center mt-5">
        <div class="row align-items-center h-100 ">
            <div class="col-6 mx-auto">
                <div>
                    <div class="mb-5">
                        <img src="{{ asset('images/accessDenied.png') }}" alt="access denied photo" height="150px">
                    </div>
                    <hr class="" style="margin:auto;width:50%">
                    <div class="mb-5">
                        <h1>You don't have permission to view this page !!</h1>
                    </div>
                    <div class="mb-5">
                        <h1 class="">🚫 🚫 🚫 🚫</h1>
                    </div>
                    <div class="mb-5">
                        <h4>Error code:403 forbidden</h4>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-lg btn-primary" href="/">Return to Home Page << </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
