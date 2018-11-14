<a href="<?= URL::site(Route::get('default')->uri(array('controller'=>'user', 'action'=>'update', 'language'=>'vi', 'id'=>$user->id))) ?>" >Tiếng Việt</a>
<br>
<a href="<?= URL::site(Route::get('user')->uri(array('controller'=>'user', 'action'=>'update', 'language'=>'en', 'id'=>$user->id))) ?>" >Tiếng Anh</a>
<hr>
<br>
<p><?echo __('Hello, :user', array(':user' => $username)); ?> </p>
<hr>
<form method="post" action="">

    <label><?= __('User name:') ?></label>
    <input type="text" name="username" value="<?= $user->name?>" >
    <?php echo isset($errors['username']) ? $errors['username']  : '' ?>
    <br>

    <label><?= __('Email:') ?></label>
    <input type="text" name="email" value="<?= $user->email ?>" >
    <?php echo isset($errors['email']) ?  $errors['email'] : '' ?>
    <br>

    <label><?= __('Phone number:') ?></label>
    <input type="text" name="phonenumber" value="<?= $user->phonenumber ?>" >
    <?php echo isset($errors['phonenumber']) ?  $errors['phonenumber'] : '' ?>
    <br>

    <label><?= __('Date of birth:') ?></label>
    <input type="date" name="date_birthday" value="<?= $user->birthday ?>" >
    <br>

    <label><?= __('Hobby:') ?></label>
    <select name="hobby" >
        <?php foreach($hobbies as $key => $item): ?>
            <option name="<?= $key?>" ><?= $item ?></option>
        <?php endforeach; ?>
    </select>
    <br>

    <input type="submit" name="btn_update" value="<?= __('Update') ?>">

</form>

<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'index', 'language'=>$allowed_lang))); ?>"><?= __('Home') ?></a>
<br>
<a href="<?php echo url::site(Route::get('user')->uri(array('controller'=>'user','action'=> 'create', 'language'=>$allowed_lang))); ?>"><?php echo __('Create') ?></a>