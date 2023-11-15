<?php

namespace Database\Factories;

use Faker\Provider\Base;

class PhoneNumberProvider extends Base
{
    public function phoneNumberWithPrefix()
    {
        return '01' . $this->numerify('###########');
    }
}
