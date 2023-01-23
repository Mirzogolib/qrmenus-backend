<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $vendor = Vendor::create([
            "name" => "Efendi",
            "subdomain" => "efendi",
            "logo" => "https://efendi.qrmenus.uz/img/logo.c506012a.svg",
            "favicon" => "https://efendi.qrmenus.uz/favicon.ico",
            "contacts" => [
                [
                    "name" => "Efendi Restaurant 1",
                    "phone" => "(71) 233-15-02",
                    "coords" => [41.30246, 69.28775],
                ],
                [
                    "name" => "Efendi Restaurant 2",
                    "phone" => "(95) 177-09-93",
                    "coords" => [41.327882, 69.269219],
                ],
            ],
            "languages" => ["en", "ru"],
        ]);

        $branch = $vendor->branches()->create([
            "name" => "Efendi Labzak",
        ]);

        User::create([
            "name" => "Erkin Botirov",
            "email" => "e.botirov97@gmail.com",
            "email_verified_at" => now(),
            "password" => "password",
            "vendor_id" => $vendor->id,
        ]);

        $category = $branch->categories()->create([
            "name" => [
                "en" => "Salad",
                "ru" => "Салат",
            ],
            "order" => 1,
        ]);

        $category->products()->createMany([
            [
                "name" => [
                    "en" => "VEGETABLE SALAD",
                    "ru" => "ВИНЕГРЕТ",
                ],
                "ingredients" => [
                    "en" => "BEETS, SAUERKRAUT PICKLES",
                    "ru" => "СВЕКЛА, КВАШЕННАЯ КАПУСТА, СОЛЕННЫЕ ОГУРЦЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_1.webp",
            ],
            [
                "name" => [
                    "en" => "CHARLIE",
                    "ru" => "ЧАРЛИ",
                ],
                "ingredients" => [
                    "en" => "MARINATED MUSHROOMS, CUCUMBER CLIVES CHEESE",
                    "ru" => "МАРИНОВАННЫЕ ГРИБЫ, ОГУРЦЫ, ОЛИВКИ, СЫР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_2.webp",
            ],
            [
                "name" => [
                    "en" => "GREEK SALAD",
                    "ru" => "ГРЕЧЕСКИЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "FRESH CUCUMBER, TOMATOES, GREENS OLIVES FETAKI",
                    "ru" => "СВЕЖИЕ ОГУРЦЫ, ПОМИДОРЫ, ЗЕЛЕНЬ, ОЛИВКИ, ФЕТАКИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 40000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 40000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_3.webp",
            ],
            [
                "name" => [
                    "en" => "OLIVIER",
                    "ru" => "ОЛИВЬЕ",
                ],
                "ingredients" => [
                    "en" => "MEAT, EGGS, POTATOES, CARROTS PEAS, MAYONNAISE",
                    "ru" => "МЯСО, ЯЙЦА, КАРТОФЕЛЬ, МОРКОВЬ, ГОРОШЕК, МАЙОНЕЗ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_4.webp",
            ],
            [
                "name" => [
                    "en" => "AMERICAN SALAD",
                    "ru" => "АМЕРИКАНСКИЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "CHICKEN MEATMUSHROOMS. CUCUMBER CORN, PEAS",
                    "ru" => "КУРИНОЕ МЯСО. ГРИБЫ, ОГУРЕЦ, КУКУРУЗА, ГОРОШЕК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_5.webp",
            ],
            [
                "name" => [
                    "en" => "MALE CAPRICE",
                    "ru" => "МУЖСКОЙ КАПРИЗ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_6.webp",
            ],
            [
                "name" => [
                    "en" => "TURKISH SALAD",
                    "ru" => "ТУРЕЦКИЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" =>
                        "FRESH CUCUMBER, TOMATOES, CARROTS, RED CABBAGE, GREENS, LEMON",
                    "ru" =>
                        "СВЕЖИЕ ОГУРЦЫ ПОМИДОРЫ КРАСНАЯ КАПУСТА, МОРКОВЬ, ЗЕЛЕНЬ, ЛИМОН, ОЛИВКИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_7.webp",
            ],
            [
                "name" => [
                    "en" => "JAPANESE SALAD",
                    "ru" => "ЯПОНСКИЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "MEAT, TOMATOES, CUCUMBERS, KOREAN SALT SOY",
                    "ru" => "МЯСО, ПОМИДОРЫ, ОГУРЦЫ, КОРЕЙСКАЯ СОЛЬ, СОЯ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_8.webp",
            ],
            [
                "name" => [
                    "en" => "DOLMA | ETLI DOLMA",
                    "ru" => "ДОЛМА | МЯСНАЯ ДОЛМА",
                ],
                "ingredients" => [
                    "en" => "STUFFED GRAPE LEAVES",
                    "ru" => "ГОЛУБЦЫ ИЗ ВИНОГРАДНЫХ ЛИСТЬЕВ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_9.webp",
            ],
            [
                "name" => [
                    "en" => "ZHAZHIK",
                    "ru" => "ЖАЖИК",
                ],
                "ingredients" => [
                    "en" => "YOGHURT, CUCUMBER, RED BELL PEPPERS NANE",
                    "ru" => "КИСЛОЕ МОЛОКО, ОГУРЦЫ, МЯТА",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_10.webp",
            ],
            [
                "name" => [
                    "en" => "FRESH SALAD",
                    "ru" => "СВЕЖИЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "FRESH CUCUMBER, TOMATOES, ONIONS, GREENS LEMON",
                    "ru" => "СВЕЖИЕ ОГУРЦЫ, ПОМИДОРЫ ЛУК, ЗЕЛЕНЫ, ЛИМОН",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_11.webp",
            ],
            [
                "name" => [
                    "en" => "EGGPLANT SALAD",
                    "ru" => "САЛАТ ИЗ БАКЛАЖАН",
                ],
                "ingredients" => [
                    "en" =>
                        "ECOPLANTS GREEN AND RED BELL PEPPERS, TOMATOES ONIONS",
                    "ru" => "БАКЛАЖАНЫ ЗЕЛЕНЫЙ И КРАСНЫЙ ПЕРЕЦ, ПОМИДОРЫ. ЛУК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_12.webp",
            ],
            [
                "name" => [
                    "en" => "SYUZMA",
                    "ru" => "СУЗЬМА",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_13.webp",
            ],
            [
                "name" => [
                    "en" => "CORPORATE SALAD FROM EFENDI",
                    "ru" => "ФИРМЕННЫЙ САЛАТ ОТ ЭФЕНДИ",
                ],
                "ingredients" => [
                    "en" =>
                        "FRESH CUCUMBERS, TOMATOES, RED CABBAGE CARROTS, GREENS",
                    "ru" =>
                        "СВЕЖИЕ ОГУРЦЫ. ПОМИДОРЫ КРАСНАЯ, КАПУСТА, МОРКОВЬ, ЗЕЛЕНЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 23000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_14.webp",
            ],
            [
                "name" => [
                    "en" => "EZME SALAD",
                    "ru" => "ЭЗМЕ САЛАТ",
                ],
                "ingredients" => [
                    "en" =>
                        "FRESH TOMATOES, BELL PEPPER, ONION GARLIC, GREENERY",
                    "ru" =>
                        "СВЕЖИЕ ПОМИДОРЫ, БОЛГАРСКИЙ, ПЕРЕЦ, ЛУК, ЧЕСНОК, ЗЕЛЕНЬ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_15.webp",
            ],
            [
                "name" => [
                    "en" => "XAYDARI SALAD",
                    "ru" => "ХАЙДАРИ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "СУЗМА, КАЙМАК, БАКЛАЖАН, МАСЛО СЛИВ, МАСЛО ОЛИВ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_16.webp",
            ],
            [
                "name" => [
                    "en" => "ISTANBUL SALAD",
                    "ru" => "ИСТАНБУЛ САЛАТ",
                ],
                "ingredients" => [
                    "en" =>
                        "FRESH CUCUMBER, TOMATOES, RED CABBAGE, GREENS, CORN, LEMON",
                    "ru" =>
                        "СВЕЖИЕ ОГУРЦЫ, ПОМИДОРЫ, КРАСНАЯ КАПУСТА, КУКУРУЗА, ЛИСТЬЯ САЛАТА, ЛИМОН",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_17.webp",
            ],
            [
                "name" => [
                    "en" => "GREEN SALAD",
                    "ru" => "ЗЕЛЕНЫЙ САЛАТ",
                ],
                "ingredients" => [
                    "en" => "FRESH CUCUMBER, TOMATOES, GREENS",
                    "ru" => "СВЕЖИЕ ОГУРЦЫ, ПОМИДОРЫ, ЗЕЛЕНЬ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_18.webp",
            ],
            [
                "name" => [
                    "en" => "TRIO",
                    "ru" => "ТРИО",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 18000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 18000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_19.webp",
            ],
            [
                "name" => [
                    "en" => "CAESAR SALAD",
                    "ru" => "ЦЕЗАРЬ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" =>
                        'КУРИНОЕ МЯСО, ПОМИДОР, СУХАРИКИ, СЫР ПАРМЕЗАН, СОУС \"ЦЕЗАРЬ\"',
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/salat/salat_20.webp",
            ],
        ]);

        // New category added
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Soup",
                "ru" => "Суп",
            ],
            "order" => 2,
        ]);

        $category->products()->createMany([
            [
                "name" => [
                    "en" => "LЕNTІL SOUP",
                    "ru" => "ЧЕЧЕВИЧНЫЙ СУП",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ПОДАЕТСЯ С ЛИМОНОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_1.webp",
            ],
            [
                "name" => [
                    "en" => "YAYLA",
                    "ru" => "ЯЙЛА",
                ],
                "ingredients" => [
                    "en" => "RICE, YOGURT AND NANE",
                    "ru" => "РИС, КИСЛОЕ МОЛОКО, НАНЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_2.webp",
            ],
            [
                "name" => [
                    "en" => "KALAPACHA",
                    "ru" => "КАЛАПАЧА",
                ],
                "ingredients" => [
                    "en" => "SOUP OF BEEF TONGUE",
                    "ru" => "СУП ИЗ ЯЗЫКА",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_3.webp",
            ],
            [
                "name" => [
                    "en" => "KELLE PACA ORIGINAL ÇORBASI",
                    "ru" => "КАЛАПАЧА ОРИГИНАЛ СУП",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_4.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN SOUP",
                    "ru" => "КУРИНЫЙ БУЛЬОН",
                ],
                "ingredients" => [
                    "en" => "CHICKEN FILLET, YOGURT, EGG",
                    "ru" => "КУРИНОЕ ФИЛЕ, ШАХРИЯ, КИСЛОЕ МОЛОКО, ЯЙЦО",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_5.webp",
            ],
            [
                "name" => [
                    "en" => "EZOGELIN SOUPMENEMEN",
                    "ru" => "СУП ЭЗОГЕЛИН",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ИЗ ЧЕЧЕВИЦЫ (КРАСНЫЙ) ПОДАЕТСЯ С ЛИМОНОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_6.webp",
            ],
            [
                "name" => [
                    "en" => "ІКSHEMBE",
                    "ru" => "ИКШЕМБЕ",
                ],
                "ingredients" => [
                    "en" => "TRIPE SOUP WITH YOGURT",
                    "ru" => "СУП ИЗ ТРЕБУХИ И КИСЛОГО МОЛОКА",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_7.webp",
            ],
            [
                "name" => [
                    "en" => "DUYUN",
                    "ru" => "ДУЮН",
                ],
                "ingredients" => [
                    "en" => "SOUP WITH MILK AND YOGURT",
                    "ru" => "СУП ИЗ МЯСА И КИСЛОГОМОЛОКА",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_8.webp",
            ],
            [
                "name" => [
                    "en" => "MUTTON SOUP",
                    "ru" => "МЯСНАЯ ХАШЛАМА",
                ],
                "ingredients" => [
                    "en" => "LAMB SOUP WITH POTATOES AND CARROTS",
                    "ru" => "СУП ИЗ БАРАНИНЫ С КАРТОШКОЙ И МОРКОВЬЮ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 60000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 60000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_9.webp",
            ],
            [
                "name" => [
                    "en" => "IZMIR KÖFTE",
                    "ru" => "ИЗМИР КОФТЕ",
                ],
                "ingredients" => [
                    "en" => "CHOPPED BEEF MEAT WITH SPICES",
                    "ru" => "ГОВЯЖИЙ ФАРШ СО СПЕЦИЯМИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 55000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 55000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 40000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_10.webp",
            ],
            [
                "name" => [
                    "en" => "ETLI NOHUT",
                    "ru" => "ЭТЛИ НОХАТ",
                ],
                "ingredients" => [
                    "en" => "MEAT, ONIONS AND TOMATOES",
                    "ru" => "ГОРОХ, МЯСО, ЛУК И ТОМАТЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 30000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_11.webp",
            ],
            [
                "name" => [
                    "en" => "TAS KEBAB",
                    "ru" => "ТАС КЕБАБ",
                ],
                "ingredients" => [
                    "en" => "BEEF, POTATOES, TOVATOES AND PEPPERS",
                    "ru" => "ГОВЯДИНА, КАРТОФЕЛЬ, ПОМИДОРЫ И ПЕРЕЦ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 35000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_12.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN SOUP",
                    "ru" => "КУРИНАЯ ХАШЛАМА",
                ],
                "ingredients" => [
                    "en" => "CHICKEN, POTATOES AND CARROTS",
                    "ru" => "КУРИНОЕ МЯСО, КАРТОФЕЛЬ, МОРКОВЬ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 30000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_13.webp",
            ],
            [
                "name" => [
                    "en" => "BEANS SOUP",
                    "ru" => "КУРУ ФАСУЛЬЕ",
                ],
                "ingredients" => [
                    "en" => "WHITE BEANS, MEAT ONIONS AND TOMATOES",
                    "ru" => "БЕЛАЯ ФАСОЛЬ МЯСО, ЛУК И ТОМАТЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 30000,
                    ],
                ],
                "image" => "https://efendi.qrmenus.uz/images/soup/soup_14.webp",
            ],
        ]);

        // New category added
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Breakfast",
                "ru" => "Завтрак",
            ],
            "order" => 3,
        ]);
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "OMELETTE",
                    "ru" => "ОМЛЕТ",
                ],
                "ingredients" => [
                    "en" => "CLASSICAL WITH CHEESE",
                    "ru" => "КЛАССИЧЕСКИЙ С СЫРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_1.webp",
            ],
            [
                "name" => [
                    "en" => "SOCUKLU YUMURTA",
                    "ru" => "СУЖУКЛУ ЮМУРТА",
                ],
                "ingredients" => [
                    "en" => "SCRAMBLED EGES WITH TURKISH SAUSAGE",
                    "ru" => "ЯИЧНИЦА С ТУРЕЦКИМИ КОЛБАСКАМИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_2.webp",
            ],
            [
                "name" => [
                    "en" => "KAVURMALI YUMURTALI",
                    "ru" => "КАВУРМАЛИ ЮМУРТА",
                ],
                "ingredients" => [
                    "en" => "OMELETTE, BRAISED MEAT",
                    "ru" => "ОМЛЕТ, ТУШЕНОЕ МЯСО",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_3.webp",
            ],
            [
                "name" => [
                    "en" => "KAVURMALI MENEMEN",
                    "ru" => "Кавурмали Менемен",
                ],
                "ingredients" => [
                    "en" => "SCRAMBLED EGES, BRAISED MEAT, TOMATO, BELL PAPER",
                    "ru" =>
                        "ЯИЧНИЦА, ТУШЕНОЕ МЯСО, ПОМИДОРЫ И БОЛГАРСКИЙ ПЕРЕЦ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_4.webp",
            ],
            [
                "name" => [
                    "en" => "MENEMEN",
                    "ru" => "Менемен",
                ],
                "ingredients" => [
                    "en" => "SCRAMBLED EGGS WITH VEGETABLE",
                    "ru" => "ЯИЧНИЦА С ОВОЩАМИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_5.webp",
            ],
            [
                "name" => [
                    "en" => "CLASSIC BREAKFAST",
                    "ru" => "КЛАССИЧЕСКИЙ ЗАВТРАК",
                ],
                "ingredients" => [
                    "en" =>
                        "BOILED EGG, CREAM, BUTTER, CHEESE, WHITE CHEESE OLIVES JAM, TOMATOES, CUCUMBERS, BREAD, TURKISH TEA",
                    "ru" =>
                        "ВАРЕНОЕ ЯЙЦО, СЛИВКИ. СЛИВОЧНОЕ МАСЛО, СЫР. БРЫНЗА, ОЛИВКИ, ДЖЕМ, ПОМИДОРЫ, ОГУРЦЫ, ХЛЕБ, ТУРЕЦКИЙ ЧАЙ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_6.webp",
            ],
            [
                "name" => [
                    "en" => "PASTIRMALI YUMURTA",
                    "ru" => "ПАСТИРМАЛИ ЮМУРТА",
                ],
                "ingredients" => [
                    "en" => "SCRAMBLED EGGS WITH TURKISH BACON",
                    "ru" => "ЯИЧНИЦА С ТУРЕЦКОЙ ПАСТИРМОЙ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_7.webp",
            ],
            [
                "name" => [
                    "en" => "2 EGGS OVER MEDIUM",
                    "ru" => "ГЛАЗУНЬЯ ИЗ 2 ЯИЦ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ГЛАЗУНЬЯ ИЗ 2 ЯИЦ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/breakfast/breakfast_8.webp",
            ],
        ]);

        //CERAMIT: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Ceramit",
                "ru" => "Керамит",
            ],
            "order" => 4,
        ]);

        //CERAMIT: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "CERAMIT TAVUK",
                    "ru" => "КУРИННЫЙ КЕРАМИТ",
                ],
                "ingredients" => [
                    "en" =>
                        "CHICKEN MEAT AND VEGETABLES IN TRADITIONAL ASAN CLAY OVEN - TANDOOR",
                    "ru" =>
                        "КЕРАМИТ КУРИНОЕ МЯСО С ОВОЩАМИ, ЗАПЕЧЕННОЕ В ТАНДЫРЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 80000,
                "portions" => [
                    [
                        "text" => "1x + с сыром",
                        "price" => 80000,
                    ],
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/ceramit/ceramit_1.webp",
            ],
            [
                "name" => [
                    "en" => "CERAMIT MEAT",
                    "ru" => "МЯСНОЙ КЕРАМИТ",
                ],
                "ingredients" => [
                    "en" =>
                        "MEAT WITH VEGETABLES IN TRADITIONAL ASIAN CLAY OVEN - TANDOOR",
                    "ru" => "ГОВЯДИНА С ОВОЩАМИ, ЗАПЕЧЕННАЯ В ТАНДЫРЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 105000,
                "portions" => [
                    [
                        "text" => "1x + с сыром",
                        "price" => 105000,
                    ],
                    [
                        "text" => "1x",
                        "price" => 100000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/ceramit/ceramit_2.webp",
            ],
            [
                "name" => [
                    "en" => "KЕLЕЅ TAVA",
                    "ru" => "КЕЛЕС ТАВА",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "МЯСНОЙ ФАРШ С ОВОЩАМИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 67000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 67000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/ceramit/ceramit_3.webp",
            ],
            [
                "name" => [
                    "en" => "CERAMIT WITH MUSHROOMS",
                    "ru" => "КЕРАМИТ С ГРИБАМИ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ГРИБЫ С ОВОЩАМИ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/ceramit/ceramit_4.webp",
            ],
        ]);

        //DONAR: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Donar",
                "ru" => "Донар",
            ],
            "order" => 5,
        ]);

        //DONAR: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "ASSORTED DONER",
                    "ru" => "АССОРТИ ДОНЕР",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_1.webp",
            ],
            [
                "name" => [
                    "en" => "DONAR BURGER",
                    "ru" => "ДОНЕР БУРГЕР",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_2.webp",
            ],
            [
                "name" => [
                    "en" => "DОNЕR DURUM",
                    "ru" => "ДОНЕР ДУРУМ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_3.webp",
            ],
            [
                "name" => [
                    "en" => "BEEF ISKANDER KEBAB",
                    "ru" => "МЯСНОЙ ИСКАНДЕР КЕБАБ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 79000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 79000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_4.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN DONER",
                    "ru" => "КУРИНЫЙ ДОНЕР",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 60000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 60000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_5.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN ISKANDER KEBAB",
                    "ru" => "КУРИНЫЙ ИСКАНДЕР КЕБАБ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 60000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 60000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_6.webp",
            ],
            [
                "name" => [
                    "en" => "BEEF DONER",
                    "ru" => "МЯСНОЙ ДОНЕР",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 69000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 69000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_7.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN DURUM",
                    "ru" => "КУРИНЫЙ ДУРУМ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 45000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_8.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN BURGER",
                    "ru" => "КУРИНЫЙ БУРГЕР",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/donar/donar_9.webp",
            ],
        ]);

        //Garnish: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Garnish",
                "ru" => "Гарнир",
            ],
            "order" => 6,
        ]);

        //Garnish: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "TURKISH RICE",
                    "ru" => "ТУРЕЦКИЙ РИС (ПЛОВ)",
                ],
                "ingredients" => [
                    "en" => "ONION, BULGARIAN PEPPER, TOMATOS",
                    "ru" => "ЛУК, БОЛГАРСКИЙ , ПОМИДОРЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/garnir/garnir_1.webp",
            ],
            [
                "name" => [
                    "en" => "QUADRO",
                    "ru" => "КВАДРО",
                ],
                "ingredients" => [
                    "en" => "BUTTER. CREAM, HONEY, JAM",
                    "ru" => "МАСЛО, СЛИВКИ, МЕД, ВАРЕНЬЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/garnir/garnir_2.webp",
            ],
            [
                "name" => [
                    "en" => "TRIO",
                    "ru" => "ТРИО",
                ],
                "ingredients" => [
                    "en" => "BUTTER CREAM, HONEY",
                    "ru" => "МАСЛО, СЛИВКИ, МЕД",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/garnir/garnir_3.webp",
            ],
            [
                "name" => [
                    "en" => "FRENCH FRIES PIRING",
                    "ru" => "КАРТОФЕЛЬ ФРИ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 20000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 20000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 15000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/garnir/garnir_4.webp",
            ],
            [
                "name" => [
                    "en" => "RICE",
                    "ru" => "РИС (ПЛОВ)",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "РИС, ШАХРИЯ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 20000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/garnir/garnir_5.webp",
            ],
        ]);

        //KEBAB: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Kebab",
                "ru" => "Кебаб",
            ],
            "order" => 7,
        ]);

        //KEBAB: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "BEEF KEBAB",
                    "ru" => "САРМА БЕЙТИ",
                ],
                "ingredients" => [
                    "en" => "LAMB MEAT WITH GREENS WRAPPED IN PITA",
                    "ru" => "МЯСА БАРАНИНЫ ЗАВЕРНУТОЕ В ЛАВАШЕ С ТАМАТОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 80000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 80000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_1.webp",
            ],
            [
                "name" => [
                    "en" => "ASSORTED EFENDI KEBAB (FOR 2 PERSDNS)",
                    "ru" => "ЭФЕНДИ КЕБАБ АССОРТИ (НА 2 ПЕРСОНЫ)",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 210000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 210000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_2.webp",
            ],
            [
                "name" => [
                    "en" => "URFA KEBAB /GROUND SKEWERS",
                    "ru" => "АДАНА КЕБАБ І УРФА КЕБАБ",
                ],
                "ingredients" => [
                    "en" => "GROUND-MEAT HOT SPICY/NOT SPICY KEBAB (BEEF/LAMB)",
                    "ru" =>
                        "МОЛОТЫЙ ОСТРЫЙ НЕОСТРЫЙ ШАШЛЫК (ГОВЯДИНА/БАРАНИНА)",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_3.webp",
            ],
            [
                "name" => [
                    "en" => "ASSORTED EFENDI KEBAB (FOR 1 PERSONS)",
                    "ru" => "ЭФЕНДИ КЕБАБ АССОРТИ (НА 1 ПЕРСОНУ)",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 120000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 120000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_4.webp",
            ],
            [
                "name" => [
                    "en" => "ET SIS",
                    "ru" => "ГОВЯЖИЙ ШАШЛЫК",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 90000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 90000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_5.webp",
            ],
            [
                "name" => [
                    "en" => "ІNЕGÖL",
                    "ru" => "ИНЕГЁЛ",
                ],
                "ingredients" => [
                    "en" => "LAMB/BEEF MEATBALLS",
                    "ru" => "КОТЛЕТЫ ИЗ БАРАНИНЫ/ГОВЯДИНЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_6.webp",
            ],
            [
                "name" => [
                    "en" => "EFENDI MEATBALLS",
                    "ru" => "ЭФЕНДИ КЁФТЕ",
                ],
                "ingredients" => [
                    "en" => "LAMB MEATBALLS ON THE GRILL",
                    "ru" => "КОТЛЕТЫ ИЗ БАРАНИНЫ НА МАНГАЛЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_7.webp",
            ],
            [
                "name" => [
                    "en" => "KEBAB WITH EGGPLANT AND MEAT",
                    "ru" => "БАКЛАЖАНОВЫЙ ШАШЛЫК",
                ],
                "ingredients" => [
                    "en" => "BEEF. EGGPLANT, TOMATOES",
                    "ru" => "ГОВЯДИНА. БАКЛАЖАНЫ С ГАРНИРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_8.webp",
            ],
            [
                "name" => [
                    "en" => "ET COP SIS",
                    "ru" => "Мясной шашлык на шпажках",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ГОВЯЖИЙ ШАШЛЫК НА ШПАЖКАХ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 95000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 95000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_9.webp",
            ],
            [
                "name" => [
                    "en" => "MANTARLI KEBAB",
                    "ru" => "MANTARLI KEBAB",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ШАМПИНЬОНЫ, МЯСО ИЗ ГАРНИР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_10.webp",
            ],
            [
                "name" => [
                    "en" => "KUZU SIS",
                    "ru" => "KUZU SIS",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ШАШЛЫК ИЗ БАРАНИНЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 75000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_11.webp",
            ],
            [
                "name" => [
                    "en" => "KUZU PERZOLA",
                    "ru" => "БАРАНИНА Перзола",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 130000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 130000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_12.webp",
            ],
            [
                "name" => [
                    "en" => "FILLE OF CHICKEN ON THE GRILL",
                    "ru" => "КУРИНОЕ ФИЛЕ НА ГРИЛЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 75000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_13.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN PERZULA",
                    "ru" => "КУРИНАЯ ПЕРЗОЛА",
                ],
                "ingredients" => [
                    "en" => "CHICKEN LEGS WITH SIDE DISH",
                    "ru" => "КУРИНЫЕ НОЖКИ С ГАРНИРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 69000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 69000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 45000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_14.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN SHISH KEBAB",
                    "ru" => "КУРИНЫЙ ШАШЛЫК",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "КУРИНЫЙ ШАШЛЫК С ПЕР30ЛЫ СОЧНЫЙ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_15.webp",
            ],
            [
                "name" => [
                    "en" => "CHIKEN ON THE GRILL",
                    "ru" => "КОТЛЕТЫ КУРИНЫЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_16.webp",
            ],
            [
                "name" => [
                    "en" => "VEGETABLE KEBAB",
                    "ru" => "ОВОЩНОЙ КЕБАБ",
                ],
                "ingredients" => [
                    "en" => "POTATOES, CARROTS. EGGPLANT",
                    "ru" => "ШАШЛЫК ИЗ ОВОЩЕЙ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 40000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 40000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_17.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN KEBAB ON SKEWERS",
                    "ru" => "КУРИНЫЙ ШАШЛЫК НА ШПАЖКАХ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 40000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_18.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN SHISH KEBAB",
                    "ru" => "КУРИНЫЙ ШАШЛЫК",
                ],
                "ingredients" => [
                    "en" => "CHICKEN FILLET WITH SIDE DISH",
                    "ru" => "КУРИНОЕ ФИЛЕ С ГАРНИРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_19.webp",
            ],
            [
                "name" => [
                    "en" => "CHICKEN WINGS",
                    "ru" => "КРЫЛЫШКИ",
                ],
                "ingredients" => [
                    "en" => "SERVED WITH SIDE DISH",
                    "ru" => "КУРИНЫЕ КРЫЛЫШКИ С ГАРНИРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 60000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 60000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_20.webp",
            ],
            [
                "name" => [
                    "en" => "MIX KEBAB ON SKEWERS",
                    "ru" => "СМЕШАННЫЙ ШАШЛЫК НА ШПАЖКАХ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 95000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 95000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 71000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/kebab/kebab_21.webp",
            ],
        ]);

        //PIZZA: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Pizza",
                "ru" => "Пицца",
            ],
            "order" => 8,
        ]);

        //PIZZA: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "CERAMIT TAVUK PIZZA «COMBINED» LARGE",
                    "ru" => "ПИЦЦА «КОМБИ» БОЛЬШАЯ",
                ],
                "ingredients" => [
                    "en" => "BEEF, TOMATOES, OLVES, MUSHROOMS, CHEESE",
                    "ru" => "ГОВЯДИНА, ТОМАТЫ, КУКУРУЗА, ОЛИВКИ ГРИБЫ, СЫР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 90000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 90000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_1.webp",
            ],
            [
                "name" => [
                    "en" => "LAKHMAJUN",
                    "ru" => "ЛАХМАЖУН",
                ],
                "ingredients" => [
                    "en" => "MINCED LAMB MINCEMEAT, TOMATOES, ONION",
                    "ru" => "ФАРШИЗ БАРАНИНЫ ТОМАТЫ. РЕПЧАТЫЙ ЛУК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_2.webp",
            ],
            [
                "name" => [
                    "en" => "PIZZA MARGARIТА",
                    "ru" => "ПИЦЦА МАРГАРИТА",
                ],
                "ingredients" => [
                    "en" => "BEEF. TOMATOES, OLVES, MUSHROOMS, CHEESE",
                    "ru" => "ТОМАТЫ И СЫР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 75000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_3.webp",
            ],
            [
                "name" => [
                    "en" => "CHEESE PIDE",
                    "ru" => "СЫРНОЕ ПИДЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 55000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 55000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_4.webp",
            ],
            [
                "name" => [
                    "en" => "CHEESE PIDE WITH BASTURMA",
                    "ru" => "СЫРНОЕ ПИДЕ С БАСТУРМОЙ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 65000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 65000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_5.webp",
            ],
            [
                "name" => [
                    "en" => "MEAT PIZZA",
                    "ru" => "МЯСНАЯ ПИЦЦА",
                ],
                "ingredients" => [
                    "en" => "LAMB MINCEMEAT, EGGS, TOMATOES. CHEESE",
                    "ru" => "ФАРШИЗ БАРАНИНЫ, ЯЙЦА. ПОМИДОРЫ СЫР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 75000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_6.webp",
            ],
            [
                "name" => [
                    "en" => "KARIŞIK PIDE",
                    "ru" => "ОВОЩНАЯ ПИЦЦА",
                ],
                "ingredients" => [
                    "en" => "SEASONAL VEGETABLES",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_7.webp",
            ],
            [
                "name" => [
                    "en" => "KUSH BASH",
                    "ru" => "КУШ БАШИ",
                ],
                "ingredients" => [
                    "en" => "BEEF, TOMATOES, BULGARIAN PAPER",
                    "ru" => "БАРАНИЕ МЯСО, ПОМИДОРЫ, БОЛГАРСКИЙ ПЕРЕЦ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 80000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 80000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_8.webp",
            ],
            [
                "name" => [
                    "en" => "GROUND LAMB PIZZA",
                    "ru" => "МОЛОТЫЙ БАРАНИЙ ПИДЕ",
                ],
                "ingredients" => [
                    "en" => "MINCED LAMB, VEGETABLES, HERBS",
                    "ru" => "ФАРШ ИЗ БАРАНИНЫ ОВОЩИ, ЗЕЛЕНЬ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 55000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 55000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_9.webp",
            ],
            [
                "name" => [
                    "en" => "BEEF PIDE IN TANDOOR",
                    "ru" => "ГОВЯЖИЙ ПИДЕ В ТАНДЫРЕ",
                ],
                "ingredients" => [
                    "en" =>
                        "BEEF WITH CHEESE NA IN TRADITIONAL ASIAN CLAY OVEN - TANDOOR",
                    "ru" => "ГОВЯДИНА С СЫРОМ ЗАПЕЧЕННАЯ В ТАНДЫРЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 75000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 75000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_10.webp",
            ],
            [
                "name" => [
                    "en" => "OIL PIDE",
                    "ru" => "СЛАДКОЕ ПИДЕ",
                ],
                "ingredients" => [
                    "en" =>
                        "SWEET PIZZA WITH CHEESE, EGGS, BATHED IN HONEY SYRUP",
                    "ru" => "ПИДЕ С СЫРОМ, ЗАЛИТАЯ МЕДОВЫМ СИРОПОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/pizza/pizza_11.webp",
            ],
        ]);

        //SACTAVA: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Sac Tava",
                "ru" => "Сач Тава",
            ],
            "order" => 9,
        ]);

        //SACTAVA: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "CHICKEN WITH VEGETABLES",
                    "ru" => "КУРИНАЯ САЧ ТАВА",
                ],
                "ingredients" => [
                    "en" => "ROASTED CHICKEN WITH VEGETABLES AND RICE",
                    "ru" => "КУРИНОЕ МЯСО С ОВОЩАМИ И РИСОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 70000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 70000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_1.webp",
            ],
            [
                "name" => [
                    "en" => "MEAT WITH VEGETABLES",
                    "ru" => "МЯСНАЯ САЧ ТАВА",
                ],
                "ingredients" => [
                    "en" => "ROASTED MEAT WITH VEGETABLES AND RICE",
                    "ru" => "ЖАРЕНОЕ МЯСОС ОВОЩАМИ И РИСОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 100000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 100000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_2.webp",
            ],
            [
                "name" => [
                    "en" => "FISH",
                    "ru" => "РЫБА",
                ],
                "ingredients" => [
                    "en" => "FRIED PERCH WITH GARNISH",
                    "ru" => "ЖАРЕННЫЙ СУДАК С ГАРНИРОМ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 80000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 80000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_3.webp",
            ],
            [
                "name" => [
                    "en" => "VEGETABLE AND RICE",
                    "ru" => "ОВОЩНАЯ САЧ ТАВА С РИСОМ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 55000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 55000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_4.webp",
            ],
            [
                "name" => [
                    "en" => "ICHLI KOFTE",
                    "ru" => "ИЧЛИ КОФТЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "ГОВЯДИНА, БАРАНИНА",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_5.webp",
            ],
            [
                "name" => [
                    "en" => "KARIŞIK SAÇ TAVA",
                    "ru" => "АССОРТИ САЧ ТАВА С РИСОМ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 95000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 95000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/sactava/sactava_6.webp",
            ],
        ]);

        //DESSERT: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Dessert",
                "ru" => "Десерт",
            ],
            "order" => 10,
        ]);

        //DESSERT: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "CHOKOLATE CAKE",
                    "ru" => "ШОКОЛАДНЫЙ КЕКС",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_1.webp",
            ],
            [
                "name" => [
                    "en" => "REVANIYE KAZANDIBI",
                    "ru" => "КАЗАН ТИБИ РЕВАНИ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "МАННАЯ КРУПА, САХАР, ОРЕХ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_2.webp",
            ],
            [
                "name" => [
                    "en" => "REVANIYE",
                    "ru" => "РЕВАНИЕ",
                ],
                "ingredients" => [
                    "en" =>
                        "CHOUX PASTRY, BLACK/WHITE CHOCOLATE BOILED, CONDENSED MILK, BUTTER",
                    "ru" => "МАННАЯ КРУПА, САХАР, ОРЕХ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_3.webp",
            ],
            [
                "name" => [
                    "en" => "ICE CREAM",
                    "ru" => "MOPOЖЕНOE",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 15000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 15000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_4.webp",
            ],
            [
                "name" => [
                    "en" => "BAKED QUINCE",
                    "ru" => "ПЕЧЕННАЯ АЙВА",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "СЛАДОСТЬ ИЗ АЙНЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_5.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA DURUM",
                    "ru" => "ТУРЕЦКАЯ ПАХЛАВА",
                ],
                "ingredients" => [
                    "en" => "THE SWEETNESS OF THE QUINCE",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_6.webp",
            ],
            [
                "name" => [
                    "en" => "SHEKER PARE",
                    "ru" => "ШЕКЕР ПАРЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "МАННАЯ КРУПА, САХАР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_7.webp",
            ],
            [
                "name" => [
                    "en" => "BAKED PUMKIN",
                    "ru" => "ПЕЧЕННАЯ ТЫКВА",
                ],
                "ingredients" => [
                    "en" => "SEMOLINA, SUGAR, NUTS",
                    "ru" => "СЛАДОСТЬ ИЗ ТЫКВЫ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_8.webp",
            ],
            [
                "name" => [
                    "en" => "TULUMBA",
                    "ru" => "ТУЛУМБА",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "TECTO B CYPONE",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_9.webp",
            ],
            [
                "name" => [
                    "en" => "TURKISH PUDDING",
                    "ru" => "ТУРЕЦКИЙ ПУДИНГ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "МОЛОКО, РИС, САХАР",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 25000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_10.webp",
            ],
            [
                "name" => [
                    "en" => "KATMER",
                    "ru" => "КАТМЕР",
                ],
                "ingredients" => [
                    "en" => "MILK, RICE, SUGAR",
                    "ru" => "ТЕСТО С ФИСТАШКАМИ В САХАРНОМ СИРОПЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_11.webp",
            ],
            [
                "name" => [
                    "en" => "PIDE WITH PISTACHI AND WALNUT",
                    "ru" => "ПИДЕ С ФИСТАШКАМИ И С ГРЕЦКИМ ОРЕХОМ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 80000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 80000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_12.webp",
            ],
            [
                "name" => [
                    "en" => "KUNEFE",
                    "ru" => "КЮНАФЕ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "СЫР С ФИСТАШКАМИ В САХАРНОМ СИРОПЕ",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 50000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 50000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_13.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA MIDYA",
                    "ru" => "МИДЯ ПАХЛАВА",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "1 ПОРЦИЯ - 2 ШТУК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_14.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA MARAŞ",
                    "ru" => "BAKLAVA MARAŞ",
                ],
                "ingredients" => [
                    "en" => "1 ПОРЦИЯ - 2 ШТУК",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 26000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 26000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_15.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA PRENSES",
                    "ru" => "BAKLAVA PRENSES",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "1 ПОРЦИЯ - 2 ШТУК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_16.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA ŞOBET",
                    "ru" => "BAKLAVA ŞOBET",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "1 ПОРЦИЯ - 2 ШТУК",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_17.webp",
            ],
            [
                "name" => [
                    "en" => "BAKLAVA HOVUÇ DILIMI",
                    "ru" => "BAKLAVA HOVUÇ DILIMI",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 34000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 34000,
                    ],
                    [
                        "text" => "с мороженым",
                        "price" => 49000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/dessert/dessert_18.webp",
            ],
        ]);

        //BREAD: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Bread",
                "ru" => "Хлеб",
            ],
            "order" => 11,
        ]);

        //BREAD: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "AFGAN EKMEK",
                    "ru" => "АФГАНСКИЙ ХЛЕБ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 30000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 30000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/bread/bread_1.webp",
            ],
            [
                "name" => [
                    "en" => "EFENDI PITA",
                    "ru" => "ЭФЕНДИ ЛАВАШ ХЛЕБ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 15000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 15000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/bread/bread_2.webp",
            ],
            [
                "name" => [
                    "en" => "BAKED BREAD EFENDI",
                    "ru" => "ФИРМЕННЫЙ ХЛЕБ ОТ ЭФЕНДИ",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 10000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 10000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/bread/bread_3.webp",
            ],
        ]);

        //DRINKS: CATEGORY
        $category = $branch->categories()->create([
            "name" => [
                "en" => "Drinks",
                "ru" => "Напитки",
            ],
            "order" => 12,
        ]);

        //DRINKS: PRODUCT LIST
        $category->products()->createMany([
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_2.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_3.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_4.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_5.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_6.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_7.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_8.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_9.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_10.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_11.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_12.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_13.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_14.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_15.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_16.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_17.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_18.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_19.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_20.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_21.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_22.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_23.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_24.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_25.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_26.webp",
            ],
            [
                "name" => [
                    "en" => "",
                    "ru" => "",
                ],
                "ingredients" => [
                    "en" => "",
                    "ru" => "",
                ],
                "description" => [
                    "en" => "",
                    "ru" => "",
                ],
                "display_price" => 35000,
                "portions" => [
                    [
                        "text" => "1x",
                        "price" => 35000,
                    ],
                    [
                        "text" => "0.5x",
                        "price" => 25000,
                    ],
                ],
                "image" =>
                    "https://efendi.qrmenus.uz/images/drinks/drinks_27.webp",
            ],
        ]);
    }
}
