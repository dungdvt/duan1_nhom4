
<main class="form-content">
            <h1>Đặt lịch giữ chỗ</h1>
            <form action="" method="post">
                <label for="dichvu">Chọn dịch vụ</label>
                <!-- Thay input type="text" thành select -->
                <select name="iddichvu">
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
                    <select name="idstylist">
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
                        <!-- Danh sách ca sẽ được hiển thị ở đây -->
                        <?php
                    foreach($listca as $ca){
                        extract($ca);
                        echo '
                        <div class="ca" onclick="chonCa(this)">'.$name.'</div>';
                    }
                        ?>
                    </div>
                </div>
                <!-- Thêm nút submit cho form -->
                <input type="submit" value="Đặt lịch">
                <p>Cắt xong trả tiền, hủy lịch không sao</p>
            </form>
        </main>
        