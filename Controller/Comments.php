<?php 
require('Model/database.php');

// function time_elapsed_string($datetime, $full = false) {
//     $now = new DateTime;
//     $ago = new DateTime($datetime);
//     $diff = $now->diff($ago);
//     $diff->w = floor($diff->d / 7);
//     $diff->d -= $diff->w * 7;
//     $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
//     foreach ($string as $k => &$v) {
//         if ($diff->$k) {
//             $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
//         } else {
//             unset($string[$k]);
//         }
//     }
//     if (!$full) $string = array_slice($string, 0, 1);
//     return $string ? implode(', ', $string) . ' ago' : 'just now';
// }

function show_comments($comments, $parent_id = -1) {
    $html = '';
    if ($parent_id != -1) {
        // If the comments are replies sort them by the "submit_date" column
        array_multisort(array_column($comments, 'created_at'), SORT_ASC, $comments);
    }
}

function show_write_comment_form($parent_id = -1) {
    $html = '
    <div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 h-full overflow-x-scroll antialiased">
        <div class="bg-white w-full shadow rounded-lg p-5" data-comment-id=" ' .$parent_id . '">
        <form method = "POST" class="w-full max-w-sm">
            <div class="flex items-center border-b border-teal-500 py-2">
            <input name="parent_id" type="hidden" value="' . $parent_id . '">
            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Votre commentaire" aria-label="Full name">
            <input type="submit" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg" name="insert" value="submit">
        </div> 
      </div>
    </form>  
    </div>
    ';
    return $html;
}

?>