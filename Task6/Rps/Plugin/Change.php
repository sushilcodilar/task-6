<?php

namespace Task6\Rps\Plugin;

use Task6\Rps\Model\Rps;

class Change
{
    public function afterGetLastName(Rps $object, $result): string
    {
        return $result . "hello world how are you";
    }

    public function afterGetFirstName(Rps $object, $result): string
    {
        $email =$object->getEmail();
        return $result . $email;
    }

    public function beforeGetAddress(Rps $object, $add="sss"): string
    {
        return $add . "ushil";
    }
}
