<div class="boxright">
            <h2>Danh sách loại hình dịch vụ</h2>
            <table class="table loai" border="1">
                <tr>
                    <th>ID</th>
                    <th>Loại dịch vụ</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        $sualoai='index.php?act=sualoai&id='.$id;
                        $xoaloai='index.php?act=xoaloai&id='.$id;
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>
                            <a href="'.$sualoai.'"><input type="button" name="" class="btn" value="Sửa"></a>
                            <a href="'.$xoaloai.'"><input type="button" name="" class="btn" value="Xóa"  onclick="return confirm(\'Ban co chac la muon xoa khong?\')"></a>
                        </td>
                    </tr>';
                    }
                ?>
               
                <!-- <tr>
                    <td>2</td>
                    <td>Dịch vụ nhuộm</td>
                    <td>
                        <a href=""><input type="button" name="" class="btn" value="Sửa"></a>
                        <a href=""><input type="button" name="" class="btn" value="Xóa"></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dịch vụ uốn</td>
                    <td>
                        <a href=""><input type="button" name="" class="btn" value="Sửa"></a>
                        <a href=""><input type="button" name="" class="btn" value="Xóa"></a>
                    </td>
                </tr> -->
            </table>
            <a href="index.php?act=addloai"><input type="button" name="" class="btn" value="Thêm"></a>
        </div>
       </main>