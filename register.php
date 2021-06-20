<?php
/* Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu) */
$link = mysqli_connect("localhost", "root", "", "users");
 
// Kiểm tra kết nối
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}

		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = mysqli_real_escape_string($link, $_REQUEST['username']);
  			$password = mysqli_real_escape_string($link, $_REQUEST['pass']);
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($link, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users( username, password ) VALUES ('$username', '$password')";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
					}
                    if(mysqli_query($link, $sql)){
                        echo "Thêm bản ghi thành công.";
                    } else{
                        echo "ERROR: Không thể thực thi $sql. " . mysqli_error($link);
                    }
									    
					
			  }
	}
?>

	