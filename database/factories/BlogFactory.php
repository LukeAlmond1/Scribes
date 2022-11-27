<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $views = rand(2000, 1000000);
        $randomParaLength = rand(15, 20);
        $randomSummaryLength = rand(6, 12);
        $randomTitleLength = rand(1, 4);

        $topics = [
            ['topic' => '🏋🏼‍♀️ Fitness', 'cover' => 'sports'],
            ['topic' => '🏛️ Philosophy', 'cover' => 'nature'],
            ['topic' => '☯️ Spirituality', 'cover' => 'nature'],
            ['topic' => '⚽ Sports', 'cover' => 'sports'],
            ['topic' => '⚖️ Politics', 'cover' => 'business'],
            ['topic' => '🌱 Self Development', 'cover' => 'people'],
            ['topic' => '🎵 Music', 'cover' => 'nightlife'],
            ['topic' => '🏦 Finance', 'cover' => 'business']
        ];

        $randomTopic = $topics[rand(0, count($topics) - 1)];

        return [
            'title' => $this->faker->sentence($randomTitleLength),
            'cover' => 'https://loremflickr.com/640/480/' . $randomTopic["cover"] . '?random=' . rand(1, 100),
            'summary' => $this->faker->sentence($randomSummaryLength),
            'body' => $this->faker->paragraph($randomParaLength),
            'mins_to_read' => $randomParaLength * 0.5,
            'author' => rand(1, 100),
            'views' => $views,
            'shares' => $views * rand(10, 60) / 100,
            'topic' => $randomTopic["topic"],
            'published' => $this->faker->dateTimeThisYear('+2 months')
        ];
    }
}
