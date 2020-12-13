@extends('layouts.app')

@section('content')
   <a href="{{route('admin_uzsakymai')}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Užsakymų sąrašas</button></a>
   <a href="{{route('admin_klientai')}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Klientų sąrašas</button></a>
   <a href="{{route('admin_naujas_klientas')}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Pridėti klientą</button></a>
   <a href="{{route('admin_pagalbos_sarasas')}}"><button type="button" class="btn btn-primary sign-bttn1"  style="margin: 10px">Pagalbos sąrašas</button></a>



@endsection
