<?php include "../template/shared/document-start.html.php"; ?>
    <div class="container-fluid">

        <div class="">
            <form class="row col-12" method="post" action="">
                <div class="col-4 offset-2">
                    <div class="form-group">
                        <label>Email*</label>
                            <?php $errorName="email"; ?>
                            <?php include "../template/shared/alert.html.php"; ?>
                        <input name="email" class="form-control" placeholder="Enter email"
                        value="<?= filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>">
                    </div>

                    <div class="form-group">
                        <label>Password*</label>
                            <?php $errorName="password"; ?>
                            <?php include "../template/shared/alert.html.php"; ?>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Confirm*</label>
                            <?php $errorName="confirm"; ?>
                            <?php include "../template/shared/alert.html.php"; ?>
                        <input type="password" name="confirm" class="form-control" placeholder="Confirm password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>

                <div class="col-4 ">
                    <div class="form-group">
                        <label>First name</label>
                        <input name="firstname" class="form-control" placeholder="Last name">
                    </div>

                    <div class="form-group">
                        <label>Last name</label>
                        <input name="lastname" class="form-control" placeholder="Last name">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" class="form-control" placeholder="06 00 00 00 00">
                    </div>
                </div>

            </form>
        </div>
    </div>

<?php include "../template/shared/document-end.html.php"; ?>