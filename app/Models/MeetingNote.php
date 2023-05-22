<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class MeetingNote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meetingnotes';
    
    protected $guarded = ['id','created_at'];
    
}