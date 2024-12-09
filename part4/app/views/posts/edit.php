<?php require APPROOT.'/views/layout/header.php'; ?>

<section class="col-md-12 mx-auto py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Edit Post</h3>
                        <form action="<?php echo URLROOT; ?>/public/posts/edit/<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" value="<?= $data['image'] ?>" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['imageerr']))? 'is-invalid': '';  ?>" />
                                    <span class="invalid-feedback"><?php echo $data['imageerr']; ?></span>
                                    <input type="hidden" name="old_image" value="<?php echo $data["image"]; ?>" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" value="<?= $data['title'] ?>" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['titleerr']))? 'is-invalid': '';  ?>" value=""/>
                                    <span class="invalid-feedback"><?php echo $data['titleerr']; ?></span>
                                </div>


                                <div class="form-group mb-3">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" class="form-control form-control-sm rounded-0 <?php echo (!empty($data['contenterr']))? 'is-invalid': '';  ?>" rows="3"><?php echo $data['content']; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $data['contenterr']; ?></span>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" class="form-select rounded-0 <?php echo (!empty($data['category_iderr']))? 'is-invalid': '';  ?>">
                                        <option disabled >Choose Category</option>
                                        <?php foreach($data['categories'] as $category): ?>
                                            
                                            <option value="<?= $category->categoryid; ?>" <?php if($category->categoryid == $data['category_id']) echo 'selected'; ?>><?= $category->originalname; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="status_id">Status</label>
                                    <select name="status_id" class="form-select rounded-0 <?php echo (!empty($data['status_iderr']))? 'is-invalid': '';  ?>">
                                        <option disabled>Choose Status</option>
                                        <?php foreach($data['statuses'] as $status): ?>
                                            <option value="<?= $status->statusid; ?>" <?php if($status->statusid == $data['status_id'])echo 'selected'; ?>><?= $status->originalname; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo URLROOT; ?>/public/posts" class="btn btn-light btn-sm rounded-0"><i class="fas fa-backward"></i> Back</a>
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