<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Test</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    wildcard
                </div>

                @if ($wildcard)
                    <div class="content">
                        <h1> {{$wildcard}} </h1>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
