<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php

		if($_POST['language'] == 'de')
		{

			$content_array = array(
				'title' => $_POST['app_name'],
				'home_link' => 'Home',
				'features_link' => 'Features',
				'prices_link' => 'Preise',
				'about_link' => 'Über uns',
				'reviews_link' => 'Bewertungen',
				'contact_link' => 'Kontakt',
				'h2_1' => $_POST['h2_1'],
				'h2_1_sub' => $_POST['h2_1_sub'],
				'col_1' => $_POST['col_1'],
				'col_2' => $_POST['col_2'],
				'col_3' => $_POST['col_3'],
				'h2_2' => $_POST['h2_2'],
				'h2_2_sub' => $_POST['h2_2_sub'],
				'h2_prices' => $_POST['h2_prices'],
				'h2_prices_sub' => $_POST['h2_prices_sub'],
				'price_1' => $_POST['price_1'],
				'price_2' => $_POST['price_2'],
				'price_3' => $_POST['price_3'],
				'currency' => '€',
				'buy_link' => 'Kaufen',
				'starter' => $_POST['starter'],
				'business' => $_POST['business'],
				'professional' => $_POST['professional'],
				'h2_buy' => 'Jetzt kaufen',
				'h2_buy_sub' => 'Einfach und sicher bestellen',
				'h2_reviews' => 'Bewertungen',
				'h2_reviews_sub' => 'Das sagen unsere Nutzer',
				'h2_contact' => 'Kontakt',
				'h2_contact_sub' => 'Gerne beantworten wir all Ihre Fragen',
				'info_box_1_h2' => $_POST['info_box_1_h2'],
				'info_box_1_h2_sub' => $_POST['info_box_1_h2_sub'],
				'info_box_1_text' => $_POST['info_box_1_text'],
				'info_box_2_h2' => $_POST['info_box_2_h2'],
				'info_box_2_h2_sub' => $_POST['info_box_2_h2_sub'],
				'info_box_2_text' => $_POST['info_box_2_text'],
				'contact_us' => 'Kontaktieren Sie uns',
				'name_label' => 'Name',
				'email_label' => 'E-Mail',
				'phone_label' => 'Telefon',
				'subject_label' => 'Betreff',
				'services_label' => 'Services',
				'month' => 'Monat',
				'please_select_label' => '- Bitte auswählen -',
				'service_1_label' => 'Frage',
				'service_2_label' => 'Feedback',
				'service_3_label' => 'Bestellung',
				'send_label' => 'Absenden',
				'message_label' => 'Nachricht',
				'firstname' => 'Vorname',
				'lastname' => 'Nachname',
				'email' => 'E-Mail',
				'company_name' => $_POST['company_name'],
				'street' => $_POST['street'],
				'zip' => $_POST['zip'],
				'city' => $_POST['city'],
				'phone_label' => 'Phone',
				'fax_label' => 'Fax',
				'web_label' => 'Web',
				'phone' => $_POST['phone'],
				'fax' => $_POST['fax'],
				'web' => $_POST['web'],
				'next' => 'Weiter',
				'youtube_id' => $_POST['youtube_id'],
				'buy_now_link' => 'Jetzt kaufen',
				'subscribe_text' => 'Abonnieren Sie jetzt unseren Newsletter und bleiben Sie immer informiert:',
				'subscribe_btn' => 'Abonnieren',
				'reviews_array' => array(
					array(	$_POST['review_1_name'],
							$_POST['review_1_text']),
					array(	$_POST['review_2_name'],
							$_POST['review_2_text']),
					array(	$_POST['review_3_name'],
							$_POST['review_3_text']),
					array(	$_POST['review_4_name'],
							$_POST['review_4_text'])
				)
			);

		}

		if($_POST['language'] == 'en')
		{

			$content_array = array(
				'title' => $_POST['app_name'],
				'home_link' => 'Home',
				'features_link' => 'Features',
				'prices_link' => 'Prices',
				'about_link' => 'About',
				'reviews_link' => 'Reviews',
				'contact_link' => 'Contact',
				'h2_1' => $_POST['h2_1'],
				'h2_1_sub' => $_POST['h2_1_sub'],
				'col_1' => $_POST['col_1'],
				'col_2' => $_POST['col_2'],
				'col_3' => $_POST['col_3'],
				'h2_2' => $_POST['h2_2'],
				'h2_2_sub' => $_POST['h2_2_sub'],
				'h2_prices' => $_POST['h2_prices'],
				'h2_prices_sub' => $_POST['h2_prices_sub'],
				'price_1' => $_POST['price_1'],
				'price_2' => $_POST['price_2'],
				'price_3' => $_POST['price_3'],
				'currency' => '$',
				'buy_link' => 'Buy',
				'starter' => $_POST['starter'],
				'business' => $_POST['business'],
				'professional' => $_POST['professional'],
				'h2_buy' => 'Buy Now',
				'h2_buy_sub' => 'Order now easily and safely',
				'h2_reviews' => 'Reviews',
				'h2_reviews_sub' => 'Users are giving feedback',
				'h2_contact' => 'Contact',
				'h2_contact_sub' => 'We are happy to answer all questions',
				'info_box_1_h2' => $_POST['info_box_1_h2'],
				'info_box_1_h2_sub' => $_POST['info_box_1_h2_sub'],
				'info_box_1_text' => $_POST['info_box_1_text'],
				'info_box_2_h2' => $_POST['info_box_2_h2'],
				'info_box_2_h2_sub' => $_POST['info_box_2_h2_sub'],
				'info_box_2_text' => $_POST['info_box_2_text'],
				'contact_us' => 'Contact us',
				'name_label' => 'Name',
				'email_label' => 'Email',
				'phone_label' => 'Phone',
				'subject_label' => 'Subject',
				'services_label' => 'Services',
				'month' => 'month',
				'please_select_label' => '- Please select -',
				'service_1_label' => 'Question',
				'service_2_label' => 'Feedback',
				'service_3_label' => 'Order',
				'send_label' => 'Send',
				'message_label' => 'Message',
				'firstname' => 'First name',
				'lastname' => 'Last name',
				'email' => 'Email',
				'company_name' => $_POST['company_name'],
				'street' => $_POST['street'],
				'zip' => $_POST['zip'],
				'city' => $_POST['city'],
				'phone_label' => 'Phone',
				'fax_label' => 'Fax',
				'web_label' => 'Web',
				'phone' => $_POST['phone'],
				'fax' => $_POST['fax'],
				'web' => $_POST['web'],
				'next' => 'Next',
				'youtube_id' => $_POST['youtube_id'],
				'buy_now_link' => 'Buy now',
				'subscribe_text' => 'Subscribe to our newsletter and stay up to date:',
				'subscribe_btn' => 'Subscribe',
				'reviews_array' => array(
					array(	$_POST['review_1_name'],
							$_POST['review_1_text']),
					array(	$_POST['review_2_name'],
							$_POST['review_2_text']),
					array(	$_POST['review_3_name'],
							$_POST['review_3_text']),
					array(	$_POST['review_4_name'],
							$_POST['review_4_text'])
				)
			);

		}

		if($_POST['language'] == 'it')
		{

			$content_array = array(
				'title' => $_POST['app_name'],
				'home_link' => 'Inizio',
				'features_link' => 'Caratteristiche',
				'prices_link' => 'Prezzi',
				'about_link' => 'Riguardo a noi',
				'reviews_link' => 'Recensioni',
				'contact_link' => 'Contatto',
				'h2_1' => $_POST['h2_1'],
				'h2_1_sub' => $_POST['h2_1_sub'],
				'col_1' => $_POST['col_1'],
				'col_2' => $_POST['col_2'],
				'col_3' => $_POST['col_3'],
				'h2_2' => $_POST['h2_2'],
				'h2_2_sub' => $_POST['h2_2_sub'],
				'h2_prices' => $_POST['h2_prices'],
				'h2_prices_sub' => $_POST['h2_prices_sub'],
				'price_1' => $_POST['price_1'],
				'price_2' => $_POST['price_2'],
				'price_3' => $_POST['price_3'],				
				'currency' => '€',
				'buy_link' => 'Acquistare',
				'starter' => $_POST['starter'],
				'business' => $_POST['business'],
				'professional' => $_POST['professional'],
				'h2_buy' => 'Acquista ora',
				'h2_buy_sub' => 'Ordina ora facilmente e in sicurezza',
				'h2_reviews' => 'Recensioni',
				'h2_reviews_sub' => 'Gli utenti stanno dando un feedback',
				'h2_contact' => 'Contatto',
				'h2_contact_sub' => 'Siamo felici di rispondere a tutte le domande',
				'info_box_1_h2' => $_POST['info_box_1_h2'],
				'info_box_1_h2_sub' => $_POST['info_box_1_h2_sub'],
				'info_box_1_text' => $_POST['info_box_1_text'],
				'info_box_2_h2' => $_POST['info_box_2_h2'],
				'info_box_2_h2_sub' => $_POST['info_box_2_h2_sub'],
				'info_box_2_text' => $_POST['info_box_2_text'],
				'contact_us' => 'Contattaci',
				'name_label' => 'Nome',
				'email_label' => 'E-mail',
				'phone_label' => 'Telefono',
				'subject_label' => 'Soggetto',
				'services_label' => 'Servizi',
				'month' => 'mese',
				'please_select_label' => '- Per favore selezionare -',
				'service_1_label' => 'Domanda',
				'service_2_label' => 'Risposta',
				'service_3_label' => 'Ordine',
				'send_label' => 'Spedire',
				'message_label' => 'Messaggio',
				'firstname' => 'Nome di battesimo',
				'lastname' => 'Cognome',
				'email' => 'E-mail',
				'company_name' => $_POST['company_name'],
				'street' => $_POST['street'],
				'zip' => $_POST['zip'],
				'city' => $_POST['city'],
				'phone_label' => 'Phone',
				'fax_label' => 'Fax',
				'web_label' => 'Web',
				'phone' => $_POST['phone'],
				'fax' => $_POST['fax'],
				'web' => $_POST['web'],
				'next' => 'Il prossimo',
				'youtube_id' => $_POST['youtube_id'],
				'buy_now_link' => 'Acquista ora',
				'subscribe_text' => 'Iscriviti alla nostra newsletter e rimani aggiornato:',
				'subscribe_btn' => 'Sottoscrivi',
				'reviews_array' => array(
					array(	$_POST['review_1_name'],
							$_POST['review_1_text']),
					array(	$_POST['review_2_name'],
							$_POST['review_2_text']),
					array(	$_POST['review_3_name'],
							$_POST['review_3_text']),
					array(	$_POST['review_4_name'],
							$_POST['review_4_text'])
				)
			);

		}

	?>

	<!-- Document Title
	============================================= -->
	<title><?php echo $content_array['title']; ?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<section id="slider" class="slider-element slider-parallax full-screen with-header swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image: url('images/header.jpg');">
							<div class="container clearfix">

							</div>
						</div>
					</div>
				</div>

			</div>

		</section>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="#" data-href="#home"><div><?php echo $content_array['home_link']; ?></div></a></li>
							<li><a href="#" data-href="#section-features"><div><?php echo $content_array['features_link']; ?></div></a></li>
							<li><a href="#" data-href="#section-pricing"><div><?php echo $content_array['prices_link']; ?></div></a></li>
							<li><a href="#" data-href="#section-about"><div><?php echo $content_array['about_link']; ?></div></a></li>
							<li><a href="#" data-href="#section-reviews"><div><?php echo $content_array['reviews_link']; ?></div></a></li>
							<li><a href="#" data-href="#section-contact"><div><?php echo $content_array['contact_link']; ?></div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-features" class="page-section">

					<div class="container clearfix bottommargin-lg">

						<div class="heading-block center">
							<h2><?php echo $content_array['h2_1']; ?></h2>
							<span><?php echo $content_array['h2_1_sub']; ?></span>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/1.png">
								</div>
								<div class="fbox-desc">
									<p><?php echo $content_array['col_1']; ?></p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/2.png">
								</div>
								<div class="fbox-desc">
									<p><?php echo $content_array['col_2']; ?></p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/3.png">
								</div>
								<div class="fbox-desc">
									<p><?php echo $content_array['col_3']; ?></p>
								</div>
							</div>
						</div>

						<div class="clear"></div>

					</div>

					<div class="container clearfix center">

						<div class="heading-block center">
							<h2><?php echo $content_array['h2_2']; ?></h2>
							<span><?php echo $content_array['h2_2_sub']; ?></span>
						</div>

						<div class="col_one_third norightmargin bottommargin-sm" style="padding-right: 10px;">
							<img data-animate="fadeInLeftBig" src="images/4.png">
						</div>

						<div class="col_one_third norightmargin bottommargin-sm" style="padding-right: 10px;">
							<img data-animate="fadeInUpBig" src="images/5.png">
						</div>

						<div class="col_one_third norightmargin bottommargin-sm" style="padding-right: 10px;">
							<img data-animate="fadeInRightBig" src="images/6.png">
						</div>

					<div class="line"></div>

					</div>

					<div class="container clearfix center">

						<div class="col_half norightmargin bottommargin-sm" style="padding-right: 10px;">
							<img data-animate="fadeInLeftBig" src="images/appstore-logo.jpg">
						</div>

						<div class="col_half norightmargin bottommargin-sm" style="padding-right: 10px;">
							<img data-animate="fadeInRightBig" src="images/playstore-logo.jpg">
						</div>

					<div class="line"></div>

					</div>

				</section>



				<section id="section-pricing" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2><?php echo $content_array['h2_prices']; ?></h2>
						<span><?php echo $content_array['h2_prices_sub']; ?></span>
					</div>

					<div class="container clearfix">

						<div class="row pricing bottommargin clearfix">

							<div class="col-lg-4" data-animate="fadeInLeft">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3><?php echo $content_array['starter']; ?></h3>
									</div>
									<div class="pricing-price">
										<span class="price-unit"><?php echo $content_array['currency']; ?></span><?php echo $content_array['price_1']; ?><span class="price-tenure">/mo</span>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>100</strong> User Accounts</li>
											<li><strong>1 Year</strong> License</li>
											<li>Phone &amp; Email Support</li>
										</ul>
									</div>
									<div class="pricing-action one-page-menu">
										<a href="#" data-href="#section-order" class="btn btn-danger btn-block btn-lg"><?php echo $content_array['buy_link']; ?></a>
									</div>
								</div>

							</div>

							<div class="col-lg-4" data-animate="fadeInDown"  data-delay="250">

								<div class="pricing-box best-price">
									<div class="pricing-title">
										<h3><?php echo $content_array['professional']; ?></h3>
										<span>Most Popular</span>
									</div>
									<div class="pricing-price">
										<span class="price-unit"><?php echo $content_array['currency']; ?></span><?php echo $content_array['price_2']; ?><span class="price-tenure">/mo</span>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>1000</strong> User Accounts</li>
											<li><strong>2 Years</strong> License</li>
											<li><i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i></li>
										</ul>
									</div>
									<div class="pricing-action one-page-menu">
										<a href="#" data-href="#section-order" class="btn btn-danger btn-block btn-lg bgcolor border-color"><?php echo $content_array['buy_link']; ?></a>
									</div>
								</div>

							</div>

							<div class="col-lg-4" data-animate="fadeInUp" data-delay="500">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3><?php echo $content_array['business']; ?></h3>
									</div>
									<div class="pricing-price">
										<span class="price-unit"><?php echo $content_array['currency']; ?></span><?php echo $content_array['price_3']; ?><span class="price-tenure">/mo</span>
									</div>
									<div class="pricing-features">
										<ul>
											<li><strong>Full</strong> Access</li>
											<li><i class="icon-code"></i> Source Files</li>
											<li><strong>500</strong> User Accounts</li>
											<li><strong>3 Years</strong> License</li>
											<li>Phone &amp; Email Support</li>
										</ul>
									</div>
									<div class="pricing-action one-page-menu">
										<a href="#" data-href="#section-order" class="btn btn-danger btn-block btn-lg"><?php echo $content_array['buy_link']; ?></a>
									</div>
								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="section-order">

					<div class="section notopmargin">
						<div class="container clearfix">

							<div id="section-rsvp" class="heading-block title-center topmargin page-section">
								<h2><?php echo $content_array['h2_buy']; ?></h2>
								<span><?php echo $content_array['h2_buy_sub']; ?></span>
							</div>

							<div class="form-widget">
								<div class="form-result"></div>

								<form id="wedding-rsvp-form" action="include/form.php" method="post" class="bottommargin-lg divcenter" style="max-width: 500px;">

									<div class="form-process"></div>

									<div class="col_full">
										<input type="text" name="wedding-rsvp-name" id="wedding-rsvp-name" required="true" class="form-control required form-control-lg" placeholder="<?php echo $content_array['firstname']; ?>">
									</div>

									<div class="col_full">
										<input type="text" name="wedding-rsvp-email" id="wedding-rsvp-email" required="true" class="form-control required email form-control-lg" placeholder="<?php echo $content_array['lastname']; ?>">
									</div>

									<div class="col_full">
										<input type="text" name="wedding-rsvp-email" id="wedding-rsvp-email" required="true" class="form-control required email form-control-lg" placeholder="<?php echo $content_array['email']; ?>">
									</div>

									<div class="col_full">
										<select name="wedding-rsvp-events" id="wedding-rsvp-events" required="true" class="form-control required form-control-lg">
											<option value="<?php echo $content_array['starter']; ?>"><?php echo $content_array['starter']; ?> (<?php echo $content_array['currency']; ?><?php echo $content_array['price_1']; ?> / <?php echo $content_array['month']; ?>)</option>
											<option value="<?php echo $content_array['professional']; ?>"><?php echo $content_array['professional']; ?> (<?php echo $content_array['currency']; ?><?php echo $content_array['price_2']; ?> / <?php echo $content_array['month']; ?>)</option>
											<option value="<?php echo $content_array['business']; ?>"><?php echo $content_array['business']; ?> (<?php echo $content_array['currency']; ?><?php echo $content_array['price_3']; ?> / <?php echo $content_array['month']; ?>)</option>
										</select>
									</div>

									<div class="col_full hidden">
										<input type="text" id="wedding-rsvp-botcheck" name="wedding-rsvp-botcheck" value="" class="form-control" />
									</div>

									<div class="col_full nobottommargin">
										<button type="submit" name="wedding-rsvp-submit" id="wedding-rsvp-submit" class="button button-3d btn-block nomargin button-dark button-xlarge" value="submit"><?php echo $content_array['next']; ?></button>
									</div>

									<input type="hidden" name="prefix" value="1">
									<input type="hidden" name="subject" value="2">
									<input type="hidden" name="message[success]" value="3">

								</form>

							</div>
						</div>

					</div>
				</section>

				<section id="section-about">	

					<div class="container clearfix">

						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $content_array['youtube_id']; ?>" frameborder="0" allowfullscreen></iframe>

					</div>

				</section>

				<section id="section-services" class="page-section topmargin-lg">

					<div class="section notopmargin nobottommargin">
						<div class="container clearfix">

							<div class="col_half nobottommargin topmargin-lg one-page-menu">

								<div class="heading-block topmargin-lg">
									<h2><?php echo $content_array['info_box_1_h2']; ?></h2>
									<span><?php echo $content_array['info_box_1_h2_sub']; ?></span>
								</div>

								<p><?php echo $content_array['info_box_1_text']; ?></p>

								<a href="#" data-href="#section-order" class="button button-border button-rounded button-large button-dark noleftmargin"><?php echo $content_array['buy_now_link']; ?></a>

							</div>

							<div class="col_half nobottommargin topmargin-lg col_last">

								<img src="images/7.png" alt="Image" class="center-block">

							</div>

						</div>
					</div>

					<div class="section notopmargin nobottommargin">
						<div class="container clearfix">

							<div class="col_half nobottommargin topmargin-lg">

								<img src="images/8.png" alt="Image" class="center-block">

							</div>

							<div class="col_half nobottommargin topmargin-lg col_last one-page-menu">

								<div class="heading-block topmargin-lg">
									<h2><?php echo $content_array['info_box_2_h2']; ?></h2>
									<span><?php echo $content_array['info_box_2_h2_sub']; ?></span>
								</div>

								<p><?php echo $content_array['info_box_2_text']; ?></p>

								<a href="#" data-href="#section-order" class="button button-border button-rounded button-large button-dark noleftmargin"><?php echo $content_array['buy_now_link']; ?></a>

							</div>

						</div>
					</div>

				</section>

				<section id="section-reviews" class="page-section section parallax dark" style="padding: 200px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

					<div class="container clearfix">

						<div class="col_full nobottommargin col_last">

							<div class="heading-block center">
								<h4><?php echo $content_array['h2_reviews']; ?></h4>
								<span><?php echo $content_array['h2_reviews_sub']; ?></span>
							</div>

							<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<?php for($i=0;$i<count($content_array['reviews_array']);$i++): ?>
										<div class="slide">
											<div class="testi-content">
												<p><?php echo $content_array['reviews_array'][$i][1]; ?></p>
												<div class="testi-meta">
													<?php echo $content_array['reviews_array'][$i][0]; ?>
												</div>
											</div>
										</div>
										<?php endfor; ?>
									</div>
								</div>
							</div>

						</div>

					</div>

				</section>

				<section id="section-contact" class="page-section">

					<div class="heading-block title-center">
						<h2><?php echo $content_array['h2_contact']; ?></h2>
						<span><?php echo $content_array['h2_contact_sub']; ?></span>
					</div>

					<div class="container clearfix">

						<!-- Contact Form
						============================================= -->
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3><?php echo $content_array['contact_us']; ?></h3>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name"><?php echo $content_array['name_label']; ?> <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email"><?php echo $content_array['email_label']; ?> <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone"><?php echo $content_array['phone_label']; ?> <small>*</small></label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="required sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject"><?php echo $content_array['subject_label']; ?> <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service"><?php echo $content_array['services_label']; ?></label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value=""><?php echo $content_array['please_select_label']; ?></option>
										<option value="1"><?php echo $content_array['service_1_label']; ?></option>
										<option value="2"><?php echo $content_array['service_2_label']; ?></option>
										<option value="3"><?php echo $content_array['service_3_label']; ?></option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message"><?php echo $content_array['message_label']; ?> <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><?php echo $content_array['send_label']; ?></button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>

						</div>


						</div><!-- Contact Form End -->

						<div class="col_half col_last">

						</div>

					</div>

				</section>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<?php echo $content_array['company_name']; ?><br>
										<?php echo $content_array['street']; ?><br>
										<?php echo $content_array['zip']; ?>, <?php echo $content_array['city']; ?><br>
									</address>
									<abbr title="Phone Number"><strong><?php echo $content_array['phone_label']; ?>:</strong></abbr> <?php echo $content_array['phone']; ?><br>
									<abbr title="Fax"><strong><?php echo $content_array['fax_label']; ?>:</strong></abbr> <?php echo $content_array['fax']; ?><br>
									<abbr title="Web"><strong><?php echo $content_array['web_label']; ?>:</strong></abbr> <?php echo $content_array['web']; ?><br>
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget clearfix">
								
							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">

							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">


							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><?php echo $content_array['subscribe_text']; ?></h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="<?php echo $content_array['email']; ?>">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit"><?php echo $content_array['subscribe_btn']; ?></button>
									</div>
								</div>
							</form>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half col_last tright">

					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>