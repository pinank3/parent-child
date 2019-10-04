<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Support\Facades\Redirect;
use Config;
use Auth;
use Carbon\Carbon;
use DB;
use Session;

class CustomerController extends Controller
{
    public function __construct()
   {
    $this->middleware('auth');
   }
    public function index(Request $request)
   {
        $abc = Customer::where('is_deleted', 0)->paginate(5);
            
        return view('customer.list',compact('abc'));
   }

   public function create()
    {
        return view('customer.create');
  
    }
    
    public function post(Request $request)
    {   
    $this->validate($request, [
          'name' => 'required',
          'mobile' => 'required'
      ]);

      $customer = new Customer();
      $customer->customer_name = $request->customer_name;
      $customer->mobile = $request->mobile;
      $customer->save();


        return redirect('list')->with(array('user'=>$user,'success'=>'Record Added Successfully'));
    }

    public function edit($id)
    {
        $xyz= Customer::find($id);
        return view('customer.edit',compact('xyz'));
    }

    public function update(Request $request, $id)
    {        
      $customer = Customer::find($id);
      // $customer->user_id = $user->user_id;
      $customer->customer_name = $request->name;
      $customer->mobile = $request->mobile;
      $customer->save();

        $details = Customer::where('is_deleted',0);
        return redirect('list')->with(array('mydetails'=>$details,'success'=>'Record Updated Successfully'));
    }

    public function destroy($id)
    {
        $customer=Customer::find($id);
        //$customer->delete();
        $customer->is_deleted=1;
        $customer->save();
        
        $details=Customer::where('is_deleted', 0);
        return redirect('list')->with(array('mydetails'=>$details,'success'=>'Record Deleted Successfully'));
    }

}