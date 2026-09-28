<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include("navbar.php");
    $map_query = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ กองบริการการศึกษา 1518 ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง เขตบางซื่อ กรุงเทพฯ 10800";
    $map_query_encoded = urlencode($map_query); ?>



    <section class="container content-section">
        <div class="contact-box">
            <h2 class="contact-title">กลุ่มงานรับสมัครเข้าศึกษา กองบริการการศึกษา</h2>

            <div class="contact-info">
                <p>สำนักงานอธิการบดี ชั้น 2 อาคาร TGGS</p>
                <p>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ 1518 ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง เขตบางซื่อ กรุงเทพฯ 10800</p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                    </svg>
                    +66 2 555-2000 ต่อ 1626, 1627
                </p>
            </div>

            <a href="https://www.facebook.com/AdmissionKMUTNB" target="_blank" class="contact-facebook">
                <span class="fb-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89c1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12" />
                    </svg>
                </span>
                Admission.KMUTNB-กลุ่มงานรับเข้าศึกษา มจพ.
            </a>

            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps?q=<?php echo $map_query_encoded; ?>&output=embed" allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>
</body>

</html>