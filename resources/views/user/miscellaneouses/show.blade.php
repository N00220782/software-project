@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ $miscellanous->name }}
</h2>
@endsection

@section('sort')
    @php
        $sortingOptions = ['value' => 'miscellaneouses:price:asc', 'label' => 'Sort by Price'];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search products..."></search-bar>
@endsection

@section('table')
    <item-list></item-list>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content flex p-6 text-gray-900 dark:text-gray-100">
                    <div>
                    <img class="rounded" width="400" src={{ asset("storage/images/" . $miscellaneous->image) }} />
                </div><div class="ml-4"> 
                    <p><b>Price:</b> {{ $miscellaneous->price }}</p>
                    <p><b>Original Website:</b> {{ $miscellaneous->original_website }}</p>
                    <p><b>Description:</b> {{ $miscellaneous->description }}</p> 
                    <p><b>Condition:</b> {{ $miscellaneous->condition }}</p> 
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection