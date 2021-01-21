<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bspyl extends Model
{
    protected $table = 'tbl_bspyls';

    protected $primaryKey = 'pkBspylID';


    protected $fillable = [
        'fldName','fldEmail','fldAge','fldFaculty','fldUniversity','fldPhone','fldGovernment','fldSuggestion','fldQuestion1','fldQuestion2','fldQuestion3'
    ]; 
}
