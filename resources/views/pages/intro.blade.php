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
        <h1 class="display-3 opMid">Introductory offers</h1>
        <br>
        <p>
          A partnership is an investment.  If you are looking to understand the value of partnering with us, 
          you are welcome to try one of these starter offers:  
        </p>
        <!--p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p-->
      </div>
    </div>


    <!-- Offers -->
    <div class="container">

      <div class="row">
        <div class="col-md-4 plan">
          <h2>Wordpress Website</h2>
          <p class="text-justify">
            For $350 we will set up a Wordpress website for you hosted on Wordpress.com.  We'll do the 
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
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Shopify Store</h2>
          <p class="text-justify">
            For $350 we will set you up with a Shopify account, website, and walk you through setting up 
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
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Strategic Consultation</h2>
          <p class="text-justify">
            This one's on the house! We will give you one hour to discuss topics relating to navigating solutions for 
            your tech needs.  While this is "giving away the farm", we see it as an investment.  The way we
            see this, the more people we help early on, the more our mission of providing a true partnership
            based on trust and competence will be known.  Topics of interest for past clients have been:
          </p>
          <ul>
            <li>Overview of SEO and Web Marketing</li>
            <li>Ballpark time and cost for implementation of the tech portion of your vision</li>
            <li>Options and consequences of making tech decisions, including hosting, outsourcing, hiring, etc.</li>
            <li>Overview of Agile and Scrum to manage lean, rapid development</li>
            <li>Figuring out your MVP (Minimum Viable Product)</li>
          </ul>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>


    <hr>

    @endsection
