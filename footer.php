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
            <color-scheme-select hidden>
                <hr>
                <fieldset>
                    <legend>Theme</legend>
                    <div class="field">
                        <input class="visually-hidden" id="default" value="" name="color-scheme" type="radio" checked>
                        <label for="default">System default</label>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <input class="visually-hidden" id="light" value="light" name="color-scheme" type="radio">
                            <label for="light">Light</label>
                        </div>
                        <div class="field">
                            <input class="visually-hidden" id="dark" value="dark" name="color-scheme" type="radio">
                            <label for="dark">Dark</label>
                        </div>
                    </div>
                </fieldset>
            </color-scheme-select>
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
