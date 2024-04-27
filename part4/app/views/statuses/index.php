<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash('status_success'); ?>

        <div class="row">
            <div class="col-md-6">
                <h3>Statuses</h3>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT;?>/public/statuses/create" class="btn btn-primary btn-sm rounded-0 float-end">Add Status</a>
            </div>
        </div>
        <?php foreach($data['statuses'] as $status): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $status->originalname ?></h5>
                    <p class="small">post by <?php echo $status->name ?></span></p>
                    <p class="small">status date <?php echo $status->publicdate ?></span></p>
                </div>
                <div class="card-footer">
                    <div class="d-flex float-end">
                        <?php if($status->user_id === $_SESSION['user_id']) : ?>
                        <div>
                            <form action="<?php echo URLROOT; ?>/public/statuses/destroy/<?php echo $status->statusid; ?>" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete" />
                            </form>
                        </div>
                        <div class="mx-3">
                            <a href="<?php echo URLROOT; ?>/public/statuses/edit/<?php echo $status->statusid ?>" class="btn btn-primary btn-sm rounded-0">Edit</a>
                        </div>
                        <?php endif; ?>
                        <div>
                            <a href="<?php echo URLROOT; ?>/public/statuses/show/<?php echo $status->statusid ?>" class="btn btn-success btn-sm rounded-0">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>