<?php require_once('./components/navbar.php'); ?>
<div class="container">
    <header class="text-capitalize my-5">

        <h1 class="text-decoration-underline text-center">discover all offers</h1>
    </header>
    <table class="table table-bordered text-center ">
        <thead>
            <tr>
                <th>avatar</th>
                <th>name</th>
                <th>offer description</th>
                <th>delivery time</th>
                <th>price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="bg-secondary">
                    <img src="./assets/images/5907.jpg" alt="freelancer-image" class="img-fluid rounded-circle " style="width: 50px;">
                </td>
                <td>
                    <div class="d-flex flex-column gap-3 ">
                        <strong>name</strong>
                        <p>join date</p>
                    </div>
                </td>
                <td>this is an offer description ...</td>
                <td>
                    2023-12-30
                </td>
                <td> 500 $</td>
                <td> <a href="./offer-details.php" class="btn btn-sm btn-primary text-capitalize">details</a></td>
            </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
</div>

<?php require_once('./components/footer.php'); ?>