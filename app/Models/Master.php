<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Master extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'masters';
    
    protected $guarded = ['id','created_at'];
    
}