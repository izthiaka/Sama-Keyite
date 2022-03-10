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
                  <h3 class="mb-3">Connexion</h3>
                  <p>Connectez-vous pour gérer votre demande.</p>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                                <input class="floating-input form-control @error('identifiant') is-invalid @enderror" type="email" name="identifiant" placeholder=" ">
                                <label>Adresse Email</label>

                                @error('identifiant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                                <input class="floating-input form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder=" ">
                                <label>Mot de passe</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="custom-control custom-checkbox mb-3 text-left">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" name="remember" for="customCheck1">Remember Me</label>
                           </div>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="col-lg-6">
                                <a href="{{ route('password.request') }}" class="text-primary float-right">Mot de Passe oublié?</a>
                            </div>
                        @endif
                     </div>
                     <button type="submit" class="btn btn-primary">Connexion</button>
                     <p class="mt-3">
                        Créer un compte <a href="{{route('register')}}" class="text-primary">S'inscrire</a>
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

@endsection
