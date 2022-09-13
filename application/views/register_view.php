<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Regisster</title>

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

    <d class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-6 ">
                <div class="mb-3 row text-center">
                    <h5>Create new user</h5>

                </div>
                <?php echo form_open('register'); ?>

                <div class="mb-3 row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" placeholder="username" name="username"
                            value="<?php echo set_value('username'); ?>">
                        <sapn class="fr"><?php echo form_error('username'); ?></sapn>

                    </div>

                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="xxx@xxx.com" name="email"
                            value="<?php echo set_value('email'); ?>">
                        <sapn class="fr"><?php echo form_error('email'); ?></sapn>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="age" class="col-sm-3 col-form-label">age</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="age" placeholder="0" name="age"
                            value="<?php echo set_value('age'); ?>">
                        <sapn class="fr"><?php echo form_error('age'); ?></sapn>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gender" class="col-sm-3 col-form-label">gender</label>
                    <div class="col-sm-4">
                        <select id="gender" class="form-select" aria-label="Default select example" name="gender"
                            value="<?php echo set_value('gender'); ?>">
                            <!-- <option selected>gender</option> -->
                            <option value="male" default>male</option>
                            <option value="female">female</option>
                            <option value="etc">etc</option>
                        </select>
                        <sapn class="fr"><?php echo form_error('gender'); ?></sapn>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-3 col-form-label">Phone number</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" id="phone" placeholder="0xxxxxxxxx" name="phone"
                            value="<?php echo set_value('phone'); ?>" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10">
                        <sapn class="fr"> <?php echo form_error('phone'); ?></sapn>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword" placeholder="password"
                            name="password" value="<?php echo set_value('password'); ?>">
                        <sapn class="fr"><?php echo form_error('password'); ?></sapn>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">confirm password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword"
                            value="<?php echo set_value('passconf'); ?>" placeholder="confirm password" name="passconf">
                        <sapn class="fr"><?php echo form_error('passconf'); ?></sapn>

                    </div>
                </div>

                <div class="text-center">
                    <a href="<?php echo site_url('login') ?>">Have an account?</a>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3 mt-3">
                    <button class="btn btn-success" type="submit">Sign up</button>

                </div>
                </form>

            </div>

        </div>
    </d
 iv>






</body>

</html>