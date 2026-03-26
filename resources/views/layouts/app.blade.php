<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Ganendra')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .navbar-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>

<body class="font-sans bg-gradient-to-br from-gray-50 to-gray-100 text-gray-900 min-h-screen">

    <!-- Navbar -->
    <x-navbar />


    @yield('content')

    <!-- Footer -->
    <footer class="mt-20 py-12 border-t border-gray-200">
        <div class="container mx-auto max-w-4xl px-4 sm:px-8 text-center">
            <p class="text-gray-600 mb-4">© 2025 Ganendra. Membangun masa depan dengan teknologi blockchain.</p>
            <div class="flex justify-center space-x-6 text-sm">
                <a href="/privacy" class="text-gray-500 hover:text-blue-600 transition-colors">Privacy Policy</a>
                <a href="/terms" class="text-gray-500 hover:text-blue-600 transition-colors">Terms of Service</a>
                <a href="/sitemap" class="text-gray-500 hover:text-blue-600 transition-colors">Sitemap</a>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
    </script>

</body>

</html>