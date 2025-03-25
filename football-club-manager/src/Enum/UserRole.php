<?php

namespace App\Enum;

enum UserRole: string
{
    case PLAYER = 'player';
    case ADMIN = 'admin';
}