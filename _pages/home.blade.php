---
title: Getting Started
layout: default
permalink: /

'[block]':
    code: block

'[helloworldChild1]':

'[featuredItems]':
    items: ['6', '7', '8', '9']
    limit: 3
    itemsPerRow: 3
    itemWidth: 400
    itemHeight: 300
---

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <p class="mb-4">This is TastyIgniter's <b>demonstration theme</b> to help you get started if you plan on designing your theme from scratch.</p>
            <p class="mb-4">
                Navigate to your admin dashboard <a target="_blank" href="{{ admin_url('themes') }}">(Design > Themes)</a>
                to <b>choose from a variety of themes</b> pre-built for you to start receiving orders.
            </p>

            <p class="mb-4">Learn more on themes and extension, see the <a href="https://tastyigniter.com/docs/master/customize/themes">Themes documentation</a>.</p>

            <p class="mb-4 img-holder">
                <img class="img-fluid rounded" src="https://tastyigniter.com/assets/ui/images/mockups/Menus-v2.png" alt="TastyIgniter Frontend">
            </p>
        </div>

        @component('block')

        @component('helloworldChild1')

        @component('featuredItems')

    </div>
</div>