<main>
            <div class="history-table">
            <h1>Lịch sử đặt lịch</h1>
            <table class="table lichsu" border="1">
            <tr>
                <th>STT</th>
                <th>Tên dịch vụ</th>
                
                <th>Giá</th>
                <th>Ngày đặt lịch</th>
                <th>Trạng thái</th>
               </tr>
             <?php
 if ( $listhistory) {
    $i = 1;
    foreach ( $listhistory as $history) {
       
        $ten_dichvu = $history['Tên sản phẩm'];
        $gia = $history['Giá'];
        $ngay = $history['Ngày đặt hàng'];
       
        // Đoạn mã xử lý hoặc hiển thị thông tin
        // Ví dụ:
        echo '<tr>
        <td>'.$i.'</td>
        <td>'.$ten_dichvu.'</td>
        <td>'.$gia.'</td>
        <td>'.$ngay.'</td>
        
        </tr>';
        $i++;
    }
    
} else {
    // Xử lý trường hợp không có kết quả
    echo "Không có dữ liệu";
}
             ?>
               <!-- <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr>
               <tr>
               <td>1</td>
               <td>Tẩy tóc siêu cấp</td>
               <td>IMG</td>
               <td>350.000 VNĐ</td>
               <td>16-11-2023</td>
               <td>Chờ xét duyệt</td>
               </tr> -->
            </table>
        </div>
    </main>