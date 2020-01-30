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
        text: 'Я - электронный помощник! Вы впервые тут?',
        options: [
            {
                text: "Да!",
                next: 3
            },
            {
                text: "Нет!",
                next: 4
            }
        ]
    },
    3: {
        text: 'Я помогу Вам освоиться и могу ответить на ряд популярных вопросов',
        options: [
            {
                text: "Хорошо, спасибо!",
                next: 8
            },
            {
                text: "Не нужно. Мне все ясно.",
                next: 4
            }
        ]
    },
    4: {
        text: 'Если еще не читали, рекомендуем прочесть книгу Юрия Валентиновича "Биологическое Центрирование". Скачать электронную версию можно совершенно бесплатно.',
        next: 6
    },
    5: {
        text: 'Выберите тему из предложенного:',
        options: [
            {
                text: "Семинары Доктора Чикурова",
                next: 8
            },
            {
                text: "Онлайн Школа Доктора Чикурова",
                next: 9
            }
        ]
    },
    6: {
        text: 'Ссылка на эту, а так же другие книги Доктора Чикурова ниже. Успехов!',
        next: 7
    },
    7: {
        text: 'Если возникнут вопросы Вы всегда можете задать их администратору. тел: +7 (495) 135-25-48',
        options: [
            {
                text: "Книги Доктора Чикурова",
                url: "https://chikurov.com/kniga/"
            },
            {
                text: "info@chikurov.com",
                url: "mailto:info@chikurov.com"
            }
        ]
    }
};
