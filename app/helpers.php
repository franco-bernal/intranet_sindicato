<?php

use Carbon\Carbon;

function tipoUser($type)
{
    if ($type == 1) {
        return "admin";
    } elseif ($type == 0) {
        return "guest";
    }
}
