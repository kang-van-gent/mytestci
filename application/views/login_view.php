<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<style>
.col-6 {
    background: #EEEEEE;
    padding-top: 15px;
}

a {
    text-decoration: none;
    color: #000;

}

.fr {
    color: red;
}
</style>


<body>

    <div class="container text-center mt-5">
        <div class="row justify-content-center">


            <div class="col-6 ">

                <?php echo form_open('login'); ?>
                <div class="mb-3 row text-center">
                    <h5>Please login</h5>

                </div>

                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username"
                            value="<?php echo set_value('username'); ?>">
                        <span class="fr"><?php echo form_error('username'); ?></span>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="password" value="<?php echo set_value('password'); ?>">
                        <span class="fr"><?php echo form_error('password'); ?></span>

                    </div>
                </div>

                <a href=" <?php echo site_url('register') ?>">Sign up here</a>
                <div class="d-grid gap-2 col-6 mx-auto mb-3 mt-3">
                    <button class="btn btn-success" type="submit">Login</button>

                </div>
                </form>
            </div>

       
 </div>
    </div>
</body>

</html>