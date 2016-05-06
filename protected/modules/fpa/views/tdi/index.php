<?php  ?>
<!-- GSC 1 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Data Communications</h2>
  </div>
  <div class="mdl-card__supporting-text">
	The data and control information used in the application are sent or received over
	communication facilities. Terminals connected locally to the control unit are considered to use
	communication facilities. Protocol is a set of conventions, which permit the transfer, or
	exchange of information between two systems or devices. All data communication links require
	some type of protocol
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application is pure batch processing or a standalone PC
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-1">
	          <input type="radio" id="list-option-1" class="mdl-radio__button" name="options-1" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application is batch but has remote data entry or remote printing.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-2">
	          <input type="radio" id="list-option-2" class="mdl-radio__button" name="options-1" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application is batch but has remote data entry and remote printing.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-3">
	          <input type="radio" id="list-option-3" class="mdl-radio__button" name="options-1" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application includes online data collection or TP (teleprocessing) front end to a batch process or query system.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-4">
	          <input type="radio" id="list-option-4" class="mdl-radio__button" name="options-1" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application is more than a front-end, but supports only one type of TP communications protocol.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-5">
	          <input type="radio" id="list-option-5" class="mdl-radio__button" name="options-1" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application is more than a front-end, and supports more than one type of TP communications protocol.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-6">
	          <input type="radio" id="list-option-6" class="mdl-radio__button" name="options-1" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 1 -->

<!-- GSC 2 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Distributed Data Processing</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Distributed data or processing functions are a characteristic of the application within the application boundary.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application does not aid the transfer of data or processing function between components of the system.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-7">
	          <input type="radio" id="list-option-7" class="mdl-radio__button" name="options-2" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Application prepares data for end user processing on another component of the system such as PC spreadsheets and PC DBMS.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-8">
	          <input type="radio" id="list-option-8" class="mdl-radio__button" name="options-2" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Data is prepared for transfer, then is transferred and processed on another component of the system (not for enduser processing).
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-9">
	          <input type="radio" id="list-option-9" class="mdl-radio__button" name="options-2" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Distributed processing and data transfer are online and in one direction only.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-10">
	          <input type="radio" id="list-option-10" class="mdl-radio__button" name="options-2" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Distributed processing and data transfer are online and in both directions.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-11">
	          <input type="radio" id="list-option-11" class="mdl-radio__button" name="options-2" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Processing functions are dynamically performed on the most appropriate component of the system.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-12">
	          <input type="radio" id="list-option-12" class="mdl-radio__button" name="options-2" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 2 -->

<!-- GSC 3 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Performance</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Application performance objectives, stated or approved by the user, in either response or throughput, influence (or will influence) the design, development, installation, and support of the application.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No special performance requirements were stated by the user.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-13">
	          <input type="radio" id="list-option-13" class="mdl-radio__button" name="options-3" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Performance and design requirements were stated and reviewed but no special actions were required.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-14">
	          <input type="radio" id="list-option-14" class="mdl-radio__button" name="options-3" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Response time or throughput is critical during peak hours. No special design for CPU utilization was required. Processing deadline is for the next business day.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-15">
	          <input type="radio" id="list-option-15" class="mdl-radio__button" name="options-3" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Response time or throughput is critical during all business hours. No special design for CPU utilization was required. Processing deadline requirements with interfacing systems are constraining.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-16">
	          <input type="radio" id="list-option-16" class="mdl-radio__button" name="options-3" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition, stated user performance requirements are stringent enough to require performance analysis tasks in the design phase.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-17">
	          <input type="radio" id="list-option-17" class="mdl-radio__button" name="options-3" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition, performance analysis tools were used in the design, development, and/or implementation phases to meet the stated user performance requirements.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-18">
	          <input type="radio" id="list-option-18" class="mdl-radio__button" name="options-3" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 3 -->

<!-- GSC 4 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Heavily Used Configuration</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	A heavily used operational configuration, requiring special design considerations, is a characteristic of the application. For example, the user wants to run the application on existing or committed equipment that will be heavily used
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No explicit or implicit operational restrictions are included.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-19">
	          <input type="radio" id="list-option-19" class="mdl-radio__button" name="options-4" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Operational restrictions do exist, but are less restrictive than a typical application. No special effort is needed to meet the restrictions.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-20">
	          <input type="radio" id="list-option-20" class="mdl-radio__button" name="options-4" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Some security or timing considerations are included.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-21">
	          <input type="radio" id="list-option-21" class="mdl-radio__button" name="options-4" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Specific processor requirements for a specific piece of the application are included.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-22">
	          <input type="radio" id="list-option-22" class="mdl-radio__button" name="options-4" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Stated operation restrictions require special constraints on the application in the central processor or a dedicated processor.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-23">
	          <input type="radio" id="list-option-23" class="mdl-radio__button" name="options-4" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition, there are special constraints on the application in the distributed components of the system.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-24">
	          <input type="radio" id="list-option-24" class="mdl-radio__button" name="options-4" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 4 -->

<!-- GSC 5 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Transaction Rate</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The transaction rate is high and it influenced the design, development, installation, and support of the application
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No peak transaction period is anticipated.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-25">
	          <input type="radio" id="list-option-25" class="mdl-radio__button" name="options-5" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Peak transaction period (e.g., monthly, quarterly, seasonally, annually) is anticipated.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-26">
	          <input type="radio" id="list-option-26" class="mdl-radio__button" name="options-5" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Weekly peak transaction period is anticipated.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-27">
	          <input type="radio" id="list-option-27" class="mdl-radio__button" name="options-5" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Daily peak transaction period is anticipated.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-28">
	          <input type="radio" id="list-option-28" class="mdl-radio__button" name="options-5" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	High transaction rate(s) stated by the user in the application requirements or service level agreements are high enough to require performance analysis tasks in the design phase.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-29">
	          <input type="radio" id="list-option-29" class="mdl-radio__button" name="options-5" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	High transaction rate(s) stated by the user in the application requirements or service level agreements are high enough to require performance analysis tasks and, in addition, require the use of performance analysis tools in the design, development, and/or installation phases.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-30">
	          <input type="radio" id="list-option-30" class="mdl-radio__button" name="options-5" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 5 -->

<!-- GSC 6 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Online Data Entry</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Online data entry and control functions are provided in the application.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	All transactions are processed in batch mode.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-31">
	          <input type="radio" id="list-option-31" class="mdl-radio__button" name="options-6" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	1% to 7% of transactions are interactive data entry.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-32">
	          <input type="radio" id="list-option-32" class="mdl-radio__button" name="options-6" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	8% to 15% of transactions are interactive data entry.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-33">
	          <input type="radio" id="list-option-33" class="mdl-radio__button" name="options-6" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	16% to 23% of transactions are interactive data entry.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-34">
	          <input type="radio" id="list-option-34" class="mdl-radio__button" name="options-6" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	24% to 30% of transactions are interactive data entry.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-35">
	          <input type="radio" id="list-option-35" class="mdl-radio__button" name="options-6" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	More than 30% of transactions are interactive data entry.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-36">
	          <input type="radio" id="list-option-36" class="mdl-radio__button" name="options-6" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 6 -->

<!-- GSC 7 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">End-User Efficiency</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The online functions provided emphasize a design for end-user efficiency. The design includes:</br>
		• Navigational aids (for example, function keys, jumps, dynamically generated menus)</br>
		• Menus</br>
		• Online help and documents</br>
		• Automated cursor movement</br>
		• Scrolling</br>
		• Remote printing (via online transactions)</br>
		• Preassigned function keys</br>
		• Batch jobs submitted from online transactions</br>
		• Cursor selection of screen data</br>
		• Heavy use of reverse video, highlighting, colors underlining, and other indicators</br>
		• Hard copy user documentation of online transactions</br>
		• Mouse interface</br>
		• Pop-up windows</br>
		• As few screens as possible to accomplish a business function</br>
		• Bilingual support (supports two languages; count as four items)</br>
		• Multilingual support (supports more than two languages; count as six items)</br>
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	None of the above.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-37">
	          <input type="radio" id="list-option-37" class="mdl-radio__button" name="options-7" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	One to three of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-38">
	          <input type="radio" id="list-option-38" class="mdl-radio__button" name="options-7" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Four to five of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-39">
	          <input type="radio" id="list-option-39" class="mdl-radio__button" name="options-7" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Six or more of the above, but there are no specific user requirements related to efficiency.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-40">
	          <input type="radio" id="list-option-40" class="mdl-radio__button" name="options-7" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Six or more of the above, and stated requirements for enduser efficiency are strong enough to require design tasks for human factors to be included (for example, minimize key strokes, maximize defaults, use of templates).
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-41">
	          <input type="radio" id="list-option-41" class="mdl-radio__button" name="options-7" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Six or more of the above, and stated requirements for enduser efficiency are strong enough to require use of special tools and processes to demonstrate that the objectives have been achieved.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-42">
	          <input type="radio" id="list-option-42" class="mdl-radio__button" name="options-7" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 7 -->

<!-- GSC 8 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Online Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The transaction rate is high and it influenced the design, development, installation, and support of the application
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	None.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-43">
	          <input type="radio" id="list-option-43" class="mdl-radio__button" name="options-8" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Online update of one to three control files is included. Volume of updating is low and recovery is easy.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-44">
	          <input type="radio" id="list-option-44" class="mdl-radio__button" name="options-8" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Online update of four or more control files is included. Volume of updating is low and recovery easy.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-45">
	          <input type="radio" id="list-option-45" class="mdl-radio__button" name="options-8" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Online update of major internal logical files is included.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-46">
	          <input type="radio" id="list-option-46" class="mdl-radio__button" name="options-8" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition, protection against data lost is essential and has been specially designed and programmed in the system.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-47">
	          <input type="radio" id="list-option-47" class="mdl-radio__button" name="options-8" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition, high volumes bring cost considerations into the recovery process. Highly automated recovery procedures with minimum operator intervention are included.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-48">
	          <input type="radio" id="list-option-48" class="mdl-radio__button" name="options-8" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 8 -->

<!-- GSC 9 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Complex Processing</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Complex processing is a characteristic of the application. The following components are present.</br>
  	• Sensitive control (for example, special audit processing) and/or application specific security processing</br>
  	• Extensive logical processing</br>
  	• Extensive mathematical processing</br>
  	• Much exception processing resulting in incomplete transactions that must be processed again, for example, incomplete ATM transactions caused by TP interruption, missing data values, or failed edits</br>
  	• Complex processing to handle multiple input/output possibilities, for example, multimedia, or device independence</br>
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	None of the above.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-49">
	          <input type="radio" id="list-option-49" class="mdl-radio__button" name="options-9" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any one of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-50">
	          <input type="radio" id="list-option-50" class="mdl-radio__button" name="options-9" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any two of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-51">
	          <input type="radio" id="list-option-51" class="mdl-radio__button" name="options-9" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any three of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-52">
	          <input type="radio" id="list-option-52" class="mdl-radio__button" name="options-9" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any four of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-53">
	          <input type="radio" id="list-option-53" class="mdl-radio__button" name="option9s" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	All five of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-54">
	          <input type="radio" id="list-option-54" class="mdl-radio__button" name="options-9" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 9 -->

<!-- GSC 10 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Reusability</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The application and the code in the application have been specifically designed, developed, and supported to be usable in other applications.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No reusable code.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio ml-js-ripple-effect" for="list-option-55">
	          <input type="radio" id="list-option-55" class="mdl-radio__button" name="options-10" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Reusable code is used within the application.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-56">
	          <input type="radio" id="list-option-56" class="mdl-radio__button" name="options-10" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Less than 10% of the application considered more than one user's needs.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-57">
	          <input type="radio" id="list-option-57" class="mdl-radio__button" name="options-10" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Ten percent (10%) or more of the application considered more than one user's needs.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-58">
	          <input type="radio" id="list-option-58" class="mdl-radio__button" name="options-10" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	The application was specifically packaged and/or documented to ease re-use, and the application is customized by the user at source code level.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-59">
	          <input type="radio" id="list-option-59" class="mdl-radio__button" name="options-10" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	The application was specifically packaged and/or documented to ease re-use, and the application is customized for use by means of user parameter maintenance.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-60">
	          <input type="radio" id="list-option-60" class="mdl-radio__button" name="options-10" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 10 -->

<!-- GSC 11 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Installation Ease</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Conversion and installation ease are characteristics of the application. A conversion and installation plan and/or conversion tools were provided and tested during the system test phase.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No special considerations were stated by the user, and no special setup is required for installation.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-61">
	          <input type="radio" id="list-option-61" class="mdl-radio__button" name="options-11" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No special considerations were stated by the user but special setup is required for installation.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-62">
	          <input type="radio" id="list-option-62" class="mdl-radio__button" name="options-11" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Conversion and installation requirements were stated by the user, and conversion and installation guides were provided and tested. The impact of conversion on the project is not considered to be important.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-63">
	          <input type="radio" id="list-option-63" class="mdl-radio__button" name="options-11" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Conversion and installation requirements were stated by the user, and conversion and installation guides were provided and tested. The impact of conversion on the project is considered to be important.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-64">
	          <input type="radio" id="list-option-64" class="mdl-radio__button" name="options-11" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition to 2 above, automated conversion and installation tools were provided and tested.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-65">
	          <input type="radio" id="list-option-65" class="mdl-radio__button" name="options-11" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	In addition to 3 above, automated conversion and installation tools were provided and tested.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-66">
	          <input type="radio" id="list-option-66" class="mdl-radio__button" name="options-11" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 11 -->

