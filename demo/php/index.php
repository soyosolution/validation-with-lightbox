
<!DOCTYPE html>
<html>
<head>
    <title>Validation with Lightbox - Soyo Solution</title>
    <meta charset='utf-8'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../scripts/jquery-valid-lightbox-v1.1.js"></script>
    <link type="text/css" href="../../css/jquery-valid-lightbox-v1.1.css" rel="stylesheet" />
    <link href="../../css/demo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <h1>Validation with Lightbox</h1>
</div>
<div id="section">
    <div class="inner" id="content">
    <div id="article">
<div id="left_panel">
<p>"Validation with Lightbox" is a jQuery plugin for validating form and display error or success message with lightbox effects.
This is referenced in some material from Internet and the references are placed at the end of the page.</p>
<p>You can download the full set of code of this jquery plugin from gitHub:</p>
<a href="https://github.com/soyosolution/validation-with-lightbox" target="_blank"><img src="http://tool.soyosolution.com/validation-with-lightbox/images/gitHub-download-button.png" alt="Soyo Solution" /></a>
<br />    <p>Let have a demonstration of the effect first, Please fill in the blanks below and and click the submit button:</p>
    <!-- SOF content-->
    <div id="demo_form">
    <h1>Demo Example</h1>
    <br />
        <form name="demo_form" method="POST" action="javascript:void(0)" onsubmit="return validation_check('success.php');">
        <div class="item">
            <h6><label>First Name</label></h6>
            <div class="input_panel"><input type="text" id="firstname" name="firstname"></div>
        </div>
        <div class="item">
            <h6><label>Last Name</label></h6>
            <div class="input_panel"><input type="text" id="lastname" name="lastname"></div>
        </div>
        <div class="item">
            <h6><label>Age</label></h6>
            <div class="input_panel">
                <select id="age" name="age">
                    <option value=""> - Please select the range -</option>
                    <option value="0">0-18</option>
                    <option value="19">19-35</option>
                    <option value="36">36-50</option>
                    <option value="50">50-90</option>
                    <option value="100">>100</option>
               </select>
            </div>
        </div>
        <div class="item">
            <h6><label>Gender</label></h6>
            <div class="input_panel">
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female    
            </div>
        </div>
        <div class="item">
            <h6><label>Service you like</label></h6>
            <div class="input_panel">
                <input type="checkbox" name="service" value="design">Design<br>
                <input type="checkbox" name="service" value="cs">Customer Service
            </div>
        </div>
        <div class="item">
            <h6><label>Where to know us</label></h6>
            <div class="input_panel">
                <input type="checkbox" name="where_from" value="newspaper">newspaper<br>
                <input type="checkbox" name="where_from" value="friend">friend<br>
                <input type="checkbox" name="where_from" value="internet">internet
            </div>
        </div>
        <input id="submit" type="submit" value="Submit form" class="btn btn-primary" data-toggle="modal" role="button">
        </form>
    </div><!-- EOF demo_form -->

    <p>When you clicked the submit button, error / success message will appear in lightbox dialog,<br />
     and the box below :</p>
    <div id="message_box">Display Error Message Here.</div><!-- EOF message_box -->


<h2>
<a id="user-content-how-to-use" class="anchor" href="#how-to-use" aria-hidden="true"><span class="octicon octicon-link"></span></a>HOW TO USE</h2>

<h3>
<a id="user-content-html-part" class="anchor" href="#html-part" aria-hidden="true"><span class="octicon octicon-link"></span></a>HTML part</h3>

<p>There is HTML part and beware of these 3 points:</p>

<p>You must contain <code>action="javascript:void(0)" onsubmit="return checking('your_url');"</code> in the form tab. action="javascript:void(0)" is for stop submiiting the form, onsubmit="return checking('your_url'); mean run the javascript function named checking() and pass the form submittion target to the javascript funvtion.
 Text box are idenified with the id name.
 Radio and checkbox are idenified with the input flied name.</p>

