@csrf
<div class="mb-3">
    <label for="title" class="form-label">Article title</label>
    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" @isset($show_article) disabled @endisset aria-describedby="title"
           value="{{old('title')}}@isset($article){{$article->title}}@endisset">
    @error('title')
    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
    @enderror
</div>
<div class="mb-3">
    <label for="article" class="form-label">Article text</label>
    <textarea name="article" type="text" class="form-control @error('article') is-invalid @enderror" id="article" style="height: 60vh"
              @isset($show_article) disabled @endisset aria-describedby="article">{{old('article')}}@isset($article){{$article->article}}@endisset</textarea>
    @error('article')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>

@if(isset($article))

    <div>
        <select name="section_id" class="form-select mb-4 @error('section_id') is-invalid @enderror" aria-label="section_id" @isset($show_article) disabled @endisset>
            @foreach($sections as $section)
                <option value="{{$section->id}}" @isset($show_article) disabled
                        @endisset @if ($section->id == $article->section_id) selected @endif >{{$section->name}}</option>
            @endforeach
        </select>
        @error('section_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
@else
    <div class="mb-4">
        <select name="section_id" class="form-select mb-4 @error('section_id') is-invalid @enderror" aria-label="section_id">
            <option value="">--Select--</option>
            @foreach($sections as $section)
                <option value="{{$section->id}}">{{$section->name}}</option>
            @endforeach
        </select>
        @error('section_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
    </div>
@endif

@if(isset($show_article))
    <a href="{{route('articles.index')}}" class="btn btn-warning">Back</a>
@else
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{route('articles.index')}}" class="btn btn-warning">Back</a>
@endif

