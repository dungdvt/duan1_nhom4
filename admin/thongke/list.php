<div class="boxright">
            <h2>Thống kê loại dịch vụ</h2>
            <table class="table loai" border="1">
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên loại dịch vụ</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                        <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$maloai.'</td>
                                    <td>'.$tenloai.'</td>
                                    <td>'.$countdv.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                        }
                        ?>
                    </table>
                    <a href="index.php?act=bieudo"><input type="button" name="" class="btn" value="Chế độ biểu đồ"></a>
        </div>
       </main>