# Jumantara Weather Monitoring Application

## Overview

Jumantara is a comprehensive weather monitoring web application that caters to users' needs with features such as checking real-time weather radar, temperature updates, air quality index monitoring, access to air quality facts, and the latest weather news. The application utilizes data from BMKG, OpenWeather API, and JSON data for countries. Additionally, it integrates Tinker for news creation, Daisy UI for UI components, and is deployed on Vercel with a database hosted on Aiven.

## Features

- **Weather Radar:** View real-time weather radar information.
- **Temperature:** Obtain current temperature updates.
- **Air Quality Index:** Monitor the air quality index.
- **Air Quality Facts:** Access information about air quality.
- **Weather News:** Read the latest weather-related news.
- **Admin Dashboard:** Control panel for administrators.

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
- Daisy UI (for UI components)
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

2. Install Tailwind CSS and Daisy UI:

   ```bash
   npm install && npm install daisyui
   ```

3. Compile assets:

   ```bash
   npm run dev
   ```

4. Set up Livewire:

   ```bash
   php artisan livewire:install
   ```

5. Set up Tinker:

   ```bash
   composer require laravel/tinker
   ```

   Add the Tinker service provider to your `config/app.php` file:

   ```php
   'providers' => [
       // ...
       Laravel\Tinker\TinkerServiceProvider::class,
   ],
   ```

6. Set up the database:

   ```bash
   php artisan migrate
   ```

7. Create a `.env` file and configure your database settings.

8. Run the application:

   ```bash
   php artisan serve
   ```

9. Access the application in your browser at `http://localhost:8000`.

## Admin Dashboard

The application features a robust admin dashboard built with Bootstrap, providing administrators with control over various aspects of the application.

## Push Notifications

The application supports push notifications for important weather updates. Ensure notifications are enabled in your browser.

## Production Link

Visit the [Jumantara Production Site](https://jumantara.vercel.app/) to see the application in action.

---

Feel free to contribute, report issues, or suggest improvements to enhance Jumantara as a reliable weather monitoring application!
