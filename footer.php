		</div>
	</main>
	<footer>
		<div class="container">
            <?php include(__DIR__ . "/blocks/lazyblock-social-media/block.php"); ?>
            <hr>
            <?php wp_nav_menu([
                'theme_location' => 'footer_policies',
                'menu_id'        => 'footer_policies',
            ]); ?>
            <hr class="hidden-when-no-javascript">
            <fieldset class="theme hidden-when-no-javascript" data-theme-select="">
                <legend>Theme</legend>
                <div class="field">
                    <input class="visually-hidden" id="default" value="default" name="theme" type="radio">
                    <label for="default">System default</label>
                </div>
                <div class="field-group">
                    <div class="field">
                        <input class="visually-hidden" id="light" value="light" name="theme" type="radio" checked="">
                        <label for="light">Light</label>
                    </div>
                    <div class="field">
                        <input class="visually-hidden" id="dark" value="dark" name="theme" type="radio">
                        <label for="dark">Dark</label>
                    </div>
                </div>
            </fieldset>
            <hr>
            <ul>
                <li>
                    <a href="https://register-of-charities.charitycommission.gov.uk/charity-search/-/charity-details/5103908/charity-overview">Registered Charity Number 1175961</a>
                </li>
                <li>
                    Free Charity Hosting by <a href="https://www.kualo.com/free-charity-hosting">Kualo</a>
                </li>
            </ul>
        </div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
