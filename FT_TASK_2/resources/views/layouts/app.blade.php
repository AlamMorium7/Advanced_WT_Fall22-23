<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
</title>

</head>
<body>
@yield('information')
@yield('phpempty')
@yield('content')  
<form method="POST" action="/admit">	
{{csrf_field()}}
@yield('contentadmit')	
</form>

    <form method="POST" action="/profile">	
{{csrf_field()}}
@yield('contentlogin')	
</form>



<form method="Post" action="/logout">
{{csrf_field()}}
@yield('contentlogout')	   
</form>

<form method="Post" action="delete">
{{csrf_field()}}
@yield('contentDelete')	   
</form>


@yield('contentDoctor')	   


@yield('phpfill') 

</body>
</html>