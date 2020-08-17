<?php

namespace Tests\Feature\Gallery;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ImageTest extends TestCase
{
    use RefreshDatabase;

    protected const BASE_URL = '/api/images';

    /**
     * @covers \App\Bundles\Gallery\Http\Controllers\ImageController::showOfAlbum
     */
    public function testShowOfAlbum(): void
    {
        $count = 15;

        /** @var Album $album */
        $album = factory(Album::class)->create();

        $images = factory(Image::class, $count)->create();

        $url = $this->url('of-album/'. $album->id);

        $response = $this->getJson($url)->assertOk()->decodeResponseJson();

        //

        self::assertArrayHasKey('data', $response);
        self::assertEmpty($response['data']);

        //

        $album->images()->attach($images);

        $this->getJson($url)
            ->assertOk()
            ->assertJsonCount($count, 'data');
    }
}
