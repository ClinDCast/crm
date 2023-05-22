<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\Role;
use App\Models\Contact;
use App\Models\Account;
use App\Models\Permission;
use App\Models\Master;
use App\Models\AccountNote;
use App\Models\ContactNote;
use App\Models\MeetingNote;
use App\Models\Meeting;
use App\Models\Contactnew;
use App\Models\Lead;
use App\Mail\VerifyMail;
use DateTime;
use Hash;
use Mail;
use Auth;
class UserController extends Controller
{
    
    /*public function store_account(Request $request){ 
        $data = array();
        $data['account_owner']= $request->account_owner;
        $data['account_name']= $request->account_name;
        $data['campaign_name']= $request->campaign_name;
        $data['account_name']= $request->account_name;
        $data['clindcast_owner']= $request->clindcast_owner;
        $data['priority']= $request->priority;
        $data['date']= $request->date;
        $data['parent_account']= $request->parent_account;
        $data['account_number']= $request->account_number;
        $data['account_type']= $request->account_type;
        $data['industry']= $request->industry;
        $data['annual_revenue']= $request->annual_revenue;
        $data['rating']= $request->rating;
        $data['phone']= $request->phone;
        $data['fax']= $request->fax;
        $data['website']= $request->website;
        $data['linkedin_link']= $request->linkedin_link;
        $data['abb']= $request->abb;
        $data['ticker_symbol']= $request->ticker_symbol;
        $data['ownership']= $request->ownership;
        $data['employees']= $request->employees;
        $data['sic_code']= $request->sic_code;
        $data['billing_street']= $request->billing_street;
        $data['billing_city']= $request->billing_city;
        $data['billing_state']= $request->billing_state;
        $data['billing_code']= $request->billing_code;
        $data['billing_country']= $request->billing_country;
        $data['shipping_street']= $request->shipping_street;
        $data['shipping_city']= $request->shipping_city;
        $data['shipping_state']= $request->shipping_state;
        $data['shipping_code']= $request->shipping_code;
        $data['shipping_country']= $request->shipping_country;
        $data['description']= $request->description;
        $getd = Account::create($data);
        return redirect()->route('account_lists')->with('success','Account added successfully');
    }*/

    public function dashboards(Request $request){
        if(!Permission::admin_permission('crm')){
           return redirect()->back()->with("error","Sorry, you don't have permission to access this page"); 
        }else{
            $meetings = Meeting::get();
            $users = Meeting::Select('organizer')->groupby('organizer')->get();
            $m = date('m');
            $i=0;
            $month = '';
            $data = array();
            foreach($users as $user){
                $u = User::select('name','last_name')->where('id',$user->organizer)->first();
                $name =$u->name.' '.$u->last_name;
                $data[$i]['name'] = $name; 
                for($x = 1; $x <= $m; $x++){
                    $month_arr = $this->getStartAndEndDateofmonth($x,date("Y"));
                    $meeting = Meeting::select(DB::raw('count(*) as count'))->whereBetween('m_date', [$month_arr["month_start"], $month_arr["month_end"]])->where('organizer',$user->organizer)->first();
                    $data[$i][$x] = $meeting->count;
                }
                $monthcount = Meeting::select(DB::raw('count(*) as count'))->where('organizer',$user->organizer)->first()->count;

                $data[$i]['total'] = $monthcount;
                $i++;
            }
            $data1=array();
            $data1[0] = 'Grand Total';
            $months = array();
            $months[0]='';
            for($x = 1; $x <= $m; $x++){

                $dateObj   = DateTime::createFromFormat('!m', $x);
                $monthName = $dateObj->format('F');
                $months[$x] = $monthName;

                $allcount = Meeting::select(DB::raw('count(*) as count'))->whereMonth('m_date', '=', $x)->first()->count;
                $data1[$x]=$allcount;
            }
            $data1[$m+1]=Meeting::select(DB::raw('count(*) as count'))->first()->count;
            $months[$m+1]='Grand Total';
            $price = array_column($data, 'name');
            array_multisort($price, SORT_ASC, $data);
            return view('admin.dashboard', compact('data','data1','months'));
        }
    }
    
    public function getStartAndEndDateofmonth($month, $year) 
    {
      $dt = $year."-".$month."-23";
      $ret['month_start'] = date("Y-m-01", strtotime($dt));
      $ret['month_end'] = date("Y-m-t", strtotime($dt));
      return $ret;
    }

    public function contact_lists(Request $request){
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.contact.index', compact('users'));
    }

    public function create_contact(Request $request){
        $accounts = Account::orderBy('account_name', 'ASC')->get();
        return view('admin.contact.create', compact('accounts'));
    }

    // public function store_contact(Request $request){ 
    //     $data = array();
    //     $data['contact_owner']= $request->contact_owner;
    //     $data['first_name']= $request->first_name;
    //     $data['campaign_name']= $request->campaign_name;
    //     $data['account_name']= $request->account_name;
    //     $data['email']= $request->email;
    //     $data['phone']= $request->phone;
    //     $data['other_phone']= $request->other_phone;
    //     $data['mobile']= $request->mobile;
    //     $data['linkedin']= $request->linkedin;
    //     $data['linkedin_request']= $request->linkedin_request;
    //     $data['assistant']= $request->assistant;
    //     $data['lead_source']= $request->lead_source;
    //     $data['last_name']= $request->last_name;
    //     $data['title']= $request->title;
    //     $data['department']= $request->department;
    //     $data['home_phone']= $request->home_phone;
    //     $data['fax']= $request->fax;
    //     $data['dob']= $request->dob;
    //     $data['asst_phone']= $request->asst_phone;
    //     $data['email_opt_out']= $request->email_opt_out;
    //     $data['skype_id']= $request->skype_id;
    //     $data['secondary_email']= $request->secondary_email;
    //     $data['twitter']= $request->twitter;
    //     $data['reporting_to']= $request->reporting_to;
    //     $data['mailing_street']= $request->mailing_street;
    //     $data['mailing_city']= $request->mailing_city;
    //     $data['mailing_state']= $request->mailing_state;
    //     $data['mailing_zip']= $request->mailing_zip;
    //     $data['mailing_country']= $request->mailing_country;
    //     $data['other_street']= $request->other_street;
    //     $data['other_city']= $request->other_city;
    //     $data['other_state']= $request->other_state;
    //     $data['other_zip']= $request->other_zip;
    //     $data['other_country']= $request->other_country;
    //     $data['description']= $request->description;
    //     $getd = Contact::create($data);
    //     return redirect()->route('contact_lists')->with('success','Contact added successfully');
    // }
    
