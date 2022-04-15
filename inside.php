<?php
	header("content-type:text/html;charset=utf-8");
	//连接数据库
	$link = mysqli_connect("localhost","root","1234","test");
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
    
    $sql = "SELECT id,username, password FROM users";
    $result = $link->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: ". $row["id"]. " - NAME: ". $row["username"]. " -PASSWORD:" . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    
    mysqli_close($link);

?>