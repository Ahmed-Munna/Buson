<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h4 class="comments-title">
            <?php
                printf( _nx( 'One thought', '%1$s  Comments ', get_comments_number(), 'comments title', 'buson' ),
                    number_format_i18n( get_comments_number() ) );
            ?>
        </h4>
 
        <div class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'short_ping'  => true,
                    'avatar_size' => 70,
                ) );
            ?>
        </div><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'buson' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'buson' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'buson' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'buson' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php 
    
    
    //Declare Vars
$comment_send = 'Send Message';
$comment_reply = 'Leave a Comment';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';
 
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<div class="d-flex"><div class="col-sm-6" style="margin-left:-15px;"><div class="form-group"><br /><input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></div></div>',
        //Email Field
        'email' => '<div class="col-sm-6" style="margin-right:-15px;"><div class="form-group"><br /><input id="email" class="form-control" name="email" aria-required="true" placeholder="' . $comment_email .'"></input></div></div></div>',
        //URL Field
        'url' => '<div class="w-100"><div class="form-group"><br /><input id="url" class="form-control" name="url" aria-required="true" placeholder="' . $comment_url .'"></input></div></div>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" class="form-control w-100" name="comment" aria-required="true" cols="30" rows="9" placeholder="' . $comment_body .'"></textarea></p>',
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
    'class_submit' => __('button button-contactForm btn_1 boxed-btn'),
);
comment_form( $comments_args );
    
    
    
    ?>
 
</div><!-- #comments -->