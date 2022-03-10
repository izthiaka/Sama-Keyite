@extends('layouts.auth')

@section('content')

<div class="wrapper">
   <section class="login-content">
      <div class="container h-100">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
               <div class="sign-user_card">
                     <img src="{{('../assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo">
                     <img src="{{('../assets/images/logo-white.png')}}" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
                  <h3 class="mb-3">Réinitialiser le mot de passe</h3>
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="floating-label form-group">
                                <input class="floating-input form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder=" ">
                                <label>Adresse Email</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Envoyer le lien de réinitialisation du mot de passe</button>
                     <p class="mt-3">
                        <a href="{{route('login')}}" class="text-primary">Se connecter</a>
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
