<?php
    header('Content-Type: application/json');//biết nội dung trả về là kiểu dữ liệu gì
    require_once("database.php");//chèn 1 file, nếu k tìm thấy file thì ctr sẽ dừng lại
    $data = array();
    $query = "SELECT# FROM # GROUP BY ";// truy vấn dữ liệu
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
        if($stmt->rowCount()>0){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    foreach($result as $row){
        $data[] = $row;
    }
    echo json_encode($data);
?>