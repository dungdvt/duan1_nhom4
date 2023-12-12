<div class="boxright">
                <h2>Danh sách khách hàng đặt lịch</h2>
                <table class="table loai" border="1">
                    <tr>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Giờ làm việc</th>
                        <th>Nhân viên</th>
                        <th>Dịch vụ</th>
                        <th>Ngày đặt</th>
                        <th></th>
                    </tr>
                    <?php
                       if ( $listdatlich) {
                        foreach ( $listdatlich as $datlich) {
                            $id_datlich = $datlich['id'];
                            $khachhang_name = $datlich['khachhang_name'];
                            $ca_name = $datlich['ca_name'];
                            $nhanvien_name = $datlich['nhanvien_name'];
                            $dichvu_name = $datlich['dichvu_name'];
                            $ngay = $datlich['ngay'];
                
                            // Đoạn mã xử lý hoặc hiển thị thông tin
                            // Ví dụ:
                          
                            $suaqldl='index.php?act=suaqldl&id='.$id_datlich;
                            $xoaqldl='index.php?act=xoaqldl&id='.$id_datlich;
                            echo '<tr>
                            <td>'.$id_datlich.'</td>
                            <td>'.$khachhang_name.'</td>
                            <td>'.$ca_name.'</td>
                            <td>'.$nhanvien_name.'</td>
                            <td>'.$dichvu_name.'</td>
                            <td>'.$ngay.'</td>
                        </tr>';
                        }
                        
                    } else {
                        // Xử lý trường hợp không có kết quả
                        echo "Không có dữ liệu";
                    }
                
                        ?>
                </table>
                
            </div>
        </main>