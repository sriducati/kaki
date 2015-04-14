<html lang="en" class="">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9"><meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Create your account</title>
	<meta property="fb:app_id" content="131357050011">
	<link rel="icon" href="https://www.thumbtack.com/favicon.ico">
	<link rel="stylesheet" type="text/css" media="all" href="./css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/login_m_ba4fd2ee0d745fe18ec6836b4c87a5934ed8b970.css">
</head>

<body class="primo primo-avenir primo-responsive  box-shadow multiple-backgrounds" itemscope="" itemtype="http://schema.org/WebPage">
<div class="glorious-header" data-section="header">
	<div class="wrapper">
		<div class="row header-row">
			<div class="header-logo">
				<a href="{{ URL::to('home') }}">
					<img src="./images/logo.gif" width="152" height="29" alt="Service kaki">
				</a>
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
<span class="red-color">
    @if(Session::has('notification'))
        {{Session::get('notification')}}
    @else
        'no message';
    @endif

</span>
<div class="wrapper signup-wrapper">
    <div class="dynamic-row">

        <h1 class="title-wrapper">
            Create your account
        </h1>

        
        
        
        <div class="box">
            
    {!! Form::open(array('method' => 'POST', 'action' => 'HomeController@Post_sign_up_user', 'id' => 'register')) !!}

                <fieldset>
                    <ul>
                        <ul class="dynamic-row">
                            <li class="column-6">
                                <div class="form-field">
                                    <label for="usr_first_name">First name</label><input id="usr_first_name" name="usr_first_name" type="text" tabindex="100">
                                </div>
                            </li>   
                            <li class="column-6">
                                <div class="form-field">
                                    <label for="usr_last_name">Last name</label><input id="usr_last_name" name="usr_last_name" type="text" tabindex="101">
                                </div>
                            </li>
                        </ul>
                        <div class="form-field">
                            <label for="usr_email">Email address</label><input id="usr_email" name="usr_email" type="text" tabindex="102">
                        </div>
                        <div class="form-field">
                            <label for="usr_password">Create password</label><input id="usr_password" name="usr_password" type="password" tabindex="103">
                        </div>
                        <div class="form-field">
                            <label for="usr_number">Mobile number</label><input id="usr_email" name="usr_number" type="text" tabindex="102">
                        </div>
                    </ul>
                </fieldset>

                <p>
                    By clicking Create, you indicate that you have read and agree to the
                    <a target="_blank" href="#">Terms of Use</a> and
                    <a target="_blank" href="#">Privacy Policy</a>.
                </p>

                <fieldset>
                    <div class="form-field">
                        <button type="submit" class="bttn blue submit-bttn" tabindex="104">Create Account</button>

                    </div>
                </fieldset>
{!! Form::close() !!}

        </div>

                

    </div>
</div>


<div class="wrapper footer footer-wrapper">
<div class="footer-copyright"><p class="copyright">
            © 2015 Service kaki, Inc. All Rights Reserved •
            <a href="#" target="_blank">Privacy Policy</a> •
            <a href="#" target="_blank">Terms of Use</a></p></div>
			
			</div>

      
      </body></html>