<?php
/*!
* WordPress Social Login
*
* http://hybridauth.sourceforge.net/wsl/index.html | http://github.com/hybridauth/WordPress-Social-Login
*   (c) 2013 Mohamed Mrassi and other contributors | http://wordpress.org/extend/plugins/wordpress-social-login/
*/

/**
* Documentation and stuff
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 
?>

<div class="wslgn"> 
	<div style="width: 290px; float: right; margin: 20px 0 20px 20px; margin-top:0px; padding: 0 20px 20px 20px; border: 1px solid #ddd; background-color: #fff;">
		<h3><?php _wsl_e("Troubleshooting", 'wordpress-social-login') ?></h3>
		<p>
			<b><a class="button-primary" href="options-general.php?page=wordpress-social-login&wslp=diagnostics"><?php _wsl_e('WSL Diagnostics', 'wordpress-social-login') ?></a></b>
			
			<b><a class="button-primary" href="<?php echo WORDPRESS_SOCIAL_LOGIN_PLUGIN_URL ?>/services/siteinfo.php"><?php _wsl_e('System information', 'wordpress-social-login') ?></a></b>
		</p> 
		<p align="justify">
			<?php _wsl_e('If you run into any issue, you can access the <b>WordPress Social Login Diagnostics</b> to check the <b>Plugin Requirements</b> or to enable the <b>Development mode</b>', 'wordpress-social-login') ?>.
		</p> 
		<p align="justify">
			<?php _wsl_e('Remember to include your System information when posting support requests', 'wordpress-social-login') ?>.
		</p> 
	</div>
	
	<h3><?php _wsl_e("Documentation", 'wordpress-social-login') ?></h3>
	<p>
		<?php _wsl_e('The complete <b>User Guide</b> can be found at
		<a href="http://hybridauth.sourceforge.net/wsl/index.html" target="_blank">hybridauth.sourceforge.net/wsl/index.html</a>', 'wordpress-social-login') ?>
	</p>

	<hr />
	
	<h3><?php _wsl_e("FAQs", 'wordpress-social-login') ?></h3>
	<p>
		<?php _wsl_e('A list of <b>Frequently asked questions</b> can be found at
		<a href="http://hybridauth.sourceforge.net/wsl/faq.html" target="_blank">hybridauth.sourceforge.net/wsl/faq.html</a>', 'wordpress-social-login') ?>
	</p>

	<hr />
	
	<h3><?php _wsl_e("Support", 'wordpress-social-login') ?></h3>
	<p>
		<?php _wsl_e("To get help and support, here is where you can reach me", 'wordpress-social-login') ?>:
	</p>
	
	<ul style="margin-left:40px;">
		<li><?php _wsl_e('<b>Wordpress support forum</b>: <a href="http://wordpress.org/support/plugin/wordpress-social-login" target="_blank">wordpress.org/support/plugin/wordpress-social-login</a>', 'wordpress-social-login') ?></li> 
		<li><?php _wsl_e('<b>Email</b>: <a href="mailto:hybridauth@gmail.com">hybridauth@gmail.com</a>', 'wordpress-social-login') ?></li> 
	</ul>

<pre class="wslpre" style="margin-left:20px;">
<?php _wsl_e("Notes", 'wordpress-social-login') ?>: 

<?php _wsl_e(sprintf('Include your <a href="%s/services/siteinfo.php" target="_blank">website information</a> when posting support requests', WORDPRESS_SOCIAL_LOGIN_PLUGIN_URL), 'wordpress-social-login') ?>.

<?php _wsl_e("If I did not answer your question or I took too long to, then its either", 'wordpress-social-login') ?> :
   * <?php _wsl_e("I'm too busy or hibernating irl", 'wordpress-social-login') ?>,
   * <?php _wsl_e("It has been asked before on the wordpress support forum", 'wordpress-social-login') ?>, 
   * <?php _wsl_e("I didn't understand it", 'wordpress-social-login') ?>, 
   * <?php _wsl_e("also, be friendly, questions and requests containing hi, hello and thanks can make<br />     a diffrence :P ", 'wordpress-social-login') ?>
</pre>   
	
	<br />
	<hr />
	
	<h3><?php _wsl_e("Credits", 'wordpress-social-login') ?></h3>
	<p>
		<?php _wsl_e('WordPress Social Login was created by <a href="http://profiles.wordpress.org/miled/" target="_blank">Mohamed Mrassi</a> (a.k.a Miled) and <a href="https://github.com/hybridauth/WordPress-Social-Login/graphs/contributors" target="_blank">contributors</a>', 'wordpress-social-login') ?>.
		<?php _wsl_e("Many other people have also contributed with <br />constructive discussions, support and by submitting patches", 'wordpress-social-login') ?>.
	</p>
 
	<hr />
	
	<h3><?php _wsl_e("License", 'wordpress-social-login') ?></h3>
	<p>
		<?php _wsl_e("<b>WordPress Social Login</b> is an open source software licenced under The MIT License (MIT)", 'wordpress-social-login') ?>
	</p>
<pre class="wslpre" style="margin-left:20px;">
	Copyright (C) 2011-2013 Mohamed Mrassi and contributors

	Permission is hereby granted, free of charge, to any person obtaining
	a copy of this software and associated documentation files (the
	"Software"), to deal in the Software without restriction, including
	without limitation the rights to use, copy, modify, merge, publish,
	distribute, sublicense, and/or sell copies of the Software, and to
	permit persons to whom the Software is furnished to do so, subject to
	the following conditions:

	The above copyright notice and this permission notice shall be
	included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
	MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
	LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
	OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
	WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
</pre>  

</div>
