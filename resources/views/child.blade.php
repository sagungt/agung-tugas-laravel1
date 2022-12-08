@extends('parent')

@section('title', 'Daftar User')

@php
  function getPhoto() {
    $response = Illuminate\Support\Facades\Http::get('https://source.unsplash.com/180x250/?person');
    $body = $response->getBody()->getContents();
    $base64 = base64_encode($body);
    $mime = "image/jpeg";
    $img = ('data:' . $mime . ';base64,' . $base64);
    return $response->json();
  }
  $users = [
    [
      'nama' => 'Linnie Von',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Porro quae magnam rem vel ducimus voluptate amet odit.',
      'active' => true,
      'alamat' => '15453 Daron Spurs Suite 971 North Meda, NE 14916',
      'role' => 'admin',
    ],
    [
      'nama' => 'Cathrine Steuber',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Aspernatur ab voluptatem quia necessitatibus voluptas.',
      'active' => false,
      'alamat' => '171 Moore Highway Apt. 907 West Margaretteside, MT 36798-4566',
      'role' => 'user',
    ],
    [
      'nama' => 'Eryn Waters V',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Eos vero aliquid enim officia illo quos quibusdam.',
      'active' => false,
      'alamat' => '79252 Pagac Trafficway Nadiaborough, IL 23594-8026',
      'role' => 'admin',
    ],
    [
      'nama' => 'Miss Melody Zulauf',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Alias totam nam autem quo.',
      'active' => true,
      'alamat' => '1618 Homenick Wall Apt. 849 New Gina, ME 10154-5335',
      'role' => 'user',
    ],
    [
      'nama' => 'Berniece Moen V',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Eligendi perferendis placeat eveniet quaerat.',
      'active' => true,
      'alamat' => '21956 Armstrong Springs Apt. 328 Zackfurt, NE 39610',
      'role' => 'admin',
    ],
    [
      'nama' => 'Ms. Hilda Collins',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Accusamus autem magnam dolor vel veritatis molestias minima.',
      'active' => false,
      'alamat' => '137 Xander Isle Apt. 192 East Eino, ND 26509',
      'role' => 'user',
    ],
    [
      'nama' => 'Janessa Torphy',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Quae sint molestiae nostrum.',
      'active' => true,
      'alamat' => '9079 Kulas Extensions Lake Danielle, MI 74212-5748',
      'role' => 'admin',
    ],
    [
      'nama' => 'Gustave Monahan',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Amet qui et aperiam eveniet a consequatur quo.',
      'active' => true,
      'alamat' => '53668 Harber Mission West Bettiefurt, RI 19449',
      'role' => 'user',
    ],
    [
      'nama' => 'Cathryn Ankunding',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Eaque non vitae neque esse tempore repudiandae incidunt.',
      'active' => false,
      'alamat' => '78486 Dennis Grove West Jewelmouth, NJ 11866',
      'role' => 'admin',
    ],
    [
      'nama' => 'Mrs. Erna Weimann',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Laborum reiciendis dolores eligendi consequatur necessitatibus vitae.',
      'active' => true,
      'alamat' => '2599 Ramona Rest Suite 776 Tracyside, MS 60760-5196',
      'role' => 'user',
    ],
    [
      'nama' => 'Florian Heller',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Voluptatem sint sit magni non enim.',
      'active' => true,
      'alamat' => '6838 Timothy Crossing Apt. 468 East Mark, IL 42800-0059',
      'role' => 'admin',
    ],
    [
      'nama' => 'Rosamond Kiehn',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Et delectus omnis ratione est ut necessitatibus sit aliquam.',
      'active' => true,
      'alamat' => '59345 Grimes Squares Apt. 292 South Emiefort, MA 67435',
      'role' => 'user',
    ],
    [
      'nama' => 'Dora Zboncak',
      'foto' => 'https://source.unsplash.com/180x250/?person',
      'bio' => 'Fugit similique aut voluptatem in nemo et.',
      'active' => true,
      'alamat' => '39444 Blake Rue Lake Dixie, NC 74696',
      'role' => 'admin',
    ],
  ];
  $active = isset($_GET['active']) && $_GET['active'] == 'true';
  $role = isset($_GET['role']) && $_GET['role'] == 'admin' ? 'admin' : 'user';
  $filter = [
    'active' => $active,
    'role' => $role,
  ];
  $i = 0;
@endphp

@section('content')
  @foreach ($users as $user)
    @includeWhen(
      $user['active'] == $filter['active'] || $user['role'] == $filter['role'],
      'card',
      ['user' => $user, 'fotoId' => $i % 6]
    )
    @php $i++; @endphp
  @endforeach
@endsection