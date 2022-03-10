{{-- <style>
    body {
    font-family: 'Varela Round', sans-serif;
}
.form-control {
    box-shadow: none;
    font-weight: normal;
    font-size: 13px;
}
.form-control:focus {
    border-color: #33cabb;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

.navbar {
    background: #fff;
    padding-left: 16px;
    padding-right: 16px;
    border-bottom: 1px solid #dfe3e8;
    border-radius: 0;
}
.nav img {
    border-radius: 50%;
    width: 36px;
    height: 36px;
    margin: -8px 0;
    float: left;
    margin-right: 10px;
}
.navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
    padding-left: 0;
    font-size: 20px;
    padding-right: 50px;
}

.navbar .navbar-brand b {
    font-weight: bold;
    color: #33cabb;
}
.navbar .form-inline {
    display: inline-block;
}
.navbar .nav li {
    position: relative;
}
.navbar .nav li a {
    color: #888;
}
.search-box {
    position: relative;
}
.search-box input {
    padding-right: 35px;
    border-color: #dfe3e8;
    border-radius: 4px !important;
    box-shadow: none
}
.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 7px;
    height: 100%;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
}
.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
    color: #fff;
    background: #33cabb;
    padding-top: 8px;
    padding-bottom: 6px;
    vertical-align: middle;
    border: none;
}
.navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {
    color: #fff;
    outline: none;
    background: #31bfb1;
}
.navbar .navbar-right li:first-child a {
    padding-right: 30px;
}
.navbar ul li i {
    font-size: 18px;
}
.navbar .dropdown-menu i {
    font-size: 16px;
    min-width: 22px;
}
.navbar ul.nav li.active a, .navbar ul.nav li.open > a {
    background: transparent !important;
}
.navbar .nav .get-started-btn {
    min-width: 120px;
    margin-top: 8px;
    margin-bottom: 8px;
}
.navbar ul.nav li.open > a.get-started-btn {
    color: #fff;
    background: #31bfb1 !important;
}
.navbar .dropdown-menu {
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .nav .dropdown-menu li {
    color: #999;
    font-weight: normal;
}
.navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
    padding: 8px 20px;
    line-height: normal;
}
.navbar .navbar-form {
    border: none;
    padding: 2px;
}
.navbar .dropdown-menu.form-wrapper {
    width: 280px;
    padding: 20px;
    left: auto;
    right: 0;
    font-size: 14px;
}
.navbar .dropdown-menu.form-wrapper a {
    color: #33cabb;
    padding: 0 !important;
}
.navbar .dropdown-menu.form-wrapper a:hover{
    text-decoration: underline;
}
.navbar .form-wrapper .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
    color: #fff;
    margin: 0;
    padding: 0 !important;
    font-size: 13px;
    border: none;
    transition: all 0.4s;
    text-align: center;
    line-height: 34px;
    width: 47%;
    text-decoration: none;
}
.navbar .social-btn .btn-primary {
    background: #507cc0;
}
.navbar .social-btn .btn-primary:hover {
    background: #4676bd;
}
.navbar .social-btn .btn-info {
    background: #64ccf1;
}
.navbar .social-btn .btn-info:hover {
    background: #4ec7ef;
}
.navbar .social-btn .btn i {
    margin-right: 5px;
    font-size: 16px;
    position: relative;
    top: 2px;
}
.navbar .form-wrapper .form-footer {
    text-align: center;
    padding-top: 10px;
    font-size: 13px;
}
.navbar .form-wrapper .form-footer a:hover{
    text-decoration: underline;
}
.navbar .form-wrapper .checkbox-inline input {
    margin-top: 3px;
}
.or-seperator {
    margin-top: 32px;
    text-align: center;
    border-top: 1px solid #e0e0e0;
}
.or-seperator b {
    color: #666;
    padding: 0 8px;
    width: 30px;
    height: 30px;
    font-size: 13px;
    text-align: center;
    line-height: 26px;
    background: #fff;
    display: inline-block;
    border: 1px solid #e0e0e0;
    border-radius: 50%;
    position: relative;
    top: -15px;
    z-index: 1;
}
.navbar .checkbox-inline {
    font-size: 13px;
}
.navbar .navbar-right .dropdown-toggle::after {
    display: none;
}
@media (min-width: 1200px){
    .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
    }
}
@media (max-width: 768px){
    .navbar .dropdown-menu.form-wrapper {
        width: 100%;
        padding: 10px 15px;
        background: transparent;
        border: none;
    }
    .navbar .form-inline {
        display: block;
    }
    .navbar .input-group {
        width: 100%;
    }
    .navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
        display: block;
    }
}
ul li:hover{
    background-color: #e99bbb;
  color: white;
  font-weight: bold;

}
</style> --}}

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


<script>
	/*// Prevent dropdown menu from closing when click inside the form
	// $(document).on("click", ".navbar-right .dropdown-menu", function(e){
		// e.stopPropagation();
	// });*/
</script>
</head>
<body>


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
                        <a href="/" class="navbar-brand d-flex align-items-center">
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
                    @if (Session::has('user'))
                    <li><a href="#"><strong class="text-info">Welcome </strong> <strong class="text-primary">{{ Session::get('user')['name'] }}</strong> </a></li>
                    @endif
                    <li> <a href="/">Home </a></li>
                    <li> <a href="about">About</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="color: white;">
                            Insurance Type
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-item" href="LifeInsurance">
                            <li> Life Insurance </li>
                        </a>
                            <a class="dropdown-item" href="HealthInsurance">
                                <li>Health Insurance
                                <li>
                            </a>
                            <a class="dropdown-item" href="CarInsurance">
                                <li>Car Insurance </li>
                            </a>
                            <a class="dropdown-item" href="BikeInsurance">
                                <li>Bike Insurance </li>
                            </a>
                            <a class="dropdown-item" href="#">
                                <li> More Insurance Blog </li>
                            </a>
                        </ul>
                    </li>
                    <li><a href="contact">Contact</a></li>
                    @if (Session::has('user'))
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
                    @endif
                    @if (!Session::has('user'))
                        <li class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" style="color: white;">
                                Login/SignUp </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="login">
                                    <li>Login</li>
                                </a>
                                {{-- <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="registration">
                                    <li>Signup</li>
                                </a>

                                {{-- <div class="dropdown-divider"></div> --}}
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" style="color: white">
                                {{ Session::get('user')['name'] }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="logout">
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
            @if(Session::has('user'))

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
                @if(!Session::has('user'))
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

	</div>
</nav> --}}
</body>
</html>
