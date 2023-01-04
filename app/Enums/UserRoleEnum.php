<?php

namespace App\Enums;
 

enum UserRoleEnum:int
{ 

    case ADMN = 1;
    case CLIENT = 2;
    case CONSULTANT = 3;
    case PARTNER = 4;
    case OBSERVER = 5;
}
 