
<main class="form-content">
            <h1>Đặt lịch giữ chỗ</h1>
            <form action="index.php?act=datlich" method="post">
                <label for="dichvu">Chọn dịch vụ</label>
                <!-- Thay input type="text" thành select -->
                <select name="id_dichvu">
                    <?php
                    foreach($listdichvu as $dv){
                        extract($dv);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                    </select>
                <label for="ngay">Chọn ngày</label>
                <input type="date" id="ngay" name="ngay" onchange="hienThiDanhSachCa()" onkeydown="return false" >
                <!-- <div id="selectedDateErrorMessage">Ngày bạn chọn không hợp lệ, hãy chọn ngày khác!</div> -->
                <div id="danhSachCaVaStylistWrapper">
                    <label for="">Chọn stylist</label>
                    <br>
                    <select name="id_nhanvien">
                    <?php
                    foreach($listnhanvien as $nv){
                        extract($nv);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                   
                    </select>
                    <label for="">Chọn giờ</label>
                    <div id="danhSachCa" class="hang-ngang">
                 
          <!-- Tạo 20 "ca" sử dụng input type="checkbox" -->
                 
                   
                    <?php
                    foreach ($listca as $ca) {
                        extract($ca);
                        echo ' <label class="ca-label" onclick="chonCa(this)">
                        <input type="checkbox"  name="id_ca" value="' . $id . '" >'.$name.'
                        </label>';
                    }
                    ?>
                     
              
                </div>
                </div>
                <!-- Thêm nút submit cho form -->
                
                <input type="submit" name="datlich" value="Đặt lịch">
                <p>Cắt xong trả tiền, hủy lịch không sao</p>
            </form>
        </main>
        