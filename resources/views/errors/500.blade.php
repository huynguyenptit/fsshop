@extends('errors.layout')
@php
    $error_code = 500;
@endphp
@section('title_page', 'Error 500 - It\'s not you, it\'s me!')
@section('error_code', $error_code)
@section('error_message', 'An internal server error has occurred. If the error persists please contact the development team!')
