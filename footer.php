            <a class="back-to-top" href="#top">
                <svg role="presentation" focusable="false" xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17">
                    <path fill="currentColor" d="M6.5 0L0 6.5 1.4 8l4-4v12.7h2V4l4.3 4L13 6.4z"></path>
                </svg>
                Back to top
            </a>
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
