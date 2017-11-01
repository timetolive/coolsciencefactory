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
        <h1 class="display-3 opMid d-none d-sm-inline">Pricing Philosophy</h1>
        <h1 class="display-4 opMid d-inline d-sm-none">Pricing Philosophy</h1>
        <br><br>
        <p>
          Our goal is to establish a win-win relationship with our clients by establishing long-term 
          partnerships based on trust.  Our clients expect us to understand their goals, not just carry out
          instructions, and to make their budgets and schedules a priority.  Our partnership model is 
          designed to establish this relationship up front.
          <br><br>
          <span class="h4 typeface-italic">We Guarantee Your Satisfaction</span>! 
          if you are unsatisfied at any point during your first partner contract, you may break the contract at any 
          point and your payment for unused hours will be refunded, no penalties, no questions asked!
          <a id="partnerPlans">&nbsp;</a>
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
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>QUARTERBACK</h2>
          <p>
            The QUARTERBACK partnership provides <strong>managed outsourced development</strong>. Package 
            includes on-site Business Analysis &amp; Requirements, Bidding, Project Managing development 
            schedules and costs, Reviewing Code to ensure quality and adequate documentation, installation and 
            support of developed systems and apps.
          </p>
            <ul>
              <li>Retainer: $2,000 increments, 20% off published rates</li>
              <li>Retainer: $5,000 increments, 30% off published rates</li>
              <li>Retainer: $10,000 increments, 50% off published rates</li>
              <li>
                If contact hours are used prematurely, the contract can roll into a new contract of 
                less than 3 months, or hours can be purchased a la carte avainst the existing contract
                at a reduced rate of $110 per hour.</li>
            </ul>
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
       </div>
        <div class="col-md-4 plan">
          <h2>WIDE RECEIVER</h2>
          <p>
            The WIDE RECEIVER partnership provides <strong>onshore Programming &amp; Implementations</strong>, 
            including Architecture, Business Analysis, Hosting set-up and maintenance, Conversions, Reporting
            and Training.
          </p>
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
        </div>
      </div>
    </div>


    <!-- Offers -->
    <div class="container">
      <br><br>
      <h1 class="display-6">Introductory offers!</h1>
      <p>
        A partnership is an investment.  If you are looking to understand the value of partnering with us, 
        you are welcome to try one of our <a href="\intro">introductory offers</a>:
      </p>
      <p><a class="btn btn-secondary" href="/intro" role="button">View introductory offers! &raquo;</a></p>

    </div>
    
    <hr>

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
            Outside of a partner agreement, T&amp;M projects are by far the most flexible and cost 
            the least for an overall project.  In order to get more flexibility and better rates, refer
            to our <a href="#partnerPlans">Partner Plans</a>.
            <ul>
              <li>Strategy, architecture and project management: $150/hr</li>
              <li>Programming, database, other technical: $115/hr</li>
            </ul>
            <ul>
              <li>Payment terms: $500 or $1,000 retainer to commence, remainder billed each week net 15 days</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about T&amp;M &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Capped T&amp;M</h2>
          <p>
            If risks are acceptable, we may allow a T&amp;M project to be capped so the project costs 
            do not exceed a pre-determined amount (the "cap").  As a result of the risk that the cap imposes
            on Starboard, the finished project cost is higher than the same project billed as T&amp;M.
            <ul>
              <li>Rates are the same as the T&amp;A rates.</li>
              <li>Capped T&amp;M projects include an additional up front billable effort to clarify the deliverables in the contract.</li>
              <li>Capped T&amp;M projects also include additional buffer hours which offset Starboard's risk imposed by the cap.</li>
              <li>Change orders will need to be drafted for each new effort, whether a new feature request, additional design iteration, etc.</li>
              <li>Change orders will be priced using the T&amp;A rates.</li>
              <li>Payment terms: 30% of cap at project start (which also includes the buffer hours), remainder billed each week, net 15 days</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about Capped T&amp;M &raquo;</a></p>
       </div>
        <div class="col-md-4 plan">
          <h2>Fixed Price</h2>
          <p>
            If risks are acceptable, we may allow a Fixed Price project.  A Fixed Price project is 
            guaranteed to cost a pre-determined price based on Starboard's assessment, and Starboard 
            assumes the risks of unexpected project cost increases (excluding change orders). As a result, 
            the finished project cost is higher than the same project billed as T&amp;M or Capped T&amp;M.
            <ul>
              <li>Fixed Price projects include an additional up front billable effort to clarify the deliverables in the contract.</li>
              <li>Fixed Price projects should be expected to cost more for the entire project than the same project done using T&amp;M.</li>
              <li>Change orders will need to be drafted for each new effort, whether a new feature request, additional design iteration, etc.</li>
              <li>Change orders will be priced using the T&amp;A rates.</li>
              <li>Payment terms: 50% of project up front, remainder billed each week, net 15 days</li>
            </ul>
          </p>
          <p><a class="btn btn-secondary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about a Fixed Price roject &raquo;</a></p>
        </div>
      </div>

    </div>


    <hr>

    @endsection
