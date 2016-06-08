<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testUser extends Model
{
    public function getName() {
        return "John Smith";
    }

    public function getProperties() {
        return "Property";
    }
}
