<!-- <footer class="flex items-center justify-center fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow dark:bg-gray-800 dark:border-gray-600"> -->

    <!-- <span class="footer-text flex items-center text-gray-900 dark:text-gray-100">
        Made with
        <i class="fa fa-heart pulse mx-2"></i>
        by<a href="./" target="_blank" class="author-link ml-1 text-blue-500 dark:text-blue-400 hover:underline">Azvan IT</a>&nbsp;GSI
    </span> -->
    <!-- <style>
        .footer-text {
            color: #666;
            font-size: 14px;
            text-align: center;
        }

        .footer-text a {
            color: #000;
            text-decoration: none;
        }

        .footer-text a:hover {
            color: #007fd4;
            text-decoration: underline;
        }

        /* Heart Icon Animation */
        .fa-heart {
            color: #E90606;
            font-size: 16px;
            animation: pulse 0.8s infinite alternate;
            -webkit-animation: pulse 0.8s infinite alternate;
        }

        @-webkit-keyframes pulse {
            to {
                transform: scale(1.2);
            }
        }

        @keyframes pulse {
            to {
                transform: scale(1.2);
            }
        }
    </style> -->
<!-- </footer> -->

<footer class="bg-gray-50 dark:bg-gray-800 py-4">
    <div class="container mx-auto flex justify-center items-center">
        <a 
            href="/" 
            class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-400 transition-colors duration-300" 
        >
            <span>&copy; {{ date('Y') }}</span>
            <span class="azvan-gradient-text">Azvan</span> 
            <span>IT. All rights reserved.</span>
        </a>
    </div>
</footer>

<style>
.azvan-gradient-text {
    background: linear-gradient(to right, #2563eb, #16a34a); /* from-blue-600 (blue-600) ke green-600 (green-600) */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent; /* Pastikan teks transparan agar gradien terlihat */
    font-weight: 600; /* font-semibold */
    transition: all 300ms ease-in-out; /* transition-all duration-300 */
}

/* Efek hover khusus untuk teks Azvan */
.azvan-gradient-text:hover {
    background: linear-gradient(to right, #16a34a, #2563eb); /* hover:from-green-600 hover:to-blue-600 */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
