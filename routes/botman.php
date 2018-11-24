<?php
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Log;

$botman = resolve('botman');

$botman->hears('/events', function ($bot) {
   $bot->reply('Lagi dibikin gan, tapi entah kapan selesainya. sabar dulu ya!!!');
});

$botman->on('new_chat_members', function ($payload, $bot) {
    $users = collect($payload)->map(function ($user) {
       return !empty($user['username']) ? '@'.$user['username'] : $user['first_name'];
    })->toArray();
    $bot->reply('Hi ' . implode(", ", $users) .', Selamat bergabung di grup SurabayaDev. Kenalan dulu dong???!!!');
});

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
