<!DOCTYPE html><!--[if IE 7 ]><html lang="en" class="ie7 default"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 default"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9 default"><![endif]--><!--[if (gt IE 9)|!(IE)]><!-->  
<html lang="en" class=""><!--<![endif]-->

<head>


    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
  <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-combobox.js"></script>

<style type="text/css">
  span.glyphicon-eye-open {
    font-size: 1.2em;
}
</style>

 <script type="text/javascript">
 $(function(){
//alert('asas');
//$(".cover-story").hide().show("slide", { direction: "left" }, 25000);

   // alert('kothi');
   var i=0;
setInterval(function(){ 
    i=i+1;
    
    if(i==4)
    {
        i=1
    }
    $(".hero").css({"background": "radial-gradient(circle at 60% 30%, rgba(0,0,0,0.1), rgba(0,0,0,0.7)),url(./images/b"+i+".jpg) center top no-repeat"});
}, 4000);
   



//$(".hero").css({"background-color":"red"})

 $('.combobox').combobox();
 
 $("#continue").click(function(){
 $("#select_services").hide();
 $("#select_zip").show();
 
 });
 
 $(".Search_Advanced").click(function(){

	var my_id = $(this).attr("id");
	$(".dropdown_input").val("");
	$(".combobox").val("");
	$('#sp_heading,#service_heading').toggle();
	$('#Search_Advanced1,#Search_Advanced2').toggle();
	$('#search_sp,#search_services').toggle();
 
 });

 });
 </script>
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Service Kaki</title>
    <meta property="og:description" content="Get custom quotes from verified pros for events, home, lessons, wellness and more in 24 hours">
    <meta name="description" content="Get custom quotes from verified pros for events, home, lessons, wellness and more in 24 hours">
    <link rel="icon" href="http://www.thumbtack.com/favicon.ico">

	<link rel="stylesheet" type="text/css" href="./css/dropdown.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="./css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
    <link rel="stylesheet" type="text/css" media="all" href="./css/core_m_787605084797ce704413a3b35d490a34df1be0de.css">
    <link rel="stylesheet" type="text/css" media="all" href="./css/homepage_m_10a40a1c6926c1c25b6423fe71fc2a4c9ac17122.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-3.2.0.min.css">

	</head>
<style>
.dropdown-menu{
width:100%;
max-height:144px;
overflow-y:auto;
};
</style>
<body class="primo primo-avenir primo-responsive primo-fluid  box-shadow multiple-backgrounds ng-scope" itemscope="" itemtype="http://schema.org/WebPage">
    <div class="glorious-header" data-section="header">
        <div class="wrapper">
            <div class="row header-row">
                <div class="header-logo"><a href="{{ URL::to('home') }}"><img src="./images/logo.gif" width="152" height="29" alt="ServiceKaki"></a>
                </div>
                <div class="header-middle-container"></div>
                <div class="header-navigation "><a href="{{ URL::to('sign-up') }}" rel="nofollow" class="gray-link">Sign Up</a><a href="{{ URL::to('login') }}" rel="nofollow" class="gray-link log-in-link">Sign in</a>
                </div>
            </div>
        </div>
    </div>

<div class="sticky-cta ng-scope ng-isolate-scope invisible" sticky-header="" sticky-partner-attr="data-sticky-partner" ng-class="{visible: visible, invisible: !visible}" ng-controller="SmartyController" throttle-ms="250" visible="visible">
    <div class="wrapper">
        <div class="logo"></div>
        <form action="http://www.thumbtack.com/request" method="get" ng-submit="submitClicked()" class="ng-pristine ng-invalid ng-invalid-required">
            <input name="query" tabindex="2" class="query ng-isolate-scope ng-pristine ng-invalid ng-invalid-required" required="" autocomplete="off" placeholder="What services do you need?" type="text" smarty-input="" select="setSelected(x)" index="selected" list-items="suggestions" close="suggestionPicked()" selection-made="selectionMade" ng-model="prefix">

                                <!--[if gt IE 8]><!-->
                    <div smarty-suggestions-box="" class="autocomplete-suggestions-menu outer ng-isolate-scope invisible" sticky-header="" sticky-partner-attr="data-sticky-partner" throttle-ms="250" visible="visible" ng-class="{visible: visible, invisible: !visible}"><!-- ngIf: suggestions.length > 0 --></div>
                <!--<![endif]-->
            <input class="zip ng-pristine ng-invalid ng-invalid-required" name="zipCode" tabindex="3" required="" pattern="[0-9]*" placeholder="Zip code" type="text" autocomplete="off" ng-model="zip" focus-when="false" focus-me="">
            <button type="submit" class="bttn blue" tabindex="4">
                Get Started
            </button>
            <input name="origin" value="homepage" type="hidden">
        </form>
        <a href="http://www.thumbtack.com/#request-form" class="bttn blue replacement-bttn">Get Started</a>
    </div>
