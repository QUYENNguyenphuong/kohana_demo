<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index', 'language'=>'vi'))) ?>" >Tiếng Việt</a>
<br>
<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index', 'language'=>'en'))) ?>" >Tiếng Anh</a>
<hr>
<br>
<h2><i><?php echo __('USER LIST') ?></i></h2>
<?php foreach ($users as $user): ?>
<h3><?= $user->name ?></h3>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'update','language'=>$allowed_lang,'id'=> $user->id))); ?>"><?php echo __('Update') ?></a>
<hr>
<br>
<?php endforeach; ?>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create', 'language'=>$allowed_lang))); ?>"><?php echo __('Create') ?></a>
<br>
<a href="<?php echo url::site(Route::get('default')->uri(array('controller'=>'welcome','action'=> 'index', 'language'=>$allowed_lang))); ?>"><?php echo __('Home Page') ?></a>