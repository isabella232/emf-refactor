<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Supported Techniques";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
		
	EMF Refactor actually supports the following model quality assurance techniques for Ecore and UML2 models:
		
	<h3>Quality assurance techniques for Ecore models</h3>
	<ol class="midlist">
    	<li>23 metrics</li>
    	<li>3 model smells</li>
    	<li>22 model refactorings</li>
	</ol>
	
	<h3>Quality assurance techniques for UML2 models</h3>
	<ol class="midlist">
    	<li>107 metrics</li>
    	<li>27 model smells</li>
    	<li>27 model refactorings</li>
	</ol>
	
	</p>
	<p>
	Lists of provided techniques can be found here: <a href="https://wiki.eclipse.org/Techniques" target="_blank">Techniques</a>.
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