    public function store_contact(Request $request){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['designation']= $request->designation;
        $data['campaign_name']= $request->campaign_name;
        $data['notes']= $request->notes;
        $data['email']= $request->email;
        $data['secondary_email']= $request->secondary_email;
        $data['phone']= $request->phone;
        $data['mobile']= $request->mobile;
        $data['linkedin']= $request->linkedin;
        $data['follow_up_date']= $request->follow_up_date;
        $data['description']= $request->description;
        $data['created_by']= Auth::user()->id;
        $getd = Contact::create($data);
        return redirect()->route('contact_lists')->with('success','Contact added successfully');
    }

    public function view_contact(Request $request,$id)
    {
        $contact = Contact::where('id',$id)->first();
        $accounts = Account::orderBy('account_name', 'ASC')->get();
        $notes = ContactNote::where('contact_id',$id)->orderBy('id','DESC')->get();
       return view('admin.contact.view', compact('contact','accounts','notes'));
    }
    
    public function add_comment_contact(Request $request){ 
        $data = array();
        $data['contact_id']= $request->contact_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        $getd = ContactNote::create($data);
        if($request->popup==1){
            return redirect()->route('view_contact', $request->contact_id);
        }
        return 1;
    }
    
    public function add_comment_contact_edit(Request $request){ 
        $data = array();
        $data['contact_id']= $request->contact_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        $getd = ContactNote::create($data);
        if($request->popup==1){
            return redirect()->route('edit_contact', $request->contact_id);
        }
        return 1;
    }

    public function edit_contact(Request $request,$id)
    {
        $contact = Contact::where('id',$id)->first();
        $accounts = Account::orderBy('account_name', 'ASC')->get();
        return view('admin.contact.edit', compact('contact','accounts'));
    }

    public function update_contact(Request $request,$id){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['designation']= $request->designation;
        $data['campaign_name']= $request->campaign_name;
        $data['notes']= $request->notes;
        $data['email']= $request->email;
        $data['secondary_email']= $request->secondary_email;
        $data['phone']= $request->phone;
        $data['mobile']= $request->mobile;
        $data['linkedin']= $request->linkedin;
        $data['follow_up_date']= $request->follow_up_date;
        $data['description']= $request->description;
        $data['updated_by']= Auth::user()->id;
        Contact::where('id',$id)->update($data);
        return redirect()->route('contact_lists')->with('success','Contact added successfully');
    }

    public function account_lists(Request $request){
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.account.index', compact('users'));
    }

    public function create_account(Request $request){
        //$salesteam = User::where('group_id',3)->get();
        $account_types = Master::where('type','account_type')->get();
        $salesteam = User::orderBy('name', 'ASC')->get();
        return view('admin.account.create', compact('salesteam','account_types'));
    }

    public function store_account(Request $request){ 
        $data = array();
        $data['account']= Account::count()+1;
        $data['account_name']= $request->account_name;
        $data['added_to_icp']= $request->added_to_icp;
        $data['account_type']= $request->account_type;
        $data['description']= $request->description;
        $data['source']= $request->source;
        $data['employees_count']= $request->employees_count;
        $data['sic_code']= $request->sic_code;
        $data['created_by']= Auth::user()->id;
        $data['notes']= $request->notes;
        $data['website']= $request->website;
        $data['linkedin']= $request->linkedin;
        $data['business_phone']= $request->business_phone;
        $data['business_email']= $request->business_email;
        $data['twitter']= $request->twitter;
        $data['email1']= $request->email1;
        $data['email2']= $request->email2;
        $data['phone1']= $request->phone1;
        $data['phone2']= $request->phone2;
        $data['soap_status']= $request->soap_status;
        $data['lead_source']= $request->lead_source;
        $data['lead_generator']= $request->lead_generator;
        $data['marketing_soap_status']= $request->marketing_soap_status;
        $data['contact_added']= $request->contact_added;
        $data['marketing']= $request->marketing;
        $data['billing_street']= $request->billing_street;
        $data['billing_city']= $request->billing_city;
        $data['billing_state']= $request->billing_state;
        $data['billing_code']= $request->billing_code;
        $data['billing_country']= $request->billing_country;
        $data['shipping_street']= $request->shipping_street;
        $data['shipping_city']= $request->shipping_city;
        $data['shipping_state']= $request->shipping_state;
        $data['shipping_code']= $request->shipping_code;
        $data['shipping_country']= $request->shipping_country;
        $data['description']= $request->description;
        $getd = Account::create($data);
        return redirect()->route('account_lists')->with('success','Account added successfully');
    }
    
    public function view_account($id)
    {
        $account = Account::where('id',$id)->first();
        $notes = AccountNote::where('account_id',$id)->orderBy('id','DESC')->get();
        $contacts = Contact::where('account_id',$id)->orderBy('first_name', 'ASC')->get();
        $salesteam = User::orderBy('name', 'ASC')->get();
        return view('admin.account.view', compact('account','notes','contacts','salesteam'));
    }

    public function add_comment(Request $request){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['notes']= $request->notes;
       // $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        $getd = AccountNote::create($data);
        if($request->popup==1){
            return redirect()->route('view_account', $request->account_id);
        }else{
            return 1;
        }
    }
    
    public function add_comment_edit(Request $request){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        AccountNote::create($data);
        if($request->popup==1){
            return redirect()->route('edit_account', $request->account_id);
        }
        return 1;
    }
    
    public function edit_account(Request $request,$id)
    {
        $account = Account::where('id',$id)->first();
        $salesteam = User::orderBy('name', 'ASC')->get();
        $account_types = Master::where('type','account_type')->get();
        return view('admin.account.edit', compact('account','salesteam','account_types'));
    }
    
