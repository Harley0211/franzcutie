<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="Style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Homepage</title>
</head>

<body>

    <div class="sidebar d-flex flex-column justify-content-between">
        <div>
            <img src="Assets/LOGO/DICT-logo with BG.png" alt="Logo" class="logo">

            <nav class="nav flex-column">
                <a href="#" class="nav-button">
                    <svg width="24" height="24" fill="none" stroke="#0866ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M3 7.5V3h4.5"></path>
                        <path d="M3 16.5V21h4.5"></path>
                        <path d="M21 16.5V21h-4.5"></path>
                        <path d="M16.5 3H21v4.5"></path>
                        <path d="M5 12h14"></path>
                    </svg> SCAN
                </a>
                <a href="#" class="nav-button">
                    <svg width="24" height="24" fill="none" stroke="#0866ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M20.5 5h-14v17h14V5Z"></path>
                        <path d="M17.5 5V2H4a.5.5 0 0 0-.5.5V19h3"></path>
                        <path d="M10.5 11h6"></path>
                        <path d="M10.5 15h6"></path>
                    </svg> LOGBOOK
                </a>
                <a href="#" class="nav-button">
                    <svg width="24" height="24" fill="none" stroke="#0866ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M2.5 9.5h19V20a1 1 0 0 1-1 1h-17a1 1 0 0 1-1-1V9.5Z"></path>
                        <path d="M2.5 4.5a1 1 0 0 1 1-1h17a1 1 0 0 1 1 1v5h-19v-5Z"></path>
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <path d="M14 17h3"></path>
                        <path d="M7 17h3"></path>
                        <path d="M14 13h3"></path>
                        <path d="M7 13h3"></path>
                    </svg> SCHEDULES
                </a>
            </nav>
        </div>
    </div>


    <div class="main-content flex-grow-1 d-flex align-items-start p-3">
        <div class="profile-container">
            <div class="profile-picture">
                <img src="Assets/LOGO/DICT-logo.png" alt="Profile Picture" class="img-fluid">
            </div>
            <div class="time-container">
                <div id="time"></div>
                <div id="date"></div>
            </div>
            <div class="button-group">
                <div class="btn btn-start">Start Shift</div>
                <div class="btn btn-break">Break</div>
                <div class="btn btn-end">End Shift</div>
            </div>
        </div>

        <div class="shape-container">
            <div class="text-container">
                <h1 class="welcome-text">WELCOME</h1>
                <p class="scan-text">Please scan your ID here</p>
                <div class="scan-icon"><svg width="100" height="100" fill="#1A1A1A" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 7h2v10H5V7Zm9 0h1v10h-1V7Zm-4 0h3v10h-3V7ZM8 7h1v10H8V7Zm8 0h3v10h-3V7Z"></path>
                        <path d="M4 5h4V3H4c-1.103 0-2 .897-2 2v4h2V5Zm0 16h4v-2H4v-4H2v4c0 1.103.897 2 2 2ZM20 3h-4v2h4v4h2V5c0-1.103-.897-2-2-2Zm0 16h-4v2h4c1.103 0 2-.897 2-2v-4h-2v4Z"></path>
                    </svg></div>
            </div>
        </div>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            const hours = now.getHours() % 12 || 12;
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const ampm = now.getHours() >= 12 ? 'PM' : 'AM';
            const formattedTime = `${hours}:${minutes} ${ampm}`;
            document.getElementById('time').innerText = formattedTime;

            const options = {
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            };
            const formattedDate = now.toLocaleDateString('en-US', options);
            document.getElementById('date').innerText = formattedDate;
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>

</body>

</html>