<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'certifications';

    protected $fillable = [
        'nom',
        'delivre_par',
        'date_obtention',
        'pdf_url',
        'commentaire',
    ];

    protected $casts = [
        'date_obtention' => 'date',
    ];

    public $timestamps = false; // on a created_at mais pas updated_at
}
