codeigniter-mlcontent
=====================

Codeigniter extension to build multilingual webapp


What is it?
-----------

mlcontent is an extension for CodeIgniter that allows you to easily build web application with multilingual content

Installation
------------

the extension consists of only 3 files:

    /application/config/mlcontent.php
    /application/core/MY_Controller.php
    /application/helper/mlcontent_helper.php
    
just copy them in your application folder

Usage
-----

###prerequisites:
You need to autoload the session library

###save data:

mlcontent works using JSON in multilingual fields, instead of plain text. You can start following these steps:

1. edit `/application/config/mlcontent.php` and define the default language (default is "en") and the multilingual form fields prefix (default is "ml-")
2. extend your controller using `ML_Controller` (i.e. `class Products extends ML_Controller`)
3. in the view forms, to insert or updare records, remember to use the "ml-" prefix for fields that are multilingual. Multilingual fields must be like these:

    `<input name="ml-name['en']" value="car" />`
    
    `<input name="ml-name['it']" value="auto" />`
    
4. your controller will put automatically all POST data in `$this->inputdata`, transforming multilingual fields into JSON strings. Sending the previous form the content of `$this->inputdata` will be

    `[ml-name] => {"_mlc":{"en":"car","it":"auto"}}`
    
5. in your model you can save ml-fields in tables as usually. If possible, for simplicity, use the same name used in the form fields for your table fields, but it's not mandatory.

### display data:

in your view you must use the `mlang()` helper function to parse ml-fields. The default language is 'en', but you can pass 
the language as second attribute. Alternatively you can use the session variable 'mlang' to use a different language. 
An example, assuming that the field 'ml-name' is in the '$product' hash:

    <?php echo mlang($product['ml-name']); 
          //it will produce "car"
          echo mlang($product['ml-name'], 'it');
          //it will produce "auto"
          $this->session->set_userdata('mlang', 'it');
          echo mlang($product['ml-name']);
          //it will produce "auto" taking default language from session
    ?>
    

    
