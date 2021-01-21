<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'tbl_trainings';

    protected $primaryKey = 'pkTrainingID';


    protected $fillable = [
        'fldName','fldDuration','fkCreatedByUserID'
    ];
}
