<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- Top Bar -->
    <div class="top-navbar">
        <div class="container">

            <div class="top-bar-contact">

                <div class="phone-section">
                    <span class="phone-number">
                        +66 2 555-2000
                    </span>
                </div>

                <div class="top-divider"></div>

                <div class="contact-section">
                    <span class="contact-text">
                        ติดต่อเรา
                    </span>
                </div>

            </div>

        </div>
    </div>


    <!-- Main Navbar -->
    <nav class="navbar">

        <div class="container">

            <div class="logo">

                <div class="logo-circle">
                    <img src="img/logo_kmutnb.png"
                        class="logo-image"
                        alt="KMUTNB Logo">
                </div>

                <div class="logo-text">
                    <div class="logo-title">
                        KMUTNB
                    </div>

                    <div class="logo-subtitle">
                        มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
                    </div>
                </div>

            </div>


            <div class="nav-menu">
                <a href="index.php" class="nav-link nav-home">
                    หน้าแรก
                </a>

                <a href="login.php">
                    <button class="login-button">
                        เข้าสู่ระบบ
                    </button>
                </a>
                <a href="register.php">
                    <button class="register-button">
                        ลงทะเบียน
                    </button>
                </a>
            </div>
        </div>

    </nav>
    <section class="system-login-page">

        <div class="system-login-box">

            <h2>เข้าสู่ระบบ</h2>

            <label>เลขบัตรประจำตัวประชาชน</label>
            <input type="text" placeholder="กรอกเลขบัตรประจำตัวประชาชน">

            <label>รหัสผ่าน</label>

            <div class="system-password-box">
                <input type="password" placeholder="กรอกรหัสผ่าน">
            </div>

            <a href="apply.php">
                <button type="button" class="system-login-submit">
                    เข้าสู่ระบบ
                </button>
            </a>

            <a href="#" class="system-forgot">
                ลืมรหัสผ่านหรือไม่?
            </a>

            <p class="system-register">
                สำหรับผู้ใช้ที่ยังไม่เคย <a href="register.php">สมัครที่นี่</a>
            </p>

        </div>

    </section>

    <?php include("footer.php") ?>
</body>

</html>