<div class="boxright">
            <h2>Thêm nhân viên</h2>
            <form action="index.php?act=addnv" method="post">
                <label for="">Tên nhân viên</label>
                <input type="text" name="tennv" id="">
            <input type="submit" name="themmoi" class="btn" value="Thêm">
            <input type="submit" name="" class="btn" value="Reset">
            <a href="index.php?act=listnv"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           
        </div>
       </main>