<?php

namespace App\Enums;

enum UserRoles: int
{
    case ADMIN = 1;
    case USER = 2;
    case SUPER_ADMIN = 3;
    case GUEST = 4;

}
