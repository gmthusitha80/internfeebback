<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use  Illuminate\Database\Eloquent\Model;
class Students extends Model 
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'scno',
        'name',
        'tp',
		'email',
		'indname',
		'strdate',
		'enddate',
		'duration',
		'supid',
		'op1',
		'op2',
		'op3',
		'op4',
		'op5',
		'op6',
		'op7',
		'op8',
		'op9',
		'op10',
		'op11',
		'feedback'
    ];
protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