</div>
<div data-overview="" class="overview ng-scope" ng-controller="SlidesController">
    <div class="hero full-block ng-scope" data-hero="" ng-controller="SmartyController">
        <div class="wrapper">
            <div class="dynamic-row" style="max-width:365px;">

                <!--<div class="copy">
                    <h1>Accomplish your personal projects</h1>
                    <div class="cover-stories">

                            <div class="cover-story slide cover-story-0" style="display:none;">
                                <div class="avatar">
                                    <img src="./images/asasevent.jpg">
                                </div>
                                <div class="testimonial">
                                    <p>
                                        Sarah created a memorable wedding day
                                    </p>
                                </div>
                            </div>

                            <div class="cover-story slide cover-story-1" style="display:none;">
                                <div class="avatar">
                                    <img src="./images/interior-design.jpg">
                                </div>
                                <div class="testimonial">
                                    <p>
                                        Jeff hired Laurie to redesign his living room
                                    </p>
                                </div>
                            </div>

                            <div class="cover-story slide cover-story-2" style="display:none;">
                                <div class="avatar">
                                    <img src="./images/asaswellness.jpg">
                                </div>
                                <div class="testimonial">
                                    <p>
                                        Samantha recovered from an injury and got in shape
                                    </p>
                                </div>
                            </div>

                            <div class="cover-story slide cover-story-3" style="display:none;">
                                <div class="avatar">
                                    <img src="./images/asasatutoring.jpg">
                                </div>
                                <div class="testimonial">
                                    <p>
                                        Jessica taught Sayuri to play the piano
                                    </p>
                                </div>
                            </div>

                    </div>
                </div>
				-->

                <div class="form-area">
					
					{!! Form::open(array('method' => 'POST', 'action' => 'HomeController@Post_index')) !!}

                      
                        <div class="box" id="select_services">
                            <div class="box-header">
                                <h2>Get introduced to pros</h2>
                            </div>
                            <div class="box-content">
                                <fieldset>
                                    <div class="form-field" data-request-form="">
                                        <label id="service_heading">What service do you need?</label>
										<label id="sp_heading" style="display:none!important;">Select a service provider</label>


<div id="search_services">										
<select class="combobox" name="services" id="Search_Advanced1_1">
	 <option></option>


    @if(isset($sp_categories))
    @foreach($sp_categories as $key=>$value)
	 <option value="{{$value->id}}">{{$value->Service}}</option>
	@endforeach
	@endif
</select>
</div>

<div id="search_sp" style="display:none;">
<select class="combobox" name="sp" id="Search_Advanced2_1">
<option></option>
    @if(isset($sp_info))
    @foreach($sp_info as $key=>$value)
	 <option value="{{$value->SP_Users_Id}}">{{$value->Business_Name}}</option>
	@endforeach
	@endif
</select>
</div>
<br>
<span class="Search_Advanced" id="Search_Advanced1" style="cursor:help;">Search By Sp</span>
<span class="Search_Advanced" id="Search_Advanced2" style="display:none;cursor:help;">Search By Services</span>

                                    </div>
                                    <!--<div class="form-field" data-sticky-partner="">
                                        <label>Where do                                          <input name="zipCode" id="service-zipcode" type="text" pattern="[0-9]*" class="search-zipcode ng-pristine ng-invalid ng-invalid-required" placeholder="Zip code" autocomplete="off" tabindex="201" ng-model="zip" required="" focus-when="false" focus-me="">
