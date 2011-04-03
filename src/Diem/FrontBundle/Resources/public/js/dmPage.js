(function($) {

$.widget('ui.dmPage', {

  _init : function()
  {
//alert('haho page');
    this.initialize();
  },

  initialize: function()
  {
    //this.$areas = $('.dm_area', this.element);
    this.$areas = $('.dm_zone', this.element);

    this.$areas.dmArea();
  },

  getAreas: function()
  {
    //return this.$areas;
  }



});

})(jQuery);