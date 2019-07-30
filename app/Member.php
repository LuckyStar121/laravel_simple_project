<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/25/2019
 * Time: 5:30 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'member_name', 'member_address', 'member_phone', 'member_email',
    ];
}