{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí danh mục</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body> --}}

  
@extends('layouts.main')
@section('header')
<nav class="nav">
    <a class="nav-link" href="./" style="color:#FFEFD5;">Quản lý sản phẩm</a>
    <a class="nav-link" href="./add-product"style="color:#FFEFD5;">Thêm sản phẩm</a>
    <a class="nav-link" href="./category"style="color:#FFEFD5;">Quản lý danh mục</a>
    <a class="nav-link" href="./add-cate"style="color:#FFEFD5;">Thêm danh mục</a>
</nav>
@endsection
@section('main-content')
        <p class="text-danger">{{$errMsg}}</p>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>cate_name</th>
                <th>slug</th>
                <th>show_menu</th>
                <th>
                    <a href="./add-cate" class="btn btn-success">Add new</a>
                </th>
            </thead>
            <tbody>
                @foreach($listItem as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->cate_name}}</td>
                        <td>{{$pro->slug}}</td>
                        <td>{{$pro->show_menu}}</td>
                        <td>
                            <img src="{{$pro->image}}" class="img-avatar" width="100">
                        </td>
                        <td>{{$pro->price}}</td>
                        <td>
                            <a href="./edit-cate?id={{$pro->id}}" class="btn btn-primary">Edit</a>
                            <a href="./remove-category?id={{$pro->id}}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
    {{-- </div>
    
    
</body>
</html> --}}