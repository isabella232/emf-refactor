<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "EMF Refactor - Downloads";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
	<h2>Releases</h2>
		
<h3>Version 0.9.0</h3>
<ul class="midlist">
 	<li><a href="downloads/refactor-0.9.0.20140416144044.jar">refactor-0.9.0.20140416144044.jar</a> (released April 16, 2014 14:40)</li>
    <li><a href="downloads/refactor-extensions-0.9.0.20140416165932.jar">refactor-extensions-0.9.0.20140416165932.jar</a> (released April 16, 2014 16:59)</li>
    <li><a href="downloads/refactor-examples-0.9.0.20140416170258.jar">refactor-examples-0.9.0.20140416170258.jar</a> (released April 16, 2014 17:02)</li>
</ul>

<h3>Version 0.8.0</h3>
<ul class="midlist">
 	<li><a href="downloads/refactor-0.8.0.20130926170658.jar">refactor-0.8.0.20130926170658.jar</a> (released Sep 27, 2013 10:46)</li>
    <li><a href="downloads/refactor-extensions-0.8.0.20130924140016.jar">refactor-extensions-0.8.0.20130924140016.jar</a> (released Sep 27, 2013 10:46)</li>
    <li><a href="downloads/refactor-examples-0.8.0.20130926154816.jar">refactor-examples-0.8.0.20130926154816.jar</a> (released Sep 27, 2013 10:46)</li>
</ul>

<h3>Version 0.7.0</h3>
<ul class="midlist">
 	<li><a href="downloads/refactor-0.7.0.20121217203940.jar">refactor-0.7.0.20121217203940.jar</a> (released Dez 17, 2012 21:09)</li>
    <li><a href="downloads/refactor-extensions-0.7.0.20121218154459.jar">refactor-extensions-0.7.0.20121218154459.jar</a> (released Dez 18, 2012 15:47)</li>
    <li><a href="downloads/refactor-examples-0.7.0.20130104130920.jar">refactor-examples-0.7.0.20130104130920.jar</a> (released Jan 04, 2013 13:13)</li>