    public function update_account(Request $request,$id){ 

        $data = array();
        $data['account_name']= $request->account_name;
        $data['added_to_icp']= $request->added_to_icp;
        $data['account_type']= $request->account_type;
        $data['description']= $request->description;
        $data['source']= $request->source;
        $data['employees_count']= $request->employees_count;
        $data['sic_code']= $request->sic_code;
        $data['notes']= $request->notes;
        $data['website']= $request->website;
        $data['linkedin']= $request->linkedin;
        $data['business_phone']= $request->business_phone;
        $data['business_email']= $request->business_email;
        $data['twitter']= $request->twitter;
        $data['email1']= $request->email1;
        $data['email2']= $request->email2;
        $data['phone1']= $request->phone1;
        $data['phone2']= $request->phone2;
        $data['soap_status']= $request->soap_status;
        $data['lead_source']= $request->lead_source;
        $data['lead_generator']= $request->lead_generator;
        $data['marketing_soap_status']= $request->marketing_soap_status;
        $data['contact_added']= $request->contact_added;
        $data['marketing']= $request->marketing;
        $data['billing_street']= $request->billing_street;
        $data['billing_city']= $request->billing_city;
        $data['billing_state']= $request->billing_state;
        $data['billing_code']= $request->billing_code;
        $data['billing_country']= $request->billing_country;
        $data['shipping_street']= $request->shipping_street;
        $data['shipping_city']= $request->shipping_city;
        $data['shipping_state']= $request->shipping_state;
        $data['shipping_code']= $request->shipping_code;
        $data['shipping_country']= $request->shipping_country;
        $data['description']= $request->description;
        $getd = Account::where('id',$id)->update($data);
        $data['updated_by']=Auth::user()->id;
        return redirect()->route('account_lists')->with('success','Account updated successfully');
    }
    
    public function fileImportExport()
    {
       return view('admin.file-import');
    }
    
