
<?php

include ("entete_cont.php");
?>
<div id='main' role='main'>

	<div id='main-content-header'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<h1 class='title'>Contact</h1>
					<ol class='breadcrumb'>
						<li><i class='fa-icon-phone'></i></li>
						<li>N'hesiter à nous contacter</li>

					</ol>
				</div>
			</div>
		</div>
	</div>
	<div id='main-content'>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<div class='row text-center'>
						<div class='col-sm-3'>
							<div class='icon-wrap icon-circle contrast-bg icon-md'>
								<i class='fa-icon-map-marker text-white'></i>
							</div>
							<h3>Adresse</h3>
							<ul class='list-unstyled'>
								<li>Dakar</li>
								<li>Thiès</li>
								<li>SENEGAL</li>
							</ul>
						</div>
						<div class='col-sm-3'>
							<div class='icon-wrap icon-circle contrast-bg icon-md'>
								<i class='fa-icon-phone text-white'></i>
							</div>
							<h3>Téléphone</h3>
							<ul class='list-unstyled'>
								<li><a href="tel:+012345678910">00221 77 00 00 00</a></li>
								<li><a href="tel:+012345678911">00221 77 11 11 11</a></li>
								<li><a href="tel:+012345678911">00221 77 22 22 22</a></li>
							</ul>
						</div>
						<div class='col-sm-3'>
							<div class='icon-wrap icon-circle contrast-bg icon-md'>
								<i class='fa-icon-envelope-alt text-white'></i>
							</div>
							<h3>E-Mail</h3>
							<ul class='list-unstyled'>
								<li><a href="mailto:info@domain.com">info@linkbiz.com</a></li>
								<li><a href="mailto:support@domain.com">support@linkbiz.com</a></li>
								<li><a href="mailto:director@domain.com">director@linkbiz.com</a></li>
							</ul>
						</div>
						<div class='col-sm-3'>
							<div class='icon-wrap icon-circle contrast-bg icon-md'>
								<i class='fa-icon-exchange text-white'></i>
							</div>
							<h3>Réseaux sociaux</h3>
							<ul class='list-unstyled'>
								<li><a href="facebook.com">facebook</a></li>
								<li><a href="google.com">twitter</a></li>
								<li><a href="google.com">google+</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-6'>
					<div class='page-header page-header-with-icon'>
						<i class='fa-icon-map-marker'></i>
						<h2>Localisation</h2>
					</div>
					<div id='map-canvas'></div>
				</div>
				<div class='col-sm-6'>
					<div class='page-header page-header-with-icon'>
						<i class='fa-icon-envelope-alt'></i>
						<h2>Formulaire de contact</h2>
					</div>
					<form action='http://jednotka.bublinastudio.com/contact.html'
						class='form form-validation' method='get'>
						<div class='row'>
							<div class='col-sm-6'>
								<div class='form-group control-group'>
									<input class='form-control' data-rule-required='true'
										id='contact_name' name='contact[name]' placeholder='Name'
										type='text'>
								</div>
							</div>
							<div class='col-sm-6'>
								<div class='form-group control-group'>
									<input class='form-control' data-rule-email='true'
										data-rule-required='true' id='contact_email'
										name='contact[email]' placeholder='E-Mail' type='text'>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-12'>
								<div class='form-group control-group'>
									<textarea class='form-control' data-rule-required='true'
										id='contact_message' name='contact[message]'
										placeholder='Your message...'></textarea>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-12'>
								<button class='btn btn-contrast btn-block' type='submit'>
									Envoyer</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class='fade' id='scroll-to-top'>
		<i class='fa-icon-chevron-up'></i>
	</div>
</div>

<!-- / required javascripts -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script src="http://maps.googleapis.com/maps/api/js?sensor=false"
	type="text/javascript"></script>
<script>
      var initializeMap;
      
      initializeMap = function() {
        var iw1, latlng, map, marker, options;
      
        latlng = new google.maps.LatLng(14.7737777,-16.9453141);
        options = {
          scrollwheel: false,
          zoom: 16,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: true
        };
      
        map = new google.maps.Map(document.getElementById("map-canvas"), options);
      
        marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
      
        iw1 = new google.maps.InfoWindow({
          content: "Here we are!"
        });
      
        return google.maps.event.addListener(marker, "click", function(e) {
          return iw1.open(map, this);
        });
      };
      
      google.maps.event.addDomListener(window, 'load', initializeMap);
    </script>
<!-- / not required javascripts -->
<script src="assets/javascripts/demo.js" type="text/javascript"></script>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-44249116-1', 'bublinastudio.com');
      ga('send', 'pageview');
    </script>
<?php

include ("footer.php");
?>
