<?php /* Smarty version 2.6.31, created on 2021-01-16 07:36:20
         compiled from CRM%5CAdmin%5CPage%5CAdmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM\\Admin\\Page\\Admin.tpl', 1, false),array('block', 'ts', 'CRM\\Admin\\Page\\Admin.tpl', 15, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['newer_civicrm_version']): ?>
    <div class="messages status no-popup">
      <table>
        <tr><td class="tasklist">
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['registerSite'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Have you registered this site at CiviCRM.org? If not, please help strengthen the CiviCRM ecosystem by taking a few minutes to <a href="%1" target="_blank">fill out the site registration form</a>. The information collected will help us prioritize improvements, target our communications and build the community. If you have a technical role for this site, be sure to check "Keep in Touch" to receive technical updates (a low volume mailing list).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        </tr>
      </table>
    </div>
<?php endif; ?>

<div class="crm-content-block">
<?php $_from = $this->_tpl_vars['adminPanel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['groupName'] => $this->_tpl_vars['group']):
?>
<div id="admin-section-<?php echo $this->_tpl_vars['groupName']; ?>
">
  <h3><?php echo $this->_tpl_vars['group']['title']; ?>
</h3>
  <div class="admin-section-items">
    <?php $_from = $this->_tpl_vars['group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['panelName'] => $this->_tpl_vars['panelItem']):
?>
    <dl>
      <dt><a href="<?php echo $this->_tpl_vars['panelItem']['url']; ?>
"<?php if ($this->_tpl_vars['panelItem']['extra']): ?> <?php echo $this->_tpl_vars['panelItem']['extra']; ?>
<?php endif; ?> id="id_<?php echo $this->_tpl_vars['panelItem']['id']; ?>
"><?php echo $this->_tpl_vars['panelItem']['title']; ?>
</a></dt>
      <dd><?php echo $this->_tpl_vars['panelItem']['desc']; ?>
</dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>