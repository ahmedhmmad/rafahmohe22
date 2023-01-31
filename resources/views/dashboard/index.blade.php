@extends('layouts.dashboard')
@section('content')
    <section class="content">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-12 col-sm-8 col-lg-6">
                    <img src="{{ asset('images/features.jpg') }}" class="d-block mx-lg-auto img-fluid rounded"
                        alt="Bootstrap Themes" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center text-primary">Trendy</h1>
                    <p class="lead text-center">Control Panal</p>
                    <p class="lead text-center">1.1.0</p>
                </div>
            </div>
        </div>
    </section>
@endsection
