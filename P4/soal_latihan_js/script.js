const weatherData = [
  {
    city: "Jakarta",
    condition: "Cerah Berawan",
    temperature: 32,
    image: "assets/cerah_berawan.png",
  },
  {
    city: "Bandung",
    condition: "Hujan",
    temperature: 24,
    image: "assets/hujan.png",
  },
  {
    city: "Surabaya",
    condition: "Cerah",
    temperature: 34,
    image: "assets/cerah.png",
  },
  {
    city: "Yogyakarta",
    condition: "Berawan dan Berangin",
    temperature: 28,
    image: "assets/berawan_dan_berangin.png",
  },
  {
    city: "Semarang",
    condition: "Hujan Petir",
    temperature: 26,
    image: "assets/hujan_dan_petir.png",
  },
  {
    city: "Malang",
    condition: "Hujan Panas",
    temperature: 29,
    image: "assets/hujan_panas.png",
  },
];

// Get DOM elements
const searchButton = document.querySelector(".search-button");
const searchBar = document.querySelector(".search-bar");
const weatherImage = document.getElementById("weather-image");
const weatherCondition = document.getElementById("weather-condition");
const weatherLocation = document.getElementById("weather-location");
const temperature = document.getElementById("temperature");

// Function to search weather
function searchWeather(cityName) {
  // Convert to lowercase for case-insensitive search
  const searchTerm = cityName.toLowerCase();

  // Find the city in our data
  const weather = weatherData.find((data) =>
    data.city.toLowerCase().includes(searchTerm)
  );

  if (weather) {
    // Update the UI with weather information
    weatherLocation.textContent = weather.city;
    weatherCondition.textContent = weather.condition;
    temperature.textContent = `${weather.temperature}°C`;
    weatherImage.src = weather.image;

    // Remove any previous error styling
    searchBar.style.borderColor = "";
  } else {
    // Show error message
    weatherLocation.textContent = "Kota tidak ditemukan";
    weatherCondition.textContent = "-";
    temperature.textContent = "-";
    weatherImage.src = "assets/cerah.png";

    // Add error styling
    searchBar.style.borderColor = "red";
  }
}

// Event listeners
searchButton.addEventListener("click", () => {
  const city = searchBar.value.trim();
  if (city) {
    searchWeather(city);
  }
});

searchBar.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    const city = searchBar.value.trim();
    if (city) {
      searchWeather(city);
    }
  }
});

document.querySelector(".city-tags").addEventListener("click", (e) => {
  if (e.target.classList.contains("city-tag")) {
    searchBar.value = e.target.textContent;
    searchWeather(e.target.textContent);
  }
});

// Initialize with default city
searchWeather("Jakarta");
