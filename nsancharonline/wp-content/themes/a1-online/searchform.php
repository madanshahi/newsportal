<form  method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( '...खोज्नुहोस &hellip;', 'sobizpress' ); ?>" />
  <button class="s-btn" type="submit"><i class="fa fa-search"></i></button>
</form>
<style>
.form-control {
    text-align: center;
}
.form-control {
    text-align: left;
    padding-left: 11px;
    font-size: 18px;
    box-shadow: none;
}
.s-btn {
    background: #6f6f6f;
    position: absolute;
    top: 4px;
    right: 0;
    border: none;
    padding: 5px 20px;
    color: #fff;
    font-size: 17px;
}
</style>
