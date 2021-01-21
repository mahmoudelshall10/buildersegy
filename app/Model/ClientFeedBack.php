<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientFeedBack extends Model
{
    protected $table = 'tbl_client_feed_backs';

    protected $primaryKey = 'pkClientFeedBackID';


    protected $fillable = [
        'fldName','fldFeedBack','fldJobTitle','fldPhoto','fldStatus'
    ];
}
