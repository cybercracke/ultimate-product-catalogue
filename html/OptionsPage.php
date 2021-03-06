<?php 
	/* Basic Options */
	$Color = get_option("UPCP_Color_Scheme");
	$Links = get_option("UPCP_Product_Links");
	$Tags = get_option("UPCP_Tag_Logic");
	$Filter = get_option("UPCP_Filter_Type");
	$ReadMore = get_option("UPCP_Read_More");
	$Detail_Desc_Chars = get_option("UPCP_Desc_Chars");
	$Sidebar_Order = get_option("UPCP_Sidebar_Order");
	$Filter_Title = get_option("UPCP_Filter_Title");
	$Detail_Image = get_option("UPCP_Details_Image");
	$CaseInsensitiveSearch = get_option("UPCP_Case_Insensitive_Search");
	$Apply_Contents_Filter = get_option("UPCP_Apply_Contents_Filter");
	$Maintain_Filtering = get_option("UPCP_Maintain_Filtering");
	
	/* Premium Options */
	$InstallVersion = get_option("UPCP_First_Install_Version");
	$Custom_Product_Page = get_option("UPCP_Custom_Product_Page");
	$Product_Inquiry_Form = get_option("UPCP_Product_Inquiry_Form");
	$Lightbox = get_option("UPCP_Lightbox");
	$Products_Per_Page = get_option("UPCP_Products_Per_Page");
	$Pagination_Location = get_option("UPCP_Pagination_Location");
	$Product_Search = get_option("UPCP_Product_Search");
	$Product_Sort = get_option("UPCP_Product_Sort");
	$CF_Conversion = get_option("UPCP_CF_Conversion");
	$Related_Products = get_option("UPCP_Related_Products");
	$Next_Previous = get_option("UPCP_Next_Previous");
	$Access_Role = get_option("UPCP_Access_Role");
	$Custom_Fields_Blank = get_option("UPCP_Custom_Fields_Blank");
	
	/* Labelling Options */
	$Categories_Label = get_option("UPCP_Categories_Label");
	$SubCategories_Label = get_option("UPCP_SubCategories_Label");
	$Tags_Label = get_option("UPCP_Tags_Label");
	$Custom_Fields_Label = get_option("UPCP_Custom_Fields_Label");
	$Details_Label = get_option("UPCP_Details_Label");
	$Sort_By_Label = get_option("UPCP_Sort_By_Label");
	$Product_Name_Search_Label = get_option("UPCP_Product_Name_Search_Label");
	$Product_Search_Text_Label = get_option("UPCP_Product_Name_Text_Label");
	$Back_To_Catalogue_Label = get_option("UPCP_Back_To_Catalogue_Label");
	$No_Results_Found_Label = get_option("UPCP_No_Results_Found_Label");
	$Products_Pagination_Label = get_option("UPCP_Products_Pagination_Label");

	/* SEO Options */
	$PrettyLinks = get_option("UPCP_Pretty_Links");
	$XML_Sitemap_URL = get_option("UPCP_XML_Sitemap_URL");
	$SEO_Option = get_option("UPCP_SEO_Option");
	$SEO_Integration = get_option("UPCP_SEO_Integration");
	$SEO_Title = get_option("UPCP_SEO_Title");
	$Update_Breadcrumbs = get_option("UPCP_Update_Breadcrumbs");

	/* Catalogue Skin Options */
	$Catalogue_Style = get_option("UPCP_Catalogue_Style");

	/* Thumbnail View Options */
	$Thumbnail_View_Image_Hover_Fade = get_option("UPCP_Thumbnail_View_Image_Hover_Fade"); //New
	$Thumbnail_View_Mouseover_Zoom = get_option("UPCP_Thumbnail_View_Mouseover_Zoom"); //New
	$Thumbnail_View_Image_Height = get_option("UPCP_Thumbnail_View_Image_Height"); //New
	$Thumbnail_View_Image_Width = get_option("UPCP_Thumbnail_View_Image_Width"); //New
	$Thumbnail_View_Image_Holder_Height = get_option("UPCP_Thumbnail_View_Image_Holder_Height"); //New
	$Thumbnail_View_Image_Holder_Width = get_option("UPCP_Thumbnail_View_Image_Holder_Width"); //New
	$Thumbnail_View_Image_Border = get_option("UPCP_Thumbnail_View_Image_Border"); //New
	$Thumbnail_View_Image_Border_Color = get_option("Thumbnail_View_Image_Border_Color"); //New
	$Thumbnail_View_Box_Width = get_option("UPCP_Thumbnail_View_Box_Width"); //New
	$Thumbnail_View_Box_Padding = get_option("UPCP_Thumbnail_View_Box_Padding"); //New
	$Thumbnail_View_Box_Margin = get_option("UPCP_Thumbnail_View_Box_Margin"); //New
	$Thumbnail_View_Box_Border = get_option("UPCP_Thumbnail_View_Box_Border"); //New
	$Thumbnail_View_Border_Color = get_option("UPCP_Thumbnail_View_Border_Color"); //New
	$Thumbnail_View_Title_Font_Size = get_option("UPCP_Thumbnail_View_Title_Font_Size"); //New
	$Thumbnail_View_Title_Color = get_option("UPCP_Thumbnail_View_Title_Color"); //New
	$Thumbnail_View_Title_Font = get_option("UPCP_Thumbnail_View_Title_Font"); //New
	$Thumbnail_View_Zoom_On_Image_Hover = get_option("UPCP_Thumbnail_View_Zoom_On_Image_Hover"); //New
	$Thumbnail_View_Background_Color = get_option("UPCP_Thumbnail_View_Background_Color"); //New
	$Thumbnail_View_Separator_Line = get_option("UPCP_Thumbnail_View_Separator_Line"); //New
	$Thumbnail_View_Details_Arrow = get_option("UPCP_Thumbnail_View_Details_Arrow"); //New
	$Thumbnail_View_Custom_Details_Arrow = get_option("UPCP_Thumbnail_View_Custom_Details_Arrow"); //New
	
	/* List View Options */
	$List_View_Image_Hover_Fade = get_option("UPCP_List_View_Image_Hover_Fade"); //New
	$List_View_Mouseover_Zoom = get_option("UPCP_List_View_Mouseover_Zoom"); //New
	$List_View_Image_Height = get_option("UPCP_List_View_Image_Height"); //New
	$List_View_Image_Width = get_option("UPCP_List_View_Image_Width"); //New
	$List_View_Image_Holder_Height = get_option("UPCP_List_View_Image_Holder_Height"); //New
	$List_View_Image_Holder_Width = get_option("UPCP_List_View_Image_Holder_Width"); //New
	$List_View_Image_Border = get_option("UPCP_List_View_Image_Border"); //New
	$List_View_Image_Border_Color = get_option("List_View_Image_Border_Color"); //New
	$List_View_Box_Width = get_option("UPCP_List_View_Box_Width"); //New
	$List_View_Box_Padding = get_option("UPCP_List_View_Box_Padding"); //New
	$List_View_Box_Margin = get_option("UPCP_List_View_Box_Margin"); //New
	$List_View_Box_Border = get_option("UPCP_List_View_Box_Border"); //New
	$List_View_Border_Color = get_option("UPCP_List_View_Border_Color"); //New
	$List_View_Title_Font_Size = get_option("UPCP_List_View_Title_Font_Size"); //New
	$List_View_Title_Color = get_option("UPCP_List_View_Title_Color"); //New
	$List_View_Title_Font = get_option("UPCP_List_View_Title_Font"); //New
	$List_View_Zoom_On_Image_Hover = get_option("UPCP_List_View_Zoom_On_Image_Hover"); //New
	$List_View_Background_Color = get_option("UPCP_List_View_Background_Color"); //New
	$List_View_Separator_Line = get_option("UPCP_List_View_Separator_Line"); //New
	$List_View_Details_Arrow = get_option("UPCP_List_View_Details_Arrow"); //New
	$List_View_Custom_Details_Arrow = get_option("UPCP_List_View_Custom_Details_Arrow"); //New
	
	/* Detail View Options */
	$Detail_View_Image_Hover_Fade = get_option("UPCP_Detail_View_Image_Hover_Fade"); //New
	$Detail_View_Mouseover_Zoom = get_option("UPCP_Detail_View_Mouseover_Zoom"); //New
	$Detail_View_Image_Height = get_option("UPCP_Detail_View_Image_Height"); //New
	$Detail_View_Image_Width = get_option("UPCP_Detail_View_Image_Width"); //New
	$Detail_Image_Holder_Height = get_option("UPCP_Detail_View_Image_Holder_Height"); //New
	$Detail_View_Image_Holder_Width = get_option("UPCP_Detail_View_Image_Holder_Width"); //New
	$Detail_View_Image_Border = get_option("UPCP_Detail_View_Image_Border"); //New
	$Detail_View_Image_Border_Color = get_option("Detail_View_Image_Border_Color"); //New
	$Detail_View_Box_Width = get_option("UPCP_Detail_View_Box_Width"); //New
	$Detail_View_Box_Padding = get_option("UPCP_Detail_View_Box_Padding"); //New
	$Detail_View_Box_Margin = get_option("UPCP_Detail_View_Box_Margin"); //New
	$Detail_View_Box_Border = get_option("UPCP_Detail_View_Box_Border"); //New
	$Detail_View_Border_Color = get_option("UPCP_Detail_View_Border_Color"); //New
	$Detail_View_Title_Font_Size = get_option("UPCP_Detail_View_Title_Font_Size"); //New
	$Detail_View_Title_Color = get_option("UPCP_Detail_View_Title_Color"); //New
	$Detail_View_Title_Font = get_option("UPCP_Detail_View_Title_Font"); //New
	$Detail_View_Zoom_On_Image_Hover = get_option("UPCP_Detail_View_Zoom_On_Image_Hover"); //New
	$Detail_View_Background_Color = get_option("UPCP_Detail_View_Background_Color"); //New
	$Detail_View_Separator_Line = get_option("UPCP_Detail_View_Separator_Line"); //New
	$Detail_View_Details_Arrow = get_option("UPCP_Detail_View_Details_Arrow"); //New
	$Detail_View_Custom_Details_Arrow = get_option("UPCP_Detail_View_Custom_Details_Arrow"); //New
	
	/* Sidebar Options */
	$Sidebar_Title_Collapse = get_option("UPCP_Sidebar_Title_Collapse");
	$Sidebar_Title_Hover = get_option("UPCP_Sidebar_Title_Hover");	
	$Sidebar_Checkbox_Style = get_option("UPCP_Sidebar_Checkbox_Style");
	$Custom_Fields_Show_Hide = get_option("UPCP_Custom_Fields_Show_Hide");
	
	/* Pagination Options */
	$Pagination_Background = get_option("UPCP_Pagination_Background");		
	$Pagination_Border = get_option("UPCP_Pagination_Border");
	$Pagination_Shadow = get_option("UPCP_Pagination_Shadow");
	$Pagination_Gradient = get_option("UPCP_Pagination_Gradient");
	$Pagination_Font = get_option("UPCP_Pagination_Font");
	
	/* Default PP Options */
	$Single_Page_Price = get_option("UPCP_Single_Page_Price");
	$Extra_Elements_Array = get_option("UPCP_Extra_Elements");
	$Extra_Elements = explode(",", $Extra_Elements_Array);
	
	/* Custom PP Options */
	$PP_Grid_Width = get_option("UPCP_PP_Grid_Width");
	$PP_Grid_Height = get_option("UPCP_PP_Grid_Height");
	$Top_Bottom_Padding = get_option("UPCP_Top_Bottom_Padding");
	$Left_Right_Padding = get_option("UPCP_Left_Right_Padding");
	
	/* Tabbed PP Options */

