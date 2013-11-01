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
	<!-- ol class="midlist">
	 	<li>Please download the <b><i>Juno Eclipse Modeling Tools</i></b> from <a href="http://www.eclipse.org/downloads/packages/release/juno/sr2" target="_blank">
			http://www.eclipse.org/downloads/packages/release/juno/sr2</a></li>. Unzip and start Eclipse and update the system (<i>Help > Check for Updates</i>).</li>
	    <li>Restart Eclipse and install the EMF model transformation language <b><i>Henshin</i></b> (<i>Help > Install New Software... > 
			Work with: <a href="http://download.eclipse.org/modeling/emft/henshin/updates/release" target="_blank">http://download.eclipse.org/modeling/emft/henshin/updates/release</a> > next > ...</i>).</li>
		<li>Restart Eclipse and install the prototype implementation (branch of <b><i>EMF Refactor</i></b>):
			<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-fase2014" target="_blank">
		    http://download.eclipse.org/emf-refactor/updatesite-fase2014</a> > next > ...</i>.</li>
		<li>Restart Eclipse.</li>
	</ol -->
	<p>
	<h2>Projects</h2>
	<!-- ul class="midlist">
		<li><a href="downloads/fase2014_projects.zip" target="_blank">fase2014_projects</a></li>
	</ul>
	For evaluation purposes please download <b>fase2014_projects.zip</b> from above and import 
	the example projects <b>pdfsam_code</b>, <b>pdfsam_model</b>, and <b>VehicleRentalCompany</b> 
	into your workspace (<i>File > Import... > General > Existing Projects into Workspace > Next 
	> Select archive file > Browse (to the zip file) > Select all > Finish</i>).
	<br/><br/ -->
	
	<h2>Test results</h2>	
	The following pages summarize the results oof our tests concerning the correctness of both implementations:	
	<br/><br/>
	<ol class="midlist">
	 	<li>Test case 01: <a href="mok2014/Test01_Substitute_ClientNode/Results.html" target="_blank">Substitute Client Node</a></li>
	</ol>
	
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
