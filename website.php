<?php
	include 'variables/global.php';
	include 'variables/website.php';
?>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='icon' type='image/png' sizes='32x32' href='<?=$favicon?>'>
	<title><?=$title?></title>
	<meta name='description' content='<?=$description?>'>
	<meta name='robots' content='<?=$robots?>'>
	<link rel='canonical' href='<?=$url?>'>
	<link rel='publisher' href='<?=$googlePlus?>'>
	<meta property='fb:app_id' content='<?=$facebookAppId?>'>

	<!-- OG meta tags -->
	<meta property='og:site_name' content='<?=$siteName?>'>
	<meta property='og:title' content='<?=$socialTitle?>'>
	<meta property='og:description' content='<?=$socialDescription?>'>
	<meta property='og:type' content='<?=$type?>'>
	<meta property='og:url' content='<?=$url?>'>
	<meta property='og:image' content='<?=$socialImage?>'>

	<!-- Twitter -->
	<meta property='twitter:card' content='summary_large_image'>
	<meta property='twitter:image:src' content='<?=$socialImage?>'>
	<meta property='twitter:title' content='<?=$socialTitle?>'>
	<meta property='twitter:description' content='<?=$socialDescription?>'>
	<meta name='twitter:site' content='@<?=$twitterHandle?>'>
	<meta property='twitter:creator' content='@<?=$author?>'>

	<script type='application/ld+json'>
		<?php include 'json-ld/website.php';?>
	</script>
</head>
