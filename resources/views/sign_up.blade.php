<html lang="en" class="">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=9">
<title>Create an account</title>
<link rel="icon" href="http://www.thumbtack.com/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="./css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
<link rel="stylesheet" type="text/css" media="all" href="./css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">
<link rel="stylesheet" type="text/css" media="all" href="./css/login_m_ba4fd2ee0d745fe18ec6836b4c87a5934ed8b970.css">
</head>
<body class="primo primo-avenir primo-responsive primo-fluid  box-shadow multiple-backgrounds" itemscope="" itemtype="http://schema.org/WebPage">
<div class="glorious-header" data-section="header">
	<div class="wrapper">
		<div class="row header-row">
			<div class="header-logo">
				<a href="{{ URL::to('home') }}">
					<img src="./images/logo.gif" width="152" height="29" alt="Service kaki">
				</a>
			</div>
				<div class="header-middle-container">
			</div>
		</div>
	</div>
</div>
<label for="mobile-navigation-toggle" class="mobile-navigation-trigger"></label>
<input type="checkbox" id="mobile-navigation-toggle" class="mobile-navigation-toggle">
<div class="glorious-navigation-wrapper ">
	<div class="glorious-navigation">
		<div class="wrapper browse-wrapper empty-default" data-browse-container="">
			<ul class="navigation-row">
				<li class="mobile-navigation-item">
				<a href="{{ URL::to('login') }}" rel="nofollow">Log in</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="wrapper">
    <h1 class="title-wrapper choose-account">
        Sign up on Service kaki
    </h1>
</div>

<div class="wrapper choose-account-wrapper">
    <div class="dynamic-row">

                <div class="box service-pro-account">
            <h2>
                I want to grow my business
            </h2>
            <p class="account-description">
                Respond to customer requests and get hired
            </p>
            <a class="bttn blue create-accout-bttn" href="{{ URL::to('sign-up-sp') }}">
                Sign Up
            </a>
        </div>

                <h3 class="or choose-account">
            or
        </h3>

                <div class="box standard-account">
            <h2>
                I want to hire professionals
            </h2>
            <p class="account-description">
                Get introduced to the right pros for your projects
            </p>
            <a class="bttn blue create-accout-bttn" href="{{ URL::to('sign-up-user') }}">
                Sign Up
            </a>
        </div>

    </div>
</div>

<div class="wrapper">
    <div class="bottom-link-wrapper">
        Already have an account?
        <a href="{{ URL::to('login') }}">
            Log in
        </a>
    </div>
</div>

<div class="wrapper footer footer-wrapper">
<div class="footer-copyright"><p class="copyright">
            © 2015 Service kaki, Inc. All Rights Reserved •
            <a href="#" target="_blank">Privacy Policy</a> •
            <a href="#" target="_blank">Terms of Use</a></p></div>
			
			</div>

      
      </body></html>