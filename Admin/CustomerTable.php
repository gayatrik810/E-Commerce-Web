  <!------PHP START-------------------------------------------------------------------------------------------------->
        <?php
             include "config.php";

        $view=mysqli_query($con,"SELECT * FROM users;") or die (mysqli_error($con,));

        while($row=mysqli_fetch_array($view)){
            extract($row);
               ?>
        <tbody>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $email_id; ?></td>
                <td><?php echo $first_name; ?></td>
                <td><?php echo $last_name; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo $password; ?></td>
                <td><a name="btn_update" type="button" href="update.php?ID=<?php echo $id; ?>"><button>Update</button></a>
                    <a name="btn_delete" type="button" href="delete.php?ID=<?php echo $id; ?>"><button>Delete</button></a></td>    
            </tr>    
        </tbody>
        <?php  }   ?>
         <!------PHP END-------------------------------------------------------------------------------------------------->