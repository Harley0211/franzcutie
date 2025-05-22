<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fix Guest Container Layout</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #eaeaea;
            height: 100vh;
        }

        .guest-container {
            display: flex;
            gap: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.15);
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 90%;
            max-width: 1100px;
        }

        .user-wrapper {
            width: 364px;
            height: 404px;
            background-color: #800000;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .display-guest-info {
            flex: 1;
            background-color: #1e47b3;
            padding: 20px;
            color: white;
            border-radius: 10px;
        }

        .welcome-text {
            font-size: 24px;
            font-weight: bold;
        }

        .form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="guest-container">
        <div class="user-wrapper">
        <svg width="364" height="404" viewBox="0 0 364 404" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61 403.667H323.167C333.864 403.667 344.123 399.417 351.687 391.853C359.251 384.29 363.5 374.031 363.5 363.334V40.6668C363.5 29.9698 359.251 19.7108 351.687 12.1469C344.123 4.58289 333.864 0.333496 323.167 0.333496H40.8333C30.1363 0.333496 19.8773 4.58289 12.3134 12.1469C4.74939 19.7108 0.5 29.9698 0.5 40.6668V363.334C0.5 374.031 4.74939 384.29 12.3134 391.853C19.8773 399.417 30.1363 403.667 40.8333 403.667H61ZM182 60.8133C215.214 60.8133 242.5 88.0585 242.5 121.313C242.436 137.341 236.042 152.695 224.711 164.03C213.379 175.365 198.028 181.764 182 181.834C148.785 181.834 121.5 154.548 121.5 121.313C121.5 88.0585 148.785 60.8133 182 60.8133ZM61 307.875C61 263.125 115.551 217.125 182 217.125C248.449 217.125 303 263.125 303 307.875V323H61V307.875Z" fill="#316EFF" />
                </svg>
        </div>
        <div class="display-guest-info">
        <div class="welcome-text">Welcome to <b>DICT SARGEN DTC!</b>
                <svg width="100" height="100" fill="none" stroke="#2a5ed4" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.812 5.756a1.875 1.875 0 0 1 3.244-1.875l2.813 4.865"></path>
                    <path d="M6.32 8.927 4.82 6.33a1.875 1.875 0 0 1 3.243-1.875l3.187 5.522"></path>
                    <path d="M14.437 15.498a3.74 3.74 0 0 1 1.369-5.118l-.938-1.632a1.878 1.878 0 0 1 3.254-1.875l1.875 3.254a7.502 7.502 0 1 1-12.994 7.5l-3.938-6.825a1.877 1.877 0 1 1 3.253-1.875l2.063 3.572"></path>
                    <path d="M16.5 2.156a5.634 5.634 0 0 1 4.875 2.813"></path>
                    <path d="M6.272 22.5a11.352 11.352 0 0 1-2.512-3"></path>
                </svg>
            </div>
            <div class="form">
                <div class="details">Please enter your full name to proceed with your check-in.</div>
                <div class="input-container">
                    <label class="guest-name">Full Name</label>
                    <input type="text" id="guest-name" placeholder="Enter your full name">
                </div>
                <div class="info-text">
                    <svg width="18" height="18" fill="none" stroke="#2a5ed4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
                        <path d="M12 7.5v4.875"></path>
                        <path fill="#2a5ed4" stroke="none" d="M12 17.625a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                    </svg>
                    Only intern personnel have barcode access. Guests must manually input their name.
                </div>
                <button class="submit-btn">Submit</button>
            </div>
        </div>
    </div>

</body>

</html>