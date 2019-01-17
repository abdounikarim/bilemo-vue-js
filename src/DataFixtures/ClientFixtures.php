<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ClientFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $client =  new Client();
        $client->setUsername('sfr');
        $pass = 'pass';
        $password = $this->userPasswordEncoder->encodePassword($client, $pass);
        $client->setPassword($password);
        $client->setRoles($client->getRoles());

        $manager->persist($client);

        $manager->flush();
    }
}
