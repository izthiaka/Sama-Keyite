@extends('layouts.auth')

@section('content')
<section class="login-content">
   <div class="container h-100">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-md-5 col-sm-12 col-12 align-self-center">
            <div class="sign-user_card">
                  <img src="{{('../assets/images/logo.png')}}" class="img-fluid rounded-normal light-logo logo" alt="logo">
                  <img src="{{('../assets/images/logo-white.png')}}" class="img-fluid rounded-normal darkmode-logo logo" alt="logo">
               <h3 class="mb-3">Réinitialiser le mot de passe</h3>
               <p>Veuillez confirmer votre mot de passe avant de continuer.</p>
               @if (session('status'))
                   <div class="alert alert-success" role="alert">
                       {{ session('status') }}
                   </div>
               @endif
               <form method="POST" action="{{ route('password.confirm') }}">
                 @csrf
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="floating-label form-group">
                             <input class="floating-input form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder=" ">
                             <label>Mot de Passe</label>

                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>
                     </div>
                  </div>

                    @if (Route::has('password.request'))
                        <div class="col-lg-6">
                            <a href="{{ route('password.request') }}" class="text-primary float-right">Mot de Passe oublié?</a>
                        </div>
                    @endif
                  <button type="submit" class="btn btn-primary">Confirmer le mot de passe</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
@endsection
