@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-block card-stretch  card-transparent">
                                    <div class="card-header d-flex justify-content-between pb-0">
                                        <div class="header-title">
                                            <h4 class="card-title">Dépôt extrait naissance</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="wizard-validation-form" action="{{route('extrait_naissance.store')}}" method="POST" novalidate>
                            @csrf
                            @method('POST')
                            <div>
                                <h3>Information Personnelle</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="control-label " for="user_prenom">Prenom <span class="text-danger">*</span></label>
                                            <input class="required form-control" id="user_prenom" readonly name="user_prenom" type="text" value="{{Auth::user()->prenom}}" required>
                                        </div>
                                        <div class="col-6">
                                            <label class="control-label " for="user_nom">Nom <span class="text-danger">*</span></label>
                                            <input class="required form-control" id="user_nom" readonly name="user_nom" type="text" value="{{Auth::user()->nom}}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="control-label " for="numero_registre"> Numéro Registre <span class="text-danger">*</span></label>
                                            <input id="numero_registre" name="numero_registre" type="number" class="required form-control">
                                        </div>
                                        <div class="col-6">
                                            <div class="group-row">
                                                <label class="control-label" for="date_naissance">Date de Naissance <span class="text-danger">*</span></label>
                                                <input class="required form-control @error('date_naissance') is-invalid @enderror" name="new_user_telephone" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="control-label" for="user_adresse">Adresse</label>
                                            <div class="input-group group-row">
                                                <input class="form-control @error('user_adresse') is-invalid @enderror" id="user_adresse" name="user_adresse" type="text" placeholder="adresse" required autocomplete >
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="group-row">
                                                <label class="control-label" for="new_user_sexe">Sexe</label>
                                                <select name="new_user_sexe" id="new_user_sexe" class="form-control @error('new_user_sexe') is-invalid @enderror">
                                                    <option value="Homme">Homme</option>
                                                    <option value="Femme">Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Requis</label>
                                    </div>
                                </section>
                                <h3>Information Mairie</h3>
                                <section onclick="resume();">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="vehicule-depuis">Choix Region <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="col-md-12 selectpicker vehicule-depuis" data-style="btn-light btn-rounded" id="vehicule-depuis" name="vehicule_depuis" data-live-search="true" title="Choisissez un vehicule">
                                                        <option disabled selected>Choisissez un vehicule</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="vehicule-depuis">Choix Département <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="col-md-12 selectpicker vehicule-depuis" data-style="btn-light btn-rounded" id="vehicule-depuis" name="vehicule_depuis" data-live-search="true" title="Choisissez un vehicule">
                                                        <option disabled selected>Choisissez un vehicule</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="vehicule-depuis">Choix Commune <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="col-md-12 selectpicker vehicule-depuis" data-style="btn-light btn-rounded" id="vehicule-depuis" name="vehicule_depuis" data-live-search="true" title="Choisissez un vehicule">
                                                        <option disabled selected>Choisissez un vehicule</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label" for="vehicule-depuis">Etat civile <span class="text-danger">*</span></label>
                                                <div class="col-md-8">
                                                    <select class="col-md-12 selectpicker vehicule-depuis" data-style="btn-light btn-rounded" id="vehicule-depuis" name="vehicule_depuis" data-live-search="true" title="Choisissez un vehicule">
                                                        <option disabled selected>Choisissez un vehicule</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Requis</label>
                                    </div>

                                </section>
                                <h3>Résume</h3>
                                <section>
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-colored-bordered table-bordered-secondary">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>Information Personnelle</th>
                                                        <th>Information Mairie</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resum-p-n"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-v"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resum-tel"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-ad-dest"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resum-em"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-d-h"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resum-dm"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-n-vol"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resum-g"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-option-adresse"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>-</td>
                                                        <td>
                                                            <div id="resume-sup"></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>
                                                            <div id="resume-comment"></div>
                                                        </td>
                                                        <td>
                                                            <div id="resume-option-date"></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-inline">
                                            <div class="form-group" id="device">
                                                <label for="tarif_depuis"><b>Le montant de votre transfert s'élève à</b> :  </label>
                                                <input type="number" class="form-control input-sm" id="tarif_depuis" value="500" name="tarif_depuis" id="xof" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>Paiement</h3>
                                <section>
                                    <div class="row" id="myRow">
                                        <div class="col-xl-4 col-md-6 ">
                                          <div class="card widget-box-three bg-light choixPaiement mode_paiement_reservation border-danger">
                                            <input type="text" name="mode_paiement_reservation1" class="mode_paiement_reservation1" value="Orange Money" hidden>
                                            <div class="card-body">
                                              <div class="media">
                                                <div class="bg-icon avatar-lg text-center bg-white rounded-circle">
                                                  <img class="avatar-sm" src="{{asset('assets/images/om.png')}}" alt="orange-money" title="Orange Money">
                                                </div>
                                                <div class="media-body text-center mt-3">
                                                  <p class="text-uppercase">Orange Money</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 ">
                                          <div class="card widget-box-three choixPaiement bg-light mode_paiement_reservation">
                                            <input type="text" name="mode_paiement_reservation2" class="mode_paiement_reservation2" value="Wave" hidden>

                                            <div class="card-body">
                                              <div class="media">
                                                <div class="bg-icon avatar-lg text-center bg-white rounded-circle">
                                                  <img class="avatar-sm" src="{{asset('assets/images/wave.png')}}" alt="wave" title="Wave">
                                                </div>
                                                <div class="media-body text-center mt-3">
                                                   <p class="text-uppercase">Wave</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 ">
                                          <div class="card widget-box-three choixPaiement bg-light mode_paiement_reservation">
                                            <input type="text" name="mode_paiement_reservation3" class="mode_paiement_reservation3" value="Free Money" hidden>

                                            <div class="card-body">
                                              <div class="media">
                                                <div class="bg-icon avatar-lg text-center bg-white rounded-circle">
                                                  <img class="avatar-sm" src="{{asset('assets/images/free-money.png')}}" alt="free-money" title="Free Money">
                                                </div>
                                                <div class="media-body text-center mt-3">
                                                  <p class="text-uppercase">Free Money</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <input type="hidden" id="mode_paiement_reservation" name="mode_paiement_reservation" value="Paiement espece">
                                        <input type="hidden" id="paiement_entreprise_code" name="paiement_entreprise_code">
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <!-- Vendor js -->
    <script src="{{asset('assets/admin/js/vendor.min.js')}}"></script>

    <!-- Bootstrap select plugin -->
    <script src="{{asset('assets/admin/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>

    <!-- plugins -->
    <script src="{{asset('assets/admin/libs/c3/c3.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/d3/d3.min.js')}}"></script>

    <!--Form Wizard-->
    <script src="{{asset('assets/admin/libs/jquery-steps/jquery.steps.min.js')}}"></script>

    <script src="{{asset('assets/admin/libs/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- plugins -->
    <!-- <script src="assets/admin/libs/moment/moment.min.js"></script> -->
    <script src="{{asset('assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/admin/libs/switchery/switchery.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('assets/admin/js/pages/form-wizard.init.js')}}"></script>
    <script src="{{asset('assets/admin/js/pages/form-wizard2.init.js')}}"></script>
    <script src="{{asset('assets/admin/js/pages/form-pickers.init.js')}}"></script>

    <!-- dashboard init -->
    <script src="{{asset('assets/admin/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
    {{-- <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>

    <!--Form Wizard-->
    <script src="{{asset('assets/js/jquery.steps.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/form-wizard.init.js')}}"></script> --}}
@endsection

@section('style')

<!-- Bootstrap select pluings -->
<link href="{{asset('assets/admin/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

<!-- c3 plugin css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/c3/c3.min.css')}}">

<!-- App css -->
<link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
<link href="{{asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    <style>
        #device::after{
            content: ' XOF'
        }
    </style>
    {{-- <link href="{{asset('assets/intl-tel-input-16.0.0/build/css/intlTelInput.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('assets/admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />

    {{-- <link href="{{asset('assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/bootstrap/bootstrap.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" /> --}} --}}

@endsection
