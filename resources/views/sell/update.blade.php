<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">

    <title>Thêm </title>
</head>
<body>


<div class="container mt-4">
    <h1>Thêm sản phẩm</h1>
    <form method="post" action="{{route('sells.update',$sell->id)}} " enctype="multipart/form-data" class="container mt-3">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" class="form-control" name="name"  value="{{$sell->name}}" >
{{--            <p style="color: red">{{($errors->has('name'))? $errors->first('name') : ""}}</p>--}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Điện thoại</label>
            <input type="text" class="form-control" name="phone" value="{{$sell->phone}}" >

{{--            <p style="color: red">{{($errors->has('phone'))? $errors->first('phone') : ""}}</p>--}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Email</label>
            <input type="email" class="form-control" name="email" value="{{$sell->email}}">

{{--            <p style="color: red">{{($errors->has('email'))? $errors->first('email') : ""}}</p>--}}

        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="{{$sell->address}}" >

{{--            <p style="color: red">{{($errors->has('address'))? $errors->first('address') : ""}}</p>--}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Tên quản lý</label>
            <input type="text" class="form-control" name="manager" value="{{$sell->manager}}" >

{{--            <p style="color: red">{{($errors->has('manager'))? $errors->first('manager') : ""}}</p>--}}
        </div>

        <label for="exampleFormControlSelect2">Trạng thái</label>
        <select name="status_id" class="form-control ">
            <option>--Tùy chọn--</option>
            @foreach($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>
            @endforeach
        </select>

        <p style="color: red">{{($errors->has('status_id'))? $errors->first('status_id') : ""}}</p>


        <button class="btn btn-success mt-3">Update</button>
        <p><a href="{{route('sells.index')}}"class="btn btn-warning mt-2">< Back</a></p>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</div>
</body>
</html>
