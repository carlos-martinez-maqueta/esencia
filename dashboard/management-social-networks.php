<?php include 'app/components/header.php';

$socialNetworksObj = Folder::getSocialNetworks();

?>

<?php include 'app/components/sidebar.php'; ?>
<?php include 'app/components/topbar.php'; ?>

<div class="container-fluid px-4">
    <form id="edit-social-networks" method="POST" enctype="multipart/form-data">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two">Management Social Networks</h1>
            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>

        </div>

        <div class="row mb-5">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Facebook</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="facebook" value="<?= $socialNetworksObj->facebook ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Instagram</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="instagram" value="<?= $socialNetworksObj->instagram ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Whatsapp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="whatsapp" value="<?= $socialNetworksObj->whatsapp ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Spotify</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="spotify" value="<?= $socialNetworksObj->spotify ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Linkedin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="linkedin" value="<?= $socialNetworksObj->linkedin ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Tiktok</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tiktok" value="<?= $socialNetworksObj->tiktok ?>">
                </div>
            </div>
        </div>
    </form>

</div>

<?php include 'app/components/loading.php'; ?>
<?php include 'app/components/footer.php'; ?>
<script src="assets/js/marketing/edit-social-networks.js"></script>