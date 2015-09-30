<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
  function $id(element) {
    return document.getElementById(element);
  }
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>

<div class="right-side">
  <div class="side-row">
    <div class="side-body">
      <img src="./themes/my/images/index_09.png" alt="">
      <p>购物车</p>
    </div>
    <div class="side-box shop-cart">
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>
      <div class="cart-row">
        <p>小飞燕红油香辣豆干</p>
        <div class="cart-row-num">
          <span class="goods-price">¥ 2.50 ×</span>
          <span class="goods-num">
            <p class="num_box">
              <a class="J_jian">-</a>
              <label><input type="text" class="num" value="1"/></label>
              <a class="J_jia">+</a>
            </p> 
          </span>
          <a href="" class="del-goods">删除</a>
        </div>        
      </div>

      <p style="text-align:right;padding:5px;">共8件商品 合计¥32.50</p>
      <div class="shop-cart-submit">
        <img src="themes/my/images/index_64.png" alt="">
      </div>
    </div>
  </div>
  <div class="side-row">
    <div class="side-body">
      <img src="./themes/my/images/index_13.png" alt="">
      <p>历史订单</p>
    </div>
    <div class="side-box history-list">
      <div class="history-row">
        <p class="history-time">2045.8.9</p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
      </div>
      <div class="history-row">
        <p class="history-time">2045.8.9</p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
      </div>
      <div class="history-row">
        <p class="history-time">2045.8.9</p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
      </div>
      <div class="history-row">
        <p class="history-time">2045.8.9</p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
      </div>
      <div class="history-row">
        <p class="history-time">2045.8.9</p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
        <p>小飞燕红油香辣干<span>3.50 × 1</span></p>
      </div>
    </div>
  </div>
  <div class="side-row">
    <div class="side-body">
      <img src="./themes/my/images/index_22.png" alt="">
      <p>公告栏</p>
    </div>
    <div class="side-box rs-bar">
      <h3>今日优惠：</h3>
      <p>淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试淘迪拜网站今天测试</p>
    </div>
  </div>
  <div class="side-row">
    <div class="side-body">
      <img src="./themes/my/images/index_25.png" alt="">
      <p>建议栏</p>
    </div>
    <div class="side-box jianyilan">
      <textarea name="jianyilan">

      </textarea>
      <div class="jianyilan-btm">
        <h3>限300字内</h3>
        <input type="submit" value="发布">
      </div>
    </div>
  </div>
  <div class="side-row">
    <div class="side-body">
      <img src="./themes/my/images/index_28.png" alt="">
      <p>分享微信</p>
    </div>
    <div class="side-box share-weichat">
      <h2>分享到微信</h2>
      <img src="themes/my/images/index_54.png" alt="">
      <h2>微信扫一扫</h2>
    </div>
  </div>
  <div class="side-row up">
    <a href="javascript:;" onclick="pageScroll()">
      <img src="./themes/my/images/index_03.png" alt="">
      <p>回到顶部</p>
    </a>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="themes/my/css/jqzoom.base.css">
<script type="text/javascript" src="themes/my/js/jquery.jqzoom.js"></script>
<script type="text/javascript" src="themes/my/js/jquery.raty.min.js"></script>
<script type="text/javascript" src="themes/my/js/jqzoom.base.js"></script>
<div class="main">
  <div class="main-list">

    <div class="goods-info">
      <div id="url-route">
        <?php echo $this->fetch('library/ur_here.lbi'); ?>
      </div>
      <div class="goods-left">
        <?php if ($this->_var['pictures']): ?>
        <div id="preview" class="spec-preview"> <span class="jqzoom"><img jqimg="<?php echo $this->_var['pictures']['0']['img_url']; ?>" src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" /></span> </div>
        <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
          <div class="items">
            <ul>
              <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pic');if (count($_from)):
    foreach ($_from AS $this->_var['pic']):
