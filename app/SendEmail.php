<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendEmail extends Model
{
    protected $table='send_email';

    protected $fillable = ['user_id','address_to','college_name','college_address','college_email','subject'];
}
