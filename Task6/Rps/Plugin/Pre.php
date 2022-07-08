<?php

namespace Task6\Rps\Plugin;

class Pre extends \Task6\Rps\Model\Rps
{
    public function getFirstName(): string
    {
        return $this->getData(self::FIRSTNAME) . 'sushil';
    }

    public function getLastName()
    {
        $name = $this->getFirstName();
        return $this->getData(self::LASTNAME) . $name;
    }
}
