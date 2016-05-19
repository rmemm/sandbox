<?php  
try{	
$dbo = new 	PDO('mysql:host=127.0.0.1;dbname=publications','root','', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) );	
}
catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

//    $sql = "        
//    		SELECT emp_fname, emp_lname, employees.role_id, role_name
//    		FROM employees
//   		JOIN roles 
//			ON employees.role_id = roles.role_id
//			WHERE emp_id= :emp_id
//			";	 
//	$stmt = $this->db->query($sql);	  		
//    $query = $this->db->prepare($sql);
//    $query->execute(array(':emp_id' => $favemp));
//    $results = $query->fetchAll(PDO::FETCH_ASSOC); 	
//        foreach ($results as $emp)    {
//			echo $emp['emp_fname']. "" .$emp['emp_lname']; 		} 

    $sql = "        
    		SELECT author, title, category, isbn
    		FROM classics  		
			
			";	 
  		
    $query = $dbo->prepare($sql);
    $query->execute(array());
	
	

    $results = $query->fetchAll(PDO::FETCH_ASSOC); 	
        foreach ($results as $x)
        {
			echo $x['author']. " " .$x['title']. " ". $x['category']. " " . $x['isbn']. "<br>" ;			
		}







?>