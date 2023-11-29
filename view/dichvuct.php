<main>
    <?php
 extract($onedv);
    ?>
    <h3>Chi tiết dịch vụ > <?=$name?></h3>
    <div class="service-details">
    <?php
   
    $hinh = $img_path.$anh;
    echo '   <div class="service-image">
    <img src="'.$hinh.'" alt="Kiểu tóc">
</div>
<div class="service-description">
    <h2> [ '.$name.' ]</h2>
    <p class="gia">
       Giá từ: '.$gia.' VNĐ
    </p>
    <p>
       '.$mota.'
    </p>
</div>';
    ?>
     
    </div>
    <div class="btn">
        <input type="submit" name="" value="Đặt lịch ngay" id="">
    </div>
  
</main>    