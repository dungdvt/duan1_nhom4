<div class="boxright">
            <h2>Danh sách nhân viên</h2>
            <table class="table loai" border="1">
                <tr>
                    <th>ID</th>
                    <th>Tên nhân viên</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listnv as $nv){
                        extract($nv);
                        $suanv='index.php?act=suanv&id='.$id;
                        $xoanv='index.php?act=xoanv&id='.$id;
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>
                            <a href="'.$suanv.'"><input type="button" name="" class="btn" value="Sửa"></a>
                            <a href="'.$xoanv.'"><input type="button" name="" class="btn" value="Xóa"  onclick="return confirm(\'Ban co chac la muon xoa khong?\')"></a>
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
            <a href="index.php?act=addnv"><input type="button" name="" class="btn" value="Thêm"></a>
        </div>
       </main>