<?php include 'app/components/header.php';

$equipmentObj = Folder::getFolderEquipment();
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>


<!-- <i class='bx bxs-calendar'></i> -->
<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-xl-0 mb-lg-0 mb-md-3 mb-3 text-gray-800 d-flex align-items-center gap-2 font_two">Management Equipment</h1>
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-primary btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class='bx bx-plus fs-5'></i> Add
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="add-equipment" method="POST" enctype="multipart/form-data">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Equipment</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Charge</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="charge" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">User image input</label>
                                    <input class="form-control" type="file" id="formFile" name="imagen" required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Linkedin</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="linkedin">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Page</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="page">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Instagram</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="instagram">
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

    <div class="row mb-5">
        <?php foreach ($equipmentObj as $result) : ?>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4 py-3 border shadow">
                    <div class="card-body row">
                        <div class="d-xl-flex d-lg-flex d-md-grid justify-content-between">
                            <div class="col-xl-6 col-md-12">
                                <img src="files/equipment/<?= $result->image ?>" alt="" class="img-fluid rounded">
                            </div>

                            <div class="col-xl-6 col-md-12 d-grid p-3">
                                <div class="d-flex align-items-start mb-3">
                                    <div>
                                        <div class="fw-bold fs-6"> <i class='bx bxs-user-badge fs-4'></i></div>
                                        <div class="fw-bold fs-6"><?= $result->name ?></div>
                                        <div><?= $result->charge ?></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-end">
                                    <a href="#" class="btn btn-warning edit-equipment me-2" data-id="<?= $result->id ?>" data-bs-toggle="modal" data-bs-target="#editModal"><i class='bx bx-edit-alt'></i></a>
                                    <a href="#" class="btn btn-danger danger-equipment" data-id="<?= $result->id ?>"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div>
                                <div><i class='bx bxl-linkedin-square'></i> <?= $result->linkedin ?></div>
                                <div><i class='bx bx-globe'></i> <?= $result->www ?></div>
                                <div><i class='bx bxl-instagram'></i> <?= $result->instagram ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit-form-equipment" method="POST" enctype="multipart/form-data">
                <div id="editEquipmentModal" class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Equipment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="col-12">
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">Charge</label>
                                <input type="text" class="form-control" id="charge" name="charge" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">User image input</label>
                                <input class="form-control" type="file" id="imagen" name="imagen">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">Linkedin</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">Page</label>
                                <input type="text" class="form-control" id="page" name="page">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="exampleInputEmail1" class="form-label font_three">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Edit changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- end content -->

<?php include 'app/components/footer.php'; ?>
<script src="assets/js/folder/about/add-equipment.js"></script>