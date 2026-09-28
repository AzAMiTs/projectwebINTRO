<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include("navbar.php") ?>

    <?php
    // รายชื่อคณะ (แก้ชื่อ / ลิงก์ได้ที่นี่ จำนวนที่แสดงมุมขวาบนจะนับให้อัตโนมัติ)
    $faculties = [
        ["name" => "คณะเทคโนโลยีและการจัดการอุตสาหกรรม", "link" => "tuition-detail.php"],
        ["name" => "คณะบริหารธุรกิจ",                   "link" => "#"],
        ["name" => "คณะวิศวกรรมศาสตร์", "link" => "#"],
        ["name" => "คณะวิทยาศาสตร์ประยุกต์", "link" => "#"],
        ["name" => "คณะครุศาสตร์อุตสาหกรรม", "link" => "#"],
        ["name" => "คณะสถาปัตยกรรมและการออกแบบ", "link" => "#"],
        ["name" => "คณะเทคโนโลยีสารสนเทศ", "link" => "#"],
        ["name" => "คณะวิทยาศาสตร์ พลังงาน และสิ่งแวดล้อม", "link" => "#"],
    ];
    ?>

    <section class="container content-section">
        <div class="tuition-boxs">
            <div class="tuition-headers">
                <h2 class="tuition-titles">ค่าเทอม</h2>
                <div class="tuition-count">
                    <span class="tuition-count-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9.5 12 4l9 5.5" />
                            <path d="M4 20h16" />
                            <path d="M5 9.5h14" />
                            <path d="M6.5 11.5v6M10 11.5v6M14 11.5v6M17.5 11.5v6" />
                        </svg>
                    </span>
                    <b><?php echo count($faculties); ?></b>
                </div>
            </div>

            <div class="tuition-grid">
                <?php foreach ($faculties as $faculty) { ?>
                    <a href="<?php echo $faculty['link']; ?>" class="tuition-item">
                        <span><?php echo $faculty['name']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5 3v18l15-9z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>
</body>

</html>