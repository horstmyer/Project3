<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body style="background-color:#650f3c">
	<!-- Begin Header Div -->
  	<div class="header">
  		<a href='/'><img src="/images/DevFriendLogo.jpg" alt="Developers Friend"/></a>
  		<h2>Here you will find useful Tools to use in your development efforts.</h2>
      	<hr/>
    	<h3>Lorem Ipsum Generator</h3>
        <p class="button"><a href='/dummy'>Generate<br /> Paragraphs</a></p>
    		<p>Lorem Ipsum is dummy text that you can use whilst you are waiting to get the real copy.  This allows you to get a better understanding of how your pages might look with real words.  With this tool you can choose from 1 to 9 paragraphs of dummy words. </p>
        <hr>
      	<h3>Fake Data Generator</h3>
          <p class="button"><a href='/dummy'>Generate Dummy Users</a></p>
    		<p>With this tool you can generate dummy data that may be useful in your development efforts to create users.  Choose the number of users and what additional data you would like to include.</p>

	</div>
    <!-- Begin Output Area -->
	<div class="output">
		<hr/>
	</div>
	<section>
    	@yield('content')
	</section>
    <!-- Begin Footer -->
	<div class="footer">
    	<p>&copy; 2015 Linda Horstmyer</p>
    </div>
</body>
</html>
