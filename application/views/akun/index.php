<div class="container">
	
	<a href="<?= base_url('akun/create') ?>" class="btn btn-primary">Create Account</a>
	<br><br>
	<table class="table table-striped table-hover">
	    <tr>
	        <th>NO</th>
	        <th>USERNAME</th>
	        <th>PASSWORD</th>
	        <th>NAME</th>
	        <th>ROLE</th>
	        <th>ACTION</th>
	    </tr>

	    <?php $i = 1; ?>
	    <?php foreach($akun as $ac): ?>
	    	<tr>
	    		<td><?= $i; ?></td>
	    		<td><?= $ac['username']; ?></td>
	    		<td><?= $ac['password']; ?></td>
	    		<td><?= $ac['name']; ?></td>
	    		<td><?= $ac['role']; ?></td>
	    		<td>
	    			<a href="<?= base_url(); ?>akun/edit/<?= $ac['id']; ?>" class="btn btn-warning">Edit</a>
	    			<a href="<?= base_url(); ?>akun/delete/<?= $ac['id']; ?>" class="btn btn-danger">Delete</a>
	    		</td>
	    	</tr>
	    	<?php $i++ ?>
	    	<?php endforeach; ?>
</div>

