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
interface LocksInterface
{
    public function acquire(string $key, string $token, int $ttlMs): bool;

    public function release(string $key, string $token): bool;

    public function refresh(string $key, string $token, int $ttlMs): bool;
}