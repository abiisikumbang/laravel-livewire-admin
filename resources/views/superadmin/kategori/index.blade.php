@extends('layouts.app_dashboard')

@section('title', 'Data Kategori')

@section('menuSuperadminKategori', 'active')

@section('content')
    @livewire('superadmin.kategori.index')
@endsection
