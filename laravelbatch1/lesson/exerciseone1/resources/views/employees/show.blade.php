<DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h1>Welcome To Our Site..</h1>
    <p>This is Employees Show</p>

    @php 
        echo "<pre>".print_r($employeedata,true)."</pre>";
        echo $employeedata["name"]."<br/>";
    @endphp


    <ul>
        @foreach($employeedata as $value)
        <!-- <li>{{$value}}</li> -->
        <li>{!!$value!!}</li>
        @endforeach
    </ul>

   



</body>
</html>
