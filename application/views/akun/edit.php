

<div class="container">
	<h1>Create Akun</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $account['id'];?>">
                <div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" value="<?= $account['username']?>">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control" id="password" value="<?= $account['password']?>">
				</div>

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" value="<?= $account['name']?>">
				</div>

				<div class="form-group">
					<label for="role">Role</label>
					<input type="text" name="role" class="form-control" id="role" value="<?= $account['role']?>">
				</div>
                <br>
				<button type="submit" name="edit" class="btn btn-primary float-right">Edit Akun</button>
			</form>
</div>