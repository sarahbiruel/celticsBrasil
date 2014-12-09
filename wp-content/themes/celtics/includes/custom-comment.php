<?php
/**
 * Alternative Comments Function
 * @package Celtis
 * @version 0.1.0
 * @author Sarah Biruel [@Mamweb]
 * Contributor: Afonso Sánchez Uzábal [@Voragine]
 *
 */

// comprovamos se a função existe
if ( ! function_exists( 'custom_comment' ) ) :

  function custom_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    // no caso do comentário não ser humano
    switch ( $comment->comment_type ) :
      case 'pingback' :
      case 'trackback' :

        // código HTML para pings...

    break;
    // no caso do comentário ser humano
      default :

        // se o comentário estiver pendente de aprovação
        if ($comment->comment_approved == '0') {
           // mensagem e código html para comentários pendentes de aprovação

        // se o comentário foi aprovado
        } else {
        ?>
            <li class="comment">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="picture-thumb">
                                    <?php echo get_avatar($post->post_author, 70 ); ?>
                                </div>
                            </div><!-- end col 2 -->

                            <div class="col-md-10">
                                <div class="comment-text">
                                    <div class="comment-head">
                                        <span><?php comment_author(); ?></span>  | 
                                        <time><?php comment_date() ?> | <?php comment_time() ?></time>
                                    </div>
                                    <p><?php comment_text(); ?></p>
                                    <div class="comment-bar">
                                        <div class="respond">
                                            <a href="#">
                                            <i class="icon sprite-comment-balloon"></i>
                                            <span>
                                            <?php get_comment_reply_link() ?>
                                            </span>
                                            </a>
                                        </div>
                                        <div class="like">
                                            <a href="#"><i class="icon sprite-comment-like"></i>
                                            <span>10</span>
                                            </a>
                                        </div>
                                        <div class="dislike">
                                            <a href="#"><i class="icon sprite-comment-dislike"></i>
                                            <span>2</span>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- end comment text -->
                            </div><!-- end col 10 -->

                        </div>  <!-- end li row -->
                    </li>


        <?php

        } // end if comment is approved

    break;
    endswitch;
  } // end function custom_comment

endif; // end comprobación custom_comment()