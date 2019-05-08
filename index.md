---
layout: default
---

## Navigation 
[Accessability Audit](https://hluce1.github.io/week4/audit/) || [Rationale and usability tests](https://hluce1.github.io/week4/rationale/) || [Github Pages Home](https://hluce1.github.io/week4/)

### Projects rationale, usability tests and accessibility audit are hosted on github pages:
[Github pages](https://hluce1.github.io/Front-end-Website-Project/).

# About / Synopsis

* What is it, what does it do / Abstract
* Project status: working/prototype
* Nuxeo Support

# Table of contents

Use for instance https://github.com/ekalinin/github-markdown-toc

# Installation

Sample:
- From the Nuxeo Marketplace: install [the Sample Nuxeo Package](https://connect.nuxeo.com/nuxeo/site/marketplace/package/nuxeo-sample).
- From the Nuxeo server web UI "Admin / Update Center / Packages from Nuxeo Marketplace"
- From the command line: `nuxeoctl mp-install nuxeo-sample`

# Usage
## Screenshots
## Features

# Code
## QA

[![Build Status](https://qa.nuxeo.org/jenkins/buildStatus/icon?job=addons_nuxeo-sample-project-master)](https://qa.nuxeo.org/jenkins/job/addons_nuxeo-sample-project-master/)


Druing the planning phases, the first [wireframe](https://user-images.githubusercontent.com/47615809/57193719-c8b0b900-6f81-11e9-9fb4-82ec09d8e50b.png) was used to 

//////////////////////////// tests 

<h2>Assignment Approach:</h2>

<p align="justify">In the beginning phases of this assessment the focus was centered on how to incorporate the main content from the Tocumwal archive into this final site in an accessible and fully responsive way. Utilising the previous assignment I expected to use a lot of the same written content and then to continue designing the site for this assessment. This went as planned however, a lot of the content from the previous assessment was cut as it was unnecessary, both in terms of design and usability. </p>

<p align="justify">Overall for the final assessment, the first wireframe sketch was made to reflect how the current content could be built upon further for a more responsive design. While the second wireframe was used after all the content needed was planned. This wireframe became the final building block referred to when making this site.</p>

<p align="justify">The last approach was to refine all usability and accessibility errors and implement fixes when they were needed. This was because the rounds of usability testing and accessibility testing showed where the site would need certain tweaks or changes. The usability testing was carried out through cognitive walkthroughs, to determine what tasks users would follow in order to use the site. While the accessibility tests came from the WCAG checklist and the final audit.</p>

![Branching](https://user-images.githubusercontent.com/47615809/57345253-7cd25f80-718d-11e9-8560-c1b9ed94d48d.png)

<h2>Designs that inspired me:</h2>

<h5> [Image 3] </h5>
![Branching](https://user-images.githubusercontent.com/47615809/57297608-5c65bf00-7113-11e9-991d-869dab96a966.jpg)

<h5> [Image 4] </h5>
![Branching](https://user-images.githubusercontent.com/47615809/57297603-55d74780-7113-11e9-8c25-f0c0ea24121e.jpg)

<h5> [Image 5] </h5>
![Branching](https://user-images.githubusercontent.com/47615809/57297622-62f43680-7113-11e9-98f3-c9d13b7a6eb9.jpg)

<h2> Design Decisions </h2>

<p>The site took inspiration from the above website designs and lead to the following design decisions: </p>
  
* Making the main responsive content the Tocumwal stories section and the contact form. Using flex boxes and containers to create these sections. 
  
* Inspiration from Colorlibs (image 3) navigation bar. However opting not to use the hamburger menu. 

*	Utilising flex boxes for when the content would need to be at smaller resolutions. Some trouble with this did occur when more than two flex boxes were added to the one container, so I just created two containers instead. 

*	Using CSS and HTML only parallax images.

*	Changes to the parallax images design were to stop the effect once users get to tablet and below resolutions to not cause usability issues. 

*	The Toolplate template (image 4) gave me the idea to break up the introductory paragraphs and show the Tocumwal stories. 

*	The font and colours were carried from the previous assessment.

*	I tried out using different colours, mainly blue, in order to meet more accessibility standards. However, after discussing with Ben, that specific guideline wasn’t necessary for this assessment. 

*	I also started utilising a different colour scheme instead of just white for the bottom content, taking inspiration from Icognitothemes (image 5) template. 

<h5> [Image 6] Colour Palette </h5>
![Branching](https://user-images.githubusercontent.com/47615809/57297593-4eb03980-7113-11e9-822d-9221f65f5d6d.jpg)

<h2> Challenges </h2>

<p> Main challanges: </p>

* Accessibility:
  - The main accessibility issue came from having a back to top button. This made the visual presentation of the content not match the order of the code. The fix was just to remove it all together as users aren’t scrolling on this site for long. 
  
* Usability:
  - The inconsistency of the site needed to be fixed. Having a green submit button, and other colours in the form didn’t match with the rest of the site. WCAG also recommends having fully red labels for required form fields, but ultimately I decided against that, and just have it for the asterisks.
  - Content at different resolutions for mobile and screen above 2K, could become hard to read. So the font sizes needed to be changed for mobiles and all content for 2K and above resolutions have a CSS zoom property applied to help scale the content. 
  
* Both:
  - Using the correct from elements and attributes for screen readers, there needed to be a logical flow to the order or the content read to users. A lot of time was spent making the form read logically for all user types and represented in a visual way that was accessible. The main fixes where label names and making red asterisks.   




