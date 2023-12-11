<div class="boxright">
            <h2>Thống kê nhân viên được đặt nhiều nhất</h2>
            <table class="table loai" border="1">
                        <tr>
                            <th>Mã nhân viên</th>
                            <th>Tên nhân viên</th>
                            <th>Số lần đặt</th>
                            <th>Ca đặt nhiều nhất</th>
                            <th>Ca đặt ít nhất</th>
                            
                        </tr>
                        <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$manv.'</td>
                                    <td>'.$tennv.'</td>
                                    <td>'.$countnv.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                </tr>';
                        }
                        ?>
                    </table>
                    <a href="index.php?act=bieudonv"><input type="button" name="" class="btn" value="Chế độ biểu đồ"></a>
        </div>
       </main>