<div class="header-wrapper">
  <div class="wrap">
    <div class="topleft-stretch"></div>
    <div class="set-alignment center" title="Change page alignment"></div>
    <a href="#!/intro" class="logo"><img src="images/logo-myselfmoorthy.png" alt="" /></a>
    <ul class="navigation">
      <li <?php if($highlight==1) echo 'class="active"'; ?>><a href="#!/intro">Intro</a></li>
      <li <?php if($highlight==2) echo 'class="active"'; ?>><a href="#!/works">My Works</a></li>
      <li <?php if($highlight==3) echo 'class="active"'; ?>><a href="#!/plugins">My Plugins</a></li>
      <li><a href="http://moorthy.co.cc/cv" class="external">My CV<br /><span>(pdf)</span></a></li>
    </ul>
    <div class="header-info">
      <div class="experience">
        <h6>Breathing Web For</h6>
        <!-- Dynamic -->
        <?php
			$year = date('y')+2000-2007;
			$month = date('n')-1;
			$day = date('j');
			
			if($year>1)
			echo "{$year} Years, ";
			else
			echo "{$year} Year, ";
			
			if($month>1)
			echo "{$month} Months, ";
			else if($month==1)
			echo "{$month} Month, ";
			
			if($day>1)
			echo "{$day} Days";
			else
			echo "{$day} Day";
			
		?>
      </div>
      <div class="status">
        <h6>Current Status</h6>
        Looking for new job</div>
    </div>
    <!--header-info--> 
  </div>
  <!--wrap--> 
</div>
<!--header-wrapper-->