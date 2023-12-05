
<style>    
/* Form đăng kí */
.box-right{
   text-align: center;
   margin: 40px 0;
   margin: 10px auto;

}
.box-right form {
    text-align: left;
    background-color: #fff;
    padding: 60px 40px;
    width: 700px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.box-right .h2 {
    margin-bottom:20px;
    text-align: center;
    color: goldenrod;
    
}

.box-right label {
    display: block;
    margin-top: 10px;
    color: #666;
}

.box-right input {
    width: 100%;
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    background-color: aliceblue;
}

.box-right input[type="email"],
input[type="text"]  {
    margin-top: 20px;
    padding:15px 10px;
    font-size:14px;
    
}

.box-right input[type="submit"] {
    margin-top: 20px;
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

.box-right input[type="submit"]:hover {
    background-color: #45a049;
}
.box-right .thongbao{
    font-size: 14px;
    text-align: center;
    color: red;
}
</style>
       
            <div class="box-right">
                <h1 class="h2">Quên mật khẩu</h1>
                
                <form action="index.php?act=quenmk" method="post">
              
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Mời bạn nhập email..." name="email" >
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" placeholder="Mời bạn nhập tên đăng nhập..."  name="username" >
                    <input type="submit" name="guiemail" value="Gửi">
                    <h2 class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                        </h2>
                </form>
              
            </div>
        
  