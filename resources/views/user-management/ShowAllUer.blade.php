@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
  @vite(['resources/assets/js/pages-account-settings-account.js'])
@endsection

@section('content')

  @include('content.tables.tables-basic')


@endsection
