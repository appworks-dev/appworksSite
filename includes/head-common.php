<!-- Google Fonts: Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'royal-purple': {
                        900: '#200A24',
                        800: '#1A0624',
                        700: '#0F0520'
                    },
                    'vibrant-orange': {
                        500: '#FF4B36',
                        600: '#FF6B50'
                    },
                    'accent-purple': {
                        400: '#A78BFA',
                        500: '#8B5CF6',
                        600: '#7C3AED'
                    }
                },
                fontFamily: {
                    'inter': ['Inter', 'system-ui', '-apple-system', 'sans-serif']
                }
            }
        }
    }
</script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Shared Navigation & Footer CSS -->
<link rel="stylesheet" href="/css/nav.css">
