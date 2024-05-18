<?php include 'app/components/header.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $spaceObj = Folder::getFolderSpaceId($id);

    $labelObj = Folder::getLabels();
} else {
    session_start();
    session_destroy();
    header('Location: ../login-admin');
    exit;
}
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>
<style>
    .nav-link {
        color: #000;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #000;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #000 !important;
        color: #fff;
    }
</style>

<!-- <i class='bx bxs-calendar'></i> -->
<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex">
            <a href="management-space" class="btn btn-dark d-flex align-items-center gap-2 me-2"><i class='bx bx-arrow-back'></i> Back</a>
        </div>
        <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Space Details Management</h1>
    </div>


    <div class="row mb-4">
        <div class="col-12">
            <div class="d-lg-flex d-md-grid d-grid align-items-start col-12">
                <div class="nav flex-column nav-pills col-lg-3 col-12 bg-light" id="v-pills-tab" role="tablist" aria-orientation="vertical" style=" padding-right: 0; border-radius: 10px;">
                    <button class="nav-link active" id="v-1-tab" data-bs-toggle="pill" data-bs-target="#v-1" type="button" role="tab" aria-controls="v-1" aria-selected="true">Details Space</button>
                    <button class="nav-link" id="v-2-tab" data-bs-toggle="pill" data-bs-target="#v-2" type="button" role="tab" aria-controls="v-2" aria-selected="false">Labels</button>
                    <button class="nav-link" id="v-3-tab" data-bs-toggle="pill" data-bs-target="#v-3" type="button" role="tab" aria-controls="v-3" aria-selected="false">Galery</button>
                    <!-- <button class="nav-link" id="v-4-tab" data-bs-toggle="pill" data-bs-target="#v-4" type="button" role="tab" aria-controls="v-4" aria-selected="false">Agregar Cuentas Bancarias y Tarjetas</button> -->

                </div>
                <div class="tab-content col-lg-9 col-12 bg-light" id="v-pills-tabContent">
                    <!-- Membresia 1 -->
                    <div class="tab-pane fade show active col-lg-12 mt-4 px-4" id="v-1" role="tabpanel" aria-labelledby="v-1-tab" tabindex="0">
                        <form id="edit-details-space" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $spaceObj->id ?>">
                                    <div class="col-12 mb-2 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>
                                    </div>
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
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="maximum_people" value="<?= $spaceObj->maximum_people ?>">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label font_three">Coordinate</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="coordinate" value="<?= $spaceObj->coordinate ?>">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label font_three">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" value="<?= $spaceObj->price ?>" step="0.01" required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label font_three">State</label>
                                        <select class="form-select" aria-label="Default select example" name="state">
                                            <option value="active" <?= ($spaceObj->state == 'active') ? 'selected' : '' ?>>Active</option>
                                            <option value="inactive" <?= ($spaceObj->state == 'inactive') ? 'selected' : '' ?>>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="exampleInputEmail1" class="form-label font_three">Body</label>
                                        <textarea class="form-control" name="body" id="summer" cols="30" rows="5"><?= $spaceObj->body ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Membresia 2 -->
                    <div class="tab-pane fade col-lg-12 mt-4 px-4" id="v-2" role="tabpanel" aria-labelledby="v-2-tab" tabindex="0">
                        <form id="edit-labels-space" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="col-12 mb-2 d-flex justify-content-between">
                                        <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Select tags</h1>
                                        <div class="d-flex">
                                            <a href="#" class="btn-primary btn me-2">Add Labels</a>
                                            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="space_id" value="1"> <!-- Asegúrate de pasar el ID del espacio correcto -->
                                    <?php foreach ($labelObj as $label) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="labels[]" value="<?php echo $label->id; ?>" id="label-<?php echo $label->id; ?>">
                                            <label class="form-check-label" for="label-<?php echo $label->id; ?>">
                                                <?php echo $label->icons; ?> <?php echo $label->nombre; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Membresia 3 -->
                    <div class="tab-pane fade col-lg-12 mt-4 px-4" id="v-3" role="tabpanel" aria-labelledby="v-3-tab" tabindex="0">
                        <div class="row">

                        </div>

                    </div>
                    <!-- Membresia 4 -->
                    <!-- <div class="tab-pane fade col-lg-12 mt-4 px-4" id="v-4" role="tabpanel" aria-labelledby="v-4-tab" tabindex="0">
                        <div class="row">

                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>



</div>
<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="assets/js/imagen-previa.js"></script>
<script src="assets/js/folder/space/edit-space.js"></script>
<script src="assets/js/folder/space/assign-labels-space.js"></script>