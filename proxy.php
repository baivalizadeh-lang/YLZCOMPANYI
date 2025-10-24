<?php
// Heyzine Proxy - ساخته شده توسط YLZ Company

// گرفتن آی‌دی کتاب از آدرس
$id = $_GET['id'] ?? '0238838935';

// لینک اصلی Heyzine
$url = "https://heyzine.com/flip-book/$id.html";

// دریافت محتوای صفحه اصلی
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$html = curl_exec($ch);
curl_close($ch);

// حذف نام heyzine از لینک‌ها
$html = str_replace('https://heyzine.com', 'https://heyzine.com/flip-book/0238838935.html', $html);

// خروجی به مرورگر
header('Content-Type: text/html; charset=UTF-8');
echo $html;
?>
