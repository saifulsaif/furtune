<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;
	use Illuminate\Support\Facades\Storage;

	class AdminServiceInfos22Controller extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "title";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "service_infos";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Title","name"=>"title"];
			$this->col[] = ["label"=>"Description","name"=>"description"];
			$this->col[] = ["label"=>"Image","name"=>"image","image"=>true];
			$this->col[] = ["label"=>"Menu List Id","name"=>"menu_list_id","join"=>"submenu_facilities,item_name"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Description','name'=>'description','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Facility','name'=>'facility','type'=>'textarea','validation'=>'','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Image','name'=>'image','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10','datatable'=>'submenu_facilities,item_name'];
			$this->form[] = ['label'=>'Menu List Id','name'=>'menu_list_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Title','name'=>'title','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'You can only enter the letter only'];
			//$this->form[] = ['label'=>'Description','name'=>'description','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Image','name'=>'image','type'=>'upload','validation'=>'required|image|max:3000','width'=>'col-sm-10','help'=>'File types support : JPG, JPEG, PNG, GIF, BMP'];
			//$this->form[] = ['label'=>'Menu List Id','name'=>'menu_list_id','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'submenu_facilities,item_name'];
			# OLD END FORM

			/*
	        | ----------------------------------------------------------------------
	        | Sub Module
	        | ----------------------------------------------------------------------
			| @label          = Label of action
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        |
	        */
	        $this->sub_module = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        |
	        */
	        $this->addaction = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Button Selected
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button
	        | Then about the action, you should code at actionButtonSelected method
	        |
	        */
	        $this->button_selected = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------
	        | @message = Text of message
	        | @type    = warning,success,danger,info
	        |
	        */
	        $this->alert        = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add more button to header button
	        | ----------------------------------------------------------------------
	        | @label = Name of button
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        |
	        */
	        $this->index_button = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
	        |
	        */
	        $this->table_row_color = array();


	        /*
	        | ----------------------------------------------------------------------
	        | You may use this bellow array to add statistic at dashboard
	        | ----------------------------------------------------------------------
	        | @label, @count, @icon, @color
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add javascript at body
	        | ----------------------------------------------------------------------
	        | javascript code in the variable
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code after index table
	        | ----------------------------------------------------------------------
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include Javascript File
	        | ----------------------------------------------------------------------
	        | URL of your javascript each array
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add css style at body
	        | ----------------------------------------------------------------------
	        | css code in the variable
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;



	        /*
	        | ----------------------------------------------------------------------
	        | Include css File
	        | ----------------------------------------------------------------------
	        | URL of your css each array
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();


	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for button selected
	    | ----------------------------------------------------------------------
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here

	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate query of index result
	    | ----------------------------------------------------------------------
	    | @query = current sql query
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate row of index table html
	    | ----------------------------------------------------------------------
	    |
	    */
	    public function hook_row_index($column_index,&$column_value) {
	    	//Your code here
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before add data is execute
	    | ----------------------------------------------------------------------
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after add public static function called
	    | ----------------------------------------------------------------------
	    | @id = last insert id
	    |
	    */
	    public function hook_after_add($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before update data is execute
	    | ----------------------------------------------------------------------
	    | @postdata = input post data
	    | @id       = current id
	    |
	    */
	    public function hook_before_edit(&$postdata,$id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_edit($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_before_delete($id) {
			$getdata = DB::table('service_infos')->where('id',$id)->first();
			if (Storage::disk("public")->exists("public/service/", $getdata->image)) {
	            Storage::disk("public")->delete("public/service/", $getdata->image);
	        }
			$getFacility = DB::table('facilities')->where('id',$getdata->menu_list_id)->get();
			foreach ($getFacility as $key => $value) {
				DB::table('facilities')->where('id', '=', $getFacility->id)->delete();
			}
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :)

		public function getAdd()
		{
			$data = [];
			$data['page_title'] = 'Add Service Details';
			$data['submenu'] =  getValueByTBName('submenu_facilities');
			return $this->cbView("backend.service.add_service_submenus", $data);
		}


		public function postSave()
		{
			$request = request();
			if ($request->hasFile('image')) {
				$image = $request->file('image');
				$filename =	uniqid(5) . '_' . $image->getClientOriginalName();
				$request->image->move(public_path('service'), $filename);
			}
			$data = array(
				'title' => 			$request->title,
				'description' => 	$request->description,
				'image' => 			'public/service/'.$filename,
				'menu_list_id' => 	$request->menu_list_id
			);
			DB::table('service_infos')->insertGetId($data);
			foreach ($request->facility as $key => $value) {
				$facility = array(
					'note' 			=> $value,
					'status' 			=> 1,
					'menu_list_id' => $request->menu_list_id
				);
				DB::table('facilities')->insertGetId($facility);
			}
			return redirect('admin/service_infos22');
		}

		public function getEdit($id)
		{
			$data = [];
			$data['page_title'] = 'Edit Service Details';
			$service = getSingle_id('id',$id,'service_infos');
			$facilitys = getAll_id('menu_list_id',$service->menu_list_id,'facilities');
			$submenu = getValueByTBName('submenu_facilities');
			// dd($facilitys);
			return $this->cbView("backend.service.edit_service_submenus", compact('data','service','facilitys','submenu'));
		}

		public function postEdit()
		{
			$request = request();
			// \Validator::make($request->all(), [
			// 	"pool_id" => "required",
			// 	"name" => "required",
			// 	// "audio" => "required|mimes:mp4,mov,ogg,mp3"
			// ], [
			// 	'pool_id.required' => "pool name field is required.",
			// ]);

			#delete old facility
			$service = getSingle_id('id',$request->service_id,'service_infos');
			$facilitys = getAll_id('menu_list_id',$service->menu_list_id,'facilities');
			foreach ($facilitys as $key => $value) {
				DB::table('facilities')->where('id', '=', $value->id)->delete();
			}
			#insert data to service_infos
			$imageURL = $service->image;
			if ($request->hasFile('image')) {
				$image = $request->file('image');
				$filename =	uniqid(5) . '_' . $image->getClientOriginalName();
				$request->image->move(public_path('service'), $filename);
				$imageURL = 'public/service/'.$filename;
			}

			$data = array(
				'title' => 			$request->title,
				'description' => 	$request->description,
				'image' => 			$imageURL,
				'menu_list_id' => 	$request->menu_list_id
			);
			DB::table('service_infos')
		        ->where('id', $request->service_id)  // find your user by their email
		        ->update($data);  // update the record in the DB.

			#insert into facilities
			foreach ($request->facility as $key => $value) {
				$facility = array(
					'note' 			=> $value,
					'status' 			=> 1,
					'menu_list_id' => $request->menu_list_id
				);
				DB::table('facilities')->insertGetId($facility);
			}

			return redirect('admin/service_infos22');

		}


	}
