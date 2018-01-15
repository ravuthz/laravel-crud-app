@extends('adminlte::page')

@section('title', str_plural($site_title) . ' - create')

@section('content_header')
    <h1>{{ str_plural($page_title) . ' - create' }}</h1>
@stop

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            {!! BootForm::open(['model' => $crud_item, 'store' => $route_prefix . '.store', 'update' => $route_prefix . '.update']) !!}
                @if (view()->exists($view_include_form))
                    @include($view_include_form)
                @else
                    <p>No views <strong>form.blade.php</strong> found in <strong>views.{{ $view_prefix }}</strong></p>
                @endif
            {!! BootForm::close() !!}
            </div>
        </div>
    </div>
@stop