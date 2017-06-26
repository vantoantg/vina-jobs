<?php

return [
    /* Url                                                              => Controller/action */

    'admin'                                                             => 'admin/dashboard',
    '<username:[a-zA-Z0-9_ -@.]+>/view/<slug:[a-zA-Z0-9_ -]+>.html'          => 'resume/view',
    '<username:[a-zA-Z0-9_ -@.]+>/update/<slug:[a-zA-Z0-9_ -]+>.html'          => 'resume/update',

    'login.html'                                                        => 'site/login',
    'register.html'                                                     => 'site/register',
    'contact.html'                                                      => 'site/contact',
    'jobs.html'                                                         => 'site/jobs',
    'jobs-single.html'                                                  => 'site/jobs-single',
    'location.html'                                                         => 'site/location',
    'location-single.html'                                                  => 'site/location-single',
    'recruiters.html'                                                  => 'site/recruiters',
    'following.html'                                                  => 'site/following',
    'follow-single.html'                                                  => 'site/follow-single',
    'single.html'                                                  => 'site/single',
    'terms.html'                                                  => 'site/terms',
    'services.html'                                                  => 'site/services',
    'resume.html'                                                  => 'site/resume',
    'features.html'                                                  => 'site/features',
    'about.html'                                                  => 'site/about',
    'logout.html'                                                  => 'site/logout',


];