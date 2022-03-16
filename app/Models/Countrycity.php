<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Carbon\Carbon;
use DateTime;
use MongoId;

use MongoDate;



class Countrycity extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'countrycitys';

    protected $fillable = [
        'country',
        'cities',
    ];

    /*
    protected $casts = [
        'statistics' => 'array',
    ];
    /*

    protected function asDateTime($value)

    {

        // Convert timestamp

        if (is_numeric($value)) {

            return Carbon::createFromTimestamp($value);
        }

        // Convert string

        if (is_string($value)) {
            return new Carbon($value);
        }

        // Convert MongoDate

        if ($value instanceof MongoDate) {
            return Carbon::createFromTimestamp($value->sec);
        }

        return Carbon::instance($value);
    }
    */
}
