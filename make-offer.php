<?php require_once('./components/navbar.php')?>
			<section class="m-5 mt-0 py-5">
				<header class="">
					<h2 class="text-center text-capitalize">project details</h2>
					<hr />
					<div class="row shadow p-3 text-capitalize">
						<div class="col-12 col-md-4">
							<div class="d-flex flex-column gap-5">
								<div>
									<b>owner:</b>
									<span>owner name</span>
								</div>
								<div>
									<b>title:</b>
									<span>project title</span>
								</div>
								<div>
									<b>posted at:</b>
									<span>2023/1/16</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="d-flex flex-column gap-5">
								<div>
									<b class="d-block text-center">description:</b>
									<span
										>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non soluta
										rerum nihil voluptatibus itaque esse provident molestiae nemo neque
										iusto!</span
									>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="d-flex flex-column gap-5">
								<div>
									<b>delivery time:</b>
									<span>1 month</span>
								</div>
								<div>
									<b>budget:</b>
									<span>500 $</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div>
								<b class="d-block mb-3">needed skills</b>
								<div class="badge bg-danger-subtle text-danger p-2">html</div>
								<div class="badge bg-danger-subtle text-danger p-2">js</div>
								<div class="badge bg-danger-subtle text-danger p-2">css</div>
								<div class="badge bg-danger-subtle text-danger p-2">php</div>
								<div class="badge bg-danger-subtle text-danger p-2">mysql</div>
								<div class="badge bg-danger-subtle text-danger p-2">bootstrap</div>
								<div class="badge bg-danger-subtle text-danger p-2">react</div>
							</div>
						</div>
					</div>
				</header>
				<div class="text-capitalize">
					<form action="" method="post" class="my-5 row border">
						<h2 class="text-center text-capitalize">offer details</h2>
						<hr />
						<div class="row align-items-center g-3">
							<div class="col-2">
								<label for="offer-description" class="col-form-label"
									>offer description</label
								>
							</div>
							<div class="col-9">
								<textarea
									class="form-control"
									id="offer-description"
									name="offer-description"></textarea>
							</div>
						</div>
						<div class="row align-items-center g-3">
							<div class="col-2">
								<label for="delivery-time" class="col-form-label">delivery time</label>
							</div>
							<div class="col-9">
								<input type="date" class="form-control" name="delivery-time" />
							</div>
						</div>
						<div class="row align-items-center g-3">
							<div class="col-2">
								<label for="price" class="col-form-label">price</label>
							</div>
							<div class="col-9">
								<input type="number" class="form-control" name="price" id="price" />
							</div>
						</div>
						<div class="row align-items-center justify-content-center g-3">
							<button class="btn btn-primary mt-3 justify-content-end text-capitalize w-25 my-5">
								make an offer
							</button>
						</div>
						<div class="col-12">
						</div>
					</form>
				</div>
			</section>
<?php require_once('./components/footer.php')?>