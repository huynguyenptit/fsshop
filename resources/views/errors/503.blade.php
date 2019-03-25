@extends('errors.layout')
@php
    $error_code = 503;
@endphp
@section('title_page', 'Error 503 - It\'s not you, it\'s me!')
@section('error_code', $error_code)
@section('error_message', 'The server is overloaded or down for maintenance. Please try again later.')
