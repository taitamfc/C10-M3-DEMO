<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        
        //Goi view va truyen data xuong
        //cach 1
        //return view( 'customers.index', compact('customers')  );

        //cach 2
        //return view( 'customers.index')->with('customers',$customers);

        //cach 3
        $params = [ 
            'customers' => $customers,
            'name'      => 'Tam'
        ];
        return view( 'customers.index', $params );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [ 
            
        ];
        return view( 'customers.create',$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = [
            'name'  => 'required|max:255',//yeu cau va do dai toi da 255
            'email' => 'required|unique:customers',//yeu cau va duy nhat
            'phone' => 'required',//yeu cau
        ];
        $messages = [
            'name.required' => 'Ten la bat buoc',
            'email.required' => 'Email la bat buoc',
            'phone.required' => 'Phone la bat buoc',
            'unique' => 'Da ton tai'
        ];
        
        $validator = Validator::make($request->all(), $roles , $messages);

        //neu that bai, chuyen huong ve trang create
        if ($validator->fails()) {
            return redirect()->route('customers.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        //neu OK
        //luu vao CSDL
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->email = $request->email;
        $objCustomer->phone = $request->phone;
        $objCustomer->save();
        //chuyen huong ve index
        return redirect()->route('customers.index');
    }

    public function store_bk(Request $request)
    {
        $roles = [
            //'title' => 'required|unique:posts|max:255',
            'name'  => 'required|max:255',//yeu cau va do dai toi da 255
            'email' => 'required|unique:customers',//yeu cau va duy nhat
            'phone' => 'required',//yeu cau
        ];
        $messages = [
            'name.required' => 'Ten la bat buoc',
            'email.required' => 'Email la bat buoc',
            'phone.required' => 'Phone la bat buoc',
            'unique' => 'Da ton tai'
        ];
        //xac thuc du lieu
        $this->validate($request, $roles , $messages);
        //luu vao CSDL
        $objCustomer = new Customer();
        $objCustomer->name = $request->name;
        $objCustomer->email = $request->email;
        $objCustomer->phone = $request->phone;
        $objCustomer->save();
        //chuyen huong
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
