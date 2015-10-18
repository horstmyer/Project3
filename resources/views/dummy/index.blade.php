@extends('layouts.master')


@section('title')
    Dummy Users Form
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
    <h2>Dummy Users Generator</h2>
    <p>Please select options for your data:</p>
      <form method="POST" action="/dummy">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <input type="number" name="number" size="3" required max="11" min="1">
            <label for="number">How Many Users</label>
            <input id="email" type="checkbox" name="email"
                <?php
                  if (isset($_POST["email"]))
                      echo "true";
                ?>>
                        <label for="email">Email</label>

                        <!-- Checkbox for including random user profile description -->
                        <input id="profile" type="checkbox" name="profile"
                            <?php
                                if (isset($_POST["profile"]))
                                    echo "true";
                            ?>>
                        <label for="profile">Profile Description</label>
                        @if(count($errors) > 0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <input type="submit" value="Generate Dummy Users">
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
