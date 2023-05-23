<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostLevelEnum extends Enum
{
    public const FRESHER = '1';
    public const JUNIOR = '2';
    public const SENIOR = '3';
    public const LEADER = '4';
    public const LECTURER = '5';
    public const MANAGER = '6';


    public static function getArrWithLowerKey()
    {
        $data = self::asArray();
        $arr = [];

        foreach ($data as $key => $val) {
            $index = strtolower($key);
            $arr[$index] = $val;
        }

        return $arr;
    }
}