<?php
    require "Declaration.php";
?>
<html>
<head>
    <?php
        require "Head.php";
    ?>
</head>
<body>
    <?php
        require "Header.php";
    ?>
    <div id="wrapper">
	    <div class="section maxw">
		    <div class="mainwrap">
                <main>			
                    <article>
                        <h2>Обо мне:</h2>
						<?php
						        require "MyFoto.php";
						?>
						<?php
						        require "MyData.php";
						?>
                    </article>
                 </main>
			</div>
			<?php
	            require "Aside_left.php";
		    ?>                                   
            <?php
	            require "Aside_right.php";
		    ?>
		</div>
    </div>
    <?php
	    require "Footer.php";
    ?>
</body>
</html>