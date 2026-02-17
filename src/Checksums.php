<?php

namespace TheCapybaRalph\LaravelTripwire;

// would minor versions change the index.php? I don't know yet, let's cross the bridge when we come to it
enum Checksums: string
{
    case LARAVEL_10_INDEX="c96ed6bbe80f9105534af4d1510dc79f0143e6843970dba7ddd4ec7d03097cab";
    case LARAVEL_11_INDEX="8e8554cc123b541ff4abb247fb40fc93aa42877376c1296f3cf8106350c52e8b";
    case LARAVEL_12_INDEX="eba77cba39695b6bd091fe5211d481f7ebb2ce2d8d26230b5a609465d0a4aff9";

    public static function getCheckSum(string $version): string
    {
        return match ($version) {
            '10' => self::LARAVEL_10_INDEX->value,
            '11' => self::LARAVEL_11_INDEX->value,
            '12' => self::LARAVEL_12_INDEX->value,
            default => throw new \InvalidArgumentException("Invalid Laravel version: $version")
        };
    }
}
