<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
  <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
  
  <title><?php echo $this->_var['page_title']; ?></title>
  
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="icon" href="animated_favicon.gif" type="image/gif" />
  <link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
  <link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
  <link rel="stylesheet" href="themes/my/css/common.css">
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.11.1.min.js,jquery.json.js')); ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
</head>
<body>
  
  <div class="top">
    <div class="top-body">
      <div class="top-left">
        <img src="themes/my/images/index_02.png" alt="">
      </div>
      <div class="top-right">
        <script type="text/javascript">
        var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
        </script>
        <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
        <div class="top-right-search">
          <script type="text/javascript">
          
          <!--
          function checkSearchForm()
          {
              if(document.getElementById('keyword').value)
              {
                  return true;
              }
              else
              {
                  alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                  return false;
              }
          }
          -->
          
          </script>
          <form id="search-form" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
            <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"/>
            <img src="themes/my/images/index_53.png" alt="" onclick="getElementById('search-form').submit();">
            <input type="submit" value="search" style="display:none;">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="nav" id="goods_list">
    <div class="nav-col">
      <div class="nav-list">
        <ul>
        <?php if ($this->_var['navigator_list']['middle']): ?>
          <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="on"<?php endif; ?>><a href="./"><?php echo $this->_var['lang']['home']; ?></a></li>
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="on"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        </ul>
      </div>
      <div class="nav-order">
        <span><a href=""><?php echo $this->_var['lang']['recommend']; ?>∨</a></span>
        <span><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><?php echo $this->_var['lang']['price']; ?><?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>∨<?php else: ?>∧<?php endif; ?></a></span>
        <span><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=salesnum&order=<?php if ($this->_var['pager']['sort'] == 'salesnum' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><?php echo $this->_var['lang']['salesnum']; ?><?php if ($this->_var['pager']['sort'] == 'salesnum' && $this->_var['pager']['order'] == 'DESC'): ?>∨<?php else: ?>∧<?php endif; ?></a></span>
      </div>
    </div>
  </div>
  