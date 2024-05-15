<?php include 'app/components/header.php';

$timelineObj = Folder::getFolderTimeline();
?>

<?php include 'app/components/sidebar.php'; ?>

<?php include 'app/components/topbar.php'; ?>


<!-- <i class='bx bxs-calendar'></i> -->
<!-- start content -->
<div class="container-fluid px-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two">Management Timeline</h1>
        <div class="d-flex gap-2">
            <button type="button" class="btn btn-primary btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class='bx bx-plus fs-5'></i> Add
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form id="add-timeline" method="POST" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Timeline</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="col-12 mb-2">
                                    <label for="exampleInputEmail1" class="form-label font_three">Year</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="year">
                                </div>
                                <div class="col-12 mb-2 d-flex justify-content-between">
                                    <label for="exampleInputEmail1" class="form-label font_three">Description</label>
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea class="form-control" name="description" id="summer" cols="30" rows="5"></textarea>
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
        <?php foreach ($timelineObj as $result) : ?>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card mb-4 py-3 border">
                    <div class="card-body row">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class='bx bxs-calendar fs-4'></i>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="fw-bold fs-6"><?= $result->year ?></div>
                                    <div><?= $result->description ?></div>
                                </div>
                            </div>
                            <div class="d-grid align-items-center">
                                <a href="" class="btn btn-warning mb-2 edit-timeline" data-modal-id="<?= $result->id ?>"><i class='bx bx-edit-alt'></i></a>
                                <a href="" class="btn btn-danger"><i class='bx bx-trash'></i></a>
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
<script src="assets/js/folder/about/add-timeline.js"></script>