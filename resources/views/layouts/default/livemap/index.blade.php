@extends('app')
@section('title', __('common.livemap'))

@section('content')
  {{ Widget::liveMap() }}
  {{ Widget::latestPireps() }}
@endsection