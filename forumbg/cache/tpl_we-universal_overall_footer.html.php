<?php if (!defined('IN_PHPBB')) exit; ?></div>
</div>

<div id="footer">

	<!--
		We request you retain the full copyright notice below including the link to www.phpbb.com.
		This not only gives respect to the large amount of time given freely by the developers
		but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
		the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
		"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
		forums may be affected.

		The phpBB Group : 2006
	//-->
	
	<div id="copyright">
		<p><?php echo (isset($this->_rootref['CREDIT_LINE'])) ? $this->_rootref['CREDIT_LINE'] : ''; ?></p>
		<p>Style <em>we_universal</em> created by <a href="http://weeb.pl/" title="/dev/weeb">weeb</a>.</p>
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><p><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; ?></p><?php } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><p><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?></p><?php } ?>

	</div>
</div>

<div>
	<a id="bottom" name="bottom" accesskey="z"></a>
	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

</body>
</html>