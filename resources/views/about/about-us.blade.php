{{-- @include('components.boiler-plate') --}}

@extends('layouts.main', [
    'current_page' => 'about-us'
])

@section('content')
@include('common.navigation')

{{-- , ['current_page' => $current_page] --}}

<h1>About Us</h1>

<p>
    Bacon ipsum dolor amet jowl shankle frankfurter beef ribs bresaola, cupim flank turkey kielbasa ham hock. Biltong landjaeger cupim venison swine boudin. Rump landjaeger capicola, t-bone strip steak venison prosciutto picanha ball tip. Pastrami frankfurter buffalo tail pancetta hamburger andouille ham turducken chuck pork chop biltong. Beef ribs short ribs alcatra pork belly, drumstick porchetta ground round landjaeger. Prosciutto fatback buffalo, pork loin shank short ribs alcatra ground round.

Ball tip kielbasa pastrami, alcatra chislic leberkas spare ribs shank landjaeger tri-tip doner andouille cupim capicola prosciutto. Sirloin prosciutto kevin kielbasa tongue beef ribs tri-tip ribeye alcatra doner fatback chicken andouille meatloaf boudin. Biltong pork fatback pig, boudin meatloaf kielbasa jerky. Buffalo kevin frankfurter beef ribs andouille porchetta pork loin capicola t-bone picanha pork chop. Tongue ball tip kielbasa pork loin drumstick, bresaola t-bone ham hock. Chicken chuck short loin filet mignon meatloaf, bacon salami capicola.
</p>

@endsection