<a href="<?= URL::site(Route::get('default')->uri(array('controller'=>'user', 'action'=>'create', 'language'=>'vi'))) ?>" >Tiếng Việt</a>
<br>
<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'create', 'language'=>'en'))) ?>" >Tiếng Anh</a>
<hr>
<br>
<p><?php echo __('Create New User') ?></p>
<br>
<form method="post" action="">
<lable><?php echo __('User name:'); ?></lable>
<input type="text" name="username" >
<?php echo isset($errors['username']) ? $errors['username']  : '' ?>
<br>
<label><?php echo __('Email:'); ?></label>
<input type="text" name="email" >
<?php echo isset($errors['email']) ?  $errors['email'] : '' ?>
<br>
<label><?php echo __('Phone number:'); ?></label>
<input type="text" name="phonenumber" >
<?php echo isset($errors['phonenumber']) ?  $errors['phonenumber'] : '' ?>
<br>
<label><?php echo __('Date of birth:'); ?></label>
<input type="date" name="date_birthday" >
<br>
<label><?php echo __('Hobby:'); ?></label>
<select name="hobby" >
    <?php foreach($hobbies as $key => $item): ?>
            <option name="<?= $key?>" ><?= $item ?></option>
        <?php endforeach; ?>
</select>
<br>
<input type="submit" name="btn_create" value="<?php echo __('Create'); ?>">
</form>
<a href="<?php echo URL::site(Route::get('default')->uri(array('controller'=>'user', 'action'=>'index', 'language'=> 'en'))) ?>"> <?= __('Home') ?></a>
