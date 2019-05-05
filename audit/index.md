---
layout: default
---

## Navigation 
[Accessability Audit](https://hluce1.github.io/week4/audit/) || [Rationale and usability tests](https://hluce1.github.io/week4/rationale/) || [Github Pages Home](https://hluce1.github.io/week4/)

### Projects rationale, usability tests and accessibility audit are hosted on github pages:
[Github pages](https://hluce1.github.io/Front-end-Website-Project/).


* <a href "https://hluce1.github.io/Front-end-Website-Project/" </a>

## Perceivable 
<br>
### [1] 1.1.1 Non-text Content - Provide text alternatives for non-text content
<p><b>Issues:</b> H67 would fail due to having a non-empty alt attribute and a title attribute. After looking into purely decorative images, the below fix was implemented. <p>
<b>Fix:</b> Removed the title attribute and gave the alt a null value (alt=””).
<p><b>Final report:</b></p>
<p><b><em>Relevant sufficient techniques 1.1.1</em></b><p>
<p>C9: Procedures:</p>
1.	Check for the presence of decorative images.
2.	Check that they are included with CSS.
<b>Passed</b>
<br>
  
  ## test 
![Branching](https://github.com/hluce1/week4/blob/master/audit/images/1.png)
