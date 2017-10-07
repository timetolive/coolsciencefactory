
<!-- Nav -->

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Starboard Technology Partner</a>
        <div class="slogan bLight">We put the wind in your sails</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('homeActive')">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @yield('pricingActive')">
              <a class="nav-link" href="/pricing">Pricing</a>
            </li>
            <li class="nav-item @yield('salesforceActive')">
              <a class="nav-link disabled" href="#">Salesforce</a>
            </li>
            <li class="nav-item @yield('shopifyActive')">
              <a class="nav-link disabled" href="#">Shopify</a>
            </li>
            <li class="nav-item @yield('agileActive')">
              <a class="nav-link disabled" href="#">Agile</a>
            </li>
          </ul>
          <!--form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form-->
        </div>
      </nav>
