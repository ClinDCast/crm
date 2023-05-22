<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AccountNote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accountnotes';
    
    protected $guarded = ['id','created_at'];
    
}