@extends('layouts.admin')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Create a miscellaneous item') }}
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
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form enctype="multipart/form-data" action="{{ route('admin.miscellaneouses.store') }}" method="POST">
                @csrf
                <x-text-input
                    type="text"
                    name="name"
                    field="name"
                    placeholder="Name"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('name')"></x-text-input>

                    <br>
                <br>

                <x-text-input
                    type="text"
                    name="price"
                    field="price"
                    placeholder="Price"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('price')"></x-text-input>

                    <br>
                <br>

                <x-text-input
                    type="text"
                    name="original_website"
                    field="original_website"
                    placeholder="Original Website"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('original_website')"></x-text-input>

                    <br>
                <br>

                <textarea
                    type="text"
                    name="description"
                    field="description"
                    placeholder="Description"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('description')"></textarea>

                    <br>
                <br>

                <div class="form-group">
                    <label for="condition">Condition</label>
                    <select id="condition" name="condition">
                        <option value="Brand New">Brand New</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                    </select>
                </div>

                <input
                    type="file"
                    name="image"
                    placeholder="Image"
                    class="w-full mt-6"
                    field="image"
                />

                <x-primary-button class="mt-6">Save item</x-primary-button>
            </form>
        </div>
    </div>
</div>
@endsection