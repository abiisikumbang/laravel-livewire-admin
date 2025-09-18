@extends('layouts.app_dashboard')

@section('title', 'Data User')

@section('menuSuperadminUser', 'active')

@section('content')
    @livewire('superadmin.user.index')
@endsection
