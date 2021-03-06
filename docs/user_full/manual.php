<?php
    $bMain  = true;
    $sHead  = '<!--Generated on Fri Feb 23 09:09:19 2018 by LaTeXML (version 0.8.1) http://dlmf.nist.gov/LaTeXML/.-->
<link rel="stylesheet" href="LaTeXML.css" type="text/css">
<link rel="stylesheet" href="ltx-report.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" type="text/javascript"></script>
';
    $sHead .= '<link rel="stylesheet" href="/SixTrack/web/css/latexml-fix.css" type="text/css">
';
    require_once('../../includes/header.php');
?>
<article id='manual' class='ltx_document'>
<div id='generator'>Generated on Fri Feb 23 09:09:19 2018 by <a href='http://dlmf.nist.gov/LaTeXML/'>LaTeXML</a> (version 0.8.1)</div>
<div class="ltx_titlepage">
<p class="ltx_p ltx_align_center">EUROPEAN LABORATORY FOR PARTICLE PHYSICS</p>
<p class="ltx_p ltx_align_center">CERN – SL Division</p>
<p class="ltx_p ltx_align_right">CERN/SL/94–56 (AP)</p>
<p class="ltx_p ltx_align_right">Update November 2017</p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:172%;">SixTrack<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text" style="font-size:172%;">Version 4.7.16</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text" style="font-size:172%;">Single Particle Tracking Code Treating Transverse Motion with Synchrotron Oscillations in a Symplectic Manner</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:172%;">User’s Reference Manual<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_italic">F. Schmidt, update by A. Alekou, M. Fitterer, J.F. Wagner, S.J. Wretborn, R. De Maria, S. Kostoglou, K. Sjobak and T. Persson</span>
    </p>
<p class="ltx_p ltx_align_center">
      <span class="ltx_text ltx_font_bold" style="font-size:120%;">Abstract<span class="ltx_text ltx_font_medium"></span></span>
    </p>
<p class="ltx_p">The aim of SixTrack is to track two nearby particles taking into
account the full six–dimensional phase space including synchrotron
oscillations in a symplectic manner. It allows to predict the
long–term dynamic aperture which is defined as the border between
regular and chaotic motion. This border can be found by studying the
evolution of the distance in phase space of two initially nearby
particles. Parameters of interest like nonlinear detuning and smear
are determined via a post–processing of the tracking data. An
analysis of the first order resonances can be done and correction
schemes for several of those resonances can be calculated. Moreover
there is the feature to calculate a one–turn map to very high order
and the full six–dimensional case, using the LBL differential
algebra. This map allows a subsequent theoretical
analysis like normal form procedures which are provided by É.
Forest <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>.</p>
<p class="ltx_p">The linear elements are usually treated as thick elements in
SixTrack. In that case there is at least one non–zero length
element in the structure file which is not a drift–element. If the
accelerator, however, is modelled exclusively with drifts and kicks
SixTrack automatically uses the thin–lens formalism according to
G. Ripken <cite class="ltx_cite">[<a href="#bib.bib2" title="" class="ltx_ref">2</a>]</cite>. A common header of output
data and the format of these data has been found for MAD and SixTrack
tracking data.</p>
<p class="ltx_p ltx_align_center">Geneva, Switzerland</p>
<p class="ltx_p ltx_align_center">February 23, 2018</p>
</div>
<h6>Contents:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#Ch1" title="Chapter 1 Introduction" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1 </span>Introduction</span></a></li>
<li class="ltx_tocentry">
<a href="#Ch2" title="Chapter 2 Versions and Service" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2 </span>Versions and Service</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry"><a href="#Ch2.S0.SS1" title="2.0.1 Evolution of SixTrack ‣ Chapter 2 Versions and Service" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.0.1 </span>Evolution of SixTrack</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3" title="Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3 </span>Input Structure</span></a>
<ul class="ltx_toclist ltx_toc_chapter">
<li class="ltx_tocentry">
<a href="#Ch3.S1" title="3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>General Input</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.1 </span>Program Version</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS2" title="3.1.2 Print Selection ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.2 </span>Print Selection</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS3" title="3.1.3 Comment Line ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.3 </span>Comment Line</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS4" title="3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.4 </span>Iteration Errors</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S1.SS5" title="3.1.5 MAD – SixTrack Conversion ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.5 </span>MAD – SixTrack Conversion</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S2" title="3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Machine Geometry</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry">
<a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.1 </span>Single Elements</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS1" title="Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Nonlinear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS3" title="Multipole Blocks ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Multipole Blocks</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS4" title="Cavities ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Cavities</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS5" title="Beam–Beam Lens ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Beam–Beam Lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS6" title="Wire ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Wire</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS7" title="“Phase–trombone” or matrix element ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">“Phase–trombone” or matrix element</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS8" title="AC dipole ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">AC dipole</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS9" title="Dipole edge ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Dipole edge</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS10" title="Crab Cavity ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Crab Cavity</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS11" title="RF multipole ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">RF multipole</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS12" title="Electron Lens ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Electron Lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS13" title="Scattering point ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Scattering point</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS14" title="Beam Position Monitor ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Beam Position Monitor</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS1.SSS15" title="Other element types ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title">Other element types</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.2 </span>Block Definitions</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.3 </span>Structure Input</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.4 </span>Displacement of Elements</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S3" title="3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3 </span>Special Elements</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.1 </span>Multipole Coefficients</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.2 </span>Aperture Limitations</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS3" title="3.3.3 Power Supply Ripple ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.3 </span>Power Supply Ripple</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS4" title="3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.4 </span>Dynamic Kicks</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.5 </span>Beam–Beam Element</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS6" title="3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.6 </span>Wire</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS7" title="3.3.7 “Phase Trombone” Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.7 </span>“Phase Trombone” Element</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS8" title="3.3.8 Beam Distribution EXchange (BDEX) ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.8 </span>Beam Distribution EXchange (BDEX)</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS9" title="3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.9 </span>Electron lens</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S3.SS10" title="3.3.10 Scattering ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.10 </span>Scattering</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S4" title="3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4 </span>Organising Tasks</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.1 </span>Random Fluctuation Starting Number</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.2 </span>Organisation of Random Numbers</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.3 </span>Combination of Elements</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S5" title="3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5 </span>Processing</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.1 </span>Linear Optics Calculation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS2" title="3.5.2 Tune Variation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.2 </span>Tune Variation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS3" title="3.5.3 Chromaticity Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.3 </span>Chromaticity Correction</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.4 </span>Orbit Correction</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS5" title="3.5.5 Decoupling of Motion in the Transverse Planes ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.5 </span>Decoupling of Motion in the Transverse Planes</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS6" title="3.5.6 Sub–resonance Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.6 </span>Sub–resonance Calculation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS7" title="3.5.7 Search for Optimum
Places to Compensate Resonances ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.7 </span>Search for Optimum
Places to Compensate Resonances</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS8" title="3.5.8 Resonance Compensation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.8 </span>Resonance Compensation</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.9 </span>Differential Algebra</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS10" title="3.5.10 Normal Forms ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.10 </span>Normal Forms</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS11" title="3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.11 </span>Corrections</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5.12 </span>Post–processing</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S6" title="3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6 </span>Initial Conditions for Tracking</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6.1 </span>Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6.2 </span>Initial Coordinates</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6.3 </span>Synchrotron Oscillation</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#Ch3.S7" title="3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7 </span>Extra output files</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#Ch3.S7.SS1" title="3.7.1 Dumping of beam population ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7.1 </span>Dumping of beam population</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S7.SS2" title="3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7.2 </span>FMA analysis</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.S7.SS3" title="3.7.3 ZIPFile combined and compressed output ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7.3 </span>ZIPFile combined and compressed output</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#Chx1" title="Conclusions" class="ltx_ref"><span class="ltx_text ltx_ref_title">Conclusions</span></a></li>
<li class="ltx_tocentry"><a href="#Ch4" title="Chapter 4 Acknowledgement" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4 </span>Acknowledgement</span></a></li>
<li class="ltx_tocentry"><a href="#A1" title="Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">A </span>List of Keywords</span></a></li>
<li class="ltx_tocentry">
<a href="#A2" title="Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B </span>List of Default Values</span></a>
<ul class="ltx_toclist ltx_toc_appendix">
<li class="ltx_tocentry"><a href="#A2.S1" title="B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.1 </span>Default Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.2 </span>Default Size Parameters</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">C </span>Input and Output Files</span></a></li>
<li class="ltx_tocentry"><a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D </span>Data Structure of the Data–Files</span></a></li>
<li class="ltx_tocentry">
<a href="#A5" title="Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">E </span>Tracking Examples</span></a>
<ul class="ltx_toclist ltx_toc_appendix">
<li class="ltx_tocentry"><a href="#A5.S1" title="E.1 Input Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">E.1 </span>Input Example</span></a></li>
<li class="ltx_tocentry"><a href="#A5.S2" title="E.2 Output Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">E.2 </span>Output Example</span></a></li>
<li class="ltx_tocentry"><a href="#A5.S3" title="E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">E.3 </span>Plot Example</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#bib" title="Bibliography" class="ltx_ref"><span class="ltx_text ltx_ref_title">Bibliography</span></a></li>
</ul>
<h6>List of Tables:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#Ch2.T1" title="Table 2.1 ‣ Chapter 2 Versions and Service" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.1 </span>External Routines</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>Iteration Errors</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T2" title="Table 3.2 ‣ Format ‣ Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Different Types of Linear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T3" title="Table 3.3 ‣ Format ‣ Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3 </span>Different Types of Nonlinear Elements</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T4" title="Table 3.4 ‣ FUN ‣ Format ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4 </span>Available function types in DYNK.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T5" title="Table 3.5 ‣ SET ‣ Format ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5 </span>Element types and attributes available in DYNK.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T6" title="Table 3.6 ‣ Format ‣ 3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6 </span>Input parameters for WIRE block.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T7" title="Table 3.7 ‣ Format ‣ 3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.7 </span>Input parameters for ELEN block.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T8" title="Table 3.8 ‣ Format ‣ 3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.8 </span>Tune-shift correction parameters</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T9" title="Table 3.9 ‣ Format ‣ 3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.9 </span>Initial Coordinates of the 2 Particles</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T10" title="Table 3.10 ‣ method ‣ Format of input block ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.10 </span>Available tune calculation methods in SixTrack.</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T11" title="Table 3.11 ‣ Output file format ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.11 </span>Format of the NORM files</span></a></li>
<li class="ltx_tocentry"><a href="#Ch3.T12" title="Table 3.12 ‣ Output file format ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.12 </span>Format of the fma_sixtrack file</span></a></li>
<li class="ltx_tocentry"><a href="#A1.T1" title="Table A.1 ‣ Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">
          <span class="ltx_text" style="font-size:70%;">A.1</span>
         </span>
        <span class="ltx_text" style="font-size:70%;">List of Keywords</span></span></a></li>
<li class="ltx_tocentry"><a href="#A2.T1" title="Table B.1 ‣ B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.1 </span>Default Tracking Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A2.T2" title="Table B.2 ‣ B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">B.2 </span>Default Size Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A3.T1" title="Table C.1 ‣ Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">C.1 </span>List of Input and Output Files.</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T1" title="Table D.1 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.1 </span>Header of the Binary Data–Files</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T2" title="Table D.2 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.2 </span>Format of the Binary Data</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T3" title="Table D.3 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">
          <span class="ltx_text" style="font-size:90%;">D.3</span>
         </span>
        <span class="ltx_text" style="font-size:90%;">Post–processing Data</span></span></a></li>
<li class="ltx_tocentry"><a href="#A4.T4" title="Table D.4 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.4 </span>4D Linear Parameters</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T5" title="Table D.5 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.5 </span>Format of file with external errors # 16 and internal errors
written to # 9</span></a></li>
<li class="ltx_tocentry"><a href="#A4.T6" title="Table D.6 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">D.6 </span>Format of file # 34 for detuning and distortion calculation
with external program “SODD” <cite class="ltx_cite">[<span class="ltx_ref">21</span>]</cite></span></a></li>
</ul>
<section id="Ch1" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 1 </span>Introduction</h2>
<div id="Ch1.p1" class="ltx_para">
<p class="ltx_p">The Single Particle Tracking Code SixTrack is optimised to carry two
particles <span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">1</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">1</sup>Two particles are needed for the detection of
chaotic behaviour.</span></span></span> through an accelerator structure over a large
number of turns. It is an offspring of RACETRACK <cite class="ltx_cite">[<a href="#bib.bib3" title="" class="ltx_ref">3</a>]</cite>
written by Albin Wrulich and its input structure has been changed as
little as possible so that slightly modified RACETRACK input files or
those of other offsprings like FASTRAC <cite class="ltx_cite">[<a href="#bib.bib4" title="" class="ltx_ref">4</a>]</cite> can be read in.</p>
</div>
<div id="Ch1.p2" class="ltx_para">
<p class="ltx_p">The main features of SixTrack are:</p>
</div>
<div id="Ch1.p3" class="ltx_para">
<ol id="Ch1.I1" class="ltx_enumerate">
<li id="Ch1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">Treatment of the full six–dimensional motion including
synchrotron motion in a symplectic manner <cite class="ltx_cite">[<a href="#bib.bib5" title="" class="ltx_ref">5</a>]</cite>. The
energy can be ramped at the same time considering the relativistic
change of the velocity <cite class="ltx_cite">[<a href="#bib.bib6" title="" class="ltx_ref">6</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">Detection of the onset of chaotic motion and thereby the
long–term dynamic aperture by evaluating the Lyapunov exponent.</p>
</div>
</li>
<li id="Ch1.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch1.I1.i3.p1" class="ltx_para">
<p class="ltx_p">Post–processing procedure allowing</p>
<ul id="Ch1.I1.I1" class="ltx_itemize">
<li id="Ch1.I1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">calculation of the Lyapunov exponent
</p>
</div>
</li>
<li id="Ch1.I1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">calculation of the average phase advance per turn</p>
</div>
</li>
<li id="Ch1.I1.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i3.p1" class="ltx_para">
<p class="ltx_p">FFT analysis</p>
</div>
</li>
<li id="Ch1.I1.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i4.p1" class="ltx_para">
<p class="ltx_p">resonance analysis</p>
</div>
</li>
<li id="Ch1.I1.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i5.p1" class="ltx_para">
<p class="ltx_p">calculation of the average, maximum and minimum values of the
Courant–Snyder emittance and the invariants of linearly coupled
motion</p>
</div>
</li>
<li id="Ch1.I1.I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i6.p1" class="ltx_para">
<p class="ltx_p">calculation of smear</p>
</div>
</li>
<li id="Ch1.I1.I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I1.i7.p1" class="ltx_para">
<p class="ltx_p">plotting using the CERN packages HBOOK, HPLOT and HIGZ
<cite class="ltx_cite">[<a href="#bib.bib7" title="" class="ltx_ref">7</a>, <a href="#bib.bib8" title="" class="ltx_ref">8</a>, <a href="#bib.bib9" title="" class="ltx_ref">9</a>]</cite></p>
</div>
</li>
</ul>
</div>
</li>
<li id="Ch1.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch1.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Calculation of first–order resonances and of correction schemes
for the resonances <cite class="ltx_cite">[<a href="#bib.bib10" title="" class="ltx_ref">10</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch1.I1.i5.p1" class="ltx_para">
<p class="ltx_p">Calculation of the one–turn map using the differential algebra
techniques. The original DA package by M.Berz <cite class="ltx_cite">[<a href="#bib.bib11" title="" class="ltx_ref">11</a>]</cite> has been
replaced by the package of LBL <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>. The Fortran code is
transfered into a Map producing via the (slightly modified) “DAFOR”
code <cite class="ltx_cite">[<a href="#bib.bib12" title="" class="ltx_ref">12</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch1.I1.i6.p1" class="ltx_para">
<p class="ltx_p">The code is vectorised, with two particles, the
number of amplitudes, the different relative momentum deviations
<math id="Ch1.I1.i6.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> in parallel
<cite class="ltx_cite">[<a href="#bib.bib13" title="" class="ltx_ref">13</a>]</cite>.</p>
</div>
</li>
<li id="Ch1.I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7.</span>
<div id="Ch1.I1.i7.p1" class="ltx_para">
<p class="ltx_p">Operational improvements:</p>
<ul id="Ch1.I1.I2" class="ltx_itemize">
<li id="Ch1.I1.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I2.i1.p1" class="ltx_para">
<p class="ltx_p">free format input</p>
</div>
</li>
<li id="Ch1.I1.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I2.i2.p1" class="ltx_para">
<p class="ltx_p">optimisation of the calculation of multipole kicks
</p>
</div>
</li>
<li id="Ch1.I1.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I2.i3.p1" class="ltx_para">
<p class="ltx_p">improved treatment of random errors</p>
</div>
</li>
<li id="Ch1.I1.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                  <span class="ltx_text ltx_font_bold">–</span>
                </span>
<div id="Ch1.I1.I2.i4.p1" class="ltx_para">
<p class="ltx_p">each binary data–file has a header describing the history of
the run (Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>)</p>
</div>
</li>
</ul>
</div>
</li>
</ol>
</div>
<div id="Ch1.p4" class="ltx_para">
<p class="ltx_p">The SixTrack input is line oriented. Each line of 80 characters is
treated as one string of input in which a certain sequence of numbers
and character strings is expected to be found. The numbers and
character strings must be separated by at least one blank, floating
point numbers can be given in any format, but must be distinguished
from integer numbers. Omitted values at the end of an input line will
keep their default values ( <a href="#A2.S1" title="B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.1</span></a>), and lines with a slash “/” in
the first column will be ignored by the program.</p>
</div>
<div id="Ch1.p5" class="ltx_para">
<p class="ltx_p">For detailed questions concerning rounding errors, calculation of the
Lyapunov exponent and determination of the long–term dynamic
aperture, see <cite class="ltx_cite">[<a href="#bib.bib14" title="" class="ltx_ref">14</a>]</cite>.</p>
</div>
<div id="Ch1.p6" class="ltx_para">
<p class="ltx_p">In chapter <a href="#Ch3" title="Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>, the input structure of SixTrack is discussed
in detail. To facilitate the use of the program, a set of appendices
are added, giving a list of keywords (Appendix <a href="#A1" title="Appendix A List of Keywords" class="ltx_ref"><span class="ltx_text ltx_ref_tag">A</span></a>), a
list of default values (Appendix <a href="#A2" title="Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B</span></a>), the input and
output files (Appendix <a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">C</span></a>), a description of the data
structure of the binary data–files (Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>) and
tracking examples (Appendix <a href="#A5" title="Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E</span></a>).</p>
</div>
</section>
<section id="Ch2" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 2 </span>Versions and Service</h2>
<div id="Ch2.p1" class="ltx_para">
<p class="ltx_p">There are two versions: for element by element tracking there
is a vector version, and there is a version to produce a
one–turn map using the LBL Differential Algebra package. In both
cases the input structure file # 2 is used to determine if the thick
or thin linear element mode has to be used.</p>
</div>
<div id="Ch2.p2" class="ltx_para">
<p class="ltx_p">To use the power of the Differential Algebra, for instance to
calculate the 6–D closed orbit in an elegant fashion, the tracking
versions may also be equipped with a low order map facility to avoid
the otherwise huge demand on memory.</p>
</div>
<div id="Ch2.p3" class="ltx_para">
<p class="ltx_p">It must be mentioned that in the linear thin–lens version dipoles
have to be treated in a special way. See section <a href="#Ch3.S2.SS1.SSS3" title="Multipole Blocks ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a> for
details.</p>
</div>
<div id="Ch2.p4" class="ltx_para">
<p class="ltx_p">To convert MAD files into SixTrack input a special conversion program
<math id="Ch2.p4.m1" class="ltx_Math" alttext="mad\_6t" display="inline"><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mn>6</mn><mo>⁢</mo><mi>t</mi></mrow></math> <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite> has been developed (see also <a href="#Ch3.S1.SS5" title="3.1.5 MAD – SixTrack Conversion ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.5</span></a>).</p>
</div>
<div id="Ch2.p5" class="ltx_para">
<p class="ltx_p">The following subroutines are taken from various packages:</p>
</div>
<figure id="Ch2.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 2.1: </span>External Routines</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
              <span class="ltx_text" style="font-size:70%;">
</span>
              <span class="ltx_text ltx_font_bold" style="font-size:120%;">Package</span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="font-size:120%;">Routine</span>
            </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="font-size:120%;">Purpose</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
              <span class="ltx_text" style="font-size:70%;"> NAGLIB</span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">E04UCF, E04UDM, E04UEF,
X04ABF</span>
            </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">using internally Normal
Forms</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
              <span class="ltx_text" style="font-size:70%;">
HBOOK</span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">HBOOK2, HDELET, HLIMIT, HTITLE</span>
            </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">graphic basics</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
              <span class="ltx_text" style="font-size:70%;">
HPLOT</span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">HPLAX, HPLCAP, HPLEND, HPLINT,</span>
            </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">graphic options</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">HPLOPT, HPLSET, HPLSIZ, HPLSOF</span>
            </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
              <span class="ltx_text" style="font-size:70%;">
HIGZ</span>
            </th>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">IGMETA, ISELNT, IPM, IPL</span>
            </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:70%;">graphic output</span>
            </td>
</tr>
</tbody>
</table>
</figure>
<div id="Ch2.p6" class="ltx_para">
<p class="ltx_p">All versions can be downloaded from the web.
The project webpage is found at <a href="http://sixtrack.web.cern.ch/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/</span></a>,
and primary source repository is located at <a href="https://github.com/SixTrack/SixTrack" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack</span></a>.
Older versions can be found at <a href="http://cern.ch/Frank.Schmidt/Source" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/Source</span></a>.</p>
</div>
<div id="Ch2.p7" class="ltx_para">
<p class="ltx_p">In case of problems, please see the CERN SixTrack egroups “sixtrack-users” and “sixtrack-developers”.
If these are not accessible to you, you are welcome to contact the coordinators: Riccardo De Maria and Kyrre Sjobak, as well as the original developer Frank Schmidt.
Our contact details are available from the CERN phonebook.</p>
</div>
<div id="Ch2.p8" class="ltx_para">
<p class="ltx_p">If you think you have found a defect in the program, please create a report on the issue tracker at <a href="https://github.com/SixTrack/SixTrack/issues" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack/issues</span></a>.
Note that for this to be usefull, you need to describe what the program is doing, what you expected it to do, and an example which demonstrates the unwanted behaviour.
Plase also look through the issues that are already listed, and see if it is known.
If so, you are welcome to add a comment to the issue, which may influence its priority or give additional and useful information to the developers.</p>
</div>
<div id="Ch2.p9" class="ltx_para">
<p class="ltx_p">The most up to date version of the documentation can always be found on the GitHub repository mentioned above.
Additionally, various older documentation can be found at <a href="http://cern.ch/Frank.Schmidt/Documentation/doc.html" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://cern.ch/Frank.Schmidt/Documentation/doc.html</span></a>.</p>
</div>
<section id="Ch2.S0.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">2.0.1 </span>Evolution of SixTrack</h4>
<div id="Ch2.S0.SS1.p1" class="ltx_para">
<p class="ltx_p">Lastly, I would like to give a short historical overview how the versions of SixTrack have evolved.</p>
<ul id="Ch2.I1" class="ltx_itemize">
<li id="Ch2.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch2.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 1</span></p>
</div>
<div id="Ch2.I1.i1.p2" class="ltx_para">
<p class="ltx_p">The first version has been an upgrade of RACETRACK <cite class="ltx_cite">[<a href="#bib.bib3" title="" class="ltx_ref">3</a>]</cite>
to include the full 6D formalism for long linear elements by
G. Ripken <cite class="ltx_cite">[<a href="#bib.bib5" title="" class="ltx_ref">5</a>]</cite>.</p>
</div>
</li>
<li id="Ch2.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch2.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 2</span></p>
</div>
<div id="Ch2.I1.i2.p2" class="ltx_para">
<p class="ltx_p">The DA–package and the Normal Form
techniques <cite class="ltx_cite">[<a href="#bib.bib11" title="" class="ltx_ref">11</a>, <a href="#bib.bib17" title="" class="ltx_ref">17</a>]</cite> have been added to allow the
production of high–order one–turn Taylor maps and their
analysis. The 6D thin–lens formalism <cite class="ltx_cite">[<a href="#bib.bib2" title="" class="ltx_ref">2</a>]</cite> has also been
included to speed–up the tracking without appreciable deterioration
of the accelerator model for very large Hadron colliders like the
LHC.</p>
</div>
</li>
<li id="Ch2.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch2.I1.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 3</span></p>
</div>
<div id="Ch2.I1.i3.p2" class="ltx_para">
<p class="ltx_p">For the present version the beam–beam kick à la Bassetti and
Erskine <cite class="ltx_cite">[<a href="#bib.bib18" title="" class="ltx_ref">18</a>]</cite> has been included together with the 6D part by
Hirata et al. <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>. Moreover, this 6D part has been
upgraded to include the full 6D linear coupling <cite class="ltx_cite">[<a href="#bib.bib20" title="" class="ltx_ref">20</a>]</cite>.
Lastly, the LBL DA–package has replaced the original one by Berz
and all operations, needed to set–up the accelerator structure, are
now performed with the help of Forest’s LieLib package <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>.</p>
</div>
</li>
<li id="Ch2.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch2.I1.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Version 4 – in preparation</span></p>
</div>
<div id="Ch2.I1.i4.p2" class="ltx_para">
<p class="ltx_p">Upgrading the program to FORTRAN90. This is of interest in
particular as É. Forest has wrapped his tools in this more
powerful language. Using operator overloading it will be possible to
perform the map production with a code which is almost identical to
that which does the normal tracking.</p>
</div>
</li>
</ul>
</div>
<span class="ltx_ERROR undefined">\todo</span>
<div id="Ch2.S0.SS1.p2" class="ltx_para">
<p class="ltx_p">[inline]Update version history</p>
</div>
</section>
</section>
<section id="Ch3" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 3 </span>Input Structure</h2>
<div id="Ch3.p1" class="ltx_para">
<p class="ltx_p">The idea of RACETRACK input is to use a sequence of input blocks, each
block with a specific keyword in the first line, the keyword “NEXT”
in the last line and the input data in the lines in between. The
keyword “ENDE” ends this sequence, and all blocks after this keyword
are ignored. This system makes it easy to read input and allows easy
change and addition of input blocks. It was therefore also used in
SixTrack.</p>
</div>
<section id="Ch3.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.1 </span>General Input</h3>
<section id="Ch3.S1.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.1 </span>Program Version</h4>
<section id="Ch3.S1.SS1.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S1.SS1.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Program Version</span> input block
determines if all of the input will be in the input file # 3 or if
the geometry part of the machine (see <a href="#Ch3.S2" title="3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>) will be in a
separate file # 2. The latter option is useful if tracking
parameters are changed but the geometry part of the input is left as
it is. The geometry part can be produced directly from a MAD input
file (see <a href="#Ch3.S1.SS5" title="3.1.5 MAD – SixTrack Conversion ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.5</span></a>).</p>
</div>
</section>
<section id="Ch3.S1.SS1.SSS0.P0.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S1.SS1.SSS0.P0.SPx2.p1" class="ltx_para">
<p class="ltx_p">FREE or GEOM</p>
</div>
</section>
<section id="Ch3.S1.SS1.SSS0.P0.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data
lines</h6>
<div id="Ch3.S1.SS1.SSS0.P0.SPx3.p1" class="ltx_para">
<p class="ltx_p">0</p>
</div>
</section>
<section id="Ch3.S1.SS1.SSS0.P0.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S1.SS1.SSS0.P0.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">keyword comment title</span></p>
</div>
<div id="Ch3.S1.SS1.SSS0.P0.SPx4.p2" class="ltx_para">
<dl id="Ch3.I1" class="ltx_description">
<dt id="Ch3.I1.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">keyword</span></dt>
<dd class="ltx_item">
<div id="Ch3.I1.ix1.p1" class="ltx_para">
<p class="ltx_p">The first four characters of the first line of the
input file # 3 are reserved for the keyword (FREE for free format
input with all input in file # 3; GEOM if the geometry part is in
file # 2)</p>
</div>
</dd>
<dt id="Ch3.I1.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">comment</span></dt>
<dd class="ltx_item">
<div id="Ch3.I1.ix2.p1" class="ltx_para">
<p class="ltx_p">Following the first four characters, 8 characters are
reserved for comments</p>
</div>
</dd>
<dt id="Ch3.I1.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">title</span></dt>
<dd class="ltx_item">
<div id="Ch3.I1.ix3.p1" class="ltx_para">
<p class="ltx_p">The next 60 characters are interpreted as the title of
the output file # 6</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S1.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.2 </span>Print Selection</h4>
<section id="Ch3.S1.SS2.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S1.SS2.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">Use of the <span class="ltx_text ltx_font_italic">Print Selection</span> input
block causes the printing of the input data to the output file # 6.
It is advisable to always use this input block to have a complete
protocol of the tracking run.</p>
</div>
</section>
<section id="Ch3.S1.SS2.SSS0.P0.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S1.SS2.SSS0.P0.SPx2.p1" class="ltx_para">
<p class="ltx_p">PRIN</p>
</div>
</section>
<section id="Ch3.S1.SS2.SSS0.P0.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S1.SS2.SSS0.P0.SPx3.p1" class="ltx_para">
<p class="ltx_p">0</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.3 </span>Comment Line</h4>
<section id="Ch3.S1.SS3.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S1.SS3.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">An additional comment can be specified with
this block. It will be written to the binary data files
(Appendix <a href="#A4" title="Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D</span></a>) and will appear in the post–processing output
as well.</p>
</div>
</section>
<section id="Ch3.S1.SS3.SSS0.P0.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S1.SS3.SSS0.P0.SPx2.p1" class="ltx_para">
<p class="ltx_p">COMM</p>
</div>
</section>
<section id="Ch3.S1.SS3.SSS0.P0.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S1.SS3.SSS0.P0.SPx3.p1" class="ltx_para">
<p class="ltx_p">1</p>
</div>
</section>
<section id="Ch3.S1.SS3.SSS0.P0.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S1.SS3.SSS0.P0.SPx4.p1" class="ltx_para">
<p class="ltx_p">A string of up to 80 characters.</p>
</div>
</section>
</section>
<section id="Ch3.S1.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.4 </span>Iteration Errors</h4>
<section id="Ch3.S1.SS4.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S1.SS4.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">For the processing procedures, the number
of iterations and the precision to which the processing is to be
performed are chosen with the <span class="ltx_text ltx_font_italic">Iteration Errors</span> input block.
If the input block is left out, default values will be used.</p>
</div>
</section>
<section id="Ch3.S1.SS4.SSS0.P0.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S1.SS4.SSS0.P0.SPx2.p1" class="ltx_para">
<p class="ltx_p">ITER</p>
</div>
</section>
<section id="Ch3.S1.SS4.SSS0.P0.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S1.SS4.SSS0.P0.SPx3.p1" class="ltx_para">
<p class="ltx_p">1 to 4</p>
</div>
</section>
<section id="Ch3.S1.SS4.SSS0.P0.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S1.SS4.SSS0.P0.SPx4.p1" class="ltx_para">
<p class="ltx_p">Each data line holds three values as in
table <a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>, except for the fourth line one which the horizontal
and vertical aperture limits can be additionally specified. This has
been added to avoid artificial crashes for special machines.</p>
</div>
<figure id="Ch3.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.1: </span>Iteration Errors</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">data</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">integer</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">double</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">default</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">number of</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">demanded</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">variations
of</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">line</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">value</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">iterations for</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">precision of</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">ITCO</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">50</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">closed orbit</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">calculation</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DMA</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-12</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">closed orbit</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">displacements</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DMAP</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-15</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">derivative</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">of closed orbit</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">displacements</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">2</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">ITQV</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">10</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">Q adjustment</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DKQ</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-10</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">quadrupole</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">strengths</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DQQ</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-10</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">tunes</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">3</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">ITCRO</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">10</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">chromaticity</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">correction</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DSM0</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-10</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">sextupole</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">strengths</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DECH</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-10</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">chromaticity</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">correction</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">4</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DE0</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-9</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">momentum spread</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">for chromaticity</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">calculation</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DED</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-9</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">momentum spread</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">for evaluation</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">of dispersion</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">DSI</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1e-9</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">desired orbit</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">r.m.s. value;</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">compensation of</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">resonance width</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">APER(1)</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1000[mm]</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">horizontal</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">aperture</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">limit</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">APER(2)</span>
                  </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">1000[mm]</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                    <span class="ltx_text" style="font-size:70%;">vertical</span>
                  </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">aperture</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">
                    <span class="ltx_text" style="font-size:70%;">limit</span>
                  </td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_b ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
</tr>
</tbody>
</table>
</figure>
</section>
</section>
<section id="Ch3.S1.SS5" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1.5 </span>MAD – SixTrack Conversion</h4>
<section id="Ch3.S1.SS5.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S1.SS5.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">A converter has been developed <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite> which is directly
linked to MAD8. It produces the geometry file # 2; an appendix to
the parameter file # 3 which defines which of the multipole errors
are switched on; the error file # 16 and the file # 8 which
holds the transverse misalignments and the tilt of the nonlinear kick
elements. It also produce a file (unit 34) with linear lattice
functions, phase advances and multipole strengths needed for resonance
calculations for the program <span class="ltx_text ltx_font_italic">SODD</span> <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite>.
</p>
</div>
</section>
</section>
</section>
<section id="Ch3.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.2 </span>Machine Geometry</h3>
<section id="Ch3.S2.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.1 </span>Single Elements</h4>
<section id="Ch3.S2.SS1.SSS0.P0.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S2.SS1.SSS0.P0.SPx1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Single Elements</span> input block
defines the name and type of linear and nonlinear elements, the
inverse bending radius or multipole strength respectively, and the
strength and length of the elements. Linear and nonlinear elements
are distinguished by length; linear elements have a nonzero length and
nonlinear elements have zero length. Both kinds of elements can appear
in the input block in arbitrary order. The input line has a different
format for linear and nonlinear elements. Moreover, the multipoles,
being a set of nonlinear elements, are treated in a special way. The
maximum number of elements is set as a parameter (see
Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS0.P0.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S2.SS1.SSS0.P0.SPx2.p1" class="ltx_para">
<p class="ltx_p">SING</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS0.P0.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S2.SS1.SSS0.P0.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS0.P0.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S2.SS1.SSS0.P0.SPx4.p1" class="ltx_para">
<p class="ltx_p">See the following three sections.</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS1" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Linear Elements</h5>
<section id="Ch3.S2.SS1.SSS1.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S2.SS1.SSS1.Px1.p1" class="ltx_para">
<p class="ltx_p">Each linear single element has a name, type, inverse bending radius,
focusing and a nonzero length.</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS1.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS1.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type <math id="Ch3.S2.SS1.SSS1.Px2.p1.m1" class="ltx_Math" alttext="\varrho^{-1}" display="inline"><msup><mi>ϱ</mi><mrow><mo mathvariant="normal">-</mo><mn mathvariant="normal">1</mn></mrow></msup></math> K length</span></p>
</div>
<div id="Ch3.S2.SS1.SSS1.Px2.p2" class="ltx_para">
<dl id="Ch3.I2" class="ltx_description">
<dt id="Ch3.I2.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I2.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I2.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I2.ix2.p1" class="ltx_para">
<p class="ltx_p">As shown in the table <a href="#Ch3.T2" title="Table 3.2 ‣ Format ‣ Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a></p>
</div>
</dd>
<dt id="Ch3.I2.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I2.ix3.m1" class="ltx_Math" alttext="\varrho^{-1}" display="inline"><msup><mi>ϱ</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I2.ix3.p1" class="ltx_para">
<p class="ltx_p">Inverse bending radius in <math id="Ch3.I2.ix3.p1.m1" class="ltx_Math" alttext="\mathrm{m}^{-1}" display="inline"><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math></p>
</div>
</dd>
<dt id="Ch3.I2.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">K</span></dt>
<dd class="ltx_item">
<div id="Ch3.I2.ix4.p1" class="ltx_para">
<p class="ltx_p">Focusing strength in <math id="Ch3.I2.ix4.p1.m1" class="ltx_Math" alttext="\mathrm{m}^{-2}" display="inline"><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>2</mn></mrow></msup></math></p>
</div>
</dd>
<dt id="Ch3.I2.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I2.ix5.p1" class="ltx_para">
<p class="ltx_p">Magnet length in meters</p>
</div>
</dd>
</dl>
</div>
<figure id="Ch3.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.2: </span>Different Types of Linear Elements</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">type</span>
                    </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                      <math id="Ch3.T2.m1" class="ltx_Math" alttext="\varrho^{-1}" display="inline"><msup><mi>ϱ</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></math>
                    </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                      <math id="Ch3.T2.m2" class="ltx_Math" alttext="K" display="inline"><mi>K</mi></math>
                    </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">description</span>
                    </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="font-size:70%;">drift length magnet</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">1</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">horizontal (rectangular) bending</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">2</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">quadrupole (– focusing, + defocusing)</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">3</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">horizontal (sector) bending</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">4</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">vertical (rectangular) bending</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">5</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">vertical (sector) bending</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">6</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">horizontal combined function magnet</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">7</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">vertical combined function magnet</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">8</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">X</span>
                    </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">
                      <span class="ltx_text" style="font-size:70%;">edge focusing</span>
                    </td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S2.SS1.SSS1.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remarks</h6>
<div id="Ch3.S2.SS1.SSS1.Px3.p1" class="ltx_para">
<ol id="Ch3.I3" class="ltx_enumerate">
<li id="Ch3.I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I3.i1.p1" class="ltx_para">
<p class="ltx_p">For the horizontal plane the bending radius is defined to be
negative (<math id="Ch3.I3.i1.p1.m1" class="ltx_Math" alttext="\varrho&lt;0" display="inline"><mrow><mi>ϱ</mi><mo>&lt;</mo><mn>0</mn></mrow></math>). This is different from other
programs like MAD <cite class="ltx_cite">[<a href="#bib.bib22" title="" class="ltx_ref">22</a>]</cite>.</p>
</div>
</li>
<li id="Ch3.I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I3.i2.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I3.i2.p1.m1" class="ltx_Math" alttext="K&lt;0" display="inline"><mrow><mi>K</mi><mo>&lt;</mo><mn>0</mn></mrow></math> corresponds to a horizontal focusing quadrupole.</p>
</div>
</li>
<li id="Ch3.I3.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I3.i3.p1" class="ltx_para">
<p class="ltx_p">For the length of an edge focusing element (type=8) the same
value must be used as for the corresponding bending magnet. A sector
bending magnet is transformed into a rectangular magnet with an edge
focusing element of positive length on either side, while for the
opposite transformation a negative length is required.</p>
</div>
</li>
<li id="Ch3.I3.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I3.i4.p1" class="ltx_para">
<p class="ltx_p">It is important to note that the splitting of a rectangular
magnet, which is sometimes necessary if multipole errors are to be
introduced, does change the linear optics. It is therefore
advisable to replace the rectangular magnet with a sector magnet,
which can be split without affecting the linear optics, and make an
overall transformation into a rectangular magnet via edge focusing
elements. Do not forget to use the total length of dipole as the
length of the edge focusing element.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS2" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Nonlinear Elements</h5>
<section id="Ch3.S2.SS1.SSS2.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS2.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type <math id="Ch3.S2.SS1.SSS2.Px1.p1.m1" class="ltx_Math" alttext="K_{n}" display="inline"><msub><mi>K</mi><mi>n</mi></msub></math>–strength r.m.s.–strength
length </span></p>
<dl id="Ch3.I4" class="ltx_description">
<dt id="Ch3.I4.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I4.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I4.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I4.ix2.p1" class="ltx_para">
<p class="ltx_p">As shown in table <a href="#Ch3.T3" title="Table 3.3 ‣ Format ‣ Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3</span></a></p>
</div>
</dd>
<dt id="Ch3.I4.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description"><math id="Ch3.I4.ix3.m1" class="ltx_Math" alttext="K_{n}" display="inline"><msub><mi>K</mi><mi>n</mi></msub></math>–strength</span></dt>
<dd class="ltx_item">
<div id="Ch3.I4.ix3.p1" class="ltx_para">
<p class="ltx_p">Average multipole strength</p>
</div>
</dd>
<dt id="Ch3.I4.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">r.m.s.–strength</span></dt>
<dd class="ltx_item">
<div id="Ch3.I4.ix4.p1" class="ltx_para">
<p class="ltx_p">Random multipole strength</p>
</div>
</dd>
<dt id="Ch3.I4.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I4.ix5.p1" class="ltx_para">
<p class="ltx_p">Must be = 0</p>
</div>
</dd>
</dl>
</div>
<figure id="Ch3.T3" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.3: </span>Different Types of Nonlinear Elements</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">type</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">strength</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">description</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">0</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">–</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">observation point (for
instance</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r">for aperture limitations)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">1</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <math id="Ch3.T3.m1" class="ltx_Math" alttext="b_{1}[\mathrm{rad}\cdot\mathrm{m}^{0}]" display="inline"><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM1"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mn>0</mn></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">horizontal bending kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r">–1</td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <math id="Ch3.T3.m2" class="ltx_Math" alttext="a_{1}" display="inline"><msub><mi>a</mi><mn>1</mn></msub></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">vertical bending kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">2</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <math id="Ch3.T3.m3" class="ltx_Math" alttext="b_{2}[\mathrm{rad}\cdot\mathrm{m}^{-1}]" display="inline"><mrow><msub><mi>b</mi><mn>2</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM2"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>1</mn></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">normal quadrupole kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r">–2</td>
<td class="ltx_td ltx_align_left ltx_border_r">
                      <math id="Ch3.T3.m4" class="ltx_Math" alttext="a_{2}" display="inline"><msub><mi>a</mi><mn>2</mn></msub></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r">skew quadrupole kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">⋮</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">10</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <math id="Ch3.T3.m5" class="ltx_Math" alttext="b_{10}[\mathrm{rad}\cdot\mathrm{m}^{-9}]" display="inline"><mrow><msub><mi>b</mi><mn>10</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM3"><mi>rad</mi><mo>⋅</mo><msup><mi mathvariant="normal">m</mi><mrow><mo>-</mo><mn>9</mn></mrow></msup></mrow><mo stretchy="false">]</mo></mrow></mrow></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">normal <math id="Ch3.T3.m6" class="ltx_Math" alttext="20^{th}" display="inline"><msup><mn>20</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math> pole</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r">–10</td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">
                      <math id="Ch3.T3.m7" class="ltx_Math" alttext="a_{10}" display="inline"><msub><mi>a</mi><mn>10</mn></msub></math>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">skew <math id="Ch3.T3.m8" class="ltx_Math" alttext="20^{th}" display="inline"><msup><mn>20</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math> pole</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S2.SS1.SSS2.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remarks</h6>
<div id="Ch3.S2.SS1.SSS2.Px2.p1" class="ltx_para">
<ol id="Ch3.I5" class="ltx_enumerate">
<li id="Ch3.I5.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I5.i1.p1" class="ltx_para">
<p class="ltx_p">Because the horizontal bending magnet is defined to have a
negative bending radius, the sign for normal elements is different
from other programs like MAD, while skew elements have the same
sign.</p>
</div>
</li>
<li id="Ch3.I5.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I5.i2.p1" class="ltx_para">
<p class="ltx_p">Again contrary to other programs the factor <math id="Ch3.I5.i2.p1.m1" class="ltx_Math" alttext="(n-1)" display="inline"><mrow><mo stretchy="false">(</mo><mrow id="XM4"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></math>! is
already included in the multipole strength, which is defined as
follows:</p>
<ul id="Ch3.I5.I1" class="ltx_itemize">
<li id="Ch3.I5.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                          <span class="ltx_text ltx_font_bold">–</span>
                        </span>
<div id="Ch3.I5.I1.i1.p1" class="ltx_para">
<p class="ltx_p">for normal elements <math id="Ch3.I5.I1.i1.p1.m1" class="ltx_Math" alttext="b_{n}(\mathrm{SixTrack})=\frac{-1}{(n-1)!}L_{element}b_{n}(\mathrm{MAD})" display="inline"><mrow><mrow><msub><mi>b</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM6">SixTrack</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mfrac><mrow><mo>-</mo><mn>1</mn></mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM5"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac><mo>⁢</mo><msub><mi>L</mi><mrow><mi>e</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>m</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mi>t</mi></mrow></msub><mo>⁢</mo><msub><mi>b</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM7">MAD</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</li>
<li id="Ch3.I5.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                          <span class="ltx_text ltx_font_bold">–</span>
                        </span>
<div id="Ch3.I5.I1.i2.p1" class="ltx_para">
<p class="ltx_p">for skew elements <math id="Ch3.I5.I1.i2.p1.m1" class="ltx_Math" alttext="a_{n}(\mathrm{SixTrack})=\frac{1}{(n-1)!}L_{element}a_{n}(\mathrm{MAD})" display="inline"><mrow><mrow><msub><mi>a</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM9">SixTrack</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mfrac><mn>1</mn><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM8"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac><mo>⁢</mo><msub><mi>L</mi><mrow><mi>e</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>m</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mi>t</mi></mrow></msub><mo>⁢</mo><msub><mi>a</mi><mi>n</mi></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM10">MAD</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</li>
</ul>
</div>
</li>
<li id="Ch3.I5.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I5.i3.p1" class="ltx_para">
<p class="ltx_p">Unlike in RACETRACK, the horizontal and vertical displacements
do not fit into the 80 character input lines of SixTrack. They
have to be introduced in a separate <span class="ltx_text ltx_font_italic">Displacements of Elements</span>
input block (see <a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>).</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS3" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Multipole Blocks</h5>
<section id="Ch3.S2.SS1.SSS3.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S2.SS1.SSS3.Px1.p1" class="ltx_para">
<p class="ltx_p">A set of normal, normal–r.m.s., skew and skew–r.m.s. errors can be
combined effectively. The actual values for the strengths have to be
given in a separate <span class="ltx_text ltx_font_italic">Multipole Coefficient</span> input block
(see <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>) which must have the same name. To consider the
curvature of dipoles which are replaced by drifts and dipole kicks
this block is used in two different ways.</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS3.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS3.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type cstr cref length</span></p>
</div>
<div id="Ch3.S2.SS1.SSS3.Px2.p2" class="ltx_para">
<ul id="Ch3.I6" class="ltx_itemize">
<li id="Ch3.I6.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I6.i1.p1" class="ltx_para">
<p class="ltx_p">Marker for high order kick (default)</p>
<dl id="Ch3.I6.I1" class="ltx_description">
<dt id="Ch3.I6.I1.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I1.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I6.I1.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I1.ix2.p1" class="ltx_para">
<p class="ltx_p">Must be = 11</p>
</div>
</dd>
<dt id="Ch3.I6.I1.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">cstr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I1.ix3.p1" class="ltx_para">
<p class="ltx_p">The bending strength given in the <span class="ltx_text ltx_font_italic">Multipole
Coefficient</span> input block ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>) is multiplied with this
factor.</p>
</div>
</dd>
<dt id="Ch3.I6.I1.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">cref</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I1.ix4.p1" class="ltx_para">
<p class="ltx_p">The reference radius given in the <span class="ltx_text ltx_font_italic">Multipole
Coefficient</span> input block ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>) will be multiplied by
this factor. If it is zero the multipole block will be ignored.</p>
</div>
</dd>
<dt id="Ch3.I6.I1.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I1.ix5.p1" class="ltx_para">
<p class="ltx_p">Must be = 0</p>
</div>
</dd>
</dl>
</div>
</li>
<li id="Ch3.I6.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I6.i2.p1" class="ltx_para">
<p class="ltx_p">Default + dipole curvature</p>
<dl id="Ch3.I6.I2" class="ltx_description">
<dt id="Ch3.I6.I2.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I2.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I6.I2.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I2.ix2.p1" class="ltx_para">
<p class="ltx_p">Must be = 11</p>
</div>
</dd>
<dt id="Ch3.I6.I2.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">cstr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I2.ix3.p1" class="ltx_para">
<p class="ltx_p">The bending strength [rad] of horizontal or vertical
dipole.
<br class="ltx_break">Internally the value is set to one to allow the
processing of a multipole block ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I6.I2.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">cref</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I2.ix4.p1" class="ltx_para">
<p class="ltx_p">The length [m] of the dipole that is approximated by a
kick. Internally this value is set to one to allow the processing
of a multipole block ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I6.I2.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I6.I2.ix5.p1" class="ltx_para">
<ul id="Ch3.I6.I2.I1" class="ltx_itemize">
<li id="Ch3.I6.I2.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                                <span class="ltx_text ltx_font_bold">*</span>
                              </span>
<div id="Ch3.I6.I2.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">length = -1</span> : horizontal dipole</p>
</div>
</li>
<li id="Ch3.I6.I2.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                                <span class="ltx_text ltx_font_bold">*</span>
                              </span>
<div id="Ch3.I6.I2.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">length = -2</span> : vertical dipole</p>
</div>
</li>
</ul>
</div>
</dd>
</dl>
</div>
</li>
</ul>
</div>
</section>
<section id="Ch3.S2.SS1.SSS3.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS3.Px3.p1" class="ltx_para">
<p class="ltx_p">The definition of the multipole strength in a block will be given in
( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>).</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS4" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Cavities</h5>
<section id="Ch3.S2.SS1.SSS4.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS4.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type u0 harm lag</span></p>
<dl id="Ch3.I7" class="ltx_description">
<dt id="Ch3.I7.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I7.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I7.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I7.ix2.p1" class="ltx_para">
<p class="ltx_p">Type identifier is <math id="Ch3.I7.ix2.p1.m1" class="ltx_Math" alttext="+12" display="inline"><mrow><mo>+</mo><mn>12</mn></mrow></math> and <math id="Ch3.I7.ix2.p1.m2" class="ltx_Math" alttext="-12" display="inline"><mrow><mo>-</mo><mn>12</mn></mrow></math> for above and below
transition energy respectively.</p>
</div>
</dd>
<dt id="Ch3.I7.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">u0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I7.ix3.p1" class="ltx_para">
<p class="ltx_p">Circumference voltage in [MV]</p>
</div>
</dd>
<dt id="Ch3.I7.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">harm</span></dt>
<dd class="ltx_item">
<div id="Ch3.I7.ix4.p1" class="ltx_para">
<p class="ltx_p">Harmonic number
</p>
</div>
</dd>
<dt id="Ch3.I7.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">lag</span></dt>
<dd class="ltx_item">
<div id="Ch3.I7.ix5.p1" class="ltx_para">
<p class="ltx_p">Lag angle [degrees] in the cavity (zero is default)</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS5" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Beam–Beam Lens</h5>
<div id="Ch3.S2.SS1.SSS5.p1" class="ltx_para">
<p class="ltx_p">Depending on the setting in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block of <span class="ltx_text ltx_font_typewriter">fort.3</span> (Section <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>), there are two ways to define a beam beam lens in the SINGLE ELEMENTS list.</p>
</div>
<section id="Ch3.S2.SS1.SSS5.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">When the <span class="ltx_text ltx_font_typewriter">EXPERT</span> flag is set in the <span class="ltx_text ltx_font_typewriter">BEAM</span> block,</h6>
<div id="Ch3.S2.SS1.SSS5.Px1.p1" class="ltx_para">
<p class="ltx_p">the parameters of the beam–beam lens is defined there.
In this case, only the element name and type and the location within the lattice remian in the <span class="ltx_text ltx_font_typewriter">fort.2</span> element definition.</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS5.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS5.Px2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type</span></p>
<dl id="Ch3.I8" class="ltx_description">
<dt id="Ch3.I8.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I8.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I8.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I8.ix2.p1" class="ltx_para">
<p class="ltx_p">20</p>
</div>
</dd>
</dl>
<p class="ltx_p">The rest of the parameters are ignored and should be set to zero.</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS5.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">When the <span class="ltx_text ltx_font_typewriter">EXPERT</span> flag is not set,</h6>
<div id="Ch3.S2.SS1.SSS5.Px3.p1" class="ltx_para">
<p class="ltx_p">the “traditional” format is used:</p>
</div>
</section>
<section id="Ch3.S2.SS1.SSS5.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS5.Px4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type h-sep v-sep strength-ratio <math id="Ch3.S2.SS1.SSS5.Px4.p1.m1" class="ltx_Math" alttext="{\sigma\_\rm{hor}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="italic">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="italic">⁢</mo><msup><mi mathvariant="normal">hor</mi><mn mathvariant="normal">2</mn></msup></mrow></math> <math id="Ch3.S2.SS1.SSS5.Px4.p1.m2" class="ltx_Math" alttext="{\sigma\_\rm{ver}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="italic">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="italic">⁢</mo><msup><mi mathvariant="normal">ver</mi><mn mathvariant="normal">2</mn></msup></mrow></math> <math id="Ch3.S2.SS1.SSS5.Px4.p1.m3" class="ltx_Math" alttext="{\sigma\_\rm{lon}}^{2}" display="inline"><mrow><mi>σ</mi><mo mathvariant="italic">⁢</mo><mi mathvariant="normal">_</mi><mo mathvariant="italic">⁢</mo><msup><mi mathvariant="normal">lon</mi><mn mathvariant="normal">2</mn></msup></mrow></math></span></p>
<dl id="Ch3.I9" class="ltx_description">
<dt id="Ch3.I9.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I9.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix2.p1" class="ltx_para">
<p class="ltx_p">20</p>
</div>
</dd>
<dt id="Ch3.I9.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">h-sep</span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix3.p1" class="ltx_para">
<p class="ltx_p">Horizontal beam–beam separation [mm]</p>
</div>
</dd>
<dt id="Ch3.I9.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">v-sep</span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix4.p1" class="ltx_para">
<p class="ltx_p">Vertical beam–beam separation [mm]</p>
</div>
</dd>
<dt id="Ch3.I9.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">strength-ratio</span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix5.p1" class="ltx_para">
<p class="ltx_p">Strength ratio with respect to the nominal
beam–beam kick strength. This is useful, in particular for 4D, to
allow for splitting one beam–beam kick into several (longitudinally
close by) kicks.</p>
</div>
</dd>
<dt id="Ch3.I9.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I9.ix6.m1" class="ltx_Math" alttext="{\sigma\_\rm{hor}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>hor</mi><mn>2</mn></msup></mrow></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix6.p1" class="ltx_para">
<p class="ltx_p">when the flag <math id="Ch3.I9.ix6.p1.m1" class="ltx_Math" alttext="lhc=2" display="inline"><mrow><mrow><mi>l</mi><mo>⁢</mo><mi>h</mi><mo>⁢</mo><mi>c</mi></mrow><mo>=</mo><mn>2</mn></mrow></math> is set in the BEAM block of the fort.3 file, this column represent the horizontal <math id="Ch3.I9.ix6.p1.m2" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.I9.ix6.p1.m3" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM11"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I9.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I9.ix7.m1" class="ltx_Math" alttext="{\sigma\_\rm{ver}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>ver</mi><mn>2</mn></msup></mrow></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix7.p1" class="ltx_para">
<p class="ltx_p">when the flag <math id="Ch3.I9.ix7.p1.m1" class="ltx_Math" alttext="lhc=2" display="inline"><mrow><mrow><mi>l</mi><mo>⁢</mo><mi>h</mi><mo>⁢</mo><mi>c</mi></mrow><mo>=</mo><mn>2</mn></mrow></math> is set in the BEAM block of the fort.3 file, this column represent the vertical <math id="Ch3.I9.ix7.p1.m2" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.I9.ix7.p1.m3" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM12"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I9.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I9.ix8.m1" class="ltx_Math" alttext="{\sigma\_\rm{lon}}^{2}" display="inline"><mrow><mi>σ</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><msup><mi>lon</mi><mn>2</mn></msup></mrow></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I9.ix8.p1" class="ltx_para">
<p class="ltx_p">this variable is for future purposes, at the present it is always equal to zero.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS5.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS5.Px5.p1" class="ltx_para">
<p class="ltx_p">These beam–beam elements become active when the “Beam–Beam” input block <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a> is used.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS6" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Wire</h5>
<section id="Ch3.S2.SS1.SSS6.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS6.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type</span></p>
<dl id="Ch3.I10" class="ltx_description">
<dt id="Ch3.I10.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I10.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I10.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I10.ix2.p1" class="ltx_para">
<p class="ltx_p">15</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS6.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS6.Px2.p1" class="ltx_para">
<p class="ltx_p">The “wire” elements become active when the
WIRE input block <a href="#Ch3.S3.SS6" title="3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.6</span></a> is used. All parameters except name and type have to be set to zero, otherwise SixTrack aborts. The parameters for the wire are defined in the WIRE input block.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS7" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">“Phase–trombone” or matrix element</h5>
<section id="Ch3.S2.SS1.SSS7.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS7.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type</span></p>
<dl id="Ch3.I11" class="ltx_description">
<dt id="Ch3.I11.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I11.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters
</p>
</div>
</dd>
<dt id="Ch3.I11.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I11.ix2.p1" class="ltx_para">
<p class="ltx_p">22</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS7.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS7.Px2.p1" class="ltx_para">
<p class="ltx_p">These “trombone” elements become active when the
“Phase Trombone Element” input block <a href="#Ch3.S3.SS7" title="3.3.7 “Phase Trombone” Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.7</span></a> is used.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS8" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">AC dipole</h5>
<section id="Ch3.S2.SS1.SSS8.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS8.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type ACdipAmp Qd ACdipPhase</span></p>
<dl id="Ch3.I12" class="ltx_description">
<dt id="Ch3.I12.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I12.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I12.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I12.ix2.p1" class="ltx_para">
<p class="ltx_p">Type identifier is <math id="Ch3.I12.ix2.p1.m1" class="ltx_Math" alttext="+16" display="inline"><mrow><mo>+</mo><mn>16</mn></mrow></math> and <math id="Ch3.I12.ix2.p1.m2" class="ltx_Math" alttext="-16" display="inline"><mrow><mo>-</mo><mn>16</mn></mrow></math> for horizontal and vertical
AC dipoles respectively.</p>
</div>
</dd>
<dt id="Ch3.I12.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ACdipAmp</span></dt>
<dd class="ltx_item">
<div id="Ch3.I12.ix3.p1" class="ltx_para">
<p class="ltx_p">Maximum excitation amplitude [Tm].</p>
</div>
</dd>
<dt id="Ch3.I12.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qd</span></dt>
<dd class="ltx_item">
<div id="Ch3.I12.ix4.p1" class="ltx_para">
<p class="ltx_p">Excitation frequency in units of [<math id="Ch3.I12.ix4.p1.m1" class="ltx_Math" alttext="2\times\pi" display="inline"><mrow><mn>2</mn><mo>×</mo><mi>π</mi></mrow></math>].</p>
</div>
</dd>
<dt id="Ch3.I12.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">ACdipPhase</span></dt>
<dd class="ltx_item">
<div id="Ch3.I12.ix5.p1" class="ltx_para">
<p class="ltx_p">Phase of the harmonic excitation in radians.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS8.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS8.Px2.p1" class="ltx_para">
<p class="ltx_p">The length of the ramps and the flat top are specified in the
“Displacement” block <a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>. The energy introduced in the
“Initial coordinates” block <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a> is used to compute the
deflection angle.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS9" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Dipole edge</h5>
<section id="Ch3.S2.SS1.SSS9.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS9.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type <math id="Ch3.S2.SS1.SSS9.Px1.p1.m1" class="ltx_Math" alttext="r_{21}" display="inline"><msub><mi>r</mi><mn mathvariant="normal">21</mn></msub></math> <math id="Ch3.S2.SS1.SSS9.Px1.p1.m2" class="ltx_Math" alttext="r_{43}" display="inline"><msub><mi>r</mi><mn mathvariant="normal">43</mn></msub></math></span></p>
<dl id="Ch3.I13" class="ltx_description">
<dt id="Ch3.I13.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I13.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I13.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I13.ix2.p1" class="ltx_para">
<p class="ltx_p">Type identifier <math id="Ch3.I13.ix2.p1.m1" class="ltx_Math" alttext="24" display="inline"><mn>24</mn></math></p>
</div>
</dd>
<dt id="Ch3.I13.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I13.ix3.m1" class="ltx_Math" alttext="r_{21}" display="inline"><msub><mi>r</mi><mn>21</mn></msub></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I13.ix3.p1" class="ltx_para">
<p class="ltx_p">Horizontal edge focusing.</p>
</div>
</dd>
<dt id="Ch3.I13.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I13.ix4.m1" class="ltx_Math" alttext="r_{43}" display="inline"><msub><mi>r</mi><mn>43</mn></msub></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I13.ix4.p1" class="ltx_para">
<p class="ltx_p">Vertical edge focusing.</p>
</div>
<section id="Ch3.S2.SS1.SSS9.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS9.Px2.p1" class="ltx_para">
<p class="ltx_p">MAD-X is outputting the correct format when using the dipedge element. An example of the hard edge model is described in the physics guide <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>, which gives <math id="Ch3.S2.SS1.SSS9.Px2.p1.m1" class="ltx_Math" alttext="r_{21}=-r_{43}" display="inline"><mrow><msub><mi>r</mi><mn>21</mn></msub><mo>=</mo><mrow><mo>-</mo><msub><mi>r</mi><mn>43</mn></msub></mrow></mrow></math>. Note that the values of the vertical edge focusing is dependent on the modeling of the fringe fields <cite class="ltx_cite">[<a href="#bib.bib23" title="" class="ltx_ref">23</a>]</cite>. A particle with position <math id="Ch3.S2.SS1.SSS9.Px2.p1.m2" class="ltx_Math" alttext="x_{1},y_{1}" display="inline"><mrow><msub id="XM13"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM14"><mi>y</mi><mn>1</mn></msub></mrow></math> and angle <math id="Ch3.S2.SS1.SSS9.Px2.p1.m3" class="ltx_Math" alttext="x^{\prime}_{1},y^{\prime}_{1}" display="inline"><mrow><msubsup id="XM15"><mi>x</mi><mn>1</mn><mo>′</mo></msubsup><mo>,</mo><msubsup id="XM16"><mi>y</mi><mn>1</mn><mo>′</mo></msubsup></mrow></math> will have the angle <math id="Ch3.S2.SS1.SSS9.Px2.p1.m4" class="ltx_Math" alttext="x^{\prime}_{2},y^{\prime}_{2}" display="inline"><mrow><msubsup id="XM17"><mi>x</mi><mn>2</mn><mo>′</mo></msubsup><mo>,</mo><msubsup id="XM18"><mi>y</mi><mn>2</mn><mo>′</mo></msubsup></mrow></math> after passing through the dipedge element. The following equations describe their relation:</p>
<table id="A5.S3.EGx1" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.E1" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                <math id="Ch3.E1.m1" class="ltx_Math" alttext="\displaystyle x^{\prime}_{2}=x^{\prime}_{1}+x_{1}\frac{r_{21}}{1+\delta}" display="inline"><mrow><msubsup><mi>x</mi><mn>2</mn><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mn>1</mn><mo>′</mo></msubsup><mo>+</mo><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mn>21</mn></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.1)</span></td>
</tr>
<tr id="Ch3.E2" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                <math id="Ch3.E2.m1" class="ltx_Math" alttext="\displaystyle y^{\prime}_{2}=y^{\prime}_{1}+y_{1}\frac{r_{43}}{1+\delta}" display="inline"><mrow><msubsup><mi>y</mi><mn>2</mn><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mn>1</mn><mo>′</mo></msubsup><mo>+</mo><mrow><msub><mi>y</mi><mn>1</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msub><mi>r</mi><mn>43</mn></msub><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle></mrow></mrow></mrow></math>
                              </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.2)</span></td>
</tr>
</table>
</div>
</section>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS10" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Crab Cavity</h5>
<section id="Ch3.S2.SS1.SSS10.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS10.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type Voltage Frequency Phase</span></p>
<dl id="Ch3.I14" class="ltx_description">
<dt id="Ch3.I14.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I14.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I14.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I14.ix2.p1" class="ltx_para">
<p class="ltx_p">Type identifier is <math id="Ch3.I14.ix2.p1.m1" class="ltx_Math" alttext="+23" display="inline"><mrow><mo>+</mo><mn>23</mn></mrow></math> and <math id="Ch3.I14.ix2.p1.m2" class="ltx_Math" alttext="-23" display="inline"><mrow><mo>-</mo><mn>23</mn></mrow></math> for horizontal and vertical
crab cavities respectively.</p>
</div>
</dd>
<dt id="Ch3.I14.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">Voltage</span></dt>
<dd class="ltx_item">
<div id="Ch3.I14.ix3.p1" class="ltx_para">
<p class="ltx_p">Crab Cavity voltage [MV].</p>
</div>
</dd>
<dt id="Ch3.I14.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">Frequency</span></dt>
<dd class="ltx_item">
<div id="Ch3.I14.ix4.p1" class="ltx_para">
<p class="ltx_p">Crab Cavity frequency [MHz].</p>
</div>
</dd>
<dt id="Ch3.I14.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">Phase</span></dt>
<dd class="ltx_item">
<div id="Ch3.I14.ix5.p1" class="ltx_para">
<p class="ltx_p">Phase of the excitation in radians.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS10.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark – How to use the crab cavity from MadX (using rfmultipole) to SixTrack:</h6>
<div id="Ch3.S2.SS1.SSS10.Px2.p1" class="ltx_para">
<br class="ltx_break">
<p class="ltx_p">In the Mad-X script write:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">MULT.1, FREQ=&lt;freq in MHz&gt;., KNL=</span>{<span class="ltx_text ltx_font_typewriter">V [MV]/E0[MeV]</span>}<span class="ltx_text ltx_font_typewriter">, PNL=</span>{<span class="ltx_text ltx_font_typewriter">phase</span>}<span class="ltx_text ltx_font_typewriter">, TILT=&lt;H: 0; V:PI/2.&gt;;
<br class="ltx_break"></span>where phase is 0.25 (phase for multipoles in SixTrack).
As an example, to have the effect of a vertical Crab Cavity of <math id="Ch3.S2.SS1.SSS10.Px2.p1.m1" class="ltx_Math" alttext="f=400~{}\mathrm{MHz}" display="inline"><mrow><mi>f</mi><mo>=</mo><mrow><mpadded width="+3.3pt"><mn>400</mn></mpadded><mo>⁢</mo><mi>MHz</mi></mrow></mrow></math>, <math id="Ch3.S2.SS1.SSS10.Px2.p1.m2" class="ltx_Math" alttext="V=6~{}\mathrm{MV}" display="inline"><mrow><mi>V</mi><mo>=</mo><mrow><mpadded width="+3.3pt"><mn>6</mn></mpadded><mo>⁢</mo><mi>MV</mi></mrow></mrow></math>, beam energy [MeV]: <span class="ltx_text ltx_font_typewriter">BEAM -&gt; PC/1e3</span>, use the following line:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">MULT.1, FREQ=400., KNL=6./BEAM -&gt; PC/1e3, PNL=0.25, TILT=PI/2.;
<br class="ltx_break"></span>This creates the following line in fort.2:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">mult.1d -23 6.000000000e+00 4.000000000e+02
<br class="ltx_break"><span class="ltx_text ltx_font_italic">(cont.)</span> 0.000000000e+00 0.000000000e+00 0.000000000e+00 0.000000000e+00
<br class="ltx_break"></span>If you donât want to have a vertical Crab Cavity then just remove the TILT, and if you donât want to have CC but a simple dipole field then remove the FREQ parameter.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS11" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">RF multipole</h5>
<div id="Ch3.S2.SS1.SSS11.p1" class="ltx_para">
<p class="ltx_p">Provides a kick in the form of</p>
<table id="A5.S3.EGx2" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch3.E3" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                      <math id="Ch3.E3.m1" class="ltx_Math" alttext="\displaystyle\Delta x^{\prime}+i\Delta y^{\prime}=" display="inline"><mrow><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></mrow><mo>=</mo><mi></mi></mrow></math>
                    </td>
<td class="ltx_td ltx_align_left">
                      <math id="Ch3.E3.m2" class="ltx_Math" alttext="\displaystyle\frac{k}{1+\delta}(x+iy)^{n}\cos(\phi-2\pi ft)" display="inline"><mrow><mstyle displaystyle="true"><mfrac><mi>k</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><msup><mrow><mo stretchy="false">(</mo><mrow id="XM22"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mi>n</mi></msup><mo>⁢</mo><mrow><mi id="XM23">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM24"><mi>ϕ</mi><mo>-</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mi>t</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                    </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.3)</span></td>
</tr>
<tr id="Ch3.E4" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                      <math id="Ch3.E4.m1" class="ltx_Math" alttext="\displaystyle\Delta\delta=" display="inline"><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>δ</mi></mrow><mo>=</mo><mi></mi></mrow></math>
                    </td>
<td class="ltx_td ltx_align_left">
                      <math id="Ch3.E4.m2" class="ltx_Math" alttext="\displaystyle P_{0}\frac{k}{1+\delta}\frac{(x+iy)^{n+1}}{(n+1)!}\cos(\phi-2\pi
ft)" display="inline"><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mi>k</mi><mrow><mn>1</mn><mo>+</mo><mi>δ</mi></mrow></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM29"><mi>x</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo stretchy="false">)</mo></mrow><mrow><mi>n</mi><mo>+</mo><mn>1</mn></mrow></msup><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM30"><mi>n</mi><mo>+</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM31">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM32"><mi>ϕ</mi><mo>-</mo><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mi>f</mi><mo>⁢</mo><mi>t</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>
                    </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.4)</span></td>
</tr>
</table>
</div>
<section id="Ch3.S2.SS1.SSS11.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS11.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type name kick frequency phase</span></p>
<dl id="Ch3.I15" class="ltx_description">
<dt id="Ch3.I15.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I15.ix1.p1" class="ltx_para">
<p class="ltx_p">Limited to sixteen characters.</p>
</div>
</dd>
<dt id="Ch3.I15.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I15.ix2.p1" class="ltx_para">
<p class="ltx_p">26: normal quadrupole , -26 skew quadrupole,
27: normal sextupole, -27 skew sextupole,
28: normal octupole, -28 skew octupole;</p>
</div>
</dd>
<dt id="Ch3.I15.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">kick</span></dt>
<dd class="ltx_item">
<div id="Ch3.I15.ix3.p1" class="ltx_para">
<p class="ltx_p">maximum normalized kick <math id="Ch3.I15.ix3.p1.m1" class="ltx_Math" alttext="k" display="inline"><mi>k</mi></math></p>
</div>
</dd>
<dt id="Ch3.I15.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">frequency</span></dt>
<dd class="ltx_item">
<div id="Ch3.I15.ix4.p1" class="ltx_para">
<p class="ltx_p">frequency <math id="Ch3.I15.ix4.p1.m1" class="ltx_Math" alttext="f" display="inline"><mi>f</mi></math> in [MHz]</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS11.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS11.Px2.p1" class="ltx_para">
<p class="ltx_p">How to use the RF multipoles (from MadX to SixTrack):</p>
<ul id="Ch3.I16" class="ltx_itemize">
<li id="Ch3.I16.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I16.i1.p1" class="ltx_para">
<p class="ltx_p">2<sup class="ltx_sup">nd</sup> order multipole (quadrupole):
<br class="ltx_break">In the Mad-X script write:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">MULT.1, KNL=</span>{<span class="ltx_text ltx_font_typewriter">0,-0.06*1e-3</span>}<span class="ltx_text ltx_font_typewriter">, PNL=</span>{<span class="ltx_text ltx_font_typewriter">0, 0.25</span>}<span class="ltx_text ltx_font_typewriter">;
<br class="ltx_break"></span>where <span class="ltx_text ltx_font_typewriter">-0.06*1e-3</span> is the <math id="Ch3.I16.i1.p1.m1" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math> value in units of <math id="Ch3.I16.i1.p1.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in <span class="ltx_text ltx_font_typewriter">fort.2</span>:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">mult.1q 26 6.000000000e-05 400.000000000e+00 -1.570796327e+00
<br class="ltx_break"><span class="ltx_text ltx_font_italic">(cont.)</span> 0.000000000e+00 0.000000000e+00 0.000000000e+00</span></p>
</div>
</li>
<li id="Ch3.I16.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I16.i2.p1" class="ltx_para">
<p class="ltx_p">3<sup class="ltx_sup">rd</sup> order multipole (sextupole):
<br class="ltx_break">In the Mad-X script write:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">MULT.1, FREQ=400., KNL=</span>{<span class="ltx_text ltx_font_typewriter">0,0,1159.*1e-3</span>}<span class="ltx_text ltx_font_typewriter">, PNL=</span>{<span class="ltx_text ltx_font_typewriter">0,0,0.25</span>}<span class="ltx_text ltx_font_typewriter">;
<br class="ltx_break"></span>where <span class="ltx_text ltx_font_typewriter">1159.*1e-3</span> is the <math id="Ch3.I16.i2.p1.m1" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math> value in units of <math id="Ch3.I16.i2.p1.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in fort.2:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">mult.1s 27 -5.795000000e-01 4.000000000e+02 -1.570796327e+00
<br class="ltx_break"><span class="ltx_text ltx_font_italic">(cont.)</span> 0.000000000e+00 0.000000000e+00 0.000000000e+00</span></p>
</div>
</li>
<li id="Ch3.I16.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I16.i3.p1" class="ltx_para">
<p class="ltx_p">4<sup class="ltx_sup">th</sup> order multipole (octupole):
<br class="ltx_break">In the Mad-X script write:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">MULT.1, FREQ=400., KNL=</span>{<span class="ltx_text ltx_font_typewriter">0,0,0,-4.*1e-3</span>}<span class="ltx_text ltx_font_typewriter">, PNL=</span>{<span class="ltx_text ltx_font_typewriter">0,0,0,0.25</span>}<span class="ltx_text ltx_font_typewriter">;
<br class="ltx_break"></span>where <span class="ltx_text ltx_font_typewriter">-4.*1e-3</span> is the <math id="Ch3.I16.i3.p1.m1" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math> value in units of <math id="Ch3.I16.i3.p1.m2" class="ltx_Math" alttext="\mathrm{Tm/m}^{n-1}" display="inline"><mrow><mi>Tm</mi><mo>/</mo><msup><mi mathvariant="normal">m</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msup></mrow></math>.
<br class="ltx_break">This gives the following single element in fort.2:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">mult.1o 28 6.666666667e-04 4.000000000e+02 -1.570796327e+00
<br class="ltx_break"><span class="ltx_text ltx_font_italic">(cont.)</span> 0.000000000e+00 0.000000000e+00 0.000000000e+00</span>
</p>
</div>
</li>
</ul>
</div>
</section>
<section id="Ch3.S2.SS1.SSS11.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS11.Px3.p1" class="ltx_para">
<p class="ltx_p">The values of <math id="Ch3.S2.SS1.SSS11.Px3.p1.m1" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, <math id="Ch3.S2.SS1.SSS11.Px3.p1.m2" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math>, and <math id="Ch3.S2.SS1.SSS11.Px3.p1.m3" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math> used in the above examples were taken from Table II of paper <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite>.</p>
</div>
<div id="Ch3.S2.SS1.SSS11.Px3.p2" class="ltx_para">
<p class="ltx_p">The effect of these multipoles was checked on a beam of particles with <math id="Ch3.S2.SS1.SSS11.Px3.p2.m1" class="ltx_Math" alttext="x=x^{\prime}=y^{\prime}=0" display="inline"><mrow><mi>x</mi><mo>=</mo><msup><mi>x</mi><mo>′</mo></msup><mo>=</mo><msup><mi>y</mi><mo>′</mo></msup><mo>=</mo><mn>0</mn></mrow></math>, and <math id="Ch3.S2.SS1.SSS11.Px3.p2.m2" class="ltx_Math" alttext="y=1,2,\text{ and }3~{}\mathrm{mm}" display="inline"><mrow><mi>y</mi><mo>=</mo><mrow><mn id="XM33">1</mn><mo>,</mo><mn id="XM34">2</mn><mo>,</mo><mrow id="XM35"><mtext> and </mtext><mo>⁢</mo><mpadded width="+3.3pt"><mn>3</mn></mpadded><mo>⁢</mo><mi>mm</mi></mrow></mrow></mrow></math>, with different <math id="Ch3.S2.SS1.SSS11.Px3.p2.m3" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> positions.
The effect on <math id="Ch3.S2.SS1.SSS11.Px3.p2.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> was linear, quadratic and cubic with <math id="Ch3.S2.SS1.SSS11.Px3.p2.m5" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math> when using <math id="Ch3.S2.SS1.SSS11.Px3.p2.m6" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, <math id="Ch3.S2.SS1.SSS11.Px3.p2.m7" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math>, or <math id="Ch3.S2.SS1.SSS11.Px3.p2.m8" class="ltx_Math" alttext="b_{4}" display="inline"><msub><mi>b</mi><mn>4</mn></msub></math>, respectively, as expected.
Furthermore, the amplitude of the <math id="Ch3.S2.SS1.SSS11.Px3.p2.m9" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> agrees with the analytical formulas found in the appendix of this paper <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite> under “Normal quadrupole/sextupole/octupole”.</p>
</div>
<div id="Ch3.S2.SS1.SSS11.Px3.p3" class="ltx_para">
<p class="ltx_p">Important note: <math id="Ch3.S2.SS1.SSS11.Px3.p3.m1" class="ltx_Math" alttext="B\rho" display="inline"><mrow><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow></math> and the factorial <math id="Ch3.S2.SS1.SSS11.Px3.p3.m2" class="ltx_Math" alttext="(n-1)!" display="inline"><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM36"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></math> are already included in K2, K3 etc of Mad-X, i.e. <math id="Ch3.S2.SS1.SSS11.Px3.p3.m3" class="ltx_Math" alttext="b_{3}=1159\cdot 10^{-3}" display="inline"><mrow><msub><mi>b</mi><mn>3</mn></msub><mo>=</mo><mrow><mn>1159</mn><mo>⋅</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup></mrow></mrow></math> in Mad-X results in a kick as if <math id="Ch3.S2.SS1.SSS11.Px3.p3.m4" class="ltx_Math" alttext="b_{3}" display="inline"><msub><mi>b</mi><mn>3</mn></msub></math> is <math id="Ch3.S2.SS1.SSS11.Px3.p3.m5" class="ltx_Math" alttext="1159\cdot 10^{-3}/(n-1)!" display="inline"><mrow><mrow><mn>1159</mn><mo>⋅</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup></mrow><mo>/</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM37"><mi>n</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow></mrow></math>.
So in order for this paper’s <cite class="ltx_cite">[<a href="#bib.bib36" title="" class="ltx_ref">36</a>]</cite> analytical equations to be compatible with Mad-X, the equations for normal quadrupole should read as</p>
<table id="Ch3.Ex1" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex1.m1" class="ltx_Math" alttext="\Delta x^{\prime}=-\frac{b_{2}}{(2-1)!~{}B\rho}\ldots~{}." display="block"><mrow><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow><mo>=</mo><mrow><mo>-</mo><mrow><mfrac><msub><mi>b</mi><mn>2</mn></msub><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM38"><mn>2</mn><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo lspace="0pt" rspace="3.5pt">!</mo></mrow><mo>⁢</mo><mi>B</mi><mo>⁢</mo><mi>ρ</mi></mrow></mfrac><mo>⁢</mo><mpadded width="+3.3pt"><mi mathvariant="normal">…</mi></mpadded></mrow></mrow></mrow><mo>.</mo></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS12" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Electron Lens</h5>
<section id="Ch3.S2.SS1.SSS12.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS12.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type</span></p>
<dl id="Ch3.I17" class="ltx_description">
<dt id="Ch3.I17.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I17.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I17.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I17.ix2.p1" class="ltx_para">
<p class="ltx_p">29</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS12.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS12.Px2.p1" class="ltx_para">
<p class="ltx_p">The “e-lens” elements become active when the
ELEN input block <a href="#Ch3.S3.SS9" title="3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.9</span></a> is used. All parameters except name and type have to be set to zero in the list of single elements, otherwise SixTrack aborts. The parameters for the e-lens are defined in the ELEN input block.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS13" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Scattering point</h5>
<section id="Ch3.S2.SS1.SSS13.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS13.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type</span></p>
<dl id="Ch3.I18" class="ltx_description">
<dt id="Ch3.I18.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I18.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I18.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type</span></dt>
<dd class="ltx_item">
<div id="Ch3.I18.ix2.p1" class="ltx_para">
<p class="ltx_p">40</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS13.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS13.Px2.p1" class="ltx_para">
<p class="ltx_p">The “scattering” elements become active when the SCAT(ter) input block <a href="#Ch3.S3.SS10" title="3.3.10 Scattering ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.10</span></a> is used.
All parameters except name and type have to be set to zero in the list of single elements, otherwise SixTrack aborts.
The parameters of the scattering are defined in the SCAT(ter) input block.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS14" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Beam Position Monitor</h5>
<section id="Ch3.S2.SS1.SSS14.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S2.SS1.SSS14.Px1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">BPMname 0 0 0 0</span></p>
<dl id="Ch3.I19" class="ltx_description">
<dt id="Ch3.I19.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">BPMname</span></dt>
<dd class="ltx_item">
<div id="Ch3.I19.ix1.p1" class="ltx_para">
<p class="ltx_p">Must start with “BP” and maybe followed by forteen characters.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS1.SSS14.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S2.SS1.SSS14.Px2.p1" class="ltx_para">
<p class="ltx_p">This element dumps the coordinates of the 1st particle to the file with name <span class="ltx_text ltx_font_italic">BPMname</span>.
The file contains 7 columns: <math id="Ch3.S2.SS1.SSS14.Px2.p1.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.S2.SS1.SSS14.Px2.p1.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>, <math id="Ch3.S2.SS1.SSS14.Px2.p1.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.S2.SS1.SSS14.Px2.p1.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>, <math id="Ch3.S2.SS1.SSS14.Px2.p1.m5" class="ltx_Math" alttext="ct" display="inline"><mrow><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></math>,<math id="Ch3.S2.SS1.SSS14.Px2.p1.m6" class="ltx_Math" alttext="\delta p/p" display="inline"><mrow><mrow><mi>δ</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math> and <math id="Ch3.S2.SS1.SSS14.Px2.p1.m7" class="ltx_Math" alttext="E" display="inline"><mi>E</mi></math>.
Usual SixTrack units are used. Any number of BPM elements can be used but
the names must differ.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS1.SSS15" class="ltx_subsubsection">
<h5 class="ltx_title ltx_title_subsubsection">Other element types</h5>
<div id="Ch3.S2.SS1.SSS15.p1" class="ltx_para">
<p class="ltx_p">Some other elements, such as dipole edge (24), solenoid (25), multipole RF kicks (<math id="Ch3.S2.SS1.SSS15.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>26, <math id="Ch3.S2.SS1.SSS15.p1.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>27, <math id="Ch3.S2.SS1.SSS15.p1.m3" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>28) are accepted by SixTrack, but they are not currently supported by the development team or tested for correctness.
It is therefore advised to not use these elements.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.2 </span>Block Definitions</h4>
<section id="Ch3.S2.SS2.SSS15.Px2.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx1.p1" class="ltx_para">
<p class="ltx_p">In four–dimensional transverse tracking,
the linear elements between nonlinear elements can be combined to a
single linear block to save computing time.</p>
</div>
</section>
<section id="Ch3.S2.SS2.SSS15.Px2.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx2.p1" class="ltx_para">
<p class="ltx_p">BLOC</p>
</div>
</section>
<section id="Ch3.S2.SS2.SSS15.Px2.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable but at least one</p>
</div>
</section>
<section id="Ch3.S2.SS2.SSS15.Px2.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx4.p1" class="ltx_para">
<ul id="Ch3.I20" class="ltx_itemize">
<li id="Ch3.I20.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I20.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">mper msym(1) …msym(mper)</span>
(integers)</p>
</div>
</li>
<li id="Ch3.I20.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I20.i2.p1" class="ltx_para">
<p class="ltx_p">from second data line on: <span class="ltx_text ltx_font_italic">block–name </span>{<span class="ltx_text ltx_font_italic">element–name</span>}<span class="ltx_text ltx_font_italic"> </span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx4.p2" class="ltx_para">
<dl id="Ch3.I21" class="ltx_description">
<dt id="Ch3.I21.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">mper</span></dt>
<dd class="ltx_item">
<div id="Ch3.I21.ix1.p1" class="ltx_para">
<p class="ltx_p">Number of super–periods. The following set of blocks is
considered a <span class="ltx_text ltx_font_italic">super–period</span>. The accelerator consists of <span class="ltx_text ltx_font_italic">mper</span> super–periods.</p>
</div>
</dd>
<dt id="Ch3.I21.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">msym(i)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I21.ix2.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I21.ix2.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> 1 for each super–period. If <span class="ltx_text ltx_font_italic">msym(i)</span>=1, the <span class="ltx_text ltx_font_italic">i</span>’th super–period will be
built up in the order in which linear elements appear in the blocks
below. If <span class="ltx_text ltx_font_italic">msym(i)</span>=–1, the super–period will be built up in
reverse order.</p>
</div>
</dd>
<dt id="Ch3.I21.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">block–name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I21.ix3.p1" class="ltx_para">
<p class="ltx_p">The name of the block with up to sixteen
characters</p>
</div>
</dd>
<dt id="Ch3.I21.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">element–name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I21.ix4.p1" class="ltx_para">
<p class="ltx_p">The element names have to appear as a linear
element in the list of “single elements” ( <a href="#Ch3.S2.SS1.SSS1" title="Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>). If one
line is too short to contain all the elements of a block, a line
with additional elements to the same block can be added. At least 5
(five) blanks must appear at the beginning of the extra line so that
names of blocks and names of linear elements in a block can be
distinguished.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS2.SSS15.Px2.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S2.SS2.SSS15.Px2.SPx5.p1" class="ltx_para">
<ol id="Ch3.I22" class="ltx_enumerate">
<li id="Ch3.I22.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I22.i1.p1" class="ltx_para">
<p class="ltx_p">When synchrotron oscillation is introduced, the linear elements
can no longer be lumped into one block, because in that case even a
drift length magnet is a nonlinear element with respect to the
longitudinal plane. However, the block structure is still kept to
make use of the speed–up in case one can restrict the studies to
the four–dimensional case.</p>
</div>
</li>
<li id="Ch3.I22.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I22.i2.p1" class="ltx_para">
<p class="ltx_p">The maximum number of blocks and the maximum number of entries
in each block are defined as parameters (Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
</li>
<li id="Ch3.I22.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I22.i3.p1" class="ltx_para">
<p class="ltx_p">The inversion of a super–period (<span class="ltx_text ltx_font_italic">msym(i)</span>= –1) is
presently no longer allowed.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S2.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.3 </span>Structure Input</h4>
<section id="Ch3.S2.SS3.SSS15.Px2.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S2.SS3.SSS15.Px2.SPx1.p1" class="ltx_para">
<p class="ltx_p">The model of the accelerator is put
together by constructing a sequence of blocks of linear elements,
nonlinear elements, observation points, and possibly a cavity with the
keyword “CAV” used if this name does not appear in the list of
single elements ( <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) with type <math id="Ch3.S2.SS3.SSS15.Px2.SPx1.p1.m1" class="ltx_Math" alttext="\pm 12" display="inline"><mrow><mo>±</mo><mn>12</mn></mrow></math>. In that case, its
parameters are given in the <span class="ltx_text ltx_font_italic">Synchrotron Oscillations</span> input
block ( <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>).</p>
</div>
</section>
<section id="Ch3.S2.SS3.SSS15.Px2.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S2.SS3.SSS15.Px2.SPx2.p1" class="ltx_para">
<p class="ltx_p">{ <span class="ltx_text ltx_font_italic">structure–element</span> <math id="Ch3.S2.SS3.SSS15.Px2.SPx2.p1.m1" class="ltx_Math" alttext="|" display="inline"><mo stretchy="false">|</mo></math> CAV
<math id="Ch3.S2.SS3.SSS15.Px2.SPx2.p1.m2" class="ltx_Math" alttext="|" display="inline"><mo stretchy="false">|</mo></math> GO }</p>
</div>
<div id="Ch3.S2.SS3.SSS15.Px2.SPx2.p2" class="ltx_para">
<dl id="Ch3.I23" class="ltx_description">
<dt id="Ch3.I23.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">structure–element</span></dt>
<dd class="ltx_item">
<div id="Ch3.I23.ix1.p1" class="ltx_para">
<p class="ltx_p">Structure elements must appear as nonlinear
and observation elements in the single element list or in the list
of blocks of the <span class="ltx_text ltx_font_italic">Block Definition</span> input block
( <a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>).
</p>
</div>
</dd>
<dt id="Ch3.I23.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">CAV</span></dt>
<dd class="ltx_item">
<div id="Ch3.I23.ix2.p1" class="ltx_para">
<p class="ltx_p">A cavity can be introduced by a keyword “CAV”.
This element does not appear in the single element list
( <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I23.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">GO</span></dt>
<dd class="ltx_item">
<div id="Ch3.I23.ix3.p1" class="ltx_para">
<p class="ltx_p">Starting point: the keyword “GO” denotes where the
tracking is started and where the tracked coordinates are recorded
at each turn.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS3.SSS15.Px2.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S2.SS3.SSS15.Px2.SPx3.p1" class="ltx_para">
<p class="ltx_p">Repetition of parts of the structure is
indicated by parentheses with a multiplying factor N in front of them.
If the left parenthesis “(“ occurs in a line of input, the factor N
is expected to be found in the preceding characters. If the characters
are blank, N is set to 1. The right parenthesis “)” signals the end
of the sequence to be repeated.</p>
</div>
</section>
</section>
<section id="Ch3.S2.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2.4 </span>Displacement of Elements</h4>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx1.p1" class="ltx_para">
<p class="ltx_p">This block allows to displace nonlinear
elements in horizontal and vertical positions. With the r.m.s. values of
the horizontal and vertical displacements it is possible to achieve a
displacement that is different from element to element.</p>
</div>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx1.p2" class="ltx_para">
<p class="ltx_p">To simulate a measured closed orbit at the position of nonlinear
elements, it is convenient to use the <span class="ltx_text ltx_font_italic">Displacement of Elements</span>
input block instead of trying to produce a closed orbit by dipole
kicks.</p>
</div>
</section>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx2.p1" class="ltx_para">
<p class="ltx_p">DISP</p>
</div>
</section>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name xd xdrms yd ydrms</span></p>
</div>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx4.p2" class="ltx_para">
<dl id="Ch3.I24" class="ltx_description">
<dt id="Ch3.I24.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I24.ix1.p1" class="ltx_para">
<p class="ltx_p">Name of the element which is displaced</p>
</div>
</dd>
<dt id="Ch3.I24.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">xd</span></dt>
<dd class="ltx_item">
<div id="Ch3.I24.ix2.p1" class="ltx_para">
<p class="ltx_p">Horizontal displacement [mm]</p>
</div>
</dd>
<dt id="Ch3.I24.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">xdrms</span></dt>
<dd class="ltx_item">
<div id="Ch3.I24.ix3.p1" class="ltx_para">
<p class="ltx_p">R.m.s. of horizontal displacement [mm]</p>
</div>
</dd>
<dt id="Ch3.I24.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">yd</span></dt>
<dd class="ltx_item">
<div id="Ch3.I24.ix4.p1" class="ltx_para">
<p class="ltx_p">Vertical displacement [mm]</p>
</div>
</dd>
<dt id="Ch3.I24.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">ydrms</span></dt>
<dd class="ltx_item">
<div id="Ch3.I24.ix5.p1" class="ltx_para">
<p class="ltx_p">R.m.s. of vertical displacement [mm]</p>
</div>
</dd>
</dl>
</div>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx4.p3" class="ltx_para">
<p class="ltx_p">In the case of an AC dipole these variables are not meant for
displacing this element but are used for the following AC dipole
parameters:</p>
</div>
</section>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name nfree nramp1 nplato nramp2</span></p>
<dl id="Ch3.I25" class="ltx_description">
<dt id="Ch3.I25.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I25.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I25.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">nfree</span></dt>
<dd class="ltx_item">
<div id="Ch3.I25.ix2.p1" class="ltx_para">
<p class="ltx_p">Number of turns free of excitation at the begining of
the run.</p>
</div>
</dd>
<dt id="Ch3.I25.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">nramp1</span></dt>
<dd class="ltx_item">
<div id="Ch3.I25.ix3.p1" class="ltx_para">
<p class="ltx_p">Number of turns to ramp up the excitation amplitude
from 0 to <math id="Ch3.I25.ix3.p1.m1" class="ltx_Math" alttext="ACdipAmp" display="inline"><mrow><mi>A</mi><mo>⁢</mo><mi>C</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>p</mi><mo>⁢</mo><mi>A</mi><mo>⁢</mo><mi>m</mi><mo>⁢</mo><mi>p</mi></mrow></math>.
</p>
</div>
</dd>
<dt id="Ch3.I25.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">nplato</span></dt>
<dd class="ltx_item">
<div id="Ch3.I25.ix4.p1" class="ltx_para">
<p class="ltx_p">Number of turns of constant excitation amplitude.</p>
</div>
</dd>
<dt id="Ch3.I25.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">nramp2</span></dt>
<dd class="ltx_item">
<div id="Ch3.I25.ix5.p1" class="ltx_para">
<p class="ltx_p">Number of turns to ramp down the excitation amplitude.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S2.SS4.SSS15.Px2.SPx6" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S2.SS4.SSS15.Px2.SPx6.p1" class="ltx_para">
<p class="ltx_p">In RACETRACK the displacements had been included
in the <span class="ltx_text ltx_font_italic">Single Element</span> input block ( <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>). In SixTrack
they must be given in the separate <span class="ltx_text ltx_font_italic">Displacement of Elements</span>
input block because of the limited length of one line of input.</p>
</div>
</section>
</section>
</section>
<section id="Ch3.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.3 </span>Special Elements</h3>
<div id="Ch3.S3.p1" class="ltx_para">
<p class="ltx_p">One advantage of SixTrack, that has been adopted from RACETRACK, is
that it easily allows to define elements for a specific purpose. The
special elements implemented till now are found in this section.
All Special Elements should be written in the fort.3 file.</p>
</div>
<section id="Ch3.S3.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.1 </span>Multipole Coefficients</h4>
<section id="Ch3.S3.SS1.SSS15.Px2.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx1.p1" class="ltx_para">
<p class="ltx_p">Sets of normal and skew multipoles of up to tenth order, each with an
r.m.s. value, can be combined with this block. The multipole kick is
calculated using a Horner scheme which saves considerably in
computation time. Moreover, using the multipole block reduces the
number of elements in the single element list ( <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).
</p>
</div>
</section>
<section id="Ch3.S3.SS1.SSS15.Px2.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx2.p1" class="ltx_para">
<p class="ltx_p">MULT</p>
</div>
</section>
<section id="Ch3.S3.SS1.SSS15.Px2.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx3.p1" class="ltx_para">
<p class="ltx_p">2 to
12</p>
</div>
</section>
<section id="Ch3.S3.SS1.SSS15.Px2.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx4.p1" class="ltx_para">
<ul id="Ch3.I26" class="ltx_itemize">
<li id="Ch3.I26.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I26.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">name</span> <math id="Ch3.I26.i1.p1.m1" class="ltx_Math" alttext="R_{0}\ \delta_{0}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>R</mi><mn>0</mn></msub></mpadded><mo>⁢</mo><msub><mi>δ</mi><mn>0</mn></msub></mrow></math></p>
</div>
</li>
<li id="Ch3.I26.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I26.i2.p1" class="ltx_para">
<p class="ltx_p">data lines 2 to 12: <math id="Ch3.I26.i2.p1.m1" class="ltx_Math" alttext="B_{n}\ r.m.s." display="inline"><mrow><mrow><mrow id="XM39"><mpadded width="+5pt"><msub><mi>B</mi><mi>n</mi></msub></mpadded><mo>⁢</mo><mi>r</mi></mrow><mo>.</mo><mi id="XM40">m</mi><mo>.</mo><mi id="XM41">s</mi></mrow><mo>.</mo></mrow></math>–<math id="Ch3.I26.i2.p1.m2" class="ltx_Math" alttext="B_{n}\ A_{n}\ r.m.s." display="inline"><mrow><mrow><mrow id="XM42"><mpadded width="+5pt"><msub><mi>B</mi><mi>n</mi></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mi>n</mi></msub></mpadded><mo>⁢</mo><mi>r</mi></mrow><mo>.</mo><mi id="XM43">m</mi><mo>.</mo><mi id="XM44">s</mi></mrow><mo>.</mo></mrow></math>–<math id="Ch3.I26.i2.p1.m3" class="ltx_Math" alttext="A_{n}" display="inline"><msub><mi>A</mi><mi>n</mi></msub></math></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx4.p2" class="ltx_para">
<dl id="Ch3.I27" class="ltx_description">
<dt id="Ch3.I27.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I27.ix1.p1" class="ltx_para">
<p class="ltx_p">Name of the multipole block which must appear in the list
of single elements ( <a href="#Ch3.S2.SS1.SSS3" title="Multipole Blocks ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I27.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                  <math id="Ch3.I27.ix2.m1" class="ltx_Math" alttext="R_{0}" display="inline"><msub><mi>R</mi><mn>0</mn></msub></math>
                </span></dt>
<dd class="ltx_item">
<div id="Ch3.I27.ix2.p1" class="ltx_para">
<p class="ltx_p">Reference radius (in mm) at which the magnet errors
are calculated. This makes it convenient to use values from field
measurements.</p>
</div>
</dd>
<dt id="Ch3.I27.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                  <math id="Ch3.I27.ix3.m1" class="ltx_Math" alttext="\delta_{0}" display="inline"><msub><mi>δ</mi><mn>0</mn></msub></math>
                </span></dt>
<dd class="ltx_item">
<div id="Ch3.I27.ix3.p1" class="ltx_para">
<p class="ltx_p">Bending strength of the dipole (in mrad). Field
errors of line 2–11 are taken to be relative to the bending
strength.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS1.SSS15.Px2.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S3.SS1.SSS15.Px2.SPx5.p1" class="ltx_para">
<ol id="Ch3.I28" class="ltx_enumerate">
<li id="Ch3.I28.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I28.i1.p1" class="ltx_para">
<p class="ltx_p">The <math id="Ch3.I28.i1.p1.m1" class="ltx_Math" alttext="B_{n}" display="inline"><msub><mi>B</mi><mi>n</mi></msub></math> and <math id="Ch3.I28.i1.p1.m2" class="ltx_Math" alttext="A_{n}" display="inline"><msub><mi>A</mi><mi>n</mi></msub></math> are related to the <math id="Ch3.I28.i1.p1.m3" class="ltx_Math" alttext="b_{n},a_{n}" display="inline"><mrow><msub id="XM45"><mi>b</mi><mi>n</mi></msub><mo>,</mo><msub id="XM46"><mi>a</mi><mi>n</mi></msub></mrow></math>
of the single nonlinear element ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) in the following
way:</p>
<table id="Ch3.Ex2" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex2.m1" class="ltx_Math" alttext="b_{n}=\delta_{0}B_{n}R_{0}^{1-n}10^{3n-6};\\
a_{n}=\delta_{0}A_{n}R_{0}^{1-n}10^{3n-6}" display="block"><mrow><mrow id="XM47"><msub><mi>b</mi><mi>n</mi></msub><mo>=</mo><mrow><msub><mi>δ</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>B</mi><mi>n</mi></msub><mo>⁢</mo><msubsup><mi>R</mi><mn>0</mn><mrow><mn>1</mn><mo>-</mo><mi>n</mi></mrow></msubsup><mo>⁢</mo><msup><mn>10</mn><mrow><mrow><mn>3</mn><mo>⁢</mo><mi>n</mi></mrow><mo>-</mo><mn>6</mn></mrow></msup></mrow></mrow><mo>;</mo><mrow id="XM48"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><mrow><msub><mi>δ</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>A</mi><mi>n</mi></msub><mo>⁢</mo><msubsup><mi>R</mi><mn>0</mn><mrow><mn>1</mn><mo>-</mo><mi>n</mi></mrow></msubsup><mo>⁢</mo><msup><mn>10</mn><mrow><mrow><mn>3</mn><mo>⁢</mo><mi>n</mi></mrow><mo>-</mo><mn>6</mn></mrow></msup></mrow></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch3.I28.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I28.i2.p1" class="ltx_para">
<p class="ltx_p">The sign convention and the factorial (<math id="Ch3.I28.i2.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>!) are treated as for
the single nonlinear elements in ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</li>
<li id="Ch3.I28.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I28.i3.p1" class="ltx_para">
<p class="ltx_p">Multipoles of different names can be set to be equal using the
“ORG” input block.</p>
</div>
</li>
<li id="Ch3.I28.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I28.i4.p1" class="ltx_para">
<p class="ltx_p">22–poles are included (n = 11). By enlarging the parameter
“MMUL”(Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>) up to 40–poles (MMUL=20) can be
treated. To make the change of MMUL effective, it is of course
necessary to recompile the program.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S3.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.2 </span>Aperture Limitations</h4>
<section id="Ch3.S3.SS2.SSS15.Px2.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S3.SS2.SSS15.Px2.SPx1.p1" class="ltx_para">
<p class="ltx_p">This input data block is used to introduce
additional collimators or aperture limitations in the machine. Each
nonlinear element can be used for this purpose. Rectangular or
elliptical shapes of the aperture limitations are allowed. On top of
that there is a general (rectangular) aperture check at each non–zero
length element. The general aperture values are chosen to be large
enough ( <a href="#A2.T1" title="Table B.1 ‣ B.1 Default Tracking Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.1</span></a>) to define the short–term dynamic aperture.</p>
</div>
</section>
<section id="Ch3.S3.SS2.SSS15.Px2.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S3.SS2.SSS15.Px2.SPx2.p1" class="ltx_para">
<p class="ltx_p">LIMI</p>
</div>
</section>
<section id="Ch3.S3.SS2.SSS15.Px2.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S3.SS2.SSS15.Px2.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS2.SSS15.Px2.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S3.SS2.SSS15.Px2.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name type–of–limitation xaper yaper</span></p>
</div>
<div id="Ch3.S3.SS2.SSS15.Px2.SPx4.p2" class="ltx_para">
<dl id="Ch3.I29" class="ltx_description">
<dt id="Ch3.I29.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I29.ix1.p1" class="ltx_para">
<p class="ltx_p">The name of any nonlinear (zero length) element in the
<span class="ltx_text ltx_font_italic">Single Element</span> input block ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) except multipole
blocks ( <a href="#Ch3.S2.SS1.SSS3" title="Multipole Blocks ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I29.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">type–of–limitation</span></dt>
<dd class="ltx_item">
<div id="Ch3.I29.ix2.p1" class="ltx_para">
<p class="ltx_p">Two types of aperture limitations are
allowed:
<br class="ltx_break">“RE” for a rectangular aperture shape, i.e.</p>
<table id="Ch3.Ex3" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex3.m1" class="ltx_Math" alttext="x_{i}&lt;\mathrm{xaper},y_{i}&lt;\mathrm{yaper}" display="block"><mrow><mrow id="XM51"><msub><mi>x</mi><mi>i</mi></msub><mo>&lt;</mo><mi id="XM49">xaper</mi></mrow><mo>,</mo><mrow id="XM52"><msub><mi>y</mi><mi>i</mi></msub><mo>&lt;</mo><mi>yaper</mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
<p class="ltx_p">“EL” for an elliptical aperture shape, i.e.</p>
<table id="Ch3.Ex4" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.Ex4.m1" class="ltx_Math" alttext="\frac{x_{i}^{2}}{\mathrm{xaper}^{2}}+\frac{y_{i}^{2}}{\mathrm{yaper}^{2}}&lt;1" display="block"><mrow><mrow><mfrac><msubsup><mi>x</mi><mi>i</mi><mn>2</mn></msubsup><msup><mi>xaper</mi><mn>2</mn></msup></mfrac><mo>+</mo><mfrac><msubsup><mi>y</mi><mi>i</mi><mn>2</mn></msubsup><msup><mi>yaper</mi><mn>2</mn></msup></mfrac></mrow><mo>&lt;</mo><mn>1</mn></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</dd>
<dt id="Ch3.I29.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">xaper</span></dt>
<dd class="ltx_item">
<div id="Ch3.I29.ix3.p1" class="ltx_para">
<p class="ltx_p">Aperture in the horizontal plane in mm</p>
</div>
</dd>
<dt id="Ch3.I29.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">yaper</span></dt>
<dd class="ltx_item">
<div id="Ch3.I29.ix4.p1" class="ltx_para">
<p class="ltx_p">Aperture in the vertical plane in mm</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S3.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.3 </span>Power Supply Ripple</h4>
<div id="Ch3.S3.SS3.p1" class="ltx_para">
<p class="ltx_p">The RIPP block is been deprecated since release 4.5.20, and the functionality is now provided by the DYNK block (<a href="#Ch3.S3.SS4" title="3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.4</span></a>).
A fort.3 file containing a RIPP block is therefore no longer valid, and will result in an error message.
The description below is therefore only provided as a reference for those who need to convert old input files.</p>
</div>
<section id="Ch3.S3.SS3.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS3.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">If power supply ripple is to be considered
this input data block can be used. A nonlinear quadrupole is expected
as a ripple element (type=2 and zero length in the single element list
( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>)), but in principle other nonlinear elements are also
allowed. Ripple depth, ripple frequency and starting phase of the
ripple frequency are the input parameters.</p>
</div>
</section>
<section id="Ch3.S3.SS3.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS3.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">RIPP</p>
</div>
</section>
<section id="Ch3.S3.SS3.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS3.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS3.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS3.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">name ripple–depth ripple–frequency start–phase nrturn</span></p>
</div>
<div id="Ch3.S3.SS3.SSS15.Px4.p2" class="ltx_para">
<dl id="Ch3.I30" class="ltx_description">
<dt id="Ch3.I30.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I30.ix1.p1" class="ltx_para">
<p class="ltx_p">Name of the nonlinear element in the “single element”
block ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>)</p>
</div>
</dd>
<dt id="Ch3.I30.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">ripple–depth</span></dt>
<dd class="ltx_item">
<div id="Ch3.I30.ix2.p1" class="ltx_para">
<p class="ltx_p">Maximum kick strength of the ripple element, a
quadrupole kick is usually expected</p>
</div>
</dd>
<dt id="Ch3.I30.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ripple–frequency</span></dt>
<dd class="ltx_item">
<div id="Ch3.I30.ix3.p1" class="ltx_para">
<p class="ltx_p">Given in number of turns (a real value is
allowed) of one ripple period</p>
</div>
</dd>
<dt id="Ch3.I30.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">start–phase</span></dt>
<dd class="ltx_item">
<div id="Ch3.I30.ix4.p1" class="ltx_para">
<p class="ltx_p">Initial phase of the ripple element
</p>
</div>
</dd>
<dt id="Ch3.I30.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">nrturn</span></dt>
<dd class="ltx_item">
<div id="Ch3.I30.ix5.p1" class="ltx_para">
<p class="ltx_p">Initial number of turns, for prolongation runs the
number of turn already done</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S3.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.4 </span>Dynamic Kicks</h4>
<section id="Ch3.S3.SS4.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS4.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The DYNamic Kicks module <cite class="ltx_cite">[<a href="#bib.bib37" title="" class="ltx_ref">37</a>]</cite> allows time-dependent modification of the settings of single elements.
The supported elements and attributes are listed in Table <a href="#Ch3.T5" title="Table 3.5 ‣ SET ‣ Format ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5</span></a>.
The settings can be computed on-the fly using several functions, loaded from input files or a combination, as described in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:DYNK_FUN</span>.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px1.p2" class="ltx_para">
<p class="ltx_p">Further, unless explicitly switched off using a NOFILE statement, DYNK produces an output file “dynksets.dat”.
This file contains the setting of all elements and attributes for which DYNK is active.
It is written in all turns of the simulation, even if DYNK is not active in that exact turn.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS4.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">DYNK</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS4.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS4.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p">There are four types of statements possible in a DYNK block, listed below.
On top of this, lines starting with “/” are treated as a comment and ignored.</p>
</div>
<section id="Ch3.S3.SS4.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">FUN</h6>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">FUN function-name function-type arg1 arg2 arg3 …</em>
<br class="ltx_break">This statement defines a function, i.e. something which when evaluated produces a numerical value which can be used to set the value of an element attribute.
The functions in DYNK all have a unique name, and they may take up to 7 arguments (a limitation imposed by the internal parameter <em class="ltx_emph">getfields_n_max_fields</em>).
The function type must be one of those listed in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:DYNK_FUN</span>.
A function may be defined so that it uses the result of another function, which must be defined above it in the DYNK block.
This requirement avoids any possibility for infinite recursion.
The functions are only evaluated when needed, i.e. when used by a SET statement in that turn.
The functions may thus be evaluated multiple times in one turn (if used by multiple SET statements which are active in that turn, or referenced by multiple other FUN statements which are themselves used more than once in that turn), or it may not be evaluated at all.
The functions are always evaluated as a function of the current turn number <math id="Ch3.S3.SS4.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math>, which may be shifted by a turn-shift specified in a SET statement.
Function names have a maximum length of 20 characters.</p>
</div>
<figure id="Ch3.T4" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 3.4: </span>Available function types in DYNK.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#B3B3FF;">
Type name</span>
                  </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;">
                    <span class="ltx_text" style="background-color:#B3B3FF;">Arguments</span>
                  </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;">
                    <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
                  </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:270.3pt;"></th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
“System” functions</span>
                  </td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">GET</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">element-name[string] attribute-name[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Extracts the original value of a setting, i.e. as specified in the SINGLE ELEMENT section (Sec. <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>). Attributes as used for SET, see Table <a href="#Ch3.T5" title="Table 3.5 ‣ SET ‣ Format ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5</span></a>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">FILE</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">filename[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Loads the settings from file; the file is expected to be an ascii file with two columns where the first column is the turn number (should start at 1 and include all turns up to as long as is wanted), and the second column is the value for that turn number.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">FILELIN</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">filename[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Similar to FILE, but any double can be used as the turn number as long as they are monotonically rising.
When evaluated, the function interpolates from the line-segments specified in the file.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">PIPE</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">inPipeName[string] outPipeName[string] ID[string] fileUnit[int]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Uses a pair of UNIX FIFOs, through which it can communicate with an external program.
When evaluated, it sends a message through the outpipe, and then waits for a message on the inpipe which should contain the value the FUN should returned.
The ID is used in case several DYNK PIPE FUNs are using the same outPipe and inPipe, so that the controlling external program can choose what to calculate.
Note that it will use both <span class="ltx_text ltx_font_typewriter">fileUnit</span> and <span class="ltx_text ltx_font_typewriter">fileUnit+1</span>, and if several PIPE FUNs are using the same file, they must also use the same <span class="ltx_text ltx_font_typewriter">fileUnit</span>.
For more details, see the example below.
Also note that PIPE is not available in the checkpoint/restart version of SixTrack.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">RANDG</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">seed1[int] seed2[int] mu[real] sigma[real] mcut[int]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns a pseudorandom number generated from a Gaussian distribution.
The mean value and width is controlled by <em class="ltx_emph">mu</em> and <em class="ltx_emph">sigma</em>, while <em class="ltx_emph">mcut</em> is the maximum number of sigmas to generate numbers up to; set to 0 to disable this cut.
The integers <em class="ltx_emph">seed1</em> and <em class="ltx_emph">seed2</em> are the seed used to initialize the RANECU generator.
Note that every RANDG function defined in DYNK uses its own separate random number stream.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">RANDU</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">seed1[int] seed2[int]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns a pseudorandom number generated from a uniform distribution.
The integers <em class="ltx_emph">seed1</em> and <em class="ltx_emph">seed2</em> are the seed used to initialize the RANECU generator.
Note that every RANDU function defined in DYNK uses its own separate random number stream.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">RANDON</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">seed1[int] seed2[int] P[float]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the value of 1.0 or 0.0 resulting of the weighting with the probability <em class="ltx_emph">P</em> of a pseudorandom number generated from a uniform distribution .
The integers <em class="ltx_emph">seed1</em> and <em class="ltx_emph">seed2</em> are the seed used to initialize the RANECU generator.
Note that every RANDON function defined in DYNK uses its own separate random number stream.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
Filters</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">FIR</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">N[int] filename[string] baseFun[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Applies a Finite Impulse Response (FIR) filter of order <em class="ltx_emph">N</em> to the function <em class="ltx_emph">baseFun</em>.
The output is given as <math id="Ch3.T4.m1" class="ltx_Math" alttext="y[t]=\sum_{i=0}^{N}b_{i}*x[t-i]" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mi id="XM53">t</mi><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>b</mi><mi>i</mi></msub><mo>*</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM54"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow></mrow></math>, where <math id="Ch3.T4.m2" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> is the current turn and <math id="Ch3.T4.m3" class="ltx_Math" alttext="x[t-0]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM55"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math> is the result of the most recent call to <em class="ltx_emph">baseFun</em>.
The coefficients <math id="Ch3.T4.m4" class="ltx_Math" alttext="b_{0}\ldots b_{N}" display="inline"><mrow><msub><mi>b</mi><mn>0</mn></msub><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><msub><mi>b</mi><mi>N</mi></msub></mrow></math> and initial values of <math id="Ch3.T4.m5" class="ltx_Math" alttext="x[t-0]\ldots x[t-N]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM56"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM57"><mi>t</mi><mo>-</mo><mi>N</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></math> are loaded from the given file <em class="ltx_emph">filename</em>, which is a space-separated ascii file with three columns.
These columns are (1) row index <em class="ltx_emph">[int]</em>, (2) coefficients <math id="Ch3.T4.m6" class="ltx_Math" alttext="b_{i}" display="inline"><msub><mi>b</mi><mi>i</mi></msub></math> <em class="ltx_emph">[float]</em> and (3) initial values of the <math id="Ch3.T4.m7" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math> array <em class="ltx_emph">[float]</em>.
The row indices are expected to go from <math id="Ch3.T4.m8" class="ltx_Math" alttext="0" display="inline"><mn>0</mn></math> to at least <math id="Ch3.T4.m9" class="ltx_Math" alttext="N" display="inline"><mi>N</mi></math> in steps of <math id="Ch3.T4.m10" class="ltx_Math" alttext="1" display="inline"><mn>1</mn></math>.
Note that the filter is stepped once per call, i.e. the array <math id="Ch3.T4.m11" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math> is shifted once every time the FUN is called.
Also note that when called, the filter is first stepped, then the new value is filled into the first position in <math id="Ch3.T4.m12" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math>, and finally the sum is evaluated.
This means that the last value in the <math id="Ch3.T4.m13" class="ltx_Math" alttext="x[]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math> array is never used, while the first value (<math id="Ch3.T4.m14" class="ltx_Math" alttext="x[t-0]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM58"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math>) is immediately pushed into <math id="Ch3.T4.m15" class="ltx_Math" alttext="x[t-1]" display="inline"><mrow><mi>x</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM59"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math> before the first evaluation.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">IIR</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">N[int] filename[string] baseFun[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Applies an Infinite Impulse Response (IIR) filter of order <em class="ltx_emph">N</em> to the function <em class="ltx_emph">baseFun</em>.
This is very similar to FIR, except that it also uses its own previous outputs.
The sum is thus written as <math id="Ch3.T4.m16" class="ltx_Math" alttext="y[t]=\sum_{i=0}^{N}b_{i}*x[t-i]+\sum_{i=1}^{N}a_{i}*y[t-i]" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mi id="XM60">t</mi><mo stretchy="false">]</mo></mrow></mrow><mo>=</mo><mrow><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>0</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>b</mi><mi>i</mi></msub><mo>*</mo><mi>x</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM61"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow><mo>+</mo><mrow><msubsup><mo largeop="true" symmetric="true">∑</mo><mrow><mi>i</mi><mo>=</mo><mn>1</mn></mrow><mi>N</mi></msubsup><mrow><mrow><msub><mi>a</mi><mi>i</mi></msub><mo>*</mo><mi>y</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM62"><mi>t</mi><mo>-</mo><mi>i</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></mrow></mrow></mrow></math>.
The file <em class="ltx_emph">filename</em> is identical to that which is used for FIR, except for adding two more columns.
These columns are (4) <math id="Ch3.T4.m17" class="ltx_Math" alttext="a_{0}\ldots a_{N}" display="inline"><mrow><msub><mi>a</mi><mn>0</mn></msub><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><msub><mi>a</mi><mi>N</mi></msub></mrow></math> <em class="ltx_emph">[float]</em> and (5) initial values for the <math id="Ch3.T4.m18" class="ltx_Math" alttext="y[]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mo stretchy="false">]</mo></mrow></mrow></math> array <em class="ltx_emph">[float]</em>.
Note that <math id="Ch3.T4.m19" class="ltx_Math" alttext="a_{0}" display="inline"><msub><mi>a</mi><mn>0</mn></msub></math> is never used, and the value of <math id="Ch3.T4.m20" class="ltx_Math" alttext="y[t-0]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM63"><mi>t</mi><mo>-</mo><mn>0</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math> is pushed back to <math id="Ch3.T4.m21" class="ltx_Math" alttext="y[t-1]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM64"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">]</mo></mrow></mrow></math> before the first evaluation of the sum, such that <math id="Ch3.T4.m22" class="ltx_Math" alttext="y[t-N]" display="inline"><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">[</mo><mrow id="XM65"><mi>t</mi><mo>-</mo><mi>N</mi></mrow><mo stretchy="false">]</mo></mrow></mrow></math> is never used.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
2-operand operators</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">ADD</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name-1[string] function-name-2[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Evaluate the functions referenced by <em class="ltx_emph">function-name-1</em> and <em class="ltx_emph">function-name-2</em>, and return the sum of the results.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">SUB</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name-1[string] function-name-2[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Similar to ADD, but return the result of function1 minus function2.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">MUL</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name-1[string] function-name-2[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Similar to ADD, but return the product of the results.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">DIV</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name-1[string] function-name-2[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Similar to ADD, but return the result of function1 divided by function2</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">POW</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name-1[string] function-name-2[string]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Similar to ADD, but return the result of function1 raised to the power of function2.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
1-operand operators</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">MINUS</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the value of the named function, with the oposite sign.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">SQRT</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the square root of the value generated by the named function.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">SIN</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the sine of the value generated by the named function.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">COS</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the cosine of the value generated by the named function.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">LOG</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the natural logarithm of the value generated by the named function.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">LOG10</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the common logarithm of the value generated by the named function.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">EXP</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">function-name</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Returns the natural exponential function <math id="Ch3.T4.m23" class="ltx_Math" alttext="e^{x}" display="inline"><msup><mi>e</mi><mi>x</mi></msup></math>, where <math id="Ch3.T4.m24" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math> is the value generated by the named function.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
Polynomial and elliptical functions</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">CONST</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">value[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Always returns the value specified.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">TURN</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">(none)</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Return the turn number, i.e. <math id="Ch3.T4.m25" class="ltx_Math" alttext="y(t)=t" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM66">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mi>t</mi></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">LIN</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">a[real] b[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Computed value from the linear function <math id="Ch3.T4.m26" class="ltx_Math" alttext="y(t)=a\cdot t+b" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM67">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>a</mi><mo>⋅</mo><mi>t</mi></mrow><mo>+</mo><mi>b</mi></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">LINSEG</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">x1[real] x2[real] y1[real] y2[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">The function is defined by a line segment between the points <math id="Ch3.T4.m27" class="ltx_Math" alttext="(x_{1},y_{1})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM68"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM69"><mi>y</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></math> and <math id="Ch3.T4.m28" class="ltx_Math" alttext="(x_{2},y_{2})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM70"><mi>x</mi><mn>2</mn></msub><mo>,</mo><msub id="XM71"><mi>y</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></math>, and undefined for <math id="Ch3.T4.m29" class="ltx_Math" alttext="x&lt;x_{1}" display="inline"><mrow><mi>x</mi><mo>&lt;</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></math> and <math id="Ch3.T4.m30" class="ltx_Math" alttext="x&gt;x_{2}" display="inline"><mrow><mi>x</mi><mo>&gt;</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></math>.
It is required that <math id="Ch3.T4.m31" class="ltx_Math" alttext="x_{1}&lt;x_{2}" display="inline"><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>&lt;</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">QUAD</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">a[real] b[real] c[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Computed value from the quadratic function <math id="Ch3.T4.m32" class="ltx_Math" alttext="y(t)=a\cdot t^{2}+b\cdot t+c" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM72">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mi>a</mi><mo>⋅</mo><msup><mi>t</mi><mn>2</mn></msup></mrow><mo>+</mo><mrow><mi>b</mi><mo>⋅</mo><mi>t</mi></mrow><mo>+</mo><mi>c</mi></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">QUADSEG</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">x1[real] x2[real] y1[real] y2[real] deriv1[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">The quadratic function is defined by overlapping the quadratic curve segment which passes through the points <math id="Ch3.T4.m33" class="ltx_Math" alttext="(x_{1},y_{1})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM73"><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub id="XM74"><mi>y</mi><mn>1</mn></msub><mo stretchy="false">)</mo></mrow></math> and <math id="Ch3.T4.m34" class="ltx_Math" alttext="(x_{2},y_{2})" display="inline"><mrow><mo stretchy="false">(</mo><msub id="XM75"><mi>x</mi><mn>2</mn></msub><mo>,</mo><msub id="XM76"><mi>y</mi><mn>2</mn></msub><mo stretchy="false">)</mo></mrow></math>, and <math id="Ch3.T4.m35" class="ltx_Math" alttext="\mathrm{d}y/\mathrm{d}x" display="inline"><mrow><mrow><mrow><mi mathvariant="normal">d</mi><mo>⁢</mo><mi>y</mi></mrow><mo>/</mo><mi mathvariant="normal">d</mi></mrow><mo>⁢</mo><mi>x</mi></mrow></math> at <math id="Ch3.T4.m36" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn>1</mn></msub></math> is <em class="ltx_emph">deriv1</em>.
The quadratic coefficients <math id="Ch3.T4.m37" class="ltx_Math" alttext="a,b,c" display="inline"><mrow><mi id="XM77">a</mi><mo>,</mo><mi id="XM78">b</mi><mo>,</mo><mi id="XM79">c</mi></mrow></math> are calculated as <math id="Ch3.T4.m38" class="ltx_Math" alttext="a=\frac{\emph{deriv1}}{x_{1}-x_{2}}+\frac{y_{2}-y_{1}}{(x_{1}-x_{2})^{2}}" display="inline"><mrow><mi>a</mi><mo>=</mo><mrow><mfrac><mtext><em class="ltx_emph">deriv1</em></mtext><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>-</mo><msub><mi>x</mi><mn>2</mn></msub></mrow></mfrac><mo>+</mo><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM80"><msub><mi>x</mi><mn>1</mn></msub><mo>-</mo><msub><mi>x</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup></mfrac></mrow></mrow></math>, <math id="Ch3.T4.m39" class="ltx_Math" alttext="b=\frac{y_{2}-y_{1}}{x_{2}-x_{1}}-(x_{1}+x_{2})\cdot a" display="inline"><mrow><mi>b</mi><mo>=</mo><mrow><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><msub><mi>x</mi><mn>2</mn></msub><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac><mo>-</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM81"><msub><mi>x</mi><mn>1</mn></msub><mo>+</mo><msub><mi>x</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⋅</mo><mi>a</mi></mrow></mrow></mrow></math> and <math id="Ch3.T4.m40" class="ltx_Math" alttext="c=y_{1}+\left(-x_{1}^{2}\cdot a-x_{1}\cdot b\right)" display="inline"><mrow><mi>c</mi><mo>=</mo><mrow><msub><mi>y</mi><mn>1</mn></msub><mo>+</mo><mrow><mo>(</mo><mrow id="XM82"><mrow><mo>-</mo><mrow><msubsup><mi>x</mi><mn>1</mn><mn>2</mn></msubsup><mo>⋅</mo><mi>a</mi></mrow></mrow><mo>-</mo><mrow><msub><mi>x</mi><mn>1</mn></msub><mo>⋅</mo><mi>b</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
Trancendental functions</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">SINF</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">A[real] omega[real] phi[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Computes <math id="Ch3.T4.m41" class="ltx_Math" alttext="y(t)=A\sin\left(\omega t+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM83">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM84">sin</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM85"><mrow><mi>ω</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">COSF</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">A[real] omega[real] phi[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Computes <math id="Ch3.T4.m42" class="ltx_Math" alttext="y(t)=A\cos\left(\omega t+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM86">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM87">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM88"><mrow><mi>ω</mi><mo>⁢</mo><mi>t</mi></mrow><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">COSF_RIPP</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">A[real] period[real] phi[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">Computes <math id="Ch3.T4.m43" class="ltx_Math" alttext="y(t)=A\cos\left(\frac{2\pi(t-1)}{\mathrm{period}}+\phi\right)" display="inline"><mrow><mrow><mi>y</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM90">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>A</mi><mo>⁢</mo><mrow><mi id="XM91">cos</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM92"><mfrac><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM89"><mi>t</mi><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mi>period</mi></mfrac><mo>+</mo><mi>ϕ</mi></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>.
This specialized cosine is provided for compatibility, to be used when replacing old <em class="ltx_emph">RIPP</em> blocks.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                    <span class="ltx_text" style="background-color:#D9D9FF;">
Specialized functions</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:270.3pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">PELP</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">tinj[real] Iinj[real] Inom[real] A[real] D[real] R[real] te[real]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">This function describes a patched “Parabolic-Exponential-Linear-Parabolic” function, as used for ramping the LHC dipoles and described in <cite class="ltx_cite">[<a href="#bib.bib38" title="" class="ltx_ref">38</a>, Appendix C]</cite> and <cite class="ltx_cite">[<a href="#bib.bib39" title="" class="ltx_ref">39</a>]</cite>.
The parameters are:
<ul id="Ch3.I31" class="ltx_itemize">
<li id="Ch3.I31.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i1.p1" class="ltx_para">
<p class="ltx_p">The injection time <em class="ltx_emph">tinj</em>, which is the time (in turn numbers) when the ramp starts.</p>
</div>
</li>
<li id="Ch3.I31.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i2.p1" class="ltx_para">
<p class="ltx_p">The injection value <em class="ltx_emph">Iinj</em>, which is the value when <math id="Ch3.I31.i2.p1.m1" class="ltx_Math" alttext="t\leq t_{inj}" display="inline"><mrow><mi>t</mi><mo>≤</mo><msub><mi>t</mi><mrow><mi>i</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mi>j</mi></mrow></msub></mrow></math></p>
</div>
</li>
<li id="Ch3.I31.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i3.p1" class="ltx_para">
<p class="ltx_p">The final value <em class="ltx_emph">Inom</em>, which is the value after the end of the ramp.</p>
</div>
</li>
<li id="Ch3.I31.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i4.p1" class="ltx_para">
<p class="ltx_p">The acceleration parameter <em class="ltx_emph">A</em>, which describes how fast the current is growing in the first (parabolic) segment.</p>
</div>
</li>
<li id="Ch3.I31.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i5.p1" class="ltx_para">
<p class="ltx_p">The decelertation parameter <em class="ltx_emph">D</em>, which describes how fast the current growths flattens out in the forth (parabolic) segment.</p>
</div>
</li>
<li id="Ch3.I31.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i6.p1" class="ltx_para">
<p class="ltx_p">The ramp rate <em class="ltx_emph">R</em>, which describes the maximum ramp rate, seen in the third (linear) segment.</p>
</div>
</li>
<li id="Ch3.I31.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I31.i7.p1" class="ltx_para">
<p class="ltx_p">The start time of the ramp <em class="ltx_emph">te</em>, which describes at what time it switches from the parabolic (first) to the exponential (second) segment.</p>
</div>
</li>
</ul>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">ONOFF</td>
<td class="ltx_td ltx_align_justify" style="width:113.8pt;">
                    <em class="ltx_emph">p1[int] p2[int]</em>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:270.3pt;">This function is a periodic “pulse width modulation” with period p2 and pulse length p1.
It may be described as
<math id="Ch3.T4.m44" class="ltx_Math" alttext="y(t)=\left\{1.0\;\mathrm{if}\;\mathrm{mod}(t-1,p2)&lt;p1\right\};\;\left\{0.0\;%
\mathrm{otherwise}\right\}" display="inline"><mrow><mi>y</mi><mrow><mo stretchy="false">(</mo><mi id="XM93">t</mi><mo stretchy="false">)</mo></mrow><mo>=</mo><mrow><mo>{</mo><mpadded width="+2.8pt"><mn>1.0</mn></mpadded><mpadded width="+2.8pt"><mi>if</mi></mpadded><mi>mod</mi><mrow><mo stretchy="false">(</mo><mi>t</mi><mo>-</mo><mn>1</mn><mo>,</mo><mi>p</mi><mn>2</mn><mo stretchy="false">)</mo></mrow><mo>&lt;</mo><mi>p</mi><mn>1</mn><mo>}</mo></mrow><mo rspace="5.3pt">;</mo><mrow><mo>{</mo><mpadded width="+2.8pt"><mn>0.0</mn></mpadded><mi>otherwise</mi><mo>}</mo></mrow></mrow></math>.
The reason for using <math id="Ch3.T4.m45" class="ltx_Math" alttext="t-1" display="inline"><mrow><mi>t</mi><mo>-</mo><mn>1</mn></mrow></math> is that the modulus is naturally zero-based, while SixTrack counts turns starting from 1.
Note that it is expected that <math id="Ch3.T4.m46" class="ltx_Math" alttext="p1&gt;=0" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>1</mn></mrow><mo>≥</mo><mn>0</mn></mrow></math>, <math id="Ch3.T4.m47" class="ltx_Math" alttext="p2&gt;1" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>2</mn></mrow><mo>&gt;</mo><mn>1</mn></mrow></math>, and <math id="Ch3.T4.m48" class="ltx_Math" alttext="p1&lt;=p2" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mn>1</mn></mrow><mo>≤</mo><mrow><mi>p</mi><mo>⁢</mo><mn>2</mn></mrow></mrow></math>.
Also note that for negative <math id="Ch3.T4.m49" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math>, the function will always return 1.0.</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:113.8pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:270.3pt;"></th>
</tr>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">SET</h6>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">SET element-name attribute-name function-name first-turn last-turn turn-shift</em>
<br class="ltx_break">This statement defines an element setpoint, which changes an element/attribute to the value computed by the given function.
The <em class="ltx_emph">SET</em> becomes active when the turn number reaches <em class="ltx_emph">first-turn</em>, and switches off once <em class="ltx_emph">last-turn</em> has been passed.
When switched off, the value applied in <span class="ltx_text ltx_font_typewriter">last-turn</span> stays for the rest of the simulation, or until overwritten by another <em class="ltx_emph">SET</em>.
If <em class="ltx_emph">last-turn</em> equals -1, the <em class="ltx_emph">SET</em> is active untill the end of the simulation.
The element type and attribute combinations which can be used in DYNK is shown in Table <a href="#Ch3.T5" title="Table 3.5 ‣ SET ‣ Format ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5</span></a>.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx2.p2" class="ltx_para">
<p class="ltx_p">The argument <em class="ltx_emph">turn-shift</em> is an integer (positive, negative, or zero) number which is added to the current turn number before computing the function.
Thus, in order to (as an example) apply an exponential decay from the value <math id="Ch3.S3.SS4.SSS15.Px4.SPx2.p2.m1" class="ltx_Math" alttext="v_{0}" display="inline"><msub><mi>v</mi><mn>0</mn></msub></math> starting in turn <math id="Ch3.S3.SS4.SSS15.Px4.SPx2.p2.m2" class="ltx_Math" alttext="t_{0}" display="inline"><msub><mi>t</mi><mn>0</mn></msub></math> using the function defined as <math id="Ch3.S3.SS4.SSS15.Px4.SPx2.p2.m3" class="ltx_Math" alttext="f(t)=V_{0}\exp(-t/\tau)" display="inline"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM100">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mi id="XM101">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM102"><mo>-</mo><mrow><mi>t</mi><mo>/</mo><mi>τ</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>,
a <em class="ltx_emph">turn-shift</em> <math id="Ch3.S3.SS4.SSS15.Px4.SPx2.p2.m4" class="ltx_Math" alttext="-t_{0}" display="inline"><mrow><mo>-</mo><msub><mi>t</mi><mn>0</mn></msub></mrow></math> should be applied.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx2.p3" class="ltx_para">
<p class="ltx_p">In addition to changing single element attributes, it is also possible to use DYNK to change certain global attributes such as the reference energy.
This is done through the “element” <span class="ltx_text ltx_font_typewriter">GLOBAL VARS</span>; for example one may want to simulate an energy ramp following the function <span class="ltx_text ltx_font_typewriter">eramp</span> throughout the whole simulation.
For this, one would use the <em class="ltx_emph">SET</em> command “<span class="ltx_text ltx_font_typewriter">SET GLOBAL-VARS E0 eramp 1 -1 0</span>”.
Because of this, SixTrack does not accept a real single element in <span class="ltx_text ltx_font_typewriter">fort.2</span> named <span class="ltx_text ltx_font_typewriter">GLOBAL-VARS</span> if <span class="ltx_text ltx_font_typewriter">DYNK</span> is active.</p>
</div>
<figure id="Ch3.T5" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.5: </span>Element types and attributes available in DYNK.</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                      <span class="ltx_text" style="background-color:#B3B3FF;">
Element type (idx)</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text" style="background-color:#B3B3FF;">Attribute</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text" style="background-color:#B3B3FF;">Units</span>
                    </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">
                      <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
                    </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">[-1mm] Standard thin elements</span>
<span class="ltx_p">(<math id="Ch3.T5.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>1 – <math id="Ch3.T5.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>10),</span>
<span class="ltx_p">Section <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a></span>
<span class="ltx_p">[-3mm]</span>
</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">average_ms</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">radians * m<sup class="ltx_sup">-n</sup>
</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">See Table <a href="#Ch3.T3" title="Table 3.3 ‣ Format ‣ Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3</span></a>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">RF cavities (<math id="Ch3.T5.m3" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>12),</span>
<span class="ltx_p">Section <a href="#Ch3.S2.SS1.SSS4" title="Cavities ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a></span>
</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">voltage</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">MV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">One-turn accelerating voltage</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                      <span class="ltx_text ltx_font_typewriter">harmonic</span>
                    </td>
<td class="ltx_td ltx_align_left">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Harmonic number of the cavity</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                      <span class="ltx_text ltx_font_typewriter">lag_angle</span>
                    </td>
<td class="ltx_td ltx_align_left">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Lag angle of the cavity</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">RF multipoles</span>
<span class="ltx_p">(<math id="Ch3.T5.m4" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>23, <math id="Ch3.T5.m5" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>26 – <math id="Ch3.T5.m6" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math>28),</span>
<span class="ltx_p">Section <a href="#Ch3.S2.SS1.SSS10" title="Crab Cavity ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a></span>
</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">voltage</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">MV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Kick voltage</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                      <span class="ltx_text ltx_font_typewriter">frequency</span>
                    </td>
<td class="ltx_td ltx_align_left">MHz</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Frequency</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left">
                      <span class="ltx_text ltx_font_typewriter">phase</span>
                    </td>
<td class="ltx_td ltx_align_left">radians</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;">Offset between zero-crossing and ideal bunch center</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">Electron lens</span>
<span class="ltx_p">(29),</span>
<span class="ltx_p">Section <a href="#Ch3.S3.SS9" title="3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.9</span></a></span>
</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">thetamax</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">mrad</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Maximum angular kick</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p">Scattering</span>
<span class="ltx_p">(40),</span>
<span class="ltx_p">Section <a href="#Ch3.S3.SS10" title="3.3.10 Scattering ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.10</span></a></span>
</span>
</td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">scaling</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">–</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Scaling of probability, see Section <a href="#Ch3.S3.SS10" title="3.3.10 Scattering ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.10</span></a>, paragraph about ELEM command.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" rowspan="3">
<span class="ltx_inline-block ltx_parbox ltx_align_middle" style="width:113.8pt;">
<span class="ltx_p"><span class="ltx_text ltx_font_typewriter">GLOBAL-VARS</span></span>
<span class="ltx_p">Not a real element,</span>
<span class="ltx_p">changes global variable</span>
</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">
                      <span class="ltx_text ltx_font_typewriter">E0</span>
                    </td>
<td class="ltx_td ltx_align_left ltx_border_t">MeV</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:170.7pt;">Reference energy of synchronous particle</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td"></td>
<td class="ltx_td"></td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:170.7pt;"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_t"></td>
<td class="ltx_td ltx_border_t"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:170.7pt;"></td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S3.SS4.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">NOFILE</h6>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">The presence of this statement in a DYNK block switches off the normal writing of the output file “dynksets.dat” in every line, instead producing a file only containing the message “### DYNK file output was disabled with flag NOFILE in fort.3 ###”.
This can be useful to save disk space in very long simulations.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">DEBU</h6>
<div id="Ch3.S3.SS4.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p">This statement switches on extra “debugging” output from DYNK.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS4.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Output file <em class="ltx_emph">dynksets.dat</em>
</h6>
<div id="Ch3.S3.SS4.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">When a DYNK block is present in the input file, a file “dynksets.dat” is created and in the current working directory.
Unless a <em class="ltx_emph">NOFILE</em> statement is present, this file contains first a header “# turn element attribute SETidx funname value”, followed by rows of data in the format specified in the header.
This data is written for all element/attribute combinations and in all turns, wether a SET is active for this element/attribute in this turn or not.
If no <em class="ltx_emph">SET</em> is active when the line is written out, the <em class="ltx_emph">SETidx</em> is written as -1, and the <em class="ltx_emph">funname</em> is “N/A”.
If a SET is active when the line is written out, the <em class="ltx_emph">SETidx</em> is the index of the currently active <em class="ltx_emph">SET</em> statement, where the first statement occuring in fort.3 has index 1 etc.
Similarly, the <em class="ltx_emph">funname</em> is the name referencing the currently active <em class="ltx_emph">FUN</em> statement.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Examples</h6>
<section id="Ch3.S3.SS4.SSS15.Px6.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Replacement of RIPP block</h6>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx1.p1" class="ltx_para">
<p class="ltx_p">One use of the DYNK block is to replace the functionality of the RIPP block (Section <a href="#Ch3.S3.SS3" title="3.3.3 Power Supply Ripple ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.3</span></a>).
The FUN type COSF_RIPP is provided for exactly this purpose, and provides an exact replacement.
As an example, the RIPP block in the SixTest test-case prob1 looks like (slightly reduced in size):</p>
<pre class="ltx_verbatim ltx_font_typewriter">
RIPPLE OF POWER SUPPLIES------------------------------------------------
         dmqx1f50l5+2      3.2315D-10    224.9
         dmqx2af50l5+2    -3.2315D-10    224.9
         dmqx1f10mel5+2    2.5246D-16    0.0011245
NEXT
</pre>
<p class="ltx_p">This can be replaced by the following:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
NOFILE
FUN RIPP-dmqx1f50l5+2 COSF_RIPP 3.2315D-10 224.9 0.0
SET dmqx1f50l5+2 average_ms RIPP-dmqx1f50l5+2 1 -1 0
FUN RIPP-dmqx2af50l5+2 COSF_RIPP -3.2315D-10 224.9 0.0
SET dmqx2af50l5+2 average_ms RIPP-dmqx2af50l5+2 1 -1 0
FUN RIPP-dmqx1f20kl5+2 COSF_RIPP 2.5246D-12 0.56225 0.0
SET dmqx1f20kl5+2 average_ms RIPP-dmqx1f20kl5+2 1 -1 0
NEXT
</pre>
<p class="ltx_p">Here, each RIPP data line is replaced with two lines, one FUN statement for generating the function, and one SET statement for applying the value.
Note that the SET statements have an end-time “-1”, meaning it is used untill the end of the simulation.
Also note the precense of the NOFILE flag, which is used to not generate a potentially very large (for very long simulations) dynkfile.dat output file.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px6.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Starting tracking inside a bump</h6>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx2.p1" class="ltx_para">
<p class="ltx_p">This example was taken from the paper <cite class="ltx_cite">[<a href="#bib.bib37" title="" class="ltx_ref">37</a>]</cite>, and demonstrates how a bump can be temporarilly disabled if the starting point of the tracking is inside of it.
The reason for doing this is removing the neccessity of generating a starting distribution with the bump already applied.
Here, the HL-LHC v1.1 lattice is used, with vertical crab cavities around the first interaction point (IP1, ATLAS), which is also the point where the tracking is started.
The crab cavities opening the bump are called CRAB_IP1_L1<math id="Ch3.S3.SS4.SSS15.Px6.SPx2.p1.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4, while the closing cavities are CRAB_IP1_R1<math id="Ch3.S3.SS4.SSS15.Px6.SPx2.p1.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4.
The DYNK block for this looks like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
FUN zero CONST 0.0
FUN CV_1R1 Get CRAB_IP1_R1 voltage
FUN CV_1R2 GET CRAB_IP1_R2 voltage
FUN CV_1R3 GET CRAB_IP1_R3 voltage
FUN CV_1R4 GET CRAB_IP1_R4 voltage
SET CRAB_IP1_R1 voltage zero 1 1 0
SET CRAB_IP1_R2 voltage zero 1 1 0
SET CRAB_IP1_R3 voltage zero 1 1 0
SET CRAB_IP1_R4 voltage zero 1 1 0
SET CRAB_IP1_R1 voltage CV_1R1 2 2 0
SET CRAB_IP1_R2 voltage CV_1R2 2 2 0
SET CRAB_IP1_R3 voltage CV_1R3 2 2 0
SET CRAB_IP1_R4 voltage CV_1R4 2 2 0
NEXT
</pre>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx2.p2" class="ltx_para">
<p class="ltx_p">Here, the function “zero” is defined such that it always returns 0.0, and is used to switch off the closing cavities in the first turn, i.e. when the beam exits the bump.
Further, the functions CV_1R1<math id="Ch3.S3.SS4.SSS15.Px6.SPx2.p2.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>1R4 and CV_1L are used to store the original value of the voltages, without having to explicitly enter them into the DYNK block.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx2.p3" class="ltx_para">
<p class="ltx_p">The SET statements then first sets the voltage of all the cavities to zero in turn 1, and then in turn 2 sets it to their respective “switched on” voltages.
The SET statements end after turn 2, but the last values are retained.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx2.p4" class="ltx_para">
<p class="ltx_p">This means that when the simulation starts with the bunch in IP1, it exits the bump without any kicks from the closing crab cavities.
It then comes around (still in turn 1), and encountered the switched-on opening cavities CRAB_IP1_L1<math id="Ch3.S3.SS4.SSS15.Px6.SPx2.p4.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4, which crabs the beam.
After passing through IP1, the turn counter is increased from 1 to 2, triggering the SET statements to switch on the closing cavities CRAB_IP1_R1<math id="Ch3.S3.SS4.SSS15.Px6.SPx2.p4.m2" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>4 as well.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px6.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Ramp and exponential decay of crab voltage, combined with a linear drift of crab phase</h6>
<figure id="Ch3.F1" class="ltx_figure"><img src="x1.png" id="Ch3.F1.g1" class="ltx_graphics ltx_centering" width="601" height="306" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 3.1: </span>Singals generate by DYNK example for ramp + exponential decay of crab voltage, and also linear drift of crab phase. Only the signals for CRAB_IP1_L1 are shown. The plot is made from the data in dynksets.dat.</figcaption>
</figure>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx3.p1" class="ltx_para">
<p class="ltx_p">This slightly more complicated example builds on the example given above.
It shows how to change two parameters (voltage and phase) of several objects.
It also demonstrates how functions can be chained together, making more complicated functions.
Some of the resulting functions are shown in Figure <a href="#Ch3.F1" title="Figure 3.1 ‣ Ramp and exponential decay of crab voltage, combined with a linear drift of crab phase ‣ Examples ‣ 3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>, and the DYNK block here looks like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DYNK
/DEBUG
FUN zero CONST 0.0
FUN CV_R1 GET CRAB_IP1_R1 voltage
FUN CV_R2 GET CRAB_IP1_R2 voltage
FUN CV_R3 GET CRAB_IP1_R3 voltage
FUN CV_R4 GET CRAB_IP1_R4 voltage
FUN CV_L  GET CRAB_IP1_L1 voltage
FUN ramp LIN 0.02 0
FUN ramp_R1 MUL CV_R1 ramp
FUN ramp_R2 MUL CV_R2 ramp
FUN ramp_R3 MUL CV_R3 ramp
FUN ramp_R4 MUL CV_R4 ramp
FUN ramp_L  MUL CV_L  ramp
SET CRAB_IP1_R1 voltage zero 1 10 0
SET CRAB_IP1_R2 voltage zero 1 10 0
SET CRAB_IP1_R3 voltage zero 1 10 0
SET CRAB_IP1_R4 voltage zero 1 10 0
SET CRAB_IP1_L1 voltage zero 1 9 0
SET CRAB_IP1_L2 voltage zero 1 9 0
SET CRAB_IP1_L3 voltage zero 1 9 0
SET CRAB_IP1_L4 voltage zero 1 9 0
/
SET CRAB_IP1_R1 voltage ramp_R1 11 61 -11
SET CRAB_IP1_R2 voltage ramp_R2 11 61 -11
SET CRAB_IP1_R3 voltage ramp_R3 11 61 -11
SET CRAB_IP1_R4 voltage ramp_R4 11 61 -11
SET CRAB_IP1_L1 voltage ramp_L 10 60 -10
SET CRAB_IP1_L2 voltage ramp_L 10 60 -10
SET CRAB_IP1_L3 voltage ramp_L 10 60 -10
SET CRAB_IP1_L4 voltage ramp_L 10 60 -10
/
/Voltage decay and detuning
FUN expCore LIN -0.05 0.0
FUN decay EXP expCore
FUN decayScaled MUL decay CV_L
SET CRAB_IP1_L1 voltage decayScaled 70 100 -70
SET CRAB_IP1_L2 voltage decayScaled 70 100 -70
SET CRAB_IP1_L3 voltage decayScaled 70 100 -70
SET CRAB_IP1_L4 voltage decayScaled 70 100 -70
FUN phasedrift LIN 0.3141592654 0.0
SET CRAB_IP1_L1 phase phasedrift 70 100 -70
SET CRAB_IP1_L2 phase phasedrift 70 100 -70
SET CRAB_IP1_L3 phase phasedrift 70 100 -70
SET CRAB_IP1_L4 phase phasedrift 70 100 -70
NEXT
</pre>
<p class="ltx_p">The first functions defined here are the same as above, storing the default values (as defined in the single element list) for the relevant elements and also zero.
Then follows a normalized linear ramp function “ramp”, with gradient 0.02 = 1/50.
This is then used by the “specialized” ramp functions “ramp_R1<math id="Ch3.S3.SS4.SSS15.Px6.SPx3.p1.m1" class="ltx_Math" alttext="\cdots" display="inline"><mi mathvariant="normal">⋯</mi></math>R4”, which scales “ramp” so that the end point is the standard voltages for <math id="Ch3.S3.SS4.SSS15.Px6.SPx3.p1.m2" class="ltx_Math" alttext="t\in 0\ldots 50" display="inline"><mrow><mi>t</mi><mo>∈</mo><mrow><mn>0</mn><mo>⁢</mo><mi mathvariant="normal">…</mi><mo>⁢</mo><mn>50</mn></mrow></mrow></math>.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx3.p2" class="ltx_para">
<p class="ltx_p">These functions are used to first set the crabs to 0.0 for the first 9 revolutions, and in the 10th revolution the ramp starts.
As the “ramp” function is defined starting at turn 0, a shift -10 or -11 is applied to the ramps.
The ramp is switched off after turn 60/61, leaving the crabs to be operating at the last SET value.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx3.p3" class="ltx_para">
<p class="ltx_p">Further, we want to demonstrate a failure in the crab voltage.
This is done using an exponential decaying function <math id="Ch3.S3.SS4.SSS15.Px6.SPx3.p3.m1" class="ltx_Math" alttext="V(t)=V_{0}\exp\left(-0.05t\right)" display="inline"><mrow><mrow><mi>V</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM103">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mi id="XM104">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM105"><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>, which is implemented as three chained functions:</p>
<ul class="ltx_itemize">
<li id="Ch3.I32.ix1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">expCore: </span>
<div id="Ch3.I32.ix1.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I32.ix1.p1.m1" class="ltx_Math" alttext="f(t)=-0.05t+0.0" display="inline"><mrow><mrow><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM106">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow></mrow></math></p>
</div>
</li>
<li id="Ch3.I32.ix2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">decay: </span>
<div id="Ch3.I32.ix2.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I32.ix2.p1.m1" class="ltx_Math" alttext="g(t)=\exp(f(t))=\exp(-0.05t+0.0)" display="inline"><mrow><mrow><mi>g</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM107">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi id="XM109">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM110"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM108">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi id="XM111">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM112"><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</li>
<li id="Ch3.I32.ix3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">decayScaled: </span>
<div id="Ch3.I32.ix3.p1" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I32.ix3.p1.m1" class="ltx_Math" alttext="h(t)=V_{0}\cdot g(f(t))=V_{0}\cdot\exp(f(t))=\exp(-0.05t+0.0)" display="inline"><mrow><mrow><mi>h</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM113">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⋅</mo><mi>g</mi></mrow><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM115"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM114">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><msub><mi>V</mi><mn>0</mn></msub><mo>⋅</mo><mrow><mi id="XM117">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM118"><mi>f</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM116">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow><mo>=</mo><mrow><mi id="XM119">exp</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mrow id="XM120"><mrow><mo>-</mo><mrow><mn>0.05</mn><mo>⁢</mo><mi>t</mi></mrow></mrow><mo>+</mo><mn>0.0</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</li>
</ul>
<p class="ltx_p">For the SET, the time <math id="Ch3.S3.SS4.SSS15.Px6.SPx3.p3.m2" class="ltx_Math" alttext="t" display="inline"><mi>t</mi></math> is then shifted by -70 turns, so that the functions are evaluated starting at t=0.</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px6.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Detuning a cavity (accelerating or crab)</h6>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx4.p1" class="ltx_para">
<br class="ltx_break"><span class="ltx_ERROR undefined">\todo</span>
<p class="ltx_p">[inline]Write
</p>
</div>
</section>
<section id="Ch3.S3.SS4.SSS15.Px6.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Using the PIPE function</h6>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx5.p1" class="ltx_para">
<br class="ltx_break">
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx5.p2" class="ltx_para">
<p class="ltx_p">To use the PIPE functionality, add a FUN and SET to the DYNK block such as:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
FUN pipe1 PIPE /tmp/pip1 /tmp/pip2 myID1 4242
SET  ACFCA.AR1.B1 voltage pipe1 10 -1 -9
</pre>
<p class="ltx_p">Then create the two pipes using the <span class="ltx_text ltx_font_typewriter">mkfifo</span> UNIX command, e.g. <span class="ltx_text ltx_font_typewriter">mkfifo pip1</span> and <span class="ltx_text ltx_font_typewriter">mkfifo pip2</span> in the chosen directory.
When starting SixTrack, it will first open the input pipe (while reading the DYNK block), and wait for the external program to do the same.
This can be simulated by running <span class="ltx_text ltx_font_typewriter">cat &gt; pip1</span>; it is also possible to open the input pipe before starting SixTrack.
After opening the input pipe, SixTrack will open the output pipe, again this can be simulated by running <span class="ltx_text ltx_font_typewriter">cat pip2</span>, and again this pipe may be opened before starting SixTrack.
Note that when SixTrack ends, the output pipe will be closed, so the recieving <span class="ltx_text ltx_font_typewriter">cat</span> process is terminated.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx5.p3" class="ltx_para">
<p class="ltx_p">After opening the output pipe, SixTrack writes the line <span class="ltx_text ltx_font_typewriter">DYNKPIPE !******************!</span> to this file.
It then writes a line similar to <span class="ltx_text ltx_font_typewriter">INIT ID=myID1 for FUN=pipe1</span> for each FUN using this output pipe.</p>
</div>
<div id="Ch3.S3.SS4.SSS15.Px6.SPx5.p4" class="ltx_para">
<p class="ltx_p">During tracking, when one of the PIPE FUNs are called SixTrack writes a line similar to <span class="ltx_text ltx_font_typewriter">GET ID=myID1 TURN= 1</span> to the output pipe.
Note that the turn number is the one passed to the FUN from SET, i.e. including any turn-shift.
It then waits for a single floating point number to be written (in ascii) to the input pipe, which is then read and returned from the FUN.</p>
</div>
</section>
</section>
</section>
<section id="Ch3.S3.SS5" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.5 </span>Beam–Beam Element</h4>
<section id="Ch3.S3.SS5.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS5.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The beam–beam kick, including a separation of the beams, is treated à la Basetti and Erskine <cite class="ltx_cite">[<a href="#bib.bib18" title="" class="ltx_ref">18</a>]</cite> and implemented as in MAD <cite class="ltx_cite">[<a href="#bib.bib22" title="" class="ltx_ref">22</a>]</cite>.
However, a much faster but nevertheless precise calculation using interpolation can be used <cite class="ltx_cite">[<a href="#bib.bib24" title="" class="ltx_ref">24</a>]</cite>.
For SixTrack version 3 the beam–beam is also available in the 6D form à la Hirata <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>.
Lastly, the linear coupling has been considered in 4 and 6 dimensional phase space <cite class="ltx_cite">[<a href="#bib.bib20" title="" class="ltx_ref">20</a>]</cite>.</p>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS5.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">BEAM</p>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS5.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable but at least one</p>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS5.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p">Two different input formats are available, “traditional” and “EXPERT”.
If “EXPERT” mode is wanted, this is triggered by adding the flag <span class="ltx_text ltx_font_typewriter">EXPERT</span> on the first line of the block.</p>
</div>
<section id="Ch3.S3.SS5.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Traditional format</h6>
<div id="Ch3.S3.SS5.SSS15.Px4.SPx1.p1" class="ltx_para">
<ul id="Ch3.I33" class="ltx_itemize">
<li id="Ch3.I33.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I33.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">partnum emitnx emitny sigz sige ibeco
ibtyp lhc ibbc</span></p>
</div>
</li>
<li id="Ch3.I33.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I33.i2.p1" class="ltx_para">
<p class="ltx_p">other data lines: <span class="ltx_text ltx_font_italic">name ibsix xang xplane xstr</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S3.SS5.SSS15.Px4.SPx1.p2" class="ltx_para">
<dl id="Ch3.I34" class="ltx_description">
<dt id="Ch3.I34.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">partnum</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix1.p1" class="ltx_para">
<p class="ltx_p">(float) Number of particles in bunch</p>
</div>
</dd>
<dt id="Ch3.I34.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">emitnx,emitny</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix2.p1" class="ltx_para">
<p class="ltx_p">(floats) Horizontal and vertical normalized
emittance respectively [<math id="Ch3.I34.ix2.p1.m1" class="ltx_Math" alttext="\mu m\cdot rad" display="inline"><mrow><mrow><mrow><mi>μ</mi><mo>⁢</mo><mi>m</mi></mrow><mo>⋅</mo><mi>r</mi></mrow><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>d</mi></mrow></math>]</p>
</div>
</dd>
<dt id="Ch3.I34.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">sigz,sige</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix3.p1" class="ltx_para">
<p class="ltx_p">(floats) R.m.s. bunch length [m] and r.m.s. energy
spread</p>
</div>
</dd>
<dt id="Ch3.I34.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibeco</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix4.p1" class="ltx_para">
<p class="ltx_p">(integer) Switch (0 = off; 1 = on) to subtract the
closed orbit introduced by the separation of the beams. It is
recommended to always subtract it as it is not yet calculated in a
selfconsistent manner. The <em class="ltx_emph">ibeco</em> switch also acts on the “wire” elements <a href="#Ch3.S3.SS6" title="3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.6</span></a> in the same way as on the beam-beam elements. It subtracts the closed orbit introduced by the wire if <em class="ltx_emph">ibeco</em>=1 and applies it if <em class="ltx_emph">ibeco</em>=0.</p>
</div>
</dd>
<dt id="Ch3.I34.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibtyp</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix5.p1" class="ltx_para">
<p class="ltx_p">(integer) Switch (0 = off; 1 = on) to use the fast
beam–beam algorithms developed in collaboration with G.A. Erskine
and E. McIntosh. The linear optics are calculated with “exact”
beam–beam kicks.</p>
</div>
</dd>
<dt id="Ch3.I34.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">lhc</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix6.p1" class="ltx_para">
<p class="ltx_p">For the LHC with its anti–symmetric IR the separation of
the beams in one plane can be calculated by the <math id="Ch3.I34.ix6.p1.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function of
the other plane. For flat beams (not anti-symmetric optics) the separation
can be loaded from the fort.2 file. (0 = off; 1 = anti-symmetric; 2 = load from file).</p>
</div>
</dd>
<dt id="Ch3.I34.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibbc</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix7.p1" class="ltx_para">
<p class="ltx_p">Linear coupling considered in 4D and 6D (0 = off; 1 = on).</p>
</div>
</dd>
<dt id="Ch3.I34.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix8.p1" class="ltx_para">
<p class="ltx_p">Name of 6D beam–beam element. Beam–beam elements that
do not appear will be treated as 4D kicks.</p>
</div>
</dd>
<dt id="Ch3.I34.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibsix</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix9.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of slices of the 6D beam–beam element.
If <span class="ltx_text ltx_font_italic">ibsix</span> is set to 0 this element is treated as a 4D element.</p>
</div>
</dd>
<dt id="Ch3.I34.ix10" class="ltx_item"><span class="ltx_tag ltx_tag_description">xang</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix10.p1" class="ltx_para">
<p class="ltx_p">(float) Half crossing angle (angle the between the trajectories of the two beams) at this particular element [rad].</p>
</div>
</dd>
<dt id="Ch3.I34.ix11" class="ltx_item"><span class="ltx_tag ltx_tag_description">xplane</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix11.p1" class="ltx_para">
<p class="ltx_p">(float) Crossing plane angle [rad].</p>
</div>
</dd>
<dt id="Ch3.I34.ix12" class="ltx_item"><span class="ltx_tag ltx_tag_description">xstr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I34.ix12.p1" class="ltx_para">
<p class="ltx_p">(float) Angle of the position of the slices in the boosted frame [rad] (i.e. <math id="Ch3.I34.ix12.p1.m1" class="ltx_Math" alttext="X=Z\sin(\mathit{xstr})\cos(\mathit{xplane})" display="inline"><mrow><mi>X</mi><mo>=</mo><mrow><mi>Z</mi><mo>⁢</mo><mrow><mi id="XM121">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM122">𝑥𝑠𝑡𝑟</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM123">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM124">𝑥𝑝𝑙𝑎𝑛𝑒</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math>, <math id="Ch3.I34.ix12.p1.m2" class="ltx_Math" alttext="Y=Z\sin(\mathit{xstr})\cos(\mathit{xplane})" display="inline"><mrow><mi>Y</mi><mo>=</mo><mrow><mi>Z</mi><mo>⁢</mo><mrow><mi id="XM125">sin</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM126">𝑥𝑠𝑡𝑟</mi><mo stretchy="false">)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM127">cos</mi><mo>⁡</mo><mrow><mo stretchy="false">(</mo><mi id="XM128">𝑥𝑝𝑙𝑎𝑛𝑒</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></mrow></math> ).
In absence of crabbing user should make sure <span class="ltx_text ltx_font_italic">xstr=xang</span>; in case the <span class="ltx_text ltx_font_italic">xstr</span> flag is not set then <span class="ltx_text ltx_font_italic">xstr=xang</span> is assumed and a warning is printed (since version 4.5.45).</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">EXPERT format</h6>
<div id="Ch3.S3.SS5.SSS15.Px4.SPx2.p1" class="ltx_para">
<ul id="Ch3.I35" class="ltx_itemize">
<li id="Ch3.I35.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I35.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">EXPERT</span></p>
</div>
</li>
<li id="Ch3.I35.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I35.i2.p1" class="ltx_para">
<p class="ltx_p">second data line: <span class="ltx_text ltx_font_italic">partnum emitnx emitny sigz sige ibeco
ibtyp lhc ibbc</span></p>
</div>
</li>
<li id="Ch3.I35.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I35.i3.p1" class="ltx_para">
<p class="ltx_p">other data lines – 4D BB lens (1 line per element):
<br class="ltx_break"><span class="ltx_text ltx_font_italic">name ibsix <math id="Ch3.I35.i3.p1.m1" class="ltx_Math" alttext="\Sigma_{x,x}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM129">x</mi><mo mathvariant="normal">,</mo><mi id="XM130">x</mi></mrow></msub></math> <math id="Ch3.I35.i3.p1.m2" class="ltx_Math" alttext="\Sigma_{y,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM131">y</mi><mo mathvariant="normal">,</mo><mi id="XM132">y</mi></mrow></msub></math> h-sep v-sep strength-ratio</span></p>
</div>
</li>
<li id="Ch3.I35.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I35.i4.p1" class="ltx_para">
<p class="ltx_p">other data lines – 6D BB lens (3 lines per element):
<br class="ltx_break"><span class="ltx_text ltx_font_italic">name ibsix xang xplane h-sep v-sep</span>
<br class="ltx_break"><math id="Ch3.I35.i4.p1.m1" class="ltx_Math" alttext="\Sigma_{x,x}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM133">x</mi><mo>,</mo><mi id="XM134">x</mi></mrow></msub></math><span class="ltx_text ltx_font_italic"> <math id="Ch3.I35.i4.p1.m2" class="ltx_Math" alttext="\Sigma_{x,xp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM135">x</mi><mo mathvariant="normal">,</mo><mrow id="XM136"><mi>x</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow></mrow></msub></math> <math id="Ch3.I35.i4.p1.m3" class="ltx_Math" alttext="\Sigma_{xp,xp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM137"><mi>x</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mrow id="XM138"><mi>x</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow></mrow></msub></math> <math id="Ch3.I35.i4.p1.m4" class="ltx_Math" alttext="\Sigma_{y,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM139">y</mi><mo mathvariant="normal">,</mo><mi id="XM140">y</mi></mrow></msub></math> <math id="Ch3.I35.i4.p1.m5" class="ltx_Math" alttext="\Sigma_{y,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM141">y</mi><mo mathvariant="normal">,</mo><mrow id="XM142"><mi>y</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow></mrow></msub></math></span>
<br class="ltx_break"><math id="Ch3.I35.i4.p1.m6" class="ltx_Math" alttext="\Sigma_{yp,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM143"><mi>y</mi><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM144"><mi>y</mi><mo>⁢</mo><mi>p</mi></mrow></mrow></msub></math><span class="ltx_text ltx_font_italic"> <math id="Ch3.I35.i4.p1.m7" class="ltx_Math" alttext="\Sigma_{x,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM145">x</mi><mo mathvariant="normal">,</mo><mi id="XM146">y</mi></mrow></msub></math> <math id="Ch3.I35.i4.p1.m8" class="ltx_Math" alttext="\Sigma_{x,py}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM147">x</mi><mo mathvariant="normal">,</mo><mrow id="XM148"><mi>p</mi><mo mathvariant="italic">⁢</mo><mi>y</mi></mrow></mrow></msub></math> <math id="Ch3.I35.i4.p1.m9" class="ltx_Math" alttext="\Sigma_{xp,y}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM149"><mi>x</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mi id="XM150">y</mi></mrow></msub></math> <math id="Ch3.I35.i4.p1.m10" class="ltx_Math" alttext="\Sigma_{xp,yp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mrow id="XM151"><mi>x</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow><mo mathvariant="normal">,</mo><mrow id="XM152"><mi>y</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow></mrow></msub></math> strength-ratio</span>
<br class="ltx_break"></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S3.SS5.SSS15.Px4.SPx2.p2" class="ltx_para">
<p class="ltx_p">Some parameters are new or defined in a different way:</p>
<dl id="Ch3.I36" class="ltx_description">
<dt id="Ch3.I36.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">lhc</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix1.p1" class="ltx_para">
<p class="ltx_p">This parameter is kept for now only for RHIC studies when equal to 9.</p>
</div>
</dd>
<dt id="Ch3.I36.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix2.p1" class="ltx_para">
<p class="ltx_p">Name of the beam–beam element.</p>
</div>
</dd>
<dt id="Ch3.I36.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibsix</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of slices of the 6D beam–beam element.
<br class="ltx_break">If <span class="ltx_text ltx_font_italic">ibsix</span> is set to 0 this element is treated as a 4D element.
<br class="ltx_break">If <span class="ltx_text ltx_font_italic">ibsix</span> is larger or equal 1 this element is treated as a 6D element.</p>
</div>
</dd>
<dt id="Ch3.I36.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I36.ix4.m1" class="ltx_Math" alttext="\Sigma_{xx}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>x</mi><mo>⁢</mo><mi>x</mi></mrow></msub></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix4.p1" class="ltx_para">
<p class="ltx_p">Horizontal <math id="Ch3.I36.ix4.p1.m1" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.I36.ix4.p1.m2" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM153"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I36.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I36.ix5.m1" class="ltx_Math" alttext="\Sigma_{yy}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>y</mi><mo>⁢</mo><mi>y</mi></mrow></msub></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix5.p1" class="ltx_para">
<p class="ltx_p">Vorizontal <math id="Ch3.I36.ix5.p1.m1" class="ltx_Math" alttext="\sigma" display="inline"><mi>σ</mi></math> for the strong beam <math id="Ch3.I36.ix5.p1.m2" class="ltx_Math" alttext="\rm{[mm^{2}]}" display="inline"><mrow><mo stretchy="false">[</mo><msup id="XM154"><mi>mm</mi><mn>2</mn></msup><mo stretchy="false">]</mo></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I36.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">h-sep</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix6.p1" class="ltx_para">
<p class="ltx_p">Horizontal beam–beam separation [mm]</p>
</div>
</dd>
<dt id="Ch3.I36.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">v-sep</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix7.p1" class="ltx_para">
<p class="ltx_p">Vertical beam–beam separation [mm]</p>
</div>
</dd>
<dt id="Ch3.I36.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">strength-ratio</span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix8.p1" class="ltx_para">
<p class="ltx_p">Strength ratio with respect to the nominal beam–beam kick strength.
This is useful to allow for splitting one beam–beam kick into several (longitudinally close by) kicks.</p>
</div>
</dd>
<dt id="Ch3.I36.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                    <math id="Ch3.I36.ix9.m1" class="ltx_Math" alttext="\Sigma_{i,j}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi id="XM155">i</mi><mo>,</mo><mi id="XM156">j</mi></mrow></msub></math>
                  </span></dt>
<dd class="ltx_item">
<div id="Ch3.I36.ix9.p1" class="ltx_para">
<p class="ltx_p">Second order momenta matrix for the strong beam, in units of mm and mrad.
For example <math id="Ch3.I36.ix9.p1.m1" class="ltx_Math" alttext="\Sigma_{xxp}" display="inline"><msub><mi mathvariant="normal">Σ</mi><mrow><mi>x</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>p</mi></mrow></msub></math> in [mm mrad]</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Conversion from traditional to EXPERT format</h6>
<div id="Ch3.S3.SS5.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">An automatic converter from the “traditional” input block to the new “expert” format is built into SixTrack; every time a non-EXPERT input block is encountered, a conversion is printed to the standard output.
Therefore, all the user needs to do is to run SixTrack (number of turns does not matter) on an input file that should be converted, and follow the instructions which are printed at the beginning of the program output.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS5.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S3.SS5.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">These beam–beam elements have to appear in the single element list ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) (type 20).
If the “traditional” option is used in the BEAM block, the listing in the single element list must contain their horizontal and vertical beam–beam separations (see <a href="#Ch3.S2.SS1.SSS5" title="Beam–Beam Lens ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</section>
<section id="Ch3.S3.SS5.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Sign Convention</h6>
<div id="Ch3.S3.SS5.SSS15.Px6.p1" class="ltx_para">
<p class="ltx_p">Some clarifications regarding the sign convention used
for the separation and crossing angle variables.
</p>
<ul id="Ch3.I37" class="ltx_itemize">
<li id="Ch3.I37.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I37.i1.p1" class="ltx_para">
<p class="ltx_p">Separations:</p>
<ol id="Ch3.I37.I1" class="ltx_enumerate">
<li id="Ch3.I37.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch3.I37.I1.i1.p1" class="ltx_para">
<p class="ltx_p">The separation is added to the transverse coordinates of each particles just before the beam-beam subroutines (see Fig. <a href="#Ch3.F2" title="Figure 3.2 ‣ Sign Convention ‣ 3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>).</p>
<table id="A5.S3.EGx3" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.Ex5" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex5.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}_{i}=x_{i}+sep_{x}-CO_{x}" display="inline"><mrow><msub><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>x</mi><mi>i</mi></msub><mo>+</mo><mrow><mi>s</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>-</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><mi>x</mi></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch3.Ex6" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex6.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}_{i}=y_{i}+sep_{y}-CO_{y}" display="inline"><mrow><msub><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>y</mi><mi>i</mi></msub><mo>+</mo><mrow><mi>s</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow><mo>-</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch3.I37.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch3.I37.I1.i2.p1" class="ltx_para">
<p class="ltx_p">Lorentz boost applied to the updated coordinates.</p>
</div>
</li>
<li id="Ch3.I37.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch3.I37.I1.i3.p1" class="ltx_para">
<p class="ltx_p">The separation used for the actual beam-beam kick (sep<math id="Ch3.I37.I1.i3.p1.m1" class="ltx_Math" alttext="{}_{x,y,kick}" display="inline"><msub><mi></mi><mrow><mi id="XM157">x</mi><mo>,</mo><mi id="XM158">y</mi><mo>,</mo><mrow id="XM159"><mi>k</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>k</mi></mrow></mrow></msub></math>) is the difference between the centroid of the strong slice (X<math id="Ch3.I37.I1.i3.p1.m2" class="ltx_Math" alttext="{}^{{\dagger}}" display="inline"><msup><mi></mi><mo>†</mo></msup></math>,Y<math id="Ch3.I37.I1.i3.p1.m3" class="ltx_Math" alttext="{}^{{\dagger}}" display="inline"><msup><mi></mi><mo>†</mo></msup></math>) and the each particle (x<math id="Ch3.I37.I1.i3.p1.m4" class="ltx_Math" alttext="{}_{i}" display="inline"><msub><mi></mi><mi>i</mi></msub></math>,y<math id="Ch3.I37.I1.i3.p1.m5" class="ltx_Math" alttext="{}_{i}" display="inline"><msub><mi></mi><mi>i</mi></msub></math>).
</p>
</div>
</li>
<li id="Ch3.I37.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch3.I37.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Antiboost to return to accelerator frame.</p>
</div>
</li>
<li id="Ch3.I37.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(e)</span>
<div id="Ch3.I37.I1.i5.p1" class="ltx_para">
<p class="ltx_p">The separation is removed and the closed orbit is added back. Tracking continues.</p>
<table id="A5.S3.EGx4" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.Ex7" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex7.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}_{i}=x_{i}-sep_{x}+CO_{x}" display="inline"><mrow><msub><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>x</mi><mi>i</mi></msub><mo>-</mo><mrow><mi>s</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><msub><mi>p</mi><mi>x</mi></msub></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><mi>x</mi></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch3.Ex8" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex8.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}_{i}=y_{i}-sep_{y}+CO_{y}" display="inline"><mrow><msub><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi></msub><mo>=</mo><mrow><mrow><msub><mi>y</mi><mi>i</mi></msub><mo>-</mo><mrow><mi>s</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><msub><mi>p</mi><mi>y</mi></msub></mrow></mrow><mo>+</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><mi>y</mi></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
<figure id="Ch3.F2" class="ltx_figure"><img src="x2.png" id="Ch3.F2.g1" class="ltx_graphics ltx_centering" width="538" height="168" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 3.2: </span>Coordinate manipulation taking into consideration the beam-beam lens separation as stated in point 1 of the separation sign convention.</figcaption>
</figure>
</li>
<li id="Ch3.I37.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I37.i2.p1" class="ltx_para">
<p class="ltx_p">Crossing angles:</p>
<ol id="Ch3.I37.I2" class="ltx_enumerate">
<li id="Ch3.I37.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch3.I37.I2.i1.p1" class="ltx_para">
<p class="ltx_p">The closed orbit is removed just before the beam-beam subroutines.</p>
<table id="A5.S3.EGx5" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.Ex9" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex9.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}^{\prime}_{i}=x^{\prime}_{i}-CO_{x^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mi>i</mi><mo>′</mo></msubsup><mo>-</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><msup><mi>x</mi><mo>′</mo></msup></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch3.Ex10" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex10.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}^{\prime}_{i}=y^{\prime}_{i}-CO_{y^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mi>i</mi><mo>′</mo></msubsup><mo>-</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><msup><mi>y</mi><mo>′</mo></msup></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
<li id="Ch3.I37.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch3.I37.I2.i2.p1" class="ltx_para">
<p class="ltx_p">Lorentz boost applied to the updated coordinates.</p>
</div>
</li>
<li id="Ch3.I37.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch3.I37.I2.i3.p1" class="ltx_para">
<p class="ltx_p">Apply Synchro-Betatron Mapping.</p>
</div>
</li>
<li id="Ch3.I37.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch3.I37.I2.i4.p1" class="ltx_para">
<p class="ltx_p">Antiboost to return to accelerator frame.</p>
</div>
</li>
<li id="Ch3.I37.I2.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(e)</span>
<div id="Ch3.I37.I2.i5.p1" class="ltx_para">
<p class="ltx_p">The closed orbit is added back. Tracking continues.
</p>
<table id="A5.S3.EGx6" class="ltx_equationgroup ltx_eqn_eqnarray">
<tr id="Ch3.Ex11" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex11.m1" class="ltx_Math" alttext="\displaystyle\tilde{x}^{\prime}_{i}=x^{\prime}_{i}+CO_{x^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>x</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>x</mi><mi>i</mi><mo>′</mo></msubsup><mo>+</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><msup><mi>x</mi><mo>′</mo></msup></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
<tr id="Ch3.Ex12" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                                  <math id="Ch3.Ex12.m1" class="ltx_Math" alttext="\displaystyle\tilde{y}^{\prime}_{i}=y^{\prime}_{i}+CO_{y^{\prime}}" display="inline"><mrow><msubsup><mover accent="true"><mi>y</mi><mo stretchy="false">~</mo></mover><mi>i</mi><mo>′</mo></msubsup><mo>=</mo><mrow><msubsup><mi>y</mi><mi>i</mi><mo>′</mo></msubsup><mo>+</mo><mrow><mi>C</mi><mo>⁢</mo><msub><mi>O</mi><msup><mi>y</mi><mo>′</mo></msup></msub></mrow></mrow></mrow></math>
                                </td>
<td class="ltx_eqn_center_padright"></td>
</tr>
</table>
</div>
</li>
</ol>
</div>
<figure id="Ch3.F3" class="ltx_figure"><img src="x3.png" id="Ch3.F3.g1" class="ltx_graphics ltx_centering" width="537" height="136" alt="">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure 3.3: </span>Coordinate manipulation to move from the accelerator frame to a head-on collision frame (Figures left and center). A positve crossing angle is considered as shown in the left figure.
Then Lorentz boost and Synchro-Betatron Mapping are applied (right).</figcaption>
</figure>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch3.S3.SS6" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.6 </span>Wire</h4>
<section id="Ch3.S3.SS6.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS6.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The wire block serves for reading in the input parameters for the wire. Each wire also needs to be added as single element in the list of single elements.</p>
</div>
</section>
<section id="Ch3.S3.SS6.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS6.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">WIRE</p>
</div>
</section>
<section id="Ch3.S3.SS6.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS6.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS6.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS6.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">name flag_co current int_length phys_length disp_x disp_y tilt_x tilt_y</em>
A description of the input parameters for the wire is given in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:wire</span>.
</p>
</div>
<figure id="Ch3.T6" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 3.6: </span>Input parameters for WIRE block.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_t" style="width:56.9pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
Arguments</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">unit</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
                </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_t" style="width:56.9pt;">
                  <em class="ltx_emph">name</em>
                </td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:261.8pt;">Name of wire. Must be the same as in list of single elements.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">flag_co</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">flag to define the displacement of the wire in respect to the closed orbit or x=y=0. For <em class="ltx_emph">flag_co</em>=+1 <em class="ltx_emph">disp_*</em> is the distance between x=y=0 and the wire. For <em class="ltx_emph">flag_co</em>=-1 <em class="ltx_emph">disp_*</em> is the distance between the closed orbit and the wire.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">current</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">A</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">wire current</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">int_length</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">m</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">integrated length of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">phys_length</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">m</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">physical length of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">disp_x</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">hor. displacement of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">disp_y</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">vert. displacement of the wire</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">tilt_x</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">hor. tilt of the wire <math id="Ch3.T6.m1" class="ltx_Math" alttext="-90&lt;tilt\_x&lt;90" display="inline"><mrow><mrow><mo>-</mo><mn>90</mn></mrow><mo>&lt;</mo><mrow><mi>t</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>t</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mi>x</mi></mrow><mo>&lt;</mo><mn>90</mn></mrow></math> (uses same defintion as DISP block)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l" style="width:56.9pt;">
                  <em class="ltx_emph">tilt_y</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">degrees</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:261.8pt;">vert. tilt of the wire <math id="Ch3.T6.m2" class="ltx_Math" alttext="-90&lt;tilt\_y&lt;90" display="inline"><mrow><mrow><mo>-</mo><mn>90</mn></mrow><mo>&lt;</mo><mrow><mi>t</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>l</mi><mo>⁢</mo><mi>t</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mi>y</mi></mrow><mo>&lt;</mo><mn>90</mn></mrow></math> (uses same defintion as DISP block)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_t" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></td>
<td class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:261.8pt;"></th>
</tr>
</table>
</figure>
</section>
<section id="Ch3.S3.SS6.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S3.SS6.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">The user has to check that the wires defined in the WIRE block are also defined in the list of single elements and vice versa. All parameters except for the type (type 15) are ignored in the single element definition and the execution is aborted if the parameters are non-zero. In addition to the parameters defined in the WIRE block, the <em class="ltx_emph">ibeco</em> parameter in the BEAM block (see Sec. <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>) imposes the same behavior on the wire as for beam-beam. Explicitly, the closed orbit introduced by the wire is subtracted if <em class="ltx_emph">ibeco</em>=1 and not subtracted if <em class="ltx_emph">ibeco</em>=0.</p>
</div>
</section>
<section id="Ch3.S3.SS6.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S3.SS6.SSS15.Px6.p1" class="ltx_para">
<p class="ltx_p">In the following we give some examples for wire definitions. This example defines two wires wire_1 and wire_2.</p>
</div>
<div id="Ch3.S3.SS6.SSS15.Px6.p2" class="ltx_para">
<p class="ltx_p">The input block in <code class="ltx_verbatim ltx_font_typewriter">fort.3</code> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
WIRE
wire_1   -1  +98.9   2.0  1.0   10.0   10.0     1.1     1.1
wire_2   -1  +98.9   2.0  1.0   10.0   10.0     0.0     0.0
NEXT
</pre>
<p class="ltx_p">The single and structure element definition in <code class="ltx_verbatim ltx_font_typewriter">fort.2</code> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
SINGLE ELEMENTS---------------------------------------------------------
...
wire_1           15   0.000000000e+00   0.000000000e+00
0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
wire_2           15   0.000000000e+00   0.000000000e+00
0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
...
STRUCTURE INPUT---------------------------------------------------------
...
BLOC56            wire_1              wire_2
...
</pre>
<p class="ltx_p">Note that all parameters except for the type have to be set to 0 in the single element definition.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS7" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.7 </span>“Phase Trombone” Element</h4>
<section id="Ch3.S3.SS7.SSS15.Px6.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx1.p1" class="ltx_para">
<p class="ltx_p">The linear “phase trombone” allows to
introduce a change in the tranverse phases without spoiling the linear
optics of the rest of the machine, i.e. the Twiss parameters are the
same at entrance and exit of the element.</p>
</div>
</section>
<section id="Ch3.S3.SS7.SSS15.Px6.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx2.p1" class="ltx_para">
<p class="ltx_p">TROM</p>
</div>
</section>
<section id="Ch3.S3.SS7.SSS15.Px6.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx3.p1" class="ltx_para">
<p class="ltx_p">1 line with name and then in
blocks of 14 lines with 3 entries each</p>
</div>
</section>
<section id="Ch3.S3.SS7.SSS15.Px6.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx4.p1" class="ltx_para">
<ul id="Ch3.I38" class="ltx_itemize">
<li id="Ch3.I38.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I38.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">name</span></p>
</div>
</li>
<li id="Ch3.I38.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I38.i2.p1" class="ltx_para">
<p class="ltx_p">second data line: <span class="ltx_text ltx_font_italic">cx, <math id="Ch3.I38.i2.p1.m1" class="ltx_Math" alttext="cx^{\prime}" display="inline"><mrow><mi>c</mi><mo mathvariant="italic">⁢</mo><msup><mi>x</mi><mo mathvariant="normal">′</mo></msup></mrow></math>, cy</span></p>
</div>
</li>
<li id="Ch3.I38.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I38.i3.p1" class="ltx_para">
<p class="ltx_p">third data line: <math id="Ch3.I38.i3.p1.m1" class="ltx_Math" alttext="cy^{\prime}" display="inline"><mrow><mi>c</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math><span class="ltx_text ltx_font_italic">, cz, <math id="Ch3.I38.i3.p1.m2" class="ltx_Math" alttext="cz^{\prime}" display="inline"><mrow><mi>c</mi><mo mathvariant="italic">⁢</mo><msup><mi>z</mi><mo mathvariant="normal">′</mo></msup></mrow></math></span></p>
</div>
</li>
<li id="Ch3.I38.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I38.i4.p1" class="ltx_para">
<p class="ltx_p">fourth till <math id="Ch3.I38.i4.p1.m1" class="ltx_Math" alttext="15^{th}" display="inline"><msup><mn>15</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math> <span class="ltx_text ltx_font_italic">M(<math id="Ch3.I38.i4.p1.m2" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn mathvariant="normal">6</mn><mo mathvariant="normal">×</mo><mn mathvariant="normal">6</mn></mrow></math>)</span> matrix</p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx4.p2" class="ltx_para">
<dl id="Ch3.I39" class="ltx_description">
<dt id="Ch3.I39.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name</span></dt>
<dd class="ltx_item">
<div id="Ch3.I39.ix1.p1" class="ltx_para">
<p class="ltx_p">May contain up to sixteen characters</p>
</div>
</dd>
<dt id="Ch3.I39.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">cx, <math id="Ch3.I39.ix2.m1" class="ltx_Math" alttext="cx^{\prime}" display="inline"><mrow><mi>c</mi><mo>⁢</mo><msup><mi>x</mi><mo>′</mo></msup></mrow></math>, cy, <math id="Ch3.I39.ix2.m2" class="ltx_Math" alttext="cy^{\prime}" display="inline"><mrow><mi>c</mi><mo>⁢</mo><msup><mi>y</mi><mo>′</mo></msup></mrow></math>, cz, <math id="Ch3.I39.ix2.m3" class="ltx_Math" alttext="cz^{\prime}" display="inline"><mrow><mi>c</mi><mo>⁢</mo><msup><mi>z</mi><mo>′</mo></msup></mrow></math></span></dt>
<dd class="ltx_item">
<div id="Ch3.I39.ix2.p1" class="ltx_para">
<p class="ltx_p">(floats) 6D closed orbit to be added
to the coordinates.</p>
</div>
</dd>
<dt id="Ch3.I39.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">M(<math id="Ch3.I39.ix3.m1" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math>)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I39.ix3.p1" class="ltx_para">
<p class="ltx_p">(floats) <math id="Ch3.I39.ix3.p1.m1" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> matrix elements
</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS7.SSS15.Px6.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S3.SS7.SSS15.Px6.SPx5.p1" class="ltx_para">
<p class="ltx_p">The user has to make sure that the above stated
conditions are fulfilled. When using the <math id="Ch3.S3.SS7.SSS15.Px6.SPx5.p1.m1" class="ltx_Math" alttext="mad\_6t" display="inline"><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi mathvariant="normal">_</mi><mo>⁢</mo><mn>6</mn><mo>⁢</mo><mi>t</mi></mrow></math> <cite class="ltx_cite">[<a href="#bib.bib15" title="" class="ltx_ref">15</a>]</cite>
converter from MAD8 to SixTrack this is guaranteed to be the case. Note
also that the crossterms between the transverse plains are not
considered for the time being.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS8" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.8 </span>Beam Distribution EXchange (BDEX)</h4>
<section id="Ch3.S3.SS8.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS8.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The Beam Distribution EXchange allows an external program to read and modify the beam distribution in SixTrack.
This can be used for tracking part of the machine in an external program, for example for including physics processes that are normally not available in SixTrack.
Another possible use is for multi-bunch tracking, i.e. with an external program “swapping” the bunch at a some point in the ring.
This would be useful for studying (for example) beam loading, where the external program would read the position of a bunch in the cavity, use that to compute an update of the cavity voltage (which can be sent to SixTrack using DYNK FUN PIPE), swap the bunch with another one and track that to the cavity (still at “physics turn” 1, but “SixTrack turn” 2) etc.</p>
</div>
<div id="Ch3.S3.SS8.SSS15.Px1.p2" class="ltx_para">
<p class="ltx_p">Please note that BDEX is currently not supported in the checkpoint/restart version or in the collimation version.
Including BDEX in one of these versions results in a run-time error.</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS8.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">BDEX</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS8.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS8.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p">There are three types of statements possible in a BDEX block, listed below.
Additionally, lines starting with “/” are treated as comments and are ignored.</p>
</div>
<section id="Ch3.S3.SS8.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">ELEM</h6>
<div id="Ch3.S3.SS8.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">ELEM chanName elemName action</em>
<br class="ltx_break">This associates a given element with an already existing channel and an action.
The element must appear in the SINGLE ELEMENT block, and be of type 0 (marker).
The action indicates what should be done with the particle distribution when it reaches this element.
Currently, the only allowed action is “1”, which means “particle exchange”, i.e. output the beam distribution and read back another one at the same point.</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">CHAN</h6>
<div id="Ch3.S3.SS8.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">CHAN chanName chanType …</em>
<br class="ltx_break">This creates a new channel through which the BDEX can communicate.
Currently, the only implemented chanType is PIPE, however TCPIP is also foreseen.</p>
</div>
<div id="Ch3.S3.SS8.SSS15.Px4.SPx2.p2" class="ltx_para">
<p class="ltx_p">For the PIPE type, the statement including arguments is <em class="ltx_emph">CHAN PIPE inPipeName outPipeName format fileUnit</em>.
This uses a pair of UNIX FIFOs, through which SixTrack can comunicate with an external program.
When the channel is used, it sends a message on the outpipe, then waits for a reply with the new distribution over the inPipe.
The format is an integer used to indicate the output/input format, and is currently unused.
The fileUnit is the Fortran unit number that should be used to open the inPipe.
The outPipe is opened on the next unit, so both units fileUnit and fileUnit+1 must be free.</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">DEBU</h6>
<div id="Ch3.S3.SS8.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">This statement switches on extra “debugging” output from BDEX.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS8.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Communication protocols</h6>
<div id="Ch3.S3.SS8.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">The communication protocols used by the different channel types are listed below:</p>
</div>
<section id="Ch3.S3.SS8.SSS15.Px5.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">PIPE communication protocol</h6>
<div id="Ch3.S3.SS8.SSS15.Px5.SPx1.p1" class="ltx_para">
<p class="ltx_p">When a pair of pipes are first initialized, a header “<span class="ltx_text ltx_font_typewriter">BDEX-PIPE !******************!</span>” is written to the output pipe.
Then, when the tracking reaches an element which is marked as active for this channel, it writes another header like “<span class="ltx_text ltx_font_typewriter">BDEX TURN= 1 BEZ=ip1 I= 1 NAPX= 64</span>”, where <span class="ltx_text ltx_font_typewriter">TURN</span> is the number of the current SixTrack turn, <span class="ltx_text ltx_font_typewriter">BEZ</span> the name of the SINGLE ELEMENT, <span class="ltx_text ltx_font_typewriter">I</span> the index of the STRUCTURE ELEMENT, and <span class="ltx_text ltx_font_typewriter">NAPX</span> the number of particles to be written out.
After this follows <span class="ltx_text ltx_font_typewriter">NAPX</span> lines with the particle information (one per particle), each line of the format <span class="ltx_text ltx_font_typewriter">xv(1,j) yv(1,j) xv(2,j) yv(2,j) sigmv(j) ejv(j) ejfv(j) rvv(j) dpsv(j) oidpsv(j) dpsv1(j),nlostp(j)</span> where all but the last floating point numbers, the last being an integer.
Finally, it writes “<span class="ltx_text ltx_font_typewriter">BDEX WAITING...</span>” to the output pipe, and waits for data on the input pipe.</p>
</div>
<div id="Ch3.S3.SS8.SSS15.Px5.SPx1.p2" class="ltx_para">
<p class="ltx_p">The first line expected on the input pipe should be an integer containing the number of particles to write back.
If this integer is -1, the current particle distribution is kept.
Otherwise, a number of lines of the same format as with the output is expected.
After reading in the expected number of particles, the string “<span class="ltx_text ltx_font_typewriter">BDEX TRACKING...</span>” is written to the output pipe and tracking is resumed.</p>
</div>
</section>
<section id="Ch3.S3.SS8.SSS15.Px5.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">TCPIP communication protocol</h6>
<div id="Ch3.S3.SS8.SSS15.Px5.SPx2.p1" class="ltx_para">
<p class="ltx_p">TCPIP is not yet implemented, as it would require an external library.
The FLUKA version implements this, we should make sure that we are compatible with their requirements and ideally their protocol.</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS8.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S3.SS8.SSS15.Px6.p1" class="ltx_para">
<br class="ltx_break">
</div>
<span class="ltx_ERROR undefined">\todo</span>
<div id="Ch3.S3.SS8.SSS15.Px6.p2" class="ltx_para">
<p class="ltx_p">[inline]Example BDEX block, example manual usage, example minimal Python program (location or listing).</p>
</div>
</section>
</section>
<section id="Ch3.S3.SS9" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.9 </span>Electron lens</h4>
<section id="Ch3.S3.SS9.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS9.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The electron lens module serves for reading in the input parameters for different types of electron lenses. Each e-lens also needs to be added as single element in the list of single elements. Currently only the ideal hollow electron lens is implemented.</p>
</div>
</section>
<section id="Ch3.S3.SS9.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS9.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">ELEN</p>
</div>
</section>
<section id="Ch3.S3.SS9.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS9.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S3.SS9.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS9.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">name type thetamax r2 r2ovr1 offset_x offset_y flag_entrance flag_exit</em>
A description of the input parameters for the different e-lens types is given in Table <span class="ltx_ref ltx_ref_self">LABEL:tab:elen</span>. Currently only the ideal hollow electron lens is implemented in SixTrack (type ANNULAR).</p>
</div>
<figure id="Ch3.T7" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table 3.7: </span>Input parameters for ELEN block.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr" style="background-color:#B3B3FF;">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">
Type name</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:56.9pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">Arguments</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">unit</span>
                </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t" style="width:256.1pt;">
                  <span class="ltx_text" style="background-color:#B3B3FF;">Description</span>
                </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:256.1pt;"></th>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;" colspan="4">valid for all types</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">name</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Name of e-lens. Must be the same as in list of single elements.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">type</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">type of electron lens. Available types are ANNULAR.</td>
</tr>
<tr class="ltx_tr" style="background-color:#D9D9FF;">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;" colspan="4">type specific parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;">ANNULAR</td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">thetamax</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mrad</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Maximum kick. This equals the kick received at <math id="Ch3.T7.m1" class="ltx_Math" alttext="r=r_{2}" display="inline"><mrow><mi>r</mi><mo>=</mo><msub><mi>r</mi><mn>2</mn></msub></mrow></math> where <math id="Ch3.T7.m2" class="ltx_Math" alttext="r_{2}" display="inline"><msub><mi>r</mi><mn>2</mn></msub></math> is the outer radius of the electron lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">r2</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Outer radius of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">r2ovr1</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">Outer radius/inner radius.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">offset_x</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">horizontal offset of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">offset_y</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">mm</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">vertical offset of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">flag_entrance</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">enable bends at entrance of e-lens.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;">
                  <em class="ltx_emph">flag_exit</em>
                </td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;">-</td>
<td class="ltx_td ltx_align_justify ltx_border_r" style="width:256.1pt;">enable bends at exit of e-lens (not yet implemented).</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_justify ltx_border_l ltx_border_r" style="width:64.0pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:56.9pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:28.5pt;"></td>
<td class="ltx_td ltx_align_justify" style="width:256.1pt;"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_justify ltx_border_l ltx_border_r ltx_border_t" style="width:64.0pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:56.9pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:28.5pt;"></th>
<th class="ltx_td ltx_align_justify ltx_border_t" style="width:256.1pt;"></th>
</tr>
</table>
</figure>
</section>
<section id="Ch3.S3.SS9.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Remark</h6>
<div id="Ch3.S3.SS9.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">The user has to check that the e-lens defined in the ELEN block is also defined in the list of single elements and vice versa. All parameters except for the type (type 29) are ignored in the single element definition.
The implementation of the ANNULAR type (ideal hollow e-lens) has no explicit energy-dependency, except for the user defined parameter <em class="ltx_emph">thetamax</em> (see <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>).</p>
</div>
</section>
<section id="Ch3.S3.SS9.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S3.SS9.SSS15.Px6.p1" class="ltx_para">
<p class="ltx_p">In the following we give some examples for e-lens definitions.</p>
</div>
<section id="Ch3.S3.SS9.SSS15.Px6.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">ANNULAR</h6>
<div id="Ch3.S3.SS9.SSS15.Px6.SPx1.p1" class="ltx_para">
<p class="ltx_p">This example defines two electron lenses hel1 and hel2. The input block in <code class="ltx_verbatim ltx_font_typewriter">fort.3</code> is then given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
ELEN
hel1 ANNULAR 4.920e-03 6.928 1.5 0 0 0 0
hel2 ANNULAR 4.920e-03 6.928 1.5 1.1547 2.3093 0 0
NEXT
</pre>
<p class="ltx_p">The single and structure element definition in <code class="ltx_verbatim ltx_font_typewriter">fort.2</code> is given by:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
SINGLE ELEMENTS---------------------------------------------------------
...
hel1            29   0.000000000e+00   0.000000000e+00
   0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
hel2            29   0.000000000e+00   0.000000000e+00
   0.000000000e+00    0.000000000e+00    0.000000000e+00    0.000000000e+00
...
STRUCTURE INPUT---------------------------------------------------------
...
BLOC56            hel1              hel2
...
</pre>
<p class="ltx_p">Note that all parameters except for the type are set to 0 in the single element definition.</p>
</div>
</section>
</section>
</section>
<section id="Ch3.S3.SS10" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3.10 </span>Scattering</h4>
<span class="ltx_ERROR undefined">\todo</span>
<div id="Ch3.S3.SS10.p1" class="ltx_para">
<p class="ltx_p">[inline]This module is experimental! Use at your own risk; both the input format and physics implementation may change.</p>
</div>
<section id="Ch3.S3.SS10.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S3.SS10.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The SCATTER module is a framework for scattering particles through Monte Carlo processes at various points in the machine.</p>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S3.SS10.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">SCAT(TER)</p>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S3.SS10.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable
</p>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p">There are several different main statement classes possible in a SCATTER block, listed below.
Furthermore, lines starting with “/” are treated as a comment and ignored</p>
</div>
<section id="Ch3.S3.SS10.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">DEBUG</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">DEBUG</em>
<br class="ltx_break">This statement switches on extra “debugging” output from SCATTER.
This can be useful if debugging the code or if debugging the input.</p>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">ELEMent</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">ELEM elemname profile scaling gen1 (gen2, (gen3))</em>
<br class="ltx_break">This statements associates a PROfile and between one and 3<span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">2</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">2</sup>Controlled by the parameter <span class="ltx_text ltx_font_typewriter">scatter_maxGenELEM</span>.</span></span></span> GENerators with a SINGLE ELEMENT which must be of type 40, as described in Section <a href="#Ch3.S2.SS1.SSS13" title="Scattering point ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>.
The <span class="ltx_text ltx_font_typewriter">scaling</span> argument, which is a floating point number, is used to scale the probability of an interaction.
This can be controlled through DYNK, for example in order to scale only at one specified turn.
The PROfile, GENerator(s), and single elements are referenced through their names, and for the GENerators and PROfile they must be defined above the ELEMent in the SCATTER block.</p>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">PROfile</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">PRO name type (arguments)</em>
<br class="ltx_break">This statement defines a profile, that is a density profile and general properties of the targets which with the tracked particles are colliding.
Several different types are available:</p>
<dl id="Ch3.I40" class="ltx_description">
<dt id="Ch3.I40.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">PROfile type <span class="ltx_text ltx_font_typewriter">FLAT</span>:</span></dt>
<dd class="ltx_item">
<div id="Ch3.I40.ix1.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">PRO name FLAT density[targets/cm<math id="Ch3.I40.ix1.p1.m1" class="ltx_Math" alttext="{}^{2}" display="inline"><msup><mi></mi><mn>2</mn></msup></math>] mass[MeV/c<math id="Ch3.I40.ix1.p1.m2" class="ltx_Math" alttext="{}^{2}" display="inline"><msup><mi></mi><mn>2</mn></msup></math>] momentum[MeV/c]</em></p>
</div>
</dd>
<dt id="Ch3.I40.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">PROfile type <span class="ltx_text ltx_font_typewriter">GAUSS1</span>:</span></dt>
<dd class="ltx_item">
<div id="Ch3.I40.ix2.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">PRO name GAUSS1 beamtot[particles] sigmaX[mm] sigmaY[mm] offsetX[mm] offsetY[mm]</em></p>
<table id="A5.S3.EGx7" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch3.E5" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                              <math id="Ch3.E5.m1" class="ltx_Math" alttext="\displaystyle\rho(x,y)=\frac{N_{\mathrm{tot}}}{2\pi\sigma_{x}\sigma_{y}}\exp%
\left(-\frac{(x-\mu_{x})^{2}}{2\sigma_{x}^{2}}\right)\exp\left(-\frac{(y-\mu_{%
y})^{2}}{2\sigma_{y}^{2}}\right)" display="inline"><mrow><mrow><mi>ρ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM170">x</mi><mo>,</mo><mi id="XM171">y</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><msub><mi>N</mi><mi>tot</mi></msub><mrow><mn>2</mn><mo>⁢</mo><mi>π</mi><mo>⁢</mo><msub><mi>σ</mi><mi>x</mi></msub><mo>⁢</mo><msub><mi>σ</mi><mi>y</mi></msub></mrow></mfrac></mstyle><mo>⁢</mo><mrow><mi id="XM172">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM173"><mo>-</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM168"><mi>x</mi><mo>-</mo><msub><mi>μ</mi><mi>x</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>σ</mi><mi>x</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow><mo>⁢</mo><mrow><mi id="XM174">exp</mi><mo>⁡</mo><mrow><mo>(</mo><mrow id="XM175"><mo>-</mo><mstyle displaystyle="true"><mfrac><msup><mrow><mo stretchy="false">(</mo><mrow id="XM169"><mi>y</mi><mo>-</mo><msub><mi>μ</mi><mi>y</mi></msub></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mrow><mn>2</mn><mo>⁢</mo><msubsup><mi>σ</mi><mi>y</mi><mn>2</mn></msubsup></mrow></mfrac></mstyle></mrow><mo>)</mo></mrow></mrow></mrow></mrow></math>
                            </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.5)</span></td>
</tr>
</table>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">GENerator</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">GEN name type (arguments)</em>
<br class="ltx_break">The generator block takes a name and a generator type input, followed by the parameters for the
generator type.</p>
<dl id="Ch3.I41" class="ltx_description">
<dt id="Ch3.I41.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">GENerator type <span class="ltx_text ltx_font_typewriter">PPBEAMELASTIC</span>:</span></dt>
<dd class="ltx_item">
<div id="Ch3.I41.ix1.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">GEN name PPBEAMELASTIC a b1 b2 phi tmin (crossSection)</em>
<br class="ltx_break">Takes five or six input arguments, and generates the probability distribution given by</p>
<table id="A5.S3.EGx8" class="ltx_equationgroup ltx_eqn_align">
<tr id="Ch3.E6" class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_td ltx_align_right">
                              <math id="Ch3.E6.m1" class="ltx_Math" alttext="\displaystyle g(t)=\frac{1}{a_{1}^{2}}\frac{d\sigma}{dt}=e^{-b_{1}t}+2ae^{-(b_%
{1}+b_{2})t/2}\cos{\phi}+a^{2}e^{-b_{2}t}," display="inline"><mrow><mrow><mrow><mi>g</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM179">t</mi><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mstyle displaystyle="true"><mfrac><mn>1</mn><msubsup><mi>a</mi><mn>1</mn><mn>2</mn></msubsup></mfrac></mstyle><mo>⁢</mo><mstyle displaystyle="true"><mfrac><mrow><mi>d</mi><mo>⁢</mo><mi>σ</mi></mrow><mrow><mi>d</mi><mo>⁢</mo><mi>t</mi></mrow></mfrac></mstyle></mrow><mo>=</mo><mrow><msup><mi>e</mi><mrow><mo>-</mo><mrow><msub><mi>b</mi><mn>1</mn></msub><mo>⁢</mo><mi>t</mi></mrow></mrow></msup><mo>+</mo><mrow><mn>2</mn><mo>⁢</mo><mi>a</mi><mo>⁢</mo><msup><mi>e</mi><mrow><mo>-</mo><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM178"><msub><mi>b</mi><mn>1</mn></msub><mo>+</mo><msub><mi>b</mi><mn>2</mn></msub></mrow><mo stretchy="false">)</mo></mrow><mo>⁢</mo><mi>t</mi></mrow><mo>/</mo><mn>2</mn></mrow></mrow></msup><mo>⁢</mo><mrow><mi>cos</mi><mo>⁡</mo><mi>ϕ</mi></mrow></mrow><mo>+</mo><mrow><msup><mi>a</mi><mn>2</mn></msup><mo>⁢</mo><msup><mi>e</mi><mrow><mo>-</mo><mrow><msub><mi>b</mi><mn>2</mn></msub><mo>⁢</mo><mi>t</mi></mrow></mrow></msup></mrow></mrow></mrow><mo>,</mo></mrow></math>
                            </td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.6)</span></td>
</tr>
</table>
<p class="ltx_p">where the first expression is a soft scatter data fit, the third expression a hard scatter fit,
and the second expression is the interference. <math id="Ch3.I41.ix1.p1.m1" class="ltx_Math" alttext="a=a_{2}/a_{1}" display="inline"><mrow><mi>a</mi><mo>=</mo><mrow><msub><mi>a</mi><mn>2</mn></msub><mo>/</mo><msub><mi>a</mi><mn>1</mn></msub></mrow></mrow></math> is the amplitudes of the expressions.
These are combined into the first four input arguments <math id="Ch3.I41.ix1.p1.m2" class="ltx_Math" alttext="a" display="inline"><mi>a</mi></math>, <math id="Ch3.I41.ix1.p1.m3" class="ltx_Math" alttext="b_{1}" display="inline"><msub><mi>b</mi><mn>1</mn></msub></math>, <math id="Ch3.I41.ix1.p1.m4" class="ltx_Math" alttext="b_{2}" display="inline"><msub><mi>b</mi><mn>2</mn></msub></math>, and <math id="Ch3.I41.ix1.p1.m5" class="ltx_Math" alttext="\phi" display="inline"><mi>ϕ</mi></math>, as well as
<math id="Ch3.I41.ix1.p1.m6" class="ltx_Math" alttext="t_{min}" display="inline"><msub><mi>t</mi><mrow><mi>m</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>n</mi></mrow></msub></math> which provides a cut-off limit.</p>
</div>
<div id="Ch3.I41.ix1.p2" class="ltx_para">
<p class="ltx_p">The optional sixth argument defines a fixed cross section for the scattering probability.
<br class="ltx_break">
<br class="ltx_break">Input example with values for a fit to 13 TeV LHC.</p>
<pre class="ltx_verbatim ltx_font_typewriter">
    GEN  sc_thin     PPBEAMELASTIC 0.046 18.52 4.601 2.647 0.0 30e-27
</pre>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S3.SS10.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">SEED</h6>
<div id="Ch3.S3.SS10.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p"><em class="ltx_emph">SEED seed1 seed2</em>
<br class="ltx_break">This sets the seed of the internal RNG used by the SCATTER block <span class="ltx_ERROR undefined">\todo</span>Cite RANECU.
Two integer seeds are required, for this block.
The <span class="ltx_text ltx_font_typewriter">SEED</span> block is mandatory for the SCATTER block to work.
Note that when running several simulations, the seed settings must be varied between each run in order to get uncorrelated results.</p>
</div>
</section>
</section>
</section>
</section>
<section id="Ch3.S4" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.4 </span>Organising Tasks</h3>
<div id="Ch3.S4.p1" class="ltx_para">
<p class="ltx_p">In this section the input data blocks are described, which are used to
organise the input structure.</p>
</div>
<section id="Ch3.S4.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.4.1 </span>Random Fluctuation Starting Number</h4>
<section id="Ch3.S4.SS1.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S4.SS1.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">If besides mean values for the multipole
errors (Gaussian) random errors should be considered this input data
structure is used to set the start value for the random generator.</p>
</div>
</section>
<section id="Ch3.S4.SS1.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S4.SS1.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">FLUC</p>
</div>
</section>
<section id="Ch3.S4.SS1.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S4.SS1.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">1</p>
</div>
</section>
<section id="Ch3.S4.SS1.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S4.SS1.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">izu0 mmac mout mcut</span> (integers)</p>
<dl id="Ch3.I42" class="ltx_description">
<dt id="Ch3.I42.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">izu0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I42.ix1.p1" class="ltx_para">
<p class="ltx_p">Start value for the random number generator</p>
</div>
</dd>
<dt id="Ch3.I42.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">mmac</span></dt>
<dd class="ltx_item">
<div id="Ch3.I42.ix2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic" style="font-size:120%;">– Sorry: disabled for the time being, i.e. mmac is fixed to be 1 –</span> (<span class="ltx_text" style="font-size:90%;">In the vectorised version the
number of different starting seeds can be varied. Each seed is
calculated as <math id="Ch3.I42.ix2.p1.m1" class="ltx_Math" alttext="k\times izu0" display="inline"><mrow><mrow><mi mathsize="111%" stretchy="false">k</mi><mo mathsize="111%" stretchy="false">×</mo><mi mathsize="111%" stretchy="false">i</mi></mrow><mo mathsize="90%" stretchy="false">⁢</mo><mi mathsize="111%" stretchy="false">z</mi><mo mathsize="90%" stretchy="false">⁢</mo><mi mathsize="111%" stretchy="false">u</mi><mo mathsize="90%" stretchy="false">⁢</mo><mn mathsize="111%" stretchy="false">0</mn></mrow></math> where <math id="Ch3.I42.ix2.p1.m2" class="ltx_Math" alttext="k" display="inline"><mi mathsize="111%" stretchy="false">k</mi></math> runs from 1 to
<span class="ltx_text ltx_font_italic">mmac</span> which can not exceed 5 to save storage space (see
list of parameters in Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</span>)</p>
</div>
</dd>
<dt id="Ch3.I42.i1" class="ltx_item"><span class="ltx_tag ltx_tag_description"></span></dt>
<dd class="ltx_item">
<div id="Ch3.I42.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> A binary switch for various purposes, so all options,
as described below, can be combined.</p>
<ul id="Ch3.I42.I1" class="ltx_itemize">
<li id="Ch3.I42.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I42.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> = 0 : multipole errors internally created</p>
</div>
</li>
<li id="Ch3.I42.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I42.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> = 1 : multipole errors read–in from external file</p>
</div>
<div id="Ch3.I42.I1.i2.p2" class="ltx_para">
<p class="ltx_p">External multipole errors are read–in from file 16 into the array
of random values. To activate these values one has to set to a value
of 1 the relevant r.m.s.–positions of the corresponding multipole
blocks ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>). The systematic components are added as usual
and multipoles not found in the fort.16 are treated as for (<span class="ltx_text ltx_font_italic">mout</span> = 0 ). An error is only detected if there are too few sets
of multipoles in fort.16.</p>
</div>
</li>
<li id="Ch3.I42.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I42.I1.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> = 2: the geometry and strength file is written to
file # 4 in the same format as the input file # 2; the multipole
coefficients are written to file # 9; name, misalignments and tilt
is written to file # 27 and finally name, random single multipole
strength and both random transverse misalignments are written to
file # 31.</p>
</div>
</li>
<li id="Ch3.I42.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I42.I1.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> = 4: Name, horizontal and vertical misalignment and
also the element tilt are read–in from file # 8.</p>
</div>
</li>
<li id="Ch3.I42.I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I42.I1.i5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">mout</span> = 8: Name and 3 Random numbers for single kick
strength and both random transverse misalignments and also the value
of the tilt are read–in from file # 30.</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I42.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">mcut</span></dt>
<dd class="ltx_item">
<div id="Ch3.I42.ix3.p1" class="ltx_para">
<p class="ltx_p">The random distribution can be cut by <span class="ltx_text ltx_font_italic">mcut</span> sigma
of the distribution. No cuts are applied for <span class="ltx_text ltx_font_italic">mcut = 0</span>.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S4.SS1.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S4.SS1.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I43" class="ltx_enumerate">
<li id="Ch3.I43.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I43.i1.p1" class="ltx_para">
<p class="ltx_p">The RANECU random generator <cite class="ltx_cite">[<a href="#bib.bib25" title="" class="ltx_ref">25</a>]</cite> is used as it produces
machine independent sequences of random numbers.</p>
</div>
</li>
<li id="Ch3.I43.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I43.i2.p1" class="ltx_para">
<p class="ltx_p">If the starting point has to be changed or another nonlinear
element is to be inserted, this can be done without changing the
once chosen random distribution of errors by using the <span class="ltx_text ltx_font_italic">Organisation of Random Numbers</span> input block.</p>
</div>
</li>
<li id="Ch3.I43.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I43.i3.p1" class="ltx_para">
<p class="ltx_p">The description of an accelerator is fully contained in 4 files:
fort.2 (geometry), fort.3 (tracking parameters and definition of
multipole blocks), fort.16 (multipole errors) and fort.30 (random
numbers of the single multipole kick, the horizontal and vertical
misalignment and the value of the tilt). This block allows to write
out the files # 4, 9, 27, 31 which may serve as the input files #
2, 16, 8 and 30 respectively. The file fort.30 superseeds fort.8 if
both files are read in.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S4.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.4.2 </span>Organisation of Random Numbers</h4>
<section id="Ch3.S4.SS2.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S4.SS2.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">Working on a lattice for an accelerator
often requires to introduce new nonlinear elements. In those cases
simply introducing this new element means that the previously chosen
random distribution of the errors will be changed and with it often
the linear parameters. This input data block is mainly used to avoid
this problem by reserving extra random numbers for the new elements.
It also allows to change the observation point without affecting the
machine. The random values of different nonlinear elements including
blocks of multipoles can be set to be equal to allow to vary the
number of nonlinear kicks in one magnet which clearly should have the
same random distribution for each multipolar kick. Finally multipole
sets with different name can be made equal with this input data block.</p>
</div>
</section>
<section id="Ch3.S4.SS2.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S4.SS2.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">ORGA</p>
</div>
</section>
<section id="Ch3.S4.SS2.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S4.SS2.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S4.SS2.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S4.SS2.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ele1 ele2 ele3</span> The data lines can be set
in three different ways:</p>
<ol id="Ch3.I44" class="ltx_enumerate">
<li id="Ch3.I44.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I44.i1.p1" class="ltx_para">
<p class="ltx_p">Ele1 = “name” where name <math id="Ch3.I44.i1.p1.m1" class="ltx_Math" alttext="\neq" display="inline"><mo>≠</mo></math> MULT
<br class="ltx_break">Ele2 = ignored
<br class="ltx_break">Ele3 = ignored
<br class="ltx_break">The nonlinear element or multipole set will have its own set of
random numbers.</p>
</div>
</li>
<li id="Ch3.I44.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I44.i2.p1" class="ltx_para">
<p class="ltx_p">Ele1 = “name1” where name1 <math id="Ch3.I44.i2.p1.m1" class="ltx_Math" alttext="\neq" display="inline"><mo>≠</mo></math> MULT
<br class="ltx_break">Ele2 = “name2”
<br class="ltx_break">Ele3 = ignored
<br class="ltx_break">The nonlinear element or multipole block Ele1 has the same random
number set as those of Ele2, if it follows Ele2 as the first
nonlinear element in the structure list ( <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>).</p>
</div>
</li>
<li id="Ch3.I44.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I44.i3.p1" class="ltx_para">
<p class="ltx_p">Ele1 = “MULT”
<br class="ltx_break">Ele2 = “name2”
<br class="ltx_break">Ele3 = “name3”
<br class="ltx_break">The multipole set “name3” is set to the values of the set
“name2”. random errors are not influenced in this case.</p>
</div>
</li>
</ol>
</div>
</section>
<section id="Ch3.S4.SS2.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S4.SS2.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I45" class="ltx_enumerate">
<li id="Ch3.I45.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I45.i1.p1" class="ltx_para">
<p class="ltx_p">A simple change of the starting point, by placing a “GO”
somewhere in structure, used to change the machine optics as the
random numbers were shifted, too. Simply calling this block even
without a data line, will always fix the sequence of random numbers
to start at the first multipole in the structure.</p>
</div>
</li>
<li id="Ch3.I45.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I45.i2.p1" class="ltx_para">
<p class="ltx_p">This input data block must follow the definition of the
multipole block, otherwise multipoles cannot be set equal (option
3).</p>
</div>
</li>
<li id="Ch3.I45.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I45.i3.p1" class="ltx_para">
<p class="ltx_p">Do not use the keyword “MULT” in the single element list
( <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>).</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S4.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.4.3 </span>Combination of Elements</h4>
<section id="Ch3.S4.SS3.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S4.SS3.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">It is often necessary to use several
families of magnetic elements with a certain ratio <math id="Ch3.S4.SS3.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="R" display="inline"><mi>R</mi></math> of magnetic
strength to perform corrections like tune adjustment ( <a href="#Ch3.S5.SS2" title="3.5.2 Tune Variation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.2</span></a>),
chromaticity correction ( <a href="#Ch3.S5.SS3" title="3.5.3 Chromaticity Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.3</span></a>) or resonance compensation
( <a href="#Ch3.S5.SS8" title="3.5.8 Resonance Compensation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.8</span></a>). The <span class="ltx_text ltx_font_italic">Combination of Elements</span> input block
allows such a combination of elements. The maximum number of elements
is defined by the parameter NCOM (see Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
</section>
<section id="Ch3.S4.SS3.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S4.SS3.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">COMB</p>
</div>
</section>
<section id="Ch3.S4.SS3.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S4.SS3.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable</p>
</div>
</section>
<section id="Ch3.S4.SS3.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S4.SS3.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">e0 R1 e1 …Rn en</span></p>
</div>
<div id="Ch3.S4.SS3.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I46" class="ltx_description">
<dt id="Ch3.I46.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">e0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I46.ix1.p1" class="ltx_para">
<p class="ltx_p">Reference element which appears in the input of the
processing procedure</p>
</div>
</dd>
<dt id="Ch3.I46.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">e1, …, en</span></dt>
<dd class="ltx_item">
<div id="Ch3.I46.ix2.p1" class="ltx_para">
<p class="ltx_p">Elements to be combined with <span class="ltx_text ltx_font_italic">e0</span></p>
</div>
</dd>
<dt id="Ch3.I46.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">Rj</span></dt>
<dd class="ltx_item">
<div id="Ch3.I46.ix3.p1" class="ltx_para">
<p class="ltx_p">Ratio of the magnetic strength of element <span class="ltx_text ltx_font_italic">ej</span> to
that of element <span class="ltx_text ltx_font_italic">e0</span></p>
</div>
</dd>
</dl>
</div>
</section>
</section>
</section>
<section id="Ch3.S5" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.5 </span>Processing</h3>
<div id="Ch3.S5.p1" class="ltx_para">
<p class="ltx_p">This section comprises all the input blocks that do some kind of pre–
or post–processing.</p>
</div>
<section id="Ch3.S5.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.1 </span>Linear Optics Calculation</h4>
<section id="Ch3.S5.SS1.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">The linear optics calculation input block
is used to make a printout of all linear parameters (magnet lengths,
<math id="Ch3.S5.SS1.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> and <math id="Ch3.S5.SS1.SSS15.Px4.SPx1.p1.m2" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math> functions, tunes, dispersion and closed orbit) in
the horizontal and vertical planes at the end of each element or
linear block. The number of elements or blocks can be chosen.</p>
</div>
</section>
<section id="Ch3.S5.SS1.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">LINE</p>
</div>
</section>
<section id="Ch3.S5.SS1.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable but at least 1</p>
</div>
</section>
<section id="Ch3.S5.SS1.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I47" class="ltx_itemize">
<li id="Ch3.I47.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I47.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">mode number–of–blocks ilin ntco E_I E_II</span></p>
</div>
</li>
<li id="Ch3.I47.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I47.i2.p1" class="ltx_para">
<p class="ltx_p">other data lines: <span class="ltx_text ltx_font_italic">name(1), …, name(nlin)</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I48" class="ltx_description">
<dt id="Ch3.I48.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">mode</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix1.p1" class="ltx_para">
<p class="ltx_p">“ELEMENT” for a printout after each single element
(<a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>); “BLOCK” for a printout after each structure block
(<a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>)</p>
</div>
</dd>
<dt id="Ch3.I48.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">number–of–blocks</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix2.p1" class="ltx_para">
<p class="ltx_p">(integer) The number of the blocks in the
structure to which the linear parameter will be printed. If this
number is set to zero or is larger than the number of blocks, the
complete structure will be calculated.</p>
</div>
</dd>
<dt id="Ch3.I48.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ilin</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Logical switch to calculate the traditional
linear optics calculation in 4D (<span class="ltx_text ltx_font_italic">1 = ilin</span>) and with the DA
approach 6D (<span class="ltx_text ltx_font_italic">2 = ilin</span>).</p>
</div>
</dd>
<dt id="Ch3.I48.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">ntco</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix4.p1" class="ltx_para">
<p class="ltx_p">(integer) A switch to write out linear coupling
parameters.</p>
<ul id="Ch3.I48.I1" class="ltx_itemize">
<li id="Ch3.I48.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I48.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ntco</span> = 0 : no write–out</p>
</div>
</li>
<li id="Ch3.I48.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I48.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ntco</span> <math id="Ch3.I48.I1.i2.p1.m1" class="ltx_Math" alttext="\neq" display="inline"><mo>≠</mo></math> 0 : write–out of all linear coupled (4D)
parameters including the coupling angle. These parameters (name,
longitudinal position, the phase advances at that location, 4
<math id="Ch3.I48.I1.i2.p1.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–, <math id="Ch3.I48.I1.i2.p1.m3" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>– and <math id="Ch3.I48.I1.i2.p1.m4" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–functions, 4 angles for
coordinates and momenta respectively, plus the coupling angle
[rad]) are written in ascii format on file # 11.
This write-out happens every <em class="ltx_emph">ntco</em> turns.</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I48.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">E_I, E_II</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix5.p1" class="ltx_para">
<p class="ltx_p">(floats) The two eigen–emittances to be chosen to
determine the coupling angle. They are typically set to be equal.</p>
</div>
</dd>
<dt id="Ch3.I48.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">names</span></dt>
<dd class="ltx_item">
<div id="Ch3.I48.ix6.p1" class="ltx_para">
<p class="ltx_p">(char) For <span class="ltx_text ltx_font_italic">nlin</span> (<math id="Ch3.I48.ix6.p1.m1" class="ltx_Math" alttext="\leq" display="inline"><mo>≤</mo></math> <span class="ltx_text ltx_font_italic">nele</span>) element–
and block names the linear parameters are printed whenever they
appear in the accelerator structure.</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS1.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS1.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I49" class="ltx_enumerate">
<li id="Ch3.I49.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I49.i1.p1" class="ltx_para">
<p class="ltx_p">To make this block work the Tracking Parameter block
( <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>) has to used as well.</p>
</div>
</li>
<li id="Ch3.I49.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I49.i2.p1" class="ltx_para">
<p class="ltx_p">When the “ELEMENT 0” option is used a file unit # 34 is
written with the longitudinal position, name, element type,
multipole strength, <math id="Ch3.I49.i2.p1.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> functions and phase advances in the
horizontal and vertical phase space respectively. This file is used
as input for the “SODD” program <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite> to calculate detuning
and distortion terms in first and second order. A full program suite
can be found at: /afs/cern.ch/group/si/slap/share/sodd</p>
</div>
</li>
<li id="Ch3.I49.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I49.i3.p1" class="ltx_para">
<p class="ltx_p">If the “BLOCK” option has been used, the tunes may be wrong by
a multiple of 1/2. This option is not active in the DA part (<span class="ltx_text ltx_font_italic">2
= ilin</span>), which also ignores the (<span class="ltx_text ltx_font_italic">NTCO</span>) option.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S5.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.2 </span>Tune Variation</h4>
<section id="Ch3.S5.SS2.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">This input block initializes a tune
adjustment with zero length quadrupoles. This is normally done with
two families of focusing and defocusing quadrupoles. It may be
necessary, however, to have a fixed phase advance between certain
positions in the machine. This can be done with this block by
splitting the corresponding family into two sub–families which then
are adjusted to give the desired phase advance.</p>
</div>
</section>
<section id="Ch3.S5.SS2.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">TUNE</p>
</div>
</section>
<section id="Ch3.S5.SS2.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">2 or 4</p>
</div>
</section>
<section id="Ch3.S5.SS2.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I50" class="ltx_itemize">
<li id="Ch3.I50.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I50.i1.p1" class="ltx_para">
<p class="ltx_p">data lines 1: <span class="ltx_text ltx_font_italic">name1 Qx iqmod6</span></p>
</div>
</li>
<li id="Ch3.I50.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I50.i2.p1" class="ltx_para">
<p class="ltx_p">data lines 2: <span class="ltx_text ltx_font_italic">name2 Qy</span></p>
</div>
</li>
<li id="Ch3.I50.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I50.i3.p1" class="ltx_para">
<p class="ltx_p">data lines 3 and 4, optional: <span class="ltx_text ltx_font_italic">name3 <math id="Ch3.I50.i3.p1.m1" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="italic">⁢</mo><mi>Q</mi></mrow></math></span> and <span class="ltx_text ltx_font_italic">name4 name5</span> respectively</p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I51" class="ltx_description">
<dt id="Ch3.I51.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name1, name2</span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix1.p1" class="ltx_para">
<p class="ltx_p">Names of focusing and defocusing quadrupole
families respectively (in the single element list ( <a href="#Ch3.S2.SS1.SSS1" title="Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>)</p>
</div>
</dd>
<dt id="Ch3.I51.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx, Qy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix2.p1" class="ltx_para">
<p class="ltx_p">(floats) Horizontal and vertical tune <span class="ltx_text ltx_font_italic">including</span>
the integer part</p>
</div>
</dd>
<dt id="Ch3.I51.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">iqmod6</span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Logical switch to calculate the tunes in the
traditional manner (<span class="ltx_text ltx_font_italic">1 = iqmod6</span>) and with the DA approach
including the beam-beam kick (<span class="ltx_text ltx_font_italic">2 = iqmod6</span>).</p>
</div>
</dd>
<dt id="Ch3.I51.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">name3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix4.p1" class="ltx_para">
<p class="ltx_p">Name of the second sub–family, where the first
sub–family is one of the above (<span class="ltx_text ltx_font_italic">name1</span> or <span class="ltx_text ltx_font_italic">name2</span>)
This second sub–family replaces the elements of the first
sub–family between the positions marked by <span class="ltx_text ltx_font_italic">name4</span> and <span class="ltx_text ltx_font_italic">name5</span>.</p>
</div>
</dd>
<dt id="Ch3.I51.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                  <math id="Ch3.I51.ix5.m1" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>Q</mi></mrow></math>
                </span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix5.p1" class="ltx_para">
<p class="ltx_p">Extra phase advance <span class="ltx_text ltx_font_italic">including</span> the integer
part (horizontal or vertical depending on the first sub–family)
between the positions in the machine marked by <span class="ltx_text ltx_font_italic">name4</span> and
<span class="ltx_text ltx_font_italic">name5</span></p>
</div>
</dd>
<dt id="Ch3.I51.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">name4, name5</span></dt>
<dd class="ltx_item">
<div id="Ch3.I51.ix6.p1" class="ltx_para">
<p class="ltx_p">Two markers in the machine for the phase advance
<math id="Ch3.I51.ix6.p1.m1" class="ltx_Math" alttext="\Delta Q" display="inline"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>Q</mi></mrow></math> with the elements of the second sub–family between them</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS2.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S5.SS2.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p">The integer has to be included as the full phase
advance around the machine is calculated by the program.</p>
</div>
</section>
</section>
<section id="Ch3.S5.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.3 </span>Chromaticity Correction</h4>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">The chromaticity can be adjusted
to desired values with two sextupole family using this input block.</p>
</div>
</section>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">CHRO</p>
</div>
</section>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">2</p>
</div>
</section>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p">data lines 1: <span class="ltx_text ltx_font_italic">name1 <math id="Ch3.S5.SS3.SSS15.Px4.SPx4.p1.m1" class="ltx_Math" alttext="Q^{\prime}_{x}" display="inline"><msubsup><mi>Q</mi><mi>x</mi><mo mathvariant="normal">′</mo></msubsup></math> ichrom</span></p>
</div>
</section>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p">data lines 2: <span class="ltx_text ltx_font_italic">name2 <math id="Ch3.S5.SS3.SSS15.Px4.SPx5.p1.m1" class="ltx_Math" alttext="Q^{\prime}_{y}" display="inline"><msubsup><mi>Q</mi><mi>y</mi><mo mathvariant="normal">′</mo></msubsup></math></span></p>
</div>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx5.p2" class="ltx_para">
<dl id="Ch3.I52" class="ltx_description">
<dt id="Ch3.I52.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name1/2</span></dt>
<dd class="ltx_item">
<div id="Ch3.I52.ix1.p1" class="ltx_para">
<p class="ltx_p">Names (in the single element list ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) of the
two sextupole families</p>
</div>
</dd>
<dt id="Ch3.I52.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">
                  <math id="Ch3.I52.ix2.m1" class="ltx_Math" alttext="Q^{\prime}" display="inline"><msup><mi>Q</mi><mo>′</mo></msup></math>
                </span></dt>
<dd class="ltx_item">
<div id="Ch3.I52.ix2.p1" class="ltx_para">
<p class="ltx_p">Desired values of the chromaticity: <math id="Ch3.I52.ix2.p1.m1" class="ltx_Math" alttext="Q^{\prime}=\frac{\delta Q}{\delta(\frac{\Delta p}{p_{o}})}" display="inline"><mrow><msup><mi>Q</mi><mo>′</mo></msup><mo>=</mo><mfrac><mrow><mi>δ</mi><mo>⁢</mo><mi>Q</mi></mrow><mrow><mi>δ</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mfrac id="XM180"><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I52.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ichrom</span></dt>
<dd class="ltx_item">
<div id="Ch3.I52.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Logical switch to calculate the traditional
chromaticity calculation (<span class="ltx_text ltx_font_italic">1 = ichrom</span>) and with the DA
approach including the beam-beam kick (<span class="ltx_text ltx_font_italic">2 = ichrom</span>).</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS3.SSS15.Px4.SPx6" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S5.SS3.SSS15.Px4.SPx6.p1" class="ltx_para">
<p class="ltx_p">To make the chromaticity correction work well a
small momentum spread is required (DE0 in table ( <a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>)). It
sometimes is required to optimize this spread.</p>
</div>
</section>
</section>
<section id="Ch3.S5.SS4" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.4 </span>Orbit Correction</h4>
<section id="Ch3.S5.SS4.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">Due to dipole errors in a real accelerator
a closed orbit different from the beam axis is unavoidable. Even after
careful adjustment one always will be left over with some random
deviation of the closed orbit around the zero position. A closed orbit
is introduced by nonzero strengths of <math id="Ch3.S5.SS4.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="b_{1}" display="inline"><msub><mi>b</mi><mn>1</mn></msub></math> and <math id="Ch3.S5.SS4.SSS15.Px4.SPx1.p1.m2" class="ltx_Math" alttext="a_{1}" display="inline"><msub><mi>a</mi><mn>1</mn></msub></math>
components of the multipole block ( <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>), horizontal and
vertical dipole kicks ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) or displacements of nonlinear
elements ( <a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>). This input data block allows the correction
of a such a random distributed closed orbit using he first two types
in a “most effective corrector strategy” <cite class="ltx_cite">[<a href="#bib.bib26" title="" class="ltx_ref">26</a>]</cite>. For that
purpose correctors have to be denoted by <span class="ltx_text ltx_font_italic">“HCOR= ”</span> and <span class="ltx_text ltx_font_italic">“VCOR= ”</span> and monitors by <span class="ltx_text ltx_font_italic">“HMON= ”</span> and <span class="ltx_text ltx_font_italic">“VMON=
”</span> for the horizontal and vertical plane respectively. After
correction the orbit is scaled to the desired r.m.s. values unless they
are zero.</p>
</div>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx1.p2" class="ltx_para">
<p class="ltx_p">On file unit 28 the horizontal orbit displacement, measured at the
horizontal monitors, will be written together with the monitor number,
on file unit 29 the same is done for the vertical closed orbit
displacement.</p>
</div>
</section>
<section id="Ch3.S5.SS4.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">ORBI</p>
</div>
</section>
<section id="Ch3.S5.SS4.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable but at least 1</p>
</div>
</section>
<section id="Ch3.S5.SS4.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I53" class="ltx_itemize">
<li id="Ch3.I53.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I53.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">sigmax sigmay ncorru ncorrep</span></p>
</div>
</li>
<li id="Ch3.I53.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I53.i2.p1" class="ltx_para">
<p class="ltx_p">other data lines: <span class="ltx_text ltx_font_italic">“HCOR= ” namec</span> or <span class="ltx_text ltx_font_italic">“HMON= ”
namem</span>
<br class="ltx_break">or <span class="ltx_text ltx_font_italic">“VCOR= ” namec</span> or <span class="ltx_text ltx_font_italic">“VMON= ”
namem</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I54" class="ltx_description">
<dt id="Ch3.I54.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">sigmax, sigmay</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix1.p1" class="ltx_para">
<p class="ltx_p">Desired r.m.s.–values of the randomly distributed
closed orbit</p>
</div>
</dd>
<dt id="Ch3.I54.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">ncorru</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix2.p1" class="ltx_para">
<p class="ltx_p">Number of correctors to be used
</p>
</div>
</dd>
<dt id="Ch3.I54.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ncorrep</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix3.p1" class="ltx_para">
<p class="ltx_p">Number of corrections
<br class="ltx_break">If <span class="ltx_text ltx_font_italic">ncorrep=0</span>
the correction is iterated until <span class="ltx_text ltx_font_italic">ITCO</span> (see
table <a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>) iterations or after the both desired
r.m.s.–values have been reached.</p>
</div>
</dd>
<dt id="Ch3.I54.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">“HCOR= ” namec</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix4.p1" class="ltx_para">
<p class="ltx_p">Horizontal correction element of name <span class="ltx_text ltx_font_italic">namec</span></p>
</div>
</dd>
<dt id="Ch3.I54.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">“HMON= ” namem</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix5.p1" class="ltx_para">
<p class="ltx_p">Horizontal monitor for the closed orbit of
name <span class="ltx_text ltx_font_italic">namem</span></p>
</div>
</dd>
<dt id="Ch3.I54.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">“VCOR= ” namec</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix6.p1" class="ltx_para">
<p class="ltx_p">Vertical correction element of name <span class="ltx_text ltx_font_italic">namec</span></p>
</div>
</dd>
<dt id="Ch3.I54.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">“VMON= ” namem</span></dt>
<dd class="ltx_item">
<div id="Ch3.I54.ix7.p1" class="ltx_para">
<p class="ltx_p">Vertical monitor for the closed orbit of name
<span class="ltx_text ltx_font_italic">namem</span></p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS4.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS4.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I55" class="ltx_enumerate">
<li id="Ch3.I55.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I55.i1.p1" class="ltx_para">
<p class="ltx_p">Elements can have only one extra functionality: either
horizontal corrector, horizontal monitor, vertical corrector or
vertical monitor. If the number of monitors in a plane is smaller
than the number of correctors it is likely to encounter numerical
problems.</p>
</div>
</li>
<li id="Ch3.I55.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I55.i2.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">“HCOR= ”</span>, <span class="ltx_text ltx_font_italic">“HMON= ”</span>, <span class="ltx_text ltx_font_italic">“VCOR= ”</span>
and <span class="ltx_text ltx_font_italic">“VMON= ”</span> must be separated from the following name
by at least one space.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S5.SS5" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.5 </span>Decoupling of Motion in the Transverse Planes</h4>
<section id="Ch3.S5.SS5.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">Skew–quadrupole components in the lattice
create a linear coupling between the transverse planes of motion. A
decoupling can be achieved with this block using four independent
families of skew–quadrupoles, which cancel the off–diagonal parts of
the transfer map. As these skew–quadrupoles also influence the tunes
an adjustment of the tunes is performed at the same time.</p>
</div>
</section>
<section id="Ch3.S5.SS5.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">DECO</p>
</div>
</section>
<section id="Ch3.S5.SS5.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">3</p>
</div>
</section>
<section id="Ch3.S5.SS5.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I56" class="ltx_itemize">
<li id="Ch3.I56.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I56.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">name1,name2,name3,name4</span></p>
</div>
</li>
<li id="Ch3.I56.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I56.i2.p1" class="ltx_para">
<p class="ltx_p">data lines 2 and 3: <span class="ltx_text ltx_font_italic">name5 Qx</span> and <span class="ltx_text ltx_font_italic">name6 Qy</span>
respectively</p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I57" class="ltx_description">
<dt id="Ch3.I57.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">name1,2,3,4</span></dt>
<dd class="ltx_item">
<div id="Ch3.I57.ix1.p1" class="ltx_para">
<p class="ltx_p">Names of the four skew–quadrupole families</p>
</div>
</dd>
<dt id="Ch3.I57.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">name5, name6</span></dt>
<dd class="ltx_item">
<div id="Ch3.I57.ix2.p1" class="ltx_para">
<p class="ltx_p">Names of focusing and defocusing quadrupole
families respectively (in the single element list ( <a href="#Ch3.S2.SS1.SSS1" title="Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>)</p>
</div>
</dd>
<dt id="Ch3.I57.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx, Qy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I57.ix3.p1" class="ltx_para">
<p class="ltx_p">(floats) Horizontal and vertical tune <span class="ltx_text ltx_font_italic">including</span>
the integer part</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS5.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remark</h6>
<div id="Ch3.S5.SS5.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p">A decoupling can also be achieved by
compensating skew–resonances ( <a href="#Ch3.S5.SS8" title="3.5.8 Resonance Compensation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.8</span></a>). The two approaches,
however, are not always equivalent. In the resonance approach the
zeroth harmonic is compensated, whilst a decoupling also takes into
account the higher–order terms.</p>
</div>
</section>
</section>
<section id="Ch3.S5.SS6" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.6 </span>Sub–resonance Calculation</h4>
<section id="Ch3.S5.SS6.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS6.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">First order resonance widths of multipoles
from second to ninth order are calculated following the approach of
Guignard <cite class="ltx_cite">[<a href="#bib.bib10" title="" class="ltx_ref">10</a>]</cite>. This includes resonances, which are a
multiple of two lower than the order of the multipole. The first order
detuning including feed–down from closed orbit is calculated from all
multipoles up to to tenth order.</p>
</div>
</section>
<section id="Ch3.S5.SS6.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS6.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">SUBR</p>
</div>
</section>
<section id="Ch3.S5.SS6.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS6.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">1</p>
</div>
</section>
<section id="Ch3.S5.SS6.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS6.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">n1 n2 Qx Qy Ax Ay Ip length</span></p>
</div>
<div id="Ch3.S5.SS6.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I58" class="ltx_description">
<dt id="Ch3.I58.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">n1, n2</span></dt>
<dd class="ltx_item">
<div id="Ch3.I58.ix1.p1" class="ltx_para">
<p class="ltx_p">(integers) Lowest and highest order of the resonance</p>
</div>
</dd>
<dt id="Ch3.I58.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx, Qy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I58.ix2.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical tune including the integer part
</p>
</div>
</dd>
<dt id="Ch3.I58.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">Ax, Ay</span></dt>
<dd class="ltx_item">
<div id="Ch3.I58.ix3.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical amplitudes in mm</p>
</div>
</dd>
<dt id="Ch3.I58.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">Ip</span></dt>
<dd class="ltx_item">
<div id="Ch3.I58.ix4.p1" class="ltx_para">
<p class="ltx_p">(integer) Is a switch to change the nearest distance to the
resonance <math id="Ch3.I58.ix4.p1.m1" class="ltx_Math" alttext="e=nxQx+nyQy" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow></mrow></math>. In cases of structure
resonances a change of <math id="Ch3.I58.ix4.p1.m2" class="ltx_Math" alttext="p" display="inline"><mi>p</mi></math> by one unit may be useful.</p>
<ul id="Ch3.I58.I1" class="ltx_itemize">
<li id="Ch3.I58.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I58.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ip</span> = 0 : <math id="Ch3.I58.I1.i1.p1.m1" class="ltx_Math" alttext="e" display="inline"><mi>e</mi></math> is unchanged</p>
</div>
</li>
<li id="Ch3.I58.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I58.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ip</span> = 1 : <math id="Ch3.I58.I1.i2.p1.m1" class="ltx_Math" alttext="(e\pm 1)=nxQx+nyQy-(p\pm 1)" display="inline"><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM181"><mi>e</mi><mo>±</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM182"><mi>p</mi><mo>±</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math></p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I58.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I58.ix5.p1" class="ltx_para">
<p class="ltx_p">Length of the accelerator in meters</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S5.SS7" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.7 </span>Search for Optimum
Places to Compensate Resonances</h4>
<section id="Ch3.S5.SS7.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS7.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">To be able to compensate a specific
resonance one has to know how a correcting multipole affects the
cosine and sine like terms of the resonance width at a given position
in the ring. This input data block can be used to find best places for
the compensation of up to three different resonances, by calculating
the contribution to the resonance width for a variable number of
positions. For each position the effect of a fixed and small change of
magnetic strength on those resonance widths is tested.</p>
</div>
</section>
<section id="Ch3.S5.SS7.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS7.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">SEAR</p>
</div>
</section>
<section id="Ch3.S5.SS7.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS7.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">variable but at least 2
</p>
</div>
</section>
<section id="Ch3.S5.SS7.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS7.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I59" class="ltx_itemize">
<li id="Ch3.I59.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I59.i1.p1" class="ltx_para">
<p class="ltx_p">data line 1: <span class="ltx_text ltx_font_italic">Qx Qy Ax Ay length</span></p>
</div>
</li>
<li id="Ch3.I59.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I59.i2.p1" class="ltx_para">
<p class="ltx_p">data line 2: <span class="ltx_text ltx_font_italic">npos n ny1 ny2 ny3 ip1 ip2 ip3</span> (integers)</p>
</div>
</li>
<li id="Ch3.I59.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I59.i3.p1" class="ltx_para">
<p class="ltx_p">data lines from 3 on: <span class="ltx_text ltx_font_italic">name1, …, namen</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS7.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I60" class="ltx_description">
<dt id="Ch3.I60.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx, Qy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix1.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical tune including the integer part</p>
</div>
</dd>
<dt id="Ch3.I60.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">Ax, Ay</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix2.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical amplitudes in mm</p>
</div>
</dd>
<dt id="Ch3.I60.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix3.p1" class="ltx_para">
<p class="ltx_p">Length of the accelerator in m</p>
</div>
</dd>
<dt id="Ch3.I60.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">npos</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix4.p1" class="ltx_para">
<p class="ltx_p">Number of positions to be checked</p>
</div>
</dd>
<dt id="Ch3.I60.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">n</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix5.p1" class="ltx_para">
<p class="ltx_p">Order of the resonance</p>
</div>
</dd>
<dt id="Ch3.I60.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">ny1, ny2, ny3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix6.p1" class="ltx_para">
<p class="ltx_p">Define three resonances of order <math id="Ch3.I60.ix6.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> via :
<math id="Ch3.I60.ix6.p1.m2" class="ltx_Math" alttext="nxQx+nyQy=p" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>=</mo><mi>p</mi></mrow></math> with <math id="Ch3.I60.ix6.p1.m3" class="ltx_Math" alttext="|nx|+|ny|=n" display="inline"><mrow><mrow><mrow><mo stretchy="false">|</mo><mrow id="XM183"><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo stretchy="false">|</mo></mrow><mo>+</mo><mrow><mo stretchy="false">|</mo><mrow id="XM184"><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow><mo stretchy="false">|</mo></mrow></mrow><mo>=</mo><mi>n</mi></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I60.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">ip1,ip2,ip3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix7.p1" class="ltx_para">
<p class="ltx_p">The distance to a resonance is changed by an
integer <math id="Ch3.I60.ix7.p1.m1" class="ltx_Math" alttext="ip" display="inline"><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></math> for each of the three resonances: <math id="Ch3.I60.ix7.p1.m2" class="ltx_Math" alttext="e=nxQx+nyQy-(p+ip)" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM185"><mi>p</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I60.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">namei</span></dt>
<dd class="ltx_item">
<div id="Ch3.I60.ix8.p1" class="ltx_para">
<p class="ltx_p">i’th name of a multipole of order <math id="Ch3.I60.ix8.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> , which has to
appear in the single element list ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>)</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S5.SS8" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.8 </span>Resonance Compensation</h4>
<section id="Ch3.S5.SS8.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS8.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">The input block allows the compensation of
up to three different resonances of order <math id="Ch3.S5.SS8.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> simultaneously the
chromaticity and the tunes can be adjusted. For mostly academic
interest there is also the possibility to consider sub–resonances
which come from multipoles which are a multiple of 2 larger than the
resonance order <math id="Ch3.S5.SS8.SSS15.Px4.SPx1.p1.m2" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math>. However, it must be stated that the
sub–resonances depend differently on the amplitude compared to
resonances where the order of the resonances is the same as that of
the multipoles.</p>
</div>
</section>
<section id="Ch3.S5.SS8.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS8.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">RESO</p>
</div>
</section>
<section id="Ch3.S5.SS8.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS8.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">6</p>
</div>
</section>
<section id="Ch3.S5.SS8.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS8.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I61" class="ltx_itemize">
<li id="Ch3.I61.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i1.p1" class="ltx_para">
<p class="ltx_p">data line 1: <span class="ltx_text ltx_font_italic">nr n ny1 ny2 ny3 ip1 ip2 ip3</span> (integers)</p>
</div>
</li>
<li id="Ch3.I61.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i2.p1" class="ltx_para">
<p class="ltx_p">data line 2: <span class="ltx_text ltx_font_italic">nrs ns1 ns2 ns3</span> (integers)</p>
</div>
</li>
<li id="Ch3.I61.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i3.p1" class="ltx_para">
<p class="ltx_p">data line 3: <span class="ltx_text ltx_font_italic">length Qx Qy Ax Ay</span></p>
</div>
</li>
<li id="Ch3.I61.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i4.p1" class="ltx_para">
<p class="ltx_p">data line 4: <span class="ltx_text ltx_font_italic">name1, …, name6</span></p>
</div>
</li>
<li id="Ch3.I61.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i5.p1" class="ltx_para">
<p class="ltx_p">data line 5: <span class="ltx_text ltx_font_italic">nch name7 name8</span></p>
</div>
</li>
<li id="Ch3.I61.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I61.i6.p1" class="ltx_para">
<p class="ltx_p">data line 6: <span class="ltx_text ltx_font_italic">nq name9 name10 Qx0 Qy0</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS8.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I62" class="ltx_description">
<dt id="Ch3.I62.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">nr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix1.p1" class="ltx_para">
<p class="ltx_p">Number of resonances (0 to 3)
</p>
</div>
</dd>
<dt id="Ch3.I62.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">n</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix2.p1" class="ltx_para">
<p class="ltx_p">Order of the resonance, which is limited to <span class="ltx_text ltx_font_italic">nrco</span> = 5
(see list of parameters in Appendix <a href="#A2.S2" title="B.2 Default Size Parameters ‣ Appendix B List of Default Values" class="ltx_ref"><span class="ltx_text ltx_ref_tag">B.2</span></a>).</p>
</div>
<div id="Ch3.I62.ix2.p2" class="ltx_para">
<p class="ltx_p">normal: <math id="Ch3.I62.ix2.p2.m1" class="ltx_Math" alttext="3\leq n\leq nrco" display="inline"><mrow><mn>3</mn><mo>≤</mo><mi>n</mi><mo>≤</mo><mrow><mi>n</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></mrow></math>; skew: <math id="Ch3.I62.ix2.p2.m2" class="ltx_Math" alttext="2\leq n\leq nrco" display="inline"><mrow><mn>2</mn><mo>≤</mo><mi>n</mi><mo>≤</mo><mrow><mi>n</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>o</mi></mrow></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I62.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">ny1, ny2, ny3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix3.p1" class="ltx_para">
<p class="ltx_p">Define three resonances of order <math id="Ch3.I62.ix3.p1.m1" class="ltx_Math" alttext="n" display="inline"><mi>n</mi></math> via :
<math id="Ch3.I62.ix3.p1.m2" class="ltx_Math" alttext="nxQx+nyQy=p" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>=</mo><mi>p</mi></mrow></math> with <math id="Ch3.I62.ix3.p1.m3" class="ltx_Math" alttext="|nx|+|ny|=n" display="inline"><mrow><mrow><mrow><mo stretchy="false">|</mo><mrow id="XM186"><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo stretchy="false">|</mo></mrow><mo>+</mo><mrow><mo stretchy="false">|</mo><mrow id="XM187"><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow><mo stretchy="false">|</mo></mrow></mrow><mo>=</mo><mi>n</mi></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I62.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">ip1, ip2, ip3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix4.p1" class="ltx_para">
<p class="ltx_p">The distance to the resonance <math id="Ch3.I62.ix4.p1.m1" class="ltx_Math" alttext="e" display="inline"><mi>e</mi></math> can be
changed by an integer value:
<br class="ltx_break"><math id="Ch3.I62.ix4.p1.m2" class="ltx_Math" alttext="e=nxQx+nyQy-(p+ip)" display="inline"><mrow><mi>e</mi><mo>=</mo><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>-</mo><mrow><mo stretchy="false">(</mo><mrow id="XM188"><mi>p</mi><mo>+</mo><mrow><mi>i</mi><mo>⁢</mo><mi>p</mi></mrow></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I62.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">nrs</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix5.p1" class="ltx_para">
<p class="ltx_p">Number of sub–resonances (0 to 3)</p>
</div>
</dd>
<dt id="Ch3.I62.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">ns1, ns2, ns3</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix6.p1" class="ltx_para">
<p class="ltx_p">Order of the multipole with <math id="Ch3.I62.ix6.p1.m1" class="ltx_Math" alttext="ns\leq 9" display="inline"><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>s</mi></mrow><mo>≤</mo><mn>9</mn></mrow></math>
and <math id="Ch3.I62.ix6.p1.m2" class="ltx_Math" alttext="(ns-n)/2\in{\mathbf{N}}" display="inline"><mrow><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM189"><mrow><mi>n</mi><mo>⁢</mo><mi>s</mi></mrow><mo>-</mo><mi>n</mi></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><mn>2</mn></mrow><mo>∈</mo><mi>𝐍</mi></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I62.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">length</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix7.p1" class="ltx_para">
<p class="ltx_p">Length of the machine in meters</p>
</div>
</dd>
<dt id="Ch3.I62.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx, Qy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix8.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical tune including the integer part</p>
</div>
</dd>
<dt id="Ch3.I62.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">Ax, Ay</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix9.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical amplitudes in mm</p>
</div>
</dd>
<dt id="Ch3.I62.ix10" class="ltx_item"><span class="ltx_tag ltx_tag_description">name1, …, name6</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix10.p1" class="ltx_para">
<p class="ltx_p">Names ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) of the correction
multipoles for the first, second and third resonance</p>
</div>
</dd>
<dt id="Ch3.I62.ix11" class="ltx_item"><span class="ltx_tag ltx_tag_description">nch</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix11.p1" class="ltx_para">
<p class="ltx_p">(integer) Switch for the chromaticity correction (0 = off,
1 = on)</p>
</div>
</dd>
<dt id="Ch3.I62.ix12" class="ltx_item"><span class="ltx_tag ltx_tag_description">name7, name8</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix12.p1" class="ltx_para">
<p class="ltx_p">Names ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) of the families of
sextupoles to correct the chromaticity</p>
</div>
</dd>
<dt id="Ch3.I62.ix13" class="ltx_item"><span class="ltx_tag ltx_tag_description">nq</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix13.p1" class="ltx_para">
<p class="ltx_p">(integer) Switch for the tune adjustment (0 = off, 1 = on)</p>
</div>
</dd>
<dt id="Ch3.I62.ix14" class="ltx_item"><span class="ltx_tag ltx_tag_description">name9, name10</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix14.p1" class="ltx_para">
<p class="ltx_p">Names ( <a href="#Ch3.S2.SS1.SSS1" title="Linear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) of the families of
quadrupoles to adjust the tune
</p>
</div>
</dd>
<dt id="Ch3.I62.ix15" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx0, Qy0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I62.ix15.p1" class="ltx_para">
<p class="ltx_p">Desired tune values including the integer part</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="Ch3.S5.SS9" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.9 </span>Differential Algebra</h4>
<section id="Ch3.S5.SS9.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">This input block initiates the calculation
of a one turn map using the LBL Differential Algebra
package <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>. The use of this block inhibits
post–processing. The same differential algebra tools allow a
subsequent normal form analysis (see <cite class="ltx_cite">[<a href="#bib.bib17" title="" class="ltx_ref">17</a>]</cite>). A
four–dimensional version integrated in SixTrack is available as
described in sections <a href="#Ch3.S5.SS10" title="3.5.10 Normal Forms ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.10</span></a> and <a href="#Ch3.S5.SS11" title="3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.11</span></a>.</p>
</div>
</section>
<section id="Ch3.S5.SS9.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">DIFF.</p>
</div>
</section>
<section id="Ch3.S5.SS9.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">1 or
2</p>
</div>
</section>
<section id="Ch3.S5.SS9.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I63" class="ltx_itemize">
<li id="Ch3.I63.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I63.i1.p1" class="ltx_para">
<p class="ltx_p">data line 1: <span class="ltx_text ltx_font_italic">nord nvar preda nsix ncor</span></p>
</div>
</li>
<li id="Ch3.I63.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I63.i2.p1" class="ltx_para">
<p class="ltx_p">data line 2: <span class="ltx_text ltx_font_italic">name(1),…,name(ncor)</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I64" class="ltx_description">
<dt id="Ch3.I64.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">nord</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Order of the map</p>
</div>
</dd>
<dt id="Ch3.I64.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">nvar</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix2.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of the variables (2 to 6). <span class="ltx_text ltx_font_italic">nvar</span>
= 2,4,6 : two– and four–dimensional transverse motion and full
six–dimensional phase space respectively. <span class="ltx_text ltx_font_italic">nvar</span> = 5 :
four–dimensional transverse motion plus the relative momentum
deviation <math id="Ch3.I64.ix2.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> as a parameter.</p>
</div>
</dd>
<dt id="Ch3.I64.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">preda</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix3.p1" class="ltx_para">
<p class="ltx_p">Precision needed by the DA package, usually set to
<span class="ltx_text ltx_font_italic">preda</span> = 1e-38</p>
</div>
</dd>
<dt id="Ch3.I64.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">nsix</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix4.p1" class="ltx_para">
<p class="ltx_p">(integer) switch to calculate a <math id="Ch3.I64.ix4.p1.m1" class="ltx_Math" alttext="5\times 6" display="inline"><mrow><mn>5</mn><mo>×</mo><mn>6</mn></mrow></math> instead of a <math id="Ch3.I64.ix4.p1.m2" class="ltx_Math" alttext="6\times 6" display="inline"><mrow><mn>6</mn><mo>×</mo><mn>6</mn></mrow></math> map. This saves computational time and memory space, as the
machine can be treated up to the cavity as five–dimensional (
constant momentum ).</p>
</div>
<div id="Ch3.I64.ix4.p2" class="ltx_para">
<ul id="Ch3.I64.I1" class="ltx_itemize">
<li id="Ch3.I64.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I64.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">nsix</span> = 0 : <math id="Ch3.I64.I1.i1.p1.m1" class="ltx_Math" alttext="6x6" display="inline"><mrow><mn>6</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mn>6</mn></mrow></math> map</p>
</div>
</li>
<li id="Ch3.I64.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I64.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">nsix</span> = 1 : <math id="Ch3.I64.I1.i2.p1.m1" class="ltx_Math" alttext="5x6" display="inline"><mrow><mn>5</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mn>6</mn></mrow></math> map
<br class="ltx_break">(<span class="ltx_text ltx_font_italic">nvar</span> must be set to 6; 6D closed orbit must not be
calculated, i.e. <span class="ltx_text ltx_font_italic">iclo6 = 0</span> (<a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>) and the map
calculation is stopped once a cavity has been reached and being
evaluated.)</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I64.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">ncor</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix5.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of zero–length elements to be
additional parameters besides the transverse and/or longitudinal
coordinates (i.e. two–, four–, five– or six–dimensional phase
space).</p>
</div>
</dd>
<dt id="Ch3.I64.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">name(i)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I64.ix6.p1" class="ltx_para">
<p class="ltx_p">(char) <span class="ltx_text ltx_font_italic">Ncor</span> names ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) of
zero–length elements (e.g dipole kicks, quadrupole kicks,
sextupoles kicks etc.).</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS9.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS9.SSS15.Px4.SPx5.p1" class="ltx_para">
<ul id="Ch3.I65" class="ltx_itemize">
<li id="Ch3.I65.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I65.i1.p1" class="ltx_para">
<p class="ltx_p">For <span class="ltx_text ltx_font_italic">nsix = 1</span> the map can only be calculated till a
cavity is reached.</p>
</div>
</li>
<li id="Ch3.I65.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I65.i2.p1" class="ltx_para">
<p class="ltx_p">If the 6D closed orbit is calculated, the <math id="Ch3.I65.i2.p1.m1" class="ltx_Math" alttext="5x6" display="inline"><mrow><mn>5</mn><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mn>6</mn></mrow></math> map can not be
done, <span class="ltx_text ltx_font_italic">nsix</span> is therefore forced to 0.</p>
</div>
</li>
<li id="Ch3.I65.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I65.i3.p1" class="ltx_para">
<p class="ltx_p">If nvar is set to 5, the momentum dependence is determined
without the need for including a fake cavity. With other words: the
linear blocks are automatically broken up into single linear
elements so that the momentum dependence can be calculated.</p>
</div>
</li>
<li id="Ch3.I65.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I65.i4.p1" class="ltx_para">
<p class="ltx_p">If a DA map is needed at some longitudinal location one just has
to introduce an element denoted “DAMAP” at that place in the
structure, “DAMAP” has also to appear as a marker (zero length,
element type = 0) in the single element list ( <a href="#Ch3.S2.SS1.SSS2" title="Nonlinear Elements ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>). This
extra map is written to file # 17.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch3.S5.SS10" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.10 </span>Normal Forms</h4>
<section id="Ch3.S5.SS10.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">All the parameters to compute the Normal
Form of a truncated one–turn map are given in the <span class="ltx_text ltx_font_italic">Normal Form </span>
input block. Details on these procedures including the next
block <a href="#Ch3.S5.SS11" title="3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.11</span></a> can be found in reference <cite class="ltx_cite">[<a href="#bib.bib27" title="" class="ltx_ref">27</a>]</cite>.</p>
</div>
</section>
<section id="Ch3.S5.SS10.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">NORM</p>
</div>
</section>
<section id="Ch3.S5.SS10.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">1</p>
</div>
</section>
<section id="Ch3.S5.SS10.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I66" class="ltx_itemize">
<li id="Ch3.I66.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I66.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">nord nvar</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I67" class="ltx_description">
<dt id="Ch3.I67.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">nord</span></dt>
<dd class="ltx_item">
<div id="Ch3.I67.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Order of the Normal Form</p>
</div>
</dd>
<dt id="Ch3.I67.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">nvar</span></dt>
<dd class="ltx_item">
<div id="Ch3.I67.ix2.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of variables</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS10.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS10.SSS15.Px4.SPx5.p1" class="ltx_para">
<ul id="Ch3.I68" class="ltx_itemize">
<li id="Ch3.I68.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I68.i1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Normal Form </span> input block has to be used in
conjunction with the <span class="ltx_text ltx_font_italic">Differential Algebra </span> input block that
computes the one–turn map of the accelerator.</p>
</div>
</li>
<li id="Ch3.I68.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I68.i2.p1" class="ltx_para">
<p class="ltx_p">The value of the parameter <span class="ltx_text ltx_font_italic">nord</span> should not exceed the
order specified for the transfer map plus one.</p>
</div>
</li>
<li id="Ch3.I68.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I68.i3.p1" class="ltx_para">
<p class="ltx_p">The value of the parameter <span class="ltx_text ltx_font_italic">nvar</span> should be equal to the
number of coordinates used to compute the map plus eventually the
number of correctors specified in the <span class="ltx_text ltx_font_italic">Differential Algebra </span>
input block.
</p>
</div>
</li>
<li id="Ch3.I68.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I68.i4.p1" class="ltx_para">
<p class="ltx_p">the value <math id="Ch3.I68.i4.p1.m1" class="ltx_Math" alttext="1" display="inline"><mn>1</mn></math> for the off–momentum order is forbidden. This
case corresponds to the linear chromaticity correction. It is in
fact corrected by default when <math id="Ch3.I68.i4.p1.m2" class="ltx_Math" alttext="par1=1" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>1</mn></mrow><mo>=</mo><mn>1</mn></mrow></math> or <math id="Ch3.I68.i4.p1.m3" class="ltx_Math" alttext="par2=2" display="inline"><mrow><mrow><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>2</mn></mrow><mo>=</mo><mn>2</mn></mrow></math>.</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch3.S5.SS11" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.11 </span>Corrections</h4>
<section id="Ch3.S5.SS11.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">All the parameters to optimise the
tune–shift using a set of correctors are given in the <span class="ltx_text ltx_font_italic">Correction
</span> input block. (For details see reference <cite class="ltx_cite">[<a href="#bib.bib27" title="" class="ltx_ref">27</a>]</cite>.)</p>
</div>
</section>
<section id="Ch3.S5.SS11.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">CORR</p>
</div>
</section>
<section id="Ch3.S5.SS11.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">3</p>
</div>
</section>
<section id="Ch3.S5.SS11.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I69" class="ltx_itemize">
<li id="Ch3.I69.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I69.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">ctype ncor</span></p>
</div>
</li>
<li id="Ch3.I69.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I69.i2.p1" class="ltx_para">
<p class="ltx_p">second data line: <span class="ltx_text ltx_font_italic">name(1),…,name(ncor)</span></p>
</div>
</li>
<li id="Ch3.I69.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I69.i3.p1" class="ltx_para">
<p class="ltx_p">third data line: <span class="ltx_text ltx_font_italic">par1,…,par5</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I70" class="ltx_description">
<dt id="Ch3.I70.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">ctype</span></dt>
<dd class="ltx_item">
<div id="Ch3.I70.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Correction type :</p>
<ul id="Ch3.I70.I1" class="ltx_itemize">
<li id="Ch3.I70.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I70.I1.i1.p1" class="ltx_para">
<p class="ltx_p">ctype = 0 order–by–order correction</p>
</div>
</li>
<li id="Ch3.I70.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I70.I1.i2.p1" class="ltx_para">
<p class="ltx_p">ctype = 1 global correction
</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I70.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">ncor</span></dt>
<dd class="ltx_item">
<div id="Ch3.I70.ix2.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of zero–length elements to be used as
correctors in the optimisation of the tune–shift.</p>
</div>
</dd>
<dt id="Ch3.I70.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">name(i)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I70.ix3.p1" class="ltx_para">
<p class="ltx_p">(char) <span class="ltx_text ltx_font_italic">Ncor</span> names of zero–length elements
(e.g sextupoles kicks, octupoles kicks etc.).</p>
</div>
</dd>
<dt id="Ch3.I70.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">par1,…,par5</span></dt>
<dd class="ltx_item">
<div id="Ch3.I70.ix4.p1" class="ltx_para">
<p class="ltx_p">Parameters for the correction. Their meaning
depend on the value of <span class="ltx_text ltx_font_italic">ctype</span> and is explained in Table <a href="#Ch3.T8" title="Table 3.8 ‣ Format ‣ 3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.8</span></a>.</p>
</div>
</dd>
</dl>
</div>
<figure id="Ch3.T8" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.8: </span>Tune-shift correction parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">par1</td>
<td class="ltx_td ltx_align_center ltx_border_r">par2</td>
<td class="ltx_td ltx_align_center ltx_border_r">par3</td>
<td class="ltx_td ltx_align_center ltx_border_r">par4</td>
<td class="ltx_td ltx_align_center ltx_border_r">par5</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">variable type</td>
<td class="ltx_td ltx_align_center ltx_border_r">integer</td>
<td class="ltx_td ltx_align_center ltx_border_r">integer</td>
<td class="ltx_td ltx_align_center ltx_border_r">real</td>
<td class="ltx_td ltx_align_center ltx_border_r">real</td>
<td class="ltx_td ltx_align_center ltx_border_r">real</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">ctype = 0</td>
<td class="ltx_td ltx_align_center ltx_border_r">tune–shift</td>
<td class="ltx_td ltx_align_center ltx_border_r">off–momentum</td>
<td class="ltx_td ltx_align_center ltx_border_r">0.0</td>
<td class="ltx_td ltx_align_center ltx_border_r">0.0</td>
<td class="ltx_td ltx_align_center ltx_border_r">0.0</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">order <math id="Ch3.T8.m1" class="ltx_Math" alttext="\leq 2" display="inline"><mrow><mi></mi><mo>≤</mo><mn>2</mn></mrow></math>
</td>
<td class="ltx_td ltx_align_center ltx_border_r">order <math id="Ch3.T8.m2" class="ltx_Math" alttext="\leq 3" display="inline"><mrow><mi></mi><mo>≤</mo><mn>3</mn></mrow></math>
</td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">ctype = 1</td>
<td class="ltx_td ltx_align_center ltx_border_r">
                    <math id="Ch3.T8.m3" class="ltx_Math" alttext="N_{min}\geq 2" display="inline"><mrow><msub><mi>N</mi><mrow><mi>m</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>n</mi></mrow></msub><mo>≥</mo><mn>2</mn></mrow></math>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                    <math id="Ch3.T8.m4" class="ltx_Math" alttext="N_{max}\leq 3" display="inline"><mrow><msub><mi>N</mi><mrow><mi>m</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>x</mi></mrow></msub><mo>≤</mo><mn>3</mn></mrow></math>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                    <math id="Ch3.T8.m5" class="ltx_Math" alttext="\alpha_{H}" display="inline"><msub><mi>α</mi><mi>H</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                    <math id="Ch3.T8.m6" class="ltx_Math" alttext="\alpha_{V}" display="inline"><msub><mi>α</mi><mi>V</mi></msub></math>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                    <math id="Ch3.T8.m7" class="ltx_Math" alttext="\delta_{0}" display="inline"><msub><mi>δ</mi><mn>0</mn></msub></math>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_b ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S5.SS11.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS11.SSS15.Px4.SPx5.p1" class="ltx_para">
<ul id="Ch3.I71" class="ltx_itemize">
<li id="Ch3.I71.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I71.i1.p1" class="ltx_para">
<p class="ltx_p">The names of the elements specified in the <span class="ltx_text ltx_font_italic">Correction </span>
input block should be grouped according to the multipole type:
first sextupoles, then octupoles <math id="Ch3.I71.i1.p1.m1" class="ltx_Math" alttext="\ldots" display="inline"><mi mathvariant="normal">…</mi></math> etc.</p>
</div>
</li>
<li id="Ch3.I71.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I71.i2.p1" class="ltx_para">
<p class="ltx_p">In case of order–by–order corrections, at least one of the
quantities <math id="Ch3.I71.i2.p1.m1" class="ltx_Math" alttext="par1,par2" display="inline"><mrow><mrow id="XM190"><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>1</mn></mrow><mo>,</mo><mrow id="XM191"><mi>p</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mn>2</mn></mrow></mrow></math> has to be zero, i.e. the correction of
tune–shift terms depending on both amplitude and momentum is not
allowed (as stated in the previous section).</p>
</div>
</li>
</ul>
</div>
</section>
</section>
<section id="Ch3.S5.SS12" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5.12 </span>Post–processing</h4>
<section id="Ch3.S5.SS12.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">It has been seen in the past that the
tracking data hold a large amount of information which should be
extracted for a thorough understanding of the nonlinear motion. It is
therefore necessary to store the tracking data turn by turn and
post–process it after the tracking has been finished. The following
quantities are calculated:</p>
<ol id="Ch3.I72" class="ltx_enumerate">
<li id="Ch3.I72.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I72.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Lyapunov exponent analysis</span> This allows to decide if the
motion is of regular or chaotic nature, and, in the later case, that
the particle will ultimately be lost. This is done with the
following procedure:</p>
<ol id="Ch3.I72.I1" class="ltx_enumerate">
<li id="Ch3.I72.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch3.I72.I1.i1.p1" class="ltx_para">
<p class="ltx_p">Start the analysis where the distance in phase space of the two
particles reaches its minimum.</p>
</div>
</li>
<li id="Ch3.I72.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch3.I72.I1.i2.p1" class="ltx_para">
<p class="ltx_p">Study the increase in a double logarithmic scale so that the
slope in a regular case is always one, while a exponential increase
stays exponential when we have chaos.</p>
</div>
</li>
<li id="Ch3.I72.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch3.I72.I1.i3.p1" class="ltx_para">
<p class="ltx_p">Average the distance in phase space to reduce local
fluctuations, as we are interested in a long range effect.</p>
</div>
</li>
<li id="Ch3.I72.I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch3.I72.I1.i4.p1" class="ltx_para">
<p class="ltx_p">Make a weighted linear fit with an increasing number of
averaged values of distance in phase space, so that an exponential
increase results in a slope that is larger than one and is
increasing. (The weighting stresses the importance of values at
large turn numbers).</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch3.I72.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I72.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Analysis of the tunes</span> This is done either by the averaged
phase advance method leading to very precise values of the
horizontal and vertical tunes. A FFT analysis is also done. With
the second method one can evaluate the relative strength of
resonances, rather than achieve a precise tune measurement. In both
cases the nearby resonances are determined.</p>
</div>
</li>
<li id="Ch3.I72.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I72.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Smear</span> The smear of the horizontal and vertical emittances
and the sum of the emittances are calculated in case of linearly
coupled and un–coupled motion.</p>
</div>
</li>
<li id="Ch3.I72.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I72.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Nonlinear Invariants</span> A rough estimate of the nonlinear
invariants are given.</p>
</div>
</li>
<li id="Ch3.I72.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch3.I72.i5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Plotting</span> The processed tracking data can be plotted in
different ways:</p>
<ol id="Ch3.I72.I2" class="ltx_enumerate">
<li id="Ch3.I72.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch3.I72.I2.i1.p1" class="ltx_para">
<p class="ltx_p">The distance of phase space as a function of amplitude</p>
</div>
</li>
<li id="Ch3.I72.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch3.I72.I2.i2.p1" class="ltx_para">
<p class="ltx_p">Phase space plots</p>
</div>
</li>
<li id="Ch3.I72.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(c)</span>
<div id="Ch3.I72.I2.i3.p1" class="ltx_para">
<p class="ltx_p">Stroboscoped phase space</p>
</div>
</li>
<li id="Ch3.I72.I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(d)</span>
<div id="Ch3.I72.I2.i4.p1" class="ltx_para">
<p class="ltx_p">FFT amplitudes</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch3.I72.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch3.I72.i6.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_bold">Summary</span> The post–processing results for a complete
tracking session with varying initial parameters are summarised in a
table at the end of the run.</p>
</div>
</li>
</ol>
</div>
</section>
<section id="Ch3.S5.SS12.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">POST</p>
</div>
</section>
<section id="Ch3.S5.SS12.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">4</p>
</div>
</section>
<section id="Ch3.S5.SS12.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I73" class="ltx_itemize">
<li id="Ch3.I73.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I73.i1.p1" class="ltx_para">
<p class="ltx_p">data line 1: <span class="ltx_text ltx_font_italic">comment title</span></p>
</div>
</li>
<li id="Ch3.I73.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I73.i2.p1" class="ltx_para">
<p class="ltx_p">data line 2: <span class="ltx_text ltx_font_italic">iav nstart nstop iwg dphix dphiy iskip iconv
imad cma1 cma2</span> (general parameters)</p>
</div>
</li>
<li id="Ch3.I73.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I73.i3.p1" class="ltx_para">
<p class="ltx_p">data line 3: <span class="ltx_text ltx_font_italic">Qx0 Qy0 ivox ivoy ires dres ifh dfft</span>
(parameters for the tune calculation)</p>
</div>
</li>
<li id="Ch3.I73.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I73.i4.p1" class="ltx_para">
<p class="ltx_p">data line 4: <span class="ltx_text ltx_font_italic">kwtype itf icr idis icow istw iffw nprint
ndafi</span> (integer parameters for the plotting)</p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I74" class="ltx_description">
<dt id="Ch3.I74.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">iav</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Averaging interval of the values of the distance
in phase space. Typically a tenth of the total turn number should be
used as this interval.</p>
</div>
</dd>
<dt id="Ch3.I74.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">nstart, nstop</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix2.p1" class="ltx_para">
<p class="ltx_p">(integers) Start and stop turn number for the
analysis of the post–processing (0 0 = all data used).</p>
</div>
</dd>
<dt id="Ch3.I74.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">iwg</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Switch for the weighting of the slope
calculation of the distance in phase space (0 = off, 1 = on).</p>
</div>
</dd>
<dt id="Ch3.I74.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">dphix, dphiy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix4.p1" class="ltx_para">
<p class="ltx_p">Horizontal and vertical angle interval in radians
that is used to stroboscope phase space. This stroboscoping of one
of the two phase space projections is done by restricting the angle
in the other phase space respectively to lie inside <math id="Ch3.I74.ix4.p1.m1" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> <span class="ltx_text ltx_font_italic">dphix</span> or <math id="Ch3.I74.ix4.p1.m2" class="ltx_Math" alttext="\pm" display="inline"><mo>±</mo></math> <span class="ltx_text ltx_font_italic">dphiy</span>.</p>
</div>
</dd>
<dt id="Ch3.I74.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">iskip</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix5.p1" class="ltx_para">
<p class="ltx_p">(integer) This parameter allows to reduce the number of
data to be processed: only each <span class="ltx_text ltx_font_italic">iskip</span> sample of data will be
used.</p>
</div>
</dd>
<dt id="Ch3.I74.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">iconv</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix6.p1" class="ltx_para">
<p class="ltx_p">(integer) If <span class="ltx_text ltx_font_italic">iconv</span> is set to 1 the tracking data
are not normalised linearly. Sometimes it is necessary to compare
normalised to unnormalised data as the later will be found in the
real machine.</p>
</div>
</dd>
<dt id="Ch3.I74.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">imad</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix7.p1" class="ltx_para">
<p class="ltx_p">(integer) This parameters is useful when MAD data shall
be analysed (<span class="ltx_text ltx_font_italic">imad</span> set to one).</p>
</div>
</dd>
<dt id="Ch3.I74.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">cma1, cma2</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix8.p1" class="ltx_para">
<p class="ltx_p">(floats) To improve the Lyapunov analysis for MAD
data and in the case that the motion is 6D but the 6D closed orbit
is not calculated the off–momentum and the path–length difference
(<math id="Ch3.I74.ix8.p1.m1" class="ltx_Math" alttext="\sigma=s-v_{o}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) can be scaled with <span class="ltx_text ltx_font_italic">cma1</span> and
<span class="ltx_text ltx_font_italic">cma2</span> respectively (see also <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>). Please set both
to 1. when the 6D closed orbit is calculated.</p>
</div>
</dd>
<dt id="Ch3.I74.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">Qx0, Qy0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix9.p1" class="ltx_para">
<p class="ltx_p">(floats) Values of the horizontal and vertical tune
respectively (integer part) to be added to the averaged phase
advance and to the <math id="Ch3.I74.ix9.p1.m1" class="ltx_Math" alttext="Q" display="inline"><mi>Q</mi></math> values of the FFT analysis.</p>
</div>
</dd>
<dt id="Ch3.I74.ix10" class="ltx_item"><span class="ltx_tag ltx_tag_description">ivox, ivoy</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix10.p1" class="ltx_para">
<p class="ltx_p">(integers) The tunes from the average phase advance
are difficult to be calculated when this phase advance is strongly
changing from turn to turn and when the tune is close to 0.5, as
then the phase may become negative leading to a deviation of one
unit. This problem can partly be overcome by setting these switches
in the following way:</p>
<ul id="Ch3.I74.I1" class="ltx_itemize">
<li id="Ch3.I74.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I1.i1.p1" class="ltx_para">
<p class="ltx_p">tune close to an integer: <span class="ltx_text ltx_font_italic">ivox, ivoy</span> = 1
</p>
</div>
</li>
<li id="Ch3.I74.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I1.i2.p1" class="ltx_para">
<p class="ltx_p">tune close to half an integer: <span class="ltx_text ltx_font_italic">ivox, ivoy</span> = 0</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I74.ix11" class="ltx_item"><span class="ltx_tag ltx_tag_description">ires, dres</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix11.p1" class="ltx_para">
<p class="ltx_p">(integer,float) For the calculated tune values from
the average phase advance method and the FFT–routine the closest
resonances are searched up to <span class="ltx_text ltx_font_italic">ires</span>’th order and inside a
maximum distance to the resonance <span class="ltx_text ltx_font_italic">dres</span>, so that <math id="Ch3.I74.ix11.p1.m1" class="ltx_Math" alttext="nxQx+nyQy&lt;dres" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi><mo>⁢</mo><mi>Q</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>&lt;</mo><mrow><mi>d</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></math> and <math id="Ch3.I74.ix11.p1.m2" class="ltx_Math" alttext="nx+ny\leq ires" display="inline"><mrow><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>x</mi></mrow><mo>+</mo><mrow><mi>n</mi><mo>⁢</mo><mi>y</mi></mrow></mrow><mo>≤</mo><mrow><mi>i</mi><mo>⁢</mo><mi>r</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mi>s</mi></mrow></mrow></math>.</p>
</div>
</dd>
<dt id="Ch3.I74.ix12" class="ltx_item"><span class="ltx_tag ltx_tag_description">ifh, dfft</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix12.p1" class="ltx_para">
<p class="ltx_p">(integer,float) For the FFT analysis the tune
interval can be chosen with <span class="ltx_text ltx_font_italic">ifh</span>. To find resonances with
the FFT spectrum, all peaks below a fraction <span class="ltx_text ltx_font_italic">dfft</span> of the
maximum peak are accepted.</p>
<ul id="Ch3.I74.I2" class="ltx_itemize">
<li id="Ch3.I74.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I2.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ifh</span> = 0 : <math id="Ch3.I74.I2.i1.p1.m1" class="ltx_Math" alttext="0\leq Q\leq 1" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>1</mn></mrow></math></p>
</div>
</li>
<li id="Ch3.I74.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I2.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ifh</span> = 1 : <math id="Ch3.I74.I2.i2.p1.m1" class="ltx_Math" alttext="0\leq Q\leq 0.5" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>0.5</mn></mrow></math></p>
</div>
</li>
<li id="Ch3.I74.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I2.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ifh</span> = 2 : <math id="Ch3.I74.I2.i3.p1.m1" class="ltx_Math" alttext="0.5\leq Q\leq 1" display="inline"><mrow><mn>0.5</mn><mo>≤</mo><mi>Q</mi><mo>≤</mo><mn>1</mn></mrow></math></p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I74.ix13" class="ltx_item"><span class="ltx_tag ltx_tag_description">kwtype</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix13.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text" style="font-size:120%;">– Disabled, set to 0 –</span> (<span class="ltx_text" style="font-size:90%;">Terminal
type, e.g. 7878 for the Pericom graphic terminals. For details,
consult the HPLOT manual <cite class="ltx_cite">[<a href="#bib.bib8" title="" class="ltx_ref">8</a>]</cite>.</span>)</p>
</div>
</dd>
<dt id="Ch3.I74.ix14" class="ltx_item"><span class="ltx_tag ltx_tag_description">itf</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix14.p1" class="ltx_para">
<p class="ltx_p">Switch to get PS–file of plots</p>
<ul id="Ch3.I74.I3" class="ltx_itemize">
<li id="Ch3.I74.I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I3.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">itf</span> = 0 : off</p>
</div>
</li>
<li id="Ch3.I74.I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I3.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">itf</span> = 1 : on</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I74.ix15" class="ltx_item"><span class="ltx_tag ltx_tag_description">icr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix15.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text" style="font-size:120%;">– Disabled, set to 0 –</span> (<span class="ltx_text" style="font-size:90%;">Switch to stop
after each plot (0 = no stop, 1 = stop after each plot).</span></p>
</div>
</dd>
<dt id="Ch3.I74.ix16" class="ltx_item"><span class="ltx_tag ltx_tag_description">idis, icow, istw, iffw</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix16.p1" class="ltx_para">
<p class="ltx_p">Switches (0 = off) to select the
different plots. If all values are set to zero, the HBOOK/HPLOT
routine will not be called.</p>
<ul id="Ch3.I74.I4" class="ltx_itemize">
<li id="Ch3.I74.I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I4.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idis</span> = 1 : plot of distance in phase space</p>
</div>
</li>
<li id="Ch3.I74.I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I4.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">icow</span> = 1 : a set of plots of projections of the
six–dimensional phase space and the energy E versus the turn
number</p>
</div>
</li>
<li id="Ch3.I74.I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I4.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">istw</span> = 1 : plot of the stroboscoped phase space
projection by restricting the phase in the other phase space
projection</p>
</div>
</li>
<li id="Ch3.I74.I4.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I4.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iffw</span> = 1 : plots of the horizontal and vertical FFT
spectrum with linear amplitude scale</p>
</div>
</li>
<li id="Ch3.I74.I4.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I74.I4.i5.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iffw</span> = 2 : plots of the horizontal and vertical FFT
spectrum with logarithmic amplitude scale</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I74.ix17" class="ltx_item"><span class="ltx_tag ltx_tag_description">nprint</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix17.p1" class="ltx_para">
<p class="ltx_p">Switch to stop the printing of the post–processing
output to unit 6 (0 = printing off, 1 = printing on).</p>
</div>
</dd>
<dt id="Ch3.I74.ix18" class="ltx_item"><span class="ltx_tag ltx_tag_description">ndafi</span></dt>
<dd class="ltx_item">
<div id="Ch3.I74.ix18.p1" class="ltx_para">
<p class="ltx_p">Number of data–files to be processed (units :
from 90 to (90–ndafi+1) ).</p>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S5.SS12.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S5.SS12.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I75" class="ltx_enumerate">
<li id="Ch3.I75.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I75.i1.p1" class="ltx_para">
<p class="ltx_p">The post–processing can be done in two ways :</p>
<ol id="Ch3.I75.I1" class="ltx_enumerate">
<li id="Ch3.I75.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(a)</span>
<div id="Ch3.I75.I1.i1.p1" class="ltx_para">
<p class="ltx_p">directly following a tracking run by adding this input block to
the input blocks of the tracking</p>
</div>
</li>
<li id="Ch3.I75.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">(b)</span>
<div id="Ch3.I75.I1.i2.p1" class="ltx_para">
<p class="ltx_p">as a later run where the tracking parameter file (unit # 3)
consists of only the <span class="ltx_text ltx_font_italic">Program Version</span> input
block <a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a> (using the <span class="ltx_text ltx_font_italic">FREE</span> option) and of this input
block specifying the post–processing parameters followed by <span class="ltx_text ltx_font_italic">ENDE</span> as usual</p>
</div>
</li>
</ol>
</div>
</li>
<li id="Ch3.I75.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I75.i2.p1" class="ltx_para">
<p class="ltx_p">The HBOOK/HPLOT routines are only used at the start of the main
program for initialisation and termination. The actual plots are
done in the post–processing subroutine. The routines are activated
only if at least one of the plotting parameters (<span class="ltx_text ltx_font_italic">idis, icow,
istw, iffw</span>) is set to one.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
</section>
<section id="Ch3.S6" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.6 </span>Initial Conditions for Tracking</h3>
<section id="Ch3.S6.SS12.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S6.SS12.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">For the study of nonlinear system the
choice of initial conditions is of crucial importance. The input
structure for the initial conditions was therefore organise in such a
way as to allow for maximum flexibility. SixTrack is optimised to
reach the largest possible number of turns. In order to derive the
Lyapunov exponent and thereby to distinguish between regular and
chaotic motion, the particle has a close by companion particle.
Moreover, experience has shown that varying only the amplitude while
keeping the phases constant is sufficient to understand the nonlinear
dynamics, as a subsequent detailed post–processing allows to find the
dependence of the parameter of interest on these phases.</p>
</div>
</section>
<section id="Ch3.S6.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.6.1 </span>Tracking Parameters</h4>
<section id="Ch3.S6.SS1.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">All tracking parameters are defined with
this input block, the initial coordinates are generally set here, too.
A fine tuning of the initial condition is done with Initial
Coordinates block ( <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>) and the parameters for the
synchrotron oscillation are given in block ( <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>)</p>
</div>
</section>
<section id="Ch3.S6.SS1.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">TRAC</p>
</div>
</section>
<section id="Ch3.S6.SS1.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">3</p>
</div>
</section>
<section id="Ch3.S6.SS1.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I76" class="ltx_itemize">
<li id="Ch3.I76.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I76.i1.p1" class="ltx_para">
<p class="ltx_p">data line 1: <span class="ltx_text ltx_font_italic">numl numlr napx amp(1) amp0 ird imc niu(1) niu(2) numlcp numlmax</span></p>
</div>
</li>
<li id="Ch3.I76.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I76.i2.p1" class="ltx_para">
<p class="ltx_p">data line 2: <span class="ltx_text ltx_font_italic">idy(1) idy(2) idfor irew iclo6</span> (integers)</p>
</div>
</li>
<li id="Ch3.I76.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I76.i3.p1" class="ltx_para">
<p class="ltx_p">data line 3: <span class="ltx_text ltx_font_italic">nde(1) nde(2) nwr(1) nwr(2) nwr(3) nwr(4) ntwin ibidu iexact</span> (integers)</p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I77" class="ltx_description">
<dt id="Ch3.I77.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">numl</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of turns in the forward direction
</p>
</div>
</dd>
<dt id="Ch3.I77.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">numlr</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix2.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of turns in the backward direction</p>
</div>
</dd>
<dt id="Ch3.I77.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">napx</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix3.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of amplitude variations (i.e. particle pairs)</p>
</div>
</dd>
<dt id="Ch3.I77.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">amp(1), amp0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix4.p1" class="ltx_para">
<p class="ltx_p">(floats) Start and end amplitude (any sign) in
the horizontal phase space plane for the amplitude variations. The
vertical amplitude is calculated using the ratio between the
horizontal and vertical emittance set in the <span class="ltx_text ltx_font_italic">Initial
Coordinates</span> block ( <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>), where the initial phase in
phase space are also set. Additional information can be found in the
<span class="ltx_text ltx_font_italic">Remarks</span>.</p>
</div>
</dd>
<dt id="Ch3.I77.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">ird</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix5.p1" class="ltx_para">
<p class="ltx_p">(integer) Ignored.</p>
</div>
</dd>
<dt id="Ch3.I77.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">imc</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix6.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of variations of the relative momentum
deviation <math id="Ch3.I77.ix6.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math>. The maximum value of the
relative momentum deviation <math id="Ch3.I77.ix6.p1.m2" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> is taken
from that of the first particle in the <span class="ltx_text ltx_font_italic">Initial Coordinates</span>
block ( <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>). The variation will be between <math id="Ch3.I77.ix6.p1.m3" class="ltx_Math" alttext="\pm\frac{\Delta p}{p_{o}}(\mathrm{max})" display="inline"><mrow><mo>±</mo><mrow><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM192">max</mi><mo stretchy="false">)</mo></mrow></mrow></mrow></math> in steps of <math id="Ch3.I77.ix6.p1.m4" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}(\mathrm{max})" display="inline"><mrow><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mi id="XM193">max</mi><mo stretchy="false">)</mo></mrow></mrow></math> / (<span class="ltx_text ltx_font_italic">imc–1</span>).</p>
</div>
</dd>
<dt id="Ch3.I77.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">niu(1), niu(2)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix7.p1" class="ltx_para">
<p class="ltx_p">Unknown; default values are 0.</p>
</div>
</dd>
<dt id="Ch3.I77.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">numlcp</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix8.p1" class="ltx_para">
<p class="ltx_p">Checkpoint/restart version: How often to write checkpointing files.</p>
</div>
</dd>
<dt id="Ch3.I77.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">numlmax</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix9.p1" class="ltx_para">
<p class="ltx_p">Checkpoint/restart version: Maximum ammount of turns; default is <math id="Ch3.I77.ix9.p1.m1" class="ltx_Math" alttext="10^{6}" display="inline"><msup><mn>10</mn><mn>6</mn></msup></math>.</p>
</div>
</dd>
<dt id="Ch3.I77.ix10" class="ltx_item"><span class="ltx_tag ltx_tag_description">idy(1), idy(2)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix10.p1" class="ltx_para">
<p class="ltx_p">A tracking where one of the transversal motion
planes shall be ignored is only possible when all coupling terms are
switched off. The part of the coupling that is due to closed orbit
and other effects can be turned off with these switches.</p>
<ul id="Ch3.I77.I1" class="ltx_itemize">
<li id="Ch3.I77.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idy(1), idy(2)</span> = 1 : coupling on</p>
</div>
</li>
<li id="Ch3.I77.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idy(1), idy(2)</span> = 0 : coupling to the horizontal and
vertical motion plane respectively switched off</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I77.ix11" class="ltx_item"><span class="ltx_tag ltx_tag_description">idfor</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix11.p1" class="ltx_para">
<p class="ltx_p">Usually the closed orbit is added to the initial
coordinates. This can be turned off using <span class="ltx_text ltx_font_italic">idfor</span>, for
instance when a run is to be prolonged.</p>
<ul id="Ch3.I77.I2" class="ltx_itemize">
<li id="Ch3.I77.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I2.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idfor</span> = 0 : closed orbit added.</p>
</div>
</li>
<li id="Ch3.I77.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I2.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idfor</span> = 1 : initial coordinates unchanged.</p>
</div>
</li>
<li id="Ch3.I77.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I2.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">idfor</span> = 2 : prolongation of a run, taken the initial coordinates from unit # 13.</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I77.ix12" class="ltx_item"><span class="ltx_tag ltx_tag_description">irew</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix12.p1" class="ltx_para">
<p class="ltx_p">To reduce the amount of tracking data after each
amplitude and relative momentum deviation iteration <math id="Ch3.I77.ix12.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> the binary output units 90 and lower (see
Appendix <a href="#A3" title="Appendix C Input and Output Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">C</span></a>) are rewound. This is always done when the
post–processing is activated ( <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>). For certain
applications it may be useful to store all data. The switch <span class="ltx_text ltx_font_italic">irew</span> allows for that.</p>
<ul id="Ch3.I77.I3" class="ltx_itemize">
<li id="Ch3.I77.I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I3.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">irew</span> = 0 : unit 90 (and lower) rewound</p>
</div>
</li>
<li id="Ch3.I77.I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I3.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">irew</span> = 1 : all data on unit 90 (and lower)</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I77.ix13" class="ltx_item"><span class="ltx_tag ltx_tag_description">iclo6</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix13.p1" class="ltx_para">
<p class="ltx_p">This switch allows to calculate the 6D closed orbit and optical functions at the starting point, using the differential algebra package.
It is active in all versions that link to the Differential Algebra package.
Note that iclo6 ¿ 0 is mandatory for 6D simulations, and that iclo6 == 0 is mandatory for 4D simulations.</p>
<ul id="Ch3.I77.I4" class="ltx_itemize">
<li id="Ch3.I77.I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I4.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iclo6</span> = 0 : switched off</p>
</div>
</li>
<li id="Ch3.I77.I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I4.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iclo6</span> = 1 : calculated</p>
</div>
</li>
<li id="Ch3.I77.I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I4.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iclo6</span> = 2 : calculated and added to the initial coordinates ( <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>).</p>
</div>
</li>
<li id="Ch3.I77.I4.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I4.i4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iclo6</span> = 5 or = 6: like for <span class="ltx_text ltx_font_italic">1</span> and <span class="ltx_text ltx_font_italic">2</span>  but in addition a guess closed orbit is read (in free format) from fileunit # 33.</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I77.ix14" class="ltx_item"><span class="ltx_tag ltx_tag_description">nde(1)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix14.p1" class="ltx_para">
<p class="ltx_p">Number of turns at flat bottom, useful for energy ramping.</p>
</div>
</dd>
<dt id="Ch3.I77.ix15" class="ltx_item"><span class="ltx_tag ltx_tag_description">nde(2)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix15.p1" class="ltx_para">
<p class="ltx_p">Number of turns for the energy ramping. <span class="ltx_text ltx_font_italic">numl</span>–<span class="ltx_text ltx_font_italic">nde(2)</span>  gives the number of turns on the flat top.
For constant energy with <math id="Ch3.I77.ix15.p1.m1" class="ltx_Math" alttext="nde(1)=nde(2)=0" display="inline"><mrow><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM194">1</mn><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mi>e</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM195">2</mn><mo stretchy="false">)</mo></mrow></mrow><mo>=</mo><mn>0</mn></mrow></math> the particles are considered to be on the flat top.</p>
</div>
</dd>
<dt id="Ch3.I77.ix16" class="ltx_item"><span class="ltx_tag ltx_tag_description">nwr(1)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix16.p1" class="ltx_para">
<p class="ltx_p">Every <span class="ltx_text ltx_font_italic">nwr(1)</span>’th turn the coordinates will be written on unit 90 (and lower) in the flat bottom part of the tracking.</p>
</div>
</dd>
<dt id="Ch3.I77.ix17" class="ltx_item"><span class="ltx_tag ltx_tag_description">nwr(2)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix17.p1" class="ltx_para">
<p class="ltx_p">Every <span class="ltx_text ltx_font_italic">nwr(2)</span>’th turn the coordinates in the ramping region will be written on unit 90 (and lower).</p>
</div>
</dd>
<dt id="Ch3.I77.ix18" class="ltx_item"><span class="ltx_tag ltx_tag_description">nwr(3)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix18.p1" class="ltx_para">
<p class="ltx_p">Every <span class="ltx_text ltx_font_italic">nwr(3)</span>’th turn at the flat top a write out of the coordinates on unit 90 (and lower) will occur.
For
constant energy this number controls the amount of data on unit 90
(and lower), as the particles are considered on the flat top.</p>
</div>
</dd>
<dt id="Ch3.I77.ix19" class="ltx_item"><span class="ltx_tag ltx_tag_description">nwr(4)</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix19.p1" class="ltx_para">
<p class="ltx_p">In cases of very long runs it is sometimes useful to
save all coordinates for a prolongation of a run after a possible
crash of the computer. Every <span class="ltx_text ltx_font_italic">nwr(4)</span>’th turn the coordinates
are written to unit 6.</p>
</div>
</dd>
<dt id="Ch3.I77.ix20" class="ltx_item"><span class="ltx_tag ltx_tag_description">ntwin</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix20.p1" class="ltx_para">
<p class="ltx_p">For the analysis of the Lyapunov exponent it is usually
sufficient to store the calculated distance of phase space together
with the coordinate of the first particle (<span class="ltx_text ltx_font_italic">ntwin</span> set to
one). You may want to improve the 6D calculation of the distance in
phase space with <span class="ltx_text ltx_font_italic">sigcor, dpscor</span> (see <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>) when the
6D closed orbit is not calculated with <span class="ltx_text ltx_font_italic">iclo6</span> <math id="Ch3.I77.ix20.p1.m1" class="ltx_Math" alttext="\neq 2" display="inline"><mrow><mi></mi><mo>≠</mo><mn>2</mn></mrow></math>. If
storage space is no problem, one can store the coordinates of both
particles (<span class="ltx_text ltx_font_italic">ntwin</span> set to two). The distance in phase space is
then calculated in the post–processing procedure
(see <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>). This also allows a subsequent refined Lyapunov
analysis using differential–algebra and Lie–algebra techniques
(<cite class="ltx_cite">[<a href="#bib.bib28" title="" class="ltx_ref">28</a>]</cite>).</p>
</div>
</dd>
<dt id="Ch3.I77.ix21" class="ltx_item"><span class="ltx_tag ltx_tag_description">ibidu</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix21.p1" class="ltx_para">
<p class="ltx_p">Switch to creat or read binary dump of the full
accelerator decription on file # 32. The parameters relevant to
tracking, i.e. <span class="ltx_text ltx_font_italic">numl, amp0, amp(1), amp(2), damp, chi0, chid,
rat, <math id="Ch3.I77.ix21.p1.m1" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch3.I77.ix21.p1.m2" class="ltx_Math" alttext="x^{\prime}_{1}" display="inline"><msubsup><mi>x</mi><mn mathvariant="normal">1</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch3.I77.ix21.p1.m3" class="ltx_Math" alttext="y_{1}" display="inline"><msub><mi>y</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch3.I77.ix21.p1.m4" class="ltx_Math" alttext="y^{\prime}_{1}" display="inline"><msubsup><mi>y</mi><mn mathvariant="normal">1</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch3.I77.ix21.p1.m5" class="ltx_Math" alttext="{\sigma}_{1}" display="inline"><msub><mi>σ</mi><mn mathvariant="normal">1</mn></msub></math>, <math id="Ch3.I77.ix21.p1.m6" class="ltx_Math" alttext="\frac{\Delta p}{p_{o1}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo mathvariant="italic">⁢</mo><mn mathvariant="normal">1</mn></mrow></msub></mfrac></math>, <math id="Ch3.I77.ix21.p1.m7" class="ltx_Math" alttext="x_{2}" display="inline"><msub><mi>x</mi><mn mathvariant="normal">2</mn></msub></math>, <math id="Ch3.I77.ix21.p1.m8" class="ltx_Math" alttext="x^{\prime}_{2}" display="inline"><msubsup><mi>x</mi><mn mathvariant="normal">2</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch3.I77.ix21.p1.m9" class="ltx_Math" alttext="y_{2}" display="inline"><msub><mi>y</mi><mn mathvariant="normal">2</mn></msub></math>, <math id="Ch3.I77.ix21.p1.m10" class="ltx_Math" alttext="y^{\prime}_{2}" display="inline"><msubsup><mi>y</mi><mn mathvariant="normal">2</mn><mo mathvariant="normal">′</mo></msubsup></math>, <math id="Ch3.I77.ix21.p1.m11" class="ltx_Math" alttext="{\sigma}_{2}" display="inline"><msub><mi>σ</mi><mn mathvariant="normal">2</mn></msub></math>,
<math id="Ch3.I77.ix21.p1.m12" class="ltx_Math" alttext="\frac{\Delta p}{p_{o2}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo mathvariant="italic">⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo mathvariant="italic">⁢</mo><mn mathvariant="normal">2</mn></mrow></msub></mfrac></math>, time0, time1</span>, are to be given via the
tracking parameter file # 3.</p>
<ul id="Ch3.I77.I5" class="ltx_itemize">
<li id="Ch3.I77.I5.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I5.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ibidu</span> = 1 : write dump</p>
</div>
</li>
<li id="Ch3.I77.I5.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I5.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ibidu</span> = 2 : read dump
</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I77.ix22" class="ltx_item"><span class="ltx_tag ltx_tag_description">iexact</span></dt>
<dd class="ltx_item">
<div id="Ch3.I77.ix22.p1" class="ltx_para">
<p class="ltx_p">Switch to enable exact solution of the equation of motion into
tracking and 6D (no 4D) optics calculations.</p>
<ul id="Ch3.I77.I6" class="ltx_itemize">
<li id="Ch3.I77.I6.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I6.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iexact</span> = 0 : approximated equation
(e.g. <math id="Ch3.I77.I6.i1.p1.m1" class="ltx_Math" alttext="x^{\prime}\simeq\frac{P_{x}}{P_{0}(1+\delta)}" display="inline"><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>x</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM196"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow></math>,
<math id="Ch3.I77.I6.i1.p1.m2" class="ltx_Math" alttext="y^{\prime}\simeq\frac{P_{y}}{P_{0}(1+\delta)}" display="inline"><mrow><msup><mi>y</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>y</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM197"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow></mrow></mfrac></mrow></math>);</p>
</div>
</li>
<li id="Ch3.I77.I6.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I77.I6.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iexact</span> = 1 : exact equation (e.g
<math id="Ch3.I77.I6.i2.p1.m1" class="ltx_Math" alttext="x^{\prime}\simeq\frac{P_{x}}{P_{0}\sqrt{(1+\delta)^{2}-P_{x}^{2}-P_{y}^{2}}}" display="inline"><mrow><msup><mi>x</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>x</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM198"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>P</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>P</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></mfrac></mrow></math>,
<math id="Ch3.I77.I6.i2.p1.m2" class="ltx_Math" alttext="y^{\prime}\simeq\frac{P_{y}}{P_{0}\sqrt{(1+\delta)^{2}-P_{x}^{2}-P_{y}^{2}}}" display="inline"><mrow><msup><mi>y</mi><mo>′</mo></msup><mo>≃</mo><mfrac><msub><mi>P</mi><mi>y</mi></msub><mrow><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><msqrt><mrow><msup><mrow><mo stretchy="false">(</mo><mrow id="XM199"><mn>1</mn><mo>+</mo><mi>δ</mi></mrow><mo stretchy="false">)</mo></mrow><mn>2</mn></msup><mo>-</mo><msubsup><mi>P</mi><mi>x</mi><mn>2</mn></msubsup><mo>-</mo><msubsup><mi>P</mi><mi>y</mi><mn>2</mn></msubsup></mrow></msqrt></mrow></mfrac></mrow></math> ).</p>
</div>
</li>
</ul>
</div>
</dd>
</dl>
</div>
</section>
<section id="Ch3.S6.SS1.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S6.SS1.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I78" class="ltx_enumerate">
<li id="Ch3.I78.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I78.i1.p1" class="ltx_para">
<p class="ltx_p">This input data block is usually combined with the <span class="ltx_text ltx_font_italic">Initial
Coordinates</span> input block ( <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>) to allow a flexible
choice of the initial coordinates for the tracking.</p>
</div>
</li>
<li id="Ch3.I78.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I78.i2.p1" class="ltx_para">
<p class="ltx_p">For a prolongation of a run the following parameters have to be
set :</p>
<ul id="Ch3.I78.I1" class="ltx_itemize">
<li id="Ch3.I78.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I78.I1.i1.p1" class="ltx_para">
<p class="ltx_p">in this input block : idfor = 1</p>
</div>
</li>
<li id="Ch3.I78.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I78.I1.i2.p1" class="ltx_para">
<p class="ltx_p">in the <span class="ltx_text ltx_font_italic">Initial coordinates</span> input block :</p>
<ol id="Ch3.I78.I1.I1" class="ltx_enumerate">
<li id="Ch3.I78.I1.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">i.</span>
<div id="Ch3.I78.I1.I1.i1.p1" class="ltx_para">
<p class="ltx_p">itra = 0
</p>
</div>
</li>
<li id="Ch3.I78.I1.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">ii.</span>
<div id="Ch3.I78.I1.I1.i2.p1" class="ltx_para">
<p class="ltx_p">take the end coordinates of the previous run as the initial
coordinates (including all digits) for the new run.</p>
</div>
</li>
</ol>
</div>
</li>
</ul>
</div>
</li>
<li id="Ch3.I78.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I78.i3.p1" class="ltx_para">
<p class="ltx_p">A feature is installed for a prolongation of a run by using
<span class="ltx_text ltx_font_italic">idfor = 2</span> and
reading the initial data from unit # 13. The end coordinates are
now written on unit # 12 after each run. Intermediate coordinates
are also written on unit # 12 in case the turn number <span class="ltx_text ltx_font_italic">nwr(4)</span> is exceeded in the run. The user takes responsibility to
transfer the required data from unit # 12 to unit # 13 if a
prolongation is requested.</p>
</div>
</li>
<li id="Ch3.I78.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I78.i4.p1" class="ltx_para">
<p class="ltx_p">Some illogical combinations of parameters have been suppressed.</p>
</div>
</li>
<li id="Ch3.I78.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="Ch3.I78.i5.p1" class="ltx_para">
<p class="ltx_p">The initial coordinates are calculated using a proper linear 6D
transformation: <span class="ltx_text ltx_font_italic">amp(1)</span> is still the maximum horizontal
starting amplitude (excluding the dispersion contribution) from
which the emittance of mode 1 <math id="Ch3.I78.i5.p1.m1" class="ltx_Math" alttext="e_{I}" display="inline"><msub><mi>e</mi><mi>I</mi></msub></math> is derived, <span class="ltx_text ltx_font_italic">rat</span>
(see <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>) is the ratio of <math id="Ch3.I78.i5.p1.m2" class="ltx_Math" alttext="e_{II}/e_{I}" display="inline"><mrow><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>/</mo><msub><mi>e</mi><mi>I</mi></msub></mrow></math> of the emittances
of the two modes. The momentum deviation <math id="Ch3.I78.i5.p1.m3" class="ltx_Math" alttext="\frac{\Delta p}{p_{o1}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo>⁢</mo><mn>1</mn></mrow></msub></mfrac></math> is used to
define a longitudinal amplitude. The 6 normalized coordinates read:</p>
<ul id="Ch3.I78.I2" class="ltx_itemize">
<li id="Ch3.I78.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I78.I2.i1.p1" class="ltx_para">
<p class="ltx_p">horizontal:
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i1.p2" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i1.p2.m1" class="ltx_Math" alttext="\sqrt{e_{I}}=\frac{amp(1)}{\sqrt{\beta_{xI}}+\sqrt{\left|rat\right|\times\beta%
_{xII}}}" display="inline"><mrow><msqrt><msub><mi>e</mi><mi>I</mi></msub></msqrt><mo>=</mo><mfrac><mrow><mi>a</mi><mo>⁢</mo><mi>m</mi><mo>⁢</mo><mi>p</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mn id="XM200">1</mn><mo stretchy="false">)</mo></mrow></mrow><mrow><msqrt><msub><mi>β</mi><mrow><mi>x</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt><mo>+</mo><msqrt><mrow><mrow><mo>|</mo><mrow id="XM201"><mi>r</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>t</mi></mrow><mo>|</mo></mrow><mo>×</mo><msub><mi>β</mi><mrow><mi>x</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></mrow></msqrt></mrow></mfrac></mrow></math>,
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i1.p3" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i1.p3.m1" class="ltx_Math" alttext="0." display="inline"><mn>0.</mn></math></p>
</div>
</li>
<li id="Ch3.I78.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I78.I2.i2.p1" class="ltx_para">
<p class="ltx_p">vertical:
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i2.p2" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i2.p2.m1" class="ltx_Math" alttext="sign(rat)\times\sqrt{e_{II}}" display="inline"><mrow><mrow><mi>s</mi><mo>⁢</mo><mi>i</mi><mo>⁢</mo><mi>g</mi><mo>⁢</mo><mi>n</mi><mo>⁢</mo><mrow><mo stretchy="false">(</mo><mrow id="XM202"><mi>r</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>t</mi></mrow><mo stretchy="false">)</mo></mrow></mrow><mo>×</mo><msqrt><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt></mrow></math>, with <math id="Ch3.I78.I2.i2.p2.m2" class="ltx_Math" alttext="e_{II}=\left|rat\right|\times e_{I}" display="inline"><mrow><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>=</mo><mrow><mrow><mo>|</mo><mrow id="XM203"><mi>r</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>t</mi></mrow><mo>|</mo></mrow><mo>×</mo><msub><mi>e</mi><mi>I</mi></msub></mrow></mrow></math>,
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i2.p3" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i2.p3.m1" class="ltx_Math" alttext="0." display="inline"><mn>0.</mn></math></p>
</div>
</li>
<li id="Ch3.I78.I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I78.I2.i3.p1" class="ltx_para">
<p class="ltx_p">longitudinal:
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i3.p2" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i3.p2.m1" class="ltx_Math" alttext="0." display="inline"><mn>0.</mn></math>,
<br class="ltx_break"></p>
</div>
<div id="Ch3.I78.I2.i3.p3" class="ltx_para">
<p class="ltx_p"><math id="Ch3.I78.I2.i3.p3.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o1}}\times\sqrt{\beta_{sIII}}" display="inline"><mrow><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo>⁢</mo><mn>1</mn></mrow></msub></mfrac><mo>×</mo><msqrt><msub><mi>β</mi><mrow><mi>s</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub></msqrt></mrow></math></p>
</div>
</li>
</ul>
<p class="ltx_p">and are then transformed with the 6D linear transformation into real
space. Note that results may differ from those of older versions.</p>
</div>
</li>
<li id="Ch3.I78.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="Ch3.I78.i6.p1" class="ltx_para">
<p class="ltx_p">The amplitude scan is performed from <em class="ltx_emph">amp(1)</em> to <em class="ltx_emph">amp0</em> in steps of <math id="Ch3.I78.i6.p1.m1" class="ltx_Math" alttext="\emph{delta}=(\emph{amp0}-\emph{amp(1)})/(napx-1)" display="inline"><mrow><mtext><em class="ltx_emph">delta</em></mtext><mo>=</mo><mrow><mrow><mo stretchy="false">(</mo><mrow id="XM204"><mtext><em class="ltx_emph">amp0</em></mtext><mo>-</mo><mtext><em class="ltx_emph">amp(1)</em></mtext></mrow><mo stretchy="false">)</mo></mrow><mo>/</mo><mrow><mo stretchy="false">(</mo><mrow id="XM205"><mrow><mi>n</mi><mo>⁢</mo><mi>a</mi><mo>⁢</mo><mi>p</mi><mo>⁢</mo><mi>x</mi></mrow><mo>-</mo><mn>1</mn></mrow><mo stretchy="false">)</mo></mrow></mrow></mrow></math>.
For the intermediate amplitudes, <em class="ltx_emph">delta</em> is added up for each step, however the last amplitude is guaranteed to be fixed to the given value.
This enables “control calculations” by setting the first amplitude of one simulation equal to the last amplitude of another simulation, and unless there are calculation errors, they shall produce exactly the same results.</p>
</div>
</li>
<li id="Ch3.I78.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7.</span>
<div id="Ch3.I78.i7.p1" class="ltx_para">
<p class="ltx_p">Note that if <em class="ltx_emph">iclo6</em> = 2 and <em class="ltx_emph">idfor</em> = 0 in the input file, then <em class="ltx_emph">idfor</em> is internally set to 1, as is seen in some outputs.
This does not mean that the closed orbit is not added; the setting of <em class="ltx_emph">iclo6</em> = 2 simply takes precedence.</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S6.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.6.2 </span>Initial Coordinates</h4>
<section id="Ch3.S6.SS2.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">The <span class="ltx_text ltx_font_italic">Initial Coordinates</span> input block
is meant to manipulate how the initial coordinates are organise, which
are generally set in the tracking parameter block ( <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>).
Number of particles, initial phase, ratio of the horizontal and
vertical emittances and increments of 2 <math id="Ch3.S6.SS2.SSS15.Px4.SPx1.p1.m1" class="ltx_Math" alttext="\times" display="inline"><mo>×</mo></math> 6 coordinates
of the two particles, the reference energy and the starting energy for
the two particles.</p>
</div>
</section>
<section id="Ch3.S6.SS2.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">INIT</p>
</div>
</section>
<section id="Ch3.S6.SS2.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">16</p>
</div>
</section>
<section id="Ch3.S6.SS2.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I79" class="ltx_itemize">
<li id="Ch3.I79.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I79.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">itra chi0 chid rat iver</span></p>
</div>
</li>
<li id="Ch3.I79.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I79.i2.p1" class="ltx_para">
<p class="ltx_p">data lines 2 to 16: <span class="ltx_text ltx_font_italic">15 initial coordinates as listed in Table</span> <a href="#Ch3.T9" title="Table 3.9 ‣ Format ‣ 3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.9</span></a></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I80" class="ltx_description">
<dt id="Ch3.I80.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">itra</span></dt>
<dd class="ltx_item">
<div id="Ch3.I80.ix1.p1" class="ltx_para">
<p class="ltx_p">(integer) Number of particles</p>
<ul id="Ch3.I80.I1" class="ltx_itemize">
<li id="Ch3.I80.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I80.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">itra</span> = 0 : Amplitude values of tracking parameter block
( <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>) are ignored and coordinates of data line 2–16 are
taken. <span class="ltx_text ltx_font_italic">itra</span> is set internally to 2 for tracking with two
particles. This is necessary in case a run is to be prolonged.</p>
</div>
</li>
<li id="Ch3.I80.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I80.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">itra</span> = 1 : Tracking of one particle, twin particle
ignored</p>
</div>
</li>
<li id="Ch3.I80.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I80.I1.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">itra</span> = 2 : Tracking the two twin particles</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I80.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">chi0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I80.ix2.p1" class="ltx_para">
<p class="ltx_p">Starting phase of the initial coordinate in the
horizontal and vertical phase space projections</p>
</div>
</dd>
<dt id="Ch3.I80.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">chid</span></dt>
<dd class="ltx_item">
<div id="Ch3.I80.ix3.p1" class="ltx_para">
<p class="ltx_p">Phase difference between first and second particles</p>
</div>
</dd>
<dt id="Ch3.I80.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">rat</span></dt>
<dd class="ltx_item">
<div id="Ch3.I80.ix4.p1" class="ltx_para">
<p class="ltx_p">Denotes the emittance ratio (<math id="Ch3.I80.ix4.p1.m1" class="ltx_Math" alttext="e_{II}/e_{I}" display="inline"><mrow><msub><mi>e</mi><mrow><mi>I</mi><mo>⁢</mo><mi>I</mi></mrow></msub><mo>/</mo><msub><mi>e</mi><mi>I</mi></msub></mrow></math>) of horizontal
and vertical motion. For further information see the <em class="ltx_emph">Remarks</em> of the TRAC input block in Section <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>.</p>
</div>
</dd>
<dt id="Ch3.I80.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">iver</span></dt>
<dd class="ltx_item">
<div id="Ch3.I80.ix5.p1" class="ltx_para">
<p class="ltx_p">In tracking with coupling it is sometimes desired to
start with zero vertical amplitude which can be painful if the
emittance ratio <span class="ltx_text ltx_font_italic">rat</span> is used to achieve it. For this purpose
the switch <span class="ltx_text ltx_font_italic">iver</span> has been introduced:</p>
<ul id="Ch3.I80.I2" class="ltx_itemize">
<li id="Ch3.I80.I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I80.I2.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iver</span> = 0 : Vertical coordinates unchanged</p>
</div>
</li>
<li id="Ch3.I80.I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I80.I2.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">iver</span> = 1 : Vertical coordinates set to zero.</p>
</div>
</li>
</ul>
</div>
</dd>
</dl>
</div>
<figure id="Ch3.T9" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.9: </span>Initial Coordinates of the 2 Particles</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">data line</th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">contents</th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">2</th>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
<math id="Ch3.T9.m1" class="ltx_Math" alttext="x_{1}" display="inline"><msub><mi>x</mi><mn>1</mn></msub></math> [mm] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">3</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m2" class="ltx_Math" alttext="x^{\prime}_{1}" display="inline"><msubsup><mi>x</mi><mn>1</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">4</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m3" class="ltx_Math" alttext="y_{1}" display="inline"><msub><mi>y</mi><mn>1</mn></msub></math> [mm] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">5</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m4" class="ltx_Math" alttext="y^{\prime}_{1}" display="inline"><msubsup><mi>y</mi><mn>1</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">6</th>
<td class="ltx_td ltx_align_left ltx_border_r">path length difference 1 (<math id="Ch3.T9.m5" class="ltx_Math" alttext="{\sigma}_{1}=s-v_{o}\times t" display="inline"><mrow><msub><mi>σ</mi><mn>1</mn></msub><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) [mm]
of
particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">7</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m6" class="ltx_Math" alttext="\frac{\Delta p}{p_{o1}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo>⁢</mo><mn>1</mn></mrow></msub></mfrac></math> of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">8</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m7" class="ltx_Math" alttext="x_{2}" display="inline"><msub><mi>x</mi><mn>2</mn></msub></math> [mm] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">9</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m8" class="ltx_Math" alttext="x^{\prime}_{2}" display="inline"><msubsup><mi>x</mi><mn>2</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">10</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m9" class="ltx_Math" alttext="y_{2}" display="inline"><msub><mi>y</mi><mn>2</mn></msub></math> [mm] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">11</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m10" class="ltx_Math" alttext="y^{\prime}_{2}" display="inline"><msubsup><mi>y</mi><mn>2</mn><mo>′</mo></msubsup></math> [mrad] coordinate of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">12</th>
<td class="ltx_td ltx_align_left ltx_border_r">path length difference (<math id="Ch3.T9.m11" class="ltx_Math" alttext="{\sigma}_{2}=s-v_{o}\times t" display="inline"><mrow><msub><mi>σ</mi><mn>2</mn></msub><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) [mm]
of
particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">13</th>
<td class="ltx_td ltx_align_left ltx_border_r">
<math id="Ch3.T9.m12" class="ltx_Math" alttext="\frac{\Delta p}{p_{o2}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mrow><mi>o</mi><mo>⁢</mo><mn>2</mn></mrow></msub></mfrac></math> of particle 2</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">14</th>
<td class="ltx_td ltx_align_left ltx_border_r">energy [MeV] of the reference particle</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r">15</th>
<td class="ltx_td ltx_align_left ltx_border_r">energy [MeV] of particle 1</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r">16</th>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r">energy [MeV] of particle 2</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S6.SS2.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Remarks</h6>
<div id="Ch3.S6.SS2.SSS15.Px4.SPx5.p1" class="ltx_para">
<ol id="Ch3.I81" class="ltx_enumerate">
<li id="Ch3.I81.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="Ch3.I81.i1.p1" class="ltx_para">
<p class="ltx_p">These 15 coordinates are taken as the initial coordinates if
<span class="ltx_text ltx_font_italic">itra</span> is set to zero (see above). If <span class="ltx_text ltx_font_italic">itra</span> is 1 or 2
these coordinates are added to the initial coordinates generally
defined in the tracking parameter block ( <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>). This
procedure seems complicated but it allows freely to define the
initial difference between the two twin particles. It also allows in
case a tracking run should be prolonged to continue with precisely
the same coordinates. This is important as small difference may lead
to largely different results.</p>
</div>
</li>
<li id="Ch3.I81.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="Ch3.I81.i2.p1" class="ltx_para">
<p class="ltx_p">The reference particle is the particle in the centre of the
bucket which performs no synchrotron oscillations.</p>
</div>
</li>
<li id="Ch3.I81.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="Ch3.I81.i3.p1" class="ltx_para">
<p class="ltx_p">The energy of the first and second particles is given
explicitly, again to make possible a continuation that leads
precisely to the same results as if the run would not have been
interrupted.</p>
</div>
</li>
<li id="Ch3.I81.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="Ch3.I81.i4.p1" class="ltx_para">
<p class="ltx_p">There is a refined way of prolonging a run, see the <span class="ltx_text ltx_font_italic">Tracking Parameters</span> input block ( <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>).</p>
</div>
</li>
</ol>
</div>
</section>
</section>
<section id="Ch3.S6.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.6.3 </span>Synchrotron Oscillation</h4>
<section id="Ch3.S6.SS3.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Description</h6>
<div id="Ch3.S6.SS3.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">The parameters needed for treating the
synchrotron oscillation in a symplectic manner are given in the <span class="ltx_text ltx_font_italic">Synchrotron Oscillation</span> input block.</p>
</div>
</section>
<section id="Ch3.S6.SS3.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Keyword</h6>
<div id="Ch3.S6.SS3.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">SYNC</p>
</div>
</section>
<section id="Ch3.S6.SS3.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Number of data lines</h6>
<div id="Ch3.S6.SS3.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">2</p>
</div>
</section>
<section id="Ch3.S6.SS3.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">Format</h6>
<div id="Ch3.S6.SS3.SSS15.Px4.SPx4.p1" class="ltx_para">
<ul id="Ch3.I82" class="ltx_itemize">
<li id="Ch3.I82.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I82.i1.p1" class="ltx_para">
<p class="ltx_p">first data line: <span class="ltx_text ltx_font_italic">harm alc u0 phag tlen pma ition dppoff</span></p>
</div>
</li>
<li id="Ch3.I82.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I82.i2.p1" class="ltx_para">
<p class="ltx_p">second data line: <span class="ltx_text ltx_font_italic">dpscor sigcor</span></p>
</div>
</li>
</ul>
</div>
<div id="Ch3.S6.SS3.SSS15.Px4.SPx4.p2" class="ltx_para">
<dl id="Ch3.I83" class="ltx_description">
<dt id="Ch3.I83.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">harm</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix1.p1" class="ltx_para">
<p class="ltx_p">Harmonic number</p>
</div>
</dd>
<dt id="Ch3.I83.ix2" class="ltx_item"><span class="ltx_tag ltx_tag_description">alc</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix2.p1" class="ltx_para">
<p class="ltx_p">Momentum compaction factor, used here only to calculate
the linear synchrotron tune <math id="Ch3.I83.ix2.p1.m1" class="ltx_Math" alttext="Q_{S}" display="inline"><msub><mi>Q</mi><mi>S</mi></msub></math>.</p>
</div>
</dd>
<dt id="Ch3.I83.ix3" class="ltx_item"><span class="ltx_tag ltx_tag_description">u0</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix3.p1" class="ltx_para">
<p class="ltx_p">Circumference voltage in [MV]</p>
</div>
</dd>
<dt id="Ch3.I83.ix4" class="ltx_item"><span class="ltx_tag ltx_tag_description">phag</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix4.p1" class="ltx_para">
<p class="ltx_p">Acceleration phase in degrees</p>
</div>
</dd>
<dt id="Ch3.I83.ix5" class="ltx_item"><span class="ltx_tag ltx_tag_description">tlen</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix5.p1" class="ltx_para">
<p class="ltx_p">Length of the accelerator in meters</p>
</div>
</dd>
<dt id="Ch3.I83.ix6" class="ltx_item"><span class="ltx_tag ltx_tag_description">pma</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix6.p1" class="ltx_para">
<p class="ltx_p">rest mass of the particle in <math id="Ch3.I83.ix6.p1.m1" class="ltx_Math" alttext="\mathrm{MeV}/\mathrm{c}^{2}" display="inline"><mrow><mi>MeV</mi><mo>/</mo><msup><mi mathvariant="normal">c</mi><mn>2</mn></msup></mrow></math></p>
</div>
</dd>
<dt id="Ch3.I83.ix7" class="ltx_item"><span class="ltx_tag ltx_tag_description">ition</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix7.p1" class="ltx_para">
<p class="ltx_p">(integer) Transition energy switch</p>
<ul id="Ch3.I83.I1" class="ltx_itemize">
<li id="Ch3.I83.I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I83.I1.i1.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ition</span> =  0 for no synchrotron oscillation
(energy ramping still possible)</p>
</div>
</li>
<li id="Ch3.I83.I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I83.I1.i2.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ition</span> =  1 for above transition energy</p>
</div>
</li>
<li id="Ch3.I83.I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">
                        <span class="ltx_text ltx_font_bold">–</span>
                      </span>
<div id="Ch3.I83.I1.i3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_italic">ition</span> = –1 for below transition energy</p>
</div>
</li>
</ul>
</div>
</dd>
<dt id="Ch3.I83.ix8" class="ltx_item"><span class="ltx_tag ltx_tag_description">dppoff</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix8.p1" class="ltx_para">
<p class="ltx_p">Offset Relative Momentum Deviation <math id="Ch3.I83.ix8.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math>: a fixpoint with respect to synchrotron oscillations.
It becomes active when the 6D closed orbit is calculated (see item
<span class="ltx_text ltx_font_italic">iclo6</span> in section <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>).</p>
</div>
</dd>
<dt id="Ch3.I83.ix9" class="ltx_item"><span class="ltx_tag ltx_tag_description">dpscor, sigcor</span></dt>
<dd class="ltx_item">
<div id="Ch3.I83.ix9.p1" class="ltx_para">
<p class="ltx_p">Scaling factor for relative momentum deviation
<math id="Ch3.I83.ix9.p1.m1" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math> and the path length difference
(<math id="Ch3.I83.ix9.p1.m2" class="ltx_Math" alttext="\sigma=s-v_{o}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) respectively. They can be used to
improve the calculation of the 6D distance in phase space, but is
only used when <span class="ltx_text ltx_font_italic">ntwin = 1</span> in the tracking parameter input
block (<a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>). Please set to 1 when the 6D closed is
calculated.</p>
</div>
</dd>
</dl>
<p class="ltx_p">Note that the value of <em class="ltx_emph">tlen</em> is also calculated internally by SixTrack (in “dcum”), and a warning is issued if the given value is different from the calculated value.</p>
</div>
</section>
</section>
</section>
<section id="Ch3.S7" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3.7 </span>Extra output files</h3>
<div id="Ch3.S7.p1" class="ltx_para">
<p class="ltx_p">For some studies, extra output from the simulation is desired.
How to do this is described below.</p>
</div>
<section id="Ch3.S7.SS1" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.7.1 </span>Dumping of beam population</h4>
<section id="Ch3.S7.SS1.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S7.SS1.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The DUMP block allows the beam population (i.e. the position in phase-space for all the particles) to be written to file.
This can be done in any SINGLE ELEMENTS which are directly mentioned in the STRUCTURE INPUT part of fort.2 (BLOCs cannot be used).
The particles are dumped just after the kick is applied, and how often to dump (every turn, every second turn, etc.) is user-selectable.
Please note that each single element can only be selected once; however it is possible to overcome this limitation by placing multiple markers with different names in the same position in the sequence (by editing fort.2).</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S7.SS1.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">DUMP</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S7.SS1.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable, one for each element for which dump is active</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">element_name frequency unit format (filename) (first last)
<br class="ltx_break"></span>or <span class="ltx_text ltx_font_typewriter">HIGH
<br class="ltx_break"></span>or <span class="ltx_text ltx_font_typewriter">FRONT</span></p>
</div>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">element_name</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">one of the SINGLE ELEMENTS, or ALL to dump at the exit of all single elements, or StartDUMP to dump at the injection point.
Note that if ALL or StartDUMP is in use, these cannot be used as SINGLE ELEMENT names.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">frequency</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">how often the beam population should be dumped in number of turns.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">unit</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">fortran unit number to use, should not be used in other parts of SixTrack.
The unit number and filename may be shared between different DUMP outputs, as long as they have the same format and <span class="ltx_text ltx_font_typewriter">element_name</span> is not <span class="ltx_text ltx_font_typewriter">ALL</span>.
</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">format</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p">an integer specifying the output format.
The following formats are accepted:</p>
<ol id="Ch3.I84" class="ltx_enumerate">
<li id="Ch3.I84.ix1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">0</span>
<div id="Ch3.I84.ix1.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">General format:
<br class="ltx_break"></span>No header
<br class="ltx_break">Lines: <span class="ltx_text ltx_font_typewriter">turn structure_element_idx single_element_idx single_element_name s x1[m] x1'[rad] y1[m] y2'[rad] momentum[GeV/c] dE/E[GeV]</span></p>
</div>
</li>
<li id="Ch3.I84.ix2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1</span>
<div id="Ch3.I84.ix2.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Format for aperture check:
<br class="ltx_break"></span>Header: <span class="ltx_text ltx_font_typewriter"># ID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] dE/E ktrack
<br class="ltx_break"></span>Lines: <span class="ltx_text ltx_font_typewriter">particleID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] dE/E ktrack</span></p>
</div>
</li>
<li id="Ch3.I84.ix3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2</span>
<div id="Ch3.I84.ix3.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Modified format for aperture check:
<br class="ltx_break"></span>Header line 1 (single element): <span class="ltx_text ltx_font_typewriter"># DUMP format #2, bez=<span class="ltx_text ltx_font_italic">bez(i)</span>, number of particles=<span class="ltx_text ltx_font_italic">napx</span>, dump period=<span class="ltx_text ltx_font_italic">ndumpt(i)</span>, first turn=<span class="ltx_text ltx_font_italic">dumpfirst(i)</span>, last turn=<span class="ltx_text ltx_font_italic">dumplast(i)</span>, HIGH=<span class="ltx_text ltx_font_italic">T/F</span>, FRONT=<span class="ltx_text ltx_font_italic">T/F
<br class="ltx_break"></span></span>Header line 1 (all elements): <span class="ltx_text ltx_font_typewriter"># DUMP format #2, ALL ELEMENTS, number of particles=<span class="ltx_text ltx_font_italic">napx</span>, dump period=<span class="ltx_text ltx_font_italic">ndumpt(i)</span>, first turn=<span class="ltx_text ltx_font_italic">dumpfirst(i)</span>, last turn=<span class="ltx_text ltx_font_italic">dumplast(i)</span>, HIGH=<span class="ltx_text ltx_font_italic">T/F</span>, FRONT=<span class="ltx_text ltx_font_italic">T/F
<br class="ltx_break"></span></span>Here <span class="ltx_text ltx_font_italic">bez</span> is the name of the SINGLE ELEMENT, and <span class="ltx_text ltx_font_italic">napx</span> the number of particles being tracked (per pack in case of collimation), <span class="ltx_text ltx_font_italic">ndumpt(i)</span> the dump frequency as described above, and <span class="ltx_text ltx_font_italic">dumpfirst(i)</span> and <span class="ltx_text ltx_font_italic">dumplast(i)</span> the first and last turn as descirbed below.
HIGH and FRONT is normally false, unless this (global) option is active, as described below.
<br class="ltx_break">Header line 2: <span class="ltx_text ltx_font_typewriter"># ID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] z[mm] dE/E ktrack
<br class="ltx_break"></span>If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">Data lines: as described in the header, one per particle and per turn.</p>
</div>
</li>
<li id="Ch3.I84.ix4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3</span>
<div id="Ch3.I84.ix4.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Modified format for aperture check (Binary):
<br class="ltx_break"></span>No header
<br class="ltx_break">A number of Fortran records describing which elements are used and the current dump period is added one per relevant line in DUMP block.
<br class="ltx_break">Records: <span class="ltx_text ltx_font_typewriter">particleID turn s[m] x[mm] xp[mrad] y[mm] yp[mrad] z[mm] dE/E ktrack
<br class="ltx_break"></span>The Fortran code <span class="ltx_text ltx_font_typewriter">SixTest/readDump3/readDump3.f90</span> can be used to convert these files into the format 2 (sans headers).</p>
</div>
</li>
<li id="Ch3.I84.ix5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4</span>
<div id="Ch3.I84.ix5.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Beam means:
<br class="ltx_break"></span>Header line 1 is the same as for format 2.
<br class="ltx_break">Header line 2: <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[mm] &lt;xp&gt;[mrad] &lt;y&gt;[mm] &lt;yp&gt;[mrad] &lt;z&gt;[mm] &lt;dE/E&gt;[1]
<br class="ltx_break"></span>If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">Data lines: As described in the header; one per turn (and for collimation, one per pack of particles).</p>
</div>
</li>
<li id="Ch3.I84.ix6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5</span>
<div id="Ch3.I84.ix6.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Beam mean and sigma:
<br class="ltx_break"></span>Header line 1 is the same as for format 2.
<br class="ltx_break">Header: <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[mm] &lt;xp&gt;[mrad] &lt;y&gt;[mm] &lt;yp&gt;[mrad] &lt;z&gt;[mm] &lt;dE/E&gt;[1] &lt;x^2&gt; &lt;x*xp&gt; &lt;x*y&gt; &lt;x*yp&gt; &lt;x*z&gt; &lt;x*(dE/E)&gt; &lt;xp^2&gt; &lt;xp*y&gt; &lt;xp*yp&gt; &lt;xp*z&gt; &lt;xp*(dE/E)&gt; &lt;y^2&gt; &lt;y*yp&gt; &lt;y*z&gt; &lt;y*(dE/E)&gt; &lt;yp^2&gt; &lt;yp*z&gt; &lt;yp*(dE/E)&gt; &lt;z^2&gt; &lt;z*(dE/E)&gt; &lt;(dE/E)^2&gt;
<br class="ltx_break"></span>If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">A number of lines describing which elements are used and the current dump period is added one per relevant line in DUMP block.
<br class="ltx_break">Data lines: As described in the header; one per turn (and for collimation, one per pack of particles).
For the “product” quantities, the units are the product of the units of the “normal” ones.</p>
</div>
</li>
<li id="Ch3.I84.ix7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6</span>
<div id="Ch3.I84.ix7.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Beam mean and sigma (canonical):
<br class="ltx_break"></span>Header line 1 is the same as for format 2.
<br class="ltx_break">Header: <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;x&gt;[m] &lt;px&gt;[1] &lt;y&gt;[m] &lt;py&gt;[m] &lt;sigma&gt;[m] &lt;psigma&gt;[1] &lt;x^2&gt; &lt;x*px&gt; &lt;x*y&gt; &lt;x*py&gt; &lt;x*sigma&gt; &lt;x*psigma&gt; &lt;px^2&gt; &lt;px*y&gt; &lt;px*py&gt; &lt;px*sigma&gt; &lt;px*psigma&gt; &lt;y^2&gt; &lt;y*py&gt; &lt;y*sigma&gt; &lt;y*psigma&gt; &lt;py^2&gt; &lt;py*sigma&gt; &lt;py*psigma&gt; &lt;sigma^2&gt; &lt;sigma*psigma&gt; &lt;psigma^2&gt;
<br class="ltx_break"></span>If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">A number of lines describing which elements are used and the current dump period is added one per relevant line in DUMP block.
<br class="ltx_break">Data lines: As described in the header; one per turn (and for collimation, one per pack of particles).
For the “product” quantities, the units are the product of the units of the “normal” ones.
Note that the <math id="Ch3.I84.ix7.p1.m1" class="ltx_Math" alttext="\sigma=s-\beta_{0}ct" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi><mo>⁢</mo><mi>t</mi></mrow></mrow></mrow></math> is the same as the <math id="Ch3.I84.ix7.p1.m2" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> used in the formats above, except for the unit of m instead of mm; and that <math id="Ch3.I84.ix7.p1.m3" class="ltx_Math" alttext="p_{\sigma}=\Delta E/\left(\beta_{0}P_{0}c\right)" display="inline"><mrow><msub><mi>p</mi><mi>σ</mi></msub><mo>=</mo><mrow><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mrow><mo>(</mo><mrow id="XM206"><msub><mi>β</mi><mn>0</mn></msub><mo>⁢</mo><msub><mi>P</mi><mn>0</mn></msub><mo>⁢</mo><mi>c</mi></mrow><mo>)</mo></mrow></mrow></mrow></math>.
For more details, see the physics manual <cite class="ltx_cite">[<a href="#bib.bib16" title="" class="ltx_ref">16</a>]</cite>.</p>
</div>
</li>
<li id="Ch3.I84.ix8" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7</span>
<div id="Ch3.I84.ix8.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Modified format for aperture check (normalized coordinates):
<br class="ltx_break"></span>Dumps the particle trajectories in normalized coordinates. If the coordinates are dumped at the start of the sequence (<span class="ltx_text ltx_font_typewriter">StartDUMP</span>), the normalization matrix as used for the initialization of the particle amplitudes is used. This means, that if 4D optics are chosen, the 4D matrix is used, if 6D optics is chosen, the matrix obtained from the 6D optics calculation is chosen. For every other element except <span class="ltx_text ltx_font_typewriter">StartDUMP</span>, the 6D optics are used independent of the tracking method chosen. In this case the 6D optics needs to be run and the following lines have to be inserted in <span class="ltx_text ltx_font_typewriter">fort.3</span>:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
     DUMP
     element_name_1 1 unit_1 7 filename_1 first_turn_1 last_turn_1
     ...
     NEXT
     LINE
     ELEMENT  0 2 1 emit_1 emit_2
     NEXT
</pre>
<p class="ltx_p">If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">Data lines: as described in the header, one per particle and per turn.
<br class="ltx_break">Header line 1: The same as for format 2.
<br class="ltx_break">Header line 2: closed orbit <math id="Ch3.I84.ix8.p1.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.I84.ix8.p1.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch3.I84.ix8.p1.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.I84.ix8.p1.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch3.I84.ix8.p1.m5" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.I84.ix8.p1.m6" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch3.I84.ix8.p1.m7" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM207">mm</mi><mo>,</mo><mi id="XM208">mrad</mi><mo>,</mo><mi id="XM209">mm</mi><mo>,</mo><mi id="XM210">mrad</mi><mo>,</mo><mn id="XM211">1</mn><mo stretchy="false">]</mo></mrow></math>.
<br class="ltx_break">Header line 3: matrix of eigenvectors (<span class="ltx_text ltx_font_typewriter">tamatrix</span>). Eigenvectors are normalized, rotated and ordered as in the Ripken formalism and described in the SixTrack physics manual, Chapter “Optics Calculation”. The matrix <span class="ltx_text ltx_font_typewriter">tamatrix</span> is in canonical variables <math id="Ch3.I84.ix8.p1.m8" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.I84.ix8.p1.m9" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch3.I84.ix8.p1.m10" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.I84.ix8.p1.m11" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch3.I84.ix8.p1.m12" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.I84.ix8.p1.m13" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch3.I84.ix8.p1.m14" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM212">mm</mi><mo>,</mo><mi id="XM213">mrad</mi><mo>,</mo><mi id="XM214">mm</mi><mo>,</mo><mi id="XM215">mrad</mi><mo>,</mo><mn id="XM216">1</mn><mo stretchy="false">]</mo></mrow></math>.
<br class="ltx_break">Header line 4: inverse of ta-matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> used for normalization where</p>
<table id="Ch3.E7" class="ltx_equation">
<tr class="ltx_equation ltx_align_baseline">
<td class="ltx_eqn_center_padleft"></td>
<td class="ltx_align_center"><math id="Ch3.E7.m1" class="ltx_Math" alttext="z_{\rm norm}=\texttt{inv(tamatrix)}\cdot z" display="block"><mrow><msub><mi>z</mi><mi>norm</mi></msub><mo>=</mo><mrow><mtext mathvariant="monospace">inv(tamatrix)</mtext><mo>⋅</mo><mi>z</mi></mrow></mrow></math></td>
<td class="ltx_eqn_center_padright"></td>
<td rowspan="1" class="ltx_eqn_eqno ltx_align_middle ltx_align_right"><span class="ltx_tag ltx_tag_equation">(3.7)</span></td>
</tr>
</table>
<p class="ltx_p">Matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> and <math id="Ch3.I84.ix8.p1.m15" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math> is given in canonical variables <math id="Ch3.I84.ix8.p1.m16" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.I84.ix8.p1.m17" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch3.I84.ix8.p1.m18" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.I84.ix8.p1.m19" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch3.I84.ix8.p1.m20" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.I84.ix8.p1.m21" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch3.I84.ix8.p1.m22" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM217">mm</mi><mo>,</mo><mi id="XM218">mrad</mi><mo>,</mo><mi id="XM219">mm</mi><mo>,</mo><mi id="XM220">mrad</mi><mo>,</mo><mn id="XM221">1</mn><mo stretchy="false">]</mo></mrow></math>.
<br class="ltx_break">Header line 5: header with units of normalized particle coordinates:
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter"># ID turn s[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)] ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nz[1.e-3 sqrt(m)] ndp/p[1.e-3 sqrt(m)] ktrack
<br class="ltx_break"></span></p>
</div>
</li>
<li id="Ch3.I84.ix9" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">8</span>
<div id="Ch3.I84.ix9.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Modified format for aperture check (normalized coordinates, binary):
<br class="ltx_break"></span>No header
<br class="ltx_break">A number of Fortran records describing which elements are used and the current dump period is added one per relevant line in DUMP block. Format 8 is format 7 without header and in binary format.
<br class="ltx_break">Records: <span class="ltx_text ltx_font_typewriter"># ID turn s[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)] ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nz[1.e-3 sqrt(m)] ndp/p[1.e-3 sqrt(m)] ktrack
<br class="ltx_break"></span>The Fortran code <span class="ltx_text ltx_font_typewriter">SixTest/readDump3/readDump3.f90</span> can be used to convert these files into the format 2 (sans headers).</p>
</div>
</li>
<li id="Ch3.I84.ix10" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">9</span>
<div id="Ch3.I84.ix10.p1" class="ltx_para">
<p class="ltx_p">– <span class="ltx_text ltx_font_bold">Beam mean and sigma (normalized coordinates):
<br class="ltx_break"></span>Header line 1 is the same as for format 2.
<br class="ltx_break">Header: <span class="ltx_text ltx_font_typewriter"># napx turn s[m] &lt;nx&gt;[1.e-3 sqrt(m)] &lt;npx&gt;[1.e-3 sqrt(m)] &lt;ny&gt;[1.e-3 sqrt(m)] &lt;npy&gt;[1.e-3 sqrt(m)] &lt;nsigma&gt;[1.e-3 sqrt(m)] &lt;npsigma&gt;[1.e-3 sqrt(m)] &lt;nx^2&gt; &lt;nx*npx&gt; &lt;nx*ny&gt; &lt;nx*npy&gt; &lt;nx*nsigma&gt; &lt;nx*npsigma&gt; &lt;npx^2&gt; &lt;npx*ny&gt; &lt;npx*npy&gt; &lt;npx*nsigma&gt; &lt;npx*npsigma&gt; &lt;ny^2&gt; &lt;ny*npy&gt; &lt;ny*nsigma&gt; &lt;ny*npsigma&gt; &lt;npy^2&gt; &lt;npy*nsigma&gt; &lt;npy*npsigma&gt; &lt;nsigma^2&gt; &lt;nsigma*npsigma&gt; &lt;npsigma^2&gt;
<br class="ltx_break"></span>If there are multiple single elements attached to the file, the headers are repeated.
<br class="ltx_break">A number of lines describing which elements are used and the current dump period is added one per relevant line in DUMP block.
<br class="ltx_break">Data lines: As described in the header; one per turn (and for collimation, one per pack of particles).
For the “product” quantities, the units are the product of the units of the “normal” ones.</p>
</div>
</li>
</ol>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">filename</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p">is the name of the file to write to. This argument may be omitted (unless <span class="ltx_text ltx_font_typewriter">first</span> and <span class="ltx_text ltx_font_typewriter">last</span> are present, if so then <span class="ltx_text ltx_font_typewriter">filename</span> must also be present), and if so the output file is named fort.<span class="ltx_text ltx_font_typewriter">unit</span>.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx6" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">first</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx6.p1" class="ltx_para">
<p class="ltx_p">is the first turn where this dump should be active. This argument may be omitted if <span class="ltx_text ltx_font_typewriter">last</span> is also omitted, and if so it defaults to turn 1.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx7" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">last</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx7.p1" class="ltx_para">
<p class="ltx_p">is the last turn where this dump should be active, -1 meaning “untill the end of the simulation”. This argument may be omitted if <span class="ltx_text ltx_font_typewriter">first</span> is also omitted, and if so it defaults to -1.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx8" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">HIGH</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx8.p1" class="ltx_para">
<p class="ltx_p">If present anywhere in the DUMP block this triggers high-precission output, meaning more digits in the output files.</p>
</div>
</section>
<section id="Ch3.S7.SS1.SSS15.Px4.SPx9" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">FRONT</h6>
<div id="Ch3.S7.SS1.SSS15.Px4.SPx9.p1" class="ltx_para">
<p class="ltx_p">If present anywhere in the DUMP block, this keyword triggers the DUMPed particles to be dumped in front of the element, i.e. before the kick.
This works for all elements, including BLOCs, when combined with the ALL “element name”.
Note that FRONT is not yet supported for thick tracking, and trying to use this combination will produce a run-time error.</p>
</div>
</section>
</section>
<section id="Ch3.S7.SS1.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S7.SS1.SSS15.Px5.p1" class="ltx_para">
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
/ALL 1 663 2
/CRAB5 1 659 0
ip1 1 660 2 IP1_DUMP.dat
ip5 1 662 2
mqml.10l4.b1..1 1 661 2 MQ_DUMP.dat
NEXT
</pre>
</div>
</section>
</section>
<section id="Ch3.S7.SS2" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.7.2 </span>FMA analysis</h4>
<section id="Ch3.S7.SS2.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S7.SS2.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">The FMA block generates the basic files needed for frequency map analysis (FMA). Explicitly, it returns one output file with calculated tunes and amplitudes for the files specified in the DUMP block, see Sec. <a href="#Ch3.S7.SS1" title="3.7.1 Dumping of beam population ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.1</span></a>. For the calculation of the tunes (<math id="Ch3.S7.SS2.SSS15.Px1.p1.m1" class="ltx_Math" alttext="Q_{1}" display="inline"><msub><mi>Q</mi><mn>1</mn></msub></math>, <math id="Ch3.S7.SS2.SSS15.Px1.p1.m2" class="ltx_Math" alttext="Q_{2}" display="inline"><msub><mi>Q</mi><mn>2</mn></msub></math> and <math id="Ch3.S7.SS2.SSS15.Px1.p1.m3" class="ltx_Math" alttext="Q_{3}" display="inline"><msub><mi>Q</mi><mn>3</mn></msub></math>) in normalized phase space, the normalization matrix is extracted from the LINE block (linear optics calculation in 6D, <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>). In case the particles are dumped at the beginning of the sequence (StartDUMP), the closed orbit and normalization matrix used also for the initialization of the particles is used. In this case, the LINE block is not needed. The tunes <math id="Ch3.S7.SS2.SSS15.Px1.p1.m4" class="ltx_Math" alttext="Q_{1}" display="inline"><msub><mi>Q</mi><mn>1</mn></msub></math>, <math id="Ch3.S7.SS2.SSS15.Px1.p1.m5" class="ltx_Math" alttext="Q_{2}" display="inline"><msub><mi>Q</mi><mn>2</mn></msub></math> and <math id="Ch3.S7.SS2.SSS15.Px1.p1.m6" class="ltx_Math" alttext="Q_{3}" display="inline"><msub><mi>Q</mi><mn>3</mn></msub></math> are then calculated with the routine specified in the FMA block either in physical coordinates (<math id="Ch3.S7.SS2.SSS15.Px1.p1.m7" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px1.p1.m8" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch3.S7.SS2.SSS15.Px1.p1.m9" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px1.p1.m10" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch3.S7.SS2.SSS15.Px1.p1.m11" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px1.p1.m12" class="ltx_Math" alttext="dE/E" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mi>E</mi></mrow></math>) or normalized phase space coordinates and dumped to the file <code class="ltx_verbatim ltx_font_typewriter">fma_sixtrack</code> together with the minimum, maximum and average normalized particle amplitudes and phases.</p>
</div>
<div id="Ch3.S7.SS2.SSS15.Px1.p2" class="ltx_para">
<p class="ltx_p">To use normalized coordinates for th FMA analysis is always possible in case of 6D tracking (remember to put the LINE block for other elements than the start of the sequence). In case of 4D tracking, the following limitations apply:</p>
<ul id="Ch3.I85" class="ltx_itemize">
<li id="Ch3.I85.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I85.i1.p1" class="ltx_para">
<p class="ltx_p">the FMA analysis is only implemented for the start of the sequence (StartDUMP). For other elements the normalization matrix would need to be obtained from the LINE block, which has not been checked in case of 4D optics.</p>
</div>
</li>
<li id="Ch3.I85.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="Ch3.I85.i2.p1" class="ltx_para">
<p class="ltx_p">4D tracking with scan in energy is disabled as in this case the normalization matrix would need to be saved for each element and particle, which requires a huge amount of memory breaking other parts of the code.</p>
</div>
</li>
</ul>
<p class="ltx_p">In general it is also recommended to already normalize the coordinates in DUMP as this is faster than in FMA.</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S7.SS2.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">FMA</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S7.SS2.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable, one for each file with particle amplitudes and tune calculation method, and one for each flag given.</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Format of input block</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text ltx_font_typewriter">filename_1 method_1 (fma_flag_norm_1 (fma_first_turn fma_last_turn))
<br class="ltx_break"></span>or <span class="ltx_text ltx_font_typewriter">NoNormDUMP
<br class="ltx_break"></span></p>
</div>
<div id="Ch3.S7.SS2.SSS15.Px4.p2" class="ltx_para">
<p class="ltx_p">The FMA block has to be proceeded by the LINE block (calculation of the normalization matrix) and the DUMP block (dump particle coordinates).</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
element_name_1 1 unit_1 2 filename_1 first_turn_1 last_turn_1
element_name_2 1 unit_2 2 filename_2 first_turn_2 last_turn_2
NEXT
LINE
ELEMENT  0 2 1 emit_1 emit_2
NEXT
FMA
filename_1 method_1 fma_flag_norm_1 fma_first_turn_1 fma_last_turn_1
filename_2 method_2 fma_flag_norm_2 fma_first_turn_2 fma_last_turn_2
NEXT
</pre>
<p class="ltx_p">For the DUMP block (Sec. <a href="#Ch3.S7.SS1" title="3.7.1 Dumping of beam population ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.1</span></a>) the frequency has to be 1 (dump every turn) and the file format has to be 2 or 3.
For the linear optics calculation <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>, the optics needs to be calculated at each element (mode ELEMENT), the number-of-blocks is then 0 and 6D linear optics calculation is required (<code class="ltx_verbatim ltx_font_typewriter">ilin = 2</code>) in order to decouple the 6D motion.</p>
</div>
<section id="Ch3.S7.SS2.SSS15.Px4.SPx1" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">filename</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.SPx1.p1" class="ltx_para">
<p class="ltx_p">one of the output files specified in the FMA block preceding DUMP block.</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px4.SPx2" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">method</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.SPx2.p1" class="ltx_para">
<p class="ltx_p">method used to calculate the tune. Available methods are: <code class="ltx_verbatim ltx_font_typewriter">TUNELASK</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEFIT</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNENEWT1</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEABT</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEABT2</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEFFT</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEFFTI</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNENEWT</code>, <code class="ltx_verbatim ltx_font_typewriter">TUNEAPA</code>, <code class="ltx_verbatim ltx_font_typewriter">NAFF</code>. A short description of the different methods is given in Table <a href="#Ch3.T10" title="Table 3.10 ‣ method ‣ Format of input block ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.10</span></a>.</p>
</div>
<figure id="Ch3.T10" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.10: </span>Available tune calculation methods in SixTrack.</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">
                      <span class="ltx_text ltx_font_bold">Library</span>
                    </th>
<th class="ltx_td ltx_align_left ltx_border_r ltx_border_t">
                      <span class="ltx_text ltx_font_bold">method</span>
                    </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                      <span class="ltx_text ltx_font_bold">Description</span>
                    </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t">PLATO <cite class="ltx_cite">[<a href="#bib.bib29" title="" class="ltx_ref">29</a>, <a href="#bib.bib30" title="" class="ltx_ref">30</a>]</cite>
</td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNELASK</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Compute the tune of a 2d map by means of laskar method. A first indication of the position of the tune is obtained by means of a FFT. Refinement is obtained through a newton procedure.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEFIT</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a modified apa algorithm. The first step consists of taking the average of the tune computed with the APA method, then a best fit is performed.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNENEWT1</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a discrete version of laskar method. It includes a newton method for the search of the frequency.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNENEWT</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using a discrete version of laskar method. It includes a newton method for the search of the frequency.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEABT</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using FFT interpolated method.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEABT2</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune using the interpolated FFT method with hanning filter.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEFFT</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the FFT on a two dimensional plane, given n iterates of a map. The FFT is performed over the maximum mft which satifies <math id="Ch3.T10.m1" class="ltx_Math" alttext="2^{\rm mft}&lt;=n" display="inline"><mrow><msup><mn>2</mn><mi>mft</mi></msup><mo>≤</mo><mi>n</mi></mrow></math>, where the maximum number of iterates is fixed in the parameter n.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEFFTI</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the FFT on a two dimensional plane, given n iterates of a map. The FFT is performed over the maximum mft which satifies <math id="Ch3.T10.m2" class="ltx_Math" alttext="2^{\rm mft}&lt;=n" display="inline"><mrow><msup><mn>2</mn><mi>mft</mi></msup><mo>≤</mo><mi>n</mi></mrow></math>. Then, the FFT is interpolated fitting the three points around the maximum using a Gaussian. The tune is computed as the maximum of the Gaussian.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_align_left ltx_border_r ltx_border_t">TUNEAPA</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">Computes the tune as the average phase advance on a two dimensional plane, given n iterates of a map.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_l ltx_border_r ltx_border_t">NAFF <cite class="ltx_cite">[<a href="#bib.bib31" title="" class="ltx_ref">31</a>, <a href="#bib.bib32" title="" class="ltx_ref">32</a>]</cite>
</td>
<td class="ltx_td ltx_align_left ltx_border_b ltx_border_r ltx_border_t">NAFF</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">Computes the tune using the laskar method. The first estimation of the tune is obtained with an FFT and the precise value is determined by maximizing the Fourier integral. A Hann window of first and second order for the transverse and longitudinal motion are used respectively. The NAFF flag must be enabled at build time <cite class="ltx_cite">[<a href="#bib.bib33" title="" class="ltx_ref">33</a>]</cite>.</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S7.SS2.SSS15.Px4.SPx3" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">fma_flag_norm</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1" class="ltx_para">
<p class="ltx_p">optional flag for calculating the tunes with physical (<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m5" class="ltx_Math" alttext="s" display="inline"><mi>s</mi></math>,<math id="Ch3.S7.SS2.SSS15.Px4.SPx3.p1.m6" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>) or normalized coordinates in case physical coordinates are used in DUMP. The default is using normalized coordinates (<code class="ltx_verbatim ltx_font_typewriter">fma_flag_norm=1</code>). For using physical coordinates explicitly set (<code class="ltx_verbatim ltx_font_typewriter">fma_flag_norm=0</code>). See <span class="ltx_text ltx_font_bold">Description</span> for the conditions under which normalization is available.</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px4.SPx4" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">fma_first_turn, fma_last_turn</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.SPx4.p1" class="ltx_para">
<p class="ltx_p">Turns used for FMA analysis. As the DUMP files are used as input for the FMA analysis <span class="ltx_text ltx_font_typewriter">fma_first_turn</span> must be larger <span class="ltx_text ltx_font_typewriter">first_turn</span> in the DUMP block and <span class="ltx_text ltx_font_typewriter">fma_last_turn</span> must be smaller than <span class="ltx_text ltx_font_typewriter">last_turn</span> in the DUMP block. If <span class="ltx_text ltx_font_typewriter">fma_last_turn = -1</span> the last turn number in the dump file is taken as the last turn number, including the last turn tracked if the <span class="ltx_text ltx_font_typewriter">last</span> setting of the dump equals -1.
By default, FMA will use the same turns as for the DUMP.</p>
</div>
</section>
<section id="Ch3.S7.SS2.SSS15.Px4.SPx5" class="ltx_subparagraph">
<h6 class="ltx_title ltx_title_subparagraph">NoNormDUMP</h6>
<div id="Ch3.S7.SS2.SSS15.Px4.SPx5.p1" class="ltx_para">
<p class="ltx_p">is a flag for disabling the <span class="ltx_text ltx_font_typewriter">NORM_filename*</span> output files.
This saves disk space and speeds up the calculation of the FMA.
If used, the flag should be alone on a one line of the FMA input block in fort.3.
Note that the capitalization must be correct for the flag to be recognized.</p>
</div>
</section>
</section>
<section id="Ch3.S7.SS2.SSS15.Px5" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Output file format</h6>
<div id="Ch3.S7.SS2.SSS15.Px5.p1" class="ltx_para">
<p class="ltx_p">The FMA block returns the output files <code class="ltx_verbatim ltx_font_typewriter">NORM_filename*</code> containing the normalized phase space coordinates, where <code class="ltx_verbatim ltx_font_typewriter">filename</code> are the filenames specified in the dump block, and the file <code class="ltx_verbatim ltx_font_typewriter">fma_sixtrack</code> containing the initial, average, minimum and maximum amplitudes and the calculated tunes for each specified filename and method. The structure of the <code class="ltx_verbatim ltx_font_typewriter">NORM_filename*</code> is described in Table <a href="#Ch3.T11" title="Table 3.11 ‣ Output file format ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.11</span></a> and of the <code class="ltx_verbatim ltx_font_typewriter">fma_sixtrack</code> in Table <a href="#Ch3.T12" title="Table 3.12 ‣ Output file format ‣ 3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.12</span></a>.</p>
</div>
<figure id="Ch3.T11" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.11: </span>Format of the NORM files</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Line Number</span>
                  </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Type</span>
                  </td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Description</span>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">1</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">closed orbit <math id="Ch3.T11.m1" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.T11.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>,<math id="Ch3.T11.m3" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.T11.m4" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>,<math id="Ch3.T11.m5" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.T11.m6" class="ltx_Math" alttext="dE/E" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>E</mi></mrow><mo>/</mo><mi>E</mi></mrow></math>, units are <math id="Ch3.T11.m7" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM222">mm</mi><mo>,</mo><mi id="XM223">mrad</mi><mo>,</mo><mi id="XM224">mm</mi><mo>,</mo><mi id="XM225">mrad</mi><mo>,</mo><mn id="XM226">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">2-38</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">matrix of eigenvectors (<span class="ltx_text ltx_font_typewriter">tamatrix</span>). Eigenvectors are normalized, rotated and ordered as in the Ripken formalism. The matrix <span class="ltx_text ltx_font_typewriter">tamatrix</span> is in canonical variables <math id="Ch3.T11.m8" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.T11.m9" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch3.T11.m10" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.T11.m11" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch3.T11.m12" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.T11.m13" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch3.T11.m14" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM227">mm</mi><mo>,</mo><mi id="XM228">mrad</mi><mo>,</mo><mi id="XM229">mm</mi><mo>,</mo><mi id="XM230">mrad</mi><mo>,</mo><mn id="XM231">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">39-75</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">inverse of ta-matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> used for normalization where <math id="Ch3.T11.m15" class="ltx_Math" alttext="z_{\rm norm}=\rm{ta}\cdot z" display="inline"><mrow><msub><mi>z</mi><mi>norm</mi></msub><mo>=</mo><mrow><mi>ta</mi><mo>⋅</mo><mi mathvariant="normal">z</mi></mrow></mrow></math>. Matrix <span class="ltx_text ltx_font_typewriter">inv(tamatrix)</span> is given in canonical variables <math id="Ch3.T11.m16" class="ltx_Math" alttext="x" display="inline"><mi>x</mi></math>,<math id="Ch3.T11.m17" class="ltx_Math" alttext="p_{x}" display="inline"><msub><mi>p</mi><mi>x</mi></msub></math>,<math id="Ch3.T11.m18" class="ltx_Math" alttext="y" display="inline"><mi>y</mi></math>,<math id="Ch3.T11.m19" class="ltx_Math" alttext="p_{y}" display="inline"><msub><mi>p</mi><mi>y</mi></msub></math>,<math id="Ch3.T11.m20" class="ltx_Math" alttext="z" display="inline"><mi>z</mi></math>,<math id="Ch3.T11.m21" class="ltx_Math" alttext="dp/p" display="inline"><mrow><mrow><mi>d</mi><mo>⁢</mo><mi>p</mi></mrow><mo>/</mo><mi>p</mi></mrow></math>, units are <math id="Ch3.T11.m22" class="ltx_Math" alttext="[\rm mm,mrad,mm,mrad,1]" display="inline"><mrow><mo stretchy="false">[</mo><mi id="XM232">mm</mi><mo>,</mo><mi id="XM233">mrad</mi><mo>,</mo><mi id="XM234">mm</mi><mo>,</mo><mi id="XM235">mrad</mi><mo>,</mo><mn id="XM236">1</mn><mo stretchy="false">]</mo></mrow></math>.</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">76</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">header with units:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                    <code class="ltx_verbatim ltx_font_typewriter"># id turn pos[m] nx[1.e-3 sqrt(m)] npx[1.e-3 sqrt(m)]</code>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r"> <code class="ltx_verbatim ltx_font_typewriter"> ny[1.e-3 sqrt(m)] npy[1.e-3 sqrt(m)] nsig[1.e-3 sqrt(m)]</code>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r"> <code class="ltx_verbatim ltx_font_typewriter"> ndp/p[1.e-3 sqrt(m)] kt</code>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">77 - eof</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">see header in line 76: particle id, turn number position s[m], normalized coordinates <math id="Ch3.T11.m23" class="ltx_Math" alttext="[10^{-3}\sqrt{\rm m}]" display="inline"><mrow><mo stretchy="false">[</mo><mrow id="XM237"><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup><mo>⁢</mo><msqrt><mi mathvariant="normal">m</mi></msqrt></mrow><mo stretchy="false">]</mo></mrow></math>, ktrack (type of element)</td>
</tr>
</tbody>
</table>
</figure>
<figure id="Ch3.T12" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table 3.12: </span>Format of the fma_sixtrack file</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle" style="width:433.6pt;">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Line Number</span>
                  </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Type</span>
                  </th>
<th class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">
                    <span class="ltx_text ltx_font_bold">Description</span>
                  </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">1-2</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">header</td>
<td class="ltx_td ltx_align_justify ltx_border_r ltx_border_t">header with units and description:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                    <code class="ltx_verbatim ltx_font_typewriter"># eps0*,eps2*,eps3* all in 1.e-6*m, phi* [rad]</code>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r">
                    <code class="ltx_verbatim ltx_font_typewriter"># inputfile method id q1 q2 q3 eps1_min eps2_min eps3_min</code>
                  </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r"> <code class="ltx_verbatim ltx_font_typewriter"> eps1_max eps2_max eps3_max eps1_avg eps2_avg eps3_avg</code>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r"> <code class="ltx_verbatim ltx_font_typewriter"> eps1_0 eps2_0 eps3_0 phi1_0 phi2_0 phi3_0</code>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_justify ltx_border_r"> <code class="ltx_verbatim ltx_font_typewriter"> norm_flag first_turn last_turn</code>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">3 - eof</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Lines</td>
<td class="ltx_td ltx_align_justify ltx_border_b ltx_border_r ltx_border_t">see header in line 1-2: The lines are ordered as particles 1-npart for (inputfile1,method1), then particles 1-npart for (inputfile2,method2), etc.. The minimum (min), maximum (max) and average (avg) are taken over the number of turns in the inputfile (fiel specified in the FMA and DUMP block). Units are <math id="Ch3.T12.m1" class="ltx_Math" alttext="\mu\rm m" display="inline"><mrow><mi>μ</mi><mo>⁢</mo><mi mathvariant="normal">m</mi></mrow></math> for <code class="ltx_verbatim ltx_font_typewriter">eps*</code> and rad for <code class="ltx_verbatim ltx_font_typewriter">phi*</code>, where <code class="ltx_verbatim ltx_font_typewriter">phi*</code> is the angle in the normalized phase space coordinates.</td>
</tr>
</tbody>
</table>
</figure>
</section>
<section id="Ch3.S7.SS2.SSS15.Px6" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S7.SS2.SSS15.Px6.p1" class="ltx_para">
<p class="ltx_p">An input block to compare the tunes at element IP3 calculated over the interval <math id="Ch3.S7.SS2.SSS15.Px6.p1.m1" class="ltx_Math" alttext="[1,4096]" display="inline"><mrow><mo stretchy="false">[</mo><mn id="XM238">1</mn><mo>,</mo><mn id="XM239">4096</mn><mo stretchy="false">]</mo></mrow></math> and <math id="Ch3.S7.SS2.SSS15.Px6.p1.m2" class="ltx_Math" alttext="[5905,10000]" display="inline"><mrow><mo stretchy="false">[</mo><mn id="XM240">5905</mn><mo>,</mo><mn id="XM241">10000</mn><mo stretchy="false">]</mo></mrow></math>, and using the method <code class="ltx_verbatim ltx_font_typewriter">TUNELASK</code> would look like:</p>
<pre class="ltx_verbatim ltx_font_typewriter">
DUMP
IP3 1 1030 2 IP3_DUMP_1 1 4096
IP3..1 1 1031 2 IP3_DUMP_2 5905 10000
IP3..2 1 1032 2 IP3_DUMP_3 1 4096
IP3..3 1 1033 2 IP3_DUMP_4 5905 10000
NEXT
LINE
ELEMENT  0 2 1 3.75 3.75
NEXT
FMA
IP3_DUMP_1 TUNELASK
IP3_DUMP_2 TUNELASK 1 512 1024
IP3_DUMP_3 TUNELASK 0
IP3_DUMP_4 TUNELASK 0 512 1024
NEXT
</pre>
<p class="ltx_p">where for <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_1</code> and <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_2</code> the tunes are calculated using normalized coordinates (default) and for <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_3</code> and <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_4</code> the physical coordinates are used (<code class="ltx_verbatim ltx_font_typewriter">fma_norm_flag</code> equal 0). For <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_2</code> and <code class="ltx_verbatim ltx_font_typewriter">IP3_DUMP_4</code> the turns from 512 to 1024 are used for the FMA analysis. This is particularly useful for detecting the maximum diffusion in tunes by taking the maximum over difference over several moving windows.</p>
</div>
<div id="Ch3.S7.SS2.SSS15.Px6.p2" class="ltx_para">
<p class="ltx_p">Note that all element names have to be different due to a limitation in DUMP module. This means practically, that one needs to insert additional markers (here <code class="ltx_verbatim ltx_font_typewriter">IP3..1</code> etc.) in the SixDesk <cite class="ltx_cite">[<a href="#bib.bib34" title="" class="ltx_ref">34</a>, <a href="#bib.bib35" title="" class="ltx_ref">35</a>]</cite> mask file prior to the SixTrack run. It is important to install the additional markers after cycling the machine if the machine is cycled at the location of the additional (e.g. <code class="ltx_verbatim ltx_font_typewriter">IP3</code>), as they are installed in front of the element given in the from statement in the cycle command.</p>
</div>
</section>
</section>
<section id="Ch3.S7.SS3" class="ltx_subsection">
<h4 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.7.3 </span>ZIPFile combined and compressed output</h4>
<section id="Ch3.S7.SS3.SSS15.Px1" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Description</h6>
<div id="Ch3.S7.SS3.SSS15.Px1.p1" class="ltx_para">
<p class="ltx_p">In order to retrieve extra simulation output such as DUMP or FMA from BOINC, it is neccessary to pack the output files into a single file with a special name that will be retrieved.
This can be achieved with the ZIPF block, which packs the listed files into the compressed archive <span class="ltx_text ltx_font_typewriter">Sixout.zip</span> at the end of the simulation.
</p>
</div>
<div id="Ch3.S7.SS3.SSS15.Px1.p2" class="ltx_para">
<p class="ltx_p">Note that if one of the files do not exist at the end of the simulation, it will be silently skipped and not included in the archive.</p>
</div>
</section>
<section id="Ch3.S7.SS3.SSS15.Px2" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Keyword</h6>
<div id="Ch3.S7.SS3.SSS15.Px2.p1" class="ltx_para">
<p class="ltx_p">ZIPF</p>
</div>
</section>
<section id="Ch3.S7.SS3.SSS15.Px3" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Number of data lines</h6>
<div id="Ch3.S7.SS3.SSS15.Px3.p1" class="ltx_para">
<p class="ltx_p">variable, one for each file that is to be packed.</p>
</div>
</section>
<section id="Ch3.S7.SS3.SSS15.Px4" class="ltx_paragraph">
<h6 class="ltx_title ltx_title_paragraph">Example</h6>
<div id="Ch3.S7.SS3.SSS15.Px4.p1" class="ltx_para">
<pre class="ltx_verbatim ltx_font_typewriter">
ZIPF
fma_sixtrack
IP3_DUMP_1
fort.90
NEXT
</pre>
</div>
</section>
</section>
</section>
</section>
<section id="Chx1" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">Conclusions</h2>
<div id="Chx1.p1" class="ltx_para">
<p class="ltx_p">Programs with large input structures like SixTrack tend to be far from
perfect, even though a cumbersome chase for program bugs and a lot of
polishing on the input structure has been performed. Plenty of
comments and suggestions are therefore needed to further improve the
program.
</p>
</div>
</section>
<section id="Ch4" class="ltx_chapter">
<h2 class="ltx_title ltx_title_chapter">
<span class="ltx_tag ltx_tag_chapter">Chapter 4 </span>Acknowledgement</h2>
<div id="Ch4.p1" class="ltx_para">
<p class="ltx_p">I would like to thank my colleagues at DESY and CERN to help to find
nasty bugs and for a thorough check of the program. I would like to
thank Mikko Vaenttinen who helped to vectorise the program. He also
did most of the typing of the manuscript. Moreover, I want to express
my gratitude to F. Zimmermann who helped to finish the
differential–algebra part in endless night sessions. Additions
concerning Normal Forms have been contributed by M. Giovannozzi.
J. Miles helped with the calculation of the 6D Courant–Snyder matrix
and its use to transform the tracking data in the post–processing.
W. Herr is thanked for providing a software package used for the orbit
correction. L.H.A. Leunissen extracted and adapted the 6D beam–beam
code of Hirata <cite class="ltx_cite">[<a href="#bib.bib19" title="" class="ltx_ref">19</a>]</cite>.</p>
</div>
</section>
<section id="A1" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix A </span>List of Keywords</h2>
<figure id="A1.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption" style="font-size:70%;"><span class="ltx_tag ltx_tag_table">Table A.1: </span>List of Keywords</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-11.4pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> </span>
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">#</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">Keyword</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t" colspan="2">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">Input–data–block</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">Short Description</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">§</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">Page</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_rule" style="width:0.0pt;height:22.8pt;position:relative; bottom:-8.5pt;background:black;display:inline-block;"></span>
          </th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;">Title</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold" style="font-size:70%;"># of Data–lines</span>
          </th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_r ltx_border_t"></th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
<th class="ltx_td"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">BEAM</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">BEAM–BEAM Element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">4-6D including Beam Separation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">&amp; Linear Coupling</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 2</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">BLOC</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Block–definition</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable + 1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Blocks of
Linear Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">BLOCK</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Linear Parameters for each Structure</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Element</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 4</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">CAV</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Cavity in the Structure Input Block</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 5</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">CHRO</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Chromaticity</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Correcting Chromaticity with</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS3" title="3.5.3 Chromaticity Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS3" title="3.5.3 Chromaticity Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Correction</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Sextupoles</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 6</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">CORR</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Tune–shift Corrections</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Correction of Nonlinear
Tune–Shift</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS11" title="3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.11</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS11" title="3.5.11 Corrections ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.11</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 7</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">COMB</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Combination of</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Combining Different Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:5.7pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Elements</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">for a Correction</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:5.7pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 8</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">COMM</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Comment Line</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Additional Comments</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S1.SS3" title="3.1.3 Comment Line ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1.SS3" title="3.1.3 Comment Line ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:5.7pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 9</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DAMAP</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Location for a Printout of a DA map</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:5.7pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 10</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DECO</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Decoupling</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Compensation of Linear Coupling</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS5" title="3.5.5 Decoupling of Motion in the Transverse Planes ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.5</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS5" title="3.5.5 Decoupling of Motion in the Transverse Planes ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.5</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 11</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DIFF</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Differential</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Calculating a One–turn Map with</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Algebra</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Differential Algebra</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 12</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DISP</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Displacement of</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Displacing Nonlinear
Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS4" title="3.2.4 Displacement of Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Elements</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 13</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DUMP</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Writing the beam population to file</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S7.SS1" title="3.7.1 Dumping of beam population ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S7.SS1" title="3.7.1 Dumping of beam population ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 14</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">DYNK</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Dynamic kicks</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS4" title="3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS4" title="3.3.4 Dynamic Kicks ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 15</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">EL</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Elliptical Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 16</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ELEMENT</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Linear Parameters after each Single</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Element</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 17</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ELEN</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Electron lens</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS9" title="3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.9</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS9" title="3.3.9 Electron lens ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.9</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;">
18</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ENDE</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">End of SixTrack Input Structure</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 19</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">FLUC</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Random Fluctuation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Seed for the Random Generator</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Starting Number</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 20</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">FMA</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Frequency Map Analysis</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S7.SS2" title="3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S7.SS2" title="3.7.2 FMA analysis ‣ 3.7 Extra output files ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.7.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 21</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">FREE</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <math id="A1.T1.m1" class="ltx_Math" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Program Version</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Free Format Input from one
File</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 22</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">GEOM</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <math id="A1.T1.m2" class="ltx_Math" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Program Version</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Input of Machine
Geometry in</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1.SS1" title="3.1.1 Program Version ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">extra File</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 23</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">GO</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Start of Tracking in the Structure Input</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 24</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">“HCOR= ”</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Specifies an Horizontal Orbit Corrector</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Element (Dipole or Multipole)</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 25</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">“HMON= ”</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Specifies an Horizontal Orbit Monitor</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 26</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">INIT</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Initial Coordinates</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">16</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Setting up of the Initial
Coordinates</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 27</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ITER</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Iteration Errors</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">4</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"># of Iterations and Precision</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S1.SS4" title="3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1.SS4" title="3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">for Correction Routines</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 28</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">LIMI</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Collimators that stop the
Program</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">when being hit</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 29</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">MULT</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Multipole</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">max. 11</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Multipole Coefficients normal
and</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:11.4pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">skew Coefficients</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">up to </span>
            <math id="A1.T1.m3" class="ltx_Math" alttext="10^{th}" display="inline"><msup><mn>10</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> order</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:11.4pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Combination of Different
Multi–</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">poles in the ORGA Input Block</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 30</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">NEXT</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Last Line of each Input Data Block</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 31</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">NORM</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Normal Form</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Normal Form Operations on Maps</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS10" title="3.5.10 Normal Forms ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.10</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS10" title="3.5.10 Normal Forms ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.10</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 32</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ORBI</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Orbit Adjustment</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Adjusting Orbit
to desired</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Sigma Values</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 33</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">ORGA</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Organisation of</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable + 1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Arranging Random
Errors and</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Random Numbers</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Multipole sets</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 34</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">POST</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Post–processing</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Post–processing of the
Tracking Data</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 35</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">PRIN</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Printout Selection</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">0</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Initiates the Printing of</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S1.SS2" title="3.1.2 Print Selection ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S1.SS2" title="3.1.2 Print Selection ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">the Input Data</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 36</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">RE</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Rectangular Aperture Limitation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 37</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">RESO</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Resonance</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">6</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Compensation of up to 3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS8" title="3.5.8 Resonance Compensation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.8</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS8" title="3.5.8 Resonance Compensation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.8</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Compensation</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Different Resonances</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 38</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">RIPP</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Power Supply Ripple</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Invokes a Sinusoidal Tune</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS3" title="3.3.3 Power Supply Ripple ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS3" title="3.3.3 Power Supply Ripple ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text ltx_font_italic" style="font-size:70%;">(obsolete – use DYNK)</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Variation </span>
            <span class="ltx_text ltx_font_italic" style="font-size:70%;">(obsolete – use DYNK)</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 39</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">SEAR</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Search for Resonance</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Evaluating Longitudinal
Positions</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS7" title="3.5.7 Search for Optimum
Places to Compensate Resonances ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.7</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS7" title="3.5.7 Search for Optimum
Places to Compensate Resonances ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.7</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Compensation Positions</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">for a Resonance Compensation</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 40</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">SING</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Single Elements</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Magnet Parameters of</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Single Elements</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 41</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">STRU</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Structure Input</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Structure of
Linear Blocks and</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Nonlinear Elements</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 42</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">SUBR</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Sub–resonance</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">1</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Calculation of </span>
            <math id="A1.T1.m4" class="ltx_Math" alttext="1^{th}" display="inline"><msup><mn>1</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;">
Order Reso–</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS6" title="3.5.6 Sub–resonance Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.6</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS6" title="3.5.6 Sub–resonance Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.6</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Calculation</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">nances up to </span>
            <math id="A1.T1.m5" class="ltx_Math" alttext="9^{th}" display="inline"><msup><mn>9</mn><mrow><mi>t</mi><mo>⁢</mo><mi>h</mi></mrow></msup></math>
            <span class="ltx_text" style="font-size:70%;"> Multipole Order</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 43</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">SYNC</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Synchrotron</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Parameters concerning Synchrotrons</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Oscillations</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Oscillation</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 44</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">TRAC</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Tracking</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">3</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">All major Tracking Parameters for</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Parameters</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">the transversal Motion Plane</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 45</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">TUNE</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Tune
Variation</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">2 or 4</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Adjusting the Horizontal and</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS2" title="3.5.2 Tune Variation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.2</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS2" title="3.5.2 Tune Variation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.2</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Vertical Tunes</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 46</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">TROM</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">“Phase Trombone” element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">mult. of 14</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Phase Shift Transparent</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS7" title="3.3.7 “Phase Trombone” Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.7</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS7" title="3.3.7 “Phase Trombone” Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.7</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">for Linear Optics</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 47</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">“VCOR= ”</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Specifies an Vertical Orbit Corrector</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text" style="font-size:70%;">Element (Dipole or Multipole)</span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 48</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">“VMON= ”</span>
          </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Specifies an Vertical Orbit Monitor</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"></span>
            <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
            <span class="ltx_text" style="font-size:70%;"> 49</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">WIRE</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">WIRE element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">variable</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;">Wire element</span>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <span class="ltx_text" style="font-size:70%;"> </span>
            <a href="#Ch3.S3.SS6" title="3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.6</span></a>
          </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
            <a href="#Ch3.S3.SS6" title="3.3.6 Wire ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.6</span></a>
          </td>
</tr>
</table>
</figure>
</section>
<section id="A2" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix B </span>List of Default Values</h2>
<section id="A2.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">B.1 </span>Default Tracking Parameters</h3>
<div id="A2.S1.p1" class="ltx_para">
<p class="ltx_p">Some of the parameters for tracking are set to non–zero values. This
is done for instance to avoid as much as possible program errors such
as division by zero due to an erroneous input. The default values for
the <span class="ltx_text ltx_font_italic">Iteration Errors</span> ( <a href="#Ch3.S1.SS4" title="3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.4</span></a>) see table <a href="#Ch3.T1" title="Table 3.1 ‣ Format ‣ 3.1.4 Iteration Errors ‣ 3.1 General Input ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1</span></a>.</p>
</div>
<figure id="A2.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table B.1: </span>Default Tracking Parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-11.4pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
</span>
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">#</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Description</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Value</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">§</span>
              </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Page</span>
              </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 1</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">General
Aperture Limitations (horizontal and vertical)</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1000 mm</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S3.SS2" title="3.3.2 Aperture Limitations ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 2</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Starting in
the Accelerator Structure at Element Number</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 3</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of
Turns in the forward Direction</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S6.SS1" title="3.6.1 Tracking Parameters ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
4</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Initial horizontal Amplitude</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">0.001 mm</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 5</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Horizontal and vertical Phase Space Coupling Switches on</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 6</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Flat
Bottom, Ramping and Flat Top Printout after Turn Number</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 7</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Printout of Coordinates (file 6) after Turn Number</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10000</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 8</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Kinetic
Energy [MeV] of the Reference Particle</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <math id="A2.T1.m1" class="ltx_Math" alttext="10^{-6}" display="inline"><msup><mn>10</mn><mrow><mo>-</mo><mn>6</mn></mrow></msup></math>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S6.SS2" title="3.6.2 Initial Coordinates ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
9</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Harmonic Number</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S6.SS3" title="3.6.3 Synchrotron Oscillation ‣ 3.6 Initial Conditions for Tracking ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.6.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
10</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Momentum Compaction Factor</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">0.001</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
11</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Length of the Machine</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1 km</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 12</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Mass
of the Particle (Proton)</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">938.2723128 </span>
                <math id="A2.T1.m2" class="ltx_Math" alttext="\mathrm{MeV}/\mathrm{c}^{2}" display="inline"><mrow><mi>MeV</mi><mo>/</mo><msup><mi mathvariant="normal">c</mi><mn>2</mn></msup></mrow></math>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 13</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Momentum Correction Factor for Distance in Phase Space</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 14</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Path–length Correction Factor for Distance in Phase Space</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 15</span>
              </th>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Averaging
Turn Interval for Post–processing</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
              </td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="A2.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">B.2 </span>Default Size Parameters</h3>
<div id="A2.S2.p1" class="ltx_para">
<p class="ltx_p">For large machines the arrays holding the machine parameters might have to be increased.
The size of each of the dimensions of the arrays is therefore defined as a parameter.
This can be done by compiling with the BIGNPART, HUGENPART, BIGNBLZ, and/or HUGENBLZ flags.
The default values are adjusted to allow the treatment of a full LHC lattice: the tracking version uses 50 Mb and the DA version 400 Mb.</p>
</div>
<figure id="A2.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table B.2: </span>Default Size Parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-11.4pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> </span>
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">#</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Description</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Value</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Name</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">§</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text ltx_font_bold" style="font-size:70%;">Page</span>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of Coordinates used in the Correction Routines</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">6</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">MPA</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 2</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of
Single Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">750</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NELE</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 3</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of
Blocks of Linear Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">160</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NBLO</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS2" title="3.2.2 Block Definitions ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
4</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Linear Elements per Block</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">100</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NELB</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 5</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total
Number of Elements in the Structure</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">15000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NBLZ</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS3" title="3.2.3 Structure Input ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
6</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Accelerator Super–periods</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">16</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NPER</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 7</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total
Number of Random Values</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">300000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NZFZ</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 8</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number
of Random Values for the basic Set of Nonlinear
Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">280000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NRAN</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 9</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of
Random Values for inserted Nonlinear Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S4.SS2" title="3.4.2 Organisation of Random Numbers ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.2</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-2.8pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 10</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number
of Random Values for each Inserted Nonlinear Element</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">500</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">MRAN</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
                <span class="ltx_rule" style="width:0.0pt;height:14.2pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                <span class="ltx_text" style="font-size:70%;">Number of Nonlinear Elements that can be inserted</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r">
                <span class="ltx_text" style="font-size:70%;">20</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 11</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Limit
Number of Particles for Vectorisation</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">64</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NPART</span>
              </td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 12</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of Elements for Combined Tasks</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">100</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NCOM</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 13</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Resonance Compensation Order</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">5</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NRCO</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S4.SS3" title="3.4.3 Combination of Elements ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.3</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 14</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Total
Number of Data for Processing</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NPOS</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS12" title="3.5.12 Post–processing ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.12</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 15</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number
of Intervals for Calculation of Lyapunov–Exponents</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NLYA</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 16</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number
of Intervals for Calculation of Invariants</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">1000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NINV</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;">
17</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Number of Data for Plotting</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20000</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NPLO</span>
              </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 18</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Pole Order of Multipole Block</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">11</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">MMUL</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 19</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of extra Parameters of the DA Map</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">10</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">MCOR</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 20</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Order of DA Calculation</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">15</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NEMA</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS9" title="3.5.9 Differential Algebra ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.9</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 21</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of Monitors for Micado Closed Orbit Correction</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">600</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NMON1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 22</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of Correctors for Micado Closed Orbit Correction</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">600</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NCOR1</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S5.SS4" title="3.5.4 Orbit Correction ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.4</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 23</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Beam–Beam Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">350</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NBB</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 24</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum Number of Slices for 6D Beam–Beam Kick</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">99</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">MBEA</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
                <a href="#Ch3.S3.SS5" title="3.3.5 Beam–Beam Element ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>
              </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"></span>
                <span class="ltx_rule" style="width:0.0pt;height:17.1pt;position:relative; bottom:-5.7pt;background:black;display:inline-block;"></span>
                <span class="ltx_text" style="font-size:70%;"> 25</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">Maximum
Number of “Phase Trombone” Elements</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">20</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;">NTR</span>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <span class="ltx_text" style="font-size:70%;"> </span>
                <a href="#Ch3.S2.SS1.SSS7" title="“Phase–trombone” or matrix element ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
                <a href="#Ch3.S2.SS1.SSS7" title="“Phase–trombone” or matrix element ‣ 3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>
              </td>
</tr>
</tbody>
</table>
</figure>
</section>
</section>
<section id="A3" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix C </span>Input and Output Files</h2>
<div id="A3.p1" class="ltx_para">
<p class="ltx_p">The program uses a couple of files for its input and output procedures.</p>
</div>
<figure id="A3.T1" class="ltx_table ltx_align_center">
<figcaption class="ltx_caption"><span class="ltx_tag ltx_tag_table">Table C.1: </span>List of Input and Output Files.</figcaption>
<table class="ltx_tabular">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:35.6pt;position:relative; bottom:-14.2pt;background:black;display:inline-block;"></span> <span class="ltx_text ltx_font_bold">File Unit</span>
</th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold">Input</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold">Output</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold">File Type</span>
          </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
            <span class="ltx_text ltx_font_bold">Contents</span>
          </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_border_l ltx_border_r ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
<th class="ltx_td ltx_border_t"></th>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
2</td>
<td class="ltx_td ltx_align_center ltx_border_r">X</td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r">Geometry and Strength Parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
3</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Tracking Parameters</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span> 4</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Geometry and
strength Parameters (format as file #
2)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
6</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Input Parameters and Analysis of Data</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name, hor., ver. Misalignment and Tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
9</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Internally used multipoles</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Format: <math id="A3.T1.m1" class="ltx_Math" alttext="a16,\ 2\times\{6\times(1p,3d23.15),\ (1p,2d23.15)\}" display="inline"><mrow><mrow id="XM254"><mi>a</mi><mo>⁢</mo><mn>16</mn></mrow><mo>,</mo><mrow id="XM255"><mn> 2</mn><mo>×</mo><mrow><mo stretchy="false">{</mo><mrow id="XM252"><mn>6</mn><mo>×</mo><mrow><mo stretchy="false">(</mo><mrow id="XM248"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM249"><mn>3</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mrow><mo stretchy="false">(</mo><mrow id="XM250"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM251"><mn>2</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow><mo stretchy="false">}</mo></mrow></mrow></mrow></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
10</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Summary of Post–processing (auxiliary)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
11</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">This file is used to dump linear</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">coupling parameters at locations of choice</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
12</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">End Coordinates of both Particles</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Format: (<math id="A3.T1.m2" class="ltx_Math" alttext="15\times F10.6" display="inline"><mrow><mrow><mn>15</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
13</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Start Coordinates for a Prolongation</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
14</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal FFT Spectrum for detailed</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Analysis; Format: (<math id="A3.T1.m3" class="ltx_Math" alttext="2\times F10.6" display="inline"><mrow><mrow><mn>2</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
15</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Vertical FFT Spectrum for detailed</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Analysis; Format: (<math id="A3.T1.m4" class="ltx_Math" alttext="2\times F10.6" display="inline"><mrow><mrow><mn>2</mn><mo>×</mo><mi>F</mi></mrow><mo>⁢</mo><mn>10.6</mn></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
16</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">External multipole errors</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Format: <math id="A3.T1.m5" class="ltx_Math" alttext="a16,\ 2\times\{6\times(1p,3d23.15),\ (1p,2d23.15)\}" display="inline"><mrow><mrow id="XM268"><mi>a</mi><mo>⁢</mo><mn>16</mn></mrow><mo>,</mo><mrow id="XM269"><mn> 2</mn><mo>×</mo><mrow><mo stretchy="false">{</mo><mrow id="XM266"><mn>6</mn><mo>×</mo><mrow><mo stretchy="false">(</mo><mrow id="XM262"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM263"><mn>3</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow></mrow><mo rspace="7.5pt">,</mo><mrow><mo stretchy="false">(</mo><mrow id="XM264"><mn>1</mn><mo>⁢</mo><mi>p</mi></mrow><mo>,</mo><mrow id="XM265"><mn>2</mn><mo>⁢</mo><mi>d</mi><mo>⁢</mo><mn>23.15</mn></mrow><mo stretchy="false">)</mo></mrow><mo stretchy="false">}</mo></mrow></mrow></mrow></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
17</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Additional Map at</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">location of interest</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
18</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">One–Turn Map with Differential</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Algebra</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
19</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Internal use for Differential Algebra</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
20</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Meta–file</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">PS–file of selected Plots</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
21</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Factorisation of the one–turn</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">map</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
22</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Transformation in the</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Normal Form coordinates</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
23</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Hamiltonian in</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">action variables</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
24</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Tune–shift in action</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">coordinates</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
25</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Tune–shift in Cartesian</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">coordinates</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
26</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">NAGLIB log–file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
27</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name, hor., ver. Misalignment and Tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-5.0pt;background:black;display:inline-block;"></span>
28</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal closed orbit displacement,</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">measured at monitors</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-5.0pt;background:black;display:inline-block;"></span>
29</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Vertical closed orbit displacement,</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">measured at monitors</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
30</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name, Random strength, misalignments and tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
31</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name, Random strength, misalignments and tilt</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
32</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary dump of full accelerator description</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
33</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Guess values for 6D closed orbit search</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
34</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Multipole strength and linear lattice
parameters <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
90 – k</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Tracking Data (not singletrackfile)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <math id="A3.T1.m6" class="ltx_Math" alttext="0&lt;=k&lt;=31" display="inline"><mrow><mn>0</mn><mo>≤</mo><mi>k</mi><mo>≤</mo><mn>31</mn></mrow></math>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-3.6pt;background:black;display:inline-block;"></span>
90</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Binary</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Tracking Data (singletrackfile)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">
            <span class="ltx_text ltx_font_typewriter">singletrackfile.dat</span>
          </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
92</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Checkpoint/Restart only:</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">Program “standard output” (lout)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
93</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Checkpoint/Restart only: Log file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
94</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Checkpoint/Restart only: Temp file for</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">resetting binary tracking data file(s)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
95</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Checkpoint/Restart only: Data file 1</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
96</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Checkpoint/Restart only: Data file 2</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
98</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">6D coordinates at Cavity (1p,6(2x,e25.18))</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
664</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">DYNK reading FUN FILE(LIN)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">(only during initialization)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
665</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">DYNK output file <span class="ltx_text ltx_font_typewriter">dynksets.dat</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
2001001</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">FMA output file <span class="ltx_text ltx_font_typewriter">fma_sixtrack</span>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
<span class="ltx_rule" style="width:0.0pt;height:28.5pt;position:relative; bottom:-10.7pt;background:black;display:inline-block;"></span>
200101+i*10</td>
<td class="ltx_td ltx_border_r ltx_border_t"></td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">X</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Ascii</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">FMA output file <span class="ltx_text ltx_font_typewriter">NORM_*</span>,</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r">
            <span class="ltx_rule" style="width:0.0pt;height:21.3pt;position:relative; bottom:-10.5pt;background:black;display:inline-block;"></span>
          </td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_border_b ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r">where <math id="A3.T1.m7" class="ltx_Math" alttext="i=1,\ldots,\mathrm{number\ of\ FMAs}" display="inline"><mrow><mi>i</mi><mo>=</mo><mrow><mn id="XM270">1</mn><mo>,</mo><mi mathvariant="normal" id="XM271">…</mi><mo>,</mo><mrow id="XM272"><mpadded width="+5pt"><mi>number</mi></mpadded><mo>⁢</mo><mpadded width="+5pt"><mi>of</mi></mpadded><mo>⁢</mo><mi>FMAs</mi></mrow></mrow></mrow></math>
</td>
</tr>
</table>
</figure>
<div id="A3.p3" class="ltx_para">
<p class="ltx_p">In addition to those files listed in the table, DUMP uses arbitary file unit numbers as determined by the input file. The collimation module also uses many input/output files at various units, which are not listed here.</p>
</div>
</section>
<section id="A4" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix D </span>Data Structure of the Data–Files</h2>
<div id="A4.p1" class="ltx_para">
<p class="ltx_p">A common data structure for the programs MAD and SixTrack is agreed
on. Besides some minor differences this allows a straightforward
post–processing of data from either program. Each binary data–file
has a header which holds a description of the run with comments,
tracking parameters and 50 additional parameters for future purposes,
six of which are already specified in SixTrack.</p>
</div>
<figure id="A4.T1" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table D.1: </span>Header of the Binary Data–Files</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Data Type</span>
            </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Bytes</span>
            </td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Description</span>
            </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">80</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">General title of the run</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">80</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Additional title</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Date</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Time</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Character</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Program name</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">First particle in the file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Last particle in the file</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Total number of particles</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Code for dimensionality of phase space</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">1,2,4 are hor., vert. and longitudinal respectively</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Projected number of turns</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Vertical Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Longitudinal Tune</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">6 * 8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Closed Orbit vector</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">6 * 8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Dispersion vector</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">36 * 8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Six–dimensional transfer map</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" colspan="3">—– 50 additional parameters —–</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Maximum number of different seeds</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Actual seed number</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Starting value of the seed</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Number of turns in the reverse direction</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">(IBM only)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Correction–factor for the Lyapunov</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">(<math id="A4.T1.m1" class="ltx_Math" alttext="\sigma=s-v_{o}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Correction–factor for the Lyapunov</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_border_l ltx_border_r"></td>
<td class="ltx_td ltx_border_r"></td>
<td class="ltx_td ltx_align_center ltx_border_r">(<math id="A4.T1.m2" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math>)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Start turn number for ripple prolongation</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">43 * 8</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Dummies</td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
<div id="A4.p2" class="ltx_para">
<p class="ltx_p">Following this header the tracking data are written in n samples of
nine numbers preceded by the turn number. In the MAD format the number
of samples n is not restricted, whilst SixTrack writes only up to two
samples for the two particles for the Lyapunov–exponent method. Up to
64 particles (two per file) can be treated in the vectorised version
of SixTrack.</p>
</div>
<figure id="A4.T2" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table D.2: </span>Format of the Binary Data</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Data Type</span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Bytes</span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Description</span>
            </th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Turn number</th>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_left ltx_border_l ltx_border_r ltx_border_t" colspan="3">—– One or two samples of 9 values are
following —–</th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Integer</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">4</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Particle number</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Angular distance in phase space ( <math id="A4.T2.m1" class="ltx_Math" alttext="&lt;=1" display="inline"><mrow><mo id="XM273">&lt;</mo><mo id="XM274">=</mo><mn>1</mn></mrow></math> )</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">x (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
<math id="A4.T2.m2" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math> (mrad)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">y (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
<math id="A4.T2.m3" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math> (mrad)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Path–length (<math id="A4.T2.m4" class="ltx_Math" alttext="\sigma=s-v_{o}\times t" display="inline"><mrow><mi>σ</mi><mo>=</mo><mrow><mi>s</mi><mo>-</mo><mrow><msub><mi>v</mi><mi>o</mi></msub><mo>×</mo><mi>t</mi></mrow></mrow></mrow></math>) (mm)</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Relative momentum deviation <math id="A4.T2.m5" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathvariant="normal">Δ</mi><mo>⁢</mo><mi>p</mi></mrow><msub><mi>p</mi><mi>o</mi></msub></mfrac></math>
</td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">Float</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">8</td>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Energy (MeV)</td>
</tr>
</tbody>
</table>
</figure>
<div id="A4.p3" class="ltx_para">
<p class="ltx_p">Note that in case the “Single Track File” option is enabled at compile time, multiple of these files (normally one per particle pair) are interleaved in a single file.
This is done by writing first all headers in order (i.e. first the header for initial particle/final particle 1/2, then 3/4, 5/6 etc.) and then the same for the tracking data.
The “total number of particles” field can always be read from the first header record, which gives the number of header records present in the file.
The two file formats are equivalent, i.e. they contain exactly the same data, and it is thus possible to convert losslessly between them.</p>
</div>
<div id="A4.p4" class="ltx_para">
<p class="ltx_p">Some of the post–processing data are written in Ascii–format on file
# 10. This can be used for instance for plotting purposes. Each time
the post–processing routine is called 60 double precision numbers
(some of them still dummy) are added to the file.</p>
</div>
<div id="A4.p5" class="ltx_para">
<p class="ltx_p">The file with the errors (in: fort.16, out: fort.9) has the following
format: first line – name of element; line 2–7 – normal multipoles
order 1–18; line 8 – normal multipoles of order 19 and 20; line
9–14 – skew multipoles order 1–18; line 15 – skew multipoles of
order 19 and 20. The strength definition is according to
block <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a> and to be effective in fort.3 the random values of
the corresponding multipole block have to be set to 1.0. A word of
caution: when writing on file fort.9 the <span class="ltx_text ltx_font_italic">total</span> multipole
strength is used, i.e. systematic and random part combined. File
fort.16 and fort.9 might therefore be different. When using fort.9 as
input (fort.16) the systematic part in fort.3 has to be set to 0.0.</p>
</div>
<div id="A4.p6" class="ltx_para">
<p class="ltx_p">Misalignment and tilt are in file # 8 and # 27 as input and output
respectively. The format is (a16,2x,1p,2d14.6,d17.9), i.e. name,
horizontal misalignment, vertical misalignment and tilt. The
misalignment is in units of [mm] the tilt in units of [mrad]. The
files # 30 (in) and # 31 (out) have the random single nonlinear
element kick, misalignments and tilt in the format:
(a8,1p,d19.11,2d14.6,d17.9). Misalignment and tilt in file fort.8 or
fort.30 is automatically activated while the random strength (strength
definition same as in block <a href="#Ch3.S2.SS1" title="3.2.1 Single Elements ‣ 3.2 Machine Geometry ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.1</span></a>) needs an entry in the fourth
column in the geometry file fort.2. File # 28 and # 29 hold integer
counter and closed orbit displacement at a horizontal or vertical
monitor respectively.</p>
</div>
<figure id="A4.T3" class="ltx_table">
<figcaption class="ltx_caption ltx_centering" style="font-size:90%;"><span class="ltx_tag ltx_tag_table">Table D.3: </span>Post–processing Data</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="font-size:90%;"># of Column</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold" style="font-size:90%;">Description</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
1</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum turn number</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
2</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Stability Flag (0=stable, 1=lost)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
3</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal Tune</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
4</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical Tune</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
5</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal </span>
              <math id="A4.T3.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>
              <span class="ltx_text" style="font-size:90%;">–function</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
6</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical </span>
              <math id="A4.T3.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>
              <span class="ltx_text" style="font-size:90%;">–function</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
7</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal amplitude </span>
              <math id="A4.T3.m3" class="ltx_Math" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
8</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical amplitude </span>
              <math id="A4.T3.m4" class="ltx_Math" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">9</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Relative momentum deviation
</span>
              <span class="ltx_text" style="font-size:90%;">
                <math id="A4.T3.m5" class="ltx_Math" alttext="\frac{\Delta p}{p_{o}}" display="inline"><mfrac><mrow><mi mathsize="111%" mathvariant="normal" stretchy="false">Δ</mi><mo mathsize="90%" stretchy="false">⁢</mo><mi mathsize="111%" stretchy="false">p</mi></mrow><msub><mi mathsize="111%" stretchy="false">p</mi><mi mathsize="111%" stretchy="false">o</mi></msub></mfrac></math>
              </span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
10</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Final distance in phase space</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
11</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum slope of distance in phase space</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
12</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal detuning</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
13</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Spread of horizontal detuning</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
14</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical detuning</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
15</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Spread of vertical detuning</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
16</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal factor to nearest resonance</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
17</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical factor to nearest resonance</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
18</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Order of nearest resonance</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
19</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal smear</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
20</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical smear</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
21</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Transverse smear</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
22</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Survived turns </span>
              <math id="A4.T3.m6" class="ltx_Math" alttext="1^{st}" display="inline"><msup><mn>1</mn><mrow><mi>s</mi><mo>⁢</mo><mi>t</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
23</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Survived turns </span>
              <math id="A4.T3.m7" class="ltx_Math" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
24</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Starting seed for random generator</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
25</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Synchrotron tune</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
26</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Horizontal amplitude </span>
              <math id="A4.T3.m8" class="ltx_Math" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
27</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Vertical amplitude </span>
              <math id="A4.T3.m9" class="ltx_Math" alttext="2^{nd}" display="inline"><msup><mn>2</mn><mrow><mi>n</mi><mo>⁢</mo><mi>d</mi></mrow></msup></math>
              <span class="ltx_text" style="font-size:90%;"> particle</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
28</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum horizontal amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
29</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean horizontal amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
30</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum horizontal amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
31</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum vertical amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
32</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean vertical amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
33</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum vertical amplitude</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
34</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum horizontal amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
35</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean horizontal amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
36</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum horizontal amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
37</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum vertical amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
38</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean vertical amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
39</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum vertical amplitude (linear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
40</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum horizontal amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
41</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean horizontal amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
42</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum horizontal amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
43</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Minimum vertical amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
44</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Mean vertical amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
45</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Maximum vertical amplitude (nonlinear decoupled)</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
46</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Emittance Mode I</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
47</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Emittance Mode II</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
48</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Secondary horizontal </span>
              <math id="A4.T3.m10" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>
              <span class="ltx_text" style="font-size:90%;">–function</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
49</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Secondary vertical </span>
              <math id="A4.T3.m11" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>
              <span class="ltx_text" style="font-size:90%;">–function</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
50</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T3.m12" class="ltx_Math" alttext="Q^{\prime}_{x}" display="inline"><msubsup><mi>Q</mi><mi>x</mi><mo>′</mo></msubsup></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
51</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T3.m13" class="ltx_Math" alttext="Q^{\prime}_{y}" display="inline"><msubsup><mi>Q</mi><mi>y</mi><mo>′</mo></msubsup></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">
52 – 58</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Dummy</span>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">59 – 60</span>
            </th>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
              <span class="ltx_text" style="font-size:90%;">Internal use</span>
            </td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
<div id="A4.p7" class="ltx_para">
<p class="ltx_p">As an option the 4D linear parameters can be dumped to file # 11 when
the linear optics block <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a> is activated. This can be used
for instance for a post–processing of linear coupling. 25 values are
written in a binary format.</p>
</div>
<figure id="A4.T4" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table D.4: </span>4D Linear Parameters</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold"># of Column</span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Description</span>
            </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name of the element</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Longitudinal Position [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal phase advance</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Vertical phase advance</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary horizontal <math id="A4.T4.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary horizontal <math id="A4.T4.m2" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
7</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary vertical <math id="A4.T4.m3" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
8</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary vertical <math id="A4.T4.m4" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
9</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary horizontal <math id="A4.T4.m5" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
10</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary horizontal <math id="A4.T4.m6" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
11</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary vertical <math id="A4.T4.m7" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
12</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary vertical <math id="A4.T4.m8" class="ltx_Math" alttext="\alpha" display="inline"><mi>α</mi></math>–function [rad]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
13</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary horizontal <math id="A4.T4.m9" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
14</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary horizontal <math id="A4.T4.m10" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
15</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary vertical <math id="A4.T4.m11" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
16</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary vertical <math id="A4.T4.m12" class="ltx_Math" alttext="\gamma" display="inline"><mi>γ</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
17</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary horizontal phase of x–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
18</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary horizontal phase of x–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
19</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary vertical phase of y–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
20</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary vertical phase of y–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
21</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary horizontal phase of <math id="A4.T4.m13" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
22</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary horizontal phase of <math id="A4.T4.m14" class="ltx_Math" alttext="x^{\prime}" display="inline"><msup><mi>x</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
23</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Secondary vertical phase of <math id="A4.T4.m15" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
24</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Primary vertical phase of <math id="A4.T4.m16" class="ltx_Math" alttext="y^{\prime}" display="inline"><msup><mi>y</mi><mo>′</mo></msup></math>–coordinate [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
25</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Coupling angle [pi]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
26</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
<math id="A4.T4.m17" class="ltx_Math" alttext="D_{x}" display="inline"><msub><mi>D</mi><mi>x</mi></msub></math> [mm]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
27</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
<math id="A4.T4.m18" class="ltx_Math" alttext="D^{\prime}_{x}" display="inline"><msubsup><mi>D</mi><mi>x</mi><mo>′</mo></msubsup></math> [mrad]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
28</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
<math id="A4.T4.m19" class="ltx_Math" alttext="D_{y}" display="inline"><msub><mi>D</mi><mi>y</mi></msub></math> [mm]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
29</th>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
<math id="A4.T4.m20" class="ltx_Math" alttext="D^{\prime}_{y}" display="inline"><msubsup><mi>D</mi><mi>y</mi><mo>′</mo></msubsup></math> [mrad]</td>
</tr>
</tbody>
</table>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
<div id="A4.p8" class="ltx_para">
<p class="ltx_p">When external multipole errors are read–in (see section <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>)
the program expects a complete list of magnet errors on file # 16.
The format of each set of multipole errors is given in
table <a href="#A4.T5" title="Table D.5 ‣ Appendix D Data Structure of the Data–Files" class="ltx_ref"><span class="ltx_text ltx_ref_tag">D.5</span></a>. The definition of the multipole coefficients should
be as described in section <a href="#Ch3.S3.SS1" title="3.3.1 Multipole Coefficients ‣ 3.3 Special Elements ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>.</p>
</div>
<figure id="A4.T5" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table D.5: </span>Format of file with external errors # 16 and internal errors
written to # 9</figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold"># of Row</span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Description</span>
            </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Name of multipole set</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m1" class="ltx_Math" alttext="B_{1}\ B_{2}\ B_{3}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>1</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>3</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m2" class="ltx_Math" alttext="B_{4}\ B_{5}\ B_{6}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>5</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>6</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m3" class="ltx_Math" alttext="B_{7}\ B_{8}\ B_{9}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>7</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>8</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>9</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m4" class="ltx_Math" alttext="B_{10}\ B_{11}\ B_{12}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>10</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>11</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>12</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m5" class="ltx_Math" alttext="B_{13}\ B_{14}\ B_{15}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>13</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>14</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>15</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
7</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m6" class="ltx_Math" alttext="B_{16}\ B_{17}\ B_{18}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>16</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>B</mi><mn>17</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>18</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
8</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m7" class="ltx_Math" alttext="B_{19}\ B_{20}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>B</mi><mn>19</mn></msub></mpadded><mo>⁢</mo><msub><mi>B</mi><mn>20</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
9</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m8" class="ltx_Math" alttext="A_{1}\ A_{2}\ A_{3}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>1</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>2</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>3</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
10</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m9" class="ltx_Math" alttext="A_{4}\ A_{5}\ A_{6}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>4</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>5</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>6</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
11</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m10" class="ltx_Math" alttext="A_{7}\ A_{8}\ A_{9}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>7</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>8</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>9</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
12</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m11" class="ltx_Math" alttext="A_{10}\ A_{11}\ A_{12}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>10</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>11</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>12</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
13</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m12" class="ltx_Math" alttext="A_{13}\ A_{14}\ A_{15}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>13</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>14</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>15</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
14</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <math id="A4.T5.m13" class="ltx_Math" alttext="A_{16}\ A_{17}\ A_{18}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>16</mn></msub></mpadded><mo>⁢</mo><mpadded width="+5pt"><msub><mi>A</mi><mn>17</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>18</mn></msub></mrow></math>
            </td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
15</th>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">
              <math id="A4.T5.m14" class="ltx_Math" alttext="A_{19}\ A_{20}" display="inline"><mrow><mpadded width="+5pt"><msub><mi>A</mi><mn>19</mn></msub></mpadded><mo>⁢</mo><msub><mi>A</mi><mn>20</mn></msub></mrow></math>
            </td>
</tr>
</tbody>
</table>
</figure>
<div id="A4.p9" class="ltx_para">
<p class="ltx_p">With the parameter “mout” set to 2 or 3 in the “Random
Fluctuation” block ( <a href="#Ch3.S4.SS1" title="3.4.1 Random Fluctuation Starting Number ‣ 3.4 Organising Tasks ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.4.1</span></a>) the internally used multipoles are
written to file # 9 in the same format as above. This file can
therefore be used as an input fort.16 file for a subsequent run.</p>
</div>
<div id="A4.p10" class="ltx_para">
<p class="ltx_p">The file # 34 is written when the “Linear Optic Block” (see
section <a href="#Ch3.S5.SS1" title="3.5.1 Linear Optics Calculation ‣ 3.5 Processing ‣ Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.5.1</span></a>) is invoked with the “ELEMENT 0” option.</p>
</div>
<figure id="A4.T6" class="ltx_table">
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_table">Table D.6: </span>Format of file # 34 for detuning and distortion calculation
with external program “SODD” <cite class="ltx_cite">[<a href="#bib.bib21" title="" class="ltx_ref">21</a>]</cite></figcaption>
<table class="ltx_tabular ltx_centering ltx_align_middle">
<thead class="ltx_thead">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold"># of Column</span>
            </th>
<th class="ltx_td ltx_align_center ltx_border_r ltx_border_t">
              <span class="ltx_text ltx_font_bold">Description</span>
            </th>
</tr>
</thead>
<tbody class="ltx_tbody">
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
1</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Longitudinal position [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
2</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Type “n” of Multipole (<math id="A4.T6.m1" class="ltx_Math" alttext="n&gt;" display="inline"><mrow><mi>n</mi><mo>&gt;</mo><mi></mi></mrow></math> 0 <math id="A4.T6.m2" class="ltx_Math" alttext="=&gt;" display="inline"><mrow><mi></mi><mo>=</mo><mo>&gt;</mo></mrow></math> erect, <math id="A4.T6.m3" class="ltx_Math" alttext="n&lt;" display="inline"><mrow><mi>n</mi><mo>&lt;</mo><mi></mi></mrow></math> 0 <math id="A4.T6.m4" class="ltx_Math" alttext="=&gt;" display="inline"><mrow><mi></mi><mo>=</mo><mo>&gt;</mo></mrow></math>
skew)</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
3</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Multipole strength [<math id="A4.T6.m5" class="ltx_Math" alttext="\mathrm{mrad}\cdot\mathrm{mm}^{(1-|n|)}" display="inline"><mrow><mi>mrad</mi><mo>⋅</mo><msup><mi>mm</mi><mrow><mo stretchy="false">(</mo><mrow id="XM276"><mn>1</mn><mo>-</mo><mrow><mo stretchy="false">|</mo><mi id="XM275">n</mi><mo stretchy="false">|</mo></mrow></mrow><mo stretchy="false">)</mo></mrow></msup></mrow></math>]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
4</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal <math id="A4.T6.m6" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
5</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Vertical <math id="A4.T6.m7" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math>–function [m]</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_l ltx_border_r ltx_border_t">
6</th>
<td class="ltx_td ltx_align_center ltx_border_r ltx_border_t">Horizontal phase advance</td>
</tr>
<tr class="ltx_tr">
<th class="ltx_td ltx_align_center ltx_border_b ltx_border_l ltx_border_r ltx_border_t">
7</th>
<td class="ltx_td ltx_align_center ltx_border_b ltx_border_r ltx_border_t">Vertical phase advance</td>
</tr>
</tbody>
</table>
</figure>
<div id="A4.p11" class="ltx_para">
<p class="ltx_p">The last line serves as the end of the structure: Length of the
accelerator, fake name “END”, fake type “100”, <math id="A4.p11.m1" class="ltx_Math" alttext="\beta" display="inline"><mi>β</mi></math> functions
and phase advances at the end of the accelerator for the horizontal
and vertical plane respectively.</p>
</div>
</section>
<section id="A5" class="ltx_appendix">
<h2 class="ltx_title ltx_title_appendix">
<span class="ltx_tag ltx_tag_appendix">Appendix E </span>Tracking Examples</h2>
<div id="A5.p1" class="ltx_para">
<p class="ltx_p">A simple tracking example is shown with its input file ( <a href="#A5.S1" title="E.1 Input Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.1</span></a>),
its output file ( <a href="#A5.S2" title="E.2 Output Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.2</span></a>) and some corresponding plots in
( <a href="#A5.S3" title="E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.3</span></a>).</p>
</div>
<section id="A5.S1" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">E.1 </span>Input Example</h3>
<div id="A5.S1.p1" class="ltx_para">
<p class="ltx_p">For the description of the different input blocks see
chapter <a href="#Ch3" title="Chapter 3 Input Structure" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>.</p>
</div>
<figure id="A5.S1.fig1" class="ltx_figure"><img src="x4.png" id="A5.S1.g1" class="ltx_graphics ltx_centering" width="708" height="798" alt="">
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="A5.S2" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">E.2 </span>Output Example</h3>
<div id="A5.S2.p1" class="ltx_para">
<p class="ltx_p">The preprocessing part is shown first.</p>
</div>
<figure id="A5.S2.fig1" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x5.png" id="A5.S2.g1" class="ltx_graphics" width="709" height="289" alt=""></p>
</figure>
<div id="A5.S2.p2" class="ltx_para">
<p class="ltx_p">Followed by the initial coordinates and the final coordinates for a
regular (right side) and chaotic (left side) case.</p>
</div>
<figure id="A5.S2.fig2" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x6.png" id="A5.S2.g2" class="ltx_graphics" width="710" height="577" alt=""></p>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
<div id="A5.S2.p3" class="ltx_para">
<p class="ltx_p">Finally part of the post–processing for the two particles are shown
(chaotic on the left and regular on the right respectively) and a
summary of the post–processing is given.</p>
</div>
<figure id="A5.S2.fig3" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x7.png" id="A5.S2.g3" class="ltx_graphics" width="709" height="932" alt=""></p>
</figure>
<div class="ltx_pagination ltx_role_newpage"></div>
</section>
<section id="A5.S3" class="ltx_section">
<h3 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">E.3 </span>Plot Example</h3>
<div id="A5.S3.p1" class="ltx_para">
<p class="ltx_p"><span class="ltx_text" style="font-size:90%;">In figure <a href="#A5.F1" title="Figure E.1 ‣ E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.1</span></a> a typical example of the evolution of the
distance in phase space is shown of a regular and chaotic particle.
Figure <a href="#A5.F2" title="Figure E.2 ‣ E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.2</span></a> and figure <a href="#A5.F3" title="Figure E.3 ‣ E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.3</span></a> show the corresponding
horizontal phase space and the physical phase space projections
respectively. An example of the stroboscoped phase space is shown in
figure <a href="#A5.F4" title="Figure E.4 ‣ E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.4</span></a>, where the motion in the chaotic case is beyond
a “separatrix” in the four–dimensional phase space. Even in the
FFT (figure <a href="#A5.F5" title="Figure E.5 ‣ E.3 Plot Example ‣ Appendix E Tracking Examples" class="ltx_ref"><span class="ltx_text ltx_ref_tag">E.5</span></a>) one can see the effect of chaotic
behaviour: it leads to a widening of the lines of the spectrum.</span></p>
</div>
<figure id="A5.F1" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x8.png" id="A5.F1.g1" class="ltx_graphics" width="399" height="385" alt=""></p>
<p class="ltx_p ltx_align_center">[5mm]
<img src="x9.png" id="A5.F1.g2" class="ltx_graphics" width="399" height="385" alt="">
</p>
<figcaption class="ltx_caption ltx_centering">
          <span class="ltx_tag ltx_tag_figure">Figure E.1: </span>
          <span class="ltx_text" style="font-size:90%;">Evolution of the Distance of Phase Space for Regular
(upper part) and Chaotic (lower part) Motion.</span>
        </figcaption>
</figure>
<figure id="A5.F2" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x10.png" id="A5.F2.g1" class="ltx_graphics" width="467" height="445" alt=""></p>
<p class="ltx_p ltx_align_center">[5mm]
<img src="x11.png" id="A5.F2.g2" class="ltx_graphics" width="464" height="446" alt=""></p>
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure E.2: </span>Horizontal Phase Space Projections for the
Regular (upper part) and the Chaotic (lower part) Cases.</figcaption>
</figure>
<figure id="A5.F3" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x12.png" id="A5.F3.g1" class="ltx_graphics" width="467" height="448" alt=""></p>
<p class="ltx_p ltx_align_center">[5mm]
<img src="x13.png" id="A5.F3.g2" class="ltx_graphics" width="464" height="448" alt=""></p>
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure E.3: </span>Physical Phase Space Projections for the Regular
(upper part) and the Chaotic (lower part) Cases.</figcaption>
</figure>
<figure id="A5.F4" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x14.png" id="A5.F4.g1" class="ltx_graphics" width="466" height="450" alt=""></p>
<p class="ltx_p ltx_align_center">[5mm]
<img src="x15.png" id="A5.F4.g2" class="ltx_graphics" width="467" height="446" alt=""></p>
<figcaption class="ltx_caption ltx_centering">
          <span class="ltx_tag ltx_tag_figure">Figure E.4: </span>
          <span class="ltx_text" style="font-size:90%;">Stroboscoped Vertical Phase Space Projections
for the Regular (upper part) and the Chaotic (lower part) Cases
respectively. The regular motion stays inside a “separatrix”
with two unstable fix–points visible, while the chaotic motion
is clearly outside this “separatrix”.</span>
        </figcaption>
</figure>
<figure id="A5.F5" class="ltx_figure">
<p class="ltx_p ltx_align_center"><img src="x16.png" id="A5.F5.g1" class="ltx_graphics" width="466" height="450" alt=""></p>
<p class="ltx_p ltx_align_center">[5mm]
<img src="x17.png" id="A5.F5.g2" class="ltx_graphics" width="466" height="450" alt=""></p>
<figcaption class="ltx_caption ltx_centering"><span class="ltx_tag ltx_tag_figure">Figure E.5: </span>Horizontal FFT–Analysis for the Regular (upper part)
and the Chaotic (lower part) Cases.</figcaption>
</figure>
</section>
</section>
<section id="bib" class="ltx_bibliography">
<h2 class="ltx_title ltx_title_bibliography">Bibliography</h2>
<ul class="ltx_biblist">
<li id="bib.bib1" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">1</span>
<span class="ltx_bibblock"> LBL diffential algebra package and LieLib routines
courtesy of É. Forest.
</span>
      </li>
<li id="bib.bib2" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">2</span>
<span class="ltx_bibblock"> G. Ripken and F. Schmidt, “A symplectic
six–dimensional thin–lens formalism for tracking”, CERN SL 95–12
(AP)(1995), DESY 95–063 (1995).
G. Ripken and F. Schmidt, “Construction of Nonlinear Symplectic
Six–Dimensional Thin–Lens Maps by Exponentiation”, DESY 95–189
(1995),
<span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Frank.Schmidt/report/ripken2.pdf
http://cern.ch/Frank.Schmidt/report/ripken2.pdf; D.P. Barber,
K. Heinemann, G. Ripken and F. Schmidt, “Symplectic Thin - Lens
Transfer Maps for SixTrack: Treatment of Bending Magnets in Terms of
the Exact Hamiltonian”, DESY 96–156 (1995),
<span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Frank.Schmidt/report/ripken3.pdf
http://cern.ch/Frank.Schmidt/report/ripken3.pdf.
</span>
      </li>
<li id="bib.bib3" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">3</span>
<span class="ltx_bibblock"> A. Wrulich, “RACETRACK, A computer code for the
simulation of nonlinear motion in accelerators”, DESY 84–026
(1984).
</span>
      </li>
<li id="bib.bib4" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">4</span>
<span class="ltx_bibblock"> B. Leemann and É. Forest, “Brief
description of the tracking codes FASTRAC and THINTRAC”, SSC Note
SSC–133.
</span>
      </li>
<li id="bib.bib5" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">5</span>
<span class="ltx_bibblock"> G. Ripken, “Nonlinear canonical
equations of coupled synchro–betatron motion and their solution
within the framework of a nonlinear 6–dimensional (symplectic)
tracking program for ultra–relativistic protons”, DESY 85–084
(1985).
</span>
      </li>
<li id="bib.bib6" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">6</span>
<span class="ltx_bibblock"> D.P. Barber, G. Ripken and F. Schmidt,
“A nonlinear canonical formalism for the coupled
synchro–betatron motion of protons with arbitrary energy”, DESY
87–036 (1987); G. Ripken and F. Schmidt, “A symplectic
six–dimensional thin–lens formalism for tracking”, CERN/SL/95–12
(AP), DESY 95–063 (1995),
<span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Frank.Schmidt/report/ripken.pdf
http://cern.ch/Frank.Schmidt/report/ripken.pdf; K. Heinemann,
</span>
      </li>
<li id="bib.bib7" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">7</span>
<span class="ltx_bibblock">
R. Brun and D. Lienart, “HBOOK User Guide”, CERN Program Library
Y250 (1987).
</span>
      </li>
<li id="bib.bib8" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">8</span>
<span class="ltx_bibblock"> R. Brun and N.C. Somon, “HPLOT User
Guide”, CERN Program Library Y251 (1988).
</span>
      </li>
<li id="bib.bib9" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">9</span>
<span class="ltx_bibblock"> R. Bock,
R. Brun, O. Couet, N.C. Somon, C.E. Vandoni and P. Zanarini, “HIGZ
User Guide”, CERN Program Library Q120.
</span>
      </li>
<li id="bib.bib10" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">10</span>
<span class="ltx_bibblock">
G. Guignard, “A general treatment of resonances in accelerators”,
CERN 78–11 (1978).
</span>
      </li>
<li id="bib.bib11" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">11</span>
<span class="ltx_bibblock"> M. Berz, “Differential
algebra description of beam dynamics to very high orders”, Particle
Accelerators, 1989, Vol. <span class="ltx_text" style="text-decoration:underline;">24</span>, pp. 109–124.
</span>
      </li>
<li id="bib.bib12" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">12</span>
<span class="ltx_bibblock"> M. Berz, “DAFOR – Differential Algebra Precompiler
Version 3, Reference Manual”, MSUCL–755 (1991).
</span>
      </li>
<li id="bib.bib13" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">13</span>
<span class="ltx_bibblock"> F. Schmidt and M. Vaenttinen, “Vectorisation of the
single particle tracking program SixTrack”, CERN SL Note 90–20
(1990) (AP).
</span>
      </li>
<li id="bib.bib14" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">14</span>
<span class="ltx_bibblock"> F. Schmidt, “Untersuchungen zur dynamischen
Akzeptanz von Protonenbeschleunigern und ihre Begrenzung durch
chaotische Bewegung”, DESY HERA 88–02, (1988).
</span>
      </li>
<li id="bib.bib15" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">15</span>
<span class="ltx_bibblock"> H. Grote, “A MAD–SixTrack interface”, SL Note
97–02 (AP).
</span>
      </li>
<li id="bib.bib16" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">16</span>
<span class="ltx_bibblock"> SixTrack Physics Manual, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib17" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">17</span>
<span class="ltx_bibblock"> M. Berz, É. Forest
and J. Irwin, “Normal form methods for complicated periodic
systems: a complete solution using differential algebra and lie
operators”, Particle Accelerators, 1989, Vol. <span class="ltx_text" style="text-decoration:underline;">24</span>, pp.
91–107.
</span>
      </li>
<li id="bib.bib18" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">18</span>
<span class="ltx_bibblock"> M. Bassetti and G.A. Erskine,
“Closed expression for the electrical field of a two–dimensional
Gaussian charge”, CERN–ISR–TH/80–06.
</span>
      </li>
<li id="bib.bib19" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">19</span>
<span class="ltx_bibblock"> K. Hirata, H. Moshammer, F. Ruggiero and M. Bassetti,
“Synchro-Beam interaction”, CERN SL-AP/90-02 (1990) and Proc.
Workshop on Beam Dynamics Issues of High-Luminosity Asymmetric
Collider Rings, Berkeley, 1990, ed. A.M. Sessler (AIP Conf. Proc.
214, New York, 1990), pp. 389-404;
<br class="ltx_break">K. Hirata, H. Moshammer and F. Ruggiero, “A symplectic beam-beam
interaction with energy change”, KEK preprint 92-117 A (1992) and
Part. Accel. 40, 205-228 (1993);
<br class="ltx_break">K. Hirata, “BBC User’s Guide; A Computer Code for Beam-Beam Interaction
with a Crossing Angle, version 3.4”, SL-Note 97-57 AP.
</span>
      </li>
<li id="bib.bib20" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">20</span>
<span class="ltx_bibblock"> L.H.A. Leunissen, F. Schmidt and G. Ripken, “6D
Beam–Beam Kick including Coupled Motion”, LHC Project Report 369,
<span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Frank.Schmidt/report/ripken_new.pdf
http://cern.ch/Frank.Schmidt/report/ripken_new.pdf.
</span>
      </li>
<li id="bib.bib21" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">21</span>
<span class="ltx_bibblock"> F. Schmidt, “SODD:
<br class="ltx_break">A Computer Code to calculate
Detuning and Distortion Function Terms in First and Second Order”,
CERN SL/Note 99–009 (AP),
<span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Frank.Schmidt/report/sodd_manual.pdf
http://cern.ch/Frank.Schmidt/report/sodd_manual.pdf.
</span>
      </li>
<li id="bib.bib22" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">22</span>
<span class="ltx_bibblock">
H. Grote and F.C. Iselin, “The MAD program (Methodical Accelerator
Design), Version 8.10, User’s Reference Manual”, CERN SL 90–13
(AP) (Rev. 4)
<br class="ltx_break"><span class="ltx_ERROR undefined">\htmladdnormallink</span>http://cern.ch/Hans.Grote/mad/mad8/doc/mad8_user.ps.gz
http://cern.ch/Hans.Grote/mad/mad8/doc/mad8_user.ps.gz.
</span>
      </li>
<li id="bib.bib23" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">23</span>
<span class="ltx_bibblock">
R. Molloy and S. Blitz, “Fringe Field Effects on Bending Magnets, Derived for,
TRANSPORT/TURTLE”, FERMILAB-TM-2564-AD-APC-PPD
<a href="http://lss.fnal.gov/archive/test-tm/2000/fermilab-tm-2564-ad-apc-ppd.pdf" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://lss.fnal.gov/archive/test-tm/2000/fermilab-tm-2564-ad-apc-ppd.pdf</span></a>
</span>
      </li>
<li id="bib.bib24" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">24</span>
<span class="ltx_bibblock"> private communication.
</span>
      </li>
<li id="bib.bib25" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">25</span>
<span class="ltx_bibblock"> F. James, “A review of
pseudo–random number generators”, to be published in Computer
Physics Communication.
</span>
      </li>
<li id="bib.bib26" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">26</span>
<span class="ltx_bibblock"> B. Autin and Y. Marti, “Closed Orbit Correction of
A.G. Machines Using a Small Number of Magnets”,
CERN–ISR–MA/73–17.
</span>
      </li>
<li id="bib.bib27" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">27</span>
<span class="ltx_bibblock"> M. Giovannozzi,
“Description of software tools to perform tune–shift correction
using normal forms”, CERN SL Note 93–111 (AP).
</span>
      </li>
<li id="bib.bib28" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">28</span>
<span class="ltx_bibblock"> F. Schmidt, F. Willeke and F. Zimmermann,
“Comparison of methods to determine long–term stability in proton
storage rings”, 1991, Particle Accelerators, Vol. <span class="ltx_text" style="text-decoration:underline;">35</span>,
pp. 249–256.
</span>
      </li>
<li id="bib.bib29" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">29</span>
<span class="ltx_bibblock"> R. Bartolini, A. Bazzani, M. Giovannozzi, W. Scandale, E. Todesco,“Tune evaluation in simulations and experiments”,Part. Accel. 52 147
</span>
      </li>
<li id="bib.bib30" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">30</span>
<span class="ltx_bibblock"> M. Giovannozzi, E. Todesco, A. Bazzani and R. Bartolini (1997). “PLATO: a program library for the analysis of nonlinear betatronic motion”, Nucl. Instrum. and Methods A 388 1
</span>
      </li>
<li id="bib.bib31" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">31</span>
<span class="ltx_bibblock"> J. Laskar, C. Froeschle and C. Celletti,
“The measure of chaos by the numerical analysis of the fundamental frequencies. Application to the standard mapping”,
Physica D, vol. 56, pp 253-269, 1992.
</span>
      </li>
<li id="bib.bib32" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">32</span>
<span class="ltx_bibblock"> S. Kostoglou, N. Karastathis, Y. Papaphilippou, D. Pellegrini and P. Zisopoulos,
“Development of computational tools for noise studies in the LHC”,
2017, Proceedings of IPAC’17, Copenhagen, Denmark, 2017.
</span>
      </li>
<li id="bib.bib33" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">33</span>
<span class="ltx_bibblock"> SixTrack build manual, see SixTrack website, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib34" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">34</span>
<span class="ltx_bibblock"> SixDesk manual, see SixTrack website, <a href="http://sixtrack.web.cern.ch/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://sixtrack.web.cern.ch/SixTrack/</span></a>
</span>
      </li>
<li id="bib.bib35" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">35</span>
<span class="ltx_bibblock"> SixDesk manual, <a href="https://www.overleaf.com/1345694dwypbp#/3325092/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://www.overleaf.com/1345694dwypbp#/3325092/</span></a>
</span>
      </li>
<li id="bib.bib36" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">36</span>
<span class="ltx_bibblock"> J. B. Garcia et al.,
“Long term dynamics of the high luminosity Large Hadron Collider with crab cavities”,
2016, PHYSICAL REVIEW ACCELERATORS AND BEAMS 19, 101003 (2016).
</span>
      </li>
<li id="bib.bib37" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">37</span>
<span class="ltx_bibblock"> K. Sjobak, H. Burkhardt, R.D. Maria, A. Mereghetti and A. Santamaria,
“General functionality for turn-dependent element properties in SixTrack”
2015, Procedings of IPAC’13, Richmond, VA, USA, May 2015.
</span>
      </li>
<li id="bib.bib38" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">38</span>
<span class="ltx_bibblock"> S. Russenschuck,
“Field computation for Accelerator Magnets”,
Wiley-VCH, 2010
</span>
      </li>
<li id="bib.bib39" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">39</span>
<span class="ltx_bibblock"> P. Burla, Q. King and J.G. Pett,
“Optimisation of the current ramp for the LHC”,
Proceedings of the 1999 Particle Accelerator Conference, New York, 1999.
</span>
      </li>
</ul>
</section>
</article>
<aside>
    <?php include_once($incPath.'/aside_manual.php'); ?>
</aside>
<?php
    require_once($incPath.'/footer.php');
?>
