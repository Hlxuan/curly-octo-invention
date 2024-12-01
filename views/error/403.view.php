<?php loadPartial("head"); ?>

<?php loadPartial("navbar"); ?>

<?php loadPartial("top-banner"); ?>

<!-- 错误信息 -->
<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">403错误</div>
        <p class="text-center text-2xl mb-4">
            你没有权限访问此页面！
        </p>
    </div>
</section>

<?php loadPartial("footer") ?>