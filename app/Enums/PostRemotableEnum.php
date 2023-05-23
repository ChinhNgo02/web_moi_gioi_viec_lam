<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostRemotableEnum extends Enum
{
    public const ALL = 0;
    public const OFFICE_ONLY = 2;
    public const HYBRID = 3;
    public const REMOTE_ONLY = 1;

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


    public static function getArrWithOutAll()
    {
        $array = self::asArray();
        array_shift($array);

        return $array;
    }
}