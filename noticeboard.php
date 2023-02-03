<html>
    <head>
        <style>
            body
            {

                background:white;
                
            }
            table
            { 
                  background:lightblue;
            }
            
            </style>

</head>

    </html>

<?php
include("connection.php");
$query="select * from notice";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);





if($total != 0)
{
    ?>
<h1 align="center"><mark>NOTICE BOARD</mark></h1>
<center><table border="5px"cellspacing="1"width=40% height=40%>
    <tr>
        <th width=10% height=10%>Tittle</th>
       <th width=10% height=10%>Date</th>
        <th width=20% height=20%>Details</th>
</tr>



    <?php
    while($result=mysqli_fetch_assoc($data))
    {
      echo  "
        <tr><td>".$result['tittle']."</td>
        <td>".$result['date']."</td>
       <td>".$result['details']."</td></tr>
        
        
        ";

        
        
        //echo  $result['tittle']." ".$result['date']." ".$result['details']."<br>";
        

    }
}
else
    {
       echo "record not found";
    }

?>
</table>
</center>
<script>
    function checkdelete()
    {
        return confirm ('ARe u sure u want to delete these data ?');
    }

    </script>
</html>