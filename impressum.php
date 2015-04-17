<?php require_once( 'hq/cms.php' ); ?>
<cms:template title='09 Impressum' />
<!DOCTYPE html>
<html>
  <head>
    <title>eFraps - Impressum</title>
    <?php include ("page_parts/import.php"); ?>
    <meta charset="UTF-8">
  </head>
  <body>
    <div id="wrapper">
      <!-- Page Header  -->
      <div id="page_header">
        <?php include ("page_parts/page_header.php"); ?>
      </div>

      <!-- Page Menu Nav Bar -->
      <div id="page_menu">
        <?php include ("page_parts/page_menu.php"); ?>
      </div> 

      <!-- Page Body -->
      <div id="page_body">
        <div class="my_content">
          <cms:editable name='main_content' type='richtext'> 
            <h3>Impressum</h3>

            <p>&nbsp;</p>

            <p>Ephraim Schott<br />
            Hegelstr. 10<br />
            99423 Weimar<br />
            Deutschland</p>
            <p>&nbsp;</p>

            <p>Telefon: +49 1578 2939751<br />
            Mail: ephraim.schott@gmail.com<br />
            efraps.kochab.uberspace.de</p>

          </cms:editable>
        </div>
      </div>

      <!-- Page Footer -->
      <div id="page_foot">
        <?php include ("page_parts/page_foot.php"); ?>
      </div>
      
    </div>
  </body>
</html>
<?php COUCH::invoke(); ?>

