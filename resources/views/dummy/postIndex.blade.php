@extends('layouts.master')


@section('title')
    Your paragraphs
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')

    <section>
      <div class="output">
        <h2>Your Data:</h2>
          <hr/>
          @foreach ($users as $user)
            <h4>Name: {{ $user['name'] }}</h4>
          @if( isset($user['email']) )
            <p>Email: {{ $user['email'] }}</p>
          @endif
          @if( isset($user['profile']) )
            <p>Profile: {{ $user['profile'] }}</p>
          @endif
          @endforeach

      </div>
    </section>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
