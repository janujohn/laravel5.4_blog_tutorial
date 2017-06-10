<!doctype html>
<html>
   
    </head>
    <body>
        <ul>
        @foreach ($lines as $line)

            <li>{{ $line }}</li>

        @endforeach
        
        </ul>
    </body>
</html>
