<nav class="ui text menu" id="nav">
	<a class="item" href="/">홈</a>
	<?php
		if(isset($_SESSION['user'])):
			echo "<a class='ui item' href='/board/write.php'>게시판 글쓰기</span>";
		endif; 
	?>
	<div class="right menu">
		<?php
			if(isset($_SESSION['user'])):
				echo "
					<span class='ui item'>{$_SESSION['user']['email']} 님, 환영합니다.</span>
					<a class='ui item' href='/auth/logout.php'>로그아웃</span>
                ";
            else:
                echo "<a class='ui item' href='/auth/login.php'>로그인</a>";
			endif; 
		?>
		<a class="ui item" href="/auth/register.php">회원가입</a>
	</div>
</nav>