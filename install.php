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
	$pageTitle 		= "EMF Refactor - Installation";
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
		
		<p>
		<i>How to install EMF Refactor:</i>
		</p>
		For a complete installation of EMF Refactor please follow this installation guide:
		
		<p>
		<h2>Installation Guide</h2>
		<ol class="midlist">
	 		<li>Please download the <b><i>Eclipse Modeling Tools</i></b> from <a href="http://www.eclipse.org/downloads/" target="_blank">
			http://www.eclipse.org/downloads/</a></li>. Unzip and start Eclipse and update the system (<i>Help > Check for Updates</i>).</li>
	    	<li>Restart Eclipse and install the UML modeling environment <b><i>Papyrus</i></b> (<i>Help > Install New Software... > Work with: Kepler > Modeling
			> Papyrus SDK Binaries > next > ...</i>).</li>
			<li>Restart Eclipse and install the reporting tool <b><i>BIRT</i></b> 
			(<i>Help > Install New Software... > Work with: Kepler > Business... > BIRT Framework > next > ...</i>).</li>
			<li>Restart Eclipse and install the EMF model transformation language <b><i>Henshin</i></b> (<i>Help > Install New Software... > 
			Work with: <a href="http://download.eclipse.org/modeling/emft/henshin/updates/release" target="_blank">http://download.eclipse.org/modeling/emft/henshin/updates/release</a> > next > ...</i>).</li>
			<li>Restart Eclipse and install the EMF model quality assurance tool set <b><i>EMF Refactor</i></b> (<i>Help > Install New Software... > 
			Work with: <a href="http://download.eclipse.org/emf-refactor/updatesite" target="_blank">http://download.eclipse.org/emf-refactor/updatesite</a> > Select all > next > ...</i>).</li>
		</ol>
		
		
		
		
		
		<!-- h3>Installation using the update site</h3>
		This project maintains a p2 repository of binary artifacts. Copy and paste the following link into 
		the "Install New Software" dialog to install this project's software.
		<ul class="midlist">
		 	<li><a href="http://download.eclipse.org/emf-refactor/updatesite" target="_blank">http://download.eclipse.org/emf-refactor/updatesite</a></li>
		</ul -->

		<!-- h3>Installation using the download site</h3>
		<ol>
			<li><a href="downloads.php">Download</a> the EMF Refactor JAR file(s).</li>
			<li>Install the software as usual: <b>Help -> Install New Software... -> Add.. -> Archive -> refactor-[X-]X.X.X.X</b></li>
		</ol>


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
		
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
