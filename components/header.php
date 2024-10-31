<?php
    $nav_links = [
        [
            'label' => 'Company',
            'clickable' => false,
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
            'clickable' => true,
            'children' => [
                ['label' => 'Accounts', 'link' => 'accounts'],
                ['label' => 'Cards', 'link' => 'cards'],
                ['label' => 'Transfers', 'link' => 'transfers'],
                ['label' => 'Payments', 'link' => 'payments']
            ]
        ],
        [   'label' => 'Plans',
            'clickable' => true,
            'link' => 'plans' 
        ],
        [   'label' => 'Contact Us',
            'clickable' => true,
            'link' => 'contact-us'
        ],
    ];
?>

<header id="header" class="fixed top-0 left-0 w-full z-50 min-h-[93px] transition-all duration-300 ease-in-out bg-white">
    <div class="w-full py-6 border-b border-[#e9edf422] z-[3]">
        <div class="container flex justify-between items-center">
            <div class="flex justify-between items-center gap-4">
                <div class="cursor-pointer relative group hover:bg-[#ECECEE] rounded-full">
                    <div class="flex justify-between items-center gap-2 p-2">
                        <!-- Logo Placeholder -->
                        <a href="<?= home_url(); ?>">
                            <img src="<?=get_template_directory_uri()?>/assets/images/logo.svg" alt="MyMonty Logo" width="133" height="28" />
                        </a>

                        <!-- Location Dropdown Icon -->
                        <span id="location-toggle" class="text-xl text-black cursor-pointer">
                            <img src="<?=get_template_directory_uri()?>/assets/images/icons/chevron-down.svg" alt="Chevron Down" width="14" height="8"/>
                        </span>

                        <!-- Invisible hover buffer (1.5padding, 1px border bottom) -->
                        <div class="absolute top-full left-0 h-[calc(1.5rem+1px)] w-full group-hover:block hidden"></div>
                        
                        <!-- Location Dropdown (1.5padding, 1px border bottom) -->
                        <div class="absolute top-[calc(100%+1.5rem+1px)] left-0 z-10 w-full rounded-b text-base bg-[#ECECEE] overflow-hidden invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                            <div class="flex flex-col justify-center items-center w-full py-3 transition-all duration-300 ease-in-out font-AeonikRegular text-black cursor-pointer hover:bg-[#d4d4d4]">Lebanon</div>
                        </div>
                    </div>
                </div>
            </div>    
            
            <!-- Navigation Links -->
            <nav class="hidden lg:block">
                <!--  44px to match the height of the other 2 dropdown -->
                <ul class="flex items-center gap-1 text-black h-[44px]">
                    <?php foreach ($nav_links as $link): ?>
                        <li class="flex justify-center items-center text-black font-medium cursor-pointer relative group h-full hover:bg-[#ECECEE] rounded-full">
                            <div class="flex justify-between items-center gap-2 py-2 px-8 rounded-full">
                                <?php if($link['clickable']): ?>
                                    <a href="<?= esc_url(get_permalink(get_page_by_path($link['link']))); ?>" class="transition-all duration-300 ease-in-out text-base font-AeonikMedium text-black cursor-pointer select-none">
                                        <?= esc_html($link['label']); ?>
                                    </a>
                                <?php else: ?>
                                    <span class="transition-all duration-300 ease-in-out text-base font-AeonikMedium text-black cursor-pointer select-none">
                                        <?= esc_html($link['label']); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <?php if(isset($link['children']) && !empty($link['children'])): ?>
                                    <!-- Invisible hover buffer (1.5padding, 1px border bottom) -->
                                    <div class="pointer absolute top-full left-0 h-[calc(1.5rem+1px)] w-full group-hover:block hidden before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:bg-[#ECECEE] before:w-5 before:h-5"></div>
                                    
                                    <!-- Children Routes Dropdown (1.5padding, 1px border bottom) -->
                                    <div class="nav absolute top-[calc(100%+1.5rem+1px)] left-1/2 -translate-x-1/2 z-10 flex flex-col gap-4 w-max p-8 rounded-b text-base bg-[#ECECEE] overflow-hidden invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                        <?php foreach ($link['children'] as $child_link): ?>
                                            <div class="flex flex-col w-full text-black cursor-pointer hover:text-primary transition-all duration-300 ease-in-out">
                                                <div class="flex items-center gap-2 group/item">
                                                    <span class="font-AeonikBlack"><?= esc_html($child_link['label']); ?></span>
                                                    <img class="-translate-x-5 -rotate-90 invisible opacity-0 group-hover/item:visible group-hover/item:translate-x-0 group-hover/item:opacity-100 transition-all duration-300 ease-in-out" src="<?=get_template_directory_uri()?>/assets/images/icons/chevron-right-primary.svg" alt="Chevron Right" width="8" height="8" />
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>    
                                <?php endif; ?>
                            </div>    
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="hidden lg:flex justify-between items-center gap-6">
                <div class="cursor-pointer relative group rounded-full hover:bg-[#ECECEE]">
                    <div class="flex justify-between items-center gap-2 p-2">
                        <img src="<?=get_template_directory_uri()?>/assets/images/flags/uk.svg" alt="UK" width="28" height="28"/>
                        <img src="<?=get_template_directory_uri()?>/assets/images/icons/chevron-down-gray.svg" alt="Chevron Down" width="10" height="8"/>

                        <!-- Invisible hover buffer (1.5padding, 1px border bottom) -->
                        <div class="absolute top-full left-0 h-[calc(1.5rem+1px)] w-full group-hover:block hidden"></div>
                        
                        <!-- Languages Dropdown (1.5padding, 1px border bottom) -->
                        <div class="absolute top-[calc(100%+1.5rem+1px)] left-0 z-10 w-max rounded-b text-base bg-[#ECECEE] overflow-hidden invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                            <ul class="w-max">
                                <li class="flex justify-center items-center gap-2 py-3 px-4 transition-all duration-300 ease-in-out hover:bg-[#d4d4d4] border-b">
                                    <img src="<?=get_template_directory_uri()?>/assets/images/flags/es.svg" alt="Spanish" width="24" height="24"/>
                                    <span class="font-AeonikRegular">Spanish</span>
                                </li>
                                <li class="flex justify-center items-center gap-2 py-3 px-4 transition-all duration-300 ease-in-out hover:bg-[#d4d4d4]"> <!-- last item border-0 when in loop -->
                                    <img src="<?=get_template_directory_uri()?>/assets/images/flags/uk.svg" alt="English" width="24" height="24"/>
                                    <span class="font-AeonikRegular">English</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button class="py-2 px-4 text-sm text-white bg-primary rounded-[48px] select-none font-AeonikMedium">Download App</button>
            </div>

            <!-- Mobile Menu Toggle Icon -->
            <div id="nav-toggle" class="block lg:hidden rounded cursor-pointer" dir="rtl">
                <div class="line1 w-[20px] h-[3px] bg-black rounded-2xl transition-all duration-300 ease-in-out"></div>
                <div class="line2 my-1 w-3/4 h-[3px] bg-black rounded-2xl transition-all duration-300 ease-in-out"></div>
                <div class="line3 w-[20px] h-[3px] bg-black rounded-2xl transition-all duration-300 ease-in-out"></div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-nav" class="block lg:hidden fixed top-[93px] left-0 h-screen w-full bg-white text-xl z-[2] -translate-x-full transition-all duration-300 ease-in-out overflow-y-scroll">
        <div class="container">
            <ul class="flex flex-col gap-6">
                <?php foreach ($nav_links as $link): ?>
                    <li class="transition-all duration-300 ease-in-out text-base text-black cursor-pointer select-none">
                        <div class="children-toggle flex justify-between items-center">
                            <?php if($link['clickable']): ?>
                                <a class="font-AeonikMedium" href="<?= esc_url(get_permalink(get_page_by_path($link['link']))); ?>"><?= esc_html($link['label']); ?></a>
                                <?php if(isset($link['children']) && !empty($link['children'])): ?>
                                    <img class="transition-all duration-300 ease-in-out" src="<?=get_template_directory_uri()?>/assets/images/icons/chevron-down.svg" alt="Chevron Down" width="10" height="6"/>
                                <?php endif; ?>
                            <?php else: ?>
                                <span class="font-AeonikMedium"><?= esc_html($link['label']); ?></span>
                                <?php if(isset($link['children']) && !empty($link['children'])): ?>
                                    <img class="transition-all duration-300 ease-in-out" src="<?=get_template_directory_uri()?>/assets/images/icons/chevron-down.svg" alt="Chevron Down" width="10" height="6"/>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php if(isset($link['children']) && !empty($link['children'])): ?>
                            <ul class="children-menu max-h-0 flex flex-col gap-4 px-4 bg-[#ECECEE] rounded-2xl overflow-hidden transition-all duration-300 ease-in-out">
                                <?php foreach ($link['children'] as $index => $child_link): ?>
                                    <?php 
                                        $classes = [];
                                        if ($index === 0) $classes[] = 'mt-4';
                                        if ($index === count($link['children']) - 1) $classes[] = 'mb-4';
                                    ?>
                                    <li class="<?php echo implode(' ', $classes); ?>">
                                        <div class="flex items-center gap-2 cursor-pointer font-AeonikBlack  text-sm"><?= esc_html($child_link['label']); ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>