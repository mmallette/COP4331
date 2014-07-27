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
    <link href="css/alvaro.css" rel="stylesheet">
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
                <li><a href="spots.html">Spots</a></li>
                <li class="active"><a href="alvaro.html">Fish Id</a></li>
                <li><a href="kevin.php">Jokes</a></li>
                <li><a href="ibrahim.php">Solunar Activity</a></li>
                <li><a href="tide.php">Tides</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
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

      
      <!-- here is the content-->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Freshwater Fish<span class="text-muted"></span></h2>
          <br>
          <br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <h4>American Eel<h4>
          <button type='button' class='button AmericanEel' data-toggle="modal" data-target="#AmericanEel"></button>
          <div class="modal fade" id="AmericanEel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">American Eel: Anguilla rostrata</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The American Eel is also know as the pencil eel, yellow eel, black eel, silver eel, Boston eel, Atlantic eel or common eel.

                  The body is extremely elongated (snakelike), with a very long dorsal fin that is confluent with the anal fin.  Pelvic fins are absent and tiny scales are embedded in the skin giving eels a smooth feel.  The adult color is a yellow-brown with pale underbelly.

                  It is a distinct species with no known subspecies.  Similar species exist around Japan, Australia and Europe.

                  This is a gourmet fish in the Asian markets and is often used in Sushi.  It tends to be bony by American standards but is good smoked.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>American eels are found in waters with coastal access along the Atlantic seaboard of the US. 

                  Eels are primarily riverine but access ponds and lakes.  They orient to structure and flow.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning is still not well understood but fascinating.  The adults migrate to the ocean during autumn.  During the long trek the fish metamorphose into a "silver eel" stage lose their vision and stop eating.  Meanwhile, the gonads expand dramatically.  The fish head to a location near the Sargasso Sea where they spawn en masse and apparently die.  The eggs hatch into leaf-shaped floating leptocephalus larvae that drift with the currents.  When they come within range of a freshwater river, the leptocephalus metamorphoses again into a tiny semi-transparent "glass eel" that buries itself in the sand.  The glass eel that changes again into a pigmented pencil eel and continues its migration upstream to find a habitat to mature and await it's time to go spawn.  This process of spawning in the ocean and maturing inland is termed catadromy (the fish are catadromous).

                  American eels are opportunistic feeders, which means they eat whatever food is available to them. They are considered carnivorous and eat a variety of food, including fish, frogs, insects and dead organisms.

                  American eels are known to live as long as 43 years, but generally migrate to spawn and die long before then.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>Approximately 60-inch long male weighing about 16 pounds.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Not generally considered to be a sport fish in this country. They can be caught on hook and line and are taken commercially.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>American Shad<h4>
          <button type='button' class='button AmericanShad' data-toggle="modal" data-target="#AmericanShad"></button>
          <div class="modal fade" id="AmericanShad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">American Shad</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Green or greenish blue with metallic luster on back and silvery sides. The chest and abdomen have bony scutes. They typically have several spots along their side.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>In Florida, it occurs only in the northeast, mostly in the St. Johns River and Nassau River when it returns from the ocean to spawn, typically between late December and early April.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Plankton feeders, but strike small bright spoons and flies. They are anadromous, meaning they mature in salt water, but return to fresh water rivers to spawn.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>5.19 lbs. Big Catch: 18 inches or 4 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Historically the sport fishery was mostly a troll boat fishery with some spin casting from the bank. In recent times, fly fishing has become very popular. The sport fishery is primarily located between Sanford and Melbourne. The flesh is good, especially smoked, and the roe is excellent.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Black Crappie<h4>
          <button type='button' class='button BlackCrappie' data-toggle="modal" data-target="#BlackCrappie"></button>
          <div class="modal fade" id="BlackCrappie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Black Crappie</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A deep body with nearly symmetrical dorsal and anal fins and a speckled pattern on the body and fins identify the black crappie.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Unlike most other panfish, crappie spend much of their time offshore feeding on small fish in lakes or in large slow-moving clear water rivers.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>They nest in colonies from February to April. Nests are fanned by males over gravel or muddy bottoms in depths of 3-8 feet, with big fish deeper. Primary food items are crustaceans, aquatic insects and small fishes.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>3.83 lbs. Big Catch: 14 inches or 2.0 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Specks are a cool-weather favorite and excellent table fare. Crappies are common throughout Florida. Drift Missouri minnows or grass shrimp below a float, with a #4 hook and small split shot. Depth is key, as crappie school at the same level. When crappie move inshore to spawn, a bright 1/16-oz. to 1/8-oz. jig or Hal-flies will produce.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <h4>Blue Catfish<h4>
          <button type='button' class='button BlueCatfish' data-toggle="modal" data-target="#BlueCatfish"></button>
          <div class="modal fade" id="BlueCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blue Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Adults have stout bodies with prominently humped backs in front of the dorsal fin. They resemble channel catfish by having deeply forked tails, but are lack the spots and have a longer, straight-edged anal. The back and upper sides are blue to slate gray, and the belly is white.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Originally found in the Escambia and Yellow rivers in northwest Florida, they are now also in the Apalachicola and Suwannee. Blues occur in big rivers and in the lower reaches of major tributaries. They prefer clearer, swifter water than other catfish, and are usually found over sand, gravel or rock bottoms.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Young blues eat aquatic insects and small fish while larger blues prefer crayfish, mussels and other fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>64.5 pounds caught by James Mitchell, August 4, 2008 in the Choctawhatchee River.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>One of the strongest freshwater fish; blues are caught on bush hooks or trotlines as well as rod and reel. Most are caught bottom fishing with cut fish, or stink baits rigged on large hooks with heavy lead sinkers.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Bluegill<h4>
          <button type='button' class='button Bluegill' data-toggle="modal" data-target="#Bluegill"></button>
          <div class="modal fade" id="Bluegill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bluegill</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Bluegill have the deep-bodied look of "bream," with a long dorsal fin and slightly forked tail. A dark ear covering and a blotch at the dorsal fin's back bottom edge set them apart.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Bluegill are common throughout Florida but are best known in lakes and ponds.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Bluegill eat mostly insects and their larvae. Bluegill spawn throughout summer, congregating in large "beds". Anglers may find 30-40 shallow nests scooped out in sandy areas.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>2.95 lbs. Big Catch: 11 inches or 1.25 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Live worms or crickets are the best bait, either fished on the bottom or suspended below a float. Crickets, grubs, sand maggots or grass shrimp will also catch bedding bluegill. Use a small hook, #6 or #8, with a split shot sinker about 6 inches up the line. Concentrate on water less than 6 feet deep. For artificial baits, a 1/8 oz. “beetle spin” with a white or chartreuse body on ultralight tackle is excellent.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Bowfin<h4>
          <button type='button' class='button Bowfin' data-toggle="modal" data-target="#Bowfin"></button>
          <div class="modal fade" id="Bowfin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bowfin</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The bowfin is the only living representative of an ancient family of fishes. It has an air-bladder that functions like a lung, and can be seen gulping air. They have a long, stout body; big mouth with small, sharp teeth; long dorsal and rounded tail fin. Males have a dark spot with a bright orange halo on the tail fin. The spot is absent or inconspicuous on females.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Prefers swamps, or backwaters of lowland streams. They live in warm, poorly oxygenated waters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Males clear a nest among heavy vegetation. Eggs are laid at night and males guard them. Larvae use an adhesive organ to anchor themselves.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>19.0 lbs. Big Catch: 30 inches or 10 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Bass anglers are often surprised to find a bowfin has taken their lure. Mudfish strike topwater and deep-running lures but are most often caught on live bait. It is a better fighter, than some highly rated game fish. The flesh is jelly-like, but can be prepared smoked, fried as patties or stewed.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
        

            <div class="row">
        <div class="col-md-4">
          <h4>Brown Bullhead<h4>
          <button type='button' class='button BrownBullhead' data-toggle="modal" data-target="#BrownBullhead"></button>
          <div class="modal fade" id="BrownBullhead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Brown Bullhead</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Chin barbels on browns are pigmented, not whitish as with yellow bullheads. The sides of brown bullheads have a distinct, irregular brownish mottling over a light background. The belly is creamy white. They have square tails.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Browns generally inhabit still or slowly-flowing warm waters in ponds, lakes, reservoirs, large rivers and sluggish streams.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>They are primarily bottom feeders, feeding mostly at night. Highly sensitive barbels enable them to smell a wide variety of food such as insects, plant material, carrion, small fish, snails, crayfish, worms and leeches.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>5.72 lbs. Big Catch: 16 inches or 2 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Fair fighters, they are easy to catch with baits such as worms, minnows, shrimp, chicken innards and stinkbaits. They bite throughout the day, but fishing is best at night.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Chain Pickerel<h4>
          <button type='button' class='button ChainPickerel' data-toggle="modal" data-target="#ChainPickerel"></button>
          <div class="modal fade" id="ChainPickerel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Chain Pickerel</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Chain pickerel are deep olive-green on the back, shading to a creamy yellow on the belly, with the back and anal fin about the same size and located far back on an elongated body. A distinct black chain-like or interwoven marking on the sides give them their name.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Found statewide, normally in vegetated lakes, swamps and backwaters of small to large rivers.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs in late winter to spring among heavy aquatic weed growth or flooded grasses, in water from a few inches deep to several feet deep. Large number of adhesive eggs are scattered over vegetation.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>6.96 lbs. Big Catch: 27 inches or 4 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Chain pickerel are often encountered by bass anglers, especially while plug casting. They are good fighters, especially on light tackle. Productive lures include spinnerbaits, weedless spoons, surface plugs, crankbaits and jigs. Minnows are a reliable year-round bait. The white, flaky meat is good tasting, but quite bony.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Channel Catfish<h4>
          <button type='button' class='button ChannelCatfish' data-toggle="modal" data-target="#ChannelCatfish"></button>
          <div class="modal fade" id="ChannelCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Channel Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Catfish are easy to distinguish by their whisker-like sensory barbels and a forked tail. Channel catfish have a rounded anal fin and scattered black spots along their back and sides. Males become especially dark during spawning season and develop a thickened pad on their head.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Channel catfish are found throughout Florida, and spawn in holes and crevices.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Primarily bottom feeders, channels also feed higher up. Major foods are aquatic insects, crayfish, mollusks, crustaceans and fish - not detritus or decaying material.</p>
                  <hr class="featurette-divider">
                  <h4p>State Record<h4>
                  <p>44.50 lbs. Big Catch: 31 inches or 15.0 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Catfish are a staple for anglers who eat their catch. Use baits with strong odors: chicken liver or gizzards, shrimp, cut mullet and commercial stinkbaits. Catfish are most active just before dusk and at night. Fish on the bottom with a sturdy #2 to #4 hook and a heavy split shot sinker. Be careful of sharp spines when handling these fish. The FWC stocks 200,000-300,000 annually in public waters.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      
      <div class="row">
        <div class="col-md-4">
          <h4>Flathead Catfish<h4>
          <button type='button' class='button FlatheadCatfish' data-toggle="modal" data-target="#FlatheadCatfish"></button>
          <div class="modal fade" id="FlatheadCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Catfish: FlatheadCatfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A flat head, tiny eyes, squarish tail and protruding lower jaw distinguish flathead from other. They are yellow-brown, usually mottled above, with a creamy colored belly.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Flathead are found in the Apalachicola and Escambia rivers, where they recently arrived from Georgia and Alabama. Flatheads prefer long, slow-flowing, moderately-turbid rivers.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs in late spring. One or both parents excavate the nest that is usually made in a natural cavity or near a large submerged object. Females lay a golden-yellow mass of up to 100,000 eggs. The nest is guarded and the eggs are agitated by the male to keep them clean and aerated. They feed on other fish, especially catfish and sunfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>55.05 pounds, and 45.25 inches total length (girth 32.5"). Caught by James E. Auston, Jr., October 9, 2011 in the Yellow River.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Their solitary lifestyle makes them more difficult to catch than other catfish. They bite best at night while in shallow water looking for food. To catch flatheads, anglers typically fish on the bottom using heavy tackle with live or freshly cut fish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Florida Gar<h4>
          <button type='button' class='button FloridaGar' data-toggle="modal" data-target="#FloridaGar"></button>
          <div class="modal fade" id="FloridaGar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Florida Gar</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Prehistoric fish with ganoid (bony) scales that have peg-and-socket joints forming a hard armor. Irregular round, spots occur on top of the head, all over the body and fins.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>They are found in the Ochlockonee River and waters east and south in peninsular Florida where they inhabit streams, canals and lakes with mud or sand bottoms near underwater vegetation.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Use an airbladder to breathe air in low-oxygen water. Spawning occurs in late winter and early spring when both sexes congregate in shallow weedy waters where the females discharge adhesive eggs. Newly hatched young possess an adhesive organ on the end of their snout and stay attached to vegetation until 3/4-inch long. Adults primarily feed on fish, shrimp and crayfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>9.44 lbs. Big Catch: 28 inches or 5 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Gar are sporty fighters and can be taken with minnows, artificial lures or frayed nylon cord that entangles the gar’s teeth. They are also taken with bow-and-arrow, gigs or snag hooks.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Largemouth Bass<h4>
          <button type='button' class='button LargemouthBass' data-toggle="modal" data-target="#LargemouthBass"></button>
          <div class="modal fade" id="LargemouthBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">LargemouthBass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The largemouth bass is the best known and most popular game fish in North America. It is distinguished from other black bass because the upper jaw extends beyond the rear edge of the eye, and the first and second dorsal (back) fins are separated by an obvious deep dip.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>The Florida largemouth bass is the state freshwater fish. Found statewide in lakes and rivers, they are commonly found along vegetation, or underwater structure, but schooling bass are also found in the middle of lakes.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Black bass spawn in spring, when males fan out a bed and then protect the eggs and fry. The baby fish eat zooplankton (microscopic animals that drift in the water column), and when about an inch long begin eating other small fish. Adults eat a wide variety of fish, crustaceans and larger insects.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>17.27 lbs. (Note several larger fish have been documented but not certified.) Big Catch: 24 inches or 8.0 lbs</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Florida is an outstanding destination to catch a trophy. A photo and measurements of your fish can be converted into lifelike fiberglass mounts, so you can release the lunker to fight another day. The best live bait is a golden shiner, fished under a float or free-lined. Typically, the shiner is hooked through the lips or back with a large hook, 2/0 to 5/0. A medium to medium-heavy rod with 14- to 20-pound test line is preferred, particularly when fishing in areas with thick vegetation or cover. Plastic worms are the most dependable artificial bait for largemouth bass. A weedless Texas- or Carolina-rigged worm is especially effective with heavy plant cover. Checking “Florida Fishing Weekly” is a great way to learn about the full array of techniques available to bass anglers as well as specific details about different bass fisheries around the state.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Redbreast Sunfish<h4>
          <button type='button' class='button RedbreastSunfish' data-toggle="modal" data-target="#RedbreastSunfish"></button>
          <div class="modal fade" id="RedbreastSunfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Catfish: Blue Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A very long black ear flap distinguishes this fish from other Florida bream.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Also known as river bream and redbellies, these are the flowing water cousins of bluegill. Redbellies often can be found in backwater areas with less flow, especially where there are sandy bottoms. Common in rivers of north Florida, but absent from south Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>The redbreast's diet is probably the most varied of any of the sunfishes. Principal food organisms are bottom-dwelling insect larvae, snails, clams, shrimp, crayfish, and small fish. Compared to some sunfish, redbreasts grow slowly. Redbreast reach six inches in about two to three years.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>2.08 lbs. Big Catch: 10 inches total length or 0.75 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>The same live baits that work for bluegill will also catch redbreast sunfish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Redear Sunfish<h4>
          <button type='button' class='button RedearSunfish' data-toggle="modal" data-target="#RedearSunfish"></button>
          <div class="modal fade" id="RedearSunfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Redear Sunfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A bright red mark on the back edge of the gill cover is very distinctive.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Redear prefer hard bottoms, congregating in deeper water than bluegill.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>They prefer snails and clams, giving them their common nickname. Shellcracker grow larger than bluegill, with fish over 1 pound common.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>4.86 lbs. Big Catch: 12 inches or 2.25 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Redear sunfish are caught most often on earthworms around the full moons of March and April when their spawning activity peaks.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Shoal Bass<h4>
          <button type='button' class='button ShoalBass' data-toggle="modal" data-target="#ShoalBass"></button>
          <div class="modal fade" id="ShoalBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">ShoalBass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Shoal bass are similar in body shape to largemouth bass, but unlike the largemouth, the shoal bass has scales on the base portion of the second dorsal fin; their first and second dorsal fins are clearly connected, and its upper jaw does not extend past the eye. Shoal bass also lack the dark lateral (down the side) band that largemouth have. Shoal bass have vertical stripes above the midline of the body which resemble tiger stripes.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Although historically found in the Apalachicola River, habitat degradation has all but eliminated shoal bass from the river proper. Very limited numbers of shoal bass can be found just downstream from Jim Woodruff Dam, where a few "shoal" type habitats still remain.  The best destination to catch shoal bass in Florida is the Chipola River.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Shoal bass primarily eat crustaceans (crayfish) but will also eat a variety of fish and insects. Shoal bass are primarily found among river shoals (shallow, fast moving riffles and runs containing limestone) but larger shoal bass can often be found in the deeper pools containing limestone formations above and below the shoals.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>7.8. lbs. Big Catch: 16 inches or 2 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>To catch shoal bass, fish near the "shoal" areas using medium action tackle with 8 to 12 pound test line. Soft plastic crawfish imitation lures and grubs are good choices. Spinnerbaits, jerkbaits, and small crankbaits also work well. Spring and Fall are the best times to fish for shoal bass, but fishing can also be good throughout the summer months. Although not as popular as its largemouth cousin, shoal bass are pound-for-pound one of the top fighters in the black bass family. Checking "Florida Fishing Weekly" is a great way to learn about the full array of techniques available to bass anglers as well as specific details about different bass fisheries around the state.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Spotted Bass<h4>
          <button type='button' class='button SpottedBass' data-toggle="modal" data-target="#SpottedBass"></button>
          <div class="modal fade" id="SpottedBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Spotted Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Spotted bass are similar to largemouth bass, but unlike the largemouth, the spotted bass has scales on the base portion of the second dorsal fin; their first and second dorsal fins are clearly connected, and its upper jaw does not extend past the eye.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>They prefer small to medium streams and rivers with clear, slow-moving water, and gravel or rock bottoms. Seldom found in natural lakes, and they do not enter brackish water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Grow slower than largemouth bass and do not attain as large a size as other black bass.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>3.75 lbs. Big Catch: 16 inches or 2 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Strong fighters when caught on light tackle. Popular lures and baits include jigs, crankbaits, spinners, small plastic worms and crayfish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Spotted Sunfish<h4>
          <button type='button' class='button SpottedSunfish' data-toggle="modal" data-target="#SpottedSunfish"></button>
          <div class="modal fade" id="SpottedSunfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Spotted Sunfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Spotted sunfish are olive-green to brown in color, with black or reddish spots on the base of each scale forming rows of dots on its sides.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>The preferred habitat is slow-moving, heavily vegetated streams and rivers with limestone, sand, or gravel substrates.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>A nest-builder that tends to be more solitary than other members of the sunfish family. Males are very aggressive and antagonistic toward other fish in their nesting area. They generally feed on the bottom, but will rise to the surface to feed. The bulk of their diet consists of a variety of plants and animals that are usually associated with aquatic vegetation, brush, or rubble.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>0.83 lbs. Big Catch: 8 inches or 0.50 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Because of its small size spotted sunfish have limited food value, but it is a feisty panfish. The same methods of fishing discussed for the redbreast sunfish apply for the spotted sunfish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Striped Bass<h4>
          <button type='button' class='button StripedBass' data-toggle="modal" data-target="#StripedBass"></button>
          <div class="modal fade" id="StripedBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Striped Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Striped bass are quick powerful fish with silvery sides and white belly. They have seven or eight black stripes along the sides. Stripes are absent on young fish of less than six inches.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>In Florida, striped bass are found primarily in the St. Johns River and its tributaries, and a few panhandle rivers. Striped bass need long stretches of flowing water to reproduce successfully. These conditions are rare in Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Stripers do not tolerate water temperatures over 75˚F for long. During Florida summers, striped bass become less active and must find cool water to survive. Striped bass populations depend on annual stockings from FWC and federal hatcheries.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>42.25 lbs. Big Catch: 30 inches or 12 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Striper fishing is best from fall through spring. Live shad are very effective. Use heavy tackle with 3- to 4-oz. weights in high flow areas. Baitfish-like lures, such as heavy jigs, sinking or floating lures in white, chrome or chartreuse produce memorably.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Sucker<h4>
          <button type='button' class='button Sucker' data-toggle="modal" data-target="#Sucker"></button>
          <div class="modal fade" id="Sucker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sucker</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Suckers as a group have large thick lips, soft-rayed fins with no spines, and lack scales on the head. The spotted sucker illustrated here has a long body, protrusible (extendable) lips, and 8-12 rows of distinct dark spots. Breeding males may have two dark bands running along the sides, separated by a pinkish or reddish band along the midline of the sides.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Suckers can be found throughout the state, but most species are concentrated in northwest Florida. Spotted suckers are found in northern Florida streams, from the Perdido River to the Suwannee River.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish use their small sucker mouth to “vacuum” small insects or other invertebrates from lake or stream bottoms. Suckers play an important role in the ecology of many Florida waters, often providing food for game fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Fishing methods include portable impoundments and nets. Special regulations apply. Although bony, when properly prepared suckers are edible and are harvested by both commercial fishermen and recreational anglers.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Sunshine Bass<h4>
          <button type='button' class='button SunshineBass' data-toggle="modal" data-target="#SunshineBass"></button>
          <div class="modal fade" id="SunshineBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sunshine Bass/h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Sunshine bass were first produced in Florida by state hatcheries, and all sunshines are still produced and stocked. This is because they are a hybrid of a female white bass and male striped bass that does not occur naturally. Sunshines often have broken stripes on the front half and straight lines on the rear half of the body.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sunshines occur where they are stocked by the FWC--typically in community lakes or waters with an abundance of shad.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Sunshines are voracious feeders and consume any kind of small fish including threadfin and gizzard shad. Young fish also feed on mayflies and crustaceans. Sunshines travel and feed in schools with peak activity in early morning or evening.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>16.31 lbs. Big Catch: 24 inches or 7.0 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Live threadfin or shrimp are by far the most effective bait for sunshine bass. Artificial lures such as crankbaits, bucktail or feathered jigs, spinners and spoons also do well.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Suwannee Bass<h4>
          <button type='button' class='button SuwanneeBass' data-toggle="modal" data-target="#SuwanneeBass"></button>
          <div class="modal fade" id="SuwanneeBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">SuwanneeBass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A heavy-bodied black bass that seldom exceeds 12 inches long. Mature Suwannee bass have bright turquoise coloring on the cheeks, breast, and belly. The upper jaw does not extend beyond the eye, and there is only a shallow notch between the dorsal fins. A distinct dark blotch where the lateral line meets the caudal fin and scales on bases of dorsal, anal and caudal fins further identify Suwannee bass.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Originally restricted to the Suwannee and Ochlockonee rivers, they now are in the Santa Fe, Ichetucknee, St. Marks, Aucilla and Wacissa systems. They prefer rapidly flowing water along rocky shoals.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs from February to June. Crayfish are a major food item for Suwannees.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>3.89 lbs. Big Catch: 16 inches or 2 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Although mostly taken while fishing for other species, popular lures and baits include small crayfish-colored spinnerbaits, crankbaits, plastic worms, jigs and crayfish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Warmouth<h4>
          <button type='button' class='button Warmouth' data-toggle="modal" data-target="#Warmouth"></button>
          <div class="modal fade" id="Warmouth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Warmouth</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>It has a stout, deep body similar to other panfish. A red eye and large mouth are conspicuous field marks. Three or four dark stripes radiating back from the eye across the cheek and gill cover like war paint confirm the identity.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Warmouths inhabit swamps, marshes, shallow lakes, slow-moving streams and canals with soft, muddy bottoms. They stay around aquatic vegetation, stumps and snags and under the banks of streams and ponds. They have more tolerance for muddy water than most species.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Warmouths are solitary nesters that prefer to nest adjacent to a submerged object. Nests are found over a wide range of water depths. They often spawn more than once a year usually between April and August. Crayfish, shrimp, insects and small fishes make up the bulk of their diet. Most feeding is done in the morning, as it appears to sleep at night.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>2.44 lbs. Big Catch: 10 inches or 0.75 lbs..</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>White Bass<h4>
          <button type='button' class='button WhiteBass' data-toggle="modal" data-target="#WhiteBass"></button>
          <div class="modal fade" id="WhiteBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">White Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>White bass look like short stripers. They are silvery-white with five to eight dusky black stripes on the sides. Stripes below the lateral line are faint and may be uneven. Whites are stockier than stripers, with a smaller head, and dorsal fins are set closer together.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>White bass are found mostly in the Apalachicola and Ochlockonee river systems.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Male white bass move upstream in big schools to a dam or other barrier in early spring, Females follow, and spawning occurs in moving water over shoals or hard bottoms. Females may lay as many as half a million adhesive eggs that stick to rocks and gravel. White bass eat minnows and open-water baitfish like gizzard or threadfin shad</p>
                  <hr class="featurette-divider">.
                  <h4>State Record<h4>
                  <p>4.69 lbs. Big Catch: 15 inches or 2.5 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Their aggressive nature and schooling tendency make them easy fish to catch. Use light tackle, with flies, spinners, small plugs or minnows for bait. Look for feeding schools that occur toward evening in shallow areas.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>White Catfish<h4>
          <button type='button' class='button WhiteCatfish' data-toggle="modal" data-target="#WhiteCatfish"></button>
          <div class="modal fade" id="WhiteCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Catfish: White Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Sides are blue-gray to blue-black and may be mottled. The tail is moderately forked, and the anal fin is shorter and rounder than that of channel or blue catfish.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Found statewide in rivers and streams and in slightly brackish coastal waters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Although fish are their major food, whites also eat larval aquatic insects, small crustaceans, fish eggs and aquatic plants. They may feed at night, but are not as nocturnal as other catfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>18.8 lbs. Big Catch: 22 inches or 5 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Not generally considered to be a sport fish in this country. They can be caught on hook and line and are taken commercially.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Yellow Bullhead<h4>
          <button type='button' class='button YellowBullhead' data-toggle="modal" data-target="#YellowBullhead"></button>
          <div class="modal fade" id="YellowBullhead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Yellow Bullhead</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Similar to brown bullhead but with light colored barbels.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>The habitat is variable and includes vegetated areas of clear, shallow lakes, reservoirs, ponds, and slow-flowing streams. They are more tolerant of polluted environments than most other members of the catfish family.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Though scavengers, yellow bullheads prefer to feed on minnows, snails, shrimp and crayfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>5.05 pounds (15.25 inches). Big Catch: 14 inches or 1.5 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Easy to catch on cut bait, worms, crickets, doughballs and a wide variety of natural and prepared baits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Black Acaria<h4>
          <button type='button' class='button BlackAcaria' data-toggle="modal" data-target="#BlackAcaria"></button>
          <div class="modal fade" id="BlackAcaria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Black Acaria</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Small, stout, convex-headed, bream-looking body-shape with two black blotches on side, the larger blotch at mid-body and a smaller one near base of tail; color variable with gray-blue-silver-brown base, sometimes with light blue-green sheen.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Most common in shallow, stagnant, roadside ditches or similarly disturbed habitats that normally contain few other fishes; infrequent in larger canals and lakes; early success of this fish in Florida led to an erroneous conclusion that it would have significant negative effects on native fishes.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Both parents guard the young; nearly all sexually mature by four inches; spawns throughout the year laying an average of about 1,000 eggs.<br>
                  <b>Feeding Habits:</b> Fish remains were found in nearly half the stomachs examined, along with aquatic insects, plant material, snails, and detritus.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>Maximum size about eight inches and weight about four ounces.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Sometimes provides a good kid's fishery when found in small pond without many predators; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Blue Tilapia<h4>
          <button type='button' class='button BlueTilapia' data-toggle="modal" data-target="#BlueTilapia"></button>
          <div class="modal fade" id="BlueTilapia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blue Tilapia</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Young nondescript gray with a black spot at rear of dorsal fin; adults generally blue-gray shading to white on the belly; borders of dorsal and caudal fins with red to pink borders; broken lateral line and the spiny dorsal fin is joined to the soft dorsal fin. In central Florida, anglers can assume every tilapia they observe in fresh water is a blue, and any tilapia over 3 pounds is also likely a blue tilapia.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Widespread and abundant in Florida; found in fertile lakes, ponds, rivers, streams, and canals. It is tolerant of saltwater and found in some near shore marine habitats, such as Tampa Bay.<br>
                  Native to north Africa and the Middle East.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habits:</b> Spawning occurs when the water temperature exceeds 68oF. Males dig large circular nests with their mouths in shallow water over a sandy bottom. The male swims out to a passing female and leads her to the nest where courtship occurs; female lays eggs and immediately takes into mouth after male fertilizes, after which she swims off, possibly to mate with another male. The males continue to guard nests and may spawn again with another female. Eggs hatch in female's mouth, and fry occasionally released to feed, but whenever threatened they return to the female's mouth until they are about three weeks old. This type of parental care is called mouth-brooding.<br>
                  <b>Feeding Habits:</b> Feed primarily on plankton and small organisms living in or on bottom detritus; three most common foods consumed in Lake Alice and Lake George were diatoms, green algae, and detritus; dominant food items in stomachs of fish from Six-Mile Creek near Tampa were detritus, algae, diatoms, and plant material.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>State record is open; qualifying weight is 10 pounds. The big catch program recognizes blue tilapia longer than 18 inches or heavier than 5 pounds.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      <div class="row">
        <div class="col-md-4">
          <h4>Brown Hoplo<h4>
          <button type='button' class='button BrownHoplo' data-toggle="modal" data-target="#BrownHoplo"></button>
          <div class="modal fade" id="BrownHoplo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Brown Hoplo</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Brown hoplo is less than a foot long and belongs to family of fishes known as Callichthyidae; has bony armor consisting of two rows of large hard scales forming plate-like armor along each side; dark brown to black in color with two pairs of long barbells on chin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Occur in a variety of freshwater habitats including muddy bottom and slow moving rivers, streams, side channels, ponds, marshes, and man-made waterways such as ditches and borrow pits; larvae and juveniles inhabit shallow water areas with lots of vegetation; adults prefer foraging in deeper, open water areas; gulps air, and tolerant of both low oxygen and high hydrogen-sulfide levels.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:<b> Males build floating nests in vegetation near shore that consist of bubbles covered with plant material. Eggs are released by the female below the nest. The male fertilizes them and then takes them into his mouth and blows them up into the floating nest. Breeding males develop enlarged, red pectoral spines with hooks at the tips that are used to defend territories against other males. The eggs hatch in about four days.<br>
                  <b>Feeding Habits:<b> Primarily feeds on benthic invertebrates and detritus.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Bullseye Snakehead<h4>
          <button type='button' class='button BullseyeSnakehead' data-toggle="modal" data-target="#BullseyeSnakehead"></button>
          <div class="modal fade" id="BullseyeSnakehead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bullseye Snakehead</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Air-breathing, torpedo-shaped fish with flattened head and toothed jaws; long anal and dorsal fins without spines; typically red eyes; body color darkens with age to deep brown with black blotches sometimes fringed with bright comma-shaped markings, and a red-orange eyespot (ocellus) near the base of the tail. It resembles a bowfin in behavior and appearance, but is distinguished by a long anal fin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>n canals, typically associated with overhanging shoreline vegetation, dense submersed vegetation, and debris; tolerant of stagnant waters due to air-breathing capabilities.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Spawn primarily from March through May with a secondary peak in August; adults occasionally seen herding young in shallows until six inches long; a sample of ripe females contained an average of 4,700 ready to spawn eggs.<br>
                  <b>Feeding Habits:</b> Bottom dwelling, ambush predator that feeds primarily on small fish and crayfish, but occasionally eats a wide variety of prey including turtles, toads, lizards, snakes, and insects.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Good; have been caught on jerk baits and live baits; a popular sportfish in its native range; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Butterfly Peacock<h4>
          <button type='button' class='button ButterflyPeacock' data-toggle="modal" data-target="#ButterflyPeacock"></button>
          <div class="modal fade" id="ButterflyPeacock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Butterfly Peacock</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Body shape similar to that of a largemouth bass; color highly variable, but generally golden with three black vertical bars that tend to fade and are possibly absent in older fish; black spot with a yellow-gold halo on the caudal fin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Successful in warm, slow flowing canals, ponds, lakes, deep rock pits, and lateral canals; frequently found in shady areas around bridges, culverts, canal intersections, bends, dead ends, and near fallen trees; spawns and often feeds in shallow water adjacent shorelines with overhanging vegetation; cannot tolerate water temperatures below 60oF or salinities greater than 18 ppt.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habits:</b> Typically spawn from April through September with a peak in May and June; both adults prepare a flat, hard surface near shore, then lay between 4,000 and 10,000 eggs; young are guarded by both parents, sometimes for several months; males commonly develop a 'nucchal' hump on foreheads when reproductively active.</br>
                  <b>Feeding Habits:</b> Feed almost exclusively on fish; tend to use great speed to capture prey; typically feeds only during daylight hours; this fish has helped reduce the number of undesirable exotic fishes, especially the spotted tilapia.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>State record is 9.08 pounds, but fish up to 12 pounds have been caught; current IGFA all-tackle world record is 12.6 pounds (caught in Venezuela); 13 of the 16 current IGFA world records caught from Florida waters</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>One of the most popular sportfish in southeast Florida canals where it generates millions of hours of fishing pleasure for thousands of anglers who spend more than $8 million a year to catch them; available to both boat and bank anglers using the same basic tackle as largemouth bass anglers; small shiners are the preferred live bait; rarely take plastic worms like largemouth bass do, but top-water lures, minnow imitating crank and jerk baits, and marabou jigs are popular artificial baits; streamers, epoxy minnows and pencil poppers are favorites of fly fishers; daily bag limit of two fish, only one of which can be greater than 17 inches.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>      
      <div class="row">
        <div class="col-md-4">
          <h4>Clown Knifefish<h4>
          <button type='button' class='button ClownKnifefish' data-toggle="modal" data-target="#ClownKnifefish"></button>
          <div class="modal fade" id="ClownKnifefish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Clown Knifefish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Very distinct, flat, silvery fish with long anal fin that gives the knifefish its common name; tiny dorsal fin and 5-10 black spots ringed with white distinguish it from all other fish in Florida; juveniles possess dark vertical bands instead of spots; long anal fin equally allows for forward and backward movements.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Lakes, swamps, and river backwaters; young fish occur in schools among aquatic plants and submerged roots; adults tend to be loaners commonly found near shore in areas with overhanging vegetation or docks; utilizes air to survive in warm, stagnant waters with little oxygen.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Reportedly spawning takes place in spring when females each lay thousands of eggs on the substrate or piece of wood; male cares for the eggs by fanning them with his tail, keeping them aerated and silt-free; later male reportedly protects hatched fry.<br>
                  <b>Feeding Habits:</b> Feeds on a variety of prey including small fish, insects, and grass shrimp.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Limited, but its unique appearance and jumping skills make for an exciting catch.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Common Carp<h4>
          <button type='button' class='button CommonCarp' data-toggle="modal" data-target="#CommonCarp"></button>
          <div class="modal fade" id="CommonCarp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Common Carp</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Large, heavy bodied minnow with arched back small triangular head tapering to blunt snout; first ray of the dorsal and anal fins stout, serrated spine; small, subterminal and protrusible mouth contains no teeth; two pair of barbels on the upper jaw; body color brassy green on top grading to bronze or gold on sides with yellowish white belly; typically covered with large, round scales; not the problem in Florida it is reported to be in other states.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Occurs throughout Apalachicola and Ochlockonee river systems in variety of habitats ranging from steep natural banks to gentle banks, dike fields, sand disposal areas, rocky outcrops, and backwater sloughs with or without submergent vegetation; not nearly as abundant in Florida as most other states, possibly due to our short and mild winters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Typically spawn when water temperatures range between 65 and 75oF; small groups gather in shallow, heavily vegetated areas that warm rapidly; one or more males pursue a female as eggs and milt are released, but no parental care given; eggs sink and adhere to vegetation and debris on the bottom; egg production from 50,000 to 2 million.<br>
                  <b>Feeding Habits:<br> Feed by sucking up bottom silt, and selectively removing insect larvae, crustaceans, snails, and other small food items; adult carp are omnivorous, consuming both plant and animal foods; organic debris may also be an important component of the diet.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>State record is 40.56 pounds caught in the Apalachicola River; IGFA world record was caught in France weighed 75 pounds, 11 ounces.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Not listed as a sport fish in Florida, but a powerful fighter equal to most sportfish; ranks third in popularity behind Atlantic salmon and rainbow trout in Europe; require heavy tackle; best baits include dough balls, canned corn, bread crusts, and worms fished on the bottom; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Grass Carp<h4>
          <button type='button' class='button GrassCarp' data-toggle="modal" data-target="#GrassCarp"></button>
          <div class="modal fade" id="GrassCarp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Grass Carp</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The grass carp is actually one of the largest members of the minnow family. The back of the grass carp is silvery to dark grey, and the sides of the body are lighter with a slightly golden sheen. The belly is silvery white. Fins are generally greenish-grey. The fish has relatively large scales. The body shape is oblong with a round belly and broad head. Teeth have been replaced by specialized structures called pharyngeal teeth (see photo) located in the back of the throat. These are used for tearing and grinding plant matter.<br>
                  By contrast, common carp have a laterally compressed, robust body (deep bodied from the back of the fish to the belly) and are easily distinguished by the presence of barbels (whiskers) located at the corners of the mouth. Suckers have smaller scales than grass carp or common carp and unlike the carp have large lipped, sucker-like mouths located well below the head.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Only occurs where stocked within Florida. In its native range it occurs in lakes, ponds, pools and backwaters of large rivers but prefers large, slow-flowing or standing water bodies with vegetation. They are tolerant of temperatures from freezing to over 100 ÂºF; salinities as high as 10 ppt (brackish), and oxygen levels down to 0.5 ppm.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Broadcast spawners the females lay copious amounts of eggs in free-flowing rivers that are then fertilized by the male. The eggs must remain suspended in the flow until they hatch or they will perish. Ideally, at the time the eggs hatch they will be in a well vegetated area with abundant zooplankton.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Sometimes taken by anglers, especially those fishing for catfish or tilapia, but they must be released immediately and unharmed since those found in Florida were stocked deliberately for aquatic plant control purposes. Bow-anglers are especially adept at taking grass carp and are sometimes given permits to remove excess grass carp.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Jaguar Guapote<h4>
          <button type='button' class='button JaguarGuapote' data-toggle="modal" data-target="#JaguarGuapote"></button>
          <div class="modal fade" id="JaguarGuapote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Jaguar Guapote</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Broken lateral line and black-and-white patterning make this species distinct; toothed and protrusible mouth; numerous purple to black spots or blotches on body and fins with series of black squares along their sides; males typically larger than females; only local species that might be confused with the jaguar guapote is the black crappie, but guapote's teeth and broken lateral line instantly set it apart.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Currently found in southeast Florida box-cut canals; tolerant of poor water quality. In native range occupy a variety of habitats including rivers and lakes with muddy, sandy, and rocky bottoms.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Female lays about 4,000 adhesive eggs on hard, flat surface; both parents protective of eggs and young; most spawning occurs from March through July, with a secondary peak in October-November.<br>
                  <b>Feeding Habits:</b> Medium-sized opportunistic predator; feeds primarily on small fish (including many exotic species) and aquatic insects; also consumes some snails, worms, and even an occasional lizard.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>IGFA all-tackle record caught in Florida weighed 3.5 pounds and was 21.5 inches long. Not included in state records data base.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Limited; caught on beetle-spins and other small artificial baits, as well as, live worms and small fish; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Mayan Cichlid<h4>
          <button type='button' class='button MayanCichlid' data-toggle="modal" data-target="#MayanCichlid"></button>
          <div class="modal fade" id="MayanCichlid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Mayan Cichlid</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Broken lateral line and turquoise ring on the tail are diagnostic; general coloration includes 6-8 bars that can be faint or dark; body color varies greatly in intensity sometimes with bright red on the chin, throat, and breast; has both spiny and soft dorsal fins and a rounded caudal fin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Broken lateral line and turquoise ring on the tail are diagnostic; general coloration includes 6-8 bars that can be faint or dark; body color varies greatly in intensity sometimes with bright red on the chin, throat, and breast; has both spiny and soft dorsal fins and a rounded caudal fin.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Nest building primarily occurs in April, followed by peak spawn in May and June; both parents guard young for up to six weeks; generally spawn once per year.<br>
                  <b>Feeding Habits:</b> Consumes grass shrimp, small fish, snails, and insects along with some incidental detritus and vegetative matter.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Sometimes referred to as the "atomic sunfish;" takes variety of natural baits including live worms, grass shrimp, crickets, as well as almost any small artificial, particularly jigs, fished on light tackle; wooly worms, small streamers, and popping bugs used by flyfishers also taken aggressively.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Midas Cichild<h4>
          <button type='button' class='button MidasCichild' data-toggle="modal" data-target="#MidasCichild"></button>
          <div class="modal fade" id="MidasCichild" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">MidasCichild</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Has multiple color phases (or morphs) ranging from dull gray and black to orange, red, and even white; all young start off gray, looking much like small bluegill or Mayan cichlid, but most change to brightly-colored morphs, starting when they are about three inches long; a mottled coloration indicates a fish in transition; in Florida, more than 95% of adults greater than 10 inches are brightly colored, but this ratio is nearly reversed in their native range; males and females equally likely to be brightly colored; pronounced forehead nuchal hump associated with breeding present in some fish; like most other cichlids this one has broken lateral lines.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Prefers clear-water, box-cut canals with lots of shoreline crevices that they use to hide from predators.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Similar to other substrate spawning cichlids that provide biparental care; parents also produce a mucous body covering fed on by young; females mature by 7 inches and males by 8 inches; March through May appears to be the peak spawning season.<br>
                  <b>Feeding Habits:</b> Feed primarily on snails and other benthic material including aquatic insects, small fishes, and some plant and animal matter attached to or associated with submerged logs, leaves, rocks, etc.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Rarely caught on hook and line, but can sometimes be aggravated into biting; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Oscar<h4>
          <button type='button' class='button Oscar' data-toggle="modal" data-target="#Oscar"></button>
          <div class="modal fade" id="Oscar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Oscar</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Young fish have wavy white and orange markings on black background; body and fins of adults with olive blue-green and mustard colors, highlighting large dark blotches, and a bright red eyespot at base of upper caudal fin; stout more oval body shape than native bream; some have orange or red markings and all have a thick mucus coat on the body.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Most successful in canals running through marsh habitats, although found in lesser numbers in coastal canals, ponds, and lakes in from central Florida southward.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Spawning normally takes place on flat, solid surfaces when water temperatures warm to 82-91oF; female typically lays about 3,000 eggs and both parents occasionally seen guarding hundreds of young in shallow water along shorelines.<br>
                  <b>Feeding Habits:</b> Feed primarily on small fish, insects, and crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>State record is 2.34 pounds caught in Lake Okeechobee (see state records for updates).</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Hard-fighting, panfish-type fishery; especially popular in water conservation areas of south Florida, where it ranks second in popularity only to largemouth bass; strikes a variety of baits including cut fish, cut shrimp, crickets, and worms; best artificial baits include small jigs tipped with cut bait and small spinnerbaits; flyfishing also productive; described as a boom and bust fishery since periodically experience major winterkills but when abundant, angler catch rates are exceptional; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Piranha<h4>
          <button type='button' class='button Piranha' data-toggle="modal" data-target="#Piranha"></button>
          <div class="modal fade" id="Piranha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Piranha</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Deep laterally compressed bodies are generally silvery or golden in color, with a short adipose fin, jaws with a single row of sharp tricuspid sheering teeth and no molars.  Other characids look somewhat similar but can be distinguished primarily by the dentition.  Pacus (Colossoma spp.), and silver dollars (Metynnis spp.) as well as Myleus spp. and Mylossoma spp. have molar-like teeth used for crushing food.  In telling Piranhas from Metynnis and other silver dollars, the angle of the jaw is a pretty good characteristic for sorting them...forward jutting lower jaw that forms a V at the angle is a piranha, even upper and lower jaw profile that forms a U at the angle of the jaw is not a piranha.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Rivers</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Predatory, with their dentition they are able to bite pieces out of larger prey, as opposed to having to swallow their prey whole, as do most North American freshwater fishes.  Often feed in schools and exhibit feeding-frenzy behavior.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Spotted Tilapia<h4>
          <button type='button' class='button SpottedTilapia' data-toggle="modal" data-target="#SpottedTilapia"></button>
          <div class="modal fade" id="SpottedTilapia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">SpottedTilapia</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Light yellow to bronze with 6-9 bars or spots along side; stouter but similar body and mouth shape to native sunfishes; small ones tend to have bars that turn into spots in larger fish (see photo); some have reddish markings on the chin or throat area, especially when spawning; sometimes erroneously referred to as an 'Oscar.'</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Prefers slow-flowing canals, ponds, and lakes; common throughout south Florida; may be increasing in some areas, but not as abundant in Miami-Dade County as in 1980s.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Unlike other tilapia in Florida, this tilapia is a substrate spawner that lays about 2,000 sticky eggs on hard, flat surfaces; both parents guard young aggressively until about one inch long; sexually mature at 7 inches; some observed spawning year around, but most spawning seems to occur in cooler months between November and March.<br>
                  <b>Feeding Habits:</b> Omnivorous, feeding on wide variety of food items, although most stomachs contain detritus, diatoms, algae, and sand indicating this tilapia, like most others, feed low on the food chain.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Commonly caught by cane-pole anglers, but not as aggressive as most native sunfishes; no bag or size limits, but must not be possessed alive.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Sailfin Catfish<h4>
          <button type='button' class='button SailfinCatfish' data-toggle="modal" data-target="#SailfinCatfish"></button>
          <div class="modal fade" id="SailfinCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sailfin Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>All three suckermouth catfishes (family Loricariidae) in Florida have rows of bony plates covering all but their belly area. Sailfin catfish are distinguished by worm-like pattern of dark markings on the head over a dark-golden background; pectoral fins stout with rough surfaces resembling course sandpaper; disc-like, protrusible mouth is under the head, and used like a suction cup to attach and feed on algae; females tend to be smaller, and fish larger than 18 inches probably males; lifeless and hollowed-out 'armored' bodies sometimes seen on canal and lake banks.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sailfin catfish live in nearly any type of slow moving streams, canals, ponds, and lakes; and are normally most abundant along the shore and in shallower waters. They are known to create spawning burrows along shorelines, sometimes undermining canal banks and lake shorelines. Little is known about the vermiculated sailfin's specific habitat preferences; poor success of suckermouth catfish to date indicates it is less well adapted to Florida waters than are the sailfins.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Male and females start maturing when 13 and 11 inches long; female lays about 2,000 eggs in shoreline burrows, holes, or crevices generally between April and September; nests guarded until eggs hatch; adhesive eggs clump together in masses; egg masses are sometimes collected from the wild, aerated, hatched, and grown on tropical fish farms for sale in the pet industry.<br>
                  <b>Feeding Habits:</b> 100% of stomachs that were examined contained detritus, and most also contained algae, sand, small freshwater bivalves, water fleas, and decaying matter; most active around dusk when root around bottom looking for worms and insect larvae; sucker-like mouth used to scrape algae from stones and other surfaces with their spoon shaped teeth.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Common Carp<h4>
          <button type='button' class='button CommonCarp' data-toggle="modal" data-target="#CommonCarp"></button>
          <div class="modal fade" id="CommonCarp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Common Carp</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Large, heavy bodied minnow with arched back small triangular head tapering to blunt snout; first ray of the dorsal and anal fins stout, serrated spine; small, subterminal and protrusible mouth contains no teeth; two pair of barbels on the upper jaw; body color brassy green on top grading to bronze or gold on sides with yellowish white belly; typically covered with large, round scales; not the problem in Florida it is reported to be in other states.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Occurs throughout Apalachicola and Ochlockonee river systems in variety of habitats ranging from steep natural banks to gentle banks, dike fields, sand disposal areas, rocky outcrops, and backwater sloughs with or without submergent vegetation; not nearly as abundant in Florida as most other states, possibly due to our short and mild winters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p><b>Spawning Habitats:</b> Typically spawn when water temperatures range between 65 and 75oF; small groups gather in shallow, heavily vegetated areas that warm rapidly; one or more males pursue a female as eggs and milt are released, but no parental care given; eggs sink and adhere to vegetation and debris on the bottom; egg production from 50,000 to 2 million.<br>
                  <b>Feeding Habits:<br> Feed by sucking up bottom silt, and selectively removing insect larvae, crustaceans, snails, and other small food items; adult carp are omnivorous, consuming both plant and animal foods; organic debris may also be an important component of the diet.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>State record is 40.56 pounds caught in the Apalachicola River; IGFA world record was caught in France weighed 75 pounds, 11 ounces.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Not listed as a sport fish in Florida, but a powerful fighter equal to most sportfish; ranks third in popularity behind Atlantic salmon and rainbow trout in Europe; require heavy tackle; best baits include dough balls, canned corn, bread crusts, and worms fished on the bottom; no bag or size limits.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Grass Carp<h4>
          <button type='button' class='button GrassCarp' data-toggle="modal" data-target="#GrassCarp"></button>
          <div class="modal fade" id="GrassCarp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Grass Carp</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The grass carp is actually one of the largest members of the minnow family. The back of the grass carp is silvery to dark grey, and the sides of the body are lighter with a slightly golden sheen. The belly is silvery white. Fins are generally greenish-grey. The fish has relatively large scales. The body shape is oblong with a round belly and broad head. Teeth have been replaced by specialized structures called pharyngeal teeth (see photo) located in the back of the throat. These are used for tearing and grinding plant matter.<br>
                  By contrast, common carp have a laterally compressed, robust body (deep bodied from the back of the fish to the belly) and are easily distinguished by the presence of barbels (whiskers) located at the corners of the mouth. Suckers have smaller scales than grass carp or common carp and unlike the carp have large lipped, sucker-like mouths located well below the head.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Only occurs where stocked within Florida. In its native range it occurs in lakes, ponds, pools and backwaters of large rivers but prefers large, slow-flowing or standing water bodies with vegetation. They are tolerant of temperatures from freezing to over 100 ÂºF; salinities as high as 10 ppt (brackish), and oxygen levels down to 0.5 ppm.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Broadcast spawners the females lay copious amounts of eggs in free-flowing rivers that are then fertilized by the male. The eggs must remain suspended in the flow until they hatch or they will perish. Ideally, at the time the eggs hatch they will be in a well vegetated area with abundant zooplankton.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Sometimes taken by anglers, especially those fishing for catfish or tilapia, but they must be released immediately and unharmed since those found in Florida were stocked deliberately for aquatic plant control purposes. Bow-anglers are especially adept at taking grass carp and are sometimes given permits to remove excess grass carp.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

      <hr class="featurette-divider">








