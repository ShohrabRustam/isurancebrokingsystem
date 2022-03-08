<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        /* overflow: hidden; */
        background-color: #333333;
        text-align: center;
    }
       li {
        float: left;
        text-align: center;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 16px;
        text-decoration: none;
        text-align: center;
    }

    li a:hover {
        background-color: #111111;
    }

    ul li:hover {
        background-color: #a675f7;
    }

</style>
{{-- <nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-light" style="margin-top:10px; ">
	<div class="navbar-header">
		<a class="navbar-brand" href="/">m<b>Brokerage</b></a>
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="/">Home</a></li>
			<li><a href="about">About</a></li>
			<li class="dropdown">
                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Insurance  Type
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="HealthInsurance">Health Insurance</a><li>
                <div class="dropdown-divider"></div>
                <li> <a class="dropdown-item" href="LifeInsurance">Life Insurance </a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="CarInsurance">BIke Insurance</a></li>
                <div class="dropdown-divider"></div>
                <li> <a class="dropdown-item" href="BikeInsurance">Car Insurance </a></li>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>

                <li> <a class="dropdown-item" href="#">More Insurance Blog</a></li>
                </ul>
            </li>
            <li><a href="contact">Contact</a></li>
            @if (Session::has('user'))

            <li class="dropdown">
                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Your Policies </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#"></a>Your Life Insurance Policies<li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#"></a>Your Health Insurance Policies<li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#"></a>Your Bike Insurance Policies</li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#"></a>Your Car Insurance Policies</li>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <li> <a class="dropdown-item" href="#"></a> Claim</li>
                </ul>
            </li>
            @endif

		</ul>

		<ul class="nav navbar-nav navbar-right">
            <li>
                @if (!Session::has('user'))
                <a  class="" href="login">Login</a>
    			<li>
                <a href="registration" class=" ">Sign up</a>

                @else

                <a class="btn btn-info dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true">
                    {{Session::get('user')['name']}}
                </a>

                  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                    <li> <a class="dropdown-item" href="logout">Logout</a></li>

                  </ul>


					</li>

                    @endif
				</ul>
			</li>

		</ul>

	</div> --}}

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            {{-- <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div> --}}
        </div>
    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark shadow-sm">

        <div class="container">
            <ul>
                <li>
                    <a href="admin" class="navbar-brand d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"
                            class="mr-2" viewBox="0 0 24 24">
                            <path
                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                        m <strong class="text-primary">Brockerage</strong>
                    </a>
                </li>
                <li> <a href="admin">Home </a></li>
                <li> <a href="#">About</a></li>

                @if (!Session::has('user'))
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            Login/SignUp </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <li @if (Session::has('user'))
                                <li class="dropdown">
                                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="true">
                                        Your Policies </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">
                                            <li>Your Life Insurance Policies</li>
                                        </a>
                                        {{-- <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item" href="#">
                                            <li>Your Life Insurance Policies</li>
                                        </a>

                                        {{-- <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item" href="#">
                                            <li>Your Bike Insurance Policies</li>
                                        </a>
                                        {{-- <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item" href="#">
                                            <li> Your Car Insurance Policies</li>
                                        </a>
                                        {{-- <div class="dropdown-divider"></div>
                                        <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item" href="#">
                                            <li>Claim</li>
                                        </a>
                                    </ul>
                                </li>
                            @endif>Login</li>
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="#">
                                <li>Signup</li>
                            </a>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            {{ Session::get('user')['name'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <li>Log Out</li>
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
