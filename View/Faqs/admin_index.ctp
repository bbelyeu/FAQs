<div class="faqs index">
	<h2><?php echo __('FAQs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question');?></th>
			<th><?php echo $this->Paginator->sort('answer');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($faqs as $faq): ?>
	<tr>
		<td><?php echo h($faq['Faq']['id']); ?>&nbsp;</td>
		<td><?php echo h($faq['Faq']['question']); ?>&nbsp;</td>
		<td><?php echo h($faq['Faq']['answer']); ?>&nbsp;</td>
		<td><?php echo h($faq['Faq']['created']); ?>&nbsp;</td>
		<td><?php echo h($faq['Faq']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), '/admin/faqs/view/'.$faq['Faq']['id']); ?>
			<?php echo $this->Html->link(__('Edit'), '/admin/faqs/edit/'.$faq['Faq']['id']); ?>
			<?php echo $this->Form->postLink(__('Delete'), '/admin/faqs/delete/'.$faq['Faq']['id'], null, __('Are you sure you want to delete # %s?', $faq['Faq']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Faq'), '/admin/faqs/add'); ?></li>
	</ul>
</div>
