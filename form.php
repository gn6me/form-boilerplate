<?php
	if($_POST['formSubmit'] == "Submit") 
    {
		$errorMessage = "";

        $varMovie = $_POST['formMovie'];
		$varName = $_POST['formName'];
		$varGender = $_POST['formGender'];

		if(empty($errorMessage)) 
        {
			$db = mysql_connect("servername","username","password");
			if(!$db) die("Error connecting to MySQL database.");
			mysql_select_db("databasename" ,$db);

			$sql = "INSERT INTO movieformdata (moviename, yourname, Gender) VALUES (".
							PrepSQL($varMovie) . ", " .
							PrepSQL($varName) . ", " .
							PrepSQL($varGender) . ")";
			mysql_query($sql);
			
			header("Location: thankyou.html");
			exit();
		}
	}
            
    // function: PrepSQL()
    // use stripslashes and mysql_real_escape_string PHP functions
    // to sanitize a string for use in an SQL query
    //
    // also puts single quotes around the string
    //
    function PrepSQL($value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }

        // Quote
        $value = "'" . mysql_real_escape_string($value) . "'";

        return($value);
    }
?>