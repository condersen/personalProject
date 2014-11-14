<?php // Connects to your Database
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("portfolio") or die(mysql_error());
?>
<?php
	include 'templates/headerTemplate.php';
?>
<?php
$data = mysql_query("SELECT * FROM projects") or die(mysql_error());
$info = mysql_fetch_array($data);
?>
<!-- end head -->
<div id="content-container">
	<div class="container-fluid">
		<div class="col-md-12 content-head">
			<img class="placeholder" src="http://placehold.it/900x200" height="100%" width="100%" />
		</div>
	</div>
	<?php ?>
	<div class="container-fluid">
		<div class="project-container col-md-10">
			<div class="proj-img">
				<img src="http://placehold.it/450x350" class="placeholder" height="100%" width="100%" />
			</div>
			<div class="proj-content-cotnainer">
				<div class="proj-desc">
					<p>
					</p>
				</div>
				<div class="proj-lang">
					<ul></ul>
				</div>
				<div class="proj-form">
					<form class="project-form">
						<input class="view-button" type="submit" value="view">
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php ?>
</div>
<!-- end content container -->
<?php
	include 'templates/footerTemplate.php';
?>