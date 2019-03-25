@extends('errors.layout')
@php
    $error_code = 405;
@endphp
@section('title_page', 'Error 405 - Method not allowed!')
@section('error_code', $error_code)
@section('error_message', 'Method not allowed!')
