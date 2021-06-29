@extends('layouts.mane')

@section('title')
{{ $title }}
@endsection
</head>
<body>
    <?php
        print('я ДУВОЧКА МАЛЕНЬКАЯ')
     ?>
<h2>Я дили пили, приветствую вас</h2>
@if(count($arrays) > 0)
    @foreach($arrays as $el)
    <p>{{ $el }}</p>
    @endforeach
@endif
</body>
</html>