<!-- GSC 12 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Operational Ease</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	Operational ease is characteristic of the application. Effective start-up, back-up, and recovery procedures were provided and tested during the system test phase. The application minimizes the need for manual activities, such as tape mounts, paper handling, and direct on-location manual intervention.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	No special operational considerations other than the normal back-up procedures were stated by the user.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-67">
	          <input type="radio" id="list-option-67" class="mdl-radio__button" name="options-12" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	One, some, or all of the following items apply to the application. Select all that apply. Each item has a point value of one, except as noted otherwise.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-68">
	          <input type="radio" id="list-option-68" class="mdl-radio__button" name="options-12" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Effective start-up, back-up, and recovery processes were provided, but operator intervention is required.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-69">
	          <input type="radio" id="list-option-69" class="mdl-radio__button" name="options-12" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Effective start-up, back-up, and recovery processes were provided, but no operator intervention is required (count as two items).
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-70">
	          <input type="radio" id="list-option-70" class="mdl-radio__button" name="options-12" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	The application minimizes the need for tape mounts.</br>
	    	The application minimizes the need for paper handling.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-71">
	          <input type="radio" id="list-option-71" class="mdl-radio__button" name="options-12" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	The application is designed for unattended operation. Unattended operation means no operator intervention is required to operate the system other than to start up or shut down the application. Automatic error recovery is a feature of the application.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-72">
	          <input type="radio" id="list-option-72" class="mdl-radio__button" name="options-12" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 12 -->

<!-- GSC 13 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Multiple Sites</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The application has been specifically designed, developed, and supported to be installed at multiple sites for multiple organizations.
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	User requirements do not require considering the needs of more than one user/installation site.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-73">
	          <input type="radio" id="list-option-73" class="mdl-radio__button" name="options-13" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Needs of multiple sites were considered in the design, and the application is designed to operate only under identical hardware and software environments.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-74">
	          <input type="radio" id="list-option-74" class="mdl-radio__button" name="options-13" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Needs of multiple sites were considered in the design, and the application is designed to operate only under similar hardware and/or software environments.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-75">
	          <input type="radio" id="list-option-75" class="mdl-radio__button" name="options-13" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Needs of multiple sites were considered in the design, and the application is designed to operate under different hardware and/or software environments.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-76">
	          <input type="radio" id="list-option-76" class="mdl-radio__button" name="options-13" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Documentation and support plan are provided and tested to support the application at multiple sites and the application is as described by 1 or 2.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-77">
	          <input type="radio" id="list-option-77" class="mdl-radio__button" name="options-13" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Documentation and support plan are provided and tested to support the application at multiple sites and the application is as described by 3.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-78">
	          <input type="radio" id="list-option-78" class="mdl-radio__button" name="options-13" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 13 -->

<!-- GSC 14 -->
<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Facilitate Change</h2>
  </div>
  <div class="mdl-card__supporting-text">
  	The application has been specifically designed, developed, and supported to facilitate change.</br>
  	The following characteristics can apply for the application:</br>
  	• Flexible query and report facility is provided that can handle simple requests; for example, and/or logic applied to only one internal logical file (count as one item).</br>
  	• Flexible query and report facility is provided that can handle requests of average complexity, for example, and/or logic applied to more than one internal logical file (count as two items).</br>
  	• Flexible query and report facility is provided that can handle complex requests, for example, and/or logic combinations on one or more internal logical files (count as three items).</br>
  	• Business control data is kept in tables that are maintained by the user with online interactive processes, but changes take effect only on the next business day.</br>
  	• Business control data is kept in tables that are maintained by the user with online interactive processes, and the changes take effect immediately (count as two items).</br>
	<ul class="demo-list-control mdl-list">
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	None of the above.
	    </span>
	    <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-79">
	          <input type="radio" id="list-option-79" class="mdl-radio__button" name="options-14" value="0" checked />
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any one of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-80">
	          <input type="radio" id="list-option-80" class="mdl-radio__button" name="options-14" value="1"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any two of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-81">
	          <input type="radio" id="list-option-81" class="mdl-radio__button" name="options-14" value="2"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any three of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-82">
	          <input type="radio" id="list-option-82" class="mdl-radio__button" name="options-14" value="3"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	Any four of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-83">
	          <input type="radio" id="list-option-83" class="mdl-radio__button" name="options-14" value="4"/>
	        </label>
	    </span>
	  </li>
	  <li class="mdl-list__item">
	    <span class="mdl-list__item-primary-content">
	    	All five of the above.
	    </span>
	      <span class="mdl-list__item-secondary-action">
	        <label class="demo-list-radio mdl-radio mdl-js-radio mdl-js-ripple-effect" for="list-option-84">
	          <input type="radio" id="list-option-84" class="mdl-radio__button" name="options-14" value="5"/>
	        </label>
	    </span>
	  </li>
	</ul>
  </div>
</div>
<!-- End GSC 14 -->