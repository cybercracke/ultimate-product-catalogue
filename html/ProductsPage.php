<div id="col-right">
<div class="col-wrap">

<!-- Display a list of the products which have already been created -->
<?php wp_nonce_field(); ?>
<?php wp_referer_field(); ?>

<?php 
			if (isset($_GET['Page'])) {$Page = $_GET['Page'];}
			else {$Page = 1;}
			
			$Sql = "SELECT * FROM $items_table_name ";
				if (isset($_GET['OrderBy'])) {$Sql .= "ORDER BY " . $_GET['OrderBy'] . " " . $_GET['Order'] . " ";}
				else {$Sql .= "ORDER BY Item_Date_Created ";}
				$Sql .= "LIMIT " . ($Page - 1)*20 . ",20";
				$myrows = $wpdb->get_results($Sql);
				$num_rows = $wpdb->num_rows; 
				$Number_of_Pages = ceil($wpdb->num_rows/20);
				$Current_Page_With_Order_By = "admin.php?page=UPCP-options&DisplayPage=Products";
				if (isset($_GET['OrderBy'])) {$Current_Page_With_Order_By .= "&OrderBy=" .$_GET['OrderBy'] . "&Order=" . $_GET['Order'];}?>

<form action="admin.php?page=UPCP-options&Action=MassDeleteProducts&DisplayPage=Products" method="post">    
<div class="tablenav top">
		<div class="alignleft actions">
				<select name='action'>
  					<option value='-1' selected='selected'>Bulk Actions</option>
						<option value='delete'>Delete</option>
				</select>
				<input type="submit" name="" id="doaction" class="button-secondary action" value="Apply"  />
		</div>
		<div class='tablenav-pages <?php if ($Number_of_Pages == 1) {echo "one-page";} ?>'>
				<span class="displaying-num"><?php echo $wpdb->num_rows; ?> items</span>
				<span class='pagination-links'>
						<a class='first-page <?php if ($Page == 1) {echo "disabled";} ?>' title='Go to the first page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=1'>&laquo;</a>
						<a class='prev-page <?php if ($Page < 2) {echo "disabled";} ?>' title='Go to the previous page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=<?php echo $Page-1;?>'>&lsaquo;</a>
						<span class="paging-input"><?php echo $Page; ?> of <span class='total-pages'><?php echo $Number_of_Pages; ?></span></span>
						<a class='next-page <?php if ($Page >= $Number_Of_Pages) {echo "disabled";} ?>' title='Go to the next page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=<?php echo $Page+1;?>'>&rsaquo;</a>
						<a class='last-page <?php if ($Page == $Number_of_Pages) {echo "disabled";} ?>' title='Go to the last page' href='<?php echo $Current_Page_With_Order_By . "&Page=" . $Number_of_Pages; ?>'>&raquo;</a>
				</span>
		</div>
</div>

