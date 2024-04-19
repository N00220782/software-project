@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-white leading-tight">
    {{ $book->name }}
</h2>
@endsection

{{-- @section('sort')
    @php
        $sortingOptions = ['value' => 'books:price:asc', 'label' => 'Sort by Price'];
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
                    <img class="rounded" width="400" src={{ asset("storage/images/" . $book->image) }} />
                </div><div class="ml-4">
                    <p><b>Author:</b> {{ $book->author }}</p> 
                    <p><b>Price:</b> {{ $book->price }}</p>
                    <p><b>Original Website:</b> {{ $book->original_website }}</p>
                    <p><b>Description:</b> {{ $book->description }}</p>
                    <p><b>Rating:</b> {{ $book->rating }}</p>
                    <p><b>Cover:</b> {{ $book->cover }}</p> 
                    <p><b>Condition:</b> {{ $book->condition }}</p> 
                    <form method="POST" action="{{ route('books.like', $book->id) }}">
                        @csrf
                        @method('POST')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 underline">Like</button>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection