<main>
    <div class="slideshow">
        <div class="banner" >
            <img id="banner" src="./image/img2.png" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
    </div>

    <div class="form-datlich" >
        <form action="index.php?act=datlich" method="post">
        <h2 class="h1">Đặt lịch giữ chỗ chỉ 30 giây</h2>
        <p class="h1">Cắt xong trả tiền, hủy lịch không sao</p>
        <input type="submit" name="" value="Đặt lịch ngay" id="">
        </form>
    </div>
        <div class="content">
            <?php
            foreach($loainew as $loai){
                extract($loai);
                echo ' <h1 class="h11">'.$name.'</h1>';
                $dichvu_result = loadall_dv_loai($id);
                echo '<div class="box-content">';
                foreach($dichvu_result as $dv){
                    extract($dv);
                    $linkdv="index.php?act=dichvuct&iddv=".$id;
                    $hinh = $img_path.$anh;
                    echo '
                        <div class="box-pr">
                            <div class="img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <h3>'.$name.'</h3>
                            <div class="chitiet_sp">
                                <p class="price">Giá từ '.$gia.' VNĐ</p>
                                <a href="'.$linkdv.'">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    ';
                }
            echo '</div>';
            }
            ?>

        
        </div>
    </main>