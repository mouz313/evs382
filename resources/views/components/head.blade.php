<head>
    <title>Bootstrap Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @foreach($finalHeaderCssData as $name => $cssPath)
    <link href="{{url($cssPath)}}" type="text/css" rel="stylesheet" media="all">
    @endforeach
    @foreach($finalHeaderJsData as $name => $jsPath)
        <script src="{{url($jsPath)}}" type="text/javascript"></script>
    @endforeach
    <script>
        base_url =  "{{url('/')}}";
    </script>
</head>