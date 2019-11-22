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
                        <input class="input" type="text" name="title" id="title"/>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea class="textarea" name="excerpt"></textarea>
                        </div>
                    </div>
                </form>


           </div>
        </div>
    </div>
@endsection
