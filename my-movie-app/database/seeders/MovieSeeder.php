<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            // Insert 25 dummy movies into the database with title, description, genre, rating, and image, with the images pathing to the public folder.
            [
                'title' => 'The Silent Horizon',
                'description' => 'A crew of astronauts ventures beyond the solar system in search of new life but discovers a dangerous anomaly.',
                'genre' => 'Sci-Fi',
                'rating' => 4.1,
                'image' => 'images/silent_horizon.jpg'
            ],

            [
                'title' => 'Shadows of Tomorrow',
                'description' => 'A detective uncovers a conspiracy that could alter the future of humanity.',
                'genre' => 'Thriller',
                'rating' => 3.8,
                'image' => 'images/shadows_of_tomorrow.jpg',
            ],
            [
                'title' => 'Whispers in the Dark',
                'description' => 'A small-town journalist investigates strange events after a series of disappearances.',
                'genre' => 'Mystery',
                'rating' => 3.6,
                'image' => 'images/whispers_in_the_dark.jpg',
            ],
            [
                'title' => 'Fallen Empire',
                'description' => 'An exiled warrior returns to reclaim his kingdom from a ruthless tyrant.',
                'genre' => 'Action',
                'rating' => 4.0,
                'image' => 'images/the_fallen_empire.jpg',
            ],
            [
                'title' => 'Dreamscape',
                'description' => 'A young woman discovers she can enter other people’s dreams and manipulate their fears.',
                'genre' => 'Fantasy',
                'rating' => 3.9,
                'image' => 'images/dreamscape.jpg',
            ],
            [
                'title' => 'Neon Skies',
                'description' => 'In a futuristic city, a hacker fights against a corrupt mega-corporation.',
                'genre' => 'Cyberpunk',
                'rating' => 4.3,
                'image' => 'images/neon_skies.jpg',
            ],
            [
                'title' => 'Winter’s End',
                'description' => 'A family struggles to survive in a world trapped in an endless winter.',
                'genre' => 'Drama',
                'rating' => 3.6,
                'image' => 'images/winters_end.jpg',
            ],
            [
                'title' => 'The Last Melody',
                'description' => 'A pianist with a terminal illness composes his final masterpiece.',
                'genre' => 'Drama',
                'rating' => 4.2,
                'image' => 'images/the_last_melody.jpg',
            ],
            [
                'title' => 'Titan’s Wrath',
                'description' => 'Scientists awaken an ancient creature deep beneath the ocean.',
                'genre' => 'Horror',
                'rating' => 3.5,
                'image' => 'images/titans_wrath.jpg',
            ],
            [
                'title' => 'Celestial Tears',
                'description' => 'A love story unfolds between an astronaut and a scientist as Earth faces destruction.',
                'genre' => 'Romance',
                'rating' => 4.2,
                'image' => 'images/celestial_tears.jpg',
            ],
            [
                'title' => 'Broken Chains',
                'description' => 'An escaped convict seeks redemption while being hunted by the law.',
                'genre' => 'Drama',
                'rating' => 3.6,
                'image' => 'images/broken_chains.jpg',
            ],
            [
                'title' => 'Ashes of War',
                'description' => 'Soldiers struggle with loyalty and betrayal in the aftermath of a civil war.',
                'genre' => 'War',
                'rating' => 3.9,
                'image' => 'images/ashes_of_war.png',
            ],
            [
                'title' => 'Emerald Dawn',
                'description' => 'A young farmer discovers he holds the key to saving his dying world.',
                'genre' => 'Fantasy',
                'rating' => 4.0,
                'image' => 'images/emerald_dawn.jpg',
            ],
            [
                'title' => 'Savage Earth',
                'description' => 'A documentary-style thriller about humanity’s fight for survival in a collapsing ecosystem.',
                'genre' => 'Sci-Fi',
                'rating' => 4.0,
                'image' => 'images/savage_earth.jpg',
            ],
            [
                'title' => 'The Glass City',
                'description' => 'An investigative journalist uncovers dark secrets in a glittering metropolis.',
                'genre' => 'Crime',
                'rating' => 3.7,
                'image' => 'images/glass_city.jpg',
            ],
            [
                'title' => 'Midnight Mirage',
                'description' => 'A detective is haunted by visions that blur the line between reality and illusion.',
                'genre' => 'Mystery',
                'rating' => 3.8,
                'image' => 'images/midnight_mirage.jpg',
            ],
            [
                'title' => 'Blood Moon',
                'description' => 'A small town is terrorized by a series of supernatural events tied to the lunar cycle.',
                'genre' => 'Horror',
                'rating' => 3.4,
                'image' => 'images/blood_moon.jpg',
            ],
            [
                'title' => 'Eternal Echoes',
                'description' => 'Two lovers are reincarnated across centuries, struggling to find each other again.',
                'genre' => 'Romance',
                'rating' => 3.9,
                'image' => 'images/eternal_echoes.jpg',
            ],
            [
                'title' => 'Starlight Rebellion',
                'description' => 'A group of rebels rises against a galactic empire.',
                'genre' => 'Sci-Fi',
                'rating' => 4.3,
                'image' => 'images/starlight_rebellion.jpg',
            ],
            [
                'title' => 'Echo Chamber',
                'description' => 'A group of strangers trapped in a mysterious building must uncover why they were chosen.',
                'genre' => 'Mystery',
                'rating' => 3.6,
                'image' => 'images/echo_chamber.jpg',
            ],
            [
                'title' => 'Iron Fang',
                'description' => 'A retired soldier trains villagers to defend against raiders.',
                'genre' => 'Action',
                'rating' => 3.5,
                'image' => 'images/iron_fang.jpg',
            ],
            [
                'title' => 'Neptune Rising',
                'description' => 'Explorers uncover an ancient civilization beneath the waves.',
                'genre' => 'Adventure',
                'rating' => 4.1,
                'image' => 'images/neptune_rising.jpg',
            ],
            [
                'title' => 'The Forgotten Code',
                'description' => 'A cryptographer races against time to stop a cyber-attack.',
                'genre' => 'Thriller',
                'rating' => 3.8,
                'image' => 'images/the_forgotten_code.jpg',
            ],
            [
                'title' => 'The Painted Veil',
                'description' => 'An artist loses herself in a surreal world where her paintings come alive.',
                'genre' => 'Fantasy',
                'rating' => 3.7,
                'image' => 'images/the_painted_veil.jpg',
            ],
            [
                'title' => 'Lunar Ascent',
                'description' => 'The first human colony on the moon faces sabotage from within.',
                'genre' => 'Sci-Fi',
                'rating' => 4.2,
                'image' => 'images/lunar_ascent.jpg',
            ],
        ]);
    }
}
