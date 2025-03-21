<?php
// 데이터베이스 연결 정보
$db_host = 'localhost';
$db_name = '아직_설정_안됨'; // 000webhost에서 제공하는 DB 이름으로 변경 필요
$db_user = '아직_설정_안됨'; // 000webhost에서 제공하는 사용자 이름으로 변경 필요
$db_pass = '아직_설정_안됨'; // 000webhost에서 제공하는 비밀번호로 변경 필요

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['error' => '데이터베이스 연결 실패: ' . $e->getMessage()]);
    exit;
}
?> 