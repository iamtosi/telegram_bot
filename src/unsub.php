<?php 
//------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB//------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB------------------------------UNSUB---------------------UNSUB




if($message == "/start" || $message == "/restart")
{
    $but = 
    [
        [ 
            ['text' => '📚 Прев’ю посібників (безкоштовно)', 'callback_data' => "preview"]
        ],

        [
            ['text' => '☑️ Оформити підписку на бота ', 'callback_data' => "sub"]
        ],

        [
            ['text' => '💬 Підтримка', 'callback_data' => 'support'],
            ['text' => '🚀 Наша група', 'url' => 't.me/ZnoHandbooks2022']
        ]

    ];


    inlineKeyboard($but, $chat_id, 'Привіт, '. $first_name. ' '. $last_name. '👋🏻'. "\n\n".'За допомогою цього бота ти отримаєш доступ до всіх збірників ЗНО 2022 не купуючи їх друкованих версій. Це набагато дешевше ніж купувати їх в онлайн або оффлайн магазинах! 💰'. "\n\n". 'Переконатися в тому чи ми дійсно маємо потрібні тобі посібники ти можеш переглянувши їх прев’ю на вкладці нижче 📚'. "\n\n". 'Отримати доступ до всіх сторінок збірників ЗНО 2022 можна оформивши підписку 💳');

}

if($query_data == 'back_main')
{
    $but = 
    [
        [ 
            ['text' => '📚 Прев’ю посібників (безкоштовно)', 'callback_data' => "preview"]
        ],

        [
            ['text' => '☑️ Оформити підписку на бота', 'callback_data' => "sub"]
        ],

        [
            ['text' => '💬 Підтримка', 'callback_data' => 'support'],
            ['text' => '🚀 Наша група', 'url' => 't.me/ZnoHandbooks2022']
        ]

    ];

    editInline($query_id, $query_message_id, 'За допомогою цього бота ти отримаєш доступ до всіх збірників ЗНО 2022 не купуючи їх друкованих версій. Це набагато дешевше ніж купувати їх в онлайн або оффлайн магазинах! 💰'. "\n\n". 'Переконатися в тому чи ми дійсно маємо потрібні тобі посібники ти можеш переглянувши їх прев’ю на вкладці нижче 📚'. "\n\n". 'Отримати доступ до всіх сторінок збірників ЗНО 2022 можна оформивши підписку 💳', $but);


}





if($query_data == "sub")
{
        $but = 
    [
        [ 
            ['text' => 'Підписка на 3 місяці - 275 грн.', 'callback_data' => "subscribe"]
        ],

        [
            ['text' => 'Підписка назавжди - 500 грн.', 'callback_data' => "subscribe_2"]
        ],

        [
            ['text' => 'Повернутися назад', 'callback_data' => "back_main"]
        ]
    ];
    

    editInline($query_id, $query_message_id, 'Оформивши підписку на бота ти отримаєш доступ до всіх сторінок будь-якого посібника ЗНО 2022 з нашої бази'. "\n\n". 'Згодом база буде поповнюватися збірниками інших предметів та авторів', $but);
    
}




if($query_data == "subscribe")
{
        $but = 
    [
        
        [
            ['text' => '🚀 Написати в підтримку', 'url' => "t.me/ZnoSupport"]
        ],


        [
            ['text' => 'Повернутися назад', 'callback_data' => "sub"]
        ]
    ];
    

    editInline($query_id, $query_message_id, 'Щоб оформити підписку, потрібно написати до нас в підтримку. В своєму повідомленні треба вказати вибраний тобою тариф та твій логін в Telegram 💼'. "\n\n". 'Далі ти отримаєш посилання перейшовши по якому мусиш оплатити підписку 💳'. "\n\n". 'Після оплати протягом 20 хвилин наш оператор відкриє тобі доступ і надішле повідомлення 💬', $but);
    
}

