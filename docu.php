<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "EMF Refactor - Documentation";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";

	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>		
		<p>
		<h2>How to's: Application</h2>
		<ul class="midlist">
			<li><a href="metricscalculation.php">How to calculate EMF model metrics</a></li>
			<li><a href="smelldetection.php">How to detect EMF model smells</a></li>
			<li><a href="refactoringapplication.php">How to apply EMF model refactorings</a></li>
		</ul>
		(PDF versions can be found in the <a href="downloads.php">downloads</a> section. Videos are coming soon...) 
		</p>
		<p>
		<h2>How to's: Specification</h2>
		<ul class="midlist">
			<li><a href="metricsjava.php">How to generate new EMF model metrics using Java code</a></li>
			<li><a href="metricsmetrics.php">How to generate new EMF model metrics using existing metrics</a></li>
			<li><a href="metricsocl.php">How to generate new EMF model metrics using OCL expressions</a></li>
			<li><a href="metricshenshin.php">How to generate new EMF model metrics using Henshin pattern rules</a></li>
			<li><a href="smellsjava.php">How to generate new EMF model smells using Java code</a></li>
			<li><a href="smellsmetrics.php">How to generate new EMF model smells using existing metrics</a></li>
			<li><a href="smellshenshin.php">How to generate new EMF model smells using Henshin pattern rules</a></li>
			<li><a href="refactoringsjava.php">How to generate new EMF model refactorings using Java code</a></li>
			<li><a href="refactoringshenshin.php">How to generate new EMF model refactorings using Henshin transformations</a></li>
		</ul>
		(PDF versions can be found in the <a href="downloads.php">downloads</a> section. Videos are coming soon...) 
		</p>
		<p>
		<h2>Slides from Tutorial at <a href="http://www2.imm.dtu.dk/conferences/ECMFA-2012/" target="_blank">ECMFA 2012</a></h2>
		<ul class="midlist">
			<li><a href="downloads/ImprovingTheQualityOfEMFModels.pdf" target="_blank"><i>Improving the Quality of EMF models using metrics, smells, and refactorings</i></a></li>
		</ul>
		</p>
		<p>
		<h2>Slides from Tutorial at <a href="http://www2.imm.dtu.dk/conferences/ECMFA-2012/" target="_blank">ECMFA 2012</a></h2>
		<ul class="midlist">
			<li><a href="downloads/ImprovingTheQualityOfEMFModels.pdf" target="_blank"><i>Improving the Quality of EMF models using metrics, smells, and refactorings</i></a></li>
		</ul>
		</p>
		
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
