<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequests;
use App\Mail\EmailCustomer;
use App\Models\Customer;
use App\Models\Message;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
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
            'messages' => Message::messageWithCustomerID($id)->get()->all(),
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
            return redirect()->route('customers.index')->with('error', 'Customer record does not exist');
        }

        $customer->update($request->except(['_token', 'trainings']));
        $customer->trainings()->sync($request->trainings);


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

        return redirect()->route('customers.index')->with('message_success', 'Customer record has been successfully deleted');
    }

    /**
     * Show the form for sending message to a customer.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function message($id)
    {

        return view('customers.message')->with(['customer' => Customer::find($id)]);
    }

    public function storeCustomerMessage(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'customer_id' => 'required',

        ]);


        $username = auth()->user()->name;
        $userEmail = auth()->user()->email;
        $name = $data['name'];
        $title = $data['title'];
        $content = $data['content'];




        Mail::to($data['email'])->send(new EmailCustomer($username, $userEmail, $name, $title, $content));


        $message = Message::create($data);

        $message->save($data);


        return redirect()->route('customers.index')->with('message_success', 'Message was sent successfully');
    }
}
