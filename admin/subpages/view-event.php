<?php
// backend/view-event.php
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM events WHERE id = $id LIMIT 1";
    $result = $con->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-md-6">
                <h6 class="fw-bold">Event Name:</h6>
                <p><?= htmlspecialchars($row['event_name']); ?></p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Date:</h6>
                <p><?= date("d M Y", strtotime($row['event_date'])); ?></p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Time:</h6>
                <p><?= date("h:i A", strtotime($row['event_time'])); ?></p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Venue:</h6>
                <p><?= htmlspecialchars($row['event_venue']); ?></p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Status:</h6>
                <p><?= ($row['event_status'] == 1) ? "Published" : "Draft"; ?></p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold">Created At:</h6>
                <p><?= date("d M Y h:i A", strtotime($row['created_at'])); ?></p>
            </div>
        </div>
        <?php
    } else {
        echo "<p class='text-danger'>Event not found.</p>";
    }
} else {
    echo "<p class='text-danger'>Invalid ID.</p>";
}

$con->close();
?>
