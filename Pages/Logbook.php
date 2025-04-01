<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Log Book</title>
</head>

<body>
    <div class="logbook-container">
        <!-- LOG BOOK Title -->
        <h1 class="logbook-title">LOG BOOK</h1>

        <!-- Search Bar + Buttons -->
        <div class="logbook-controls">
            <!-- Search Bar -->
            <div class="search-bar">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="M21 21l-4.35-4.35"></path>
                </svg>
                <input type="text" placeholder="Search Name, Date, Time...">
            </div>

            <!-- Filter Button -->
            <button class="logbook-btn">
                Filter
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 18h4"></path>
                    <path d="M5 12h14"></path>
                    <path d="M3 6h18"></path>
                </svg>
            </button>

            <!-- Print Button -->
            <button class="logbook-btn">
                Print
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9V2h12v7"></path>
                    <path d="M6 18h12v4H6z"></path>
                    <path d="M6 14h12"></path>
                    <circle cx="18" cy="14" r="2"></circle>
                </svg>
            </button>
        </div>
    </div>


</body>

</html>