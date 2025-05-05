<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as BaseHandler;
use Illuminate\Auth\Access\AuthorizationException;
use Throwable;
class Handler extends BaseHandler
{
    public function render($request, Throwable $exception)
{
    if ($exception instanceof AuthorizationException && $request->is('admin*')) {
        return redirect()->route('filament.admin.auth.login');
    }

    return parent::render($request, $exception);
}
}
