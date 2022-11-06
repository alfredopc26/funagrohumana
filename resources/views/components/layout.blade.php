<!DOCTYPE html>
<html data-wf-domain="fundacion-agro-humana.webflow.io" data-wf-page="62ebc5be17e0339fec556db0"
    data-wf-site="62ebc5bd17e033cc3c556dab" class=" w-mod-js">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="Fundación agrohumana Solidarios con el campo" property="og:title">
    <meta content="Fundación agrohumana Solidarios con el campo" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ URL::asset('css/fundacion-agro-humana.webflow.439ed0184.css') }}" rel="stylesheet" type="text/css">
    <script src="js/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Raleway:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic:latin,latin-ext,vietnamese"] } });</script>
    <script type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        .list_icon{
            display: flex;
        }
        .icon_inst{
            padding-right: 5px;
        }
        .whatsapp {
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            z-index:100;
            }

        .whatsapp-icon {
            margin-top:13px;
            }
    </style>
</head>
<body class="body">
    <a href="https://wa.me/573137501246" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container-fluid">
          <a class="navbar-brand ps-lg-5" href="#"><img
            src="{{ URL::asset('images/62ebc66ecb265c36ed57d4b4_FUNDACION%20AGROHUMANA%20%252B_Mesa%20de%20trabajo%201cuted.png') }} "
            width="235"
            srcset="images/62ebc66ecb265c36ed57d4b4_FUNDACION%20AGROHUMANA%20%252B_Mesa%20de%20trabajo%201cuted-p-500.png 500w, images/62ebc66ecb265c36ed57d4b4_FUNDACION%20AGROHUMANA%20%252B_Mesa%20de%20trabajo%201cuted.png 543w"
            sizes="(max-width: 479px) 100vw, 235px" alt class="logo-image"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex"><a href="/" class="nav-link fs-12 {{ $id ==  'home' ? 'active' : ''  }}"><strong>Inicio</strong></a></li>
                <li class="nav-item d-flex"><a href="/mision" class="nav-link fs-12{{ $id ==  'mision' ? 'active' : ''  }}"><strong>Misión</strong></a></li>
                <li class="nav-item d-flex"><a href="/vision" class="nav-link fs-12{{ $id ==  'vision' ? 'active' : ''  }}"><strong>Visión</strong></a></li>
                <li class="nav-item d-flex"><a href="/esal" class="nav-link fs-12 {{ $id ==  'esal' ? 'active' : ''  }}"><strong>Esal RTE</strong></a></li>
                <li class="nav-item d-flex"><a href="/campanias" class="nav-link fs-12 {{ $id ==  'campaign' ? 'active' : ''  }}"><strong>Campañas</strong></a></li>
                <li class="nav-item d-flex"><a href="/about" class="nav-link fs-12{{ $id ==  'about' ? 'active' : ''  }}"><strong>Quienes somos</strong></a></li>
                <li class="nav-item d-flex"><a href="/wedo" class="nav-link fs-12 {{ $id ==  'wedo' ? 'active' : ''  }}"><strong>Lo que hacemos</strong></a></li>
                <li class="nav-item d-flex"><a href="/aliados" class="nav-link fs-12 {{ $id ==  'aliados' ? 'active' : ''  }}"><strong>Aliados</strong></a></li>
                <li class="nav-item d-flex"><a href="/apoyanos" class="nav-link fs-12 {{ $id ==  'support' ? 'active' : ''  }}"><strong>Apóyanos</strong></a></li>
            </ul>
            <span class="list_icon ">
                <a class="icon_header" href="https://www.instagram.com/agro_humana" title="Ir a nuestro instagram"><img src="./images/instagram.png" alt="instagram" width="30px"
                    height="30px"></a>
                <a class="icon_header" href="https://www.facebook.com/fundacionagrohumana/" target="_blank" title="Ir a nuestro facebook"><img src="./images/facebook.png" alt="facebook" width="30px" height="30px"></a>
                <a class="icon_header" href="https://www.facebook.com/fundacionagrohumana/" target="_blank" title="Ir a nuestro canal de youtube"><img src="./images/youtube.png" alt="youtube" width="30px" height="30px"></a>
            </span>
          </div>
        </div>
      </nav>
    {{ $slot }}

    <section class="footer-dark wf-section" id="footer">
        <div class="w-layout-grid grid-4 desktop">
            <div id="w-node-db8099bc-1899-e621-9a35-95bf87e1fcaf-ec556db0" class="div-block img-footer"></div>
            <div id="w-node-_8ff25cfc-512f-0923-c468-fb4f4333c217-ec556db0" class="div-block">
                <div class="text-block-5">
                    <span class="title-address">Contáctenos</span><br>
                    <span class="address-text">
                        <strong>Oficinas</strong>
                        <ul class="address-list">
                            <li>Carrera 23 No. 32B-14 Sabanalarga (Atlántico)</li>
                            <li>Calle 110 No. 6-361 Local 11 Barranquilla (Atlántico)</li>
                        </ul>
                        <a class="address-aditional" href="https://wa.me/573137501246" target="_blank">
                            <img src="./images/whasapp_icon.png" alt="whatsapp icon" height="20" width="20">
                            <p> 313 750 1246 </p>
                        </a>
                        <a class="address-aditional" href="mailto:contacto@fundacionagrohumana.org">
                            <img src="./images/email_icon.png" alt="Email icon" height="20" width="20">
                            <p> contacto@fundacionagrohumana.com</p>
                        </a>
                        <a class="address-aditional" href="https://www.instagram.com/agro_humana">
                            <img src="./images/insta_icon.png" alt="instagram icon" height="20" width="20">
                            <p>Agrohumana</p>
                        </a>
                    </div>
                    </span>
            </div>
            <div id="w-node-c1fa688e-bd46-f7c3-a60f-cbb4ba7b329e-ec556db0" class="w-form div-block">
                <form id="email-form" action='https://funagrohumana.agrotracdelcaribe.com/submit.form.php' name="email-form" data-name="Email Form" method="post" class="form-2">
                    <span class="button-see-all form">Súmate y sé solidario</span>
                    <input type="text" class="text-field-2 w-input" maxlength="256" name="name" data-name="Name"
                        placeholder="Nombre " id="name">
                    <input type="email" class="text-field-3 w-input"
                        maxlength="256" name="email" data-name="Email" placeholder="E-mail" id="email" required>
                    <input type="tel" class="text-field-3 w-input" maxlength="256" name="telefono" data-name="telefono"
                        placeholder="Teléfono" id="telefono">
                    <textarea class="text-field-3 w-input" name="mensaje"
                        placeholder="Escribe tu mensaje" id="mensaje"></textarea>
                    <button href="#" class="submit-button w-button ">Enviar</button>
                    </form>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#notice1').modal('show');
    // });
</script>
<div id="notice1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row pt-5">
                        <h2 class="hi-there-heading">Noticias ℹ️</h2>
                    </div>
                    <div class="row pb-5">
                        <div class="col-lg-6">
                            <p class="paragraph-light">Amigo campesino , la fundación Agro Humana en alianza con el banco agrario , les extiende la invitación a su primera brigada de créditos que se realizará en nuestras oficinas ubicadas en el municipio de sabanalarga ,  el día martes 18 de octubre desde las 2.30 pm .</p>
                            <p class="paragraph-light">Contamos con su presencia .</p>
                            <p class="paragraph-light">Atentamente :</p>
                            <p class="paragraph-light">Said ghisays .</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="./images/notice1.jpg" id="w-node-_9b2922ad-09b1-aebb-0430-7dee623c62c8-71556db3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
