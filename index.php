

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kişisel Web Sitem</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.php">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bangers&family=Bebas+Neue&family=Bruno+Ace&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Mono+One&family=Sigmar+One&family=Ultra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.php">


</head>

<body>

<table id="productTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Barcode</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Status</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

    <script>
        $(document).ready(function () {
            $('#productTable').DataTable({
                serverSide: true,
                ajax: 'index.php?action=get_products', // PHP dosyasında "get_products" isteği yapılıyor
                columns: [
                    { data: 0 },
                    { data: 1 },
                    { data: 2 },
                    { data: 3 },
                    { data: 4 },
                    { data: 5 },
                    { data: 6 }
                ]
            });
        });
    </script>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Talha Mert</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#hakkimda">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projeler">Projeler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#iletisim">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <header id="header" class="d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="header-title">Merhaba, Ben Talha</h1>
            <p class="header-subtitle">Yaratıcı Çözümler Sunan Yazılım Geliştirici</p>
            <a href="#hakkimda" class="btn btn-primary mt-3">Hakkımda</a>
        </div>
    </header>

    <section id="hakkimda">
        <h2>Hakkımda</h2>
        <p>
            Ben Talha, web geliştirme, tasarım ve teknoloji dünyasına olan ilgimi hayata geçirme yolculuğundayım. 
            Yaratıcı ve problem çözme becerilerimi projelerimde uygulayarak, kullanıcı dostu ve işlevsel web siteleri oluşturuyorum.
        </p>
    </section>

    <h2 class="projeler-baslik">PROJELER</h2>

<section id="iletisim">

    <section id="projeler" class="container my-5">
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card project-card mb-4">
                    <img src="img/resim.jpg" class="card-img-top" alt="Proje 1">
                    <div class="card-body">
                        <h5 class="card-title">Proje 1</h5>
                        <p class="card-text">Bu projede yapmış olduğum çalışmalar ve özellikler hakkında kısa bir açıklama.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card mb-4">
                    <img src="img/resim.jpg" class="card-img-top" alt="Proje 2">
                    <div class="card-body">
                        <h5 class="card-title">Proje 2</h5>
                        <p class="card-text">Bu projede yapmış olduğum çalışmalar ve özellikler hakkında kısa bir açıklama.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card mb-4">
                    <img src="img/resim.jpg" class="card-img-top" alt="Proje 3">
                    <div class="card-body">
                        <h5 class="card-title">Proje 3</h5>
                        <p class="card-text">Bu projede yapmış olduğum çalışmalar ve özellikler hakkında kısa bir açıklama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container text-center">
            <p>Telefon: (+90) 552 619 2720</p>
            <p>Email: talhamert38@gmail.com</p>
            <a href="https://www.instagram.com/talhamert03/">
                <img src="img/insta.png" alt="insta" style="width: 40px; height: 40px;">
              </a>
        </div>
    </footer>
    


</body>


