<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?= base_url('assets/regis/') ?>images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Nama</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">TTL</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Kelas</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Alamat</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Pekerjaan Orang Tua</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Password</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="phone_number" class="required">No HP Pribadi</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">No HP Orang Tua</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Jabatan 1</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Kosher">Kosher</option>
                                            <option value="Asian Vegetarian">Asian Vegetarian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="jabatan">Jabatan 2</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="jabatan" id="jabatan">
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Kosher">Kosher</option>
                                            <option value="Asian Vegetarian">Asian Vegetarian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>vendor/nouislider/nouislider.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>vendor/wnumb/wNumb.js"></script>
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>