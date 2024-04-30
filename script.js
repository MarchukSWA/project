function toggleDarkMode() {
    document.body.classList.toggle("dark-theme");
localStorage.setItem("darkMode", document.body.classList.contains("dark-theme"));
    }

function loadDarkModePreference() {
        const darkModeEnabled = localStorage.getItem("darkMode") === "true";
if (darkModeEnabled) {
    document.body.classList.add("dark-theme");
        }
    }

window.onload = loadDarkModePreference;