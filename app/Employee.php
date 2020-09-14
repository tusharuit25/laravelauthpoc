<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'member_id','first_name','last_name','relative_name','dob','id_type','id_number','id_image_link','member_photo_link','allotted_to_admin_user_id'
    ];
}