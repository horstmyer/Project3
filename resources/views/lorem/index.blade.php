@extends('layouts.master')


@section('title')
    Lorem Ipsum Form
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('content')
<div class="output">
    <h2>Lorem Ipsum Generator</h2>
    <p>Please enter how many paragraphs you require:</p>
    <form method="POST" action="/lorem">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <input type="number" name="number" size="5" required max="9" min="1">
            @if(count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <input type="submit" value="Generate Lorem">
    </form>
  </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
