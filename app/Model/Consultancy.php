<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    protected $table = 'tbl_consultancies';

    protected $primaryKey = 'pkConsultancyID';


    protected $fillable = [
        'fldName','fldSubject','fkCreatedByUserID'
    ];
}
