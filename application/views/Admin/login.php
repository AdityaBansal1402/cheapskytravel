<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ec4.denisio.ru/_admins/themeforest-pertho/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2017 04:58:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cheapskytravel Admin Panel - Login Page</title>

    <!-- Foundation framework -->
    <link rel="stylesheet" href="<?= base_url("admin_media/") ?>foundation/stylesheets/foundation.css" />
    <link rel="stylesheet" href="<?= base_url("admin_media/") ?>css/style.css" />

    <!-- Favicons and the like (avoid using transparent .png) -->

</head>

<body class="ptrn_a grdnt_a">
    <div class="container">
        <div class="row">
            <div class="eight columns centered">

            </div>
        </div>
        <div class="row">
            <div class="eight columns centered">
                <div class="login_box">
                    <div class="lb_content">
                        <div class="login_logo"><img style="width:100px" src="<?= base_url("media/images/") ?>logo.png" alt="" /></div>
                        <div class="cf">
                            <h2 class="lb_ribbon lb_blue"><span>Login to your account</span><span style="display:none">New password</span></h2>

                        </div>
                        <div class="row m_cont">
                            <div class="eight columns centered">
                                <p class=""> <?= validation_errors(); ?></p>
                                <div class="l_pane">
                                    <form action="<?= base_url("Login") ?>" method="post">
                                        <div class="sepH_c">
                                            <div class="elVal">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" class="oversize expand input-text" />
                                            </div>
                                            <div class="elVal">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" class="oversize expand input-text" />
                                            </div>
                                        </div>
                                        <div class="cf">

                                            <input type="submit" class="button small radius right black" value="Login" />
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url("admin_media/") ?>js/jquery.min.js"></script>
    <script src="<?= base_url("admin_media/") ?>js/s_scripts.js"></script>
    <script src="<?= base_url("admin_media/") ?>lib/validate/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".sl_link").click(function(event) {
                $('.l_pane').slideToggle('normal').toggleClass('dn');
                $('.sl_link,.lb_ribbon').children('span').toggle();
                event.preventDefault();
            });

            $("#l_form").validate({
                highlight: function(element) {
                    $(element).closest('.elVal').addClass("form-field error");
                },
                unhighlight: function(element) {
                    $(element).closest('.elVal').removeClass("form-field error");
                },
                rules: {
                    username: "required",
                    password: "required"
                },
                messages: {
                    username: "Please enter your username (type anything)",
                    password: "Please enter a password (type anything)"
                },
                errorPlacement: function(error, element) {
                    error.appendTo(element.closest(".elVal"));
                }
            });

            $("#rp_form").validate({
                highlight: function(element) {
                    $(element).closest('.elVal').addClass("form-field error");
                },
                unhighlight: function(element) {
                    $(element).closest('.elVal').removeClass("form-field error");
                },
                rules: {
                    upname: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    upname: "Please enter a valid email address"
                },
                errorPlacement: function(error, element) {
                    error.appendTo(element.closest(".elVal"));
                }
            });
        });
    </script>
</body>


</html>