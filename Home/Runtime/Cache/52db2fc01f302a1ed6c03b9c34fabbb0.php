<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul>
    <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="a-top col-md-12 col-md-6 col-lg-6">
			<div class="newleft">
		       <div class="left-grid">
			       	<h6><?php echo ($vo["name"]); ?>技术研发</h6>
			        <img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" class="img-responsive">
		       </div>
		       <div class="right-grid">
			        <h4>
				        <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new','lang'=>'c'));?>">
				        <?php echo (mb_substr($vo["title"],0,16,'utf-8')); ?></a>
				    </h4>
			        <p><?php echo (mb_substr($vo["contents"],0,80,'utf-8')); ?></p>
		       </div>
		    </div>
	    </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul><?php endif; ?>