</ul>
		<h3>Version 0.6.0</h3>
		<ul class="midlist">
		    <li><a href="downloads/refactor-0.6.0.20111019171158.jar">refactor-0.6.0.20111019171158.jar</a> (released Oct 19, 2011 17:12)</li>
		</ul>
		<h3>Version 0.5.0</h3>
		<ul class="midlist">
    		<li><a href="downloads/refactor-0.5.0.20110111155417.jar">refactor-0.5.0.20110111155417.jar</a> (released Jan 11, 2011 15:54)</li>
		</ul>
		
		<h2>How to's</h2>
		<ul class="midlist">
			<li><a href="downloads/manual_application.pdf" target="_blank">How to apply EMF model refactorings</a></li>
			<li><a href="downloads/manual_generation.pdf" target="_blank">How to generate new EMF model refactorings using Java code</a></li>
			<li><a href="downloads/manual_henshin.pdf" target="_blank">How to generate new EMF model refactorings using Henshin transformations</a></li>
		</ul>
		<h2>Specials</h2>
		This download area is dedicated to the article <b><i>Besser modellieren - Qualit&auml;tssicherung von UML-Modellen</i></b> 
		submitted to the <a href="http://www.sigs-datacom.de/fachzeitschriften/objektspektrum.html" target="_blank">OBJEKTspektrum</a> magazine on June 20, 2012, 
		to the tutorial at <a href="http://www2.imm.dtu.dk/conferences/ECMFA-2012/" target="_blank">ECMFA 2012</a> on July 2, 2012 (find tutorial slides in
		the <a href="docu.php">documentation</a> section) 
		as well as to the application paper <i>Quality Assurance of Textual Models within Eclipse using OCL and Model Transformations</i> submitted to 
		the <a href="http://ocl2013.inf.mit.bme.hu/" target="_blank">13th International Workshop on OCL, Model Constraint and Query Languages
		(OCL 2013)</a> at <a href="http://www.modelsconference.org/" target="_blank">MoDELS 2013</a>.
		<br/><br/>
		<h3>Eclipse Juno</h3>
		<ul class="midlist">
			<li><a href="downloads/Juno.zip" target="_blank">Plugins bundle for UML modeling environment Papyrus (Eclipse Juno)</a></li>
			<li><a href="downloads/ExampleProjectJuno.zip" target="_blank">Example project for UML modeling environment Papyrus (Eclipse Juno)</a></li>
		</ul>
		Please install the Juno Eclipse Modeling Tools from <a href="http://www.eclipse.org/downloads" target="_blank">
		http://www.eclipse.org/downloads</a></li>.
		Start Eclipse and install the UML modeling environment Papyrus (<i>Help > Install New Software... > Work with: Juno > Modeling
		> Papyrus SDK Binaries > next > ...</i>) as well as the reporting tool BIRT 
		(<i>Help > Install New Software... > Work with: Indigo > Bussiness... > BIRT Framework > next > ...</i>). 
		Download <b>Juno.zip</b> from above, unzip it
		into the plugins directory of your Eclipse installation and restart Eclipse. Download <b>ExampleProjectJuno.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		<br/><br/>
		<h3>Eclipse Indigo</h3>
		<ul class="midlist">
			<li><a href="downloads/Indigo.zip" target="_blank">Plugins bundle for UML modeling environment Papyrus (Eclipse Indigo)</a></li>
			<li><a href="downloads/ExampleProjectIndigo.zip" target="_blank">Example project for UML modeling environment Papyrus (Eclipse Indigo)</a></li>
		</ul>
		Please install the Indigo Eclipse Modeling Tools from <a href="http://www.eclipse.org/downloads/packages/release/indigo/sr2" target="_blank">
		http://www.eclipse.org/downloads/packages/release/indigo/sr2</a></li>.
		Start Eclipse and install the UML modeling environment Papyrus (<i>Help > Install New Software... > Work with: Indigo > Modeling
		> MDT Papyrus > next > ...</i>) as well as the reporting tool BIRT 
		(<i>Help > Install New Software... > Work with: Indigo > Bussiness... > BIRT Framework > next > ...</i>). 
		Download <b>Indigo.zip</b> from above, unzip it
		into the plugins directory of your Eclipse installation and restart Eclipse. Download <b>ExampleProjectIndigo.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		<br/><br/>
		<h3>IBM RSA v7.5.5</h3>
		<ul class="midlist">
			<li><a href="downloads/RSA755.zip" target="_blank">Plugins bundle for UML modeling environment IBM Rational Software Architect v7.5.5</a></li>
			<li><a href="downloads/ExampleProjectRSA755.zip" target="_blank">Example project for UML modeling environment IBM Rational Software Architect v7.5.5</a></li>
		</ul>
		Download <b>RSA755.zip</b> from above, unzip it
		into the plugins directory of your RSA installation and restart IBM RSA. Download <b>ExampleProjectRSA755.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		<br/><br/>
		<h3>DSL Simple Web Modeling Language (SWM)</h3>
		<ul class="midlist">
			<li><a href="downloads/refactor.zip" target="_blank">EMF Refactor infrastructure containing support for Xtext</a></li>
			<li><a href="downloads/swm.zip" target="_blank">Plugins bundle for SWM models and QA techniques</a></li>
			<li><a href="downloads/swm_modelproject.zip" target="_blank">Example project containing SWM models</a></li>
		</ul>
		Please install the Juno Eclipse Modeling Tools from <a href="http://www.eclipse.org/downloads/packages/release/juno/sr2" target="_blank">
		http://www.eclipse.org/downloads/packages/release/juno/sr2</a></li>. Start Eclipse and update the system (<i>Help > Check for Updates</i>).
		Install Xtext (<i>Help > Install New Software... > Work with: Juno > Modeling
		> Xtext SDK > next > ...</i>), the reporting tool BIRT (<i>Help > Install New Software... > 
		Work with: Juno > Bussiness... > BIRT Framework > next > ...</i>), as well as the EMF model
		transformation language Henshin (<i>Help > Install New Software... > 
		Work with: http://download.eclipse.org/modeling/emft/henshin/updates/release > next > ...</i>). 
		Download <b>refactor.zip</b> from above, unzip it into the directory of your Eclipse installation and restart Eclipse. 
		Download <b>swm.zip</b> from above, unzip it into the directory of your Eclipse installation and restart Eclipse. 
		Download <b>swm_modelproject.zip</b> from above and import the example
		project <b>org.eclipse.emf.refactor.examples.swm.models</b> into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		Then, restart eclipse and analyze resp. refactor the SWM instance model!
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
