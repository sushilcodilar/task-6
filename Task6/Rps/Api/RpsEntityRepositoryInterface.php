<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Task6\Rps\Api;

interface RpsEntityRepositoryInterface
{
    /**
     * Get entity by id
     *
     * @param string $entityId
     */
    public function getById(string $entityId);

}
