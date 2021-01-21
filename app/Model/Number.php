<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table = 'tbl_numbers';

    protected $primaryKey = 'pkNumberID';

    protected $fillable =['fldName' ,'fldNumber' , 'fkCreatedByUserID']; 
}
