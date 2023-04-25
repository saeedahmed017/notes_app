<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;
use Illuminate\Support\Facades\Http;

class QuotesSeeder extends Seeder
{
    public function run()
    {
       
        $quotes = [
            [
                'text' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
                'author' => 'Nelson Mandela'
            ],
            [
                'text' => 'The way to get started is to quit talking and begin doing.',
                'author' => 'Walt Disney'
            ],
            [
                'text' => 'If you want to live a happy life, tie it to a goal, not to people or things.',
                'author' => 'Albert Einstein'
            ],
            [
                'text' => 'In the end, it\'s not the years in your life that count. It\'s the life in your years.',
                'author' => 'Abraham Lincoln'
            ],
            [
                'text' => 'The only way to do great work is to love what you do. If you haven\'t found it yet, keep looking. Don\'t settle.',
                'author' => 'Steve Jobs'
            ],
            [
                'text' => 'I have not failed. I\'ve just found 10,000 ways that won\'t work.',
                'author' => 'Thomas Edison'
            ],
            [
                'text' => 'If you don\'t stand for something, you will fall for anything.',
                'author' => 'Malcolm X'
            ],
            [
                'text' => 'Don\'t let yesterday take up too much of today.',
                'author' => 'Will Rogers'
            ],
            [
                'text' => 'If you can dream it, you can achieve it.',
                'author' => 'Zig Ziglar'
            ],
            [
                'text' => 'You miss 100% of the shots you don\'t take.',
                'author' => 'Wayne Gretzky'
            ],
            [
                'text' => 'Life is 10% what happens to us and 90% how we react to it.',
                'author' => 'Charles R. Swindoll'
            ],
            [
                'text' => 'Believe you can and you\'re halfway there.',
                'author' => 'Theodore Roosevelt'
            ],
            [
                'text' => 'I attribute my success to this: I never gave or took any excuse.',
                'author' => 'Florence Nightingale'
            ],
            [
                'text' => 'Do not go where the path may lead, go instead where there is no path and leave a trail.',
                'author' => 'Ralph Waldo Emerson'
            ],
            [
                'text' => 'The most difficult thing is the decision to act, the rest is merely tenacity.',
                'author' => 'Amelia Earhart'
            ],
            [
                'text' => 'The only person you are destined to become is the person you decide to be.',
                'author' => 'Ralph Waldo Emerson'
            ],
            [
                'text' => 'It does not matter how slowly you go as long as you do not stop.',
                'author' => 'Confucius'
            ],
            [
                'text' => 'Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.',
                'author' => 'Thomas A. Edison'
            ],
            [
                'text' => 'Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.',
                'author' => 'Christian D. Larson'
            ],
            [
                'text' => 'I have not failed. I\'ve just found 10,000 ways that won\'t work.',
                'author' => 'Thomas Edison'
            ],
            [
                'text' => 'The only way to do great work is to love what you do. If you haven\'t found it yet, keep looking. Don\'t settle.',
                'author' => 'Steve Jobs'
            ],
            [
                'text' => 'Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.',
                'author' => 'Christian D. Larson'
            ],
            [
                'text' => 'Success is not final, failure is not fatal: It is the courage to continue that counts.',
                'author' => 'Winston Churchill'
            ],
            [
                'text' => 'You miss 100% of the shots you don\'t take.',
                'author' => 'Wayne Gretzky'
            ],
            [
                'text' => 'If you look at what you have in life, you\'ll always have more. If you look at what you don\'t have in life, you\'ll never have enough.',
                'author' => 'Oprah Winfrey'
            ],
            [
                'text' => 'Do not go where the path may lead, go instead where there is no path and leave a trail.',
                'author' => 'Ralph Waldo Emerson'
            ],
            [
                'text' => 'Your time is limited, don\'t waste it living someone else\'s life.',
                'author' => 'Steve Jobs'
            ],
            [
                'text' => 'The only thing we have to fear is fear itself.',
                'author' => 'Franklin D. Roosevelt'
            ],
            [
                'text' => 'Challenges are what make life interesting and overcoming them is what makes life meaningful.',
                'author' => 'Joshua J. Marine'
            ],
            [
                'text' => 'The best way to predict the future is to invent it.',
                'author' => 'Alan Kay'
            ],
            [
                'text' => 'The only true wisdom is in knowing you know nothing.',
                'author' => 'Socrates'
            ],
            [
                'text' => 'Happiness is not something ready made. It comes from your own actions.',
                'author' => 'Dalai Lama XIV'
            ],
            [
                'text' => 'If you want to achieve greatness stop asking for permission.',
                'author' => 'Unknown'
            ],
            [
                'text' => 'Be yourself; everyone else is already taken.',
                'author' => 'Oscar Wilde'
            ],
            [
                'text' => 'We can\'t help everyone, but everyone can help someone.',
                'author' => 'Ronald Reagan'
            ],
            [
                'text' => 'It does not matter how slowly you go as long as you do not stop.',
                'author' => 'Confucius'
            ],
            [
                'text' => 'You don\'t have to be great to start, but you have to start to be great.',
                'author' => 'Zig Ziglar'
            ]
        ];

        foreach ($quotes as $quote) {
            Quote::create($quote);
        }
        



        // $response = Http::withHeaders([
        //     'X-TheySaidSo-Api-Secret' => 'YOUR_API_KEY'
        // ])->get('https://quotes.rest/qod?category=inspire');


        // if ($response->ok()) {
        //     $quotes = $response->json('contents.quotes.0');

        //     foreach ($quotes as $quote) {
        //         Quote::create([
        //             'text' => $quote['quote'],
        //             'author' => $quote['author']
        //         ]);
        //     }
        // }
    }
}