<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequests;
use App\Models\Customer;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        Session::put('customers_url', request()->fullUrl());



//        return view('customers.index', ['customers' => Customer::paginate(13), 'page_heading' => 'Customers'] );
        return view('customers.index', ['customers' => Customer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

        return view('customers.create', ['trainings' => Training::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCustomerRequests $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreCustomerRequests $request)
    {

        $validData = $request->validated();

        $customer = Customer::create($validData);

        $customer->trainings()->sync($request->trainings);

        if(session('customers_url'))
        {
            return redirect(session('customers_url'))->with('message_success', 'Customer record has been successfully created');
        }

        return redirect()->route('customers.index')->with('message_success', 'Customer record has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return view('customers.show', [
            'trainings' => Training::all(),
            'customer' => Customer::find($id),
            'show_customer' => true,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('customers.edit', [
            'trainings' => Training::all(),
            'customer' => Customer::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        if(!$customer)
        {
            if(session('customers_url'))
            {
                return redirect(session('customers_url'))->with('error', 'Customer record does not exist');
            }
            return redirect()->route('customers.index')->with('error', 'Customer record does not exist');
        }

        $customer->update($request->except(['_token', 'trainings']));
        $customer->trainings()->sync($request->trainings);

        if(session('customers_url'))
        {
            return redirect(session('customers_url'))->with('message_success', 'Customer record has been successfully updated');
        }

        return redirect()->route('customers.index')->with('message_success', 'Customer record has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Customer::destroy($id);

        if(session('customers_url'))
        {
            return redirect(session('customers_url'))->with('message_success', 'Customer record has been successfully deleted');
        }

        return redirect()->route('customers.index')->with('message_success', 'Customer record has been successfully deleted');
    }
}