<span style="
    line-height: 40px;
"><a href="{{ URL::to('map') }}" onclick="window.open('{{ URL::to('map') }}', 'newwindow', 'width=700, height=700'); return false;">Find Your Postal Code</a></span>
                                    </div>-->
                                    <div class="form-field">
                                        <button type="button" class="bttn blue full-width" id="continue" tabindex="202">
                                            Continue
                                        </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
						
					<div class="box" id="select_zip" style="display:none;">
                            <div class="box-header">
                                <h2>Enter Zip Code</h2>
                            </div>
                            <div class="box-content">
                                <fieldset>
                                    <div class="form-field" data-request-form="">
										
<input name="zipCode" id="service-zipcode" type="text" pattern="[0-9]*" class="search-zipcode ng-pristine ng-invalid ng-invalid-required" placeholder="Zip code" autocomplete="off" tabindex="201" ng-model="zip" required="" focus-when="false" focus-me="">
<span style="
    line-height: 40px;
"><a href="{{ URL::to('map') }}" onclick="window.open('{{ URL::to('map') }}', 'newwindow', 'width=700, height=700'); return false;">Find Your Postal Code</a></span>
                                    </div>
                                    <!--<div class="form-field" data-sticky-partner="">
                                        <label>Where do                                          <input name="zipCode" id="service-zipcode" type="text" pattern="[0-9]*" class="search-zipcode ng-pristine ng-invalid ng-invalid-required" placeholder="Zip code" autocomplete="off" tabindex="201" ng-model="zip" required="" focus-when="false" focus-me="">
<span style="
    line-height: 40px;
"><a href="{{ URL::to('map') }}" onclick="window.open('{{ URL::to('map') }}', 'newwindow', 'width=700, height=700'); return false;">Find Your Postal Code</a></span>
                                    </div>-->
                                    <div class="form-field" style="width:100%;display:inline-block;">
									<button type="Submit" style="width:33%;display:inline-block;" class="bttn blue full-width" tabindex="202">
                                            Back
                                        </button>
										
                                        <button type="Submit" style="width:40%;display:inline-block;margin-left:24%;" class="bttn blue" tabindex="202">
                                            Submit
                                        </button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
						
						
						
						
						
						
						
						
						
                    {!! Form::close() !!}

                </div>
				
				
				

            </div>
        </div>
        
        <!-- ngRepeat: index in slides -->
        <div class="slider slider-0" style="background-color:red;"></div>
        <!-- end ngRepeat: index in slides -->
        <div class="slider slider-1" style="background-color:red;"></div>
        <!-- end ngRepeat: index in slides -->
        <div class="slider slider-2" style="background-color:red;"></div>
        <!-- end ngRepeat: index in slides -->

    </div>
        <div class="full-block navigation-row">
        <div class="wrapper" data-browse-categories="">
		<ul class="navigation-row" data-click-source="header/categories">
            <li class="home_improvement"><a href="#"><span>Home</span></a></li>
            <li class="events"><a href="#"><span>Events</span></a></li>
            <li class="lessons"><a href="#"><span>Lessons</span></a></li>
            <li class="wellness"><a href="#"><span>Wellness</span></a></li>
            <li class="more_services"><a href="{{ URL::to('sp_details')}}"><span>Account</span></a></li>
    </ul>
</div>
    </div>


