        </main>

        <?php $home = $getPages(['template' => Template::findByThemeAndFilename('demo', 'homepage')]) ?>

        <footer id="footer">
            <div class="copy container">
				<?= $chunk('text', 'footer', $home->first())->text() ?>
            </div>
        </footer>

        <?php if (!isset($album)): ?>
            <?= $view('inc.main-scripts') ?>
        <?php else : ?>
            <?= $view('inc.album-scripts') ?>
        <?php endif ?>
    </body>
</html>   