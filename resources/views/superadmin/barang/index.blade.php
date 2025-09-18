@extends('layouts.app_dashboard')

@section('title', 'Data Barang')

@section('menuSuperadminBarang', 'active')

@section('content')
    @livewire('superadmin.barang.index')
@endsection
