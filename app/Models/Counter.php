<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Counter
 * @package App\Models
 *
 * @property int $id
 * @property int $counter
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Counter extends Model
{
    use HasFactory;

    protected $fillable = ['counter'];
}
