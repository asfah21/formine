<div>
    <button
        onclick="showPopup()"
        class="bg-blue-500 text-white px-4 py-2 rounded"
    >
        Show Data
    </button>

    <div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-4 rounded">
            <h2 class="text-lg font-bold">Data</h2>
            <p>data</p>
            <button onclick="hidePopup()" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById('popup').classList.remove('hidden');
    }

    function hidePopup() {
        document.getElementById('popup').classList.add('hidden');
    }
</script>
