<?php
if(is_array($loai)){
    extract($loai);
}
?>
<div class="boxright">
            <h2>Thêm loại hình dịch vụ</h2>
            <form action="index.php?act=updateloai" method="post">
                <label for="">Tên loại hình dịch vụ</label>
                <input type="text" name="tenloai" id="" value="<?=$name?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" class="btn" value="Sửa">
            <input type="submit" name="" class="btn" value="Reset">
            <a href="index.php?act=listloai"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           
        </div>
       </main>