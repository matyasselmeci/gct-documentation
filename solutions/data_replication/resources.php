<?php
$title = "Grid Solutions - Data Replication for LIGO (Resources)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Lightweight Data Replicator Resources</h1>

<p>
The Lightweight Data Replicator (LDR) solution builds on components of the 
Globus Toolkit, components that are not yet part of the Toolkit, and other
components developed specifcially for LDR.  This page provides information 
about where and how you can access the tools used in this implementation.
</p>

<p>
The current version of LDR uses components from the Globus Toolkit 3.2. 
References below are to the 4.0 versions of these components.
If you intend to install and use LDR, we recommend that you use the
"integrated installation" method mentioned below, which will install the
3.2 versions of these components.
</p>

<p>
The Data Replication Service (DRS) is not currently used by LIGO, but is
included because it provides comparable functionality.
</p>

<table class="boxed">
<tr>
<td class="tablekey">GSI</td>
<td>The Grid Security Infrastructure (GSI) tools and libraries are available in the Globus Toolkit 4.0:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/security/"; ?>">http://www.globus.org/toolkit/docs/4.0/security/</a></td>
</tr>
<tr>
<td class="tablekey">GridFTP</td>
<td>A GridFTP service and its related tools are available in the Globus Toolkit 4.0:<br>
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/data/gridftp/"; ?>">http://www.globus.org/toolkit/docs/4.0/data/gridftp/</a></td>
</tr>
<tr>
<td class="tablekey">RLS</td>
<td>The Replica Location Service (RLS) and related tools are available in the Globus Toolkit 4.0:
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/data/rls/"; ?>">http://www.globus.org/toolkit/docs/4.0/data/rls/</a></td>
</tr>
<tr>
<td class="tablekey">PyGlobus</td>    
<td>PyGlobus is available in the Globus Toolkit 4.0:
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/contributions/pyglobus/"; ?>">http://www.globus.org/toolkit/docs/4.0/contributions/pyglobus/</a></td>
</tr>
<tr>
<td class="tablekey">LDR</td>    
<td>The rest of the LDR components and documentation are available from the LDR website, 
at <a href="http://www.lsc-group.phys.uwm.edu/LDR/">http://www.lsc-group.phys.uwm.edu/LDR/</a>. 
Note that <em>all</em> of the LDR components (including those listed separately above) can
be installed together as an "integrated installation" using PACMAN caches maintained by 
the LDR development team.</td>
</tr>
<tr>
<td class="tablekey">DRS</td>
<td>The Data Replication Service (DRS) is available in the Globus Toolkit 4.0 as a 
technology preview:
<a href="<?=$SITE_PATHS["WEB_TOOLKIT"]."docs/4.0/techpreview/datarep/"; ?>">http://www.globus.org/toolkit/docs/4.0/techpreview/datarep/</a></td>
</tr>
</table>

<p></p>

</div>

<?
include($SITE_PATHS["SERV_INC"].'footer.inc');
?>
