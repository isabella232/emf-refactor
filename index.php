<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EMF Refactor";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">

    <div id="midcolumn">
	<h1>$pageTitle</h1>
	<img style="float:right" src="emfrefactor.png" alt="" style="border-width:0px"/>
	
	<!-- h1>EMF Refactor</h1 -->
	<p>
	<b>EMF Refactor</b> is an Eclipse open source tool environment conveniently supporting a <b>structured model quality assurance process</b>. 
	In particular, EMF Refactor supports metrics reporting, smell detection, and refactoring for models being based on the Eclipse Modeling Framework, 
	a widely used open source technology in model-based software development. 
	</p>
	<p>
	The following major functionalities are provided:
	<ul>
		<li>User-friendly support for project-specific configurations of model metrics, smells, and refactorings.
		<li>Calculation of model metrics, detection of model smells, and application of model refactorings.
		<li>Generation of model metrics and smell detection reports.
		<li>Suggestion of suitable refactorings in case of specific smell occurrences.
		<li>Provision of suitable information in cases where new model smells come in by applying a certain refactoring.
		<li>Support for the implementation of new model metrics, smells, and refactorings.
	</ul>
	</p>
	<p>	
	The tool environment mainly consists of two kinds of modules: 
	For calculating model metrics, detecting smells, and executing refactorings there is an <b>application module</b> each. 
	Similarly there are three <b>specification modules</b> for generating metrics, smell, and refactoring plugins containing Java code that can be used by the corresponding application module.
	Details on the design of EMF Refactor can be found here: <a href="https://wiki.eclipse.org/EMF_Refactor_Architecture" target="_blank">EMF Refactor Architecture</a>. 
	</p>
	<!-- p>
	
	<h2>Refactoring tool</h2>
	The refactoring tool consists of 
	<ul>
		<li>a <strong>Refactoring Application Module</strong> for applying EMF model refactorings in a uniform and user-friendly way,
		<li>a <strong>Structured Refactoring Suite</strong> of predefined EMF model refactorings supporting several EMF-based languages, and
		<li>a <strong>Refactoring Generation Module</strong> for specifying EMF model refactorings using several model transformation approaches.
	</ul>
	</p>
	
	<u><b>Refactoring Application Module</b></u>
		
	<p>
	EMF Refactor uses the Eclipse <a href="http://www.eclipse.org/articles/Article-LTK/ltk.html" target="_blank">Language Toolkit</a> 
	(LTK) for homogenous refactoring application consisting of three parts.
	After triggering a model element, refactoring-specific basic conditions are checked (<i>initial check</i>). Then,
	the user has to set all parameters and the EMF Refactor checks whether the user input does not violate further conditions
	(<i>final check</i>). In case of erroneous parameters a detailed error message is shown. If the final check has passed, 
	EMF Refactor provides a preview of the changes that will be performed by the refactoring using <a href="http://www.eclipse.org/emf/compare/" target="_blank">EMF Compare</a>. 
	Last but not least, these changes can be committed and the refactoring can take place (<i>model change</i>).
	Here, EMF Refactor supports undo and redo functionality, of course.
	</p>
	
	<u><b>Structured Refactoring Suite</b></u>
	
	<p>
	EMF Refactor currently supports 22 refactorings for Ecore models and 30 refactorings for UML2EMF models.
	A list of implemented refactorings can be found in the <a href="refactorings.php">refactorings</a> section.
	</p>
	
	<u><b>Refactoring Generation Module</b></u>
		
	<p>
	Since EMF Refactor uses the LTK technology mentioned above, a concrete refactoring specification requires up 
	to three parts (i.e., specifications for initial checks, final checks, and the proper model changes). EMF Refactor 
	currently supports three concrete mechanisms for EMF model refactoring specification. They can be specified using 
	<ul>
		<li>Java,
		<li>OCL expressions (for pre-condition checking), or
		<li>the EMF model transformation tool <a href="http://www.eclipse.org/modeling/emft/henshin/" target="_blank">Henshin</a>.
		Here, EMF Refactor uses Henshin's model transformation engine for executing the refactoring as well as Henshin's pattern 
		matching algorithm to detect violated preconditions.
	</ul>
	Actually, we are working on a combination mechanism of existing refactorings to more complex ones by using a dedicated domain-specific language called
	CoMReL (Composite Model Refactoring Language) that will be integrated soon into the official release of EMF Refactor.
	</p -->

	<!--
		
	<div class="homeitem">
		<h3>Narrow column</h3>
		<ul>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		</ul>
	</div>
		
	<div class="homeitem">
		<h3>Narrow column</h3>
		<ul>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		</ul>
	</div>
	
	<div class="homeitem3col">
		<h3>This is a wide column</h3>
		<ul>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		<li><a href="#">Link</a>. Teaser text <a href="#">'Reference'</a><span class="dates">02/05/05</span></li>
		</ul>
	</div>
	
	<hr class="clearer" />
	<p>Some free text</p>
	<ul class="midlist">
	<li>list of items in free text</li>
	<li>list of items in free text</li>
	<li>list of items in free text</li>
	</ul>
	<ol>
	<li>Ordered list</li>
	<li>Ordered list</li>
	<li>Ordered list</li>
	</ol>
		
	-->
		
	</div>
	
	
	<div id="rightcolumn">
	<div class="sideitem">
	
		
   		<h6>Incubation</h6>
		<p>This component is currently in its <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p>

   			<div align="center"><a href="/projects/what-is-incubation.php"><img align="center" src="/images/egg-incubation.png"  border="0" alt="Incubation" /></a></div>
 			</div>
	<!--	
		<h6>Related links</h6>
		<ul>
		<li><a href="#">Link</a> - descriptive text</li>
		<li><a href="#">Link</a> - descriptive text</li>
		</ul>
		</div>

		<div class="sideitem">
		<h6>Related links</h6>
		<ul>
		<li><a href="#">Link</a> - descriptive text</li>
		<li><a href="#">Link</a> - descriptive text</li>
		</ul>
		-->
		
		</div>
	</div>
	
	
</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
