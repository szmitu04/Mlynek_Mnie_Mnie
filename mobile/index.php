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



    <div class="schedule">
        <div>Pon</div>
        <div>Wt</div>
        <div>Śr</div>
        <div>Czw</div>
        <div>Pt</div>
        <div>Sob</div>
        <div>Nd</div>

        <div class="wyklad">9:00-10:30 Wykład</div>
        <div class="projekt">11:00-12:30 Projekt</div>
        <div class="lektorat">13:00-14:30 Lektorat</div>
        <div class="laboratorium">15:00-16:30 Laboratorium</div>
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
