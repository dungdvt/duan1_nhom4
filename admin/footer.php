</div>
</body>
<script>
     function toggleSubMenu(menuId) {
        var menu = document.getElementById(menuId);

        // Toggle class "active" khi nhấp vào mục "Thống kê"
        menu.classList.toggle("active");

        // Nếu mục "Thống kê" có class "active", thì thêm class "active" vào menu con
        var subMenu = document.getElementById('subThongKe');
        if (menu.classList.contains("active")) {
            subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        } else {
            subMenu.style.maxHeight = null;
        }
    }
</script>

</html>