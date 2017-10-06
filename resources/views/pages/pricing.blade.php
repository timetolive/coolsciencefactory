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
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Philosophy</h1>
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
        <div class="col-md-4">
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
        <div class="col-md-4">
          <h2>QUARTERBACK</h2>
          <p>
            The QUARTERBACK partnership provides <strong>managed outsourced development</strong>, 
            including Business Analysis &amp; Requirements, Bidding, Project Managing development schedules
            and costs, Code Reviewing to ensure quality and adequate documentation, installation and 
            support of developed systems and apps.
          </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>WIDE RECEIVER</h2>
          <p>
            The QUARTERBACK partnership provides <strong>onshore Programming &amp; Implementations</strong>, 
            including Architecture, Business Analysis, Hosting set-up and maintenance, Conversions, Reporting
            and Training.
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
          <h2>Fixed</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

    </div>



    <!-- Other options -->
    <div class="container">
      <br><br>
      <h1 class="display-6">Boorstrap Startup Special Offer</h1>
      <p>
        WTF am I doing??? Ugh!!
      </p>

      <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
          <h2>Fixed</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

    </div>

    <hr>

    @endsection
