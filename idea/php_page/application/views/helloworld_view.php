<html>   
    <head>   
        <title><?=$page_title?></title>   
    </head>   
    <body> 
        <table border="1" width="40%" cellpadding="5" >
            <?php foreach($content as $c):?> 
            <tr>
                <td><?php echo $c->login;?></td>
            </tr>
            <?php endforeach;?> 
        </table>             
    </body>   
</html>