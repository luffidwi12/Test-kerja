<div class="container">
	
	<a href="<?= base_url('post/create') ?>" class="btn btn-primary">Create Post</a>
	<br><br>
	<table class="table table-striped table-hover">
	    <tr>
	        <th>NO</th>
	        <th>TITLE</th>
	        <th>CONTENT</th>
	        <th>DATE</th>
	        <th>USERNAME</th>
	        <th>ACTION</th>
	    </tr>

	    <?php $i = 1; ?>
	    <?php foreach($post as $ps): ?>
	    	<tr>
	    		<td><?= $i; ?></td>
	    		<td><?= $ps['title']; ?></td>
	    		<td><?= $ps['content']; ?></td>
	    		<td><?= $ps['date']; ?></td>
	    		<td><?= $ps['username']; ?></td>
	    		<td>
	    			<a href="<?= base_url(); ?>post/edit/<?= $ps['idpost']; ?>" class="btn btn-warning">Edit</a>
	    			<a href="<?= base_url(); ?>post/delete/<?= $ps['idpost']; ?>" class="btn btn-danger">Delete</a>
	    		</td>
	    	</tr>
	    	<?php $i++ ?>
	    	<?php endforeach; ?>
</div>

