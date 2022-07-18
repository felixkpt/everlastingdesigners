<?php
$techstacks = [
    ['name' => 'Frontend Developers', 'link' => '#!'],
    ['name' => 'Fullstack Developers', 'link' => '#!'],
    ['name' => 'API Developers', 'link' => '#!'],
    ['name' => 'NodeJS Developers', 'link' => '#!'],
    ['name' => 'UI/UX Designers', 'link' => '#!'],
    ['name' => 'Swift Developers', 'link' => '#!'],
    ['name' => 'UX Designers', 'link' => '#!'],
    ['name' => 'Web Designer', 'link' => '#!'],
];
$techstacks2 = [
    ['name' => 'JavaScript Developers', 'link' => '#!'],
    ['name' => 'Laravel Developers', 'link' => '#!'],
    ['name' => 'ExpressJS Developers', 'link' => '#!'],
    ['name' => 'UI Designers', 'link' => '#!'],
    ['name' => 'App Developers', 'link' => '#!'],
    ['name' => 'PHP Developers', 'link' => '#!'],
    ['name' => 'React Developers', 'link' => '#!'],
    ['name' => 'Programmers', 'link' => '#!'],
];

$techstacks3 = [
    ['name' => 'React Native Developers', 'link' => '#!'],
    ['name' => 'Software Developers', 'link' => '#!'],
    ['name' => 'iOS Designers', 'link' => '#!'],
    ['name' => 'Mobile Developers', 'link' => '#!'],
    ['name' => 'App Designers', 'link' => '#!'],
    ['name' => 'iOS Developers', 'link' => '#!'],
    ['name' => 'VueJS Developers', 'link' => '#!'],
    ['name' => 'Backend Developers', 'link' => '#!'],
    ['name' => 'Web Developers', 'link' => '#!'],
];
?>
<style>
    #techstacks {
        display: grid;
        grid-template-columns: 20% 20% 20%;
        gap: 20px;
        justify-content: center;
    }

    #techstacks ul li {
        line-height: 2;
    }

    @media screen and (max-width: 768px) {
        #techstacks {
            grid-template-columns: 90%;
        }

    }
</style>
<div class="w-full bg-white p-6">
    <h2 class="md:text-center">{{ SiteInfo::name() }} Developers & Designers</h2>
    <div id="techstacks">
        <div>
            <ul>
                @foreach ($techstacks as $key => $item)
                <li><a class="link-default" href="{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul>
                @foreach ($techstacks2 as $key => $item)
                <li><a class="link-default" href="{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul>
                @foreach ($techstacks3 as $key => $item)
                <li><a class="link-default" href="{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>