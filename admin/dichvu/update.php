<?php
    if(is_array($dichvu)){
        extract($dichvu);  
    }
    $hinhpath = "../upload/".$anh;
    if(is_file($hinhpath)){
        $anh='<img src="'.$hinhpath.'" height="80">';
    }else{
        $anh = 'No file image!!';
    }
?>
<div class="boxright">
            <h2>Thêm dịch vụ</h2>
            <form action="index.php?act=updatedv" method="post" enctype="multipart/form-data">
            Loại <br>
            <select name="idloai">
                        <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        if($idloai==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';
                        else echo '<option value="'.$id.'" >'.$name.'</option>';
                    }
                        ?>
                    </select>
                <label for="">Tên dịch vụ</label>
                <input type="text" name="tendv" id="" value="<?=$dichvu['name']?>">
                <label for="">Giá</label>
                <input type="text" name="giadv" id="" value="<?=$dichvu['gia']?>">
                <label for="">Ảnh</label>
                <input type="file" name="anh"><?=$anh?>
                <label for="">Mô tả</label>
                <textarea name="mota" cols="30" rows="10"><?=$dichvu['mota']?></textarea>
            <input type="hidden" name="id" value="<?=$dichvu['id']?>">
            <input type="submit" name="capnhat" class="btn" value="Cập nhật">
            <input type="button" name="" class="btn" value="Reset">
            <a href="index.php?act=listdv"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           <?php
           ?>
        </div>
        <?php
                   