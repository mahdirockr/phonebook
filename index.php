<?php 
include_once 'inc/header.php';
include_once 'function.php';
?>

<body>
    <table>
        <tr>
            <td>SL</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>

        <?php 
            $sl = 1;
            $rows = view_all_contact();
            foreach($rows as $r){ ?>

            <tr>
                <td><?php echo $sl++; ?></td>
                <td><?php echo $r['c_name']?></td>
                <td><?php echo $r['c_phone']?></td>
                <td><a href="editcontact.php?id=<?php echo $r['c_id'] ?>">Edit</a> | <a onclick="return confirm('Are you sure to delete?')" href="deletecontact.php?id=<?php echo $r['c_id'] ?>">Delete</a></td>
            </tr>

        <?php };
        ?>

        
    </table>
    <a href="addcontact.php">Add Contact</a>
</body>
</html>