<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<!-- <link rel="stylesheet" type="text/css" href="/phpBoard/css/style.css" /> -->
<script type="text/javascript" src="./nse_files/js/HuskyEZCreator.js" charset="utf-8"></script>
<style>
.nse_content{width:660px;height:500px}
</style>
</head>
<body>
  <div id="board_write">
  <br />
  <br />
  <br />
    <h1><a href="/phpBoard">게시판</a></h1>
    <br />
    <h4>글을 작성하는 공간</h4>
      <div id="write_area">
        <form action="write_ok.php" method="post">
          <div id="in_title">
            <input name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required/>
          </div>
          <div class="wi_line"></div>
          <div id="in_name">
            <input name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required/>
          </div>
          <div class="wi_line"></div>
          <div id="in_content">
            <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
          </div>
          <div id="in_pw">
            <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />  
          </div>
          <div id="in_lock">
            <input type="checkbox" value="1" name="lockpost" />해당글을 잠급니다.
          </div>
          <div class="bt_se">
            <button type="submit">글 작성</button>
            <button><a href="/phpBoard">취소</a></button>
          </div>

        </form>
        </div>
    </div>
  </body>
</html>