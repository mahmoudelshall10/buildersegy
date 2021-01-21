<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'tbl_consultations';

    protected $primaryKey = 'pkConsultationID';


    protected $fillable = [
        'fldName','fldEmail','fldSubject','fldMessage','fkCreatedByUserID'
    ];
}
