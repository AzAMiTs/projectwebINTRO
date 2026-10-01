<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMUTNB</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .form-box {
        background: #ffffff;
        border-radius: 20px;
        padding: 36px 40px 44px;
        max-width: 760px;
        margin: 0 auto;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.10);
    }

    .form-title {
        margin: 0 0 24px 0;
        font-size: 24px;
        font-weight: 700;
        color: #111111;
    }

    .form-section-title {
        margin: 30px 0 16px 0;
        font-size: 17px;
        font-weight: 700;
        color: #f1651e;
    }

    .form-section-title:first-of-type {
        margin-top: 0;
    }

    .form-subsection-title {
        margin: 22px 0 12px 0;
        font-size: 15px;
        font-weight: 700;
        color: #f1651e;
    }

    /* ---------- Layout ---------- */

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .form-row-3 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 18px;
    }

    /* ---------- Fields ---------- */

    .form-group {
        margin-bottom: 18px;
    }

    .form-label {
        display: block;
        margin-bottom: 7px;
        font-size: 13px;
        font-weight: 600;
        color: #222222;
    }

    .form-box input[type="text"],
    .form-box input[type="email"],
    .form-box input[type="tel"],
    .form-box input[type="number"] {
        width: 100%;
        padding: 12px 14px;
        font-size: 14px;
        font-family: inherit;
        color: #222222;
        background: #ffffff;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        outline: none;
        transition: border-color 0.15s ease;
    }

    .form-box input::placeholder {
        color: #b0b0b0;
    }

    .form-box input:focus {
        border-color: #f1651e;
    }

    .select-wrap {
        position: relative;
    }

    .form-box select {
        width: 100%;
        padding: 12px 38px 12px 14px;
        font-size: 14px;
        font-family: inherit;
        color: #222222;
        background: #ffffff;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
    }

    .form-box select:focus {
        border-color: #f1651e;
    }

    .select-arrow {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
        pointer-events: none;
    }

    /* ---------- Radio / Checkbox ---------- */

    .radio-group {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
    }

    .radio-option,
    .checkbox-option {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #333333;
        cursor: pointer;
    }

    .radio-option input[type="radio"],
    .checkbox-option input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: #f1651e;
        cursor: pointer;
    }

    /* ---------- Actions ---------- */

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #f0f0f0;
    }

    .btn-outline,
    .btn-primary {
        padding: 12px 34px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        font-family: inherit;
    }

    .btn-outline {
        background: #ffffff;
        border: 1px solid #d1d5db;
        color: #6b7280;
    }

    .btn-outline:hover {
        background: #f9fafb;
    }

    .btn-primary {
        background: #f1651e;
        border: none;
        color: #ffffff;
    }

    .btn-primary:hover {
        background: #d6540f;
    }


    .modal-overlay {
        position: fixed;
        inset: 0;
        z-index: 1000;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(0, 0, 0, 0.45);

        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s ease;
    }

    .modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .modal-box {
        width: 90%;
        max-width: 420px;
        padding: 48px 32px;

        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);

        text-align: center;

        transform: scale(0.92);
        transition: transform 0.2s ease;
    }

    .modal-overlay.active .modal-box {
        transform: scale(1);
    }

    .modal-title {
        margin: 0 0 28px 0;
        font-size: 26px;
        font-weight: 800;
        color: #111111;
    }

    .modal-btn {
        display: inline-block;
        padding: 12px 36px;
        background: #f1651e;
        border-radius: 10px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
    }

    .modal-btn:hover {
        background: #d6540f;
    }
</style>

