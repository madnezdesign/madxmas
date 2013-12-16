<?php if($content['created']): ?>
  <h2>Edit Content</h2>
  <p>You can edit and save this content.</p>
<?php else: ?>
  <h2>Create Content</h2>
  <p>Create new content.</p>
<?php endif; ?>


<?=$form->GetHTML(array('class'=>'content-edit'))?>

<p class='smaller-text'><em>
<?php if($content['created']): ?>
  This content were created by <?=$content['owner']?> at <?=$content['created']?>.
<?php else: ?>
  Content not yet created.
<?php endif; ?>

<?php if(isset($content['updated'])):?>
  Last updated at <?=$content['updated']?>.
<?php endif; ?>
</em></p>

<p>
<a href='<?=create_url('content', 'create')?>'>Create new</a>
<a href='<?=create_url('page', 'view', $content['id'])?>'>View</a>
<a href='<?=create_url('content')?>'>View all</a>
</p>