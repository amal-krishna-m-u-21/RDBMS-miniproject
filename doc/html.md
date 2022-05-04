
# HTML

## 1.login.html Location:/login_page;


### 1.1 < link rel="value"> //line no:08;



#### 1.1.1 Attribute Values

 Value Description
alternate	Provides a link to an alternate version of the document (i.e. print page, translated or mirror).
Example: <link rel="alternate" type="application/atom+xml" title="W3Schools News" href="/blog/news/atom">
author	Provides a link to the author of the document
dns-prefetch	Specifies that the browser should preemptively perform DNS resolution for the target resource's origin
help	Provides a link to a help document. Example: <link rel="help" href="/help/">
icon	Imports an icon to represent the document.
Example: <link rel="icon" href="favicon.ico" type="image/x-icon">
license	Provides a link to copyright information for the document
next	Provides a link to the next document in the series
pingback	Provides the address of the pingback server that handles pingbacks to the current document
preconnect	Specifies that the browser should preemptively connect to the target resource's origin.
prefetch	Specifies that the browser should preemptively fetch and cache the target resource as it is likely to be required for a follow-up navigation
preload	Specifies that the browser agent must preemptively fetch and cache the target resource for current navigation according to the destination given by the "as" attribute (and the priority associated with that destination).
prerender	Specifies that the browser should pre-render (load) the specified webpage in the background. So, if the user navigates to this page, it speeds up the page load (because the page is already loaded). Warning! This wastes the user's bandwidth! Only use prerender if you are absolutely sure that the webpage is required at some point in the user's journey
prev	Indicates that the document is a part of a series, and that the previous document in the series is the referenced document
search	Provides a link to a resource that can be used to search through the current document and its related pages.
stylesheet	Imports a style sheet


### 1.2. < script src="URL" >< /script>//line no:09;

If you want to run the same JavaScript on several pages in a web site, you should create an external JavaScript file, instead of writing the same script over and over again. Save the script file with a .js extension, and then refer to it using the src attribute in the <script> tag.

Note: The external script file cannot contain the <script> tag.

Note: Point to the external script file exactly where you would have written the script.

### 1.3 <  div class="">< /div>//first occurence line:14;

The <div> tag defines a division or a section in an HTML document.

The <div> tag is used as a container for HTML elements - which is then styled with CSS or manipulated with JavaScript.

The <div> tag is easily styled by using the class or id attribute.

Any sort of content can be put inside the <div> tag! 

Note: By default, browsers always place a line break before and after the <div> element.

### 1.4 <    label for="">//line no:23;



Proper use of labels with the elements above will benefit:

Screen reader users (will read out loud the label, when the user is focused on the element)
Users who have difficulty clicking on very small regions (such as checkboxes) - because when a user clicks the text within the <label> element, it toggles the input (this increases the hit area). 
#### 1.4.1 Attributes
for	element_id	Specifies the id of the form element the label should be bound to
form	form_id	Specifies which form the label belongs to




### 1.5 <   form name="" action="" onsubmit=""  method="" required> //line no:25


The <form> element can contain one or more of the following form elements:

<input>
<textarea>
<button>
<select>
<option>
<optgroup>
<fieldset>
<label>
<output>



Attribute-accept-charset	Value - character_set Description-	Specifies the character encodings that are to be used for the form submission

Attribute - action Value- URL Description- specifies where to send the form-data when a form is submitted 
 
 Attribute - autocomlete Value- on/off Description- specifies whetjer a form should have autocomlete on or off

 Attribute - enctype Value- aplication/x-www-form-urlencoded multipart/form-datatext/plain  Description- specifies how the form-data should be encoded when submitting it to the sever (only for method="Post")

 Attribute-method Value-get/post Description- specifies the HTTP mehod to use when sending form -data

 Attribute-name Value-text Description- specifies the name of a form
 Attribute - novalidate  Value-novalidate Desription- specifies that the form should not ve validated when submitted

Attribute -rel Value - external hel license next nofollow nooener norefferer openere prev search  Description- specifies the relaionship vetween a linked resource and the current document 

Attribute - target Value- _blank _self _parent  _top Description- specifies where to display the repose that is received after submitting the form
 
 
 
 

### 1.6   <    input type="" name ="" placeholder="">//line no:29;

The placeholder attribute specifies a short hint that describes the expected value of an input field (e.g. a sample value or a short description of the expected format). The short hint is displayed in the input field before the user enters a value.

### 1.7  Attribute -> onclick=""//line no:34;
 The Html <button onclick=" "> is an event attribute, which executes a script when the button is clicked. This attribute is supported by all browsers. It is also used to call a function when the button is clicked.
 ### 1.8   <     a href="URL"> //line no :40;
 The <a> tag defines a hyperlink, which is used to link from one page to another. The most important attribute of the <a> element is the href attribute, which indicates the link's destination. By default, links will appear as follows in all browsers: An unvisited link is underlined and blue.

### 1.9   Attribute-> onsubmit="" //line no:25;
The purpose of the HTML onsubmit attribute is to execute the code specified, when the associated form is submitted. HTML onsubmit attribute supports form element. Script. A script which is to be executed.

## 2  forgot.html Location::/login_Page;
## 3 interest.html Location:/login_page;
## 4 dashboard.html; Location:/login_Page;
