<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <div class="content-fluid scan-primary-container">
        <div class="profile-frame">
            <img src="../Assets/LOGO/DICT-logo.png" alt="Profile" class="img-fluid">
        </div>

        <div class="clock-container">
            <div id="clock">00:00 PM</div>
            <div id="date">Jan. 1, 2025</div>

            <div class="shift-buttons">
                <button class="btn shift-btn start-shift">Start Shift</button>
                <button class="btn shift-btn break">Break</button>
                <button class="btn shift-btn end-shift">End Shift</button>
            </div>
        </div>
    </div>

    <div class="guest-container"></div>

    <div class="scan-secondary-container">
        <div class="welcome-container">
            <button class="guest-button">
                Guest
                <svg width="100" height="100" fill="#0866ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 6a3.75 3.75 0 1 0 0 7.5A3.75 3.75 0 0 0 12 6Zm0 6a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 0 1 0 4.5Z"></path>
                    <path d="M12 1.5A10.5 10.5 0 1 0 22.5 12 10.512 10.512 0 0 0 12 1.5ZM7.5 19.782V18.75a2.253 2.253 0 0 1 2.25-2.25h4.5a2.253 2.253 0 0 1 2.25 2.25v1.032a8.924 8.924 0 0 1-9 0Zm10.494-1.088A3.751 3.751 0 0 0 14.25 15h-4.5a3.751 3.751 0 0 0-3.744 3.694 9 9 0 1 1 11.988 0Z"></path>
                </svg>
            </button>

            <h1>WELCOME</h1>
            <p>Please scan your ID here</p>
            <svg width="100" height="100" fill="#1A1A1A" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7h2v10H5V7Zm9 0h1v10h-1V7Zm-4 0h3v10h-3V7ZM8 7h1v10H8V7Zm8 0h3v10h-3V7Z"></path>
                <path d="M4 5h4V3H4c-1.103 0-2 .897-2 2v4h2V5Zm0 16h4v-2H4v-4H2v4c0 1.103.897 2 2 2ZM20 3h-4v2h4v4h2V5c0-1.103-.897-2-2-2Zm0 16h-4v2h4c1.103 0 2-.897 2-2v-4h-2v4Z"></path>
            </svg>

        </div>

        <div class="scanned-container">
            <div class="scanned-name">
                John A. Doe
            </div>
            <div class="divider-line"></div>
            <div class="scanned-container-top">
                <div class="container-title-top">Completion Time</div>
                <div class="completion-time">
                    <span class="completion-hours">000</span>
                    <span class="hours-title">Hours</span>
                </div>

            </div>
            <div class="scanned-container-bottom">
                <div class="container-title-bottom">Time Complete</div>
                <div class="completed-time">
                    <span class="completed-hours">000</span>
                    <span class="hours-title">Hours</span>
                </div>
            </div>

            <div class="scanned-container-center">
                <div class="weekly-reflection-title">Weekly Reflection</div>
                <div class="reflection-divider-line"></div>
                <div class="reflection-scrollable-container">
                    <div class="week-reflection">
                        <div class="week-title">Week 1</div>
                        <div class="reflection-text">
                            This is a placeholder for reflections. Admin inputs the week's reflections, and it will display here.
                        </div>
                    </div>
                    <div class="week-divider"></div>
                </div>

            </div>

            <div class="scanned-container-right">
                <div class="non-compliance-title">Pending Requirements</div>
                <div class="non-compliance-items">
                    <div class="non-compliance-item placeholder-item">No Birth</div>
                    <div class="non-compliance-item placeholder-item">No ID</div>
                    <div class="non-compliance-item placeholder-item">No TOR</div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function updateClockAndDate() {
            let now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let amPm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12 || 12;
            minutes = minutes < 10 ? '0' + minutes : minutes;

            document.getElementById('clock').textContent = `${hours}:${minutes} ${amPm}`;


            const monthNames = ["Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."];
            let month = monthNames[now.getMonth()];
            let day = now.getDate();
            let year = now.getFullYear();

            document.getElementById('date').textContent = `${month} ${day}, ${year}`;
        }

        setInterval(updateClockAndDate, 1000);
        updateClockAndDate();

        document.querySelector(".scan-secondary-container").addEventListener("click", function() {
            document.querySelector(".welcome-container").style.display = "none";
            document.querySelector(".scanned-container").style.display = "block";
        });

        document.querySelector(".guest-button").addEventListener("click", function() {
            let guestContainer = document.querySelector(".guest-container");
            guestContainer.style.display = guestContainer.style.display === "block" ? "none" : "block";
        });
    </script>



</body>

</html>