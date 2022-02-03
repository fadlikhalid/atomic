<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="/css/log.css" rel="stylesheet">
</head>

<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://www.pngitem.com/pimgs/m/62-622830_png-books-black-and-white-book-logo-transparent.png"> </div>
                            <h3 class="mb-5 text-center heading">BookHub</h3>
                            <h6 class="msg-info">Reset Password</h6>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <label for="email" class=" col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                    <div class="">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row justify-content-center my-3 px-3">
                                        <button type="submit" class="btn-block btn-color">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <a href="{{ route('register') }}" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></a>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">We are more than just a company</h3> <small class="text-white">Lorem
                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>