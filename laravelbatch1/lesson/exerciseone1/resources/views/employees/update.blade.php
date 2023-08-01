<DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h1>Welcome To Our Site..</h1>
    <p>This is Employees Update</p>

    @php 
        echo "<pre>".print_r($employee,true)."</pre>";
    @endphp


    <ul>
        @foreach($employee as $value)
        <!-- <li>{{$value}}</li> -->
        <li>{!!$value!!}</li>
        @endforeach
    </ul>

   



</body>
</html>
