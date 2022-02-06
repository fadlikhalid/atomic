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
                            <h6 class="msg-info">Verify Email</h6>


                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},

                            <form method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <div class="row justify-content-center my-3 px-3">
                                    <button type="submit" class="btn-block btn-color">{{ __('click here to request') }}</button>.
                                </div>
                            </form>

                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif



                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <a href="{{ route('register') }}" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></a>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">BookHub: leisure with literature</h3> <small class="text-white">BookHub is a one stop
                            literature platform for all to read. Various genres from education to mistery, from novel to magazine, we got all you want.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>