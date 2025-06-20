<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string Continent
 */

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $primaryKey = 'Code';
    public $incrementing = false;
}
