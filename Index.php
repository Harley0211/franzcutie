<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'Scan';

$allowed_pages = ['Scan', 'Logbook', 'Schedules'];
if (!in_array($page, $allowed_pages)) {
    $page = 'Scan';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php include 'Sidebar.php'; ?>

    <div class="main-content flex-grow-1 d-flex align-items-start">
        <?php include "Pages/$page.php"; ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".nav-button");
            const urlParams = new URLSearchParams(window.location.search);
            const currentPage = urlParams.get("page") || "Scan";

            buttons.forEach((btn) => btn.classList.remove("active"));

            buttons.forEach((btn) => {
                if (btn.dataset.page === currentPage) {
                    btn.classList.add("active");
                }
            });
        });
    </script>



</body>

</html>