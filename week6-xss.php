<?php
$input = '<script>alert("XSS")</script> สวัสดี <b>โลก</b>';

// 1. htmlspecialchars() — แปลงอักขระพิเศษเป็น HTML Entities (แนะนำ)
//    < → &lt;   > → &gt;   " → &quot;   ' → &#039;   & → &amp;
echo htmlspecialchars($input, ENT_QUOTES, "UTF-8");
// แสดง: &lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt; สวัสดี &lt;b&gt;โลก&lt;/b&gt;

// 2. strip_tags() — ตัด HTML/PHP Tags ออกทั้งหมด
echo strip_tags($input);
// แสดง: alert("XSS") สวัสดี โลก

// 3. strip_tags() + อนุญาตบาง Tag
echo strip_tags($input, "<b><i><u>");
// แสดง: alert("XSS") สวัสดี <b>โลก</b>  (เก็บ <b> ไว้)

// 4. trim() — ตัด Whitespace หัว-ท้าย (ใช้ร่วมกันเสมอ)
$clean = trim(htmlspecialchars($_POST["name"] ?? "", ENT_QUOTES, "UTF-8"));

echo $input;
?>
