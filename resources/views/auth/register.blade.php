@extends('layouts.auth')

@section('content')

<div class="wrapper">
   <section class="login-content">
      <div class="container h-100">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
               <div class="sign-user_card">
                     <img src="{{('assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo">
                     <img src="{{('assets/images/logo-white.png')}}" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
                  <h3 class="mb-3">S'inscrire</h3>
                  <p>Créer votre compte</p>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" placeholder=" ">
                              <label>Prenom</label>
                              @error('prenom')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('nom') is-invalid @enderror" type="text" name="nom" placeholder=" ">
                              <label>Nom</label>
                              @error('nom')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder=" ">
                              <label>Adresse Email</label>
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('telephone') is-invalid @enderror" name="telephone" type="tel" placeholder=" ">
                              <label>Telephone</label>
                              @error('telephone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder=" ">
                              <label>Mot de Passe</label>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="floating-label form-group">
                              <input class="floating-input form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder=" ">
                              <label>Mot de Passe Confirmation</label>
                              @error('password_confirmation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="custom-control custom-checkbox mb-3 text-left">
                              <input type="checkbox" name="term" class="custom-control-input @error('term') is-invalid @enderror" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">J'accepte les conditions et terms d'utilisation</label>
                              @error('term')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">S'inscrire</button>
                     <p class="mt-3">
                        Déja un compte <a href="{{route('login')}}" class="text-primary">Se connecter</a>
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
