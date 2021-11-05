@csrf
<div class="mb-3">
    <label for="name" class="form-label">Session name</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" @isset($show_training) disabled @endisset aria-describedby="name"
           value="{{old('name')}}@isset($training){{$training->name}}@endisset">
    @error('name')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
@isset($show_training)
    <a href="{{route('trainings.index')}}" class="btn btn-warning">Back</a>
@else
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{route('trainings.index')}}" class="btn btn-warning">Back</a>
@endisset

