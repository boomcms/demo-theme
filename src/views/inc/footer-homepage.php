        </main>

        <footer id="footer">
            <p><a href="http://www.github.com/boomcms">BoomCMS on GitHub</a></p>
            <p><a href="http://www.github.com/boomcms/theme-default">BoomCMS Default Theme</a></p>
            <div class="copy container">
                <?= $chunk('text', 'footer')->setPlaceHolderText('Insert website footer text') ?>
            </div>

        </footer>
         <?= $view('inc.main-scripts') ?>
        <!-- starter-theme -->
    </body>
</html>