<!-- Saltwater fish -->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Saltwater Fish<span class="text-muted"></span></h2>
          <br>
          <br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <h4>Blue Marlin<h4>
          <button type='button' class='button BlueMarlin' data-toggle="modal" data-target="#BlueMarlin"></button>
          <div class="modal fade" id="BlueMarlin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blue Marlin</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Upper cobalt blue on top shading to a silvery white below</p>
                  <p>Upper jaw elongated in form of a spear</p>
                  <p>The dorsal, pectoral and anal fins are all pointed</p>
                  <p>No dark spots on the dorsal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>A deep-sea fish that makes major trans-Atlantic migrations.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Unlike swordfish, blue marlin feed mostly during the day. They hunt alone and have been reported to use their long, sharp bill to slice or stun prey.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>1046 lbs, caught near Panama City</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>This may be the ultimate of the big game fish - the one Hemingway so often wrote about. Serious anglers rig heavy and expect to fight a marlin for 4-6 hours.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Longbill Spearfish<h4>
          <button type='button' class='button LongBillSpearfish' data-toggle="modal" data-target="#LongBillSpearfish"></button>
          <div class="modal fade" id="LongBillSpearfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Longbill Spearfish: Tetrapturus pfluegeri</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of body dark blue shading to silvery, white underneath</p>
                  <p>Dorsal fin bluish, others brown-black</p>
                  <p>Two dorsal fins, the first lengthy, its front forming a peak</p>
                  <p>Two anal fins, the anus well in front of the first</p>
                  <p>Upper jaw is prolonged into spear</p>
                  <p>Its cross section is round</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Longbill spearfish are found offshore in deep water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish are uncommon.  Available data indicate that spearfish matures at 2 years of age and rarely lives past 4 to 5 years.  They are pelagic and feed at or near the surface, mainly on fishes and squid. </p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>61 lb 8 oz, caught near Islamorada</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Longbill spearfish are named for Al Pflueger, Sr., founder of Pflueger Taxidermy.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Sailfish<h4>
          <button type='button' class='button Sailfish' data-toggle="modal" data-target="#Sailfish"></button>
          <div class="modal fade" id="Sailfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sailfish: Istiophorus platypterus</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color dark blue on top, brown-blue laterally and silvery white underbelly</p>
                  <p>Upper jaw elongate in the form of a spear</p>
                  <p>First dorsal fin greatly enlarged in the form of a sail with many black spots; squared off front; highest at its mid point</p>
                  <p>Pelvic fins are very narrow and reach almost to the anus</p>
                  <p>Lateral line is curved over the pectoral fin and then straightens to the base of the tail</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sailfish are an offshore species and are associate with waters near the Gulfstream and near the 100 fathom line. </p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Sailfish are a rapidly growing species; they reach 4-5 feet in one year.  They feed aggressively on small fish and squid. Off southeast Florida, sailfish move inshore to shallow water and spawn near the surface in summer. Females swim slowly with their dorsal fins above water, accompanied by one or more males when spawning.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>126 lb, caught near Big Pine Key</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Blue runners, pinfish, mullet, scads, ballyhoo and squid attract cruising sailfish. Sailfish are known for their fast runs, acrobatic jumps and head-shaking attempts to throw a hook. Sailfish tire easily and should be revived after a long fight to ensure their survival. Most anglers release these fish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>The sailfish is Florida's state saltwater fish.  Its name originates from the greatly enlarged first dorsal fin that runs almost the length of its back and is covered with spots.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <h4>White Marlin<h4>
          <button type='button' class='button WhiteMarlin' data-toggle="modal" data-target="#WhiteMarlin"></button>
          <div class="modal fade" id="WhiteMarlin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">White Marlin</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of body dark blue to chocolate brown, shading to silvery white underbelly; noticeable spots on dorsal fin; upper jaw elongated in shape of spear; body covered with embedded scales with a single sharp point; tips of first dorsal, pectoral, and first anal fins rounded; lateral line curved above pectoral fin, then going in straight line to base of tail.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>OFFSHORE, a blue water fish.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Uses its bill to stun fast-moving fishes, then turns to consume them; spawning procedures unknown; ranges throughout the Atlantic and Caribbean; feeds on squid and pelagic fishes</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>161 lb, caught near Miami Beach</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Swordfish<h4>
          <button type='button' class='button Swordfish' data-toggle="modal" data-target="#Swordfish"></button>
          <div class="modal fade" id="Swordfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Swordfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A rather unique billfish, with a flattened bill formed from an elongated upper jaw. It has a single high dorsal fin and one keel on each side in front of the tail fin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Deep sea fish found from the surface down below 2,000 feet. They are heavily overfished internationally.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Swordfish over 200 pounds are generally females and tend to migrate to the surface at night, when most drift fishing occurs.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>612 lb 12 oz, caught near Key Largo</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Fishing at night for swordfish often involves the use of chemical or other lights and heavy 8/0 to 11/0 hooks drifted with balloons to help detect the strike.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Bluefish<h4>
          <button type='button' class='button Bluefish' data-toggle="modal" data-target="#Bluefish"></button>
          <div class="modal fade" id="Bluefish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bluefish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Bluefish are greenish blue on their back, with silvery sides and a large mouth filled with prominent, sharp teeth</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Young usually are inshore during spring and summer and move offshore to join adults during fall and winter. Large numbers of bluefish migrate to Florida from northern stocks during winter. Anglers on the east coast catch larger bluefish than fishermen on the west coast.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Bluefish travel in large schools following baitfish. Members of a school tend to be about the same size because they are cannibalistic. Spawning occurs offshore in spring and summer.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>22 lb 2 oz, caught near Jensen Beach</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Bluefish may be caught from boat or shore. Chumming is a helpful, and a wire leader is a must to prevent fish from biting through the line. Anglers use a variety of plugs, sand eel type jigs, and squid- or mackerel-like lures. Pogies, mackerel or eels are good live baits and cut bait works too. Average size is 3-5 pounds. These fish are a bit oily for some people, so gut them and clean them as soon as you legally can.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Bonefish<h4>
          <button type='button' class='button Bonefish' data-toggle="modal" data-target="#Bonefish"></button>
          <div class="modal fade" id="Bonefish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bonefish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Silvery, with torpedo-shaped body and conical snout.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Bonefish primarily inhabit inshore shallows of the Florida Keys, often in water that is less than 1 foot deep</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Bonefish have deeply forked tails that provide power for chasing prey in lush grass beds. Keen eyesight and a skittish nature make these fish a prized trophy for saltwater anglers. They travel in small schools prowling grass beds and sand flats for shrimp, crabs and other invertebrates. Average size is 3 to 5 pounds but fish weighing more than 10 pounds can be found in Florida.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>16 lb 3 oz, caught near Islamorada</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Live shrimp or jigs tipped with fresh shrimp are the best baits for conventional fishermen. Fly fishermen patiently pole through shallow flats stalking these elusive fish. Bonefish are very seldom eaten and should be carefully released.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Gafftopsail Catfish<h4>
          <button type='button' class='button GafftopsailCatfish' data-toggle="modal" data-target="#GafftopsailCatfish"></button>
          <div class="modal fade" id="GafftopsailCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gafftopsail Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>
                    <ul>
                      <li>Bluish above</li>
                      <li>Silvery below</li>
                      <li>Dorsal and pectoral fins with long, fleshy filaments on spines</li>
                      <li>Barbel at corner of mouth flattened, bandlike, and very elongated, somtimes reaching anal fin</li>
                      <li>Only 2 barbels on chin</li>
                    </ul>
                  </p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Continental waters; enters brackish waters; usually less common than the Hardhead Catfish.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>N/A</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>8 lb, 14 oz</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Hardhead Catfish<h4>
          <button type='button' class='button HardheadCatfish' data-toggle="modal" data-target="#HardheadCatfish"></button>
          <div class="modal fade" id="HardheadCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Hardhead Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>
                    <ul>
                      <li>Brownish to gray-green</li>
                      <li>White to yellowish below</li>
                      <li>Fin spines with no fleshy filaments</li>
                      <li>Barbel at corner of mouth not very flattened and shorter than head</li>
                      <li>Four barbels on chin</li>
                    </ul>
                  </p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Continental waters; enters brackish waters. Commonly caught from bridges, catwalks, and piers, particularly in passes and inland waterways.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>N/A</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>3lb, 5oz</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Cobia<h4>
          <button type='button' class='button Cobia' data-toggle="modal" data-target="#Cobia"></button>
          <div class="modal fade" id="Cobia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Cobia</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Long, slim fish with a broad depressed head. The lower jaw protrudes past the upper jaw. Dark lateral stripe extends through the eye to the tail. First dorsal fin has 7 to 9 free spines. When young, has conspicuous alternating black and white horizontal stripes</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Cobia are found in nearshore and inshore waters with inlets and bays. Cobia are frequently found around buoys, pilings and wrecks in these areas.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>They spawn in spring and early summer.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>130 lb 1 oz, caught near Destin</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Live crabs and small fish are good baits for cobia. Keep bait near the surface or, if cobia are deeper, add just enough weight to get the bait down and still retain its movement. Medium to heavy tackle is required to land these fish which average 30 pounds. Large specimens in the 50-80 pound class are frequently caught and cherished by the lucky angler who outmatches these powerful fish. Cobia are excellent table fare.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Dolphinfish<h4>
          <button type='button' class='button Dolphinfish' data-toggle="modal" data-target="#Dolphinfish"></button>
          <div class="modal fade" id="Dolphinfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Dolphinfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Bright greenish blue above, yellow on sides and has the capability to flash a wide range of colors. The body tapers sharply from head to tail. Irregular blue or golden blotches are scattered over the sides. Female's heads slope more than males</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Dolphin are open-ocean fish. The young live in floating sargassum weed.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Dolphin are fast swimmers and fast growers that live no more than 5 years. Spawning occurs year round in warm oceanic waters.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>81 lb, caught near Lantana</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Adults eat squid, flying fish and other small fish while cruising weed lines in offshore waters. Troll natural baits such as ballyhoo rigged on #7 or #8 steel wire with a 7/0 or 8/0 hook. They can also be caught on artificial lures, feathers, or spoons. When a schooling dolphin is hooked, the rest of the school will often stay nearby. Chumming cut bait will bring them in and create a frenzy of activity. Dolphin is a favorite seafood item for many people.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Atlantic Croaker<h4>
          <button type='button' class='button AtlanticCroaker' data-toggle="modal" data-target="#AtlanticCroaker"></button>
          <div class="modal fade" id="AtlanticCroaker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Atlantic Croaker</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Atlantic Croaker have an inferior mouth with 3 to 5 pairs of small barbels on the chin. They have a silver-gray or bronze body with dark oblique wavy bars or lines and are iridescent, especially on their head. The preopercle is strongly serrated</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These fish are generally found north of Tampa Bay on the west coast and north of Cape Canaveral on the east coast.  Young fish found in estuaries and older fish (2 to 3 years) inhabit deep offshore waters during the winter months and move into bays and estuaries during the spring, summer and fall.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>During spawning, Atlantick croakers become bronze or yellow in color.  Spawning apparently occurs offshore in fall. </p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>4 lbs 15 oz, caught near St. Lucie</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Longevity is 2 to 4 years.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Black Drum<h4>
          <button type='button' class='button BlackDrum' data-toggle="modal" data-target="#BlackDrum"></button>
          <div class="modal fade" id="BlackDrum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Black Drum</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>High arched back. 10 to 14 pairs of chin barbels. Gray or black colored body in adults with the  young have 4 to 6 vertical black bars. Cobblestone-like teeth are capable of crushing oysters. Large scales</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Black drum are an inshore fish common to bays and lagoons.  They are bottom dwellers and often found around oyster beds.  Black drum may also be found offshore.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>The largest member of the drum family, black drum spawn nearshore in the winter and early spring.  They feed on oysters, mussels, crabs, shrimp and occasionally fish.  Black drum may live to 35 or more years.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>96 lbs, caught near Fernandina Beach</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>The vertical bars on juvenile black drum,Sciaenops ocellatus, are somewhat similar to those on sheepshead, Archosargus probatocephalus; and spadefish, Chaetodipterus faber.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Red Drum<h4>
          <button type='button' class='button RedDrum' data-toggle="modal" data-target="#RedDrum"></button>
          <div class="modal fade" id="RedDrum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Red Drum</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Chin without barbels. Copper-bronze body; lighter in clear waters. 1 to many spots at the base of the tail. Mouth horizontal and opens downward. Large scales</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>In winter, redfish are found in seagrass, over muddy or sand bottoms, or near oyster bars or spring fed creeks.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Juvenile redfish are an inshore species until they reach roughly 30 inches (4 years).  They then migrate to the nearshore population.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>52 lb 5 oz, caught near Cocoa (1996)</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p> Red drum are one of Florida’s most popular sport fish and the state’s most widespread estuarine fish. Floating a live shrimp under a popping cork is a good way to fish for redfish. They also chase crabs, mullet, pinfish and killifish (mud minnows). Casting soft-bodied jigs, spoons and even top-water plugs will catch the attention of these powerful estuarine musicians. Redfish make great table fare.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4> Sand Seatrout<h4>
          <button type='button' class='button SandSeatrout' data-toggle="modal" data-target="#SandSeatrout"></button>
          <div class="modal fade" id="SandSeatrout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel"> Sand Seatrout </h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Pale body color, yellow above, silver to white below. One or two prominent canine teeth usually at tip of upper jaw. Inside of the mouth is yellow. No well-defined black spots on back. 10 to 12 soft rays in anal fin. No chin barbels</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sand seatrout are a Gulf species that may occur in the Atlantic waters of extreme south-eastern Florida.  Adults are predominantly found inshore residing in bays and inlets but may move offshore during the winter months.  Young sand seatrout occur inshore in shallow bays.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Sand seatrout mature during their first or second year.  They have a prolonged inshore spawning season that extends through the spring and summer.  They feeds mainly on small fish and shrimp.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Not generally considered to be a sport fish in this country. They can be caught on hook and line and are taken commercially.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Silver Seatrout<h4>
          <button type='button' class='button SilverSeatrout' data-toggle="modal" data-target="#SilverSeatrout"></button>
          <div class="modal fade" id="SilverSeatrout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Silver Seatrout</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Pale straw colored above, silvery sides and white below. No distinctive pigmentation, although faint diagonal lines may be present on upper body. 8 to 9 rays in the anal fin. Large eyes. Short snout. One or two prominent canine teeth usually present at tip of upper jaw. Lower half of tail longer than upper half</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Silver seatrout are most common over sand or sandy mud bottoms offshore along both the Gulf and Atlantic coasts of Florida.  They migrate into bays during cold months.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Silver seatrout spawn offshore in deep water during spring, summer and fall.  They feed on small fish and shrimp.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>These are the smallest seatrout; usually no more than 1/2 pound (less than 10 inches).</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Silver Perch<h4>
          <button type='button' class='button SilverPerch' data-toggle="modal" data-target="#SilverPerch"></button>
          <div class="modal fade" id="SilverPerch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Silver Perch</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color silvery with yellowish fins. No spots. No chin barbels. No prominent canine teeth at tip of upper jaw. Preopercle finely serrated. 5 to 6 chin pores. Mouth terminal</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Silver perch are found inshore in seagrass beds, tidal creeks and rivers, and marshes.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning takes place in shallow, saline portions of bays and other inshore areas, peaking between May and September.  Silver perch mature by second or third year (by 6 inches).  Adults eat crustaceans and small fishes.  They may live to 6 years.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Silver perch are similar in appearance to the sand seatrout, Cynoscion arenarius. Seatrout usually have 1 or 2 prominent canine teeth at tip of upper jaw and do not have chin pores.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Weakfish<h4>
          <button type='button' class='button Weakfish' data-toggle="modal" data-target="#Weakfish"></button>
          <div class="modal fade" id="Weakfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Weakfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>dark olive or blue-green back; sides covered in tones of blue, purple, lavender, gold and copper; irregular diagonal rows of vaguely-defined dark spots appear above the lateral line; 1 to 2 prominent canine teeth usually present at tip of upper jaw; black margin on tip of the tongue; pelvic and anal fins yellow; pectoral fins olive on outside, yellow underneath; mouth yellow inside.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>an Atlantic coast fish, possibly found in the extreme southeastern Gulf; adults move INSHORE and north during warm months inhabiting the surf, inlets, bays, channels and estuaries; adults move OFFSHORE and south during cold months; juveniles inhabit estuaries which serve as nurseries.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>may mature as early as age 1; spawns in NEARSHORE or estuarine areas between April and October; schooling fish; feeds primarily on shrimp and fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>10 lb, caught near Port Canaveral</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Spotted Seatrout<h4>
          <button type='button' class='button SpottedSeatrout' data-toggle="modal" data-target="#SpottedSeatrout"></button>
          <div class="modal fade" id="SpottedSeatrout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Spotted Seatrout</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Dark gray or green above, with sky-blue tinges shading to silvery and white below. Numerous distinct round black spots on back, extending to the dorsal fin and tail. No barbels and no scales on the soft dorsal fin. 1 or 2 prominent canine teeth usually present at tip of upper jaw</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Seatrout found inshore and nearshore in and around seagrass meadows, mangrove-fringed shorelines, deep holes and channels and above oyster bars.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs inshore from March through November.  Spotted setrout move into deeper, still waters during colder months.  They feed on baitfish, mullet, shrimp and crabs.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>17 lb 7 oz, caught near Ft. Pierce</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Free-line live shrimp or small pinfish or pigfish (grunts) near the bottom to entice trout out of grass-bed holes. Attaching a float will allow these baits to drift over the grass beds as you search for trout. Casting with soft-bodied jigs, top-water poppers and spoons can be effective. Trout are very delicate, so returning unwanted or illegal fish promptly to the water is necessary to maintain a healthy population. Spotted seatrout are a good eating fish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Spotted seatrout reach 3 feet and 15 pounds but are common in the 4-pound range.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Gulf Flounder<h4>
          <button type='button' class='button GulfFlounder' data-toggle="modal" data-target="#GulfFlounder"></button>
          <div class="modal fade" id="GulfFlounder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gulf Flounder</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Body is brown in color with the shade depending on the color of the bottom, with numerous spots and blotches. 3 prominent eye-like spots form a triangle with 1 spot on the lateral line, 1 above and 1 below. Numerous white spots are found scattered over the body and fins (albigutta, white spotted). Strong canine-like teeth. The caudal fin is in the shape of a wedge</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Gulf flounder are found inshore on sandy or mud bottoms and are often found in tidal creeks.  They may also be caught occassionally on nearshore rocky reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>nder lie on the bottom often partially covered by sand or mud waiting for a prey to come near and then strike suddenly.  Gulf flounder hatch with a typical fish form but the right eye migrates over to the left side early in life. These fish are though to spawn offshore and they feed on crustaceans and small fishes.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Bottom fishing with a jig and live or cut bait can be effective; remember these are ambush predators. They can also be taken with a gig in shallow waters, especially at night. Excellent table fare.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Gulf flounder are similar in appearance to the southern flounder (P. lethostigma), but the southern flounder have no eye-like spots.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Black Grouper<h4>
          <button type='button' class='button BlackGrouper' data-toggle="modal" data-target="#BlackGrouper"></button>
          <div class="modal fade" id="BlackGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Black Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Olive or gray body coloration with black blotches and brassy spots. gently rounded preopercle. Similar in appearence to gag and yellowfin groupers</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These fish are offshore species. Adults are associated with rocky bottoms, reef, and drop off walls in water over 60 feet deep.  Young black grouper  may occur inshore in shallow water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Black grouper spawn between May and August and they are protogynous hermaphrodites, meaning that young predominantly female who transform into males as they grow larger.  Larger individuals of this species are generally found in greater depths and they feed on fish and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>113 lb 6 oz, caught near the Dry Tortugas</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Grouper fishing from a boat typically involves baits fished near the bottom, with heavy tackle and heavier to bring grouper to the surface. Live fish or dead cut or whole bait are used. Grouper are very tasty meals.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Gag Grouper<h4>
          <button type='button' class='button GagGrouper' data-toggle="modal" data-target="#GagGrouper"></button>
          <div class="modal fade" id="GagGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gag Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Brownish gray in color with dark, worm-like side markings. Fins dark, with anal and caudal having a white margin. Lack of brassy spots as found on black grouper. Slightly concave tail. Noticable spur located on the preopercle</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Adults inhabit rocky bottoms, reefs and drop-off walls in water over 60 feet deep; young occur inshore in waters around seagrass beds, mangrove forests and hard-bottom communities.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Grouper are born as females but can later become male. Gag and red grouper are the most widely distributed of the Florida groupers. Goliath and Nassau grouper are protected from harvest in Florida waters. Grouper spawn between January and May with some of the more tropical species spawning year-round.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>80 lb 6 oz, caught near Destin</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Grouper fishing from a boat typically involves baits fished near the bottom, with heavy tackle and heavier to bring grouper to the surface. Live fish or dead cut or whole bait are used. Grouper are very tasty meals.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Goliath Grouper<h4>
          <button type='button' class='button GoliathGrouper' data-toggle="modal" data-target="#GoliathGrouper"></button>
          <div class="modal fade" id="GoliathGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Goliath Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Head and fins covered with small black spots. Irregular dark and vertical bars present on the sides of body. Pectoral and caudal fins rounded. First dorsal fin shorter than and not separated from second dorsal. Adults huge, up to 800 pounds. Eyes small</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Goliath are found nearshore often around docks, in deep holes, and on ledges.  Young often occur in estuaries, especially around oyster bars.  These fish are more abundant in southern Florida than in northern waters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Goliath spawn over summer months and have a lifespan of 30 to 50 years.  They feed on crustaceans and fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>680 lb, caught near Fernandina Beach (1961)</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Goliath grouper, commonly called jewfish, are totally protected from harvest in Florida waters.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Nassau Grouper<h4>
          <button type='button' class='button NassauGrouper' data-toggle="modal" data-target="#NassauGrouper"></button>
          <div class="modal fade" id="NassauGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Nassau Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color light background with brown or red-brown bars on sides. Stripe in shape of tuning fork on forehead. Third spine of dorsal is longer than second. Pelvic fins are shorter than pectoral. Black dots located around the eyes. Large black saddle on caudal peduncle</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>This grouper's range is limited to south Florida.  Nassau grouper are somewhat site specific.  Smaller individuals are found nearshore while adults are often found offhsore on rocky reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Nassau grouper form large spawning aggregations, making this species highly vulnerable to overharvest.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>9 lb, caught near Marathon Key (2007)</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>All harvest of this species is prohibited.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Red Grouper<h4>
          <button type='button' class='button RedGrouper' data-toggle="modal" data-target="#RedGrouper"></button>
          <div class="modal fade" id="RedGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Red Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color brownish red. Lining of mouth scarlet-orange.Blotches on sides in unorganized pattern. Second spine of dorsal fin longer than others. Pectoral fins longer than pelvic fins; squared off tail. Margin of soft dorsal black with white at midfin. Black dots around the eyes</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Red grouper are a bottom dwelling fish associated with hard bottoms.  Juveniles are found offshore along with adults greater than 6 years old.  Fish from 1 to 6 years occupy nearshore reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>This fish spawns in April and May.  Red grouper prefer water temperatures between 66 and 77 degrees F.  Like many other grouper, red grouper undergo a sex reversal; young individual females becoming males as they age.  Red grouper have a lifespan of at least 25 years.  They feeds on squid, crustaceans, and fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>42 lb 4 oz, caught near St. Augustine Inlet</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Similar Fish: Nassau grouper, E. striatus.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Scamp<h4>
          <button type='button' class='button Scamp' data-toggle="modal" data-target="#Scamp"></button>
          <div class="modal fade" id="Scamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Scamp</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color light gray or brown. Large adults with elongated caudal-fin rays. Reddish brown spots are on sides that tend to be grouped into lines. Some yellow around the corners of the mouth</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Scamp are found around nearshore reefs off the northeastern coast, and on around offshore reefs in the Gulf.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn in the late spring.  Scamp feed on small fish, squid, and crustaceans.  Young undergo a sex transformation from female to male as they becomes older.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>28 lb 6 oz, caught near Mayport</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Scamp are similar in appearance to yellowmouth grouper, M. interstitialis.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Yellowfin Grouper<h4>
          <button type='button' class='button YellowfinGrouper' data-toggle="modal" data-target="#YellowfinGrouper"></button>
          <div class="modal fade" id="YellowfinGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Yellowfin Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>color highly variable greenish olive or bright red with longitudinal rows of darker black blotches over entire fish; outer one third of pectoral fins bright yellow; lower parts of larger fish with small bright red spots</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>OFFSHORE on reefs off southern portions of Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>undergoes sex reversal from female to male in latter part of life; specific name translates to "venomous," alluding to the fact that this fish, perhaps more frequently than other groupers, is associated with ciguatera poisoning; feeds on fish and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>34 lb 6 oz, caught near Key Largo</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Yellowmouth Grouper<h4>
          <button type='button' class='button YellowmouthGrouper' data-toggle="modal" data-target="#YellowmouthGrouper"></button>
          <div class="modal fade" id="YellowmouthGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Yellowmouth Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>color tan or brown with darker spots, or a network of spots, fused into lines; distinct yellow wash behind the jaws; yellow around the eyes; outer edges of fins yellowish.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>OFFSHORE over reefs and rocks; not as common as scamp in the Gulf; range limited to southern Florida</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>undergoes sex reversal, young individuals female, older individuals becoming male; young fish are bi-colored, dark above white below; feeds on small fish and crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: scamp, M. phenax.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Warsaw Grouper<h4>
          <button type='button' class='button WarsawGrouper' data-toggle="modal" data-target="#WarsawGrouper"></button>
          <div class="modal fade" id="WarsawGrouper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Warsaw Grouper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>uniformly dark brown, with no distinct markings; dorsal fin with 10 spines; second spine very long (much longer than third); caudal fin squared-off; rear nostril larger than front nostril; young have yellow caudal fin with dark saddle on caudal peduncle; some whitish spots on body </p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>deep rocky ledges and sea mounts, in 90-300 m (300-1000 ft). Young are sometimes caught in inshore waters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No documented behavior.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>436 lb 12 oz, caught near Destin</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Size: to 1.8 m (6 ft.) and 263 kg (580 lbs)</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>White Grunt<h4>
          <button type='button' class='button WhiteGrunt' data-toggle="modal" data-target="#WhiteGrunt"></button>
          <div class="modal fade" id="WhiteGrunt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">White Grunt</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>body color light bluish-gray, head with horizontal blue stripes, white underbelly; black blotch on preopercle; margin of each scale bronze; large bright orange mouth; scales above lateral line larger than scales below lateral line.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>from SHORE to the outer reef edge or on OFFSHORE hard bottom to 115 feet; most abundant in water less than 80 feet deep; juveniles INSHORE.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>audible grunting is produced by grinding of the pharyngeal teeth, with air bladder acting as amplifyer; spawning occurs on OFFSHORE hard bottoms or reefs from May through June; feeds on crustaceans, mollusks and small fishes.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>15 lb 8 oz, caught near Key West</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Size: most catches 1.5 pounds (15 inches).</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>American Shad<h4>
          <button type='button' class='button AmericanShad' data-toggle="modal" data-target="#AmericanShad"></button>
          <div class="modal fade" id="AmericanShad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">American Shad</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of back green or greenish blue with silvery sides, white underneath (colors darken when fish enters fresh water to spawn). Belly with scutes forming distinct keel with one or more dark spots in a row behind operculum. The lower jaw has a pointed tip that fits into v-shaped notch in upper jaw</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>American shad are typically found offshore except during late winter spawning run into east coast rivers, notably the St. Johns River.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Anadromous species, coming into fresh water to spawn; young remain in fresh water to length of 2 to 4 inches, then move out to sea.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Plankton feeders, but will strike small, bright spoons or flies. Their roe (as many as 30,000 in a single female) is prized and their flesh is full of fork bones.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Almaco Jack<h4>
          <button type='button' class='button AlmacoJack ' data-toggle="modal" data-target="#AlmacoJack "></button>
          <div class="modal fade" id="AlmacoJack " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Almaco Jack</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A deep-bodied amberjack. Sometimes they appear darker in coloration and their front dorsal and anal fins are high and elongated. The body is more flattened than the banded rudderfish or greater amberjack. No bony scutes are found on the caudal peduncle</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These jacks are wide-ranging in offshore waters and are not a common catch. The young almaco jacks are associated with Sargassum.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Almaco jacks spawn offshore during spring, summer, and fall.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Banded Rudderfish<h4>
          <button type='button' class='button BandedRudderfish' data-toggle="modal" data-target="#BandedRudderfish"></button>
          <div class="modal fade" id="BandedRudderfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Banded Rudderfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Fish that are less than 11 inches long have a dark band from the eye to the first dorsal fin and six prominent bars on body. Larger fish are bluish, greenish, or brown. Soft dorsal base about twice the length of the anal fin. The tail-lobe is white tipped</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These fish are found nearshore and offshore over hard bottom, generally in shallower water than other amberjacks.  Young banded rudderfish are associated with weed lines or floating debris and may follow sharks and other large fish.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Adults feed on fish and shrimp.  Spawning occurs offshore most of year.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Blue Runner<h4>
          <button type='button' class='button BlueRunner' data-toggle="modal" data-target="#BlueRunner"></button>
          <div class="modal fade" id="BlueRunner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blue Runner</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color is light olive to bluish green above and silvery gray to golden below. Frequently there is a black spot on operculum. Readily distinguished from crevalle jack by lack of black blotch on pectoral fin. Tail tips blackish</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juvenile blue runners are found offshore while adults are found nearshore in schools, but sometimes range inshore as well.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Blue runners spawn offshore from January through August.  Young form schools associated with floating objects, and have been observed living inside the bell of jellyfish.  Adults feed on fish, shrimp, and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>8 lb 5 oz, caught near Pensacola</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: bluefish, Pomatomus saltarix, other Caranx.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Crevalle Jack<h4>
          <button type='button' class='button CrevalleJack' data-toggle="modal" data-target="#CrevalleJack"></button>
          <div class="modal fade" id="CrevalleJack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Crevalle Jack</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color bluish-green to greenish-gold back and silvery or yellowish belly. Soft dorsal and anal fins almost identical in size. Prominent black spot on operculum (gill cover). Black spot at the base of each pectoral fin. No scales on throat</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Crevalle jacks are common in both inshore waters and the open sea.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish can tolerate a wide range of salinities.  Typically, schools will corner a school of baitfish at the surface and feed with commotion that can be seen at great distances.  Crevalle jack feed mainly on small fish.  Peak spawning occurs offshore from March through September.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>57 lb, caught near Jupiter</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Greater Amberjack<h4>
          <button type='button' class='button GreaterAmberjack' data-toggle="modal" data-target="#GreaterAmberjack"></button>
          <div class="modal fade" id="GreaterAmberjack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Greater Amberjack</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p> A dark stripe (variably present) extends from nose to in front of dorsal fin and "lights up" when fish is in feeding mode. No scutes. The soft dorsal base less than twice the length of the anal fin base</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Greater amberjack are an offshore species associated with rocky reefs, debris, and wrecks.  They are typically in 60 - 240 feet of water and sometimes caught nearshore in south Florida.  Juveniles are associated with floating objects and may occur in water less than 30 feet deep.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Great amberjacks are the largest of the jacks.  These fish are thought to spawn offshore throughout most of the year.  Greater amberjack feed on squid, fish, and crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>142 lb, caught near Islamorada</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>The greater amberjack is similar to other species in the Seriola genus.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Greater amberjack are common to 40 pounds.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Lesser Amberjack<h4>
          <button type='button' class='button LesserAmberjack' data-toggle="modal" data-target="#LesserAmberjack"></button>
          <div class="modal fade" id="LesserAmberjack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Lesser Amberjack</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Olive green or brownish black and silver sides. Dark band (variably present) extends upward from eye. Juveniles have split or wavy bars on sides. Proportionately larger eye and deeper body than greater amberjack</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Lesser amberjack are found nearshore and offshore.  Thes fish are typically found in deeper waters than other Seriola (commonly 180 - 410 feet deep).</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Lesser amberjacks are teh smallest of the amberjacks.  It is believed they spawn offshore.  Adults eat fish and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Florida Pompano<h4>
          <button type='button' class='button FloridaPompano' data-toggle="modal" data-target="#FloridaPompano"></button>
          <div class="modal fade" id="FloridaPompano" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Florida Pompano</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>vGreenish gray on back, shading to silvery sides. Fish in dark waters showing gold on throat, pelvic, and anal fins. Deep flattened body with small mouth. No scutes. 22 to 27 soft dorsal rays; 20 to 23 soft anal rays. Origin of anal fin slightly behind origin of second dorsal</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Florida pompano are common in inshore and nearshore waters, especially along sandy beaches, along oyster banks, and over grassbeds.  They are often in turbid water and may be found in water as deep as 130 feet.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn offshore between March and September.  Florida pampano feed on mollusks and crustaceans, especially sand fleas.  Local movements are influenced by the tide, and seasonal movements are influenced by temperature.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>8 lb 4 oz, caught near Port St. Joe</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish Permit, T. falcatus, palometa, T. goodei. The permit is deeper bodied; dorsal body profile not strongly angled at insertion of second dorsal fin; pompano rarely grow larger than 6 pounds, permit common to 40 pounds</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Palometa<h4>
          <button type='button' class='button Palometa' data-toggle="modal" data-target="#Palometa"></button>
          <div class="modal fade" id="Palometa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Palometa</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Grayish-blue-green on top of head and along the back. Bright silvery sides. Yellow on breast. Elongated dorsal and anal fins. Dusky or black with bluish edges. Deep body, with four narrow bars high on the sides, and traces of a fifth fin nearer the tail. No scutes</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Palometa are most common in clear water along sandy beaches and bays, and occasionally found over reefs.  They are most common in south Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>This fish is thought to spawn offshore in during the spring, summer, and fall.  Palometa have shown rapid growth in mariculture experiments. </p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Palometa readily strikes small artificial lures.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Blue Catfish<h4>
          <button type='button' class='button BlueCatfish' data-toggle="modal" data-target="#BlueCatfish"></button>
          <div class="modal fade" id="BlueCatfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Catfish: Blue Catfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Adults have stout bodies with prominently humped backs in front of the dorsal fin. They resemble channel catfish by having deeply forked tails, but are lack the spots and have a longer, straight-edged anal. The back and upper sides are blue to slate gray, and the belly is white.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Originally found in the Escambia and Yellow rivers in northwest Florida, they are now also in the Apalachicola and Suwannee. Blues occur in big rivers and in the lower reaches of major tributaries. They prefer clearer, swifter water than other catfish, and are usually found over sand, gravel or rock bottoms.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Young blues eat aquatic insects and small fish while larger blues prefer crayfish, mussels and other fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>64.5 pounds caught by James Mitchell, August 4, 2008 in the Choctawhatchee River.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>One of the strongest freshwater fish; blues are caught on bush hooks or trotlines as well as rod and reel. Most are caught bottom fishing with cut fish, or stink baits rigged on large hooks with heavy lead sinkers.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Permit<h4>
          <button type='button' class='button Permit' data-toggle="modal" data-target="#Permit"></button>
          <div class="modal fade" id="Permit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Permit</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color gray, dark or iridescent blue above, shading to silvery on the sides. May show golden tints around the breast in darker waters. Smaller fish have teeth on the tongue. No scutes. Dorsal fin insertion is directly above that of the anal fin. 17 to 21 soft dorsal rays; 16 to 19 soft anal rays</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These coastal fish inhabit tropical grass and sand flats, near reefs and wrecks.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs primarily in early summer and again in fall. Permit have a specialized plate at the back of their mouth that helps them crush hard-shelled animals such as clams and crabs.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>56 lb 2 oz, caught near Ft. Lauderdale</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Anglers cast live crabs to schools of permit hoping to catch one of these line-stripping fish, which also take shrimp, clams and occasionally small fish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Permit are most common in south Florida. This member of the jack family can reach 40 inches and 50 pounds, but most are about 25-pounds.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Cero Mackerel<h4>
          <button type='button' class='button CeroMackerel' data-toggle="modal" data-target="#CeroMackerel"></button>
          <div class="modal fade" id="CeroMackerel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Cero Mackerel</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of back iridescent bluish green. Sides silvery with yellow spots forming lines above and below a bronze stripe from pectoral fin to base of tail. Front of the first dorsal fin is bluish black. Lateral line curves gradually to base of caudal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Cero mackerel are nearshore and offshore fish occurring mainly in south Florida.  The are frequently found over coral reefs and wrecks.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Unlike other mackerels, cero mackerels do not stray far from south Florida waters.  They spawn offhshore in midsummer and feed on small fish and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>17 lb 2 oz, caught near Islamorada</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: Spanish mackerel, S. maculatus; king mackerel, S. cavalla (only the cero has the yellow-brown stripes from the pectoral to caudal fin).</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>King Mackerel<h4>
          <button type='button' class='button KingMackerel' data-toggle="modal" data-target="#KingMackerel"></button>
          <div class="modal fade" id="KingMackerel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">King Mackerel</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color ranges from black iridescent to bluish green with silvery sides. The body is streamlined with a tapered head. No black pigment present on the front of the first dorsal fin. The lateral line starts high and drops sharply below the second dorsal fin.Young fish often have yellowish spots, similar to the Spanish mackerel</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>King mackerel are found both nearshore and offshore, often around piers.  They may occasionally be found in deep water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Kings are schooling fish that migrate from south Florida waters in winter northward in spring. They spawn offshore in mid-summer.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>90 lb, caught near Key West</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Kings feed on small fish and squid and take both natural and artificial baits. Live baits include pogies, herring, Spanish sardine, ballyhoo, and mullet. Lures should be flashy sub-surface lures or large fish-like plugs. Use 20-pound line and tackle, or heavier for larger kings, with a wire or mono leader.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Spanish Mackerel<h4>
          <button type='button' class='button SpanishMackerel' data-toggle="modal" data-target="#SpanishMackerel"></button>
          <div class="modal fade" id="SpanishMackerel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Spanish Mackerel</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of back green, shading to silver on sides with golden yellow irregular spots found above and below the lateral line. Front of dorsal fin is black. Lateral line curves gently to base of tail</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Spanish mackerel are prevalent throughout Florida waters: inshore, offshore and nearshore.  They are frequently found over grass beds and reefs.  These mackerel are absent from north Florida waters in winter.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spanish mackerel are a schooling fish that migrates northward in spring, returning to southerly waters when water temperature drops below 70 degrees F.  They spawns offshore from spring through summer and feeds on small fish and squid.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>12 lb, caught near Ft. Pierce</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Wahoo<h4>
          <button type='button' class='button Wahoo' data-toggle="modal" data-target="#Wahoo"></button>
          <div class="modal fade" id="Wahoo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Wahoo</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A member of the mackerel family, long and streamlined with about 30 dark wavy bars for camouflage.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Found offshore; generally not in schools.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Known for their tremendous runs and shifts of direction.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>139 lb, caught near Marathon</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Wahoo are caught by trolling bait and artificial lures on flatlines.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Fantail Mullet<h4>
          <button type='button' class='button FantailMullet' data-toggle="modal" data-target="#FantailMullet"></button>
          <div class="modal fade" id="FantailMullet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Fantail Mullet</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color olive green with blue tints on back, shading to silvery sides, white below. Anal and pelvic fins yellowish. Dark blotch at base of pectoral fin. Inverted V-shaped mouth. Insertion of second dorsal over that of anal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>These are an inshore species, occuring along beaches in the fall.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Fantail mullet spawn in nearshore and possibly inshore waters during spring and summer.  Juveniles occur inshore.  This fish feeds on algae, small crustaceans and detritus.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>small mullet, less than 1 pound.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Striped Mullet<h4>
          <button type='button' class='button StripedMullet' data-toggle="modal" data-target="#StripedMullet"></button>
          <div class="modal fade" id="StripedMullet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Striped Mullet</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color bluish-gray or green above, shading to silver on sides with distinct horizontal black barrings, white below. Fins lightly scaled at base, unscaled above. Blunt nose and small mouth. Second dorsal fin originates behind that of the dorsal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Striped mullet are commonly found inshore. </p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Adult striped mullet migrate offshore in large schools to spawn.  Juveniles migrate inshore at about 1 inch in size, moving far up tidal creeks.  These fish are frequent leapers and feed on algae, detritus and other tiny marine forms.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Striped mullet are common to 3 pounds but in aquariums are known to reach 12 pounds or more. Striped mullet are similar in appearance to the white mullet, M. curema; fantail mullet, M. gyrans.  Both white and fantail mullet have black blotch at base of pectoral fin, which is lacking in the striped mullet.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Jolthead Porgy<h4>
          <button type='button' class='button JoltheadPorgy' data-toggle="modal" data-target="#JoltheadPorgy"></button>
          <div class="modal fade" id="JoltheadPorgy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Jolthead Porgy</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Generally silvery to brassy, with a bluish cast. Front of the head is brown, with a blue line along lower rim of eye; a whitish stripe below eye, and another between the eye and mouth. Corner of mouth is orange</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Jolthead porgy are found in coastal waters to 45 m (150 ft.).  They range from Rhode Island to Bermuda, and from the northern Gulf of Mexico to Brazil.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No recorded behavior</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Regarded as a good fish, but may cause ciguatera.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Knobbed Porgy<h4>
          <button type='button' class='button KnobbedPorgy' data-toggle="modal" data-target="#KnobbedPorgy"></button>
          <div class="modal fade" id="KnobbedPorgy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Knobbed Porgy</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Body deep; front profile very steep. Nape projects strongly in large adults. Body is generally silvery, with a rosy cast. Cheek and snout are dark purplish gray, with many bronze spots. Large blue spot at axil of pectoral fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>hardbottom, reefs, ledges. N.C. to s. Fla. and entire Gulf of Mexico.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No recorded behavior</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligigble for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Pinfish<h4>
          <button type='button' class='button Pinfish' data-toggle="modal" data-target="#Pinfish"></button>
          <div class="modal fade" id="Pinfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Pinfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Small mouth with incisor-like teeth. Distinctive black spot behind the gill cover. Body bluish-silver with blue and orange-yellow horizontal stripes. Yellow fins</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Pinfish are commonly found near seagrass beds, bridges, piers, marker pilings, and around natural and artificial reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn offshore. </p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Pinfish are popular live bait.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Notorious for stealing bait</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Red Porgy<h4>
          <button type='button' class='button RedPorgy' data-toggle="modal" data-target="#RedPorgy"></button>
          <div class="modal fade" id="RedPorgy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Red Porgy</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The only American porgy with a near nostril that is round (not slit-like). Head and body silvery red, with many tiny blue spots</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Adult red porgy are found on the deeper part of the continental shelf, but young may occur in water as shallow as 18 m (60ft.).</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No recorded behavior</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Sheepshead<h4>
          <button type='button' class='button Sheepshead' data-toggle="modal" data-target="#Sheepshead"></button>
          <div class="modal fade" id="Sheepshead" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sheepshead</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Basic silvery color with 5 or 6 distinct vertical black bars on the sides; bars are not always the same on both sides. Prominent teeth, including incisors, molars and rounded grinders. No barbels on the lower jaw. Strong and sharp spines on the dorsal and anal fins</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sheepshead are an inshore species and are commonly found around oyster bars, seawalls and in tidal creeks.  They move nearshore during late winter and early spring for spawning. </p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Sheepshead are fractional spawners (they only lay a portion of their eggs at a time) in inshore waters, typically in March and April. They are omnivorous feeding mostly on crustaceans and small fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>15 lb 2 oz, caught near Homosassa</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Use live shrimp, sand fleas or fiddler crabs on a small hook fished on the bottom. When cleaning, beware of the sharp gill covers.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Sheepshead are an important commercial species.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Bank Sea Bass<h4>
          <button type='button' class='button BankSeaBass' data-toggle="modal" data-target="#BankSeaBass"></button>
          <div class="modal fade" id="BankSeaBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bank Sea Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Pale olive or brassy brown in color with indistinct black blotches that form vertical barrings (the blotch above the pectoral fin is darker). Wavy blue lines on the head and the lips are purplish-blue. The caudal fin is tri-lobed on adults. Edge of the nape is unscaled</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p> Bank sea bass are found offshore in deep water with rocks and reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish feed on the bottom consuming squid, crustaceans, and small fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Bank sea bass start life as females and then change to male after three to four spawning seasons.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Black Sea Bass<h4>
          <button type='button' class='button BlackSeaBass' data-toggle="modal" data-target="#BlackSeaBass"></button>
          <div class="modal fade" id="BlackSeaBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Black Sea Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Basic color is dark brown or black. Dorsal fin has rows and stripes of white on black. Large males have iridescent blue and ebony markings and a fatty hump in front of the dorsal fin. Females may have indistinct vertical barings. The topmost ray of the caudal fin is much elongated in adults and may be tri-lobed. A sharp spine is located near the posterior margin of gill cover</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Black sea bass are structure-loving fish and are associated with reefs and rubble found offshroe.  Smaller specimens are often found inshore in finger channels.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn January through March and are protogynous hermaphrodites, meaning older females becoming breeding males.  Black sea bass are omnivorous bottom feeders, and their diet includes small fish, crustaceans, and shellfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Rock Sea Bass<h4>
          <button type='button' class='button RockSeaBass' data-toggle="modal" data-target="#RockSeaBass"></button>
          <div class="modal fade" id="RockSeaBass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Rock Sea Bass</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color olive-brown or bronze, with dark blotches forming vertical bars. Dark black blotch on middle of dorsal fin base. Tip of lower jaw purplish. Bright blue and orange stripes and markings on head and fins. Fully scaled nape. Tail tri-lobed in adults</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Rock sea bass are found offshore often on sandy or muddy bottoms.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn January through March.  Young adults are predominently female and transform into males as they grow older.  The maximum size for rock sea bass is about 10 inches.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Atlantic Sharpnose Shark<h4>
          <button type='button' class='button AtlanticSharpnoseShark' data-toggle="modal" data-target="#AtlanticSharpnoseShark"></button>
          <div class="modal fade" id="AtlanticSharpnoseShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Atlantic Sharpnose Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The snout is flattened and long. White trailing edge of pectoral. Dorsal and caudal fins are black-edged, especially when young. May have small whitish spots on sides. Furrows in lips at the corners of the mouth. Outer margin of teeth are notched. Second dorsal fin originates over middle of anal fin. Slender bodies are brown to olive-gray in color with a white underside</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Inshore species, even found in surf.  These sharks are also common in bays and estuaries.  Adults occur offshore.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>mature adults between 2 and 2.75 feet long; 4-7 newborns range from 9 to 14 inches in length; adults feed on small fish and crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Bonnethead Shark<h4>
          <button type='button' class='button BonnetheadShark' data-toggle="modal" data-target="#BonnetheadShark"></button>
          <div class="modal fade" id="BonnetheadShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bonnethead Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Broadly widened head in the shape of a shovel. Only slight indentation of anal fin. Front of head not notched at midline. Gray or grayish-brown in color</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Bonnethead sharks are an inshore species found in bays and estuaries.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These sharks mature at about 3 feet in length and bear 6 to 12 young at one time.  They feed chiefly on crabs and other crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Blacktip Shark<h4>
          <button type='button' class='button BlacktipShark' data-toggle="modal" data-target="#BlacktipShark"></button>
          <div class="modal fade" id="BlacktipShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blacktip Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Dark, bluish-gray (young paler) back, with a distinctive whitish stripe on the flank. The inside tip of the pectoral fin is conspicuously black, as are the dorsal and anal fin tips, and lower lobe of caudal in young blacktips. First dorsal fin begins above the axil of pectoral fin. No middorsal ridge. Upper and lower teeth are serrated and nearly symmetrical </p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Blacktips often come inshore in large schools, particularly in association with Spanish mackerel. Frequently the most common shark in clear-water cuts and along beaches in Florida and Bahamas.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No recorded behavior</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>152 lbs. (blacktip).</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Blacktip sharks are sometimes caught by sportfishers off the beach or offshore They provide a good fight, often leaping out of the water.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Sandbar Shark<h4>
          <button type='button' class='button SandbarShark' data-toggle="modal" data-target="#SandbarShark"></button>
          <div class="modal fade" id="SandbarShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Sandbar Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Snout broadly rounded and short. First dorsal fin triangular and very high. Poorly developed dermal ridge between dorsal fins.Brown or gray in color with white underside. Upper and lower teeth finely serrated</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sandbar sharks are a nearshore fish typically found at depths ranging from 60 to 200 feet.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These sharks are both predators and scavengers.  Feeding occurs chiefly near the bottom on fish and shellfish.  Sandbar sharks migrate long distances and they mature at about 6 feet in length.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Scalloped Hammerhead Shark<h4>
          <button type='button' class='button ScallopedHammerheadShark' data-toggle="modal" data-target="#ScallopedHammerheadShark"></button>
          <div class="modal fade" id="ScallopedHammerheadShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Scalloped Hammerhead Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Fifth gill slit shorter than 4 preceding ones and located posterior to pectoral fin base. Flattened head extending to hammer-like lobes on each side. Distinct indentation of the front margin of the head at its midpoint. Second dorsal fin longer than tail. Gray-brown to olive in color with white underbelly. Teeth smooth-edged. Pectoral fins tipped with black on the undersurface. Tips of first and second dorsal lobes and caudal also may have dusky tips. Pelvic fin with nearly straight hind margin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>The scalloped hammerheard shark is found both offshore and inshore.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Scalloped hammerhead sharks are predatory fish and they feeding mainly on fish, squid, and stingrays.  Males mature at about 6 feet in length.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Shortfin Mako Shark<h4>
          <button type='button' class='button ShortfinMakoShark' data-toggle="modal" data-target="#ShortfinMakoShark"></button>
          <div class="modal fade" id="ShortfinMakoShark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Shortfin Mako Shark</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Lunate tail with similarly sized lobes. Lateral keel at the base of the tail. Deep blue back and white underside. Underside of sharply pointed snout white. Origin of first dorsal entirely behind base of pectoral fins. Second dorsal fin slightly in front of anal fin. Slender, recurved teeth with smooth edge</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Shortfin mako sharks are an offshore fish, often seen near the surface of the water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish are active and strong swimming.  Shortfin mako are known for leaping out of the water when hooked.  They feed on mackerel, tuna, sardines, and some much larger fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>911 lb 12 oz, caught near Palm Beach</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Blackfin Snapper<h4>
          <button type='button' class='button BlackfinSnapper' data-toggle="modal" data-target="#BlackfinSnapper"></button>
          <div class="modal fade" id="BlackfinSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Blackfin Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color is generally red, with yellowish caudal, anal, and pelvic fins. Distinctive and prominent dark comma-shaped blotch at the base of the pectoral fins, which gives the fish its common name. The anal fin is rounded. No black spot found on the side underneath dorsal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Adult blackfin snapper are found offshore near the continental shelf.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Blackfin snapper aer sometimes marketed as red snapper.  They feed on smaller fishes.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Size: common to 20 inches, larger adults seeking deeper waters.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Cubera Snapper<h4>
          <button type='button' class='button CuberaSnapper' data-toggle="modal" data-target="#CuberaSnapper"></button>
          <div class="modal fade" id="CuberaSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Cubera Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color dark brown or gray, may have a reddish tinge. Broad-based triangular tooth patch on roof of mouth without a posterior extension. Despite its specific name, which translates to "blue-fin," the fins have only a slight tinge of blue; canine teeth in both jaws very strong. One pair of canines are enlarged and visible even when the mouth is closed</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juveniles are found inshore in grass beds.  Adults are common offshore and nearshore over wrecks, reefs, and ledges.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Cubera snappers are the largest of the snappers, ranging to 125 pounds.  .  They are not common anywhere in its range.  These snapper feed on fishes and larger crustaceans.  Spawning occurs in the late summer in the Keys.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>116 lb, caught near Clearwater</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: gray snapper.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Dog Snapper<h4>
          <button type='button' class='button DogSnapper' data-toggle="modal" data-target="#DogSnapper"></button>
          <div class="modal fade" id="DogSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Dog Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color brown with a bronze tinge, lighter on sides. Canine teeth are very sharp and one pair is notably enlarged, visible even when the mouth is closed. In adults, a pale triangle and a light blue interrupted line are below the eye. No dark spot is found on the body underneath dorsal fin.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Large adults are found offshore over coral and rocky reefs.  Juveniles are associated with estuaries.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Dog snapper spawn from spring through fall.  Known as night feeders, these snapper eat fishes, mollusks, and crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: schoolmaster, L. apodus (no white triangle under eye and fins are more yellow); other snappers.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Gray Snapper<h4>
          <button type='button' class='button GraySnapper' data-toggle="modal" data-target="#GraySnapper"></button>
          <div class="modal fade" id="GraySnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gray Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Dark brown or gray with reddish or orange spots in rows along the sides. A dark horizontal band from snout through eye is present in young only. Two conspicuous canine teeth are present at front of upper jaw. dorsal fins have dark or reddish borders. No dark spot is present on side underneath dorsal fin</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juvenile gray snapper are found inshore in tidal creeks, mangroves, and grass beds.  Adults are generally found nearshore or offshore on coral or rocky reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Spawning occurs June through August.  Gray snapper feed on crustaceans and small fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>17 lb, caught near Port Canaveral</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Gray snapper caught offshore are common 8 to 10 pounds. Gray snapper are similar in appearance to the cubera snapper, L. cyanopterus.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Lane Snapper<h4>
          <button type='button' class='button LaneSnapper' data-toggle="modal" data-target="#LaneSnapper"></button>
          <div class="modal fade" id="LaneSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Lane Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color silvery-pink to reddish with short, irregular pink and yellow lines on its sides. Diffuse black spot, about as large as the eye. The dorsal fin centered above the lateral line. The outer margin of caudal fin blackish</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juvenile lane snapper are found inshore over grass beds or shallow reefs.  Adults are typically found offshore and are most common in south Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Lane snapper spawn from March through September.  They are sexually mature at 6 inches.  Lane snapper feed on the bottom, eating crustaceans, mollusks, and fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>6 lb 6 oz, caught near Pensacola</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Lane snapper are similar in appearence to  mutton snapper, L. analis. However, the anal fin is rounded in lane snapper and pointed in mutton.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Mahogany Snapper<h4>
          <button type='button' class='button MahoganySnapper' data-toggle="modal" data-target="#MahoganySnapper"></button>
          <div class="modal fade" id="MahoganySnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Mahogany Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color grayish-olive with a reddish tinge. Conspicuous dark spot, about the size of the eye, is located below the soft dorsal fin, 1/4 to 1/2 of it below the lateral line. The large eye and caudal fin are bright red. Lower margin of the preopercle has prominent spur with strong and sharp serrations</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Mahogany snapper are found nearshore or offshore in clear, highly saline water, usually over reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Mahogany snappers are night feeders and eat mainly smaller fishes.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Mahogany snapper are similar in appearance to the  lane snapper, L. synagris.  Lane snappers also have a dark spot below soft dorsal fin, but the blotch is placed higher in relation to the lateral line than it is on the Mahogany snapper.  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Mutton Snapper<h4>
          <button type='button' class='button MuttonSnapper' data-toggle="modal" data-target="#MuttonSnapper"></button>
          <div class="modal fade" id="MuttonSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Mutton Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color olive green on back and upper sides. All fins below the lateral line having reddish tinge. Bright blue line below eye, following contour of operculum. Anal fin pointed. Small black spot below dorsal fin. V-shaped tooth patch on roof of the mouth</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Mutton snapper are an inshore species associated with grassbeds, mangroves, and canals.  Larger adults are  occasionally found on offshore reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These snapper spawn in July and August.  Mutton snapper feed on fish, crustaceans, and snails.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>30 lb 4 oz, caught near the Dry Tortugas</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Mutton snapper are similar in appearance to lane snapper, L. synagris.  Mutton snapper's anal fin is pointed whereas it is rounded in the lane snapper.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Queen Snapper<h4>
          <button type='button' class='button QueenSnapper' data-toggle="modal" data-target="#QueenSnapper"></button>
          <div class="modal fade" id="QueenSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Queen Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color of back and upper sides red. Silvery body long and slender. Dorsal fin distinctly notched. Large eyes. Caudal fin deeply forked. No dark lateral spot</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Queen snapper are common offshore over rocky reefs of the continental shelf to 450 feet deep.  Young queen snapper suspend at mid-depths.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>There is little is known about the queen snapper, but it is reported that adults live at depths greater than 400 feet.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Queen snapper are a small species, usually less than 20 inches.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Red Snapper<h4>
          <button type='button' class='button RedSnapper' data-toggle="modal" data-target="#RedSnapper"></button>
          <div class="modal fade" id="RedSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Red Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color pinkish red over entire body, whitish below. Long triangular snout. Anal fin is sharply pointed. No dark lateral spot. Red eye</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juvenile red snapper occur over sandy or mud bottoms.  Sexual maturity is attained at age 2.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Red snapper feed on crustaceans and fish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>46 lb 8 oz, caught near Destin</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Snappers will take soft-bodied jigs, bucktails and spoons.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Adult red snapper may live more than 20 years and attain 35 pounds or more.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Schoolmaster<h4>
          <button type='button' class='button Schoolmaster' data-toggle="modal" data-target="#Schoolmaster"></button>
          <div class="modal fade" id="Schoolmaster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Schoolmaster</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Color olive gray on upper sides with yellow tinge, sometimes with reddish tinge around head. Long triangular snout. Eight pale vertical bars on the side of the body. Yellow fins. Blue stripe below eye, becoming interrupted in adults. No dark lateral spot</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Juvenile schoolmaster are found in grassy flats.  Adults frequent nearshore, especially around elkhorn coral reefs.  Large adults are sometimes found on the continental shelf.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>These fish spawn in July and August.  Schoolmaster may attain sizes up to 8 pounds and 24 inches.  They feed on crustaceans, small fishes, and gastropods.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Schoolmaster are similar in appearance to the dog snapper, L. jocu.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Silk Snapper<h4>
          <button type='button' class='button SilkSnapper' data-toggle="modal" data-target="#SilkSnapper"></button>
          <div class="modal fade" id="SilkSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Silk Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Back and upper sides pinkish red, shading to silvery sides with undulating yellow lines. Pectorals are pale yellow. Back edge of caudal fin is blackish. Anal fin pointed. No dark lateral spot</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Silk snapper are common offshore over rocky ledges in very deep water. They are most common in south Florida.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Little is known about the behavior of the silk snapper.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Vermilion Snapper<h4>
          <button type='button' class='button VermilionSnapper' data-toggle="modal" data-target="#VermilionSnapper"></button>
          <div class="modal fade" id="VermilionSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Vermilion Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>color of entire body reddish, with a series of short, irregular lines on its sides, diagonal blue lines formed by spots on the scales above the lateral line; sometimes with yellow streaks below the lateral line; large canine teeth absent; orientation of mouth and eye give it the appearance of looking upward; no dark lateral spot.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>suspends at mid-depths over rocky reefs OFFSHORE.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>spawns April to September, females maturing at 3 to 4 years of age; grows slowly; attains weight of 6 pounds and length of 24 inches; feeds on small, swimming crustaceans and mollusks</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Similar Fish: red snapper, L. campechanus (anal fin of red snapper has midpoint like a triangle).</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Yellowtail Snapper<h4>
          <button type='button' class='button YellowtailSnapper' data-toggle="modal" data-target="#YellowtailSnapper"></button>
          <div class="modal fade" id="YellowtailSnapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Yellowtail Snapper</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>back and upper sides olive to bluish with yellow spots; lower sides and belly with alternating narrow, longitudinal pink and yellow stripes; prominent midlateral yellow stripe begins at mouth and runs to tail, broadening as it passes the dorsal fins; caudal fin yellow and deeply forked; no dark lateral spot.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>juveniles INSHORE on grassbeds and back reefs; adults NEARSHORE or OFFSHORE over sandy areas near reefs.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>found mainly in tropical waters; spawns in midsummer; rarely exceeds 30 inches and 5 pounds in size; feeds on small fish and invertebrates.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>8 lb 9 oz, caught near Ft. Myers</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Snook<h4>
          <button type='button' class='button Snook' data-toggle="modal" data-target="#Snook"></button>
          <div class="modal fade" id="Snook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Snook</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Distinct lateral line. High, divided dorsal fin. Sloping forehead. Large mouth, protruding lower jaw. Grows much larger than other snooks. Pelvic fin yellow</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Snook are found from central Florida south, usually inshore in coastal and brackish waters.  They are also common along mangrove shorelines, seawalls, and bridges.  Snook are also on reefs and around pilings nearshore.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>They congregate in large schools during summer in deep passes and inlets to spawn. Snook begin life as males, but between 18 and 22 inches long some become females.  Spawning occurs primarily in summer.  Snook school along shore and in passes during spawning season.  They feed on fish and large crustaceans.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>44 lb 3 oz, caught near Ft. Myers</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>They orient themselves to face moving water and wait for prey to be carried down the current. Snook jump clear of the water, and burst into long runs. Use live pinfish, small mullet, shrimp, or sardines free-lined or fished off the bottom with a fish finder rig. They take a large variety of lures based on water conditions. Beware of the snooks razor-sharp gill covers! Snook make excellent table fare.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>Snook cannot tolerate water temperatures below 60F.  Also, snook can tolerate wholly fresh or saltwater.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Fat Snook<h4>
          <button type='button' class='button FatSnook' data-toggle="modal" data-target="#FatSnook"></button>
          <div class="modal fade" id="FatSnook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Fat Snook</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Deeper body than other snooks. Color yellow-brown to green-brown above, silvery on sides. Black lateral line extends onto tail. Mouth reaches to or beyond center of eye. Usually no dusky outer edge on pelvic fin, as in other snooks. Smallest scales of all snooks</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>This is an inshore species found in mangrove habitats.  Fat snook are also found commonly in fresh waters.  They occur more in interior waters (as opposed to estuarine waters) than other snook.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>usually found in fresh water; mangrove shorelines serve as nursery grounds for young.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Swordspine Snook<h4>
          <button type='button' class='button SwordspineSnook' data-toggle="modal" data-target="#SwordspineSnook"></button>
          <div class="modal fade" id="SwordspineSnook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Swordspine Snook</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>smallest of the snooks; profile slightly concave; prominent lateral line outlined in black (not solid), extends through caudal fin; color yellow-green to brown-green above, silvery below; giant second anal spine, hence the name; largest scales of all snook</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>occurs in INSHORE estuarine habitats from south Florida to as far north on east coast as St. Lucie River.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>full-grown adults are less than 12 inches long; mangrove shoreline habitat serves as nursery area for young; rare on Florida's west coast; prefers only slightly brackish or fresh water.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Tarpon Snook<h4>
          <button type='button' class='button TarponSnook' data-toggle="modal" data-target="#TarponSnook"></button>
          <div class="modal fade" id="TarponSnook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Tarpon Snook</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>only snook with 7 anal fin rays (others have 6); lower jaw curves upward; compressed body; prominent black lateral line extends through tail; tips of pelvic fin reach beyond anus.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>INSHORE in south Florida; frequently in fresh water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>maximum size of 16 to 18 inches; feeds on small fish and larger crustaceans; young are nurtured along mangrove shorelines; rare on Florida's west coast.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Atlantic Spadefish<h4>
          <button type='button' class='button AtlanticSpadefish' data-toggle="modal" data-target="#AtlanticSpadefish"></button>
          <div class="modal fade" id="AtlanticSpadefish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">AtlanticSpadefish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>A silvery fish with 4 to 6 black vertical bands on each side which sometimes become obscure in larger fish. Deep, flattened body. Separated first and second dorsal fins. Concave caudal fin. Anterior rays of second dorsal fin and anal fin are elongated</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Inshore and nearshore speices, these fish are found around natural and artificial reefs; especially near navigation markers in 15 to 20 feet of water.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Atlantic spadefish spawn in the spring and summer and travels in large schools.  Small juveniles are almost totally black and are known to drift on their sides and mimic floating debris.  These fish feed on crustaceans, small encrusting invertebrates, and may nibble on tentacles of jellyfish.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>This species is not currently eligible for a state record.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Though there are no close resemblances, these fish are frequently and mistakenly called angelfish.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Gulf Sturgeon<h4>
          <button type='button' class='button GulfSturgeon' data-toggle="modal" data-target="#GulfSturgeon"></button>
          <div class="modal fade" id="GulfSturgeon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gulf Sturgeon</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>What is there to appreciate about a big fish? Plenty, say scientists who study the Gulf sturgeon. The Gulf sturgeon grows to greater than six feet in length, sports bony plates on its head and body, has fleshy "whiskers" on its long snout, and no internal skeleton. This ancient fish evolved from much larger ancestors that lived more than 225 million years ago. Gulf sturgeon may live for more than 40 years, not reaching sexual maturity until seven or eight years of age or later.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Sturgeon are anadromous, a term used to describe fish that spend a part of their lives in saltwater, yet travel upstream in freshwater rivers to spawn. Such fish return year after year to the same stream where they were hatched. For Gulf sturgeon, which are found from Florida to Louisiana, this means a move from salt to fresh water between February and April and a move downriver between September and November. They spend the winter in the Gulf of Mexico in sandy-bottom habitats six to 100 feet deep, where their diet consists of marine worms, grass shrimp, crabs and a variety of other bottom-dwelling organisms. They eat very little while in freshwater rivers.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Little is known about the early life stages of the Gulf sturgeon throughout its range.   After the late 1800s, Gulf sturgeon populations declined dramatically, a result of the high demand for their delicious meat and valuable roe, and dam construction, dredging activity and other man-made habitat alterations. The decline prompted state and federal officials to place the sturgeon on the protected species lists in the 1980s and 1990s and to enact a harvesting and possession ban. Today, the free-flowing, spring-fed Suwannee River supports the largest and most robust population of Gulf sturgeon in the state and the wider Gulf of Mexico region. Adults spawn on scoured limestone substrates in the upper reaches of this 200-mile long river. As they swim along, sturgeon occasionally leap out of the water. Every spring and summer, lucky boaters and campers along the Suwannee River witness this spectacle. Power boaters can reduce the risk of injury to themselves and the fish by boating slower during the appropriate time of year. This also increases the chance of seeing the sturgeon and other wildlife along the way.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Tarpon<h4>
          <button type='button' class='button Tarpon' data-toggle="modal" data-target="#Tarpon"></button>
          <div class="modal fade" id="Tarpon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Tarpon</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Tarpon have a distinctive dorsal fin ray that extends into a long filament, a large upward pointing mouth and very large scales</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Primarily inshore fish, preferring shallow estuaries around mangrove forests, salt marshes or hard-bottom/seagrass communities of the Keys. They tolerate a wide salinity range, and as juveniles, enter fresh waters.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Tarpon can gulp air and remove oxygen by means of lung-like tissue near their swim bladder. This "rolling" effect is one way to spot tarpon. Anglers catch tarpon that weigh 40 to 150 pounds on average. Tarpon do not mature until 7 to 13 years of age. They spawn offshore between May and September.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>243 lb, caught near Key West</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Live shrimp or pinfish make good baits, but plastics and Keys-style streamers work too. When sight fishing, land your presentation softly in front of a tarpon at an angle that lets you withdraw your lure away from the tarpon. Tarpon are not eaten. A tarpon tag is required for harvest.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            <div class="row">
        <div class="col-md-4">
          <h4>Ladyfish<h4>
          <button type='button' class='button Ladyfish' data-toggle="modal" data-target="#Ladyfish"></button>
          <div class="modal fade" id="Ladyfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Ladyfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Terminal mouth. Slender body. Small scales. Last dorsal ray not elongated. Head is small and pointed</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Ladyfish are found inshore in bays and estuaries.  They may occasionally enter freshwater.  Ladyfish frequent tidal pools and canals and often form large schools and harasses bait at the surface.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Ladyfish are known to spawn offshore.  Adults feed predominantly on fish and crustaceans.  They leap when hooked.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>6 lb 4 oz, caught near Cocoa Beach</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Gray Triggerfish<h4>
          <button type='button' class='button GrayTriggerfish' data-toggle="modal" data-target="#GrayTriggerfish"></button>
          <div class="modal fade" id="GrayTriggerfish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Gray Triggerfish</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>Entirely olive-gray. Dorsal and anal fins marbled. Caudal fin lobes elongate in large adults. One or more enlarged scales behind gill opening. 26 to 29 dorsal fin rays. 23 to 26 anal fin rays. Young: large darker saddle on back (these saddles sometime persist in adults). Blue spots and short blue lines in dorsal fin and on upper half of body, becoming white below anal fin. Upper rim of eye blue</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Hardbottom, reefs, ledges</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>No recorded behavior</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>12lb 7oz</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>None</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <h4>Tripletail<h4>
          <button type='button' class='button Tripletail' data-toggle="modal" data-target="#Tripletail"></button>
          <div class="modal fade" id="Tripletail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Tripletail</h4>
                </div>
                <div class="modal-body">
                  <h4>Appearance<h4>
                  <p>The rounded second dorsal and anal fins are similar in size and along with a rounded tail fin, give the fish its name. The bases of those fins have scales.</p>
                  <hr class="featurette-divider">
                  <h4>Habitat<h4>
                  <p>Frequently associated with structure.</p>
                  <hr class="featurette-divider">
                  <h4>Behavior<h4>
                  <p>Found in Florida primarily during spring, summer and fall.</p>
                  <hr class="featurette-divider">
                  <h4>State Record<h4>
                  <p>40.8 lbs.</p>
                  <hr class="featurette-divider">
                  <h4>Fishing Tips and Facts<h4>
                  <p>Often found near structure and when hooked will seek to escape by heading hard for shelter.</p>
                  <hr class="featurette-divider">
                  <h4>Additional Information<h4>
                  <p>None</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>

            
        <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/alvaro.js"></script>
  </body>
</html>
