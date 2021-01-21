<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'tbl_partners';
    protected $primaryKey = 'pkPartnerID';

    protected $fillable = [
        'fldName','fkCreatedByUserID','fldType','fldPhoto'
    ];
}
