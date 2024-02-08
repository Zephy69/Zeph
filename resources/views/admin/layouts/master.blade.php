<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            margin:0;
            padding: 0px;;
            height: 100vh;
            align-items:center;
            position:relative;
            text-align: center;
        }
        header{
            top:0; 
            position:absolute;
            text-align:center;
            background-color:black;
            color:white;
            width:100%;
        }
        footer{
            bottom:0;
            text-align:center;
            background-color:black;
            color:white;
            position:absolute;
            width:100%;
        }
</style>
</head>
<body> 
<nav> 
    <header>
        <h1>This is header</h1>
 </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer><h3>Copyright @2024 </h3></footer>  
</body>
</html>