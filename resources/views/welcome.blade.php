@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
    <img  class="picture" src="img/pizza-house.svg" alt="">
        <div class="title m-b-md">
            Pizza House<br/>
            The Tashkent Best Pizzas

         <p class="mssg">{{ session('mssg') }}</p>
        <a class="link" href="/pizzas/create">Order a Pizza</a>
        <a class="link" href="/pizzas">Show an order</a>

        </div>
    </div>
</div>
@endsection