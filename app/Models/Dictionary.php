<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;

class Dictionary extends Model implements CanVisit
{
    use HasFactory;
    use HasVisits;
    protected $guarded=['id'];
}
