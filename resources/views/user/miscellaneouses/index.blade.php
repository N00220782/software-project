@extends('layouts.myApp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Miscellaneous Items') }}
</h2>
@endsection

@section('sort')
    @php
        $sortingOptions = ['value' => 'miscellaneous:price:asc', 'label' => 'Sort by Price'];
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
                                        Condition
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        View
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                @forelse($miscellaneouses as $miscellaneous)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="rounded" width="200" src={{ asset("storage/images/" . $miscellaneous->image) }} />
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $miscellaneous->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $miscellaneous->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $miscellaneous->original_website }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $miscellaneous->condition }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('miscellaneouses.show', $miscellaneous->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                                @empty
                                    <h4>No items found!</h4>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $miscellaneouses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection