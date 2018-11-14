<a href="<?= URL::site(Route::get('default')->uri(array('controller'=>'welcome', 'action'=>'index', 'language'=>'vi'))) ?>" >Tiếng Việt</a>
<br>
<a href="<?= URL::site(Route::get('default')->uri(array('controller'=>'welcome', 'action'=>'index', 'language'=>'en'))) ?>" >Tiếng Anh</a>
<hr>
<br>
<h1><?php echo __('Home Page')?></h1>
<a href="<?php echo url::site(Route::get('default')->uri(array('controller'=>'user','action'=> 'index','language'=>'en' ))); ?>"> <?= __('Go to user page'); ?> </a>