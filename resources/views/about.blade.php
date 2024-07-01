<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-blue-500 text-white text-center py-4">
        <h1 class="text-2xl font-bold">About Us</h1>
    </header>

    <section class="max-w-2xl mx-auto mt-8 p-4">
        <h2 class="text-2xl font-bold mb-4">Welcome to Our Blog!</h2>

        <p class="mb-4">
            Thank you for visiting our blog. We value your privacy and want to be transparent about the information we collect and how it will be used. Our goal is to enhance your overall experience on our website.
        </p>

        <h3 class="text-xl font-bold mb-2">What Information We Collect:</h3>

        <ul class="list-disc ml-6 mb-4">
            <li>Visit Counts: We track the number of visits to our website to analyze its performance and improve content.</li>
            <li>Search Queries: If you use the search function on our site, we may collect data on the terms you search for.</li>
        </ul>

        <h3 class="text-xl font-bold mb-2">Why We Collect This Information:</h3>

        <p class="mb-4">
            The information we collect is used for analytical purposes and to improve the quality of our content. It helps us understand how visitors interact with our site and what content is most valuable to them.
        </p>

        <h3 class="text-xl font-bold mb-2">Your Privacy is Important:</h3>

        <p class="mb-4">
            We take your privacy seriously. Rest assured that the information we collect is used internally and will not be shared with third parties without your consent.
        </p>

        <h3 class="text-xl font-bold mb-2">Other Considerations:</h3>

        <p class="mb-2">
            <strong>Cookies:</strong> We may use cookies to enhance your browsing experience. You can control cookie preferences in your browser settings.
        </p>

        <p class="mb-2">
            <strong>Opting Out:</strong> If you prefer not to have your data collected, you can adjust your browser settings or choose to leave our website.
        </p>

        <p class="mb-4">
            <strong>Updates to Privacy Policy:</strong> Our privacy policy may be updated, and any changes will be reflected on this page.
        </p>

        <h3 class="text-xl font-bold mb-2">Contact Us:</h3>

        <p class="mb-4">
            If you have any questions or concerns regarding our privacy practices, feel free to <a href="/contact" class="text-blue-500">contact us</a>.
        </p>
    </section>

    <footer class="bg-blue-500 text-white text-center py-4 mt-8">
        <p>
            Thank you for being a part of our community. We appreciate your trust and hope you enjoy your time on our blog.
        </p>
    </footer>
    @if(auth()->check() && auth()->user()->id)
 <div class="fixed bottom-4 right-4">
        <a href="/" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">I understand</a>
    </div>

    <form method="POST" action="/logout" style="display: inline-block;">
        @csrf
        <button type="submit" style="background: none; border: none; color: #68d391; cursor: pointer; text-decoration: underline; font-weight: bold;">
            Log Out
        </button>
    </form>
                @endif
   

</body>
</html>