<pre><code>    &lt;form name="demo_form" method="POST" action="javascript:void(0)" onsubmit="return validation_check('result.php');"&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;First Name&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;&lt;input type="text" id="firstname" name="firstname"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;Last Name&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;&lt;input type="text" id="lastname" name="lastname"&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;Age&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;
                &lt;select id="age" name="age"&gt;
                    &lt;option value=""&gt; - Please select the range -&lt;/option&gt;
                    &lt;option value="0"&gt;0-18&lt;/option&gt;
                    &lt;option value="19"&gt;19-35&lt;/option&gt;
                    &lt;option value="36"&gt;36-50&lt;/option&gt;
                    &lt;option value="50"&gt;50-90&lt;/option&gt;
                    &lt;option value="100"&gt;&gt;100&lt;/option&gt;
               &lt;/select&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;Gender&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;
                &lt;input type="radio" name="gender" value="male"&gt;Male&lt;br&gt;
                &lt;input type="radio" name="gender" value="female"&gt;Female    
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;Service you like&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;
                &lt;input type="checkbox" name="service" value="design"&gt;Design&lt;br&gt;
                &lt;input type="checkbox" name="service" value="cs"&gt;Customer Service
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="item"&gt;
            &lt;h6&gt;&lt;label&gt;Where to know us&lt;/label&gt;&lt;/h6&gt;
            &lt;div class="input_panel"&gt;
                &lt;input type="checkbox" name="where_from" value="newspaper"&gt;newspaper&lt;br&gt;
                &lt;input type="checkbox" name="where_from" value="friend"&gt;friend&lt;br&gt;
                &lt;input type="checkbox" name="where_from" value="internet"&gt;internet
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input id="submit" type="submit" value="Submit form" class="btn btn-primary" data-toggle="modal" role="button"&gt;
    &lt;/form&gt;
</code></pre>

<h3>
<a id="user-content-css-part" class="anchor" href="#css-part" aria-hidden="true"><span class="octicon octicon-link"></span></a>CSS part</h3>

<p>You can import the file <code>jquery-valid-lightbox-v1_1.css</code> only for apply the styles.
 We need these CSS is for creating the lightbox dialog:</p>

<pre><code>    &lt;link href="css/jquery-valid-lightbox-v1_1.css" rel="stylesheet" type="text/css" /&gt;
</code></pre>

<h3>
<a id="user-content-javascript-part" class="anchor" href="#javascript-part" aria-hidden="true"><span class="octicon octicon-link"></span></a>Javascript part</h3>

<p>You need to import the jquery library first, and than import the javascript file of jquery-valid-lightbox plugin.</p>

<pre><code>    &lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="scripts/jquery-valid-lightbox-v1.1.js"&gt;&lt;/script&gt;
</code></pre>

<p>And than Config the sentences below in jquery-valid-lightbox-v1.1.js:</p>

<pre><code>    var config = {
        "form_name"          : "demo_form",                       //Your form name, not id name
        "submit_form"        : true,                              //"true" is submit form, "false" would pop-up an error message.
        "title-message"      : {
            "success_title"  :"Validation Success",               //Lightbox title when validation was success.
            "error_title"    :"Error!"                            //Lightbox title when validation was fail.
        },
        "success-message"    :"Your application is submittted.",  //Lightbox content when validation was succes.
        "error-message"      : [
            {"name"      :"firstname",                            //1st input field name (name bt not id)
             "err_msg"   :"Title 1 is empty"},                    //Related error (1st input field) if validation was incorrect.
            {"name"      :"lastname" ,                            //2st input field name
             "err_msg"   :"You have fogotten fill in Title 2"},   //Related error (2st input field) if validation was incorrect.
            {"name"      :"age",                                  //3st input field name
             "err_msg"   :"Which is the range of your age"},      //Related error (3st input field) if validation was incorrect.
            {"name"      :"gender",                               //4st input field name
             "err_msg"   :"Please select your gender"},           //Related error (4st input field) if validation was incorrect.
            {"name"      :"service"  ,                            //5st input field name
             "err_msg"   :"Which service you like most ?"},       //Related error (5st input field) if validation was incorrect.
            {"name"      :"where_from"  ,                         //6st input field name
             "err_msg"   :"You havn't fill in where to know us."} //Related error (6st input field) if validation was incorrect.         
        ],
        "footer_close_btn_text" :"Close",     //Close button tex on the bottom-right corner of pop-up message box
        "close_btn_icon"        :"X",         //Close button icon on the top-right corner of pop-up message box
    };
</code></pre>

<p>An overview of the value for config:
 </p><table>
    <thead><tr>
<td>value</td>
<td>Default demo value e.g.</td>
<td>Description</td>
</tr></thead>
    <tbody>
        <tr>
<td>form_name</td>
<td>demo_form</td>
<td>Your form name</td>
</tr>
        <tr>
<td>submit_form</td>
<td>true</td>
<td>"true" is submit form, "false" would pop-up an error message.</td>
</tr>
        <tr>
<td>title-message.success_title</td>
<td>Validation Success</td>
<td>Lightbox title when validation was success.</td>
</tr>
        <tr>
<td>title-message.error_title</td>
<td>Error!</td>
<td>Lightbox title when validation was fail.</td>
</tr>
        <tr>
<td>success-message</td>
<td>Your application is submittted.</td>
<td>Lightbox content when validation was succes.</td>
</tr>
        <tr>
