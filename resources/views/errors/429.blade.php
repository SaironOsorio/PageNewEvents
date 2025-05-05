@extends('errors::layout')

@section('title', __('Demasiadas solicitudes'))
@section('code', '429')
@section('message', __('Demasiadas solicitudes. Por favor, reduzca la frecuencia de sus solicitudes. Si el problema persiste, contacte al soporte técnico.'))
