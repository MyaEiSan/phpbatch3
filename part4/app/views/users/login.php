<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-4 mx-auto py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Login Form</h3>
                        <form action="<?php echo URLROOT; ?>/public/users/login" method="POST">

                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['emailerr']))? 'is-invalid': '';  ?>"/>
                                <span class="invalid-feedback"><?php echo $data['emailerr']; ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['passworderr']))? 'is-invalid': '';  ?>"/>
                                <span class="invalid-feedback"><?php echo $data['passworderr']; ?></span>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/public/users/register">Not yet register? Register Here</a>
                                </div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Login</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>