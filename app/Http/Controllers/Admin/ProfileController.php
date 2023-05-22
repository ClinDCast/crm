<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Http;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Hash;
use Auth;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;
class ProfileController extends Controller
{
    
    

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You have been successfully logged out');
    }
    
    function admin_permission($codename)
    {
        $admin_id = Auth::user()->id;
        $admin = User::where('id',$admin_id)->first();
        $permission_obj = Permission::where('codename',$codename)->first();
        $permission = $permission_obj != null && isset($permission_obj->permission_id) ? $permission_obj->permission_id : 0;
        if ($admin->role == 1) {
            return true;
        } else {
            $role = $admin->role;
            $role_p = Role::select('permission')->where('role_id',$role)->first();
            $role_permissions = json_decode($role_p);
            if (in_array($permission, $role_permissions)) {
                return true;
            } else {
                return false;
            }
        }
    }
    

}