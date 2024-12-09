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
        <!-- <?php foreach($data['posts'] as $post): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo substr($post->title,0,50); ?></h5>
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
        <?php endforeach ?> -->

        <?php foreach($data['posts'] as $post): ?>
            <div class="card rounded-0 mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo substr($post['title'],0,50); ?></h5>
                    <p class="small">post by <?php echo $post['name'] ?></span></p>
                    <p class="small">post date <?php echo $post['publicdate'] ?></span></p>
                </div>
                <div class="card-footer">
                    <div class="d-flex float-end">
                        <?php if($post['user_id'] === $_SESSION['user_id']) : ?>
                        <div>
                            <form action="<?php echo URLROOT; ?>/public/posts/destroy/<?php echo $post['postid']; ?>" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm rounded-0" value="Delete" />
                            </form>
                        </div>
                        <div>
                            <a href="<?php echo URLROOT; ?>/public/posts/edit/<?php echo $post['postid'] ?>" class="btn btn-primary btn-sm rounded-0">Edit</a>
                        </div>
                        <?php endif; ?>
                        <div>
                            <a href="<?php echo URLROOT; ?>/public/posts/show/<?php echo $post['postid'] ?>" class="btn btn-success btn-sm rounded-0">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

        <!-- Start Pagination  -->
        <nav>
            <ul class="pagination">
                <?php if($data['page'] > 1): ?>
                <li class="page-item">
                    <a href="?page=<?php echo $data['page'] - 1; ?>" class="page-link">Previous</a>
                </li>
                <?php endif; ?>
                <?php for($x = 1; $x <= $data['totalpages']; $x++): ?> 
                    <li class="page-item">
                        <a href="?page=<?php echo $x; ?>" class="page-link">
                            <?php echo $x; ?>
                        </a>
                    </li>
                <?php endfor; ?>
                <?php if($data['page'] < $data['totalpages']): ?>
                 <li class="page-item">
                    <a href="?page=<?php echo $data['page']+1; ?>" class="page-link">Next</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- End Pagination  -->
    </div>
</section>

<?php require APPROOT.'/views/layout/footer.php'; ?>