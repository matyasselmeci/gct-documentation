<?php
$title = "Grid Solutions - The TeraGrid Copy Solution";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'solutions.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Moving Data Fast on the TeraGrid</h1>

<p>TeraGrid (<a href="http://www.teragrid.org/">www.teragrid.org</a>) is one of 
the National Science Foundation's flagship 
high-performance computing facilities. It is a distributed facility, with 
computation and storage resources operated by nine resource provider sites. Each 
of the nine sites contributes a unique specialization to the TeraGrid facility, 
such as massive computation power, data archiving facilities, or visualization 
services. The sites are linked by dedicated 10 and 30 Gb/s network connections.</p>


<p>Because of the various specializations of each site and because some applications 
require use of more than one site, it is common for application users to have to 
move data from one site to another. The output of a large simulation computed at 
one site may need to be archived at another site and visualized for end users at 
a third site. This data is often very large, ranging from several hundred 
gigabytes to tens of terabytes. The data may be stored in a small number of very 
large files or a large number of smaller files.</p>

<div id="solutions-sidebar" style="float: right; margin-right: 1em">
<h2>More Information</h2>
<ul>
<li><a href="http://www.teragrid.org/">About TeraGrid</a></li>
<li><a href="architecture.php">TCGP Architecture</a></li>
<li><a href="deployment.php">Deployment Details</a></li>
<li><a href="resources.php">Software Availability</a></li>
</ul>
</div>

<p>Data movement is not a productive activity, so the time spent on it should be 
minimized. Above all, the "hands on" time spent by scientists or application users 
to accomplish the data movement must be minimized.</p>

<p>The challenge faced by TeraGrid was to deliver a sophisticated data 
movement capability that could attain very high transfer speeds on the TeraGrid 
network without requiring users to learn the ins and outs of the system to use it 
effectively. This need was met using Grid technology. Specifically, it was 
satisfied using a high-performance data movement architecture that includes the
Globus Toolkit 4.0's striped GridFTP service and the Reliable File Transfer (RFT)
service, combined with a front-end command-line tool called "tgcp" (TeraGrid 
copy) that makes the architecture accessible to TeraGrid users.</p>

<p>The resulting system provides TeraGrid with the following benefits.</p>

<ul>
<li>Simple user interface
<li>Very high performance data transfer capability
<li>Ability to recover from both client and server software failures, continuing any incomplete transfers
<li>Extensible configuration that can be changed dynamically by administrators
<li>Administrators can move users to/from specific services without users needing to know about it
</ul>

<p>
<img border=0 src="teragrid-map.jpg" width=473 height=266 alt="Map of TeraGrid">
</p>

<h2>Requirements</h2>

<p>Taking full advantage of a 10 or 30 Gb/s network link for an individual file 
transfer (or for a large number of small file transfers) is a challenging prospect. 
Most TeraGrid systems have at best 1 Gb/s network interfaces, so even the best 
software running on one system at each end of the network would only be able to 
use a fraction of the available network capacity. Nevertheless, TeraGrid users 
expect to be able to use the full capacity of the network, subject to competition 
from other users. (In rare cases, users might expect to have full use of the 
network for a brief, scheduled period of time.)</p>

<p>The infrastructure required to satisfy this expectation is readily available from 
Grid software components. However, in order to use this infrastructure, end users 
and scientists would ordinarily have to learn how the software components are 
deployed at each site, how the network behaves between each site (tuning the 
software to fit these properties optimally), and, in general, what strategy to use 
to get the optimal transfer time. TeraGrid users expect that they will not have to 
learn these details to get good transfer times.</p>

<h2>How TGCP Works - An Example</h2>

