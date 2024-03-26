<!doctype html>
<html lang="en"  data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col justify-start bg-primary-500">
        <main>
            {{$slot}}
        </main>
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>

    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            <li><a>Events</a></li>
            <li><a href="/admin/events/create">Create</a></li>
        </ul>

    </div>
</div>

</body>
</html>
