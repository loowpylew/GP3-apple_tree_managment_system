<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	 
	 function __construct()
	{
		parent::__construct();	 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}
	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('home');
	}
	
	public function orders()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		//table name exact from database
		$crud->set_table('orders');
		
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Order');
		
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('invoiceNo', 'custID','items', 'tree_ID', 'date');
	
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('date', 'custID', 'items', 'tree_ID');
		
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('custID','users','usersUid');
		
		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		$crud->set_relation('items',  'apple_variety', 'fruit');

		$crud->set_relation('tree_ID', 'trees', 'tree_ID');
		
		//form validation (could match database columns set to "not null")
		$crud->required_fields('invoiceNo', 'date', 'custID', 'items', 'tree_ID');
		
		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('custID', 'CustomerID');
		$crud->display_as('items', 'Item');
		$crud->display_as('tree_ID', 'Tree ID');

		
		$output = $crud->render();
		$this->orders_output($output);
	}
	
	function orders_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('orders_view.php', $output);
	}

	public function items()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('items');
		$crud->set_subject('item');
		$crud->columns('itemID', 'itemDesc', 'orders');
		$crud->fields('itemDesc', 'orders');
		$crud->required_fields('itemID', 'itemDesc');
		$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		$crud->display_as('itemDesc', 'Description');
		
		$output = $crud->render();
		$this->items_output($output);
	}
	
	function items_output($output = null)
	{
		$this->load->view('items_view.php', $output);
	}
	public function customers()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('customers');
		$crud->set_subject('customer');
		$crud->fields('custID', 'custName', 'custAddress', 'custTown', 'custPostcode', 'custTel', 'custEmail');
		$crud->required_fields('custID', 'custName', 'custAddress', 'custTown', 'custPostcode', 'custTel', 'custEmail');
		$crud->display_as('custID', 'CustomerID');
		$crud->display_as('custName', 'Name');
		$crud->display_as('custAddress', 'Address');
		$crud->display_as('custTown', 'Town');
		$crud->display_as('custPostcode', 'Postcode');
		$crud->display_as('custTel', 'Phone');
		$crud->display_as('custEmail', 'Email');
		
		$output = $crud->render();
		$this->cust_output($output);
	}
	
	function cust_output($output = null)
	{
		$this->load->view('cust_view.php', $output);
	}
	
	public function orderline()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('order_items');
		$crud->set_subject('order line');
		$crud->fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->set_relation('invoice_no','orders','invoiceNo');
		//have multiple columns show in one FK column by concatenation:  www.grocerycrud.com/forums/topic/479-concatenate-two-or-more-fields-into-one-field/
		$crud->set_relation('item_id','items','{itemID} - {itemDesc}');
		$crud->required_fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->display_as('invoice_no', 'InvoiceNo');
		$crud->display_as('item_id', 'ItemID');
		$crud->display_as('itemQty', 'Quantity');
		$crud->display_as('itemPrice', 'Price');
		
		$output = $crud->render();
		$this->orderline_output($output);
	}
	
	function orderline_output($output = null)
	{
		$this->load->view('orderline_view.php', $output);
	}
	
	public function appleVariety()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		
		$crud->set_table('apple_variety');
		$crud->set_subject('variety');

		$crud->columns('variety_ID', 'fruit', 'fruit_colour','season');
		$crud->fields('variety_ID','fruit', 'fruit_colour', 'season');
		$crud->required_fields('variety_ID','fruit', 'fruit_colour', 'season');

		$output = $crud->render();
		$this->appleVariety_output($output);
	}
	
	function appleVariety_output($output = null)
	{
		$this->load->view('apple_variety.php', $output);
	}

	public function trees()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('trees');
		$crud->set_subject('tree');
		$crud->columns('tree_ID', 'variety_ID', 'retailPrice','OrchardLocations');
		$crud->fields('retailPrice', 'variety_ID');
		$crud->required_fields('retailPrice', 'variety_ID');

		$crud->set_relation('variety_ID', 'apple_variety', 'fruit');
		$crud->set_relation_n_n('OrchardLocations','trees_planted','orchard','tree_ID','orchard_ID','locationName');
		$crud->display_as('variety_ID', 'Variety');
		$crud->display_as('OrchardLocations', 'Orchard Locations');

		
		$output = $crud->render();
		$this->tree_output($output);
	}
	
	function tree_output($output = null)
	{
		$this->load->view('tree.php', $output);
	}

	public function orchard()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('orchard');
		$crud->set_subject('orchard');
		$crud->columns('orchard_ID', 'locationName');
		$crud->fields('locationName');
		$crud->required_fields('locationName');
		
		$crud->display_as('variety_ID', 'Variety');
		$crud->display_as('locationName', 'location Name');


		$output = $crud->render();
		$this->orchard_output($output);
	}
	
	function orchard_output($output = null)
	{
		$this->load->view('orchard.php', $output);
	}

	public function treesPlanted()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('trees_planted');
		$crud->set_subject('Planted tree');
		$crud->columns('tree_ID', 'orchard_ID', 'datePlanted');
		$crud->fields('tree_ID','orchard_ID', 'datePlanted');
		$crud->required_fields('tree_ID','orchard_ID', 'datePlanted');
		$crud->set_relation('tree_ID', 'trees', 'tree_ID');

		$crud->set_relation('orchard_ID', 'orchard', 'locationName');

		$crud->display_as('datePlanted', 'Date Planted');

		$crud->display_as('orchard_ID', 'Location');
		
		$output = $crud->render();
		$this->treesPlanted_output($output);
	}
	
	function treesPlanted_output($output = null)
	{
		$this->load->view('treesPlanted.php', $output);
	}

	

	public function querynav()
	{	
		$this->load->view('header');
		$this->load->view('querynav_view');
	}
		
	public function query1()
	{	
		$this->load->view('header');
		$this->load->view('query1_view');
	}
	
	public function query2()
	{	
		$this->load->view('header');
		$this->load->view('query2_view');
	}
	
	public function blank()
	{	
		$this->load->view('header');
		$this->load->view('blank_view');
	}

	public function signUpPage()
	{
		$this->load->view('header');
		$this->load->view('sign_up');
	}
	public function loginPage()
	{
		$this->load->view('header');
		$this->load->view('login');
		
	}
	public function signUpInc(){
		$this->load->view('signup_inc');
	}
	public function loginInc(){ 
		$this->load->view('login_inc');
	}
	public function users(){
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('users');
		$crud->set_subject('user');
		$crud->columns('usersId', 'usersName', 'usersEmail', 'usersUid', 'usersPwd');
		$crud->fields('usersId', 'usersName', 'usersEmail', 'usersUid', 'usersPwd');
		$crud->required_fields('usersId','usersName', 'usersEmail', 'usersUid', 'usersPwd');
		$crud->display_as('usersId', 'Users ID');
		$crud->display_as('usersName', 'User Name');
		$crud->display_as('usersEmail', 'Users Email');
		$crud->display_as('usersUid', 'Users UID');
		$crud->display_as('usersPwd', 'Users Password');
		
		$output = $crud->render();
		$this->users_output($output);
	}
	
	function users_output($output = null)
	{
		$this->load->view('users.php', $output);
	}

	public function logOut(){
		$this->load->view('logout_inc');
	}

}
