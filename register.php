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
    <section class="register-page">

        <div class="register-box">

            <div class="register-title">
                ลงทะเบียนเพื่อสมัครเรียน (ข้อมูลที่กรอกต้องเป็นข้อมูลจริง)
            </div>

            <div class="register-form">

                <div class="register-row">
                    <label>เลขประจำตัวประชาชน*</label>
                    <input type="text" placeholder="กรอกเลขประจำตัวประชาชน">
                </div>

                <div class="register-row">
                    <label>รหัสผ่าน*</label>
                    <div class="register-input-password">
                        <input type="password" placeholder="กรอกรหัสผ่าน">
                    </div>
                    <small>เป็นรหัสเลขสำหรับเข้าสู่ระบบการสมัคร</small>
                </div>

                <div class="register-row">
                    <label>ยืนยันรหัสผ่าน*</label>
                    <div class="register-input-password">
                        <input type="password" placeholder="เหมือนกับรหัสผ่าน">
                    </div>
                </div>

                <div class="register-row">
                    <label>ชื่อ*</label>
                    <input type="text" placeholder="ชื่อ(ไทย) ไม่ต้องมีคำนำหน้าชื่อ">
                </div>

                <div class="register-row">
                    <label>นามสกุล(ไทย)*</label>
                    <input type="text" placeholder="นามสกุล">
                </div>

                <div class="register-row">
                    <label>อีเมล*</label>
                    <input type="email" placeholder="email@kmutnb.ac.th">
                    <small>ต้องเป็นอีเมลที่สามารถใช้งานได้จริงและต้องตรวจสอบเมลที่ได้รับ</small>
                </div>

                <div class="register-row">
                    <label>ยืนยันอีเมล*</label>
                    <input type="email" placeholder="email@kmutnb.ac.th">
                </div>

                <a href="login.php"><button type="button" class="register-submit">
                    ลงทะเบียน
                </button></a>

            </div>

        </div>

    </section>

    <?php include("footer.php") ?>
</body>

</html>