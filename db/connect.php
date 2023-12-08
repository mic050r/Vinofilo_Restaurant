<?php

// PostgreSQL 연결 정보
$host = "localhost";  // 데이터베이스 호스트
$port = "5432";       // 데이터베이스 포트
$dbname = "vinofilo";  // 데이터베이스 이름
$user = "postgres";     // 데이터베이스 사용자 이름
$password = "1234"; // 데이터베이스 비밀번호

// PostgreSQL에 연결
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// 연결 검사
if (!$conn) {
    die("PostgreSQL 연결 실패: " . pg_last_error());
} else {
    echo "성공";
}

pg_query($conn, "SET client_encoding TO 'utf-8'");  // 문자 인코딩 설정

pg_close($conn);

?>
