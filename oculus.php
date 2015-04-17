<?php require_once( 'hq/cms.php' ); ?>
<cms:template title='03 Oculus' />
<!DOCTYPE html>
<html>
  <head>
    <title>eFraps - Oculus</title>
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
        <?php  include ("page_parts/page_menu.php"); ?>
      </div> 

      <!-- Page Body -->
      <div id="page_body">
        <div class="my_content">
          <cms:editable name='main_content' type='richtext'> 
            original content 

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

