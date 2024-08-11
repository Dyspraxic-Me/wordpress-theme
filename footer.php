		</div>
	</main>
	<footer>
		<div class="container">
            <ul class="socials">
                <li>
                    <a href="https://x.com/DyspraxicMe">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" aria-label="X" role="img" viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#fff"/>
                            <path d="M281.7 234.3 382.2 120h-23.8l-87.3 99.2-69.7-99.2H121l105.4 150L121 389.9h23.8L237 285.1l73.6 104.8H391ZM153.4 137.5H190l168.4 235.6h-36.6Z"/>
                        </svg><!--
                        -->X
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/dyspraxicme/">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" aria-label="Facebook" role="img" viewBox="0 0 512 512">
                            <path d="m0 0H512V512H0" fill="#fff"/>
                            <path d="m331 312h-45v134a192 192 0 10-60 0V312h-49v-56h49v-45q4-89 116-68v47h-26q-29 1-30 30v36h53.5" fill="#1877f2"/>
                        </svg><!--
                        -->Facebook
                    </a>
                </li>
                <li>
                    <a href="https://dyspraxicme.tumblr.com/">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" aria-label="Tumblr" role="img" viewBox="0 0 512 512">
                            <path d="m0 0H512V512H0" fill="#001935"/>
                            <path fill="#fff" d="m148 173q73-21 81-103h57v94h67v68h-67v96q1 37 37 37h33v72h-62c-60 0-96-34-96-96V232h-50"/>
                        </svg><!--
                        -->Tumblr
                    </a>
                </li>
            </ul>
            <hr>
            <?php wp_nav_menu([
                'theme_location' => 'footer_policies',
                'menu_id'        => 'footer_policies',
            ]); ?>
            <hr class="hidden-when-no-javascript">
            <fieldset class="theme hidden-when-no-javascript" data-theme-select="">
                <legend>Theme</legend>
                <div class="field">
                    <input class="visually-hidden" id="light" value="light" name="theme" type="radio" checked="">
                    <label for="light">Light</label>
                </div>
                <div class="field">
                    <input class="visually-hidden" id="dark" value="dark" name="theme" type="radio">
                    <label for="dark">Dark</label>
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
