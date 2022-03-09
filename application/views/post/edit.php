

<div class="container">
	<h1>Create Post</h1>
	<form action="" method="post">
		<input type="hidden" name="idpost" value="<?= $post['idpost'];?>">
                <div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" id="title" value="<?= $post['title'] ?>">
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<input type="text" name="content" class="form-control" id="content" value="<?= $post['content'] ?>">
				</div>

				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" name="date" class="form-control" id="date" value="<?= $post['date'] ?>">
				</div>

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" value="<?= $post['username'] ?>">
				</div>
                <br>
				<button type="submit" name="edit" class="btn btn-primary float-right">Edit Post</button>
			</form>
</div>