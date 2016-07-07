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
    <!-- Горизонтальная ориентация -->
    <iframe src='inwidget/index.php?width=800&inline=7&view=14&toolbar=false'
            scrolling='no' frameborder='no' style='border:none;width:800px;height:295px;overflow:hidden;'></iframe>

    <div id="wrapper">
	    <div class="section maxw">
		    <div class="mainwrap">
                <main>			
                    <article>
                        <h2>Мастер на час (IT, SEO, аудит, копирайтинг)</h2>
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