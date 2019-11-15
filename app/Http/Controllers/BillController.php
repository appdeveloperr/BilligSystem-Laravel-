<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class BillController extends Controller
{
    public function show_home(){

        return view('pages.home');
    }

    public function show_bill_list(){


        $bills = Bill::orderBy('id')->paginate(50);
        return view('pages.bill-list')->with('bills', $bills); 


        //$isStored = 'notsuccess';
        //return view('pages.bill-list')->with('isStored',$isStored);
        //return view('pages.bill-list');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store_bill(Request $request)
   {
       $this->validate($request, [
           'name' => ['required', 'string', 'max:30'],
           'mobileno' => ['required', 'string', 'min:10'],
           'amount' => ['required', 'string', 'max:30'],
           'email' => ['string','email','max:30']
          
        ]);


        $bill = new Bill;
        $bill->name = $request->input('name');
        $bill->mobileno = $request->input('mobileno');
        $bill->email = $request->input('email');
        $bill->address = $request->input('address');
        $bill->amount = $request->input('amount');
        
        $bill->save();

       // $isStored = 'success';
        //return view('pages.bill-list')->with('isStored',$isStored);
        $bills = Bill::orderBy('id')->paginate(50);
        return view('pages.bill-list')->with('bills', $bills); 
       //return view('pages.bill-list');


   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show_bill_by_id($id)
   { 
    $user = User::find($id);
    return view('admin.show-reg-user-details')->with('user',$user);     
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
