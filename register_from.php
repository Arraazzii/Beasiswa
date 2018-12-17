<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <link href="bpi.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link href="themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    a.popup-link {
        padding: 17px 0;
        text-align: center;
        margin: 10% auto;
        position: relative;
        width: 300px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }

    a.popup-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition: all 1s;
        transition: all 1s;
    }

    @-webkit-keyframes autopopup {
        from {
            opacity: 0;
            margin-top: -200px;
        }
        to {
            opacity: 1;
        }
    }

    @-moz-keyframes autopopup {
        from {
            opacity: 0;
            margin-top: -200px;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes autopopup {
        from {
            opacity: 0;
            margin-top: -200px;
        }
        to {
            opacity: 1;
        }
    }

    #popup {
        background-color: rgba(0, 0, 0, 0.8);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0;
        -webkit-animation: autopopup 2s;
        -moz-animation: autopopup 2s;
        animation: autopopup 2s;
    }

    #popup:target {
        -webkit-transition: all 1s;
        -moz-transition: all 1s;
        transition: all 1s;
        opacity: 0;
        visibility: hidden;
    }

    @media (min-width: 768px) {
        .popup-container {
            width: 1100px;
        }
    }

    @media (max-width: 767px) {
        .popup-container {
            width: 100%;
        }
    }

    .popup-container {
        position: relative;
        margin: 7% auto;
        padding: 30px 50px;
        background-color: #fafafa;
        color: #333;
        border-radius: 3px;
    }

    a.popup-close {
        position: absolute;
        top: 3px;
        right: 3px;
        background-color: #333;
        padding: 7px 10px;
        font-size: 20px;
        text-decoration: none;
        line-height: 1;
        color: #fff;
    }
    /* end style popup */
    /* style untuk isi popup */

    .popup-form {
        margin: 10px auto;
    }

    .popup-form h2 {
        margin-bottom: 5px;
        font-size: 37px;
        text-transform: uppercase;
    }

    .popup-form .input-group {
        margin: 10px auto;
    }

    .popup-form .input-group input {
        padding: 17px;
        text-align: center;
        margin-bottom: 10px;
        border-radius: 3px;
        font-size: 16px;
        display: block;
        width: 100%;
    }

    .popup-form .input-group input:focus {
        outline-color: #FB8833;
    }

    .popup-form .input-group input[type="email"] {
        border: 0px;
        position: relative;
    }

    .popup-form .input-group input[type="submit"] {
        background-color: #FB8833;
        color: #fff;
        border: 0;
        cursor: pointer;
    }

    .popup-form .input-group input[type="submit"]:focus {
        box-shadow: inset 0 3px 7px 3px #ea7722;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-03.jpg');">
                <div class="wrap-login100" style="margin-top: -10px;">
                    <form class="login100-form validate-form" method="post" action="mail/kirim.php" id="myForm" name="myForm" onsubmit="return validateForm()">
                        <span class="login100-form-logo">
                            <img src="img/Yayasan-japfa2.png">
                        </span>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Masukan Nama">
                                    <input class="input100" type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Masukan Tambah Lahir">
                                    <input class="input100" type="text" name="tgl" id="tgl" placeholder="Tanggal Lahir">
                                    <span class="focus-input100" data-placeholder="&#xf204;"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Masukan No. Telepon">
                                    <input class="input100" type="text" name="tempat" id="tempat" placeholder="No. Handphone">
                                    <span class="focus-input100" data-placeholder="&#xf202;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Masukan Email">
                                    <input class="input100" type="email" name="email" id="email" placeholder="Email">
                                    <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Masukan Password">
                                    <input class="input100" type="password" name="pass1" id="pass1" placeholder="Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Password Harus Sama">
                                    <input class="input100" type="password" name="pass2" id="pass2" placeholder="Konfirm Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="contact100-form-checkbox">
                            <a class="txt1" href="index.php">
                                < Back Login </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="btnsubmit">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-wrapper" id="popup">
        <div class="popup-container">
            <!-- Konten popup, silahkan ganti sesuai kebutughan -->
            <form action="http://www.syakirurohman.net/2015/01/tutorial-membuat-popup-tanpa-javascript-jquery.html#" method="post" class="popup-form">
                <h2></h2>
                <p align="center">
                    <font size="6"> <strong>Pendaftaran Program Beasiswa Prestasi JAPFA Foundation untuk Jenjang Pendidikan D3 dan S1<br/></strong>
                        <!-- <strong>Percayalah, saya hanya akan mengirim sesuatu yang bermanfaat untuk anda :)</strong> --></font>
                </p>
            </form>
            <a class="popup-close" href="#popup">X</a>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/sweetalert2.js"></script>
    <script src="js/jquery.js"></script>
    <script src="ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/bootstrap2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.7.2.js"></script>
    <script src="ui/jquery.ui.core.js"></script>
    <script src="ui/jquery.ui.widget.js"></script>
    <script src="ui/jquery.ui.datepicker.js"></script>
    <script>
    function validateForm() {
        var input1 = document.forms["myForm"]["nama"].value;
        var input2 = document.forms["myForm"]["tempat"].value;
        var input3 = document.forms["myForm"]["tgl"].value;
        var input4 = document.forms["myForm"]["email"].value;
        var input5 = document.forms["myForm"]["pass1"].value;
        var input6 = document.forms["myForm"]["pass2"].value;
        if (input1 == null || input1 == "") {
            alert("Name Wajib Diisi !");
            $('#nama').focus();
            return false;
        } else if (input2 == null || input2 == "") {
            alert("No. Telepon Wajib Diisi !");
            $('#tempat').focus();
            return false;
        } else if (input3 == null || input3 == "") {
            alert("Tanggal Wajib Diisi !");
            $('#tgl').focus();
            return false;
        } else if (input4 == null || input4 == "") {
            alert("Email wajib Diisi !");
            $('#email').focus();
            return false;
        } else if (input5 == null || input5 == "") {
            alert("Password wajib Diisi !");
            $('#pass1').focus();
            return false;
        } else if (input6 == null || input6 == "") {
            alert("Konfirmasi Password wajib Diisi !");
            $('#pass2').focus();
            return false;
        } else if (input6 != input5) {
            alert("password dan Konfirmasi password !");
            $('#pass1').val("");
            $('#pass2').val("");
            $('#pass1').focus();
            return false;
        } else {
            send();
            return false;
        }
    }
    </script>
    <script type="text/javascript">
    //fungsi konfirmasi
    function send() {
        var email = $('#email').val();
        swal({
            title: '',
            html: 'Terimakasih telah mendaftar di program beasiswa Japfa silahkan klik tombol Kirim dibawah kemudian cek email yang terdaftar (inbox email/Spam)</b>',
            showCancelButton: true,
            type: 'warning',
            confirmButtonText: 'Kirim',
            showLoaderOnConfirm: true,
            allowOutsideClick: true
        }).then(function(email) {
            //alert('fuk');
            document.getElementById("myForm").submit();
        })
    }
    //function send_email() {
    //var email1=$('#email1').val();
    //var email2=$('#email2').val();
    //kirim email
    // $.ajax({
    // type: 'POST',
    // data: 'email1='+email1+'&email2='+email2,
    // url: 'lib/kirimkan.php',
    //  success: function(data) {
    //alert('Data Sudah Dikirim');
    //          swal({
    //// title: 'Berhasil Kirim Email!',
    // html: 'Submitted email: ' + email1
    // });
    //   document.location.href='index.php';
    //}
    // });    
    // }
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tgl').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            yearRange: '1900:2018'
        });
    });
    </script>
</body>

</html>