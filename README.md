# Jumantara Weather Monitoring Application

## Overview

Jumantara is a web application that serves as a dedicated weather monitoring tool. It provides users with features such as checking weather radar, temperature, air quality index, and accessing air quality facts and weather news. The application utilizes data from BMKG, OpenWeather API, and JSON data for countries. Additionally, it leverages Tinker for creating news in Laravel and is deployed on Vercel with a database stored on Aiven.

## Features

- Weather Radar: Check real-time weather radar information.
- Temperature: Get current temperature updates.
- Air Quality Index: Monitor the air quality index.
- Air Quality Facts: Access information about air quality.
- Weather News: Read the latest weather-related news.

## Resources

- BMKG: [Indonesia Meteorology, Climatology, and Geophysics Agency](https://www.bmkg.go.id/)
- OpenWeather API: [OpenWeather](https://openweathermap.org/api)
- JSON Data for Countries: [Geonames](http://www.geonames.org/export/web-services.html#countrynames)

## Data Sources

- BMKG provides local weather data.
- OpenWeather API supplies global weather information.
- JSON data for countries aids in location-based data.

## Technologies Used

- Laravel PHP Framework
- Tailwind CSS
- Livewire
- Bootstrap (for admin dashboard)
- Tinker (for news creation)
- Aiven (for database hosting)
- Vercel (for deployment)

## Cloning the Repository

To clone and set up the Jumantara application on your local machine, follow these steps:

1. Install Laravel and its dependencies:

   ```bash
   composer install
   ```

2. Install Tailwind CSS:

   ```bash
   npm install && npm run dev
   ```

3. Set up Livewire:

   ```bash
   php artisan livewire:install
   ```

4. Set up the database:

   ```bash
   php artisan migrate
   ```

5. Create a `.env` file and configure your database settings.

6. Run the application:

   ```bash
   php artisan serve
   ```

7. Access the application in your browser at `http://localhost:8000`.

## Admin Dashboard

The admin dashboard is built using Bootstrap. To access it, log in as an admin user.

## Push Notifications

The application supports push notifications for important weather updates. Make sure to enable notifications in your browser.

---

Feel free to contribute, report issues, or suggest improvements to make Jumantara a more robust weather monitoring application!
