<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">
        <div class="row">
            <div class="mb-3">
                <a href="<?php echo URLROOT; ?>/public/posts"><i class="fas fa-backward"></i> Back</a>
            </div>
            <div class="col-md-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <!-- <h3 class="card-title"><?php echo $data['post']->title ?></h3> -->
                        <h3 class="card-title"><?php echo $data['post']['title'] ?></h3>
                        <p>post by : <span class="fw-bold"><?php echo $data['user']['name']; ?></span></p>
                        <p>post date : <span class="fw-bold"><?php echo $data['post']['created_at']; ?></span></p>
                        <hr/>
                        <p><?php echo $data['post']['content'] ?></p>
                        
                    </div>
                    <?php if($data['post']['user_id'] === $_SESSION['user_id']): ?>
                    <div class="card-footer">
                        <div class="d-flex float-end">
                            <div>
                                <form class="" action="<?php echo URLROOT; ?>/public/posts/destroy/<?php echo $data['post']['id'] ?>" method="POST">
                                    <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete" />
                                </form>
                            </div>
                            <div>
                                <a href="<?php echo URLROOT; ?>/public/posts/edit/<?php echo $data['post']['id']; ?>" class="btn btn-primary btn-sm rounded-0">Edit</a>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>