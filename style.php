
header("Content-Type: text/css");


$primaryColor = "#3498db";
$secondaryColor = "#2ecc71";
$fontFamily = "'Arial', sans-serif";
?>

/* Body Genel Ayarlar */
body {
color: #333;
margin: 0;
padding: 0;
height: 100%;
}

#hakkimda {
padding: 60px 20px;
text-align: center;
color: #fff;
font-family: Arial, sans-serif;
}

#hakkimda h2 {
font-size: 2.5rem;
font-weight: bold;
margin-bottom: 20px;
text-transform: uppercase;
text-align: center;
}

#hakkimda p {
font-size: 1.5rem;
line-height: 1.8;
max-width: 800px;
margin: 0 auto;
padding: 0 20px;
}

/* Navbar */
.navbar {
font-family: "Sigmar One", sans-serif;
font-weight: 400;
font-style: normal;
background-color: rgba(0, 0, 0, 0.7);
z-index: 1000;
}

/* Projeler Başlık */
.projeler-baslik {
font-weight: 400;
font-style: normal;
text-align: center;
font-size: 2rem;
color: white;
margin-bottom: 20px;
text-transform: uppercase;
font-weight: bold;
position: relative;
}

.projeler-baslik::after {
content: "";
position: absolute;
width: 80%;
height: 2px;
background-color: aqua;
bottom: -25px;
left: 50%;
transform: translateX(-50%);
}

.navbar-nav .nav-link {
font-family: "Sigmar One", sans-serif;
font-weight: 400;
font-style: normal;
color: white;
padding: 10px 15px;
border-radius: 5px;
text-decoration: none;
position: relative;
transition: color 0.3s ease, background-color 0.3s ease;
margin-left: 20px;
}

.navbar-nav .nav-link:hover {
color: #fff;
background-color: darkcyan;
}

/* Diğer hover efektleri */
.navbar-nav .nav-link::before {
content: "";
position: absolute;
top: 0;
left: 0;
width: 0;
height: 100%;
background-color: darkcyan;
transition: width 0.3s ease;
z-index: -1;
}

.navbar-nav .nav-link:hover::before {
width: 100%;
}

/* Header */
#header {
height: 100vh;
background-image: url('img/bg.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
color: #fff;
text-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
padding-top: 70px;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
}



/* Animasyonlar */
@keyframes fadeInDown {
from {
opacity: 0;
transform: translateY(-30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

@keyframes fadeInUp {
from {
opacity: 0;
transform: translateY(30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

/* Animasyonları Uygulama */
.header-title {
font-size: 3rem;
font-weight: bold;
opacity: 0;
animation: fadeInDown 1s ease forwards;
}

.header-subtitle {
font-size: 1.5rem;
opacity: 0;
animation: fadeInUp 1s ease 0.5s forwards;
}

/* Footer */
footer {
background-color: #222222;
color: #fff;
padding: 20px 0;
}

footer a {
color: #f8f9fa;
text-decoration: none;
margin: 0 10px;
}

footer a:hover {
color: #f1c40f;
}

html, body {
margin: 0;
padding: 0;
height: 100%;
background-color: #1a1a2e;
color: black;
}
