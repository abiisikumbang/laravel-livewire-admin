@extends('layouts.app_dashboard')

@section('title', 'Data User')

@section('menuAdminUser', 'active')

@section('content')
    @livewire('admin.user.index')
@endsection 
