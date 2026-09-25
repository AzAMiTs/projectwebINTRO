<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .site-footer {
      background: #FDF3EE;
      border-top: 1px solid #ECE7E2;
      font-family: 'Kanit', sans-serif;
    }

    .footer-grid {
      max-width: 1180px;
      margin: 0 auto;
      padding: 44px 24px 30px;
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr 1fr;
      gap: 28px;
    }

    .footer-brand {
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }

    .footer-logo {
      width: 72px;
      height: 72px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex: none;
    }

    .footer-logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .footer-brand-title {
      color: #D6540F;
    }

    .footer-address {
      font-size: .78rem;
      color: #6B7280;
      line-height: 1.6;
      margin-top: 4px;
    }

    .footer-tel {
      margin-top: 10px;
      font-size: .85rem;
      color: #D6540F;
      font-weight: 600;
    }

    .footer-col h6 {
      font-size: .72rem;
      color: #D6540F;
      letter-spacing: .5px;
      margin-bottom: 14px;
      font-weight: 600;
    }

    .footer-col ul {
      list-style: none;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 9px;
      font-size: .82rem;
      color: #6B7280;
    }

    .footer-col a {
      color: inherit;
      text-decoration: none;
    }

    .footer-bar {
      background: #F1651E;
      color: #fff;
      font-size: .75rem;
    }

    .footer-bar-inner {
      max-width: 1180px;
      margin: 0 auto;
      padding: 12px 24px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 6px;
    }
  </style>

</head>

<body>
  <footer class="site-footer">
    <div class="footer-grid">

      <div class="footer-brand">
        <span class="footer-logo">
          <img src="img/logo_kmutnb.png" alt="KMUTNB">
        </span>
        <div>
          <b class="footer-brand-title">มหาวิทยาลัยเทคโนโลยี<br>พระจอมเกล้าพระนครเหนือ</b>
          <p class="footer-address">
            1518 ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง<br>เขตบางซื่อ กรุงเทพมหานคร 10800
          </p>
          <p class="footer-tel">📞 02-913-5000</p>
        </div>
      </div>

      <div class="footer-col">
        <h6>สำหรับผู้สมัคร</h6>
        <ul>
          <li><a href="#">ปฏิทินการรับสมัคร</a></li>
          <li><a href="#">รับสมัครนักศึกษา</a></li>
          <li><a href="#">หลักสูตรที่เปิดสอน</a></li>
          <li><a href="#">ทุนการศึกษา</a></li>
          <li><a href="#">คำถามที่พบบ่อย</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>เกี่ยวกับ มจพ.</h6>
        <ul>
          <li><a href="#">ประวัติมหาวิทยาลัย</a></li>
          <li><a href="#">คณะ/หน่วยงาน</a></li>
          <li><a href="#">งานวิจัยและนวัฒกรรม</a></li>
          <li><a href="#">ข่าวสาร</a></li>
          <li><a href="#">ติดต่อเรา</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h6>ติดตามเรา</h6>
        <ul>
          <li><a href="#">Facebook</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bar">
      <div class="footer-bar-inner">
        <span>© 2569 มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ สงวนลิขสิทธิ์</span>
        นโยบายความเป็นส่วนตัว | ข้อกำหนดการใช้งาน
      </div>
    </div>
  </footer>
</body>

</html>