?>
              <li><img alt="" bimg="<?php echo $this->_var['pic']['img_url']; ?>" src="<?php echo $this->_var['pic']['thumb_url']; ?>" onmousemove="preview(this);"></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <div class="goods-right">
        <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
          <div class="goods goods-name">
            <p><?php echo $this->_var['goods']['goods_style_name']; ?></p>
          </div>
          <div class="goods goods-attr">
            <div class="goods-attr-col">
              <label><?php echo $this->_var['lang']['shop_price']; ?></label>
              <span id="goods-price-style"><?php echo $this->_var['goods']['shop_price_formated']; ?></span>
            </div>
            <div class="goods-attr-col">
              <label><?php echo $this->_var['lang']['goods_brand']; ?></label>
              <span><?php echo $this->_var['goods']['goods_brand']; ?></span>
            </div>
            <div class="goods-attr-col">
              <label><?php echo $this->_var['lang']['gb_gift_integral']; ?></label>
              <span>10</span>
            </div>
            <div class="goods-attr-col">
              <label><?php echo $this->_var['lang']['goods_weight']; ?></label>
              <span><?php echo $this->_var['goods']['goods_weight']; ?></span>
            </div>
            <div class="goods-attr-col">
              <label style="float:left;"><?php echo $this->_var['lang']['number']; ?></label>
              
              <p class="num_box" style="margin-top:5px;">
                <a class="J_jian" onclick="goods_cut(<?php echo $this->_var['goods']['goods_id']; ?>)">-</a>
                <label>
                  <input type="text" name="number" id="number_<?php echo $this->_var['goods']['goods_id']; ?>" value="1" size="4" class="num" style="width:25px;text-align:center" onchange="changePrice()" class="J_input" />
                </label>
                <a class="J_jia" onclick="goods_add(<?php echo $this->_var['goods']['goods_id']; ?>)">+</a>
              </p>
              <script type="text/javascript">

               function goods_cut($val){
                var num_val=document.getElementById('number_'+$val);
                var new_num=num_val.value;
                if(isNaN(new_num)){alert('请输入数字');return false}
                var Num = parseInt(new_num);
                if(Num>1)Num=Num-1;
                num_val.value=Num;
                changePrice();
              }

              function goods_add($val){
                var num_val=document.getElementById('number_'+$val);
                var new_num=num_val.value;
                if(isNaN(new_num)){alert('请输入数字');return false}
                var Num = parseInt(new_num);
                Num=Num+1;
                num_val.value=Num;
                changePrice();
              }   
            </script>
          </div>
          <div class="goods-attr-col">
            <label><?php echo $this->_var['lang']['amount']; ?></label>
            <span class="goods-price-style" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['shop_price_formated']; ?></span>
          </div>
        </div>
      </form>
      <div class="goods goods-button">
        <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><div id="buy-now"><?php echo $this->_var['lang']['button_buy']; ?></div></a>
        <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><div id="add-cart"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></div></a>
        <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><div id="collect-goods"><img src="themes/my/images/goods_03.png" alt=""><?php echo $this->_var['lang']['favourable_goods']; ?></div></a>
      </div>
      <div class="goods goods-share">
        <p><?php echo $this->_var['lang']['share_to_friend']; ?></p>
        
        <div id="ckepop">
          <a class="jiathis_button_weixin"><?php echo $this->_var['lang']['wechat']; ?></a> 
          <a href="http://www.jiathis.com/share"  class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"><?php echo $this->_var['lang']['more']; ?></a>
          <a class="jiathis_counter_style"></a>
          <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
        </div> 

        <p>推荐度：</p><div id="fixed"></div><div style="margin:10px;float:left;color:red;">4分</div>
        <script type="text/javascript">
          $('#fixed').raty({
            readOnly:  true,
            start:     4
          });
        </script>
      </div>
      <div class="goods goods-service">

        <div class="service-ob">
          <a href="">
            <img src="themes/my/images/goods_11.png" alt="">
            <p>购物赢积分</p>
          </a>
        </div>

        <div class="service-ob">
          <a href="">
            <img src="themes/my/images/goods_14.png" alt="">
            <p>一小时配送</p>
          </a>
        </div>
        <div class="service-ob">
          <a href="">
            <img src="themes/my/images/goods_16.png" alt="">
            <p>货到付款</p>
          </a>
        </div>
        <div class="service-ob">
          <a href="">
            <img src="themes/my/images/goods_19.png" alt="">
            <p>当面验货</p>
          </a>
        </div>
      </div>
      <div class="goods goods-desc">
        <h4 style="margin:10px;"><?php echo $this->_var['lang']['brief']; ?></h4>
        <p><?php echo $this->_var['goods']['goods_desc']; ?></p>
      </div>
    </div>
  </div>

  
  <div class="index-ad">
    <img src="themes/my/images/index_32.png" alt="">
  </div>
  

  <div class="list-row" style="background-color:#fff;">
    <hr style="border: 2px solid #000;">
    <p class="tuijianname">
      <img src="themes/my/images/goods_21.png" style="margin-bottom: -5px;" alt="">同类产品
    </p>
    <?php $_from = $this->_var['tonglei_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_90668400_1443583384');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_90668400_1443583384']):
