<?php //this file must be mentioned in the .gitignore file
      //but the project works with a local database, so there isnt' any information leak
      class dbCredit{
            public $db_host       = "localhost";
            public $db_port       = "";
            public $db_username   = "root";
            public $db_password   = "";
            public $db_name       = "polihack";
        
            public $db_schema     = "public";
            
            public $db_usersTable = "users";
            public $db_clinicsReqsTable = "clinic_requests";
            public $db_clinicsTable = "clinics";
            public $db_programari ="programari";
      }

?>