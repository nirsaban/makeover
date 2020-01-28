@extends('layouts.app')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="hero-body"><h1 class="title is-1-mobile">Refresh Your Home</h1></div>
        </div>
    </div>
       <div class="columns is-centered" style="margin-top: 2rem">
           @foreach($categories as $category)
              @include('partials.select')
           @endforeach
       </div>
    <section class="section">
        <div class="columns is-centered inject-form-here">
            <div class="column is-4 has-text-centered remove">
                <h6 class="title is-6 product-name"></h6>
                <div class="box form"></div>
                <h6 class="title is-6 product-price"></h6>
            </div>
        </div>
    </section>
       <button class="button is-outlined is-primary saveAll"onclick="saveOrder()">Save All</button>
    <div class="insertTable">

    </div>
@endsection
