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
          <h2>QUARTERBACK</h2>
          <p>
            The QUARTERBACK partnership provides your executive team with <strong>CIO-level Strategy</strong>,
            insight and advice on a regular basis at a small fraction of the cost of hiring your own.  
          </p>
          <p>Deliverables include:</p>
          <ul>
            <li>Strategic dicussions and meetings</li>
            <li>plans &amp; processes</li>
            <li>assessments</li>
            <li>hiring, organizing &amp; managing tech staff</li>
            <li>etc.</li>
          </ul>
          <p>Partnership Arrangement:</p>
          <ul>
            <li>Contract: 3 month minimum (50 hrs)</li>
            <li>Typical arrangement: between 7 - 8 hrs/wk</li>
            <li>
              If contact hours are used prematurely, Additional hours can be purchased at the contract rate through the end of the contract period.</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
        </div>

        <div class="col-md-4 plan">
          <h2>RUNNING BACK</h2>
          <p>
            The RUNNING BACK partnership provides development by <strong>Senior Onshore Engineers</strong>, 
            including Architecture, Business Analysis, Hosting set-up and maintenance, Conversions, Reporting
            and Training.
          </p>
          <p>Deliverables include:</p>
          <ul>
            <li>On-site business analysis &amp; requirements</li>
            <li>Scheduling and budgeting</li>
            <li>Project management</li>
            <li>Personally reviewing all code and architecture</li>
            <li>Ensure quality, scalability, and documentation</li>
            <li>Installation and support</li>
          </ul>
          <p>Partnership Arrangement:</p>
          <ul>
            <li>Tiered discount based on retainer level</li>
            <li>15% off a-la-carte rates: $2,000</li>
            <li>20% off a-la-carte rates: $5,000</li>
            <li>30% off a-la-carte rates: $10,000</li>
          </ul>
          <div class="padd25"></div>

          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
        </div>

        <div class="col-md-4 plan">
          <h2>WIDE RECEIVER</h2>
          <p>
            The WIDE RECEIVER partnership provides <strong>Managed Outsourced Development</strong>.  Ideal for 
            discrete efforts on a tight budget.
          </p>
          <p>Deliverables include:</p>
          <ul>
            <li>Same deliverables as RUNNING BACK plan, but using onshore senior engineers</li>
          </ul>
          <p>Partnership Arrangement:</p>
          <ul>
            <li>Same tiered retainers as RUNNING BACK</li>
            <li>Additional 50% off programming done off-shore</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Learn More &raquo;</a></p>
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
      <p><a class="btn btn-primary" href="/intro" role="button">View introductory offers! &raquo;</a></p>

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
        <div class="col-md-4 plan rel">
          <h2>Time &amp; Materials (T&amp;M)</h2>
          <p>
            There are many reasons you may choose to hire us by the hour.
          </p>
          <p>Rate Tiers:</p>
          <ol>
            <li>Strategy, architecture and project mgt</li>
            <li>Programming, database, other technical</li>
          </ol>
          <ul>
            <li>Payment terms: small retainer to commence, remainder billed each week net 15 days</li>
          </ul>
          <p>
            However, for a technology partnership that aligns your technology needs with your business 
            strategies, providing for more flexibility and better rates, refer to our 
            <a href="#partnerPlans">Partner Plans</a>.
          </p>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about a T&amp;M effort &raquo;</a></p>
        </div>
        <div class="col-md-4 plan">
          <h2>Capped T&amp;M</h2>
          <p>
            For <strong>discrete projects with limited risk</strong>, we may agree to agree to cap a T&amp;M
            contract project such that the cost of the project will not exceed a pre-determined maximum
            for the project.  Capping the project cost transfers all of the financial risk to Starboard, 
            and as a result, the finished project cost will be slightly higher than the same project 
            billed as T&amp;M.
          </p>
          <p>Additional Features Of Capped T&amp;M Projects:</p>
          <ul>
            <li>Rates are the same as the T&amp;M rates.</li>
            <li>Capped T&amp;M projects include a small up-front cost which offsets Starboard's risk 
              imposed by the cap.</li>
            <li>Capped T&amp;M Projects employ strict change management.</li>
            <li>Payment terms: 20% of cap at project start, remainder billed each week, net 15 days</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about a Capped T&amp;M project &raquo;</a></p>
       </div>
        <div class="col-md-4 plan">
          <h2>Fixed Price</h2>
          <p>
            Also for <strong>discrete projects with limited risk</strong>, we may agree offer you a 
            Fixed Price for the project. This type of project contract offers you a known cost for a known 
            deliverable.
          </p>
          <p>Additional Features Of Fixed Price Projects:</p>
          <ul>
            <li>Capped T&amp;M Projects employ strict change management.</li>
            <li>Change orders will be priced using the T&amp;A rates.</li>
            <li>Payment terms: 30% of project up front, remainder billed based on project milestones, net 15 days</li>
          </ul>
          <div class="padd25"></div>
          <p class="p-program"><a class="btn btn-primary" href="http://starboardtechnology.setmore.com" target="_blank" role="button">Inquire about a Fixed Price project &raquo;</a></p>
        </div>
      </div>

    </div>


    <hr>

    @endsection
