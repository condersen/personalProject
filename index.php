<?php include 'templates/headerTemplate.php'; ?>
<?php include 'backend/projectFunctions.php'; ?>
<?php $projects = get_project(); ?>
<!-- end head -->
<div id="content-container">
    <div class="container-fluid">
        <div class="col-md-12 content-head">
            <img class="placeholder" src="http://placehold.it/900x200" height="100%" width="100%" />
        </div>
    </div>
    <div class="container-fluid">
        <?php foreach($projects as $project); { ?> 
        <div class="project-container col-md-10">
            <div class="proj-img">
                <img src="http://placehold.it/450x350" class="placeholder" height="100%" width="100%" />
            </div>
            
            <div class="proj-content-cotnainer">
                <div class="proj-desc">
                    <p>
                        (insert project description here)
                    </p>
                </div>
                <div class="proj-lang">
                	<ul>
                        <li></li>
                    </ul>
                </div>
                <div class="proj-form">
                    <form class="project-form">
                        <input class="view-button" type="submit" value="view">
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- end content container -->
<?php include 'templates/footerTemplate.php'; ?>