<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$_title}</title>
    {if $_header!=""}
        {include file=$_head}
    {/if}

    <!-- jquery -->
    <script src="{$_path_libs}libs/jquery/jquery-3.7.1.slim.min.js"></script>

    <!-- bootstrap -->
    <link href="{$_path_libs}bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <script src="{$_path_libs}bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{$_path_mods}/index.js"></script>

    {if file_exists("`$_path_mods``$_page`.head.tpl")}
        <!-- module script -->
        {include file="`$_path_mods``$_page`.head.tpl"}
    {/if}    
</head>
<body>
    
    <div id="main">
        {include file="`$_path_mods``$_page`.tpl"}        
    </div>
   
</body>
</html>