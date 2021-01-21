<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'tbl_teams';

    protected $primaryKey = 'pkTeamID';


    protected $fillable = [
        'fldName','fldJobTitle','fldPhoto','fldQuote','fldFacebook','fldLinkedIn','fkCreatedByUserID'
    ];
}
