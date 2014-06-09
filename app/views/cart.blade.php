@extends('template.template')
@section('title')
@parent
cart
@stop

{{-- Content --}}
@section('content')

<div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>product</th>
                        <th>quantity</th>
                        <th class="text-center">price</th>
                        <th class="text-center">subtotal</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cartContent as $cartItem)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        	<h4 class="media-heading"><a href="#">{{$cartItem->name}}</a></h4>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        	<form action="{{URL::to('update')}}" method="post" >
                                <input type="hidden" name="rowid" value="{{$cartItem->rowid}}" />
                                <input type="number" name="updater" value="{{$cartItem->qty}}" class="input-qty form-control text-center" onchange="submit()" />
                            </form>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                        	<strong>{{$cartItem->price}} xaf</strong>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                        	<strong>{{$cartItem->subtotal}} xaf</strong>
                        </td>
                        <td class="col-sm-1 col-md-1">
	                        <a href="{{URL::to('delete/'.$cartItem->rowid)}}" class="btn btn-danger">
	                            remove <span class="glyphicon glyphicon-remove"></span>
	                        </a>
                        </td>
                    </tr>
                @endforeach

                    <tr>
                        <td colspan="4"><h3>total</h3></td>
                        <td class="text-right"><h3><strong>{{Cart::total()}} xaf</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="3">
	                        <a href="{{URL::to('/home')}}" class="btn btn-info">
	                            <span class="glyphicon glyphicon-shopping-cart"></span> continue shopping
	                        </a>
                        </td>
                         <td>
                            <a href="{{URL::to('/terminate')}}" class="btn btn-danger">
                                empty cart <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                        <td>
	                        <a href="{{URL::to('/checkout')}}" class="btn btn-success">
	                            checkout <span class="glyphicon glyphicon-play"></span>
	                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop