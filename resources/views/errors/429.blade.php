@extends('errors.layout')
@php
    $error_code = 429;
@endphp
@section('title_page', 'Error 429 - Too many requests!')
@section('error_code', $error_code)
@section('error_message', 'Too many requests!')
