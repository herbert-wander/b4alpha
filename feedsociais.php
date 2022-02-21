<?php

    $page_id = 'b4alpha';

    function load_insta_posts($page_id)
    {
        $limit = 2;
        $content = file_get_contents("https://www.instagram.com/$page_id/?__a=1");
        $data = json_decode($content, true);
        $posts = $data['user']['media']['nodes'];
        for ($i = 0; $i < $limit; $i++)
        {
            echo '<div class="feedBoxDesc InstaFix">'
                . '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 0px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.5% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/' . $posts[$i]['code'] . '/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">' . $posts[$i]['caption'] . '</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Be for ALPHA (@b4alpha) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-07-31T20:38:32+00:00">Jul 31, 2017 at 1:38pm PDT</time></p></div></blockquote><script async defer src="//platform.instagram.com/en_US/embeds.js"></script>'
                . '</div>';
        }
    }

    load_insta_posts($page_id);
    
    $page_id = '147455942349389'; 

    function load_face_posts($page_id)
    {
        $limit = 2;
        $content = file_get_contents("https://graph.facebook.com/$page_id/posts?limit=$limit&access_token=654532224755459|gJoUMWm3mX6rzfUmEgFZj8kju20");
        $data = json_decode($content, true);
        $posts = $data['data'];
        for ($i = 0; $i < sizeof($posts); $i++)
        {
            $postID = substr($posts[$i]['id'], 16);
            echo '<div class="feedBoxDesc">'
            . '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fb4alpha%2Fposts%2F' . $postID . '&height=700" width="557" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>'
            . '</div>';
        }
    }
    load_face_posts($page_id);
?>