<table class="wp-list-table widefat fixed tags sorttable" cellspacing="0">
		<thead>
				<tr>
						<th scope='col' id='cb' class='manage-column column-cb check-column'  style="">
								<input type="checkbox" /></th><th scope='col' id='name' class='manage-column column-name sortable desc'  style="">
										<?php if ($_GET['OrderBy'] == "Item_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Name&Order=ASC'>";} ?>
											  <span>Name</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='description' class='manage-column column-description sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Item_Description" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Description&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Description&Order=ASC'>";} ?>
											  <span>Description</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='requirements' class='manage-column column-requirements sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Item_Price" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Price&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Price&Order=ASC'>";} ?>
											  <span>Price</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='users' class='manage-column column-users sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Category_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Category_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Category_Name&Order=ASC'>";} ?>
											  <span>Category</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='enabled' class='manage-column column-users sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "SubCategory_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=SubCategory_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=SubCategory_Name&Order=ASC'>";} ?>
											  <span>Sub-Category</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
				</tr>
		</thead>

		<tfoot>
				<tr>
						<th scope='col' id='cb' class='manage-column column-cb check-column'  style="">
								<input type="checkbox" /></th><th scope='col' id='name' class='manage-column column-name sortable desc'  style="">
										<?php if ($_GET['OrderBy'] == "Item_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Name&Order=ASC'>";} ?>
											  <span>Name</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='description' class='manage-column column-description sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Item_Description" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Description&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Description&Order=ASC'>";} ?>
											  <span>Description</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='requirements' class='manage-column column-requirements sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Item_Price" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Price&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Item_Price&Order=ASC'>";} ?>
											  <span>Price</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='users' class='manage-column column-users sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "Category_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Category_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=Category_Name&Order=ASC'>";} ?>
											  <span>Category</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
						<th scope='col' id='enabled' class='manage-column column-users sortable desc'  style="">
									  <?php if ($_GET['OrderBy'] == "SubCategory_Name" and $_GET['Order'] == "ASC") { echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=SubCategory_Name&Order=DESC'>";}
										 			else {echo "<a href='admin.php?page=UPCP-options&DisplayPage=Products&OrderBy=SubCategory_Name&Order=ASC'>";} ?>
											  <span>Sub-Category</span>
												<span class="sorting-indicator"></span>
										</a>
						</th>
				</tr>
		</tfoot>

	<tbody id="the-list" class='list:tag'>
		
		 <?php
				if ($myrows) { 
	  			  foreach ($myrows as $Item) {
								echo "<tr id='Item" . $Item->Item_ID ."'>";
								echo "<th scope='row' class='check-column'>";
								echo "<input type='checkbox' name='Products_Bulk[]' value='" . $Item->Item_ID ."' />";
								echo "</th>";
								echo "<td class='name column-name'>";
								echo "<strong>";
								echo "<a class='row-title' href='admin.php?page=UPCP-options&Action=Item_Details&Selected=Product&Item_ID=" . $Item->Item_ID ."' title='Edit " . $Item->Item_Name . "'>" . $Item->Item_Name . "</a></strong>";
								echo "<br />";
								echo "<div class='row-actions'>";
								/*echo "<span class='edit'>";
								echo "<a href='admin.php?page=UPCP-options&Action=Item_Details&Selected=Product&Item_ID=" . $Item->Item_ID ."'>Edit</a>";
		 						echo " | </span>";*/
								echo "<span class='delete'>";
								echo "<a class='delete-tag' href='admin.php?page=UPCP-options&Action=DeleteProduct&DisplayPage=Products&Item_ID=" . $Item->Item_ID ."'>Delete</a>";
		 						echo "</span>";
								echo "</div>";
								echo "<div class='hidden' id='inline_" . $Item->Item_ID ."'>";
								echo "<div class='name'>" . $Item->Item_Name . "</div>";
								echo "</div>";
								echo "</td>";
								echo "<td class='description column-description'>" . $Item->Item_Description . "</td>";
								echo "<td class='description column-price'>" . $Item->Item_Price . "</td>";
								echo "<td class='users column-category'>" . $Item->Category_Name . "</td>";
								echo "<td class='users column-subcategory'>" . $Item->SubCategory_Name . "</td>";
								echo "</tr>";
						}
				}
		?>

	</tbody>
</table>

<div class="tablenav bottom">
		<div class="alignleft actions">
				<select name='action'>
  					<option value='-1' selected='selected'>Bulk Actions</option>
						<option value='delete'>Delete</option>
				</select>
				<input type="submit" name="" id="doaction" class="button-secondary action" value="Apply"  />
		</div>
		<div class='tablenav-pages <?php if ($Number_of_Pages == 1) {echo "one-page";} ?>'>
				<span class="displaying-num"><?php echo $wpdb->num_rows; ?> items</span>
				<span class='pagination-links'>
						<a class='first-page <?php if ($Page == 1) {echo "disabled";} ?>' title='Go to the first page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=1'>&laquo;</a>
						<a class='prev-page <?php if ($Page < 2) {echo "disabled";} ?>' title='Go to the previous page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=<?php echo $Page-1;?>'>&lsaquo;</a>
						<span class="paging-input"><?php echo $Page; ?> of <span class='total-pages'><?php echo $Number_of_Pages; ?></span></span>
						<a class='next-page <?php if ($Page >= $Number_Of_Pages) {echo "disabled";} ?>' title='Go to the next page' href='<?php echo $Current_Page_With_Order_By; ?>&Page=<?php echo $Page+1;?>'>&rsaquo;</a>
						<a class='last-page <?php if ($Page == $Number_of_Pages) {echo "disabled";} ?>' title='Go to the last page' href='<?php echo $Current_Page_With_Order_By . "&Page=" . $Number_of_Pages; ?>'>&raquo;</a>
				</span>
		</div>
		<br class="clear" />
</div>
</form>

<br class="clear" />
</div>
</div> <!-- /col-right -->


<!-- Form to upload a list of new products from a spreadsheet -->
<div id="col-left">
<div class="col-wrap">

<div class="form-wrap">
<h2>Add New Products</h2>
<!-- Form to create a new product -->
<h3>Add Product Manually</h3>
<form id="addtag" method="post" action="admin.php?page=UPCP-options&Action=AddProduct&DisplayPage=Product" class="validate" enctype="multipart/form-data">
<input type="hidden" name="action" value="Add_Product" />
<?php wp_nonce_field(); ?>
<?php wp_referer_field(); ?>
<div class="form-field form-required">
	<label for="Item_Name">Name</label>
	<input name="Item_Name" id="Item_Name" type="text" value="" size="60" />
	<p>The name of the product your users will see.</p>
</div>
<div class="form-field">
	<label for="Item_Image">Image</label>
	<input name="Item_Image" id="Item_Image" type="file" value=""/>
	<p>The image that will be displayed in association with this product.</p>
</div>
<div class="form-field">
	<label for="Item_Price">Price</label>
	<input name="Item_Price" id="Item_Price" type="text" value="" size="60" />
	<p>What does this product cost?</p>
</div>
<div class="form-field">
	<label for="Item_Description">Description</label>
	<textarea name="Item_Description" id="Item_Description" rows="5" cols="40"></textarea>
	<p>The description of the product. What is it and what makes it worth getting?</p>
</div>
<div class="form-field">
	<label for="Item_Category">Category:</label>
	<select name="Category_ID" id="Item_Category" onchange="UpdateSubCats();">
	<option value=""></option>
	<?php $Categories = $wpdb->get_results("SELECT * FROM $categories_table_name"); ?>
	<?php foreach ($Categories as $Category) {
						echo "<option value='" . $Category->Category_ID . "' ";
						if ($Category->Category_ID == $Product->Category_ID) {echo "selected='selected'";}
						echo " >" . $Category->Category_Name . "</option>";
				} ?>
	</select>
	<p>What category is this product in? Categories help to organize your product catalogues and help your customers to find what they're looking for.</p>
</div>
<div class="form-field">
	<label for="Item_SubCategory">Sub-Category:</label>
	<select name="SubCategory_ID" id="Item_SubCategory">
	<option value=""></option>
	<?php $SubCategories = $wpdb->get_results("SELECT * FROM $subcategories_table_name WHERE Category_ID=" . $Product->Category_ID . " ORDER BY SubCategory_Name"); ?>
	<?php foreach ($SubCategories as $SubCategory) {
						echo "<option value='" . $SubCategory->SubCategory_ID . "' ";
						if ($SubCategory->SubCategory_ID == $Product->SubCategory_ID) {echo "selected='selected'";}
						echo " >" . $SubCategory->SubCategory_Name . "</option>";
				} ?>
	</select>
	<p>What sub-category is this product in? Sub-categories help to organize your product catalogues and help your customers to find what they're looking for.</p>
</div>
<div class="form-field">
	<label for="Item_Tags">Tags:</label>
	<?php $Tagged_Items = $wpdb->get_results("SELECT Tag_ID FROM $tagged_items_table_name WHERE Item_ID='" . $Product->Item_ID ."'"); ?>
	<?php $Tags = $wpdb->get_results("SELECT * FROM $tags_table_name"); ?>
	<?php foreach ($Tags as $Tag) { ?>
			<input type="checkbox" class='upcp-tag-input' name="Tags[]" value="<?php echo $Tag->Tag_ID; ?>" id="Tag-<?php echo $Tag->Tag_Name; ?>" <?php if (in_array($Tag->Tag_ID, $Tagged_Items)) {echo " checked";} ?>>
			<?php echo $Tag->Tag_Name; ?></br>
	<?php } ?>
	<p>What tags should this product have? Tags help to describe the attributes of a product.</p>
</div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Add New Product"  /></p></form>

<h3>Add Products from Spreadsheet</h3>
<form id="addtag" method="post" action="admin.php?page=UPCP-options&Action=AddProductSpreadsheet&DisplayPage=Product" class="validate" enctype="multipart/form-data">
<div class="form-field form-required">
		<label for="Products_Spreadsheet">Spreadhseet Containing Products</label>
		<input name="Products_Spreadsheet" id="Products_Spreadsheet" type="file" value=""/>
		<p>The spreadsheet containing all of the products you wish to add. Make sure that the column title names are the same as the field names for products (ex: Name, Price, etc.), and that any categories and sub-categories are written exactly the same as they are online.</p>
</div>
<p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Add New Products"  /></p>
</form>
</div>

<br class="clear" />
</div>
</div><!-- /col-left -->


	<!--<form method="get" action=""><table style="display: none"><tbody id="inlineedit">
		<tr id="inline-edit" class="inline-edit-row" style="display: none"><td colspan="4" class="colspanchange">

			<fieldset><div class="inline-edit-col">
				<h4>Quick Edit</h4>

				<label>
					<span class="title">Name</span>
					<span class="input-text-wrap"><input type="text" name="name" class="ptitle" value="" /></span>
				</label>
					<label>
					<span class="title">Slug</span>
					<span class="input-text-wrap"><input type="text" name="slug" class="ptitle" value="" /></span>
				</label>
				</div></fieldset>
	
		<p class="inline-edit-save submit">
			<a accesskey="c" href="#inline-edit" title="Cancel" class="cancel button-secondary alignleft">Cancel</a>
						<a accesskey="s" href="#inline-edit" title="Update Level" class="save button-primary alignright">Update Level</a>
			<img class="waiting" style="display:none;" src="<?php echo ABSPATH . 'wp-admin/images/wpspin_light.gif'?>" alt="" />
			<span class="error" style="display:none;"></span>
			<input type="hidden" id="_inline_edit" name="_inline_edit" value="fb59c3f3d1" />			<input type="hidden" name="taxonomy" value="wmlevel" />
			<input type="hidden" name="post_type" value="post" />
			<br class="clear" />
		</p>
		</td></tr>
		</tbody></table></form>-->
		
<!--</div>-->
		