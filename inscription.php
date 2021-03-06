<!DOCTYPE html>
<html lang="fr" class='h-full'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription page</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class='h-full bg-gray-200 flex justify-center items-center'>
    <div class='bg-white shadow-lg max-w-lg md:flex rounded p-5 items-center'>
        <img src="./src/img/connect-img.jpg" alt="" class='w-full h-40 object-cover md:h-full flex-1'>
        <div class="p-4 flex-1 md:flex md:flex-col justify-center items-center">
            <h1 class='text-3xl font-bold text-gray-800 mb-2'>Sign-up here</h1>
            <form method='post' action="./insert-inscription.php">
                <div class='m-4'>
                    <label for="username" class='block text-gray-600 mb-2'>Username</label>
                    <input name='username' type="text" class='border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-inner'>
                </div>

                <div class='m-4'>
                    <label for="mail" class='block text-gray-600 mb-2'>E-mail</label>
                    <input name='mail' type="text" class='border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-inner'>
                </div>

                <div class='m-4'>
                    <label for="password" class='block text-gray-600 mb-2'>Password</label>
                    <input name='password' type="password" class='border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-inner mb-4'>
                </div>

                <div class='flex justify-center items-center'>
                    <input type="submit" value='Sign-up' class='bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600'>
                </div>
            </form>
        </div>
    </div>
</body>
</html>