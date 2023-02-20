<div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo isset($user['username']) ? $user['username'] : '' ?>">
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password">
</div>
<button type="submit" class="btn btn-primary mt-2">Submit</button>