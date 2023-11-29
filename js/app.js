  // Set min date as today
  var today = new Date().toISOString().split('T')[0];
  document.getElementById("ngay").setAttribute('min', today);

  function hienThiDanhSachCa() {
      // Hien thi danhSachCaVaStylistWrapper
      document.getElementById('danhSachCaVaStylistWrapper').style.display = 'block'
  }



  // Hàm chọn ca làm việc
  function chonCa(selectedCa) {
      // Lấy danh sách tất cả các ô ca làm việc
      var cas = document.querySelectorAll('.ca');

      // Loại bỏ lớp 'chon' khỏi tất cả các ô ca
      cas.forEach(function (ca) {
          ca.classList.remove('chon');
      });

      // Thêm lớp 'chon' cho ô ca được chọn
      selectedCa.classList.add('chon');
  }