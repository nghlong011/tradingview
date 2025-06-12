<?php

use function Livewire\Volt\{state};

state(['message' => 'Chào mừng đến với trang chủ!']);

?>

<div class="min-h-screen flex flex-col ">
    <x-header />
    <main class="overflow-hidden">
        <x-section-1 />
        <x-section-2 />
        <x-section-3 />
        <x-section-4 />
        <x-section-5 />
        <x-section-6 />
        <x-section-7 />
        <x-section-8 />   
    </main>
    <x-footer />
</div>
