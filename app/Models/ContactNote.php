<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ContactNote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contactnotes';
    
    protected $guarded = ['id','created_at'];
    
}