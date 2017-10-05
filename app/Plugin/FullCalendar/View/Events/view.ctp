<?php
/*
 * View/Events/view.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events view">
<legend>
<h2><?php echo __('Event'); ?></h2></legend>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Event Type'); ?></h3>
		<p<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $this->Html->link($event['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id'])); ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Title'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['title']; ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Details'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['details']; ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Status'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['status']; ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Start'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['start']; ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('End'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] != 1) { echo $event['Event']['end']; } else { echo "N/A"; } ?></p>
                <h3 <?php if ($i % 2 == 0) echo $class;?>><?php echo __('All Day'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] == 1) { echo "Yes"; } else { echo "No"; } ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['created']; ?></p>
		<h3<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></h3>
		<p style="color:#337ab7;"<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['modified']; ?></p>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event', true), array('plugin' => 'full_calendar', 'action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event', true), array('plugin' => 'full_calendar', 'action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete this %s event?', true), $event['EventType']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'action' => 'index')); ?> </li>
		<li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
	</ul>
</div>
