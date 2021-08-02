<?php

namespace  App\Http\Controllers;




Class UserController extends Controller
{
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
}

