<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">

        <?php flash('post_success'); ?>

        <div class="row">
            <div class="col-md-6">
                <h3>Posts</h3>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT;?>/public/posts/create" class="btn btn-primary btn-sm rounded-0 float-end">Add Post</a>
            </div>
        </div>
        <?php foreach($data['posts'] as $post): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->title ?></h5>
                    <p class="small">post by <?php echo $post->name ?></span></p>
                    <p class="small">post date <?php echo $post->publicdate ?></span></p>
                </div>
                <div class="card-footer">
                    <div class="d-flex float-end">
                        <?php if($post->user_id === $_SESSION['user_id']) : ?>
                        <div>
                            <form action="<?php echo URLROOT; ?>/public/posts/destroy/<?php echo $post->postid; ?>" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete" />
                            </form>
                        </div>
                        <div>
                            <a href="<?php echo URLROOT; ?>/public/posts/edit/<?php echo $post->postid ?>" class="btn btn-primary btn-sm rounded-0">Edit</a>
                        </div>
                        <?php endif; ?>
                        <div>
                            <a href="<?php echo URLROOT; ?>/public/posts/show/<?php echo $post->postid ?>" class="btn btn-success btn-sm rounded-0">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>