<DOCTYPE html>
<html>
<head>
    <title>Staff Page</title>
</head>
<body>

    <h1>Welcome To Our Site..</h1>
    <p>This is Staff Party Total is {{$total}}</p>
    <ul>
        <li><a href="{{URL::to('staffs')}}">Home</a></li>
        <li><a href="{{route('staffs.party')}}">Show</a></li>
        <li><a href="">Status</a></li>
    </ul>

</body>
</html>