<?php require_once('./components/navbar.php') ?>
<div class="container border card rounded p-5 m-5">
    <h1 class="text-center text-capitalize">signup form</h1>
    <hr>
    <form action="signup.php" method="post" class="row g-3 mt-5 text-capitalize">
        <div class="col-12">
            <label for="full-name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullName" id="full-name" placeholder="Ali Hossain Ali Bin Shoaib" required>
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="col-md-6">
            <label for="birth-date" class="form-label">Birth Date</label>
            <input class="form-control" type="date" name="birthDate" id="birth-date" min="1940-01-01" max="2010-01-01" required>

        </div>


        <div class="col-12">
            <label for="user-type" class="form-label m-3 ">type</label>
            <div class="form-check">

                <input class="form-check-input" type="radio" name="user-type" id="freelancer" value="freelancer">
                <label class="form-check-label" for="freelancer">
                    freelancer
                </label>
            </div>
            <div class="form-check">

                <label class="form-check-label" for="project-owner">
                    <input class="form-check-input" type="radio" name="user-type" id="project-owner" value="project-owner">
                    project-owner
                </label>

            </div>
        </div>
        <div class="col-12">
            <button class="form-control btn btn-primary fw-bold text-capitalize" type="submit">submit</button>
        </div>
    </form>
    <div class="container-fluid my-2">
        <p class="w-25 mx-auto">already have an account? <a href="./login.php">login</a></p>
    </div>
</div><?php require_once('./components/footer.php') ?>