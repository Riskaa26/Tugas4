@extends('template3.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                 <div class="card">
                    <div class="card-header">
                       Detail Product Data
                    </div>
                    <div class="card-body">
                        <form action="{{url('Product', $Product->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="contro-label">name</label>
                                <input type="text" class="form-control" name="name" value="{{$Product->name}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="contro-label">prices</label>
                                        <input type="text" class="form-control" name="prices" value="{{$Product->prices}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="contro-label">weight</label>
                                        <input type="text" class="form-control" name="weight" value="{{$Product->weight}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="contro-label">stock</label>
                                        <input type="text" class="form-control" name="stock" value="{{$Product->stock}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="contro-label">description</label>
                                <textarea name="description" class="form-control">{{$Product->description}}</textarea>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
