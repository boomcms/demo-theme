        </main>
 
<?php 
	$home = $getPages([
		'template' => Template::findByThemeAndFilename('theme-default', 'homepage')
		]);
?>
        <footer id="footer">
            <p><a href="http://www.github.com/boomcms">BoomCMS on GitHub</a></p>
            <p><a href="http://www.github.com/boomcms/theme-default">BoomCMS Default Theme</a></p>
						 <?= $chunk('text', 'footer', $home->first())->text() ?>
        </footer>
        <!-- starter-theme -->
    </body>
</html>