<?php
    include_once '../api/config/database.php';
    include_once '../api/objects/user.php';
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    $database = new Database();
    $db = $database->getConnection();
 

    $user = new User($db);
    $stmt = $user->read();
    $num = $stmt->num_rows;
 
// check if more than 0 record found
if($num>0){
 
    // users array
    $users_arr=array();
    $users_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $user_item=array(
            "user_name" => $name,
            "pass_word" => $pass,
        );
 
        array_push($users_arr["records"], $user_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show users data in json format
    echo json_encode($users_arr);
    
}
?>