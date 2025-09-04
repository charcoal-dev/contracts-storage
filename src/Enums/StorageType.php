<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Enums;

/**
 * This enum provides a set of predefined storage types.
 */
enum StorageType: string
{
    case Cache = "cache";
    case Database = "db";
    case Filesystem = "filesystem";
}