@extends('errors::layout')

@section('title', __('Acceso denegado'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'No tienes permiso para acceder a esta página.'))
