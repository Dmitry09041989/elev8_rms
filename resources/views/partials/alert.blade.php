@if(session()->has('message_success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message_success')}}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{session()->get('error')}}
    </div>
@endif

@if(session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{session()->get('status')}}
    </div>
@endif
