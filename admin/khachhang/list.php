<div class="boxright">
            <h2>Danh sách khách hàng </h2>
            <table class="table loai" border="1">
                <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Tên đăng nhập</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listkhachhang as $kh){
                        extract($kh);
                        $xoakhachhang='index.php?act=xoakhachhang&id='.$id;
                        echo ' <tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$username.'</td>
                        <td>'.$sodienthoai.'</td>
                        <td>'.$email.'</td>
                        <td>
                            <a href="'.$xoakhachhang.'"><input type="button" name="" class="btn" value="Xóa"  onclick="return confirm(\'Ban co chac la muon xoa khong?\')"></a>
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
           
        </div>
       </main>