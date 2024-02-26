<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = [
            ['title' => 'Plane', 'description' => ' Plane', 'genre' => 'Action', 'release_date' => '2023-01-01', 'trailer_url' => 'https://www.youtube.com/watch?v=video2', 'image' => 'https://example.com/plane.jpg'],
            ['title' => 'London has Fallen', 'description' => 'London has Fallen', 'genre' => 'Action', 'release_date' => '2016-03-04', 'trailer_url' => 'https://www.youtube.com/watch?v=3AsOdX7NcJs', 'image' => 'https://example.com/london_has_fallen.jpg'],
            ['title' => 'Spirited Away', 'description' => 'Spirited Away', 'genre' => 'Animation', 'release_date' => '2001-07-20', 'trailer_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk', 'image' => 'https://example.com/spirited_away.jpg'],
            ['title' => 'Howl\'s Moving Castle', 'description' => 'Howl\'s Moving Castle', 'genre' => 'Animation', 'release_date' => '2004-11-20', 'trailer_url' => 'https://www.youtube.com/watch?v=iwROgK94zcM', 'image' => 'https://example.com/howls_moving_castle.jpg'],
            ['title' => 'Porco Rosso', 'description' => 'Porco Rosso', 'genre' => 'Animation', 'release_date' => '1992-07-18', 'trailer_url' => 'https://www.youtube.com/watch?v=awEC-aLDzjs', 'image' => 'https://example.com/porco_rosso.jpg'],
            ['title' => 'Looper', 'description' => 'Looper', 'genre' => 'Action', 'release_date' => '2012-09-28', 'trailer_url' => 'https://www.youtube.com/watch?v=2iQuhsmtfHw', 'image' => 'https://example.com/looper.jpg'],
            ['title' => 'Interstellar', 'description' => 'Interstellar', 'genre' => 'Sci-Fi', 'release_date' => '2014-11-07', 'trailer_url' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E', 'image' => 'https://example.com/interstellar.jpg'],
            ['title' => 'Inception', 'description' => 'Inception', 'genre' => 'Sci-Fi', 'release_date' => '2010-07-16', 'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0', 'image' => 'https://example.com/inception.jpg'],
            ['title' => 'Halo', 'description' => 'Halo', 'genre' => 'Action', 'release_date' => '2022-12-21', 'trailer_url' => 'https://www.youtube.com/watch?v=video10', 'image' => 'https://example.com/halo.jpg'],
            ['title' => 'The Dark Knight', 'description' => 'för The Dark Knight', 'genre' => 'Action', 'release_date' => '2008-07-18', 'trailer_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'image' => 'https://example.com/dark_knight.jpg'],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}