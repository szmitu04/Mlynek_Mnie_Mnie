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
    <style>
        :root {
            --bg-color: white;
            --text-color: black;
            --header-color: #004f97;
            --button-bg: #007bff;
            --button-text: white;
            --grid-border: lightgray;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: var(--header-color);
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            margin: 20px;
        }

        .schedule {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-auto-rows: 50px;
            border: 1px solid var(--grid-border);
            margin-bottom: 20px;
        }

        .schedule div {
            border: 1px solid var(--grid-border);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .filters {
            margin-bottom: 20px;
        }

        .filters input {
            margin: 5px 0;
            padding: 5px;
            width: 100%;
        }

        .filters button {
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-right: 5px;
        }

        .filters button:hover {
            opacity: 0.8;
        }

        .legend {
            margin-bottom: 20px;
        }

        .legend span {
            display: inline-block;
            margin-right: 10px;
            padding: 5px;
        }

        .laboratorium { background-color: green; color: white; }
        .wyklad { background-color: orange; color: white; }
        .projekt { background-color: blue; color: white; }
        .audytoryjne { background-color: gray; color: white; }
        .lektorat { background-color: red; color: white; }

        .theme-switcher {
            margin-bottom: 20px;
        }

        .theme-switcher button {
            margin-right: 5px;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .theme-light {
            background-color: white;
            color: black;
        }

        .theme-dark {
            background-color: black;
            color: white;
        }

        .theme-contrast {
            background-color: black;
            color: yellow;
        }
    </style>
</head>
<body>
<header>
    <h1>Zachodniopomorski Uniwersytet Technologiczny w Szczecinie</h1>
</header>

<div class="container">
    <div class="theme-switcher">
        <button onclick="setTheme('light')">Zwykły</button>
        <button onclick="setTheme('dark')">Ciemny</button>
        <button onclick="setTheme('contrast')">Kontrast</button>
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
        <label>Wykładowca</label>
        <input type="text" placeholder="Wprowadź wykładowcę">

        <label>Sala</label>
        <input type="text" placeholder="Wprowadź salę">

        <label>Przedmiot</label>
        <input type="text" placeholder="Wprowadź przedmiot">

        <label>Grupa</label>
        <input type="text" placeholder="Wprowadź grupę">

        <label>Numer albumu</label>
        <input type="text" placeholder="Wprowadź numer albumu">

        <button>Szukaj</button>
        <button>Wyczyść filtry</button>
    </div>
</div>

<script>
    function setTheme(theme) {
        if (theme === 'light') {
            document.documentElement.style.setProperty('--bg-color', 'white');
            document.documentElement.style.setProperty('--text-color', 'black');
            document.documentElement.style.setProperty('--header-color', '#004f97');
            document.documentElement.style.setProperty('--button-bg', '#007bff');
            document.documentElement.style.setProperty('--button-text', 'white');
            document.documentElement.style.setProperty('--grid-border', 'lightgray');
        } else if (theme === 'dark') {
            document.documentElement.style.setProperty('--bg-color', '#121212');
            document.documentElement.style.setProperty('--text-color', 'white');
            document.documentElement.style.setProperty('--header-color', '#1f1f1f');
            document.documentElement.style.setProperty('--button-bg', '#333333');
            document.documentElement.style.setProperty('--button-text', 'white');
            document.documentElement.style.setProperty('--grid-border', '#333333');
        } else if (theme === 'contrast') {
            document.documentElement.style.setProperty('--bg-color', 'black');
            document.documentElement.style.setProperty('--text-color', 'yellow');
            document.documentElement.style.setProperty('--header-color', 'yellow');
            document.documentElement.style.setProperty('--button-bg', 'yellow');
            document.documentElement.style.setProperty('--button-text', 'black');
            document.documentElement.style.setProperty('--grid-border', 'yellow');
        }
    }
</script>
</body>
</html>
