<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Create New Status</h3>
                        <form action="<?php echo URLROOT; ?>/public/categories/create" method="POST" >

                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="<?= $data['name'] ?>" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['nameerr']))? 'is-invalid': '';  ?>" value=""/>
                                <span class="invalid-feedback"><?php echo $data['nameerr']; ?></span>
                            </div>

                            <div class="form-group mb-3">
                                <label for="status_id">Status</label>
                                <select name="status_id" id="status_id" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['status_iderr']))? 'is-invalid': '';  ?>" >//
                                    <option selected disabled>Choose Status</option>
                                    <?php foreach($data['statuses'] as $status): ?>
                                        <option value="<?php echo $status->statusid; ?>"><?php echo $status->originalname; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="invalid-feedback"><?php echo $data['status_iderr']; ?></span>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/public/categories" class="btn btn-light btn-sm rounded-0"><i class="fas fa-backward"></i>Back</a>
                                </div>
                                <div class="col text-end">
                                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>
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