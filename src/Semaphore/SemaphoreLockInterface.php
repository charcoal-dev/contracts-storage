<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Semaphore;

/**
 * Defines the contract for a semaphore lock implementation.
 */
interface SemaphoreLockInterface
{
    public function releaseLock(): void;

    public function isLocked(): bool;

    public function setAutoRelease(): void;

    public function previousTimestamp(): ?float;

    public function checkElapsedSince(float $seconds): bool;
}