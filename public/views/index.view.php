<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
        <p class="font-roboto">Welcome to the Dashboard</p>
        Something is not right.
        </div>
        <div id="row1" class="flex space-x-2 mt-1">
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
        </div>
    </div>
    
</main>

<?php require base_path('views/partials/footer.php'); ?>