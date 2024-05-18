<?php include 'app/components/header.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $spaceObj = Folder::getFolderSpaceId($id);
} else {

    session_start();
    session_destroy();
    header('Location: ../login-admin');
    exit;
}
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>


<!-- <i class='bx bxs-calendar'></i> -->
<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Space Details Management</h1>
        <div class="d-flex">
            <a href="management-space" class="btn btn-dark d-flex align-items-center gap-2 me-2"><i class='bx bx-arrow-back'></i> Back</a>
            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>
        </div>
    </div>


    <div class="row mb-5">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="col-12 mb-2 d-flex justify-content-between">
                <label for="exampleInputEmail1" class="form-label font_three">Image Main</label>
            </div>
            <div class="col-12 mb-3 row">
                <div class="col-xl-6 col-md-12 p-4">
                    <div>
                        <img src="files/space/<?= $spaceObj->main_image ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 p-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Edit Image</h4>
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
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">Name Space</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?= $spaceObj->name ?>">
            </div>
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">Location</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="location" value="<?= $spaceObj->location ?>">
            </div>
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">Maximum People</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="maximum_people" value="<?= $spaceObj->maximum_people ?>">
            </div>
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">Coordinate</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="coordinate" value="<?= $spaceObj->coordinate ?>">
            </div>
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">Body</label>
                <textarea class="form-control" name="short_text_about" id="summer" cols="30" rows="5"><?= $spaceObj->body ?></textarea>
            </div>
            <div class="col-12 mb-2">
                <label for="exampleInputEmail1" class="form-label font_three">State</label>
                <select class="form-select" aria-label="Default select example" name="state">
                    <option value="active" <?= ($spaceObj->state == 'active') ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= ($spaceObj->state == 'inactive') ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>
        </div>
    </div>



</div>
<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="assets/js/imagen-previa.js"></script>
<script src="assets/js/folder/space/add-space.js"></script>