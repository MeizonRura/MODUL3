<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Mengarahkan ke URL tertentu dalam aplikasi
            ->assertSee('Modul 3') ////Memastikan bahwa teks modul 3 terdapat pada halaman
            ->clickLink('Log in') //Menekan tautan di browser
            ->assertPathIs('/login') //Memastikan path dari halaman yang dijalankan
            ->type('email','admin@gmail.com') //Berinteraksi dengan elemen input
            ->type('password','password') //Berinteraksi dengan elemen input
            ->press('LOG IN') //Menekan elemen tombol pada halaman
            ->assertPathIs('/dashboard') //Memastikan path dari halaman yang dijalankan
            ->clickLink('Notes') //Menekan tautan di browser
            ->clickLink('Create Note') //Menekan tautan di browser
            ->assertPathIs('/create-note') //Memastikan path dari halaman yang dijalankan
            ->type('title','Aku Cinta sisfo') //Berinteraksi dengan elemen input
            ->type('description','buku buat calom mahasiswa sistem informasi') //Berinteraksi dengan elemen input
            ->press('CREATE'); //Menekan elemen tombol pada halaman
        });
    }
}
