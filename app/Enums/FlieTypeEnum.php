<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FlieTypeEnum extends Enum
{
    public const JD = 1;
    public const CV = 2;
}