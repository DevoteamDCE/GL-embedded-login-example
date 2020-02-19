<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
	<meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>-callback">
	<meta name="salesforce-save-access-token" content="true">
	<meta name="salesforce-allowed-domains" content="<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>">
	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>

    <!--
	<meta http-equiv="refresh" content="0;url=<?php echo getenv('EMBEDDEDLOGIN_REDIRECT_TO_URL');?>" />
	-->
</head> 
<body>
</body>    
</html>
