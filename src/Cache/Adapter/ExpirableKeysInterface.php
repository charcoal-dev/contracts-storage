<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Cache\Adapter;

/**
 * Defines the contract for a cache adapter implementation allowing interaction
 * with various caching systems.
 */
interface ExpirableKeysInterface
{
    public function expire(string $key, int $ttlSec): bool;

    public function expireMs(string $key, int $ttlMs): bool;

    public function ttl(string $key): null|false|int;

    public function ttlMs(string $key): null|false|int;

    public function persist(string $key): bool;
}