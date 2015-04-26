<html lang="en" class="">
<!--<![endif]-->
<!--just testing-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9"><meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Create your account</title>
	<meta property="fb:app_id" content="131357050011">
	<link rel="icon" href="https://www.thumbtack.com/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="all" href="../../css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
	<link rel="stylesheet" type="text/css" media="all" href="../../css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">
	<link rel="stylesheet" type="text/css" media="all" href="../../css/login_m_ba4fd2ee0d745fe18ec6836b4c87a5934ed8b970.css">
</head>

<body class="primo primo-avenir primo-responsive  box-shadow multiple-backgrounds" itemscope="" itemtype="http://schema.org/WebPage">
<div class="glorious-header" data-section="header">
	<div class="wrapper">
		<div class="row header-row">
			<div class="header-logo">
				<a href="{{ URL::to('home') }}">
					<img src="../../images/logo.gif" width="152" height="29" alt="Service kaki">
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

    @endif

</span>
<div id="wrapper signup-wrapper" style="margin-top:10px;">

            <div class="container">


                <!-- Page Heading -->
                <div class="dynamic-row">

                    <div class="col-sm-2">
                        <img class="img-circle" src="../../images/pic.jpg" width="150px" height="150px">
                    </div>
                   <!-- <div class="col-sm-5">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Business details</a>
                            <a href="#" class="list-group-item">sds
                            <a href="#" class="list-group-item">sdsd</a>
                            <a href="#" class="list-group-item">sdsdsd
                       

                        </div>
                    </div>!-->

                    <div class="col-sm-5">
                        <div class="list-group">

								<a href="#" class="list-group-item active">{{$Business_name}}</a>
								 <a href="#" class="list-group-item">Selected Service : {{$Service}}</a>
								 
									@if(Session::has('id'))
										@if($selected_sp == Session::get('id'))
											<button type="submit" class="bttn blue full-width" tabindex="202">Your Service</button>
										@else
											@if($waiting == '0')
												<a href="{{ URL::to('sp_hire/'.$selected_sp.'/'.$selected_service) }}" rel="nofollow">
													<button type="submit" class="bttn blue full-width" tabindex="202">Hire</button>
												</a>
											@elseif($waiting == '2')
												<button type="submit" class="bttn blue full-width" tabindex="202">Service In Progress</button>

											@else
												
													<button type="submit" class="bttn blue full-width" tabindex="202">Waiting for Service</button>
												
											@endif	
										@endif
									@else
											<button type="submit" class="bttn blue full-width" tabindex="202">Login</button>
									@endif
			
			


							   
                             
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="dynamic-row">
                    <div class="col-lg-12">


<br>
<div class="panel panel-default" style="padding:0px;">
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
        <img style="border-radius: 50px;-webkit-border-radius: 50px;-moz-border-radius: 50px;-moz-background-clip: padding;-webkit-background-clip: padding-box;background-clip: padding-box;" width=45px;height=45px; src="../../images/b1.jpg"><span style="margin-left:5px;">{{$value->Business_Name}}</span>
        </td>
        <td>{{$value->Service}}</td>
        <td>{{$value->Price}}</td>



        <td>
		@if (Session::has('postal_code'))
		{{-- */$end=Session::get('postal_code');/* --}}
		{{-- */$start=$value->Postal_Code;/* --}}
		
		<?php
	echo "3.18km";
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
        <li><a href="#">Next</a>
        </li>
    </ul>
</div>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>


<div class="wrapper footer footer-wrapper">
<div class="footer-copyright"><p class="copyright">
            © 2015 Service kaki, Inc. All Rights Reserved •
            <a href="#" target="_blank">Privacy Policy</a> •
            <a href="#" target="_blank">Terms of Use</a></p></div>
			
			</div>

      
      </body></html>