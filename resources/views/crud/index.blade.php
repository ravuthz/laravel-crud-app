@extends('adminlte::page')

@section('title', str_plural($site_title) . ' - listing')

@section('content_header')
    <div class="col-xs-12">
        <h3>
            {{--title plural person--}}
            {{ str_plural($page_title) . ' - listing' }}
            <a href="{{ route($route_prefix . '.create') }}" class="btn btn-sm btn-primary pull-right">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Create New
            </a>
        </h3>
    </div>
@stop

@section('content')
    @if(Session::has('success'))
        <div class="col-xs-12">
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if(view()->exists($view_include_search))
            <div class="box">
                <div class="box-header">
                {!! BootForm::open(['route' => $route_prefix . '.index', 'method' => 'get']) !!}
                    @include($view_include_search)
                {!! BootForm::close() !!}
                </div>
            </div>
        </div>
    @endif
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
            @if(view()->exists($view_include_table))
                @include($view_include_table)
            @else
                <div class="alert alert-danger">
                    <p>No views <strong>table.blade.php</strong> found in <strong>views.{{ $view_prefix }}</strong></p>
                </div>
            @endif
                </div>
            </div>
        </div>
@stop

@section('js')
    <script type="text/javascript">
        $(function(){
            $('.crud-table').on('click', '.btn-delete-row', function() {
                if (confirm("Do you really what to delete this record?")) {
                    $(this).next('.form-delete-row').submit();
                }
            });
        });
    </script>
@stop