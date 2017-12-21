<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Blog Design</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('public/frontend') ?>/style.css" />
    </head>

    <body>
        <div id="header">
            <a href="<?php echo url('/') ?>"><span class="logo">blog about web design</span></a>																																																										<div class="inner_copy"><a href="http://www.greatdirectories.org/blog.html">blog directories</a><a href="http://www.bestfreetemplates.org/categories/blog/">blog templates</a></div>
            <ul id="menu">
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="<?php echo url('/') ?>">Home</a></li>
                <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="<?php echo url('/about') ?>">Abouts Us</a></li>
                <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="<?php echo url('/contact') ?>">Contact</a></li>
                @if (Auth::guest())
                <li><a class="{{ Request::is('login') ? 'active' : '' }}"  href="{{ route('login') }}">Login</a></li>
                <li><a class="{{ Request::is('register') ? 'active' : '' }}"  href="{{ route('register') }}">Register</a></li>
                @else
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
            <img src="<?php echo asset('public/frontend') ?>/images/spacer.gif" alt="setalpm" width="120" height="120" border="0" usemap="#Map" class="rss" />
            <map name="Map">
                <area shape="circle" coords="60,60,63" href="#">
            </map>
        </div>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=255762141567694';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

