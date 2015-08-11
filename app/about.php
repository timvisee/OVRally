<?php

use app\template\PageFooterBuilder;
use app\template\PageHeaderBuilder;

// Include the page top
require_once('top.php');

?>

<div data-role="page" id="page-about" data-unload="false">
    <?php PageHeaderBuilder::create('About')->setBackButton('index.php')->build(); ?>

    <div data-role="main" class="ui-content" align="center">
        <p>The OV Rally game is developed by <a href="http://timvisee.com/" target="_blank" title="About Tim Vis&eacute;e">Tim Vis&eacute;e</a>.</p>
        <br />
        <hr />
        <br />
        <p>Proudly powered by <a href="http://carboncms.nl/" target="_blank" title="Visit Carbon CMS">Carbon CMS</a>.</p>
        <br />
        <p>Maps based on <a href="http://leafletjs.com/" target="_blank" title="Visit Leaflet">Leaflet</a> and <a href="http://mapbox.com/" target="_blank" title="Visit MapBox">MapBox</a>.</p>
        <br />
        <p>Licenced under MIT license.</p>
        <br />
        <p>Copyright &copy; Tim Vis&eacute;e <?=date('Y'); ?>.<br />All rights reserved.</p>
    </div>

    <?php PageFooterBuilder::create()->build(); ?>
</div>

<?php

// Include the page bottom
require_once('bottom.php');