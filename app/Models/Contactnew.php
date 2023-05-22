<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Contactnew extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contactnews';
    
    protected $guarded = ['id','created_at'];
    
}