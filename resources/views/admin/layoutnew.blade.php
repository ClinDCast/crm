<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="SHORTCUT ICON" href="https://static.zohocdn.com/crm/images/favicon_2f95251_.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"> -->
		<meta name="apple-itunes-app" content="app-id=444908810, affiliate-data=ct=SmartAppBanner_WebApp&amp;pt=423641">
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{{ csrf_token() }}" />
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
	        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
	    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">
		<title>CRM.ClinDCast</title>
		<link href="{{ asset('admin/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('admin/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/default_theme_e366396.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crmcontemporary_da54f4c.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crmcontemporaryfinal_74c5fe2.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/lyte_ltr_52fa112.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/lyte_ltr_52fa113.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/lyte_ltr_Final_8b4475c.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crm-create-resources-less_c8e158e.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/lyte_ltr.css') }}" rel="stylesheet">

		<!--<link href="{{ asset('assets/css/viewcss/crmcontemporary_da54f4c.css') }}" rel="stylesheet">-->
		<!--<link href="{{ asset('assets/css/viewcss/crmcontemporaryfinal_74c5fe2.css') }}" rel="stylesheet">-->
		<!-- <link href="{{ asset('assets/css/viewcss/crmsecondary_daef217.css') }}" rel="stylesheet"> -->
		<link href="{{ asset('assets/css/viewcss/default_theme_e366396.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/viewcss/kanbanview-min_new_edd2b17.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/viewcss/zohocrm_maps_60bbded.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/viewcss/lyte_ltr_Final_8b4475c.css') }}" rel="stylesheet">
		
		<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    	<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">
		<style >
			:root{
				--crm-font-regular: Zoho_Puvi_Regular, sans-serif;
				--crm-font-regularlight: Zoho_Puvi_Regular, sans-serif;
				--crm-font-medium: Zoho_Puvi_Regular, sans-serif;
				--crm-font-mediumitalic: Zoho_Puvi_RegularItalic, sans-serif;
				--crm-font-semibold: Zoho_Puvi_Medium, sans-serif;
				--crm-font-semibolditalic: Zoho_Puvi_MediumItalic, sans-serif;
				--crm-font-bold: Zoho_Puvi_SemiBold, sans-serif;
				--crm-font-bolditalic: Zoho_Puvi_SemiBoldItalic, sans-serif;
				--crm-font-black: Zoho_Puvi_Bold, sans-serif;
				--crm-font-blackitalic: Zoho_Puvi_BoldItalic, sans-serif;
				--crm-font-light: Zoho_Puvi_Regular, sans-serif;
				--crm-font-italic: Zoho_Puvi_RegularItalic, sans-serif;
				--crm-font-thin: Zoho_Puvi_Regular, sans-serif;
				--crm-font-thinitalic: Zoho_Puvi_Regular, sans-serif;
				--crm-font-heavy: Zoho_Puvi_Bold, sans-serif;
				--crux-primary-font: Zoho_Puvi_Regular, sans-serif;
				--crux-bold-font: Zoho_Puvi_SemiBold, sans-serif;
				--crux-light-font: Zoho_Puvi_Regular, sans-serif;
				--crux-thin-font: Zoho_Puvi_Regular, sans-serif;
			}
			.crm-font-semibold-italic , .CanvasFontSemiboldItalic{
			font-family: var(--crm-font-semibolditalic);
			}
			:root{
			--crm-base-font-size: 1.4rem;
			--crm-medium-font-size: 1.5rem;
			--crm-extra-medium-font-size: 1.4rem;
			--crm-small-font-size: 1.3rem;
			--crm-extra-small-font-size: 1.1rem;
			--crm-medium-large-font-size: 1.8rem;
			--crm-large-font-size: 2rem;
			}
		</style>
		<link href="{{ asset('assets/css/custom-view-layer-new_18c8ebc.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crux-smart-filter_2d99087.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crm-list-view-new_1f8f8c1.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/crm-inner-list-new_f927367.css') }}" rel="stylesheet">
	</head>
	<body class="crmBodyWin">
		<div class="newTopbar">
			<!-- menu.jsp code starts here -->
			<div class="crm-menu"> 
				<div>
					<div class="tcell vam crmLogoCont"> 
						<a class="flexAlignCenter" href="{{ route('dashboards') }}"> 
							<span class="crmLogoIcon mR8">
							</span>
							<span class="crmLogoText">CRM
							</span> 
						</a>
					</div>  
					<div class="crm-tab"> 
						<div class="lyteMenuItems">  
							<div class="lyteItem {{(Route::currentRouteName()=='dashboards') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('dashboards') }}"> 
									<span>Home </span> 
								</a> 
							</div>
							<div class="lyteItem {{(Route::currentRouteName()=='account_lists') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('account_lists') }}"> 
									<span>Accounts </span>
								</a>
							</div>
							<div class="lyteItem {{(Route::currentRouteName()=='contact_lists') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('contact_lists') }}"> 
									<span>Contacts </span>
								</a>
							</div>
							<div class="lyteItem {{(Route::currentRouteName()=='meeting_lists') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('meeting_lists') }}"> 
									<span>Meetings </span>
								</a>
							</div>
							<div class=" lyteItem {{(Route::currentRouteName()=='lead_lists') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('lead_lists') }}"> 
									<span>Leads </span>
								</a>
							</div>
							<div class="lyteItem {{(Route::currentRouteName()=='master_data') ? 'lyteMenuActive' : ''}}"> 
								<a class="focusVisibleModule" href="{{ route('master_data') }}"> 
									<span>Master Data </span>
								</a>
							</div>
							<div class="lyteItem"> 
								<a class="focusVisibleModule" href="{{ route('logout') }}"> 
									<span>Logout </span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @yield('content')
		    <!--<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->


		    <!--<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->

		    <!-- Core plugin JavaScript-->
		    <!--<script src="{{ asset('admin/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>-->
		    <!-- Custom scripts for all pages-->
		    <!--<script src="{{ asset('admin/assets/js/sb-admin-2.min.js') }}"></script>-->


		    <!-- Page level plugins -->
		    <!-- Page level custom scripts -->
		    <!--<script src="{{ asset('admin/assets/js/demo/chart-area-demo.js') }}"></script>-->
		    <!--<script src="{{ asset('admin/assets/js/demo/chart-pie-demo.js') }}"></script>-->
		    <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->


		    <!--<script src="{{ asset('admin/assets/multiselect/multiselect.min.js') }}"></script>
		    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
		    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>-->

		    <!--dropdown multiselect-->
		    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>-->
		    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
		    <script type="text/javascript" src="{{ asset('admin/assets/js/custom.js') }}"></script>

		    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->


		     <!--<script src="{{ asset('admin/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>-->
		    <!--<script src="{{ asset('admin/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>-->

		    <!-- Page level custom scripts -->
		    <!--<script src="{{ asset('admin/assets/js/demo/datatables-demo.js') }}"></script>-->
		    <!-- <script>
		      $(document).ready(function() {
		        $('.export_example').DataTable( {
		            order: [[ 0, "asc" ]],
		            dom: 'Bfrtip',
		            buttons: [
		                'copyHtml5',
		                'excelHtml5',
		                // 'csvHtml5',
		                // 'pdfHtml5',
		                 'print'
		            ],
		            alengthChange: true,
		            alengthMenu: [[5, 10, 15, 20, -1], [5, 10, 15, "All"]],
		            pageLength: 200,
		        });
		    });
		</script> -->
	</body>
</html>