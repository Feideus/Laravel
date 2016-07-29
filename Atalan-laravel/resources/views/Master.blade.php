<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="{{ URL::asset('Css/Master.css') }}"/>
    <title>User Management</title>
    @yield('Head')
  </head>
  <body>
    <header>
      <div>
	<h2>User Management</h2>
      </div>
    </header>
      <div>
	@yield('Header')
      </div>
    </header>
    <div id="FirstDiv">
      <p id="FirstP">
	@yield('Content')
      </p>
    </div>
    <div id="Insert">@yield('NewText')</div>
    <div id="SecondDiv">
      <p id="SecondP"></p>
    </div>
    <footer>@yield('Footer')</footer>
  </body>
</html>
