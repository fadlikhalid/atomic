<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>BookHub</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="/css/landing/images/favicon.ico" />
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

				<div class="col-md-6 col-sm-6 col-sm-push-6	">
					<div class="mu-hero-right">
						<img src="/css/landing/images/ebook.png" alt="Ebook img" style="margin-top: -120px;">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>BookHub: leisure with literature</h1>
						<h2>Try our new offer of free 7-days trial!</h2>
						<p>BookHub is a one stop
							literature platform for all to read. Various genres from education to mistery, from novel to magazine, we got all you want.</p>
						<a href="" class="mu-primary-btn">Subscribe now</a>
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
											<div class="counter-value" data-count="{{$countbooks}}">0</div>
											<h5 class="mu-counter-name">Total Books</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$countuser}}">0</div>
											<h5 class="mu-counter-name">Total User</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="{{$countcredit}}">0</div>
											<h5 class="mu-counter-name">Total User Subscription</h5>
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

		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Book Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<!-- Book Overview Single Content -->
									@foreach($books->slice(0, 4) as $book)
										<div class="col-md-3 col-sm-6">
											<div class="mu-book-overview-single">
												<span class="mu-book-overview-icon-box">
													<img src="/book/cover/{{ $book->book_cover }}" alt="Author Image" class="imgcover"></img>
												</span>
												<h4>{{$book->book_name}}</h4>
												<p>Author : {{$book->author}}</p>
												<p>Genre : {{$book->genre}}</p>
											</div>
										</div>
									@endforeach
									<!-- End of Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->



		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Check Out Our Newest Book</h2>
								<span class="mu-header-dot"></span>
								<p>Fresh Book from our be loved author</p>
							</div>

							<!-- Start Video Review Content -->
								<div class="mu-video-review-content">
									<div class="mu-book-overview-single">
										<span class="mu-book-overview-icon-box">
											<img src="/book/cover/{{$latestbook->book_cover}}" alt="Author Image" class="imgcover"></img>
										</span>
										<h4>{{$latestbook->book_name}}</h4>
										<p>Author : {{$latestbook->author}}</p>
										<p>Genre : {{$latestbook->genre}}</p>
									</div>
								</div>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->



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
