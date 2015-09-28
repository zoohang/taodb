<div id="append_parent"></div>
<div class="top-right-login">
<ul class="top-login">
<?php if ($this->_var['user_info']): ?>
	<li><?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！</li>
	<li><a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a></li>
 	<li><a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>

<?php else: ?>
 <li><?php echo $this->_var['lang']['welcome']; ?></li>
 <li><a href="user.php"><?php echo $this->_var['lang']['login']; ?></a></li>
 <li><a href="user.php?act=register"><?php echo $this->_var['lang']['register']; ?></a></li>
<?php endif; ?>
  </ul>
</div>