@extends('errors.layout')
@php
    $error_code = 403;
@endphp
@section('title_page', 'Error 403 - Forbidden!')
@section('error_code', $error_code)
@section('error_message', 'Forbidden!')
