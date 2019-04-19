<?php if (!defined('THINK_PATH')) exit(); if(is_array($recordData)): foreach($recordData as $key=>$record): ?><tr>
    <?php $img = $self["img"]; $nickname = $self["nickname"]; $isQunZhu = false; if($type == 1) { $img = $users[$record["id"]]["img"]; $nickname = $users[$record["id"]]["nickname"]; $isQunZhu = $record["fromuid"] == $self["id"]; } ?>
	<td><img src="<?php if(($type == 2 && $record["settlementtype"] == 1) || $type == 1): echo ($img); else: echo ($record["userimg"]); endif; ?>" /></td>
	<td>
    <?php if($type == 2 || $type == 0): ?>系统
	<?php else: ?>
		<?php echo ($nickname); endif; ?>
  	</td>
    <td>
	<?php if($type == 2): if($record["settlementtype"] == 2): ?>福利
        <?php else: ?>
          	游戏<?php endif; ?>
	<?php else: ?>
		<?php if($type == 0): if($record["number"] <= 0): ?>下分
			<?php else: ?>
				上分<?php endif; ?>
		<?php else: ?>
			<?php if($record["credits"] < 0): if($isQunZhu): ?>上分<?php else: ?>下分<?php endif; ?>
			<?php else: ?>
				<?php if($isQunZhu): ?>下分<?php else: ?>上分<?php endif; endif; endif; endif; ?>
  	</td>
	<?php if($type == 0): ?><td class="<?php if($record["number"] <= 0): ?>trend-green<?php else: ?>trend-red<?php endif; ?>"><?php echo ($record["number"]); ?></td>
	<?php elseif($type == 1): ?>
      	<?php $trendClass = "trend-red"; $trendVal = intval($record["credits"]); $trend = "+" . abs($trendVal); if($isQunZhu) { if(1 == $record["type"]) { $trendClass = "trend-green"; $trend = "-" . abs($trendVal); } } else { $trend = ($trendVal > 0 ? "+" : "-") . abs($trendVal); } ?>
		<td class="<?php echo ($trendClass); ?>"><?php echo ($trend); ?></td>
	<?php else: ?>
		<td class="<?php if($record["jifen"] <= 0): ?>trend-green<?php else: ?>trend-red<?php endif; ?>">
          	<?php echo ($record["jifen"] > 0 ? "+" : "-") . abs($record["jifen"]); ?>
      	</td><?php endif; ?>
	<?php if($type == 0): ?><td><?php echo (date("m-d H:i", $record["create_time"])); ?></td>
	<?php elseif($type == 1): ?>
		<td><?php echo (date("m-d H:i",$record["createtime"])); ?></td>
	<?php else: ?>
		<td><?php echo (date("m-d H:i",$record["overtime"])); ?></td><?php endif; ?>
  </tr><?php endforeach; endif; ?>