<x-app-layout>
    
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
         @include("admin.admincss")
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
    <table style="border-collapse: collapse;margin: 25px 0;font-size: 0.9em;font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <thead style="background-color: #009879;color: #ffffff;text-align: left;">
        <tr style="background-color: #009879;color: #ffffff;text-align: left;">
            <th style=" padding: 12px 15px;">Name</th>
            <th style=" padding: 12px 15px;">E-mail</th>
            <th style=" padding: 12px 15px;">Guest</th>
            <th style=" padding: 12px 15px;">Phone</th>
            <th style=" padding: 12px 15px;">Time</th>
            <th style=" padding: 12px 15px;">Date</th>
            <th style=" padding: 12px 15px;">Message</th>
        </tr>
    </thead>
    <tbody style="border-bottom: 1px solid #dddddd;">
    @foreach($data as $data)
        <tr style="border-bottom: 1px solid #dddddd;" >
            <td style=" padding: 12px 15px;">{{$data->name}}</td>
            <td style=" padding: 12px 15px;">{{$data->email}}</td>
            <td style=" padding: 12px 15px;">{{$data->guest}}</td>
            <td style=" padding: 12px 15px;">{{$data->phone}}</td>
            <td style=" padding: 12px 15px;">{{$data->time}}</td>
            <td style=" padding: 12px 15px;">{{$data->date}}</td>
            <td style=" padding: 12px 15px;">{{$data->message}}</td>
    @endforeach
</tbody>
</table>
</div>
       
    
        @include("admin.adminscript")
    
  </body>
</html>