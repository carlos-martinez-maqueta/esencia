<?php include 'app/components/header.php';

$folderHomeObj = Folder::getFolderHome();

?>

<?php include 'app/components/sidebar.php'; ?>
<?php include 'app/components/topbar.php'; ?>

<div class="container-fluid px-4">
    <form id="edit-home" method="POST" enctype="multipart/form-data">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two">Management Home</h1>
            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>

        </div>

        <div class="row mb-5">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="col-12 mb-2 d-flex justify-content-between">
                    <label for="exampleInputEmail1" class="form-label font_three">Banner</label>
                </div>
                <div class="col-12 mb-3 row">
                    <div class="col-xl-6 col-md-12 p-4">
                        <div>
                            <img src="files/home/<?= $folderHomeObj->banner ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 p-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Edit home banner</h4>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="usuario_id">
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Select Image</label>
                                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" aria-label="Select File">
                                </div>
                                <div class="mb-3 text-center d-flex justify-content-center">
                                    <img id="imagenPrevia" class="img-fluid" style="max-height: 300px; display: none;">
                                    <div id="sinImagen" class="alert alert-danger" role="alert" style="display: none;">No image selected</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 d-flex justify-content-between">
                    <label for="exampleInputEmail1" class="form-label font_three">Text we</label>
                </div>
                <div class="col-12 mb-3">
                    <textarea class="form-control" name="short_text_about" id="summer" cols="30" rows="5"><?= $folderHomeObj->short_text_about ?></textarea>
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="location" value="<?= $folderHomeObj->location ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" value="<?= $folderHomeObj->phone ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= $folderHomeObj->email ?>">
                </div>
            </div>
        </div>
    </form>

</div>

<?php include 'app/components/loading.php'; ?>
<?php include 'app/components/footer.php'; ?>
<script src="assets/js/imagen-previa.js"></script>
<script src="assets/js/folder/home/edit-home.js"></script>