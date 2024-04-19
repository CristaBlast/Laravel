<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'abbreviation',
        'name',
        'name_pt',
        'type',
        'semesters',
        'ECTS',
        'places',
        'contact',
        'objectives',
        'objectives_pt',
        ];

        public $timestamps = false;

        protected $primaryKey = 'abbreviation';
        public $incrementing = false;
        protected $keyType = 'string';
}
