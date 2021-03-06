<?php
    $bMain  = true;
    $sHead  = '<!--Generated on Fri Feb 23 09:11:18 2018 by LaTeXML (version 0.8.1) http://dlmf.nist.gov/LaTeXML/.-->
<!--Document created on Jan. 2017.-->
<link rel="stylesheet" href="LaTeXML.css" type="text/css">
<link rel="stylesheet" href="ltx-article.css" type="text/css">
<link rel="stylesheet" href="ltx-listings.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" type="text/javascript"></script>
';
    $sHead .= '<link rel="stylesheet" href="/SixTrack/web/css/latexml-fix.css" type="text/css">
';
    require_once('../../includes/header.php');
?>
<article id='manual' class='ltx_document'>
<div id='generator'>Generated on Fri Feb 23 09:11:18 2018 by <a href='http://dlmf.nist.gov/LaTeXML/'>LaTeXML</a> (version 0.8.1)</div>
<h1 class="ltx_title ltx_title_document">Compiling, building, and testing SixTrack</h1>
<div class="ltx_authors">
<span class="ltx_creator ltx_role_author">
<span class="ltx_personname">K. Sjobak
</span></span>
<span class="ltx_author_before">  </span><span class="ltx_creator ltx_role_author">
<span class="ltx_personname"> J. Molson
</span></span>
</div>
<div class="ltx_date ltx_role_creation">Jan. 2017</div>
<div class="ltx_abstract">
<h6 class="ltx_title ltx_title_abstract">Abstract</h6>
<p class="ltx_p">The SixTrack code supports a wide variety of compile time options, compilers, and build environments.
Further, many of these options require various libraries to be present, some of which must be built by the user.
This document presents what is supported, and how to build the most common versions.
Furthermore, an important sub-task of building SixTrack is to test that the built binary is correct; this is also described.</p>
</div>
<h6>Contents:</h6>
<ul class="ltx_toclist">
<li class="ltx_tocentry"><a href="#S1" title="1 Downloading SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">1 </span>Downloading SixTrack</span></a></li>
<li class="ltx_tocentry">
<a href="#S2" title="2 Contributing to SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2 </span>Contributing to SixTrack</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#S2.SS1" title="2.1 Configuring your GIT client and GitHub account ‣ 2 Contributing to SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">2.1 </span>Configuring your GIT client and GitHub account</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3" title="3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3 </span>Building SixTrack</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry">
<a href="#S3.SS1" title="3.1 Supported compilers ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1 </span>Supported compilers</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS1.SSS1" title="3.1.1 gfortran and gcc ‣ 3.1 Supported compilers ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.1 </span>gfortran and gcc</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS1.SSS2" title="3.1.2 ifort and icc/icpc ‣ 3.1 Supported compilers ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.1.2 </span>ifort and icc/icpc</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3.SS2" title="3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2 </span>Common build types</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS2.SSS1" title="3.2.1 Standard build ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.1 </span>Standard build</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS2" title="3.2.2 Collimation ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.2 </span>Collimation</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS3" title="3.2.3 Checkpoint/restart ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.3 </span>Checkpoint/restart</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS4" title="3.2.4 BOINC support ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.4 </span>BOINC support</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS5" title="3.2.5 Increased particle numbers ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.5 </span>Increased particle numbers</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS2.SSS6" title="3.2.6 DA (differential algebra) ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.2.6 </span>DA (differential algebra)</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3.SS3" title="3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3 </span>Libraries</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS3.SSS1" title="3.3.1 Automatic building of ‘‘external’’ libraries ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.1 </span>Automatic building of ‘‘external’’ libraries</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS2" title="3.3.2 CRLIBM ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.2 </span>CRLIBM</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS3" title="3.3.3 MerlinScatter ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.3 </span>MerlinScatter</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS4" title="3.3.4 HDF5 ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.4 </span>HDF5</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS5" title="3.3.5 BOINC ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.5 </span>BOINC</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS6" title="3.3.6 zlib ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.6 </span>zlib</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS7" title="3.3.7 libarchive ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.7 </span>libarchive</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS8" title="3.3.8 NAGLIB ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.8 </span>NAGLIB</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS3.SSS9" title="3.3.9 NAFF ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.3.9 </span>NAFF</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S3.SS4" title="3.4 Building on platforms other than Linux ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4 </span>Building on platforms other than Linux</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S3.SS4.SSS1" title="3.4.1 Building on OS X ‣ 3.4 Building on platforms other than Linux ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.1 </span>Building on OS X</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS4.SSS2" title="3.4.2 Building on Windows ‣ 3.4 Building on platforms other than Linux ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.4.2 </span>Building on Windows</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S3.SS5" title="3.5 Legacy build environments ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.5 </span>Legacy build environments</span></a></li>
<li class="ltx_tocentry"><a href="#S3.SS6" title="3.6 Running cmake directly ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">3.6 </span>Running cmake directly</span></a></li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S4" title="4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4 </span>Organization of the SixTrack sources</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry"><a href="#S4.SS1" title="4.1 Coding standards ‣ 4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.1 </span>Coding standards</span></a></li>
<li class="ltx_tocentry">
<a href="#S4.SS2" title="4.2 Tools ‣ 4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2 </span>Tools</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S4.SS2.SSS1" title="4.2.1 Astuce ‣ 4.2 Tools ‣ 4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2.1 </span>Astuce</span></a></li>
<li class="ltx_tocentry"><a href="#S4.SS2.SSS2" title="4.2.2 DAFOR ‣ 4.2 Tools ‣ 4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2.2 </span>DAFOR</span></a></li>
<li class="ltx_tocentry"><a href="#S4.SS2.SSS3" title="4.2.3 The ‘‘beauty’’ linters ‣ 4.2 Tools ‣ 4 Organization of the SixTrack sources ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">4.2.3 </span>The ‘‘beauty’’ linters</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="ltx_tocentry">
<a href="#S5" title="5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5 </span>Testing SixTrack</span></a>
<ul class="ltx_toclist ltx_toc_section">
<li class="ltx_tocentry">
<a href="#S5.SS1" title="5.1 Running CTEST ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.1 </span>Running CTEST</span></a>
<ul class="ltx_toclist ltx_toc_subsection">
<li class="ltx_tocentry"><a href="#S5.SS1.SSS1" title="5.1.1 Submitting to CDASH ‣ 5.1 Running CTEST ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.1.1 </span>Submitting to CDASH</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#S5.SS2" title="5.2 Adding new tests ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.2 </span>Adding new tests</span></a></li>
<li class="ltx_tocentry"><a href="#S5.SS3" title="5.3 Testing tools ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.3 </span>Testing tools</span></a></li>
<li class="ltx_tocentry"><a href="#S5.SS4" title="5.4 Legacy test environment ‘‘SixTest’’ ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.4 </span>Legacy test environment ‘‘SixTest’’</span></a></li>
<li class="ltx_tocentry"><a href="#S5.SS5" title="5.5 Known failing tests ‣ 5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title"><span class="ltx_tag ltx_tag_ref">5.5 </span>Known failing tests</span></a></li>
</ul>
</li>
<li class="ltx_tocentry"><a href="#bib" title="References ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_title">References</span></a></li>
</ul>
<div class="ltx_pagination ltx_role_newpage"></div>
<section id="S1" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">1 </span>Downloading SixTrack</h2>
<div id="S1.p1" class="ltx_para">
<p class="ltx_p">The last stable release of SixTrack should be found on GitHub, in the SixTrack repository under the SixTrack organization:
<a href="https://github.com/SixTrack/SixTrack" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack</span></a>.
This provides the source code, which you will then have to compile as described in Section <a href="#S3" title="3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3</span></a>.</p>
</div>
<div id="S1.p2" class="ltx_para">
<p class="ltx_p">In order to download a release, you can either clone the git repository from our GitHub page, or download a tarball.
Since tarballs cannot be automatically updated, and there is no way to check if something has been modified after unpacking, <span class="ltx_text ltx_font_bold">it is strongly recommended to use git</span>.
If you still want to download a tarball, the newest version is found at
<br class="ltx_break"><a href="https://github.com/SixTrack/SixTrack/archive/master.zip" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack/archive/master.zip</span></a>, and older versions can be found through
<a href="https://github.com/SixTrack/SixTrack/releases" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack/releases</span></a>.</p>
</div>
<div id="S1.p3" class="ltx_para">
<p class="ltx_p">Assuming that you have a command line <span class="ltx_text ltx_font_typewriter">git</span> client installed, you can clone the repository anonymously using the command:</p>
<div id="LSTx1" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20clone%20https://github.com/SixTrack/SixTrack.git">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>clone<span class="ltx_text ltx_lst_space"> </span>https://github.com/SixTrack/SixTrack.git</span>
            </td>
</tr>
</table>
</div>
<p class="ltx_p">You shall now get a new folder ‘‘SixTrack’’ within your current working directory.
This folder contains the files from the newest version of SixTrack’s ‘‘master’’ branch.
Furthermore, it also contains a full clone of the original repository, meaning that you can check out old versions, create branches, commit changes, etc. completely off line.</p>
</div>
<div id="S1.p4" class="ltx_para">
<p class="ltx_p">Assuming that no files tracked by version control have been modified, updating your local copy is done by running the command</p>
<div id="LSTx2" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20pull">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>pull</span>
            </td>
