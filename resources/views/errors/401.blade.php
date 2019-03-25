@extends('errors.layout')
@php
    $error_code = 401;
@endphp
@section('title_page', 'Error 401 - Unauthorized action!')
@section('error_code', $error_code)
@section('error_message', 'Unauthorized action.!')
