<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Modellierungskonferenz 2014 - Submission 40";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
	<h1>$pageTitle</h1>
	This area is dedicated to the research paper <b><i>Comparing Model-Driven and Custom Development 
	Approaches for Optimizing the Energy Consumption of ITC-Systems in the Cloud</i></b>
	submitted to the conference <b><a href="http://www.modellierung2014.org/home.html" target="_blank">
	Modellierung 2014</a></b>. It contains various material concerning the installation and evaluation of
	the approach respectively its prototype implementation.
	<br/><br/>
	
	<p>
	<h2>Installation Guide</h2>
	<ol class="midlist">
	 	
	 	<li>Please download the <b><i>Juno Eclipse Modeling Tools</i></b> from <a href="http://www.eclipse.org/downloads/packages/release/juno/sr2" target="_blank">
		http://www.eclipse.org/downloads/packages/release/juno/sr2</a></li>. Unzip and start Eclipse and update the system (<i>Help > Check for Updates</i>).</li>
	    
	    <li>Restart Eclipse and install the EMF model transformation language <b><i>Henshin</i></b> (<i>Help > Install New Software... > 
		Work with: <a href="http://download.eclipse.org/modeling/emft/henshin/updates/release" target="_blank">http://download.eclipse.org/modeling/emft/henshin/updates/release</a> > next > ...</i>).</li>
		
		<li>Restart Eclipse and install the EMF model quality assurance tool set <b><i>EMF Refactor</i></b>:
		<ul class="midlist">
		 	
		 	<li>Install the basic tools (<i>Help > Install New Software... > Work with: 
		 	<a href="http://download.eclipse.org/emf-refactor/updatesite-basic" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-basic</a> > next > ...</i>).</li>
		    
		    <li>Restart Eclipse and install the extending Henshin adapter (<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-extensions" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-extensions</a> > next > ...</i>).</li>
		    
		    <li>Restart Eclipse and install the PAM implementation (branch of <b><i>EMF Refactor</i></b>):
			<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-mok2014" target="_blank">
		    http://download.eclipse.org/emf-refactor/updatesite-mok2014</a> > next > ...</i>.</li>
		</ul></li>
		
		<li>Restart Eclipse.</li>
	</ol>
	<p>
	<h2>Projects</h2>
	<ul class="midlist">
		<li><a href="downloads/pam_test_models.zip" target="_blank">pam_test_models</a></li>
	</ul>
	For evaluation purposes please download <b>pam_test_models.zip</b> from above and import 
	the example project <b>PAM.tests</b> into your workspace (<i>File > Import... > General 
	> Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) 
	> Select all > Finish</i>).
	<br/><br/>
	<p>
	<h2>Test results</h2>	
	The following pages summarize the results oof our tests concerning the correctness of both implementations:	
	<br/><br/>
	<ul class="midlist">
	 	<li>Test Case 01: <a href="mok2014/Test01_Substitute_ClientNode/Results.html" target="_blank">Substitute Client Node</a></li>
	 	<li>Test Case 02: <a href="mok2014/Test02_Substitute_ServerNode/Results.html" target="_blank">Substitute Server Node</a></li>
	 	<li>Test Case 03: <a href="mok2014/Test03_Substitute_NetworkNode/Results.html" target="_blank">Substitute Network Node</a></li>
	 	<li>Test Case 04: <a href="mok2014/Test04_Substitute_UPS/Results.html" target="_blank">Substitute Uninterruptible Power Supply</a></li>
	 	<li>Test Case 05: <a href="mok2014/Test05_Substitute_Cooling/Results.html" target="_blank">Substitute Cooling</a></li>
	 	<li>Test Case 06: <a href="mok2014/Test06_Downscale_UPS/Results.html" target="_blank">Downscale Uninterruptible Power Supply</a></li>
	 	<li>Test Case 07: <a href="mok2014/Test07_Downscale_Cooling/Results.html" target="_blank">Downscale Cooling</a></li>
	 	<li>Test Case 08: <a href="mok2014/Test08_Delete_UPS/Results.html" target="_blank">Delete Uninterruptible Power Supply</a></li>
	 	<li>Test Case 09: <a href="mok2014/Test09_Delete_Cooling/Results.html" target="_blank">Delete Cooling</a></li>
	 	<li>Test Case 10: <a href="mok2014/Test10_Split_UPS/Results.html" target="_blank">Split Uninterruptible Power Supply</a></li>
	 	<li>Test Case 11: <a href="mok2014/Test11_Split_Cooling/Results.html" target="_blank">Split Cooling</a></li>
	 	<li>Test Case 12: <a href="mok2014/Test12_Split_NetworkNode/Results.html" target="_blank">Split Network Node</a></li>
	 	<li>Test Case 13: <a href="mok2014/Test13_Merge_UPS/Results.html" target="_blank">Merge Uninterruptible Power Supplies</a></li>
	 	<li>Test Case 14: <a href="mok2014/Test14_Merge_Cooling/Results.html" target="_blank">Merge Coolings</a></li>
	 	<li>Test Case 15: <a href="mok2014/Test15_Merge_NetworkNode/Results.html" target="_blank">Merge Network Nodes</a></li>
	</ul>
	
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">	
   		<h6>Incubation</h6>
		<p>This component is currently in its <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p>
   			<div align="center"><a href="/projects/what-is-incubation.php"><img align="center" src="/images/egg-incubation.png"  border="0" alt="Incubation" /></a></div>
 		</div>
		
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
