<label> User Account </label>
<?php foreach ($users as $user): ?>
<lable>User Name: </lable>
<input type="text" value="<?= $user->name?>">
<br>
<lable>User Name: </lable>
<input type="text" value="<?= $user->name?>">
<?php endforeach; ?>
