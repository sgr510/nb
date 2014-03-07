    <div class="block_outer clearfix">
        <div id="recommend_area">
<!--{if 0}-->
            <h2><img src="<!--{$smarty.const.PLUGIN_HTML_URLPATH}-->TowerRecommend/tit_bloc_tower_recommend.jpg" alt="Tower Recommend" class="title_icon" /></h2>
<!--{/if}-->
            <h2>他の就活情報を見る</h2>
            <div class="block_body clearfix">
                <!--{foreach from=$arrProducts item=arrProduct name="tower_recommend_products"}-->
                    <div class="product_item clearfix">
<!--{if 0}-->
                        <div class="productImage">
                            <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                                <img src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->&amp;width=80&amp;height=80" alt="<!--{$arrProduct.name|h}-->" />
                            </a>
                        </div>
<!--{/if}-->
                        <div class="productContents">
                            <h3>
<!--{if 0}-->
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
<!--{/if}-->
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|replace:"の通過したES（エントリーシート）":"のES"}--></a>
                            </h3>
<!--{if 0}-->
                            <p class="sale_price">
                                <!--{$smarty.const.SALE_PRICE_TITLE}-->(税込)： <span class="price"><!--{$arrProduct.price02_min_inctax|number_format}--> 円</span>
                            </p>
<!--{/if}-->
                            <p class="mini comment"><!--{$arrProduct.comment|h|nl2br}--></p>
                        </div>
                    </div>
                    <!--{if $smarty.foreach.tower_recommend_products.iteration % 2 === 0}-->
                        <div class="clear"></div>
                    <!--{/if}-->
                <!--{/foreach}-->
            </div>
        </div>
    </div>

