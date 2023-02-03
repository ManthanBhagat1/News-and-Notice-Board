<a href='extra.php'>FOR UPDATE NEWS BOARD CLICK HERE==></a>
<br><a href='home.html'>HOME CLICK HERE==></a>





<html>
    <head>
        <style>
            body
            {

                background:red;
                
            }
            table
            { 
                  background:white;
            }
            .update,delete,add
            {
                background-color:green;
                color:white;
                border:0;
                outline:none;
                border-radius:5px;
                height:23px;
                width: 80px;
                font-weight:bold;
                cursor:pointer;
            }
            .delete
            {
                background-color:red;
                
            }
            .add{
                background-color:brown;
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
<center><table border="3px"cellspacing="7"width="55%">
    <tr>
        <th width=10%>Tittle</th>
        <th width=10% >Date</th>
        <th width=20%>Details</th>
        <th width=15%>OPERATION</th>
</tr>


    <?php
    while($result=mysqli_fetch_assoc($data))
    {
      echo  "<tr>
        <td>".$result['tittle']."</td>
        <td>".$result['date']."</td>
        <td>".$result['details']."</td>
        <td><a href='update.php ?id=$result[tittle]&date=$result[date]&details=$result[details]'><input type='submit' value='update'class='update'></a>
        <a href='delete.php ?id=$result[tittle]&date=$result[date]&details=$result[details]'><input type='submit' value='delete'
        class='delete' onClick ='return checkdelete()'></a>
        <a href='notice.html'><input type='submit' value='ADD'class='add'></a></td>
    
        </tr>
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
                                                                  






                                    