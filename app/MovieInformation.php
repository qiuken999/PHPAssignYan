<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieInformation extends Model
{
    // MovieInformation table fields
    protected $fillable = ['title', 'releaseDate', 'description', 'genreType'];
}
