<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
    <div class="container-scroller">
    
    @include("admin.navbar")
    <div style ="position:relative; top:60px; right:-150px">
    <table style="border-collapse: collapse;margin: 25px 0;font-size: 0.9em;font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <thead style="background-color: #009879;color: #ffffff;text-align: left;">
        <tr style="background-color: #009879;color: #ffffff;text-align: left;">
            <th style=" padding: 12px 15px;">Name</th>
            <th style=" padding: 12px 15px;">Email</th>
            <th style=" padding: 12px 15px;">Action</th>
        </tr>
    </thead>
    <tbody style="border-bottom: 1px solid #dddddd;">
    @foreach($data as $data)
        <tr style="border-bottom: 1px solid #dddddd;" >
            <td style=" padding: 12px 15px;">{{$data->name}}</td>
            <td style=" padding: 12px 15px;">{{$data->email}}</td>
                @if($data->usertype=='0')
                    <td style=" padding: 12px 15px;"><a href="{{url('/deleteuser',$data->id)}}">DELETE</a></td>
                @else
                    <td style=" padding: 12px 15px;">NOT ALLOWED</td>
                @endif
        </tr>
    @endforeach
</tbody>
</table>
</div>

    

    </div>
    @include("admin.adminscript")
    

</body>
</html>