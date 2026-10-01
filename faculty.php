<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .faculty-box {
        background: #ffffff;
        border-radius: 20px;
        padding: 32px 40px 40px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    }

    .faculty-section {
        margin-bottom: 36px;
    }

    .faculty-section:last-child {
        margin-bottom: 0;
    }

    .faculty-title {
        margin: 0 0 22px 0;
        padding-left: 10px;
        font-size: 26px;
        font-weight: 700;
        color: #111111;
        border-left: 4px solid #f1651e;
    }

    .faculty-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        column-gap: 24px;
        row-gap: 28px;
    }

    .faculty-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        text-decoration: none;
        color: inherit;
    }

    .faculty-thumb {
        width: 100%;
        aspect-ratio: 4 / 3;
        border-radius: 10px;
        overflow: hidden;
        background: #d9d9d9;
    }

    .faculty-thumb img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .faculty-thumb-empty {
        background: #d9d9d9;
    }

    .faculty-item p {
        margin: 12px 0 0 0;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.5;
        color: #111111;
    }
</style>

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