@extends('layouts.main')

@section('title')
	Home
@stop

@section('content')
	<!-- start slideshow -->
	<section id="home">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Welcome to the <span>LARAVEL</span> demo</h1>
					<div class="element">
	                    <div class="sub-element">Laravel Documentation</div>
	                    <div class="sub-element">Laravel is a powerful framework that emphasizes flexibility and expressiveness.</div>
	                    <div class="sub-element">Laravel is lucky to be supported by rapidly growing, friendly and enthusiastic community.</div>
	                </div>
					{{ HTML::link('about', 'GET STARTED', array('class' => 'btn btn-default wow fadeInUp') )}}
				</div>
			</div>
		</div>
	</section>
	<!-- end slideshow -->

	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">OUR <span>SERVICES</span></h2>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-laptop"></i>
					<h4>Web Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
				</div>
				<div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
					<i class="fa fa-cloud"></i>
					<h4>Cloud Computing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
				</div>
				<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
					<i class="fa fa-cog"></i>
					<h4>UX Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end servie -->

	@include('includes.contact')
@stop
