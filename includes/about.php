<div class="row starthidden" id="about">
  <div class="fullcolumn">
    <?php
      //$aboutArr =  pg_fetch_array($result, pg_num_rows($result)-1, PGSQL_NUM);
          echo "<div class=\"card\">\n";
          echo "<h2 class=\"cardtitleabout center\">$aboutArr[1]</h2>\n";
          if ($aboutArr[6] !="") {
            echo "<img class=\"cardimgabout\" src=\"$aboutArr[6]\" alt=\"$aboutArr[7]\">\n";
          }
          echo "<p>";
          echo $aboutArr[8];
          echo "</p>\n";
          echo "</div>\n";
      ?>
  </div>
</div>
