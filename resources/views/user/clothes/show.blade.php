@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ $cloth->name }}
</h2>
@endsection

{{-- @section('sort')
    @php
        $sortingOptions = ['value' => 'clothes:price:asc', 'label' => 'Sort by Price'];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search products..."></search-bar>
@endsection

@section('table')
    <item-list></item-list>
@endsection --}}

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content flex p-6 text-gray-900 dark:text-gray-100">
                    <div>
                    <img class="rounded" width="400" src={{ asset("storage/images/" . $cloth->image) }} />
                </div><div class="ml-4"> 
                    <p><b>Price:</b> {{ $cloth->price }}</p>
                    <p><b>Original Website:</b> {{ $cloth->original_website }}</p>
                    <p><b>Description:</b> {{ $cloth->description }}</p>
                    <p><b>Size:</b> {{ $cloth->size }}</p>
                    <p><b>Brand:</b> {{ $cloth->brand }}</p> 
                    <p><b>Condition:</b> {{ $cloth->condition }}</p> 
                    <form method="POST" action="{{ route('clothes.like', $cloth->id) }}">
                        @csrf
                        @method('POST')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Like</button>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection