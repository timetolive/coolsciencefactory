@extends('main')

@section('title', '| Pricing')

@section('pricingActive', 'active')

@section('stylesheets')
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">
@endsection

@section('content')


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron bcDark">
      <div class="container">
        <h1 class="display-3 opMid">Philosophy</h1>
        <p>
          Our goal is to establish a win-win relationship with our clients by establishing long-term 
          partnerships based on trust.  Our clients expect us to understand their goals, not just carry out
          instructions, and to make their budgets and schedules a priority.  Our partnership model is 
          designed to establish this relationship up front.  
        </p>
        <!--p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p-->
      </div>
    </div>

    <!-- Partner Program -->
    <div class="container">
      <br>
      <h1 class="display-5">Partner Programs</h1>

      <div class="row">
        <div class="col-md-4 plan">
          <h2>COACH</h2>
          <p>
            The COACH partnership provides your executive team with <strong>CIO level strategy</strong>,
            insight and advice on a regular basis at a small fraction of the cost of hiring your own.
            <ul>
              <li>Contract: 3 month minimum, $5,000</li>
              <li>Includes 50 hours (between 7 - 8 hours per week) for meetings, planning, presenatations, etc.</li>
              <li>
                If contact hours are used prematurely, the contract can roll into a new contract of 
                less than 3 months, or hours can be purchased a la carte avainst the existing contract
                at a reduced rate of $110 per hour.</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>QUARTERBACK</h2>
          <p>
            The QUARTERBACK partnership provides <strong>managed outsourced development</strong>, 
            including Business Analysis &amp; Requirements, Bidding, Project Managing development schedules
            and costs, Code Reviewing to ensure quality and adequate documentation, installation and 
            support of developed systems and apps.
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4 plan">
          <h2>WIDE RECEIVER</h2>
          <p>
            The QUARTERBACK partnership provides <strong>onshore Programming &amp; Implementations</strong>, 
            including Architecture, Business Analysis, Hosting set-up and maintenance, Conversions, Reporting
            and Training.
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>



    <!-- Offers -->
    <div class="container">
      <br><br>
      <h1 class="display-6">Introductory offers</h1>
      <p>
        A partnership is an investment.  If you are looking to understand the value of partnering with us, 
        you are welcome to try one of these starter offers:
      </p>
      <!--p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p-->

      <div class="row">
        <div class="col-md-4 plan">
          <h2>Wordpress Website</h2>
          <p>
            For $350 we will set up a Wordpress website for you hosted on Wordpress.com.  We'll do the 
            work setting it up and show you how to use it.  We'll help you to pick a template, but this 
            does not include customizations or selecting/generating content, but we'll guide you on how
            to do that.
            <ul>
              <li>Assistance buying and using a domain</li>
              <li>Showing you template options and installing a template</li>
              <li>Training on how to add your content and company pages</li>
              <li>Installing basic plugin for SEO and website security</li>
              <li>Discussing app add-on options for future enhancements</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Shopify Store</h2>
          <p>
            For $350 we will set you up with a Shopify account, website, and walk you through setting up 
            all of your settings. We'll help you to pick a template, but this does not include 
            customizations or selecting/generating content, but we'll guide you on how to do that.
            <ul>
              <li>1Assistance buying and using a domain</li>
              <li>Showing you template options and installing a template</li>
              <li>Training on how to add your content and company pages</li>
              <li>Walking through setup options, sich as taxation, shipping, etc.</li>
              <li>Discussing plugin options for future enhancements</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Strategic Consultation</h2>
          <p>
            This one's on the house! We will give you one hour to discuss topics relating to navigating solutions for 
            your tech needs.  While this is "giving away the farm", we see it as an investment.  The way we
            see this, the more people we help early on, the more our mission of providing a true partnership
            based on trust and competence will be known.  Topics of interest for past clients have been:
            <ul>
              <li>Overview of SEO and Web Marketing</li>
              <li>Ballpark time and cost for implementation of the tech portion of your vision</li>
              <li>Options and consequences of making tech decisions, including hosting, outsourcing, hiring, etc.</li>
              <li>Overview of Agile and Scrum to manage lean, rapid development</li>
              <li>Figuring out your MVP (Minimum Viable Product)</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>


    <!-- Other options -->
    <div class="container">
      <br><br>
      <h1 class="display-6">À La Carte Technical Projects &amp; Consulting</h1>
      <p>
        Like other firms, we can also provide expert technology services on a per-project basis for clients
        who want to try us before investing in a longer term relationship.
      </p>

      <div class="row">
        <div class="col-md-4 plan">
          <h2>Time &amp; Materials (T&amp;M)</h2>
          <p>
            T&amp;M projects will usually be scoped to make sure that all project expectations are clear
            to all stakeholders.
            <ul>
              <li>Strategy: $150/hr</li>
              <li>Team or Project Management: $120/hr</li>
              <li>Code or Systems Architecture: $120/hr</li>
              <li>Salesforce Lightning Programming: $125/hr</li>
              <li>Shopify Liquid Programming: $110/hr</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Capped T&amp;M</h2>
          <p>
            If risks are acceptable, we may allow a T&amp;M project to be capped so the project costs 
            do not exceed a pre-determined amount.  The cap will be assessed per project as a fixed 
            maximum estimate, calculated with respect to risks.  Since this method shifts the project 
            risk to us, there will be a contract prior to beginning that clearly identifies project 
            deliverables to protect against "scope creep".
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4 plan">
          <h2>Fixed</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

    </div>


    <hr>

    @endsection
