<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Edit Status</h3>
                        <form action="<?php echo URLROOT; ?>/public/statuses/edit/<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">

                           

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="<?= $data['name'] ?>" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['nameerr']))? 'is-invalid': '';  ?>" value=""/>
                                <span class="invalid-feedback"><?php echo $data['nameerr']; ?></span>
                            </div>


                            

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/public/statuses" class="btn btn-light btn-sm rounded-0"><i class="fas fa-backward"></i> Back</a>
                                </div>
                                <div class="col text-end">
                                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>
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