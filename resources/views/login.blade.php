<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-md p-10 w-[500px]">
        <h1 class="text-3xl font-bold text-center text-[#499cbf] mb-8">LOGIN</h1>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-[#499cbf] mb-2">Email</label>
                <input type="email" id="email" class="w-full p-3 rounded-md bg-[#e1f2f7] border border-[#e1f2f7] focus:outline-none focus:ring-2 focus:ring-[#499cbf]">
            </div>
            <div class="mb-6 relative">
                <label for="password" class="block text-[#499cbf] mb-2">Password</label>
                <input type="password" id="password" class="w-full p-3 rounded-md bg-[#e1f2f7] border border-[#e1f2f7] focus:outline-none focus:ring-2 focus:ring-[#499cbf]">
                <i class="fa-solid fa-gear text-[#499cbf] absolute right-3 top-10"></i>
            </div>
            <button type="submit" class="w-full py-3 bg-[#499cbf] text-white rounded-md text-center">MASUK</button>
        </form>
        <p class="text-center text-[#499cbf] mt-6">2024, Universitas Alma Ata</p>
    </div>
</body>
</html>
