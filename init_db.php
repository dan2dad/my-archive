<?php
require_once 'config.php';

try {
    // posts 테이블 생성
    $sql = "CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content TEXT,
        category VARCHAR(50) NOT NULL,
        date DATETIME NOT NULL,
        video_url VARCHAR(255),
        insta_link VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);

    // images 테이블 생성
    $sql = "CREATE TABLE IF NOT EXISTS images (
        id INT AUTO_INCREMENT PRIMARY KEY,
        post_id INT,
        image_path VARCHAR(255) NOT NULL,
        FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
    )";
    $pdo->exec($sql);

    echo "데이터베이스 테이블이 성공적으로 생성되었습니다.";
} catch(PDOException $e) {
    echo "데이터베이스 초기화 실패: " . $e->getMessage();
}
?> 