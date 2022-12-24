<x-app-layout>
    
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
         @include("admin.admincss")
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position:relative;top:60px;right:-150px">
            <form action="{{url('/foodupload')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div>
                    <label>Title</label>
                    <input style="color:green" type="text" name="title" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color:green" type="num" name="price" required>
                </div>
                <div>
                    <label>Description</label>
                    <input style="color:green" type="text" name="description" required>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <input style="color:green" type="submit" value="save" >
                </div>
            </form>
            <div>
    <table style="border-collapse: collapse;margin: 25px 0;font-size: 0.9em;font-family: sans-serif;min-width: 400px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <thead style="background-color: #009879;color: #ffffff;text-align: left;">
        <tr style="background-color: #009879;color: #ffffff;text-align: left;">
            <th style=" padding: 12px 15px;">Title</th>
            <th style=" padding: 12px 15px;">Price</th>
            <th style=" padding: 12px 15px;">Discription</th>
            <th style=" padding: 12px 15px;">image</th>
            <th style=" padding: 12px 15px;">Action</th>
            <th style=" padding: 12px 15px;">Update</th>
        </tr>
    </thead>
    <tbody style="border-bottom: 1px solid #dddddd;">
    @foreach($data as $data)
        <tr style="border-bottom: 1px solid #dddddd;" >
            <td style=" padding: 12px 15px;">{{$data->title}}</td>
            <td style=" padding: 12px 15px;">{{$data->price}}</td>
            <td style=" padding: 12px 15px;">{{$data->description}}</td>
            <td style=" padding: 12px 15px;"><img height=200 width=200 src="/foodimgs/{{$data->image}}"></td>
            <td style=" padding: 12px 15px;"><a href="{{url('/deletefood',$data->id)}}">Delete</a></td>
            <td style=" padding: 12px 15px;"><a href="{{url('/updateview',$data->id)}}">Update</a></td>
    @endforeach
</tbody>
</table>
</div>
        </div>

        

    </div>
    
        @include("admin.adminscript")
    
  </body>
</html>