  // Set min date as today
  var today = new Date().toISOString().split('T')[0];
  document.getElementById("ngay").setAttribute('min', today);

  function hienThiDanhSachCa() {
      // Hien thi danhSachCaVaStylistWrapper
      document.getElementById('danhSachCaVaStylistWrapper').style.display = 'block'
  }



  function chonCa(caLabel) {
    // Loại bỏ lớp 'chon' từ tất cả các "ca"
    var cacCa = document.querySelectorAll('.ca-label');
    cacCa.forEach(function (ca) {
        ca.classList.remove('chon');
    });

    // Thêm lớp 'chon' cho "ca" được chọn
    caLabel.classList.add('chon');
}


// Hiển thị menu con bên admin

