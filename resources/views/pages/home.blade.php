@extends('main')

@section('title', '')

@section('homeActive', 'active')

@section('stylesheets')
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!--script src="js/vendor/jquery.color-2.1.2.js"></script-->
    <script src="js/home.js"></script>
@endsection

@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!--ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide d-none d-md-inline-block" src="images/home/Happy-Small-Business-Owner.jpg" alt="Small Business Owner">
          <img class="first-slide d-md-none d-inline-block" src="images/home/Happy-Small-Business-Owner-small.jpg" alt="Small Business Owner mobile">
          <div class="container">
            <div class="carousel-caption d-block text-left">
              <div class="d-none d-md-block"><h1 style="color: black;">Finding great Technical help</h1></div>
              <p class="homeText">Why does it always feel like quality, professional technical<br>help is just out of reach?</p>
              <br><br>
              <p><a style="margin-top: 10px;" id="btn-1" class="btn btn-lg btn-primary d-none d-md-inline-block" data-slide-to="1" data-target="#myCarousel" href="#" role="button">Why?</a></p>
            </div>
          </div>
        </div>
        <!--div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-block">
              <h1>Trust</h1>
              <p>Are you BEHIND on the technical projects that will differentiate your company <br>because you don't have CONFIDENCE in the technical people you are using?</p>
              <p><a id="btn-2" class="btn btn-lg btn-primary d-none d-md-inline-block" href="#" data-slide-to="2" data-target="#myCarousel" role="button">Yes</a></p>
            </div>
          </div>
        </div-->
        <div class="carousel-item">
          <img class="third-slide d-none d-md-inline-block" src="images/home/business-man.jpg" alt="Small Business Owner">
          <img class="third-slide d-md-none d-inline-block" src="images/home/business-man-small.jpg" alt="Small Business Owner mobile">
          <div class="container">
            <div class="carousel-caption d-block text-left">
              <div style="height: 50px;" class="d-none d-md-block"><h1 style="color: black;">TRUST</h1></div>
              <p class="d-none d-md-inline-block">I have a tech budget, but how can I be ceratin that I will<br>get meaningful returns from my tech investments?</p>
              <div class="d-md-none d-inline-block bg-white">
                <p class="text-black">I have a tech budget, but<br>how can I be ceratin that<br>I will get meaningful returns<br>from my tech investments?</p>
              </div>
              <p><a id="btn-3" class="btn btn-lg btn-primary d-none d-md-inline-block" href="#" role="button">Here's how</a></p>
            </div>
          </div>
        </div>
      </div>
      <!--a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a-->
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Don't just buy tech,<br><span class="text-muted font-italic">partner with tech.</span></h2>
          <p class="lead">
            Good partnerships ensure alignment with your business objectives.  In order to position
            your business out ahead of your competition, your tech partner needs to internalize your 
            mission and goals, provide informed technical advice, and execute your technical vision
            on time and within your budget.  A valued partner will earn your trust, and will be in it
            with you for the long haul.
            <br><br>
            Explore our <a href="/pricing">Partnership Pricing</a>
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="images/home/partner-500x500.jpg" alt="Partner with Tech">
        </div>
      </div>

      <hr>

      <!-- Three columns of text below the carousel -->
      <div class="row">&nbsp;</div>
      <div class="row">
        
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/home/frank-140x140.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><img class="logo30h" src="images/home/Shopify-Logo-25x30.png" alt="Shopify" />Shopify</h2>
          <p class="text-justify fixh"><span class="quotes">&ldquo;</span>A trusted colleague recommended Starboard to me for their honesty, professionalism and reasonable pricing, and that's exactly what I got. Now I can relax knowing that I can trust them as a partner, and that frees up time so I can focus on more important parts of my business, among other things.<span class="quotes">&rdquo;</span></p>
          <p><a class="btn btn-secondary" href="/intro" role="button">Shopify Solutions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
          <img class="rounded-circle" src="images/home/businessman-140x140.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2><img class="logo30h" src="images/home/agile-scrum-48x30.png" alt="Agile Scrum" />Agile</h2>
          <p class="text-justify fixh"><span class="quotes">&ldquo;</span>They managed our three virtual development teams, mentoring and optimizing our agile and continuous delivery processes. We saw drammatic improvements in overall efficiency and quality.<span class="quotes">&rdquo;</span></p>
          <p><a class="btn btn-secondary" href="/intro" role="button">Agile Solutions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="rounded-circle" src="images/home/businesswoman-140x140.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><img class="logo30h" src="images/home/wordpress-30x30.png" alt="Wordpress" />Wordpress</h2>
          <p class="text-justify fixh"><span class="quotes">&ldquo;</span>Starboard developed a custom Wordpress site for our business on time and on budget. It's such a relief to have that feeling that they are in this with us.<span class="quotes">&rdquo;</span></p>
          <p><a class="btn btn-secondary" href="/intro" role="button">Wordpress Solutions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

        <!--div class="col-lg-4">
          <img class="rounded-circle" src="images/home/businesswoman-140x140.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2><img class="logo30h" src="images/home/salesforce-logo-30x42.png" alt="Salesforce" />Salesforce</h2>
          <p class="text-justify fixh"><span class="quotes">&ldquo;</span>Starboard developed a custom Salesforce Lightning app to support our sales team on time and on budget. It's such a relief to have that feeling that they are in this with us.<span class="quotes">&rdquo;</span></p>
          <p><a class="btn btn-secondary" href="#" role="button">Salesforce Solutions &raquo;</a></p>
        </div>
      </div-->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">We will earn your <strong>trust</strong> as a tech partner so you can<br><span class="text-muted">focus on your business.</span></h2>
          <p class="lead">
            Starboard has been helping small and mid sized businesses shape and implement their 
            technical visions since 2005.
            <br><br>
            The Starboard team has partnered with or personally performed work for 
            these organizations through Starboard or previous positions.
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="images/home/logos_150x150.png" alt="Your Success">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Give us a <span class="text-muted">test-drive.</span></h2>
          <p class="lead">
            Take a look at our <a href="/pricing">partnership pricing</a>, or try one of our special <a href="/intro">introductory offers</a>.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="images/home/Success-500x500.jpg" alt="Give us a test drive">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

@endsection
