/* The chat const defines the Peekobot conversation.
 * 
 * It should be an object with numerical property names, and each property is an entry
 * in the conversation.
 * 
 * A conversation entry should have:
 *  - A "text" property that is what the chatbot says at this point in the conversation
 *  - Either:
 *     - A "next" property, which defines the next chat entry by stating a numerical key
 *       of the chat object and is used when the chatbot needs to say several things
 *       without input from the user
 *    OR
 *     - An "options" property that defines the choices a user can take this is an
 *       array of option objects
 * 
 * An options object should have:
 *  - a "text" property that is the label for the user's choice
 *  AND EITHER
 *  - a "next" property that defines the next chat entry by stating a numerical key of
 *    the chat object and is used when the user selects this option
 *  OR
 *  - a "url" property that defines a link for the user to be taken to
 * 
 * A simple example chat object is:
 * const chat = {
 *     1: {
 *         text: 'Good morning sir',
 *         next: 2
 *     },
 *     2: {
 *         text: 'Would you like tea or coffee with your breakfast?',
 *         options: [
 *             {
 *                 text: 'Tea',
 *                 next: 3
 *             },
 *             {
 *                 text: 'Coffee',
 *                 next: 4
 *             }
 *         ]
 *     },
 *     3: {
 *         text: 'Splendid - a fine drink if I do say so myself.'
 *     },
 *     4: {
 *         text: 'As you wish, sir'
 *     }
 * }
 */
