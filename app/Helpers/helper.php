use Illuminate\Support\Facades\Auth;

<?php


use Illuminate\Support\Facades\Auth;

function permission($permission)
{
    return Auth::user()->hasAnyPermission($permission);
}

