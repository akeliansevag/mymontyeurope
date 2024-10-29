<header id="header" class="fixed top-0 left-0 w-full z-40 min-h-[88px] transition-all duration-300 ease-in-out bg-white">
    <div class="w-full py-6 border-b border-[#e9edf422] z-[3]">
        <div class="container flex justify-between items-center">
            <div class="flex items-center gap-4">
                <!-- Logo Placeholder -->
                <a href="<?php echo home_url(); ?>" class="app-logo">Logo</a>

                <!-- Location Dropdown Icon -->
                <span id="location-toggle" class="text-xl text-black cursor-pointer">▼</span>

                <!-- Location Dropdown -->
                <div id="location-dropdown" class="absolute top-[calc(100%+1.5rem)] left-0 w-full flex justify-center items-center rounded-b bg-[#15192D] z-10 hidden">
                    <div id="location-lebanon" class="flex flex-col justify-center items-center w-full py-3 text-black cursor-pointer">Lebanon</div>
                    <div id="location-europe" class="flex flex-col justify-center items-center w-full py-3 text-black cursor-pointer">Europe</div>
                </div>
            </div>    
            
            <!-- Navigation Links -->
            <nav class="hidden lg:block">
                <?php
                    $nav_links = [
                        [
                            'label' => 'Company',
                            'children' => [
                                ['label' => 'Why MyMonty', 'link' => 'why-mymonty'],
                                ['label' => 'Who We Are', 'link' => 'who-we-are'],
                                ['label' => 'Careers', 'link' => 'careers'],
                                ['label' => 'Code of Conduct', 'link' => ''],
                                ['label' => 'News', 'link' => 'news'],
                                ['label' => 'Blogs', 'link' => 'blogs'],
                                ['label' => 'Board of Directors', 'link' => 'board-of-directors'],
                                ['label' => 'FAQ', 'link' => 'faq'],
                            ]
                        ],
                        [
                            'label' => 'Features',
                            'children' => [
                                ['label' => 'Accounts', 'link' => 'accounts'],
                                ['label' => 'Cards', 'link' => 'cards'],
                                ['label' => 'transfers', 'link' => 'transfers'],
                                ['label' => 'Payments', 'link' => 'payments']
                            ]
                        ],
                        [ 'label' => 'Plans', 'link' => 'plans' ],
                        [ 'label' => 'Contact Us', 'link' => 'contact-us' ],
                    ];
                ?>
                <ul class="flex items-center gap-20 text-black">
                    <?php foreach ($nav_links as $link): ?>
                        <li class="text-black font-medium">
                            <a href="<?php echo esc_url($link['link']); ?>" class="transition-all duration-300 ease-in-out text-base text-black hover:text-[#585E8D] cursor-pointer">
                                <?php echo esc_html($link['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Mobile Menu Toggle Icon -->
            <div id="nav-toggle" class="block lg:hidden leading-[0] text-black text-3xl cursor-pointer">☰</div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-nav" class="hidden lg:hidden fixed top-0 left-0 h-screen w-full bg-[#15192D] text-xl z-[2] transition-all duration-300 ease-in-out">
        <div class="container">
            <ul class="flex flex-col gap-6 mt-[135px]">
                <?php foreach ($nav_links as $link): ?>
                    <li class="text-black font-medium">
                        <a href="<?php echo esc_url($link['link']); ?>" class="item-link scrollTo transition-all duration-300 ease-in-out">
                            <?php echo esc_html($link['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>
