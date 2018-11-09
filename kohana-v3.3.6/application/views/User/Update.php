<p>Update User </p>
<hr>
<form method="post" action="">
    <label>User name: </label>
    <input type="text" name="username" value="<?= $user->name?>" >
    <br>
    <label>Email </label>
    <input type="text" name="email" value="<?= $user->email ?>" >
    <br>
    <input type="submit" name="btn_update" value="Update">
</form>