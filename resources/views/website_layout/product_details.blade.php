<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          <h2>Category</h2>
          @include('website_layout.product_category_brand')


          <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
               <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
               <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
          </div><!--/price-range-->

          <div class="shipping text-center"><!--shipping-->
            <img src="../images/home/shipping.jpg" alt="" />
          </div><!--/shipping-->

        </div>
      </div>


      <div class="col-sm-9 padding-right">
        @yield('Feature_products')
        @yield('Category_tab')

        @include('website_layout.Recomended_item')


      </div>
    </div>
  </div>
</section>
