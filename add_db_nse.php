<?php
include $_SERVER['DOCUMENT_ROOT'] . '/phpBoard/db.php';
$nse_content = $connect->escape_string($_POST['ir1']);
$sql = "insert into nse_tb(content)";
$sql .= " values ('{$nse_content}')";
$res = $connect->query($sql);

if($res) {
    // DB에 입력 성공시
    echo "데이터베이스에 성공적으로 입력되었습니다 결과를 보시려면 <a href='/phpBoard/show.php' target='_blank'>여기</a>를 누르세요.";
} else {
    echo "실패"; // DB에 입력 실패시 '실패' 표시
}
?>