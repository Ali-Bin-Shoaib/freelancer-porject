<?php
require_once('./components/navbar.php') ?>
<section class="m-5 mt-0 py-5">
	<header class="d-flex justify-content-between">
		<h1 class="text-capitalize text-center my-5 text-decoration-underline p-3">
			owner
		</h1>
		<h1 class="text-capitalize text-center my-5 text-decoration-underline p-3">
			project title
		</h1>
		<div class="row row-cols-1 gy-5 text-capitalize fw-bold align-items-center ">
			<div class="col">
				<div>created at</div>
				<div class="text-decoration-underline">2023/11/12</div>
			</div>
			<div class="col">
				<div>status</div>
				<div class="badge fs-6 bg-success">open</div>
			</div>
		</div>
	</header>

	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">type: </b>
		<p class="col-8">web development</p>
	</div>
	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">description: </b>
		<p class="col-8">
			a freelancer website allow employers to post their projects and freelancer
			see what project he can do and make an offer to the project owner and then
			project owner can accepts's the best offer
		</p>
	</div>
	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">needed skills: </b>
		<div class="col-8">
			<div class="badge bg-danger-subtle text-danger p-2">html</div>
			<div class="badge bg-danger-subtle text-danger p-2">js</div>
			<div class="badge bg-danger-subtle text-danger p-2">css</div>
			<div class="badge bg-danger-subtle text-danger p-2">php</div>
			<div class="badge bg-danger-subtle text-danger p-2">mysql</div>
			<div class="badge bg-danger-subtle text-danger p-2">bootstrap</div>
			<div class="badge bg-danger-subtle text-danger p-2">react</div>
		</div>
	</div>
	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">offers: </b>
		<div class="col-8">
			<ol>
				<li>freelancer:</li>
				<li>freelancer:</li>
				<li>freelancer:</li>
			</ol>
		</div>
	</div>
	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">expected delivery time: </b>
		<p class="col-8">3 months</p>
	</div>
	<div class="row row-cols-2 text-capitalize py-3 align-items-center border-bottom">
		<b class="col-2">budget: </b>
		<p class="col-8">500 $</p>
	</div>
	<div class="text-end">
		<a class="btn btn-primary mt-3 justify-content-end text-capitalize" href="make-offer.php">
			make an offer
		</a>
	</div>
</section>
<?php
require_once('./components/footer.php') ?>