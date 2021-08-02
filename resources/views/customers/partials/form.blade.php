@csrf
<div class="mb-3">
    <label for="first_name" class="form-label">First name</label>
    <input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" @isset($show_customer) disabled @endisset aria-describedby="first_name"
           value="{{old('first_name')}} @isset($customer) {{$customer->first_name}} @endisset">
    @error('first_name')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="surname" class="form-label">Surname</label>
    <input name="surname" type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" @isset($show_customer) disabled @endisset aria-describedby="surname"
           value="{{old('surname')}} @isset($customer){{$customer->surname}}@endisset">
    @error('surname')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" @isset($show_customer) disabled @endisset aria-describedby="email"
           value="{{old('email')}} @isset($customer){{$customer->email}}@endisset">
    @error('email')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="street" class="form-label">Street</label>
    <input name="street" type="text" class="form-control @error('street') is-invalid @enderror" id="street" @isset($show_customer) disabled @endisset aria-describedby="street"
           value="{{old('street')}} @isset($customer){{$customer->street}}@endisset">
    @error('street')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="city" class="form-label">Town/City</label>
    <input name="city" type="text" class="form-control @error('city') is-invalid @enderror" id="city" @isset($show_customer) disabled @endisset aria-describedby="city"
           value="{{old('city')}} @isset($customer){{$customer->city}}@endisset">
    @error('city')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="postcode" class="form-label">Postcode</label>
    <input name="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" id="postcode" @isset($show_customer) disabled @endisset aria-describedby="postcode"
           value="{{old('postcode')}} @isset($customer){{$customer->postcode}}@endisset" >
    @error('postcode')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="phone_number" class="form-label">Contact number</label>
    <input name="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" @isset($show_customer) disabled @endisset aria-describedby="phone_number"
           value="{{old('phone_number')}} @isset($customer){{$customer->phone_number}}@endisset">
    @error('phone_number')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="height" class="form-label">Height (cm)</label>
    <input name="height" type="text" class="form-control @error('height') is-invalid @enderror" id="height" @isset($show_customer) disabled @endisset aria-describedby="height"
           value="{{old('height')}} @isset($customer){{$customer->height}}@endisset">
    @error('height')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="weight" class="form-label">Weight (Kg)</label>
    <input name="weight" type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" @isset($show_customer) disabled @endisset aria-describedby="weight"
           value="{{old('weight')}} @isset($customer){{$customer->weight}}@endisset">
    @error('weight')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    @foreach($trainings as $training)
        <div class="form-check">
            <input class="form-check-input" name="trainings[]" type="checkbox" @isset($show_customer) disabled @endisset
                   value="{{$training->id}} " id="{{$training->name}}"
            @isset($customer)
                @if(in_array($training->id, $customer->trainings->pluck('id')->toArray()))
                    checked
                @endif
                @endisset
            >
            <label class="form-check-label" for="{{$training->name}}">
                {{$training->name.' training session'}}
            </label>
        </div>
    @endforeach
</div>

@if(isset($show_customer))
    <a href="@if(session()->has('customers_url'))
    {{session()->get('customers_url')}}
    @else
        {{route('customers.index')}}
    @endif" class="btn btn-warning">Back</a>
@else
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{session()->get('customers_url')}}" class="btn btn-warning">Back</a>
@endif
