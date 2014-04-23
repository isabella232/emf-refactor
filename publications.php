<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "EMF Refactor - Publications";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
		

	<br>
	<h2>Journal and Magazine Articles</h2>
	<ul>
	<b>2013</b>
	<li>Thorsten Arendt, Gabriele Taentzer: 
	<a href="downloads/AT2013.pdf" target="_blank"><i>A tool environment for quality assurance based on the Eclipse Modeling Framework</i></a>.
	Article in Journal <a href="http://link.springer.com/journal/10515" target="_blank">Automated Software Engineering</a>, Volume 20, Issue 2 (2013), Page 141-184,
	DOI:10.1007/s10515-012-0114-7, Springer, New York.
	</li>
	<b>2012</b>
	<li>Thorsten Arendt, Gabriele Taentzer: 
	<a href="http://www.sigs-datacom.de/fileadmin/user_upload/zeitschriften/os/2012/06/arendt_taentzer_OS_06_12_lo66.pdf" target="_blank"><i>Besser modellieren: Qualit&auml;tssicherung von UML-Modellen</i></a>.
	Article in magazine <a href="http://www.sigs-datacom.de/fachzeitschriften/objektspektrum.html" target="_blank">Objektspektrum</a>, 06 2012, SIGS DATACOM.
	</li>
	</ul>
	
	<br>
	<h2>Conference and Workshop Proceedings</h2>
	<ul>
	<b>2013</b>
	<li>Thorsten Arendt, Gabriele Taentzer, Alexander Weber: 
	<a href="downloads/ATW2013.pdf" target="_blank"><i>Quality Assurance of Textual Models within Eclipse using OCL and Model Transformations</i></a>.
	Proceedings of <a href="http://ocl2013.inf.mit.bme.hu/" target="_blank">13th International Workshop on OCL, Model Constraint and Query Languages (OCL 2013)</a>
	co-located with MoDELS 2013, September 30 2013 in Miami, USA..
	</li>
	<b>2012</b>
	<li>Thorsten Arendt, Gabriele Taentzer: 
	<a href="downloads/AT2012.pdf" target="_blank"><i>Integration of Smells and Refactorings within the Eclipse Modeling Framework</i></a>.
	Proceedings of <a href="http://refactoring.info/WRT12/" target="_blank">Fifth Workshop on Refactoring Tools (WRT 2012)</a>
	co-located with ICSE 2012, June 1 2012 in Rapperswil, Switzerland. Available also at ACM Digital Library.
	</li>
	<b>2011</b>
	<li>Thorsten Arendt, Sieglinde Kranz, Florian Mantz, Nikolaus Regnat, Gabriele Taentzer: 
	<a href="downloads/AKMRT2011.pdf" target="_blank"><i>Towards Syntactical Model Quality Assurance in Industrial Software Development: 
	Process Definition and Tool Support</i></a>.
	Proceedings of <a href="http://se2011.ipd.kit.edu" target="_blank">Software Engineering 2011</a>, 
	February 21-25 2011 in Karlsruhe, Germany. Volume 183 of LNI, pages 63-74, GI, 2011.
	</li>
	<b>2010</b>
	<li>Thorsten Arendt, Florian Mantz, Gabriele Taentzer: 
	<a href="downloads/AMT2010.pdf" target="_blank"><i>EMF Refactor: Specification and Application of Model Refactorings within the Eclipse Modeling Framework</i></a>.
	Proceedings of <a href="http://rmod.lille.inria.fr/benevol/" target="_blank">9th BElgian-NEtherlands software eVOLution seminar (BENEVOL 2010)</a>,
	December 17 2010 in Lille, France.
	</li>
	<li>Thorsten Arendt, Matthias Burhenne, Gabriele Taentzer: 
	<a href="downloads/ABT2010.pdf" target="_blank"><i>Defining and Checking Model Smells: A Quality Assurance Task for Models based on the Eclipse Modeling Framework</i></a>.
	Proceedings of <a href="http://rmod.lille.inria.fr/benevol/" target="_blank">9th BElgian-NEtherlands software eVOLution seminar (BENEVOL 2010)</a>,
	December 17 2010 in Lille, France.
	</li>
	<li>Thorsten Arendt, Pawel Stepien, Gabriele Taentzer: 
	<a href="downloads/AST2010.pdf" target="_blank"><i>EMF Metrics: Specification and Calculation of Model Metrics within the Eclipse Modeling Framework</i></a>.
	Proceedings of <a href="http://rmod.lille.inria.fr/benevol/" target="_blank">9th BElgian-NEtherlands software eVOLution seminar (BENEVOL 2010)</a>,
	December 17 2010 in Lille, France.
	</li>
	<b>2009</b>
	<li>Thorsten Arendt, Florian Mantz, Lars Schneider, Gabriele Taentzer: 
	<a href="downloads/AMST2009.pdf" target="_blank"><i>Model Refactoring in Eclipse by LTK, EWL, and EMF Refactor: A Case Study</i></a>.
	Proceedings of <a href="http://www.modse.fr/modsemccm09/doku.php" target="_blank">Model-Driven Software Evolution, Workshop Models and Evolution (MoDSE-MCCM 2009)</a>, 
	co-located with MoDELS 2009, October 4 2009 in Denver, USA.
	</li>
	</ul>
	
	<br>
	<h2>Technical Reports</h2>
	<ul>
	<b>2012</b>
	<li>Thorsten Arendt, Gabriele Taentzer: 
	<a href="http://www.uni-marburg.de/fb12/forschung/berichte/berichteinformtk" target="_blank"><i>Composite Refactorings for EMF Models</i></a>.
	Technical report, Philipps-Universit&auml;t Marburg, FB 12 - Mathematik und Informatik, Marburg, Gemany.
	</li>
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

