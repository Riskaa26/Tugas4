@extends('template3.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                 <div class="card">
                    <div class="card-header">
                        Product Data
                        <a href="{{url('Product/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Add Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th width="200px">Action</th>
                                <th>Name</th>
                                <th>Prices</th>
                                <th>Stock</th>
                            </thead>
                            <tbody>
                                @foreach($list_Product as $Product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('Product', $Product->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('Product', $Product->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template3.utils.delete', ['url' => url('Product', $Product->id)])
                                    </td>
                                    <td>{{$Product->name}}</td>
                                    <td>{{$Product->prices}}</td>
                                    <td>{{$Product->stock}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
