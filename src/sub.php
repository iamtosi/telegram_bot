<?php
//------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER------------------SUBSCRIBER


$keyboard = 
$key = 
[
    'resize_keyboard' => true,
    'keyboard' => 
    [
        ["📚 Збірники", "📆 Моя підписка"],
        ["💬 Підтримка", "🚀 Наша група"]
    ]
];

keyboard($key, "☑️ Доступ відкрито ☑️". "\n\n". "Дякуємо за підписку, завдяки тобі нові посібники з’являться швидше!", $chat_id);





    if($message == "/start" || $message == "/restart")
    {
        
        sendText($chat_id, 'Ти отримав доступ до всіх посібників ЗНО 2022 які є в нашій базі.'. "\n\n". 'Згодом база буде поповнюватися збірниками інших предметів та авторів!'. "\n\n". 'Тисни кнопку "Збірники" щоб відкрити панель');
    }


    if($message == "📚 збірники")
    {
        $but = 
        [
            [ 
                ['text' => 'Укр. мова та літ', 'callback_data' => "ukr_sub"],
                ['text' => 'Математика', 'callback_data' => "mat_sub"]
            ],

            [
                ['text' => 'Історія України', 'callback_data' => "his_sub"],
                ['text' => 'Географія', 'callback_data' => "geo_sub"]
            ],

            [
                
                ['text' => 'Іноземні мови', 'callback_data' => "lang_sub"],
                ['text' => 'Біологія *', 'callback_data' => "bio_sub"]
            ],

            [
                ['text' => 'Фізика *', 'callback_data' => "fiz_sub"],
                ['text' => 'Хімія *', 'callback_data' => "him_sub"]
            ],

        ];
        inlineKeyboard($but, $chat_id, 'Ти можеш написати в підтримку, щоб дізнатися коли стане доступним той чи інший збірник, якщо його тут немає');
    }

    if($query_data == "back_sub")
    {
        $but = 
        [
            [ 
                ['text' => 'Укр. мова та літ', 'callback_data' => "ukr_sub"],
                ['text' => 'Математика', 'callback_data' => "mat_sub"]
            ],

            [
                ['text' => 'Історія України', 'callback_data' => "his_sub"],
                ['text' => 'Географія', 'callback_data' => "geo_sub"]
            ],

            [
                
                ['text' => 'Іноземні мови', 'callback_data' => "lang_sub"],
                ['text' => 'Біологія *', 'callback_data' => "bio_sub"]
            ],

            [
                ['text' => 'Фізика *', 'callback_data' => "fiz_sub"],
                ['text' => 'Хімія *', 'callback_data' => "him_sub"]
            ],

        ];
        
        editInline($query_id, $query_message_id, 'Ти завжди можеш написати в підтримку, щоб дізнатися коли стане доступним той чи інший збірник, якщо його тут немає', $but);
    } 



    if($query_data == "ukr_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => 'Авраменко 1 частина 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => 'Авраменко 2 частина 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ["text" => "Повернутися назад", "callback_data" => "back_sub"]
            ]
                    
        ];
        
        editInline($query_id, $query_message_id, 'Посилання на посібники оновлюються кожні 24 години, тому якщо посилання по якому ти перейшов не працює, потрібно перезавантажити цю панель'. "\n\n". 'Посібники ЗНО'. "\n". 'Українська мова - 2022 рік:', $but);
    }

    if($query_data == "mat_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => 'А. Капіносов 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => 'Назад', 'callback_data' => "back_sub"]
            ]
                    
        ];
        
        editInline($query_id, $query_message_id, 'Посилання на посібники оновлюються кожні 24 години, тому якщо посилання по якому ти перейшов не працює, потрібно перезавантажити цю панель'. "\n\n". 'Посібники ЗНО'. "\n". 'Математика - 2022 рік:', $but);

    } 

    if($query_data == "his_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => 'І. Панчук 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Посилання на посібники оновлюються кожні 24 години, тому якщо посилання по якому ти перейшов не працює, потрібно перезавантажити цю панель'. "\n\n". 'Посібники ЗНО'. "\n". 'Історія України - 2022 рік:', $but);
    } 

    if($query_data == "lang_sub")
    {
        $but = 
        [
            [ 
                ['text' => 'Англійська мова', 'callback_data' => "eng_sub"],
                ['text' => 'Німецька мова *', 'callback_data' => "ger_sub"]
            ],

            [
                ['text' => 'Іспанська мова *', 'callback_data' => "isp_sub"],
                ['text' => 'Француська мова *', 'callback_data' => "fra_sub"]
            ],

            [
                ['text' => 'Назад', 'callback_data' => "back_sub"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Обери іноземну мову:', $but);
    } 

    if($query_data == "eng_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => 'О. Валігура 2022 - PDF', 'callback_data' => "none1"]
            ],

            /*[
                ['text' => 'С. Мясоєдова 2022 - PDF', 'callback_data' => "none1"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "lang_sub"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Посилання на посібники оновлюються кожні 24 години, тому якщо посилання по якому ти перейшов не працює, потрібно перезавантажити цю панель'. "\n\n". 'Посібники ЗНО'. "\n". 'Англійська мова - 2022 рік:', $but);
    } 

    if($query_data == "ger_sub" || $query_data == "isp_sub" || $query_data == "fra_sub") 
    {
        





        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
       /* editInline($query_id, $query_message_id, 'Посібників цього предмету немає в нашій базі. Незабаром вони з’являться!', $but);*/
    }

    if($query_data == "geo_sub")
    {
        $but = 
        [
            [ 
                ['text' => 'А. Кузишин 2022 - PDF', 'callback_data' => "none1"]
            ],

            /*[
                ['text' => 'С. Коберник 2022 - PDF', 'callback_data' => "none1"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ]
                    
        ];

        editInline($query_id, $query_message_id, 'Посилання на посібники оновлюються кожні 24 години, тому якщо посилання по якому ти перейшов не працює, потрібно перезавантажити цю панель'. "\n\n". 'Посібники ЗНО'. "\n". 'Географія - 2022 рік:', $but);
    }

    if($query_data == "bio_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],

            /*[
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],*/

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ]
                    
        ];
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
    }

    if($query_data == "fiz_sub")
    {
        $but = 
        [
            
            [ 
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ]
                    
        ];
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/
    }

    if($query_data == "him_sub") 
    {
        $but = 
        [
            
            [ 
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => '%author% 2022 - PDF', 'callback_data' => "none1"]
            ],

            [
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ]
                    
        ];
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
        /*editInline($query_id, $query_message_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', $but);*/
    }



    if ($query_data == "none")
    {
        answerCallback($callback_query_id, 'Посібників цього предмету покищо немає в нашій базі. Незабаром вони з’являться!', True);
    }

    if ($query_data == "none1")
    {
        answerCallback($callback_query_id, 'Посібник цього автора вже підготовлюється. Скоро він з’явиться!', True);
    }



    if($message == "/info")
    {
        delMessage($chat_id, $message_id - 1);

        $but = 
        [
            
            [ 
                ['text' => 'Повернутися назад', 'callback_data' => "back_sub"]
            ],
                    
        ];
        inlineKeyboard($but, $chat_id, 'Цей бот був створений саме для того щоб твоя підготовка до зовнішнього незалежного оцінювання пройшла успішно та з найменшими грошовими вкладеннями 🤑'. "\n\n". 'Чому вигідно користуватися нашим ботом? 🤔'. "\n". 'Будь-який тариф в нашому боті вигідний для тебе тому, що ти отримуєш доступ абсолютно до❗️ВСІХ❗️ посібників, які є в нашій базі 📚'. "\n". 'Це набагато дешевше та вигідніше ніж купувати друковані посібники! 👍🏻'. "\n\n". 'Обравши будь-який тариф в нашому боті ти економиш свої кошти в 2-3 рази, порівняно з тим, якби купував їх в будь-якому онлайн чи оффлайн магазині 💸'. "\n\n". 'Приєднуйся, ми чекаємо на тебе 😉');
    }








    if($message == "📆 моя підписка")
    {
        sendText($chat_id, 'Тривалість підписки:'. "\n". $sub_type. "\n\n". 'Дата оформлення:'. "\n". 
            $sub_date. "\n\n". 'Завершується:'. "\n". $sub_exp_date);  
    }


    if($message == "💬 підтримка")
    {
        sendText($chat_id, 'Якщо ти маєш якісь питання то завжди можеш написати до нас в підтримку!'. "\n\n". 'Відповідаємо протягом 2-ох годин'. "\n\n". 'Працюємо 7 днів на тиждень'. "\n". 'З 8:00 до 00:00'. "\n\n". 't.me/ZnoSupport');  
    }


    if($message == "🚀 наша група") 
    {
        sendText($chat_id, 't.me/ZnoHandbooks2022');  
    }





    if ($query_data == "back_main" || $query_data == "sub" || $query_data == "preview" || $query_data == "ukr_prew" || $query_data == "mat_prew" || 
        $query_data == "his_prew" || $query_data == "lang_prew" || $query_data == "eng_prew" || $query_data == "ger_prew" || $query_data == "isp_prew" || 
        $query_data == "fra_prew" || $query_data == "geo_prew" || $query_data == "bio_prew" || $query_data == "fiz_prew" || $query_data == "him_prew" || 
        $query_data == "support")
    {

        sendText($query_id, 'Підписка оформлена! 🙂'. "\n\n". 'Перезапусти бота командою /restart');

        delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);
    }
?>