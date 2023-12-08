<?php
if(isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // 실제로는 이 부분에서 사용자의 정보를 검증하고 로그인 상태를 처리해야 합니다.

    // 예시: 특정 조건에 맞는 경우 로그인 성공, 그렇지 않으면 실패
    if ($username === 'user' && $password === 'password') {
        header('Location: success.php');
        exit();
    } else {
        header('Location: failure.php');
        exit();
    }
} else {
    // 필수 파라미터가 누락된 경우
    header('Location: login.php');
    exit();
}
?>