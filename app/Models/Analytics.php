<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Analytics
 * @package App\Models
 *
 * @property int $id
 * @property int $count
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Analytics extends Model
{
    use HasFactory;

    protected $fillable = ['count'];
}
