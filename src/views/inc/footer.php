        </main>
        
        <?php $home = $page->isRoot() ? $page : Page::findByPrimaryUri('') ?>

        <footer id="footer">
            <div class="copy container">
				<?= $chunk('text', 'footer', $home)->setPlaceHolderText('Insert website footer text') ?>
            </div>
        </footer>

        <script type="text/javascript" async src="<?= $pub('main.js') ?>"></script>
    </body>
</html>   