<html lang="en" class=""><!--<![endif]--><head>


    <style type="text/css">@charset    "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <style type="text/css">@charset    "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">@charset    "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap-combobox.js"></script>

  <script type="text/javascript">	
	function ConfirmDelete()
	{		
		  if(confirm("Are you sure you want to delete the service request?"))
			document.forms[0].submit();
		  else
			return false;
	
	}
</script>	
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

	<link rel="stylesheet" type="text/css" href="../../css/dropdown.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="../../css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
    <link rel="stylesheet" type="text/css" media="all" href="../../css/core_m_787605084797ce704413a3b35d490a34df1be0de.css">
		<link rel="stylesheet" type="text/css" media="all" href="../../css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">

    <link rel="stylesheet" type="text/css" media="all" href="../../css/homepage_m_10a40a1c6926c1c25b6423fe71fc2a4c9ac17122.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-3.2.0.min.css">

	<style>
.dropdown-menu{
width:100%;
max-height:144px;
overflow-y:auto;
};
</style></head>

<body>
    
<div data-overview="" class="container-fluid overview ng-scope" ng-controller="SlidesController">
    
    <div class="full-block navigation-row" style="margin-bottom:50px;margin-top:0px;">
		<ul class="navigation-row" data-click-source="header/categories" style="margin:0;">
				<li class="Homepage"><a href="{{ URL::to('home') }}"><span>Home</span></a></li>
				<li class="events"><a href="#"><span><span class="badge">
				@if(Session::has('notification_count'))
						{{Session::get('notification_count')}}
				@else
					{{0}}
				@endif			
				</span>Waiting for acceptance</span></a></li>
				
				<li class="lessons"><a href="#"><span>services</span></a></li>
				<li class="wellness"><a href="#"><span>Settings</span></a></li>
				<li class="more_services"><a href="#"><span>Logout</span></a></li>
		</ul>
    </div>
	
<div class="container" style="padding-left:0px;padding-right:0px;">  
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

							@if(isset($get_user_info))
							@foreach($get_user_info as $key=>$value)
								<a href="#" class="list-group-item active">User Contact Information</a>
								<a href="#" class="list-group-item">User Name : {{$value->Name}}</a>
								<a href="#" class="list-group-item">User Phone Number : {{$value->Mobile_Number}}</a>
								<a href="#" class="list-group-item">User Email Address : {{$value->email}}</a>
								<a href="" rel="nofollow">
									<button type="submit" class="bttn blue full-width" tabindex="202">Accept</button>
								</a>
							@endforeach
							@endif

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
 
 </body>
 </html>