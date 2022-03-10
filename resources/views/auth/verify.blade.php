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
                  <h3 class="mb-3">Vérifier votre adresse e-mail</h3>
                  @if (session('resent'))
                      <div class="alert alert-success" role="alert">
                          {{ __('A fresh verification link has been sent to your email address.') }}
                      </div>
                  @endif
                  <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
