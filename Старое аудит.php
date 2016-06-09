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
    <a href="IT-card.php" class="turn">IT</a>
    <?php
        require "Header.php";
    ?>
    <div id="wrapper">
	    <div class="section maxw">
		    <div class="mainwrap">
                <main>            
                    <article>
                        <h2>Обо мне:</h2>
						<div class="comment_center">
						  	<p>Здравия желаю! Я контролер качества веб-контента <a href="https://freelance.ru/Usimov/" >Игорь Грин</a>. Специализируюсь на аудите и модерировании.</p>
							<p>В настоящее время:</p>
							<ul>
						        <li>Работаю специалистом по контролю качества в крупной российской компании.</li>
							    <li>Проверяю содержание, оформление, уникальность курсовых, дипломных работ, диссертаций.</li>
							    <li>Работаю модератором и аудитором контента в крупной торговой российской интернет-компании.</li>
                                <li>Опыт написания SEO-текстов, оптимизированных под ключевые слова статей.</li>
                                <li>Опыт написания обзоров, аналитики, продающихся текстов, новостей, тематических статей.</li>
							</ul>
                            <p>С уважением, Ваш конролер качества со стажем</p>
                            <p>Игорь Грин.</p>
						</div>
						<div class="comment_center">
						<?php
						        require "MyFoto.php";
						?>
						</div>
                    </article>
                 </main>
			</div>
			<aside id="s_left">
			    <h2>Профессиональные навыки:</h2>
			    <div class="comment_left">
				    <ol>
					    <li>Грамотность</li>
						<li>Внимательность</li>
						<li>Уникальности</li>
						<li>Оперативность</li>
						<li>Точность</li>
					</ol>
			    </div>
            </aside>                                    
            <aside id="s_right">
			    <h2>Специализация:</h2>
			    <div class="comment_right">
				  	<p>Тексты:</p>
					<ol>
					    <li>Модерирование контента</li>
						<li>Контроль качества</li>
						<li>Аудит</li>
					</ol>
				</div>
				<div class="comment_right">
				    <?php
				        require "RegForm.php";
					?>	
				</div>
            </aside>
		</div>
    </div>
    <?php
	    require "Footer.php";
    ?>
</body>
</html>