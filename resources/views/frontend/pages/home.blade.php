@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">

    {{-- Hero Section --}}
    <div class="row text-center mb-5">
        <div class="col">
            <h1>Welcome to Futbook</h1>
            <p class="lead">Your ultimate futsal booking and tournament platform.</p>
        </div>
    </div>

    {{-- View All Button --}}
    <div class="view mb-5">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View All</button>  
    </div>

    {{-- Horizontal Box Row --}}
    <div class="box-row mb-5">
        <div class="box">Box 1</div>
        <div class="box">Box 2</div>
        <div class="box">Box 3</div>
        <div class="box">Box 4</div>
    </div>

    {{-- Second Box Row (stacked or another section) --}}
    <div class="bbox mb-5">
        <div class="box">Box 1</div>
        <div class="box">Box 2</div>
        <div class="box">Box 3</div>
        <div class="box">Box 4</div>
    </div>


    <div class="typing">
        <p>Explore our selection of featured Futsal venues for their excellent facilities and great locations.</p>
    </div>
    
   

</div>
@endsection
