<?php include 'app/components/header.php';

$userObj = Folder::getUser();

?>

<?php include 'app/components/sidebar.php'; ?>
<?php include 'app/components/topbar.php'; ?>

<div class="container-fluid px-4">
    <form id="edit-account" method="POST" enctype="multipart/form-data">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 d-flex align-items-center gap-2 font_two">Account Settings</h1>
            <button type="submit" class="btn btn-warning btn-sm d-flex align-items-center gap-2"><i class='bx bxs-edit fs-5'></i> Edit</button>
        </div>
        <div class="col-12">
            <label for="modification" class="form-label text-success">Last modification made <?= date('d-m-Y H:i', strtotime($userObj->updated_at)) ?></label>
        </div>

        <div class="row mb-5">
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">User</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?= $userObj->username ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="exampleInputEmail1" class="form-label font_three">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= $userObj->email ?>">
                </div>
                <div class="col-12 mb-2">
                    <label for="password" class="form-label font_three">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div id="password" class="form-text">Write password only if you want to change it.</div>
                </div>
            </div>
        </div>
    </form>

</div>

<?php include 'app/components/loading.php'; ?>
<?php include 'app/components/footer.php'; ?>
<script src="assets/js/user/edit-user.js"></script>