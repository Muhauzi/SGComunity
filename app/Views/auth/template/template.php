<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SGComunity - Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/styles.css">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="<?= base_url();?>/css/sb-admin-2.min.css" rel="stylesheet"> -->

</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script>
        const eyes = document.getElementById('eyes')
        const password = document.getElementById("password")
        
        const togglePassword = () => {
            if (eyes.classList == "fa-solid fa-eye-slash") {
                const type = password.getAttribute("type") === "password" ? "text" : "password"
                
                password.setAttribute("type", type)
                eyes.className = "fa-solid fa-eye"
            } else {
                const type = password.getAttribute("type") === "text" ? "password" : "text"
                
                password.setAttribute("type", type)
                eyes.className = "fa-solid fa-eye-slash"
            }
        }
    </script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/07df810a55.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>/js/sb-admin-2.min.js"></script>

</body>
</html>