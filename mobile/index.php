<!--

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Plan ZUT 2024</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">

    </div>
</body>
</html>

-->

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Zajęć</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-content">
        <!--<img src="logo.png" alt="Logo strony" class="logo">-->
        <h1>Zachodniopomorski Uniwersytet Technologiczny w Szczecinie</h1>
    </div>
</header>

<div class="container">
    <div class="theme-switcher">
        <button onclick="setTheme('light')">Zwykły</button>
        <button onclick="setTheme('dark')">Ciemny</button>
        <button onclick="setTheme('contrast')">Kontrast</button>
    </div>

    <div class="font-size-selector">
        <button onclick="setFontSize('small')">Mały</button>
        <button onclick="setFontSize('medium')">Zwykły</button>
        <button onclick="setFontSize('large')">Duży</button>
    </div>

    <div class="view-switcher">
        <button onclick="setView('day')">Dzień</button>
        <button onclick="setView('week')">Tydzień</button>
        <button onclick="setView('month')">Miesiąc</button>
        <button onclick="goToToday()">Dzisiaj</button>
    </div>

    <div class="schedule-navigation">
        <button onclick="navigate('previous')">Poprzedni</button>
        <button onclick="navigate('next')">Następny</button>
    </div>

    <div class="filters">
        <button class="filters-toggle" onclick="toggleDropdown('filter-menu')">Filtry zajęć</button>
        <div id="filter-menu" class="dropdown-menu hidden">

            <!-- Typy zajęć -->
            <h3>Typ zajęć</h3>
            <label>
                <input type="checkbox" class="filter-checkbox" value="laboratorium" checked> Laboratoria
            </label>
            <label>
                <input type="checkbox" class="filter-checkbox" value="wyklad" checked> Wykłady
            </label>
            <label>
                <input type="checkbox" class="filter-checkbox" value="projekt" checked> Projekty
            </label>
            <label>
                <input type="checkbox" class="filter-checkbox" value="audytoryjne" checked> Audytoryjne
            </label>
            <label>
                <input type="checkbox" class="filter-checkbox" value="lektorat" checked> Lektoraty
            </label>

            <button onclick="applyFilters()">Szukaj</button>
            <button onclick="clearFilters()">Wyczyść filtry</button>
        </div>
    </div>



    <div class="schedule-container">
        <!-- Widok tygodnia -->
        <div id="weekly-view" class="schedule-view">
            <div class="week-grid">
                <!-- Godziny w osi Y -->
                <div class="time-labels">
                    <div>6:00</div>
                    <div>7:00</div>
                    <div>8:00</div>
                    <div>9:00</div>
                    <div>10:00</div>
                    <div>11:00</div>
                    <div>12:00</div>
                    <div>13:00</div>
                    <div>14:00</div>
                    <div>15:00</div>
                    <div>16:00</div>
                    <div>17:00</div>
                    <div>18:00</div>
                    <div>19:00</div>
                    <div>20:00</div>
                    <div>21:00</div>
                    <div>22:00</div>
                </div>
                <!-- Siatka tygodnia -->
                <div class="grid">
                    <div class="day-header">Pon</div>
                    <div class="day-header">Wt</div>
                    <div class="day-header">Śr</div>
                    <div class="day-header">Czw</div>
                    <div class="day-header">Pt</div>
                    <div class="day-header">Sob</div>
                    <div class="day-header">Nd</div>

                    <!-- Przyklady zajęć -->
                    <div class="class laboratorium" style="grid-column: 1; grid-row: 8 / 10;">
                        Laboratorium<br>8:00-9:30
                    </div>
                    <div class="class wyklad" style="grid-column: 2; grid-row: 10 / 11;">
                        Wykład<br>10:00-11:00
                    </div>
                </div>
            </div>
        </div>

        <!-- Widok dnia -->
        <div id="daily-view" class="schedule-view hidden">
            <ul class="daily-list">
                <li class="class wyklad">
                    <strong>Wykład:</strong> 8:00-9:30<br>Sala: 101
                </li>
                <li class="class laboratorium">
                    <strong>Laboratorium:</strong> 10:00-12:00<br>Sala: 202
                </li>
            </ul>
        </div>

        <!-- Widok miesiąca -->
        <div id="monthly-view" class="schedule-view hidden">
            <div class="month-grid">
                <div class="day">1</div>
                <div class="day">2</div>
                <div class="day">3</div>
                <div class="day">4</div>
                <div class="day">5</div>
                <div class="day">6</div>
                <div class="day">7</div>
                <!-- Przyklad wpisu zajęć w dniu -->
                <div class="day">
                    <div class="event">
                        Wykład<br>10:00-11:00
                    </div>
                </div>
                <!-- Reszta dni miesiąca -->
            </div>
        </div>
    </div>


    <div class="legend">
        <span class="laboratorium">Laboratorium</span>
        <span class="wyklad">Wykład</span>
        <span class="projekt">Projekt</span>
        <span class="audytoryjne">Audytoryjne</span>
        <span class="lektorat">Lektorat</span>
    </div>
    <div class="filters">
        <h3>Filtry</h3>
        <label for="lecturer">Wykładowca</label>
        <input type="text" id="lecturer" placeholder="Wprowadź wykładowcę">

        <label for="room">Sala</label>
        <input type="text" id="room" placeholder="Wprowadź salę">

        <label for="subject">Przedmiot</label>
        <input type="text" id="subject" placeholder="Wprowadź przedmiot">

        <label for="group">Grupa</label>
        <input type="text" id="group" placeholder="Wprowadź grupę">

        <label for="album-number">Numer albumu</label>
        <input type="text" id="album-number" placeholder="Wprowadź numer albumu">

        <button onclick="applyFilters()">Szukaj</button>
        <button onclick="clearFilters()">Wyczyść filtry</button>
    </div>

</div>

<script src="script.js"></script>
</body>
</html>
