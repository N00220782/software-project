@extends('layouts.table')

@section('title', 'Clothes')

@section('sort')
    @php
        $sortingOptions = [['value' => 'companies:name:asc', 'label' => 'Sort by Name'], ['value' => 'companies:name:desc', 'label' => 'Sort by Name (descending)']];
    @endphp
    <search-sort-by :sorting-options="{{ Js::from($sortingOptions) }}"></search-sort-by>
@endsection

@section('search-bar')
    <search-bar placeholder="Search products..."></search-bar>
@endsection

@section('table')
    <company-list></company-list>
@endsection