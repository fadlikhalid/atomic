<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BookHub</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/css/landing/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/landing/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="/css/landing/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="/css/landing/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="/css/landing/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
</head>

<body>


    <!-- Insert Header -->
    @include('includes.header')
    
    <!-- Start Featured Slider -->

    <section id="mu-hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-sm-push-6">
                    <div class="mu-hero-right">
                        <img src="/css/landing/images/ebook.png" alt="Ebook img">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-sm-pull-6">
                    <div class="mu-hero-left">
                        <h1>Perfect Landing Page Template to Present Your eBook</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe, recusandae quidem
                            nulla! Eveniet explicabo perferendis aut, ab quos omnis labore laboriosam quisquam hic
                            deserunt ipsum maxime aspernatur velit impedit.</p>
                        <!-- Masukin a href buat subs page --><a href="" class="mu-primary-btn">Subscribe now</a>
                        <span>*Avaliable for 3 Package.</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Start Featured Slider -->

    <!-- Start main content -->

    <main role="main">

        <!-- Start Counter -->
        <section id="mu-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-counter-area">

                            <div class="mu-counter-block">
                                <div class="row">

                                    <!-- Start Single Counter -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mu-single-counter">
                                            <i class="fa fa-files-o" aria-hidden="true"></i>
                                            <div class="counter-value" data-count="650">0</div>
                                            <h5 class="mu-counter-name">Total Pages</h5>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                    <!-- Start Single Counter -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mu-single-counter">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <div class="counter-value" data-count="422">0</div>
                                            <h5 class="mu-counter-name">Chapters</h5>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                    <!-- Start Single Counter -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mu-single-counter">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <div class="counter-value" data-count="1055">0</div>
                                            <h5 class="mu-counter-name">Active Readers</h5>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter -->
        <div class="mu-heading-area">
            <form id="searchthis" action="/search" style="display:inline;" method="get">
                <input id="namanyay-search-box" name="q" size="40" type="text" placeholder="Search Book " />
                <input id="namanyay-search-btn" value="Search" type="submit" />
            </form>

        </div>

        <!-- Start Author -->
        <section id="mu-author">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-author-area">
                            <!-- Start Author Content -->
                            <div class="mu-author-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mu-author-image">
                                            <img src="https://media.harrypotterfanzone.com/deathly-hallows-us-childrens-edition.jpg" alt="Author Image" class="imgcover">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mu-author-info">
                                            <h3>John Doe</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit
                                                facilis ipsum ullam reiciendis odio error iste neque ratione libero rem
                                                accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda,
                                                consectetur.</p>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate,
                                                dolorem error neque! Dolores similique ut iusto odit esse ipsam,
                                                nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum
                                                deleniti perspiciatis!</p>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Author Content -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Author -->



    </main>

    <!-- End main content -->


    <!-- insert footer -->
    @include('includes.footer')	



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="/css/landing/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="/css/landing/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="/css/landing/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="/css/landing/js/app.js"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="/css/landing/js/custom.js"></script>


</body>

</html>