<p>Most users of the TeraGrid system establish remote login shells and use 
command line interfaces on the TeraGrid systems. These users are familiar 
with the GridFTP client command (globus-url-copy), but this command requires 
them to know details about how local and remote filesystems are organized 
and where local and remote GridFTP servers are installed. Users are also 
familiar with the interactive GridFTP client (UberFTP), but it has the same 
limitations. Users are familiar with the GSI-enabled "secure copy" command (gsi-scp), 
and typically prefer its simpler style of specifying source and destination 
files, but this command can not attain the performance required by TeraGrid 
users. Because the RFT service has never been installed on TeraGrid, users 
are not familiar with its client interface.</p>

<p>We developed a command-line script, called "tgcp," to serve as the user 
interface for TeraGrid's data movement capability. The tcgp command accepts 
SCP-style source and destination specifications. (Local paths can be relative 
or absolute, remote paths look the same but have the hostname and a colon 
as a prefix.) </p>

<blockquote>tgcp smallfile.dat tg-login.sdsc.teragrid.org:/users/ux454332</blockquote>

<p>In the command above, the user wants a file in the current working directory 
(smallfile.dat) to be transferred to a home directory on the system named 
tg-login.sdsc.teragrid.org.</p>

<p>As it happens, the source file (smallfile.dat) can be accessed by a 
well-connected GridFTP server on the local network. This GridFTP server has 
a much faster network interface card than the local system. Rather than 
using the local system's slow network interface, tgcp translates the local 
filename into the corresponding name on the local GridFTP server. (This behavior
is configured by the system administrator who installs the tgcp command on the
local system.)</p>

<p>The tgcp command above might result in a transfer that looks like the following.</p>

<blockquote>globus-url-copy -p 8 -tcp-bs 1198372 \<br>
 gsiftp://tg-gridftprr.uc.teragrid.org:2811/home/navarro/smallfile.dat \<br>
 gsiftp://tg-login.sdsc.teragrid.org:2811/users/ux454332/smallfile.dat</blockquote>

<p>Note that in addition to translating the source filename into local GridFTP
source, tgcp also adds protocol parameters in order to attain the optimal network
performance for this specific source and destination. (In this case, the transfer
will use 8 parallel TCP streams and will use a TCP buffer size of 1,198,372 bytes.)
This behavior is also configured by the system administrator and is derived from a 
table of optimal parameters between specific TeraGrid sites.</p>

<p>This translation mechanism allows system administrators to direct transfers 
through the high-performance services at their sites and ensure that transfers are
performed with optimal network parameters without users needing to know how the
TeraGrid system is constructed.</p>

<p>Unlike gsi-scp, tgcp allows both source and destination to be remote. When 
this happens, the transfer goes directly from the remote source to the remote 
destination without any of the data passing through the client system.  The tgcp 
command also allows the source to be a directory, in which case the 
entire contents of the directory are transferred to the destination, which must 
also be a directory.</p>

<p>The tgcp command offers a small number of command line options in addition to 
the source and destination specifications. The "-rft" option instructs TGCP to 
use the RFT service to manage the transfer, which allows the transfer to restart 
and continue to completion in the event of a client failure, a failure of the 
source or destination GridFTP servers, or a failure of the RFT service itself. 
The "-big" option instructs TGCP to use a striped GridFTP transfer, which uses 
multiple nodes at the source and destination to consume more of the network 
bandwidth for the transfer than a single system could use by itself. </p>

<p>In addition to these two options, the tgcp command accepts and passes through 
any globus-url-copy or rft options that the user specifies. Most tgcp users 
will not know what these options are, but sophisticated users may customize 
their transfers further using these additional features.</p>

<h2>Detailed Information</h2>

<p>
The following links provide more detail about the TeraGrid Copy (TGCP) solution.
</p>

<ul>
<li><a href="architecture.php">Detailed architecture</a> of the TGCP solution</li>
<li><a href="deployment.php">Deployment details</a> on TeraGrid</li>
<li><a href="resources.php">Software availability</a></li>
<li><a href="http://www.teragrid.org/">Overview of the TeraGrid</a> 
     (from the TeraGrid website)</li>
</ul>

</div>

<? include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
