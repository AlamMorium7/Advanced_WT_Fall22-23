<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      
    </head>
    <body class="antialiased">
    
<form method="get" action="/search">
{{csrf_field()}}
<table  bgcolor="#0ff00f">
<tr><td>
<h2>
Search Ambulance:
</h2></td></tr>
	<tr><td>
<h2>
	<input type="search" name="search1" >
</h2></td>
<td>
<h2>
<input type="submit" name="Search" value="Search">
</h2></td></tr>
            </table>
            </form>	

    </body>
    
</html>

