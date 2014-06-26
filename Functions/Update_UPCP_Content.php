<?php
/* This file is the action handler. The appropriate function is then called based 
*  on the action that's been selected by the user. The functions themselves are all
* stored either in Prepare_Data_For_Insertion.php or Update_Admin_Databases.php */

function Update_UPCP_Content() {
global $upcp_message;
if (isset($_GET['Action'])) {
				switch ($_GET['Action']) {
    				case "UPCP_EditProduct":
						case "UPCP_AddProduct":
        				$upcp_message = Add_Edit_Product();
								break;
						case "UPCP_DeleteProduct":
								$upcp_message = Delete_UPCP_Product($_GET['Item_ID']);
								break;
						case "UPCP_MassDeleteProducts":
								$upcp_message = Mass_Delete_Products();
								break;
						case "UPCP_DeleteAllProducts":
								$upcp_message = Delete_All_Products();
								break;
						case "UPCP_AddProductSpreadsheet":
        				$upcp_message = Add_Products_From_Spreadsheet();
								break;
						case "UPCP_AddProductImage":
								$upcp_message = Prepare_Add_Product_Image();
								break;
						case "UPCP_DeleteProductImage":
								$upcp_message = Delete_Product_Image();
								break;
						case "UPCP_EditCategory":
						case "UPCP_AddCategory":
        				$upcp_message = Add_Edit_Category();
								break;
						case "UPCP_DeleteCategory":
								$upcp_message = Delete_UPCP_Category($_GET['Category_ID']);
								break;
						case "UPCP_MassDeleteCategories":
								$upcp_message = Mass_Delete_Categories();
								break;
						case "UPCP_EditCatalogue":
						case "UPCP_AddCatalogue":
        				$upcp_message = Add_Edit_Catalogue();
								break;
						case "UPCP_DeleteCatalogue":
								$upcp_message = Delete_UPCP_Catalogue($_GET['Catalogue_ID']);
								break;
						case "UPCP_MassDeleteCatalogues":
								$upcp_message = Mass_Delete_Catalogues();
								break;
						case "UPCP_DeleteCatalogueItem":
								$upcp_message = Delete_Products_Catalogue();
								break;
						case "UPCP_EditSubCategory":
						case "UPCP_AddSubCategory":
        				$upcp_message = Add_Edit_SubCategory();
								break;
						case "UPCP_DeleteSubCategory":
								$upcp_message = Delete_UPCP_SubCategory($_GET['SubCategory_ID']);
								break;
						case "UPCP_MassDeleteSubCategories":
								$upcp_message = Mass_Delete_SubCategories();
								break;
						case "UPCP_EditTag":
						case "UPCP_AddTag":
        				$upcp_message = Add_Edit_Tag();
								break;
						case "UPCP_DeleteTag":
								$upcp_message = Delete_UPCP_Tag($_GET['Tag_ID']);
								break;
						case "UPCP_MassDeleteTags":
								$upcp_message = Mass_Delete_UPCP_Tags();
								break;
						case "UPCP_DeleteTaggedItem":
								$upcp_message = Delete_Products_Tags();
								break;
						case "UPCP_EditCustomField":
						case "UPCP_AddCustomField":
        				$upcp_message = Add_Edit_Custom_Field();
								break;
						case "UPCP_DeleteCustomField":
								$upcp_message = Delete_UPCP_Custom_Field($_GET['Field_ID']);
								break;
						case "UPCP_MassDeleteCustomFields":
								$upcp_message = Mass_Delete_UPCP_Custom_Fields();
								break;		
						case "UPCP_UpdateOptions":
								$upcp_message = Update_UPCP_Options();
								break;
						default:
								$upcp_message = __("The form has not worked correctly. Please contact the plugin developer.", 'UPCP');
								break;
				}
		}
}

?>