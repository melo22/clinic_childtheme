<?php

get_header();
?>

<section class="section mainsection">
 <div class="container mainmsg">
    <div class="item">    
    
    <h2 class="h2">見出し</h2>
    <p>テキストテキストテキストテキストテキストテキスト</p>
            
        
        </div>
</div>

<div class="container submsg">
     

    <div class="item">
        
    <h2 class="h2">見出し</h2>
    <p>テキストテキストテキストテキストテキストテキスト</p> 
        
        
    </div>

    <div class="item">
        
    <h2 class="h2">見出し</h2>
    <p>テキストテキストテキストテキストテキストテキスト</p> 
    </div>
</div>
</section>

<section class="section intro">
    <div class="container introitem">
        <div class="item">
            <h2 class="h2">見出し</h2>
            <img src="https://placehold.jp/350x350.png" alt="特徴">
            <p>テキストテキストテキストテキストテキストテキスト</p>
            <!-- <span class="more"><a href="#">詳細をみる</a></span> -->
        </div>

        <div class="item">
            <h2 class="h2">見出し</h2>
            <img src="https://placehold.jp/350x350.png" alt="特徴">
            <p>テキストテキストテキストテキストテキストテキスト</p>
            <!-- <span class="more"><a href="#">詳細をみる</a></span> -->
        </div>
        <div class="item">
            <h2 class="h2">見出し</h2>
            <img src="https://placehold.jp/350x350.png" alt="特徴">
            <p>テキストテキストテキストテキストテキストテキスト</p>
            <!-- <span class="more"><a href="#">詳細をみる</a></span> -->
        </div>
    </div>
</section>

<section class="section aboutsec">
<div class="container newsaccess">
    <div class="item">    
    <h2 class="h2">お知らせ</h2>
            <?php query_posts( 'posts_per_page=5' ); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <!-- 投稿のタイトルとパーマリンクを表示 -->
                <article style="border-bottom: 1px solid #dedada;">
                    <time datetime="<?php the_time('Y-m-d H:i'); ?>" style="font-size:0.8em;color:gray;"><?php the_time('Y-m-d'); ?></time>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </article>
                <!-- 投稿の本文をdiv内に表示 -->
                <!-- <div class="entry"> -->
                <?php //the_content(); ?>
                <!-- </div> -->
                <?php endwhile; ?>
        </div>

         <div class="item">
             <h2 class="h2">アクセス</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1230.1736044961444!2d139.69963392211378!3d35.68969857941365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1579353626160!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
         </div>
</div>
 </section>

 



<?php
get_footer();
?>