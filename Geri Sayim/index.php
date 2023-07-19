<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<link rel="Stylesheet" type="text/css" href="style/main.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>SLAP BET</title>
</head>

<body>
<!-- www.muslu.net adresinden indirdin -->
	<div id="container">

		<h1>Geri sayım</h1>
		<h2 class="subtitle">Geri sayım</h2>

		<!-- Countdown dashboard start -->
		<div id="countdown_dashboard">
			<div class="dash weeks_dash">
				<span class="dash_title">hafta</span>
				<div class="digit"><?=$date['weeks'][0]?></div>
				<div class="digit"><?=$date['weeks'][1]?></div>
			</div>

			<div class="dash days_dash">
				<span class="dash_title">gün</span>
				<div class="digit"><?=$date['days'][0]?></div>
				<div class="digit"><?=$date['days'][1]?></div>
			</div>

			<div class="dash hours_dash">
				<span class="dash_title">saat</span>
				<div class="digit"><?=$date['hours'][0]?></div>
				<div class="digit"><?=$date['hours'][1]?></div>
			</div>

			<div class="dash minutes_dash">
				<span class="dash_title">dakika</span>
				<div class="digit"><?=$date['mins'][0]?></div>
				<div class="digit"><?=$date['mins'][1]?></div>
			</div>

			<div class="dash seconds_dash">
				<span class="dash_title">saniye</span>
				<div class="digit"><?=$date['secs'][0]?></div>
				<div class="digit"><?=$date['secs'][1]?></div>
			</div>

		</div>
		<!-- Countdown dashboard end -->

		<div class="dev_comment">
			KALDI
		</div>

		<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		8,
						'month': 	6,
						'year': 	2020,
						'hour': 	18,
						'min': 		59,
						'sec': 		59
					}
				});
			});
		</script>
	
	</div>
</body>

</html>
