<?php

if (isset($Sub_Categories))
    $Sub_Categories_present = '1';
else
    $Sub_Categories_present = '0';

?>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Welcome to Service kaki</title>
	<link rel="icon" href="https://www.thumbtack.com/favicon.ico">

	<link rel="stylesheet" type="text/css" media="all" href="./css/icons_m_01458ec25c5300d2f59e9990ce754911c8552dab.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/core_m_50558508020bbfbb9f56dc021988411f9297abfe.css">
	<link rel="stylesheet" type="text/css" media="all" href="./css/signup_m_314a18e067d73d4ccb8bdef2b71f2f1d045dd889.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap-3.2.0.min.css">

	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<style>
	span{color:black;}
	.back{cursor: pointer; 
		   cursor: hand;}

	</style>
	<script type="text/javascript">
	$(function(){

        var Sub_Categories_present = '<?php echo $Sub_Categories_present;?>';


        if(Sub_Categories_present == '1')
        {
            $(".first-form").hide();
            $(".second-form").show();
            $("#step2").show();
        }



     
        $('#hide_others').change(function () {
			if($("#hide_others").is(':checked')){
					$("#hide_others_value").attr("readonly", false);
					$("#hide_others_value1").attr("readonly", false);
				}
			else
			{
				$("#hide_others_value").attr("readonly", true);
				$("#hide_others_value1").attr("readonly", true);
				}
        });
		
		$('.cat_price').change(function () {
		var cat_price_id = $(this).attr("id");
		
			if($("#"+cat_price_id).is(':checked'))
            {
                $("#price_"+cat_price_id).show();
                $("#price_"+cat_price_id).prop('disabled', false);
            }
				

				
			else
            {
                $("#price_"+cat_price_id).hide();
                $("#price_"+cat_price_id).prop('disabled', true);
            }

        });
		
		

        //$("#txtAge").hide();



            
            //$("#hide_others_value").show();

        
		//$("#first_form_submit").click(function(){
            //console.log($('#first-form-category').val());
          // alert('clicked');
            /*var j_second_val = $('#first-form-category').val();


              $.get("/kaki/public/sign-up-sp", { sub_category: j_second_val},
                function(data) {
                  if(data!="error") {
                    //alert("Data loaded successfully: " + data);

                  }
                });





			$(".first-form").hide();
			$(".second-form").show();
			$("#step2").show();*/
		//});
		
		$(".continue").click(function(){
			$(".first-form").hide();
			$(".second-form-step").hide();
			var id= $(this).attr("id");
			var number = id.split("_").pop();
			
            if(number==2 || number==4)
            {
                
                if(number==2)
                {
                     if($(".sub_cat_2:checkbox:checked").length==0)
                     {

                        $("#error_display_sub").show();
                        $("#step"+(parseInt(number))).show();

                     }   
                     else{

                        $("#step"+(parseInt(number)+parseInt(1))).show();
                     }
                }
                if(number==4)
                {
                     if($(".remote_2:checkbox:checked").length==0)
                     {

                        $("#error_display_remote").show();
                        $("#step"+(parseInt(number))).show();

                     }   
                     else{

                        $("#step"+(parseInt(number)+parseInt(1))).show();
                     }
                }
            }


            if(number==3 || number==5)
            {

                if(number==3)
                {
                   var empty_text_boxe_count = $(".business_location").filter(function(){
                    return $.trim($(this).val()) == '';
                }).length;

                     if(empty_text_boxe_count!=0)
                     {

                        $("#error_display_location").show();

                            $(".business_location").each(function(){
                            
                                var error_id = $(this).attr("id");
                                if($("#"+error_id).val()=='')
                                {
                                    console.log(error_id);
                                    $("#"+error_id).css({"border":"1px solid red"})
                                }
                                else{
                                    $("#"+error_id).css({"border":"1px solid #bbb"})
                                }
                               
                            });


                        $("#step"+(parseInt(number))).show();

                     }   
                     else{
                         
                        $("#step"+(parseInt(number)+parseInt(1))).show();
                     }
                }

                if(number==5)
                {
                   var empty_text_box_count = $(".business").filter(function(){
                        return $.trim($(this).val()) == '';
                    }).length;

                     if(empty_text_box_count!=0)
                     {

                        $("#error_display_business").show();

                            $(".business").each(function(){
                            
                                var error_id = $(this).attr("id");
                                if($("#"+error_id).val()=='')
                                {
                                    console.log(error_id);
                                    $("#"+error_id).css({"border":"1px solid red"})
                                }
                                else{
                                    $("#"+error_id).css({"border":"1px solid #bbb"})
                                }
                               
                            });


                        $("#step"+(parseInt(number))).show();

                     }   
                     else{
                        $("#first-name").prop('required',true);
                        $("#last-name").prop('required',true);
                        $("#email").prop('required',true);
                        $("#password").prop('required',true);
                        $("#phone").prop('required',true);
                        $("#step"+(parseInt(number)+parseInt(1))).show();
                     }
                }


            }

			//$("#step"+(parseInt(number)+parseInt(1))).show();
		});
		
		$(".back").click(function(){
			var id= $(this).attr("id");
			var number = id.split("_").pop();
			if(number==2)
			{
				$(".second-form").hide();
				$(".first-form").show();
			}
			else{
				$(".first-form").hide();
				$(".second-form-step").hide();
				//console.log(parseInt(number)-parseInt(1));
				$("#step"+(parseInt(number)-parseInt(1))).show();
			}

		});
		
	
	});
	</script>
