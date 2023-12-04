<?php require_once('./components/navbar.php') ?>
<div class="container border card rounded m-5 p-5">
	<form action="login.php" class=" p-5" method="post">
		<h1 class="text-capitalize text-center mb-5">login</h1>
		<div class="row px-5">
			<div class="col">
				<input type="text" class="form-control" placeholder="Username" name="username" id="username" />
			</div>
			<div class="col">
				<input type="password" class="form-control" placeholder="password" />
			</div>

		</div>
		<div class="row justify-content-center mt-5">
			<button class="btn btn-primary w-50">login</button>
			
		</div>
		<div class="container-fluid my-2">
			<p class="w-25 mx-auto">don't have an account? <a href="./signup.php">signup</a></p>
		</div>
	</form>
</div>
<?php require_once('./components/footer.php') ?>