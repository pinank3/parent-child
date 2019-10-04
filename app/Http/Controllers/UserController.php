<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
   {
    $this->middleware('auth');
   }
    public function dashboard()
    {
        return view('users.dashboard');
    }
 
    public function logout()
    {
        return view('welcome');
    }

    public function index(Request $request)
    {
        
        $users=User::where('is_deleted', 0)->paginate(5);
        $abc = Customer::where('is_deleted', 0)->paginate(5);
        
        return view('users.index',compact('abc'))->with('users',$users);
  
}
    public function create()
    {
        return view('users.create');
  
    }
    
    public function store(Request $request)
    {   
    $this->validate($request, [
          'email' => 'email|required|unique:users',
          'password' => 'required|min:4',
          'name' => 'required',
          'mobile' => 'required'
      ]);

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->save();


      $customer = new Customer();
      // $customer->user_id = $user->user_id;
      $customer->customer_name = $request->customer_name;
      $customer->mobile = $request->mobile;
      $customer->save();


        return redirect('index')->with(array('user'=>$user,'success'=>'Record Added Successfully'));
    }

    public function edit($id)
    {
        $abc= User::find($id);
        $xyz= Customer::find($id);
        return view('users.edit',compact('xyz'))->with('abc',$abc);
    }

    public function update(Request $request, $id)
    {        
         

      $user = User::find($id);
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->save();


      $customer = Customer::find($id);
      $customer->user_id = $user->user_id;
      $customer->name = $request->name;
      $customer->mobile = $request->mobile;
      $customer->save();

        $details=User::where('is_deleted', 0);
        $abc = Customer::where('is_deleted',0);
        return redirect('index')->with(array('mydetails'=>$details,'success'=>'Record Updated Successfully'));
    }

    public function delete($id)
    {
        $users=User::find($id);
        //$users->delete();
        $users->is_deleted=1;
        $users->save();
        
        $details=User::where('is_deleted', 0);
        return redirect('index')->with(array('mydetails'=>$details,'success'=>'Record Deleted Successfully'));
    }
}