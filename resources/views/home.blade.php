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
                            <h6 class="msg-info">Welcome to BookHub</h6>


                            {{ __('Now you can read variations of book available here.') }}



                            <div class="row justify-content-center my-3 px-3">
                                <a href="{{route('verify.post')}}"><button type="submit" class="btn-block btn-color">{{ __('continue to bookhub') }}</button></a>
                            </div>





                        </div>
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