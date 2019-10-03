<!DOCTYPE html>
<html>
<head>

<title><?php echo strip_tags(file_get_contents('./title.html'));?></title>
<link rel="shortcut icon" href="favicon.png" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="charset" value="utf-8" />
<style>
body {font-size:115%;}
</style>
<meta name="description" content="<?php echo htmlentities(file_get_contents('./short_description.txt'));?>" />

</head>
<body id="body">
<?php require_once('./header.html');?>
<h1><?php require_once('./title.html');?></h1>	
	<?php require_once('./long_description.html');?>
	
	<hr/>TOC<hr/>
<ol style="font-size:50%;">
	<strong>Not implemented</strong>
</ol>
<hr/>
	
	<strong>Not implemented</strong>
	
	
	 <h2><strong>Not implemented</strong> - Changelog</h2>

	 <a href="javascript:void(0);" onClick="document.getElementById('changelog_textarea').style.display='block';this.style.display='none';"> Read...</a>

	 <noscript>Javascript is required to access the changelog</noscript>
	 <textarea  style="width:100%;display:none;" rows="40" id="changelog_textarea">

NOT IMPLEMENTED
	 
	 
	 
	 
	 </textarea>
	 <a name="<?php echo htmlspecialchars('./footer_label.txt');?>"/><h2><strong>Not implemented</strong> - <?php require_once('./footer_title.html');?></h2>
	 
	 <?php require_once('./footer.html');?>
<div style="font-size:50%;text-align:right;">Powered by <a href="https://github.com/shangril/sipasi">Sipasi single page site</a></div>	 
</body>
</html>
