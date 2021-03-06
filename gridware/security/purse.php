<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/ganglia.html

$title = "Grid Ecosystem - PURSE";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">PURSE: Portal-based User Registration Service</h1>

<p>
<img align="right" border=0 src="PURSE-1.jpg" style="float: right; margin-left: 0.3em" />
PURSE is an "integrated solution" that provides an easy-to-use web interface for potential users of an application to "register" themselves and request sign-in credentials. Administrators receive requests and decide whether to grant them or not. When a user is registered, a Grid credential is created on his behalf and used "behind the scenes" whenever he uses the application.
</p>

<p>
PURSE combines the <a href="simple-ca.php">Simple CA</a> and <a href="myproxy.php">MyProxy</a> components with a back-end database and a web portal to automate user registration requests. The registration interface solicits basic data from user, including a desired ID/password combination.  Requests are forwarded by email to an administrator and the data from the requests are stored in a database.  The administrator uses administrative functions in the web portal to process requests. Users receive email notification when their accounts are ready for use.
</p>

<p>
When an account is created, the portal generates a credential for that account automatically using the Simple CA component.  This credential is issued by the application administrator, so it is most likely only "valid" for use with the specific application and no others.  The credential is stored in the MyProxy service and secured using the requested ID/password combination.
</p>

<p>
When a user logs into the application, the application obtains a Grid proxy certificate from the MyProxy service using the user's ID/password, and the application can then use this proxy to authenticate to any other Grid service that recognizes credentials issued by the application administrator.
</p>

<p>Key benefits:</p>

<ul>
<li>Users never have to see or manage their Grid credentials.</li>
<li>The MyProxy service is automatically populated with user credentials which can be retrieved either from web portal interfaces or from desktop systems using the MyProxy client tools.</li>
<li>A database is automatically populated with basic information about all application users.</li>
<li>The registration service, user credentials, and MyProxy service can be re-used in other applications.</li>
</ul>

<?

$software = "PURSE";
$developer = "<a href='http://www.grids-center.org/'>GRIDS Center</a>";
$distros = "PURSE is not yet included in any known distribution, but it can be made available on request.";
$contact = "<a href='mailto:info@grids-center.org'>info@grids-center.org</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
