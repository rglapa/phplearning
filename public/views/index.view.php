<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
        <p class="font-roboto">Welcome to the Dashboard</p>
        Something is not right.
        </div>
        <div id="row1" class="grid grid-cols-4 gap-4 place-items-center mt-3">
            <div class="box">
            <a href="/AddClass" class="hover:text-blue-500">Add Class page</a>
            </div>
            <div class="box">
                <a href="/Ajax" class="hover:text-blue-500">Ajax Page</a>
            </div>
            <div class="box">
                <a href="/Appending" class="linkC">Appending</a>
            </div>
            <div class="box">
                <a href="/Chaining" class="linkC">Chaining</a>
            </div>
            <div class="box">
                <a href="/Descendants" class="linkC">Descendants</a>
            </div>
            <div class="box">
                <a href="/Dimensions" class="linkC">Dimensions</a>
            </div>
            <div class="box">
                <a href="/filtering" class="linkC">Filtering</a>
            </div>
            <div class="box">
                <a href="/finding" class="linkC">Finding</a>
            </div>
            <div class="box">
                <a href="/GetPost" class="linkC">GetPost</a>
            </div>
        </div>
    </div>
    
</main>

<?php require base_path('views/partials/footer.php'); ?>