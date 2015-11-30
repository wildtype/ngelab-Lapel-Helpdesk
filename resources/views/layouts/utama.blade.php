<!doctype html5>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="/cssextras.css" />
        <style>
        .content{
            max-width: 768px;
            margin:auto;
        }
        </style>
    </head>

    <body>
        <div class="pure-g content">
            @if(Session::has('message'))
                <div class="pure-alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="pure-u-1">@yield('content')</div>
        </div>
    </body>
</html>
