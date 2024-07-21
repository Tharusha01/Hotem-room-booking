<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();

if(isset($_GET['seen']))
{
    // echo $_GET['seen'];//1
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all')
    {
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if (update($q, $values, 'i')) {
            alert('success', 'Marked all as readed');
        } else {
            alert('error', 'error!');
        }
    }
    else{
        $q= "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii'))
        {
            alert('success','Marked as readed');
        }
        else{
            alert('error','error!');

        }
    }
}


if (isset($_GET['del'])) {
    // echo $_GET['seen'];//1
    $frm_data = filteration($_GET);

    if ($frm_data['del'] == 'all')
    {
        $q = "DELETE FROM `user_queries`";
        // $values = [$frm_data['del']];
        if (mysqli_query($con,$q)) {
            alert('success', 'All Data Deleted');
        } else {
            alert('error', 'error!');
        }
    } else {
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if (delete($q, $values, 'i')) {
            alert('success', 'Deleted');
        } else {
            alert('error', 'error!');
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-User Queries</title>
    <?php require('inc/links.php');
    ?>
</head>

<body class="bg-light">
    <?php
    require('inc/header.php');
    ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">USER QUERIES</h3>
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                    <div class="text-end mb-4">
                        <a href="?seen=all" class="btn btn-dark shadow-none rounded-pill">Seen All</a>
                        <a href="?del=all" class="btn btn-danger shadow-none rounded-pill">Delete All</a>
                    </div>

                        <div class="table-responsive-md" style="height:450px;overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-white">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $q="SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                                        $data = mysqli_query($con,$q);
                                        $i=1;

                                        while($row=mysqli_fetch_assoc($data)){
                                            $seen='';
                                            if($row['seen']!=1){
                                                $seen="<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a><br>";//hit the same page and get data
                                            }
                                            $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                            echo<<<data
                                                <tr>
                                                    <td>$i</td>
                                                    <td>$row[name]</td>
                                                    <td>$row[email]</td>
                                                    <td>$row[subject]</td>
                                                    <td>$row[message]</td>
                                                    <td>$row[date]</td>
                                                    <td>$seen</td>
                                                    
                                                </tr>
                                            data;
                                            $i++;
                                        }
                                    
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require('inc/scripts.php');
    ?>
</body>

</html>