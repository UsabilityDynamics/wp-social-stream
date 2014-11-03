<script type="text/html" id="wp_social_stream_social_item_filters">

  <section class="stream-filters clearfix">
    <div class="col-xs-12 col-md-7">
      <h2 class="artist-profile-description">Social Stream</h2>
    </div>

    <p>Filter stream:</p>
    <div class="col-xs-12 col-md-5 clearfix social-stream-filters" data-bind="foreach:$data" >
      <a data-bind="attr: {class: 'filter ' + $data, data-sel: 'sel-' + $data}">
        <span data-bind="attr: {class: 'icon-' + $data}">
        </span>
      </a>
    </div>
  </section>

</script>