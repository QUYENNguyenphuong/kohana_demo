<label><?php echo __('USER LIST') ?></label>
<?php foreach ($users as $user): ?>
<h3><?= $user->name ?></h3>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'update','id'=> $user->id))); ?>"><?php echo __('Update') ?></a>
<hr>
<br>
<?php endforeach; ?>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create'))); ?>"><?php echo __('Create') ?></a>
