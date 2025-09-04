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
interface AtomicCountersInterface
{
    public function incr(string $key): int;

    public function incrBy(string $key, int $delta): int;

    public function decr(string $key): int;

    public function decrBy(string $key, int $delta): int;

    public function getSet(string $key, int|string $value): int|string|bool|null;
}