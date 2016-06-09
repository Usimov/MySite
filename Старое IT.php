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
	<a href="Auditor-card.php" class="turn">Аудит</a>
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
						<p>Здравия желаю! Я front-back-end-разработчик <a href="https://freelance.ru/Usimov/" >Игорь Грин</a>. Специализируюсь на проектировании и разработке веб-приложений.</p>
						<p>Гарантирую:</p>
						<ul>
						    <li>Поддержку, сопровождение и развитие Ваших веб-проектов</li>
						    <li>Скорость в типовых задачах</li>
							<li>Применение последних тенденций веб-разработки в Ваших проектах</li>
							<li>Резиновая верстка, совместимость с IE8, IE9, IE10, Firefox, Safari, Opera, Chrome</li>
						</ul>
						<p>С уважением, Ваш Back-end-разработчик со стажем</p>
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
					    <li>Хорошее знание: PHP(Storm), HTML5/CSS3 (Bootstrap), JS (jQuery, AngularJS), Ajax, MySQL</li>
						<li>Правильный код, нелюбовь "костылей", ООП, MVC, Xdebug, KISS, DRY, Yagni и другие полезные привычки</li>
						<li>Опыт работы на CMS Битрикс, Joomla, WordPress, ModX, Drupal</li>
						<li>Только адаптивная и кроссбраузерная семантическая верстка</li>
						<li>Опыт использования шаблонизаторов (Symphony/Twig)</li>
						<li>Опыт использования систем управления версиями (Subversion, GIT)</li>
					</ol>
			    </div>
            </aside>                                    
            <aside id="s_right">
			    <h2>Специализация:</h2>
				 <div class="comment_right">
				    <p>IT и Программирование:</p>
					<ol>
					    <li>Front-end-разработка (CSS3, HTML5, javascript)</li>
						<li>Back-end-разработка (PHP, jQuery, Ajax, MySQL)</li>
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