<td>error-message.name</td>
<td>gender</td>
<td>Your form name, not id name</td>
</tr>
        <tr>
<td>error-message.err_msg</td>
<td>Please select your gender</td>
<td>Your form name, not id name</td>
</tr>
        <tr>
<td>footer_close_btn_text</td>
<td>Close</td>
<td>Close button tex on the bottom-right corner of pop-up message box</td>
</tr>
        <tr>
<td>close_btn_icon</td>
<td>X</td>
<td>Close button tex on the bottom-right corner of pop-up message box</td>
</tr>
    </tbody>
<tbody>
 </tbody>
</table>

<hr>

<h2>
<a id="user-content-update" class="anchor" href="#update" aria-hidden="true"><span class="octicon octicon-link"></span></a>Update</h2>

<p>=== 13/04/2015 ===<br>
 Many Thanks for a user reporting the fatal problems at the github master-zip package. This update is for fixing the bugs</p>

<ul class="task-list">
<li>Changed file structure in github master zip folder for adding php version demo files</li>
<li>Fix the bugs if user submited the form, can't access the missing "success.html" webpage</li>
<li>Update incorrect js and css part at demo.html and index.html</li>
<li>Update css style for better appearance in index.html &amp; demo.html</li>
<li>follow markup format to tidy up README.md format</li>
</ul>

<p>=== 02/01/2015 ===</p>

<ul class="task-list">
<li>If there is too much error messages (the list of message is more than 500px height), use a scroll bar to display  message content.<br />
<a href="http://tool.soyosolution.com/validation-with-lightbox/images/update_scroll_error.png" target="_blank"><img src="http://tool.soyosolution.com/validation-with-lightbox/images/update_scroll_error.png" alt="Update" style="width:400px;"></a></li>
<li>Change the position where the message box to display (5% height of browser screen height).</li>
<li>Fixed bug: IE7, IE8 and Firefox can’t click the grid layer to close pop up message box.</li>
</ul>

<p>=== 18/12/2014 ===</p>

<ul class="task-list">
<li>Updated the pop-up message box position.</li>
</ul>

<p>=== 17/12/2014 ===
 Fixed big bugs at IE7&amp;IE8 and rewrote some function for better code.</p>

<ul class="task-list">
<li>Validation-with-lightbox v1.1 released</li>
<li>Rewrite some function for more easy to config.</li>
<li>Bug fixed : No lightbox background to be displayed at IE7 and IE8.</li>
<li>Add a "x" button at message box top-right corner for close the message box.</li>
<li>Add a "close" button at message box botttom-right corner for close the message box.</li>
<li>Move error message from hard-code valuables to an object for configing easier</li>
</ul>

<p>=== 29/04/2014 ===<br>
 Validation-with-lightbox released</p>

<hr>

<h2>
<a id="user-content-demo-site" class="anchor" href="#demo-site" aria-hidden="true"><span class="octicon octicon-link"></span></a>DEMO SITE</h2>

<p>For demo, please visit: <a href="http://tool.soyosolution.com/validation-with-lightbox/index.php">http://tool.soyosolution.com/validation-with-lightbox/index.php</a></p>

<hr>

<p>If there is any bugs in this plugin, please feel free to report us at: <a href="mailto:info@soyosolution.com">info@soyosolution.com</a></p>
    <!-- EOF content -->
</div><!-- #left_panel -->

<div id="right_panel">
    <!-- soyosolution_right_160x600 -->
    <ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-4664799911805302" data-ad-slot="2821938117" data-adsbygoogle-status="done"><ins style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><iframe width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>   
    <!-- <img src="http://www.shakeout.org/2008/downloads/ShakeOut_BannerAds_GetReady_160x600_v8.gif" alt="" />-->
</div><!-- #right_panel -->

</div><!-- #article -->
</div><!-- inner -->
</div><!-- #right_panel -->
<div id="footer">
        <div class="inner">
        <div class="top">
        </div><!-- .top -->
        <div class="bottom">
            <div class="left">Text is available under the MIT license; additional terms may apply. <br>
            By using this site, you agree to the Terms of Use and Privacy Policy.<br><br>
            <span>Copyright by Soyo Solution &copy; 2013-<span id="current_year">2014</span>   Powered by Soyo Solution.</span>
            </div>
            <div class="right"><a href="http://www.soyosolution.com" target="_blank"><img src="http://soyosolution.com/projects/plantonichk/images/sponsor/soyosolution.jpg" alt="Soyo Solution Logo"></a></div>
            </div><br><br>    
        </div><!-- .inner -->
</div>
<script type="text/javascript" src="http://www.soyosolution.com/projects/tools/js/getyear.js"></script>
</body>
</html>
