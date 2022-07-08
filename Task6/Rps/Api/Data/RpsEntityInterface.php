<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Task6\Rps\Api\Data;

/**
 * Category data interface.
 *
 * @api
 * @since 100.0.2
 */
interface RpsEntityInterface
{
    public const ID = 'entity_id';
    public const FIRSTNAME = 'firstname';
    public const LASTNAME = 'lastname';
    public const EMAIL = 'email';
    public const ADDRESS = 'address';

    /**
     * Get ENTITY
     *
     * @return INT
     */
    public function getEntityId(): int;

    /**
     * Get FIRSTName
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Get LASTNAME
     *
     * @return string
     */
    public function getLastName();

    /**
     * Get EMAIL
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Get ADDRESS
     *
     * @param string $add
     * @return string
     */
    public function getAddress($add = "sss"): string;
}
