<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ((isset($this->_rootref['L_USERGROUPS'])) ? $this->_rootref['L_USERGROUPS'] : ((isset($user->lang['USERGROUPS'])) ? $user->lang['USERGROUPS'] : '{ USERGROUPS }')); ?></h3>
		</div>
		<div class="panel-body">
			<p><?php echo ((isset($this->_rootref['L_GROUPS_EXPLAIN'])) ? $this->_rootref['L_GROUPS_EXPLAIN'] : ((isset($user->lang['GROUPS_EXPLAIN'])) ? $user->lang['GROUPS_EXPLAIN'] : '{ GROUPS_EXPLAIN }')); ?></p>
			<?php $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] = 0; if (sizeof($this->_tpldata['leader'])) {  ?>

				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td><?php echo ((isset($this->_rootref['L_GROUP_LEADER'])) ? $this->_rootref['L_GROUP_LEADER'] : ((isset($user->lang['GROUP_LEADER'])) ? $user->lang['GROUP_LEADER'] : '{ GROUP_LEADER }')); ?></td>
								<td><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?></td>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_leader_count = (isset($this->_tpldata['leader'])) ? sizeof($this->_tpldata['leader']) : 0;if ($_leader_count) {for ($_leader_i = 0; $_leader_i < $_leader_count; ++$_leader_i){$_leader_val = &$this->_tpldata['leader'][$_leader_i]; if (! $_leader_val['GROUP_SPECIAL']) {  $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] = 1; } ?>

								<tr>
									<td>
										<div class="radio">
											<label>
												<input type="radio" name="selected" value="<?php echo $_leader_val['GROUP_ID']; ?>" <?php if ($_leader_val['GROUP_SPECIAL']) {  ?>class="disabled"<?php } ?> /> <a href="<?php echo $_leader_val['U_VIEW_GROUP']; ?>" class="forumtitle"<?php if ($_leader_val['GROUP_COLOUR']) {  ?> style="color:#<?php echo $_leader_val['GROUP_COLOUR']; ?>"<?php } ?>><?php echo $_leader_val['GROUP_NAME']; ?></a>
												<?php if ($_leader_val['GROUP_DESC']) {  ?><br /><?php echo $_leader_val['GROUP_DESC']; } if (! $_leader_val['GROUP_SPECIAL']) {  ?><br /><i><?php echo $_leader_val['GROUP_STATUS']; ?></i><?php } ?>

											</label>
										</div>
									</td>
									<td class="text-center"><?php if ($this->_rootref['S_CHANGE_DEFAULT']) {  ?><input title="<?php echo ((isset($this->_rootref['L_CHANGE_DEFAULT_GROUP'])) ? $this->_rootref['L_CHANGE_DEFAULT_GROUP'] : ((isset($user->lang['CHANGE_DEFAULT_GROUP'])) ? $user->lang['CHANGE_DEFAULT_GROUP'] : '{ CHANGE_DEFAULT_GROUP }')); ?>" type="radio" name="default"<?php if ($_leader_val['S_GROUP_DEFAULT']) {  ?> checked="checked"<?php } ?> value="<?php echo $_leader_val['GROUP_ID']; ?>" /> <?php } ?></td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } if (sizeof($this->_tpldata['member'])) {  ?>

				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td><?php echo ((isset($this->_rootref['L_GROUP_MEMBER'])) ? $this->_rootref['L_GROUP_MEMBER'] : ((isset($user->lang['GROUP_MEMBER'])) ? $user->lang['GROUP_MEMBER'] : '{ GROUP_MEMBER }')); ?></td>
								<td><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?></td>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_member_count = (isset($this->_tpldata['member'])) ? sizeof($this->_tpldata['member']) : 0;if ($_member_count) {for ($_member_i = 0; $_member_i < $_member_count; ++$_member_i){$_member_val = &$this->_tpldata['member'][$_member_i]; if (! $_member_val['GROUP_SPECIAL']) {  $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] = 1; } ?>		
								<tr>
									<td>
										<div class="radio">
											<label>
												<input type="radio" name="selected" value="<?php echo $_member_val['GROUP_ID']; ?>" <?php if ($_member_val['GROUP_SPECIAL']) {  ?>class="disabled"<?php } ?> />
												<a href="<?php echo $_member_val['U_VIEW_GROUP']; ?>" class="forumtitle"<?php if ($_member_val['GROUP_COLOUR']) {  ?> style="color:#<?php echo $_member_val['GROUP_COLOUR']; ?>"<?php } ?>><?php echo $_member_val['GROUP_NAME']; ?></a>
												<?php if ($_member_val['GROUP_DESC']) {  ?><br /><?php echo $_member_val['GROUP_DESC']; } if (! $_member_val['GROUP_SPECIAL']) {  ?><br /><i><?php echo $_member_val['GROUP_STATUS']; ?></i><?php } ?>

											</label>
										</div>
									</td>
									<td class="text-center"><?php if ($this->_rootref['S_CHANGE_DEFAULT']) {  ?><input title="<?php echo ((isset($this->_rootref['L_CHANGE_DEFAULT_GROUP'])) ? $this->_rootref['L_CHANGE_DEFAULT_GROUP'] : ((isset($user->lang['CHANGE_DEFAULT_GROUP'])) ? $user->lang['CHANGE_DEFAULT_GROUP'] : '{ CHANGE_DEFAULT_GROUP }')); ?>" type="radio" name="default"<?php if ($_member_val['S_GROUP_DEFAULT']) {  ?> checked="checked"<?php } ?> value="<?php echo $_member_val['GROUP_ID']; ?>" /> <?php } ?></td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } if (sizeof($this->_tpldata['pending'])) {  ?>

				<hr class="dashed" />
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td><?php echo ((isset($this->_rootref['L_GROUP_PENDING'])) ? $this->_rootref['L_GROUP_PENDING'] : ((isset($user->lang['GROUP_PENDING'])) ? $user->lang['GROUP_PENDING'] : '{ GROUP_PENDING }')); ?></td>
								<td><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?></td>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_pending_count = (isset($this->_tpldata['pending'])) ? sizeof($this->_tpldata['pending']) : 0;if ($_pending_count) {for ($_pending_i = 0; $_pending_i < $_pending_count; ++$_pending_i){$_pending_val = &$this->_tpldata['pending'][$_pending_i]; if (! $_pending_val['GROUP_SPECIAL']) {  $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] = 1; } ?>			
								<tr>
									<td>
										<a href="<?php echo $_pending_val['U_VIEW_GROUP']; ?>" class="forumtitle"<?php if ($_pending_val['GROUP_COLOUR']) {  ?> style="color:#<?php echo $_pending_val['GROUP_COLOUR']; ?>"<?php } ?>><?php echo $_pending_val['GROUP_NAME']; ?></a>
										<?php if ($_pending_val['GROUP_DESC']) {  ?><br /><?php echo $_pending_val['GROUP_DESC']; } if (! $_pending_val['GROUP_SPECIAL']) {  ?><br /><i><?php echo $_pending_val['GROUP_STATUS']; ?></i><?php } ?>

									</td>
									<td class="text-center">
										<input type="radio" name="selected" value="<?php echo $_pending_val['GROUP_ID']; ?>" <?php if ($_pending_val['GROUP_SPECIAL']) {  ?>class="disabled"<?php } ?> />
									</td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } if (sizeof($this->_tpldata['pending']) && sizeof($this->_tpldata['nonmember'])) {  ?><hr class="dashed" /><?php } if (sizeof($this->_tpldata['nonmember'])) {  ?>

				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td><?php echo ((isset($this->_rootref['L_GROUP_NONMEMBER'])) ? $this->_rootref['L_GROUP_NONMEMBER'] : ((isset($user->lang['GROUP_NONMEMBER'])) ? $user->lang['GROUP_NONMEMBER'] : '{ GROUP_NONMEMBER }')); ?></td>
								<td><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?></td>
							</tr>
						</thead>
						<tbody class="topiclist cplist">
							<?php $_nonmember_count = (isset($this->_tpldata['nonmember'])) ? sizeof($this->_tpldata['nonmember']) : 0;if ($_nonmember_count) {for ($_nonmember_i = 0; $_nonmember_i < $_nonmember_count; ++$_nonmember_i){$_nonmember_val = &$this->_tpldata['nonmember'][$_nonmember_i]; if ($_nonmember_val['S_CAN_JOIN']) {  $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] = 1; } ?>		
								<tr>
									<td>
										<a href="<?php echo $_nonmember_val['U_VIEW_GROUP']; ?>" class="forumtitle"<?php if ($_nonmember_val['GROUP_COLOUR']) {  ?> style="color:#<?php echo $_nonmember_val['GROUP_COLOUR']; ?>"<?php } ?>><?php echo $_nonmember_val['GROUP_NAME']; ?></a>
										<?php if ($_nonmember_val['GROUP_DESC']) {  ?><br /><?php echo $_nonmember_val['GROUP_DESC']; } if (! $_nonmember_val['GROUP_SPECIAL']) {  ?><br /><i><?php echo $_nonmember_val['GROUP_STATUS']; ?></i><?php } ?>

									</td>
									<td class="text-center">
										<input type="radio" name="selected" value="<?php echo $_nonmember_val['GROUP_ID']; ?>" <?php if (! $_nonmember_val['S_CAN_JOIN']) {  ?>class="disabled"<?php } ?> />
									</td>
								</tr>
							<?php }} ?>

						</tbody>
					</table>
				</div>
			<?php } ?>

		</div>
		<div class="panel-footer">
			<?php if ($this->_rootref['S_CHANGE_DEFAULT'] || $this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] == (1)) {  ?>

				<fieldset>
					<?php if ($this->_rootref['S_CHANGE_DEFAULT']) {  ?>

						<div class="pull-left">
							<input class="btn btn-success" type="submit" name="change_default" value="<?php echo ((isset($this->_rootref['L_CHANGE_DEFAULT_GROUP'])) ? $this->_rootref['L_CHANGE_DEFAULT_GROUP'] : ((isset($user->lang['CHANGE_DEFAULT_GROUP'])) ? $user->lang['CHANGE_DEFAULT_GROUP'] : '{ CHANGE_DEFAULT_GROUP }')); ?>" />
							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

						</div>
					<?php } if ($this->_tpldata['DEFINE']['.']['SHOW_BUTTONS'] == (1)) {  ?>

						<div class="pull-right">
							<label for="action"><?php echo ((isset($this->_rootref['L_SELECT'])) ? $this->_rootref['L_SELECT'] : ((isset($user->lang['SELECT'])) ? $user->lang['SELECT'] : '{ SELECT }')); ?>:</label> 
							<select name="action" id="action">
								<option value="join"><?php echo ((isset($this->_rootref['L_JOIN_SELECTED'])) ? $this->_rootref['L_JOIN_SELECTED'] : ((isset($user->lang['JOIN_SELECTED'])) ? $user->lang['JOIN_SELECTED'] : '{ JOIN_SELECTED }')); ?></option>
								<option value="resign"><?php echo ((isset($this->_rootref['L_RESIGN_SELECTED'])) ? $this->_rootref['L_RESIGN_SELECTED'] : ((isset($user->lang['RESIGN_SELECTED'])) ? $user->lang['RESIGN_SELECTED'] : '{ RESIGN_SELECTED }')); ?></option>
								<option value="demote"><?php echo ((isset($this->_rootref['L_DEMOTE_SELECTED'])) ? $this->_rootref['L_DEMOTE_SELECTED'] : ((isset($user->lang['DEMOTE_SELECTED'])) ? $user->lang['DEMOTE_SELECTED'] : '{ DEMOTE_SELECTED }')); ?></option>
							</select>&nbsp;
							<input class="btn btn-default" type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
							<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

						</div>
					<?php } ?>

				</fieldset>
			<?php } ?>

		</div>
	</div>
</form>

<?php $this->_tpl_include('ucp_footer.html'); ?>