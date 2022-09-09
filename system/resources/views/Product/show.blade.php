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
                        <h3>{{$Product->name}}</h3>
                        <hr>
                        <p>
                            Rp.  {{number_format($Product->prices)}} |
                            Stock :  {{$Product->Stock}} |
                            Weight :   {{$Product->Weight}} gr
                        </p>
                        <p>
                                {!! nl2br($Product->description) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
