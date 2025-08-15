
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>

    <!-- Tailwind and Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-ChzDzmAAZ0YIHCS3ve46r9IN7TNbIqChYbQ9L5ABrqPgU6qezieZmLQ9iY1ZAZbJ2A0jWM99d63Nd7dyVlc+r" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-4">
        <!-- Header Section -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Detail Page Title</h1>
        </div>

        <!-- Buttons Section -->
        <div class="mb-6 flex space-x-4">
            <!-- Back Button -->
            <button id="backBtn" onclick="window.history.back()" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none">
                Back
            </button>

            <!-- Download Button -->
            <button id="downloadBtn" onclick="saveAsPDF()" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none">
                Download PDF
            </button>
        </div>

        <!-- Example Table with Flowbite Styles -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Column 1</th>
                        <th scope="col" class="px-6 py-3">Column 2</th>
                        <th scope="col" class="px-6 py-3">Column 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">Value 1</td>
                        <td class="px-6 py-4">Value 2</td>
                        <td class="px-6 py-4">Value 3</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Forms Section (Example) -->
        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Form Title</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="inputField" class="block text-sm font-medium text-gray-700">Input Field</label>
                    <input type="text" id="inputField" name="inputField" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="flex space-x-4">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
                    <button type="reset" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Flowbite and Tailwind Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.0/dist/flowbite.min.js"></script>

    <script>
        function saveAsPDF() {
            var element = document.body;
            html2pdf(element);
        }
    </script>

</body>
</html>
