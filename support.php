<!DOCTYPE html>
<!--
 * Copyright (c) All Rights Reserved, VERGOSOFT LLC
 * Title: HypnoRem Website
 * Author: Scott Zastrow
//-->
<html>

<head>
	<title>Learn HypnoRem</title>
	<meta name="keywords" content="relaxation, sleep, rem, non-rem" />
	<meta name="description" content="HypnoRem is an app designed to aid in achieving a healthy sleep pattern." />
<?php include("includes/head.php");?>
<body>
<a name="top"></a>
<div class="menu-wrap">
	<nav class="menu">
		<ul class="active">
			<li><a href="index.php">Main</a></li>
			<li><a href="about.php">About</a></li>
			<li class="current-item"><a href="support.php">Learn</a></li>
			<li><a href="demo.php">Demo</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul> 
		<a class="toggle-nav" href="#">&#9776;</a>
	</nav>
</div><!--menu-wrap-->
<div class="title">
<b>Learn HypnoRem</b>
</div><!--title-->
<div class="content" style="margin-bottom: 0px !important;">
There are three main settings for HypnoRem:
<ul style="line-height: 200% !important;">
<li><a href="#theme-selector">The Theme Selector</a></li>
<li><a href="#master-volume">The Master Volume</a></li>
<li><a href="#master-cycle">The Master Cycle</a></li></ul>
In addition to the slider settings there is also two check box settings:
<ul style="line-height: 200% !important;">
<li><a href="#volume-sleep-mode">Volume Sleep Mode</a></li>
<li><a href="#cycle-sleep-mode">Cycle Sleep Mode</a></li>
</ul>
</div><!--content-->
<a name="theme-selector"></a>
<div class="title">
<div class="top"><a href="#top">Top&#8593</a></div><!--top-->
Theme Selector
</div><!--title-->
<div class="content">
The first horizontal slider in the settings panel is the theme selector. There are five themes to choose from. Here’s a list of those themes and a brief description of each.

<h3>Forest Night</h3>
<p>
As with all themes, Forest Night is comprised of 14 different soundscapes. The soundscapes from Forest Night are composed of ambient sounds from various different tropical rainforests. The Forest Night, as with all themes, cycles through these different soundscapes like a wave gradually ramping up volume of the next soundscape while gradually dropping volume for the previous soundscapes. This gives you the impression of moving through the forest and pausing to experience the virtual space within each soundscape. By cycling through these soundscapes, we also create a dynamic low-amplitude of mixed-frequencies similar to what you would experience during REM sleep.
</p>
<h3>Ocean Depths</h3>
<p>
Ocean Depths is a little more abstract than the other themes. While it still cycles through 14 different soundscapes, these soundscapes are modified using various audio effects to create a rich tapestry of mixed-frequencies.
</p>
<h3>ThunderStorm</h3>
<p>
Have you ever been jolted out of bed by the loud crack from a lighting strike? The ThunderStorm theme has been meticulously edited to reign in nature’s fury to a soft rolling thunderstorm. The thunder and rain is dynamically driven from different sources delivering unique thunder storm patterns every time. Some of the soundscapes include rain on a tent, a window pain, or a tin roof.
</p>
<h3>Tropic Wave</h3>
<p>
TropicWave was created from various tropical beaches. Some beaches had a long  wide sandy plain for the waves to gently roll up on while others had rocky features or over hanging palm trees that playfully interact with the waves.
</p>
<h3>Wind Blown</h3>

Have you ever just sat there and listened to the wind blowing through the trees? If you have, then you are going to love WindBlown. Sources for WindBlown are recordings from forests in the Midwest during the fall or at night.

</div><!--content-->
<a name="master-volume"></a>
<div class="title">
<div class="top"><a href="#top">Top&#8593</a></div><!--top-->
Master Volume
</div><!--title-->
<div class="content">
When HypnoRem is running a theme, it is running a programmed loop which includes several audio sources. The Master Volume for all of these sources is set at the beginning of a loop by the Master Volume setting which is controlled by the slider labeled ‘Volume’.
<p>When you change the Master Volume setting, HypnoRem must stop the current loop (if one is running). If this is the case, you will notice that the Play button will be gray and inactive for a few seconds. This is to insure that a new loop cannot start before an old one is finished.</p>Once the Play button is blue again, simply press the Play button to begin listening again.
</div><!--content-->

<a name="master-cycle"></a>
<div class="title">
<div class="top"><a href="#top">Top&#8593</a></div><!--top-->
Master Cycle
</div><!--title-->
<div class="content">
The Master Cycle setting, controlled by the slider labeled ‘Cycle’, controls two things, the duration of time spent on each soundscape and the relative time spent transitioning between each soundscape. The duration of time spent transitioning between each soundscape is a percentage of time spent on each soundscape to insure a natural transitional soundscape that is consistent with the flow of your Master Cycle settings. 
</div><!--content-->

<a name="volume-sleep-mode"></a>
<div class="title">
<div class="top"><a href="#top">Top&#8593</a></div><!--top-->
Volume Sleep Mode
</div><!--title-->
<div class="content">
As you probably already read, each theme has 14 different soundscapes that it continuously cycles through.<p>When the Volume Sleep Mode check box is selected, HypnoRem will drop the volume by 3 decibels (dB) every time it completes a set of those 14 soundscapes, gradually making the theme quieter and quieter. Once the volume reaches -30 decibels (dB) HypnoRem will quit and allow the device to enter normal energy saver modes.</p>
<b>NOTE:</b> This is the only time HypnoRem will shut itself down. If Volume Sleep Mode is not selected, HypnoRem will play a theme until the user stops the loop or the batteries run out.
</div><!--content-->

<a name="cycle-sleep-mode"></a>
<div class="title">
<div class="top"><a href="#top">Top&#8593</a></div><!--top-->
Cycle Sleep Mode
</div><!--title-->
<div class="content">
The duration for the time spent on each soundscape is between 30seconds and 2minutes. Each theme has 14 soundscapes, so it would take roughly 10-30 minutes to complete a set of those 14 soundscapes. 
<p>When the Cycle Sleep Mode check box is selected, the cycle duration gradually increases for each soundscape and the transition time between each soundscape increases as well.
</p><p>The goal of HypnoRem is to create soundscapes comprised of dynamic low-amplitude of mixed-frequencies. By extending duration and transition time with Cycle Sleep Mode, our soundscapes transition to a slower less active and dynamic state.
</p>When used in conjunction with <a href="#volume-sleep-mode">Volume Sleep Mode</a>, HypnoRem gradually fades into the background while your brain takes over with a healthy sleep pattern.

</div><!--content-->

<?php include("includes/footer.php");?>
</body>
</html>