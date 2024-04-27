<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash('category_success'); ?>

        <div class="row">
            <div class="col-md-6">
                <h3>Categories</h3>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT;?>/public/categories/create" class="btn btn-primary btn-sm rounded-0 float-end">Add Status</a>
            </div>
        </div>
        <?php foreach($data['categories'] as $category): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $category->originalname ?></h5>
                    <p class="small">post by <?php echo $category->name ?></span></p>
                    <p class="small">category date <?php echo $category->publicdate ?></span></p>
                </div>
                <div class="card-footer">
                    <div class="d-flex float-end">
                        <?php if($category->user_id === $_SESSION['user_id']) : ?>
                        <div>
                            <form action="<?php echo URLROOT; ?>/public/categories/destroy/<?php echo $category->categoryid; ?>" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete" />
                            </form>
                        </div>
                        <div class="mx-3">
                            <a href="<?php echo URLROOT; ?>/public/categories/edit/<?php echo $category->categoryid ?>" class="btn btn-primary btn-sm rounded-0">Edit</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>