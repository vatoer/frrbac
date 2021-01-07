<?php

namespace App\Entity\Frrbac;

class Identity extends Users
{
    public function getPassword(): ?string
    {
        return null;
    }
}
