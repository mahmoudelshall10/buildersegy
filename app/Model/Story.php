<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'tbl_stories';

    protected $primaryKey = 'pkStoryID';


    protected $fillable = [
        'fldName','fldPhoto','fldText','fldAddress','fldDate','fkCreatedByUserID'
    ];
}
