<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Tutorial MoDELS 2013";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
	<h1>$pageTitle</h1>
	This page contains various material concerning the tutorial <b><i>Understanding Complex Changes and Improving the Quality of UML and Domain-Specific Models</i></b>
	at the ACM/IEEE 16th International Conference on Model Driven Engineering Languages and Systems (<a href="http://www.modelsconference.org/" target="_blank">MoDELS 2013</a>).
	<p>
	<h2>Installation Guide</h2>
	<ol class="midlist">
	 	<li>Please download the <b><i>Juno Eclipse Modeling Tools</i></b> from <a href="http://www.eclipse.org/downloads/packages/release/juno/sr2" target="_blank">
		http://www.eclipse.org/downloads/packages/release/juno/sr2</a></li>. Unzip and start Eclipse and update the system (<i>Help > Check for Updates</i>).</li>
	    <li>Restart Eclipse and install the UML modeling environment <b><i>Papyrus</i></b> (<i>Help > Install New Software... > Work with: Juno > Modeling
		> Papyrus SDK Binaries > next > ...</i>).</li>
		<li>Restart Eclipse and install the reporting tool <b><i>BIRT</i></b> 
		(<i>Help > Install New Software... > Work with: Juno > Business... > BIRT Framework > next > ...</i>).</li>
		<li>Restart Eclipse and install the EMF model transformation language <b><i>Henshin</i></b> (<i>Help > Install New Software... > 
		Work with: <a href="http://download.eclipse.org/modeling/emft/henshin/updates/release" target="_blank">http://download.eclipse.org/modeling/emft/henshin/updates/release</a> > next > ...</i>).</li>
		<li>Restart Eclipse and install the EMF model quality assurance tool set <b><i>EMF Refactor</i></b>:
		<ul class="midlist">
		 	<li>Install the basic tools (<i>Help > Install New Software... > Work with: 
		 	<a href="http://download.eclipse.org/emf-refactor/updatesite-basic" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-basic</a> > next > ...</i>).</li>
		    <li>Install the extending tools except for the Xtext extension (<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-extensions" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-extensions</a> > next > ...</i>).</li>
		    <li>Install the UML examples (<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-examples" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-examples</a> > next > ...</i>).</li>
		    <li>Install the example DSL Simple Web Modeling Language (SWM) (<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-models2013" target="_blank">http://download.eclipse.org/emf-refactor/updatesite-models2013</a> > next > ...</i>).</li>
		</ul></li>
		<li>Restart Eclipse and install the EMF model versioning tool SiLift:
		<ul class="midlist">
			<li>Install the SiLift core components and UI (Help > Install New Software... > Work with: 
			<a href="http://pi.informatik.uni-siegen.de/Projekte/SiLift/updatesite-models2013" target="_blank">http://pi.informatik.uni-siegen.de/Projekte/SiLift/updatesite-models2013</a> > SiLift - Core Components > next > ...).</li>
			<li>Install the SiLift UML2/Papyrus adaption (Help > Install New Software... > Work with: 
			<a href="http://pi.informatik.uni-siegen.de/Projekte/SiLift/updatesite-models2013" target="_blank">http://pi.informatik.uni-siegen.de/Projekte/SiLift/updatesite-models2013</a> > SiLift - Language Adaptions 
			> SiLift adaptions for UML2 > next > ...). </li>
		</ul></li>		
		<li>Restart Eclipse.</li>
	</ol>
	<p>
	<h2>Projects</h2>
	<ul class="midlist">
		<li><a href="downloads/uml_example_project.zip" target="_blank">Example project for UML modeling environment Papyrus</a></li>
		<li><a href="downloads/simplewebmodel_example_projects.zip" target="_blank">Example projects for DSL Simple Web Model</a></li>
	</ul>
	<ol class="midlist">
	 	<li>For the first part of the tutorial please download <b>uml_example_project.zip</b> from above and import the contained example
		project into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).</li>
		<li>For the second part of the tutorial please download <b>simplewebmodel_example_projects.zip</b> from above and import the contained example
		projects into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).</li>
	</ol>		
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
