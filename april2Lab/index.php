<!--http://lamp.it.marist.edu/venus/kgfjv/-->

<?php
	
	/*	Original code
	if(($_GET['style'])=="red"){
	    	echo '<link rel="stylesheet" type="text/css" media="all" href="redStyle.css" />';
	    }
	    else if(($_GET['style'])=="blue"){
	    	echo '<link rel="stylesheet" type="text/css" media="all" href="blueStyle.css" />';
	    }
		else if(($_GET['style'])=="green"){
			echo '<link rel="stylesheet" type="text/css" media="all" href="greenStyle.css" />';
		}
		else if{
			echo 'Hello';
		}
		
		echo '<link rel="stylesheet" type="text/css" href="'$_GET['style'] .'Style.css">';
	*/
	
	/* I was having considerable trouble with session thus, I turned to the friendly folks at Stack Overflow. Just wanted to make that clear. */
	
	//test for stylesheet parameter
	if(isset($_GET['theme']))
	{
	    //save and set it in the session
	    $stylesheet = $_GET['theme'];
	    $_SESSION['stylesheet'] = $stylesheet;
	}
	elseif(isset($_SESSION['stylesheet']))
	{
	    //parameter not sent, so get it from the session
	    $stylesheet = $_SESSION['stylesheet'];
	}
	
	if($stylesheet == 'red')
	{
	    echo '<link rel="stylesheet" href="redStyle.css" type="text/css" />';
	}
	elseif($stylesheet == 'green')
	{
	    echo '<link rel="stylesheet" href="greenStyle.css" type="text/css" />';
	}
	elseif($stylesheet == 'blue')
	{
	    echo '<link rel="stylesheet" href="blueStyle.css" type="text/css" />';
	}
?>

<!DOCTYPE html>
	<head>
		<title>April 2 Lab</title>
		<meta charset="utf-8" />
		
		<link rel="stylesheet" type="text/css" href="baseStyle.css">
		<link rel="stylesheet" type="text/css" href="<?=$style?>">
		
	</head>
	<body>
		<div class="container">
		
		<header>	
		<h1>April 2 Lab</h1>
		</header>
		
		<nav>
		<h2>Style</h2>
		<a href="index.php?theme=red"><button>Red</button></a>
		<a href="index.php?theme=blue"><button>Blue</button></a>
		<a href="index.php?theme=green"><button>Green</button></a>
		</nav>
		
		<hr>
		
			<h2>Content</h2>
			<h3>Sub Header 1</h3>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies, dolor sit amet vestibulum faucibus, dui erat sagittis ligula, et cursus orci ante et erat. Donec egestas venenatis eros, in varius sapien commodo ornare. In in mi sed diam dignissim vehicula. Nam turpis augue, faucibus ut faucibus et, facilisis a arcu. Proin a lacus quis ipsum porttitor laoreet. Nam et enim quam. Nam augue nisl, molestie non tempus in, varius at sem. Aliquam erat volutpat. Quisque condimentum pellentesque interdum. Cras molestie dignissim justo at porttitor. Nulla commodo erat euismod lorem vestibulum sit amet adipiscing mauris venenatis. Quisque a nulla augue, non feugiat turpis. In hac habitasse platea dictumst. Fusce vel nisl lacus. Aliquam vel ante mi. Proin ultrices nisi eget lorem imperdiet eget imperdiet libero ultricies.
			</p>
			
			<h3>Sub Header 1</h3>
			<p>
			Vestibulum sodales orci vel libero tempus ac dapibus erat aliquam. In orci ligula, malesuada at elementum sit amet, ultrices nec lectus. Quisque turpis diam, semper ut consequat a, aliquam non felis. Mauris porttitor vulputate nisl ac luctus. Donec malesuada consequat sem, ut tincidunt erat egestas id. Quisque rutrum, nunc id porttitor mattis, dolor leo porta urna, non cursus enim ante congue purus. Curabitur iaculis interdum lacus. Maecenas in fermentum nulla. Pellentesque sem magna, interdum egestas interdum id, dapibus vel sem. Etiam in massa tortor. Etiam cursus odio varius elit elementum adipiscing. Curabitur purus eros, volutpat nec egestas et, euismod a nulla. Vivamus non lectus ligula.
			</p>
			
			<h3>Sub Header 1</h3>
			<p>
			Praesent iaculis blandit erat eu ultricies. Nam eros libero, fermentum sit amet volutpat vel, faucibus sit amet ipsum. Sed luctus faucibus nibh eget pulvinar. Mauris congue rutrum nulla in tempor. Donec a massa erat, euismod aliquam lectus. Duis faucibus malesuada lectus ut ultrices. Praesent tristique congue nibh eget cursus. Vivamus eget sapien eget velit dictum ultricies. Fusce dignissim elit imperdiet elit tristique at aliquam magna luctus. Sed fermentum sem convallis mauris varius eget scelerisque ante malesuada. Donec commodo sagittis mauris ac posuere. Duis porta ultricies metus, et tincidunt risus accumsan at. Ut quis urna in ligula pharetra tincidunt at id velit. Donec nec erat justo. Nullam pulvinar commodo ligula vitae euismod. Donec velit libero, pharetra eu lobortis a, molestie ac mi.
			</p>
		</div>
		
		<hr>
		
		<footer>
			Copyright 2013 Nicholas La Roux
		</footer>
	</body>
</html>