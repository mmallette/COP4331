<?php
    include_once 'dbconnect.php';   
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    include_once 'functions.php';
    sec_session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  
<!-- NAVBAR ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Fishing Florida</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="spots.php">Spots</a></li>
                <li><a href="alvaro.php">Fish Id</a></li>
                <li><a href="kevin.php">Jokes</a></li>
                <li class="active"><a href="ibrahim.php">Solunar Activity</a></li>
                <li><a href="tide.php">Tides</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php if (login_check($mysqli) == true) : ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                <li><a href="joinMember.php">Become a Member</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Main Page Content
    ================================================== -->

<div class="container marketing">

	<h1 align="center">Complete Sun and Moon Data for Fish Activity</h1>
	
	<h2>About</h2>
	<p style="font-size: 17px">This page will provide you with the Rise and Setting of both the Sun and the Moon. 
	It is accurate for the years 1700-2100. You can use it to find the relevant data for any location in the Florida. It also includes: 
	</p>
	<ul>
		<li>Civil Twilight</li>
		<li>Nautical Twilight</li>
		<li>Astronomical Twilight</li>
	</ul>
	
	<h2>Why is this data relevant for fishing?</h2>
	<p style="font-size: 17px">Good question. This data evidently tabulates a 
		SoLunar calender. Solunar Calender usage revolves around a theory that 
		animals and fishes move according to the location of the moon in 
		comparison to their bodies. A little about the theory:
		In May 1926, John Aldenn Knight put together some fishing folklore 
		and other fishing factors such as the sun and the moon, hence the 
		name Solunar (Sol for sun and Lunar for moon) to form a theory on 
		the patterns of animal movement. Knight compiled a list of factors 
		which control or influence the day-to-day behavior of many freshwater
		and saltwater fish. Each one of the 33 different factors were considered. 
		All but 3 were rejected. The three factors retained were the sun, the
		moon and the tide. For salt water fishing, tides have long been 
		known as a factor which control fishes' behavior. As Knight's research 
		progressed, he found that rather than just tides themselves, the 
		relationship of the moon and sun's positions relative to each other 
		may be the determining factor. In addition to the time of moon up (
		moonrise) - moon down, his research determined that there were 
		intermediate times of the day that occurred in between the two major 
		periods. From that he establishes that there were major periods (moon up - moon down) 
		and minor periods. Knight published the first Solunar table in 1936.<a href="https://en.wikipedia.org/wiki/Solunar_theory">Wikipedia</a>
	</p>
	<h2>Well So how can I use it to fish?</h2>
	<p style="font-size: 17px">Like many other living creatures fishes have a tendency to be active a five crucial times:</p>
		<ul>
			<li>Sun Up</li>
			<li>Sun Down</li>
			<li>Moon Up</li>
			<li>Moon Down</li>
			<li>Moon Transit</li>
		</ul>
	<p style="font-size: 17px">So many fisherman have found this useful once they compared the fishing logs to these times.</p>
	<p style="font-size: 17px">The following excerpt is from one particular fisherman's experience:</p>
	<p style="font-size: 17px;margin-left: 100px;margin-right: 100px">...The real secret, I discovered, to solar/lunar influences on a daily 
		basis was nothing more than knowing when the sun and moon rose and 
		set on a 24 hour basis. That's right, it was simply a matter of knowing, 
		to the minute, when the sun came up and went down, and when the moon 
		came up and went down each and every day. My 21 year old fishing log 
		revealed without question that fish were active during a 90 minute 
		window surrounding each one of these four daily influences...The other 
		"super secret" my logs revealed was the predictable frequency of big 
		fish catches during the peak moon phases of full and new moon. 
		Specifically, a lot more big muskies, walleyes, and bass were taken 
		right on the scheduled calendar day of both the full or new (dark) moon
		peak, and continued for a three to five day stretch afterwards. In other 
		words, if the full moon peak is on June 10th, June 10 thru 15 have great 
		potential for trophies...Finally, my logs revealed a third factor that 
		really adds impact to this entire solunar secret. That unpredictable 
		third influence is local weather. Whenever a local weather change 
		coincides with the daily rise or set of either the sun or the moon, 
		during a peak monthly moon period, big things happen in bunches. Big 
		things meaning big fish...<a href="http://www.solunar.com/the_real_scoop.aspx">(Joe Butcher)</a>
	</p>
	<h2>So that means what?</h2>
	<p style="font-size: 17px">
		Ultimatly it boils down to feeding. That's right we look at all this data to determine the feeding habits
		of our prey...err fish. Why just feeding? simple the only time a fish would bother to move is when it's hungry.
		And of course mating season but I think anybody would careless about feeding during mating season! Below is a break down
		of the optimum feeding times:
	</p>
	<p style="font-size: 17px"><b>PEAK FISHING DAYS OCCUR:</b></p>
	<p style="font-size: 17px">The day of a NEW or FULL MOON will provide the strongest influence in each month.</p>
	<p style="font-size: 17px"><b>PEAK FISHING TIMES TAKES PLACE:</b></p>
	<p style="font-size: 17px">
		When a Solunar Period falls within 30 minutes to an hour of sunrise or sunset you can anticipate great action!
		When you have a moonrise or moonset during that period the action
		will be even greater. 
		And, finally, when the above times occur during a NEW or FULL MOON,
		you can expect the best action of the season!
	</p>
	<p style="font-size: 17px"><b>BEST FISHING DAYS ARE</b></p>
	<p style="font-size: 17px">
		Major or Minor Solunar Periods that fall near the times of Sunrise or Sunset
		during a Full or New Moon. <br>It's no secret that fish and game tend to feed during dawn and dusk (sunrise and sunset). 
		What increases the activity is the effect of a moonrise or moonset plus the specific monthly periods of New (dark) and Full (light) Moons.&nbsp;When these
		times coincide with a moon-rise or a moon-set the fishing action can be spectacular. Finally, a change in the local weather coinciding with the periods will further enhance
		the activity.
	</p>
	<p style="font-size: 17px"><b>PEAK FISHING MONTH IS JUNE: </b></p>
	<p style="font-size: 17px">
		June has more combined sun-moon influence than any other month.<br>
		During a FULL MOON the sun and moon are nearly opposite each other&nbsp;
		and very few minutes pass without one or the other being in our sky.<br>
		During a NEW MOON, both bodies are in near-perfect rhythm traveling the 
		skies together with their forces combined.&nbsp;Because of the interaction 
		between the many lunar and solar cycles, no two days, months or years are identical.
	</p>
	<h2>So how can we help?</h2>
	<p style="font-size: 17px">
		Below are two simple interfaces that will allow you to look up the
		Rising and setting of the sun and moon. On the right is the timing for 
		a single day. On the left is the timing for the whole year. Each presents
		you with data on sun/moon rise/set times however the one on the right presents
		the moon transit times. Using the following rubric you can determine your exepexted feeding times:
	</p>
	<p align="left"><b>
		<font size="3">MAJOR FEEDING TIME&nbsp;IS MOON TRANSIT TIME. </font>

		<font size="3"><br>SECOND MAJOR TIME ADD 12 1/2 HOURS TO MOON TRANSIT TIME. </font>
		
		<font size="3"><br>MINOR FEEDING TIMES = Moon Rise. </font>
		
		<font size="3"><br>MINOR FEEDING TIMES = Moon Set. </font>
	</p>
	<div style="margin-right: 50%;border: 2px solid greenyellow;padding: 4px;position: absolute">
		<p>
			You can obtain a table for any location in Florida by following these simple steps:
		</p>
		<ul>
		  <li>Enter the year (1700 - 2100) for which the table is desired.</li>
		  <li>Select the table type (sunrise/sunset, moonrise/moonset, etc.) from the pop-up
			  list in the form that you are using.</li>
		  <li>Specify the location of interest using the fields provided on the form.</li>
		  <li>Click the "Compute Table" button at the end of the form to compute the
			  table.  The table will provide the data requested in local standard time on a 24-hour
			  clock; for example, 1836 means 6:36 p.m., local standard time.</li>
		  <li>Be sure to read <a href="#notes">Notes
			  section</a> (on this page beyond the two forms) for an
			  explanation of the items in the table.</li>
		</ul>

		<a name="forma"></a>

		<h3 style="color: red; border-top: 1px solid black; margin-top: 1em; padding-top: 1em;">Form A - Cities or Towns</h3>

		<h2>Specify year, type of table, and place:</h2>

		<form method="post" target="_parent" action="http://aa.usno.navy.mil/cgi-bin/aa_rstablew.pl">
			<input type="hidden" name="FFX" value="1">

			<p>
				<span class="bold"><label for="xxy_us">Year:</label></span>&nbsp;&nbsp;<input type="text" name="xxy" id="xxy_us" size="4" maxlength="4" value="2014">

				<label for="tabtya"><b>Type of table:</b></label> 
				
				<select name="type" id="tabtya">
					<option selected="" value="0">sunrise/sunset</option>
					<option value="1">moonrise/moonset</option>
					<option value="2">civil twilight</option>
					<option value="3">nautical twilight</option>
					<option value="4">astronomical twilight</option>
				</select>
			</p>

			<p>
				<span class="bold">
					<label for="st">State or Territory:</label>
				</span>&nbsp;&nbsp;
				
				<select name="st" id="st">
					<option selected="" value="FL">Florida</option>
				</select>
			</p>

			<p>
				<span class="bold"><label for="placeus">City or Town Name:</label></span>&nbsp;&nbsp;
				<input type="text" name="place" id="placeus" size="32" maxlength="32">
			</p>

			<p>
				The place name you enter above must be a city or town in Florida. 
				The location will be retrieved from a file with over 22,000 
				places listed.  Either upper- or lower-case letters or a combination can 
				be used.  Spell out place name prefixes, as in "East Orange", "Fort 
				Lauderdale", "Mount Vernon", etc.  The only exception is "St.", which is 
				entered as an abbreviation with a period, as in "St.  Louis".  You need 
				only enter as many characters as will unambiguously identify the 
				place.
			</p> 

			<input type="hidden" name="ZZZ" value="END">

			<p>
				<input type="submit" value="Compute Table">
				<input type="reset" value="Clear all fields">
			</p>
		</form>


		<a name="formb"></a>

		<h3 style="color: red; border-top: 1px solid black; margin-top: 1.4em; padding-top: 1em;">Form B - Locations Worldwide</h3>

		<h2>Specify year, type of table, and place:</h2>

		<form method="post" target="_parent" action="http://aa.usno.navy.mil/cgi-bin/aa_rstablew.pl">

			<input type="hidden" name="FFX" value="2">

			<p>
				<span class="bold"><label for="xxy_int">Year:</label></span>&nbsp;&nbsp;<input type="text" name="xxy" id="xxy_int" size="4" maxlength="4" value="2014">

				<label for="tabtyb">
					<b>Type of table:</b>
				</label> 
				
				<select name="type" id="tabtyb">
					<option selected="" value="0">sunrise/sunset</option>
					<option value="1">moonrise/moonset</option>
					<option value="2">civil twilight</option>
					<option value="3">nautical twilight</option>
					<option value="4">astronomical twilight</option>
				</select>
			</p>

			<span class="bold">
				<label for="placeint">Place Name Label:</label>
			</span> &nbsp; 

			<input type="text" name="place" id="placeint" size="32" maxlength="32" value="(no name given)"> 

			<p>
				The place name you enter above is merely a label for the table header; 
				you can enter any identifier, or none (avoid using punctuation characters). 
				The data will be calculated for the longitude and latitude you enter below. 
			</p>

			<fieldset>
				<legend>
					<b>Longitude:</b>
				</legend>
				
				<input type="radio" name="xx0" id="east" value="1"> <label for="east">east</label>&nbsp;
				<input type="radio" name="xx0" id="west" checked="" value="-1"> <label for="west">west</label>&nbsp;
				<input type="text" name="xx1" id="dego" size="3" maxlength="3" value=""> <label for="dego">degrees</label>&nbsp;
				<input type="text" name="xx2" id="mino" size="2" maxlength="2" value=""> <label for="mino">minutes</label>&nbsp;
			</fieldset>

			<fieldset>
				<legend>
					<b>Latitude:</b>
				</legend>

				<input type="radio" name="yy0" id="north" checked="" value="1"> <label for="north">north</label>&nbsp;
				<input type="radio" name="yy0" id="south" value="-1"> <label for="south">south</label>&nbsp;
				<input type="text" name="yy1" id="dega" size="2" maxlength="2" value=""> <label for="dega">degrees</label>&nbsp;
				<input type="text" name="yy2" id="mina" size="2" maxlength="2" value=""> <label for="mina">minutes</label>&nbsp;	
			</fieldset>

			<fieldset>
				<legend>
					<b>Time Zone:</b>
				</legend>
				
				<input type="text" name="zz1" id="zhour" size="5" maxlength="5"> <label for="zhour">hours</label>&nbsp; 
				<input type="radio" name="zz0" id="zeast" value="1"> <label for="zeast">east of Greenwich</label>&nbsp; 
				<input type="radio" name="zz0" id="zwest" checked="" value="-1"> <label for="zwest">west of Greenwich</label>
			</fieldset>


			<p>
				For locations that require it, the time zone can be entered in hours and a
				fraction. For example, for locations in India, the time zone may be entered
				as 5.5 hours east of Greenwich. The time zone field can accommodate up to
				five characters.
			</p>

			Need coordinates?&nbsp; Try NGA's 
			<a href="http://earth-info.nga.mil/gns/html/index.html" target="blank">GEOnet Names Server (GNS)</a>.
			
			<br>Need U.S. coordinates?&nbsp; Try the USGS 
				<a href="http://geonames.usgs.gov/pls/gnispublic/" target="blank">Geographic Names Information System (GNIS)</a>. 
			<br>
			
			Need a time zone?&nbsp; Try the <a href="http://aa.usno.navy.mil/faq/docs/world_tzones.php">time zone map</a>.

			<input type="hidden" name="ZZZ" value="END">

			<p>
				<input type="submit" value="Compute Table">
				<input type="reset" value="Clear all fields">
			</p>
		</form>


		<div style="border-top: 1px solid black; margin-top: 1em; padding-top: 1em;">
			<a name="notes"></a>
			
			<img src="img/sunset2small.jpg" alt="Sunset" width="186" height="156" style="float: right; margin-bottom: 1em;">
			
			<h3 style="margin-top: 2em;">Notes</h3>
		</div>

		<h4 style="clear: right;">How to Print the Table</h4>

		<p class="apnote">The table is 134 characters wide, so to print it you 
		   must use <b>landscape</b> orientation and <b>8-point (smallest) type</b>.
		   Consult your browser's documentation for details on how to change the
		   font/text size. An alternative scheme is to save the table to a file on
		   your computer (for example, in Internet Explorer, click on <b>Page</b> then
		   <b>Save As...</b>), then use your favorite word processor or text editor
		   to print it.
		</p>

		<h4>How to Import the Table into a Spreadsheet</h4>

		<p class="apnote apnotetop">
			Open your favorite text editor, then copy the <b>numerical</b> 
			part of the table (i.e., do not copy the table headings) from your browser and 
			paste it into the text editor.  Save the data as a <b>text</b> file.
		</p>

		<p class="apnote">
			In Excel 2003, click <b>Data</b> on the menu bar, then <b>Import External 
			Data</b>, then <b>Import Data</b>.  Select your saved text file.  Choose <b>fixed 
			width</b> in the dialog box.  [In Excel 2004 for Mac, the commands are <b>Data</b> 
			-&gt; <b>Get External Data</b> -&gt; <b>Import Text File</b>]
		</p>

		<p class="apnotebottom">
			In Excel 2007, click <b>Data</b> on the menu bar, then From <b>Text</b>.  
			Select your saved text file. Choose <b>fixed width</b> in the dialog box.
		</p>

		<h4>Definitions</h4>

		<p class="apnote">
			For information on the definitions of rise, set, and twilight, see 
			<a href="http://aa.usno.navy.mil/faq/docs/RST_defs.php">Rise, Set, and Twilight Definitions</a> in <b>FAQ</b>.
		</p>

		<h4>Time Zones</h4>

		<p class="apnote">
			The times of the phenomena are presented in the 
			standard time of the place requested, using the <em>current</em> time zone of 
			the place. Standard time in <a href="http://aa.usno.navy.mil/faq/docs/us_tzones.php">time zones</a> was
			introduced in the U.S. in 1883, but the time zone boundaries have evolved 
			considerably since then, with places shifting from one zone to another.  There is 
			no attempt here to track such changes.
		</p>

		<h4>Daylight Time</h4>

		<p class="apnote">
			<span class="seagreen bold">Daylight time is not implemented in this  program.</span>  
			When 
			<a href="http://aa.usno.navy.mil/faq/docs/daylight_time.php">daylight time</a> 
			is in use, add one hour to the times listed in the table.
		</p>

		<h4>Legal Use of the Data in the Table</h4>

		<p class="apnote">
			Please see 
			<a href="http://aa.usno.navy.mil/faq/docs/lawyers.php" target="_top">Astronomical Data Used for Litigation</a> 
			if you are interested in using for legal purposes the data produced by this service.
		</p>

		<p>Sunset photo taken from Nags Head, North Carolina, by George Kaplan.</p>

		<p>
			<b>Back to . . .
			&nbsp; &nbsp; <a href="ibrahim.html#forma">Form A</a>
			&nbsp; &nbsp; <a href="ibrahim.html#formb">Form B</a>
			</b>
		</p>
	</div>
			
	<div style="margin-left: 51%;border: 2px solid burlywood;padding: 3px">
					
		<p>
			Use these forms to obtain <a href="http://aa.usno.navy.mil/faq/docs/RST_defs.php#riseset">rise, set, 
			and transit times</a> for the Sun and Moon; <a href="http://aa.usno.navy.mil/faq/docs/RST_defs.php#twilight">civil 
			twilight beginning and end times</a>; and, <a href="http://aa.usno.navy.mil/faq/docs/moon_phases.php">lunar 
			phase information</a>.  First, specify the date and location in one of the two 
			forms below. Then, click the "Get data" button at the end of the form.
		</p>

		<p>
			Use 
			<a href="http://aa.usno.navy.mil/data/docs/RS_OneDay.php#forma">Form A</a> 
			for cities or towns in Florida. &nbsp; Use
			<a href="http://aa.usno.navy.mil/data/docs/RS_OneDay.php#formb">Form B</a> 
			for all other locations.  Both forms are immediately below.
		</p>

		<p>
			<b>Be sure to read the 
			<a href="http://aa.usno.navy.mil/data/docs/RS_OneDay.php#notes">Notes</a>
			section located after the two forms, especially if you wish to 
			<a href="http://aa.usno.navy.mil/faq/docs/lawyers.php">use these data for legal purposes</a>.
			</b>
		</p>


		<a name="forma"></a>

		<h3 style="color: red; border-top: 1px solid black; margin-top: 2.2em; padding-top: 1em;">Form A - Cities or Towns</h3>

		<h2>Specify year, month, day, and place:</h2>

		<form method="post" target="_parent" action="http://aa.usno.navy.mil/cgi-bin/aa_pap.pl">

			<input type="hidden" name="FFX" value="1">

			<input type="hidden" name="ID" value="AA">

			<p>
				<span class="bold">
					<label for="xxy_us">Year:</label>
				</span>&nbsp;&nbsp;
				
				<input type="text" name="xxy" id="xxy_us" size="4" maxlength="4" value="2014">&nbsp;&nbsp;
				
				<span class="bold"><label for="xxm_us">Month:</label></span>&nbsp;&nbsp;

				<select name="xxm" id="xxm_us">
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>&nbsp;&nbsp;
				
				<span class="bold"><label for="xxd_us">Day:</label></span>&nbsp;&nbsp;<input type="text" name="xxd" id="xxd_us" size="2" maxlength="2" value="9">
			</p>

			<p>
				<span class="bold"><label for="st">State or Territory:</label></span>&nbsp;&nbsp;
				<select name="st" id="st">
					<option selected="" value="FL">Florida</option>
				</select>
			</p>

			<p>
				<span class="bold"><label for="placeus">City or Town Name:</label></span>&nbsp;&nbsp;
				<input type="text" name="place" id="placeus" size="32" maxlength="32">
			</p>

			<p>
				The place name you enter above must be a city or town in Florida. 
				The place's location will be retrieved from a file with over 22,000 
				places listed.  Either upper- or lower-case letters or a combination can 
				be used.  Spell out place name prefixes, as in "East Orange", "Fort 
				Lauderdale", "Mount Vernon", etc.  The only exception is "St.", which is 
				entered as an abbreviation with a period, as in "St.  Louis".  You need 
				only enter as many characters as will unambiguously identify the 
				place.
			</p> 

			<input type="hidden" name="ZZZ" value="END">

			<p>
				<input type="submit" value="     Get data     ">
			</p>

		</form>


		<a name="formb"></a>

		<h3 style="color: red; border-top: 1px solid black; margin-top: 1em; padding-top: 1em;">Form B - Locations Worldwide</h3>

		<h2>Specify year ,month, day, and place:</h2>

		<form method="post" target="_parent" action="http://aa.usno.navy.mil/cgi-bin/aa_pap.pl">

			<input type="hidden" name="FFX" value="2">

			<input type="hidden" name="ID" value="AA">
			<p>
				<span class="bold"><label for="xxy_int">Year:</label></span>&nbsp;&nbsp;<input type="text" name="xxy" id="xxy_int" size="4" maxlength="4" value="2014">&nbsp;&nbsp;
				<span class="bold"><label for="xxm_int">Month:</label></span>&nbsp;&nbsp;
				<select name="xxm" id="xxm_int">
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>&nbsp;&nbsp;
				<span class="bold"><label for="xxd_int">Day:</label></span>&nbsp;&nbsp;<input type="text" name="xxd" id="xxd_int" size="2" maxlength="2" value="9">
			</p>

			<span class="bold"><label for="placeint">Place Name Label:</label></span> &nbsp; 
			<input type="text" name="place" id="placeint" size="32" maxlength="32" value="(no name given)"> 
			<p>
				The place name you enter above is merely a label for the table header; 
				you can enter any identifier, or none (avoid using punctuation characters). 
				The data will be calculated for the longitude and latitude you enter below. 
			</p>

			<fieldset><legend><b>Longitude:</b></legend>
				<input type="radio" name="xx0" id="east" value="1"> <label for="east">east</label>&nbsp;
				<input type="radio" name="xx0" id="west" checked="" value="-1"> <label for="west">west</label>&nbsp;
				<input type="text" name="xx1" id="dego" size="3" maxlength="3" value=""> <label for="dego">degrees</label>&nbsp;
				<input type="text" name="xx2" id="mino" size="2" maxlength="2" value=""> <label for="mino">minutes</label>&nbsp;
			</fieldset>

			<fieldset><legend><b>Latitude:</b></legend>
				<input type="radio" name="yy0" id="north" checked="" value="1"> <label for="north">north</label>&nbsp;
				<input type="radio" name="yy0" id="south" value="-1"> <label for="south">south</label>&nbsp;
				<input type="text" name="yy1" id="dega" size="2" maxlength="2" value=""> <label for="dega">degrees</label>&nbsp;
				<input type="text" name="yy2" id="mina" size="2" maxlength="2" value=""> <label for="mina">minutes</label>&nbsp;
			</fieldset>

			<fieldset><legend><b>Time Zone:</b></legend>
				<input type="text" name="zz1" id="zhour" size="5" maxlength="5"> <label for="zhour">hours</label>&nbsp; 
				<input type="radio" name="zz0" id="zeast" value="1"> <label for="zeast">east of Greenwich</label>&nbsp; 
				<input type="radio" name="zz0" id="zwest" checked="" value="-1"> <label for="zwest">west of Greenwich</label>
			</fieldset>

			<p>
				For locations that require it, the time zone can be entered in hours and a
				fraction. For example, for locations in India, the time zone may be entered
				as 5.5 hours east of Greenwich. The time zone field can accommodate up to
				five characters.
			</p>

			<p>
				Need coordinates?&nbsp; Try NGA's 
				<a href="http://earth-info.nga.mil/gns/html/index.html" target="blank">GEOnet Names Server (GNS)</a>.
				<br>Need U.S. coordinates?&nbsp; Try the USGS 
					<a href="http://geonames.usgs.gov/pls/gnispublic/" target="blank">Geographic Names Information System (GNIS)</a>. 
				<br>Need a time zone?&nbsp; Try the <a href="http://aa.usno.navy.mil/faq/docs/world_tzones.php">time zone map</a>.

				<input type="hidden" name="ZZZ" value="END">
			</p>
			
			<p>
				<input type="submit" value="     Get data     ">
			</p>

		</form>

		<div style="border-top: 1px solid black; margin-top: 1em; padding-top: 1em;">
			<a name="notes"></a>
			<img src="img/sunset1.jpg" alt="Sunset" width="201" height="108" style="float: right; margin-bottom: 0.5em; margin-left: 0.5em;">
			<h3>Notes</h3>
		</div>

		<h4>Legal Use of the Calculated Data</h4>

		<p class="apnote">
			Please see <a href="http://aa.usno.navy.mil/faq/docs/lawyers.php">Astronomical Data Used for Litigation</a> 
			if you are interested in using the data produced by this service for 
			legal purposes.
		</p>

		<h4>Definitions</h4>
		<p class="apnote">
			For more information on the terms used, see the 
			<a href="http://asa.usno.navy.mil/SecM/Glossary.html" target="_blank">Astronomical Almanac On-line Glossary</a>, 
			<a href="http://aa.usno.navy.mil/faq/docs/RST_defs.php">Rise, Set, and Twilight Definitions</a> or 
			<a href="http://aa.usno.navy.mil/faq/docs/moon_phases.php">Phases of the Moon and Percent of the Moon Illuminated</a> in the 
			<b><a href="http://aa.usno.navy.mil/faq/">Astronomical Information Center</a></b>.
		</p>

		<h4>Computing Data for Multiple Days</h4>
		<p class="apnote">
			If you need rise, set, or twilight times for a series of dates for a 
			specific location, use our 
			<a href="http://aa.usno.navy.mil/data/docs/RS_OneYear.php">Sun or Moon Rise/Set Table for One Year</a> service, which computes a one-page table covering a calendar year.
		</p>

		<h4>Time Formats</h4>
		<p class="apnote">
			For U.S. cities or towns (Form A), the output times will be on a 
			12-hour clock (with "a.m." or "p.m." listed). For worldwide locations (Form B), the 
			output times will be on a 24-hour clock.
		</p>

		<h4>Time Zones</h4>
		<p class="apnote apnotetop">
			For U.S. cities or towns (Form A), phenomena times are presented in the 
			standard time of the place requested, using the current time zone of that place. Standard 
			time in <a href="http://aa.usno.navy.mil/faq/docs/us_tzones.php">time zones</a> was introduced in the U.S. in 
			1883, but the time zone boundaries have evolved considerably since then, with places 
			shifting from one zone to another. This service makes no attempt to track such changes.
		</p>

		<p class="apnotebottom">
			For worldwide locations (Form B) that require it, the time zone can be entered in 
			hours and a fraction.  For example, for locations in India, the time zone may be entered 
			as 5.5&nbsp;hours east of Greenwich. The time zone field can accommodate up to five 
			characters.
		</p>

		<h4>Daylight Time</h4>
		<p class="apnote">
			<a href="http://aa.usno.navy.mil/faq/docs/daylight_time.php">Daylight time</a> is implemented 
			only for U.S. cities or towns (Form A) and only for years 1967 and later, in accordance 
			with the Uniform Time Act of 1966 and subsequent legislation. Daylight time is not used 
			for places currently exempt from it.
		</p>

		<p style="margin-top: 9.7em;">Sunset photo by Lu Rarogiewicz from Mt. Wilson, California.</p>

		<p>
			<b>
				Back to . . .
				&nbsp; &nbsp; <a href="ibrahim.html#forma">Form A</a>
				&nbsp; &nbsp; <a href="ibrahim.html#formb">Form B</a>
			</b>
		</p>
	</div>

	<hr class="featurette-divider">
	<!-- FOOTER -->
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.php">Terms</a></p>
	</footer>

</div><!-- /.container -->
  </body>
</html>
