@extends('layouts.admin')

@section('header')
<h2 class="font-semibold text-xl text-white leading-tight">
    {{ $miscellaneous->name }}
</h2>
@endsection

{{-- @section('sort')
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
@endsection --}}

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
                    <form method="POST" action="{{ route('miscellaneouses.like', $miscellaneous->id) }}">
                        @csrf
                        @method('POST')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 underline">Like</button>
                    </form>
                    <a href="{{ route('admin.miscellaneouses.edit', $miscellaneous->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form method="POST" action="{{ route('miscellaneouses.destroy', $miscellaneous->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 underline">Delete</button>
                        </form>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection