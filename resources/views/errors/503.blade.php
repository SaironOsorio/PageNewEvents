@extends('errors::layout')

@section('title', __('Servicio no disponible'))
@section('code', '503')
@section('message', __('El servidor no puede atender temporalmente la solicitud debido al tiempo de inactividad por mantenimiento o a problemas de capacidad.')) 

