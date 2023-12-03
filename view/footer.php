 <!-- <footer>-->
        <footer>
            <div class="boxfooter">
                <div class="thongtin">
                    <a href="">Về chúng tôi</a>
                    <a href="">Dịch vụ</a>
                    <a href="">Chính sách bảo mật</a>
                </div>
                <div class="giolamviec">
                    <p>Giờ phục vụ:
                        8h30 - 20h30 (Thứ 2-Chủ nhật)</p>
                    <p>Hotline (1000đ/phút):1900.27.27.03</p>
                    <p>Liên hệ học nghề tóc:0967.86.3030</p>
                    <a href="" class="thongtin">Liên hệ quảng cáo</a>
                </div>

            </div>
            <div class="copyright">
                <p>Copyright © 2023 HuyHTML. All rights reserved.</p>
            </div>
        </footer>
</div>
    <script src="../js/app.js"></script>
    <script>
        var album=[];
for(var i=1;i<6;i++){
    album[i]=new Image();
    album[i].src="./image/img"+i+".png";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=4;
    }
    document.getElementById("banner").src=album[index].src;
   
}
    </script>
    <script src="js/app.js"></script>
    <script>
    function openLoginForm() {
        document.getElementById("overlay").style.display = "flex";
    }

    function closeLoginForm() {
        document.getElementById("overlay").style.display = "none";
    }
</script>
</body>
     

</html>