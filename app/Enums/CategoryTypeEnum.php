<?php

namespace App\Enums;

use App\Concerns\Enum;

class CategoryTypeEnum implements Enum
{
    public const INCOME = 'income';
    public const EXPENSE = 'expense';

    public static function getDescriptiveValues(): array
    {
        return [
            self::INCOME => 'Entrada',
            self::EXPENSE => 'Gasto',
        ];
    }
}
