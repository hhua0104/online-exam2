<ul class="nav nav-tabs nav-stacked">	<li<?php if($this->tpl_var['method'] == 'index'){ ?> class="active"<?php } ?>>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master">首页</a>	</li>	<li<?php if($this->tpl_var['method'] == 'orders'){ ?> class="active"<?php } ?>>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-orders">订单管理</a>	</li>	<li<?php if($this->tpl_var['method'] == 'coupon'){ ?> class="active"<?php } ?>>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-coupon">代金券管理</a>	</li></ul>