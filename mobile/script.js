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
function applyFilters() {
    const lecturer = document.getElementById('lecturer').value.trim();
    const room = document.getElementById('room').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const group = document.getElementById('group').value.trim();
    const albumNumber = document.getElementById('album-number').value.trim();

    console.log('Filtry zastosowane:');
    console.log('Wykładowca:', lecturer || 'Nie podano');
    console.log('Sala:', room || 'Nie podano');
    console.log('Przedmiot:', subject || 'Nie podano');
    console.log('Grupa:', group || 'Nie podano');
    console.log('Numer albumu:', albumNumber || 'Nie podano');

    // Tu możesz dodać kod, który będzie filtrować zajęcia w harmonogramie.
}
//
// function clearFilters() {
//     document.getElementById('lecturer').value = '';
//     document.getElementById('room').value = '';
//     document.getElementById('subject').value = '';
//     document.getElementById('group').value = '';
//     document.getElementById('album-number').value = '';
//
//     console.log('Filtry wyczyszczone');
// }

function setFontSize(size) {
    if (size === 'small') {
        document.documentElement.style.setProperty('--font-size', '12px');
    } else if (size === 'medium') {
        document.documentElement.style.setProperty('--font-size', '16px');
    } else if (size === 'large') {
        document.documentElement.style.setProperty('--font-size', '20px');
    }
}

function toggleDropdown(id) {
    const menu = document.getElementById(id);
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.style.display = 'block'; // Pokaż menu
    } else {
        menu.classList.add('hidden');
        menu.style.display = 'none'; // Ukryj menu
    }
}
//
// function applyFilters() {
//     const lecturer = document.getElementById('lecturer').value.trim();
//     const room = document.getElementById('room').value.trim();
//     const subject = document.getElementById('subject').value.trim();
//     const group = document.getElementById('group').value.trim();
//     const albumNumber = document.getElementById('album-number').value.trim();
//
//     console.log('Filtry zastosowane:');
//     console.log('Wykładowca:', lecturer || 'Nie podano');
//     console.log('Sala:', room || 'Nie podano');
//     console.log('Przedmiot:', subject || 'Nie podano');
//     console.log('Grupa:', group || 'Nie podano');
//     console.log('Numer albumu:', albumNumber || 'Nie podano');
//
//     // Logika do filtrowania zajęć może być dodana tutaj
// }
//
// function clearFilters() {
//     document.getElementById('lecturer').value = '';
//     document.getElementById('room').value = '';
//     document.getElementById('subject').value = '';
//     document.getElementById('group').value = '';
//     document.getElementById('album-number').value = '';
//
//     console.log('Filtry wyczyszczone');
// }

function applyFilters() {
    // Pobieranie danych z tekstowych filtrów
    const lecturer = document.getElementById('lecturer').value.trim();
    const room = document.getElementById('room').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const group = document.getElementById('group').value.trim();
    const albumNumber = document.getElementById('album-number').value.trim();

    // Pobieranie wybranych typów zajęć
    const selectedTypes = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
        .map(checkbox => checkbox.value);

    console.log('Filtry zastosowane:');
    console.log('Wykładowca:', lecturer || 'Nie podano');
    console.log('Sala:', room || 'Nie podano');
    console.log('Przedmiot:', subject || 'Nie podano');
    console.log('Grupa:', group || 'Nie podano');
    console.log('Numer albumu:', albumNumber || 'Nie podano');
    console.log('Wybrane typy zajęć:', selectedTypes.join(', ') || 'Wszystkie');

    // Tutaj możesz dodać logikę do filtrowania zajęć na podstawie wybranych filtrów
    // Na przykład: ukryj zajęcia, które nie są w `selectedTypes`
    const allClasses = document.querySelectorAll('.schedule div');
    allClasses.forEach(classItem => {
        const classType = classItem.className; // Klasa typu zajęć (np. "laboratorium", "wyklad")
        if (selectedTypes.includes(classType)) {
            classItem.style.display = ''; // Pokaż zajęcia
        } else {
            classItem.style.display = 'none'; // Ukryj zajęcia
        }
    });
}

function clearFilters() {
    // Czyszczenie danych z tekstowych filtrów
    document.getElementById('lecturer').value = '';
    document.getElementById('room').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('group').value = '';
    document.getElementById('album-number').value = '';

    // Zaznacz wszystkie checkboxy
    const checkboxes = document.querySelectorAll('.filter-checkbox');
    checkboxes.forEach(checkbox => checkbox.checked = true);

    console.log('Filtry wyczyszczone');

    // Pokaż wszystkie zajęcia
    const allClasses = document.querySelectorAll('.schedule div');
    allClasses.forEach(classItem => {
        classItem.style.display = ''; // Pokaż wszystkie zajęcia
    });
}


function setView(view) {
    console.log(`Setting view to: ${view}`);
}

function goToToday() {
    console.log('Navigating to today.');
}

function navigate(direction) {
    console.log(`Navigating: ${direction}`);
}
