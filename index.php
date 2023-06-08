<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <title>Protocollo Intestino - Meetab</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css" media="all">
        <link rel="stylesheet" href="assets/css/style.css" media="all">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <header class="header-navigation text-center">
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img width="140" height="" src="img/logo-meetab-white.png" alt="Logo Meetab"></a>
                    </div>
                </nav>
            </div>
        </header>

        <main>

            <?php
            // Controlla se il form è stato inviato
            if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
                // la password non è case sensitive
                $password = strtolower( $_POST['password'] );

                // Controlla se la password è corretta
                if ( $password === 'protocollo2023' ) {
                    // Mostra il contenuto protetto
                    ?>

                    <div class="hero text-center">

                        <div class="container">

                            <div class="wave">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                	<path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                                </svg>
                            </div>

                            <h1>Lorem ipsum dolor sit amet consectetur</h1>
                            <p class="m-30">Orci sagittis eu volutpat odio facilisis mauris sit amet massa. Maecenas ultricies mi eget mauris pharetra. Vel risus commodo viverra maecenas. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc.</p>

                            <a class="btn btn-primary" href="#video">guarda il video</a>

                        </div>

                    </div>

                    <div id="video" class="video p-bottom-60">
                        <div class="container">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://player.vimeo.com/video/833248025?h=5f15436ff5&color=#00a835" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="download p-top-60 p-bottom-120">
                        <div class="container text-center">
                            <h2>Scelerisque viverra mauris in aliquam</h2>
                            <p class="m-30">Maecenas ultricies mi eget mauris pharetra. Vel risus commodo viverra maecenas. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc.</p>

                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 m-top-60 gx-5 text-center">
                                <div class="col">
                                    <div class="card card-lg rounded-5">
                                        <div class="card-body">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                                                </svg>
                                            </div>
                                            <h3>Protocollo Intestino Metabolomico</h3>
                                            <p>Orci sagittis eu volutpat odio. Luctus accumsan tortor posuere ac ut consequat semper viverra nam. In mollis nunc sed id semper risus in.</p>
                                            <a class="btn btn-primary" href="assets/media/protocollo-intestino-metabolomico.pdf">scarica il pdf</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-lg rounded-5">
                                        <div class="card-body">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                                                </svg>
                                            </div>
                                            <h3>Protocollo dott.ssa Marcon</h3>
                                            <p>Orci sagittis eu volutpat odio. Luctus accumsan tortor posuere ac ut consequat semper viverra nam. In mollis nunc sed id semper risus in.</p>
                                            <a class="btn btn-primary" href="assets/media/protocollo-meetab-dott-ssa-marcon.pdf">scarica le slides</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-lg rounded-5">
                                        <div class="card-body">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                                                </svg>
                                            </div>
                                            <h3>Protocollo ing. Zoppelletto</h3>
                                            <p>Orci sagittis eu volutpat odio. Luctus accumsan tortor posuere ac ut consequat semper viverra nam. In mollis nunc sed id semper risus in.</p>
                                            <a class="btn btn-primary" href="assets/media/protocollo-intestino-meetab-ing-zoppelletto.png">scarica le slides</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                } else {
                // Mostra il form di login con un messaggio di errore
                ?>

                <div class="hero text-center accedi">

                    <div class="container">

                        <h1>Accedi al contenuto</h1>
                        <p class="m-30">Inserisci la password per accedere al contenuto</p>

                        <form method='POST' action='index.php'>
                            <input type='password' name='password'>
                            <button class="btn btn-primary" type='submit'>Accedi</button>
                            <p class="error">Password errata. Riprova.</p>
                        </form>

                    </div>

                </div>

                <?php
                }
            } else {
                // Mostra il form di login
                ?>
                <div class="hero text-center accedi">

                    <div class="container">

                        <h1>Accedi al contenuto</h1>
                        <p class="m-30">Inserisci la password per accedere al contenuto</p>

                        <form method='POST' action='index.php'>
                            <input type='password' name='password'>
                            <button class="btn btn-primary" type='submit'>Accedi</button>
                        </form>

                    </div>

                </div>

                <?php
            }
            ?>

        </main>

        <footer class="copyright mt-auto">
            <div class="container text-center">
                &copy; Meetab SRL | P.IVA/C.F. 07790350966 | R.E.A. MI-1982153 | <a href="https://www.iubenda.com/privacy-policy/69066433" target="_blank">Privacy Policy</a>
            </div>
        </footer>

        <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html>