    public function importData(Request $request)
    {
        if($request->hasFile('file')){
            // $path = $request->file('file')->getRealPath();
            // $data = Excel::toArray([],$path);
            $path1 = $request->file('file')->store('temp'); 
            $path=storage_path('app').'/'.$path1;  
            $data = Excel::toArray([],$path);
            if(!empty($data) && count($data)){
                $i=0;
                foreach ($data as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {
                            if($i!=0){
                                $account = Account::where('account_name',  $v[0])->first();
                                if(!empty($account)){
                                    $contact = Contact::where('first_name',$v[1])->where('last_name',$v[2])->where('account_id',$account->id)->first();
                                    if(empty($contact)){
                                        $data1=array();
                                        $data1['account_id']    = $account->id;
                                        $data1['first_name']    = $v[1];
                                        $data1['last_name']     = $v[2];
                                        $data1['campaign_name'] = $v[3];
                                        $data1['designation']   = $v[4];
                                        $data1['notes']         = $v[5];
                                        $data1['email']         = $v[6];
                                        $data1['secondary_email'] = $v[7];
                                        $data1['phone']         = $v[8];
                                        $data1['mobile']        = $v[9];
                                        $data1['linkedin']      = $v[10];
                                        $data1['follow_up_date'] = $v[11];
                                        $data1['description'] = $v[12];
                                        Contact::create($data1);
                                    }
                                }
                            }
                            $i++;
                        }
                    }
                }
                
            }
        }
       return redirect()->route('contact_lists')->with('success','Contact added successfully');
    }
    
    public function master_data()
    {
       return view('admin.master');
    }

    public function account_type(Request $request){
        return view('admin.accounttype.create');
    }

    public function store_account_type(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'account_type';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }

    public function source(Request $request){
        return view('admin.source.create');
    }

    public function store_source(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'source';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }

    public function soap_status(Request $request){
        return view('admin.soap_status.create');
    }

    public function store_soap_status(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'soap_status';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }

    public function soap_source(Request $request){
        return view('admin.soap_source.create');
    }

    public function store_soap_source(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'soap_source';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }

    public function marketing_soap_status(Request $request){
        return view('admin.marketing.create');
    }

    public function store_marketing_soap_status(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'store_marketing_soap_status';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }

    public function of_contact_added(Request $request){
        return view('admin.of_contact.create');
    }

    public function store_of_contact_added(Request $request){ 
        $data = array();
        $data['value']= $request->value;
        $data['type']= 'of_contact_added';
        $getd = Master::create($data);
        return redirect()->route('master_data');
    }
    
    public function fileImportExportAccounts()
    {
       return view('admin.file-import-account');
    }
    
    public function importDataAccount(Request $request)
    {
        if($request->hasFile('file')){
            
            //$path = $request->file('file')->getRealPath();
            
            $path1 = $request->file('file')->store('temp'); 
            $path=storage_path('app').'/'.$path1;  
            //print_r($path);exit();
            $data = Excel::toArray([],$path);
            if(!empty($data) && count($data)){
                $i=0;
                foreach ($data as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {
                            if($i!=0){
                               $account = Account::where('account_name',$v[0])->first();
                                if(empty($account)){
                                    $data1=array();
                                    $data1['account']= Account::count()+1;
                                    $data1['account_name']= $v[0];
                                    $data1['added_to_icp']= $v[1];
                                    $data1['account_type']= $v[2];
                                    $data1['description']= $v[3];
                                    $data1['source']= $v[4];
                                    $data1['employees_count']= $v[5];
                                    $data1['sic_code']= $v[6];
                                    $data1['notes']= $v[7];
                                    $data1['website']= $v[8];
                                    $data1['linkedin']= $v[9];
                                    $data1['business_phone']= $v[10];
                                    $data1['business_email']= $v[11];
                                    $data1['twitter']= $v[12];
                                    $data1['email1']= $v[13];
                                    $data1['email2']= $v[14];
                                    $data1['phone1']= $v[15];
                                    $data1['phone2']= $v[16];
                                    $data1['soap_status']= $v[17];
                                    $data1['lead_source']= $v[18];
                                    $data1['lead_generator']= $v[19];
                                    $data1['marketing_soap_status']= $v[20];
                                    $data1['contact_added']= $v[21];
                                    $data1['marketing']= $v[22];
                                    $data1['billing_street']= $v[23];
                                    $data1['billing_city']= $v[24];
                                    $data1['billing_state']= $v[25];
                                    $data1['billing_code']= $v[26];
                                    $data1['billing_country']= $v[27];
                                    $data1['shipping_street']= $v[28];
                                    $data1['shipping_city']= $v[29];
                                    $data1['shipping_state']= $v[30];
                                    $data1['shipping_code']= $v[31];
                                    $data1['shipping_country']= $v[32];
                                    Account::create($data1);
                                }
                            }
                            $i++;
                        }
                    }
                }
            }
        }
       return redirect()->route('account_lists')->with('success','Account added successfully');
    }
    
    public function postAccount(Request $request){
        DB::enableQueryLog();
        $post = $request;
        $columns = array('id','account_name','account_type', 'source','employees_count', 'sic_code','created_by','notes');

        $draw = $request['draw'];
        $row = $request['start'];
        $rowperpage = $request['length']; // Rows display per page
        $columnIndex = $request['order'][0]['column']; // Column index
        $columnName = $request['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $request['order'][0]['dir']; // asc or desc
        $totalCountQuery = DB::table("accounts");
        $query = DB::table("accounts");
        $search = $request['search']['value'];
        //print_r($search);exit();
        $query->where('id', '>', 0);
        if($request['search']['value']!=''){
            $query->where(function($q)use($columns){
                foreach($columns as $col)
                {
                    $q->orWhere($col, 'like', '%'.$request['search']['value'].'%');
                }
            });

            $totalCountQuery->where(function($q)use($columns){
                foreach($columns as $col)
                {
                    $q->orWhere($col, 'like', '%'.$request['search']['value'].'%');
                }
            });
        }

        $totalCount = $totalCountQuery->count();
        $query->select(DB::raw('id,account_name, added_to_icp, account_type, source, employees_count, sic_code, created_by, notes'));

        $results = $query->orderBy($columnName, $columnSortOrder)
            ->limit($rowperpage)
            ->offset($row)
            ->get();

        $data = array();
        foreach($results as $value){
            $actions = '<a class="btn btn-primary btn-circle btn-sm"  href="'.route("view_account", $value->id).'"  title="View"><i class="fas fa-eye"></i></a>
                <a class="btn btn-success btn-circle btn-sm"  href="'.route("edit_account", $value->id).'"  title="Edit"><i class="fas fa-edit"></i></a>';
            /*if(check_permission('comp_pay_plan', 'is_delete'))
            {
                $actions .= '&nbsp;<a href="javascript:void(0)" data-id="'.$value->id.'" class="btn btn-sm btn-danger remove-plan" style="color:#fff !important;"><i class="fa fa-trash"></i></a>';
            }*/
            $data[] = array(
                'action' => $actions,
                'account_name'=>'<a href="'.route('view_account', $value->id).'"  title="View">'.$value->account_name.'</a>',
                'added_to_icp'=>$value->added_to_icp,
                'account_type'=>$value->account_type,
                'source'=>$value->source,
                'employees_count'=>$value->employees_count,
                'sic_code'=>$value->sic_code,
                'created_by'=>$value->created_by,
                'notes'=>$value->notes,
            );
        }
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalCount,
            "iTotalDisplayRecords" => $totalCount,
            "aaData" => $data,
        );
        echo json_encode($response);exit;
    }

    public function postContact(Request $request){
        DB::enableQueryLog();
        $post = $request;
        $columns = array('first_name', 'last_name','account_id','designation','campaign_name','notes','email','secondary_email','phone','mobile','linkedin','follow_up_date','description');

        $draw = $request['draw'];
        $row = $request['start'];
        $rowperpage = $request['length']; // Rows display per page
        $columnIndex = $request['order'][0]['column']; // Column index
        $columnName = $request['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $request['order'][0]['dir']; // asc or desc
        $totalCountQuery = DB::table("contacts");
        $query = DB::table("contacts");
        $search = $request['search']['value'];
        //print_r($search);exit();
        $query->where('id', '>', 0);
        if($request['search']['value']!=''){
            $query->where(function($q)use($columns){
                foreach($columns as $col)
                {
                    $q->orWhere($col, 'like', '%'.$request['search']['value'].'%');
                }
            });

            $totalCountQuery->where(function($q)use($columns){
                foreach($columns as $col)
                {
                    $q->orWhere($col, 'like', '%'.$request['search']['value'].'%');
                }
            });
        }

        $totalCount = $totalCountQuery->count();
        $query->select(DB::raw('id,first_name ,  last_name , account_id , designation , campaign_name , notes , email , secondary_email , phone , mobile , linkedin , follow_up_date , description'));

        $results = $query->orderBy($columnName, $columnSortOrder)
            ->limit($rowperpage)
            ->offset($row)
            ->get();

        $data = array();
        foreach($results as $value){
            $actions = '<a class="btn btn-primary btn-circle btn-sm"  href="'.route("view_contact", $value->id).'"  title="View"><i class="fas fa-eye"></i></a>
                <a class="btn btn-success btn-circle btn-sm"  href="'.route("edit_contact", $value->id).'"  title="Edit"><i class="fas fa-edit"></i></a>';
            /*if(check_permission('comp_pay_plan', 'is_delete'))
            {
                $actions .= '&nbsp;<a href="javascript:void(0)" data-id="'.$value->id.'" class="btn btn-sm btn-danger remove-plan" style="color:#fff !important;"><i class="fa fa-trash"></i></a>';
            }*/
            $data[] = array(
                'action' => $actions,
                'name'=>'<a href="'.route('view_contact', $value->id).'"  title="View">'.$value->first_name.' '.$value->last_name.'</a>',
                'account_id'=>DB::table('accounts')->where('id',$value->account_id)->first()->account_name,
                'designation'=>$value->designation,
                'campaign_name'=>$value->campaign_name,
                'notes'=>$value->notes,
                'email'=>$value->email,
                'secondary_email'=>$value->secondary_email,
                'phone'=>$value->phone,
                'mobile'=>$value->mobile,
                'linkedin'=>$value->linkedin,
                'follow_up_date'=>$value->follow_up_date,
                'description'=>$value->description,
            );
        }
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalCount,
            "iTotalDisplayRecords" => $totalCount,
            "aaData" => $data,
        );
        echo json_encode($response);exit;
    }
    
    /*public function listContact(Request $request){
      
        // Page Length
        $pageNumber = ( $request->start / $request->length )+1;
        $pageLength = $request->length;
        $skip       = ($pageNumber-1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';

        // Build Query
        // Main
        $query = \DB::table('contacts');
        $query->Join('accounts as a', 'a.id', '=','contacts.account_id');
        $query->select('a.account_name' ,'contacts.*');

        // Search
        $search = $request->cSearch;
        $query = $query->where(function($query) use ($search){
            $query->orWhere('contacts.first_name', 'like', "%".$search."%");
            $query->orWhere('contacts.last_name', 'like', "%".$search."%");
            $query->orWhere('a.account_name', 'like', "%".$search."%");
            $query->orWhere('contacts.campaign_name', 'like', "%".$search."%");
            $query->orWhere('contacts.designation', 'like', "%".$search."%");
            $query->orWhere('contacts.secondary_email', 'like', "%".$search."%");
            $query->orWhere('contacts.phone', 'like', "%".$search."%");
            $query->orWhere('contacts.mobile', 'like', "%".$search."%");
            $query->orWhere('contacts.email', 'like', "%".$search."%");
            $query->orWhere('contacts.linkedin', 'like', "%".$search."%");
            $query->orWhere('contacts.follow_up_date', 'like', "%".$search."%");
            $query->orWhere('contacts.description', 'like', "%".$search."%");
        });

        $orderByName = 'contacts.first_name';
        switch($orderColumnIndex){
            case '1':
                $orderByName = 'contacts.first_name';
                break;
            case '2':
                $orderByName = 'a.account_name';
                break;
            case '3':
                $orderByName = 'contacts.campaign_name';
                break;
            case '4':
                $orderByName = 'contacts.designation';
                break;
            case '5':
                $orderByName = 'contacts.notes';
                break;
            case '6':
                $orderByName = 'contacts.email';
                break;
            case '7':
                $orderByName = 'contacts.secondary_email';
                break;
            case '8':
                $orderByName = 'contacts.phone';
                break;
            case '9':
                $orderByName = 'contacts.mobile';
                break;
            case '10':
                $orderByName = 'contacts.linkedin';
                break;
            case '11':
                $orderByName = 'contacts.follow_up_date';
                break;
            case '12':
                $orderByName = 'contacts.description';
                break;
            default:
                $orderByName = 'contacts.first_name';
                break;
        }

        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $data = $query->skip($skip)->take($pageLength)->get();

        return response()->json(["draw"=> $request->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $data], 200);
    }*/
    
    public function delete_contact($id){
        Contact::where('id',$id)->delete();   
        return redirect()->route('contact_lists');
    }
    
    public function listContact(Request $request){
      
        // Page Length
        $pageNumber = ( $request->start / $request->length )+1;
        $pageLength = $request->length;
        $skip       = ($pageNumber-1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';

        // Build Query
        // Main
        $query = \DB::table('contacts');
        $query->Join('accounts as a', 'a.id', '=','contacts.account_id');
        $query->select('a.account_name' ,'contacts.*');

        // Search
        $search = $request->cSearch;
        if($request->user ==''){
            $query = $query->where(function($query) use ($search){
                $query->orWhere('contacts.first_name', 'like', "%".$search."%");
                $query->orWhere('contacts.last_name', 'like', "%".$search."%");
                $query->orWhere('a.account_name', 'like', "%".$search."%");
                $query->orWhere('contacts.campaign_name', 'like', "%".$search."%");
                $query->orWhere('contacts.designation', 'like', "%".$search."%");
                $query->orWhere('contacts.mobile', 'like', "%".$search."%");
                $query->orWhere('contacts.email', 'like', "%".$search."%");
                $query->orWhere('contacts.linkedin', 'like', "%".$search."%");
                $query->orWhere('contacts.follow_up_date', 'like', "%".$search."%");
                //$query->orWhere('contacts.description', 'like', "%".$search."%");
            });
        }

        if($request->user !=''){
            $query->Where('contacts.created_by', 'like', "%".$request->user."%");
        }

        if($request->date1 !='' && $request->date2 !=''){
            $query->whereBetween('contacts.updated_at', [$request->date1, $request->date2]);
        }

        $orderByName = 'contacts.first_name';
        switch($orderColumnIndex){
            case '1':
                $orderByName = 'contacts.first_name';
                break;
            case '2':
                $orderByName = 'a.account_name';
                break;
            case '3':
                $orderByName = 'contacts.campaign_name';
                break;
            case '4':
                $orderByName = 'contacts.designation';
                break;
            case '5':
                $orderByName = 'contacts.notes';
                break;
            case '6':
                $orderByName = 'contacts.email';
                break;
            case '7':
                $orderByName = 'contacts.mobile';
                break;
            case '8':
                $orderByName = 'contacts.linkedin';
                break;
            case '9':
                $orderByName = 'contacts.follow_up_date';
                break;
            case '10':
                $orderByName = 'contacts.created_at';
                break;
            case '11':
                $orderByName = 'contacts.updated_at';
                break;
            case '12':
                $orderByName = 'contacts.created_by';
                break;
            default:
                $orderByName = 'contacts.first_name';
                break;
        }

        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $results = $query->skip($skip)->take($pageLength)->get();
        
        $data = array();
        foreach($results as $value){
            $data[] = array(
                'id'=> '<a class="edit btn btn-success btn-sm"  href="edit_contact/'.$value->id.'" ><i class="fas fa-edit"></i></a> <a class="btn btn-danger btn-circle btn-sm" onclick="if (!confirm(`Are you sure? you want to delete this info`)) return false;" href="delete_contact/'.$value->id.'" title="Delete"><i class="fas fa-trash"></i></a>',
                'first_name'=>'<a href="view_contact/'.$value->id.'">'.$value->first_name.' '.$value->last_name.'</a>',
                'account_name'=>$value->account_name,
                'campaign_name'=> $value->campaign_name,
                'designation'=>$value->designation,
                'notes'=> $value->notes,
                'email'=> $value->email,
                'mobile'=> $value->mobile,
                'linkedin'=>($value->linkedin)? $value->linkedin :'',
                'follow_up_date'=> $value->follow_up_date,
                'created_at'=> date('M d , Y h:i A', strtotime($value->created_at)),
                'updated_at'=> date("M d , Y h:i A", strtotime($value->updated_at)),
                'created_by'=> $value->created_by,
            );
        }

        return response()->json(["draw"=> $request->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $data], 200);
    }
    
    public function delete_account($id){
        Account::where('id',$id)->delete();
        Contact::where('account_id',$id)->delete();  
        return redirect()->route('contact_lists');
    }

    public function listAccount(Request $request){
      
        // Page Length
        $pageNumber = ( $request->start / $request->length )+1;
        $pageLength = $request->length;
        $skip       = ($pageNumber-1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';


        // Build Query
        // Main
        $query = \DB::table('accounts');
        $query->leftJoin('users as u', 'u.id', '=','accounts.marketing');
        //$query->Join('contacts as c', 'c.account_id', '=','accounts.id');
        $query->select('u.name','u.last_name' ,'accounts.*');

        // Search
        if($request->user ==''){
            $search = $request->cSearch;
            $query = $query->where(function($query) use ($search){
                $query->orWhere('account_name', 'like', "%".$search."%");
                $query->orWhere('added_to_icp', 'like', "%".$search."%");
                $query->orWhere('employees_count', 'like', "%".$search."%");
                $query->orWhere('notes', 'like', "%".$search."%");
                $query->orWhere('marketing', 'like', "%".$search."%");
            });
        }
        
        if($request->user !=''){
            $query->Where('marketing', 'like', "%".$request->user."%");
        }

        if($request->date1 !='' && $request->date2 !=''){
            $query->whereBetween('accounts.updated_at', [$request->date1, $request->date2]);
        }

        $orderByName = 'first_name';
        switch($orderColumnIndex){
            case '1':
                $orderByName = 'account_name';
                break;
            case '2':
                $orderByName = 'added_to_icp';
                break;
            case '3':
                $orderByName = 'employees_count';
                break;
            case '4':
                $orderByName = 'u.name';
                break;
            case '7':
                $orderByName = 'updated_at';
                break;
            default:
                $orderByName = 'account_name';
                break;
        }

        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $results = $query->skip($skip)->take($pageLength)->get();

        $data = array();
        foreach($results as $value){
            $data[] = array(
                'id'=>'<a class="edit btn btn-success btn-sm"  href="edit_account/'.$value->id.'" ><i class="fas fa-edit"></i></a> <a class="btn btn-danger btn-circle btn-sm" onclick="if (!confirm(`Are you sure? you want to delete this info`)) return false;" href="delete_account/'.$value->id.'" title="Delete"><i class="fas fa-trash"></i></a>',
                'account_name'=>'<a href="view_account/'.$value->id.'">'.$value->account_name.'</a>',
                'added_to_icp'=>$value->added_to_icp,
                // 'created_by'=>($value->created_by)? DB::table('users')->where('id',$value->created_by)->first()->name.' '. DB::table('users')->where('id',$value->created_by)->first()->last_name:'',
                'employees_count'=>DB::table('contacts')->where('account_id',$value->id)->count(),
                'marketing'=>$value->name.' '.$value->last_name,
                'notes'=>$value->notes,
                'updated_at' => date("M d , Y h:i A", strtotime($value->updated_at)),
            );
        }
        return response()->json(["draw"=> $request->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $data], 200);
    }
    
    //Meetings

    public function create_meeting(Request $request){
        $users = User::orderBy('name', 'ASC')->get();
        $contacts = Contact::select('id','first_name','last_name')->where('id',0)->get();
        $accounts = Account::select('id','account_name')->orderBy('account_name', 'ASC')->get();
        return view('admin.meeting.create', compact('users','contacts','accounts'));
    }

    
    public function store_meeting(Request $request){ 
        $data = array();
        $data['organizer']= $request->organizer;
        $data['type']= $request->type;
        $data['m_date']= $request->m_date;
        $data['m_time']= $request->m_time;
        $data['meeting_title']= $request->meeting_title;
        $data['follow_up_date']= $request->follow_up_date;
        $data['client_name']= $request->client_name;
        $data['contact']= ($request->contact)? implode(',', $request->contact):'';
        $data['notes']= $request->notes;
        $data['status']= $request->status;
        $getd = Meeting::create($data);
        return redirect()->route('meeting_lists')->with('success','Contact added successfully');
    }
    public function add_comment_meeting(Request $request){ 
        $data = array();
        $data['meeting_id']= $request->meeting_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        $getd = MeetingNote::create($data);
        if($request->popup==1){
            return redirect()->route('view_meeting', $request->meeting_id);
        }
        return 1;
    }
    
    public function add_comment_meeting_edit(Request $request){ 
        $data = array();
        $data['meeting_id']= $request->meeting_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        $getd = MeetingNote::create($data);
        if($request->popup==1){
            return redirect()->route('edit_meeting', $request->meeting_id);
        }
        return 1;
    }
    
    public function view_meeting(Request $request,$id)
    {   
        $meeting = Meeting::where('id',$id)->first();
        $notes = MeetingNote::where('meeting_id',$id)->orderBy('id','DESC')->get();
        $salesteam = User::orderBy('name', 'ASC')->get();
       return view('admin.meeting.view', compact('meeting','notes','salesteam'));
    }

    public function edit_meeting(Request $request,$id)
    {
        $meeting = Meeting::where('id',$id)->first();
        $users = User::orderBy('name', 'ASC')->get();
        $accounts = Account::select('id','account_name')->orderBy('account_name', 'ASC')->get();
        $contacts = Contact::select('id','first_name','last_name')->orderBy('first_name', 'ASC')->get();
        $notes = MeetingNote::where('meeting_id',$id)->orderBy('id','DESC')->get();
        return view('admin.meeting.edit', compact('meeting','users','accounts','contacts','notes'));
    }

    public function update_meeting(Request $request,$id){ 
        $data = array();
         $data['organizer']= $request->organizer;
        $data['type']= $request->type;
        $data['m_date']= $request->m_date;
        $data['m_time']= $request->m_time;
        $data['meeting_title']= $request->meeting_title;
        $data['follow_up_date']= $request->follow_up_date;
        $data['client_name']= $request->client_name;
        $data['contact']= ($request->contact)? implode(',', $request->contact):'';
        $data['notes']= $request->notes;
        if($request->status !=''){
            $data['status']= $request->status;
        }
        Meeting::where('id',$id)->update($data);
        return redirect()->route('meeting_lists')->with('success','Contact added successfully');
    }

    public function meeting_lists(Request $request){
        $users = User::orderBy('name', 'ASC')->get();
        $account_ids = DB::select('SELECT DISTINCT client_name FROM meetings where `client_name` !=""');
        return view('admin.meeting.index', compact('users','account_ids'));
    }
    
    public function delete_meeting($id){
        Meeting::where('id',$id)->delete();   
        return redirect()->route('meeting_lists');
    }

    public function listMeetings(Request $request){
        // Page Length
        $pageNumber = ( $request->start / $request->length )+1;
        $pageLength = $request->length;
        $skip       = ($pageNumber-1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';


        // Build Query
        // Main
        $query = \DB::table('meetings');
        $query->leftJoin('users as u', 'u.id', '=','meetings.organizer');
        $query->select('u.name','u.last_name' ,'meetings.*');
        //$query->selectRaw(`select COUNT(id) as count from contacts where 'account_id' = accounts.id `);

        // Search
        if($request->user =='' && $request->client_name !=''){
            $search = $request->cSearch;
            $query = $query->where(function($query) use ($search){
                $query->orWhere('organizer', 'like', "%".$search."%");
                $query->orWhere('type', 'like', "%".$search."%");
                $query->orWhere('m_date', 'like', "%".$search."%");
                $query->orWhere('m_time', 'like', "%".$search."%");
                $query->orWhere('meeting_title', 'like', "%".$search."%");
                //$query->orWhere('client_name', 'like', "%".$search."%");
                $query->orWhere('contact', 'like', "%".$search."%");
                $query->orWhere('notes', 'like', "%".$search."%");
                $query->orWhere('status', 'like', "%".$search."%");
            });
        }

        if($request->user !=''){
            $query->Where('organizer', 'like', "%".$request->user."%");
        }
        
        if($request->client_name !=''){
            $query->Where('client_name', $request->client_name);
        }

        if($request->date1 !='' && $request->date2 !=''){
            $query->whereBetween('m_date', [$request->date1, $request->date2]);
        }

        $orderByName = 'm_date';
        switch($orderColumnIndex){
            case '1':
                $orderByName = 'u.name';
                break;
            // case '2':
            //     $orderByName = 'type';
            //     break;
            case '2':
                $orderByName = 'm_date';
                break;
            case '3':
                $orderByName = 'm_time';
                break;
            case '4':
                $orderByName = 'meeting_title';
                break;
            case '6':
                $orderByName = 'client_name';
                break;
            case '8':
                $orderByName = 'notes';
                break;
            default:
                $orderByName = 'm_date';
                break;
        }

        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $results = $query->skip($skip)->take($pageLength)->get();

        $data = array();
        foreach($results as $value){
            
            if($value->contact !=''){
                $contact_arr = explode(',', $value->contact);
                $link ='';
                $i=0;
                foreach($contact_arr as $contact_ar){
                    if($i!=0){
                        $link .=', ';
                    }
                    $linkedin =  DB::table('contacts')->select('linkedin')->where('id',$contact_ar)->first()->linkedin;

                    $link .='<a href="'.$linkedin.'" target="_blank">'.DB::table('contacts')->select('first_name','last_name')->where('id',$contact_ar)->first()->first_name.' '.DB::table('contacts')->select('first_name','last_name')->where('id',$contact_ar)->first()->last_name.'</a>';
                    $i++;
                }
            }
            $linkA ='';
            if($value->client_name!=''){
                $linkedina =  DB::table('accounts')->select('linkedin')->where('id',$value->client_name)->first()->linkedin;
                if($linkedina!=''){
                    $linkA = '<a href="'.$linkedina.'" target="_blank">'.DB::table('accounts')->select('account_name')->where('id',$value->client_name)->first()->account_name.'</a>';
                }
            }
            
            $data[] = array(
                'id'=>'<a class="edit btn btn-success btn-sm"  href="edit_meeting/'.$value->id.'" ><i class="fas fa-edit"></i></a> <a class="btn btn-danger btn-circle btn-sm" onclick="if (!confirm(`Are you sure? you want to delete this info`)) return false;" href="delete_meeting/'.$value->id.'" title="Delete"><i class="fas fa-trash"></i></a>',
                'organizer'=>$value->name.' '.$value->last_name,
                // 'type'=>$value->type,
                'm_date'=> date('M d , Y', strtotime($value->m_date)),
                //'m_date'=> date('d-m-Y', strtotime($value->m_date)),
                //'m_time'=>DB::table('contacts')->where('account_id',$value->id)->count(),
                'm_time'=>$value->m_time,
                'meeting_title'=> '<a href="view_meeting/'.$value->id.'" >'.$value->meeting_title.'</a>',
                'client_name'=> ($value->client_name)? $linkA:'',
                'contact'=> ($value->contact)? $link:'',
                'notes'=>$value->notes,
                'status'=> $value->status,
            );
        }
        
        return response()->json(["draw"=> $request->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $data], 200);
    }
    
    public function get_contact(Request $request){
        $contacts = Contact::select('id','first_name','last_name')->where('account_id',$request->account_id)->orderBy('first_name', 'ASC')->get();
        $option = '<option value="">Select</option>';
        foreach ($contacts as $contact) {
            $option .= '<option value="'.$contact->id.'" >'.$contact->first_name.' '.$contact->last_name.'</option>';
        }
        echo $option;exit;
    }
    
    public function importDataNew(Request $request)
    {
        if($request->hasFile('file')){
            $path1 = $request->file('file')->store('temp'); 
            $path=storage_path('app').'/'.$path1;  
            $data = Excel::toArray([],$path);
            if(!empty($data) && count($data)){
                $i=0;
                foreach ($data as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {
                            if($i!=0){
                                $account = Account::where('account_name',  $v[0])->first();
                                if(!empty($account)){
                                    $contact = Contactnew::where('first_name',$v[1])->where('last_name',$v[2])->where('account_id',$account->id)->first();
                                    if(empty($contact)){
                                        $data1=array();
                                        $data1['account_id']    = $account->id;
                                        $data1['first_name']    = $v[1];
                                        $data1['last_name']     = $v[2];
                                        $data1['campaign_name'] = $v[3];
                                        $data1['designation']   = $v[4];
                                        $data1['notes']         = $v[5];
                                        $data1['email']         = $v[6];
                                        $data1['secondary_email'] = $v[7];
                                        $data1['phone']         = $v[8];
                                        $data1['mobile']        = $v[9];
                                        $data1['linkedin']      = $v[10];
                                        $data1['follow_up_date'] = $v[11];
                                        $data1['description'] = $v[12];
                                        Contactnew::create($data1);
                                    }
                                }
                            }
                            $i++;
                        }
                    }
                }
                
            }
        }
       return redirect()->route('contact_lists')->with('success','Contact added successfully');
    }
    
    //leads

    public function lead_lists(Request $request){
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.lead.index', compact('users'));
    }

    public function create_lead(Request $request){
        $salesteam = User::orderBy('name', 'ASC')->get();
        return view('admin.lead.create', compact('salesteam'));
    }

    public function store_lead(Request $request){ 
        $data = array();
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['company_name']= $request->company_name;
        $data['message']= $request->message;
        $data['job_title']= $request->job_title;
        $data['topic']= $request->topic;
        $data['notes']= $request->notes;
        $data['user_id']= implode(',', $request->user_id);
        $getd = Lead::create($data);
        return redirect()->route('lead_lists')->with('success','Account added successfully');
    }

    public function view_lead(Request $request,$id)
    {
        $lead = Lead::where('id',$id)->first();
        $notes = AccountNote::where('account_id',$id)->orderBy('id','DESC')->get();
        $salesteam = User::orderBy('name', 'ASC')->get();
        return view('admin.lead.view', compact('lead','notes','salesteam'));
    }

    public function edit_lead(Request $request,$id)
    {
        $lead = Lead::where('id',$id)->first();
        $salesteam = User::orderBy('name', 'ASC')->get();
        return view('admin.lead.edit', compact('lead','salesteam'));
    }

    public function add_comment_lead(Request $request){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        AccountNote::create($data);
        if($request->popup==1){
            return redirect()->route('view_account', $request->account_id);
        }
        return 1;
    }

    public function add_comment_lead_edit(Request $request){ 
        $data = array();
        $data['account_id']= $request->account_id;
        $data['notes']= $request->notes;
        $data['title']= $request->title;
        $data['added_by']= Auth::user()->name;
        AccountNote::create($data);
        if($request->popup==1){
            return redirect()->route('edit_account', $request->account_id);
        }
        return 1;
    }

    public function update_lead(Request $request,$id){ 

        $data = array();
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['company_name']= $request->company_name;
        $data['message']= $request->message;
        $data['job_title']= $request->job_title;
        $data['topic']= $request->topic;
        $data['notes']= $request->notes;
        $data['user_id']= implode(',', $request->user_id);
        $getd = lead::where('id',$id)->update($data);
        return redirect()->route('lead_lists')->with('success','Lead updated successfully');
    }

    public function listLead(Request $request){
      
        // Page Length
        $pageNumber = ( $request->start / $request->length )+1;
        $pageLength = $request->length;
        $skip       = ($pageNumber-1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';


        // Build Query
        // Main
        $query = \DB::table('contact_us');
        $query->select('*');

        // Search
        if($request->user ==''){
            $search = $request->cSearch;
            $query = $query->where(function($query) use ($search){
                $query->orWhere('first_name', 'like', "%".$search."%");
                $query->orWhere('email', 'like', "%".$search."%");
                $query->orWhere('phone', 'like', "%".$search."%");
                $query->orWhere('company_name', 'like', "%".$search."%");
                // $query->orWhere('message', 'like', "%".$search."%");
                // $query->orWhere('job_title', 'like', "%".$search."%");
                // $query->orWhere('topic', 'like', "%".$search."%");
                // $query->orWhere('notes', 'like', "%".$search."%");
            });
        }
        
        // if($request->user !=''){
        //     $query->Where('marketing', 'like', "%".$request->user."%");
        // }

        if($request->date1 !='' && $request->date2 !=''){
            $query->whereBetween('updated_at', [$request->date1, $request->date2]);
        }

        $orderByName = 'first_name';
        switch($orderColumnIndex){
            case '1':
                $orderByName = 'first_name';
                break;
            case '2':
                $orderByName = 'email';
                break;
            case '3':
                $orderByName = 'phone';
                break;
            case '4':
                $orderByName = 'company_name';
                break;
            // case '5':
            //     $orderByName = 'message';
            //     break;
            // case '6':
            //     $orderByName = 'job_title';
            //     break;
            // case '7':
            //     $orderByName = 'topic';
            //     break;
            // case '8':
            //     $orderByName = 'notes';
            //     break;
            case '5':
                $orderByName = 'created_at';
                break;
            case '6':
                $orderByName = 'updated_at';
                break;
            default:
                $orderByName = 'first_name';
                break;
        }

        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $results = $query->skip($skip)->take($pageLength)->get();

        $data = array();
        foreach($results as $value){
            //$userids = implode(',', $value->user_id);

            $data[] = array(
                'id'=>$value->id,
                'first_name'=>$value->first_name.' '.$value->last_name,
                'email'=>$value->email,
                'phone'=>$value->phone,
                'company_name'=>$value->company_name,
                // 'message'=>$value->message,
                // 'job_title'=>$value->job_title,
                // 'topic'=>$value->topic,
                // 'notes'=>$value->notes,
                // 'user_id'=>$value->user_id,
                'created_at' => date("M d , Y h:i A", strtotime($value->created_at)),
                'updated_at' => date("M d , Y h:i A", strtotime($value->updated_at)),
            );
        }

        return response()->json(["draw"=> $request->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $data], 200);
    }

}