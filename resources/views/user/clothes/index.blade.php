@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-white leading-tight">
    {{ __('Clothes') }}
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
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Original Website
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Size
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Brand
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Condition
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        View
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                @forelse($clothes as $cloth)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="rounded" width="200" src={{ asset("storage/images/" . $cloth->image) }} />
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $cloth->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cloth->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cloth->original_website }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cloth->size }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cloth->brand }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $cloth->condition }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('clothes.show', $cloth->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                                @empty
                                    <h4>No items found!</h4>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $clothes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection