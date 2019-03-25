@extends('errors.layout')
@php
    $error_code = 400;
@endphp
@section('title_page', 'Error 400 - Bad request!')
@section('error_code', $error_code)
@section('error_message', 'Bad request!')
