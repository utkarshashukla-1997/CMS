@extends('layouts.app')

@section('content')
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
{{-- <div class="accountbg"></div> --}}
<div class="account-pages mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 200px">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card text-dark" style="background:rgba(246, 248, 245, 0.6); border-radius: 5%">
                    <div class="card-body">
                        <div class="text-center mt-2">
                            <div class="mb-1">
                                <a href="{{ route('login') }}"><img src="{{asset('GCN.png')}}" height="100"
                                        alt="logo"></a>
                            </div>
                        </div>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="p-3">
                            <h4 class="font-size-18 mt-2 text-center">Welcome Back !!!</h4>
                            <p class="text-dark text-center mb-4">Sign in to continue.</p>

                            <form class="form-horizontal" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="text" name="email" class="form-control" id="username" required
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" name="password"
                                        required placeholder="Enter password">
                                </div>

                                <div class="form-group row mt-4">
                                    {{-- <div class="col-sm-6"> --}}
                                        {{-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember
                                                me</label>
                                        </div> --}}
                                        {{-- </div> --}}
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
