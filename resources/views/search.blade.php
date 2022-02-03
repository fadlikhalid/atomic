<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <div class="mu-heading-area">
            <form id="searchthis" action="{{route('book.search')}}" style="display:inline;" method="get">
                <input id="namanyay-search-box" name="bookSearch" id="bookSearch" size="40" type="text" placeholder="Search Book " style="border: 1px solid white;" />
                <input id="namanyay-search-btn" value="Search" type="submit" style="border: 1px solid white;"/>
            </form>

        </div>
    </section>

    <!-- Start Featured Slider -->

    <!-- Start main content -->

    <main role="main">

        <!-- Start Counter -->
        
        <!-- End Counter -->
        

        <!-- Start Author -->
        <section id="mu-author">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-author-area">
                            <!-- Start Author Content -->

                            @foreach($books as $book)

                            <div class="mu-author-content">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mu-author-image">
                                            <img src="/book/cover/{{ $book->book_cover }}" alt="Author Image" class="imgcover">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mu-author-info">
                                            <a href="{{route('book.display', $book->book_id)}}"><h3>{{$book->book_name}}</h3> </a>
                                            <p>{{$book->genre}}</p>

                                            <p>{{$book->book_desc}}</p>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
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