<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "FASE 2014 - Submission 146";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
	<h1>$pageTitle</h1>
	This area is dedicated to the research paper 
	<b><i>A Lightweight Approach to Synchronize Model and Code Refactorings</i></b>
	submitted to the <b>17th International Conference on Fundamental Approaches to Software Engineering
	<a href="http://www.etaps.org/index.php/2014/fase" target="_blank">(FASE 2014)</a></b>.
	It contains various material concerning the installation and evaluation of
	the approach respectively its prototype implementation.
	<br/><br/>
	
	<p>
	<h2>Installation Guide</h2>
	<ol class="midlist">
	 	<li>Please download the <b><i>Juno Eclipse Modeling Tools</i></b> from <a href="http://www.eclipse.org/downloads/packages/release/juno/sr2" target="_blank">
			http://www.eclipse.org/downloads/packages/release/juno/sr2</a></li>. Unzip and start Eclipse and update the system (<i>Help > Check for Updates</i>).</li>
	    <li>Restart Eclipse and install the EMF model transformation language <b><i>Henshin</i></b> (<i>Help > Install New Software... > 
			Work with: <a href="http://download.eclipse.org/modeling/emft/henshin/updates/release" target="_blank">http://download.eclipse.org/modeling/emft/henshin/updates/release</a> > next > ...</i>).</li>
		<li>Restart Eclipse and install the prototype implementation (branch of <b><i>EMF Refactor</i></b>):
			<i>Help > Install New Software... > Work with: 
		    <a href="http://download.eclipse.org/emf-refactor/updatesite-fase2014" target="_blank">
		    http://download.eclipse.org/emf-refactor/updatesite-fase2014</a> > next > ...</i>.</li>
		<li>Restart Eclipse.</li>
	</ol>
	<p>
	<h2>Projects</h2>
	<ul class="midlist">
		<li><a href="downloads/fase2014_projects.zip" target="_blank">fase2014_projects</a></li>
	</ul>
	For evaluation purposes please download <b>fase2014_projects.zip</b> from above and import 
	the example projects <b>pdfsam_code</b>, <b>pdfsam_model</b>, and <b>VehicleRentalCompany</b> 
	into your workspace (<i>File > Import... > General > Existing Projects into Workspace > Next 
	> Select archive file > Browse (to the zip file) > Select all > Finish</i>).
	<br/><br/>
	
	<h2>Scenarios</h2>	
	For the evaluation of the approach (respectively the implemented prototype) the following scenarios
	are performed on the project above:	
	<br/><br/>
	<h3>VehicleRentalCompany</h3>	
	<b><i>Model -> Code</i></b>
	<ol class="midlist">
		<li>Refactoring <i>Hide Attribute</i> on <i>Customer::customerCard</i>.</li>
		<li>Refactoring <i>Rename Class</i> on <i>Customer</i> (new name: <i>Kunde</i>).</li>
		<li>Refactoring <i>Rename Attribute</i> on <i>Customer::customerCard</i> (new name: <i>kundenkarte</i>).</li>
		<li>Refactoring <i>Rename Operation</i> on <i>VehicleRental::rentTruck</i> (new name: <i>rentLKW</i>).</li>
		<li>Refactoring <i>Pull Up Attribute</i> on <i>Auto::manufacturer</i>.</li>
		<li>Refactoring <i>Push Down Attribute</i> on <i>Vehicle::manufacturer</i>.</li>
		<li>Refactoring <i>Introduce Parameter Object</i> on <i>VehicleRental::rentCar</i>.</li>
	</ol>
	<b><i>Code -> Model</i></b>
	<ol class="midlist">
		<li>Refactoring <i>Hide Field</i> on <i>Customer::customerCard</i>.</li>
		<li>Refactoring <i>Rename Class</i> on <i>Kunde</i> (new name: <i>Customer</i>).</li>
		<li>Refactoring <i>Rename Field</i> on <i>Customer::kundenkarte</i> (new name: <i>customerCard</i>).</li>
		<li>Refactoring <i>Rename Method</i> on <i>VehicleRental::rentCar</i> (new name: <i>renCar</i>).</li>
		<li>Refactoring <i>Pull Up Field</i> on <i>Truck::manufacturer</i>.</li>
		<li>Refactoring <i>Push Down Field</i> on <i>Vehicle::manufacturer</i>.</li>
		<li>Refactoring <i>Introduce Parameter Object</i> on <i>VehicleRental::rentCar</i>.</li>
	</ol>
	<h3>PDFsam</h3>	
	<b><i>Model -> Code</i></b>
	<ol class="midlist">
		<li>Refactoring <i>Hide Attribute</i> on <i>o.p.g.business.listener.mediators.ApplicationExitMediator::EXIT_COMMAND</i>.</li>
		<li>Refactoring <i>Rename Class</i> on <i>o.p.g.guiclient.business.PagesWorker</i> (new name: <i>PageWorker</i>).</li>
		<li>Refactoring <i>Rename Attribute</i> on <i>o.p.g.guiclient.business.PagesWorker::REMOVE</i> (new name: <i>DELETE</i>).</li>
		<li>Refactoring <i>Rename Operation</i> on <i>o.p.g.guiclient.business.PageWorker::execute(String...)</i> (new name: <i>executes</i>).</li>
		<li>Refactoring <i>Pull Up Attribute</i> on <i>o.p.g.gui.panels.JSettingsPanel::PLUGIN_AUTHOR</i>.</li>
		<li>Refactoring <i>Push Down Attribute</i> on <i>o.p.g.gui.panels.AbstractPlugablePanel::PLUGIN_AUTHOR</i>.</li>
		<li>Refactoring <i>Introduce Parameter Object</i> on <i>o.p.g.commons.panels.JPdfSelectionPanel</i>.</li>
	</ol>
	<b><i>Code -> Model</i></b>
	<ol class="midlist">
		<li>Refactoring <i>Hide Field</i> on <i>o.p.g.business.listener.mediators.ApplicationExitMediator::SAVE_AND_EXIT_COMMAND</i>.</li>
		<li>Refactoring <i>Rename Class</i> on <i>o.p.g.guiclient.business.PageWorker</i> (new name: <i>PagesWorker</i>).</li>
		<li>Refactoring <i>Rename Field</i> on <i>o.p.g.guiclient.business.PagesWorker::DELETE</i> (new name: <i>REMOVE</i>).</li>
		<li>Refactoring <i>Rename Method</i> on <i>o.p.g.guiclient.business.PageWorker::execute(String...)</i> (new name: <i>executes</i>).</li>
		<li>Refactoring <i>Pull Up Field</i> on <i>o.p.g.gui.panels.JSettingsPanel::PLUGIN_AUTHOR</i>.</li>
		<li>Refactoring <i>Push Down Field</i> on <i>o.p.g.gui.panels.AbstractPlugablePanel::PLUGIN_AUTHOR</i>.</li>
		<li>Refactoring <i>Introduce Parameter Object</i> on <i>o.p.g.commons.panels.JPdfSelectionPanel</i>.</li>
	</ol>
	<br/><br/>
	
	<h2>Results</h2>	
	For evaluating hypothesis H1 ('If both approaches perform a synchronized refactoring, 
	the results are equal.'), we used all the positive test cases (both refactorings are 
	applicable) for the refactoring pair <i>RenameAttribute;RenameField</i> for evaluating 
	whether both approaches lead to the same results. After we performed this refactoring 
	for each direction and each approach, we compared the resulting artifacts using the 
	text comparison facility in Eclipse (for Java code) and the model comparison functionality 
	provided by EMF Compare. The corresponding code and model comparisons showing no differences
	can be found here:
	<ul class="midlist">
		<li><a href="downloads/screenshots.zip" target="_blank">screenshots</a>.</li>
	</ul>
	For evaluating hypothesis H2 ('The dynamic mapping of model and code is fast enough.'), 
	we measured the time needed for dynamically mapping the corresponding elements. 
	The measurements are performed on a Mac Book Air MId 2011 machine (4 GB RAM; Intel i5-2557M 
	dual core 2.7 Ghz). The following tables show the corresponding results in microseconds.
	<h3>VehicleRentalCompany</h3>	
	<table border="1">
	  <tr>
	    <th>Refactoring</th>
	    <th>Model -> Code (lazy)</th>
	    <th>Code -> Model (lazy)</th>
	    <th>Model -> Code (strict)</th>
	    <th>Code -> Model (strict)</th>
	  </tr>
	  <tr>
	    <td>1</td>
	    <td>3961</td>
	    <td>4245</td>
	    <td>1076</td>
	    <td>1698</td>
	  </tr>
	  <tr>
	    <td>2</td>
	    <td>5249</td>
	    <td>1784</td>
	    <td>839</td>
	    <td>529</td>
	  </tr>
	  <tr>
	    <td>3</td>
	    <td>2658</td>
	    <td>2084</td>
	    <td>698</td>
	    <td>765</td>
	  </tr>
	  <tr>
	    <td>4</td>
	    <td>2886</td>
	    <td>2269</td>
	    <td>1241</td>
	    <td>1033</td>
	  </tr>
	  <tr>
	    <td>5</td>
	    <td>2721</td>
	    <td>3311</td>
	    <td>673</td>
	    <td>1570</td>
	  </tr>
	  <tr>
	    <td>6</td>
	    <td>2570</td>
	    <td>3443</td>
	    <td>872</td>
	    <td>1342</td>
	  </tr>
	  <tr>
	    <td>7</td>
	    <td>1657</td>
	    <td>2600</td>
	    <td>496</td>
	    <td>1337</td>
	  </tr>
	</table>
	<h3>PDFsam</h3>	
	<table border="1">
	  <tr>
	    <th>Refactoring</th>
	    <th>Model -> Code (lazy)</th>
	    <th>Code -> Model (lazy)</th>
	    <th>Model -> Code (strict)</th>
	    <th>Code -> Model (strict)</th>
	  </tr>
	  <tr>
	    <td>1</td>
	    <td>24511</td>
	    <td>35335</td>
	    <td>535</td>
	    <td>1638</td>
	  </tr>
	  <tr>
	    <td>2</td>
	    <td>31805</td>
	    <td>29244</td>
	    <td>1311</td>
	    <td>546</td>
	  </tr>
	  <tr>
	    <td>3</td>
	    <td>6929</td>
	    <td>24285</td>
	    <td>975</td>
	    <td>694</td>
	  </tr>
	  <tr>
	    <td>4</td>
	    <td>13943</td>
	    <td>20509</td>
	    <td>873</td>
	    <td>1387</td>
	  </tr>
	  <tr>
	    <td>5</td>
	    <td>11845</td>
	    <td>38233</td>
	    <td>801</td>
	    <td>1631</td>
	  </tr>
	  <tr>
	    <td>6</td>
	    <td>8584</td>
	    <td>33281</td>
	    <td>781</td>
	    <td>1548</td>
	  </tr>
	  <tr>
	    <td>7</td>
	    <td>6391</td>
	    <td>27818</td>
	    <td>526</td>
	    <td>2924</td>
	  </tr>
	</table>
	
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
