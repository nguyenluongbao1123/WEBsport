<div class="main5" style="background-image: url(https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
<div class="form_login">
<div class="form_login-content">
<h1> Đăng Kí </h1>
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			if($tenkhachhang!="" && $email!="" && $diachi!="" && $dienthoai!="" && $matkhau!=""){
					echo '<p style="color:red">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=home');
			} 
			 else {
			  	echo '<p style="color:red">Bạn cần nhập đầy đủ thông tin để đăng ký</p>' ;
			}
		
		}
	}
?>
<form action="" method="POST">
  <div class="login1">
	  <input type="text" name="hovaten"  placeholder="Họ và Tên ">

  </div>
  <div class="login1">
	  <input type="email" name="email" placeholder="Email của bạn ">
  </div>
  <div class="login1">
	  <input type="password" name="matkhau" placeholder="Nhập Mật Khẩu">
  </div>
  <div class="login1">
	  <input type="tel" name="dienthoai" pattern="[0-9]{10}" placeholder="Nhập Điện thoại ( Yêu cầu dạng số)">
  </div>
  <div class="login1">
	  <input type="text" name="diachi" placeholder="Nhập địa chỉ">
  </div>
  <input type="submit" name="dangky" value="Đăng ký" class="login-btn" style="padding: 5px 40px; margin-top: 30px; 
      transform: translate(-50%, -50%);
      margin-left: 50%;
      border: none;
      outline: none;
      border: 1px solid;">
 <!-- <button class="login-btn link-login"> <a href="index.php?quanly=dangnhap" class="check-btn">Đăng nhập nếu có tài khoản</a></button> -->

</form>
</div>
</div></div>
