@extends('main')

@section('title', '| Pricing - Introductory Offer')

@section('pricingActive', 'active')

@section('stylesheets')
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/intro.css" rel="stylesheet">
@endsection

@section('content')


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron bcDark">
      <div class="container">
        <h1 class="display-3 opMid d-none d-sm-inline">Introductory offers</h1>
        <h1 class="display-5 opMid d-inline d-sm-none">Introductory offers</h1>
        <br><br>
        <p>
          A partnership is an investment, and sometimes you need to start out small.  Try one of these 
          introductory offers to get to know the value of partnering with us first-hand, or visit our <a class="text-warning" href="/pricing">pricing and information page</a> about becoming a Starboard Partner.
        </p>
        <!--p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p-->
      </div>
    </div>


    <!-- Offers -->
    <div class="container">

      <div class="row">

        <div class="col-md-4 plan">
          <h2>Strategic Consultation</h2>
          <p class="text-justify">
            This one's on the house! For <span class="fcDark font-weight-bold h4">Free</span>, we will give 
            you 25 minutes to discuss topics relating to navigating solutions for your tech needs.  
            Our mission of providing a true partnership is based on trust and competence, and the best way
            for people to obtain that trust with us is to make it possible for them to try us!
            Strategic consultations for past clients have included:
          </p>
          <ul>
            <li>Time and cost guestimates for implementing your company vision</li>
            <li>Options (and consequences) of fundamental tech decisions</li>
            <li>Overview of Agile and Scrum</li>
            <li>Figuring out your MVP (Minimum Viable Product)</li>
            <li>Overview of SEO and Web Marketing</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Schedule free consultation &raquo;</a></p>
        </div>

        <div class="col-md-4 plan">
          <h2>Shopify Store</h2>
          <p class="text-justify">
            For <a href="http://starboardtechnology.setmore.com" target="_blank" class="fcDark font-weight-bold h4">$395</a> we will set you up with a Shopify account, website, and walk you through setting up 
            all of your settings. We'll help you to pick a template, but this does not include 
            customizations or selecting/generating content, but we'll guide you on how to do that.
          </p>
          <ul>
            <li>Assistance buying and using a domain</li>
            <li>Showing you template options and installing a template</li>
            <li>Training on how to add your content and company pages</li>
            <li>Walking through setup options, sich as taxation, shipping, etc.</li>
            <li>Discussing plugin options for future enhancements</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Let's get started! &raquo;</a></p>
        </div>

        <div class="col-md-4 plan">
          <h2>Wordpress Website</h2>
          <p class="text-justify">
            For <a href="http://starboardtechnology.setmore.com" target="_blank" class="fcDark font-weight-bold h4">$395</a> we will set up a Wordpress website for you hosted on Wordpress.com.  We'll do the 
            work setting it up and show you how to use it.  We'll help you to pick a template, but this 
            does not include customizations or selecting/generating content, but we'll guide you on how
            to do that.
          </p>
          <ul>
            <li>Assistance buying and using a domain</li>
            <li>Showing you template options and installing a template</li>
            <li>Training on how to add your content and company pages</li>
            <li>Installing basic plugin for SEO and website security</li>
            <li>Discussing app add-on options for future enhancements</li>
            </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Let's get started! &raquo;</a></p>
        </div>

    </div>

    <hr>

    <!-- Offers -->
    <div class="container">
      <br><br>
      <h1 class="display-6">Pricing</h1>
      <p>
        For partnership and a-la-carte pricing, take a look at our <a href="\pricing">pricing page</a>.
      </p>

    </div>
    
    <hr>

    @endsection
