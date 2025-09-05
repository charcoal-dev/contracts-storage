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
 * It extends the StorageProviderInterface,
 * which provides a common interface for storage providers.
 */
interface CacheClientInterface extends StorageProviderInterface
{
    public function connect(): void;

    public function disconnect(): void;

    public function set(string $key, mixed $value, ?int $ttl = null, ?bool $withChecksum = null): mixed;

    public function get(
        string $key,
        bool   $returnEnvelope = false,
        bool   $returnReferenceKeyObject = true,
        bool   $expectInteger = false,
        ?bool  $verifyChecksum = null
    ): int|string|null|array|object|bool;

    public function has(string $key): bool;

    public function delete(string $key): bool;

    public function truncate(string $key): bool;
}