<?php

namespace Modules\Company\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','phone','user_id'];

    protected static function newFactory()
    {
        return \Modules\Company\Database\factories\CompanyFactory::new();
    }
}
