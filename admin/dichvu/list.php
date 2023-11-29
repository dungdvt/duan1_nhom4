<div class="boxright">
                <h2>Danh sách dịch vụ</h2>
                <form action="index.php?act=listdv" method="post">
                    <input type="text" name="kyw">
                    <select name="idloai">
                    <option value="0" selected>All</option>
                    <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="Search">
                </form>
                <table class="table loai" border="1">
                    <tr>
                        <th>ID</th>
                        <th>Dịch vụ</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>ID Loại</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($listdichvu as $dichvu){
                            extract($dichvu);
                            $suadv='index.php?act=suadv&id='.$id;
                            $xoadv='index.php?act=xoadv&id='.$id;
                            $hinhpath = "../upload/".$anh;
                            if(is_file($hinhpath)){
                                $anh='<img src="'.$hinhpath.'" height="80">';
                            }else{
                                $anh = 'No file image!!';
                            }
                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$anh.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$dichvu['id_loai'].'</td>
                            
                            <td>
                            <a href="'.$suadv.'"><input type="button" name="" class="btn" value="Sửa"></a>
                            <a href="'.$xoadv.'"><input type="button" name="" class="btn" value="Xóa"  onclick="return confirm(\'Ban co chac la muon xoa khong?\')"></a>
                        </td>
                        </tr>';
                        }
                        ?>
                </table>
                <div class="button">
                    <a href="index.php?act=adddv"><input type="button" name="" class="btn" value="Thêm"></a>
                </div>
            </div>
        </main>