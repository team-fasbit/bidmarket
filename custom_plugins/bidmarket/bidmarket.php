<?php
   /*
      Plugin Name: bidmarket
      Plugin URI: https://www.bidmarket.net
      Description: Custom plugin for bidmarket site
      Version: 1
      Author: Robert Torres
      Author URI: https://robetorr.net
   */
    function bidmarket_install(){
     global $wpdb;
     $table_owner= $wpdb->prefix . "owner";
     $table_projects= $wpdb->prefix . "projects";     
     $table_priorities= $wpdb->prefix . "priorities";
     $table_contractors= $wpdb->prefix . "contractors";     
     $sql1 = " CREATE TABLE $table_owner( id int(11) NOT NULL, firstname text NOT NULL, lastname text NOT NULL, street text NOT NULL, city text NOT NULL, state text NOT NULL, zip text NOT NULL, phone text NOT NULL, phone2 text NOT NULL, email text NOT NULL, email2 text NOT NULL, customerid text, project int(11) NOT NULL , description text NOT NULL, priorities text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql2= "ALTER TABLE $table_owner ADD PRIMARY KEY(id);";
     $sql3="ALTER TABLE $table_owner MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql4 = "CREATE TABLE $table_projects( id int(11) NOT NULL, name text NOT NULL)ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql5= "ALTER TABLE $table_projects ADD PRIMARY KEY(id);";
     $sql6="ALTER TABLE $table_projects MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql7="insert into $table_projects (name) values ('Roofing');";
     $sql8="insert into $table_projects (name) values ('Painting');";
     $sql9="insert into $table_projects (name) values ('Flooring');";
     $sql10="insert into $table_projects (name) values ('Bath Room Remodel');";
     $sql11="insert into $table_projects (name) values ('Kitchen Remodel');";
     $sql12="insert into $table_projects (name) values ('Whole House Remodel');";
     $sql13 = " CREATE TABLE $table_contractors( id int(11) NOT NULL, company text NOT NULL, street text NOT NULL, city text NOT NULL, state text NOT NULL, zip text NOT NULL, phone text NOT NULL, email text NOT NULL, website text NOT NULL, name text NOT NULL, phone2 text, email_v int(1) NOT NULL , registration text NOT NULL, date_of_registration date NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql14= "ALTER TABLE $table_contractors ADD PRIMARY KEY(id);";
     $sql15="ALTER TABLE $table_contractors MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql16 = "CREATE TABLE $table_priorities( id int(11) NOT NULL, name text NOT NULL)ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql17= "ALTER TABLE $table_priorities ADD PRIMARY KEY(id);";
     $sql18="ALTER TABLE $table_priorities MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql19="insert into $table_priorities (name) values ('Price');";
     $sql20="insert into $table_priorities (name) values ('Quality');";
     $sql21="insert into $table_priorities (name) values ('Reputation');";
     $sql22="insert into $table_priorities (name) values ('Project Start Date');";
     $sql23="insert into $table_priorities (name) values ('Project Completion Time');";
     $wpdb->query($sql1);
     $wpdb->query($sql2);
     $wpdb->query($sql3);
     $wpdb->query($sql4);
     $wpdb->query($sql5);
     $wpdb->query($sql6);
     $wpdb->query($sql7);
     $wpdb->query($sql8);
     $wpdb->query($sql9);
     $wpdb->query($sql10);
     $wpdb->query($sql11);
     $wpdb->query($sql12);
     $wpdb->query($sql13);
     $wpdb->query($sql14);
     $wpdb->query($sql15);
     $wpdb->query($sql16);
     $wpdb->query($sql17);
     $wpdb->query($sql18);
     $wpdb->query($sql19);
     $wpdb->query($sql20);
     $wpdb->query($sql21);
     $wpdb->query($sql22);
     $wpdb->query($sql23);
    }
   function bidmarket_uninstall(){
      global $wpdb; 
      $table_owner= $wpdb->prefix . "owner";
      $table_projects= $wpdb->prefix . "projects";
      $sql1 = "DROP TABLE $table_owner";
      $sql2 = "DROP TABLE $table_projects";
      $wpdb->query($sql1);
      $wpdb->query($sql2);
   }
   function bidmarket_general_settings(){
      global $wpdb;
      $table_owner= $wpdb->prefix . "owner";
      $results_owners = $wpdb->get_results("SELECT * FROM $table_owner order by firstname;"); 
      $table_contractors= $wpdb->prefix . "contractors";
      $results_contractors = $wpdb->get_results("SELECT * FROM $table_contractors order by company;");      
      include('templates/general_settings.php');
    }  
   function view_all_owners(){
      global $wpdb;    
      $table_owner= $wpdb->prefix . "owner";
      $results_owner = $wpdb->get_results("SELECT * FROM $table_owner ORDER BY customerid;");     
      include('templates/view_all_owners_template.php');
   }
   function log_in(){
      include('templates/login_template.php');
   }   
   function sign_up(){      
      include('templates/signup_template.php');
   }          
   function owner_home(){
      global $wpdb;    
      $customerid=random_int(0, 9999999);
      $table_project= $wpdb->prefix . "projects";
      $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");
      $table_priorities= $wpdb->prefix . "priorities";
      $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");      
      include('templates/owner_template.php');
   }
   function view_owner(){
      global $wpdb;    
      $id= $_GET['id'];
      $table_owner= $wpdb->prefix . "owner";
      $result_owner = $wpdb->get_results("SELECT * FROM $table_owner WHERE id=$id;");
      foreach ($result_owner as $key_owner) {
         $firstname= $key_owner->firstname;
         $lastname= $key_owner->lastname;
         $street= $key_owner->street;
         $city= $key_owner->city;
         $zip= $key_owner->zip;
         $state= $key_owner->state;
         $phone1= $key_owner->phone;
         $phone2= $key_owner->phone2;      
         $email1= $key_owner->email;
         $email2= $key_owner->email2;
         $customerid= $key_owner->customerid;
         $idproject= $key_owner->project;
         $description= $key_owner->description;
         $priorities= $key_owner->priorities;
      }
      $table_project= $wpdb->prefix . "projects";
      $result_prj = $wpdb->get_results("SELECT * FROM $table_project WHERE id=$idproject");
      foreach ($result_prj as $key_prj) {
         $project= $key_prj->name;
      }
      $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");      
      $table_priorities= $wpdb->prefix . "priorities";
      $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");      
      include('templates/view_owner_template.php');
   }   
   function save_owner(){
      global $wpdb;    
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $street= $_POST['street'];
      $city= $_POST['city'];
      $zip= $_POST['zip'];
      $state= $_POST['state'];
      $phone1= $_POST['phone1'];
      $phone2= $_POST['phone2'];      
      $email1= $_POST['email1'];
      $email2= $_POST['email2'];
      $customerid= $_POST['customerid'];
      $project= $_POST['project'];
      $description= $_POST['description'];
      $priorities= $_POST['priorities'];
      $table_owner= $wpdb->prefix . "owner";
      $data= array('firstname'=>$firstname,
         'lastname'=>$lastname,
         'street'=>$street,
         'city'=>$city,
         'zip'=>$zip,
         'state'=>$state,
         'phone'=>$phone1,
         'phone2'=>$phone2,
         'email'=>$email1,
         'email2'=>$email2,
         'customerid'=>$customerid,
         'project'=>$project,
         'description'=>$description,
         'priorities'=>$priorities);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%s',"%s");
      $wpdb->insert($table_owner,$data,$format);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        include('templates/success.php');      
      }
      else {
        include('templates/failed.php'); 
      }
      wp_die();
   }
   function update_owner(){
      global $wpdb; 
      $id= $_POST['id'];   
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $street= $_POST['street'];
      $city= $_POST['city'];
      $zip= $_POST['zip'];
      $state= $_POST['state'];
      $phone1= $_POST['phone1'];
      $phone2= $_POST['phone2'];      
      $email1= $_POST['email1'];
      $email2= $_POST['email2'];
      $customerid= $_POST['customerid'];
      $project= $_POST['project'];
      $description= $_POST['description'];
      $priorities= $_POST['priorities'];
      $table_owner= $wpdb->prefix . "owner";
      $data = array ('firstname'=> $firstname,
          'lastname'=> $lastname,
          'street'=> $street,
          'city'=> $city,
          'zip'=> $zip,
          'state'=> $state,
          'phone'=> $phone1,
          'phone2'=> $phone2,
          'email'=> $email1,
          'email2'=> $email2,
          'customerid'=> $customerid,
          'project'=> $project,
          'description'=> $description,
          'priorities'=> $priorities);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%s',"%s");
      $where = array ('id' => $id);
      $wpdb->update( $table_owner, $data, $where, $format );
      include('templates/success.php');
      wp_die();
   }   
   function delete_owner(){
      global $wpdb; 
      $id=$_POST['id'];
      $table_owner= $wpdb->prefix . "owner";
      $sql="DELETE from $table_owner WHERE id=$id;";
      $wpdb->query($sql);
      echo "Success"; 
      wp_die();
   }
   function contractors_home(){
      global $wpdb;    
      include('templates/contractors_template.php');
   }
   function view_contractors(){
      global $wpdb;    
      $id= $_GET['id'];
      $table_contractors= $wpdb->prefix . "contractors";
      $result_contractors = $wpdb->get_results("SELECT * FROM $table_contractors WHERE id=$id;");
      foreach ($result_contractors as $key_contractors) {
         $company= $key_contractors->company;
         $street= $key_contractors->street;
         $city= $key_contractors->city;
         $zip= $key_contractors->zip;
         $state= $key_contractors->state;
         $phone= $key_contractors->phone;
         $email= $key_contractors->email;
         $website= $key_contractors->website;
         $name= $key_contractors->name;
         $phone2= $key_contractors->phone2;
         $email_v= $key_contractors->email_v;
         $registration= $key_contractors->registration;
         $date_of_registration= $key_contractors->date_of_registration;         
      }   
      include('templates/view_contractors_template.php');
   }   
   function save_contractors(){
      global $wpdb;
      $company=$_POST['company'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $zip=$_POST['zip'];
      $state=$_POST['state'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $website=$_POST['website'];
      $name=$_POST['name'];
      $phone2=$_POST['phone2'];
      $email_v=$_POST['email_v'];
      $registration=$_POST['registration'];
      $table_contractors= $wpdb->prefix . "contractors";
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day";
      $data= array('company' => $company,
        'street' => $street,
        'city' => $city,
        'zip' => $zip,
        'state' => $state,
        'phone' => $phone,
        'email' => $email,
        'website' => $website,
        'name' => $name,
        'phone2' => $phone2,
        'email_v' => 0,
        'registration' => '0',
        'date_of_registration' => $date);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%s',"%s");
      $wpdb->insert($table_contractors,$data,$format);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        include('templates/success.php');      
      }
      else {
        include('templates/failed.php'); 
      }
      wp_die();
   }
   function update_contractors(){
      global $wpdb; 
      $id= $_POST['id'];   
      $company=$_POST['company'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $zip=$_POST['zip'];
      $state=$_POST['state'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $website=$_POST['website'];
      $name=$_POST['name'];
      $phone2=$_POST['phone2'];
      $registration=$_POST['registration'];
      $table_contractors= $wpdb->prefix . "contractors";
      $data = array ('company'=>$company,
        'street'=>$street,
        'city'=>$city,
        'zip'=>$zip,
        'state'=>$state,
        'phone'=>$phone,
        'email'=>$email,
        'website'=>$website,
        'name'=>$name,
        'phone2'=>$phone2);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'); 
      $where = array ('id' => $id);
      $wpdb->update( $table_contractors, $data, $where, $format );
      include('templates/success.php');
      wp_die();
   }   
   function delete_contractors(){
      global $wpdb; 
      $id=$_POST['id'];
      $table_contractors= $wpdb->prefix . "contractors";
      $sql="DELETE from $table_contractors WHERE id=$id;";
      $wpdb->query($sql);
      echo "Success"; 
      wp_die();
   }
   add_filter( 'wp_mail_content_type', 'type_of_content_html' );   
   function type_of_content_html() {
        return 'text/html';
   }
   add_shortcode( 'cr_view_all_owners', 'view_all_owners_shortcode' );
   function view_all_owners_shortcode() {
       ob_start();
       view_all_owners();
       return ob_get_clean();
   }   
   add_shortcode( 'cr_owner_home', 'owner_home_shortcode' );
   function owner_home_shortcode() {
       ob_start();
       owner_home();
       return ob_get_clean();
   }
   add_shortcode( 'cr_view_owner', 'view_owner_shortcode' );
   function view_owner_shortcode() {
       ob_start();
       view_owner();
       return ob_get_clean();
   }
   add_shortcode( 'cr_log_in', 'log_in_shortcode' );
   function log_in_shortcode() {
       ob_start();
       log_in();
       return ob_get_clean();
   }    
   add_shortcode( 'cr_signup', 'signup_shortcode' );
   function signup_shortcode() {
       ob_start();
       sign_up();
       return ob_get_clean();
   }   
   add_shortcode( 'cr_contractors_home', 'contractors_home_shortcode' );
   function contractors_home_shortcode() {
       ob_start();
       contractors_home();
       return ob_get_clean();
   }
   add_shortcode( 'cr_view_contractors', 'view_contractors_shortcode' );
   function view_contractors_shortcode() {
       ob_start();
       view_contractors();
       return ob_get_clean();
   }

   function bidmarket_add_menu(){   
      if (function_exists('add_options_page')) {
         add_options_page('Bid Market - General Settings', 'Bid Market general settings', 8, basename(__FILE__), 'bidmarket_general_settings');
      }
   } 
   if (function_exists('add_action')) {
      add_action('admin_menu', 'bidmarket_add_menu');
   }     
   add_action('wp_ajax_save_owner', 'save_owner');
   add_action('wp_ajax_delete_owner', 'delete_owner');
   add_action('wp_ajax_update_owner', 'update_owner' );
   add_action('wp_ajax_nopriv_save_owner', 'save_owner');
   add_action('wp_ajax_nopriv_delete_owner', 'delete_owner');   
   add_action( 'wp_ajax_nopriv_update_owner', 'update_owner' );
   add_action('wp_ajax_save_contractors', 'save_contractors');
   add_action('wp_ajax_delete_contractors', 'delete_contractors');
   add_action('wp_ajax_update_contractors', 'update_contractors' );
   add_action('wp_ajax_signup_form', 'signup_form' );   
   add_action('wp_ajax_nopriv_save_contractors', 'save_contractors');
   add_action('wp_ajax_nopriv_delete_contractors', 'delete_contractors');   
   add_action( 'wp_ajax_nopriv_update_contractors', 'update_contractors' );
   add_action( 'wp_ajax_nopriv_signup_form', 'signup_form' );
   add_action('activate_bidmarket/bidmarket.php','bidmarket_install');
   add_action('deactivate_bidmarket/bidmarket.php', 'bidmarket_uninstall');
//signup_form