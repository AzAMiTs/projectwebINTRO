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

    <?php
    $faculties =
        [
            [
                "name" => "คณะเทคโนโลยีและการจัดการอุตสาหกรรม",
                "link" => "tuition-detail.php",
                "programs" => [
                    ["name" => "วิศวกรรมสารสนเทศและเครือข่าย",             "image" => "img/dept/inet.jpg", "link" => "#"],
                    ["name" => "วิศวกรรมอุตสาหการและการจัดการโลจิสติกส์", "image" => "img/dept/logis.jpg", "link" => "#"],
                    ["name" => "วิศวกรรมเกษตรและอาหาร",                   "image" => "img/dept/food.png", "link" => "#"],
                    ["name" => "เทคโนโลยีสารสนเทศ",                       "image" => "img/dept/it.jpg", "link" => "#"],
                ],
            ],
            [
                "name" => "คณะบริหารธุรกิจ",
                "link" => "#",
                "programs" => [
                    ["name" => "การตลาดดิจิทัล",                       "image" => "img/dept/marketdigi.jpg", "link" => "#"],
                    ["name" => "การบัญชี",                             "image" => "img/dept/acc.jpg", "link" => "#"],
                    ["name" => "คอมพิวเตอร์ธุรกิจ",                    "image" => "img/dept/comtech.jpg", "link" => "#"],
                    ["name" => "บริหารธุรกิจอุตสาหกรรมและโลจิสติกส์", "image" => "img/dept/comlogis.jpg", "link" => "#"],
                ],
            ],
        ]
    ?>

    <section class="container content-section">
        <div class="faculty-box">
            <?php foreach ($faculties as $faculty) { ?>
                <div class="faculty-section">
                    <h2 class="faculty-title"><?php echo $faculty['name']; ?></h2>

                    <?php if (!empty($faculty['programs'])) { ?>
                        <div class="faculty-grid">
                            <?php foreach ($faculty['programs'] as $program) { ?>
                                <a href="<?php echo $program['link']; ?>" class="faculty-item">
                                    <?php if (!empty($program['image'])) { ?>
                                        <div class="faculty-thumb">
                                            <img src="<?php echo $program['image']; ?>" alt="<?php echo $program['name']; ?>">
                                        </div>
                                    <?php } else { ?>
                                        <div class="faculty-thumb faculty-thumb-empty"></div>
                                    <?php } ?>
                                    <p><?php echo $program['name']; ?></p>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <p class="faculty-empty">เร็ว ๆ นี้ - อยู่ระหว่างจัดเตรียมข้อมูลสาขาวิชา</p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include("footer.php") ?>
</body>

</html>