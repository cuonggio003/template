@extends('admin.master')
@section('content-admin')
    <div class="col-12 mt-2">
        <a class="btn btn-success" href="{{ route('categories.create') }}">Thêm mới</a>
        
    </div>
    <div class="card mt-2">
        <h5 class="card-header">Danh sách Thể loại</h5>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                   <th></th>
                    <th>ID</th>
                     <th></th>
                    <th>Thể loại</th>
                   

                </tr>
                @foreach($categories as $key => $category)

                    <tr>
                      
                        <td><input type="checkbox"></td>
                        <td>{{$key + 1}}</td>
                          <td ></td>
                        <td>{{$category->name}}</td>
                      
                        <td ><button type="button" class="btn btn-primary">Cập nhật</button></td>
                        <td><button type="button" class="btn btn-danger" href="{{ route('categories.delete')}}">Delete</button></td>
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
@endsection
