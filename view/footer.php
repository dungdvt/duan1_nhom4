 <!-- <footer>-->
 <footer>
    <div class="footer-container">
        <div class="footer-left">
            <h3>Thông tin liên hệ</h3><br>
            <p>Địa chỉ: FPT Polytechnic Hà Nội</p>
            <p>Email: 4barber@barbershop.vn</p>
            <p>Điện thoại: +84 123 456 789</p>
        </div>
        <div class="footer-right">
            <h3>Follow us</h3><br>
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
        </div>
    </div>
    <br>
    <div class="footer-bottom">
        <p>&copy; 2023 Lập trình cùng Huy. All rights reserved.</p>
    </div>
</footer>

</div>
    
</body>
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

</html>