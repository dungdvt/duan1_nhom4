
<style>
       
  
    
/* Form đăng kí */

.box-content{

}
.box-right{
   text-align: center;
   margin: 40px 0;
   margin: 10px auto;

}
form {
    text-align: left;
    background-color: #fff;
    padding: 20px 40px;
    width: 600px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.h2 {
    margin-bottom:20px;
    text-align: center;
    color: #2980b9;
    
}

label {
    display: block;
    margin-top: 10px;
    color: #666;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    background-color: aliceblue;
}

input[type="submit"] {
    margin-top: 20px;
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #2374b2;
}

</style>
<body>
    <div class="container">
       
            <div class="box-right">
                <h1 class="h2">SỬA THÔNG TIN THÀNH VIÊN</h1>
                <?php 
                        if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                            extract($_SESSION['username']);
                        }
                ?>
                <form action="index.php?act=sua" method="post">
                  
                    <label for="fullname">Họ và Tên:</label>
                    <input type="text" name="name" required value="<?=$name?> " >

                    <label for="email">Email:</label>
                    <input type="email"  name="email" required value="<?=$email?>">

                    <label for="phone">Số Điện Thoại:</label>
                    <input type="tel"  name="sodienthoai" pattern="[0-9]{10}" required value="<?=$sodienthoai?>">

                    <!-- <label for="username">Tên đăng nhập:</label>
                    <input type="text" disabled name="username" required value="" > -->

                    <label for="password">Mật Khẩu:</label>
                    <input type="password"  name="password" required value="<?=$password?>">

                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Sửa thông tin">
                
                </form>
              
            </div>
        