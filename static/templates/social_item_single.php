<script type="text/html" id="wp_social_stream_social_item_single">
  <li data-bind="attr: { 'id': id, 'rel': rel, 'data-net': type, 'class': ' single-stream '+ type() + '-streams single-stream dcsns-li dcsns-' + type(), 'url': url }">
    <div data-bind="template: { name: 'wp_social_stream_social_item_single_' + type(), data: $data }"></div>
  </li>
</script>