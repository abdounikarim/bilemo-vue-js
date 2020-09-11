<?php

namespace App\DataFixtures;

use App\Entity\Phone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhoneFixtures extends Fixture
{
    private $models = ['X', 'Xs', 'Xr', 'SE', 'SE2', '7', '8'];

    private $descriptions = [
        //Add three description
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lorem felis, lobortis ut sem vel, laoreet gravida ipsum. Donec egestas turpis condimentum ullamcorper consectetur. Donec sem massa, fermentum imperdiet vestibulum consectetur, sodales nec nulla. Morbi placerat metus sed lacus bibendum, ac finibus est pharetra. Phasellus finibus purus a lacus semper scelerisque. Donec eget gravida lacus. Cras sollicitudin luctus metus sit amet venenatis. Vivamus tellus augue, rutrum sit amet ornare sit amet, eleifend et augue. Cras erat nisl, ultrices a sollicitudin et, posuere id sapien. Quisque lobortis dapibus neque, cursus rutrum mi condimentum in. Curabitur facilisis sapien dolor, non finibus orci efficitur sed. Aenean tristique finibus risus, sollicitudin facilisis arcu luctus id. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'Donec non sapien magna. Vivamus interdum aliquam lacinia. Vivamus lobortis, justo euismod tincidunt convallis, massa purus aliquam lectus, nec pretium ex libero nec diam. Vestibulum malesuada ipsum vitae turpis faucibus cursus. Cras facilisis nec sem id varius. Donec non molestie diam. Mauris tellus ante, mollis a cursus quis, interdum et elit. Quisque vitae eleifend nisl. Nam a nisl ullamcorper, facilisis justo eget, fringilla massa.',
        'Fusce vulputate ultricies ante sit amet hendrerit. Duis blandit sit amet libero ut sagittis. Nullam id nisi sit amet nunc lobortis volutpat eget ac lorem. Nulla imperdiet ligula ut augue tempor, mattis volutpat leo bibendum. Phasellus pulvinar, risus quis vehicula pretium, metus ante malesuada libero, ut mollis ex odio eu quam. Etiam fringilla, dolor et aliquet cursus, ligula sem bibendum leo, in fermentum massa urna nec urna. Cras id ex nunc. Sed ipsum augue, dictum vel elit quis, finibus ultricies orci. In hac habitasse platea dictumst. Integer ac mi lorem. Nulla mattis lacinia est a facilisis. Quisque vulputate rutrum tellus, et aliquam libero lobortis ut. Vivamus metus urna, tempus vel luctus quis, eleifend a libero. Fusce mollis a lacus id iaculis. Maecenas elementum odio ut scelerisque eleifend.',
    ];

    private $colors = ['black', 'blue', 'red', 'green', 'yellow', 'white'];

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <=20; $i++) {
            $phone = new Phone();
            $phone->setName('iPhone '.$this->models[random_int(0, 6)].' '.uniqid());
            $phone->setPrice(random_int(200, 1000));
            $phone->setDescription($this->descriptions[random_int(0, 2)]);
            $phone->setColor($this->colors[random_int(0, 5)]);
            $manager->persist($phone);
        }

        $manager->flush();
    }
}
