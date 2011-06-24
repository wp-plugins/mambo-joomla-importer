<?php
/*
Plugin Name: Mambo Importer
Plugin URI: no url
Description: This plugin will parse data generated from showArticle-(mambo/joomla).php , and publish them as Post(s).
Author: misterpah
Version: 1.0
Author URI: http://www.misterpah.com
*/


add_action('admin_menu','mambo_admin_menu');


	function mambo_admin_menu()
		{
		add_menu_page( 'Mambo Importer', 'Mambo Importer' ,'activate_plugins', 'mamboImporter', 'fImportMenu' );
		
		}



	function MamboImporter_header()
		{
		echo '<h1>Mambo Importer</h1>';
		echo '<p>Only use this plugin with the showArticle-*.php result !</p>';	
		}


	function fImportMenu()
		{
		mamboImporter_header();
		if (@$_POST['ss_action'] == 'save')
			{
			$data = $_POST['resultShowArticle'];
			if ($data == '')
				{
				echo "<b style='color:#ff0000;'>no data recieved. nothing to do.</b>";
				}			
			if ($data != '')
				{
				// save $data
				delete_option('mamboImporter-raw');
				add_option('mamboImporter-raw',$data);
				$importedData = unserialize(base64_decode($data));
				for ($i = 0;$i < count($importedData);$i++)
					{
					$title = $importedData[$i][0];
					$content = html_entity_decode($importedData[$i][1]);


					$my_post = array(
						'post_title' => $title,
						'post_content' => $content,
						'post_status' => 'publish',
						'post_type'=> 'page'
					);					
					wp_insert_post( $my_post );

					}
				echo "<b style='color:#0000FF;'>Import completed. Have a nice day ! =) </b>";
				}
			
			}
		echo '<br/><br/>';
		echo '<h3>Paste the result from showArticle-*.php</h3>';
		echo '<form action="" method="post" class="themeform">';
		echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';
		?><textarea style='border:1px solid #000000;background:#FFF4D3;color:#000000;' name="resultShowArticle" rows="10" cols="50"></textarea><?php
		echo '<br/><input type="submit" value="Import data" name="cp_save"/>';
		echo '</form>';
		}
?>
