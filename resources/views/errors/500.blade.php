@extends('errors::layout')

@section('title', __('Error del servidor'))
@section('code', '500')
@section('message', __('El servidor encontró un error interno y no pudo completar su solicitud. Por favor, inténtelo de nuevo más tarde.'))
