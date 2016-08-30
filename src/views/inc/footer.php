        </main>
<?php 
	$home = $getPages([
		'template' => Template::findByThemeAndFilename('theme-default', 'homepage')
		]);
?>
        <footer id="footer">
            <p><a href="http://www.github.com/boomcms">BoomCMS on GitHub</a></p>
            <p><a href="http://www.github.com/boomcms/theme-default">BoomCMS Default Theme</a></p>
            <div class="copy container">
				<?= $chunk('text', 'footer', $home->first())->text() ?>
            </div>
        </footer>
        <?php if (!isset($album)): ?>
        <?= $view('inc.main-scripts') ?>
        <?php else : ?>
        <?= $view('inc.album-scripts') ?>
    <?php endif ?>
        
        <!-- starter-theme -->
    </body>
</html>   