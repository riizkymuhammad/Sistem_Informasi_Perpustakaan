
@extends('frontend.templates.default')

@section('content')
<div class="container">
<h3>Register</h3>
<form action="{{ route('login')}}" class="col s12" method="post">
@csrf
<div class="row">

<div class="input-field col s12">
<i class="material-icons prefix">email</i>
<input type="email" class="validate @error('email') invalid @enderror" name="email" value="">
<label for="">Email</label>
@error('email')
<span class="helper-text" data-error="{{$message}}"></span>
@enderror
</div>

<div class="input-field col s12">
<i class="material-icons prefix">lock</i>
<input type="password" class=" @error('password') is-invalid @enderror" name="password" value="">
<label for="">Password</label>
@error('password')
<span class="helper-text" data-error="{{$message}}"></span>
@enderror
</div>


<div class="input-field right">
<input type="submit" class="vawes-effect waves-light btn ren accent-1" value="Login">
</div>

</div>
</form>
</div>


@endsection


