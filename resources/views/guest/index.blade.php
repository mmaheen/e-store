@extends('layouts.app')

@section('title')
    User Profile
@endsection

@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="my-account container">
        <h2 class="page-title">My Account</h2>
        <div class="row">
            <div class="col-lg-3">
            <ul class="account-nav">
                <li><a href="{{route('guest.index')}}" class="menu-link menu-link_us-s">Dashboard</a></li>
                <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
                <li><a href="account-address.html" class="menu-link menu-link_us-s">Addresses</a></li>
                <li><a href="account-details.html" class="menu-link menu-link_us-s">Account Details</a></li>
                <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST" id="logout-form">
                        @csrf
                        <a href="{{route('logout')}}" class="menu-link menu-link_us-s" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    </form>
                </li>
            </ul>
            </div>
            <div class="col-lg-9">
            <div class="page-content my-account__dashboard">
                <p>Hello <strong>User</strong></p>
                <p>From your account dashboard you can view your <a class="unerline-link" href="account_orders.html">recent
                    orders</a>, manage your <a class="unerline-link" href="account_edit_address.html">shipping
                    addresses</a>, and <a class="unerline-link" href="account_edit.html">edit your password and account
                    details.</a></p>
            </div>
            </div>
        </div>
        </section>
  </main>
@endsection