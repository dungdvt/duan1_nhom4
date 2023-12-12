<div class="boxright">
            <h2>Thống kê dịch vụ được sử dụng nhiều nhất</h2>
            <table class="table loai" border="1">
                        <tr>
                            <th>Mã dịch vụ</th>
                            <th>Tên dịch vụ</th>
                            <th>Số lượng đặt</th>
                            <th>Ca </th>
                            <th>Ngày</th>
                            
                        </tr>
                        <?php
                        foreach($listthongkedv as $thongke){
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$madv.'</td>
                                    <td>'.$tendv.'</td>
                                    <td>'.$countdl.'</td>
                                    <td>'.$cadv.'</td>
                                    <td>'.$ngay.'</td>
                                  
                                </tr>';
                        }
                        ?>
                    </table>
                    <a href="index.php?act=bieudodv"><input type="button" name="" class="btn" value="Chế độ biểu đồ"></a>
        </div>
       </main>