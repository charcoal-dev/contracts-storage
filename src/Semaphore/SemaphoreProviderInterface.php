<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Semaphore;

/**
 * Defines the contract for a semaphore provider implementation.
 */
interface SemaphoreProviderInterface
{
    public function obtainLock(
        string $lockId,
        ?float $concurrentCheckEvery = null,
        int    $concurrentTimeout = 0
    ): SemaphoreLockInterface;
}