<?php
/**
 * Part of the "charcoal-dev/contracts-storage" package.
 * @link https://github.com/charcoal-dev/contracts-storage
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Storage;

use Charcoal\Contracts\Storage\Enums\StorageType;

/**
 * Represents a contract that defines the required methods for storage providers.
 * Implementations of this interface describe the specific type of storage
 * and provide a unique identifier for the provider.
 */
interface StorageProviderInterface
{
    public function storageType(): StorageType;

    public function storageProviderId(): string;
}