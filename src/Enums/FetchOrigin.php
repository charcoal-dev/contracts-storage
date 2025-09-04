<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Enums;

/**
 * This enum provides a set of predefined fetch origins.
 */
enum FetchOrigin: string
{
    case Cache = "cache";
    case Runtime = "runtime";
    case Database = "db";
}