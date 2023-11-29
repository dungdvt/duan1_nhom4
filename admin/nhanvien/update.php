<?php
if(is_array($nhanvien)){
    extract($nhanvien);
}
?>
<div class="boxright">
            <h2>Cập nhật thông tin nhân viên</h2>
            <form action="index.php?act=updatenv" method="post">
                <label for="">Tên nhân viên</label>
                <input type="text" name="tennv" id="" value="<?=$nhanvien['name']?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" class="btn" value="Sửa">
            <input type="submit" name="" class="btn" value="Reset">
            <a href="index.php?act=listnv"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           
        </div>
       </main>