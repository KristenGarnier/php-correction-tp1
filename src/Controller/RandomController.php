<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RandomController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        $body = ['eye','tongue','nose','brain','face',"forehead", "tooth", "throat", "eyelash", "breast", "armpit", "arm", "stomach", "belly-button", "thigh", "leg", "shin", "pinky", "finger", "knee", "hip", "ear", "chin", "toe", "groin", "back", "toenail", "fist", "tongue", "foot", "eye", "abdomen", "heel", "elbow", "lung", "jaw", "nostril"];
        $adj1 = ['uglier','fouler','smellier','nastier','slimier','more offensive','more loathsome','more rotten','yuckier','more vile','more horrible','more revolting','more unpleasant','more repellant','more sickening','more putrid','grosser','more nauseating','stinkier','despicable','more squalid','more abhorrent','more disgusting','cruddier','more grody','sloppier'];
        $anim = ['giraffe','worthog','ox','goat','pig','Aardwolf','Afghan','Hound','Albatross','Alligator','Alpaca','Anaconda','Angelfish','Anglerfish','Chimpanzee','Chinchilla','Chipmunk','Clam','Clownfish','Cobra','Cockroach','Cod','Collie','Condor','Constrictor','Damselfly','Deer','Dingo','Dinosaur','Dog','Dolphin','Donkey','Dormouse','Dove','Ermine','Falcon','Ferret','Finch','Firefly','Fish','Flamingo','Flea','Fly','Flyingfish','Fowl','Fox','Frog','Fruitfly','Bat','Gazelle','Gecko','Gerbil','Gibbon','Guanaco','Guineafowl','Giraffe','Golden Retriever','Goldfinch','Goldfish','Goose','Jellyfish','Kangaroo','Kingfisher','Kiwi','Koala','Koi','Komodo dragon','Krill','Labrador','Retriever','Ladybug','Lamprey','Lark','Leech','Lemming','Lemur','Leopard','Mammoth','Manta','Ray','Marmoset','Marmot','Opossum','Orangutan','Orca','Ostrich','Otter','Owl','Pelican','Penguin','Perch','Puma','Yak','Zebra'];
        $anib = ['rump','snout','flank','hoof','tooth','tail','fur','leg','fang'];
        $insult = 'Your ' . $body[rand(0, count($body) -1 )] . ' is ' . $adj1[rand(0, count($adj1) -1 )] . ' than a ' . $anim[rand(0, count($anim) -1 )] . "'s " . $anib[rand(0, count($anib) -1)] . '!';
        return $this->render('homepage.html.twig', [
            'title' => $insult
        ]);
    }

    /**
     * @Route("/test", name="nothomepage")
     **/
    public function nothomepage() {
        return $this->render('homepage.html.twig', [
            'title' => 'This is not homepage'
        ]);
    }

    /**
     * @Route("/api/")
     */
    public function api() {
        $body = ['eye','tongue','nose','brain','face',"forehead", "tooth", "throat", "eyelash", "breast", "armpit", "arm", "stomach", "belly-button", "thigh", "leg", "shin", "pinky", "finger", "knee", "hip", "ear", "chin", "toe", "groin", "back", "toenail", "fist", "tongue", "foot", "eye", "abdomen", "heel", "elbow", "lung", "jaw", "nostril"];
        $adj1 = ['uglier','fouler','smellier','nastier','slimier','more offensive','more loathsome','more rotten','yuckier','more vile','more horrible','more revolting','more unpleasant','more repellant','more sickening','more putrid','grosser','more nauseating','stinkier','despicable','more squalid','more abhorrent','more disgusting','cruddier','more grody','sloppier'];
        $anim = ['giraffe','worthog','ox','goat','pig','Aardwolf','Afghan','Hound','Albatross','Alligator','Alpaca','Anaconda','Angelfish','Anglerfish','Chimpanzee','Chinchilla','Chipmunk','Clam','Clownfish','Cobra','Cockroach','Cod','Collie','Condor','Constrictor','Damselfly','Deer','Dingo','Dinosaur','Dog','Dolphin','Donkey','Dormouse','Dove','Ermine','Falcon','Ferret','Finch','Firefly','Fish','Flamingo','Flea','Fly','Flyingfish','Fowl','Fox','Frog','Fruitfly','Bat','Gazelle','Gecko','Gerbil','Gibbon','Guanaco','Guineafowl','Giraffe','Golden Retriever','Goldfinch','Goldfish','Goose','Jellyfish','Kangaroo','Kingfisher','Kiwi','Koala','Koi','Komodo dragon','Krill','Labrador','Retriever','Ladybug','Lamprey','Lark','Leech','Lemming','Lemur','Leopard','Mammoth','Manta','Ray','Marmoset','Marmot','Opossum','Orangutan','Orca','Ostrich','Otter','Owl','Pelican','Penguin','Perch','Puma','Yak','Zebra'];
        $anib = ['rump','snout','flank','hoof','tooth','tail','fur','leg','fang'];
        $insult = 'Your ' . $body[rand(0, count($body) -1 )] . ' is ' . $adj1[rand(0, count($adj1) -1 )] . ' than a ' . $anim[rand(0, count($anim) -1)] . "'s " . $anib[rand(0, count($anib) -1)] . '!';
        return new  JsonResponse([
            'insult' => $insult
        ]);
    }
}