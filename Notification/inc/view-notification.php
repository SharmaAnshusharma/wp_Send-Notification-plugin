<h1 class="text-center text-primary">All Notification</h1>

<hr>
<?php
global $wpdb;

$all_notification = $wpdb->get_results($wpdb->prepare("SELECT * FROM `wp_notification`"));
        if($all_notification > 0)
        {

            ?>
            <table class="table table-striped table-hovered">
                <tr>
                    <th>SR No.</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Message</th>

                </tr>
            <?php
            $count=1;
            foreach($all_notification as $index=> $notification)
            {
                ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $notification->Title ?></td>
                    <td><?php echo $notification->User ?></td>
                    <td><?php echo $notification->Message ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
            <?php
        }
        else
        {
            echo "<h1>No Data found</h1>";
        }


?>
