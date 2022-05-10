<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" value="{{ csrf_token() }}"/>
   <title>Laravel Vue Example</title>
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
   <script defer type="module" src="/js/chunk-vendors.js"></script><script defer type="module" src="/js/app.js"></script><script defer src="/js/chunk-vendors-legacy.js" nomodule></script><script defer src="/js/app-legacy.js" nomodule></script></head>
</head>
<body>
   <div id="app">
   </div>
</body>
</html>