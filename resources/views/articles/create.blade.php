@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>New Article</h2>
                </div>
                <form action="/articles" method="post">
                    @csrf
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title"/>
                        @if($errors->has('title'))
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea class="textarea" name="excerpt"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>

                        <div class="control">
                            <textarea class="textarea" name="body"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                        <div class="control">
                            <button class="button is-text">Cancel</button>
                        </div>
                    </div>
                </form>
           </div>
        </div>
    </div>
@endsection