<body>
    <?php include("navbar-login.php") ?>

    <?php
    include("faculties-data.php"); // โหลด $faculties สำหรับ dropdown คณะ

    // ===== ข้อมูลที่ใช้ซ้ำหลายจุดในฟอร์ม (loop แทนการพิมพ์ <option> มือ) =====
    $thai_provinces = [
        "กรุงเทพมหานคร",
        "กระบี่",
        "กาญจนบุรี",
        "กาฬสินธุ์",
        "กำแพงเพชร",
        "ขอนแก่น",
        "จันทบุรี",
        "ฉะเชิงเทรา",
        "ชลบุรี",
        "ชัยนาท",
        "ชัยภูมิ",
        "ชุมพร",
        "เชียงราย",
        "เชียงใหม่",
        "ตรัง",
        "ตราด",
        "ตาก",
        "นครนายก",
        "นครปฐม",
        "นครพนม",
        "นครราชสีมา",
        "นครศรีธรรมราช",
        "นครสวรรค์",
        "นนทบุรี",
        "นราธิวาส",
        "น่าน",
        "บึงกาฬ",
        "บุรีรัมย์",
        "ปทุมธานี",
        "ประจวบคีรีขันธ์",
        "ปราจีนบุรี",
        "ปัตตานี",
        "พระนครศรีอยุธยา",
        "พะเยา",
        "พังงา",
        "พัทลุง",
        "พิจิตร",
        "พิษณุโลก",
        "เพชรบุรี",
        "เพชรบูรณ์",
        "แพร่",
        "ภูเก็ต",
        "มหาสารคาม",
        "มุกดาหาร",
        "แม่ฮ่องสอน",
        "ยโสธร",
        "ยะลา",
        "ร้อยเอ็ด",
        "ระนอง",
        "ระยอง",
        "ราชบุรี",
        "ลพบุรี",
        "ลำปาง",
        "ลำพูน",
        "เลย",
        "ศรีสะเกษ",
        "สกลนคร",
        "สงขลา",
        "สตูล",
        "สมุทรปราการ",
        "สมุทรสงคราม",
        "สมุทรสาคร",
        "สระแก้ว",
        "สระบุรี",
        "สิงห์บุรี",
        "สุโขทัย",
        "สุพรรณบุรี",
        "สุราษฎร์ธานี",
        "สุรินทร์",
        "หนองคาย",
        "หนองบัวลำภู",
        "อ่างทอง",
        "อำนาจเจริญ",
        "อุดรธานี",
        "อุตรดิตถ์",
        "อุทัยธานี",
        "อุบลราชธานี",
    ];

    $thai_months = [
        "มกราคม",
        "กุมภาพันธ์",
        "มีนาคม",
        "เมษายน",
        "พฤษภาคม",
        "มิถุนายน",
        "กรกฎาคม",
        "สิงหาคม",
        "กันยายน",
        "ตุลาคม",
        "พฤศจิกายน",
        "ธันวาคม",
    ];

    $thai_days   = range(1, 31);
    $prefixes    = ["นาย", "นาง", "นางสาว"];
    $religions   = ["พุทธ", "อิสลาม", "คริสต์", "ซิกข์", "ฮินดู", "อื่นๆ"];
    $nationalities = ["ไทย", "อื่นๆ"];
    ?>

    <section class="container content-section">
        <div class="form-box">
            <h1 class="form-title">เลือกสาขาและป้อนข้อมูลการสมัคร</h1>

            <form action="submit-application.php" method="post" enctype="multipart/form-data">

                <!-- ========================================= -->
                <!-- 2.1 ข้อมูลวุฒิการศึกษาที่ใช้สมัคร -->
                <!-- ========================================= -->
                <h2 class="form-section-title">2.1 ข้อมูลวุฒิการศึกษาที่ใช้สมัคร</h2>

                <div class="form-group">
                    <label class="form-label" for="edu_level">วุฒิการศึกษาที่ใช้สมัคร</label>
                    <div class="select-wrap">
                        <select id="edu_level" name="edu_level">
                            <option value="">-</option>
                            <option value="m3">มัธยมศึกษาตอนต้น (ม.3)</option>
                            <option value="m6">มัธยมศึกษาตอนปลาย (ม.6)</option>
                            <option value="ปวช">ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
                            <option value="ปวส">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="subject_type">ประเภทวิชา</label>
                    <div class="select-wrap">
                        <select id="subject_type" name="subject_type">
                            <option value="">-</option>
                            <option value="industrial">อุตสาหกรรม</option>
                            <option value="commerce">พาณิชยกรรม</option>
                            <option value="general">สามัญ</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="subject_group">กลุ่มวิชา</label>
                    <div class="select-wrap">
                        <select id="subject_group" name="subject_group">
                            <option value="">-</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="major">สาขาวิชา</label>
                    <div class="select-wrap">
                        <select id="major" name="major">
                            <option value="">-</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="work_field">สาขางาน</label>
                    <div class="select-wrap">
                        <select id="work_field" name="work_field">
                            <option value="">-</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- 2.2 ข้อมูลสถานศึกษาและสถานะการศึกษาปัจจุบัน -->
                <!-- ========================================= -->
                <h2 class="form-section-title">2.2 ข้อมูลสถานศึกษาและสถานะการศึกษาปัจจุบัน</h2>

                <div class="form-group">
                    <label class="form-label" for="school_province">จังหวัดที่ตั้งสถานศึกษา</label>
                    <div class="select-wrap">
                        <select id="school_province" name="school_province">
                            <option value="">-</option>
                            <?php foreach ($thai_provinces as $province) { ?>
                                <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                            <?php } ?>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="school_name">ชื่อสถานศึกษา</label>
                    <div class="select-wrap">
                        <select id="school_name" name="school_name">
                            <option value="">-</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">สถานะการศึกษา</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="study_status" value="graduated">
                            <span>สำเร็จการศึกษา</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="study_status" value="studying" checked>
                            <span>กำลังศึกษาอยู่</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="gpa">คะแนนเฉลี่ยสะสมถึงภาคเรียนสุดท้าย</label>
                    <input type="number" id="gpa" name="gpa" placeholder="2.75" step="0.01" min="0" max="4">
                </div>

                <div class="form-group">
                    <label class="form-label">แนบใบ ปพ.</label>
                    <div class="" id="transcript-dropzone">
                        <input type="file" id="transcript_file" name="transcript_file" accept=".pdf,.jpg,.jpeg,.png">

                    </div>
                </div>

                <!-- ========================================= -->
                <!-- 2.3 ข้อมูลโครงการ คณะและสาขาวิชาที่สมัคร -->
                <!-- ========================================= -->
                <h2 class="form-section-title">2.3 ข้อมูลโครงการ คณะและสาขาวิชาที่สมัคร</h2>

                <div class="form-group">
                    <label class="form-label" for="faculty">คณะ</label>
                    <div class="select-wrap">
                        <select id="faculty" name="faculty">
                            <option value="">-</option>
                            <?php foreach ($faculties as $f) { ?>
                                <option value="<?php echo $f['name']; ?>"><?php echo $f['name']; ?></option>
                            <?php } ?>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="project">โครงการ</label>
                    <div class="select-wrap">
                        <select id="project" name="project">
                            <option value="">-</option>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- 2.4 ข้อมูลส่วนบุคคลและสถานที่ติดต่อ -->
                <!-- ========================================= -->
                <h2 class="form-section-title">2.4 ข้อมูลส่วนบุคคลและสถานที่ติดต่อ</h2>

                <div class="form-group">
                    <label class="form-label" for="citizen_id">เลขบัตรประชาชน</label>
                    <input type="text" id="citizen_id" name="citizen_id" placeholder="0-0000-00000-00-0">
                </div>

                <div class="form-group">
                    <label class="form-label" for="prefix">คำนำหน้าชื่อ</label>
                    <div class="select-wrap">
                        <select id="prefix" name="prefix">
                            <option value="">-</option>
                            <?php foreach ($prefixes as $p) { ?>
                                <option value="<?php echo $p; ?>"><?php echo $p; ?></option>
                            <?php } ?>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="first_name_th">ชื่อ (ภาษาไทย)</label>
                        <input type="text" id="first_name_th" name="first_name_th" placeholder="ชื่อ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="last_name_th">นามสกุล (ภาษาไทย)</label>
                        <input type="text" id="last_name_th" name="last_name_th" placeholder="นามสกุล">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="first_name_en">ชื่อ (ภาษาอังกฤษ)</label>
                        <input type="text" id="first_name_en" name="first_name_en" placeholder="FIRST NAME">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="last_name_en">นามสกุล (ภาษาอังกฤษ)</label>
                        <input type="text" id="last_name_en" name="last_name_en" placeholder="LAST NAME">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">วันเกิด</label>
                    <div class="form-row-3">
                        <div class="select-wrap">
                            <select name="birth_day">
                                <option value="">-</option>
                                <?php foreach ($thai_days as $d) { ?>
                                    <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                        <div class="select-wrap">
                            <select name="birth_month">
                                <option value="">-</option>
                                <?php foreach ($thai_months as $m) { ?>
                                    <option value="<?php echo $m; ?>"><?php echo $m; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                        <input type="text" name="birth_year" placeholder="25XX" maxlength="4">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">เพศ</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="gender" value="male">
                            <span>ชาย</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="gender" value="female">
                            <span>หญิง</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="gender" value="other">
                            <span>อื่นๆ</span>
                        </label>
                    </div>
                </div>

                <div class="form-row-3">
                    <div class="form-group">
                        <label class="form-label" for="religion">ศาสนา</label>
                        <div class="select-wrap">
                            <select id="religion" name="religion">
                                <option value="">-</option>
                                <?php foreach ($religions as $r) { ?>
                                    <option value="<?php echo $r; ?>"><?php echo $r; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ethnicity">เชื้อชาติ</label>
                        <div class="select-wrap">
                            <select id="ethnicity" name="ethnicity">
                                <option value="">-</option>
                                <?php foreach ($nationalities as $n) { ?>
                                    <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nationality">สัญชาติ</label>
                        <div class="select-wrap">
                            <select id="nationality" name="nationality">
                                <option value="">-</option>
                                <?php foreach ($nationalities as $n) { ?>
                                    <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_house_no">บ้านเลขที่</label>
                        <input type="text" id="applicant_house_no" name="applicant_house_no" placeholder="บ้านเลขที่">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_moo">หมู่ที่</label>
                        <input type="text" id="applicant_moo" name="applicant_moo" placeholder="หมู่ที่">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_village">หมู่บ้าน/ชื่ออาคาร</label>
                        <input type="text" id="applicant_village" name="applicant_village" placeholder="ชื่อหมู่บ้าน/ชื่ออาคาร">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_soi">ซอย</label>
                        <input type="text" id="applicant_soi" name="applicant_soi" placeholder="ชื่อซอย">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_road">ถนน</label>
                        <input type="text" id="applicant_road" name="applicant_road" placeholder="ชื่อถนน">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_province">จังหวัด</label>
                        <div class="select-wrap">
                            <select id="applicant_province" name="applicant_province">
                                <option value="">-</option>
                                <?php foreach ($thai_provinces as $province) { ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_district">อำเภอ/เขต</label>
                        <div class="select-wrap">
                            <select id="applicant_district" name="applicant_district">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_subdistrict">ตำบล/แขวง</label>
                        <div class="select-wrap">
                            <select id="applicant_subdistrict" name="applicant_subdistrict">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_zipcode">รหัสไปรษณีย์</label>
                        <input type="text" id="applicant_zipcode" name="applicant_zipcode" placeholder="รหัสไปรษณีย์">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_email">อีเมล</label>
                        <input type="email" id="applicant_email" name="applicant_email" placeholder="example@email.com">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="applicant_mobile">เบอร์มือถือ</label>
                        <input type="tel" id="applicant_mobile" name="applicant_mobile" placeholder="เบอร์มือถือ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="applicant_phone_alt">เบอร์โทรศัพท์สำรอง</label>
                        <input type="tel" id="applicant_phone_alt" name="applicant_phone_alt" placeholder="เบอร์โทรศัพท์มือถือ">
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- 2.5 ข้อมูลบิดา-มารดา -->
                <!-- ========================================= -->
                <h2 class="form-section-title">2.5 ข้อมูลบิดา-มารดา</h2>

                <h3 class="form-subsection-title">ข้อมูลบิดา</h3>

                <div class="form-group">
                    <label class="form-label" for="father_prefix">คำนำหน้าชื่อ</label>
                    <div class="select-wrap">
                        <select id="father_prefix" name="father_prefix">
                            <option value="">-</option>
                            <?php foreach ($prefixes as $p) { ?>
                                <option value="<?php echo $p; ?>"><?php echo $p; ?></option>
                            <?php } ?>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_first_name">ชื่อ</label>
                        <input type="text" id="father_first_name" name="father_first_name" placeholder="ชื่อ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_last_name">นามสกุล</label>
                        <input type="text" id="father_last_name" name="father_last_name" placeholder="นามสกุล">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">สถานะ</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="father_status" value="alive" checked>
                            <span>ยังมีชีวิตอยู่</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="father_status" value="deceased">
                            <span>เสียชีวิตแล้ว (ไม่ต้องระบุที่อยู่)</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">ที่อยู่ติดต่อได้สะดวก</label>
                    <label class="checkbox-option">
                        <input type="checkbox" name="father_same_as_applicant" value="1">
                        <span>ที่อยู่เดียวกับผู้สมัคร</span>
                    </label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_house_no">บ้านเลขที่</label>
                        <input type="text" id="father_house_no" name="father_house_no" placeholder="บ้านเลขที่">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_moo">หมู่ที่</label>
                        <input type="text" id="father_moo" name="father_moo" placeholder="หมู่ที่">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_village">หมู่บ้าน/ชื่ออาคาร</label>
                        <input type="text" id="father_village" name="father_village" placeholder="ชื่อหมู่บ้าน/ชื่ออาคาร">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_soi">ซอย</label>
                        <input type="text" id="father_soi" name="father_soi" placeholder="ชื่อซอย">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_road">ถนน</label>
                        <input type="text" id="father_road" name="father_road" placeholder="ชื่อถนน">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_province">จังหวัด</label>
                        <div class="select-wrap">
                            <select id="father_province" name="father_province">
                                <option value="">-</option>
                                <?php foreach ($thai_provinces as $province) { ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_district">อำเภอ/เขต</label>
                        <div class="select-wrap">
                            <select id="father_district" name="father_district">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_subdistrict">ตำบล/แขวง</label>
                        <div class="select-wrap">
                            <select id="father_subdistrict" name="father_subdistrict">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="father_zipcode">รหัสไปรษณีย์</label>
                    <input type="text" id="father_zipcode" name="father_zipcode" placeholder="รหัสไปรษณีย์">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="father_mobile">เบอร์มือถือ</label>
                        <input type="tel" id="father_mobile" name="father_mobile" placeholder="เบอร์มือถือ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="father_phone_alt">เบอร์โทรศัพท์สำรอง</label>
                        <input type="tel" id="father_phone_alt" name="father_phone_alt" placeholder="เบอร์โทรศัพท์มือถือ">
                    </div>
                </div>

                <h3 class="form-subsection-title">ข้อมูลมารดา</h3>

                <div class="form-group">
                    <label class="form-label" for="mother_prefix">คำนำหน้าชื่อ</label>
                    <div class="select-wrap">
                        <select id="mother_prefix" name="mother_prefix">
                            <option value="">-</option>
                            <?php foreach ($prefixes as $p) { ?>
                                <option value="<?php echo $p; ?>"><?php echo $p; ?></option>
                            <?php } ?>
                        </select>
                        <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7 10l5 5l5-5z" />
                        </svg>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_first_name">ชื่อ</label>
                        <input type="text" id="mother_first_name" name="mother_first_name" placeholder="ชื่อ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_last_name">นามสกุล</label>
                        <input type="text" id="mother_last_name" name="mother_last_name" placeholder="นามสกุล">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">สถานะ</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="mother_status" value="alive" checked>
                            <span>ยังมีชีวิตอยู่</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="mother_status" value="deceased">
                            <span>เสียชีวิตแล้ว (ไม่ต้องระบุที่อยู่)</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">ที่อยู่ติดต่อได้สะดวก</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="mother_address_option" value="applicant" checked>
                            <span>ที่อยู่เดียวกับผู้สมัคร</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="mother_address_option" value="father">
                            <span>ที่อยู่เดียวกับบิดา (กรณีบิดายังมีชีวิต)</span>
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_house_no">บ้านเลขที่</label>
                        <input type="text" id="mother_house_no" name="mother_house_no" placeholder="บ้านเลขที่">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_moo">หมู่ที่</label>
                        <input type="text" id="mother_moo" name="mother_moo" placeholder="หมู่ที่">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_village">หมู่บ้าน/ชื่ออาคาร</label>
                        <input type="text" id="mother_village" name="mother_village" placeholder="ชื่อหมู่บ้าน/ชื่ออาคาร">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_soi">ซอย</label>
                        <input type="text" id="mother_soi" name="mother_soi" placeholder="ชื่อซอย">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_road">ถนน</label>
                        <input type="text" id="mother_road" name="mother_road" placeholder="ชื่อถนน">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_province">จังหวัด</label>
                        <div class="select-wrap">
                            <select id="mother_province" name="mother_province">
                                <option value="">-</option>
                                <?php foreach ($thai_provinces as $province) { ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                <?php } ?>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_district">อำเภอ/เขต</label>
                        <div class="select-wrap">
                            <select id="mother_district" name="mother_district">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_subdistrict">ตำบล/แขวง</label>
                        <div class="select-wrap">
                            <select id="mother_subdistrict" name="mother_subdistrict">
                                <option value="">-</option>
                            </select>
                            <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="mother_zipcode">รหัสไปรษณีย์</label>
                    <input type="text" id="mother_zipcode" name="mother_zipcode" placeholder="รหัสไปรษณีย์">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="mother_mobile">เบอร์มือถือ</label>
                        <input type="tel" id="mother_mobile" name="mother_mobile" placeholder="เบอร์มือถือ">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="mother_phone_alt">เบอร์โทรศัพท์สำรอง</label>
                        <input type="tel" id="mother_phone_alt" name="mother_phone_alt" placeholder="เบอร์โทรศัพท์มือถือ">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-outline" onclick="history.back()">ย้อนกลับ</button>
                    <button type="submit" class="btn-primary" onclick="">สมัครเรียน</button>
                </div>

            </form>
        </div>
    </section>


    <?php include("footer.php") ?>

    <div class="modal-overlay" id="success-modal">
        <div class="modal-box">
            <h2 class="modal-title">สมัครสำเร็จ !!</h2>
            <a href="index.php" class="modal-btn">กลับไปหน้าแรก</a>
        </div>
    </div>

    <script>
        (function() {
            var form = document.querySelector('.form-box form');
            var modal = document.getElementById('success-modal');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                openModal();
            });

            function openModal() {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

        })();
    </script>
</body>

</html>