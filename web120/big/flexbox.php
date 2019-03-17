<?php include 'includes/header.php';?>


<!-- START LEFT COL -->
<section>
<h2>Flexbox</h2>
<p>Flexbox is a way of laying out elements that have unknown or changing sizes. It is an alternative to using floats, which only allow the developer to position elements horizontally - float: left or float: right. Block elements only allow the developer to position things vertically, one below the other. Flexbox combines horizontal and vertical, allowing the developer to control what order elements are in as well as spacing (space-between and space-around), alignment (flex-start, flex-end, and center), and how they stretch to fit.</p> 
<p>Flexbox is made up of a “container” and the “items” inside. CSS controls how the items are arranged within the container. The container has the CSS property “display: flex” or “inline-flex” followed by others that determine the layout of the items. There are many ways to order, arrange, and space items within flexbox, more than just the example properties mentioned above.</p> 
<p>Flexbox is most useful for arranging items of varying sizes inside a container whose size also varies. It is ideal for when items need to fit together responsively and look good. It isn't ideal for pixel perfect positioning or for precise grids and columns. Flexbox can also be useful for keeping a header at the top and a footer at the bottom> of a page, by making the body fill the space between them.</p> 
<p>Flexbox comes from CSS3 and is in W3C's candidate recommendation stage, before being adopted as a standard. It is highly supported across browsers, the only ones that have issues are UC Browser, Internet Explorer 10, and Internet Explorer 11. Github has a community-curated list of flexbox bugs and their workarounds for less supported browsers.</p> 
<p>Flexbox Froggy is a game with 24 levels that helps players learn to use flexbox by moving frogs onto the correct lily pad in various positions using flexbox CSS.</p>
<h3>Quotes</h3>
<p>“The Flexbox Layout (Flexible Box) module (a W3C Candidate Recommendation as of October 2017) aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word "flex").” ( “A Complete Guide to Flexbox.”)</p>
<p>“Most importantly, the flexbox layout is direction-agnostic as opposed to the regular layouts (block which is vertically-based and inline which is horizontally-based). While those work well for pages, they lack flexibility (no pun intended) to support large or complex applications (especially when it comes to orientation changing, resizing, stretching, shrinking, etc.).” ( “A Complete Guide to Flexbox.”)</p>
<p>“Note:  Flexbox layout is most appropriate to the components of an application, and small-scale layouts, while the Grid layout is intended for larger scale layouts.” ( “A Complete Guide to Flexbox.”)</p>
<p>“By default, flex items are laid out in the source order. However, the order property controls the order in which they appear in the flex container.” ( “A Complete Guide to Flexbox.”)</p>
<p>“Browser support for flexbox is excellent, and the majority of browsers do not need a prefix at this point.” (ExE-Boss)</p>
<p>“The two browsers you should still keep in mind for cross-browser compatibility are: Internet Explorer 10, which implemented the display: flexbox version of the specification with the -ms- prefix. UC Browser, which still supports the 2009 display: box version only with the -webkit- prefix. Note also that Internet Explorer 11 supports the modern display: flex specification however it has a number of bugs in the implementation.” (ExE-Boss)</p>
<p>“If you are trying to ensure backwards compatibility with old versions of browsers, and in particular IE10 and 11, the Flexbugs site is a helpful resource. You will see that many of the listed bugs apply to old browser versions and are fixed in current browsers. Each of the bugs has a workaround listed — which can save you many hours of puzzling.” (ExE-Boss)</p>
<p>“You can think of a flex element as a parent container with display:flex. Elements placed inside this container are called items.” (Teacher)</p>
<p>“flex-direction:row; justify-content: flex-start |flex-end |center|space-between |space-around |stretch |space-evenly.” (Teacher)
</p>
</section>
 <!-- END LEFT COL -->
    
 <!-- START RIGHT COL -->
<aside class="bibliography">
<h3>Links</h3>
    <ul>
        <li><a href="https://flexboxfroggy.com/" target="_blank">Flexbox Froggy</a></li>
        <li><a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank">CSS Flexbox</a></li>
    </ul>
  <h3>Bibliography</h3>
  <p>“A Complete Guide to Flexbox.” CSS-Tricks, CSS-Tricks, 31 Jan. 2019, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>
  <p>ExE-Boss. “Backwards Compatibility of Flexbox.” MDN Web Docs, Mozilla, 4 Oct. 2018, developer.mozilla.org/en-US/docs/Web/CSS/CSS_<wbr>Flexible_<wbr>Box_<wbr>Layout/Backwards_<wbr>Compatibility_<wbr>of_<wbr>Flexbox.</p>
  <p>Teacher, JavaScript. “The Complete CSS Flex Box Tutorial – JavaScript Teacher – Medium.” Medium.com, Medium, 2 July 2018, medium.com/@js_tut/the-complete-css-flex-box-tutorial-d17971950bdc.</p>
</aside>
 <!-- END RIGHT COL -->


<?php include 'includes/footer.php';?>