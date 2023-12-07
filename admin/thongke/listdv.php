<div class="boxright">
            <h2>Thống kê dịch vụ được sử dụng nhiều nhất</h2>
            <table class="table loai" border="1">
                        <tr>
                            <th>Mã dịch vụ</th>
                            <th>Tên dịch vụ</th>
                            <th>Số lượng đặt</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                        <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$madv.'</td>
                                    <td>'.$tendv.'</td>
                                    <td>'.$countdl.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                        }
                        ?>
                    </table>
                    <a href="index.php?act=bieudodv"><input type="button" name="" class="btn" value="Chế độ biểu đồ"></a>
        </div>
       </main>