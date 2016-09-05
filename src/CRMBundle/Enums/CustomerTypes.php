<?php

namespace CRMBundle\Enums;

class CustomerTypes
{
    const PROSPECT = 'prospect';
    const PARTNER = 'partner';
    const CUSTOMER = 'customer';

    static public function getList()
    {
        return [
            self::CUSTOMER => self::CUSTOMER,
            self::PARTNER => self::PARTNER,
            self::PROSPECT => self::PROSPECT,
        ];
    }
}