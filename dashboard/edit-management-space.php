<?php
include 'app/components/header.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $spaceObj = Folder::getFolderSpaceId($id);

    $labelObj = Folder::getLabels();
    $labelsSpace = Folder::getLabelsSpaceId($id);
    $bannersSpace = Folder::getImageSpaceId($id);

    // Inicializar un array para almacenar los IDs de las etiquetas
    $labels_id = array();
    // Iterar sobre los resultados para obtener los IDs de las etiquetas
    foreach ($labelsSpace as $labelSpace) {
        $labels_id[] = $labelSpace->labels_id;
    }

    // Si necesitas obtener los IDs de las etiquetas directamente como un array, también puedes hacerlo así:
    // $labels_id = array_column($labelsSpace, 'labels_id');

    // Corregir la clave utilizada para seleccionar las etiquetas en el array de resultados
    $selectedLabels = array_column($labelsSpace, 'labels_id');
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

    .fixed-image-container {
        position: relative;
        overflow: hidden;
    }

    .fixed-image-container:hover .delete-button {
        opacity: 1;
    }

    .image {
        overflow: hidden;
        height: 300px;
        width: 300px;
        position: relative;
        cursor: pointer;
        margin: 0 15px;
        box-shadow: 0 0 25px 1px rgba(0, 0, 0, .3);
        transition: .5s;
        background-color: #555
    }

    .image:after {
        content: '';
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 500px;
        transform: translate(-140%, -50%);
        background-color: rgba(255, 255, 255, 0.5);
        opacity: 0.8;
        border-radius: 50%;
        transition: .8s
    }

    .image:hover:after {
        transform: translate(-50%, -50%)
    }

    .image:hover img {
        transform: translate(-50%, -50%) scale(1.3) rotate(20deg)
    }



    .i_galery {
        position: absolute;
        z-index: 2;
        top: 50%;
        left: 50%;
        transform: translate(-2000px, -50%);
        color: #fff;
        transition: .8s;
        transition-timing-function: ease-in
    }

    .image:hover i {
        transform: translate(-50%, -50%);
        transition-timing-function: ease
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
                                        <div class="d-flex gap-1">
                                            <a href="#" class="btn-primary btn btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addLabelModal"><i class='bx bx-folder-plus me-1'></i> Add Label</a>
                                            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center"><i class='bx bxs-edit fs-5 me-1'></i> Edit</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="space_id" value="<?= $id ?>">
                                    <?php foreach ($labelObj as $label) : ?>
                                        <?php $isChecked = in_array($label->id, $selectedLabels); ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="labels[]" value="<?= $label->id; ?>" id="label-<?= $label->id; ?>" <?= $isChecked ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="label-<?= $label->id; ?>">
                                                <?= $label->icons; ?> <?= $label->name; ?>
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
                            <div class="col-12">
                                <div class="col-12 mb-2 d-flex justify-content-between">
                                    <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Gallery management</h1>
                                    <div class="d-flex gap-1">
                                        <a href="#" class="btn-primary btn btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addImageModal"><i class='bx bx-image-add me-1'></i> Add image</a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($bannersSpace as $result) : ?>
                                        <div class="col-md-4">
                                            <div class="image">
                                                <img src="files/space/<?= $result->imagen; ?>" alt="" style="position: absolute; height: 110%; top: 50%; left: 50%; transform: translate(-50%, -50%); transition: .8s">
                                                <a href="#" class="delete-image" data-id="<?= $result->id; ?>"> <!-- Agregamos el atributo data-id con el ID de la imagen -->
                                                    <i class="bx bx-trash fa-3x i_galery"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
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
<!-- Modal Label-->
<div class="modal fade" id="addLabelModal" tabindex="-1" aria-labelledby="addLabelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="add-label" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLabelModalLabel">Add Label</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="font_code" placeholder="name@example.com">
                            <label for="floatingInput">Font Code</label>
                            <div id="emailHelp" class="form-text">
                                Please visit <a href="https://boxicons.com/" class="text-primary" target="_blank">Boxicons</a> to find the icon font code.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary d-flex align-items-center"><i class='bx bx-save me-1'></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal Image -->
<div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="add-image" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="space_id" value="<?= $id ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addImageModalLabel">Add Image</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Select image</label>
                            <input class="form-control" type="file" id="formFile" name="imagen">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary d-flex align-items-center"><i class='bx bx-save me-1'></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'app/components/loading.php'; ?>
<?php include 'app/components/footer.php'; ?>
<script src="assets/js/imagen-previa.js"></script>
<script src="assets/js/folder/service/add-label.js"></script>
<script src="assets/js/folder/service/add-image.js"></script>
<script src="assets/js/folder/service/delete-image.js"></script>
<script src="assets/js/folder/space/add-space.js"></script>
<script src="assets/js/folder/space/edit-space.js"></script>
<script src="assets/js/folder/space/edit-labels-space.js"></script>