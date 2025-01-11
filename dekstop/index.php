<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan ZUT 2024</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1e1e1e;
      color: #fff;
      transition: background-color 0.3s, color 0.3s;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 25%;
      padding: 20px;
      background-color: #2d2d2d;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar input,
    .sidebar button {
      display: block;
      width: 100%;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 16px;
      background-color: #3e3e3e;
      color: #fff;
      border: 1px solid #555;
      border-radius: 5px;
    }

    .sidebar button {
      cursor: pointer;
    }

    .sidebar button:hover {
      background-color: #555;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    .controls {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      align-items: center;
    }

    .controls button {
      padding: 10px 15px;
      font-size: 14px;
      background-color: #3e3e3e;
      color: #fff;
      border: 1px solid #555;
      border-radius: 5px;
      cursor: pointer;
    }

    .controls button.active {
      background-color: #5cb85c;
      color: #fff;
    }

    .controls button:hover {
      background-color: #555;
    }

    .calendar {
      display: grid;
      grid-template-columns: 50px repeat(7, 1fr);
      grid-auto-rows: 50px;
      border-collapse: collapse;
      border: 1px solid #444;
    }

    .calendar div {
      border: 1px solid #444;
      padding: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .time-slot {
      background-color: #2d2d2d;
    }

    .day-header {
      background-color: #444;
      font-weight: bold;
    }

    .event {
      background-color: #5cb85c;
      color: #fff;
      font-size: 12px;
      text-align: center;
      border-radius: 3px;
      padding: 2px;
    }

    .legend {
      margin-top: 20px;
    }

    .legend span {
      display: inline-block;
      width: 20px;
      height: 20px;
      margin-right: 5px;
    }

    .legend .lab {
      background-color: #5bc0de;
    }

    .legend .lecture {
      background-color: #f0ad4e;
    }

    .legend .project {
      background-color: #5cb85c;
    }

    .legend .seminar {
      background-color: #d9534f;
    }

    .legend .language {
      background-color: #337ab7;
    }

    .theme-light {
      background-color: #f4f4f4;
      color: #000;
    }

    .theme-light .sidebar {
      background-color: #e0e0e0;
    }

    .theme-light .sidebar input,
    .theme-light .sidebar button {
      background-color: #ddd;
      color: #000;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="sidebar">
    <label for="lecturer">Wykładowca:</label>
    <input type="text" id="lecturer" placeholder="Podaj nazwisko">

    <label for="room">Sala:</label>
    <input type="text" id="room" placeholder="Podaj salę">

    <label for="subject">Przedmiot:</label>
    <input type="text" id="subject" placeholder="Podaj przedmiot">

    <label for="group">Grupa:</label>
    <input type="text" id="group" placeholder="Podaj grupę">

    <label for="album">Numer albumu:</label>
    <input type="text" id="album" placeholder="Podaj nr albomu">

    <button id="search">Szukaj</button>
    <button id="clear">Wyczyść filtry</button>

    <div class="legend">
      <h4>Legenda:</h4>
      <div><span class="lab"></span> Laboratorium</div>
      <div><span class="lecture"></span> Wykład</div>
      <div><span class="project"></span> Projekt</div>
      <div><span class="seminar"></span> Audytoryjne</div>
      <div><span class="language"></span> Lektorat</div>
    </div>
  </div>
  <div class="content">
    <div class="controls">
      <div>
        <button id="prev-week">&#x25C0; Poprzednia niedziela</button>
        <span id="week-label">06.01 – 12.01</span>
        <button id="next-week">Следующая &#x25B6;</button>
      </div>
      <div>
        <button id="day-view">День</button>
        <button id="week-view" class="active">Неделя</button>
        <button id="month-view">Месяц</button>
      </div>
      <div>
        <button id="font-small">Мелкий</button>
        <button id="font-medium">Средний</button>
        <button id="font-large">Крупный</button>
        <button id="toggle-theme">Сменить тему</button>
      </div>
    </div>
    <div class="calendar" id="calendar">
      <div></div>
      <div class="day-header">пон. 6.01</div>
      <div class="day-header">вт. 7.01</div>
      <div class="day-header">ср. 8.01</div>
      <div class="day-header">чт. 9.01</div>
      <div class="day-header">пт. 10.01</div>
      <div class="day-header">сб. 11.01</div>
      <div class="day-header">вс. 12.01</div>

      <div class="time-slot">07</div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>

      <div class="time-slot">08</div>
      <div class="event" style="background-color: #5cb85c;">Inżynierski projekt zespołowy 1 (P)</div>
      <div></div>
      <div class="event" style="background-color: #f0ad4e;">Algorytmy 2 (W)</div>
      <div class="event" style="background-color: #5bc0de;">Aplikacje internetowe 1 (L)</div>
      <div class="event" style="background-color: #f0ad4e;">Podstawy ochrony informacji (W)</div>
      <div></div>
      <div></div>

      <div class="time-slot">09</div>
      <div></div>
      <div></div>
      <div class="event" style="background-color: #5cb85c;">Sieci komputerowe (L)</div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>

      <div class="time-slot">10</div>
      <div></div>
      <div></div>
      <div></div>
      <div class="event" style="background-color: #5cb85c;">Zarządz. informacją (L)</div>
      <div class="event" style="background-color: #337ab7;">Grafika webowa (W)</div>
      <div></div>
      <div></div>

      <div class="time-slot">14</div>
      <div class="event" style="background-color: #5cb85c;">Sztuczna inteligencja (L)</div>
      <div class="event" style="background-color: #337ab7;">Język angielski 2 (Lek)</div>
      <div class="event" style="background-color: #337ab7;">Systemy operacyjne (L)</div>
    </div>
  </div>
</div>
<script>
  const weekLabel = document.getElementById('week-label');
  const prevWeekButton = document.getElementById('prev-week');
  const nextWeekButton = document.getElementById('next-week');
  const body = document.body;
  const toggleThemeButton = document.getElementById('toggle-theme');
  const dayViewButton = document.getElementById('day-view');
  const weekViewButton = document.getElementById('week-view');
  const monthViewButton = document.getElementById('month-view');
  const calendar = document.getElementById('calendar');

  let currentWeek = new Date('2025-01-06');
  let currentView = 'week';

  function updateWeekLabel() {
    const startOfWeek = new Date(currentWeek);
    const endOfWeek = new Date(currentWeek);
    endOfWeek.setDate(startOfWeek.getDate() + 6);

    const options = { day: 'numeric', month: 'short' };
    weekLabel.textContent = `${startOfWeek.toLocaleDateString('pl-PL', options)} – ${endOfWeek.toLocaleDateString('pl-PL', options)}`;
  }

  function updateView(view) {
    currentView = view;

    dayViewButton.classList.remove('active');
    weekViewButton.classList.remove('active');
    monthViewButton.classList.remove('active');

    if (view === 'day') {
      dayViewButton.classList.add('active');
      calendar.style.display = 'block'; // Update with day view logic
    } else if (view === 'week') {
      weekViewButton.classList.add('active');
      calendar.style.display = 'grid'; // Default logic for week view
    } else if (view === 'month') {
      monthViewButton.classList.add('active');
      calendar.style.display = 'block'; // Update with month view logic
    }
  }

  prevWeekButton.addEventListener('click', () => {
    if (currentView === 'week') {
      currentWeek.setDate(currentWeek.getDate() - 7);
      updateWeekLabel();
    } else if (currentView === 'day') {
      currentWeek.setDate(currentWeek.getDate() - 1);
      updateWeekLabel();
    } else if (currentView === 'month') {
      currentWeek.setMonth(currentWeek.getMonth() - 1);
      updateWeekLabel();
    }
  });

  nextWeekButton.addEventListener('click', () => {
    if (currentView === 'week') {
      currentWeek.setDate(currentWeek.getDate() + 7);
      updateWeekLabel();
    } else if (currentView === 'day') {
      currentWeek.setDate(currentWeek.getDate() + 1);
      updateWeekLabel();
    } else if (currentView === 'month') {
      currentWeek.setMonth(currentWeek.getMonth() + 1);
      updateWeekLabel();
    }
  });

  dayViewButton.addEventListener('click', () => updateView('day'));
  weekViewButton.addEventListener('click', () => updateView('week'));
  monthViewButton.addEventListener('click', () => updateView('month'));

  toggleThemeButton.addEventListener('click', () => {
    body.classList.toggle('theme-light');
  });

  updateWeekLabel(); // Initialize the week label on load
</script>