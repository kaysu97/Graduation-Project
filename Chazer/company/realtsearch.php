
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("140.119.19.16", "howard", "ilovehoward", "company");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



if(isset($_REQUEST['term'])){
    // Prepare a select statement
    preg_match_all('/./u', $_REQUEST['term'], $matches);


foreach ($matches[0] as $val) {
    $query_parts[] = "'%".mysqli_real_escape_string($link,$val)."%'";
     // $query_parts[] = "?";
}
$string = implode(' AND company_name LIKE ', $query_parts);

$sql = "SELECT company_name FROM companylist where company_name like {$string} ";

    // if($stmt = mysqli_prepare($link, $sql)){
    // // //     // Bind variables to the prepared statement as parameters
    //     mysqli_stmt_bind_param($stmt, "s", $param_term);

    // // //     // Set parameters
    //     foreach ($matches[0] as $ma) {
    //        $param_term[] = '%'.$ma.'%';
    //     }
    // // //     // $param_term = '%'.$matches .'%' ;

    // // //     // Attempt to execute the prepared statement
    //     if(mysqli_stmt_execute($stmt)){
    //         $result = mysqli_stmt_get_result($stmt);

    //         // //Check number of rows in the result set
    //         if(mysqli_num_rows($sql) > 0){
    //             // Fetch result rows as an associative array
    //             while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
    //                 echo "<p>" . $row["company_name"] . "</p>";


    //             }
    //         } else{
    //             echo "<optin>No matches found</option>";
    //         }
    //     }
    //         else{
    //         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    //     }
    // }

    // // Close statement
    // mysqli_stmt_close($stmt);


                   $query = mysqli_query($link,$sql);
            if(mysqli_num_rows($query) > 0){
                  while($dbrow = mysqli_fetch_array($query)){
                    echo "<p>" .$dbrow['company_name'] . "</p>";
                }

            }else{
                // echo "<optin>No matches found</option>";
            }
        }
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }




// close connection
mysqli_close($link);
?>
