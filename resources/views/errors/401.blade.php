@extends('errors::layout')

@section('title', __('No autorizado'))
@section('code', '401')
@section('message', __('No tienes permiso para acceder a esta página.'))
