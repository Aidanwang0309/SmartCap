<?php
/**
 *	Template name: Wall
 *
 *	The template for displaying Custom Page Template: No Sidebar.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section id="blog">
                    <?php
                    $id=34;
                    $post = get_post($id);
                    $content = apply_filters('the_content', $post->post_content);
                    echo $content;
                    ?>
                </section><!--/#blog-->
            </div><!--/.col-sm-12-->
        </div><!--/.row-->
    </div><!--/.container-->
<?php get_footer(); ?>