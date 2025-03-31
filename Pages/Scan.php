<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Scan</title>
</head>

<style>
    .main-content {
        position: absolute;
        width: calc(100% - 260px);
        height: 100vh;
        display: flex;
        flex-direction: column;
        padding: 20px;
        right: 0;
        position: relative;
        flex-grow: 1;
        box-sizing: border-box;
        background-color: #f5f5f5;
        border: 1px solid #1a1a1a;
    }

    .profile-picture {
        width: 385px;
        height: 385px;
        margin-left: 20px;
        border-radius: 50%;
        overflow: hidden;
        border: 5px solid #1a1a1a;
    }

    .profile-picture img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .time-container {
        position: absolute;
        top: 20px;
        right: 50px;
        text-align: right;
        font-weight: 600;
    }

    #time {
        font-size: 128px;
        font-weight: 600;
    }

    #date {
        font-size: 40px;
        margin-top: -10px;
    }

    .button-group {
        position: absolute;
        top: 350px;
        right: 50px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .button-group .btn-start {
        width: 130px;
        height: 43px;
        border-radius: 12px;
        background-color: #316efa;
        color: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    .button-group .btn-break {
        width: 130px;
        height: 43px;
        border-radius: 12px;
        background-color: #3e27b7;
        color: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    .button-group .btn-end {
        width: 130px;
        height: 43px;
        border-radius: 12px;
        background-color: #f5d8d8;
        color: #bf0f0f;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    .shape-container {
        width: 100%;
        max-width: 100%;
        height: 500px;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        box-sizing: border-box;
    }

    .primary-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .text-container .welcome-text {
        text-align: center;
        font-size: 96px;
        font-weight: 600;
        color: #1a1a1a;
    }

    .primary-container .text-container {
        text-align: center;
    }

    .text-container .scan-text {
        font-size: 40px;
        font-weight: 600;
        color: #1a1a1a;
        margin-top: 20px;
    }

    .primary-container .scan-icon svg {
        width: 150px;
        height: auto;
        margin-top: 10px;
    }

    .primary-container .guest-button {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 93px;
        height: 46px;
        background: #fff;
        color: #316efa;
        border: 1px solid #c7c7c7;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

<body>
    <div class="main-content">
        <div class="profile-picture">
            <img src="Assets/DICT-Logo.png" alt="Profile Picture" class="img-fluid">
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

        <div class="shape-container">
            <div class="primary-container">
                <button class="guest-button">
                    <svg width="100" height="100" fill="#0866ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6a3.75 3.75 0 1 0 0 7.5A3.75 3.75 0 0 0 12 6Zm0 6a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 0 1 0 4.5Z"></path>
                        <path d="M12 1.5A10.5 10.5 0 1 0 22.5 12 10.512 10.512 0 0 0 12 1.5ZM7.5 19.782V18.75a2.253 2.253 0 0 1 2.25-2.25h4.5a2.253 2.253 0 0 1 2.25 2.25v1.032a8.924 8.924 0 0 1-9 0Zm10.494-1.088A3.751 3.751 0 0 0 14.25 15h-4.5a3.751 3.751 0 0 0-3.744 3.694 9 9 0 1 1 11.988 0Z"></path>
                    </svg>
                    Guest
                </button>
                <div class="text-container">
                    <h1 class="welcome-text">WELCOME</h1>
                    <p class="scan-text">Please scan your ID here</p>
                </div>
                <div class="scan-icon">
                    <svg width="100" height="100" fill="#1A1A1A" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 7h2v10H5V7Zm9 0h1v10h-1V7Zm-4 0h3v10h-3V7ZM8 7h1v10H8V7Zm8 0h3v10h-3V7Z"></path>
                        <path d="M4 5h4V3H4c-1.103 0-2 .897-2 2v4h2V5Zm0 16h4v-2H4v-4H2v4c0 1.103.897 2 2 2ZM20 3h-4v2h4v4h2V5c0-1.103-.897-2-2-2Zm0 16h-4v2h4c1.103 0 2-.897 2-2v-4h-2v4Z"></path>
                    </svg>
                </div>
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