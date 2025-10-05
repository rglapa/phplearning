<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="<?= urlIs("/")
                                ? "bg-gray-900 text-white"
                                : "text-gray-300" ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                            <a href="/about" class="<?= urlIs("/about")
                                ? "bg-gray-900 text-white"
                                : "text-gray-300" ?> rounded-md px-3 py-2">About</a>
                            <?php if($_SESSION['user'] ?? false) : ?>
                            <a href="/notes" class="<?= urlIs("/notes")
                                ? "bg-gray-900 text-white"
                                : "text-gray-300" ?> rounded-md px-3 py-2">Notes</a>
                            <?php endif; ?>
                            <a href="/contact" class="<?= urlIs("/contact")
                                ? "bg-gray-900 text-white"
                                : "text-gray-300" ?> rounded-md px-3 py-2">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                                class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <?php echo heroicon('bell', ['width'=> 25, 'stroke-linecap'=> 'round']) ?>
                        </button>

                        <!-- Profile dropdown -->
                        <?php if ($_SESSION['user'] ?? false): ?>
                            <div class="relative ml-3">
                                <button type="button"
                                        class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">

                                    <img class="h-8 w-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                </button>
                            </div>

                            <div class="ml-3">
                                <form method="post" action="/session">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="text-white">Log Out</button>
                                </form>
                            </div>
                        <?php else : ?>
                            <div class="ml-3">
                                <a href="/register" class="<?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                <a href="/login"
                                   class="<?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Log In</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>