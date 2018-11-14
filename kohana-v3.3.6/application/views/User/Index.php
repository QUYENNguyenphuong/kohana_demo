<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index', 'language'=>'vi'))) ?>" >Tiếng Việt</a>
<br>
<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'index', 'language'=>'en'))) ?>" >Tiếng Anh</a>
<hr>
<br>
<h2><i><?php echo __('USER LIST') ?></i></h2>
<?php foreach ($users as $user): ?>
<h3><?= $user->name ?></h3>
    <?php if($allowed_lang == 'en'): ?>
        <a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'update','language'=>$allowed_lang,'id'=> $user->id))); ?>"><?php echo __('Update') ?></a>
    <?php endif; ?>
    <?php if ($allowed_lang == 'vi'): ?>
        <a href="<?php echo url::site(Route::get('default')->uri(array('controller'=>'user','action'=> 'update','language'=>$allowed_lang,'id'=> $user->id))); ?>"><?php echo __('Update') ?></a>
    <?php endif; ?>
<hr>
<br>
<?php endforeach; ?>
<?php if($allowed_lang == 'en'): ?>
    <a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create', 'language'=>$allowed_lang))); ?>"><?php echo __('Create') ?></a>
<?php endif; ?>
<?php if($allowed_lang == 'vi'): ?>
    <a href="<?php echo url::site(Route::get('default')->uri(array('controller'=>'user','action'=> 'create', 'language'=>$allowed_lang))); ?>"><?php echo __('Create') ?></a>
<?php endif; ?>

<br>
<a href="<?php echo url::site(Route::get('default')->uri(array('controller'=>'welcome','action'=> 'index', 'language'=>$allowed_lang))); ?>"><?php echo __('Home Page') ?></a>