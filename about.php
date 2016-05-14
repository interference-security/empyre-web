<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EmPyre: About</title>
	<?php @require_once("includes/head-section.php"); ?>
</head>
<body>
    <div class="container">
        <?php @require_once("includes/navbar.php"); ?>
        <br>
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class='glyphicon glyphicon-info-sign'></span> About EmPyre Web v1.0</div>
                <div class="panel-body">
                    EmPyre Web utilizes the <a href="https://github.com/adaptivethreat/EmPyre">EmPyre REST API Server</a>. It is a web interface for using <a href="https://github.com/adaptivethreat/EmPyre">EmPyre</a>.<br><br>
                    EmPyre Web created by <a href="https://twitter.com/xploresec">@xploresec</a><br><br>
                    <a href="https://twitter.com/xploresec"><img src="img/twitter.png" style="width:48px; height:48px;"></a> &nbsp;&nbsp;&nbsp; 
                    <a href="https://github.com/interference-security/empyre-web/"><img src="img/github.png" style="width:48px; height:48px;"></a>
                </div>
            </div>
        </div>
    </div>
    <?php @require_once("includes/footer.php"); ?>
</body>
</html>
