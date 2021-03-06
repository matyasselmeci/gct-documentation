<!--
<div id="headerlinks">
<br />
<a href="http://www.globus.org/faq.php">FAQ</a><br />
<a href="http://www.globus.org/site_map.php">Site Map</a><br />
<a href="http://dev.globus.org/wiki/Mailing_Lists">Contact Us</a>
</div>

<div id="header"> <div align="left"> 
<img src="http://www.globus.org/toolkit/images/globustoolkit.gif" alt="The Globus Toolkit" width="160" height="76" /></div>


<ul id="menu">
    <li id="nav-1"><a href="http://www.globus.org/">Home</a></li>
    <li id="nav-2"><a href="http://www.globus.org/alliance/">Globus Alliance</a></li>
    <li id="nav-3"><a href="http://www.globus.org/toolkit/">Globus Toolkit</a></li>
    <li id="nav-4"><a href="http://www.globus.org/grid_software/">Grid Software</a></li>
    <li id="nav-5"><a href="http://www.globus.org/solutions/">Grid Solutions</a></li>
	<li id="nav-6"><a href="https://dev.globus.org/wiki/Welcome">dev.globus</a></li>
    <!-- end of navigation list -->
  </ul>


<table class="navbartable" width="100%">
    <tr>
      <th>
	<?php 
//include_once( "/mcs/www-unix.globus.org/toolkit/breadcrumb.php" ); 
//globus_current_location(); ?> <br/><br/>Could this page be better? <a href="#feedback">Send us your feedback.</a>
      </th>

      <td>
	  
         <form method="GET" name="GlobusSearchForm"  onSubmit="GlobusSubmit()">
         <input type="radio" name="domain" value="nomail"  checked>&nbsp;Website&nbsp;
         <input type="radio" name="domain" value="mail">&nbsp;Email Lists&nbsp;
         Search:&nbsp;<input type="text" name="qinit" size="20"  
maxlength="200" value="" />
         <input type="hidden" name="cof" VALUE="S:http://www.globus.org/;VLC:#cccccc;AH:center;BGC:#ffffff;LH:76;LC:#003390;L:http://www.globus.org/img/globusalliance-nourl.gif;ALC:#003390;LW:170;T:#000000;AWFID:fb67b77f3237ebb9;">
         <input type="hidden" name="domains" value="www.globus.org">
             <br />
         <input type="hidden" name="sitesearch" value="www.globus.org">
         <input type="hidden" name="q" value="">
         </form>
      </td>
    </tr>

  </table>

</div>
-->
<div id="container">
	<?php 
//include_once( "/mcs/www-unix.globus.org/include/outofdate.php" ); 
//globus_out_of_date(); ?>

		<div id="leftbg">
		 <h2 class="smalltitle">Software Links</h2>
           <dl class="leftColumn">
		   		<dt><a href="/toolkit/docs/5.0/5.0.0/Usage_Stats.html">Usage Statistics</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/rn/">Release Notes</a></dt>
				<dt><a href="/toolkit/versioning.html">Versioning</a></dt>
				<dt><a href="/toolkit/downloads/">Downloads</a></dt>
				<dt><a href="/toolkit/advisories.html">Advisories</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/licenses/">Licenses</a></dt>
				<dt><a href="http://dev.globus.org/wiki/How_to_contribute">CVS &amp; Dev Tools</a></dt>
			</dl>
			
		<h2 class="smalltitle">Getting Started</h2>
			<dl class="leftColumn">
			<!--
				<dt><a href="/toolkit/docs/5.0/5.0.0/doc_overview.html">Doc Structure</a></dt>
				-->
				<dt><a href="/toolkit/docs/5.0/5.0.0/globus_is_modular.html">Globus Is Modular!</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/admin/install/">Installing GT</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/admin/quickstart/">Quickstart</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/admin/install/#gtadmin-platform">Platform Notes</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/developer/">GT Developer's Guide</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/user/">GT User's Guide</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/mig/">Migrating Guides</a></dt>
			</dl>
			
		<h2 class="smalltitle">Manuals</h2>
			<h2 class="smalltitle"></h2>
			<dl class="leftColumn">
			<dt><a href="/toolkit/docs/5.0/5.0.0/data/">Data Mgt</a>
				<dd><a href="/toolkit/docs/5.0/5.0.0/data/gridftp/">GridFTP</a></dd>
				<dd><a href="/toolkit/docs/5.0/5.0.0/data/rls/">RLS</a></dd>
				</dt>
			<dt><a href="/toolkit/docs/5.0/5.0.0/execution/">Execution Mgt</a>
			<dd><a href="/toolkit/docs/5.0/5.0.0/execution/gram5/">GRAM5</a></dd>
			</dt>
			<dt><a href="/toolkit/docs/5.0/5.0.0/security/">Security</a>
			<dd><a href="/toolkit/docs/5.0/5.0.0/security/gsic/">GSI C</a></dd>
				<dd><a href="/toolkit/docs/5.0/5.0.0/security/myproxy/">MyProxy</a></dd>
				<dd><a href="/toolkit/docs/5.0/5.0.0/security/openssh/">GSI-OpenSSH</a></dd>
				<dd><a href="/toolkit/docs/5.0/5.0.0/security/simpleca/">SimpleCA</a></dd>
			</dt>
			<dt><a href="/toolkit/docs/5.0/5.0.0/common/">Common Runtime</a>
			
				<dd><a href="/toolkit/docs/5.0/5.0.0/common/xio/">XIO</a></dd>
				<dd><a href="/toolkit/docs/5.0/5.0.0/common/ccommonlib/">C Common Libs</a></dd>
			</dt>
			</dl>
	
			
		<h2 class="smalltitle">Reference</h2>
			<dl class="leftColumn">
				<dt><a href="/toolkit/docs/5.0/5.0.0/developer/#gt-bestpractices">Best Practices</a></dt>
				<dt><a href="/toolkit/docs/development/coding_guidelines.html">Coding Guidelines</a></dt>
				<dt><a href="/api/">API docs</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/commands/">GT Commands</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/user/#public-interfaces">Public Interfaces</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/developer/#gt-rp">Resource Properties</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/developer/#gt-samples">Samples</a></dt>
				<dt><a href="/toolkit/docs/5.0/5.0.0/glossary.html">Glossary</a></dt>
				<!--
				<dt>Performance Studies (coming soon)</dt>
				-->
			</dl>
	
	</div>

<div id="docbookContent">
<!-- content STARTS here -->
