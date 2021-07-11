<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Sementara</title>
</head>

<body>

    <h3>SELAMAT DATANG</h3>
    <a type="button" href="<?php if ($this->session->userdata('id_level') == 1) {
                                echo site_url('admin/logout_admin');
                            } else {
                                echo site_url('login');
                            } ?>">
        <i class="fa-fw fas nav-icon fa-sign-out-alt"></i>
        <p class="brand-text">Logout</p>
    </a>


</body>

</html>