?>
    <div class="row-goods">
      <a href="<?php echo $this->_var['goods_0_90668400_1443583384']['url']; ?>"><img src="<?php echo $this->_var['goods_0_90668400_1443583384']['goods_thumb']; ?>" class="goods_list_pic" alt=""></a>
      <div class="goods-point">11积分</div>
      <a href="<?php echo $this->_var['goods_0_90668400_1443583384']['url']; ?>"><p><?php echo $this->_var['goods_0_90668400_1443583384']['goods_name']; ?></p></a>
      <div class="goods-bottom">
        <div class="goods-price"><?php echo $this->_var['goods_0_90668400_1443583384']['shop_price']; ?></div>
        <div class="goods-num-update">
          <div class="goods-num-update-input">
            <input type="text" value="1" width="20px">
          </div>
          <div class="goods-num-update-updown">
            <a href="javascript:;" class="g_jia">∧</a>
            <a href="javascript:;" class="g_jian">∨</a>
          </div>
        </div>
        <div class="add-cart">
          <a href=""><img src="themes/my/images/index_16.png" alt=""></a>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    <p class="tuijianname">
      <img src="themes/my/images/goods_21.png" style="margin-bottom: -5px;" alt="">爆款推荐
    </p>
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_90683600_1443583384');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_90683600_1443583384']):
?>
    <div class="row-goods">
      <a href="<?php echo $this->_var['goods_0_90683600_1443583384']['url']; ?>"><img src="<?php echo $this->_var['goods_0_90683600_1443583384']['thumb']; ?>" class="goods_list_pic" alt=""></a>
      <div class="goods-point">11积分</div>
      <a href="<?php echo $this->_var['goods_0_90683600_1443583384']['url']; ?>"><p><?php echo $this->_var['goods_0_90683600_1443583384']['goods_style_name']; ?></p></a>
      <div class="goods-bottom">
        <div class="goods-price"><?php echo $this->_var['goods_0_90683600_1443583384']['shop_price']; ?></div>
        <div class="goods-num-update">
          <div class="goods-num-update-input">
            <input type="text" value="1" width="20px">
          </div>
          <div class="goods-num-update-updown">
            <a href="javascript:;" class="g_jia">∧</a>
            <a href="javascript:;" class="g_jian">∨</a>
          </div>
        </div>
        <div class="add-cart">
          <a href=""><img src="themes/my/images/index_16.png" alt=""></a>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    <p class="tuijianname">
      <img src="themes/my/images/goods_21.png" style="margin-bottom: -5px;" alt=""><?php echo $this->_var['lang']['view_history']; ?>
    </p>
    <div id='history_div'>
      <div id='history_list'>
        <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
    </div>
    <div class="blank5"></div>
    <script type="text/javascript">
      if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
      {
        document.getElementById('history_div').style.display='none';
      }
      else
      {
        document.getElementById('history_div').style.display='block';
      }
    </script>
  </div>

  
  <div class="index-ad">
    <img src="themes/my/images/index_32.png" alt="">
  </div>
  
</div>
</div>
<script type="text/javascript" src="themes/my/js/common.js"></script>
<script type="text/javascript">
  $(function() {
    $('.row-goods').css('border','1px solid #f00');
    $('.row-goods').css('margin-top','5px');
    $('.row-goods').children('.goods-point').show();
    $('.nav-order').remove();
  });
</script>

<script type="text/javascript">
  var goods_id = <?php echo $this->_var['goods_id']; ?>;
  var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
  var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
  <?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  var goodsId = <?php echo $this->_var['goods_id']; ?>;
  var now_time = <?php echo $this->_var['now_time']; ?>;

  
  onload = function(){
    changePrice();
    fixpng();
    try {onload_leftTime();}
    catch (e) {}
  }

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
 function changePrice()
 {
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
 function changePriceResponse(res)
 {
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>