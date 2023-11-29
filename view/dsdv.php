<main>
    <h3>Danh sách > <?=$tenloai?></h3>
    <div class="box-content">
    <?php
        $i=0;
            foreach($dsdv as $dv){
                extract($dv);
                $hinh = $img_path.$anh;
                $linkdv="index.php?act=dichvuct&iddv=".$id;
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
           $i += 1;
        ?>
           </div>
        
</main>