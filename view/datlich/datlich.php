<style>
  
</style>
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
                    <br><br>
                    <select name="id_nhanvien">
                    <option value="" disabled selected>Chọn nhân viên</option>
                    <?php
                    foreach($listnhanvien as $nv){
                        extract($nv);
                        echo '
                        <option  id="danhSachNhanVien" value="'.$id.'">'.$name.'</option>  <br>';
                    }
                        ?>
                    </select>
                   
                    <label for="">Chọn ca làm việc</label>
                    <br><br>
                    <div id="danhSachCa" class="hang-ngang">
                    <?php
                    foreach ($listca as $ca) {
                        extract($ca);
                            echo '<label class="ca-label" onclick="chonCa(this)">
                                    <input type="checkbox"  name="id_ca"  id="dsCa" value="' . $id . '">' . $name . '
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
      
                   
               