@extends('template.template')
@section('title')
@parent
products
@stop

{{-- Content --}}

@section('content')
<div class="row text-center">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 hero-feature">
                    <div class="thumbnail">
                        <img src="{{$product->image}}" alt="" width="100%">
                        <div class="caption">
                            <h3>{{$product->name}}</h3>
                            <h4>price : {{$product->price}} xaf</h4>
                            <p>{{$product->info}}</p>
                            <p>
                                <a href="{{URL::to('insert/'.$product->id)}}" class="btn btn-primary">add to <span class="glyphicon glyphicon-shopping-cart"></span></a>  
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach         
        </div>
@stop