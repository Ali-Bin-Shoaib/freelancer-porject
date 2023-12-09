<?php include './components/navbar.php'; ?>

</div>
<header>
	<h1 class="text-capitalize text-center my-5 text-decoration-underline p-3">
		discover all projects
	</h1>
</header>
<div class="row">
	<div class="col-12 my-5 text-center">
		<img src="./assets/images/pexels-pixabay-38568.jpg" alt="pexels-pixabay" class="card-img w-50 mx-auto rounded-5">
	</div>
	<table class="table table-striped text-capitalize text-center table-bordered table-hover rounded-5">
		<thead>
			<tr>
				<td>#</td>
				<td>owner</td>
				<td>title</td>
				<td>type</td>
				<td>status</td>
				<td>posted date</td>
				<td>needed skills</td>
				<td>offers</td>
				<td>expected delivery time</td>
				<td>price</td>
				<td>action</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>ali</td>
				<td>website</td>
				<td>web development</td>
				<td>open</td>
				<td>2023/11/12</td>
				<td>
					<div class="row g-1 gap-1 row-cols-4">
						<div class="badge bg-danger-subtle text-danger p-1">html</div>
						<div class="badge bg-danger-subtle text-danger p-1">css</div>
						<div class="badge bg-danger-subtle text-danger p-1">js</div>
						<div class="badge bg-danger-subtle text-danger p-1">php</div>
						<div class="badge bg-danger-subtle text-danger p-1">mysql</div>
					</div>
				</td>
				<td>3</td>
				<td>3 months</td>
				<td>$500</td>
				<td class="py-2 p-0">
					<div class="btn-group-sm">
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./project-details.php">details</a>
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./make-offer.php">make offer</a>
					</div>
				</td>
			</tr>
			<tr>
				<td>1</td>
				<td>ali</td>
				<td>website</td>
				<td>web development</td>
				<td>open</td>
				<td>2023/11/12</td>
				<td>
					<div class="row g-1 gap-1 row-cols-4">
						<div class="badge bg-danger-subtle text-danger p-1">html</div>
						<div class="badge bg-danger-subtle text-danger p-1">css</div>
						<div class="badge bg-danger-subtle text-danger p-1">js</div>
						<div class="badge bg-danger-subtle text-danger p-1">php</div>
						<div class="badge bg-danger-subtle text-danger p-1">mysql</div>
					</div>
				</td>
				<td>3</td>
				<td>3 months</td>
				<td>$500</td>
				<td class="py-2 p-0">
					<div class="btn-group-sm">
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./project-details.php">details</a>
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./make-offer.php">make offer</a>
					</div>
				</td>
			</tr>
			<tr>
				<td>1</td>
				<td>ali</td>
				<td>website</td>
				<td>web development</td>
				<td>open</td>
				<td>2023/11/12</td>
				<td>
					<div class="row g-1 gap-1 row-cols-4">
						<div class="badge bg-danger-subtle text-danger p-1">html</div>
						<div class="badge bg-danger-subtle text-danger p-1">css</div>
						<div class="badge bg-danger-subtle text-danger p-1">js</div>
						<div class="badge bg-danger-subtle text-danger p-1">php</div>
						<div class="badge bg-danger-subtle text-danger p-1">mysql</div>
					</div>
				</td>
				<td>3</td>
				<td>3 months</td>
				<td>$500</td>
				<td class="py-2 p-0">
					<div class="btn-group-sm">
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./project-details.php">details</a>
						<a class="btn btn-sm btn-secondary text-capitalize small my-1 text-white" href="./make-offer.php">make offer</a>
					</div>
				</td>
			</tr>
		</tbody>
		<!-- <tfoot>
                </tfoot> -->
	</table>
	<?php include './components/footer.php'; ?>