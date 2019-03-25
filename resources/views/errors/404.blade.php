@extends('errors.layout')
@php
    $error_code = 404;
@endphp
@section('title_page', 'Error 404 - Page not found!')
@section('error_code', $error_code)
@section('error_message', 'Page not found!')
