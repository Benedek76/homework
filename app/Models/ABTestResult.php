<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ABTestResult extends Model
{
    use HasFactory;

    // Name of the table.
    protected $table = 'ab_test_results';

    // Fields.
    protected $fillable = ['variant'];
}
