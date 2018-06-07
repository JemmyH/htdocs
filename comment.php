<div class="demo">
	<div id="comments">
		<h3>评论列表</h3>
		<?php
		$about_user = $_SESSION['username'];
		require("connect_to_mysql.php");
		mysqli_set_charset($conn,"utf8");
		$sql = "SELECT * from comment where about_user = '$about_user'";
		$que = mysqli_query( $conn, $sql );
		while($row = mysqli_fetch_array($que)){
			echo("<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>".$row['user']."</strong>：<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['content']."<span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".date('Y-m-d H:i:s')."</span></p>");
		}
		?>
	</div>
	<div id="post">
		<h3>发表评论</h3>
		<p>昵称：</p>
		<p><input type="text" class="input" id="user"/>
		</p>
		<p>评论内容：</p>
		<p><textarea class="input" id="txt" style="width:100%; height:80px"></textarea>
		</p>
		<p><input type="submit" value="发表" id="add"/>
		</p>
		<div id="message"></div>
	</div>
</div>
<script src="//cdn.bootcss.com/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
	$( function () {
		var comments = $( "#comments" );
		$.getJSON( "server.php", function ( json ) {
			$.each( json, function ( index, array ) {
				var txt = "<p><strong>" + array[ "user" ] + "</strong>：" + array[ "comment" ] + "<span>" + array[ "addtime" ] + "</span></p>";
				comments.append( txt );
			} );
		} );
		$( "#add" ).click( function () {
			var user = $( "#user" ).val();
			var txt = $( "#txt" ).val();
			$.ajax( {
				type: "POST",
				url: "get_comment.php",
				data: "user=" + user + "&txt=" + txt,
				success: function ( msg ) {
					if ( msg == 1 ) {
						var str = "<p><strong>" + user + "</strong>：" + txt + "<span>刚刚</span></p>";
						comments.append( str );
						$( "#message" ).show().html( "发表成功！" ).fadeOut( 1000 );
						$( "#txt" ).attr( "value", "" );
					} else {
						$( "#message" ).show().html( msg ).fadeOut( 1000 );
					}
				}
			} );
		} );
	} );
</script>
<style type="text/css">
	.demo {
		width: 500px;
		margin: 80px 100px;
		text-align: left;
	}
	
	h3 {
		font-size: 18px
	}
	
	#comments {
		margin: 10px auto
	}
	
	#post {
		margin-top: 10px
	}
	
	#comments p,
	#post p {
		line-height: 30px
	}
	
	#comments p span {
		margin: 4px;
		color: #999
	}
	
	#message {
		position: relative;
		display: none;
		width: 100px;
		padding: 4px;
		margin-top: -100px;
		margin-left: 30px;
		background: #ff0000;
		color: #c286ff;
		z-index: 1001
	}
</style>