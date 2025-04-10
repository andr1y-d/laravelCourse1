@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <h1>Home page</h1>

{{--    @isset($users)--}}
{{--        @foreach($users as $user)--}}
{{--            {{ $loop->index }} - {{ $user['name'] }}--}}
{{--            <br>--}}
{{--        @endforeach--}}
{{--    @endisset--}}

{{--    @if(1000 > 100)--}}
{{--        <p>1000 > 100 is true</p>--}}
{{--        <br>--}}
{{--    @endif--}}

{{--    @php--}}
{{--        $users2 = [];--}}
{{--    @endphp--}}

{{--    @forelse($users2 as $user)--}}
{{--        {{ $user['name'] }}--}}
{{--        <br>--}}
{{--    @empty--}}
{{--        <p>No users</p>--}}
{{--    @endforelse--}}

{{--    @for($i = 0; $i < 10; $i++)--}}
{{--        {{ $i }}--}}
{{--        <br>--}}
{{--    @endfor--}}

    @foreach($users as $user)
        <span @class(['text-danger' => $loop->even])>{{ $user->id }} - {{ $user->name }} - {{ $user->password }}</span>
        <br>
    @endforeach
@endsection

