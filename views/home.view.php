<?php loadPartial("head"); ?>

<?php loadPartial("navbar"); ?>

<?php loadPartial("showcase-search"); ?>

<?php loadPartial("top-banner"); ?>

<!-- 实习列表 -->
<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">最新实习</div>
        <!-- 实习列表具体内容，根据需要自行调整 -->

        <!-- 实习列表 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

            <?php foreach ($listings as $listing) : ?>

            <div class="rounded-lg shadow-md bg-white">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
                    <p class="text-gray-700 text-lg mt-2">
                        <?= $listing->description ?>
                    </p>
                    <ul class="my-4 bg-gray-100 p-4 rounded">
                        <li class="mb-2"><strong>薪资:</strong> <?= $listing->salary ?></li>
                        <li class="mb-2"><strong>位置:</strong> <?= $listing->province ?><?= $listing->city ?></li>
                        <li class="mb-2"><strong>标签:</strong> <?= $listing->tags ?></li>
                    </ul>
                    <a href="/listing?id=<?= $listing->id ?>"
                        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        详情
                    </a>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
        <a href="listings" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i>
            查看所有实习
        </a>
</section>

<?php loadPartial("bottom-banner"); ?>

<?php loadPartial("footer") ?>