<html>
    <head>
        <title>Table Assortment</title>
    </head>
    <body>
        <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Product name</td>
                <td>Price</td>
                <td>Provider Id</td>
            </tr>
        </thead>
        <tbody>
        <?php
            include "connect.php";
            
            mysql_select_db("Deliverys");
            $results = mysql_query("SELECT * FROM Assortment");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['Product_Id']?></td>
                    <td><?php echo $row['Product_name']?></td>
                    <td><?php echo $row['Price']?></td>
                    <td><?php echo $row['Provider_Id']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>