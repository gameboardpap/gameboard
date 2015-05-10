<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_COMPOSE_PM']) {  ?>

				<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?></form>
			<?php } ?>

		</div>
	</div>
	<div class="clearfix"></div>
</div>

<?php $this->_tpl_include('jumpbox.html'); $this->_tpl_include('overall_footer.html'); ?>