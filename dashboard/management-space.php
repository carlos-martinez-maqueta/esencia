<?php include 'app/components/header.php';

$spaceObj = Folder::getFolderSpace();
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>


<!-- <i class='bx bxs-calendar'></i> -->
<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Management Space</h1>
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-primary btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class='bx bx-plus fs-5'></i> Add
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="add-space" method="POST" enctype="multipart/form-data">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Space</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Main image</label>
                                    <input class="form-control" type="file" id="imagen" name="imagen" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Maximum people</label>
                                    <input type="text" class="form-control" id="maxium_people" name="maxium_people" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Coordinates</label>
                                    <input type="text" class="form-control" id="coordinates" name="coordinates">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .cursor-none {
            cursor: none;
        }
        /* Añade este CSS en tu archivo CSS o en la sección <style> de tu HTML */
        .fixed-image-size {
            width: 100%;
            /* Ajusta el ancho al 100% del contenedor */
            height: 200px;
            /* Establece una altura fija */
            object-fit: cover;
            /* Mantiene la proporción de la imagen y rellena el contenedor */
        }
    </style>

    <div class="row mb-5">
        <?php foreach ($spaceObj as $result) : ?>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4 py-3 border shadow">
                    <div class="card-body row">
                        <div class="d-xl-flex d-lg-flex d-md-grid justify-content-between">
                            <div class="col-xl-12 col-md-12">
                                <img src="files/space/<?= $result->main_image ?>" alt="" class="img-fluid rounded fixed-image-size">
                                <div class="d-grid align-items-start my-3">
                                    <div class="fw-bold fs-6 font_two mb-2"><?= $result->name ?></div>
                                    <div class="d-flex col-12 justify-content-between mb-3">
                                        <div class="font_one"><i class='bx bx-map'></i> <?= $result->location ?></div>
                                        <div class="font_one"><i class='bx bx-user'></i> <?= $result->maximum_people ?> Guest</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="font_one fs-3 fw-bold">$ <?= $result->price ?></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="edit-management-space?id=<?= $result->id ?>" class="btn btn-sm btn-warning me-2"><i class='bx bx-edit-alt'></i> Edit Details</a>
                                    <button type="button" class="btn btn-sm cursor-none <?= $result->state == 'active' ? 'btn-success' : 'btn-warning' ?>">
                                        <?= $result->state == 'active' ? 'Active' : 'Inactive' ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

   
</div>
<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="assets/js/folder/space/add-space.js"></script>