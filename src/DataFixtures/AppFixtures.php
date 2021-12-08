<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Series;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $serie1 = new Series();
        $category1 = new Categories();

        $serie1->setNom('Harry Potter')
            ->setSynopsis('孤児の少年ハリー・ポッターのもとに、ホグワーツ魔法魔術学校への入学を許可する手紙が舞い込む。彼の両親は有名な魔法使いで、彼もその血を受け継いでいたことが判明。ハリーは無事入学し友達もできるが、やがて学校に隠された驚くべき秘密に気づく。')
            ->setPoster('harrypotter.jpg');
            //->setGenre('Animation');

        $category1->setNom('Adventure');
        $serie1->setCategories($category1);

        $manager->persist($serie1);
        $manager->persist($category1);

        $serie2 = new Series();
        $category2 = new Categories();

        $serie2->setNom('Demon Slayer')
            ->setSynopsis("家族を鬼に殺され、唯一生き残った妹も鬼に変えられてしまった少年・竈門炭治郎が、妹を人間に戻すため鬼殺隊に入隊して壮絶な戦いを繰り広げる。蝶屋敷での訓練で全集中・常中を会得した炭治郎たちは、新たな指令を受けて「無限列車」に乗り込む。その列車では短期間のうちに40人以上の行方不明者が出ており、送り込まれた剣士たちも全員消息を絶っていた。炭治郎たち一行は、鬼殺隊最高位の剣士柱のひとりである炎柱の煉獄杏寿郎と共に、列車に潜む鬼と対峙する。")
            ->setPoster('kimetsu.jpg');
            //->setGenre('Animation');

        $category2->setNom('Animation');
        $serie2->setCategories($category2);

        $manager->persist($serie2);
        $manager->persist($category2);

        $manager->flush();

    }
}