</tr>
</table>
</div>
<p class="ltx_p">anywhere in the repository folder.
If you want to modify SixTrack, get feedback on your changes, and possibly contribute your changes back to the master branch; please also see Section <a href="#S2" title="2 Contributing to SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2</span></a>.</p>
</div>
</section>
<section id="S2" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">2 </span>Contributing to SixTrack</h2>
<div id="S2.p1" class="ltx_para">
<p class="ltx_p">The SixTrack code is being used and developed by a wide community, which makes keeping the code coherent between different development branches a challenge.
In the past, the main development took place in an SVN repository, to which the main developers could commit what would become the new release versions.
Alongside these ‘‘official’’ releases, it was common practice that various new features were developed in separate branches, sometimes in separate repositories, but often in a home-directory of the user/developer writing and running the code.
This lead to that these features were never integrated into the main release, resulting in a significant duplication of effort, bugs fixed in one version remaining unfixed in other versions for a long time, new features being unavailable to users of other branches or being lost, and fewer eyes on the code implementing new features.</p>
</div>
<div id="S2.p2" class="ltx_para">
<p class="ltx_p">A switch from SVN to GIT was therefore investigated and implemented, including the preservation of the old commit history.
This development tool has a greatly improved support for working with branches compared to SVN, meaning that each new feature, bugfix etc. can be worked on in a separate branch.
These branches are very easy to create, and allows the contributor to use a version control tool throughout a potentially complex development.
When the development in a branch is finished, integration back to the master branch can be accomplished with a merge, something which is usually a trivial operation.
This way, we avoid much of the feature leakage present in the old process.</p>
</div>
<div id="S2.p3" class="ltx_para">
<p class="ltx_p">GIT is a distributed version control system, meaning that each user has and manipulates full copy of the history in a local directory; one can commit, create branches, merge etc. completely off-line.
However, a central main repository is still useful for synchronizing progress from different developers and distributing the code (as described in Section <a href="#S1" title="1 Downloading SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">1</span></a>).
CERN IT provides this based on GitLab <cite class="ltx_cite">[<a href="#bib.bib1" title="" class="ltx_ref">1</a>]</cite>, however this service can only be accessed by internal CERN users.
For projects that have external contributors, they therefore recommend to use GitHub <cite class="ltx_cite">[<a href="#bib.bib2" title="" class="ltx_ref">2</a>]</cite>.
Hosting the project with GitHub has many advantages, as they provide a very good web interface to the repository and an issue tracker including ‘‘pull requests’’.
Furthermore, GitHub has millions of users world wide, which means that solutions to common problems are easy to find.</p>
</div>
<div id="S2.p4" class="ltx_para">
<p class="ltx_p">For the rest of this section, some familiarity with the use of GIT and GitHub is expected of the reader; many guides for this can be found on-line.
Still, a brief description of how to configure your GIT client is given in Section <a href="#S2.SS1" title="2.1 Configuring your GIT client and GitHub account ‣ 2 Contributing to SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2.1</span></a>.
Note that if you are using a very old GIT client, such as the one installed on LxPlus, some of the commands given in this section may differ.</p>
</div>
<div id="S2.p5" class="ltx_para">
<p class="ltx_p">For SixTrack, we have chosen the following development paradigm:</p>
<ol id="I1" class="ltx_enumerate">
<li id="I1.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I1.i1.p1" class="ltx_para">
<p class="ltx_p">SixTrack development, including support packages such as SixDesk, is organized under a GitHub organization at <a href="https://github.com/SixTrack/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/</span></a>.
These organizations are similar to service accounts.</p>
</div>
</li>
<li id="I1.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I1.i2.p1" class="ltx_para">
<p class="ltx_p">The SixTrack main repository is found at <a href="https://github.com/SixTrack/SixTrack" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://github.com/SixTrack/SixTrack</span></a>.
From here, users can browse the sources, see commit logs, view/edit the issue tracker etc.
If a user wants to use the standard version of the code, is possible to clone<span class="ltx_note ltx_role_footnote"><sup class="ltx_note_mark">1</sup><span class="ltx_note_outer"><span class="ltx_note_content"><sup class="ltx_note_mark">1</sup>Cloning a repository creates a new repository that is full copy of the old one, including history. This replaces the ‘‘checkout’’ process of SVN.</span></span></span> this repository directly as described in Section <a href="#S2" title="2 Contributing to SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">2</span></a>.</p>
</div>
</li>
<li id="I1.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I1.i3.p1" class="ltx_para">
<p class="ltx_p">Any development should take place in a branch in a personal fork.
In order to create such a fork, the user must be logged in to a personal GitHub account.
Creating the fork is then a matter of clicking the ‘‘fork’’ button on the web-page for the main repository.
The user can then quickly clone this fork to the local computer.</p>
</div>
</li>
<li id="I1.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="I1.i4.p1" class="ltx_para">
<p class="ltx_p">In the local clone of the user’s fork, the user can then create a new branch from the master branch and start working, committing the changes as the work progresses, and pushing the commits back to their personal fork hosted at GitHub.</p>
</div>
</li>
<li id="I1.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="I1.i5.p1" class="ltx_para">
<p class="ltx_p">After finishing the code changes, passing the tests (See Section <a href="#S5" title="5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5</span></a>), adding new tests, and writing the documentation, the developer submits a ‘‘pull request’’ for the branch to be merged into the main release branch.
This triggers a code review by other developers, possibly recommending some further changes, and which usually leads to the branch being merged.
It is sometimes useful to submit the pull request early, as it makes tracking changes from master, getting feedback from the core developers etc. very easy.</p>
</div>
</li>
<li id="I1.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="I1.i6.p1" class="ltx_para">
<p class="ltx_p">If it is a long time since the branch diverged from master, the contributor will usually be asked to merge the current master branch into their branch, resolve any conflicts, and re-test the code.</p>
</div>
</li>
<li id="I1.i7" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">7.</span>
<div id="I1.i7.p1" class="ltx_para">
<p class="ltx_p">Furthermore, if the changes since the last version bump is considered significant by the development group, the version number should be incremented.
The developer should also add her/his name to the list of authors at the top of the <span class="ltx_text ltx_font_typewriter">sixtrack.s</span> file.
Note that increasing the version number, updating the date, and adding the name should be done just before merging, at the request of the core developers, after merging the current master into the branch.
This is to avoid merge conflicts when handling multiple branches.</p>
</div>
</li>
<li id="I1.i8" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">8.</span>
<div id="I1.i8.p1" class="ltx_para">
<p class="ltx_p">Once the branch is merged, anyone who clones or pulls from the main repository will then get the new feature.
</p>
</div>
</li>
</ol>
<p class="ltx_p">This process makes the development transparent and interactive, promoting collaboration between developers, and makes sure that all code that goes in the main release is reviewed, tested, and documented.
The review process is also advantageous for the feature developer, as it makes it easy to get advice on how to implement the new feature and integrate it with existing functionality, and it reduces the chance of software bugs which can make the physics results of the study for which the feature was developed invalid.</p>
</div>
<div id="S2.p6" class="ltx_para">
<p class="ltx_p">When working on a branch in a local clone of a GitHub fork, it is important to keep it up to date with the main upstream repository.
This can be done by adding the main upstream repository as as a <span class="ltx_text ltx_font_typewriter">remote</span>, in addition to the personal fork which is automatically added as the remote <span class="ltx_text ltx_font_typewriter">origin</span>.
When this has been done, one can <span class="ltx_text ltx_font_typewriter">fetch</span> (download) the changes from the main upstream repository, merge these into the master branch of the local repository, and then <span class="ltx_text ltx_font_typewriter">push</span> (upload and update a remote branch) the changes to the private fork, bringing it up to date with the main upstream repository.
Using the command-line GIT client, this is done as follows:</p>
<ol id="I2" class="ltx_enumerate">
<li id="I2.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">1.</span>
<div id="I2.i1.p1" class="ltx_para">
<p class="ltx_p">First time only: Add the <span class="ltx_text ltx_font_typewriter">upstream</span> remote to the local clone:</p>
<div id="LSTx3" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20remote%20add%20upstream%20git@github.com:SixTrack/SixTrack.git">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>remote<span class="ltx_text ltx_lst_space"> </span>add<span class="ltx_text ltx_lst_space"> </span>upstream<span class="ltx_text ltx_lst_space"> </span>git@github.com:SixTrack/SixTrack.git</span>
                  </td>
</tr>
</table>
</div>
</div>
</li>
<li id="I2.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">2.</span>
<div id="I2.i2.p1" class="ltx_para">
<p class="ltx_p">Download the changes from the upstream:</p>
<div id="LSTx4" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20fetch%20upstream">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>fetch<span class="ltx_text ltx_lst_space"> </span>upstream</span>
                  </td>
</tr>
</table>
</div>
</div>
</li>
<li id="I2.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">3.</span>
<div id="I2.i3.p1" class="ltx_para">
<p class="ltx_p">Switch to the <span class="ltx_text ltx_font_typewriter">master</span> branch:</p>
<div id="LSTx5" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20checkout%20master">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>checkout<span class="ltx_text ltx_lst_space"> </span>master</span>
                  </td>
</tr>
</table>
</div>
</div>
</li>
<li id="I2.i4" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">4.</span>
<div id="I2.i4.p1" class="ltx_para">
<p class="ltx_p">Make sure that you are on the <span class="ltx_text ltx_font_typewriter">master</span> branch:</p>
<div id="LSTx6" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20checkout%20master">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>checkout<span class="ltx_text ltx_lst_space"> </span>master</span>
                  </td>
</tr>
</table>
</div>
<p class="ltx_p">It should say ‘‘On branch master’’, if not then do not proceed.</p>
</div>
</li>
<li id="I2.i5" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">5.</span>
<div id="I2.i5.p1" class="ltx_para">
<p class="ltx_p">Merge the upstream changes onto the local master:</p>
<div id="LSTx7" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20merge%20upstream/master">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>merge<span class="ltx_text ltx_lst_space"> </span>upstream/master</span>
                  </td>
</tr>
</table>
</div>
<p class="ltx_p">It should either say ‘‘Already up to date’’ or something like ‘‘Fast-forwarded’’; if not then do not proceed.</p>
</div>
</li>
<li id="I2.i6" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_enumerate">6.</span>
<div id="I2.i6.p1" class="ltx_para">
<p class="ltx_p">Update the master branch in your fork with the changes in your local clone:</p>
<div id="LSTx8" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20push">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                    <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                  </td>
<td class="ltx_td">
                    <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>push</span>
                  </td>
</tr>
</table>
</div>
<p class="ltx_p">If it asks about which remote to use, use the <span class="ltx_text ltx_font_typewriter">origin</span> remote, which is the name of the remote corresponding to your personal fork.</p>
</div>
</li>
</ol>
<p class="ltx_p">This process is necessary to do before starting a new branch (which is done by branching the <span class="ltx_text ltx_font_typewriter">master</span> branch in the local clone) , in order to make sure that you start from the newest version.
Furthermore, it is often useful to get an updated local master in order to update a long-running branch.
Such updates are done by checking out the branch in question, and then running</p>
<div id="LSTx9" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20merge%20master">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>merge<span class="ltx_text ltx_lst_space"> </span>master</span>
            </td>
</tr>
</table>
</div>
<p class="ltx_p">in order to merge the current status of the <span class="ltx_text ltx_font_typewriter">master</span> branch onto the branch in question.
Note that <span class="ltx_text ltx_font_bold">all development should take place in a new branch</span>; one should <span class="ltx_text ltx_font_bold">never</span> commit directly to master.</p>
</div>
<section id="S2.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">2.1 </span>Configuring your GIT client and GitHub account</h3>
</section>
</section>
<section id="S3" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">3 </span>Building SixTrack</h2>
<div id="S3.p1" class="ltx_para">
<p class="ltx_p">The SixTrack source code is located in the ‘‘SixTrack’’ sub-directory of the ‘‘SixTrack’’ repository.
SixTrack is normally configured and built using CMake, and for simplicity a wrapper <span class="ltx_text ltx_font_typewriter">cmake_six</span> is provided.
This allows configuring the various build options, changing compilers, and changing build types.
To run it, simply execute the command:</p>
<div id="LSTx10" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20compiler%20buildtype%20OPTION1%20OPTION2%20-OPTION3">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>compiler<span class="ltx_text ltx_lst_space"> </span>buildtype<span class="ltx_text ltx_lst_space"> </span>OPTION1<span class="ltx_text ltx_lst_space"> </span>OPTION2<span class="ltx_text ltx_lst_space"> </span>-OPTION3</span>
            </td>
</tr>
</table>
</div>
<p class="ltx_p">Here the <span class="ltx_text ltx_font_typewriter">compiler</span> argument specifies the compiler to use, and the <span class="ltx_text ltx_font_typewriter">buildtype</span> argument whether to build a <span class="ltx_text ltx_font_typewriter">release</span> or <span class="ltx_text ltx_font_typewriter">debug</span> version.
To take the default compiler and build type, simply leave these options out.</p>
</div>
<div id="S3.p2" class="ltx_para">
<p class="ltx_p">The other options (all UPPER CASE) switch on or off code features as described in Section <a href="#S3.SS2" title="3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2</span></a>.
To see the list of options and their meaning, simply run:</p>
<div id="LSTx11" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20help">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>help</span>
            </td>
</tr>
</table>
</div>
<p class="ltx_p">Note that to switch an option off put a ‘‘<span class="ltx_text ltx_font_typewriter">-</span>’’ sign in front of its name, i.e. <span class="ltx_text ltx_font_typewriter">-OPTION</span>.</p>
</div>
<div id="S3.p3" class="ltx_para">
<p class="ltx_p">Each build will produce a new subfolder
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">SixTrack_cmakesix_OPTION1_OPTION2_NOOPTION3_compiler_buildtype</span> ,
<br class="ltx_break">and each of the folders will contain a binary named something like
<br class="ltx_break"><span class="ltx_text ltx_font_typewriter">SixTrack_VERSION_feature1_feature2_cmake_COMPILER_static_32bit|64bit</span> .
<br class="ltx_break">To clear all such folders, simply run:
</p>
<div id="LSTx12" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20clean">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
              <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
            </td>
<td class="ltx_td">
              <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>clean</span>
            </td>
</tr>
</table>
</div>
</div>
<section id="S3.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.1 </span>Supported compilers</h3>
<div id="S3.SS1.p1" class="ltx_para">
<p class="ltx_p">Most of the code is written in Fortran, where we require Fortran 2003 support.
The currently supported compilers are:</p>
<ul id="I3" class="ltx_itemize">
<li id="I3.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I3.i1.p1" class="ltx_para">
<p class="ltx_p">gfortran</p>
</div>
</li>
<li id="I3.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I3.i2.p1" class="ltx_para">
<p class="ltx_p">ifort</p>
</div>
</li>
<li id="I3.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I3.i3.p1" class="ltx_para">
<p class="ltx_p">nagfor</p>
</div>
</li>
</ul>
<p class="ltx_p">Furthermore, some of the support libraries are written in C/C++.
We here support the following compilers:</p>
<ul id="I4" class="ltx_itemize">
<li id="I4.i1" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I4.i1.p1" class="ltx_para">
<p class="ltx_p">GNU gcc/g++</p>
</div>
</li>
<li id="I4.i2" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I4.i2.p1" class="ltx_para">
<p class="ltx_p">Intel icc/icpc</p>
</div>
</li>
<li id="I4.i3" class="ltx_item" style="list-style-type:none;">
<span class="ltx_tag ltx_tag_itemize">•</span>
<div id="I4.i3.p1" class="ltx_para">
<p class="ltx_p">LLVM clang/clang++</p>
</div>
</li>
</ul>
<p class="ltx_p">These can be combined, by setting the compiler flags as shown by:</p>
<div id="LSTx13" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20help">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
              </td>
<td class="ltx_td">
                <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>help</span>
              </td>
</tr>
</table>
</div>
<p class="ltx_p">Note that one may also use whatever compilers are the system default by using the <span class="ltx_text ltx_font_typewriter">defaultcompiler</span> flag to <span class="ltx_text ltx_font_typewriter">cmake_six</span>.</p>
</div>
<div id="S3.SS1.p2" class="ltx_para">
<p class="ltx_p">Also note that some of these compilers may only be able to build either 32- or 64-bit executables, either due to limitations in the compiler itself, or due to which libraries have been installed on the machine you are compiling on.</p>
</div>
<section id="S3.SS1.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.1.1 </span>gfortran and gcc</h4>
<div id="S3.SS1.SSS1.p1" class="ltx_para">
<p class="ltx_p">The gfortran and gcc compiler is the default on CERN’s LxPlus system and on most Linux systems.
The system version (version 4.4.7) is old, but can be used to build both 32- and 64-bit executables.</p>
</div>
<div id="S3.SS1.SSS1.p2" class="ltx_para">
<p class="ltx_p">However the version installed and loaded by default on LxPlus is quite old; it is however possible to load a newer version.
This can be accomplished by running their setup script as</p>
<div id="LSTx14" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,source%20/afs/cern.ch/sw/lcg/external/gcc/4.9/x86_64-slc6-gcc49-opt/setup.sh">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">source<span class="ltx_text ltx_lst_space"> </span>/afs/cern.ch/sw/lcg/external/gcc/4.9/x86_64-slc6-gcc49-opt/setup.sh</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">where this version is selected to match the Geant4 version that can be loaded as:</p>
<div id="LSTx15" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,source%20/afs/cern.ch/sw/lcg/external/geant4/10.3/x86_64-slc6-gcc49-opt/CMake-setup.sh">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">source<span class="ltx_text ltx_lst_space"> </span>/afs/cern.ch/sw/lcg/external/geant4/10.3/x86_64-slc6-gcc49-opt/CMake-setup.sh</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Unfortunately, this version only have the libraries for building the 64-bit version of SixTrack.</p>
</div>
<span class="ltx_ERROR undefined">\todo</span>
<div id="S3.SS1.SSS1.p3" class="ltx_para">
<p class="ltx_p">[inline]Installing gfortran and libraries for 32- and 64-bit, static/non-static builds on Fedora and Ubuntu.</p>
</div>
</section>
<section id="S3.SS1.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.1.2 </span>ifort and icc/icpc</h4>
<div id="S3.SS1.SSS2.p1" class="ltx_para">
<p class="ltx_p">Another popular set of compilers are Intel’s ifort and icc.
To load these from AFS, simply run their setup script as:</p>
<div id="LSTx16" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,source%20/afs/cern.ch/sw/IntelSoftware/linux/17-all-setup.sh">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">source<span class="ltx_text ltx_lst_space"> </span>/afs/cern.ch/sw/IntelSoftware/linux/17-all-setup.sh</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">if you want to produce a 64-bit executable, or</p>
<div id="LSTx17" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,source%20/afs/cern.ch/sw/IntelSoftware/linux/17-all-setup.sh%20ia32">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">source<span class="ltx_text ltx_lst_space"> </span>/afs/cern.ch/sw/IntelSoftware/linux/17-all-setup.sh<span class="ltx_text ltx_lst_space"> </span>ia32</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">for a 32-bit executable.</p>
</div>
<div id="S3.SS1.SSS2.p2" class="ltx_para">
<p class="ltx_p">However note that if using icc/icpc, it is not possible to compile static 64-bit executables, since Intel does not provide a static version of the <span class="ltx_text ltx_font_typewriter">libcilkrts</span> library for 64-bit.</p>
</div>
<div id="S3.SS1.SSS2.p3" class="ltx_para">
<p class="ltx_p">If running the Intel compilers on LxPlus, it is recommended to first load a newer version CMAKE.
This can be accomplished through the commands:</p>
<div id="LSTx18" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,export%20PATH=/afs/cern.ch/sw/lcg/contrib/CMake/3.7.0/Linux-x86_64/bin:%24PATH%0Aexport%20CMAKE_ROOT=/afs/cern.ch/sw/lcg/contrib/CMake/3.7.0/Linux-x86_64%0A%5Cend%7Blstlisting%7D%20%%24%20(Workaround%20for%20editor%20syntax%20highlighting%20picking%20up%20the%20dollar%20sign...)%0A%0A%5Csubsubsection%7Bnagfor%7D%0A%0ATo%20load%20nagfor%20version%206.0%20on%20LxPlus,%20simply%20run%0A%5Cbegin%7Blstlisting%7D%0Asource%20/afs/cern.ch/sw/fortran/nag/usenag.bash%206.0">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;"><span class="ltx_text ltx_lst_keyword ltx_font_bold">export</span><span class="ltx_text ltx_lst_space"> </span>PATH=/afs/cern.ch/sw/lcg/contrib/CMake/3.7.0/Linux-x86_64/bin:$PATH</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;"><span class="ltx_text ltx_lst_keyword ltx_font_bold">export</span><span class="ltx_text ltx_lst_space"> </span>CMAKE_ROOT=/afs/cern.ch/sw/lcg/contrib/CMake/3.7.0/Linux-x86_64</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">3</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">\end{lstlisting}<span class="ltx_text ltx_lst_space"> </span>%$<span class="ltx_text ltx_lst_space"> </span>(Workaround<span class="ltx_text ltx_lst_space"> </span><span class="ltx_text ltx_lst_keyword ltx_font_bold">for</span><span class="ltx_text ltx_lst_space"> </span>editor<span class="ltx_text ltx_lst_space"> </span>syntax<span class="ltx_text ltx_lst_space"> </span>highlighting<span class="ltx_text ltx_lst_space"> </span>picking<span class="ltx_text ltx_lst_space"> </span>up<span class="ltx_text ltx_lst_space"> </span>the<span class="ltx_text ltx_lst_space"> </span>dollar<span class="ltx_text ltx_lst_space"> </span>sign...)</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">4</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line"></span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">5</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">\subsubsection{nagfor}</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">6</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line"></span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">7</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">To<span class="ltx_text ltx_lst_space"> </span>load<span class="ltx_text ltx_lst_space"> </span>nagfor<span class="ltx_text ltx_lst_space"> </span>version<span class="ltx_text ltx_lst_space"> </span>6.0<span class="ltx_text ltx_lst_space"> </span>on<span class="ltx_text ltx_lst_space"> </span>LxPlus,<span class="ltx_text ltx_lst_space"> </span>simply<span class="ltx_text ltx_lst_space"> </span>run</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">8</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">\begin{lstlisting}</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">9</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">source<span class="ltx_text ltx_lst_space"> </span>/afs/cern.ch/sw/fortran/nag/usenag.bash<span class="ltx_text ltx_lst_space"> </span>6.</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">before any compilation commands.
Both 32- and 64-bit executables are supported, as well as both static- and dynamic linking.</p>
</div>
</section>
</section>
<section id="S3.SS2" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.2 </span>Common build types</h3>
<div id="S3.SS2.p1" class="ltx_para">
<p class="ltx_p">By selecting different sets of flags at compile time, the SixTrack sources can be compiled to different versions, which have different capabilities.
This section lists the most common build types; note that it is often possible to combine these features, e.g. to use collimation together with increased particle numbers.
If the features are incompatible, then this is detected by the cmake script, which will exit with an error message.</p>
</div>
<section id="S3.SS2.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.1 </span>Standard build</h4>
<div id="S3.SS2.SSS1.p1" class="ltx_para">
<p class="ltx_p">This build type, used for generic tracking and dynamic aperture studies, is selected by using the standard build flags.
In effect, just run</p>
<div id="LSTx19" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">without any flags, possibly except for explicitly selecting a compiler.
Note that the standard build uses CRLIBM, described in Section <a href="#S3.SS3.SSS2" title="3.3.2 CRLIBM ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.2</span></a>.</p>
</div>
</section>
<section id="S3.SS2.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.2 </span>Collimation</h4>
<div id="S3.SS2.SSS2.p1" class="ltx_para">
<p class="ltx_p">The collimation version of SixTrack is used for collimation studies.
Here, more than 64 particles can be tracked by splitting it up in ‘‘packs’’; in total a maximum of <span class="ltx_text ltx_font_typewriter">maxn=20 000</span> particles can be used.
Furthermore, the collimators can scatter particles; the scattering angle is determined through a Monte Carlo routine.
The collimation-specific features are controlled by a <span class="ltx_text ltx_font_typewriter">COLL</span> block in the <span class="ltx_text ltx_font_typewriter">fort.3</span> input file; please see <span class="ltx_ERROR undefined">\todo</span>ref for more information.
</p>
</div>
<div id="S3.SS2.SSS2.p2" class="ltx_para">
<p class="ltx_p">In order to compile the collimation version, just run:</p>
<div id="LSTx20" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20COLLIMAT%20-CRLIBM">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>COLLIMAT<span class="ltx_text ltx_lst_space"> </span>-CRLIBM</span>
                </td>
</tr>
</table>
</div>
</div>
<span class="ltx_ERROR undefined">\todo</span>
<div id="S3.SS2.SSS2.p3" class="ltx_para">
<p class="ltx_p">[inline]Sub versions - merlinscatter, hdf5, etc.</p>
</div>
</section>
<section id="S3.SS2.SSS3" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.3 </span>Checkpoint/restart</h4>
<div id="S3.SS2.SSS3.p1" class="ltx_para">
<p class="ltx_p">The checkpoint/restart feature in SixTrack allows the simulation to continue from where it stopped after an abort, instead of restarting from the beginning.
This is a vital feature when running on e.g. LHC@Home, and works by saving a checkpoint file every <span class="ltx_text ltx_font_typewriter">numlcp</span> turns.
The feature is included by using the <span class="ltx_text ltx_font_typewriter">CR</span> build option, i.e.:</p>
<div id="LSTx21" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20CR">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>CR</span>
                </td>
</tr>
</table>
</div>
</div>
</section>
<section id="S3.SS2.SSS4" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.4 </span>BOINC support</h4>
<div id="S3.SS2.SSS4.p1" class="ltx_para">
<p class="ltx_p">The BOINC libraries are used when running on LHC@Home.
This binary will look for a file <span class="ltx_text ltx_font_typewriter">Sixin.zip</span> when started (unless restart files are present), which it will unpack in order to get the actual input files <span class="ltx_text ltx_font_typewriter">fort.2</span> etc.</p>
</div>
<div id="S3.SS2.SSS4.p2" class="ltx_para">
<p class="ltx_p">In order to build SixTrack with support for this, you must first build BOINC as described in Section <a href="#S3.SS3.SSS5" title="3.3.5 BOINC ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.5</span></a>.
The libarchive library must also be built, please see Section <a href="#S3.SS3.SSS7" title="3.3.7 libarchive ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.7</span></a>.
Once this is done, it is possible to build SixTrack with BOINC support by running:</p>
<div id="LSTx22" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20CR%20BOINC%20API%20LIBARCHIVE">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>CR<span class="ltx_text ltx_lst_space"> </span>BOINC<span class="ltx_text ltx_lst_space"> </span>API<span class="ltx_text ltx_lst_space"> </span>LIBARCHIVE</span>
                </td>
</tr>
</table>
</div>
</div>
<div id="S3.SS2.SSS4.p3" class="ltx_para">
<p class="ltx_p">Note that for debugging, it is possible to build BOINC without the ‘‘real’’ BOINC libraries; a set of surrogate functions are then inserted for these.
To do this, simply drop the API flag.
This makes it possible to test and debug the BOINC version even if the real BOINC libraries are not available; however libarchive is always needed.</p>
</div>
</section>
<section id="S3.SS2.SSS5" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.5 </span>Increased particle numbers</h4>
<div id="S3.SS2.SSS5.p1" class="ltx_para">
<p class="ltx_p">It is possible to track more than 64 particles simultaneously in SixTrack; the main limitation for this is the ‘‘binary data files’’ fort.90, fort.89, etc., as one such file is written per pair of tracked particles.
In order to work around this, the ‘‘Single Track File’’ (STF) functionality was invented, which basically packs the contents of these binary data files into a single file <span class="ltx_text ltx_font_typewriter">singletrackfile.dat</span>.
This makes it possible to increase the particle number to 2048, and to track this many particles compile with:</p>
<div id="LSTx23" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20STF%20BIGNPART">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>STF<span class="ltx_text ltx_lst_space"> </span>BIGNPART</span>
                </td>
</tr>
</table>
</div>
</div>
<div id="S3.SS2.SSS5.p2" class="ltx_para">
<p class="ltx_p">After this, the limiting factor is the size of the executable’s BSS section, which contains the Fortran COMMON blocks, when using the ‘‘small’’ code model (2 GB).
In order to break out of this limitation, some large matrices that are only needed for thick tracking can be allocated on demand in heap memory, and this is enabled by the <span class="ltx_text ltx_font_typewriter">DATAMODS</span> option.
This then makes it possible to track up to 65 536 particles when the <span class="ltx_text ltx_font_typewriter">HUGENPART</span> option is in use; to compile this run:</p>
<div id="LSTx24" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20STF%20DATAMODS%20HUGENPART">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>STF<span class="ltx_text ltx_lst_space"> </span>DATAMODS<span class="ltx_text ltx_lst_space"> </span>HUGENPART</span>
                </td>
</tr>
</table>
</div>
</div>
<span class="ltx_ERROR undefined">\todo</span>
<div id="S3.SS2.SSS5.p3" class="ltx_para">
<p class="ltx_p">[inline]Reference sixtrack meeting slides?</p>
</div>
</section>
<section id="S3.SS2.SSS6" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.2.6 </span>DA (differential algebra)</h4>
<div id="S3.SS2.SSS6.p1" class="ltx_para">
<p class="ltx_p">This version allows computing DA maps of the machine.
Please contact Frank Schmidt if you intend to use it.
To compile it, simply run:</p>
<div id="LSTx25" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20DA%20NAGLIB%20ifort">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>DA<span class="ltx_text ltx_lst_space"> </span>NAGLIB<span class="ltx_text ltx_lst_space"> </span>ifort</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Note that the DA version requires the NAGFOR library (Section <a href="#S3.SS3.SSS8" title="3.3.8 NAGLIB ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.8</span></a>), a proprietary library of mathematical functions that is available at CERN via AFS.
This itself is usually easier to build using ifort (Section <a href="#S3.SS1.SSS2" title="3.1.2 ifort and icc/icpc ‣ 3.1 Supported compilers ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.1.2</span></a>).</p>
</div>
</section>
</section>
<section id="S3.SS3" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.3 </span>Libraries</h3>
<div id="S3.SS3.p1" class="ltx_para">
<p class="ltx_p">SixTrack leverages a few libraries in order to run correctly.
These are generally not written in Fortran but in C or C++, and must be compiled before or alongside SixTrack and then linked with the final executable.
This subsection describes how this is done, including any pitfalls.</p>
</div>
<section id="S3.SS3.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.1 </span>Automatic building of ‘‘external’’ libraries</h4>
<div id="S3.SS3.SSS1.p1" class="ltx_para">
<p class="ltx_p">It is possible to build some of the ‘‘one time build’’ libraries automatically using the shell script <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span>, located in the <span class="ltx_text ltx_font_typewriter">SixTrack/SixTrack</span> folder.
This script should know about various platform dependent workarounds etc.
</p>
</div>
</section>
<section id="S3.SS3.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.2 </span>CRLIBM</h4>
<div id="S3.SS3.SSS2.p1" class="ltx_para">
<p class="ltx_p">The CRLIBM library <span class="ltx_ERROR undefined">\todo</span>cite is a replacement for the standard math library normally provided by the system, used to compute trigonometric functions, logarithms, etc.
It is written in C, and contained in the crlibm sub-folder.</p>
</div>
<div id="S3.SS3.SSS2.p2" class="ltx_para">
<p class="ltx_p">The point of CRLIBM is primarily to ensure that results are consistent across different platforms, compilers, etc., which may provide different versions of libm giving slightly different results.</p>
</div>
<div id="S3.SS3.SSS2.p3" class="ltx_para">
<p class="ltx_p">In addition to the math library and its fortran interface (<span class="ltx_text ltx_font_typewriter">ericc.c</span>), this folder also contains functions for converting strings to double (strtod) and a FORTRAN interface (round_near), and functions to enable/disable x87 extended precision.
The enabling/disabling of x87 extended precision is used to force the Intel x87 FPU to use 64-bit precision when storing numbers in internal registers, avoiding that results sometimes are stored with 80-bit precision and sometimes 64-bit.
This is necessary for CRLIBM to work correctly, and for SixTrack to give consistent results across different compilers which may make different decisions for how long to keep results in registers etc.
Furthermore, 80-bit precision is re-enabled before using <span class="ltx_text ltx_font_typewriter">read</span> with <span class="ltx_text ltx_font_typewriter">round=’nearest’</span>.</p>
</div>
<div id="S3.SS3.SSS2.p4" class="ltx_para">
<p class="ltx_p">Note that due to problems in GCC’s x87 optimizer (introduced somewhere between version 4.4.7 and 4.8.3), the SSE instruction set should be used for all floating point calculations.</p>
</div>
<div id="S3.SS3.SSS2.p5" class="ltx_para">
<p class="ltx_p">In order to build SixTrack with crlibm support, add the option <span class="ltx_text ltx_font_typewriter">CRLIBM</span> to the <span class="ltx_text ltx_font_typewriter">make_six</span> command line; however note that this is done by default.
It will automatically build crlibm from the crlibm folder and link it.</p>
</div>
</section>
<section id="S3.SS3.SSS3" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.3 </span>MerlinScatter</h4>
</section>
<section id="S3.SS3.SSS4" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.4 </span>HDF5</h4>
</section>
<section id="S3.SS3.SSS5" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.5 </span>BOINC</h4>
<div id="S3.SS3.SSS5.p1" class="ltx_para">
<p class="ltx_p">The BOINC library is used for volunteer computing <span class="ltx_ERROR undefined">\todo</span>Cite BOINC.
It must be built separately from SixTrack, and then linked into SixTrack.
Note that BOINC can be build with <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span> as described in Section <a href="#S3.SS3.SSS1" title="3.3.1 Automatic building of ‘‘external’’ libraries ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>.</p>
</div>
<div id="S3.SS3.SSS5.p2" class="ltx_para">
<p class="ltx_p">As some modifications have been done to the upstream BOINC library, the correct version is linked into the repository as a <span class="ltx_text ltx_font_typewriter">git submodule</span> <span class="ltx_ERROR undefined">\todo</span>cite at <span class="ltx_text ltx_font_typewriter">SixTrack/SixTrack/boinc</span> .
In order to load the submodule, run from anywhere in the SixTrack repository run the commands:</p>
<div id="LSTx26" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20submodule%20init%0Agit%20submodule%20update">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>init</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>update</span>
                </td>
</tr>
</table>
</div>
</div>
<div id="S3.SS3.SSS5.p3" class="ltx_para">
<p class="ltx_p">Then, you must build the BOINC library.
This is accomplished by <span class="ltx_text ltx_font_typewriter">cd</span>-ing to the the <span class="ltx_text ltx_font_typewriter">boinc</span> directory, then run:</p>
<div id="LSTx27" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./_autosetup%20-f%0A./configure%20--disable-client%20--disable-server%20--disable-manager%20--disable-boinczip%0Amake">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./_autosetup<span class="ltx_text ltx_lst_space"> </span>-f</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./configure<span class="ltx_text ltx_lst_space"> </span>--disable-client<span class="ltx_text ltx_lst_space"> </span>--disable-server<span class="ltx_text ltx_lst_space"> </span>--disable-manager<span class="ltx_text ltx_lst_space"> </span>--disable-boinczip</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">3</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">make</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Finally, you need to build the BOINC Fortran API; this is done by entering the <span class="ltx_text ltx_font_typewriter">api</span> subdirectory and running:</p>
<div id="LSTx28" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,make%20boinc_api_fortran.o">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">make<span class="ltx_text ltx_lst_space"> </span>boinc_api_fortran.o</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Once this is done, you may compile SixTrack with BOINC support as described in Section <a href="#S3.SS2.SSS4" title="3.2.4 BOINC support ‣ 3.2 Common build types ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.2.4</span></a>.</p>
</div>
<div id="S3.SS3.SSS5.p4" class="ltx_para">
<p class="ltx_p">This procedure has been tested on Linux (Fedora 23), Windows Server 2012 (CYGWIN32/64 on MSYS2), and Mac OS X.</p>
</div>
<div id="S3.SS3.SSS5.p5" class="ltx_para">
<p class="ltx_p">Note that to build in a folder hosted on AFS, you must edit the Makefiles in the <span class="ltx_text ltx_font_typewriter">api</span> and <span class="ltx_text ltx_font_typewriter">lib</span> subfolders and change the variable <span class="ltx_text ltx_font_typewriter">LN</span> from <span class="ltx_text ltx_font_typewriter">/usr/bin/ln</span> to <span class="ltx_text ltx_font_typewriter">cp</span>.
This is neccessary because AFS does not support hard links between different folders, and configure does not check correctly for it.</p>
</div>
</section>
<section id="S3.SS3.SSS6" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.6 </span>zlib</h4>
<div id="S3.SS3.SSS6.p1" class="ltx_para">
<p class="ltx_p">The zlib library is used by libarchive (Section <a href="#S3.SS3.SSS7" title="3.3.7 libarchive ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.7</span></a>) to compress/uncompress .zib archives.
While this library is shipped with many systems, a static version is not always included.
For this reason, it is distributed along with SixTrack.
The easiest way to build this library is to use the buildLibraries.sh script.
Note that a position independent version of the static library should be built, so that it can be included as part of the static libarchive library.
Also note that by default, the Windows build is called <span class="ltx_text ltx_font_typewriter">libzlibstatic.a</span>, not <span class="ltx_text ltx_font_typewriter">libz.a</span>.</p>
</div>
</section>
<section id="S3.SS3.SSS7" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.7 </span>libarchive</h4>
<div id="S3.SS3.SSS7.p1" class="ltx_para">
<p class="ltx_p">The libarchive libary is used to unpack the <span class="ltx_text ltx_font_typewriter">Sixin.zip</span> file for the BOINC version, and is needed for the option <span class="ltx_text ltx_font_typewriter">ZIPF</span> block in <span class="ltx_text ltx_font_typewriter">fort.3</span>.
It must be built separately from SixTrack, and then linked into SixTrack.
Note that libarchive can be build with <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span> as described in Section <a href="#S3.SS3.SSS1" title="3.3.1 Automatic building of ‘‘external’’ libraries ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>.</p>
</div>
<div id="S3.SS3.SSS7.p2" class="ltx_para">
<p class="ltx_p">As some bugfixes have been done to the upstream libarchive library, the correct version is linked into the repository as a <span class="ltx_text ltx_font_typewriter">git submodule</span> <span class="ltx_ERROR undefined">\todo</span>cite at <span class="ltx_text ltx_font_typewriter">SixTrack/SixTrack/libarchive</span> .
In order to load the submodule, run from anywhere in the SixTrack repository:</p>
<div id="LSTx29" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20submodule%20init%0Agit%20submodule%20update">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>init</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>update</span>
                </td>
</tr>
</table>
</div>
</div>
<div id="S3.SS3.SSS7.p3" class="ltx_para">
<p class="ltx_p">You must then build the libarchive library, which is done by CMAKE.
To do this, create a new folder <span class="ltx_text ltx_font_typewriter">SixTrack/SixTrack/libarchive_build</span> and enter it.
You can then configure it as
</p>
<div id="LSTx30" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,cmake%20-DCMAKE_BUILD_TYPE=Release%20-DENABLE_BZip2=OFF%20-DENABLE_ZLIB=ON%20-DENABLE_CAT=OFF%20-DENABLE_CPIO=OFF%20-DENABLE_EXPAT=OFF%20-DENABLE_INSTALL=OFF%20-DENABLE_LIBXML2=OFF%20-DENABLE_LZMA=OFF%20-DENABLE_NETTLE=OFF%20-DENABLE_OPENSSL=OFF%20-DENABLE_TAR=OFF%20-DENABLE_CNG=OFF%20-DENABLE_ICONV=OFF%20-DENABLE_TEST=OFF%20(-DZLIB_LIBRARY=%5C%24ZLIB%5C_PATH)%20-G%20%22Unix%20Makefiles%22%20../libarchive%20-LH">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">cmake<span class="ltx_text ltx_lst_space"> </span>-DCMAKE_BUILD_TYPE=Release<span class="ltx_text ltx_lst_space"> </span>-DENABLE_BZip2=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_ZLIB=ON<span class="ltx_text ltx_lst_space"> </span>-DENABLE_CAT=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_CPIO=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_EXPAT=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_INSTALL=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_LIBXML2=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_LZMA=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_NETTLE=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_OPENSSL=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_TAR=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_CNG=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_ICONV=OFF<span class="ltx_text ltx_lst_space"> </span>-DENABLE_TEST=OFF<span class="ltx_text ltx_lst_space"> </span>(-DZLIB_LIBRARY=\$ZLIB\_PATH)<span class="ltx_text ltx_lst_space"> </span>-G<span class="ltx_text ltx_lst_space"> </span>"Unix<span class="ltx_text ltx_lst_space"> </span>Makefiles"<span class="ltx_text ltx_lst_space"> </span>../libarchive<span class="ltx_text ltx_lst_space"> </span>-LH</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">where <span class="ltx_text ltx_font_typewriter">$ZLIB_PATH</span> is pointing to the location of <span class="ltx_text ltx_font_typewriter">libz.a</span>, which is built as described in Section <a href="#S3.SS3.SSS6" title="3.3.6 zlib ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.6</span></a>.
Finally, build the library using <span class="ltx_text ltx_font_typewriter">make</span> .</p>
</div>
<div id="S3.SS3.SSS7.p4" class="ltx_para">
<p class="ltx_p">Note that libarchive needs several libraries installed; it is the up to the user to install these.
</p>
</div>
<div id="S3.SS3.SSS7.p5" class="ltx_para">
<p class="ltx_p">Also note that if libarchive was compiled before installing zlib, it will not be able to uncompress compressed .zip files, and attempting to do so will result in a SixTrack runtime error</p>
<pre class="ltx_verbatim ltx_font_typewriter">
CRITICAL ERROR in read_archive(): When extracting archive (reading data), err=-25
CRITICAL ERROR in read_archive(): Unsupported ZIP compression method (deflation)
</pre>
<p class="ltx_p">when opening Sixin.zip for BOINC.
To solve this, make sure zlib is installed, and configure/compile libarchive again.</p>
</div>
</section>
<section id="S3.SS3.SSS8" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.8 </span>NAGLIB</h4>
<div id="S3.SS3.SSS8.p1" class="ltx_para">
<p class="ltx_p">The NAGLIB library <span class="ltx_ERROR undefined">\todo</span>cite is used for the DA version.
It is found on AFS, in the folder <span class="ltx_text ltx_font_typewriter">/afs/cern.ch/sw/nag/mark24/lnx/fll6i24dcl/lib</span> .
Note that in order to link with this library (when also using <span class="ltx_text ltx_font_typewriter">DA</span>) when compiling with gfortran or nagfor, dynamic linking (i.e. the flag <span class="ltx_text ltx_font_typewriter">-STATIC</span> to <span class="ltx_text ltx_font_typewriter">cmake_six</span>) is required.
If compiling with ifort, it is possible to link (mostly) statically.</p>
</div>
</section>
<section id="S3.SS3.SSS9" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.3.9 </span>NAFF</h4>
<div id="S3.SS3.SSS9.p1" class="ltx_para">
<p class="ltx_p">The NAFF library <cite class="ltx_cite">[<a href="#bib.bib3" title="" class="ltx_ref">3</a>]</cite> is an optional library for improving the FMA analysis.
To enable it, add the <span class="ltx_text ltx_font_typewriter">NAFF</span> flag to the command line of <span class="ltx_text ltx_font_typewriter">cmake_six</span>:</p>
<div id="LSTx31" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20NAFF">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>NAFF</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">The NAFF library links with the FFTW and BOOST libraries; these must therefore be installed on the system in the appropriate (static/dynamic) versions.</p>
</div>
<div id="S3.SS3.SSS9.p2" class="ltx_para">
<p class="ltx_p">Furthermore, while NAFF is supported by SixTest (<span class="ltx_text ltx_font_typewriter">BUILD_TESTING</span>, see Section <a href="#S5" title="5 Testing SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">5</span></a>), the results are not expected to be exactly reproducible between different compilers, operating systems etc.; for this we would not only need to make NAFF itself exactly reproducible, but also the libraries it depends on.
Deeply modifying these libraries is not a feasible project; however since this is not part of the tracking but is purely used for preprocessing, it is of little consequence.</p>
</div>
</section>
</section>
<section id="S3.SS4" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.4 </span>Building on platforms other than Linux</h3>
<section id="S3.SS4.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.4.1 </span>Building on OS X</h4>
<div id="S3.SS4.SSS1.p1" class="ltx_para">
<p class="ltx_p">Since OSX does not come with a fortran compiler, gfortran must be installed.
For the build system, it is currently assumed that additional tools are installed via Homebrew - for details see <a href="http://brew.sh/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://brew.sh/</span></a>.
The native clang/LLVM C and C++ compiler can be used for the C and C++ components of sixtrack; if this is not already done, the installer for the Homebrew system will take care of this.</p>
</div>
<div id="S3.SS4.SSS1.p2" class="ltx_para">
<p class="ltx_p">Building has been tested on OSX 10.12.2 (Sierra) and 10.11.6 (El Capitan).
In addition to homebrew, you need to install several packages.
This can be accomplished via the following sequence of commands:</p>
<div id="LSTx32" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,brew%20install%20gcc%0Abrew%20install%20pkg-config%0Abrew%20install%20automake%0Abrew%20install%20libtool%0Abrew%20install%20cmake%0Abrew%20install%20gawk">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>gcc</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>pkg-config</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">3</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>automake</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">4</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>libtool</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">5</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>cmake</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">6</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">brew<span class="ltx_text ltx_lst_space"> </span>install<span class="ltx_text ltx_lst_space"> </span>gawk</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Once this is done, you may build SixTrack in the standard way, by first running <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span> and then <span class="ltx_text ltx_font_typewriter">cmake_six</span>.</p>
</div>
<div id="S3.SS4.SSS1.p3" class="ltx_para">
<p class="ltx_p">Note that if you are building a static version of SixTrack, please check that the output binary is statically linked (excluding <span class="ltx_text ltx_font_typewriter">libSystem</span>) by running <span class="ltx_text ltx_font_typewriter">otool -L</span> on the resulting output binary.
There have been issues with dynamic linking of <span class="ltx_text ltx_font_typewriter">libquadmath.dylib</span> and other items in your <span class="ltx_text ltx_font_typewriter">/usr/local</span> folders.
There should exist in <span class="ltx_text ltx_font_typewriter">/usr/local/lib/gcc/6/</span> a symlink from <span class="ltx_text ltx_font_typewriter">libquadmath.dylib</span> to <span class="ltx_text ltx_font_typewriter">libquadmath.0.dylib</span>.
Re-naming or deleting this link (<span class="ltx_text ltx_font_typewriter">libquadmath.dylib</span>) should stop the linker from always selecting this library, even if static is enabled.</p>
</div>
</section>
<section id="S3.SS4.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">3.4.2 </span>Building on Windows</h4>
<div id="S3.SS4.SSS2.p1" class="ltx_para">
<p class="ltx_p">It is possible to build SixTrack on Windows using the ‘‘MSYS2’’ UNIX-like environment.
From here, one can install the required libraries and compilers, which can then be used for building a normal and staticly linked Windows executable.
Building in this manner was tested on Windows Server 2012 R2, 64-bit version, with MSYS2 version <span class="ltx_text ltx_font_typewriter">msys2_x86_64_20161025</span> running in VirtualBox.</p>
</div>
<div id="S3.SS4.SSS2.p2" class="ltx_para">
<p class="ltx_p">To do this, first install MSYS2 from <a href="http://msys2.github.io" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://msys2.github.io</span></a>; you should choose the 64-bit version (assuming that you have 64-bit Windows).
This installs 3 Unix-like environments on your machine – <span class="ltx_text ltx_font_typewriter">MSYS2</span> which is used for managing packages and GIT, <span class="ltx_text ltx_font_typewriter">MSYS2 MINGW 64-bit</span> which is used for compiling 64-bit executables, and <span class="ltx_text ltx_font_typewriter">MSYS2 MINGW 32-bit</span> which is used for compiling 32-bit executables.
After installing MSYS2, you need to bring it up to date.
To do this, first update the <span class="ltx_text ltx_font_typewriter">pacman</span> package manager using:</p>
<div id="LSTx33" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,pacman%20-Sy%20pacman">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Sy<span class="ltx_text ltx_lst_space"> </span>pacman</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">When it is complete, close the MSYS2 window.
Then, open a new MSYS2 window and update the core packages:</p>
<div id="LSTx34" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,pacman%20-Syu">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Close the window when asked to do so, and open a new window.
Finally, do a general update using:</p>
<div id="LSTx35" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,pacman%20-Su">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Su</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">You can now start installing packages:</p>
<div id="LSTx36" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,pacman%20-Syu%20openssh%20git%20make%0Apacman%20-Syu%20mingw-w64-x86_64-toolchain%20mingw64/mingw-w64-x86_64-cmake%0Apacman%20-Syu%20mingw-w64-i686-toolchain%20mingw32/mingw-w64-i686-cmake">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>openssh<span class="ltx_text ltx_lst_space"> </span>git<span class="ltx_text ltx_lst_space"> </span>make</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>mingw-w64-x86_64-toolchain<span class="ltx_text ltx_lst_space"> </span>mingw64/mingw-w64-x86_64-cmake</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">3</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>mingw-w64-i686-toolchain<span class="ltx_text ltx_lst_space"> </span>mingw32/mingw-w64-i686-cmake</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Install all the suggested packages when prompted; these packages should be sufficient to compile the basic version of SixTrack.
You can now clone the SixTrack repository (in the MSYS2 shell) in order to get the sources, which should give you a new folder <span class="ltx_text ltx_font_typewriter">SixTrack</span>.
Once you have this folder you may compile the code as normally (in the MINGW32 or MINGW64 shell).
Note that to build the 32-bit version, you should pass the options ‘‘<span class="ltx_text ltx_font_typewriter">-64BIT 32BIT</span>’’ to <span class="ltx_text ltx_font_typewriter">cmake_six</span>.</p>
</div>
<div id="S3.SS4.SSS2.p3" class="ltx_para">
<p class="ltx_p">In order to build the BOINC and LIBARCHIVE libraries, you must first download their sources.
Normally this is done automatically by the <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span> script (Section <a href="#S3.SS3.SSS1" title="3.3.1 Automatic building of ‘‘external’’ libraries ‣ 3.3 Libraries ‣ 3 Building SixTrack ‣ Compiling, building, and testing SixTrack" class="ltx_ref"><span class="ltx_text ltx_ref_tag">3.3.1</span></a>); however since git does not work correctly in the CYGWIN shells, you must do this step manually in the MSYS2 shell.
Therefore run inside the <span class="ltx_text ltx_font_typewriter">SixTrack</span> folder in the MSYS2 shell:</p>
<div id="LSTx37" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,git%20submodule%20init%0Agit%20submodule%20update">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>init</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">git<span class="ltx_text ltx_lst_space"> </span>submodule<span class="ltx_text ltx_lst_space"> </span>update</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">You also need to install the libraries – again from the MSYS2 shell:</p>
<div id="LSTx38" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,pacman%20-Syu%20autoconf%0Apacman%20-Syu%20automake%0Apacman%20-Syu%20mingw32/mingw-w64-i686-headers-git%20mingw64/mingw-w64-x86_64-headers-git%0Apacman%20-Syu%20mingw64/mingw-w64-x86_64-libtool%20mingw32/mingw-w64-i686-libtool">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>autoconf</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">2</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>automake</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">3</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>mingw32/mingw-w64-i686-headers-git<span class="ltx_text ltx_lst_space"> </span>mingw64/mingw-w64-x86_64-headers-git</span>
                </td>
</tr>
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                  <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">4</span>
                </td>
<td class="ltx_td">
                  <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">pacman<span class="ltx_text ltx_lst_space"> </span>-Syu<span class="ltx_text ltx_lst_space"> </span>mingw64/mingw-w64-x86_64-libtool<span class="ltx_text ltx_lst_space"> </span>mingw32/mingw-w64-i686-libtool</span>
                </td>
</tr>
</table>
</div>
<p class="ltx_p">Once this is done, you may run <span class="ltx_text ltx_font_typewriter">buildLibraries.sh</span> in the CYGWIN64/32 shell to build the libraries, and then build the BOINC version of SixTrack as normal.</p>
</div>
</section>
</section>
<section id="S3.SS5" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.5 </span>Legacy build environments</h3>
<div id="S3.SS5.p1" class="ltx_para">
<p class="ltx_p">In addition to the <span class="ltx_text ltx_font_typewriter">cmake_six</span> build script, there is the <span class="ltx_text ltx_font_typewriter">make_six</span>.
These tools are used in a similar fashion, the main difference is that <span class="ltx_text ltx_font_typewriter">make_six</span> will automatically change depending options, i.e. switching on collimation will automatically switch crlibm off.
The <span class="ltx_text ltx_font_typewriter">make_six</span> script works by modifying the ASTUCE input files before running ASTUCE and DAFOR to produce the FORTRAN files, and then modifying <span class="ltx_text ltx_font_typewriter">Makefile_six.template</span> to contain the correct paths etc. before compiling it.</p>
</div>
<div id="S3.SS5.p2" class="ltx_para">
<p class="ltx_p">Additionally, there is a plain makefile, which uses an option resolver written in BASH.</p>
</div>
<div id="S3.SS5.p3" class="ltx_para">
<p class="ltx_p">Note that these build environments are considered to be obsolete and may soon be removed.</p>
</div>
</section>
<section id="S3.SS6" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">3.6 </span>Running cmake directly</h3>
<span class="ltx_ERROR undefined">\todo</span>
<div id="S3.SS6.p1" class="ltx_para">
<p class="ltx_p">[inline]ccmake etc, as normally done in cmake_six</p>
</div>
</section>
</section>
<section id="S4" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">4 </span>Organization of the SixTrack sources</h2>
<section id="S4.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.1 </span>Coding standards</h3>
</section>
<section id="S4.SS2" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">4.2 </span>Tools</h3>
<div id="S4.SS2.p1" class="ltx_para">
<p class="ltx_p">Two tools are required to pre-process the source code before it can be compiled – astuce and dafor.
These binaries must be compiled first, and are then ran by the build system to to convert the <span class="ltx_text ltx_font_typewriter">.s</span> files into compileable Fortran.</p>
</div>
<section id="S4.SS2.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">4.2.1 </span>Astuce</h4>
</section>
<section id="S4.SS2.SSS2" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">4.2.2 </span>DAFOR</h4>
</section>
<section id="S4.SS2.SSS3" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">4.2.3 </span>The ‘‘beauty’’ linters</h4>
</section>
</section>
</section>
<section id="S5" class="ltx_section">
<h2 class="ltx_title ltx_title_section">
<span class="ltx_tag ltx_tag_section">5 </span>Testing SixTrack</h2>
<div id="S5.p1" class="ltx_para">
<p class="ltx_p">SixTrack supports the <span class="ltx_text ltx_font_typewriter">ctest</span> automatic test environment for black box testing of the build executables.
This runs the SixTrack binary automatically over a range of input files, and compares the produced output with the expected output (known as ‘‘canonicals’’).
In order to run <span class="ltx_text ltx_font_typewriter">ctest</span>, add the <span class="ltx_text ltx_font_typewriter">BUILD_TESTING</span> flag to the <span class="ltx_text ltx_font_typewriter">cmake_six</span> command line arguments.
For GNU compilers, one can also add the flag <span class="ltx_text ltx_font_typewriter">COVERAGE</span>, which makes it possible to see which lines of the code have been exercised by the test.</p>
</div>
<div id="S5.p2" class="ltx_para">
<p class="ltx_p">Note that when implementing new features, one should always run the tests before the new code can be accepted into the master.</p>
</div>
<section id="S5.SS1" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">5.1 </span>Running CTEST</h3>
<div id="S5.SS1.p1" class="ltx_para">
<p class="ltx_p">For running the most basic tests, simply execute</p>
<div id="LSTx39" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,ctest">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
              </td>
<td class="ltx_td">
                <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">ctest</span>
              </td>
</tr>
</table>
</div>
<p class="ltx_p">in the folder created by the build command:</p>
<div id="LSTx40" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,./cmake_six%20BUILD_TESTING">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
              </td>
<td class="ltx_td">
                <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;">./cmake_six<span class="ltx_text ltx_lst_space"> </span>BUILD_TESTING</span>
              </td>
</tr>
</table>
</div>
<p class="ltx_p">containing the new SixTrack executable, e.g. <span class="ltx_text ltx_font_typewriter">*/SixTrack/SixTrack/SixTrack_cmakesix_*BUILD_TESTING*</span>.
This will iterate over the tests, running SixTrack for each of them, and check the output for pass/fail.</p>
</div>
<div id="S5.SS1.p2" class="ltx_para">
<p class="ltx_p">To run several tests in parallel, use the flag <span class="ltx_text ltx_font_typewriter">-j <span class="ltx_text ltx_font_italic">numjobs</span></span>.</p>
</div>
<div id="S5.SS1.p3" class="ltx_para">
<p class="ltx_p">To run specific tests, use the flag <span class="ltx_text ltx_font_typewriter">-R <span class="ltx_text ltx_font_italic">name</span></span>, where <span class="ltx_text ltx_font_italic">name</span> is a regexp contained in the names of the tests you want to run.
It is also possible to exclude certain tests using the <span class="ltx_text ltx_font_typewriter">-E name</span> flag, where again <span class="ltx_text ltx_font_italic">name</span> is a regexp for the tests to exclude.</p>
</div>
<div id="S5.SS1.p4" class="ltx_para">
<p class="ltx_p">The tests are classified as <span class="ltx_text ltx_font_typewriter">fast</span> (<math id="S5.SS1.p4.m1" class="ltx_Math" alttext="\lesssim 60\leavevmode\nobreak\ \mathrm{secconds}" display="inline"><mrow><mi></mi><mo>≲</mo><mrow><mpadded width="+5pt"><mn>60</mn></mpadded><mo>⁢</mo><mi>secconds</mi></mrow></mrow></math>), <span class="ltx_text ltx_font_typewriter">medium</span> (<math id="S5.SS1.p4.m2" class="ltx_Math" alttext="\lesssim 30\leavevmode\nobreak\ \mathrm{minutes}" display="inline"><mrow><mi></mi><mo>≲</mo><mrow><mpadded width="+5pt"><mn>30</mn></mpadded><mo>⁢</mo><mi>minutes</mi></mrow></mrow></math>), or <span class="ltx_text ltx_font_typewriter">slow</span>; it is possible to run a group by using the <span class="ltx_text ltx_font_typewriter">-L</span> flag, e.g. <span class="ltx_text ltx_font_typewriter">-L fast</span> .</p>
</div>
<div id="S5.SS1.p5" class="ltx_para">
<p class="ltx_p">Note that when running a binary compiled with the CR flag, the test harness will kill the binary several times during the run, in order to check that the results still come out correct.</p>
</div>
<div id="S5.SS1.p6" class="ltx_para">
<p class="ltx_p">The tests will be ran in the <span class="ltx_text ltx_font_typewriter">SixTest/<span class="ltx_text ltx_font_italic">testname</span></span> sub-folder created by <span class="ltx_text ltx_font_typewriter">cmake_six</span>.
It is therefore possible to find the produced files, together with the input- and reference files in this folder; the simulation standard output is written to the file <span class="ltx_text ltx_font_typewriter">fort.6</span> in this folder.
The standard output of the test tool are by default stored in the <span class="ltx_text ltx_font_typewriter">Testing/Temporary</span> subfolder.</p>
</div>
<section id="S5.SS1.SSS1" class="ltx_subsubsection">
<h4 class="ltx_title ltx_title_subsubsection">
<span class="ltx_tag ltx_tag_subsubsection">5.1.1 </span>Submitting to CDASH</h4>
<div id="S5.SS1.SSS1.p1" class="ltx_para">
<p class="ltx_p">In order to collect the results of all tests in a organized way, there is a CDash page for SixTrack, which can be found at <a href="http://abp-cdash.web.cern.ch/abp-cdash/index.php?project=SixTrack" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">http://abp-cdash.web.cern.ch/abp-cdash/index.php?project=SixTrack</span></a>.
This page includes information about which tests are running correctly or failing, and optionally code coverage.</p>
</div>
<div id="S5.SS1.SSS1.p2" class="ltx_para">
<p class="ltx_p">In order to send the statistics for a build to CDash, add the argument <span class="ltx_text ltx_font_typewriter">-D Experimental</span> to the <span class="ltx_text ltx_font_typewriter">ctest</span> command line.</p>
</div>
<div id="S5.SS1.SSS1.p3" class="ltx_para">
<p class="ltx_p">On the page that is linked to above, you may either click on the name of a build to see the test results, or you may click on the percentage of coverage to see the coverage.</p>
</div>
</section>
</section>
<section id="S5.SS2" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">5.2 </span>Adding new tests</h3>
</section>
<section id="S5.SS3" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">5.3 </span>Testing tools</h3>
<div id="S5.SS3.p1" class="ltx_para">
<p class="ltx_p">In order to manage the binaries,</p>
</div>
</section>
<section id="S5.SS4" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">5.4 </span>Legacy test environment ‘‘SixTest’’</h3>
<div id="S5.SS4.p1" class="ltx_para">
<p class="ltx_p">The legacy test environment SixTest can also be used to test SixTrack binaries.
It uses the same tests and canonicals as the CDASH-based tests.</p>
</div>
<div id="S5.SS4.p2" class="ltx_para">
<p class="ltx_p">To use it, go to the SixTest folder in the main SixTrack repository.
You then need to set the EXECS environment variable to the full path of the executable(s) you want to test, and the TESTS variable to a list of the names of the tests you want to run:</p>
<div id="LSTx41" class="ltx_listingblock ltx_lstlisting ltx_lst_language_sh ltx_listing">
<div class="ltx_listing_data"><a href="data:text/plain,export%20TESTS=%22bb%20bbe51%20bbe52%20bbe571ib0%20%20bbinbb_ntwin1%20bnl%20crabamp%20dipedge%20distance%20dynk_globalvars%20elensidealthck4d%20elensidealthck6d%20elensidealthin4d%20elensidealthin6d%20elensidealthin6d_DYNK%20eric%20exact%20fma%20frs%20frs60%20javier%20javier_bignpart%20lost%20lostevery%20lostnotilt%20lostnumxv%20notilt%20prob1%20prob3%20s316%20thick4%20thick6dblocks%20thick6ddynk%20thick6dsingles%20tilt%22">⬇</a></div>
<table class="ltx_tabular">
<tr class="ltx_tr">
<td class="ltx_td ltx_lst_linenum">
                <span class="ltx_text ltx_font_typewriter" style="font-size:50%;">1</span>
              </td>
<td class="ltx_td">
                <span class="ltx_text ltx_lst_line ltx_font_typewriter" style="font-size:90%;"><span class="ltx_text ltx_lst_keyword ltx_font_bold">export</span><span class="ltx_text ltx_lst_space"> </span>TESTS="bb<span class="ltx_text ltx_lst_space"> </span>bbe51<span class="ltx_text ltx_lst_space"> </span>bbe52<span class="ltx_text ltx_lst_space"> </span>bbe571ib0<span class="ltx_text ltx_lst_space">  </span>bbinbb_ntwin1<span class="ltx_text ltx_lst_space"> </span>bnl<span class="ltx_text ltx_lst_space"> </span>crabamp<span class="ltx_text ltx_lst_space"> </span>dipedge<span class="ltx_text ltx_lst_space"> </span>distance<span class="ltx_text ltx_lst_space"> </span>dynk_globalvars<span class="ltx_text ltx_lst_space"> </span>elensidealthck4d<span class="ltx_text ltx_lst_space"> </span>elensidealthck6d<span class="ltx_text ltx_lst_space"> </span>elensidealthin4d<span class="ltx_text ltx_lst_space"> </span>elensidealthin6d<span class="ltx_text ltx_lst_space"> </span>elensidealthin6d_DYNK<span class="ltx_text ltx_lst_space"> </span>eric<span class="ltx_text ltx_lst_space"> </span>exact<span class="ltx_text ltx_lst_space"> </span>fma<span class="ltx_text ltx_lst_space"> </span>frs<span class="ltx_text ltx_lst_space"> </span>frs60<span class="ltx_text ltx_lst_space"> </span>javier<span class="ltx_text ltx_lst_space"> </span>javier_bignpart<span class="ltx_text ltx_lst_space"> </span>lost<span class="ltx_text ltx_lst_space"> </span>lostevery<span class="ltx_text ltx_lst_space"> </span>lostnotilt<span class="ltx_text ltx_lst_space"> </span>lostnumxv<span class="ltx_text ltx_lst_space"> </span>notilt<span class="ltx_text ltx_lst_space"> </span>prob1<span class="ltx_text ltx_lst_space"> </span>prob3<span class="ltx_text ltx_lst_space"> </span>s316<span class="ltx_text ltx_lst_space"> </span>thick4<span class="ltx_text ltx_lst_space"> </span>thick6dblocks<span class="ltx_text ltx_lst_space"> </span>thick6ddynk<span class="ltx_text ltx_lst_space"> </span>thick6dsingles<span class="ltx_text ltx_lst_space"> </span>tilt"</span>
              </td>
</tr>
</table>
</div>
<p class="ltx_p">Note that not all tests are applicable for all binaries, and some of the tests are somewhat buggy.</p>
</div>
<div id="S5.SS4.p3" class="ltx_para">
<p class="ltx_p">The tests can then be ran by executing <span class="ltx_text ltx_font_typewriter">run_pro</span> or <span class="ltx_text ltx_font_typewriter">run_kill</span> (for the CR version) with a single argument, the run number.
Once a test has finished, one can check that the results matches with the canonicals by executing <span class="ltx_text ltx_font_typewriter">check_10</span> (to check fort.10, produced by the POST block), <span class="ltx_text ltx_font_typewriter">check_90</span> (to check <span class="ltx_text ltx_font_typewriter">fort.90</span>, produced by the tracking and read by the post-processing), <span class="ltx_text ltx_font_typewriter">check_stf</span> (to check <span class="ltx_text ltx_font_typewriter">singletrackfile.dat</span>, produced instead of <span class="ltx_text ltx_font_typewriter">fort.90</span> if STF is enabled), and <span class="ltx_text ltx_font_typewriter">check_extras</span> to check anything else that is defined in the <span class="ltx_text ltx_font_typewriter">extra_checks.txt</span> file for that test.</p>
</div>
<div id="S5.SS4.p4" class="ltx_para">
<p class="ltx_p">Please note that these scripts are deprecated, and are likely to be removed soon.</p>
</div>
</section>
<section id="S5.SS5" class="ltx_subsection">
<h3 class="ltx_title ltx_title_subsection">
<span class="ltx_tag ltx_tag_subsection">5.5 </span>Known failing tests</h3>
<div id="S5.SS5.p1" class="ltx_para">
<p class="ltx_p">The following tests are currently known to fail:</p>
<dl id="I5" class="ltx_description">
<dt id="I5.ix1" class="ltx_item"><span class="ltx_tag ltx_tag_description">bb, bb_ntwin1</span></dt>
<dd class="ltx_item">
<div id="I5.ix1.p1" class="ltx_para">
<p class="ltx_p">when compiling with ‘‘Debug’’: This is caused by an underflow in the initial closed orbit search, which is uncovered by trapping the underflow exception.</p>
</div>
</dd>
</dl>
</div>
</section>
</section>
<section id="bib" class="ltx_bibliography">
<h2 class="ltx_title ltx_title_bibliography">References</h2>
<ul class="ltx_biblist">
<li id="bib.bib1" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">1</span>
<span class="ltx_bibblock"> CERN GitLab <a href="https://gitlab.cern.ch/" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://gitlab.cern.ch/</span></a>
</span>
      </li>
<li id="bib.bib2" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">2</span>
<span class="ltx_bibblock"> KB0003132: When is it appropriate to use CERN GitLab or external services such as Github? <a href="https://cern.service-now.com/service-portal/article.do?n=KB0003132" title="" class="ltx_ref ltx_url"><span class="ltx_text ltx_font_typewriter">https://cern.service-now.com/service-portal/article.do?n=KB0003132</span></a>
</span>
      </li>
<li id="bib.bib3" class="ltx_bibitem">
        <span class="ltx_bibtag ltx_role_refnum">3</span>
<span class="ltx_bibblock">
S. Kostoglou, N. Karastathis, Y. Papaphilippou, D. Pellegrini and P. Zisopoulos,
‘‘Development of computational tools for noise studies in the LHC’’,
2017, Proceedings of IPAC’17, Copenhagen, Denmark, 2017.
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
