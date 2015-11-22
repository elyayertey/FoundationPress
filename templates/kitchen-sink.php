<?php
/*
Template Name: Kitchen Sink
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<h3 class="subheader">This page includes every single Foundation element so that we can make sure things work together smoothly.</h3>

			<div class="row">

				<!-- Main wrapper for the components in the kitchen-sink -->
				<div class="large-9 columns" id="docs">

					<!-- Accordion -->
					<h2 id="accordion" class="docs-heading" data-magellan-target="accordion">Accordion</h2>
					<ul class="accordion" data-accordion role="tablist">
					  <li class="accordion-item is-active">
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 1. Lorem ipsum dolor
					    </div>
					  </li>
					  <li class="accordion-item">
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 2. Lorem ipsum dolor
					    </div>
					  </li>
					  <li class="accordion-item">
					    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
					    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Accordion 1</a>
					    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
					    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
					      Panel 3. Lorem ipsum dolor
					    </div>
					  </li>
					</ul>
					<hr>

					<!-- Accordion Menu -->
					<h2 id="accordion-menu" class="docs-heading" data-magellan-target="accordion-menu"><a class="docs-heading-icon" href="#accordion-menu"></a>Accordion Menu</h2>
					<ul class="vertical menu" data-accordion-menu>
					  <li>
					    <a href="#">Item 1</a>
					    <ul class="menu vertical nested is-active">
					      <li>
					        <a href="#">Item 1A</a>
					        <ul class="menu vertical nested">
					          <li><a href="#">Item 1Ai</a></li>
					          <li><a href="#">Item 1Aii</a></li>
					          <li><a href="#">Item 1Aiii</a></li>
					        </ul>
					  </li>
					<hr>

					<!-- Badge -->
					<h2 id="badge" class="docs-heading" data-magellan-target="badge"><a class="docs-heading-icon" href="#badge"></a>Badge</h2>
					<div class="docs-code-live"><span class="secondary badge">2</span>
						<span class="success badge">3</span>
						<span class="alert badge">A</span>
						<span class="warning badge">B</span>
					</div>
					<hr>

					<!-- Breadcrumbs -->
					<h2 id="breadcrumbs" class="docs-heading" data-magellan-target="breadcrumbs"><a class="docs-heading-icon" href="#breadcrumbs"></a>Breadcrumbs</h2>
					<div class="docs-code-live">
						<nav aria-label="You are here:" role="navigation">
	  					<ul class="breadcrumbs">
						    <li><a href="#">Home</a></li>
						    <li><a href="#">Features</a></li>
						    <li class="disabled">Gene Splicing</li>
						    <li><span class="show-for-sr">Current: </span> Cloning</li>
	  					</ul>
						</nav>
					</div>
					<hr>

					<!-- Button -->
					<h2 id="button" class="docs-heading" data-magellan-target="button"><a class="docs-heading-icon" href="#button"></a>Button</h2>
					<div class="docs-code-live">
						
						<a href="about.html" class="button">Learn More</a>
						<a href="#features" class="button">View All Features</a>

						<!-- Buttons (actions) -->
						<button type="button" class="success button">Save</button>
						<button type="button" class="alert button">Delete</button>

						<a class="tiny button" href="#">So Tiny</a>
						<a class="small button" href="#">So Small</a>
						<a class="large button" href="#">So Large</a>
						<a class="expanded button" href="#">Such Expand</a>

						<div class="button-group">
						  <a class="button">One</a>
						  <a class="button">Two</a>
						  <a class="button">Three</a>
						</div>

					</div>
					<hr>

					<!-- Callout -->
					<h2 id="callout" class="docs-heading" data-magellan-target="callout"><a class="docs-heading-icon" href="#callout"></a>Callout</h2>
					<div class="docs-code-live">
						<div class="callout">
						  <h5>This is a callout.</h5>
						  <p>It has an easy to override visual style, and is appropriately subdued.</p>
						  <a href="#">It's dangerous to go alone, take this.</a>
						</div>

						<div class="callout secondary">
						  <h5>This is a secondary callout</h5>
						  <p>It has an easy to override visual style, and is appropriately subdued.</p>
						  <a href="#">It's dangerous to go alone, take this.</a>
						</div>

						<div class="callout success">
						  <h5>This is a success callout</h5>
						  <p>It has an easy to override visual style, and is appropriately subdued.</p>
						  <a href="#">It's dangerous to go alone, take this.</a>
						</div>

						<div class="callout warning">
						  <h5>This is a warning callout</h5>
						  <p>It has an easy to override visual style, and is appropriately subdued.</p>
						  <a href="#">It's dangerous to go alone, take this.</a>
						</div>

						<div class="callout alert">
						  <h5>This is an alert callout</h5>
						  <p>It has an easy to override visual style, and is appropriately subdued.</p>
						  <a href="#">It's dangerous to go alone, take this.</a>
						</div>
					</div>
					<hr>

					<!-- Close Button -->
					<h2 id="close-button" class="docs-heading" data-magellan-target="close-button"><a class="docs-heading-icon" href="#close-button"></a>Close Button</h2>
					<div class="docs-code-live">
						<div class="callout">
						  <button class="close-button" aria-label="Close alert" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						  <p>You can so totally close this!</p>
						</div>
					</div>
					<hr>

					<!-- Drilldown Menu -->
					<h2 id="drilldown-menu" class="docs-heading" data-magellan-target="drilldown-menu"><a class="docs-heading-icon" href="#drilldown-menu"></a>Drilldown Menu</h2>
					<div class="docs-code-live">
						<ul class="vertical menu" data-drilldown style="width: 200px" id="m1">
						  <li>
						    <a href="#">Item 1</a>
						    <ul class="vertical menu" id="m2">
						      <li>
						        <a href="#">Item 1A</a>
						        <ul class="vertical menu" id="m3">
						          <li><a href="#">Item 1Aa</a></li>
						          <li><a href="#">Item 1Ba</a></li>
						          <li><a href="#">Item 1Ca</a></li>
						          <li><a href="#">Item 1Da</a></li>
						          <li><a href="#">Item 1Ea</a></li>
						        </ul>
						      </li>
						      <li><a href="#">Item 1B</a></li>
						      <li><a href="#">Item 1C</a></li>
						      <li><a href="#">Item 1D</a></li>
						      <li><a href="#">Item 1E</a></li>
						    </ul>
						  </li>
						  <li>
						    <a href="#">Item 2</a>
						    <ul class="vertical menu">
						      <li><a href="#">Item 2A</a></li>
						      <li><a href="#">Item 2B</a></li>
						      <li><a href="#">Item 2C</a></li>
						      <li><a href="#">Item 2D</a></li>
						      <li><a href="#">Item 2E</a></li>
						    </ul>
						  </li>
						  <li>
						    <a href="#">Item 3</a>
						    <ul class="vertical menu">
						      <li><a href="#">Item 3A</a></li>
						      <li><a href="#">Item 3B</a></li>
						      <li><a href="#">Item 3C</a></li>
						      <li><a href="#">Item 3D</a></li>
						      <li><a href="#">Item 3E</a></li>
						    </ul>
						  </li>
						  <li><a href='#'> Item 4</a></li>
						</ul>
					</div>
					<hr>

					<!-- Dropdown Menu -->
					<h2 id="dropdown-menu" class="docs-heading" data-magellan-target="dropdown-menu"><a class="docs-heading-icon" href="#dropdown-menu"></a>Dropdown Menu</h2>
					<div class="docs-code-live">
						<ul class="dropdown menu" data-dropdown-menu>
						  <li>
						    <a>Item 1</a>
						    <ul class="menu">
						      <li><a href="#">Item 1A Loooong</a></li>
						      <li>
						        <a href='#'> Item 1 sub</a>
						        <ul class='menu'>
						          <li><a href='#'>Item 1 subA</a></li>
						          <li><a href='#'>Item 1 subB</a></li>
						          <li>
						            <a href='#'> Item 1 sub</a>
						            <ul class='menu'>
						              <li><a href='#'>Item 1 subA</a></li>
						              <li><a href='#'>Item 1 subB</a></li>
						            </ul>
						          </li>
						          <li>
						            <a href='#'> Item 1 sub</a>
						            <ul class='menu'>
						              <li><a href='#'>Item 1 subA</a></li>
						            </ul>
						          </li>
						        </ul>
						      </li>
						      <li><a href="#">Item 1B</a></li>
						    </ul>
						  </li>
						  <li>
						    <a href="#">Item 2</a>
						    <ul class="menu">
						      <li><a href="#">Item 2A</a></li>
						      <li><a href="#">Item 2B</a></li>
						    </ul>
						  </li>
						  <li><a href="#">Item 3</a></li>
						  <li><a href='#'>Item 4</a></li>
						</ul>
					</div>
					<hr>

					<!-- Dropdown Pane -->
					<h2 id="dropdown-pane" class="docs-heading" data-magellan-target="dropdown-pane"><a class="docs-heading-icon" href="#dropdown-pane"></a>Dropdown Pane</h2>
					<div class="docs-code-live">
						<button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
						<div class="dropdown-pane" id="example-dropdown" data-dropdown>
						  Just some junk that needs to be said. Or not. Your choice.
						</div>
					</div>
					<hr>


					<!-- Flex Video -->
					<h2 id="flex-video" class="docs-heading" data-magellan-target="flex-video"><a class="docs-heading-icon" href="#flex-video"></a>Flex Video</h2>
					<div class="docs-code-live">
						<div class="flex-video">
						  <iframe width="420" height="315" src="https://www.youtube.com/embed/V9gkYw35Vws" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<hr>

					<!-- Float Classes -->
					<h2 id="float-classes" class="docs-heading" data-magellan-target="float-classes"><a class="docs-heading-icon" href="#float-classes"></a>Float Classes</h2>
					<div class="docs-code-live">
						<div class="callout clearfix">
						  <a class="button float-left">Left</a>
						  <a class="button float-right">Right</a>
						</div>
					</div>
					<hr>

					<!-- Forms -->
					<h2 id="forms" class="docs-heading" data-magellan-target="forms"><a class="docs-heading-icon" href="#forms"></a>Forms</h2>
					<div class="docs-code-live">
						<form>
						  <label>Input Label
						    <input type="text" placeholder=".small-12.columns" aria-describedby="exampleHelpText">
						  </label>
						  <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
						  <label>
						    How many puppies?
						    <input type="number" value="100">
						  </label>
						  <label>
						    What books did you read over summer break?
						    <textarea placeholder="None"></textarea>
						  </label>
						  <label>Select Menu
						    <select>
						      <option value="husker">Husker</option>
						      <option value="starbuck">Starbuck</option>
						      <option value="hotdog">Hot Dog</option>
						      <option value="apollo">Apollo</option>
						    </select>
						  </label>
						  <div class="row">
						    <fieldset class="large-6 columns">
						      <legend>Choose Your Favorite</legend>
						      <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Red</label>
						      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
						      <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
						    </fieldset>
						    <fieldset class="large-6 columns">
						      <legend>Check these out</legend>
						      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
						      <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
						      <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
						    </fieldset>
						  </div>
						  <div class="row">
						    <div class="small-3 columns">
						      <label for="middle-label" class="right middle">Label</label>
						    </div>
						    <div class="small-9 columns">
						      <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
						    </div>
						  </div>
						  <div class="input-group">
						    <span class="input-group-label">$</span>
						    <input class="input-group-field" type="url">
						    <a class="input-group-button button">Submit</a>
						  </div>
						</form>
					</div>
					<hr>

					<!-- Label -->
					<h2 id="label" class="docs-heading" data-magellan-target="label"><a class="docs-heading-icon" href="#label"></a>Label</h2>
					<div class="docs-code-live">
						<span class="secondary label">Secondary Label</span>
						<span class="success label">Success Label</span>
						<span class="alert label">Alert Label</span>
						<span class="warning label">Warning Label</span>
					</div>
					<hr>

					<!-- Media Object -->
					<h2 id="media-object" class="docs-heading" data-magellan-target="media-object"><a class="docs-heading-icon" href="#media-object"></a>Media Object</h2>
					<div class="docs-code-live">
						<div class="media-object">
						  <div class="media-object-section">
						    <img src= "http://placeimg.com/200/200/people">
						  </div>
						  <div class="media-object-section">
						    <h4>Dreams feel real while we're in them.</h4>
						    <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
						  </div>
						</div>
					</div>
					<hr>

					<!-- Menu -->
					<h2 id="menu" class="docs-heading" data-magellan-target="menu"><a class="docs-heading-icon" href="#menu"></a>Menu</h2>
					<div class="docs-code-live">
						<ul class="menu">
						  <li><a href="#">One</a></li>
						  <li><a href="#">Two</a></li>
						  <li><a href="#">Three</a></li>
						  <li><a href="#">Four</a></li>
						</ul>

						<ul class="menu icon-top">
						  <li><a href="#"><i class="fi-list"></i> <span>One</span></a></li>
						  <li><a href="#"><i class="fi-list"></i> <span>Two</span></a></li>
						  <li><a href="#"><i class="fi-list"></i> <span>Three</span></a></li>
						  <li><a href="#"><i class="fi-list"></i> <span>Four</span></a></li>
						</ul>
					</div>
					<hr>

					<!-- Orbit -->
					<h2 id="orbit" class="docs-heading" data-magellan-target="orbit"><a class="docs-heading-icon" href="#orbit"></a>Orbit</h2>
					<div class="docs-code-live">
						<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
						  <ul class="orbit-container">
						    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
						    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
						    <li class="is-active orbit-slide">
						      <div>
						        <h3 class="text-center">You can also throw some text in here!</h3>
						        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						        <h3 class="text-center">This Orbit slide has chill</h3>
						      </div>
						    </li>
						    <li class="orbit-slide">
						      <div>
						        <h3 class="text-center">You can also throw some text in here!</h3>
						        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						        <h3 class="text-center">This Orbit slide has chill</h3>
						      </div>
						    </li>
						    <li class="orbit-slide">
						      <div>
						        <h3 class="text-center">You can also throw some text in here!</h3>
						        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						        <h3 class="text-center">This Orbit slide has chill</h3>
						      </div>
						    </li>
						    <li class="orbit-slide">
						      <div>
						        <h3 class="text-center">You can also throw some text in here!</h3>
						        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						        <h3 class="text-center">This Orbit slide has chill</h3>
						      </div>
						    </li>
						  </ul>
						  <nav class="orbit-bullets">
						   <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
						   <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
						   <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
						   <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
						 </nav>
						</div>
					</div>
					<hr>

					<!-- Pagination -->
					<h2 id="pagination" class="docs-heading" data-magellan-target="pagination"><a class="docs-heading-icon" href="#pagination"></a>Pagination</h2>
					<div class="docs-code-live">
						<ul class="pagination" role="navigation" aria-label="Pagination">
						  <li class="disabled">Previous <span class="show-for-sr">page</span></li>
						  <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
						  <li><a href="#" aria-label="Page 2">2</a></li>
						  <li><a href="#" aria-label="Page 3">3</a></li>
						  <li><a href="#" aria-label="Page 4">4</a></li>
						  <li class="ellipsis" aria-hidden="true"></li>
						  <li><a href="#" aria-label="Page 12">12</a></li>
						  <li><a href="#" aria-label="Page 13">13</a></li>
						  <li><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
						</ul>
					</div>
					<hr>

					<!-- Slider -->
					<h2 id="slider" class="docs-heading" data-magellan-target="slider"><a class="docs-heading-icon" href="#slider"></a>Slider</h2>
					<div class="docs-code-live">
						<div class="slider" data-slider data-initial-start='50' data-end='200'>
						  <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
						  <span class="slider-fill" data-slider-fill></span>
						  <input type="hidden">
						</div>

						<div class="slider vertical" data-slider data-initial-start='25' data-end='200' data-vertical="true">
						  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
						  <span class="slider-fill" data-slider-fill></span>
						  <input type="hidden">
						</div>
					</div>
					<hr>


					<!-- Switch -->
					<h2 id="switch" class="docs-heading" data-magellan-target="switch"><a class="docs-heading-icon" href="#switch"></a>Switch</h2>
					<div class="docs-code-live">
						<div class="switch tiny">
						  <input class="switch-input" id="tinySwitch" type="checkbox" name="exampleSwitch">
						  <label class="switch-paddle" for="tinySwitch">
						    <span class="show-for-sr">Tiny Sandwiches Enabled</span>
						  </label>
						</div>

						<div class="switch small">
						  <input class="switch-input" id="smallSwitch" type="checkbox" name="exampleSwitch">
						  <label class="switch-paddle" for="smallSwitch">
						    <span class="show-for-sr">Small Portions Only</span>
						  </label>
						</div>

						<div class="switch large">
						  <input class="switch-input" id="largeSwitch" type="checkbox" name="exampleSwitch">
						  <label class="switch-paddle" for="largeSwitch">
						    <span class="show-for-sr">Show Large Elephants</span>
						  </label>
						</div>
					</div>
					<hr>

					<!-- Table -->
					<h2 id="table" class="docs-heading" data-magellan-target="table"><a class="docs-heading-icon" href="#table"></a>Table</h2>
					<div class="docs-code-live">
						<table>
						  <thead>
						    <tr>
						      <th width="200">Table Header</th>
						      <th>Table Header</th>
						      <th width="150">Table Header</th>
						      <th width="150">Table Header</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>Content Goes Here</td>
						      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
						      <td>Content Goes Here</td>
						      <td>Content Goes Here</td>
						    </tr>
						    <tr>
						      <td>Content Goes Here</td>
						      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
						      <td>Content Goes Here</td>
						      <td>Content Goes Here</td>
						    </tr>
						    <tr>
						      <td>Content Goes Here</td>
						      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
						      <td>Content Goes Here</td>
						      <td>Content Goes Here</td>
						    </tr>
						  </tbody>
						</table>
					</div>
					<hr>

					<!-- Tabs -->
					<h2 id="tabs" class="docs-heading" data-magellan-target="tabs"><a class="docs-heading-icon" href="#tabs"></a>Tabs</h2>
					<ul class="tabs" data-tabs id="example-tabs">
					  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
					  <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
					  <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
					  <li class="tabs-title"><a href="#panel4">Tab 4</a></li>
					  <li class="tabs-title"><a href="#panel5">Tab 5</a></li>
					  <li class="tabs-title"><a href="#panel6">Tab 6</a></li>
					</ul>

					<div class="tabs-content" data-tabs-content="example-tabs">
					  <div class="tabs-panel is-active" id="panel1">
					    <p>one</p>
					    <p>Check me out! I'm a super cool Tab panel with text content!</p>
					  </div>
					  <div class="tabs-panel" id="panel2">
					    <p>two</p>
					    <img class="thumbnail" src="http://placehold.it/300x50">
					  </div>
					  <div class="tabs-panel" id="panel3">
					    <p>three</p>
					    <p>Check me out! I'm a super cool Tab panel with text content!</p>
					  </div>
					  <div class="tabs-panel" id="panel4">
					    <p>four</p>
					    <img class="thumbnail" src="http://placehold.it/300x50">
					  </div>
					  <div class="tabs-panel" id="panel5">
					    <p>five</p>
					    <p>Check me out! I'm a super cool Tab panel with text content!</p>
					  </div>
					  <div class="tabs-panel" id="panel6">
					    <p>six</p>
					    <img class="thumbnail" src="http://placehold.it/300x50">
					  </div>
					</div>
					<hr>

					<!-- Thumbnail -->
					<h2 id="thumbnail" class="docs-heading" data-magellan-target="thumbnail"><a class="docs-heading-icon" href="#thumbnail"></a>Thumbnail</h2>
					<div class="docs-code-live">
						<div class="row">
						  <div class="small-4 columns">
						    <img class="thumbnail" src="http://placehold.it/300x300" alt="Placeholder image.">
						  </div>
						  <div class="small-4 columns">
						    <img class="thumbnail" src="http://placehold.it/300x300" alt="Placeholder image.">
						  </div>
						  <div class="small-4 columns">
						    <img class="thumbnail" src="http://placehold.it/300x300" alt="Placeholder image.">
						  </div>
						</div>
					</div>
					<hr>

					<!-- Title Bar -->
					<h2 id="title-bar" class="docs-heading" data-magellan-target="title-bar"><a class="docs-heading-icon" href="#title-bar"></a>Title Bar</h2>
					<div class="docs-code-live">
						<div class="title-bar">
						  <div class="title-bar-left">
						    <button class="menu-icon" type="button"></button>
						    <span class="title-bar-title">FoundationPress</span>
						  </div>
						  <div class="title-bar-right">
						    <button class="menu-icon" type="button"></button>
						  </div>
						</div>
					</div>
					<hr>

					<!-- Tooltip -->
					<h2 id="tooltip" class="docs-heading" data-magellan-target="tooltip"><a class="docs-heading-icon" href="#tooltip"></a>Tooltip</h2>
						<div class="docs-code-live">
							<p>The <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover='false' tabindex=1 title="Fancy word for a beetle.">scarabaeus</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.</p>
						</div>
					<hr>

					<h2 id="top-bar" class="docs-heading" data-magellan-target="top-bar"><a class="docs-heading-icon" href="#top-bar"></a>Top Bar</h2>
					<div class="docs-code-live">
						<div class="top-bar">

							<div class="top-bar-left">
						    <ul class="dropdown menu" data-dropdown-menu>
						      <li class="menu-text">Site Title</li>
						      <li class="has-submenu">
						        <a href="#">One</a>
						        <ul class="submenu menu vertical" data-submenu>
						          <li><a href="#">One</a></li>
						          <li><a href="#">Two</a></li>
						          <li><a href="#">Three</a></li>
						        </ul>
						      </li>
						      <li><a href="#">Two</a></li>
						      <li><a href="#">Three</a></li>
						    </ul>
						  </div>

							<div class="top-bar-right">
						    <ul class="menu">
						      <li><input type="search" placeholder="Search"></li>
						      <li><button type="button" class="button">Search</button></li>
						    </ul>
						  </div>
						</div>
					</div>
					<hr>

				</div>

				<!-- On this page - sidebar nav container -->
				<div class="large-3 columns sticky-container" data-sticky-container>
					<nav class="columns sticky">
						<div class="docs-toc" id="docsTOC">
							<ul class="vertical menu docs-sub-menu">
								<li class="docs-menu-title">On this page:</li>
								<li><a href="#accordion">Accordion</a></li>
								<li><a href="#accordion-menu">Accordion Menu</a></li>
								<li><a href="#badge">Badge</a></li>
								<li><a href="#breadcrumbs">Breadcrumbs</a></li>
								<li><a href="#button">Button<a></li>
								<li><a href="#callout">Callout</a></li>
								<li><a href="#close-button">Close button</a></li>
								<li><a href="#drilldown-menu">Drilldown Menu</a></li>
								<li><a href="#dropdown-menu">Dropdown Menu</a></li>
								<li><a href="#dropdown-pane">Dropdown Pane</a></li>
								<li><a href="#flex-video">Flex Video</a></li>
								<li><a href="#float-classes">Float Classes</a></li>
								<li><a href="#forms">Forms</a></li>
								<li><a href="#label">Label</a></li>
								<li><a href="#media-object">Media Object</a></li>
								<li><a href="#menu">Menu</a></li>
								<li><a href="#orbit">Orbit</a></li>
								<li><a href="#pagination">Pagination</a></li>
								<li><a href="#slider">Slider</a></li>
								<li><a href="#switch">Switch</a></li>
								<li><a href="#table">Table</a></li>
								<li><a href="#tabs">Tabs</a></li>
								<li><a href="#thumbnail">Thumbnail</a></li>
								<li><a href="#title-bar">Title Bar</a></li>
								<li><a href="#tooltip">Tooltip</a></li>
								<li><a href="#top-bar">Top Bar</a></li>
							</ul>
						</div>
					</nav>
				</div>

			</div>


			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
