<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="card ">
        <table class="table ">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Street</th>
                <th scope="col">Town/City</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->name.' '.$customer->surname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->street}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->phone_number}}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('customers.show', $customer->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('customers.edit', $customer->id)}}">Edit</a>
                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();
                                    document.getElementById('delete-customer-form-{{$customer->id}}').submit()">
                            Delete
                        </button>
                        <form id="delete-customer-form-{{$customer->id}}" action="{{route('customers.destroy', $customer->id)}}" method="POST" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{$customers->links()}}

    </div>
    <div class="mt-3 ">
        <a class="btn btn-sm btn-success float-end" href="{{route('customers.create')}}">Create</a>
    </div>
</div>
