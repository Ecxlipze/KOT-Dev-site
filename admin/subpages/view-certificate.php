<?php
include "../db/db_connect.php"; // adjust path if needed
include "../authentication/auth.php";
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM certificates WHERE id = $id";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <table class="table table-bordered">
            <tr>
                <th>Certificate Type</th>
                <td><?= htmlspecialchars($row['certificate_type']); ?></td>
            </tr>
            <tr>
                <th>Presented To</th>
                <td><?= htmlspecialchars($row['presented_to']); ?></td>
            </tr>
            <tr>
                <th>Achievement Date</th>
                <td><?= date("d M Y", strtotime($row['achievement_date'])); ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <?php if($row['status'] == 1){ ?>
                        <span class="badge rounded-pill bg-success">Active</span>
                    <?php } else { ?>
                        <span class="badge rounded-pill bg-warning text-dark">Inactive</span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?= date("d M Y", strtotime($row['created_at'])); ?></td>
            </tr>
        </table>
        <?php
    } else {
        echo '<p class="text-danger">Certificate not found.</p>';
    }
} else {
    echo '<p class="text-danger">Invalid Request.</p>';
}
?>
