<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Settings Admin | Jumanatara</title>
    @include('components.admin.auth.head.head')
</head>

<body class="bg-gray-100">
    @include('components.admin.auth.navbar.navbar')

    <div class="container mx-auto mt-32 mb-32">
        <div class="text-left mb-5">
            <a href="/dashboard">
                <button
                    class=" text-black px-4 py-2 rounded-lg text-lg  hover:text-blue-600 transition ease-in-out duration-300">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali Ke Profile
                </button>
            </a>
        </div>
        <div class="bg-white p-8 rounded-md shadow-md">

            <h1 class="text-3xl font-semibold mb-6 text-black">Settings</h1>

            <!-- Profile Section -->
            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-3 text-black">Profile</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="profile-name" class="block text-gray-600 mb-1">Full Name</label>
                        <input type="text" id="profile-name" name="profile-name"
                            class="form-input mt-1 block w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="profile-avatar" class="block text-gray-600 mb-1">Avatar URL</label>
                        <input type="text" id="profile-avatar" name="profile-avatar"
                            class="form-input mt-1 block w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                </div>
            </section>

            <!-- Theme Section -->
            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-3 text-black">Theme</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="theme-color" class="block text-gray-600 mb-1">Primary Color</label>
                        <input type="color" id="theme-color" name="theme-color"
                            class="form-input mt-1 block w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="dark-mode" class="block text-gray-600 mb-1">Dark Mode</label>
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox text-indigo-600">
                                <span class="ml-2 text-gray-700">Enable Dark Mode</span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Security Section -->
            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-3 text-black">Security</h2>
                <div>
                    <label for="change-password" class="block text-gray-600 mb-1">Change Password</label>
                    <input type="password" id="change-password" name="change-password"
                        class="form-input mt-1 block w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
            </section>

            <!-- Notification Section -->
            <section>
                <h2 class="text-xl font-semibold mb-3 text-black">Notifications</h2>
                <div>
                    <label for="receive-notifications" class="block text-gray-600 mb-1">Receive Notifications</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-indigo-600">
                            <span class="ml-2 text-gray-700">Yes, I want to receive notifications</span>
                        </label>
                    </div>
                </div>
            </section>

            <!-- Save Button -->
            <div class="mt-8">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Save Changes</button>
            </div>

        </div>

    </div>
    @include('components.admin.auth.footer.footer')
</body>

</html>
