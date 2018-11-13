<h1><?php echo __('Home Page')?></h1>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'index'))); ?>"> <?= __('Go to user page'); ?> </a>