<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
   <header>i am header</header>
   <div id="container">
       @section('container')
    
           
       @show
   </div>
   <footer>i am footer</footer>
</body>
</html>