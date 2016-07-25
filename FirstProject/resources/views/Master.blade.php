<!DOCTYPE html>

<html>
  <head>
      <title>Welcome on my very first page !</title>
  </head>
  <body>
    <header style ="text-align: center;"><h1>Feideus's page</h1></header>
    <div id="FirstDiv">
      <p id="FirstP"><h2 style="color: red;">I am the first Paragraph</h2></p>
    </div>
    <div id="Insert">@yield('NewText')</div>
    <div id="SecondDiv">
      <p id="SecondP"><h2 style="color: green;">I am the Second Paragraph</h2></p>
    </div>
    <footer>@yield('Javascript')</footer>
  </body>
</html>
