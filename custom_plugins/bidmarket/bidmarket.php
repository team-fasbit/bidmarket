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
     $table_signups= $wpdb->prefix . "signups";
     $tables_access= $wpdb->prefix . "access";
     $table_state= $wpdb->prefix . "state";
     $table_bids= $wpdb->prefix . "bids";
     $table_offer= $wpdb->prefix . "offer";     
     $table_view_bids= $wpdb->prefix . "view_bids";
     $table_view_offers= $wpdb->prefix . "view_offers";
     $sql1 = "CREATE TABLE $table_owner( id int(11) NOT NULL, firstname text NOT NULL, lastname text NOT NULL, street text NOT NULL, city text NOT NULL, state text NOT NULL, zip text NOT NULL, phone text NOT NULL, phone2 text, email text NOT NULL, email2 text, customerid text, project text, description text NOT NULL, priorities text) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
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
     $sql13 = "CREATE TABLE $table_contractors( id int(11) NOT NULL, company text NOT NULL, street text NOT NULL, city text NOT NULL, state text NOT NULL, zip text NOT NULL, phone text NOT NULL, email text NOT NULL, website text NOT NULL, name text NOT NULL, phone2 text, email_v int(1) NOT NULL , registration text NOT NULL, date_of_registration date NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
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
     $sql24 = " CREATE TABLE $table_signups ( id int(11) NOT NULL, firstname text NOT NULL, lastname text NOT NULL, username text NOT NULL, password text NOT NULL, email text NOT NULL, signup_type int(1), validated int(1),signup_key int(11), twitter text, facebook text, instagram text) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql25= "ALTER TABLE $table_signups ADD PRIMARY KEY(id);";
     $sql26="ALTER TABLE $table_signups MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql27 = "CREATE TABLE $tables_access ( id int(11) NOT NULL, menu_item int(11), signup_type int(11)) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql28= "ALTER TABLE $tables_access ADD PRIMARY KEY(id);";
     $sql29="ALTER TABLE $tables_access MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql30="insert into $tables_access (menu_item,signup_type) values (8,1);";
     $sql31="insert into $tables_access (menu_item,signup_type) values (21,2);";
     $sql32="insert into $tables_access (menu_item,signup_type) values (23,2);";
     $sql33="CREATE TABLE $table_state (id int(11) NOT NULL, name text NOT NULL, code character(2) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
     $sql34="ALTER TABLE $table_state  ADD PRIMARY KEY (id);";
     $sql35="ALTER TABLE $table_state  MODIFY id int(11) NOT NULL AUTO_INCREMENT;";  
     $sql36="insert into $table_state (name, code) values ('Alabama', 'AL');";
     $sql37="insert into $table_state (name, code) values ('Arizona','AZ');";
     $sql38="insert into $table_state (name, code) values ('Arkansas','AR');";
     $sql39="insert into $table_state (name, code) values ('California','CA');";
     $sql40="insert into $table_state (name, code) values ('North Carolina','NC');";
     $sql41="insert into $table_state (name, code) values ('South Carolina','SC');";
     $sql42="insert into $table_state (name, code) values ('Colorado','CO');";
     $sql43="insert into $table_state (name, code) values ('Connecticut','CT');";
     $sql44="insert into $table_state (name, code) values ('North Dakota','ND');";
     $sql45="insert into $table_state (name, code) values ('South Dakota','SD');";
     $sql46="insert into $table_state (name, code) values ('Delaware','DE');";
     $sql47="insert into $table_state (name, code) values ('Florida','FL');";
     $sql48="insert into $table_state (name, code) values ('Georgia','GA');";
     $sql49="insert into $table_state (name, code) values ('Idaho','ID');";
     $sql50="insert into $table_state (name, code) values ('Illinois','IL');";
     $sql51="insert into $table_state (name, code) values ('Indiana','IN');";
     $sql52="insert into $table_state (name, code) values ('Iowa','IA');";
     $sql53="insert into $table_state (name, code) values ('Kansas','KS');";
     $sql54="insert into $table_state (name, code) values ('Kentucky','KY');";
     $sql55="insert into $table_state (name, code) values ('Luisiana','LA');";
     $sql56="insert into $table_state (name, code) values ('Maine','ME');";
     $sql57="insert into $table_state (name, code) values ('Maryland','MD');";
     $sql58="insert into $table_state (name, code) values ('Massachusetts','MA');";
     $sql59="insert into $table_state (name, code) values ('Michigan','MI');";
     $sql60="insert into $table_state (name, code) values ('Minnesota','MN');";
     $sql61="insert into $table_state (name, code) values ('Mississippi','MS');";
     $sql62="insert into $table_state (name, code) values ('Missouri','MO');";
     $sql63="insert into $table_state (name, code) values ('Montana','MT');";
     $sql64="insert into $table_state (name, code) values ('Nebraska','NE');";
     $sql65="insert into $table_state (name, code) values ('Nevada','NV');";
     $sql66="insert into $table_state (name, code) values ('New Jersey','NJ');";
     $sql67="insert into $table_state (name, code) values ('New York','NY');";
     $sql68="insert into $table_state (name, code) values ('New Hampshire','NH');";
     $sql69="insert into $table_state (name, code) values ('New Mexico','NM');";
     $sql70="insert into $table_state (name, code) values ('Ohio','OH');";
     $sql71="insert into $table_state (name, code) values ('Oklahoma','OK');";
     $sql72="insert into $table_state (name, code) values ('Oregon','OR');";
     $sql73="insert into $table_state (name, code) values ('Pennsylvania','PA');";
     $sql74="insert into $table_state (name, code) values ('Rhode Island','RI');";
     $sql75="insert into $table_state (name, code) values ('Tennessee','TN');";
     $sql76="insert into $table_state (name, code) values ('Texas','TX');";
     $sql77="insert into $table_state (name, code) values ('Utah','UT');";
     $sql78="insert into $table_state (name, code) values ('Vermont','VT');";
     $sql79="insert into $table_state (name, code) values ('Virginia','VA');";
     $sql80="insert into $table_state (name, code) values ('West Virginia','WV');";
     $sql81="insert into $table_state (name, code) values ('Washington','WA');";
     $sql82="insert into $table_state (name, code) values ('Wisconsin','WI');";
     $sql83="insert into $table_state (name, code) values ('Wyoming','WY');";
     $sql84 = "CREATE TABLE $table_bids ( id int(11) NOT NULL, owner_id int(11), contractor_id int(11), date_of_bid date, bid_number text, amount decimal(11,2), description text, status text, location text, image text, type text, priority text) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql85= "ALTER TABLE $table_bids ADD PRIMARY KEY(id);";
     $sql86="ALTER TABLE $table_bids MODIFY id INT(11) NOT NULL AUTO_INCREMENT;"; 
     $sql87="CREATE OR REPLACE VIEW $table_view_bids AS SELECT $table_bids.id as id, $table_bids.owner_id as owner_id, $table_bids.contractor_id as contractor_id, $table_owner.firstname as firstname, $table_owner.lastname as lastname, $table_bids.bid_number as bid_number, $table_bids.amount as amount, $table_bids.project as project, $table_bids.priority as priority, $table_bids.status as status, $table_bids.image as image, $table_bids.location as location, $table_bids.date_of_bid as date_of_bid, $table_bids.description as description, $table_contractors.name as name, $table_contractors.company as company, $table_contractors.website as website FROM $table_bids, $table_owner, $table_contractors WHERE $table_bids.owner_id=$table_owner.id AND $table_bids.contractor_id=$table_contractors.id ORDER BY $table_bids.id;";
     $sql88 = " CREATE TABLE $table_offer ( id int(11) NOT NULL, offer_number text, contractor_id int(11), bid_id int(11), description text NOT NULL, amount decimal(11,2), startdate date) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
     $sql89= "ALTER TABLE $table_offer ADD PRIMARY KEY(id);";
     $sql90="ALTER TABLE $table_offer MODIFY id INT(11) NOT NULL AUTO_INCREMENT;";
     $sql91="CREATE OR REPLACE VIEW $table_view_offers AS SELECT $table_offer.id as id, $table_offer.amount as amount, $table_offer.contractor_id as contractor_id, $table_offer.description as description, $table_offer.offer_number as offer_number, $table_offer.startdate as startdate, $table_offer.status as status, $table_offer.bid_id bid_id, $table_bids.owner_id as owner_id, $table_bids.bid_number as bid_number, $table_bids.description as bid_description, $table_bids.image as bid_image, $table_bids.location as bid_location, $table_bids.project as bid_project, $table_bids.priority as bid_priority, $table_owner.firstname as owner_firstname, $table_owner.lastname as owner_lastname, $table_contractors.company as contractor_company, $table_contractors.name as contractor_name, $table_contractors.website as contractor_website, $table_contractors.email as contractor_email, $table_contractors.phone as contractor_phone, $table_contractors.city as contractor_city, $table_contractors.street as contractor_street, $table_contractors.state as contractor_state, $table_contractors.zip as contractor_zip FROM $table_offer, $table_bids, $table_owner, $table_contractors WHERE $table_offer.bid_id=$table_bids.id AND $table_offer.contractor_id=$table_contractors.id AND $table_bids.owner_id=$table_owner.id ORDER BY $table_offer.id;";
     $sql92="INSERT INTO $table_contractors (id, company, street, city, state, zip, phone, email, website, name, phone2, email_v, registration, date_of_registration) VALUES (0, 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 0, '0', '2020-07-09')";
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
     $wpdb->query($sql24);
     $wpdb->query($sql25);
     $wpdb->query($sql26);
     $wpdb->query($sql27);
     $wpdb->query($sql28);
     $wpdb->query($sql29);
     $wpdb->query($sql30);
     $wpdb->query($sql31);
     $wpdb->query($sql32);
     $wpdb->query($sql33);
     $wpdb->query($sql34);
     $wpdb->query($sql35);
     $wpdb->query($sql36);
     $wpdb->query($sql37);
     $wpdb->query($sql38);
     $wpdb->query($sql39);
     $wpdb->query($sql30);
     $wpdb->query($sql31);
     $wpdb->query($sql32);
     $wpdb->query($sql33);
     $wpdb->query($sql34);
     $wpdb->query($sql35);
     $wpdb->query($sql36);
     $wpdb->query($sql37);
     $wpdb->query($sql38);
     $wpdb->query($sql39);
     $wpdb->query($sql40);
     $wpdb->query($sql41);
     $wpdb->query($sql42);
     $wpdb->query($sql43);
     $wpdb->query($sql44);
     $wpdb->query($sql45);
     $wpdb->query($sql46);
     $wpdb->query($sql47);
     $wpdb->query($sql48);
     $wpdb->query($sql49);
     $wpdb->query($sql50);
     $wpdb->query($sql51);
     $wpdb->query($sql52);
     $wpdb->query($sql53);
     $wpdb->query($sql54);
     $wpdb->query($sql55);
     $wpdb->query($sql56);
     $wpdb->query($sql57);
     $wpdb->query($sql58);
     $wpdb->query($sql59);
     $wpdb->query($sql60);
     $wpdb->query($sql61);
     $wpdb->query($sql62);
     $wpdb->query($sql63);
     $wpdb->query($sql64);
     $wpdb->query($sql65);
     $wpdb->query($sql66);
     $wpdb->query($sql67);
     $wpdb->query($sql68);
     $wpdb->query($sql69);
     $wpdb->query($sql70);
     $wpdb->query($sql71);
     $wpdb->query($sql72);
     $wpdb->query($sql73);
     $wpdb->query($sql74);
     $wpdb->query($sql75);
     $wpdb->query($sql76);
     $wpdb->query($sql77);
     $wpdb->query($sql78);
     $wpdb->query($sql79);
     $wpdb->query($sql80);
     $wpdb->query($sql81);
     $wpdb->query($sql82);
     $wpdb->query($sql83);
     $wpdb->query($sql92);     
     $wpdb->query($sql84);
     $wpdb->query($sql85);
     $wpdb->query($sql86);
     $wpdb->query($sql88);
     $wpdb->query($sql89);
     $wpdb->query($sql90);
     $wpdb->query($sql91);
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
      $table_posts= $wpdb->prefix . "posts";
      $results_posts = $wpdb->get_results("SELECT * FROM $table_posts where post_type='page' and post_status='publish' order by ID;");
      include('templates/general_settings.php');
    }  
   function view_all_owners(){
      global $wpdb;    
      $table_owner= $wpdb->prefix . "owner";
      $results_owner = $wpdb->get_results("SELECT * FROM $table_owner ORDER BY customerid;");
      include('templates/view_all_owners_template.php');
   }
   function view_bids(){
      global $wpdb;
      $table_signups= $wpdb->prefix . "signups";
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $owner_id=$key->signup_key;
      }
      $table_view_bids= $wpdb->prefix . "bids"; 
      $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where owner_id=$owner_id;");
      include('templates/view_owner_bids_template.php');
   } 
   function view_completed_bids(){
      global $wpdb;
      $table_signups= $wpdb->prefix . "signups";
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $owner_id=$key->signup_key;
      }
      $table_view_bids= $wpdb->prefix . "bids"; 
      $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where owner_id=$owner_id AND status='completed';");
      include('templates/view_completed_owner_bids_template.php');
   } 
   function log_in(){
     global $wpdb;
     $login=$_GET['login'];
     include('templates/login_template.php');
   }      
   function sign_up(){      
      include('templates/signup_template.php');
   }
   function registration_owner(){
      global $wpdb;    
      $table_state= $wpdb->prefix . "state";
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
        $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
        $customerid=random_int(0, 9999999);
        include('templates/register_owner_template.php');
      }
   }
   function view_preferred_projects(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          $table_owner= $wpdb->prefix . "owner";
          $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
          $result_owner = $wpdb->get_results($sql_owner);
          foreach ($result_owner as $key_owner) {
            $projects= $key_owner->project;
          }
          $table_project= $wpdb->prefix . "projects";
          $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");
          include('templates/profile_preferred_projects_template.php');
      }
   }
   function view_account_owner_contact(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
            $twitter=$key->twitter;
            $facebook=$key->facebook;
            $instagram=$key->instagram;
          }
          $table_owner= $wpdb->prefix . "owner";
          $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
          $result_owner = $wpdb->get_results($sql_owner);
          foreach ($result_owner as $key_owner) {
            $phone1= $key_owner->phone;
            $phone2= $key_owner->phone2;
            $email1= $key_owner->email;
            $email2= $key_owner->email2;
          }          
          include('templates/account_contact_owner_template.php');
      }
   }
   function view_account_contractor_contact(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'owner' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-owners/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
            $twitter=$key->twitter;
            $facebook=$key->facebook;
            $instagram=$key->instagram;
          }
          $table_contractors= $wpdb->prefix . "contractors";
          $sql_contractors="SELECT * FROM $table_contractors WHERE id=$signup_key;";
          $results_contractors = $wpdb->get_results($sql_contractors);
          foreach ($results_contractors as $key_contractors) {
            $phone1= $key_contractors->phone;
            $phone2= $key_contractors->phone2;
            $email1= $key_contractors->email;
          }          
          include('templates/account_contact_contractor_template.php');
      }
   }    
   function view_profile_owner_address(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          $table_owner= $wpdb->prefix . "owner";
          $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
          $result_owner = $wpdb->get_results($sql_owner);
          foreach ($result_owner as $key_owner) {
            $street= $key_owner->street;
            $city= $key_owner->city;
            $state= $key_owner->state;
            $zip= $key_owner->zip;
          }
          include('templates/profile_address_owner_template.php');
      }
   }   
   function view_preferred_priorities(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          $table_owner= $wpdb->prefix . "owner";
          $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
          $result_owner = $wpdb->get_results($sql_owner);
          foreach ($result_owner as $key_owner) {
            $priorities= $key_owner->priorities;
          }
          $table_priorities = $wpdb->prefix . "priorities";
          $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");
          include('templates/profile_preferred_priorities_template.php');
      }
   }       
   function view_profile_owner(){
      global $wpdb;    
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          if($type==1){ 
            $table_owner= $wpdb->prefix . "owner";
            $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
            $result_owner = $wpdb->get_results($sql_owner);
            foreach ($result_owner as $key_owner) {
              $id=$key_owner->id;
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
          }   
          $table_project= $wpdb->prefix . "projects";
          $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");
          $table_priorities= $wpdb->prefix . "priorities";
          $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");
          $table_state= $wpdb->prefix . "state";
          $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
          include('templates/form_profile_owners_template.php');
        }
   }                
   function view_owner(){
      global $wpdb;    
      $id= $_GET['id'];
      if(empty($id)){ $id=""; }
      $table_signups= $wpdb->prefix . "signups"; 
      $verify_id=wp_get_current_user()->ID;
      if( 'contractor' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
        $url=home_url('/index.php/dashboard-contractors/');
        echo("<script>location.href = '".$url."'</script>");
      }
      else {
      if(empty($id)){
        if ( is_user_logged_in() ) {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          if($type==1){ 
            $table_owner= $wpdb->prefix . "owner";
            $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
            $result_owner = $wpdb->get_results($sql_owner);
            foreach ($result_owner as $key_owner) {
              $id=$key_owner->id;
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
          }   
          $table_project= $wpdb->prefix . "projects";
          $result_prj = $wpdb->get_results("SELECT * FROM $table_project WHERE id=$idproject");
          foreach ($result_prj as $key_prj) {
            $project= $key_prj->name;
          }
          $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");
          $table_priorities= $wpdb->prefix . "priorities";
          $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");
          $table_state= $wpdb->prefix . "state";
          $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
          include('templates/view_owner_template.php');
        }
      }
      else {
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
        $table_state= $wpdb->prefix . "state";
        $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
        include('templates/view_owner_template.php');
      }
    }
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
      $table_signups= $wpdb->prefix . "signups";
      $table_owner= $wpdb->prefix . "owner";
      $array_email=explode('@',$email1);
      $username=$array_email[0];
      $password='12345678';
      $data_owner= array('firstname'=>$firstname,
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
         'project'=>'0',
         'description'=>$description,
         'priorities'=>$priorities);
      $format_owner = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',"%s");
      $wpdb->insert($table_owner,$data_owner,$format_owner);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        $data_signup= array('firstname'=>$firstname,
         'lastname'=>$lastname,
         'username'=>$username,
         'password'=>$password,
         'email'=>$email1,
         'signup_type'=>1,
         'validated'=>0,
         'signup_key'=>$my_id);
        $format_signup = array('%s','%s','%s','%s','%s','%d','%d','%d');
        $wpdb->insert($table_signups,$data_signup,$format_signup);
        $signups_query=$wpdb->last_query;
        $subject="BidMarket registration";
        $message="<!DOCTYPE html>";
        $message.="<html>";
        $message.="<head>";
        $message.="<title>Sign up message</title>";
        $message.="</head>";
        $message.="<body>";
        $message.="<div class='container'>
                   <div class='row'>
                   <div class='col-md-6 col-text-center'>
                   <img src='".get_template_directory_uri()."/assets/img/logo.png'></img>
                   </div>
                   </div>";
        $message.="<div class='row'>";
        $message.="<div class='col-md-6 col-text-center'>";
        $message.="<span>";
        $message.="<h4>";
        $message.="<i class='fa fa-check'></i><br>";
        $message.="<strong>Success!</strong> <br><br>";
        $message.="<p>You have successfully created a BidMarket account. Please click on the link bellow to verify your email address and complete your regitration</p><br><br>
                      <a type='button' class='btn btn-primary' href='".get_site_url()."/index.php/verify/?email=".$email1."&type=1'>Verify your email</a>
                   </h4>
                   </span></div></div></div>";
        $message.="</body>";
        $message.="</html>";
        wp_mail($email1, $subject, $message);
        include('templates/success.php');
      }
      else {
        include('templates/failed.php'); 
      }
      wp_die();
   }
   function update_social_account(){
      global $wpdb; 
      $id= $_POST['id'];
      $twitter= $_POST['twitter'];
      $facebook= $_POST['facebook'];
      $instagram= $_POST['instagram'];
      $table_signups= $wpdb->prefix . "signups";
      $data = array ('twitter'=> $twitter,
          'facebook'=> $facebook,
          'instagram'=> $instagram);
      $format = array('%s','%s','%s');
      $where = array ('signup_key' => $id, 'signup_type'=> 1);
      $wpdb->update( $table_signups, $data, $where, $format );
      $table_owner= $wpdb->prefix . "owner";
      $sql_owner="SELECT * FROM $table_owner WHERE id=$id;";
      $result_owner = $wpdb->get_results($sql_owner);
      foreach ($result_owner as $key_owner) {
        $phone1= $key_owner->phone;
        $phone2= $key_owner->phone2;
        $email1= $key_owner->email;
        $email2= $key_owner->email2;
      }         
      include('templates/success_account_contact_owners_template.php');
      wp_die();
   }   
   function update_scontractor_account(){
      global $wpdb; 
      $id= $_POST['id'];
      $twitter= $_POST['twitter'];
      $facebook= $_POST['facebook'];
      $instagram= $_POST['instagram'];
      $table_signups= $wpdb->prefix . "signups";
      $data = array ('twitter'=> $twitter,
          'facebook'=> $facebook,
          'instagram'=> $instagram);
      $format = array('%s','%s','%s');
      $where = array ('signup_key' => $id, 'signup_type'=> 2);
      $wpdb->update( $table_signups, $data, $where, $format );
      $table_contractors= $wpdb->prefix . "contractors";
      $sql_contractors="SELECT * FROM $table_contractors WHERE id=$id;";
      $results_contractors = $wpdb->get_results($sql_contractors);
      foreach ($results_contractors as $key_contractors) {
        $phone1= $key_contractors->phone;
        $phone2= $key_contractors->phone2;
        $email1= $key_contractors->email;
      }         
      include('templates/success_account_contact_contractor_template.php');
      wp_die();
   }   
   function update_profile_owner(){
      global $wpdb; 
      $id= $_POST['id'];
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $phone1= $_POST['phone1'];
      $phone2= $_POST['phone2'];
      $email1= $_POST['email1'];
      $email2= $_POST['email2'];
      $customerid= $_POST['customerid'];
      $description= $_POST['description'];
      $table_owner= $wpdb->prefix . "owner";
      $data = array ('firstname'=> $firstname,
          'lastname'=> $lastname,
          'phone'=> $phone1,
          'phone2'=> $phone2,
          'email'=> $email1,
          'email2'=> $email2,
          'customerid'=> $customerid,
          'description'=> $description);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s');
      $where = array ('id' => $id);
      $wpdb->update( $table_owner, $data, $where, $format );
      include('templates/success_profile_owners_template.php');
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
      $description= $_POST['description'];
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
          'description'=> $description);
      $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');
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
      $table_state= $wpdb->prefix . "state";
      $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;"); 
      include('templates/contractors_template.php');
   }
   function change_password(){
      global $wpdb;    
      include('templates/change_password__template.php');
   }
   function set_password(){
      global $wpdb;
      $email=$_GET['email'];    
      include('templates/set_password__template.php');
   }   
   function view_bids_form(){
      global $wpdb;
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $firstname=$key->firstname;
        $lastname=$key->lastname;
        $username=$key->username;
        $password=$key->password;
        $email=$key->email;
        $signup_type=$key->signup_type;
        $validated=$key->validated;
        $signup_key=$key->signup_key;
      }
      $bidnumber=random_int(0, 9999999);
      $table_project= $wpdb->prefix . "projects";
      $results_project = $wpdb->get_results("SELECT * FROM $table_project ORDER BY name;");
      $table_priorities= $wpdb->prefix . "priorities";
      $results_priorities = $wpdb->get_results("SELECT * FROM $table_priorities ORDER BY name;");
      include('templates/create_new_project_template.php');
   }
   function view_account_info(){
      global $wpdb;
      $table_signups= $wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $firstname=$key->firstname;
        $lastname=$key->lastname;
        $username=$key->username;
        $password=$key->password;
        $email=$key->email;
        $signup_type=$key->signup_type;
        $validated=$key->validated;
        $signup_key=$key->signup_key;
      } 
      include('templates/account_info_template.php');
   }
   function view_dashboard_calendar_info(){
      global $wpdb;
      $table_view_bids= $wpdb->prefix . "view_bids"; 
      $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where status='accepted';");
      include('templates/contractors_dashboard_calendar_template.php');
   }
   function view_contractors_project_info(){
      global $wpdb;
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $signup_key=$key->signup_key;
      }
      $table_view_bids= $wpdb->prefix . "view_bids"; 
      $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where contractor_id=$signup_key;");
      include('templates/view_contractors_bids_template.php');
   }
   function view_contractors_offer_info(){
      global $wpdb;
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $signup_key=$key->signup_key;
      }
      $table_view_offers= $wpdb->prefix . "view_offers"; 
      $results_offers = $wpdb->get_results("SELECT * FROM $table_view_offers where contractor_id=$signup_key;");
      include('templates/view_contractors_offers_template.php');
   }
   function view_owners_offer_info(){
      global $wpdb;
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $signup_key=$key->signup_key;
      }
      $table_view_offers= $wpdb->prefix . "view_offers"; 
      $results_offers = $wpdb->get_results("SELECT * FROM $table_view_offers where owner_id=$signup_key;");
      include('templates/view_owner_offers_template.php');
   }                
   function view_available_project_info(){
      global $wpdb;
      $table_view_bids= $wpdb->prefix . "view_bids"; 
      $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where status='sent';");
      include('templates/contractors_dashboard_table_available_projects_template.php');
   }   
   function modal_bid(){
      global $wpdb; 
      $owner_id=$_POST['id'];
      $bidnumber=random_int(0, 9999999);
      $user_id=wp_get_current_user()->ID;
      $table_signup= $wpdb->prefix . "signups";
      $results_signup = $wpdb->get_results("SELECT * FROM $table_signup where user_id=$user_id;");
      foreach ($results_signup as $key_su) {
              $contractor_id=$key_su->signup_key;
      }
      $table_bids= $wpdb->prefix . "bids";
      $results_bids = $wpdb->get_results("SELECT * FROM $table_bids where owner_id=$owner_id and contractor_id=$contractor_id;");
      if (count($results_bids)> 0) {
        foreach ($results_bids as $key_bid) {
          $owner_id=$key_bid->owner_id;
          $contractor_id=$key_bid->contractor_id;
          $bidnumber=$key_bid->bid_number;
          $description=$key_bid->description;
          $amount=$key_bid->mount;
          include('templates/view_bids_template.php');
        }
      } else {
        include('templates/bids_template.php');
      }      
      wp_die();    
   }
   function accept_offer(){
      global $wpdb; 

      wp_die();    
   }
   function offer_form(){
      global $wpdb; 
      $bid_id=$_POST['id'];
      $table_bids= $wpdb->prefix . "bids";
      $results_bids = $wpdb->get_results("SELECT * FROM $table_bids where id=$bid_id;");
      if (count($results_bids)> 0) {
        foreach ($results_bids as $key_bid) {
          $amount=$key_bid->amount;
        }
      }      
      include('templates/view_offer_form_template.php');
      wp_die();    
   }
   function contractors_offer(){
      global $wpdb;
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $signup_key=$key->signup_key;
      }
      $table_view_offers= $wpdb->prefix . "view_offers"; 
      $results_offers = $wpdb->get_results("SELECT * FROM $table_view_offers where contractor_id=$signup_key;");
      include('templates/view_contractors_offers_template.php');
      wp_die(); 
   }      
   function view_offer(){
      global $wpdb; 
      $bid_id=$_POST['id'];
      $key=$_POST['key'];
      $table_signups=$wpdb->prefix . "signups";   
      $id=wp_get_current_user()->ID;
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key_type) {
        $signup_key=$key_type->signup_key;
      }
      $table_view_offers= $wpdb->prefix . "view_offers"; 
      $sql_view_offers="SELECT * FROM $table_view_offers where contractor_id=$signup_key AND bid_id=$bid_id";
      $results_offers = $wpdb->get_results($sql_view_offers);
      foreach ($results_offers as $key_offer) {
        $offer_number=$key_offer->offer_number;
        $startdate=$key_offer->startdate;
        $amount=$key_offer->amount;
        $description=$key_offer->description;
        $contractor_email=$key_offer->contractor_email;
        $contractor_phone=$key_offer->contractor_phone;
        $contractor_street=$key_offer->contractor_street;
        $contractor_state=$key_offer->contractor_state;
        $contractor_zip=$key_offer->contractor_zip;
      }      
      include('templates/view_offer_template.php');
      wp_die();    
   }   
   function send_offer(){
      global $wpdb; 
      $offer_amount=$_POST['offer_amount'];
      $date=$_POST['start_date'];
      $offer_bid_id=$_POST['offer_bid_id'];
      $offer_description=$_POST['offer_description'];
      $table_offer= $wpdb->prefix . "offer"; 
      $offernumber=random_int(0, 9999999);
      $user_id=wp_get_current_user()->ID;
      $table_signup= $wpdb->prefix . "signups";
      $date_offer=explode('/', $date);
      $start_date=$date_offer[2].'-'.$date_offer[0].'-'.$date_offer[1];
      $results_signup = $wpdb->get_results("SELECT * FROM $table_signup where user_id=$user_id;");
      foreach ($results_signup as $key_su) {
              $contractor_id=$key_su->signup_key;
      }
      $table_bids= $wpdb->prefix . "bids";
      $result_bids = $wpdb->get_results("SELECT * FROM $table_bids where id=$offer_bid_id;");
      if (count($result_bids)> 0) {
        foreach ($result_bids as $key_bid) {
          $owner_id=$key_bid->owner_id;
        }
      }
      $results_signup_owner = $wpdb->get_results("SELECT * FROM $table_signup where signup_key=$owner_id and signup_type=1;");
      if (count($results_signup_owner)> 0) {
        foreach ($results_signup_owner as $key_so) {
          $email=$key_so->email;
        }
      }
      $data_offer= array('offer_number'=> $offernumber,
        'contractor_id'=>$contractor_id,
        'bid_id'=>$offer_bid_id,
        'description'=>$offer_description,
        'amount'=>$offer_amount,
        'startdate'=>$start_date);
      $format_offer = array('%s','%d','%d','%s','%d','%s');
      $wpdb->insert($table_offer,$data_offer,$format_offer);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        $query=$wpdb->last_query;
        $subject="BidMarket offer";
        $message="<!DOCTYPE html>";
        $message.="<html>";
        $message.="<head>";
        $message.="<title>Offer message</title>";
        $message.="</head>";
        $message.="<body>";
        $message.="<div class='container'>
                   <div class='row'>
                   <div class='col-md-6 col-text-center'>
                   <img src='".get_template_directory_uri()."/assets/img/logo.png'></img>
                   </div>
                   </div>";
        $message.="<div class='row'>";
        $message.="<div class='col-md-6 col-text-center'>";
        $message.="<span>";
        $message.="<h4>";
        $message.="<i class='fa fa-check'></i><br>";
        $message.="<strong>You have a new offer!</strong> <br><br>";
        $message.="<p>You have a new offer in BidMarket. Please click on the link bellow to view the information</p><br><br>
                      <a type='button' class='btn btn-primary' href='".get_site_url()."/index.php/view_offer/?offer_id=".$my_id."'>View offer</a>
                   </h4>
                   </span></div></div></div>";
        $message.="</body>";
        $message.="</html>";
        wp_mail($email, $subject, $message);
        $table_view_bids= $wpdb->prefix . "view_bids"; 
        $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where status='sent';");
        include('templates/available_projects.php');
      }
      wp_die();
   }   
   function view_info(){
      global $wpdb; 
      $bid_id=$_POST['id'];
      $table_bids= $wpdb->prefix . "bids";
      $results_bids = $wpdb->get_results("SELECT * FROM $table_bids where id=$bid_id;");
      if (count($results_bids)> 0) {
        foreach ($results_bids as $key_bid) {
          $owner_id=$key_bid->owner_id;
          $contractor_id=$key_bid->contractor_id;
          $bidnumber=$key_bid->bid_number;
          $description=$key_bid->description;
          $amount=$key_bid->amount;
          $project=$key_bid->project;
          $priority=$key_bid->priority;
          $image=$key_bid->image;
          $location=$key_bid->location;
        }
        $latlong=explode(',', $location);
        
        include('templates/view_bids_template.php');
      }
      wp_die();    
   }
   function add_rule(){
      global $wpdb; 
      $table_access= $wpdb->prefix . "access"; 
      $pages=$_POST['pages'];
      $signup_type=$_POST['signup_type'];
      $dataaccess= array('menu_item' => $pages,
        'signup_type' => $signup_type);
      $formataccess= array('%d','%d');
      $wpdb->insert($table_access,$dataaccess,$formataccess);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        echo "Success";
      }
      else {
        echo $wpdb->last_error;
      }
      wp_die();      
   }
   function save_project(){
      global $wpdb; 
      $table_bids= $wpdb->prefix . "bids"; 
      $owner_id=$_POST['owner_id'];
      $bid_number=$_POST['bid_number'];
      $amount=$_POST['amount'];
      $description=$_POST['description'];
      $project=$_POST['project'];
      $priorities=$_POST['priorities'];
      $location=$_POST['projectlocation'];
      $picturepreview=$_POST['picturepreview'];     
      $contractor_id=0;
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day";
      $databid= array('owner_id' => $owner_id,
        'contractor_id' => $contractor_id,
        'amount' => $amount,
        'description' => $description,
        'bid_number' => $bid_number,
        'status' => 'sent',
        'date_of_bid' => $date,
        'project' => $project,
        'priority' => $priorities,
        'location' => $location,
        'image' => $picturepreview
      );
      $formatbid = array('%d','%d','%d','%s','%s','%s','%s','%s','%s','%s','%s');
      $wpdb->insert($table_bids,$databid,$formatbid);
      $my_id = $wpdb->insert_id;
      $output="";
      if($my_id>0){
        $output='success';
      }
      else {
        $output=$wpdb->last_error; 
      }
      echo $output;
      wp_die();      
   }      
   function save_bid(){
      global $wpdb; 
      $table_bids= $wpdb->prefix . "bids"; 
      $owner_id=$_POST['owner_id'];
      $contractor_id=$_POST['contractor_id'];
      $bidnumber=$_POST['bid'];
      $description=$_POST['description'];
      $amount=$_POST['amount'];
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day";
      $databid= array('owner_id' => $owner_id,
        'contractor_id' => $contractor_id,
        'mount' => $amount,
        'description' => $description,
        'bid_number' => $bidnumber,
        'status' => 'sent',
        'date_of_bid' => $date);
      $formatbid = array('%d','%d','%d','%s','%s','%s','%s');
      $wpdb->insert($table_bids,$databid,$formatbid);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        include('templates/success_bid.php');
      }
      else {
        include('templates/failed_bid.php'); 
      }
      wp_die();      
   }
   function owner_modal(){
      global $wpdb; 
      $id=$_POST['id'];
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
      include('templates/modal_owner_template.php');
      wp_die();
   }    
   function set_pwd(){
      global $wpdb; 
      $email=$_POST['email'];
      $password=$_POST['password'];
      $table_name2= $wpdb->prefix . "users";
      $sql2="UPDATE $table_name2 SET user_pass=md5('$password') WHERE user_email='$email';";
      $wpdb->query($sql2);
      include('templates/password_changed_template.php'); 
      wp_die();
   }   
   function change_pwd(){
      global $wpdb; 
      $email=$_POST['email'];
      $subject="Bidmarket change password";
      $message="<!DOCTYPE html>";
      $message.="<html>";
      $message.="<head>";
      $message.="<title>BidMarket Message</title>";
      $message.="</head>";
      $message.="<body>";
      $message.="<img src='".get_template_directory_uri()."/assets/img/logo.png'></img>";
      $message.="<p>To set your new password please click in link below!!</p> <br><br>";
      $message.="<a type='button' class='btn btn-primary' href='".get_site_url()."/index.php/set-password/?email=".$email."'>Set your new password</a>";
      $message.="</body>";
      $message.="</html>";
      wp_mail($email, $subject, $message); 
      include('templates/email_sent_template.php');
      wp_die();
   }       
   function email_verified(){
      global $wpdb;
      $email=$_GET['email'];
      $type=$_GET['type'];
      $table_owner= $wpdb->prefix . "owner";
      $table_contractors= $wpdb->prefix . "contractors";  
      $website=get_site_url();
      $table_signups= $wpdb->prefix . "signups";
      $table_name2= $wpdb->prefix . "users";
      $results = $wpdb->get_results("SELECT * FROM $table_signups where email='$email';");
      foreach ($results as $key) {
        $id=$key->id;
        $username=$key->username;
        $password=$key->password;
        $firstname=$key->firstname;
        $lastname=$key->lastname;
        $signup_key=$key->signup_key;
      }
      $userdata= array(
        'user_login'  =>  $username,
        'password'  =>  $password,
        'user_nicename'  =>  $username,
        'user_email'  =>  $email,
        'user_url'  =>  $website,
        'display_name'  => $username,
        'role' => 'subscriber'
      );
      $user_id=wp_insert_user( $userdata );
      if ( ! is_wp_error( $user_id ) ) {
        $sql="UPDATE $table_signups SET user_id=$user_id ,  validated=1 WHERE id=$id;";
        $wpdb->query($sql);
        $sql2="UPDATE $table_name2 SET user_pass=md5('$password') WHERE id=$user_id;";
        $wpdb->query($sql2);
        if($type==2){
          $sql2="UPDATE $table_contractors SET email_v=1 WHERE id=$signup_key;";
          $wpdb->query($sql2);
          add_user_meta( $user_id, '_type_of_user', 'contractor');
        }
        else{
          add_user_meta( $user_id, '_type_of_user', 'owner');
        }
        $subject="Bidmarket registration";
        $message="<!DOCTYPE html>";
        $message.="<html>";
        $message.="<head>";
        $message.="<title>BidMarket Message</title>";
        $message.="</head>";
        $message.="<body>";
        $message.="<img src='".get_template_directory_uri()."/assets/img/logo.png'></img>";
        $message.="<p>Your registration in BidMarket has been approved! Now you can login in Bidmarket.net site! User Name: ".$username." and your temporary password is 12345678  We recommend changing your password to secure your account. Thanks!!</p> ";
        $message.="</body>";
        $message.="</html>";
        wp_mail($email, $subject, $message);
        include('templates/validate_template.php');
      }
      else {
        include('templates/validate_template.php'); 
      }         
   }
   function dashboard_contractors(){
    global $wpdb;
    $verify_id=wp_get_current_user()->ID;
    if( 'owner' == get_user_meta( $verify_id, '_type_of_user', true ) ) {
      $url=home_url('/index.php/dashboard-owners/');
      echo("<script>location.href = '".$url."'</script>");
    }
    else {
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day"; 
      $table_owner= $wpdb->prefix . "owner";
      $results_owner = $wpdb->get_results("SELECT * FROM $table_owner ORDER BY customerid;");
      include('templates/dashboard_contractors_template.php');
    }
   } 
   function dashboard_owners(){
    global $wpdb;
    $table_owner= $wpdb->prefix . "owner";
    $id=wp_get_current_user()->ID;
    if( 'contractor' == get_user_meta( $id, '_type_of_user', true ) ) {
      $url=home_url('/index.php/dashboard-contractors/');
      echo("<script>location.href = '".$url."'</script>");
    }
    else {
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day";
      $table_signups= $wpdb->prefix . "signups";   
      $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
      $results_type = $wpdb->get_results($sql);
      foreach ($results_type as $key) {
        $signup_key=$key->signup_key;
      } 
      $sql_owner="SELECT * FROM $table_owner WHERE id=$signup_key;";
      $result_owner = $wpdb->get_results($sql_owner);
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
      $table_contractors= $wpdb->prefix . "contractors";
      $results_contractors = $wpdb->get_results("SELECT * FROM $table_contractors ORDER BY id;");
      include('templates/dashboard_owners_template.php');
    }
   } 
  function view_contractors_dashboard_form(){
    global $wpdb;
    $table_signups= $wpdb->prefix . "signups";
    $id=wp_get_current_user()->ID;
    $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
    $results_type = $wpdb->get_results($sql);
    foreach ($results_type as $key) {
      $signup_key=$key->signup_key;
      $type=$key->signup_type;
    }
    $table_contractors= $wpdb->prefix . "contractors";
    $sql_contractors="SELECT * FROM $table_contractors WHERE id=$signup_key;";
    $result_contractors = $wpdb->get_results($sql_contractors);
    $table_state= $wpdb->prefix . "state";
    $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
    foreach ($result_contractors as $key_contractors) {
      $id=$key_contractors->id;
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
    include('templates/form_contractors_dashboard_template.php');
  }     
  function view_owners_dashboard_form(){
    global $wpdb;
    $table_signups= $wpdb->prefix . "signups";
    $id=wp_get_current_user()->ID;
    $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
    $results_type = $wpdb->get_results($sql);
    foreach ($results_type as $key) {
      $signup_key=$key->signup_key;
      $type=$key->signup_type;
    }
    $table_owners= $wpdb->prefix . "owner";
    $sql_owners="SELECT * FROM $table_owners WHERE id=$signup_key;";
    $result_owners = $wpdb->get_results($sql_owners);
    $table_state= $wpdb->prefix . "state";
    $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
    foreach ($result_owners as $key_owner) {
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
    include('templates/form_owners_dashboard_template.php');
    }
    function view_contractors(){
      global $wpdb;    
      $id= $_GET['id'];
      $table_signups= $wpdb->prefix . "signups"; 
      if(empty($id)){
        if ( is_user_logged_in() ) {
          $id=wp_get_current_user()->ID;
          $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
          $results_type = $wpdb->get_results($sql);
          foreach ($results_type as $key) {
            $signup_key=$key->signup_key;
            $type=$key->signup_type;
          }
          if($type==2){ 
            $table_contractors= $wpdb->prefix . "contractors";
            $sql_contractors="SELECT * FROM $table_contractors WHERE id=$signup_key;";
            $result_contractors = $wpdb->get_results($sql_contractors);
            $table_state= $wpdb->prefix . "state";
            $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");
            foreach ($result_contractors as $key_contractors) {
              $id=$key_contractors->id;
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
          }   
          include('templates/view_contractors_template.php');
        }
      }
      else {
        $table_contractors= $wpdb->prefix . "contractors";
        $result_contractors = $wpdb->get_results("SELECT * FROM $table_contractors WHERE id=$id;");
        $table_state= $wpdb->prefix . "state";
        $results_state = $wpdb->get_results("SELECT * FROM $table_state ORDER BY name;");

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
      $array_email=explode('@', $email);
      $username=$array_email[0];
      $password='12345678';
      $table_signups= $wpdb->prefix . "signups";
      $table_contractors= $wpdb->prefix . "contractors";
      $time=time();
      $day = strftime("%d",$time);
      $month=strftime("%m",$time);
      $year= strftime("%Y",$time);
      $date="$year-$month-$day";
      $data_contractors= array('company' => $company,
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
      $format_contractors = array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%s',"%s");
      $wpdb->insert($table_contractors,$data_contractors,$format_contractors);
      $my_id = $wpdb->insert_id;
      if($my_id>0){
        $data_signup= array('firstname'=>$company,
         'lastname'=>$website,
         'username'=>$username,
         'password'=>$password,
         'email'=>$email,
         'signup_type'=>2,
         'validated'=>0,
         'signup_key'=>$my_id);
        $format_signup = array('%s','%s','%s','%s','%s','%d','%d','%d');
        $wpdb->insert($table_signups,$data_signup,$format_signup);
        $signups_query=$wpdb->last_query;
        $subject="BidMarket registration";
        $message="<!DOCTYPE html>";
        $message.="<html>";
        $message.="<head>"; 
        $message.="<title>Sign up message</title>";
        $message.="</head>";
        $message.="<body>";
        $message.="<div class='container'>
                   <div class='row'>
                   <div class='col-md-6 col-text-center'>
                   <img src='".get_template_directory_uri()."/assets/img/logo.png'></img>
                   </div>
                   </div>";
        $message.="<div class='row'>";
        $message.="<div class='col-md-6 col-text-center'>";
        $message.="<span>";
        $message.="<h4>";
        $message.="<i class='fa fa-check'></i><br>";
        $message.="<strong>Success!</strong> <br><br>";
        $message.="<p>You have successfully created a BidMarket account. Please click on the link bellow to verify your email address and complete your regitration</p><br><br>
                      <a type='button' class='btn btn-primary' href='".get_site_url()."/index.php/verify/?email=".$email."&type=2'>Verify your email</a>
                   </h4>
                   </span></div></div></div>";
        $message.="</body>";
        $message.="</html>";
        wp_mail($email, $subject, $message);
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
  function uploadpreview(){
    global $wpdb;
    $dir = plugin_dir_path( __DIR__ );
    $output_dir = $dir."bidmarket/templates/assets/uploads/";
    $filename = $_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$filename);
    echo $filename ;
    wp_die();       
  }
  function uploadlogo(){
    global $wpdb;
    $user_id=wp_get_current_user()->ID;
    $dir = plugin_dir_path( __DIR__ );
    $output_dir = $dir."bidmarket/templates/assets/uploads/";
    $filename = $_FILES["myfile"]["name"];
    add_user_meta( $user_id, '_image_logo', $filename);
    move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$filename);
    echo $filename ;
    wp_die();       
  }
  function new_logo(){
    global $wpdb;
    $user_id=wp_get_current_user()->ID;
    $filename =  get_user_meta( $user_id, '_image_logo', true );
    echo "<img src='". plugin_dir_url( __FILE__ ) . "templates/assets/uploads/".$filename."' width='324px' height='200px' />" ;
    wp_die();       
  }
  function update_owner_address(){
    global $wpdb;
    $owner_id=$_POST['id'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $state=$_POST['state'];
    $table_owner= $wpdb->prefix . "owner";
    $data = array ('street'=> $street,
        'city'=> $city,
        'zip'=> $zip,
        'state'=> $state);
    $format = array('%s','%s','%s','%s');
    $where = array ('id' => $owner_id);
    $wpdb->update( $table_owner, $data, $where, $format );
    include('templates/success_profile_address_owner_template.php');
    wp_die();       
  }  
  function update_projects(){
    global $wpdb;
    $owner_id=$_POST['owner_id'];
    $projects=$_POST['projects'];
    $table_owner= $wpdb->prefix . "owner";
    $data = array ('project'=> $projects);
    $format = array('%s');
    $where = array ('id' => $owner_id);
    $wpdb->update( $table_owner, $data, $where, $format );
    echo "Success";
    wp_die();       
  }   
  function update_priorities(){
    global $wpdb;
    $owner_id=$_POST['owner_id'];
    $priorities=$_POST['priorities'];
    $table_owner= $wpdb->prefix . "owner";
    $data = array ('priorities'=> $priorities);
    $format = array('%s');
    $where = array ('id' => $owner_id);
    $wpdb->update( $table_owner, $data, $where, $format );
    echo "Success";
    wp_die();       
  }
  function set_button($bid_id){
    global $wpdb;
    $id=wp_get_current_user()->ID;
    $table_signups= $wpdb->prefix . "signups";   
    $sql="SELECT * FROM $table_signups WHERE user_id = $id;";
    $results_type = $wpdb->get_results($sql);
    foreach ($results_type as $key) {
      $signup_key=$key->signup_key;
    }     
    $table_view_offers= $wpdb->prefix . "view_offers"; 
    $results_offers = $wpdb->get_results("SELECT * FROM $table_view_offers where contractor_id=$signup_key and bid_id=$bid_id;");
    return count($results_offers);
  }
  function available_table(){
    global $wpdb;
    $table_view_bids= $wpdb->prefix . "view_bids"; 
    $results_bids = $wpdb->get_results("SELECT * FROM $table_view_bids where status='sent';");
    include('templates/available_projects.php');
    wp_die();
  }                 
   add_shortcode( 'cr_view_all_owners', 'view_all_owners_shortcode' );
   function view_all_owners_shortcode() {
       ob_start();
       view_all_owners();
       return ob_get_clean();
   }
   add_shortcode( 'cr_registration_owner', 'registration_owner_shortcode' );
   function registration_owner_shortcode() {
       ob_start();
       registration_owner();
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
   add_shortcode( 'cr_change_password', 'change_password_shortcode' );
   function change_password_shortcode() {
       ob_start();
       change_password();
       return ob_get_clean();
   }   
   add_shortcode( 'cr_set_password', 'set_password_shortcode' );
   function set_password_shortcode() {
       ob_start();
       set_password();
       return ob_get_clean();
   }   
   add_shortcode( 'cr_view_contractors', 'view_contractors_shortcode' );
   function view_contractors_shortcode() {
       ob_start();
       view_contractors();
       return ob_get_clean();
   }
   add_shortcode( 'cr_dashboard_owners', 'dashboard_owners_shortcode' );
   function dashboard_owners_shortcode() {
       ob_start();
       dashboard_owners();
       return ob_get_clean();
   }
   add_shortcode( 'cr_dashboard_contractors', 'dashboard_contractors_shortcode' );
   function dashboard_contractors_shortcode() {
       ob_start();
       dashboard_contractors();
       return ob_get_clean();
   }    
   add_shortcode( 'cr_view_bids', 'view_bids_shortcode' );
   function view_bids_shortcode() {
       ob_start();
       view_bids();
       return ob_get_clean();
   }   
   add_shortcode( 'cr_email_verified', 'email_verified_shortcode' );
   function email_verified_shortcode() {
       ob_start();
       email_verified();
       return ob_get_clean();
   }
   function bidmarket_add_menu(){   
      if (function_exists('add_options_page')) {
         add_options_page('Bid Market - General Settings', 'Bid Market general settings', 8, basename(__FILE__), 'bidmarket_general_settings');
      }
   }
   add_action( 'wp_login_failed', 'bidmarket_login_fail' ); 
   function bidmarket_login_fail( $username ) {
     $referrer = $_SERVER['HTTP_REFERER'];  
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
          wp_redirect(site_url() . '/index.php/log-in/?login=failed' );
          exit;
     }
   }
   add_filter( 'wp_mail_content_type', 'type_of_content_html' );
   function type_of_content_html() {
        return 'text/html';
   }   
   add_action( 'phpmailer_init', 'send_smtp_email' );
  function my_login_redirect( $url, $request, $user ){
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if( 'contractor' == get_user_meta( $user->ID, '_type_of_user', true ) ) {
          $url = home_url('/index.php/dashboard-contractors/');
        }
        elseif ( 'owner' == get_user_meta( $user->ID, '_type_of_user', true ) ){
          $url = home_url('/index.php/dashboard-owners/');
        }
        else{
          $url = admin_url();
        }
    }
    return $url;
  }
  add_filter('login_redirect', 'my_login_redirect', 10, 3 );
   function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
  }
  function maps_load_scripts() {
    wp_enqueue_script( "maps", 'https://maps.googleapis.com/maps/api/js?key=', array('jquery'), true );
    wp_enqueue_script( "locations", plugin_dir_url( __FILE__ ) . '/templates/assets/js/location.js' , array( 'jquery','maps' ) ); 
  }  
  if (function_exists('add_action')) {
    add_action('admin_menu', 'bidmarket_add_menu');
  }
  add_action('wp_head', 'maps_load_scripts');
  add_action('wp_ajax_save_owner', 'save_owner');
  add_action('wp_ajax_delete_owner', 'delete_owner');
  add_action('wp_ajax_update_owner', 'update_owner' );
  add_action('wp_ajax_save_contractors', 'save_contractors');
  add_action('wp_ajax_delete_contractors', 'delete_contractors');
  add_action('wp_ajax_update_contractors', 'update_contractors' );
  add_action('wp_ajax_change_pwd', 'change_pwd' );
  add_action('wp_ajax_set_pwd', 'set_pwd' );
  add_action('wp_ajax_owner_modal', 'owner_modal' );
  add_action('wp_ajax_modal_bid', 'modal_bid' );
  add_action('wp_ajax_save_bid', 'save_bid' );
  add_action('wp_ajax_save_project', 'save_project' );
  add_action('wp_ajax_view_info', 'view_info' );
  add_action('wp_ajax_accept_offer', 'accept_offer' ); 
  add_action('wp_ajax_add_rule', 'add_rule' );
  add_action('wp_ajax_nopriv_save_owner', 'save_owner');
  add_action('wp_ajax_nopriv_delete_owner', 'delete_owner');
  add_action('wp_ajax_nopriv_update_owner', 'update_owner' );
  add_action('wp_ajax_nopriv_save_contractors', 'save_contractors');
  add_action('wp_ajax_nopriv_delete_contractors', 'delete_contractors');
  add_action('wp_ajax_nopriv_update_contractors', 'update_contractors' );
  add_action('wp_ajax_nopriv_change_pwd', 'change_pwd' );
  add_action('wp_ajax_nopriv_set_pwd', 'set_pwd' );
  add_action('wp_ajax_nopriv_owner_modal', 'owner_modal' );
  add_action('wp_ajax_nopriv_modal_bid', 'modal_bid' );
  add_action('wp_ajax_nopriv_save_bid', 'save_bid' );
  add_action('wp_ajax_nopriv_save_project', 'save_project' );
  add_action('wp_ajax_nopriv_view_info', 'view_info' );
  add_action('wp_ajax_nopriv_accept_offer', 'accept_offer' );
  add_action('wp_ajax_nopriv_add_rule', 'add_rule' );
  add_action('wp_ajax_uploadlogo', 'uploadlogo');
  add_action( 'wp_ajax_nopriv_uploadlogo', 'uploadpreview' );
  add_action('wp_ajax_uploadpreview', 'uploadpreview');
  add_action( 'wp_ajax_nopriv_uploadpreview', 'uploadpreview' );
  add_action('wp_ajax_new_logo', 'new_logo');
  add_action( 'wp_ajax_nopriv_new_logo', 'new_logo' );
  add_action('wp_ajax_update_priorities', 'update_priorities');
  add_action( 'wp_ajax_nopriv_update_priorities', 'update_priorities' );
  add_action('wp_ajax_update_projects', 'update_projects');
  add_action( 'wp_ajax_nopriv_update_projects', 'update_projects' );
  add_action('wp_ajax_update_owner_address', 'update_owner_address');
  add_action( 'wp_ajax_nopriv_update_owner_address', 'update_owner_address' );  
  add_action('wp_ajax_update_profile_owner', 'update_profile_owner');
  add_action( 'wp_ajax_nopriv_update_profile_owner', 'update_profile_owner' ); 
  add_action('wp_ajax_update_social_account', 'update_social_account');
  add_action( 'wp_ajax_nopriv_update_social_account', 'update_social_account' ); 
  add_action('wp_ajax_offer_form', 'offer_form');
  add_action( 'wp_ajax_nopriv_offer_form', 'offer_form' ); 
  add_action('wp_ajax_send_offer', 'send_offer');
  add_action( 'wp_ajax_nopriv_send_offer', 'send_offer' ); 
  add_action('wp_ajax_update_scontractor_account', 'update_scontractor_account');
  add_action( 'wp_ajax_nopriv_update_scontractor_account', 'update_scontractor_account' ); 
  add_action('wp_ajax_available_table', 'available_table');
  add_action( 'wp_ajax_nopriv_available_table', 'available_table' ); 
  add_action('wp_ajax_view_offer', 'view_offer');
  add_action( 'wp_ajax_nopriv_view_offer', 'view_offer' );
  add_action('wp_ajax_contractors_offer', 'contractors_offer');
  add_action( 'wp_ajax_nopriv_contractors_offer', 'contractors_offer' );
  add_action('activate_bidmarket/bidmarket.php','bidmarket_install');
  add_action('deactivate_bidmarket/bidmarket.php', 'bidmarket_uninstall');