?>
<div class="wrap">
<div class="upcp-options-submenu-div">
	<h3 class="upcp-options-submenu">
		<a id="Functional_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == '' or $Display_Tab == 'Functional') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Functional');">Functional</a>
		<a id="SEO_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'SEO') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('SEO');">SEO</a>
		<a id="Labelling_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Labelling') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Labelling');">Labelling</a>
		<a id="Styling_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Styling') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Styling');">Styling</a>
	</h3>
</div>

<form method="post" action="admin.php?page=UPCP-options&DisplayPage=Options&Action=UPCP_UpdateOptions">
<div id='Functional' class='upcp-option-set'>
<h3 id='label-basic-options' class='upcp-option-tab'>Basic Options</h3>
<table id='basic-options' class="form-table upcp-options-table upcp-hidden">
	<tr>
	<th scope="row"><?php _e("Catalogue Color", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('color_scheme_exp')" onMouseOut="HideToolTip('color_scheme_exp')" class="questionMark"><br> 
	<div id="color_scheme_exp" class="toolTip" ><?php _e("Set the color of the image and border elements", 'UPCP')?></div></div>
	</th>
	<td >
		<fieldset><legend class="screen-reader-text"><span><?php _e("Catalogue Color", 'UPCP')?></span></legend>
		<label title='Blue'><input type='radio' name='color_scheme' value='Blue' <?php if($Color == "Blue") {echo "checked='checked'";} ?> /> <span><?php _e("Blue", 'UPCP')?></span></label><br />
		<label title='Black'><input type='radio' name='color_scheme' value='Black' <?php if($Color == "Black") {echo "checked='checked'";} ?> /> <span><?php _e("Black", 'UPCP')?></span></label><br />
		<label title='Grey'><input type='radio' name='color_scheme' value='Grey' <?php if($Color == "Grey") {echo "checked='checked'";} ?> /> <span><?php _e("Grey", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Links", 'UPCP')?> <br>
	<div onMouseOver="ShowToolTip('product_links_exp')" onMouseOut="HideToolTip('product_links_exp')" class="questionMark"><br> 
	<div id="product_links_exp" class="toolTip" ><?php _e("Should external product links open in a new window?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Product Links", 'UPCP')?></span></legend>
		<label title='Same'><input type='radio' name='product_links' value='Same' <?php if($Links == "Same") {echo "checked='checked'";} ?> /> <span><?php _e("Open in Same Window", 'UPCP')?></span></label><br />
		<label title='New'><input type='radio' name='product_links' value='New' <?php if($Links == "New") {echo "checked='checked'";} ?> /> <span><?php _e("Open in New Window", 'UPCP')?></span></label><br />
		<!--<label title='External'><input type='radio' name='product_links' value='External' <?php if($Links == "External") {echo "checked='checked'";} ?> /> <span><?php _e("Open External Links Only in New Window", 'UPCP')?></span></label><br />-->
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Read More", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('read_more_exp')" onMouseOut="HideToolTip('read_more_exp')" class="questionMark"><br> 
	<div id="read_more_exp" class="toolTip" ><?php _e("In the 'Details' layout, should the product description be cutoff if it's long?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("'Read More' for Details view", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='read_more' value='Yes' <?php if($ReadMore == "Yes") {echo "checked='checked'";} ?> /> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='read_more' value='No' <?php if($ReadMore == "No") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	<tr>
	<th scope="row"><?php _e("Characters in Details Description", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('desc_count_exp')" onMouseOut="HideToolTip('desc_count_exp')" class="questionMark"><br> 
	<div id="desc_count_exp" class="toolTip" ><?php _e("Set maximum number of characters in product description in the 'Details' layout", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Characters in 'Details' Description", 'UPCP')?></span></legend>
		<input type='text' name='desc_count' value='<?php echo $Detail_Desc_Chars; ?>'/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Sub-Category Style", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('sidebar_order_exp')" onMouseOut="HideToolTip('sidebar_order_exp')" class="questionMark"><br> 
	<div id="sidebar_order_exp" class="toolTip" ><?php _e("Should categories and sub-categories be arranged hierarchically or be grouped?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How Should Sub-Categories be Displayed", 'UPCP')?></span></legend>
		<label title='Normal'><input type='radio' name='sidebar_order' value='Normal' <?php if($Sidebar_Order == "Normal") {echo "checked='checked'";} ?> /> <span><?php _e("Normal", 'UPCP')?></span></label><br />
		<label title='Hierarchical'><input type='radio' name='sidebar_order' value='Hierarchical' <?php if($Sidebar_Order == "Hierarchical") {echo "checked='checked'";} ?> /> <span><?php _e("Hierarchical", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Custom 'Details' icon", 'UPCP')?><br/> 
	<div onMouseOver="ShowToolTip('Details_Image_exp')" onMouseOut="HideToolTip('Details_Image_exp')" class="questionMark"><br> 
	<div id="Details_Image_exp" class="toolTip" ><?php _e("Image to use instead of 'Details' (Optional)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Image to use instead of 'Details' (Optional)", 'UPCP')?></span></legend>
		<input id="Details_Image" type="text" size="36" name="Details_Image" value='<?php if ($Detail_Image == "") {echo "http://";} else {echo $Detail_Image;} ?>' /> 
	  <input id="Details_Image_button" class="button" type="button" value="Upload Image" />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Filtering Type", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('filter_type_exp')" onMouseOut="HideToolTip('filter_type_exp')" class="questionMark"><br> 
	<div id="filter_type_exp" class="toolTip" ><?php _e("Should the plugin use AJAX (recommended) or Javascript (legacy support only) to filter products?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Filtering Type", 'UPCP')?></span></legend>
		<label title='Javascript'><input type='radio' name='filter_type' value='Javascript' <?php if($Filter == "Javascript") {echo "checked='checked'";} ?> /> <span><?php _e("Javascript Filtering", 'UPCP')?></span></label><br />
		<label title='AJAX'><input type='radio' name='filter_type' value='AJAX' <?php if($Filter == "AJAX") {echo "checked='checked'";} ?> /> <span><?php _e("AJAX Filtering", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Case Insensitive Search (AJAX Only)", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('case_insensitive_search_exp')" onMouseOut="HideToolTip('case_insensitive_search_exp')" class="questionMark"><br> 
	<div id="case_insensitive_search_exp" class="toolTip" ><?php _e("Compare only the letters and not their case in AJAX search", 'UPCP')?></div></div>
	</th>
	<td >
		<fieldset><legend class="screen-reader-text"><span><?php _e("Compare only the letters and not their case in AJAX search", 'UPCP')?></span></legend>
		<label title='Javascript'><input type='radio' name='case_insensitive_search' value='Yes' <?php if($CaseInsensitiveSearch == "Yes") {echo "checked='checked'";} ?> /> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='AJAX'><input type='radio' name='case_insensitive_search' value='No' <?php if($CaseInsensitiveSearch == "No") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Tag Logic", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('tag_logic_exp')" onMouseOut="HideToolTip('tag_logic_exp')" class="questionMark"><br> 
	<div id="tag_logic_exp" class="toolTip" ><?php _e("Gives users the option to use multiple tags at the same time in filtering ('OR' option)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Tag Logic", 'UPCP')?></span></legend>
		<label title='AND'><input type='radio' name='tag_logic' value='AND' <?php if($Tags == "AND") {echo "checked='checked'";} ?> /> <span><?php _e("Selected Tags use 'AND'", 'UPCP')?></span></label><br />
		<label title='OR'><input type='radio' name='tag_logic' value='OR' <?php if($Tags == "OR") {echo "checked='checked'";} ?> /> <span><?php _e("Selected Tags use 'OR'", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Search", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('product_search_exp')" onMouseOut="HideToolTip('product_search_exp')" class="questionMark"><br> 
	<div id="product_search_exp" class="toolTip" ><?php _e("Set the 'Product Search' text box to search either product name, product name and description or product name, description and custom fields (slowest option)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Product Search", 'UPCP')?></span></legend>
		<label title='Name'><input type='radio' name='product_search' value='name' <?php if($Product_Search == "name") {echo "checked='checked'";} ?> /> <span><?php _e("Name Only", 'UPCP')?></span></label><br />
		<label title='Name-and-Desc'><input type='radio' name='product_search' value='namedesc' <?php if($Product_Search == "namedesc") {echo "checked='checked'";} ?> /> <span><?php _e("Name and Description", 'UPCP')?></span></label><br />
		<label title='Name-Desc-and-Cust'><input type='radio' name='product_search' value='namedesccust' <?php if($Product_Search == "namedesccust") {echo "checked='checked'";} ?> /> <span><?php _e("Name, Description and Custom Fields", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Contents Filter", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('contents_filter_exp')" onMouseOut="HideToolTip('contents_filter_exp')" class="questionMark"><br> 
	<div id="contents_filter_exp" class="toolTip" ><?php _e("Should the default WordPress contents filter be applied to product descriptions before they're saved in the database?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Contents Filter", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='contents_filter' value='Yes' <?php if($Apply_Contents_Filter == "Yes") {echo "checked='checked'";} ?> /> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='contents_filter' value='No' <?php if($Apply_Contents_Filter == "No") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Maintain Filtering", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('maintain_filtering_exp')" onMouseOut="HideToolTip('maintain_filtering_exp')" class="questionMark"><br> 
	<div id="maintain_filtering_exp" class="toolTip" ><?php _e("Should filtering be maintained after viewing a product page (may cause redirect to homepage issues)?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Contents Filter", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='maintain_filtering' value='Yes' <?php if($Maintain_Filtering == "Yes") {echo "checked='checked'";} ?> /> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='maintain_filtering' value='No' <?php if($Maintain_Filtering == "No") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
</table>

<h3 id='label-premium-options' class='upcp-option-tab'>Premium Options</h3>
<table id='premium-options' class="form-table upcp-options-table upcp-hidden">
	<tr>
	<th scope="row"><?php _e("Product Page Type", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('custom_product_page_exp')" onMouseOut="HideToolTip('custom_product_page_exp')" class="questionMark"><br> 
	<div id="custom_product_page_exp" class="toolTip" ><?php _e("Should the layout created on the 'Product Pages' tab be used instead of the default plugin layout?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Use your custom designed page (Product Page tab) instead of the default?", 'UPCP')?></span></legend>
		<label title='Tabbed'><input type='radio' name='custom_product_page' value='Tabbed' <?php if($Custom_Product_Page == "Tabbed") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Tabbed Product Page", 'UPCP')?></span></label><br />
		<label title='Yes'><input type='radio' name='custom_product_page' value='Yes' <?php if($Custom_Product_Page == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Custom Product Page", 'UPCP')?></span></label><br />
		<label title='Large'><input type='radio' name='custom_product_page' value='Large' <?php if($Custom_Product_Page == "Large") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Custom Page - Large Screen Only", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='custom_product_page' value='No' <?php if($Custom_Product_Page == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Default", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Inquiry Form", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('product_inquiry_form_exp')" onMouseOut="HideToolTip('product_inquiry_form_exp')" class="questionMark"><br> 
	<div id="product_inquiry_form_exp" class="toolTip" ><?php _e("Should a form be added to inquire about products on the product page (requires plugin 'Contact Form 7')?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should a form be added to inquire about products on the product page (requires plugin 'Contact Form 7')?", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='product_inquiry_form' value='Yes' <?php if($Product_Inquiry_Form == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?><?php _e(" (requires plugin 'Contact Form 7')", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='product_inquiry_form' value='No' <?php if($Product_Inquiry_Form == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Lightbox", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('lightbox_exp')" onMouseOut="HideToolTip('lightbox_exp')" class="questionMark"><br> 
	<div id="lightbox_exp" class="toolTip" ><?php _e("Should a lightbox pop-up on the product page when an image is clicked?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should a lightbox pop-up on the product page when an image is clicked?", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='lightbox' value='Yes' <?php if($Lightbox == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='lightbox' value='No' <?php if($Lightbox == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Products per Page", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('products_per_page_exp')" onMouseOut="HideToolTip('products_per_page_exp')" class="questionMark"><br> 
	<div id="products_per_page_exp" class="toolTip" ><?php _e("Set the maximum number of products per page for your catalogues", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How many products should be displayed on each page of the catalogue?", 'UPCP')?></span></legend>
		<input type='text' name='products_per_page' value='<?php echo $Products_Per_Page; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Pagination Location", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pagination_location_exp')" onMouseOut="HideToolTip('pagination_location_exp')" class="questionMark"><br> 
	<div id="pagination_location_exp" class="toolTip" ><?php _e("Set the location of pagination controls for your catalogues", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Where should the pagination controls be located?", 'UPCP')?></span></legend>
		<label title='Top'><input type='radio' name='pagination_location' value='Top' <?php if($Pagination_Location == "Top") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Top", 'UPCP')?></span></label><br />
		<label title='Bottom'><input type='radio' name='pagination_location' value='Bottom' <?php if($Pagination_Location == "Bottom") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Bottom", 'UPCP')?></span></label><br />
		<label title='Both'><input type='radio' name='pagination_location' value='Both' <?php if($Pagination_Location == "Both") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Top and Bottom", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Sorting", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('product_sort_exp')" onMouseOut="HideToolTip('product_sort_exp')" class="questionMark"><br> 
	<div id="product_sort_exp" class="toolTip" ><?php _e("Select which sorting options are available in the 'Sort By' box", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Available Sorting Options", 'UPCP')?></span></legend>
		<label title='Price and Name'><input type='radio' name='product_sort' value='Price_Name' <?php if($Product_Sort == "Price_Name") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Price and Name", 'UPCP')?></span></label><br />
		<label title='Price'><input type='radio' name='product_sort' value='Price' <?php if($Product_Sort == "Price") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Price", 'UPCP')?></span></label><br />
		<label title='Name'><input type='radio' name='product_sort' value='Name' <?php if($Product_Sort == "Name") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Name", 'UPCP')?></span></label><br />
		<label title='None'><input type='radio' name='product_sort' value='None' <?php if($Product_Sort == "None") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("None", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Custom Slugs Conversion", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('cf_converion_exp')" onMouseOut="HideToolTip('cf_converion_exp')" class="questionMark"><br> 
	<div id="cf_converion_exp" class="toolTip" ><?php _e("Are custom field slugs being used in the product descriptions?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Are custom field slugs being used in the product descriptions?", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='cf_converion' value='Yes' <?php if($CF_Conversion == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='cf_converion' value='No' <?php if($CF_Conversion == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Related Products", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('related_products_exp')" onMouseOut="HideToolTip('related_products_exp')" class="questionMark"><br> 
	<div id="related_products_exp" class="toolTip" ><?php _e("Should related products be created automatically, manually, or not at all?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should related products be created automatically, manually, or not at all?", 'UPCP')?></span></legend>
		<label title='Auto'><input type='radio' name='related_products' value='Auto' <?php if($Related_Products == "Auto") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Automatic", 'UPCP')?></span></label><br />
		<label title='Manual'><input type='radio' name='related_products' value='Manual' <?php if($Related_Products == "Manual") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Manual", 'UPCP')?></span></label><br />
		<label title='None'><input type='radio' name='related_products' value='None' <?php if($Related_Products == "None") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("None", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Next/Previous Products", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('next_previous_exp')" onMouseOut="HideToolTip('next_previous_exp')" class="questionMark"><br> 
	<div id="next_previous_exp" class="toolTip" ><?php _e("Should next and previous products be displayed?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should next and previous products be displayed?", 'UPCP')?></span></legend>
		<label title='Manual'><input type='radio' name='next_previous' value='Manual' <?php if($Next_Previous == "Manual") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Manual", 'UPCP')?></span></label><br />
		<label title='None'><input type='radio' name='next_previous' value='None' <?php if($Next_Previous == "None") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("None", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Set Access Role", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('access_role_exp')" onMouseOut="HideToolTip('access_role_exp')" class="questionMark"><br> 
	<div id="access_role_exp" class="toolTip" ><?php _e("Which level of user should have access to UPCP?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span>Set Access Role</span></legend>
		<label title='Access Role'></label><select name='access_role' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>> 
			<option value="administrator"<?php if($Access_Role == "administrator") {echo " selected=selected";} ?>>Administrator</option>
			<option value="delete_others_pages"<?php if($Access_Role == "delete_others_pages") {echo " selected=selected";} ?>>Editor</option>
			<option value="delete_published_posts"<?php if($Access_Role == "delete_published_posts") {echo " selected=selected";} ?>>Author</option>
			<option value="delete_posts"<?php if($Access_Role == "delete_posts") {echo " selected=selected";} ?>>Contributor</option>
			<option value="read"<?php if($Access_Role == "read") {echo " selected=selected";} ?>>Subscriber</option>
		</select>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Hide Blank Custom Fields", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('custom_fields_blank_exp')" onMouseOut="HideToolTip('custom_fields_blank_exp')" class="questionMark"><br> 
	<div id="custom_fields_blank_exp" class="toolTip" ><?php _e("Should custom fields be hidden when they are emtpy?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should custom fields be hidden when they are emtpy?", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='custom_fields_blank' value='Yes' <?php if($Custom_Fields_Blank == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='custom_fields_blank' value='No' <?php if($Custom_Fields_Blank == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
</table>
</div>

<div id='SEO' class='upcp-option-set upcp-hidden'>
<h3 id='label-seo-options' class='upcp-option-tab'>SEO Options</h3>
<table id='seo-options' class="form-table upcp-options-table">
	<tr>
	<th scope="row"><?php _e("Pretty Permalinks", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pretty_links_exp')" onMouseOut="HideToolTip('pretty_links_exp')" class="questionMark"><br> 
	<div id="pretty_links_exp" class="toolTip" ><?php _e("Should the plugin create SEO-friendly product page URLs?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Use Pretty Permalinks for Product Pages", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='pretty_links' value='Yes' <?php if($PrettyLinks == "Yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='pretty_links' value='No' <?php if($PrettyLinks == "No") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("XML Sitemap URL", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('xml_sitemap_url_exp')" onMouseOut="HideToolTip('xml_sitemap_url_exp')" class="questionMark"><br> 
	<div id="xml_sitemap_url_exp" class="toolTip" ><?php _e("Set the base URL path of XML sitemap that the plugin creates of all products, used for SEO purposes", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("What URL should be used at the base of the products sitemap?", 'UPCP')?></span></legend>
		<input type='text' name='xml_sitemap_url' value='<?php echo $XML_Sitemap_URL; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("SEO By Yoast Integration", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('seo_option_exp')" onMouseOut="HideToolTip('seo_option_exp')" class="questionMark"><br> 
	<div id="seo_option_exp" class="toolTip" ><?php _e("Should product descriptions and titled be added using SEO By Yoast for product pages?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should product descriptions and titled be added using SEO By Yoast for product pages?", 'UPCP')?></span></legend>
		<label title='Yoast'><input type='radio' name='seo_option' value='Yoast' <?php if($SEO_Option == "Yoast") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='None'><input type='radio' name='seo_option' value='None' <?php if($SEO_Option == "None") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Description Handling", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('seo_integration_exp')" onMouseOut="HideToolTip('seo_integration_exp')" class="questionMark"><br> 
	<div id="seo_integration_exp" class="toolTip" ><?php _e("Should the page description be added to or replaced?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should the page description be added to or replaced?", 'UPCP')?></span></legend>
		<label title='Add'><input type='radio' name='seo_integration' value='Add' <?php if($SEO_Integration == "Add") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Add", 'UPCP')?></span></label><br />
		<label title='Replace'><input type='radio' name='seo_integration' value='Replace' <?php if($SEO_Integration == "Replace") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Replace", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<th scope="row"><?php _e("SEO Title", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('seo_title_exp')" onMouseOut="HideToolTip('seo_title_exp')" class="questionMark"><br> 
	<div id="seo_title_exp" class="toolTip" ><?php _e("What should the page title be set to? Can use [page-title], [product-name], [category-name], [subcategory_name] to substitute those in the title.", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("What should the page title be set to? Can use [page-title], [product-name], [category-name], [subcategory_name] to substitute those in the title.", 'UPCP')?></span></legend>
		<input type='text' name='seo_title' value='<?php echo $SEO_Title; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
</table>
</div>

<div id='Labelling' class='upcp-option-set upcp-hidden'>
<h3 id='label-labelling-options' class='upcp-option-tab'>Labelling Options</h3>
<table  id='labelling-options' class="form-table upcp-options-table">
	<tr>
	<th scope="row"><?php _e("Categories Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('categories_label_exp')" onMouseOut="HideToolTip('categories_label_exp')" class="questionMark"><br>  
	<div id="categories_label_exp" class="toolTip" ><?php _e("Text that should replace 'Categories' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Categories' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='categories_label' value='<?php echo $Categories_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Sub-Categories Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('subcategories_label_exp')" onMouseOut="HideToolTip('subcategories_label_exp')" class="questionMark"><br>  
	<div id="subcategories_label_exp" class="toolTip" ><?php _e("Text that should replace 'Sub-Categories' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Sub-Categories' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='subcategories_label' value='<?php echo $SubCategories_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Tags Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('tags_label_exp')" onMouseOut="HideToolTip('tags_label_exp')" class="questionMark"><br>  
	<div id="tags_label_exp" class="toolTip" ><?php _e("Text that should replace 'Tags' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Tags' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='tags_label' value='<?php echo $Tags_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Custom Fields Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('custom_fields_label_exp')" onMouseOut="HideToolTip('custom_fields_label_exp')" class="questionMark"><br>  
	<div id="custom_fields_label_exp" class="toolTip" ><?php _e("Text that should replace 'Additional Options' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Additional Options' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='custom_fields_label' value='<?php echo $Custom_Fields_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Details Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('details_label_exp')" onMouseOut="HideToolTip('details_label_exp')" class="questionMark"><br>  
	<div id="details_label_exp" class="toolTip" ><?php _e("Text that should replace 'Details' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Details' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='details_label' value='<?php echo $Details_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Sort By Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('sort_by_label_exp')" onMouseOut="HideToolTip('sort_by_label_exp')" class="questionMark"><br>  
	<div id="sort_by_label_exp" class="toolTip" ><?php _e("Text that should replace 'Sort By' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Sort By' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='sort_by_label' value='<?php echo $Sort_By_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Name Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('product_name_search_label_exp')" onMouseOut="HideToolTip('product_name_search_label_exp')" class="questionMark"><br>  
	<div id="product_name_search_label_exp" class="toolTip" ><?php _e("Text that should replace 'Product Name' on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'Product Name' on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='product_name_search_label' value='<?php echo $Product_Name_Search_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Search Placeholder Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('product_name_text_label_exp')" onMouseOut="HideToolTip('product_name_text_label_exp')" class="questionMark"><br>  
	<div id="product_name_text_label_exp" class="toolTip" ><?php _e("Text that should replace the search placeholder text on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace the search placeholder text on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='product_name_text_label' value='<?php echo $Product_Search_Text_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Back to Catalogue Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('back_to_catalogue_label_exp')" onMouseOut="HideToolTip('back_to_catalogue_label_exp')" class="questionMark"><br>  
	<div id="back_to_catalogue_label_exp" class="toolTip" ><?php _e("Text that should replace 'Back to Catalogue' on product pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace the search placeholder text on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='back_to_catalogue' value='<?php echo $Back_To_Catalogue_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("No Products Found Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('no_results_found_label_exp')" onMouseOut="HideToolTip('no_results_found_label_exp')" class="questionMark"><br>  
	<div id="no_results_found_label_exp" class="toolTip" ><?php _e("Text that should display when no products are found", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should display when no products are found", 'UPCP')?></span></legend>
		<input type='text' name='no_results_found_label' value='<?php echo $No_Results_Found_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Products (pagination) Label", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('products_pagination_label_exp')" onMouseOut="HideToolTip('products_pagination_label_exp')" class="questionMark"><br>  
	<div id="products_pagination_label_exp" class="toolTip" ><?php _e("Text that should replace 'products' for pagination on your catalogue pages", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Text that should replace 'products' for pagination on your catalogue pages", 'UPCP')?></span></legend>
		<input type='text' name='products_pagination_label' value='<?php echo $Products_Pagination_Label; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
</table>
</div>

<div id='Styling' class='upcp-option-set upcp-hidden'>
<h3 id='label-catalogue-skin-options' class='upcp-option-tab'>Catalogue Skin Options</h3>
<div id='catalogue-skin-options' class="upcp-options-div upcp-hidden">
	<tr>
	<th scope="row"><?php _e("Catalogue Style", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('catalogue_style_exp')" onMouseOut="HideToolTip('catalogue_style_exp')" class="questionMark"><br> 
	<div id="catalogue_style_exp" class="toolTip" ><?php _e("Selects a layout style for your catalogue.", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Selects a layout style for your catalogue.", 'UPCP')?></span></legend>
		<label title='Default'><input type='radio' name='catalogue_style' value='None' <?php if($Catalogue_Style == "None") {echo "checked='checked'";} ?> /> <span><?php _e("Default", 'UPCP')?></span></label><br />
		<label title='Minimalist'><input type='radio' name='catalogue_style' value='main-minimalist' <?php if($Catalogue_Style == "main-minimalist") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Minimalist", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
</div>

<h3 id='label-thumbnail-view-options' class='upcp-option-tab'>Thumbnail View Options</h3>
<div id='thumbnail-view-options' class="upcp-options-div upcp-hidden">
	<div class='upcp-subsection-header'>Image Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Hover Fade</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_image_hover_fade' value='<?php echo $Thumbnail_View_Image_Hover_Fade; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Mouseover Zoom</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_mouseover_zoom' value='<?php echo $Thumbnail_View_Mouseover_Zoom; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Height</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_image_height' value='<?php echo $Thumbnail_View_Image_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Width</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_image_width' value='<?php echo $Thumbnail_View_Image_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Height</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_image_holder_height' value='<?php echo $Thumbnail_View_Image_Holder_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Width</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_image_holder_width' value='<?php echo $Thumbnail_View_Image_Holder_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_image_border' value='<?php echo $Thumbnail_View_Image_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border Color</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_image_color' value='<?php echo $Thumbnail_View_Image_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Box Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Width</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_box_width' value='<?php echo $Thumbnail_View_Box_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Padding</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_box_padding' value='<?php echo $Thumbnail_View_Box_Padding; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Margin</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_box_margin' value='<?php echo $Thumbnail_View_Box_Margin; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_box_border' value='<?php echo $Thumbnail_View_Box_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Border Color</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_border_color' value='<?php echo $Thumbnail_View_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Title Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font Size</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_title_font_size' value='<?php echo $Thumbnail_View_Title_Font_Size; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Color</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_title_color' value='<?php echo $Thumbnail_View_Title_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_title_font' value='<?php echo $Thumbnail_View_Title_Font; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Other Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Zoom on Image Hover</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_zoom_on_image_hover' value='<?php echo $Thumbnail_View_Zoom_On_Image_Hover; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Background Color</div>
			<div class='upcp-option-input'><input type='text' name='thumbnail_view_background_color' value='<?php echo $Thumbnail_View_Background_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Separator Line</div>
			<div class='upcp-option-input'><input type='checkbox' name='thumbnail_view_separator_line' value='<?php echo $Thumbnail_View_Separator_Line; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Details Arrow</div>
			<div class='upcp-option-input'>
				<input type='radio' name='thumbnail_view_details_arrow' value='Sleek' <?php if ($Thumbnail_View_Details_Arrow == "Sleek") {echo "checked";} ?>/>
				<input type='radio' name='thumbnail_view_details_arrow' value='Original' <?php if ($Thumbnail_View_Details_Arrow == "Original") {echo "checked";} ?>/>
				<input type='radio' name='thumbnail_view_details_arrow' value='Custom' <?php if ($Thumbnail_View_Details_Arrow == "Custom") {echo "checked";} ?>/>
				<input type='text' name='thumbnail_view_custom_details_arrow' value='<?php echo $Thumbnail_View_Custom_Details_Arrow; ?>' />
			</div>
		</div>
	</div>
</div>

<h3 id='label-list-view-options' class='upcp-option-tab'>List View Options</h3>
<div id='list-view-options' class="upcp-options-div upcp-hidden">
	<div class='upcp-subsection-header'>Image Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Hover Fade</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_image_hover_fade' value='<?php echo $List_View_Image_Hover_Fade; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Mouseover Zoom</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_mouseover_zoom' value='<?php echo $List_View_Mouseover_Zoom; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Height</div>
			<div class='upcp-option-input'><input type='text' name='list_view_image_height' value='<?php echo $List_View_Image_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Width</div>
			<div class='upcp-option-input'><input type='text' name='list_view_image_width' value='<?php echo $List_View_Image_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Height</div>
			<div class='upcp-option-input'><input type='text' name='list_view_image_holder_height' value='<?php echo $List_View_Image_Holder_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Width</div>
			<div class='upcp-option-input'><input type='text' name='list_view_image_holder_width' value='<?php echo $List_View_Image_Holder_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_image_border' value='<?php echo $List_View_Image_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border Color</div>
			<div class='upcp-option-input'><input type='text' name='list_view_image_color' value='<?php echo $List_View_Image_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Box Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Width</div>
			<div class='upcp-option-input'><input type='text' name='list_view_box_width' value='<?php echo $List_View_Box_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Padding</div>
			<div class='upcp-option-input'><input type='text' name='list_view_box_padding' value='<?php echo $List_View_Box_Padding; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Margin</div>
			<div class='upcp-option-input'><input type='text' name='list_view_box_margin' value='<?php echo $List_View_Box_Margin; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_box_border' value='<?php echo $List_View_Box_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Border Color</div>
			<div class='upcp-option-input'><input type='text' name='list_view_border_color' value='<?php echo $List_View_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Title Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font Size</div>
			<div class='upcp-option-input'><input type='text' name='list_view_title_font_size' value='<?php echo $List_View_Title_Font_Size; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Color</div>
			<div class='upcp-option-input'><input type='text' name='list_view_title_color' value='<?php echo $List_View_Title_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font</div>
			<div class='upcp-option-input'><input type='text' name='list_view_title_font' value='<?php echo $List_View_Title_Font; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Other Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Zoom on Image Hover</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_zoom_on_image_hover' value='<?php echo $List_View_Zoom_On_Image_Hover; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Background Color</div>
			<div class='upcp-option-input'><input type='text' name='list_view_background_color' value='<?php echo $List_View_Background_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Separator Line</div>
			<div class='upcp-option-input'><input type='checkbox' name='list_view_separator_line' value='<?php echo $List_View_Separator_Line; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Details Arrow</div>
			<div class='upcp-option-input'>
				<input type='radio' name='list_view_details_arrow' value='Sleek' <?php if ($List_View_Details_Arrow == "Sleek") {echo "checked";} ?>/>
				<input type='radio' name='list_view_details_arrow' value='Original' <?php if ($List_View_Details_Arrow == "Original") {echo "checked";} ?>/>
				<input type='radio' name='list_view_details_arrow' value='Custom' <?php if ($List_View_Details_Arrow == "Custom") {echo "checked";} ?>/>
				<input type='text' name='list_view_custom_details_arrow' value='<?php echo $List_View_Custom_Details_Arrow; ?>' />
			</div>
		</div>
	</div>
</div>

<h3 id='label-detail-view-options' class='upcp-option-tab'>Detail View Options</h3>
<div id='detail-view-options' class="upcp-options-div upcp-hidden">
	<div class='upcp-subsection-header'>Image Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Hover Fade</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_image_hover_fade' value='<?php echo $Detail_View_Image_Hover_Fade; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Mouseover Zoom</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_mouseover_zoom' value='<?php echo $Detail_View_Mouseover_Zoom; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Height</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_image_height' value='<?php echo $Detail_View_Image_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Width</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_image_width' value='<?php echo $Detail_View_Image_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Height</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_image_holder_height' value='<?php echo $Detail_View_Image_Holder_Height; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Holder Width</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_image_holder_width' value='<?php echo $Detail_View_Image_Holder_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_image_border' value='<?php echo $Detail_View_Image_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Image Border Color</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_image_color' value='<?php echo $Detail_View_Image_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Box Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Width</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_box_width' value='<?php echo $Detail_View_Box_Width; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Padding</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_box_padding' value='<?php echo $Detail_View_Box_Padding; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Margin</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_box_margin' value='<?php echo $Detail_View_Box_Margin; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Box Border</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_box_border' value='<?php echo $Detail_View_Box_Border; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Border Color</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_border_color' value='<?php echo $Detail_View_Border_Color; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Title Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font Size</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_title_font_size' value='<?php echo $Detail_View_Title_Font_Size; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Color</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_title_color' value='<?php echo $Detail_View_Title_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Title Font</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_title_font' value='<?php echo $Detail_View_Title_Font; ?>' /></div>
		</div>
	</div>

	<div class='upcp-subsection-header'>Other Options</div>
	<div class='upcp-subsection'>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Zoom on Image Hover</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_zoom_on_image_hover' value='<?php echo $Detail_View_Zoom_On_Image_Hover; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Background Color</div>
			<div class='upcp-option-input'><input type='text' name='detail_view_background_color' value='<?php echo $Detail_View_Background_Color; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Separator Line</div>
			<div class='upcp-option-input'><input type='checkbox' name='detail_view_separator_line' value='<?php echo $Detail_View_Separator_Line; ?>' /></div>
		</div>
		<div class='upcp-option'>
			<div class='upcp-option-label'>Details Arrow</div>
			<div class='upcp-option-input'>
				<input type='radio' name='detail_view_details_arrow' value='Sleek' <?php if ($Detail_View_Details_Arrow == "Sleek") {echo "checked";} ?>/>
				<input type='radio' name='detail_view_details_arrow' value='Original' <?php if ($Detail_View_Details_Arrow == "Original") {echo "checked";} ?>/>
				<input type='radio' name='detail_view_details_arrow' value='Custom' <?php if ($Detail_View_Details_Arrow == "Custom") {echo "checked";} ?>/>
				<input type='text' name='detail_view_custom_details_arrow' value='<?php echo $Detail_View_Custom_Details_Arrow; ?>' />
			</div>
		</div>
	</div>
</div>

<h3 id='label-sidebar-options' class='upcp-option-tab'>Sidebar Options</h3>
<div id='sidebar-options' class="upcp-options-div upcp-hidden">
	<tr>
	<th scope="row"><?php _e("Show/Hide Custom Fields", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('custom_fields_show_hide_exp')" onMouseOut="HideToolTip('custom_fields_show_hide_exp')" class="questionMark"><br> 
	<div id="custom_fields_show_hide_exp" class="toolTip" ><?php _e("Should custom fields in the sidebar show or be hidden when the page loads?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should custom fields in the sidebar show or be hidden when the page loads?", 'UPCP')?></span></legend>
		<label title='Show'><input type='radio' name='custom_fields_show_hide' value='Show' <?php if($Custom_Fields_Show_Hide == "Show") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Show", 'UPCP')?></span></label><br />
		<label title='Hide'><input type='radio' name='custom_fields_show_hide' value='Hide' <?php if($Custom_Fields_Show_Hide == "Hide") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Hide", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Collapsible Sidebar", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('sidebar_title_collapse_exp')" onMouseOut="HideToolTip('sidebar_title_collapse_exp')" class="questionMark"><br> 
	<div id="sidebar_title_collapse_exp" class="toolTip" ><?php _e("Should sidebar titles collapse on-click?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should sidebar titles collapse on-click?", 'UPCP')?></span></legend>
		<label title='No'><input type='radio' name='sidebar_title_collapse' value='no' <?php if($Sidebar_Title_Collapse == "no") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br /> 
		<label title='Yes'><input type='radio' name='sidebar_title_collapse' value='yes' <?php if($Sidebar_Title_Collapse == "yes") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Sidebar Title Hover Effect", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('sidebar_title_hover_exp')" onMouseOut="HideToolTip('sidebar_title_hover_exp')" class="questionMark"><br> 
	<div id="sidebar_title_hover_exp" class="toolTip" ><?php _e("Which hover effect should apply on sidebar titles?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Which hover effect should apply on sidebar titles?", 'UPCP')?></span></legend>
		<label title='None'><input type='radio' name='sidebar_title_hover' value='none' <?php if($Sidebar_Title_Hover == "none") {echo "checked='checked'";} ?> /> <span><?php _e("None", 'UPCP')?></span></label><br /> 
		<label title='Underline'><input type='radio' name='sidebar_title_hover' value='underline' <?php if($Sidebar_Title_Hover == "underline") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Underline", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Sidebar Checkbox Styling", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('sidebar_checkbox_style_exp')" onMouseOut="HideToolTip('sidebar_checkbox_style_exp')" class="questionMark"><br> 
	<div id="sidebar_checkbox_style_exp" class="toolTip" ><?php _e("Which style of checkbox should be applied to sidebar items?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Which style of checkbox should be applied to sidebar items?", 'UPCP')?></span></legend>
		<label title='Default'><input type='radio' name='sidebar_checkbox_style' value='none' <?php if($Sidebar_Checkbox_Style == "none") {echo "checked='checked'";} ?> /> <span><?php _e("Default", 'UPCP')?></span></label><br /> 
		<label title='Square'><input type='radio' name='sidebar_checkbox_style' value='square' <?php if($Sidebar_Checkbox_Style == "square") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Square", 'UPCP')?></span></label><br />
		<label title='Minimalist'><input type='radio' name='sidebar_checkbox_style' value='minimalist' <?php if($Sidebar_Checkbox_Style == "minimalist") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Minimalist", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
</div>

<h3 id='label-pagination-options' class='upcp-option-tab'>Pagination Options</h3>
<div id='pagination-options' class="upcp-options-div upcp-hidden">
	<tr>
	<th scope="row"><?php _e("Pagination Border", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pagination_border_exp')" onMouseOut="HideToolTip('pagination_border_exp')" class="questionMark"><br> 
	<div id="pagination_border_exp" class="toolTip" ><?php _e("Selects a border for pagination links.", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Selects a border for pagination links.", 'UPCP')?></span></legend>
		<label title='Default'><input type='radio' name='pagination_border' value='none' <?php if($Pagination_Border == "none") {echo "checked='checked'";} ?> /> <span><?php _e("Default", 'UPCP')?></span></label><br /> 
		<label title='Black'><input type='radio' name='pagination_border' value='black' <?php if($Pagination_Border == "black") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Black", 'UPCP')?></span></label><br />
		<label title='Blue'><input type='radio' name='pagination_border' value='blue' <?php if($Pagination_Border == "blue") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Blue", 'UPCP')?></span></label><br />
		<label title='Grey'><input type='radio' name='pagination_border' value='grey' <?php if($Pagination_Border == "grey") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Grey", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Pagination Shadow", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pagination_shadow_exp')" onMouseOut="HideToolTip('pagination_shadow_exp')" class="questionMark"><br> 
	<div id="pagination_shadow_exp" class="toolTip" ><?php _e("Should a shadow be added to pagination links?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should a shadow be added to pagination links?", 'UPCP')?></span></legend>
		<label title='No'><input type='radio' name='pagination_shadow' value='shadow-none' <?php if($Pagination_Shadow == "shadow-none") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br /> 
		<label title='Yes'><input type='radio' name='pagination_shadow' value='shadow' <?php if($Pagination_Shadow == "shadow") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Pagination Gradient", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pagination_gradient_exp')" onMouseOut="HideToolTip('pagination_gradient_exp')" class="questionMark"><br> 
	<div id="pagination_gradient_exp" class="toolTip" ><?php _e("Should a gradient be added to pagination links (on hover)?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Should a gradient be added to pagination links (on hover)?", 'UPCP')?></span></legend>
		<label title='No'><input type='radio' name='pagination_gradient' value='gradient-none' <?php if($Pagination_Gradient == "gradient-none") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br /> 
		<label title='Yes'><input type='radio' name='pagination_gradient' value='gradient' <?php if($Pagination_Gradient == "gradient") {echo "checked='checked'";} ?> <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Pagination Font", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pagination_font_exp')" onMouseOut="HideToolTip('pagination_font_exp')" class="questionMark"><br> 
	<div id="pagination_font_exp" class="toolTip" ><?php _e("Selects a font color for pagination links.", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><label for='pagination_font'><?php _e("Pagination Color", 'UPCP')?></label>
		<input type='text' name='pagination_font' value='<?php echo $Pagination_Font; ?>' />
		</fieldset>
	</td>
	</tr>
</div>

<h3 id='label-default-product-page-options' class='upcp-option-tab'>Default Product Page Options</h3>
<div id='default-product-page-options' class="upcp-options-div upcp-hidden">
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Page Price", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('single_page_price_exp')" onMouseOut="HideToolTip('single_page_price_exp')" class="questionMark"><br> 
	<div id="single_page_price_exp" class="toolTip" ><?php _e("Should a product's price be displayed on the default product pages?", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Put Prices on the Single Product Pages", 'UPCP')?></span></legend>
		<label title='Yes'><input type='radio' name='single_page_price' value='Yes' <?php if($Single_Page_Price == "Yes") {echo "checked='checked'";} ?> /> <span><?php _e("Yes", 'UPCP')?></span></label><br />
		<label title='No'><input type='radio' name='single_page_price' value='No' <?php if($Single_Page_Price == "No") {echo "checked='checked'";} ?> /> <span><?php _e("No", 'UPCP')?></span></label><br />
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Extra Product Page Elements", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('extra_elements_exp')" onMouseOut="HideToolTip('extra_elements_exp')" class="questionMark"><br> 
	<div id="extra_elements_exp" class="toolTip" ><?php _e("Select extra elements to be displayed on the right of product pages.", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("Extra Product Page Elements", 'UPCP')?></span></legend>
		<label title='Category'><input type='checkbox' name='extra_elements[]' value='Category' <?php if(in_array("Category", $Extra_Elements)) {echo "checked='checked'";} ?> /> <span>Category Name</span></label><br />
		<label title='SubCategory'><input type='checkbox' name='extra_elements[]' value='SubCategory' <?php if(in_array("SubCategory", $Extra_Elements)) {echo "checked='checked'";} ?> /> <span>SubCategory Name</span></label><br />
		<label title='Tags'><input type='checkbox' name='extra_elements[]' value='Tags' <?php if(in_array("Tags", $Extra_Elements)) {echo "checked='checked'";} ?> /> <span>Tags</span></label><br />
		<label title='CustomFields'><input type='checkbox' name='extra_elements[]' value='CustomFields' <?php if(in_array("CustomFields", $Extra_Elements)) {echo "checked='checked'";} ?> /> <span>Custom Fields</span></label><br />
		<label title='Videos'><input type='checkbox' name='extra_elements[]' value='Videos' <?php if(in_array("Videos", $Extra_Elements)) {echo "checked='checked'";} ?> /> <span>Videos</span></label><br />
		</fieldset>
	</td>
	</tr>
</div>

<h3 id='label-custom-product-page-options' class='upcp-option-tab'>Custom Product Page Options</h3>
<div id='product-page-options' class="upcp-options-div upcp-hidden">
		<tr>
	<th scope="row"><?php _e("Product Page Grid Width", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pp_grid_width_exp')" onMouseOut="HideToolTip('pp_grid_width_exp')" class="questionMark"><br> 
	<div id="pp_grid_width_exp" class="toolTip" ><?php _e("How wide should the grid elements used to build custom product pages be? (in pixels)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How wide should each product grid be? (in pixels)", 'UPCP')?></span></legend>
		<input type='text' name='pp_grid_width' value='<?php echo $PP_Grid_Width; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Product Page Grid Height", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pp_grid_height_exp')" onMouseOut="HideToolTip('pp_grid_height_exp')" class="questionMark"><br>  
	<div id="pp_grid_height_exp" class="toolTip" ><?php _e("How tall should the grid elements used to build custom product pages be? (in pixels)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How tall should each product grid be? (in pixels)", 'UPCP')?></span></legend>
		<input type='text' name='pp_grid_height' value='<?php echo $PP_Grid_Height; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Top and Bottom Padding", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pp_top_bottom_padding_exp')" onMouseOut="HideToolTip('pp_top_bottom_padding_exp')" class="questionMark"><br> 
	<div id="pp_top_bottom_padding_exp" class="toolTip" ><?php _e("How much padding should be above and below each grid element used to build custom product? (in pixels)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How much padding should be above and below each grid? (in pixels)", 'UPCP')?></span></legend>
		<input type='text' name='pp_top_bottom_padding' value='<?php echo $Top_Bottom_Padding; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
	<tr>
	<th scope="row"><?php _e("Right and Left Padding", 'UPCP')?> <br/> 
	<div onMouseOver="ShowToolTip('pp_left_right_padding_exp')" onMouseOut="HideToolTip('pp_left_right_padding_exp')" class="questionMark"><br>  
	<div id="pp_left_right_padding_exp" class="toolTip" ><?php _e("How much padding should be to the right and left each grid element used to build custom product? (in pixels)", 'UPCP')?></div></div>
	</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span><?php _e("How much padding should be to the right and left of each grid? (in pixels)", 'UPCP')?></span></legend>
		<input type='text' name='pp_left_right_padding' value='<?php echo $Left_Right_Padding; ?>' <?php if ($Full_Version != "Yes") {echo "disabled";} ?>/>
		</fieldset>
	</td>
	</tr>
</div>

<h3 id='label-tabbed-product-page-options' class='upcp-option-tab'>Tabbed Product Page Options</h3>
<div id='tabbed-product-page-options' class="upcp-options-div upcp-hidden">
</div>
</div>

<p class="submit"><input type="submit" name="Options_Submit" id="submit" class="button button-primary" value='<?php _e("Save Changes", "UPCP")?>'/></p></form>

</div>