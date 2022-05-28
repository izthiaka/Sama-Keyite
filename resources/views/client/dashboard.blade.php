@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="{{route('extrait_naissance.index')}}" data-title="Extrait de naissance">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Extrait de naissance</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner"
                            data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal"
                            data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Casier Judiciaire</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner"
                            data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal"
                            data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Certificat de résidence</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner"
                            data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal"
                            data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Passeport</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner"
                            data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal"
                            data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Certificat de Perte</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <a href="#" data-title="Terms.pdf" data-load-file="file" data-load-target="#resolte-contaniner"
                            data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal"
                            data-target="#exampleModal">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <img src="{{asset('assets/images/sama_keyite.png')}}" class="img-fluid" alt="image1" />
                            </div>
                            <h6 class="text-center">Certificat de Mariage</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
