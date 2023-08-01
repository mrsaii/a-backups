<DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h1>Welcome To Our Site..</h1>
    <p>This is Employee Data Four</p>

    <h3>Hi There!! {{$greeting}}</h3>


    <ul>
        @foreach($students as $value) 
        <li>{{$value}}</li>
        @endforeach
    </ul>



</body>
</html>
