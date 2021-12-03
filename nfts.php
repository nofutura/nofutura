<?php
/**
 * Template Name: NFTs
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>
    <!-- <section class="site-header"></section> -->


    <!-- Body -->
    <section class="post-content py-5"> 
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12">
                    <div class="container-fluid pb-2">
                        <nft-card contractAddress="0xd07dc4262bcdbf85190c01c996b4c06a461d2430" tokenId="582670"> </nft-card>
                    </div>
                    <nft-card contractAddress="0x495f947276749ce646f68ac8c248420045cb7b5e" tokenId="20070222675489814769074058163342384745713522806403567235836237819433149530113"> </nft-card> 
                </div>
            </div>   
        </div>
    </section>
<?php get_footer(); ?>


  
