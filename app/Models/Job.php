<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// use Illuminate\Support\Arr;


class Job extends Model
{

    use HasFactory;

    protected $table = 'job_listings';


    protected $fillable = ['title', 'salary'];


    // public static function find(int $id): array
    // {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (! $job) {
    //         abort(404); 

    //     }
    //     return $job;
    // }
}