if($query_data == "subscribe_2")
{
        $but = 
    [
        
        [
            ['text' => '🚀 Написати в підтримку', 'url' => "t.me/ZnoSupport"]
        ],


        [
            ['text' => 'Повернутися назад', 'callback_data' => "sub"]
        ]
    ];
    

    editInline($query_id, $query_message_id, 'Щоб оформити підписку, потрібно написати до нас в підтримку. В своєму повідомленні треба вказати вибраний тобою тариф та твій логін в Telegram 💼'. "\n\n". 'Далі ти отримаєш посилання перейшовши по якому мусиш оплатити підписку 💳'. "\n\n". 'Після оплати протягом 20 хвилин наш оператор відкриє тобі доступ і надішле повідомлення 💬', $but);
    
}






    if($query_data == "preview")
    {
        $but = 
        [
            [ 
                ['text' => 'Укр. мова та літ', 'callback_data' => "ukr_prew"],
                ['text' => 'Математика', 'callback_data' => "mat_prew"]
            ],

            [
                ['text' => 'Історія України', 'callback_data' => "his_prew"],
                ['text' => 'Географія', 'callback_data' => "geo_prew"]
            ],

            [
                ['text' => 'Іноземні мови', 'callback_data' => "lang_prew"],
                ['text' => 'Біологія *', 'callback_data' => "bio_prew"]
            ],

            [
                ['text' => 'Фізика *', 'callback_data' => "fiz_prew"],
                ['text' => 'Хімія *', 'callback_data' => "him_prew"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_main"]
            ]

        ];

        editInline($query_id, $query_message_id, 'Тут ти можеш переглянути перші 20-25 сторінок будь-якого збірника ЗНО 2022 з нашої бази'. "\n\n". 'Якщо ти хочеш переглянути будь-яку іншу сторінку посібника, пиши в підтримку. Фото бажаної сторінки ми надішлемо тобі та в загальний чат нашої групи'. "\n\n".  'Обери предмет щоб знайти прев’ю збірника:', $but);
    }

    if($query_data == "ukr_prew")
    {   
        $but = 
        [
            
            [ 
                ['text' => 'Авраменко I частина 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Авраменко II частина 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Укр. мова та література - 2022 рік'. "\n\n". 'Отримати доступ до всіх сторінок можна купивши підписку' ."\n\n". 'Вибери автора:', $but);  
    }

    if($query_data == "mat_prew")
    {
        $but = 
        [
            
            [ 
                ['text' => 'Капіносов 2022 - PDF', 'callback_data' => "no_author"]
            ],

            /*[
                ['text' => 'Захарійченко 2022 - PDF', 'callback_data' => "no_author"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Математика - 2022 рік'. "\n\n". 'Отримати доступ до всіх сторінок можна купивши підписку' ."\n\n". 'Вибери автора:', $but); 
    }

    if($query_data == "his_prew")
    {
        $but = 
        [
            
            [ 
                ['text' => 'І. Панчук 2022 - PDF', 'callback_data' => "no_author"]
            ],

            /*[
                ['text' => 'В. Власов 2022 - PDF', 'callback_data' => "no_author"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Історія України - 2022 рік'. "\n\n". 'Отримати доступ до всіх сторінок можна купивши підписку' ."\n\n". 'Вибери автора:', $but); 
    }

    if($query_data == "lang_prew")
    {
        $but = 
        [
            [ 
                ['text' => 'Англійська мова', 'callback_data' => "eng_prew"],
                ['text' => 'Німецька мова *', 'callback_data' => "ger_prew"]
            ],

            [
                ['text' => 'Іспанська мова *', 'callback_data' => "isp_prew"],
                ['text' => 'Француська мова *', 'callback_data' => "fra_prew"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ],
                    
        ];
        
        editInline($query_id, $query_message_id, 'Обери предмет:', $but); 
    }

    if($query_data == "eng_prew")
    {
        $but = 
        [
            
            [ 
                ['text' => 'О. Валігура 2022 - PDF', 'callback_data' => "no_author"]
            ],

            /*[
                ['text' => 'С. Мясоєдова 2022 - PDF', 'callback_data' => "no_author"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "lang_prew"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Англійська мова - 2022 рік'. "\n\n". 'Отримати доступ до всіх сторінок можна купивши підписку' ."\n\n". 'Вибери автора:', $but); 
    }

    if($query_data == "ger_prew" || $query_data == "isp_prew" || $query_data == "fra_prew") 
    {
         $but = 
        [
            
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "lang_prew"]
            ],

            /*[
                ['text' => '%author% 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];
        inlineKeyboard($but, $query_id, 'Список посібників'. "\n\n". 'Біологія - 2022 рік:');*/
        ];
        
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/
        
    }

    if($query_data == "geo_prew")
    {
        $but = 
        [
            
            [ 
                ['text' => 'А. Кузишин 2022 - PDF', 'callback_data' => "no_author"]
            ],

            /*[
                ['text' => 'С. Коберник 2022 - PDF', 'callback_data' => "no_author"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Географія - 2022 рік'. "\n\n". 'Отримати доступ до всіх сторінок можна купивши підписку' ."\n\n". 'Вибери автора:', $but); 
    }

    if($query_data == "bio_prew")
    {
        $but = 
        [
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ],

            [
                ['text' => '%author% 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
        ];

        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/

    }

    if($query_data == "fiz_prew")
    {
        $but = 
        [
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ],

            [
                ['text' => '%author% 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
        ];

        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/
    }

    if($query_data == "him_prew")
    {
        $but = 
        [
            
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ],

            [
                ['text' => '%author% 2022 - PDF', 'callback_data' => "no_author"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "preview"]
            ]
                    
        ];
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/
    }
    if ($query_data == "none")
    {
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
    }

    if ($query_data == "no_author")
    {
        answerCallback($callback_query_id, 'Посібник цього автора вже підготовлюється. Скоро він з’явиться!', True);
    }




    if($query_data == "support")
    {

        $but = 
        [
            
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "back_main"]
            ],
                    
        ];
        editInline($query_id, $query_message_id, 'Якщо ти маєш якісь питання то завжди можеш написати до нас в підтримку!'. "\n\n". 'Відповідаємо протягом 2-ох годин'. "\n\n". 'Працюємо 7 днів на тиждень'. "\n". 'З 8:00 до 00:00'. "\n\n". 't.me/ZnoSupport', $but);
    }



    if($message == "/info")
    {
        delMessage($chat_id, $message_id - 1);

        $but = 
        [
            
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "back_main"]
            ],
                    
        ];
        inlineKeyboard($but, $chat_id, 'Цей бот був створений саме для того щоб твоя підготовка до зовнішнього незалежного оцінювання пройшла успішно та з найменшими грошовими вкладеннями 🤑'. "\n\n". 'Чому вигідно користуватися нашим ботом? 🤔'. "\n". 'Після оформлення підписки ти отримуєш доступ абсолютно до❗️ВСІХ❗️ посібників, які є в нашій базі 📚'. "\n". 'Це набагато дешевше та вигідніше ніж купувати друковані посібники! 👍🏻'. "\n\n". 'Обравши будь-який тариф в нашому боті ти економиш свої кошти в 2-3 рази, порівняно з тим, якби купував їх в будь-якому онлайн чи оффлайн магазині 💸'. "\n\n". 'Приєднуйся, ми чекаємо на тебе 😉');
    }









    if ($query_data == "back_sub" || $query_data == "ukr_sub" || $query_data == "mat_sub" || $query_data == "his_sub" || $query_data == "lang_sub" || $query_data == "eng_sub" || $query_data == "ger_sub" || $query_data == "isp_sub" || $query_data == "fra_sub" || $query_data == "geo_sub" || $query_data == "bio_sub" || $query_data == "fiz_sub" || 
        $query_data == "him_sub" )
    {
        sendText($query_id, 'Термін дії твоєї підписки завершився 😕'. "\n\n". 'Перезапусти бота командою /restart');

        delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);
    }
    if ($message == "📆 моя підписка" || $message == "💬 підтримка" || $message == "📚 збірники" || $message == "🚀 наша група")
    {
        sendText($chat_id, 'Термін дії твоєї підписки завершився 😕'. "\n\n". 'Перезапусти бота командою /restart');

        delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);
    }




?>