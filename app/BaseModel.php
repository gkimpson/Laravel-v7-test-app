<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getUppercaseTableName()
    {
        return strtoupper($this->getTable());
    }
}
