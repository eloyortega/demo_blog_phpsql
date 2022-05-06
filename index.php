<!doctype html>
<html>
	<head>
		<title>My Blog</title>
		<style>
			h2{color:red;}
		</style>
	</head>
	<body>
		<?php require_once('nav.php');?>
<!--
		<section>
			<h2>Article title</h2>
			<p><b>Category: News Update</b></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit condimentum blandit. Curabitur congue sem at elementum eleifend. Praesent malesuada dolor pellentesque justo lacinia, ut tristique ante pretium. Mauris sit amet imperdiet turpis. Cras vehicula at nulla quis volutpat. Nulla erat nunc, tempor eget accumsan quis, varius ut nisl. In vestibulum lacus quis mauris viverra rhoncus. Curabitur lorem diam, semper a ante quis, vestibulum rutrum nibh. Vivamus ac finibus leo. Quisque at magna vitae orci hendrerit consequat a nec enim. Maecenas diam sem, maximus id feugiat at, vehicula ac felis. Ut a enim eu enim luctus dictum. Nunc pharetra, leo vitae interdum interdum, mi risus lobortis ex, facilisis imperdiet nunc magna at purus. Fusce ac mi ac mi pulvinar volutpat.</p>
		</section>
		<hr>
-->
	<?php
		
		$jsondata = file_get_contents( 'data.json' );
		$jsondata = json_decode( $jsondata, true );

//		print_r($jsondata);
//		echo '<br><br>';
//		print_r($jsondata[2]);
//		echo '<br><br>';
//		print_r( $jsondata[2]['title'] );
//		echo '<br><br>';
		
		foreach( $jsondata as $i => $v ){
			echo '
				<section>
					<h2>'.$v['title'].'</h2>
					<p id="emphasis"><b>Category: '.$v['cat'].'</b></p>
					<p>'.$v['article'].'</p>
				</section>
				<hr>
			';
//			print_r($i);
//			echo '<br><br>';
//			print_r( $v );
//			echo '<br><br>';
//			print_r( $v['title'] );
//			echo '<br><br>';
		};
	
		
		
		
	?>
	
	</body>
</html>