<div class="wrap">

<h2>Products <a href="product_form.php" class="add-new-h2">Add Product</a></h2>

<?php   
    if($_POST['oscimp_hidden'] == 'Y') {  
        //Form data sent  
        $dbhost = $_POST['oscimp_dbhost'];  
        update_option('oscimp_dbhost', $dbhost);  
          
        $dbname = $_POST['oscimp_dbname'];  
        update_option('oscimp_dbname', $dbname);  
          
        $dbuser = $_POST['oscimp_dbuser'];  
        update_option('oscimp_dbuser', $dbuser);  
          
        $dbpwd = $_POST['oscimp_dbpwd'];  
        update_option('oscimp_dbpwd', $dbpwd);  
  
        $prod_img_folder = $_POST['oscimp_prod_img_folder'];  
        update_option('oscimp_prod_img_folder', $prod_img_folder);  
  
        $store_url = $_POST['oscimp_store_url'];  
        update_option('oscimp_store_url', $store_url);  
        ?>  
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>  
        <?php  
    } else {  
        //Normal page display  
        $dbhost = get_option('oscimp_dbhost');  
        $dbname = get_option('oscimp_dbname');  
        $dbuser = get_option('oscimp_dbuser');  
        $dbpwd = get_option('oscimp_dbpwd');  
        $prod_img_folder = get_option('oscimp_prod_img_folder');  
        $store_url = get_option('oscimp_store_url');  
    }  
?>  

</div>
