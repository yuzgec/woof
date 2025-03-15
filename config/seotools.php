<?php

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Foça The Woof Dog Resort | İzmir Köpek Oteli ve Eğitimi", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'Urban Kabin İmalatı - Dashboard'
            'description'  => 'The Woof Dog Resort İzmir Foça\'da köpek oteli, köpek kreşi ve başlangıç ve ileri seviye köpek eğitimleri veren bir firmadır.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['köpek eğitimi', 'köpek oteli', 'köpek kampı', 'köpek kulübü', 'köpek kulübü izmir', 'köpek kulübü izmir', 'köpek kulübü izmir', 'köpek kulübü izmir'],
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'İzmir The Woof Dog Resort | İzmir Köpek Oteli ve Eğitimi', // set false to total remove
            'description'  => 'The Woof Dog Resort İzmir Foça\'da köpek oteli, köpek kreşi ve başlangıç ve ileri seviye köpek eğitimleri veren bir firmadır.', // set false to total remove
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'İzmir The Woof Dog Resort | İzmir Köpek Oteli ve Eğitimi',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'İzmir The Woof Dog Resort | İzmir Köpek Oteli ve Eğitimi', // set false to total remove
            'description'  => 'The Woof Dog Resort İzmir Foça\'da köpek oteli, köpek kreşi ve başlangıç ve ileri seviye köpek eğitimleri veren bir firmadır.', // set false to total remove
            'url'         =>  false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
