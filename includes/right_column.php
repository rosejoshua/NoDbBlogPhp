<div class="rightcolumn" id="right_column">
  <div class="rightcard">
    <?php
      //$aboutArr =  pg_fetch_array($result, pg_num_rows($result)-1, PGSQL_NUM);
      echo "<h2 class=\"center\">\n";
      echo "<a class=\"nostyle\" href=\"/demos/blog/about\" data-link>\n";
      echo $aboutArr[1] . "\n";
      echo "</a>\n";
      echo "</h2>\n";
      echo "<img class=\"headshot\" src=\"$aboutArr[6]\" alt=\"$aboutArr[7]\"/>\n";
      echo "<p class=\"centersmaller\">\n";
      echo "<a class=\"nostyle\" href=\"/demos/blog/about\" data-link>\n";
      echo substr($aboutArr[8],0,344) . "...\n";
      echo "</a>\n";
      echo "</p>\n";
    ?>
  </div>
  <div class="rightcard">
    <h2 class="center">Connect</h2>
    <div class="row center">
        <a href="https://github.com/rosejoshua"><img class="socialicons center" src="images/github.svg" alt="GitHub logo"></a>
        <a href="https://www.youtube.com/channel/UCSrxiAK9F0pyxDUpr3ETf_Q"><img class="socialicons center" src="images/youtube.svg" alt="YouTube logo"></a>
        <a href="https://www.linkedin.com/in/joshuaroseprofile/"><img class="socialicons center" src="images/linkedin.svg" alt="LinkedIn logo"></a>
    </div>
    <p class="centersmaller">Feel free to connect on any of these social-media platforms. I am happy to network and answer any questions you might have.</p>
  </div>
</div>