<div class="container" style="padding-left:0px;padding-right:0px;">  
<div class="panel panel-default container" style="padding:0px;">
<table class="table table-condensed table-hover table-aligned">
    <tbody class="text-left">
        <tr>
            <th >Sp Name</th>
            <th >Services</th>
            <th >Price</th>
            <th >Distance</th>
            <th >View</th>
        </tr>
    </tbody>
    <tbody class="text-left">
    @if(isset($services_info))
    @foreach($services_info as $key=>$value)
    <tr>
        <td>
        <img style="border-radius: 50px;-webkit-border-radius: 50px;-moz-border-radius: 50px;-moz-background-clip: padding;-webkit-background-clip: padding-box;background-clip: padding-box;" width=45px;height=45px; src="./images/b1.jpg"><span style="margin-left:5px;">{{$value->Business_Name}}</span>
        </td>
        <td>{{$value->Service}}</td>
        <td>{{$value->Price}}</td>



        <td>
		@if (Session::has('postal_code'))
		{{-- */$end=Session::get('postal_code');/* --}}
		{{-- */$start=$value->Postal_Code;/* --}}
		
		<?php
	echo "3.8km";
		/*$postcode1=$start;
		$postcode2=$end;
		
		$url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=$postcode2&destinations=$postcode1&mode=driving&language=en-EN&sensor=false";
 
		$data = @file_get_contents($url);
		 
		$result = json_decode($data, true);
		 
		// print_R($result['rows'])
	
		foreach($result['rows'] as $distance) {
		
			if($distance['elements'][0]['status'] == 'OK')
			{
				echo $distance['elements'][0]['distance']['text'] . ' (' . $distance['elements'][0]['duration']['text'] . ' in current traffic)';
			}
			else
			{
				echo 'Distance can not be calculated';
			}
			
			
			
		}*/
		?>

		
		@endif
		</td>
        <td>
        <a class="btn btn-default btn-sm" href="{{ URL::to('sp_name/'.$value->SP_User_Id.'/'.$value->Service_Id) }}" id="edit-45"><span class="glyphicon glyphicon-search"></span>
        </a>
        </td>
    </tr>
    @endforeach
    @endif

    </tbody>
</table>  
</div>
<div class="pagination pull-right">
    <ul class="pagination pull-right">
        <li><a href="#">Prev</a>
        </li>
        <li class="active"><a href="#">1</a>
        </li>
        <li><a href="#">2</a>
        </li>
        <li><a href="#">3</a>
        </li>
        <li><a href="#">4</a>
        </li>
        <li><a href="#">5</a>
        </li>
        <li><a href="#">Next</a>
        </li>
    </ul>
</div>
</div>

  <div class="how-works full-block">
        <div class="wrapper wrapper-title">
            <h2>We help you hire experienced professionals at a price that's right for you</h2>
            <span class="subtitle">How does ServiceKaki help?</span>
        </div>
        <div class="wrapper">
            <div class="dynamic-row step-1">
                <div class="image">
                    <img src="./images/step-1.jpg">
                </div>
                <div class="text">
                    <h3>1. Get introduced to pros</h3>
                    <p>
                        Tell us about your needs and we'll introduce you to several experienced
                        professionals in your area who are ready to complete your project. </p>
                </div>
            </div>
            <div class="dynamic-row step-2">
                <div class="image">
                    <img src="./images/step-2.jpg">
                </div>
                <div class="text">
                    <h3>2. Compare professionals</h3>
                    <p>Within hours, interested and available professionals will send you custom
                     quotes. Each quote includes:
                    </p>
                    <div class="dynamic-row">
                        <ul class="column-6">
                            <li>Price estimate</li>
                            <li class="reviews">Customer reviews</li>
                            <li class="contact">Contact info</li>
                        </ul>
                        <ul class="column-6">
                            <li class="message">Personalized message</li>
                            <li class="profile">Business profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dynamic-row step-3">
                <div class="image">
                    <img src="./images/step-3.jpg">
                </div>
                <div class="text">
                    <h3>3. Hire the right pro</h3>
                    <p>When you're ready, hire an experienced professional at a price that's right
                    for you.</p>
                </div>
            </div>
        </div>
    </div>




    <div class="states full-block" style="padding: 45px 0 35px;">
        <div class="wrapper">
            <ul>
                <li style="width:100%;"> © 2015 Servicekaki. All rights reserved</li>

            </ul>
        </div>
    </div>

</div> 
 
 </body></html>