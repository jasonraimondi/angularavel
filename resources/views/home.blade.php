<!DOCTYPE html>
<html lang="en" ng-app="testAngularApp">
    <head>

        <meta charset="utf-8">
        <title>Angular Test App</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="{{ asset('assets/js/package.js') }}"></script>

    </head>
    <body>

        <section ng-view=""></section>

    </body>
</html>
