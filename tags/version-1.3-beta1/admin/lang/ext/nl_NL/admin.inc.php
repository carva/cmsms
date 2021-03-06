<?php
$lang['admin']['contenttype_separator'] = 'Separator';
$lang['admin']['contenttype_sectionheader'] = 'Section Header';
$lang['admin']['contenttype_link'] = 'Externe link';
$lang['admin']['contenttype_content'] = 'Content';
$lang['admin']['contenttype_pagelink'] = 'Interne link';
$lang['admin']['nogcbwysiwyg'] = 'Schakel WYSIWYG uit bij HTML-Blokken';
$lang['admin']['destination_page'] = 'Destination Page';
$lang['admin']['additional_params'] = 'Additional Parameters';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href=&quot;http://www.google.com/adsense&quot; target=&quot;_blank&quot;>here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informatie';
$lang['admin']['login_info'] = 'From this point should take into consideration the following parameters';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href=&quot;http://www.google.com/addurl.html&quot;>here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul> ';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject. 
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p> ';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p> ';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p> ';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href=&quot;{cms_selflink href=&quot;alias&quot;}&quot;><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p> ';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p> ';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p> ';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href=&quot;mailto:md@zioncore.com&quot;>md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p> ';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p> ';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p> ';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p> ';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p> ';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p> ';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p> ';
$lang['admin']['of'] = 'van';
$lang['admin']['first'] = 'Eerste';
$lang['admin']['last'] = 'Laatste';
$lang['admin']['adminspecialgroup'] = 'Waarschuwing: leden van deze groep hebben automatisch alle rechten';
$lang['admin']['disablesafemodewarning'] = 'Safe mode-waarschuwing buiten werking stellen';
$lang['admin']['allowparamcheckwarnings'] = 'Parametercontroles toestaan waarschuwingen te genereren';
$lang['admin']['date_format_string'] = 'Tekenreeks met datumopmaak';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> tekenreekst met datumopmaak.';
$lang['admin']['last_modified_at'] = 'Laatst aangepast op';
$lang['admin']['last_modified_by'] = 'Laatst aangepast door';
$lang['admin']['read'] = 'Lees';
$lang['admin']['write'] = 'Schrijf';
$lang['admin']['execute'] = 'Uitvoeren';
$lang['admin']['group'] = 'Groep';
$lang['admin']['other'] = 'Andere';
$lang['admin']['event_desc_moduleupgraded'] = 'Verzonden nadat een module is opgewaardeerd';
$lang['admin']['event_desc_moduleinstalled'] = 'Verzonden na een module-installatie';
$lang['admin']['event_desc_moduleuninstalled'] = 'Verzonden na een module-de&iuml;nstallatie';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Verzonden na het bijwerken van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Verzonden voor het bijwerken van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Verzonden na het verwijderen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Verzonden na het verwijderen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Verzonden na toevoegen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Verzonden voor het toevoegen van gebruikers-gedefinieerde tag';
$lang['admin']['global_umask'] = 'Bestandscreatiemasker (umask)';
$lang['admin']['errorcantcreatefile'] = 'Kan geen bestand aanmaken (rechtenprobleem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Module is incompatibel met deze CMS-versie';
$lang['admin']['errormodulenotloaded'] = 'Interne fout, de module is niet ge&iuml;nstantieerd.';
$lang['admin']['errormodulenotfound'] = 'Interne fout, kan de moduleinstantie niet vinden.';
$lang['admin']['errorinstallfailed'] = 'Moduleinstallatie is mislukt';
$lang['admin']['errormodulewontload'] = 'Probleem bij het instantieren van een beschikbare module';
$lang['admin']['frontendlang'] = 'Standaardtaal voor de website frontend';
$lang['admin']['info_edituser_password'] = 'Dit veld wijzigen om het gebruikerswachtwoord te veranderen';
$lang['admin']['info_edituser_passwordagain'] = 'Dit veld wijzigen om het gebruikerswachtwoord te veranderen';
$lang['admin']['originator'] = 'Versturende module';
$lang['admin']['module_name'] = 'Modulenaam';
$lang['admin']['event_name'] = 'Gebeurtenisnaam';
$lang['admin']['event_description'] = 'Gebeurtenisomschrijving';
$lang['admin']['error_delete_default_parent'] = 'De bovenliggende pagina van de standaardpagina kan niet verwijderd worden.';
$lang['admin']['jsdisabled'] = 'Sorry, deze functie vereist dat Javascript geactiveerd is.';
$lang['admin']['order'] = 'Volgorde';
$lang['admin']['reorderpages'] = 'Pagina&#039;s herschikken';
$lang['admin']['reorder'] = 'Wijzig volgorde';
$lang['admin']['page_reordered'] = 'Pagina met succes herschikt.';
$lang['admin']['pages_reordered'] = 'Pagina&#039;s met succes herschikt';
$lang['admin']['sibling_duplicate_order'] = 'Twee pagina&#039;s binnen hetzelfde niveau kunnen niet dezelfde positie hebben. De pagina&#039;s zijn niet herschikt.';
$lang['admin']['no_orders_changed'] = 'Geen wijzigingen in de paginavolgorde. De pagina&#039;s zijn niet herschikt.';
$lang['admin']['order_too_small'] = 'Een paginapositie kan geen nul zijn. De pagina&#039;s zijn niet herschikt.';
$lang['admin']['order_too_large'] = 'Een paginapositie kan niet groter zijn dan het aantal pagina&#039;s binnen dat niveau. De pagina&#039;s zijn niet herschikt.';
$lang['admin']['user_tag'] = 'Gebruikers-tag';
$lang['admin']['add'] = 'Toevoegen';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Over';
$lang['admin']['action'] = 'Actie';
$lang['admin']['actionstatus'] = 'Actie/ Status';
$lang['admin']['active'] = 'Actief';
$lang['admin']['addcontent'] = 'Nieuwe inhoud toevoegen';
$lang['admin']['cantremove'] = 'Kan niet verwijderen';
$lang['admin']['changepermissions'] = 'Wijzig rechten';
$lang['admin']['changepermissionsconfirm'] = 'WEES VOORZICHTIG\n\n Deze actie probeert alle bestanden waaruit de module bestaat schrijfbaar voor de webserver te maken.\nWeet u zeker dat u door wilt gaan?';
$lang['admin']['contentadded'] = 'De inhoud is aan de database toegevoegd.';
$lang['admin']['contentupdated'] = 'De inhoud is bijgewerkt.';
$lang['admin']['contentdeleted'] = 'De inhoud is uit de database verwijderd';
$lang['admin']['success'] = 'Succes';
$lang['admin']['addcss'] = 'Stylesheet toevoegen';
$lang['admin']['addgroup'] = 'Groep toevoegen';
$lang['admin']['additionaleditors'] = 'Andere editors';
$lang['admin']['addtemplate'] = 'Sjabloon toevoegen';
$lang['admin']['adduser'] = 'Gebruiker toevoegen';
$lang['admin']['addusertag'] = 'Tag toevoegen';
$lang['admin']['adminaccess'] = 'Login voor beheertoegang';
$lang['admin']['adminlog'] = 'Beheerlogboek';
$lang['admin']['adminlogcleared'] = 'Het beheerlogboek is gewist';
$lang['admin']['adminlogempty'] = 'Het beheerlogboek is leeg';
$lang['admin']['adminsystemtitle'] = 'CMS-beheersysteem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple-beheerpaneel';
$lang['admin']['advanced'] = 'Geavanceerd';
$lang['admin']['aliasalreadyused'] = 'Deze alias is al gebruikt voor een andere pagina. Verander &quot;Pagina-alias&quot; in het Opties-tabblad.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias mag alleen uit letters and getallen bestaan.';
$lang['admin']['aliasnotaninteger'] = 'Alias mag geen getal zijn';
$lang['admin']['allpagesmodified'] = 'Alle pagina&#039;s zijn aangepast!';
$lang['admin']['assignments'] = 'Gebruikers toewijzen';
$lang['admin']['associationexists'] = 'Deze toewijzing bestaat al';
$lang['admin']['autoinstallupgrade'] = 'Automatisch installeren of bijwerken';
$lang['admin']['back'] = 'Terug naar menu';
$lang['admin']['backtoplugins'] = 'Terug naar plugin-lijst';
$lang['admin']['cancel'] = 'Annuleren';
$lang['admin']['cantchmodfiles'] = 'Kan de rechten van sommige bestanden niet wijzigen';
$lang['admin']['cantremovefiles'] = 'Probleem bij het verwijderen van bestanden (rechten?)';
$lang['admin']['confirmcancel'] = 'Wijzigingen negeren? Klik op OK om alle wijzigingen te negeren. Klik op Annuleren om door te gaan met wijzigen.';
$lang['admin']['canceldescription'] = 'Wijzingen negeren';
$lang['admin']['clearadminlog'] = 'Maak beheerlogboek leeg';
$lang['admin']['code'] = 'Code ';
$lang['admin']['confirmdefault'] = 'Weet u zeker dat u - %s - als de standaardpagina van de website wilt instellen?';
$lang['admin']['confirmdeletedir'] = 'Weet u zeker dat u deze map met alle inhoud wilt verwijderen?';
$lang['admin']['content'] = 'Inhoud';
$lang['admin']['contentmanagement'] = 'Inhoudsbeheer';
$lang['admin']['contenttype'] = 'Inhoudstype';
$lang['admin']['copy'] = 'Kopieer';
$lang['admin']['copytemplate'] = 'Kopieer sjabloon';
$lang['admin']['create'] = 'Maak';
$lang['admin']['createnewfolder'] = 'Maak nieuwe map';
$lang['admin']['cssalreadyused'] = 'CSS-naam is al in gebruik';
$lang['admin']['cssmanagement'] = 'CSS-beheer';
$lang['admin']['currentassociations'] = 'Huidige verwijzingen';
$lang['admin']['currentdirectory'] = 'Huidige map';
$lang['admin']['currentgroups'] = 'Huidige groepen';
$lang['admin']['currentpages'] = 'Huidige pagina&#039;s';
$lang['admin']['currenttemplates'] = 'Huidige sjablonen';
$lang['admin']['currentusers'] = 'Huidige gebruikers';
$lang['admin']['custom404'] = 'Aangepaste (404) foutmelding';
$lang['admin']['database'] = 'Database ';
$lang['admin']['databaseprefix'] = 'Databasevoorvoegsel';
$lang['admin']['databasetype'] = 'Databasetype';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Standaard';
$lang['admin']['delete'] = 'Verwijder';
$lang['admin']['deleteconfirm'] = 'Weet u zeker dat u - %s - wilt verwijderen?';
$lang['admin']['deleteassociationconfirm'] = 'Weet u zeker dat u de verwijzing naar - %s - wilt verwijderen?';
$lang['admin']['deletecss'] = 'Verwijder CSS';
$lang['admin']['dependencies'] = 'Afhankelijkheden';
$lang['admin']['description'] = 'Omschrijving';
$lang['admin']['directoryexists'] = 'Deze map bestaat al.';
$lang['admin']['down'] = 'Omlaag';
$lang['admin']['edit'] = 'Bewerk';
$lang['admin']['editconfiguration'] = 'Configuratie bewerken';
$lang['admin']['editcontent'] = 'Inhoud bewerken';
$lang['admin']['editcss'] = 'Stylesheet bewerken';
$lang['admin']['editcsssuccess'] = 'Stylesheet bijgewerkt';
$lang['admin']['editgroup'] = 'Groep bewerken';
$lang['admin']['editpage'] = 'Pagina bewerken';
$lang['admin']['edittemplate'] = 'Sjabloon bewerken';
$lang['admin']['edittemplatesuccess'] = 'Sjabloon bijgewerkt';
$lang['admin']['edituser'] = 'Gebruiker bewerken';
$lang['admin']['editusertag'] = 'Gebruikersgedefinieerde tag bewerken';
$lang['admin']['usertagadded'] = 'Gebruikersgedefinieerde tag is toegevoegd.';
$lang['admin']['usertagupdated'] = 'Gebruikersgedefinieerde tag is bijgewerkt.';
$lang['admin']['usertagdeleted'] = 'Gebruikersgedefinieerde tag is verwijderd.';
$lang['admin']['email'] = 'E-mailadres';
$lang['admin']['errorattempteddowngrade'] = 'Moduleinstallatie zou resulteren in een downgrade. Handeling afgebroken.';
$lang['admin']['errorchildcontent'] = 'Pagina bevat gekoppelde pagina&#039;s. Verwijder deze eerst.';
$lang['admin']['errorcopyingtemplate'] = 'Fout bij kopi&euml;ren van de sjabloon';
$lang['admin']['errorcouldnotparsexml'] = 'Fout bij het verwerken van het XML-bestand. Vergewis u ervan dat u een .xml-bestand upload and geen .tar.gz of .zip-bestand';
$lang['admin']['errorcreatingassociation'] = 'Fout bij aanmaken van de verwijzing';
$lang['admin']['errorcssinuse'] = 'Deze stylesheet is nog in gebruik door een of meer sjablonen en/of pagina&#039;s. Verwijder deze verwijzingen eerst.';
$lang['admin']['errordefaultpage'] = 'Kan de standaardpagina niet verwijderen. Definieer eerst een nieuwe.';
$lang['admin']['errordeletingassociation'] = 'Fout bij verwijderen van verwijzing';
$lang['admin']['errordeletingcss'] = 'Fout bij verwijderen stylesheet';
$lang['admin']['errordeletingdirectory'] = 'Kan map niet verwijderen. Controleer of dit een rechtenprobleem is.';
$lang['admin']['errordeletingfile'] = 'Kan bestand niet verwijderen. Controleer of dit een rechtenprobleem is.';
$lang['admin']['errordirectorynotwritable'] = 'Geen rechten om in map te schrijven. Dit kan veroorzaakt worden door bestands- en eigendomsrechten. De veilige modus (PHP safe mode) kan ook aanstaan.';
$lang['admin']['errordtdmismatch'] = 'DTD-versie mist of is onverenigbaar met het XML-bestand';
$lang['admin']['errorgettingcssname'] = 'Fout bij opvragen van stylesheetnaam';
$lang['admin']['errorgettingtemplatename'] = 'Fout bij opvragen van sjabloonnaam';
$lang['admin']['errorincompletexml'] = 'XML-bestand is incompleet of fout';
$lang['admin']['uploadxmlfile'] = 'Installeer module via XML-bestand';
$lang['admin']['cachenotwritable'] = 'De cachemap is niet schrijfbaar. Het legen van de cache is niet mogelijk. Zorg dat de map tmp/cache volledig lees/schrijf/uitvoer rechten heeft (chmod 777). Ook kan het nodig zijn de veilige modus (PHP safe mode) uit te schakelen.';
$lang['admin']['modulesnotwritable'] = 'De modulemap is niet schrijfbaar. Om modules te installeren door een XML-bestand te uploaden, moet de modulemap volledige lees/schrijf/uitvoer rechten hebben (chmod 777). De veilige modus (PHP safe mode) kan ook aanstaan.';
$lang['admin']['noxmlfileuploaded'] = 'Geen bestand ge-upload. Om een module via XML te installeren dient een module .xml bestand op uw computer gekozen en ge-upload worden.';
$lang['admin']['errorinsertingcss'] = 'Fout bij toevoegen van stylesheet';
$lang['admin']['errorinsertinggroup'] = 'Fout bij toevoegen van groep';
$lang['admin']['errorinsertingtag'] = 'Fout bij toevoegen van gebruikers-tag';
$lang['admin']['errorinsertingtemplate'] = 'Fout bij toevoegen van sjabloon';
$lang['admin']['errorinsertinguser'] = 'Fout bij toevoegen van gebruiker';
$lang['admin']['errornofilesexported'] = 'Fout bij exporteren van bestanden naar XML';
$lang['admin']['errorretrievingcss'] = 'Fout bij opvragen van stylesheet';
$lang['admin']['errorretrievingtemplate'] = 'Fout bij opvragen van sjabloon';
$lang['admin']['errortemplateinuse'] = 'Dit sjabloon is nog in gebruik door een pagina. Verwijder deze eerst.';
$lang['admin']['errorupdatingcss'] = 'Fout bij actualiseren van stylesheet';
$lang['admin']['errorupdatinggroup'] = 'Fout bij actualiseren van groep';
$lang['admin']['errorupdatingpages'] = 'Fout bij het bijwerken van de pagina&#039;s';
$lang['admin']['errorupdatingtemplate'] = 'Fout bij actualiseren van sjabloon';
$lang['admin']['errorupdatinguser'] = 'Fout bij actualiseren van gebruiker';
$lang['admin']['errorupdatingusertag'] = 'Fout bij actualiseren van gebruiker-tag';
$lang['admin']['erroruserinuse'] = 'Deze gebruiker is nog eigenaar van pagina&#039;s. Wijs een nieuwe eigenaar toe voordat de oude wordt verwijderd.';
$lang['admin']['eventhandlers'] = 'Gebeurtenissen';
$lang['admin']['editeventhandler'] = 'Gebeurtenisverwerker bewerken';
$lang['admin']['eventhandlerdescription'] = 'Koppel gebruiker-tags aan gebeurtenissen';
$lang['admin']['export'] = 'Exporteer';
$lang['admin']['event'] = 'Gebeurtenis';
$lang['admin']['false'] = 'Nee';
$lang['admin']['settrue'] = 'Zet op Waar (true)';
$lang['admin']['filecreatedirnodoubledot'] = 'De volgende tekens mogen niet voorkomen in een map naam: &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Kan geen map zonder naam aanmaken.';
$lang['admin']['filecreatedirnoslash'] = 'Map kan geen &#039;/&#039; of &#039;\&#039; bevatten.';
$lang['admin']['filemanagement'] = 'Bestandsbeheer';
$lang['admin']['filename'] = 'Bestandsnaam';
$lang['admin']['filenotuploaded'] = 'Bestand kan niet ge&iuml;mporteerd worden. Controleer of dit een rechtenprobleem of een probleem met veilig modus is.';
$lang['admin']['filesize'] = 'Grootte';
$lang['admin']['firstname'] = 'Voornaam';
$lang['admin']['groupmanagement'] = 'Groepsbeheer';
$lang['admin']['grouppermissions'] = 'Groepsrechten';
$lang['admin']['handler'] = 'Verwerker (gebruikergedefinieerd tag)';
$lang['admin']['headtags'] = 'Tags voor paginakop';
$lang['admin']['help'] = 'Uitleg';
$lang['admin']['new_window'] = 'nieuw venster';
$lang['admin']['helpwithsection'] = 'Hulp bij %s';
$lang['admin']['helpaddtemplate'] = '<p>Een sjabloon (template) bepaalt hoe uw site er uitziet.</p><p>Maak het sjabloon hier aan en voeg tevens uw CSS aan het stylesheet-gedeelte toe, zodat u het uiterlijk van uw site zelf kunt bepalen.</p>';
$lang['admin']['helplisttemplate'] = '<p>Via deze pagina kunt u sjablonen aanpassen, verwijderen en nieuwe aanmaken.</p><p>Om een nieuw sjabloon aan te maken klikt u op <u>Nieuw sjabloon</u> .</p><p>Om hetzelfde sjabloon voor alle pagina&#039;s te gebruiken, kies <u>Alle</u>.</p><p>Om een sjabloon te kopi&euml;ren klik op het <u>kopieer</u>ikoon en geef een naam op voor het nieuwe sjabloon.';
$lang['admin']['home'] = 'Start';
$lang['admin']['homepage'] = 'Startpagina';
$lang['admin']['hostname'] = 'Hostnaam';
$lang['admin']['idnotvalid'] = 'Het gegeven id is incorrect';
$lang['admin']['imagemanagement'] = 'Afbeeldingsbeheer';
$lang['admin']['informationmissing'] = 'Er ontbreekt informatie';
$lang['admin']['install'] = 'Installeer';
$lang['admin']['invalidcode'] = 'Incorrecte code ingevoerd.';
$lang['admin']['illegalcharacters'] = 'Ongeldige karakters in veld %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Oneven aantal haakjes';
$lang['admin']['invalidtemplate'] = 'Het sjabloon is niet correct';
$lang['admin']['itemid'] = 'Item-id';
$lang['admin']['itemname'] = 'Item-naam';
$lang['admin']['language'] = 'Taal';
$lang['admin']['lastname'] = 'Achternaam';
$lang['admin']['logout'] = 'Uitloggen';
$lang['admin']['loginprompt'] = 'Voer een geldige gebruikersnaam en -wachtwoord combinatie in om toegang te krijgen tot het beheerpaneel.';
$lang['admin']['logintitle'] = 'CMS Made Simple beheerlogin';
$lang['admin']['menutext'] = 'Menutekst';
$lang['admin']['missingparams'] = 'Een of meer parameters ontbraken of waren niet correct';
$lang['admin']['modifygroupassignments'] = 'Groepstoekenningen wijzigen';
$lang['admin']['moduleabout'] = 'Over de %s module';
$lang['admin']['modulehelp'] = 'Hulp bij de %s module';
$lang['admin']['msg_defaultcontent'] = 'Voeg hier code toe dat verschijnt als standaardinhoud in alle nieuwe pagina&#039;s';
$lang['admin']['msg_defaultmetadata'] = 'Voeg hier code toe dat verschijnt in de metadatasectie in alle nieuwe pagina&#039;s';
$lang['admin']['wikihelp'] = 'Gemeenschapshulp';
$lang['admin']['moduleinstalled'] = 'Module is al ge&iuml;nstalleerd';
$lang['admin']['moduleinterface'] = '%s interface';
$lang['admin']['modules'] = 'Modules ';
$lang['admin']['move'] = 'Verplaatsen';
$lang['admin']['name'] = 'Naam';
$lang['admin']['needpermissionto'] = 'U heeft &#039;%s&#039;-recht nodig om dit te kunnen uitvoeren.';
$lang['admin']['needupgrade'] = 'Moet bijgewerkt worden';
$lang['admin']['newtemplatename'] = 'Nieuwe sjabloonnaam';
$lang['admin']['next'] = 'Volgende';
$lang['admin']['noaccessto'] = 'Geen toegang tot %s';
$lang['admin']['nocss'] = 'Geen stylesheet';
$lang['admin']['noentries'] = 'Geen gegevens';
$lang['admin']['nofieldgiven'] = '%s niet opgegeven.';
$lang['admin']['nofiles'] = 'Geen bestanden';
$lang['admin']['nopasswordmatch'] = 'De wachtwoorden komen niet overeen';
$lang['admin']['norealdirectory'] = 'Deze map bestaat niet';
$lang['admin']['norealfile'] = 'Geen bestaand bestand opgegeven';
$lang['admin']['notinstalled'] = 'Niet ge&iuml;nstalleerd';
$lang['admin']['overwritemodule'] = 'Bestaande modules overschrijven';
$lang['admin']['owner'] = 'Eigenaar';
$lang['admin']['pagealias'] = 'Pagina-alias';
$lang['admin']['pagedefaults'] = 'Paginastandaarden';
$lang['admin']['pagedefaultsdescription'] = 'Stel de standaardwaarden in voor nieuwe pagina&#039;s';
$lang['admin']['parent'] = 'Bovenliggend';
$lang['admin']['password'] = 'Wachtwoord';
$lang['admin']['passwordagain'] = 'Wachtwoord (nogmaals)';
$lang['admin']['permission'] = 'Recht';
$lang['admin']['permissions'] = 'Rechten';
$lang['admin']['permissionschanged'] = 'Rechten zijn bijgewerkt';
$lang['admin']['pluginabout'] = 'Over de %s tag';
$lang['admin']['pluginhelp'] = 'Hulp bij de %s tag';
$lang['admin']['pluginmanagement'] = 'Plugin-beheer';
$lang['admin']['prefsupdated'] = 'Voorkeuren zijn bijgewerkt.';
$lang['admin']['preview'] = 'Voorbeeld';
$lang['admin']['previewdescription'] = 'Voorbeeld wijzigingen';
$lang['admin']['previous'] = 'Vorige';
$lang['admin']['remove'] = 'Verwijderen';
$lang['admin']['removeconfirm'] = 'Hiermee worden de bestanden van deze module installatie volledig verwijderd.\nDoorgaan?';
$lang['admin']['removecssassociation'] = 'Stylesheetkoppeling verwijderen';
$lang['admin']['saveconfig'] = 'Configuratie opslaan';
$lang['admin']['send'] = 'Versturen';
$lang['admin']['setallcontent'] = 'Gebruik voor alle pagina&#039;s';
$lang['admin']['setallcontentconfirm'] = 'Wilt u dit sjabloon voor alle pagina&#039;s gebruiken?';
$lang['admin']['showinmenu'] = 'Toon in menu';
$lang['admin']['showsite'] = 'Toon website';
$lang['admin']['sitedownmessage'] = 'Melding wanneer website off-line is';
$lang['admin']['siteprefs'] = 'Algemene instellingen';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stylesheet ';
$lang['admin']['submit'] = 'Versturen';
$lang['admin']['submitdescription'] = 'Wijzigingen opslaan';
$lang['admin']['tags'] = 'Tags ';
$lang['admin']['template'] = 'Sjabloon';
$lang['admin']['templateexists'] = 'Sjabloonnaam bestaat al';
$lang['admin']['templatemanagement'] = 'Sjabloonbeheer';
$lang['admin']['title'] = 'Titel';
$lang['admin']['tools'] = 'Gereedschappen';
$lang['admin']['true'] = 'Waar';
$lang['admin']['setfalse'] = 'Zet op onwaar';
$lang['admin']['type'] = 'Type ';
$lang['admin']['typenotvalid'] = 'Type is niet correct';
$lang['admin']['uninstall'] = 'De&iuml;nstalleer';
$lang['admin']['uninstallconfirm'] = 'Weet u zeker dat u dit wilt de&iuml;nstalleren?';
$lang['admin']['up'] = 'Omhoog';
$lang['admin']['upgrade'] = 'Bijwerken';
$lang['admin']['upgradeconfirm'] = 'Weet u zeker dat u dit wilt bijwerken?';
$lang['admin']['uploadfile'] = 'Bestand uploaden';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Geavanceerd stylesheetbeheer gebruiken';
$lang['admin']['user'] = 'Gebruiker';
$lang['admin']['userdefinedtags'] = 'Gebruikergedefinieerde tags';
$lang['admin']['usermanagement'] = 'Gebruikersbeheer';
$lang['admin']['username'] = 'Gebruikersnaam';
$lang['admin']['usernameincorrect'] = 'Gebruikersnaam of wachtwoord incorrect';
$lang['admin']['userprefs'] = 'Gebruikersinstellingen';
$lang['admin']['usersassignedtogroup'] = 'Gebruikers aan groep %s toegewezen';
$lang['admin']['usertagexists'] = 'Een tag met deze naam bestaat al. Kies een andere naam.';
$lang['admin']['usewysiwyg'] = 'WYSIWYG editor gebruiker';
$lang['admin']['version'] = 'Versie';
$lang['admin']['view'] = 'Bekijk';
$lang['admin']['welcomemsg'] = 'Welkom %s';
$lang['admin']['directoryabove'] = 'Bovenliggende map';
$lang['admin']['nodefault'] = 'Selecteer een standaard';
$lang['admin']['blobexists'] = 'HTML-bloknaam bestaat al';
$lang['admin']['blobmanagement'] = 'HTML-blokbeheer';
$lang['admin']['errorinsertingblob'] = 'Er was een fout bij het invoegen van het HTML-blok';
$lang['admin']['addhtmlblob'] = 'HTML-blok toevoegen';
$lang['admin']['edithtmlblob'] = 'HTML-blok bewerken';
$lang['admin']['edithtmlblobsuccess'] = 'HTML-blok bijgewerkt';
$lang['admin']['tagtousegcb'] = 'Tag om dit HTML-blok te gebruiken';
$lang['admin']['gcb_wysiwyg'] = 'Activeer HTML-blok WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Activeer de WYSIWYG-editor tijdens het bewerken van HTML-blokken';
$lang['admin']['filemanager'] = 'Bestandsbeheer';
$lang['admin']['imagemanager'] = 'Afbeeldingbeheer';
$lang['admin']['encoding'] = 'Codering';
$lang['admin']['clearcache'] = 'Buffer wissen';
$lang['admin']['clear'] = 'Wissen';
$lang['admin']['cachecleared'] = 'Buffer gewist';
$lang['admin']['apply'] = 'Toepassen';
$lang['admin']['applydescription'] = 'Wijzigingen opslaan en doorgaan met bewerken';
$lang['admin']['none'] = 'geen';
$lang['admin']['wysiwygtouse'] = 'Selecteer de WYSIWYG-editor';
$lang['admin']['syntaxhighlightertouse'] = 'Selecteer de syntax highlighter';
$lang['admin']['cachable'] = 'Kan in buffer opgenomen worden';
$lang['admin']['hasdependents'] = 'Heeft afhankelijkheden';
$lang['admin']['missingdependency'] = 'Afhankelijkheid ontbreekt';
$lang['admin']['minimumversion'] = 'Minimale versie';
$lang['admin']['minimumversionrequired'] = 'Minimaal benodigde CMSMS versie';
$lang['admin']['maximumversion'] = 'Maximale versie';
$lang['admin']['maximumversionsupported'] = 'Maximaal ondersteunde CMSMS versie';
$lang['admin']['depsformodule'] = 'Afhankelijke variabelen voor %s module';
$lang['admin']['installed'] = 'Ge&iuml;nstalleerd';
$lang['admin']['author'] = 'Auteur';
$lang['admin']['changehistory'] = 'Geschiedenis veranderen';
$lang['admin']['moduleerrormessage'] = 'Foutmelding voor %s Module';
$lang['admin']['moduleupgradeerror'] = 'Er was een fout tijdens het opwaarderen van de module.';
$lang['admin']['moduleinstallmessage'] = 'Installatiebericht voor %s module';
$lang['admin']['moduleuninstallmessage'] = 'Boodschap bij verwijderen van %s module';
$lang['admin']['admintheme'] = 'Beheerthema';
$lang['admin']['addstylesheet'] = 'Een stylesheet toevoegen';
$lang['admin']['editstylesheet'] = 'Stylesheet veranderen';
$lang['admin']['addcssassociation'] = 'Eeen stylesheet-koppeling toevoegen';
$lang['admin']['attachstylesheet'] = 'Deze stylesheet koppelen';
$lang['admin']['attachtemplate'] = 'Aan deze sjabloon koppelen';
$lang['admin']['main'] = 'Start';
$lang['admin']['pages'] = 'Pagina&#039;s';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'Bestanden';
$lang['admin']['layout'] = 'Opmaak';
$lang['admin']['usersgroups'] = 'Gebruikers/Groepen';
$lang['admin']['extensions'] = 'Uitbreidingen';
$lang['admin']['preferences'] = 'Voorkeuren';
$lang['admin']['admin'] = 'Websitebeheer';
$lang['admin']['viewsite'] = 'Site bekijken';
$lang['admin']['templatecss'] = 'Sjabloon aan stylesheet toewijzen';
$lang['admin']['plugins'] = 'Plugins ';
$lang['admin']['movecontent'] = 'Pagina&#039;s verplaatsen';
$lang['admin']['module'] = 'Module ';
$lang['admin']['usertags'] = 'Gebruikergedefinieerde tags';
$lang['admin']['htmlblobs'] = 'HTML-blokken';
$lang['admin']['adminhome'] = 'Beheerstartpagina';
$lang['admin']['liststylesheets'] = 'Stylesheets';
$lang['admin']['preferencesdescription'] = 'Beheer hier de site-brede instellingen.';
$lang['admin']['adminlogdescription'] = 'Logboek van beheersactiviteiten.';
$lang['admin']['mainmenu'] = 'Hoofdmenu';
$lang['admin']['users'] = 'Gebruikers';
$lang['admin']['usersdescription'] = 'Hier beheert u websitegebruikers';
$lang['admin']['groups'] = 'Groepen';
$lang['admin']['groupsdescription'] = 'Hier beheert u gebruikersgroepen';
$lang['admin']['groupassignments'] = 'Groepstoekenningen';
$lang['admin']['groupassignmentdescription'] = 'Hier kunt u gebruikers aan groepen toewijzen.';
$lang['admin']['groupperms'] = 'Groepsrechten';
$lang['admin']['grouppermsdescription'] = 'Beheerrechten en toegangsniveaus voor groepen';
$lang['admin']['pagesdescription'] = 'Hier worden pagina&#039;s en andersoortige inhoud bewerkt en toegevoegd.';
$lang['admin']['htmlblobdescription'] = 'HTML-blokken zijn afgeronde inhoud die in pagina&#039;s of sjablonen geplaatst kunnen worden.';
$lang['admin']['templates'] = 'Sjablonen';
$lang['admin']['templatesdescription'] = 'Beheer hier uw website-sjablonen. Deze verzorgen de opmaak van uw website.';
$lang['admin']['stylesheets'] = 'Stylesheets ';
$lang['admin']['stylesheetsdescription'] = 'Stylesheet-beheer is een geavanceerde manier om CSS, gescheiden van uw sjablonen, toe te passen.';
$lang['admin']['filemanagerdescription'] = 'Bestanden importeren en beheren.';
$lang['admin']['imagemanagerdescription'] = 'Afbeeldingen importeren, bewerken en verwijderen.';
$lang['admin']['moduledescription'] = 'Modules breiden CMS Made Simple uit met allerhande functionaliteit.';
$lang['admin']['tagdescription'] = 'Tags zijn kleine stukjes functionaliteit die toegevoegd kunnen worden aan de pagina&#039;s en/ of sjablonen.';
$lang['admin']['usertagdescription'] = 'Tags die u zelf kunt aanmaken en onderhouden om specifieke taken uit te voeren.';
$lang['admin']['installdirwarning'] = '<em><strong>Waarschuwing:</strong></em> de installatiemap is nog aanwezig. Verwijder deze volledig.';
$lang['admin']['subitems'] = 'Subonderdelen';
$lang['admin']['extensionsdescription'] = 'Modules, tags en andere gerelateerde zaken.';
$lang['admin']['usersgroupsdescription'] = 'Gebruikers- en groepsgerelateerde items';
$lang['admin']['layoutdescription'] = 'Website-opmaakmogelijkheden ';
$lang['admin']['admindescription'] = 'Websitebeheerfuncties';
$lang['admin']['contentdescription'] = 'Beheer hier de inhoud van de site.';
$lang['admin']['enablecustom404'] = 'Onderstaand 404 bericht inschakelen';
$lang['admin']['enablesitedown'] = 'Melding Site onbereikbaar inschakelen';
$lang['admin']['bookmarks'] = 'Bladwijzers';
$lang['admin']['user_created'] = 'Gebruikerbladwijzers';
$lang['admin']['forums'] = 'Forums ';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Modulehulp';
$lang['admin']['managebookmarks'] = 'Bladwijzerbeheer';
$lang['admin']['editbookmark'] = 'Bladwijzer veranderen';
$lang['admin']['addbookmark'] = 'Bladwijzer toevoegen';
$lang['admin']['recentpages'] = 'Recente pagina&#039;s';
$lang['admin']['groupname'] = 'Groepsnaam';
$lang['admin']['selectgroup'] = 'Groep selecteren';
$lang['admin']['updateperm'] = 'Rechten bijwerken';
$lang['admin']['admincallout'] = 'Beheerbladwijzers';
$lang['admin']['showbookmarks'] = 'Beheerbladwijzers tonen';
$lang['admin']['hide_help_links'] = 'Hulplinks verbergen';
$lang['admin']['hide_help_links_help'] = 'Aanvinken om de wiki en modulehulp links in paginakoppen uit te schakelen.';
$lang['admin']['showrecent'] = 'Toon onlangs gebruikte pagina&#039;s';
$lang['admin']['attachtotemplate'] = 'Koppel stylesheet aan template';
$lang['admin']['attachstylesheets'] = 'Stylesheets koppelen';
$lang['admin']['indent'] = 'Paginalijst in laten springen om de hierarchie te benadrukken';
$lang['admin']['adminindent'] = 'Paginaweergave';
$lang['admin']['contract'] = 'Vouw sectie in';
$lang['admin']['expand'] = 'Vouw uit';
$lang['admin']['expandall'] = 'Vouw alle secties uit';
$lang['admin']['contractall'] = 'Vouw alle secties in';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Algemene instellingen';
$lang['admin']['adminpaging'] = 'Aantal inhoudsitems om te tonen per pagina in de paginalijst';
$lang['admin']['nopaging'] = 'Laat alle onderdelen zien';
$lang['admin']['myprefs'] = 'Mijn instellingen';
$lang['admin']['myprefsdescription'] = 'Hier kunt u de beheergedeelte naar uw wensen aanpassen';
$lang['admin']['myaccount'] = 'Mijn account';
$lang['admin']['myaccountdescription'] = 'Hier kunt u uw persoonlijke accountgegevens aanpassen';
$lang['admin']['adminprefs'] = 'Gebruikersvoorkeuren';
$lang['admin']['adminprefsdescription'] = 'Hier stelt u beheergerelateerde voorkeuren in.';
$lang['admin']['managebookmarksdescription'] = 'Hier beheert u uw beheerbladwijzers.';
$lang['admin']['options'] = 'Opties';
$lang['admin']['langparam'] = 'Deze parameter wordt gebruikt om de taalkeuze aan te geven. Niet alle modules ondersteunen deze parameter (of hebben deze nodig).';
$lang['admin']['parameters'] = 'Parameters ';
$lang['admin']['mediatype'] = 'Mediatype';
$lang['admin']['mediatype_'] = 'Niets ingesteld : be&iuml;nvloed alles';
$lang['admin']['mediatype_all'] = 'all : geschikt voor alle apparaten';
$lang['admin']['mediatype_aural'] = 'aural : bedoeld voor spraaksynthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : bedoeld voor braillegevoelsterugkoppelapparaten.';
$lang['admin']['mediatype_embossed'] = 'embossed : bedoeld voor brailleprinters.';
$lang['admin']['mediatype_handheld'] = 'handheld : bedoeld voor handheld-apparaten.';
$lang['admin']['mediatype_print'] = 'print : bedoeld voor opgemaakt, ondoorzichtig materiaal en voor documenten die op het scherm in printvoorbeeldmodus bekeken worden.';
$lang['admin']['mediatype_projection'] = 'projection : vedoeld voor geprojecteerde presentaties, bijvoorbeeld projectors of printen naar (transparante) sheets.';
$lang['admin']['mediatype_screen'] = 'screen : voornamelijk bedoeld voor kleurencomputerschermen.';
$lang['admin']['mediatype_tty'] = 'tty : bedoeld voor media die een &quot;fixed-pitch character grid&quot; gebruiken, zoals teletypes en terminals.';
$lang['admin']['mediatype_tv'] = 'tv : bedoeld voor televisieachtige apparaten.';
$lang['admin']['assignmentchanged'] = 'Groepstoewijzingen zijn bijgewerkt.';
$lang['admin']['stylesheetexists'] = 'Stylesheet bestaat';
$lang['admin']['errorcopyingstylesheet'] = 'Fout bij kopi&euml;ren';
$lang['admin']['copystylesheet'] = 'Stylesheet kopi&euml;ren';
$lang['admin']['newstylesheetname'] = 'Nieuwe stylesheet-naam';
$lang['admin']['target'] = 'Doel';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL van de ModuleRepository SOAP server';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Algemene metadata';
$lang['admin']['titleattribute'] = 'Beschrijving (titelattribuut)';
$lang['admin']['tabindex'] = 'Tabindex';
$lang['admin']['accesskey'] = 'Toegangssleutel';
$lang['admin']['sitedownwarning'] = '<strong>Waarschuwing:</strong> u website laat op dit moment een &quot;Website is in onderhoud&quot; bericht zien.  Verwijder het %s bestand om dit op te veranderen.';
$lang['admin']['deletecontent'] = 'Inhoud verwijderen';
$lang['admin']['deletepages'] = 'Deze pagina&#039;s verwijderen?';
$lang['admin']['selectall'] = 'Alles selecteren';
$lang['admin']['selecteditems'] = 'Met geselecteerden';
$lang['admin']['inactive'] = 'Inactief';
$lang['admin']['deletetemplates'] = 'Sjablonen verwijderen';
$lang['admin']['templatestodelete'] = 'Deze sjablonen worden verwijderd';
$lang['admin']['wontdeletetemplateinuse'] = 'Deze sjablonen zijn in gebruik en worden niet verwijderd';
$lang['admin']['deletetemplate'] = 'Stylesheets verwijderen';
$lang['admin']['stylesheetstodelete'] = 'Deze stylesheets worden verwijderd';
$lang['admin']['sitename'] = 'Sitenaam';
$lang['admin']['siteadmin'] = 'Sitebeheer';
$lang['admin']['images'] = 'Afbeeldingbeheer';
$lang['admin']['blobs'] = 'HTML-blokken';
$lang['admin']['groupmembers'] = 'Groepstaken';
$lang['admin']['troubleshooting'] = '(Probleemoplossing)';
$lang['admin']['event_desc_loginpost'] = 'Verzonden nadat een gebruiker in het beheer paneel is ingelogd';
$lang['admin']['event_desc_logoutpost'] = 'Verzonden nadat een gebruiker in het beheer paneel is uitgelogd';
$lang['admin']['event_desc_adduserpre'] = 'Verzonden voordat een nieuwe gebruiker wordt aangemaakt';
$lang['admin']['event_desc_adduserpost'] = 'Verzonden nadat een nieuwe gebruiker is aangemaakt';
$lang['admin']['event_desc_edituserpre'] = 'Verzonden voordat bewerkingen aan een gebruiker worden opgeslagen';
$lang['admin']['event_desc_edituserpost'] = 'Verzonden nadat bewerkingen aan een gebruiker zijn opgeslagen';
$lang['admin']['event_desc_deleteuserpre'] = 'Verzonden voordat een gebruiker uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deleteuserpost'] = 'Verzonden nadat een gebruiker uit het systeem is verwijderd';
$lang['admin']['event_desc_addgrouppre'] = 'Verzonden voordat een nieuwe groep wordt aangemaakt';
$lang['admin']['event_desc_addgrouppost'] = 'Verzonden nadat een nieuwe groep is aangemaakt';
$lang['admin']['event_desc_changegroupassignpre'] = 'Verzonden voordat een groeps toewijzing is opgeslagen';
$lang['admin']['event_desc_changegroupassignpost'] = 'Verzonden nadat een groeps toewijzing is opgeslagen';
$lang['admin']['event_desc_editgrouppre'] = 'Verzonden voordat bewerkingen aan een groep worden opgeslagen';
$lang['admin']['event_desc_editgrouppost'] = 'Verzonden nadat bewerkingen aan een groep zijn opgeslagen';
$lang['admin']['event_desc_deletegrouppre'] = 'Verzonden voordat een groep uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletegrouppost'] = 'Verzonden nadat een groep uit het systeem is verwijderd';
$lang['admin']['event_desc_addstylesheetpre'] = 'Verzonden voordat een nieuw stylesheet wordt aangemaakt';
$lang['admin']['event_desc_addstylesheetpost'] = 'Verzonden nadat een nieuw stylesheet is aangemaakt';
$lang['admin']['event_desc_editstylesheetpre'] = 'Verzonden voordat bewerkingen aan een stylesheet worden opgeslagen';
$lang['admin']['event_desc_editstylesheetpost'] = 'Verzonden nadat bewerkingen aan een stylesheet zijn opgeslagen';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Verzonden voordat een stylesheet uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Verzonden nadat een stylesheet uit het systeem is verwijderd';
$lang['admin']['event_desc_addtemplatepre'] = 'Verzonden voordat een nieuw sjabloon wordt aangemaakt';
$lang['admin']['event_desc_addtemplatepost'] = 'Verzonden nadat een nieuw sjabloon is aangemaakt';
$lang['admin']['event_desc_edittemplatepre'] = 'Verzonden voordat bewerkingen aan een sjabloon worden opgeslagen';
$lang['admin']['event_desc_edittemplatepost'] = 'Verzonden nadat bewerkingen aan een sjabloon zijn opgeslagen';
$lang['admin']['event_desc_deletetemplatepre'] = 'Verzonden voordat een sjabloon uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletetemplatepost'] = 'Verzonden nadat een sjabloon uit het systeem is verwijderd';
$lang['admin']['event_desc_templateprecompile'] = 'Verzonden voordat een sjabloon wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_templatepostcompile'] = 'Verzonden nadat een sjabloon is verwerkt door smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Verzonden voordat een nieuw HTML blok wordt aangemaakt';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Verzonden nadat een nieuw HTML blok is aangemaakt';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Verzonden voordat bewerkingen aan een HTML blok worden opgeslagen';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Verzonden nadat bewerkingen aan een HTML blok zijn opgeslagen';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Verzonden voordat een HTML blok uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Verzonden nadat een HTML blok uit het systeem is verwijderd';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Verzonden voordat een HTML blok wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Verzonden nadat een HTML blok verwerkt door smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Verzonden voordat bewerkingen aan de inhoud worden opgeslagen';
$lang['admin']['event_desc_contenteditpost'] = 'Verzonden nadat bewerkingen aan de inhoud zijn opgeslagen';
$lang['admin']['event_desc_contentdeletepre'] = 'Verzonden voordat de inhoud uit het systeem wordt verwijderd';
$lang['admin']['event_desc_contentdeletepost'] = 'Verzonden nadat de inhoud uit het systeem is verwijderd';
$lang['admin']['event_desc_contentstylesheet'] = 'Verzonden voordat een sytlesheet wordt verzonden naar de browser';
$lang['admin']['event_desc_contentprecompile'] = 'Verzonden voordat de inhoud wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_contentpostcompile'] = 'Verzonden nadat de inhoud is verwerkt door smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Verzonden voordat gecombineerd html wordt verzonden naar de browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Verzonden voordat enige inhoud bedoeld voor smarty wordt verzonden voor verwerking';
$lang['admin']['event_desc_smartypostcompile'] = 'Verzonden nadat enige inhoud bedoeld voor smarty is verwerkt';
$lang['admin']['event_help_loginpost'] = '<p>Verzonden nadat een gebruiker in het beheer paneel is ingelogd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Verzonden nadat een gebruiker in het beheer paneel is uitgelogd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Verzonden voordat een nieuwe gebruiker wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Verzonden nadat een nieuwe gebruiker is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Verzonden voordat bewerkingen aan een gebruiker worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Verzonden nadat bewerkingen aan een gebruiker zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Verzonden voordat een gebruiker uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Verzonden nadat een gebruiker uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Verzonden voordat een nieuwe groep wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Verzonden nadat een nieuwe groep is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Verzonden voordat een groepstoewijzing is opgeslagen.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar een groepobject.</li>
<li>&#039;users&#039; - Tabel van verwijzingen naar gebruikers die toebehoren tot een groep.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Verzonden nadat een groepstoewijzing is opgeslagen.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar een groepobject.</li>
<li>&#039;users&#039; - Tabel van verwijzingen naar gebruikers die toebehoren tot de be&iuml;nvloede groep.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Verzonden voordat bewerkingen aan een groep worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Verzonden nadat bewerkingen aan een groep zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Verzonden voordat een groep uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Verzonden nadat een groep uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Verzonden voordat een nieuw stylesheet wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Verzonden nadat een nieuw stylesheet is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Verzonden voordat bewerkingen aan een stylesheet worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Verzonden nadat bewerkingen aan een stylesheet zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Verzonden voordat een stylesheet uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Verzonden nadat een stylesheet uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Verzonden voordat een nieuw sjabloon wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Verzonden nadat een nieuw sjabloon is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Verzonden voordat bewerkingen aan een sjabloon worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Verzonden nadat bewerkingen aan een sjabloon zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Verzonden voordat een sjabloon uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Verzonden nadat een sjabloon uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Verzonden voordat een sjabloon wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar de be&iuml;nvloedde sjabloontekst.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Verzonden nadat een sjabloon is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar de be&iuml;nvloedde sjabloontekst.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Verzonden voordat een nieuw HTML blok wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Verzonden nadat een nieuw HTML blok is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Verzonden voordat bewerkingen aan een HTML blok worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Verzonden nadat bewerkingen aan een HTML blok zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Verzonden voordat een HTML blok uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Verzonden nadat een HTML blok uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Verzonden voordat een HTML blok wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar de be&iuml;nvloedde HTML bloktekst.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Verzonden nadat een HTML blok is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar de be&iuml;nvloedde HTML bloktekst.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Verzonden voordat bewerkingen aan de inhoud worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Verzonden nadat bewerkingen aan de inhoud is opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Verzonden voordat inhoud uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Verzonden nadat inhoud uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Verzonden voordat een stylesheet wordt verzonden naar de browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde stylesheet-tekst.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Verzonden voordat inhoud wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde inhoudstekst.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Verzonden nadat inhoud is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde inhoudstekst.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Verzonden voordat gecombineerde html wordt verzonden naar de browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde html-tekst.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Verzonden voordat alle inhoud bedoeld voor smarty, wordt verzonden voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde tekst.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Verzonden nadat alle inhoud bedoeld voor smarty, is verwerkt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde tekst.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filter op module';
$lang['admin']['showall'] = 'Alles tonen';
$lang['admin']['core'] = 'Kern';
$lang['admin']['defaultpagecontent'] = 'Standaardpaginainhoud';
$lang['admin']['file_url'] = 'Link naar bestand (in plaats naar URL)';
$lang['admin']['no_file_url'] = 'Geen (gebruik bovenstaande URL)';
$lang['admin']['defaultparentpage'] = 'Bovenliggende standaardpagina';
$lang['admin']['error_udt_name_whitespace'] = 'Fout: gebruikersgedefinieerde tags mogen geen spaties in de naam hebben.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WAARSCHUWING:</em></strong> PHP veilige modus (safe mode) is actief.  Dit kan voor problemen zorgen bij uploads vanuit de webbrowser. Dit geldt voor afbeeldingen, thema&rsquo;s en module-XML-pakketten. Het advies is veilige modus uit te zetten in PHP.';
$lang['admin']['test'] = 'Test ';
$lang['admin']['results'] = 'Resultaten';
$lang['admin']['untested'] = 'Niet getest';
$lang['admin']['unknown'] = 'Niet bekend';
$lang['admin']['download'] = 'Download ';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend WYSIWYG';
$lang['admin']['utma'] = '156861353.152214359.1206628424.1211712982.1211892239.23';
$lang['admin']['utmz'] = '156861353.1211663419.21.20.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,21813.15.html|utmcmd=referral';
$lang['admin']['utmb'] = '156861353';
$lang['admin']['utmc'] = '156861353';
?>