
<style>
       
  
    
/* Form đăng kí */

.box-content {

}
.box-content .box-right{
   text-align: center;
   margin: 40px 0;
   margin: 10px auto;

}
.box-content form {
    text-align: left;
    background-color: #fff;
    padding: 20px 40px;
    width: 600px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.box-content .h2 {
    margin-bottom:20px;
    text-align: center;
    color: goldenrod;
    
}

.box-content label {
    display: block;
    margin-top: 10px;
    color: #666;
}

.box-content input {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    background-color: aliceblue;
}

.box-content input[type="submit"] {
    margin-top: 20px;
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

.box-content input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
        <div class="box-content">
            <div class="box-right">
                <h1 class="h2">ĐĂNG KÍ THÀNH VIÊN</h1>
                
                <form action="index.php?act=dangki" method="post">
                <h2 class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                        </h2>
                    <label for="fullname">Họ và Tên:</label>
                    <input type="text" name="name" >
                          
                    <label for="email">Email:</label>
                    <input type="email"  name="email" >

                    <label for="phone">Số Điện Thoại:</label>
                    <input type="tel"  name="sodienthoai" pattern="[0-9]{10}" >

                    <label for="username">Tên đăng nhập:</label>
                    <input type="text"  name="username" >

                    <label for="password">Mật Khẩu:</label>
                    <input type="password"  name="password">

                    <input type="submit" name="dangki" value="Đăng Ký">
                   
                </form>
              
            </div>
        </div>
  