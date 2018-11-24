<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/events', function ($bot) {
   $bot->reply('Lagi dibikin gan, tapi entah kapan selesainya. sabar dulu ya!!!');
});

$botman->on('new_chat_members', function ($payload, $bot) {
    $user = $bot->getUser();
    $name = $user->getUsername() ? '@'.$user->getUsername() : $user->getFirstName();
    $bot->reply('Hi ' . $name .', Selamat bergabung di grup SurabayaDev. Kenalan dulu dong???!!!');
});

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
