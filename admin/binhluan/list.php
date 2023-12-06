<div class="boxright">
          <h2>DANH SÁCH BÌNH LUẬN</h2>

                <table class="table loai">
            <tr>
               
                <th>STT</th>
                <th>Nội dung bình luận</th>
                <th>IdUser</th>
                <th>IdPro</th>
                <th>Ngày Bình Luận</th>
                <th>Chức năng</th>
                
            </tr>
            <?php
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo '
                    <tr>
               
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$iduser.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a href="'.$xoabl.'"><input type="button" value="Xóa"  onclick="return confirm(\'Ban co chac la muon xoa khong?\')"></a></td>
                </tr>
                    ';
                }
            ?>
           </table>
                
            </div>
        </main>