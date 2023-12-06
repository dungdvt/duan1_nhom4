
        <div class="boxright">
            <h2>Thêm dịch vụ</h2>
            <form action="" method="post" enctype="multipart/form-data">
            Loại <br>
                    <select name="idloai">
                    <option value="0" disabled selected>Chọn loại hình dịch vụ</option>
                        <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                    
                    </select>
                <label for="">Tên dịch vụ</label>
                <input type="text" name="tendv" id="">
                <label for="">Giá</label>
                <input type="text" name="giadv" id="">
                <label for="">Ảnh</label>
                <input type="file" name="anh" id="">
                <label for="">Mô tả</label>
                <textarea name="mota" cols="30" rows="10"></textarea>
            <a href=""><input type="submit" name="themmoi" class="btn" value="Thêm"></a>
            <a href=""><input type="button" name="" class="btn" value="Reset"></a>
            <a href="index.php?act=listdv"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           <?php
           ?>
        </div>
        <?php
                   