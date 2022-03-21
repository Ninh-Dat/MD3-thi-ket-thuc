<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách đại lý</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
{{--    @toastr_css--}}
</head>
<body>


<div class="container mt-4">
    <h3>Danh sách đại lý</h3>
    </hr>
    <a href="{{route('sells.create')}}" class="btn btn-success">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên đại lý</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chức năng</th>
    </tr>
    </thead>
    <tbody>

        @foreach($sells as $key=>$sell)
        <tr>
            <th>{{$key+1}}</th>
            <td>{{$sell->name}}</td>
            <td>{{$sell->phone}}</td>
            <td>{{$sell->email}}</td>
            <td>{{$sell->address}}</td>
            <td>{{$sell->manager}}</td>
            <td>{{$sell->status->name}}</td>
            <td>  <a href="{{route('sells.edit',$sell->id)}}" type="button" class="btn btn-success">Update</a>
                <a onclick="return confirm('Bạn có muốn xóa không ?')" href="{{route('sells.destroy',$sell->id)}}" type="button" class="btn btn-danger">Delete</a></td>
    </tr>
        @endforeach



    </tbody>
</table>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</div>
</body>

</html>
