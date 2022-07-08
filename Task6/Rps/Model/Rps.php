<?php

namespace Task6\Rps\Model;

use Task6\Rps\Api\Data\RpsEntityInterface;

class Rps extends \Magento\Framework\Model\AbstractModel implements RpsEntityInterface
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init("Task6\Rps\Model\ResourceModel\Rps");
    }
    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId():int
    {
        return $this->getData(self::ID);
    }

    /**
     * Get FirstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * Get LastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     *  Get Email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Get Address
     *
     * @param string $add
     * @return string
     */
    public function getAddress($add = 'sss'): string
    {
        return $this->getData(self::ADDRESS) . $add;
    }
}
