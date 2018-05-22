<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>vlepa.com</title>
        <link rel="stylesheet" type="text/css" href="/normalize.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
        <style type="text/css">
              body {
                  background-color: #000000;
              }
              div {
                  box-sizing: border-box;
              }
              #top {
                  display: block;
                  background-color: #000000;
                  width: 100%;
                  font-size: 24px;
                  font-weight: 800;
                  color: #FFFFFF;
                  padding: 20px;
              }
              #footer {
                  display: block;
                  background-color: #000000;
                  width: 100%;
                  padding: 20px;
              }
              #top .logo {
                  cursor: default;
              }
              .title {
                  background-color: #FFFFFF;
                  font-size: 24px;
                  font-weight: 300;
                  color: #318DEF;
                  text-align: center;
                  margin: 0px 0px;
                  padding: 60px 0px;
              }
              #gallery {
                  display: block;
                  background-color: #F5F5F5;
                  width: 100%;
                  margin: 0px;
                  padding: 20px;
              }
              #gallery h1 {
                  font-size: 28px;
                  font-weight: 300;
                  text-align: center;
                  margin: 20px 0px 40px 0px;
              }
              #gallery .thumbs {
                  display: block;
                  max-width: 1040px;
                  margin: 0px auto;
                  padding: 0px;
              }
              #gallery .thumbs .img {
                  display: inline-block;
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;
                  width: 244px;
                  height: 244px;
                  margin: 6px;
                  box-shadow: 0px 0px 0px #808080;
                  cursor: pointer;
              }
              #gallery .thumbs .img:hover {
                  display: inline-block;
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;
                  width: 244px;
                  height: 244px;
                  margin: 6px;
                  box-shadow: 0px 0px 10px #808080;
                  cursor: pointer;
              }
              #gallery-overlay {
                  display: none;
                  background-color: rgba(0, 0, 0, 0.8);
                  position: fixed;
                  top: 0px;
                  left: 0px;
                  width: 100%;
                  height: 100%;
              }
              #gallery-overlay .loading-icon {
                  display: block;
                  position: absolute;
                  top: 50%;
                  left: 0;
                  right: 0;
                  width: 100px;
                  height: 100px;
                  font-size: 100px;
                  color: #CECECE;
                  margin: -50px auto 0px auto;
                  z-index: -1;
              }
              #gallery-overlay .close {
                  display: block;
                  position: absolute;
                  top: 16px;
                  right: 16px;
                  font-size: 60px;
                  color: #CECECE;
                  margin: 0px;
                  transition: color 0.2s;
              }
              #gallery-overlay .close:hover {
                  display: block;
                  position: absolute;
                  top: 16px;
                  right: 16px;
                  font-size: 60px;
                  color: #DEDEDE;
                  margin: 0px;
                  cursor: pointer;
              }
              #gallery-overlay .container {
                 height: 100%;
                  width: 100%;
                  display: table;
                  padding: 0px;
                  box-sizing: border-box;
              }
              #gallery-overlay .container .image {
                  vertical-align: middle;
                  height: 100%;
                  display: table-cell;
                  margin: 0px;
                  padding: 0px;
                  box-sizing: border-box;
              }
              #gallery-overlay .container .image img {
                  display: block;
                  margin: 0px auto;
              }
              @media only screen and (min-width: 1200px) {
                  #gallery-overlay .container .image img {
                      max-width: 1000px;
                      max-height: 800px;
                  }
              }
              @media only screen and (max-width: 1199px) and (min-width: 992px) {
                  #gallery-overlay .container .image img {
                      max-width: 768px;
                      max-height: 520px;
                  }
              }
              @media only screen and (max-width: 991px) and (min-width: 768px) {
                  #gallery-overlay .container .image img {
                      max-width: 700px;
                      max-height: 460px;
                  }
              }
              @media only screen and (max-width: 767px) and (min-width: 500px) {
                  #gallery-overlay .container .image img {
                      max-width: 640px;
                      max-height: 420px;
                  }
              }
              @media only screen and (max-width: 499px) {
                #gallery-overlay .container .image img {
                      max-width: 280px;
                      max-height: 220px;
                }
            }
            #contact {
                display: block;
                width: 600px;
                margin: 0 auto;
                padding: 20px 0px 0px 0px;
            }
            #contact input[type=text], #contact input[type=email], #contact textarea {
                display: block;
                width: 100%;
                color: #808080;
                margin: 0px 0px 10px 0px;
                padding: 10px;
                border-width: 1px;
                border-color: #CECECE;
                border-radius: 3px;
                border-style: solid;
                box-sizing: border-box;
            }
            #contact textarea {
                height: 100px;
                resize: vertical;
            }
            #contact input[type=submit]{
                display: block;
                background-color: #D40032;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                color: #FFFFFF;
                margin: 0px auto;
                padding: 14px 36px;
                border-width: 0px;
                border-radius: 3px;
                border-style: none;
                cursor: pointer;
                transition: background-color 0.2s;
            }
            #contact input[type=submit]:hover{
                display: block;
                background-color: #BB0020;
                font-size: 16px;
                font-weight: 700;
                text-align: center;
                color: #FFFFFF;
                margin: 0px auto;
                padding: 14px 36px;
                border-width: 0px;
                border-radius: 3px;
                border-style: none;
                cursor: pointer;
            }
            #contact .status {
                display: block;
                background-color: #FFFFFF;
                width: 100%;
                color: #53BE31;
                text-align: center;
                margin: 10px 0px;
                padding: 10px;
                border-radius: 5px;
                border-style: none;
            }
            #contact .status.error {
                color: #D80E24;
            }
            #contact .icon {
                display: none;
                height: 258px;
                line-height: 258px;
                text-align: center;
                font-size: 100px;
                color: #CECECE;
            }
            #footer .booklet {
                display: block;
                width: 90%;
                max-width: 448px;
                margin: 40px auto 80px auto;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <div id="top">
            <span class="logo">VLEPA.COM</span>
        </div>
        <h1 class="title">Inspirujące vlepy przygotowane przez zaangażowanych autorów.</h1>
        <div id="gallery" data-imagesnumber="<?= count(glob('public/assets/images/inspirations/*.jpg')) ?>">
            <h1>VLEPY MOTYWACYJNE</h1>
            <div class="thumbs">
                <?php foreach (glob('images/*.jpg') as $img): ?>
                    <?php $file_info = pathinfo($img); ?>
                    <div class="img" style='background-image: url("<?= $img ?>");' data-file="<?= $file_info['filename'] ?>"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="gallery-overlay">
            <div class="container">
                <div class="image"></div>
            </div>
        </div>
        <h1 class="title">Chciałbyś kupić nasze vlepki? Pisz!</h1>
        <div id="footer">
            <?php $_SESSION['mailing_form_display_time'] = time(); ?>
            <form id="contact" method="POST" action="mail.php">
                <?php if (isset($_GET['mail']) && $_GET['mail'] == 'error'): ?>
                    <div class="status error">Nieudało się wysłać wiadomości, spróbuj jeszcze raz.</div>
                <?php endif; ?>
                <?php if (isset($_GET['mail']) && $_GET['mail'] == 'sended'): ?>
                    <div class="status">Twoja wiadomość została wysłana.</div>
                <?php endif; ?>
                <input type="text" name="name" placeholder="Imie i nazwisko">
                <input type="email" name="email" placeholder="Adres e-mail">
                <textarea name="message" placeholder="Wiadomość"></textarea>
                <input type="submit" value="Wyślij">
            </form>
            <img class="booklet" src="/booklet.png" alt="booklet">
        </div>
        <script type="text/javascript">
            $('#gallery .thumbs .img').click(function(){
                var file_name = $(this).data('file');

                $('#gallery-overlay .container .image').html('<img src="images/' + file_name + '.jpg" alt=" "><i class="fa fa-spinner fa-spin loading-icon" aria-hidden="true"></i><i class="fa fa-times close" aria-hidden="true"></i>');
                $('#gallery-overlay').fadeIn();
            });
            $(document).mouseup(function (e){
                if (!$("#gallery-overlay .container .image img").is(e.target) && $("#gallery-overlay .container .image img").has(e.target).length === 0) {
                    $("#gallery-overlay .container .image").html('');
                    $("#gallery-overlay").fadeOut();
                }
            });
        </script>
    </body>
</html>
