<?php

namespace App\Enum;

enum OwningSubjectType: string
{
    case PERSON = 'INCOME';
    case GROUP = 'GROUP';
    case ORGANIZATION = 'ORGANIZATION';
    case OTHER = 'OTHER';
}
