<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <meta name="author" content="Vipurthanan">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>

    @stack('stylesheets')
</head>
<body class="bg-gray-100 font-family-karla">

    <x-nav />

    <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl max-md:max-w-md w-full">
            <div>
            <h2 class="lg:text-5xl text-3xl font-bold lg:leading-[57px] text-slate-900">
                Seamless Login for Exclusive Access
            </h2>
            <p class="text-sm mt-6 text-slate-500 leading-relaxed">Immerse yourself in a hassle-free login journey with our intuitively designed login form. Effortlessly access your account.</p>
            <p class="text-sm mt-12 text-slate-500">Don't have an account <a href="javascript:void(0);" class="text-blue-600 font-medium hover:underline ml-1">Register here</a></p>
            </div>

            @yield('content')
        </div>
      </div>


    @stack('scripts')

</body>
</html>




