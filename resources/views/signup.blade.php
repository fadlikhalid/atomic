<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #fae5d1, #FFFAF5);
            background-repeat: no-repeat
        }

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #391F00 !important;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .card {
            border-radius: 0;
            border: none
        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 50%;
            background-image: url(https://wallpaperaccess.com/full/124383.jpg)
        }

        #logo {
            width: 70px;
            height: 60px
        }

        .heading {
            margin-bottom: 60px !important
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #000 !important
        }

        ::-ms-input-placeholder {
            color: #000 !important
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-color: #E16A00;
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #E16A00, #391F00)
        }

        .btn-white {
            border-radius: 50px;
            color: #391F00;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #391F00 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #E16A00, #391F00)
        }

        a {
            color: #000
        }

        a:hover {
            color: #000
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important
        }

        .sm-text {
            font-size: 15px
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 40px 30px 10px 30px
            }

            .card2 {
                width: 100%
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important
            }

            .card2 {
                padding: 50px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }

        input[type="email"] {
            padding: 10px 16px;
            font-size: 16px;
            color: var(--black);
            background-color: #fff;
            border: 1px solid #597183;
            border-radius: 8px;
            margin-top: 5px;
            width: 100%;
            transition: all 0.3s ease;
        }

        input[type="email"]:focus {
            outline: none;
            transform: scale(1.04);
        }

        input[type="password"] {
            padding: 10px 16px;
            font-size: 16px;
            color: var(--black);
            background-color: #fff;
            border: 1px solid #597183;
            border-radius: 8px;
            margin-top: 5px;
            width: 100%;
            transition: all 0.3s ease;
        }

        input[type="password"]:focus {
            outline: none;
            transform: scale(1.04);
        }

        input[type="text"] {
            padding: 10px 16px;
            font-size: 16px;
            color: var(--black);
            background-color: #fff;
            border: 1px solid #597183;
            border-radius: 8px;
            margin-top: 5px;
            width: 100%;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            outline: none;
            transform: scale(1.04);
        }
    </style>
</head>

<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo"
                                    src="https://www.pngitem.com/pimgs/m/62-622830_png-books-black-and-white-book-logo-transparent.png"> </div>
                            <h3 class="mb-5 text-center heading">BookHub</h3>
                            <h6 class="msg-info">Please Create your account</h6>
                            <div class="form-group"> <label class="form-control-label text-muted">Full Name</label>
                                <input type="text" id="text" name="text" placeholder="Full Name"
                                    class="form-control">
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Username</label>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="form-control">
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label>
                                <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
                            </div>
                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Create Account</button> </div>
                            
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="#" class="sm-text mx-auto mb-3">Already have an account ?<button
                                class="btn btn-white ml-2">Login Now</button></p>
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