</head>

<body class="primo primo-responsive primo-fluid box-shadow multiple-backgrounds landing-page" style="background:radial-gradient(circle at 60% 30%, rgba(0, 0, 0, 0.0980392), rgba(0, 0, 0, 0.701961)), 50% 0% no-repeat;">






<div class="header"><a href="{{ URL::to('home') }}" class="logo"><img src="./images/logo.gif" alt="Service Kaki"></a><div class="navigation"><a href="#">Why join Service Kaki?</a></div></div>


<div class="wrapper content ng-scope" >
    <div class="hook ng-scope first-form" id="step1">


              {!! Form::open(array('method' => 'POST', 'action' => 'HomeController@Post_sign_up_sp', 'class' => 'ng-dirty ng-valid ')) !!}
            
            <h1 style="font-size: 50px;">
                Meet new customers
                <div ng-class="{'has-custom-entry-point': customEntryPoint}" class="subtitle ng-binding">
                    Service kaki sends pros like you
                     requests from customers. You 
                    decide who to respond to and send a quote.
                </div>
            </h1>
            <fieldset>
                <label >
                    What do you do?
                </label>
                <div class="form-field form-field-category">
                    <select name="category" id="first-form-category"  ng-model="service.category.name" ng-options="key as key for (key, data) in categories" class="ng-dirty ng-valid ng-valid-required first-form-category">
                        @if($All_Categories)
                           @foreach($All_Categories as $key=>$value)
                                @if($value->Parent_Id=='0')
                                    <option value="{{$value->id}}">{{$value->Service}}</option>
                                @endif  
                           @endforeach
                        @endif
                    </select>
                    <div  class="subtext-form subtext-form-invalid" style="display: none;">
                        Please select what you do.
                    </div>
                </div>
                <div class="form-field form-field-nav" ng-class="{'has-custom-entry-point': customEntryPoint}">
                    <button class="bttn" id="first_form_submit" value="sub_category"  name="final_submit" type="submit" ng-disabled="hook.$invalid">
                        Get Started
                    </button>
                </div>
                <a href="#" class="how-it-works">How Service kaki works</a>

            </fieldset>

          
            <p class="nevermind"  style="display: none;">
                <a href="#" target="_self">Start in a different profession</a>
            </p>

            <!-- ngIf: !customEntryPoint --><div ng-if="!customEntryPoint" class="ng-scope">
                <!-- ngRepeat: index in slides --><div class="slide slide-0" ng-class="{'current': slide == index}" ng-repeat="index in slides"></div><div class="slide slide-1" ng-class="{'current': slide == index}" ng-repeat="index in slides"></div><div class="slide slide-2 current" ng-class="{'current': slide == index}" ng-repeat="index in slides"></div>
            </div>
    
    </div>
	
    <div   class="container second-form" style="color:#000000;display: none;">

        <h1 class="header-copy"  style="">
            Last week, <strong class="ng-binding">2,924</strong> customers
            came to Service kaki looking for <strong class="ng-binding">photographers and videographers</strong>!
        </h1>

        <div   class="ng-scope second-form-step" id="step2" style="display: none;">
            <div name="services" class="pod ng-pristine ng-valid" ng-submit="next()" novalidate="">
                <div class="pod-header">
                    <h2>Which of these services do you provide?</h2>
                    <h3>Tell us what you do so we can send you the right customers.</h3>
                </div>
                 <div id="error_display_sub" style="display:none;padding-left: 50px;color: red;">
                    Please select atleast one option.
                </div>
                <div class="pod-content">
                    <fieldset data-fieldset="services">
                        <div class="form-field form-field-services">
                            <div class="checkbox-section">
                                <!-- ngRepeat: service in services -->
                                 @if(isset($Sub_Categories))
                                    @foreach($All_Categories as $key=>$value)
                                        @if($value->Parent_Id == $Sub_Categories)

                                        <div ng-repeat="service in services" role="presentation" class="ng-scope">
                                            <label role="option" class="ng-binding select-option">
                                                <input type="checkbox" name="Sub_Categories_values[]" class="cat_price sub_cat_2" id={{$key}} value="{{$value->id}}" class="radio ng-pristine ng-valid">
                                                {{$value->Service}}
												
												<input type="text" style="width:15%;display:none;" disabled="disabled" id=price_{{$key}} name="Sub_Categories_price[]"  value="" placeholder="Price" class="ng-pristine ng-valid">
												
                                            </label>
                                        </div>



                                        @endif
                                    @endforeach
                                @endif            

                                 <div role="presentation">
                                    <span role="option" ng-class="{'select-option': true, 'selected': !!otherService}" aria-selected="false" class="select-option">
                                        <input type="checkbox" id="hide_others" class="sub_cat_2">

                                        <input type="text" id="hide_others_value" style="width:50%" readonly ng-model="otherService" name="other_Sub_Categories_values"  value="" placeholder="Other" class="ng-pristine ng-valid">
										
										<input type="text" id="hide_others_value1" style="width:15%" readonly ng-model="otherService" name="other_Sub_Categories_price"  value="" placeholder="Price" class="ng-pristine ng-valid">
										
                                    </span>
                                </div>

                        
                            </div>
                        </div>
                    </fieldset>
                </div>
                    <div class="form-field form-field-nav pod-footer">
        <span type="button" class="bttn continue" id="continue_2">Continue →</span>
            <span class="back" id="back_2">← Back</span>

    </div>

            </div>
        </div>

        <div  class="ng-scope second-form-step" id="step3" style="display: none;">
            <div name="address" class="pod address ng-pristine ng-invalid ng-invalid-required" ng-submit="next()" novalidate="">
                <div class="pod-header">
                    <h2>Where are you located?</h2>
                    <h3>If you don't have a business address, use your home address.</h3>
                </div>
                <div class="pod-content">
                    <fieldset>
                        <div class="form-field-address-1 form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.street"><div ng-transclude="">
                            <label for="street" class="ng-scope">Street address</label>
                            <input type="text" id="street" name="street" ng-model="service.address.street"  class="business_location ng-scope ng-pristine ng-invalid ng-invalid-required">
                        </div><span class="subtext-form subtext-form-invalid" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-address-2 form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.unit"><div ng-transclude="">
                            <label for="unit" class="ng-scope">Suite/apt</label>
                            <input type="text" id="unit" name="unit" ng-model="service.address.unit" class="business_location ng-scope ng-pristine ng-valid">
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-city form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.city"><div ng-transclude="">
                            <label for="city" class="ng-scope">City</label>
                            <input type="text" id="city" name="city" ng-model="service.address.city"  class="business_location ng-scope ng-pristine ng-invalid ng-invalid-required">
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-state form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.state"><div ng-transclude="">
                            <label for="state" class="ng-scope">State</label>
                            <input type="text" id="state" name="state" ng-model="service.address.state"  ng-pattern="/^[A-Z]{2}$/i" class="business_location ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-zip form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.zip"><div ng-transclude="">
                            <label for="zip" class="ng-scope">Zip code</label>
                            <input type="text" id="zip" name="zip" ng-model="service.address.zip"  ng-pattern="/^[0-9]{5}$/" pattern="[0-9]*" class="business_location ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                    </fieldset>
                    <fieldset>
                        <legend>Privacy</legend>
                        <div class="form-field-privacy form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="address.privacy"><div ng-transclude="">
                            <label class="inline ng-scope">
                                <input type="radio" name="privacy" ng-model="service.address.privacy" value="0" class="ng-pristine ng-valid">
                                Show only my city and state to customers
                            </label>
                            <label class="inline ng-scope">
                                <input type="radio" name="privacy" ng-model="service.address.privacy" value="1" class="ng-pristine ng-valid">
                                Show my full address to customers
                            </label>
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                    </fieldset>
                </div>
                    <div class="form-field form-field-nav pod-footer">
        <button type="button" class="bttn continue" id="continue_3">Continue →</button>
		
            <span  ng-click="back()" class="back" id="back_3" >← Back</span>

    </div>

            </div>
        </div>

        <div  class="ng-scope second-form-step" id="step4" style="display: none;">
            <div name="travel" class="pod travel-preferences ng-pristine ng-valid" ng-submit="next()" novalidate="">
                <div class="pod-header">
                    <h2>Where do you do business?</h2>
                    <h3>Help us send you the right customers by telling us where you work.</h3>
                </div>
                 <div id="error_display_remote" style="display:none;padding-left: 50px;color: red;">
                    Please select atleast one option.
                </div>
                <div class="pod-content">
                    <fieldset>
                        <div class="form-field form-field-travel-preferences">
                            <div class="checkbox-section">
                                <!-- ngRepeat: key in preferenceKeys --><div role="presentation" checkbox="" ng-repeat="key in preferenceKeys" ng-model="preferences[key].selected" class="ng-scope ng-pristine ng-valid"><label role="option" aria-selected="false" ng-class="{'select-option': true, 'selected': ngModel}" class="select-option"><input type="checkbox" value="1" name="service_type[]" class="remote_2 radio ng-pristine ng-valid" ng-model="ngModel"><span ng-transclude=""><span class="ng-scope ng-binding">

                                    I travel to my customers
                                </span></span></label></div><div role="presentation" checkbox="" ng-repeat="key in preferenceKeys" ng-model="preferences[key].selected" class="ng-scope ng-pristine ng-valid"><label role="option" aria-selected="false" ng-class="{'select-option': true, 'selected': ngModel}" class="select-option"><input type="checkbox" value="2" name="service_type[]" class="remote_2 radio ng-pristine ng-valid" ng-model="ngModel"><span ng-transclude=""><span class="ng-scope ng-binding">

                                    My customers travel to me
                                </span></span></label></div><div role="presentation" checkbox="" ng-repeat="key in preferenceKeys" ng-model="preferences[key].selected" class="ng-scope ng-pristine ng-valid"><label role="option" aria-selected="false" ng-class="{'select-option': true, 'selected': ngModel}" class="select-option"><input type="checkbox" value="3" name="service_type[]" class="remote_2 radio ng-pristine ng-valid" ng-model="ngModel"><span ng-transclude=""><span class="ng-scope ng-binding">

                                    Neither (phone or Internet only)
                                </span></span></label></div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset ng-show="preferences.tocustomer.selected" style="display: none;">
                        <div class="form-field form-field-map">
                            <img src="about:blank" ng-src="about:blank" width="680 " height="338 " zip-map="" zip="service.address.zip" radius="service.travel.distance">
                        </div>
                        <div class="form-field-travel-distance form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="travel.distance"><div ng-transclude="">
                            <label class="ng-scope">
                                How far are you willing to travel?
                                <select name="distance" ng-model="service.travel.distance" ng-options="d.miles as d.label for d in distances" class="ng-pristine ng-valid"><option value="0">1 mile</option><option value="1">2 miles</option><option value="2">3 miles</option><option value="3">5 miles</option><option value="4">10 miles</option><option value="5">20 miles</option><option value="6" selected="selected">30 miles</option><option value="7">40 miles</option><option value="8">50 miles</option><option value="9">100 miles</option></select>
                            </label>
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                    </fieldset>
                </div>
                    <div class="form-field form-field-nav pod-footer">
        <button type="button" class="bttn continue" id="continue_4">Continue →</button>
            <span ng-click="back()" class="back" id="back_4" >← Back</span>

    </div>

            </div>
        </div>

        <div  class="ng-scope second-form-step" id="step5" style="display: none;">
            <div name="profile" class="pod profile ng-pristine ng-invalid ng-invalid-required" ng-submit="next()" novalidate="">
                <div class="pod-header">
                    <h2>Describe your business.</h2>
                    <h3>Tell customers about your business and what services you provide.</h3>
                </div>
                <div class="pod-content">
                    <fieldset>
                        <div class="form-field-business-name form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="profile.name"><div ng-transclude="">
                            <label for="business-name" class="ng-scope">Business name</label>
                            <input type="text" id="Business_Name" name="Business_Name" ng-model="service.name"  ng-maxlength="255" class="business ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength">
                            <span class="subtext-form ng-scope">
                                If your business has no official name, use something
                                descriptive, like “Julie's House Cleaning”.
                            </span>
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-website form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="profile.website"><div ng-transclude="">
                            <label for="website" class="ng-scope">Website</label>
                                                        <input type="text" id="website" name="Business_website" ng-model="service.website" class="business ng-scope ng-pristine ng-valid">
                            <span class="subtext-form ng-scope">
                                Optional
                            </span>       
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field-description form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="profile.description"><div ng-transclude="">
                            <label for="description" class="ng-scope">
                                Business description
                            </label>
                            <textarea id="description" name="Business_description" ng-model="service.description"  no-contact="" ng-minlength="100" class="business ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-contact"></textarea>
                            <span class="subtext-form ng-scope">
                                Tell customers what you do and what makes your business great.
                                <a href="" ng-click="examples.toggleVisibility()">(examples)</a>
                                <br>(100 characters minimum)
                            </span>
                        </div><span class="subtext-form subtext-form-invalid" ng-show="invalid()" style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        <div class="form-field form-field-description-example" ng-show="examples.visible" style="display: none;">
                            <p>
                                I am a San Francisco-based portrait and product
                                photographer. My career began in high school where I took photos of
                                student groups for the yearbook. Since then, I've been dedicated
                                to capturing the beauty and energy of people and their work.
                            </p>
                        </div>
                        <div class="form-field form-field-description-example" ng-show="examples.visible" style="display: none;">
                            <p>
                                I became a personal trainer to help people transform their
                                lives and I want to see you accomplish more than you can on your
                                own. It is difficult to find the time and motivation, so I will
                                push you to accomplish your goals.
                            </p>
                        </div>
                    </fieldset>
                </div>
                    <div class="form-field form-field-nav pod-footer">
        <button type="button" class="bttn continue" id="continue_5">Continue →</button>
            <span ng-click="back()" class="back" id="back_5" >← Back</span>

    </div>

            </div>
        </div>

        <div  class="ng-scope second-form-step" id="step6" style="display: none;">
            <div name="account" class="pod account ng-pristine ng-invalid ng-invalid-required" ng-submit="submit()" novalidate="">
                <div class="pod-header">
                    <h2>How can we contact you?</h2>
                    <h3>
                        Tell us where we should send customer requests for your services.
                    </h3>
                </div>
                <div class="pod-content">
                    <fieldset>
                        <div class="dynamic-row">
                            <div class="form-field-name-segment form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.firstName"><div ng-transclude="">
                                <label for="first-name" class="ng-scope">First name</label>
                                <input type="text" id="first-name" name="firstName" ng-model="service.user.name.first"  ng-minlength="2" class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-minlength">
                            </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                            <div class="form-field-name-segment form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.lastName"><div ng-transclude="">
                                <label for="last-name" class="ng-scope">Last name</label>
                                <input type="text" id="last-name" name="lastName" ng-model="service.user.name.last"  ng-minlength="2" class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-minlength">
                            </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        </div>
                        <div class="dynamic-row">
                            <div class="form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.email"><div ng-transclude="">
                                <label for="phone" class="ng-scope">Email address</label>
                                <input type="email" id="email" name="email" ng-model="service.user.email"  class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                            </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength -->
                                </span>
                            </div>
							<div class="form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.email"><div ng-transclude="">
                                <label for="email" class="ng-scope">Password</label>
                                <input type="password" id="email" name="password" ng-model="service.user.email"  class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                            </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength -->
                                </span>
                            </div>
							
                            <div class="form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.phone"><div ng-transclude="">
                                <label for="phone" class="ng-scope">Phone number</label>
                                <input type="phone" id="phone" name="phone" ng-model="service.phone.number"  pattern="[0-9]*" class="ng-scope ng-pristine ng-invalid ng-invalid-required ng-valid-phone">
                            </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --><span ng-if="field.$error.required" class="ng-scope">Required</span> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                        </div>
                        <div class="form-field-sms-preference form-field form-field" ng-class="{valid: valid(), invalid: invalid()}" field="" expr="account.sms"><div ng-transclude="">
                            <label class="inline ng-scope">
                                <input type="checkbox" name="sms" ng-model="service.phone.sms" class="ng-pristine ng-valid">
                                Notify me by text message of new customer requests and messages
                            </label>
                        </div><span class="subtext-form subtext-form-invalid"  style="display: none;"><!-- ngIf: field.$error.required --> <!-- ngIf: field.$error.pattern || field.$error.phone || field.$error.email --><!-- ngIf: field.$error.contact --><!-- ngIf: field.$error.minlength --><!-- ngIf: field.$error.maxlength --></span></div>
                    </fieldset>

                </div>
                <div class="form-field form-field-nav pod-footer">
                    <div role="presentation" class="nav-container">
                        <button type="submit" class="bttn" value="main_submit"  name="final_submit" ng-disabled="working"> 
                            <!-- ngIf: !working --><span ng-if="!working" class="ng-scope">Sign Up</span>
                            <!-- ngIf: working -->
                        </button>
                            <span ng-click="back()" class="back" id="back_6" >← Back</span>

                    </div>

                    <div class="conditions">
                        <p>
                            By clicking “Sign Up”, you are indicating that you have
                            read and agreed to the <a href="#" target="_blank">terms of use</a>.
                        </p>
                        <p>
                            Your carrier's message and data rates may apply to text messages.
                            You are not required to agree to receive text messages as a condition of
                            using Service kaki's service.
                        </p>
                    </div>
                </div>
                 </div>
         {!! Form::close() !!}
        </div>

        <ul class="reasons">
            <li class="clients">
                <h4>Find new customers and grow your business</h4>
            </li>
            <li class="control-requests">
                <h4>Control the requests you receive</h4>
            </li>
            <li class="leads">
                <h4>Free to sign up, pay as you go</h4>
            </li>
        </ul>
    </div>
	
</div>


</body>
</html>