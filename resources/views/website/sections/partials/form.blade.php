@csrf
<div class="mb-3">
    <label for="name" class="form-label">Session name</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" @isset($show_section) disabled @endisset aria-describedby="name"
           value="{{old('name')}}@isset($section){{$section->name}}@endisset">
    @error('name')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
@if(isset($show_section))
    <a href="{{route('sections.index')}}" class="btn btn-warning">Back</a>
@else
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{route('sections.index')}}" class="btn btn-warning">Back</a>
@endif

