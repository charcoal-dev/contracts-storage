<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Cache;

use Charcoal\Contracts\Storage\StorageProviderInterface;

/**
 * Represents a contract for cache clients.
 * It extends the StorageProviderInterface, which provides
 * a common interface for storage providers.
 */
interface CacheClientInterface extends StorageProviderInterface
{
}