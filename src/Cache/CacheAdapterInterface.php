<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage\Cache;

/**
 * Defines the contract for a cache adapter implementation allowing interaction
 * with various caching systems.
 */
interface CacheAdapterInterface
{
    public function createLink(CacheClientInterface $cache): void;

    public function isConnected(): bool;

    public function connect(): void;

    public function disconnect(): void;

    public function getId(): string;

    public function supportsPing(): bool;

    public function ping(): bool;

    public function set(string $key, int|string $value, ?int $ttl = null): void;

    public function get(string $key): int|string|null|bool;

    public function has(string $key): bool;

    public function delete(string $key): bool;

    public function truncate(): bool;
}