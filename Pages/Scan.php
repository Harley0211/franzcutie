    
    <!-- This where the profile image and time displays -->
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

    <!-- this is where the guest input there name -->
    <div class="guest-container">
        <div class="user-wrapper">
            <svg width="364" height="404" viewBox="0 0 364 404" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M61 403.667H323.167C333.864 403.667 344.123 399.417 351.687 391.853C359.251 384.29 363.5 374.031 363.5 363.334V40.6668C363.5 29.9698 359.251 19.7108 351.687 12.1469C344.123 4.58289 333.864 0.333496 323.167 0.333496H40.8333C30.1363 0.333496 19.8773 4.58289 12.3134 12.1469C4.74939 19.7108 0.5 29.9698 0.5 40.6668V363.334C0.5 374.031 4.74939 384.29 12.3134 391.853C19.8773 399.417 30.1363 403.667 40.8333 403.667H61ZM182 60.8133C215.214 60.8133 242.5 88.0585 242.5 121.313C242.436 137.341 236.042 152.695 224.711 164.03C213.379 175.365 198.028 181.764 182 181.834C148.785 181.834 121.5 154.548 121.5 121.313C121.5 88.0585 148.785 60.8133 182 60.8133ZM61 307.875C61 263.125 115.551 217.125 182 217.125C248.449 217.125 303 263.125 303 307.875V323H61V307.875Z" fill="#316EFF" />
            </svg>

        </div>

        <div class="display-guest-info">
            <div class="welcome-txt">Welcome to <b>DICT SARGEN DTC!</b>
                <svg width="40" height="40" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9388 10.5187L7.41628 18.0412C5.73877 19.7182 4.40807 21.7092 3.50018 23.9005C2.59229 26.0918 2.125 28.4405 2.125 30.8125C2.125 33.1845 2.59229 35.5332 3.50018 37.7245C4.40807 39.9158 5.73877 41.9068 7.41628 43.5838C9.09322 45.2613 11.0842 46.592 13.2755 47.4998C15.4669 48.4077 17.8156 48.875 20.1875 48.875C22.5595 48.875 24.9082 48.4077 27.0995 47.4998C29.2908 46.592 31.2818 45.2613 32.9588 43.5838L45.73 30.8125C46.2835 30.2522 46.7064 29.5765 46.9685 28.8339C47.2306 28.0912 47.3254 27.2998 47.2462 26.5162C47.1671 25.7326 46.9158 24.9762 46.5105 24.3009C46.1051 23.6257 45.5556 23.0483 44.9013 22.61L45.73 21.7812C47.7913 19.72 47.7913 16.3413 45.73 14.2587C45.39 13.9187 44.9863 13.6213 44.5825 13.3875C45.0496 12.3269 45.1566 11.1426 44.8872 10.0155C44.6178 8.88837 43.9868 7.88044 43.0907 7.14568C42.1945 6.41093 41.0825 5.98976 39.9244 5.94653C38.7663 5.90329 37.626 6.24036 36.6775 6.90625C36.2451 6.24023 35.6698 5.67885 34.9935 5.26285C34.3171 4.84685 33.5565 4.58668 32.7671 4.50123C31.9776 4.41577 31.179 4.50717 30.4293 4.76879C29.6795 5.03041 28.9974 5.45569 28.4325 6.01375L23.0988 11.3475C22.6658 10.6928 22.0928 10.1425 21.4212 9.73635C20.7496 9.3302 19.9961 9.07837 19.2152 8.99906C18.4343 8.91976 17.6456 9.01495 16.906 9.27777C16.1664 9.54059 15.4945 9.96447 14.9388 10.5187ZM17.935 13.5363C18.36 13.1112 19.0188 13.1112 19.4438 13.5363C19.8688 13.9612 19.8688 14.62 19.4438 15.045L12.6863 21.8025C13.8801 22.9978 14.5507 24.6181 14.5507 26.3075C14.5507 27.9969 13.8801 29.6172 12.6863 30.8125L15.6825 33.8088C17.1431 32.3468 18.146 30.491 18.5687 28.4682C18.9914 26.4454 18.8155 24.3432 18.0625 22.4188L31.45 9.03125C31.875 8.60625 32.5338 8.60625 32.9588 9.03125C33.3838 9.45625 33.3838 10.115 32.9588 10.54L23.1838 20.315L26.18 23.3113L38.9513 10.54C39.3763 10.115 40.035 10.115 40.46 10.54C40.885 10.965 40.885 11.6237 40.46 12.0487L27.6888 24.82L30.685 27.8162L41.2038 17.2975C41.6288 16.8725 42.2875 16.8725 42.7125 17.2975C43.1375 17.7225 43.1375 18.3813 42.7125 18.8063L30.685 30.8337L33.6813 33.83L41.2038 26.3075C41.6288 25.8825 42.2875 25.8825 42.7125 26.3075C43.1375 26.7325 43.1375 27.3913 42.7125 27.8162L29.9625 40.5875C28.6809 41.8709 27.1588 42.889 25.4833 43.5836C23.8079 44.2783 22.0119 44.6358 20.1982 44.6358C18.3844 44.6358 16.5884 44.2783 14.913 43.5836C13.2375 42.889 11.7154 41.8709 10.4338 40.5875C9.15041 39.3058 8.13229 37.7837 7.43764 36.1083C6.74299 34.4328 6.38544 32.6369 6.38544 30.8231C6.38544 29.0094 6.74299 27.2134 7.43764 25.538C8.13229 23.8625 9.15041 22.3404 10.4338 21.0588L17.935 13.5363ZM48.875 36.125C48.875 43.1587 43.1588 48.875 36.125 48.875V45.6875C41.395 45.6875 45.6875 41.395 45.6875 36.125H48.875ZM2.12503 14.875C2.12503 7.84125 7.84128 2.125 14.875 2.125V5.3125C9.60503 5.3125 5.31253 9.605 5.31253 14.875H2.12503Z" fill="#316EFF" />
                </svg>
            </div>
            <div class="instructions-txt">
                Please enter your full name to proceed with your check-in.
            </div>

            <div class="input-text-container">
                <div class="name-title">Name</div>
                <input type="text" id="guest-name" placeholder="Enter your full name">

            </div>

            <div class="information-before">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 6.66667V10M10 13.3333H10.0083M17.5 10C17.5 10.9849 17.306 11.9602 16.9291 12.8701C16.5522 13.7801 15.9997 14.6069 15.3033 15.3033C14.6069 15.9997 13.7801 16.5522 12.8701 16.9291C11.9602 17.306 10.9849 17.5 10 17.5C9.01509 17.5 8.03982 17.306 7.12987 16.9291C6.21993 16.5522 5.39314 15.9997 4.6967 15.3033C4.00026 14.6069 3.44781 13.7801 3.0709 12.8701C2.69399 11.9602 2.5 10.9849 2.5 10C2.5 8.01088 3.29018 6.10322 4.6967 4.6967C6.10322 3.29018 8.01088 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10322 17.5 8.01088 17.5 10Z" stroke="#555555" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Only intern personnel have barcode access. Guests must manually input their name.
            </div>

            <button class="submit-guestname">Submit</button>

        </div>
    </div>
    <!-- welcome panel before scanning -->
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

        <!-- this is where the barcode scanner result will be -->
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
            
            setTimeout(function() {
                document.querySelector(".scanned-container").style.display = "none";
                document.querySelector(".welcome-container").style.display = "block";
            }, 3000); 
        });


        document.querySelector(".guest-button").addEventListener("click", function() {
            let guestContainer = document.querySelector(".guest-container");
            let scanSecondary = document.querySelector(".scan-secondary-container");

            scanSecondary.style.display = "none";
            guestContainer.style.display = "block";
        });
    </script>