<?php 

namespace App\Http\Controllers;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		


		$sp_info = \DB::table('sp_service_info')->distinct('SP_Users_Id','Business_Name')->select('SP_Users_Id','Business_Name')->get();
		
		
		$sp_categories = \DB::table('sp_service_categories')->where('Parent_Id','!=','0')->select()->get();
		
		$services_info = \DB::table('sp_user_categories')
			->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_user_categories.SP_User_Id')
			->join('SP_Service_Categories','SP_Service_Categories.id','=','sp_user_categories.Service_Id')
			->distinct('service')
			->select('Service','Business_Name','SP_User_Id','Price','Service_Id','Postal_Code')->get();


		return view('index')->with('sp_info',$sp_info)->with('sp_categories',$sp_categories)->with('services_info',$services_info);

	}
	
	public function Post_index()
	{

	
		\Session::put('postal_code',\Input::get('zipCode') );
		
		$sp_info = \DB::table('sp_service_info')->distinct('SP_Users_Id','Business_Name')->select('SP_Users_Id','Business_Name')->get();

		
		$sp_categories = \DB::table('sp_service_categories')->where('Parent_Id','!=','0')->select()->get();
		
		
		if(\Input::get('services')!='')
		{
			$services_info = \DB::table('sp_user_categories')
			->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_user_categories.SP_User_Id')
			->join('SP_Service_Categories','SP_Service_Categories.id','=','sp_user_categories.Service_Id')
			->where('sp_user_categories.Service_Id',\Input::get('services'))
			->distinct('service')
			->select('Service','Business_Name','SP_User_Id','Price','Service_Id','Postal_Code')->get();
		}
		else {
		
			$services_info = \DB::table('sp_user_categories')
			->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_user_categories.SP_User_Id')
			->join('SP_Service_Categories','SP_Service_Categories.id','=','sp_user_categories.Service_Id')
			->where('sp_user_categories.SP_User_Id',\Input::get('sp'))
			->distinct('service')
			->select('Service','Business_Name','SP_User_Id','Price','Service_Id','Postal_Code')->get();

		}
		//print_R($services_info);
		//exit;
		
		
		return view('index')->with('sp_info',$sp_info)->with('sp_categories',$sp_categories)->with('services_info',$services_info);

	}

	public function map()
	{
		
		return view('map');

	}
	
	public function sp_hire($id,$service_id)
	{
		
		
		
		$insert_pending = \DB::table('sp_pending_services')->insert(array('User_Id'=>\Session::get('id'),'Sp_Id'=>$id,'Service_Id'=>$service_id,'Active'=>'1','Created_Date'=>\Carbon\Carbon::now()));
		
		$waiting = '1';
		
		$sp_service_info = \DB::table('sp_service_categories')
		->where('id',$service_id)
		->select()->get();
		
		$services_info = \DB::table('sp_user_categories')
			->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_user_categories.SP_User_Id')
			->join('SP_Service_Categories','SP_Service_Categories.id','=','sp_user_categories.Service_Id')
			->where('sp_user_categories.SP_User_Id',$id)
			->distinct('service')
			->select('Service','Business_Name','SP_User_Id','Price','Service_Id','Postal_Code')->get();
			
		$Business_name = $services_info[0]->Business_Name;
		$Service = $sp_service_info[0]->Service;
		
		
		return redirect('sp_name/'.$id.'/'.$service_id)->with('services_info',$services_info)->with('Business_name',$Business_name)->with('Service',$Service)->with('selected_sp',$id)->with('selected_service',$service_id)->with('waiting',$waiting);
	}

	public function sp_name($id,$service_id)
	{



		/*$service_info = \DB::table('SP_Service_Categories')
		->where('SP_Service_Categories.id',$service_id)
		->select()->get();*/
		$waiting = '0';
		$sp_service_info = \DB::table('sp_service_categories')
		->where('id',$service_id)
		->select()->get();
		
		$pending = \DB::table('sp_pending_services')->where('Sp_Id',$id)->where('Service_Id',$service_id)->where('User_Id',\Session::get('id'))->where('Deleted','0')->select('Active')->get();
		
		if($pending)
		{
			$waiting = $pending[0]->Active;

		}
		

		$services_info = \DB::table('sp_user_categories')
			->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_user_categories.SP_User_Id')
			->join('SP_Service_Categories','SP_Service_Categories.id','=','sp_user_categories.Service_Id')
			->where('sp_user_categories.SP_User_Id',$id)
			->distinct('service')
			->select('Service','Business_Name','SP_User_Id','Price','Service_Id','Postal_Code')->get();
			
		$Business_name = $services_info[0]->Business_Name;
		$Service = $sp_service_info[0]->Service;
		
		return view('sp_name')->with('services_info',$services_info)->with('Business_name',$Business_name)->with('Service',$Service)->with('selected_sp',$id)->with('selected_service',$service_id)->with('waiting',$waiting);

	}
	
	public function sign_up()
	{
		
		return view('sign_up');

	}

	public function search()
	{
		return 'search';	
	}
	public function Post_Search()
	{
		return Input::all();	
	}

	public function sign_up_sp()
	{
		

		$All_Categories = \DB::table('SP_Service_Categories')->select()->get();
		return view('sign_up_sp')->with('All_Categories',$All_Categories);

	}

	public function Post_sign_up_sp()
	{


//return \Input::all();

		$All_Categories = \DB::table('SP_Service_Categories')->select()->get();
		if(\Input::get('final_submit')=='sub_category')
		{
			$Sub_Categories = \Input::get('category');
			
			\Session::put('main_category', \Input::get('category'));
			
			return view('sign_up_sp')->with('Sub_Categories',$Sub_Categories)->with('All_Categories',$All_Categories);
		}		
		

		$Insert_users_info = \DB::table('sp_users_info')->insertGetId(array('Name'=>\Input::get('firstName').' '.\Input::get('lastName'),'Email'=>\Input::get('email'),'Password'=>\Hash::make(\Input::get('password')),'Mobile_Number'=>\Input::get('phone'),'SP'=>'1','Active'=>'0','Updated_At'=>\Carbon\Carbon::now()));
		if(\Input::get('service_type'))
		{
			$service_type = \Input::get('service_type');
			foreach($service_type as $key=>$value)
			{
				$Insert_service_info = \DB::table('sp_service_info')->insertGetId(
				array('SP_Users_Id'=>$Insert_users_info,'Service_Type'=>$value,'Mobile_Number'=>\Input::get('phone'),'Email'=>\Input::get('email'),'Address'=>\Input::get('unit').' '.\Input::get('street').' '.\Input::get('city'),'Postal_Code'=>\Input::get('zip'),'Privacy'=>\Input::get('privacy'),'Business_Name'=>\Input::get('Business_Name'),'Business_website'=>\Input::get('Business_website'),'Business_description'=>\Input::get('Business_description'),
				'Updated_At'=>\Carbon\Carbon::now()));

			}
		}
		
		
		if(\Input::get('other_Sub_Categories_values')!='')
		{
			$Service_categories = array('Service'=>\Input::get('other_Sub_Categories_values'),'Description'=>\Input::get('other_Sub_Categories_values'),'Parent_Id'=>\Session::get('main_category'),'User_Created'=>'1');
			$Insert_new_categories = \DB::table('SP_Service_Categories')->insertGetId($Service_categories);	
			$Insert_user_category = \DB::table('sp_user_categories')->insert(array('SP_User_Id'=>$Insert_users_info,'Service_Id'=>$Insert_new_categories,'Price'=>\Input::get('other_Sub_Categories_price')));	
		}
		
		if(\Input::get('Sub_Categories_values'))
		{
			$Sub_Categories_values = \Input::get('Sub_Categories_values');
			$Sub_Categories_price = \Input::get('Sub_Categories_price');
			
			//exit;

			foreach($Sub_Categories_values as $key=>$value)
			{
				$Insert_new_user_category = \DB::table('sp_user_categories')->insert(array('SP_User_Id'=>$Insert_users_info,'Service_Id'=>$value,'Price'=>$Sub_Categories_price[$key]));	
			
			}
			
		}


		return view('login');

	}

	public function sign_up_user()
	{
		
		return view('sign_up_user');

	}

	public function Post_sign_up_user()
	{
		
		$Member = '0';
		$Active_account = '1';	

		if(\Input::get('member')=='sp')
		{
			$Member = '1';
			$Active_account = '0';	
		}

		$Register_data = array(
		'Name'=>(\Input::get('usr_first_name').' '.\Input::get('usr_last_name')),
		'Email'=>strtolower(\Input::get('usr_email')),
		'Password'=>\Hash::make(\Input::get('usr_password')),
		'Mobile_Number'=>\Input::get('usr_number'),
		'SP'=>$Member,
		'Active'=>$Active_account,
		'Updated_At'=>\Carbon\Carbon::now()
		);

		$Insert_data = \DB::table('Sp_Users_Info')->insertGetId($Register_data);

		if($Insert_data)
		{
			return redirect('sign-up-user')->with('notification','User registration successfull');
		}
		else
		{
			return redirect('sign-up-user')->with('notification','Can not register User at this time');
		}

	}

	public function login()
	{
		return view('login');
	}
	
	public function reset_password()
	{
		return view('reset_password');
	}
	
	public function Post_Login()
	{
		$rules=array(
			'username'=>'required',
			'password'=>'required|alphaNum|min:3'
			);
		$validator=\Validator::make(\Input::all(),$rules);

		if($validator->fails()){
			return Redirect::to('/')
			->withErrors($validator)
			->withInput(\Input::except('password'));	

		}
		else
		{
				$userdata=array(
					'email'=>\Input::get('username'),
					'password'=>\Input::get('password')
					);

			if(\Auth::attempt($userdata))
			{

				$id = \DB::table('sp_users_info')
						 ->where('email', '=', \Input::get('username'))
						 ->select('id','Name')
						 ->get();	
			
				\Session::put('id', $id[0]->id);
				\Session::put('name', $id[0]->Name);
				\Session::put('log_nick_name', \Input::get('username'));
				\Log::info('User  '.\Session::get('log_nick_name').'  has Logged in');
				
				//echo \Session::get('id').\Session::get('log_nick_name');
				//echo '<br>'.'logged in';
				//exit;
		
		
				

				return \Redirect::to('logged_home');
			}
				
			else{

				return \Redirect::to('login')->with('logout_message','Incorrect username or password,Please check correctly.');
			}

		}
	}
	
	public function Delete_Service()
	{
	
		$delete_client_serice_request = \DB::table('sp_pending_services')->where('User_Id',\Input::get('User_Id'))
		->where('Service_Id',\Input::get('Service_Id'))->update(array('Deleted' => '1'));
		
		return \Redirect::to('sp_details');
	
	}
	
	public function logged_home()
	{

		return view('logged_home');
	
	}
	
	public function client_name($user_id,$service_id)
	{
	
	

	$get_user_info = \DB::table('sp_users_info')->where('id',$user_id)->select('Name','email','Mobile_Number')->get();
	$update_read_info = \DB::table('sp_pending_services')->where('Sp_Id',\Session::get('id'))->where('User_Id',$user_id)->where('Service_Id',$service_id)->update(array('Read' =>'1'));

		/*$delete_client_serice_request = \DB::table('sp_pending_services')->where('User_Id',\Input::get('User_Id'))
		->where('Service_Id',\Input::get('Service_Id'))->update(array('Deleted' => '1'));*/
		
		return view('client_name')->with('get_user_info',$get_user_info);
	
	}
	
	public function sp_details()
	{
	
		$Hired_Services = \DB::table('sp_hired_services')
		->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_hired_services.SP_Id')
		->join('sp_service_categories','sp_service_categories.id','=','sp_hired_services.Service_Id')
		->select()->get();
		
		
		return view('sp_details')->with('Hired_Services',$Hired_Services);

	}
	
	
	public function user_details()
	{
	
		$Hired_Services = \DB::table('sp_hired_services')
		->join('sp_service_info','sp_service_info.SP_Users_Id','=','sp_hired_services.SP_Id')
		->join('sp_service_categories','sp_service_categories.id','=','sp_hired_services.Service_Id')
		->select()->get();
		
		
		return view('user_details')->with('Hired_Services',$Hired_Services);

	}
	
	
	
	public function waiting_sp_approval()
	{
		$notification_count = \DB::table('sp_pending_services')->where('Sp_Id', '=', \Session::get('id'))->where('Read', '=', '0')->where('Deleted', '=', '0')->count();
		
		\Session::put('notification_count',$notification_count);
		
		$client_info = \DB::table('sp_pending_services')->join('sp_users_info','sp_users_info.id','=','sp_pending_services.User_Id')
		->join('sp_service_categories','sp_service_categories.id','=','sp_pending_services.Service_Id')
		->where('sp_pending_services.Sp_Id', '=', \Session::get('id'))->where('sp_pending_services.Deleted', '=', '0')->select()->get();

		return view('waiting_sp_approval')->with('client_info',$client_info);
	}

}