const chat = {
    1: {
        text: 'Приветствуем Вас на сайте "Школы Доктора Чикурова!"',
        next: 2
    },
    2: {
        text: 'Я — электронный помощник. Могу рассказать с чего начать обучение, подсказать стоимость семинаров или ответить на популярные вопросы. Закрыть чат можно в любой момент кликнув на крестик.',
        options: [
            {
                text: "Отлично, давайте!",
                next: 3
            },
            {
                text: "Не нужно. (Закрыть чат)",
                next: 100
            },
        ]
    },
    3: {
        text: 'Выберите тему. Этот чат можно закрыть в любой момент кликнув на крестик в верхней части окна или кнопку "Закрыть чат"',
        options: [
            {
                text: "С чего начать обучение?",
                next: 4
            },
            {
                text: "Семинары Доктора Чикурова",
                next: 5
            },
            {
                text: "Стоимость семинаров",
                next: 6
            },
            {
                text: "Онлайн школа",
                next: 7
            },
            {
                text: "Визард Машины",
                next: 8
            },
            {
                text: "Приобрести видео семинаров",
                next: 9
            },
            {
                text: "Гостиницы в шаговой доступности от Школы",
                next: 10
            },
            {
                text: "Книги Доктора Чикурова",
                next: 11
            },
            {
                text: "Магазин товаров БЦ",
                next: 12
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    4: {
        text: 'Обучение в "Школе Доктора Чикурова" следует начинать с семинаров "Постановка Перцепции" и "Базовый семинар по Биологическому Центрированию". На них дается объем знаний необходимый для дальнейшего обучения методике. После прохождения этих семинаров можно выбрать дальнейший вектор в обучении методике. Ознакомьтесь с расписанием чтоб узнать когда состоится следующий очный семинар "Постановка Перцепции".',
        options: [
            {
                text: "Показать все семинары",
                url: "/#seminars"
            },
            {
                text: "Показать семинары Доктора Чикурова",
                url: "/#seminars"
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    5: {
        text: 'Если Вы только начинаете обучение методике "Биологическое Центрирование" прочтите пожалуйста с чего лучше начинать обучение.',
        options: [
            {
                text: "С чего лучше начинать обучение.",
                next: 4
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    6: {
        text: 'Кликните на тему семинара чтоб узнать условия и стоимость.',
        options: [
            {
                text: '"Постановка Перцепции"',
                next: 13
            },
            {
                text: '"Базовый семинар"',
                next: 14
            },
            {
                text: '"Продвинутый семинар"',
                next: 15
            },
            {
                text: '"Эстетическое моделирование лица"',
                next: 16
            },
            {
                text: '"Мягкие мануальные техники"',
                next: 17
            },
            {
                text: '"Лечебные ножи"',
                next: 18
            },
            {
                text: '"Лечебное Tarot базовый" (очный)',
                next: 19
            },
            {
                text: '"Лечебное Tarot продвинутый" (очный)',
                next: 20
            },
            {
                text: '"Коррекция кармических отношений"',
                next: 21
            },
            {
                text: '"MARAKATA — Мастер реальности"',
                next: 22
            },
            {
                text: '"БЦ Тейпирование"',
                next: 23
            },
            {
                text: '"Терапевтическая дефрагментация актуальных и латентных психосоматических паттернов"',
                next: 24
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    7: {
        text: 'Обучаться методике "Биологическое Центрирование" можно удаленно! Каждый из онлайн курсов упакован в специальную учебную платформу. Обучение проходит в течении месяца, под контролем опытного куратора. Вы можете учиться в любое удобное время, не покидая своего дома. Получить больше информации и узнать график начала занятий Вы можете по ссылке ниже.',
        options: [
            {
                text: "Страница Онлайн Школы",
                next: 9
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    8: {
        text: 'Мы активно внедряем современные технологии в методику "Биологическое Центрирование". С 2014 года существует и активно развивается ряд интерактивных веб-проектов призваных улучшить качество жизни человека через коррекцию психосоматических и адаптационных проблем. Подключение и работа в программах сделаны максимально просто, их освоение не вызовает сложностей, а получаеммые эффекты поражают. Выберите одну из программ ниже чтоб узнать о ней больше.',
        options: [
            {
                text: "WizardMachine",
                next: 25
            },
            {
                text: "WizardDuos",
                next: 26
            },
            {
                text: "WizardLovushka",
                next: 27
            },
            {
                text: "TarotMachine",
                next: 28
            },
            {
                text: "Marakata",
                next: 29
            },
            {
                text: "Девяточка",
                next: 30
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    9: {
        text: 'Вы можете приобрести видозаписи прошедших семинаров. Все семинары были записаны в 2018 - 2019 г. Читает Ю.В. Чикуров. Стоимость одного видео - 10 тыс руб. Оплатить можно перечислив деньги на предпринимательский счет. В примечании пишете пример:  «За учебный курс БЦ базовый»',
        options: [
            {
                text: "Список доступных семинаров",
                next: 31
            }
        ]
    },
    10: {
        text: 'Мы не продвигаем ни один из объектов размещения. Эти гостиницы наиболее популярны среди наших учеников и расположены на расстоянии до 500 м. от школы. Но Вы можете выбрать любой другой вариант.',
        options: [
            {
                text: 'Гостиница "Турист"',
                url: "http://www.booking.com/Share-ce0g8j"
            },
            {
                text: 'Гостиница "Байкал"',
                url: "http://www.booking.com/Share-VfsDCK"
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    11: {
        text: 'Большинство книг Доктора Чикурова доступно как в электронном виде, так и в переплете. Все доступные электронные книги можно скачать бесплатно по ссылке ниже. Заказать печатные издания книг с доставкой можно на сайте "shop-bc.com".',
        options: [
            {
                text: "Электронные книги",
                url: "https://chikurov.com/kniga/"
            },
            {
                text: "Печатные издания книг",
                url: "https://shop-bc.com/collection/books"
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    12: {
        text: '"Магазин товаров БЦ". Тут Вы можете найти все необходимые специалисту БЦ инструменты от "флешек" и ножей до Картин и "табличек ЧИ"',
        options: [
            {
                text: '"Магазин товаров БЦ"',
                url: 'https://shop-bc.com/'
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    31: {
        text: 'Вы можете заказать любой из интересных Вам семинаров или задать другой вопрос',
        options: [
            {
                text: "Показать список доступных видеозаписей"
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    13: {
        text: '"Постановка Перцепции". Это тот семинар с которого следует начать изучение методики "Биологическое центрирование". Развитая перцепция является базовым навыком необходимым специалисту. Стоимость участия 20 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    14: {
        text: '"Базовый семинар по Биологическому Центрированию". Основа методики. Перед прохождением этого семинара рекомендуется пройти однодневный семинар "Постановка Перцепции". Стоимость участия 55 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    15: {
        text: '"Продвинутый семинар по Биологическому Центрированию". Основа методики. К семинару допускаются слушатели прошедшие "Базовый семинар по Биологическому Центрированию". Стоимость участия 58 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    16: {
        text: '"Эстетическое моделирование лица". Стоимость участия 55 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    17: {
        text: '"Мягкие мануальные техники". Стоимость участия 55 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    18: {
        text: '"Лечебные ножи". Стоимость участия 20 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    19: {
        text: '"Лечебное Tarot базовый" (очный). Стоимость участия 20 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    20: {
        text: '"Лечебное Tarot продвинутый" (очный). К семинару допускаются слушатели прошедшие семинар "Лечебное Tarot базовый". Стоимость участия 25 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    21: {
        text: '"Коррекция кармических отношений". В подарок дается годовой доступ к проекту "WizardDuos". Стоимость участия 50 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    22: {
        text: '"Мараката — мастер реальности".В стоимость включен комплект органических носителей флюида усиленных золотом и постоянный доступ к интерактивному оцифратору. Стоимость участия 120 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    23: {
        text: '"БЦ Тейпирование".В стоимость включен набор штампов с формулами «Отворение», «Травма» и «Копье» и 1 кинезиотейп. Стоимость участия 25 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    24: {
        text: '"Терапевтическая дефрагментация актуальных и латентных психосоматических паттернов". Участники семинара получают постоянный полный доступ к дефрагментационному порталу braincleaner.ru. Стоимость участия 70 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    25: {
        text: '"Терапевтическая дефрагментация актуальных и латентных психосоматических паттернов". Участники семинара получают постоянный полный доступ к дефрагментационному порталу braincleaner.ru. Стоимость участия 70 000 руб.',
        options: [
            {
                text: "Другой семинар",
                next: 6
            },
            {
                text: "Задать другой вопрос",
                next: 3
            },
            {
                text: "Закрыть чат",
                next: 100
            }
        ]
    },
    100: {
        text: 'Если что — зовите, я рядом!'
    }
};
