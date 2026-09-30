<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <?php include("navbar.php") ?>

    <section class="course-page">

        <!-- ปุ่มกลับ -->
        <a href="tuition.php" class="back-button">
            ← กลับไปยังคณะทั้งหมด
        </a>

        <!-- หัวข้อ -->
        <div class="course-header">
            <h1>คณะเทคโนโลยีและการจัดการอุตสาหกกรม</h1>
            <div class="course-count">
                <span>6</span> หลักสูตร
            </div>
        </div>

        <!-- ตารางค่าเทอม -->
        <div class="tuition-box">

            <h2>รายละเอียดหลักสูตรและค่าเทอม</h2>

            <div class="tuition-table">

                <!-- Header -->
                <div class="tuition-row tuition-header">
                    <div>หลักสูตร</div>
                    <div>ค่าเทอม</div>
                </div>

                <!-- 1 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ
                        </span>
                        <span class="course-en">
                            Bachelor of Science Program in Information Technology
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>19,000</strong> บาท
                    </div>
                </div>

                <!-- 2 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรอุตสาหกรรมศาสตรบัณฑิต สาขาวิชาการจัดการอุตสาหกรรม
                        </span>
                        <span class="course-en">
                            Bachelor of Industrial Technology Program in Industrial Management
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>19,000</strong> บาท
                    </div>
                </div>

                <!-- 3 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมอุตสาหการและการจัดการ
                        </span>
                        <span class="course-en">
                            Bachelor of Engineering Program in Industrial Engineering and Management
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>25,000</strong> บาท
                    </div>
                </div>

                <!-- 4 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมสารสนเทศและเครือข่าย
                        </span>
                        <span class="course-en">
                            Bachelor of Engineering Program in Information and Network Engineering
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>25,000</strong> บาท
                    </div>
                </div>

                <!-- 5 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรอุตสาหกรรมศาสตรบัณฑิต สาขาวิชาเทคโนโลยีเครื่องกลและกระบวนการผลิต
                        </span>
                        <span class="course-en">
                            Bachelor of Industrial Technology Program in Mechanical and Manufacturing Technology
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>19,000</strong> บาท
                    </div>
                </div>

                <!-- 6 -->
                <div class="tuition-row">
                    <div>
                        <span class="course-th">
                            หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมเกษตรและอาหาร
                        </span>
                        <span class="course-en">
                            Bachelor of Engineering Program in Agricultural and Food Engineering
                        </span>
                    </div>
                    <div>
                        <span class="money-icon">⊗</span>
                        <strong>19,000</strong> บาท
                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php include("footer.php") ?>
</body>

</html>