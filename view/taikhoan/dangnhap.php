
                    <div class="login-container">
                    <h2>Đăng Nhập</h2>
                        <form action="index.php?act=dangnhap" method="post">
                            <!-- Các trường đầu vào -->
                            <input type="text" name="username" placeholder="Tên đăng nhập" required>
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                            <!-- Nút đăng nhập -->
                            <button type="submit" name="dangnhap">Đăng Nhập</button>

                            <!-- Liên kết quên mật khẩu -->
                            <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                        </form>

                        <div class="register-link">
                            <p>Chưa có tài khoản? <a href="index.php?act=dangki">Đăng kí ngay</a></p>
                        </div>

                    </div>