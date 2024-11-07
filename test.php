<?php
function extractDigits($str) {
    $digits = preg_replace('/\D/', '', $str); // Убираем все нецифровые символы
    return $digits === '' ? 0 : (int)$digits; // Если нет цифр, возвращаем 0, иначе преобразуем строку в число
}

// Пример использования
echo extractDigits("abc123xyz"); // Выведет: 123
