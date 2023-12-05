<style>

h2 {
    text-align: center;
    color: #333;
}

.login-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

input {
    margin-bottom: 15px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background: #3498db;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #2374b2;
}

a {
    display: block;
    text-align: center;
    color: #3498db;
    text-decoration: none;
    margin-top: 10px;
}

.register-link {
    text-align: center;
    margin-top: 20px;
}

.register-link p {
    margin: 0;
}

.register-link a {
    color: #3498db;
    text-decoration: none;
}


</style>

                    <div class="login-container">
                    <h2>Đăng Nhập</h2>
                        <form action="index.php?act=dangnhap" method="post">
                            <!-- Các trường đầu vào -->
                            <input type="text" name="username" placeholder="Tên đăng nhập" required>
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                            <!-- Nút đăng nhập -->
                            <button type="submit" name="dangnhap">Đăng Nhập</button>

                            <!-- Liên kết quên mật khẩu -->
                            <a href="#">Quên mật khẩu?</a>
                        </form>

                        <div class="register-link">
                            <p>Chưa có tài khoản? <a href="index.php?act=dangki">Đăng kí ngay</a></p>
                        </div>

                    </div>