<html lang="en" class="">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Welcome back to Service Kaki</title>
	<link rel="icon" href="https://www.thumbtack.com/favicon.ico">
	<link rel="stylesheet" type="text/css" media="all" href="./css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/login_m_ba4fd2ee0d745fe18ec6836b4c87a5934ed8b970.css">
</head>

<body class="primo primo-responsive  box-shadow multiple-backgrounds" itemscope="" itemtype="http://schema.org/WebPage">
<div class="glorious-header" data-section="header">
	<div class="wrapper"><div class="row header-row">
		<div class="header-logo"><a href="{{ URL::to('home') }}">
			<img src="./images/logo.gif" width="152" height="29" alt="Service Kaki"></a>
		</div>
		<div class="header-middle-container"></div>
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
<div class="wrapper content login-wrapper">
    <div class="dynamic-row">

        <h1 class="title-wrapper">
            Welcome back to Service kaki
        </h1>

                
        
        
                <div class="box">
            
              {!! Form::open(array('method' => 'POST', 'action' => 'HomeController@Post_Login')) !!}

                <fieldset>
                    <div class="form-field">
                        <label for="login_email">Email</label><input id="login_email" name="username" type="email" tabindex="100">
                    </div>
                    <div class="form-field no-validation-marker">
                        <label for="login_password">Password </label><input id="login_password" name="password" type="password" tabindex="101">
                    </div>
                    <div class="form-field switch-field">
                        <label class="switch-label">Remember me</label>
<div class="switch"><input id="remember_1" name="remember" type="checkbox" tabindex="102" value="1"><label for="remember_1" class="switch-trigger"></label></div>

                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-field">
                        <button type="submit" class="bttn blue submit-bttn" tabindex="103">Log In</button>

                    </div>
                </fieldset>
{!! Form::close() !!}

        </div>

                

                <div class="bottom-link-wrapper">
            <a href="{{ URL::to('reset-password') }}">
                Forgot your password?
            </a>
            <span class="separator">
                |
            </span>
            <a href="{{ URL::to('sign-up') }}" id="register-instead">
                Don't have an account?
            </a>
        </div>

        </div>
    </div>





<div class="wrapper footer footer-wrapper"><div class="footer-copyright"><p class="copyright">
            © 2015 Service kaki, Inc. All Rights Reserved •
            <a href="#" target="_blank">Privacy Policy</a> •
            <a href="#" target="_blank">Terms of Use</a></p></div></div>
      
      </body></html>