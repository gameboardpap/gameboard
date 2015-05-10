<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_TYPE'] == (1)) {  ?>

<div class="panel">
	<h3><?php echo ((isset($this->_rootref['L_CONFIRMATION'])) ? $this->_rootref['L_CONFIRMATION'] : ((isset($user->lang['CONFIRMATION'])) ? $user->lang['CONFIRMATION'] : '{ CONFIRMATION }')); ?></h3>
	<p><?php echo ((isset($this->_rootref['L_CONFIRM_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_EXPLAIN'] : ((isset($user->lang['CONFIRM_EXPLAIN'])) ? $user->lang['CONFIRM_EXPLAIN'] : '{ CONFIRM_EXPLAIN }')); ?></p>
	<fieldset>
<?php } ?>


<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?></h3>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<img src="<?php echo (isset($this->_rootref['CONFIRM_IMAGE_LINK'])) ? $this->_rootref['CONFIRM_IMAGE_LINK'] : ''; ?>" alt="<?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>" class="default-captcha-image"/>
		</li>
		<li class="list-group-item">
			<div class="input-group">
				<input type="text" name="confirm_code" id="confirm_code" maxlength="8" tabindex="<?php echo (isset($this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'])) ? $this->_tpldata['DEFINE']['.']['CAPTCHA_TAB_INDEX'] : ''; ?>" class="form-control" title="<?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>" placeholder="<?php echo ((isset($this->_rootref['L_CONFIRM_CODE_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_CODE_EXPLAIN'] : ((isset($user->lang['CONFIRM_CODE_EXPLAIN'])) ? $user->lang['CONFIRM_CODE_EXPLAIN'] : '{ CONFIRM_CODE_EXPLAIN }')); ?>"/>
				<?php if ($this->_rootref['S_CONFIRM_REFRESH']) {  ?><span class="input-group-btn"><button type="submit" name="refresh_vc" id="refresh_vc" class="btn btn-default"><i class="fa fa-refresh"></i></button></span><?php } ?>

			</div>
			<input type="hidden" name="confirm_id" id="confirm_id" value="<?php echo (isset($this->_rootref['CONFIRM_ID'])) ? $this->_rootref['CONFIRM_ID'] : ''; ?>" />
		</li>
	</ul>
</div>

<?php if ($this->_rootref['S_TYPE'] == (1)) {  ?>

	</fieldset>
</div>
<?php } ?>