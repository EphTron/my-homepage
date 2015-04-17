
<nav class="menu">
  <ul class="clearfix">
    <li><a href="./index.php">Home</a></li>
    <li><a href="./projects.php" >Projects <span class="arrow">&#9660;</span></a>
      <ul class="sub-menu">
        <li><a href="./oculus.php">Oculus Rift</a></li>
        <li><a href="./plants.php">Plants vs Humans</a></li>
        <li><a href="./smartreviews.php">Smart Reviews</a></li>
        <li><a href="./vrmenus.php">VR Menus for Navigation</a></li>
      </ul>
    </li>
    <li><a href="./thoughts.php">My Thoughts</a></li>
    <li><a href="./myself.php">About me</a></li>
  </ul>
</nav>

<!--- script to set the active menu highlight -->
<script type="text/javascript">
  $(function () {
    set_current_item();
  });

  function set_current_item() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);
    path = path.replace("/homepage", "."); 
    console.log("Path:", path)

    $(".menu a").each(function () {
      var href = $(this).attr('href');
      console.log(href)
      if (path.substring(0, href.length) === href) {
        $(this).closest('li').addClass('current-item');
        console.log("done")
      }
    });
  }
</script>
