<?php

include_once('./components/top-bootstrap.php');
include_once('./components/sidebar-user.php');
?>

<div class="container mt-5">
    <h2 class="mb-4">Timesheet</h2>

    <!-- Form to submit timesheet entry -->
    <form action="process.php" method="post">
        <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" class="form-control" id="task" name="task" required>
        </div>
        <div class="mb-3">
            <label for="hours" class="form-label">Hours</label>
            <input type="number" class="form-control" id="hours" name="hours" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Display timesheet entries -->
    <h3 class="mt-5">Timesheet Entries</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task</th>
                <th scope="col">Hours</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include your PHP code to fetch timesheet entries and display them here
            // Example: foreach ($timesheetEntries as $entry) { ... }
            ?>
        </tbody>
    </table>
</div>

<?php

include_once('./components/footer.php');
include_once('./components/bottom.php');

?>