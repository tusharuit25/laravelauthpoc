<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_verification extends Model
{
    //
    protected $table = 'employee_verifications';
    protected $fillable = [
        'member_id_is_verified','first_name_is_verified','last_name_is_verified','relative_name_is_verified','dob_is_verified','id_type_is_verified','id_number_is_verified','id_image_link_is_verified','member_photo_link_is_verified','employee_record_id','verified_by_user_id'
    ];
}
