<?php
include('DB_connection.php');
$notification_for = $_POST['notification_for'];
$query = "SELECT * FROM `notification` WHERE `notification_for` = '$notification_for' ORDER BY created_time desc LIMIT 5";
$result = mysqli_query($connn, $query);
while($row = mysqli_fetch_assoc($result))
{
    ?>
    <ul style="list-style-type: none;" class="notification">
        <li>
            <h4><?=$row['title']?></h4>
            <p><?=$row['detail']?></p>
            <p style="text-align: right;color:gray"><small><?=$row['created_time']?></small></p>
        </li>
    </ul>
    <?php
}
?>
<style>
    .notification
    {
        margin: 0px;
        padding: 0px;
    }
    .notification li
    {
        text-align: left;
        border: 1px solid gray;
        border-radius: 10px;
    }
</style>