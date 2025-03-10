<?php

namespace App\Enums;

enum ProjectStatus: string
{
    case BLOCKED = "blocked";
    case BACKLOG = "backlog";
    case IN_PROGRESS = "in progress";
    case IN_REVIEW = "in review";
    case DONE = "done";

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
