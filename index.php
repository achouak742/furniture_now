<html>
<head>
<title> Flower </title>
<link rel="stylesheet" href="css.css">
<link href="https://fonts.googleapis.com/css?family=cairo|comfortaa|Karla"rel="stylesheet">
<link  href="css/fontawesome.min.css" rel="stylesheet"/>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Flower</a>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Our-Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
<!--header -->
 <section class="home bd-grid" id="home">
                <div class="home__data">
<div class="header">
<div class="opacity"></div>
<p>welcome To Flower Furniture</p>
</div>
</section>
 <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>                                      
                </div>          
<p>
<span>A b o u t</span>
Lorem ipsum dolor sit amet,consectetur adipiscing elit.Integer malesuada sapien sit amet elit 
tempor, sed placerat odio elementum. Etiam nec ornare nibh.Fusce cursus efficitur tupis ac 
ultricies.Vestibulum convallis sapien id velit pharetra,sed faucibus lorem feugiat.Quisque ut
pellentesque toror.Paresent vestiblum condimentum gravide.Proin sollicitudin turpis leo,a
faucibus magna pulvinar in. Donec tellus nisl,convallis ut condimentum eget, finibus eget nunc.
Aliquam tincidunt lorem sed gravide interdum.
</p>
<img src="image/ilhemb.jpg">
</div>
 </section>
<!-- our works-->
  <section class="work section" id="work">
                <h2 class="section-title">o u r w o r k s</h2>
                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="image/h1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="image/h2.jpg" alt="">
                    </div>
                    <div class="work__img">
                      <img src="image/h4.jpg" alt="">
                    </div>
                    <div class="work__img">
                       <img src="image/h5.jpg"  alt="">
                    </div>
                    <div class="work__img">
                        <img src="image/h6.jpg"" alt="">
                    </div>
                    <div class="work__img">
                       <img src="image/h7.jpg"  alt="">
                    </div>
                </div>
            </section>
<!--===== CONTACT =====-->
<section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
				</section>
<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>
<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Name" required></p>
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
  <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
</form>


<!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Flower</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram
