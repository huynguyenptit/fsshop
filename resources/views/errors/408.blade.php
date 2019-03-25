@extends('errors.layout')
@php
    $error_code = 408;
@endphp
@section('title_page', 'Error 408 - Request timeout!')
@section('error_code', $error_code)
@section('error_message', 'Request timeout!')
