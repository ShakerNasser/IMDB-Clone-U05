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
            ['title' => 'The Dark Knight', 'description' => 'Batman, Gordon och Harvey Dent inleder ett krig mot kriminaliteten i Gotham City, är det en kriminell som introducerar sig själv som Joker och startar en kamp av kaos.', 'genre' => 'Action', 'release_date' => '2008-07-18', 'trailer_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'image' => 'https://example.com/dark_knight.jpg'],
            ['title' => 'Plane', 'description' => 'En grupp passagerare försöker överleva när ett flygplan blir kaprat av terrorister.', 'genre' => 'Action', 'release_date' => '2023-01-01', 'trailer_url' => 'https://www.youtube.com/watch?v=video2', 'image' => 'https://example.com/plane.jpg'],
            ['title' => 'London has Fallen', 'description' => 'Världens ledare samlas i London för en begravning, men en skoningslös plan avslöjas.', 'genre' => 'Action', 'release_date' => '2016-03-04', 'trailer_url' => 'https://www.youtube.com/watch?v=3AsOdX7NcJs', 'image' => 'https://example.com/london_has_fallen.jpg'],
            ['title' => 'Spirited Away', 'description' => 'En ung flicka hamnar i en värld av gudar, andar och monster och måste hitta en väg tillbaka.', 'genre' => 'Animation', 'release_date' => '2001-07-20', 'trailer_url' => 'https://www.youtube.com/watch?v=ByXuk9QqQkk', 'image' => 'https://example.com/spirited_away.jpg'],
            ['title' => 'Howl\'s Moving', 'description' => 'En ung kvinna blir förvandlad till en gammal kvinna av en förbannelse och söker hjälp.', 'genre' => 'Animation', 'release_date' => '2004-11-20', 'trailer_url' => 'https://www.youtube.com/watch?v=iwROgK94zcM', 'image' => 'https://example.com/howls_moving_castle.jpg'],
            ['title' => 'Porco Rosso', 'description' => 'En pilot kämpar mot luftpirater i Adriatiska havet och försöker återfå sin mänskliga form.', 'genre' => 'Animation', 'release_date' => '1992-07-18', 'trailer_url' => 'https://www.youtube.com/watch?v=awEC-aLDzjs', 'image' => 'https://example.com/porco_rosso.jpg'],
            ['title' => 'Looper', 'description' => 'I en framtid där tidresor är möjliga, upptäcker en Looper att hans framtida själv har skickats tillbaka i tiden för att bli mördad.', 'genre' => 'Action', 'release_date' => '2012-09-28', 'trailer_url' => 'https://www.youtube.com/watch?v=2iQuhsmtfHw', 'image' => 'https://example.com/looper.jpg'],
            ['title' => 'Interstellar', 'description' => 'NASA skickar en grupp forskare och astronauter för att hitta en ny planet för mänskligheten.', 'genre' => 'Sci-Fi', 'release_date' => '2014-11-07', 'trailer_url' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E', 'image' => 'https://example.com/interstellar.jpg'],
            ['title' => 'Inception', 'description' => 'En grupp tjuvar får en sista uppdrag som kan ge dem möjlighet att återfå sina liv.', 'genre' => 'Sci-Fi', 'release_date' => '2010-07-16', 'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0', 'image' => 'https://example.com/inception.jpg'],
            ['title' => 'Halo', 'description' => 'Master Chief, en supersoldat, kämpar mot en främmande ras som hotar att utplåna mänskligheten.', 'genre' => 'Action', 'release_date' => '2022-12-21', 'trailer_url' => 'https://www.youtube.com/watch?v=video10', 'image' => 'https://example.com/halo.jpg'],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}