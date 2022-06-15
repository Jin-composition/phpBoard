<?php
include $_SERVER['DOCUMENT_ROOT'] . '/phpBoard/db.php'; ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" type="text/css" href="/phpBoard/css/style.css" />
</head>
<body>
  <?php
  $bno = $_GET['idx'];
  $hit = mysqli_fetch_array(
    mq("select * from board where idx ='" . $bno . "'")
  );
  $hit = $hit['hit'] + 1;
  $fet = mq("update board set hit = '" . $hit . "' where idx = '" . $bno . "'");
  $sql = mq("select * from board where idx='" . $bno . "'");
  $board = $sql->fetch_array();
  ?>

  <!-- 글 불러오기 -->
  <div id="board_read">
    <br />
    <br />
    <br />
    <h2><?php echo $board['title']; ?></h2>
      <div id="user_info">
      <br />
      <br />
        작성자 : 
        <?php echo $board['name']; ?>&nbsp&nbsp&nbsp&nbsp
        <?php echo $board[
          'date'
        ]; ?>&nbsp&nbsp&nbsp&nbsp 조회 : <?php echo $board['hit']; ?>
        <div id="bo_line"></div>
      </div>
      <br />
      <div id="bo_content">
        <?php echo nl2br("$board[content]"); ?>
      </div>

    <!-- 목록 수정, 삭제 -->
    <div id="bo_ser">
      <ul>
        <li><a href="/phpBoard">[목록으로]</a></li>
        <li><a href="/phpBoard/modify.php?idx=<?php echo $board[
          'idx'
        ]; ?>">[수정]</a></li>
        <li><a href="/phpBoard/delete.php?idx=<?php echo $board[
          'idx'
        ]; ?>">[삭제]</a></li>
      </ul>
    </div>  
  </div>

</body>
</html>