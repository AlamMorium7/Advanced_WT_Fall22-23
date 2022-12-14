<!DOCTYPE html>
<html>
    <head>
        <title>

</title>

</head>
<body><h4><table  border="1">
    <tr>
    <td>
        A_ID
    </td>
    <td>
        A_Type
    </td>
    <td>
        HName
    </td>
    <td>
        Availability
    </td>
    <td>
        Dri_Phone
    </td>

    </tr>
    @foreach($ambulance1 as $ambulance)
    <tr>
    <td>{{$ambulance['A_ID']}}</td>
    <td>{{$ambulance['A_Type']}}</td>
    <td>{{$ambulance['HName']}}</td>
    <td>{{$ambulance['Availability']}}</td>
    <td>{{$ambulance['Dri_Phone']}}</td>

    </tr>
    @endforeach
</table></h4>
</body>
</html>