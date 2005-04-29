<?php

$title = "The Globus Alliance";
$section = "section-1";
include_once( "./include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

        <div id="coverimage">
             <?php include( $SITE_PATHS["SERV_ALLIANCE"]."impact/scec-1.inc" ); ?>
        </div>

        <div id="main">
         
          <p></p>

          <hr>

          <!--<h2>Recent News</h2> -->
          <table class="news">
            <tr>
              <td><span class="newsdate">04.20.2005</span></td>
              <td><b>PURSE makes user registration easy.</b> 
                <a class="learnmore" href="http://www.grids-center.org/solutions/purse/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">04.09.2005</span></td>
              <td><b>See us in San Diego in May!</b> 
                <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]."events/"; ?>">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">04.09.2005</span></td>
              <td><b>UK Globus Week was a big success.</b> 
                <a class="learnmore" href="http://www.nesc.ac.uk/esi/events/519/">Learn more...</a></td>
            </tr>
            <tr>
              <td><span class="newsdate">02.25.2005</span></td>
              <td><b>GT 3.9.5 is available for testing.</b> 
                <a class="learnmore" href="http://www-unix.globus.org/toolkit/staging/news.html#02252005">Learn more...</a></td>
            </tr>
          </table>
          <p><a href="alliance/news/">Archive of Globus Alliance news</a></p>

          <hr>

          <h1>Welcome to Globus<sup><small>&reg;</small></sup></h1>

          <p>The <b>Globus Alliance</b> is a community of organizations and individuals developing 
              fundamental technologies behind the "Grid," which lets people share computing power, 
              databases, instruments, and other on-line tools securely across corporate, institutional, 
              and geographic boundaries without sacrificing local autonomy.  
              <a class="learnmore" href="<?=$SITE_PATHS["WEB_ALLIANCE"]; ?>">Learn more...</a></p>

          <p>The <b>Globus Toolkit</b> is an open source software toolkit used for building Grid systems and
             applications. It is being developed by the Globus Alliance and many others all over the world. 
             A growing number of projects and companies are using the Globus Toolkit to unlock the potential 
             of grids for their cause. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_TOOLKIT"]; ?>">Learn more...</a></p>

          <!-- COMMENTED OUT
          <p>Globus Alliance members have deep experience using <b>Grid Software</b> to overcome challenges 
             in leading-edge e-Science and e-Business initiatives. Some of this software is now part of the 
             Globus Toolkit, and some is not. The Globus Alliance is an active member in the community of
             Grid Software developers. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOFTWARE"]; ?>">Learn more...</a></p>

          <p>Together with e-Science and e-Business teams, we've identified <b>Grid Solutions</b> for a variety of
             problems that appear when sharing resources. These solutions offer roadmaps for new teams,
             allowing greater focus on challenges in other areas. 
             <a class="learnmore" href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Learn more...</a></p>
          -->

          <!--end div of main-->
        </div>
        <!--end div of content-->
      </div>
      <!--ending div of container-->
    </div>


    <div class="clearing">&nbsp;</div>
    <!--ending div of wrapper-->
  </div>
  <!--ending div of outer_wrapper-->
</div>

<div id="footer">

<hr class="first" />

<table width="100%">
  <tr>
    <td colspan=3><div align="center">Sponsors include:</div></td>
  </tr>
  <tr>
    <td width="33%"><div align="center"><a href="http://www.energy.gov/"><img src="img/doelogo.jpg" width="100" height="100" border="0"></a></div></td>
    <td width="33%"><div align="center"><a href="http://www.epsrc.ac.uk/"><img src="img/EPSRC2MONO.jpg" width="216" height="70" border="0"></a></div></td>
    <td width="33%"><div align="center"><a href="http://www.nsf.gov/"><img src="img/nsfd.jpg" width="100" height="100" border="0"></a></div></td>
  </tr>
</table>

  <hr class="first"/>

  <p class="panel">Comments? <a href="mailto:webmaster@globus.org">webmaster@globus.org</a></p>
  <p class="panel">Globus, Globus Alliance, and Globus Toolkit are trademarks<br>
    held by the University of Chicago.</p>
  <!--ending div of footer-->
</div>



</body>
</html>
